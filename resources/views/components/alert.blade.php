@props(['type' => 'success', 'message'])

@php
$styles = match($type) {
    'success' => 'bg-green-100 border border-green-300 text-green-700',
    'error' => 'bg-red-100 border border-red-300 text-red-700',
    'warning' => 'bg-[#FCBA03]/20 border border-[#FCBA03] text-black',
    'info' => 'bg-blue-100 border border-blue-300 text-blue-700',
    default => 'bg-gray-100 border border-gray-300 text-gray-700',
};
@endphp

<div {{ $attributes->merge(['class' => "rounded-xl px-4 py-3 $styles"]) }}>
    {{ $message }}
</div>
