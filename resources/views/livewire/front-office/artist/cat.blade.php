{{-- <div class="andro_isotope-filter-nav">
    <a wire:click="selectCategory({{0}})" class="andro_isotope-trigger {{ $category_id === 0 ? 'active' : '' }}" style="cursor: pointer;">Tous les artistes</a>
    @foreach ($categories as $cat)
        <a wire:click="selectCategory({{$cat->id}})" class="andro_isotope-trigger  {{ $category_id === $cat->id ? 'active' : '' }}" style="cursor: pointer;">{{ $cat->name }}</a>
    @endforeach
 --}}
    <div class="nav flex-column nav-pills andro_isotope-filter-nav"  role="tablist" aria-orientation="vertical">
        <a class=" andro_isotope-trigger {{ $category_id === 0 ? 'active' : '' }}" wire:click="selectCategory({{0}})" >Tous les artistes</a>
        @foreach ($categories as $cat)
            <a class="andro_isotope-trigger {{ $category_id === $cat->id ? 'active' : '' }}" wire:click="selectCategory({{$cat->id}})" style="cursor: pointer;">{{ $cat->name }}</a>
        @endforeach
    </div>
{{-- </div> --}}
