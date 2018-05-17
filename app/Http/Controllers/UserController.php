<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Order;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\ChangePassRequest;
use App\Http\Requests\UpdateUserRequest;
use DB;

class UserController extends Controller
{
    public function getRegister()
    {
        return view('PageStore.Register');
    }

    public function postRegister(RegisterRequest $request)
    {
        $data = $request->all();
        $data['password']  = bcrypt($request->password);
        $data['is_admin'] = 1;
        User::create($data);
        return back()->with('success','Bạn Đăng Kí Thành Công');

    }

    public function getLogin()
    {
        return view('PageStore.login');
    }

    public function postLogin(Request $request)
    {
        $data['email'] = $request->email;
        $data['password'] = $request->password;
        if(Auth::attempt($data)){
            return redirect('/');
        }
            return back()->with('error', 'Vui Lòng Nhập Tài Khoản');   
    }

    public function logout()
    {
        Auth::logOut();
        return redirect('/');
    }

    public function getChangePass()
    {
        return view('PageStore.changePass');
    }

    public function ChangePass(ChangePassRequest $request)
    {
        $user = User::where('email', $request->email)->first();
        $data['password'] = bcrypt($request->password_new);
        $user->update($data);
        return back()->with('success', 'Bạn đã thay đổi mật khẩu thành công');
    }

    public function forgetPass()
    {
        return view('auth.passwords.email');
    }
    public function getUpdate()
    {
        $user = Auth::user();
        return view('PageStore.updateUser', compact('user'));
    }

    public function Update(UpdateUserRequest $request)
    {
        $user = User::where('email', $request->email)->first();
        $data = $request->all();
        $user->update($data);
        return back()->with('success', 'Bạn đã thay đổi thông tin thành công');    
    }

    //admin
    public function listUser(Request $request){
        $query = User::query();
        if($request->has('search') && $request->search !=''){
            $search = $request->search;
            $query->where('name','like','%'.$request->search.'%')->orWhere('email','like',
                '%'.$request->search.'%');
        }
        if($request->has('date')){
            $date = $request->date;
            $query->where('created_at','like','%'.$request->date.'%');
        }
        $users = $query->paginate(4)->appends(request()->query());
        return view('PagesAdmin.users.list_user', compact('users', 'search','date'));
    }

    //add User
    public function getUser(){
        return view('PagesAdmin.users.add_user');
    }

    public function postUser(RegisterRequest $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($request->password);
        User::create($data);
        return back()->with('success', 'Bạn Thêm Thành Công');
    } 

    public function delete($id)
    {
        $user = User::findOrFail($id);
        if(count($user->orders)>0){
            return back()->with('success', 'Không thể xóa');
        }
        $user->delete();
        return back();
    }

    public function getEdit($id)
    {   
        $user= User::findOrFail($id);
        return view('PagesAdmin.users.edit_user', compact('user'));
    }

    public function postEdit($id)
    {
        $user = User::findOrFail($id);
        $data = Input::all();
        $user->update($data);
        return back()->with('edit','Bạn Sửa Thành Công');
    }

    public function orderUser($id)
    {
        $orders = Order::where('user_id', $id)->get();
        return view('PagesAdmin.users.order_user', compact('orders'));
    }
}
