<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function profile($id)
    {
        $user = User::find($id);
        if ($user) {
            return response()->json([
                'id' => $id,
                'name' => $user->name,
                'email' => $user->email,

            ]);
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
                return view('user.home')->withUser($user);
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }

    public function update(Request $request)
    {
        $user = User::find(Auth::user()->id);

        if ($user) {
            $validate = null;
            if (Auth::user()->email == $request['email']) {
                $validate = $request->validate([
                    'name' => "required|min:2",
                    'email' => "required|email"
                ]);
            } else {
                $validate = $request->validate([
                    'name' => "required|min:2",
                    'email' => "required|email|unique:users"
                ]);
            }

            if ($validate) {
                $user->name = $request["name"];
                $user->email = $request["email"];

                $user->save();

                $request->session()->flash("success", 'Profil Anda sudah berhasil di-edit!');
                return redirect()->back();
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }
}
