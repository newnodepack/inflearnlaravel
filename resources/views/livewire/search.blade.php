<div class="content_side_b">
    <div class="site_main">
        <i class="bi bi-reddit"></i>
        <div class="search_box">
            <i class="bi bi-search search_box_icon"></i>
            <input type="text" placeholder="사이트 검색" wire:model="search">
        </div>
    </div>
    @if ($visibility)
        <div class="search_result">
            @foreach ($filtering as $item)
                <div class="result_line">
                    <p>{{ $item->description }}</p>
                </div>
            @endforeach
        </div>
    @endif

</div>
