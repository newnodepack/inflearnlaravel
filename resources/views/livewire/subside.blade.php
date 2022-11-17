<div class="contents">
    <div class="userblock">
        <h3>사이트에 가입한 회원들</h3>
        <ul class="userblock_list">
            @foreach ($accounts as $item)
                <li>
                    <div class="user_img">
                        <i class="bi bi-person-bounding-box"></i>
                    </div>
                    <div class="userblock_title">
                        <h4>{{ $item->name }}</h4>
                        <p>{{ $item->email }}</p>
                    </div>
                </li>
            @endforeach
        </ul>
        <a href="#" class="more_users">사용자 더보기</a>
    </div>
    <div class="sponser_block">
        <h3>Sponser</h3>
        <div class="sponser_list">
            <span> 광고 없이 볼래요?</span>
        </div>
    </div>
</div>
