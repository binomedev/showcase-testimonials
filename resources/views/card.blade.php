<div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    {{ $testimonial->getImageUrl('logo') }}

    <div class="relative">
        <img class="mx-auto h-8" src="https://tailwindui.com/img/logos/workcation-logo-indigo-600-mark-gray-800-and-indigo-600-text.svg" alt="Workcation">
        <blockquote class="mt-10">
            <div class="max-w-3xl mx-auto text-center text-2xl leading-9 font-medium text-gray-900">
                <p>
                    &ldquo;{{ $testimonial->content }}&rdquo;
                </p>
            </div>
            <footer class="mt-8">
                <div class="md:flex md:items-center md:justify-center">
                    <div class="md:flex-shrink-0">
                    <img class="mx-auto h-10 w-10 rounded-full" src="{{ $testimonial->getImageUrl('profile_picture') }}" alt="Profile picture of {{ $testimonial->name }}">

                    </div>
                    <div class="mt-3 text-center md:mt-0 md:ml-4 md:flex md:items-center">
                        <div class="text-base font-medium text-gray-900">{{ $testimonial->name }}</div>

                        <svg class="hidden md:block mx-1 h-5 w-5 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M11 0h3L9 20H6l5-20z" />
                        </svg>

                        <div class="text-base font-medium text-gray-500">
                            @if($testimonial->role)
                            {{ $testimonial->role }},
                            @endif
                            {{ $testimonial->company ?? '' }}
                        </div>
                    </div>
                </div>
            </footer>
        </blockquote>
    </div>
</div>
