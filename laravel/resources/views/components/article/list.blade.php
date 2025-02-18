<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid grid-cols-2 gap-3">
    @foreach($articles as $article)
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">
            {{ $article->title }}
        </div>
        <div class="mb-3 ml-6">
            <x-tag.list :tags="$article->tags"></x-tag.list>
        </div>
    </div>
    @endforeach
</div>
