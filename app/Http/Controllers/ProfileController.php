<?php

namespace App\Http\Controllers;

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
        // return view('update-profile')->with('user', auth()->user());
        // $user = Auth::user();
        // return view('users.edit', compact('user'));
        $user = Auth::user();
        return view('update-profile', compact('user'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function PUpdate()
     {
          $user = Auth::user();
          $profile = DB::table('profiles')
          ->where('user_id','=',$user->user_id)
          ->get();

          return view('update-profile',['users'=> $user , 'profiles' => $profile]);




       // dd($request);

     }


    public function update(Request $request)
    {
      // $user = auth()->user();
      // $user = User::findOrFail($user_id);
      // $user->email = $request->get('email');
      // $user->save();
      // return redirect('profile')->with('status', 'Profile updated!');
      // dd($request);
      $user = Auth::user();
      // $profile = DB::table('profiles')
      // ->where('user_id','=',$user->user_id)
      // ->get();

      if ($user) {
        $user->email= $request['email'];

        if($user->save()){
          $profile = DB::table('profiles')
          ->where('user_id','=',$user->user_id)
          ->update(['name' => $request->username ,'phone_number' => $request->phone , 'age' => $request->age, 'address' => $request->address ]);

          // $profile->name= $request['username'];

          // dd($profile->name);
        }
        // $profile->save();


        // $user->save();
      // if($profile){
      //   $profile->name= $request['username'];
      //   $profiles->save();
      // }
        // return Redirect('/profile')->with('success',"Successfully updated");

        return Redirect()->route('profile')->with('success',"Successfully updated");
      }else{
        return Redirect()->back();
      }

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
