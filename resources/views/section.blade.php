<section class="py-12 bg-gray-50 overflow-hidden md:py-20 lg:py-24">
    @foreach($testimonials as $testimonial)
        <x-showcase-testimonials:card :testimonial="$testimonial"/>
    @endforeach
</section>
