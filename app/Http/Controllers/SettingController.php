<?php

namespace App\Http\Controllers;
use Session;
use App\Setting;
use Illuminate\Http\Request;


class SettingController extends Controller
{
    public function index(){
        return view('admin.settings')->with('settings', Setting::first());
    }

    public function update(){

        $this->validate(request(), [

         'site_name' => 'required',
         'contact_email' => 'required',
         'contact_number' => 'required'

        ]);
        $settings = Setting::first();


        $settings->site_name = request()->site_name;
        $settings->contact_email = request()->contact_email;
        $settings->contact_number = request()->contact_number;
        $settings->save();
        Session::flash('success', 'Settings Updated');
       return redirect('/admin/home');
    }
}
