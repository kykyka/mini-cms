@props(['label' => null, 'name', 'rows' => 2, 'value' => ''])

<div class="mb-4">
    @if($label)
        <label for="{{ $name }}" class="block mb-1 text-sm font-medium text-gray-700">
            {{ $label }}
        </label>
    @endif

    <textarea
        x-data
        x-init="$el.style.height = $el.scrollHeight + 'px'"
        x-on:input="$el.style.height = 'auto'; $el.style.height = $el.scrollHeight + 'px'"
        name="{{ $name }}"
        id="{{ $name }}"
        rows="{{ $rows }}"
        class="text-black w-full border border-gray-300 focus:border-[#FCBA03] focus:ring-[#FCBA03] rounded-xl shadow-sm px-3 py-2 resize-none overflow-hidden"
    >{{ old($name, $value) }}</textarea>

    @error($name)
        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
    @enderror
</div>