<?php

namespace MastaPay\Http\Controllers\System;

use Illuminate\Http\Request;
use MastaPay\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth_system');
    }
    public function index()
    {
        $data_user= \MastaPay\User::all();
        return view('System.home', ['data_user' => $data_user]);
    }

    public function showEditForm($id)
    {
        $data_user= \MastaPay\User::find($id);
        return view('System.edit',['data_user' => $data_user]);
    }

    public function update(Request $request,$id)
    {
        $data_user= \MastaPay\User::find($id);
    
        if($request->package_type == "Basic")
        {
            $data_user->renew_date = NULL;
            $data_user->expired_date = NULL;
            $data_user->period_subscription = NULL;
            $data_user->package_type = $request->package_type;
            $data_user->subscription_status ='Active';
            $data_user->save();

            return redirect('System/Home');
        }

        $data_user->renew_date = date('d/M/Y',strtotime($request->renew_date));
        $data_user->expired_date = date('d/M/Y',strtotime($request->period_subscription,strtotime(str_replace('/', '-', $request->renew_date))));
        $data_user->period_subscription = $request->period_subscription;
        $data_user->package_type = $request->package_type;
        $data_user->subscription_status ='Active';
        $data_user->save();

        return redirect('System/Home');
    }

    public function UpdateExpiredUser()
    {
        //$data_user= \MastaPay\User::where('subscription_status','Active')->get();
        $data_user= \MastaPay\User::all();
        foreach ($data_user as $user)
        {
            if ($user->package_type != "Basic")
            {
                //$renew_date = strtotime(str_replace('/', '-', $user->renew_date ));
                $expired_date = strtotime(str_replace('/', '-', $user->expired_date)); 
                $today_date = strtotime(str_replace('/', '-', 'now' ));

                if ($expired_date >= $today_date) //$renew_date
                {
                    $user->subscription_status ='Active';
                    $user->save();
                }
                else 
                {
                    $user->subscription_status ='Expired';
                    $user->save();   
                }
            }            
        }
        return redirect('System/Home');
    }
    
}
