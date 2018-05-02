<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ChangePassRequest;


class UserController extends Controller
{
	public function getRegister(){

      return view('PageStore.Register');
    }

    public function postRegister(RegisterRequest $request){
        $data = $request->all();
        $data['password']  = bcrypt($request->password);
        $data['is_admin'] = 1;
        User::create($data);

        return back()->with('success','Bạn Đăng Kí Thành Công');

    }

    public function getLogin(){
      return view('PageStore.login');
    }

    public function postLogin(Request $request){
        
        $data['email']=$request->email;
        $data['password']=$request->password;
        if(Auth::attempt($data)){
         return redirect('/');
        }else{
          return back()->with('success','Vui Lòng Nhập Tài Khoản');
        }
        
    }

    public function logout(){
        Auth::logOut();
        return back();
    }

    public function getChangePass(){
        return view('PageStore.changePass');
    }

    public function ChangePass(ChangePassRequest $request)
    {
         $user = User::where('email', $request->email)->first();
         $data['password'] = bcrypt($request->password_new);
         $user->update($data);
         return back()->with('success', 'Bạn đã thay đổi mật khẩu thành công');

    }
    public function getUpdate(){
        $user = Auth::user();
        return view('PageStore.updateUser',compact('user'));
    }

    public function Update(Request $request){
        echo $request->email;
        $user = User::where('email',$request->email)->first();
        $data = $request->all();
        $user->update($data);
        return back()->with('success', 'Bạn đã thay đổi thông tin thành công');;
        
    }
   
    
}
