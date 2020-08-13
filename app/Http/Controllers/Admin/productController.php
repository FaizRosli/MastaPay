<?php

namespace MastaPay\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Validator;
use MastaPay\Http\Controllers\Controller;

class productController extends Controller
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
        $data_product = \MastaPay\model\product::where('user_id',$id)->get();
        // $data_affiliate = \MastaPay\model\Affiliate::all();
        return view('Admin.product.index', ['data_product' => $data_product,
                                                'page_url' => url("/ProductPage/{$id}")]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request )
    {
        //
        //dd($request->all());
        $request->request->add(['user_id'=>auth()->user()->id]);
        $validate = request()->validate([
            'product_id' => ['required','min:3','max:191'],
            'product_name' => ['required','min:3','max:191'],
            'product_detail' => [''],
            'product_image' => [''],
            'product_price' => ['required'],
            'product_category' => ['required'],
            'sku' => [''],
            'weight' => [''],
            'inventory' => ['required'],
            'price_stokist' => ['required'],
            'moq_stokist' => ['required'],
            'price_agent' => ['required'],
            'moq_agent' => ['required'],
            'commission_affiliate' => ['required'],
            'commission_dropship' => ['required'],
            ]);

            $data_product=\MastaPay\model\product::create($request->all());
            
            if($request->hasFile('product_image'))
                    {
                        $extension = $request->file('product_image')->getClientOriginalExtension();
                        $new_image_name = $data_product->id.".".$extension; // 16.jgp , 13.png
                        $request->file('product_image')->move('admin/assets/product/',$new_image_name); 
                        $data_product->product_image = $new_image_name;
                        $data_product->save();
                        
                    }

                  // format (namespase_name,class_name::create/all/delete)
        return redirect('/Admin/product/');
        
        

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
        return view('/Admin/product/add');
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
        $data_product = \MastaPay\model\product::find($id);
        
        return view('/Admin/product/Edit',['data_product' => $data_product]);
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
        $data_product = \MastaPay\model\product::find($id);
        $validate = request()->validate([
            'product_id' => [''],
            'product_name' => ['required','min:3','max:191'],
            'product_detail' => [''],
            'product_image' => [''],
            'product_price' => ['required'],
            'product_category' => ['required'],
            'sku' => [''],
            'weight' => [''],
            'inventory' => ['required'],
            'price_stokist' => ['required'],
            'moq_stokist' => ['required'],
            'price_agent' => ['required'],
            'moq_agent' => ['required'],
            'commission_affiliate' => ['required'],
            'commission_dropship' => ['required'],
            ]);
        $data_product->update($request->all());
        return redirect('/Admin/product');

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
        $data_product = \MastaPay\model\product::find($id);
        $data_product->delete();
        return redirect('/Admin/product');
    }
}
