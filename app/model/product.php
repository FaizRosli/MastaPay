<?php

namespace MastaPay\model;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    //
    protected $table ='product';
        protected $fillable=['product_id',
                             'product_name',
                             'product_price',
                             'product_detail', 
                             'product_image',
                             'product_category',
                             'sku',
                             'weight',
                             'inventory', //stock
                             'price_stokist',
                             'moq_stokist',
                             'price_agent',
                             'moq_agent',
                             'commission_affiliate',
                             'commission_dropship',
                             'product_link',
                             'user_id'];
                                 
                             //all database column in dbase
    


public function getproduct_image()
    {
        if(!$this->product_image)
        {
            return asset('admin/assets/product/default.jpg');
        }
        return asset('admin/assets/product/'.$this->product_image);
    }
}