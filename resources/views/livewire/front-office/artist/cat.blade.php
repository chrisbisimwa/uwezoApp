{{-- Catégories déroulantes sur mobile, liste classique sur desktop --}}

{{-- Menu déroulant (accordion) pour mobile --}}
<div>
<div class="cat-list-collapsible d-lg-none" id="catMenuMobile">
    <div class="cat-collapsible-header" onclick="document.getElementById('catMenuMobile').classList.toggle('open')">
        Catégories
        <span class="cat-collapsible-arrow">&#9660;</span>
    </div>
    <div class="cat-collapsible-list">
        <a wire:click="selectCategory({{0}})"
            class="cat-pill {{ $category_id === 0 ? 'active' : '' }}">
            Tous les artistes ({{$allArtistCount}})
        </a>
        @foreach ($categories as $cat)
            <a wire:click="selectCategory({{$cat->id}})"
                class="cat-pill {{ $category_id === $cat->id ? 'active' : '' }}">
                {{ $cat->name }} ({{ $cat->artistCount }})
            </a>
        @endforeach
    </div>
</div>

{{-- Présentation classique pour desktop --}}
<div class="andro_isotope-filter-nav d-none d-lg-flex flex-column" role="tablist" aria-orientation="vertical">
    <a class="andro_isotope-trigger {{ $category_id === 0 ? 'active' : '' }}"
       wire:click="selectCategory({{0}})" style="cursor: pointer;">
        Tous les artistes ({{$allArtistCount}})
    </a>
    @foreach ($categories as $cat)
        <a class="andro_isotope-trigger {{ $category_id === $cat->id ? 'active' : '' }}"
           wire:click="selectCategory({{$cat->id}})" style="cursor: pointer;">
            {{ $cat->name.' ('.$cat->artistCount.')' }}
        </a>
    @endforeach
</div>

</div>