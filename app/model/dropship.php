<?php

namespace MastaPay\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use MastaPay\Notifications\DropshipResetPasswordNotification;

class Dropship extends Authenticatable
{
   
    use Notifiable;
    
        protected $table ='dropship';
        protected $fillable=['email',
                             'full_name',
                             'password',
                             'phone',
                             'gender',
                             'bank_name', //maybank,cimb,rhb
                             'bank_acc_holder',//ali bin abu
                             'bank_acc_number',// 12334334
                             'user_id',
                             'dropship_id',
                            ];
        public function sendPasswordResetNotification($token)
        {
            $this->notify(new DropshipResetPasswordNotification($token));
        }

        public function User()
        {
            return $this->belongsToMany('MastaPay\User', 'user_dropship');
            
        }
                          
        
    }
