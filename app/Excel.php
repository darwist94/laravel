<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Excel extends Model
{
    protected $fillable = [
        'titulo', 'descripcion', 'file',
    ];

    public function scopeTitle($query, $title)
    {
    	if($title)
    		return $query->where('titulo', 'LIKE', "%$title%");
    }

    public function scopeDescription($query, $description)
    {
    	if($description)
    		return $query->where('descripcion', 'LIKE', "%$description%");
    }
}
