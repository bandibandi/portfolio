<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'content',
        'featured_image',
        'published_at',
    ];

    protected function casts(): array
    {
        return [
            'published_at' => 'datetime',
        ];
    }

    public function scopePublished($query)
    {
        return $query->whereNotNull('published_at')->where('published_at', '<=', now());
    }

    public function scopeLatestFirst($query)
    {
        return $query->orderByDesc('published_at');
    }

    public function isPublished(): bool
    {
        return $this->published_at && $this->published_at->lte(now());
    }

    public function getExcerpt(int $chars = 160): string
    {
        return Str::limit(strip_tags($this->content), $chars);
    }
}
