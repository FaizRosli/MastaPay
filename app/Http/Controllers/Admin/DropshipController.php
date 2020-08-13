<?php

namespace MastaPay\Http\Controllers\Admin;

use Illuminate\Http\Request;
use MastaPay\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class DropshipController extends Controller
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
        $data_user = \MastaPay\User::find($id);
        // dd(url("/Dropship/{$id}/Register"));
        return view('Admin.Dropship.index', [ 'data_user' => $data_user,
                                              'register_url' => url("/Dropship/{$id}/Register"),
                                            ]);
    }
//Rule::unique('dropship')->ignore($dropship_id)
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $dropship_id = DB::table('dropship')->where('email', $request->email)->value('id');

        if ($dropship_id == null)
        {
            $validate = request()->validate([
                'email' => ['required','min:3','max:191','unique:dropship'],
                'full_name' => ['required','min:3','max:191'],
                'password' => ['required','min:8','max:191'],
                'phone' => ['required','min:3','max:40'],
                'gender' => ['required'],
                'bank_name' => ['required'],
                'bank_acc_number' => ['required','min:3','max:20'],
                'bank_acc_holder' => ['required','min:3','max:191'],
                ]);
                
            $id = Auth()->user()->id;    
            $data_dropship = \MastaPay\model\Dropship::create($request->all());   
            $data_user =  \MastaPay\User::find($id);
            $data_user->Dropship()->attach($data_dropship);
    
            return redirect('/Admin/Dropship/');

        }
        else
        {
            $id = Auth()->user()->id;  
            $data_user =  \MastaPay\User::find($id);
            foreach($data_user->dropship as $dropship)
            {
                if($dropship->email == $request->email )
                {
                     
                     $validate = request()->validate([
                        'email' => ['required','min:3','max:191','unique:dropship'],
                     ]);
                }
                
            }

            $validate = request()->validate([
                'email' => ['required','min:3','max:191',Rule::unique('dropship')->ignore($dropship_id)],
                'full_name' => ['required','min:3','max:191'],
                'password' => ['required','min:8','max:191'],
                'phone' => ['required','min:3','max:40'],
                'gender' => ['required'],
                'bank_name' => ['required'],
                'bank_acc_number' => ['required','min:3','max:20'],
                'bank_acc_holder' => ['required','min:3','max:191'],
                ]);
                
            $id = Auth()->user()->id;    
            $data_dropship = \MastaPay\model\Dropship::find($dropship_id);   
            $data_user =  \MastaPay\User::find($id);
            $data_user->Dropship()->attach($data_dropship);
    
            return redirect('/Admin/Dropship/');

        }
       
        

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
        return view('Admin.Dropship.Add');
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
        $data_dropship = \MastaPay\model\Dropship::find($id);
        return view('/Admin/Dropship/Edit',['data_dropship' => $data_dropship]);
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
        $data_dropship = \MastaPay\model\Dropship::find($id);
        $validate = request()->validate([
            'email' => [],
            'full_name' => ['required','min:3','max:191'],
            'password' => [],
            'phone' => ['required','min:3','max:40'],
            'gender' => ['required'],
            'bank_name' => ['required'],
            'bank_acc_number' => ['required','min:3','max:20'],
            'bank_acc_holder' => ['required','min:3','max:191'],
            ]);
        $data_dropship->update($request->all());
        return redirect('/Admin/Dropship');
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
        $user_id = Auth()->user()->id; 
        $data_dropship = \MastaPay\model\Dropship::find($id);
        $data_user =  \MastaPay\User::find($user_id);
        $data_user->Dropship()->detach($data_dropship);
        //$data_dropship->delete();
        
        return redirect('/Admin/Dropship');
    }

    
}
