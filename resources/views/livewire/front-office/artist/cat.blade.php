<div class="andro_isotope-filter-nav">
    <a wire:click="selectCategory({{0}})" class="andro_isotope-trigger {{ $category_id === null ? 'active' : '' }}" style="cursor: pointer;">Tous les artistes</a>
    @foreach ($categories as $cat)
        <a wire:click="selectCategory({{$cat->id}})" class="andro_isotope-trigger  {{ $category_id === $cat->id ? 'active' : '' }}" style="cursor: pointer;">{{ $cat->name }}</a>
    @endforeach
</div>
