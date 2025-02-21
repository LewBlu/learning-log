<div class="flex flex-wrap gap-2">
    @foreach($tags as $tag)
    <livewire:tag.individual :tag="$tag"/>
    @endforeach
</div>
