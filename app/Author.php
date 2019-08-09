<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = 'authors';

    protected $hidden = [
    	'created_at', 'updated_at'
    ];

		public function books()
    {
        return $this->hasMany('App\Book', 'author_id');
    }

}
