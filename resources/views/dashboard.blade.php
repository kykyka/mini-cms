<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Your posts") }}
                </div>
            </div>
        </div>
    </div>
    <div class="py-12">
        @foreach ($posts as $post)
        <div class="md-6">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                {{ __($post->title) }}
            </div>
            <div class="p-6 text-gray-900 dark:text-gray-100">
                {{ __($post->content) }}
            </div>
            <div class="p-6 text-gray-900 dark:text-gray-100">
                {{ __($post->category->name) }}
            </div>
        </div>
            {{-- @dump($post)         --}}
        @endforeach
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
