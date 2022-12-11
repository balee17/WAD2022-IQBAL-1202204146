<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function profile($id){


        $post = User::findOrFail($id);

        return view('profile.index',['title' => 'Profile'], [
                'post' => $post
        ]);
    }
    public function update(Request $request, $id){

        $validatedData = $request->validate([
            'name' => 'required|min:5|max:255',
            'no_hp'=> 'required|min:5|max:15',
            'password' =>'same:confirmPassword|required|min:5|max:255'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);


            $simpan = DB::table('users')->where('id','=',$request->id)->update($validatedData);
            if($simpan){
                echo "Profile berhasil Diupdate!!!";
                return redirect("/profile/$id")->with('success', 'Profile Berhasil Diupdate!!!');
            }else{
                return redirect("/profile/$id")->with('success', 'Profile Berhasil Diupdate!!!');
            }

    }
}