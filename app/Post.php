<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
    protected $guarded = [];

    public function comments()
    {
    	return $this->hasMany(Comment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function addComment($body)
    {
    	$user_id = 1;
    	$this->comments()->create(compact('body', 'user_id'));
    }

    public function scopeFilter($query, $filters)
    {
        if ( $month = $filters['month'] ) {
            $query->whereMonth('created_at', Carbon::parse($month)->month);
        }

        if ( $year = $filters['year'] ) {
            $query->whereYear('created_at', Carbon::parse($year)->year);
        }
    }

    public static function archives()
    {
        return static::selectRaw('year(created_at) as year, monthname(created_at) as month, count(*) as published')
            ->groupBy('year', 'month')
            ->orderByRaw('min(created_at) desc')
            ->get()
            ->toArray();
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
