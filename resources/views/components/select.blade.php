@props(['label', 'name', 'options' => [], 'selected'])

<div class="mb-4">
    @if($label)
        <label for="{{ $name }}" class="block mb-1 text-sm font-medium text-gray-700">
            {{ $label }}
        </label>
    @endif

    <select
        name="{{ $name }}"
        id="{{ $name }}"
        {{ $attributes->merge(['class' => 'text-black w-full border border-gray-300 focus:border-[#FCBA03] focus:ring-[#FCBA03] rounded-xl shadow-sm px-3 py-2']) }}
    >
        <option value="">Выберите...</option>
        @foreach($options as $value => $text)
            <option value="{{ $value }}" @selected($value == $selected)>{{ $text }}</option>
        @endforeach
    </select>

    @error($name)
        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
    @enderror
</div>
