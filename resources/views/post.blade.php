<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __($post->title) }}
        </h2>
    </x-slot>
    <form action="{{ route('cabinet.post.edit' , $post->id) }}" method="post">
        @csrf
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div>{{ $post->category->name }}</div>
                        <div>
                            @php 
                            $options = [];
                            @endphp
                            @foreach ($categories as $category)
                                @php   $options[$category->id] = $category->name; @endphp
                            @endforeach
                            
                            <x-select 
                                label="Категория" 
                                name="category_id" 
                                :options="$options" 
                                :selected="$post->category->id"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-12">
            <div class="md-6">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <x-input label="Title" name="title" value="{{ $post->title }}"/>
                </div>
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <x-textarea label="Content" name="content" value="{{ $post->content }}"/>
                </div>
            </div>
        </div>
    </form>
</x-app-layout>
