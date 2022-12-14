<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public $timestamps= false;
    protected $fillable =[
        'title',
        'img',
        'short_desc',
        'desc',
        'post_category_id'
    ];
//    protected $table='posts';


}
