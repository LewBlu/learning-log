<div class="flex flex-wrap gap-2">
    @foreach($tags as $tag)
    <div
        class="bg-gray-300 text-gray-800 text-sm px-3 rounded-full dark:bg-gray-700 dark:text-gray-300"
        wire:click="$dispatch('article-filter', { tag: '{{ $tag->name }}' })"
    >
        {{ $tag->name }}
    </div>
    @endforeach
</div>
