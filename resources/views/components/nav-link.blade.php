@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-orange-700 dark:border-orange-800 text-2xl font-medium leading-5 text-orange-100 dark:text-orange-100 focus:border-orange-300 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-xl hover:text-2xl font-medium leading-5 text-orange-300 dark:text-orange-300 hover:text-orange-100 dark:hover:text-orange-300 focus:outline-none focus:text-orange-300 dark:focus:text-orange-300 focus:border-orange-300 dark:focus:border-orange-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
