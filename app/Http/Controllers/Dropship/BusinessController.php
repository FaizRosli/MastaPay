<?php

namespace MastaPay\Http\Controllers\Dropship;

use Illuminate\Http\Request;
use MastaPay\Http\Controllers\Controller;

class BusinessController extends Controller
{
    //
    public function showList()
    {
        $id = Auth('dropship')->user()->id;
        $data_business = \MastaPay\model\dropship::find($id);
        
        return view('Dropship.list', ['data_business'=>$data_business]);
    }

    public function showAddBusinessForm()
    {
        return view('Dropship.addBusiness');
         
    }

    public function addBusiness(Request $request)
    {
        
        $exploded_link = explode("/",$request->link);
        $user_id = $exploded_link[4];
        $dropship_id = Auth('dropship')->user()->id;

        $data_business = $data_business = \MastaPay\User::find($user_id);
        $data_dropship = \MastaPay\model\dropship::find($dropship_id);

        $data_business->Dropship()->sync($data_dropship);

        return redirect('/Dropship/ListBusiness');
    }
}
