<?php

namespace MastaPay\model;

use Illuminate\Database\Eloquent\Model;

class affiliate extends Model
{
    protected $table ='affiliate';
    protected $fillable=['email',
                         'full_name',
                         'password',
                         'phone',
                         'gender',
                         'bank_name', //maybank,cimb,rhb
                         'bank_acc_holder',//ali bin abu
                         'bank_acc_number',// 12334334
                         'affiliate_url',
                        'user_id'];

                         //all database column in dbase

                         

    
}
