<?php

namespace MastaPay\Http\Controllers\Admin;

use Illuminate\Http\Request;
use MastaPay\Http\Controllers\Controller;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // show info user/admin
        $id = auth()->user()->id;
        $data_user = \MastaPay\User::find($id);
        // $data_company = \Mastapay\Company::find($id);

        return view('Admin.Profile.Profile', ['data_profile' => $data_user]);
    }


    public function edit($id)
    {
        // edit info user/admin
        $data_user = \MastaPay\User::find($id); 
        return view('Admin/Profile/Edit',['data_user' => $data_user]);
    }


}