<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Losts extends Model
{
    //
    protected $table = 'lostsandfounds';
    #protected $primaryKey = 'id';
    public $timestamps = true;



    protected $fillable = [

        'id','title', 'image', 'fulname','email', 'state', 
    ];

    protected $hidden = [

        'created_at','updated_at'

    ];
}
