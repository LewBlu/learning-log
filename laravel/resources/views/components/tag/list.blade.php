<div class="my-6 max-w-7xl mx-auto flex flex-wrap gap-2 sm:px-6 lg:px-8">
    @foreach($tags as $tag)
    <div class="bg-gray-100 text-gray-800 text-sm px-3 rounded-full dark:bg-gray-700 dark:text-gray-300">{{ $tag->name }}</div>
    @endforeach
</div>
