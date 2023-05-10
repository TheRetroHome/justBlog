<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = ['subject','body','article_id'];
    public $dates = ['published_at'];
    public function article(){
        return $this->belongsTo(Article::class);
    }
    public function getPublishedAtAttribute($value){
        return Carbon::parse($value);
    }
    public function createdAtForHumans(){
        return $this->published_at->diffForHumans();
    }
}
