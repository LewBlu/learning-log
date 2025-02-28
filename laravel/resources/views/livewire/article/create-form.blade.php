<form wire:submit="save">
    <div class="mb-3">
        <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Title</label>
        <input type="text" wire:model="form.title" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300 dark:focus:ring-indigo-500 dark:focus:border-indigo-500" required />
    </div>

    <div class="mb-3">
        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Description</label>
        <textarea  wire:model="form.description" id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300 dark:focus:ring-indigo-500 dark:focus:border-indigo-500"></textarea>
    </div>

    <div id="editor" wire:ignore></div>

    <ul class="flex flex-wrap gap-2 my-3">
        @foreach($tags as $tag)
        <li>
            <input type="checkbox" id="{{ $tag->id }}" wire:model="form.selectedTags" value="{{ $tag->id }}" class="hidden peer">
            <label for="{{ $tag->id }}" class="bg-gray-300 text-gray-800 text-sm px-3 rounded-full size-fit cursor-pointer peer-checked:bg-indigo-700 peer-checked:text-gray-100">
                {{ $tag->name }}
            </label>
        </li>
        @endforeach
    </ul>

    <button type="submit" class="text-gray-300 bg-indigo-700 hover:bg-indigo-800 focus:ring-4 focus:outline-none focus:ring-indigo-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:ring-indigo-800">Submit</button>
</form>
