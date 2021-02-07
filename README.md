# Showcase Testimonials

[![Latest Version on Packagist](https://img.shields.io/packagist/v/binomdev/showcase-testimonials.svg?style=flat-square)](https://packagist.org/packages/binomdev/showcase-testimonials)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/binomdev/showcase-testimonials/run-tests?label=tests)](https://github.com/binomdev/showcase-testimonials/actions?query=workflow%3ATests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/binomdev/showcase-testimonials.svg?style=flat-square)](https://packagist.org/packages/binomdev/showcase-testimonials)


A basic package to manage and showcase testimonials.


## Installation

You can install the package via composer:

```bash
composer require binomdev/showcase-testimonials
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Binomdev\ShowcaseTestimonials\ShowcaseTestimonialsServiceProvider" --tag="showcase-testimonials-migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Binomdev\ShowcaseTestimonials\ShowcaseTestimonialsServiceProvider" --tag="showcase-testimonials-config"
```

This is the contents of the published config file:

```php
return [
   'disk' => 'public',
    /**
     * The placeholder must match a field name within the model
     */
    'placeholder' => [
        'logo' => 'images/testimonial1.jpg',
        'person_picture' => 'images/testimonial1.jpg',
    ]
];
```

## Usage

Section with multiple cards:

```html
<x-showcase-testimonials:section />
```

Single Card:

```html
<x-showcase-testimonials:card :testimonial="$testimonial" />
```


## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Codrin Axinte](https://github.com/codrin-axinte)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
