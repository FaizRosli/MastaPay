<?php

namespace MastaPay\Http\Controllers\Admin;

use Illuminate\Http\Request;
use MastaPay\Http\Controllers\Controller;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexStokist ($id)
    {
        //$id = auth()->user()->id;
        $data_product = \MastaPay\model\product::where('user_id',$id)->get();
        $data_user = \Mastapay\User::all();
        return view('Pages.index', ['data_product' => $data_product,
                                            'data_user' => $id]);
    }

    public function indexDetail ($id,$product_id)
    {
        //$id = auth()->user()->id;
        $data_product = \MastaPay\model\product::where('user_id',$id)->get();
        // $product = $this->user->products()->find($id);
        return view('Pages.detail',['data_product' => $data_product,
                                    'data_user' => $id]);
    }

    public function indexInvoice ($id,$product_id)
    {
        //dd($product_id);
        //$id = auth()->user()->id;
        $data_product = \MastaPay\model\product::where('user_id',$id)->get();
        return view('Pages.invoice',['data_product' => $data_product,
                                        'data_user' => $id]);
    }

    public function indexCart ($id,$product_id)
    {
        $data_product = \MastaPay\model\product::where('user_id',$id)->get();
        return view('Pages.cart',['data_product' => $data_product,
                                    'data_user' => $id]);
    }

    public function indexCheckout ($id,$product_id)
    {
        $data_product = \MastaPay\model\product::where('user_id',$id)->get();
        return view('Pages.checkout',['data_product' => $data_product,
                                    'data_user' => $id]);
    }
}
