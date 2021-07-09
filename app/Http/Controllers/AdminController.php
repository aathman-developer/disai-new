<?php
namespace App\Http\Controllers;
use App\Http\Requests ;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Redirect,Response;
use Mail;
use View;
use File;
use Image;
use App\Models\AdminUser;
use App\Models\Blogs;
use App\Models\MsmeForm;
use App\Models\Categoryform;
class AdminController extends Controller
{
	public function login()
	{
		if(!session('admin_loggedin'))
        {
        	return View::make('admin/login');		
        }
        else
        {
			return redirect('admin/contact_data');        	
        }
		
	}
	public function logout()
	{
        $userdata['admin_loggedin']=false;
		session($userdata);
		return redirect('admin/contact_data');		
	}
	// public function dashboard()
	// {
	// 	return View::make('admin/dashboard');
	// }
    public function check_login(Request $request)
	{	
		$get_users=AdminUser::where('email',$request->email)->get();
        if($get_users->count())
        {
            if (Hash::check($request->password, $get_users->first()->password)) {
                $userdata['admin_loggedin']=true;
				session($userdata);
				echo  "success";
            }
            else
            {
                echo "fail";
            }
        }
        else
        {
        	$new_admin = new AdminUser();
        	$new_admin->username="admin";
        	$new_admin->email="admin@livewell.com";
        	$new_admin->password=bcrypt("livewell");
        	$new_admin->status="Active";
        	$new_admin->save();
        	$userdata['admin_loggedin']=true;
			session($new_admin);
			echo  "success";
        }
	}
/*msme*/
    public function view_msme()
	{
		$data['msme']=MsmeForm::get();		
		return View::make('admin/msme/view_msme',$data);
	}
 	/*msme*/

     public function image_upload(){
	    return View::make('admin/image/gallerylist');
	 }
	 public function category(){
		 $category = Categoryform::all();
		return View::make('admin/category/add_category',compact('category'));			    
	 }
	 public function add_category(Request $request){
		 return View::make('admin/category/create-category');
	        // $new_form = new Categoryform();
			// $new_form->name = $request->name;
			// $new_form->save();
			// return Redirect::to('admin/create-gallery');	
	 }
	 public function post_category(Request $request){
		   $new_form = new Categoryform();
			$new_form->name = $request->name;
			$new_form->save();
			return Redirect::to('admin/category');	
	 }
}