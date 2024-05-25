<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('users') ->get();
        return view('Admin.User.list')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.User.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->password == $request->re_password) {
            DB::table('users')->insert([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password
            ]);
            return Redirect::route('user.index')->with('msg','Them moi thanh cong!');
        }else{
            return Redirect::route('user.create')->with('err','Nhap lai mat khau khong dung!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = DB::table('users')->where('id', $id)->get();
        return view('Admin.User.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if($request->password == $request->re_password) {
            DB::table('users')->where('id',$id)->update([
                'name'=>$request->name,
                'password'=> Hash::make($request->passpord)
            ]);
            return Redirect::route('user.index')->with('msg','Them moi thanh cong!');
        }else{
            return Redirect::route('user.create')->with('err','Nhap lai mat khau khong dung!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('users')->delete($id);
        return Redirect::route('user.index')->with('msg', 'Xoa thanh cong');
    }
}
