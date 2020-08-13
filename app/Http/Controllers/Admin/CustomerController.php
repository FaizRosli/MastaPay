<?php

namespace MastaPay\Http\Controllers\Admin;

use Illuminate\Http\Request;
use MastaPay\Http\Controllers\Controller;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $id = auth()->user()->id;
        $data_customer = \MastaPay\model\customer::where('user_id',$id)->get();
        return view('Admin.Customer.index', ['data_customer' => $data_customer]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        //dd($request->all());
        \MastaPay\model\Customer::create($request->all());          // format (namespase_name,class_name::create/all/delete)
        return redirect('/Admin/Customer/');
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
        //
        $data_customer = \MastaPay\model\Customer::find($id);
        
        return view('/Admin/Customer/Edit',['data_customer' => $data_customer]);
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
        $data_customer = \MastaPay\model\Customer::find($id);
        $data_customer->update($request->all());
        return redirect('/Admin/Customer');
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
        $data_customer = \MastaPay\model\Customer::find($id);
        $data_customer->delete();
        return redirect('/Admin/Customer');
    }
}
