<?php

namespace MastaPay\model;

use Illuminate\Database\Eloquent\Model;

class user_dropship extends Model
{
    //
    protected $table ='user_dropship';

    protected $fillable=[
                             'user_id',
                             'dropship_id',
                            ];
}
