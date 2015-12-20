<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model
{
    protected $fillable = ['title', 'body', 'published_at'];
    protected $guarded = ['id'];

    public function setPublishedAtAttribute($value){
    	$this -> attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $value);
    }
}
