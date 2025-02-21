<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 grid grid-cols-2 gap-3">
    @foreach($articles as $article)
    <div wire:key="{{ $article->id }}" class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">
            {{ $article->title }}
        </div>
        <div class="mb-3 pl-6">
            @foreach($article->tags as $tag)
            <livewire:tag.individual :key="$article->id.$tag->id" :tag="$tag"/>
            @endforeach
        </div>
    </div>
    @endforeach
    <div class="col-span-full">
        {{ $articles->links() }}
    </div>
</div>
