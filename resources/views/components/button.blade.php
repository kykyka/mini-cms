@props(['type' => 'button', 'variant' => 'primary'])

@php
$base = 'px-4 py-2 rounded-xl font-semibold text-sm transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2';
$colors = match($variant) {
    'primary' => 'bg-[#FCBA03] hover:bg-[#e0a803] text-black focus:ring-[#FCBA03]',
    'secondary' => 'bg-black hover:bg-gray-900 text-white focus:ring-gray-700',
    'outline' => 'border border-[#FCBA03] text-[#FCBA03] hover:bg-[#FCBA03] hover:text-black focus:ring-[#FCBA03]',
    'danger' => 'bg-red-600 hover:bg-red-700 text-white focus:ring-red-500',
    default => 'bg-gray-200 text-black',
};
@endphp

<button type="{{ $type }}" {{ $attributes->merge(['class' => "$base $colors shadow-sm"]) }}>
    {{ $slot }}
</button>
