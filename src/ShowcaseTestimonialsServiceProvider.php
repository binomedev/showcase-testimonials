<?php

namespace Binomedev\ShowcaseTestimonials;

use Binomedev\ShowcaseTestimonials\Nova\Testimonial;
use Illuminate\Support\Facades\Blade;
use Laravel\Nova\Nova;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ShowcaseTestimonialsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('showcase-testimonials')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_showcase_testimonials_table')
        ;
    }

    public function packageBooted()
    {
        Blade::componentNamespace(
            'Binomedev\\ShowcaseTestimonials\\View\\Components',
            $this->package->shortName()
        );

        Nova::resources([
            Testimonial::class,
        ]);
    }
}
