<?php

namespace Binomedev\ShowcaseTestimonials\Models;

use Binomedev\ShowcaseTestimonials\Database\Factories\TestimonialFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'content',
        'logo',
        'url',
        'company',
        'role',
        'profile_picture',
        'meta',
    ];

    protected $casts = ['meta' => 'array'];

    protected static function newFactory()
    {
        return new TestimonialFactory();
    }

    /**
     * @param string $field
     * @return string
     */
    public function getImageUrl($field = 'logo'): string
    {
        // If the image field is empty then return the corresponding placeholder.
        if (empty($this->{$field})) {
            return asset(
                config("showcase-testimonials.placeholder.{$field}")
            );
        }

        // If the photo contains http then return it as it is,
        // Otherwise use the configured disk to return an url.
        return str_starts_with($this->{$field}, 'http')
            ? $this->{$field}
            : Storage::disk(config('showcase-testimonials.disk'))->url($this->{$field});
    }
}
