<?php


namespace Binomedev\ShowcaseTestimonials\View\Components;


use Binomedev\ShowcaseTestimonials\Models\Testimonial;
use Illuminate\View\Component;

class Card extends Component
{
    /**
     * @var Testimonial
     */
    public $testimonial;

    /**
     * Card constructor.
     * @param Testimonial $testimonial
     */
    public function __construct(Testimonial $testimonial)
    {
        $this->testimonial = $testimonial;
    }


    public function render()
    {
        return view('showcase-testimonials::card');
    }
}
