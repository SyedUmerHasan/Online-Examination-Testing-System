<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Notifications\Subscription;
use Illuminate\Notifications\Notifiable;
use App\User;

class AdminController extends Controller
{
    use Notifiable;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('users')->count();
        $mypagedata = array(
            'users' => $users
        );
        return view('admin.admin_pages.ad_home')->with('mypagedata', $mypagedata);
    }
    public function AdminLogin()
    {
        return view('admin');
    }
    public function signup()
    {
        return view('admin.admin_auth.ad_signup');
    }
    public function login()
    {
        return view('admin.admin_auth.ad_login');
    }
    public function checkpassword(Request $request)
    {
        // echo "I am umer";
        // die;
        // echo Input::get('currentpassword');
        // echo $request;
        // die;
        $data = $request->all();
        $current_password = $data['currentpassword'];
        $check_password = User::where(['id' => '1'])->first();
        if(Hash::check($current_password, $check_password->password)){
            echo 'true';
            die;
        }
        else{
            echo 'false';
            die;
        }



    }
    public function updatepassword(Request $request)
    {
        if($request->isMethod('post')){
            // Get Method
            $data = $request->all();
            $checkpassword = User::where(['email' => Auth::user()->email])->first();
            $currentpassword = $data['currentpassword'];
            if (Hash::check($currentpassword, $checkpassword->password)) {
                $password = bcrypt($data['password']);
                User::where('admin','1')->update(['password'=>$password]);
                $Notify = '<div class="alert alert-success mb-2" role="alert">
                                    <strong>
                                        You have succesfully changed your password
                                    </strong>
                                    </div> ';
                return redirect('/admin/settings')->with('Notify', $Notify);
            } else {
                $Notify = '<div class="alert alert-danger mb-2" role="alert">
                                    <strong>
                                    Please Enter correct password to change your password
                                    </strong>
                                    </div>';
                return redirect('/admin/settings')->with('Notify', $Notify);
            }
        }
        else{
            // Get Method
            return redirect('/admin/settings');
        }
    }
    public function updateusername(Request $request){
        if ($request->isMethod('post')) {
            // POST Method
            $data = $request->all();
            $checkusername = User::where(['email' => Auth::user()->email])->first();
            $currentusername = $data['currentusername'];
            User::where('admin', '1')->update(['name' => $currentusername]);
            $Notify = '<div class="alert alert-success mb-2" role="alert">
                                <strong>
                                    You have succesfully changed your Username to '.$currentusername.'
                                </strong>
                                </div> ';
            return redirect('/admin/settings')->with('Notify', $Notify);
        } else {
            // Get Method
            return redirect('/admin/settings');
        }
    }
    public function settings() {
        $users = DB::select('select * from users');
        $mypagedata = array(
            'users' =>$users
        );
        return view('admin.admin_pages.ad_settings');
    }
    
    
    
}
