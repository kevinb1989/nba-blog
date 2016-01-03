<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model
{
    protected $fillable = ['title', 'body', 'published_at', 'user_id'];
    protected $guarded = ['id'];

    public function setPublishedAtAttribute($value){
    	$this -> attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $value);
    }

    public function user(){
    	return $this -> belongsTo('App\User');
    }

    public function tags(){
    	return $this -> belongsToMany('App\Tag') -> withTimestamps();
    }

    public function getTagListAttribute(){
        return $this->tags->lists('id');
    }
}
