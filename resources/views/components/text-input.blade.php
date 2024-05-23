@props(['disabled' => false, 'placeholder' => ''])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-700 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-700 focus:border-sky-600 dark:focus:border-sky-600 focus:ring-sky-600 dark:focus:ring-sky-600 rounded-lg shadow-sm','placeholder' => $placeholder ]) !!}>
