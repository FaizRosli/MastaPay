<?php

namespace MastaPay\model;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    //
    
        protected $table ='customer';
        protected $fillable=['email',
                             'full_name',
                             'password',
                             'phone',
                             'gender',
                            ];
    
                             //all database column in dbase
    
                             
    
        
    
}
