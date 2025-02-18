<x-app-layout>
    <div class="my-6 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <x-tag.list :tags="$tags"></x-tag.list>
    </div>
    <x-article.list :articles="$articles"></x-article.list>
</x-app-layout>
