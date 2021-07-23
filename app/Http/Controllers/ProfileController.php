<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
         // $user = Auth::profile();
        $user = Auth::user();

        $profile = DB::table('profiles')
        ->where('user_id','=',$user->user_id)
        ->get();
        // $userz = DB::table('users')->get();
        // dd($profile);
        // dd($user->user_id);

        // return view('profile',['users'=> $user , 'profiles'=> $profile]);
        return view('profile',['users'=> $user, 'profiles'=> $profile]);
        // return view('profile',['profiles' => $profile]);
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


     public function profile_update($user_id)
     {
          $user = $user_id;
          $email = DB::table('users')
          ->select('email')
          ->where('user_id','=',$user)
          ->get();


          $profile = DB::table('profiles')
          ->where('user_id','=',$user)
          ->get();


          return view('update-profile',['users'=> $user , 'profiles' => $profile , 'email' => $email]);


     }


    public function update(Request $request, $id)

    {
      $validated = $request->validate([
        'name' => 'required|string|max:255',
        'address' => 'required|string|max:255',
        'phone_number' => 'required|string|max:20',
        'age' => 'required|string|max:3'
      ]);


        $profile = DB::table('profiles')
        ->where('user_id','=',$id)
        ->update(['name' => $request->name , 'age' => $request->age, 'phone_number' => $request->phone_number, 'address' => $request->address]);

        return Redirect()->route('profile')->with('success',"Successfully updated");

    }






    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
