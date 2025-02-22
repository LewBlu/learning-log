<x-app-layout>
    <div class="my-6 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <h1 class="text-2xl p-6 text-gray-900 dark:text-gray-100">{{ $article->title }}</h1>
        <p class="p-6 text-gray-900 dark:text-gray-100">{{ $article->description}}</p>
        <pre>
            <code class="text-gray-900 dark:text-gray-100">{{ $article->example }}</code>
        </pre>
    </div>
</x-app-layout>
