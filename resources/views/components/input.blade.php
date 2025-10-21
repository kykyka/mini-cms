@props(['label' => null, 'name', 'type' => 'text', 'value' => ''])

<div class="mb-4">
    @if($label)
        <label for="{{ $name }}" class="block mb-1 text-sm font-medium text-gray-700">
            {{ $label }}
        </label>
    @endif

    <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}"
           value="{{ old($name, $value) }}"
           {{ $attributes->merge(['class' => 'text-black w-full border border-gray-300 focus:border-[#FCBA03] focus:ring-[#FCBA03] rounded-xl shadow-sm px-3 py-2']) }}>

    @error($name)
        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
    @enderror
</div>
