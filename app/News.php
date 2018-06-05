<?php

namespace App;
namespace App\Http\Models;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    protected $table = 'news';
    #protected $primaryKey = 'id';
    public $timestamps = true;



    protected $fillable = [

        'id','title', 'image', 'state', 
    ];

    protected $hidden = [

        'created_at','updated_at'

    ];
}