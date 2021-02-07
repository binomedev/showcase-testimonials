<?php

namespace Binomedev\ShowcaseTestimonials\Commands;

use Illuminate\Console\Command;

class ShowcaseTestimonialsCommand extends Command
{
    public $signature = 'showcase-testimonials';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
