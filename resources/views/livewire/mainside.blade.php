<div class="contents">
    <div class="side_tab_layout">
        <div class="side_tab_box" wire:click="change_tab({{1}})">
            <h2 style="color:{{$selected_tab_a}}">HOT 100</h2>
            <div class="side_tab_underline" style="background-color: {{$selected_tab_a}}"></div>
        </div>
        <div class="side_tab_box" wire:click="change_tab({{2}})">
            <h2 style="color:{{$selected_tab_b}}">추천 글</h2>
            <div class="side_tab_underline" style="background-color: {{$selected_tab_b}}"></div>
        </div>
        <div class="side_tab_box" wire:click="change_tab({{3}})">
            <h2 style="color:{{$selected_tab_c}}">더보기<i class="bi bi-caret-down"></i></h2>
            <div class="side_tab_underline" style="background-color: {{$selected_tab_c}}"></div>
        </div>
        <div id="side_tab_box_last">
            <i class="bi bi-columns-gap"></i>
            <div class="side_tab_underline"></div>
        </div>
    </div>
    @if ($active_layout == 1)
        <div class="side_tab_container">
            @livewire('layout-a')
        </div>
    @elseif ($active_layout == 2)
        <div class="side_tab_container">
            b 레이아웃
        </div>
    @elseif ($active_layout == 3)
        <div class="side_tab_container">
            c 레이아웃
        </div>
    @else
        <div class="side_tab_container">
            페이지를 표시할 수 없습니다.
        </div>
    @endif

</div>
