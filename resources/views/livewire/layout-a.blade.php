<div>
    <form class="upload_post_box" enctype="multipart/form-data" wire:submit.prevent="write">
        <h3>글을 작성해 보세요!</h3>
        {{-- @if ($photo)
            <div class="image_live_session">
                <img src="{{ $photo->temporaryUrl() }}" alt="이미지 미리보기">
            </div>
        @endif --}}

        <textarea name="" id="write_post" wire:model="description"></textarea>
        <div class="left_side">
            <div class="hidden_file_input">
                <input type="file" wire:model="photo">
            </div>
        </div>
        <div class="right_side">
            <input class="submit_btn_in" type="submit" value="작성하기">
        </div>
    </form>
    @foreach ($postarray as $item)
        <div class="post_layout_block">
            <div class="post_user_profile">
                <div class="post_user_thumbnail">
                    <i class="bi bi-person-bounding-box"></i>
                </div>
            </div>
            <div class="post_user_contents">
                <div class="post_image_show">
                    <img src="{{ Storage::url($item->imagepath) }}" alt="">
                </div>
                <div class="post_content_write">
                    <p>{{ $item->description }}</p>
                </div>
            </div>
        </div>
    @endforeach

</div>

