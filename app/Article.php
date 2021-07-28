<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Article extends Model
{
    //
    protected $fillable = ['image', 'title', 'content', 'create_date', 'author', 'public', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags() :BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }
}