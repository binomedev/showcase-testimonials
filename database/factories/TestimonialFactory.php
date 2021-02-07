<?php

namespace Binomedev\ShowcaseTestimonials\Database\Factories;

use Binomedev\ShowcaseTestimonials\Models\Testimonial;
use Illuminate\Database\Eloquent\Factories\Factory;


class TestimonialFactory extends Factory
{
    protected $model = Testimonial::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'company' => $this->faker->company,
            'content' => $this->faker->paragraph,
            'role' => $this->faker->jobTitle,
            'logo' => $this->faker->imageUrl(),
            'profile_picture' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixqx=Qo9m0pTzPC&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80',
            'url' => $this->faker->url,
        ];
    }
}

