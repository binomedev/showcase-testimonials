<?php


namespace Binomedev\ShowcaseTestimonials\View\Components;

use Binomedev\ShowcaseTestimonials\Models\Testimonial;
use Illuminate\View\Component;

class Section extends Component
{
    public function render()
    {
        $testimonials = Testimonial::query()->get();

        return view('showcase-testimonials::section', compact('testimonials'));
    }
}
