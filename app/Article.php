<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    protected $fillable = ['image','title','description','release_date','tags'];
    // @return \Illuminate\Database\Eloquent\Relations\BelongsTo

     public function categories()
    {
        return $this->belongsToMany('App\Categories');
    }
}

