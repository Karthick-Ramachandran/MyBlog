<?php

namespace App\Http\Controllers;
use Session;
use App\User;
use Auth;
use App\Profile;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function  __construct(){
        return $this->middleware('admin');
        }
        
    public function index()
    {
       return view('user.index')->with('users', User::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
            return view('user.create');
     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
        ]);

        $user = User::create([
            'name' => $request->name,
            'password' => bcrypt('123456'),
            'email' => $request->email,
            'admin' => 1
        ]);

        $profile = Profile::create([
            'user_id' => $user->id,
            'avatar' => 'upload/avatar/my.jpg',
            'about' => 'Blogger',
            
        ]);
Session::flash('success', 'User Created');
return redirect()->back();

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
    public function data(){
       return view('user.profile')->with('user', Auth::user());
    }
    public function edited(Request $request){


    }




    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
   */
}
