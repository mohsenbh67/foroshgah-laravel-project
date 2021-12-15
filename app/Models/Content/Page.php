<?php

namespace App\Models\Content;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Page extends Model
{
    use HasFactory, SoftDeletes, Sluggable;

    protected $fillable =['title','body', 'slug', 'status', 'tags'];



    public function sluggable(): array
   {

        return [
            'slug' => [
                'source' => 'title'
            ]
        ];

    }
}
