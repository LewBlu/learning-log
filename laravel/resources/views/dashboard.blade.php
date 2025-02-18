<x-app-layout>
    <div class="my-6 max-w-7xl mx-auto flex flex-wrap gap-2 sm:px-6 lg:px-8">
        @foreach($tags as $tag)
        <div class="bg-gray-100 text-gray-800 text-sm px-3 rounded-full dark:bg-gray-700 dark:text-gray-300">{{ $tag->name }}</div>
        @endforeach
    </div>
    <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    Create a model using artisan
                </div>
            </div> --}}
        </div>
    </div>
</x-app-layout>
