<x-app-layout>
    <div class="my-6 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <h1 class="text-2xl p-6 text-gray-900 dark:text-gray-100">{{ $article->title }}</h1>

        <div class="px-6 flex flex-wrap gap-2">
            @foreach($article->tags as $tag)
            <div class="bg-indigo-700 text-gray-100 text-sm px-3 rounded-full size-fit cursor-pointer">
                {{ $tag->name }}
            </div>
            @endforeach
        </div>

        <p class="p-6 text-gray-900 dark:text-gray-100">{{ $article->description}}</p>

        <div id="editor" class="editor-readonly">{{ $article->example }}</div>
    </div>
</x-app-layout>
