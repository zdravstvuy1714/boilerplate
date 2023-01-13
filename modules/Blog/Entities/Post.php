<?php

namespace Modules\Blog\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Blog\Database\Factories\PostFactory;

/**
 * Attributes.
 * @property mixed $attribute_name
 */
final class Post extends Model
{
    use HasFactory;

    protected $fillable = [];

    protected static function newFactory(): PostFactory
    {
        return PostFactory::new();
    }
}
