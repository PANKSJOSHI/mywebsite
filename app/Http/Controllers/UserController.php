<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use \App\Project;
use \App\Book;
use DB;
use Auth;
use Image;
use redirect;
class UserController extends Controller
{


 
    
    public function create()
    	{
   			 $gender  = \App\Subject::all();
    		  return view('first-page',compact('gender'));
		}


    public function store(Request $request)
    {

    	request()->validate([

            'name'=>'required',
            'email'=>'required',
            'mno'=>'required|min:10 ',
            'username'=>'required',
            'password'=>['required', 'min:8', 'regex:/[a-z]/','regex:/[A-Z]/', 'regex:/[0-9]/',
                         'regex:/[!@#$%^&*]/'],
            'pincode'=>'required | min:6 | max:10',
            'categories'=>'required'
 
            ]);
             
       
        $project=new Project();
        $project->name=request('name');
        $project->mno=request('mno');
    	$project->username=request('username');
    	$project->password=request('password');
    	$project->pincode=request('pincode');
    	$project->categories=request('categories');
    	$project->email=request('email');
    	$project->save();
    	return redirect('/user-page');
    	//return redirect('/login');




    }

     public function home()
    	{
   			  $details  = \App\Project::all();
    		  return view('user-page',compact('details'));
		}



	  public function index()
       {
              $country_list = DB::table('countries')
               ->groupBy('country')
               ->get();


             return view('box')->with('country_list', $country_list);
       }

		public function fetch(Request $request)
    	{
     			$select = $request->get('select');
     			$value = $request->get('value');
     			$dependent = $request->get('dependent');
     			$data = DB::table('countries')
       			->where($select, $value)
       			 ->groupBy($dependent)
       			->get();
     			$output = '<option value="">Select '.ucfirst($dependent).'</option>';
     			foreach($data as $row)
     				{
      					$output .= '<option value="'.$row->$dependent.'">'.$row->$dependent.'</option>';
    				 }
     			echo $output;
    	}



    	public function delete($id)
             {
                  $del = Project::findOrFail($id);
                 
                   $del->delete();

                    return view('user-page');
		}




    public function check()
      {
         
          return view('front-page');
    }



    public function navs()
      {
          $details  = \App\Travel::all();
          return view('nav',compact('details'));
    }


    public function file(Request $request)
      {

   
    $article = new Book();

     if ($request->hasFile('bookcover')) {
        $image = $request->file('bookcover');
        $name = $image->getClientOriginalName();


        $destinationPath = public_path('/images');

        $imagePath = $destinationPath. "/".  $name;
       
        $image->move($destinationPath, $name);
        $article->image = $name;
        
      }

    
      $article->save();

     $img=\App\Book::all();
      return view('/my-page',compact('name'));
     }



     public function edit($id)
    {

          
          $project=Project::find($id);
           return view('/my-edit',compact('project'));
     } 



     public function update($id)
    {

        $project = Project::find($id);
       $project->name=request('name');
        $project->mno=request('mno');
      $project->username=request('username');
      $project->password=request('password');
      $project->pincode=request('pincode');
      $project->categories=request('categories');
      $project->email=request('email');
        $project->save();
       
        return redirect('/user-page');
    } 


     public function myjoin()
      {
          $users = DB::table('employees')
            ->join('customers', 'employees.id', '=', 'customers.c_id')
             ->select('e_name', 'employees.e_mno1', 'customers.c_mno2')
            ->get();
            
          return view('my-join',compact('users'));
    }



   public function mylog(Request $request)
      {

         $data=array(
            'email'=>$request->get('email'),
            'password'=>$request->get('password')
        );


        if(Auth::attempt($data))
        {
          $gender  = \App\Subject::all();
          return view('first-page',compact('gender'));
          
        }
        else
        {
              dd("hello");
            return view('my-login');
        }
               
     }

     public function first()
     {

      return view('my-login');
     }


public function logout(Request $request) {
  Auth::logout();
  return redirect('/my-login');
}


 }

	




    

