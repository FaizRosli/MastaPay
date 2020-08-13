<?php

namespace MastaPay\Http\Controllers\Admin;

use Illuminate\Http\Request;
use MastaPay\Http\Controllers\Controller;

class AffiliateController extends Controller
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
        $data_affiliate = \MastaPay\model\Affiliate::where('user_id',$id)->get();
        // $data_affiliate = \MastaPay\model\Affiliate::all();
        return view('Admin.Affiliate.index', ['data_affiliate' => $data_affiliate]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request )
    {
        //dd($request->all());
        $request->request->add(['user_id'=>auth()->user()->id]);
        $validate = request()->validate([
                                        'email' => ['required','min:3','max:191'],
                                        'full_name' => ['required','min:3','max:191'],
                                        'password' => ['required','min:8','max:191'],
                                        'phone' => ['required','min:3','max:40'],
                                        'gender' => ['required'],
                                        'bank_name' => ['required'],
                                        'bank_acc_number' => ['required','min:3','max:20'],
                                        'bank_acc_holder' => ['required','min:3','max:191'],
                                        
                                        ]);


        $data = \MastaPay\model\Affiliate::create($request->all());  // format (namespase_name,class_name::create/all/delete)
        
        // dapatkan ID affiliate lepas insert ke table affilaite
        $data_affiliate = \MastaPay\model\Affiliate::find($data->id);
        $data_affiliate->affiliate_url = url("/affiliate/{$data->id}");   //create URL affiliate base pada ID affiliate yg baru di create
        $data_affiliate->save(); //save URL ke table affiliate, column 'affiliate_url'

        
        return redirect('/Admin/Affiliate/');
        
        

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
        return view('Admin.Affiliate.Add');
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
        $data_affiliate = \MastaPay\model\Affiliate::find($id);
       
        return view('/Admin/Affiliate/Edit',['data_affiliate' => $data_affiliate]);
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
        $data_affiliate = \MastaPay\model\Affiliate::find($id);
        $validate = request()->validate([
            'email' => [],
            'full_name' => ['required','min:3','max:191'],
            'password' => [],
            'phone' => ['required','min:3','max:40'],
            'gender' => ['required'],
            'bank_name' => ['required'],
            'bank_acc_number' => ['required','min:3','max:20'],
            'bank_acc_holder' => ['required','min:3','max:191'],
            'affiliate_url' => []
            ]);
        $data_affiliate->update($request->all());
        return redirect('/Admin/Affiliate');

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
        $data_affiliate = \MastaPay\model\Affiliate::find($id);
        $data_affiliate->delete();
        return redirect('/Admin/Affiliate');
    }
}
