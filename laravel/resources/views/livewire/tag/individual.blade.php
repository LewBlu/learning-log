<div
    wire:click="toggleActive"
    @class([
        'bg-gray-300 text-gray-800 text-sm px-3 rounded-full dark:bg-gray-700 dark:text-gray-300 size-fit cursor-pointer',
        'bg-indigo-700 text-white' => $isActive
    ])
>
    {{ $tag->name }}
</div>
