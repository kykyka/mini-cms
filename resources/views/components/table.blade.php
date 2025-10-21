<div class="overflow-x-auto bg-white rounded-2xl shadow">
    <table {{ $attributes->merge(['class' => 'min-w-full text-sm text-left text-gray-800']) }}>
        <thead class="bg-[#FCBA03] text-black uppercase text-xs tracking-wider">
            {{ $head }}
        </thead>
        <tbody class="divide-y divide-gray-200">
            {{ $slot }}
        </tbody>
    </table>
</div>
