<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function profile()
    {
        $user = Auth()->user();
        if ($user) {
            return view('user.home', compact('user'));
        } else {
            return response()->json([
                'errors' => [
                    'root' => "Tidak bisa menemukan user"
                ]
            ]);
        }
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('image')) {
            $filename = $request->image->getClientOriginalName();
            $request->image->storeAs('images', $filename, 'public');
            Auth()->user()->update(['image' => $filename]);
        }
        return redirect()->back();
    }

    public function edit()
    {
        if (Auth::user()) {
            $user = User::find(Auth::user()->id);

            if ($user) {
                return view('user.edit')->withUser($user);
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            "id" => "required",
            'name' => "required",
            'email' => "required",
            'jenis_kelamin' => 'required',
            'tanggal_lahir'=>'required',
            'alamat'=>'required',
            'image'=>'required',
        ]);
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->jenis_kelamin = $request->jenis_kelamin;
        $user->tanggal_lahir = $request->tanggal_lahir;
        $user->alamat = $request->alamat;
        $user->image = $request->file('image')->store('public/profil');
        $user->save();


        $request->session()->flash("success", 'Profil Anda sudah berhasil di-edit!');
        return redirect('/user')->with("success", 'Profil Anda sudah berhasil di-edit!');
        }
}
