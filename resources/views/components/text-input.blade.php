@props(['disabled' => false, 'placeholder' => ''])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-700 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-700 focus:border-orange-500 dark:focus:border-orange-500 focus:ring-orange-500 dark:focus:ring-orange-500 rounded-lg shadow-sm','placeholder' => $placeholder ]) !!}>
