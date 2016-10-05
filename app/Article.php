<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title',
        'body',
        'published_at'
    ];

//$article = App\Article::create(['title' => 'New Article', 'body' => 'New Lorem Ipsum','published_at' => Carbon\Carbon::now()]);
// $findarticle = App\Article::find(1)

    public function setPublishedAtAttribute($date)
    {
        $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);
    }

    }
