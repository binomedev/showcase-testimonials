<?php

namespace Binomedev\ShowcaseTestimonials;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Binomedev\ShowcaseTestimonials\ShowcaseTestimonials
 */
class ShowcaseTestimonialsFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'showcase-testimonials';
    }
}
