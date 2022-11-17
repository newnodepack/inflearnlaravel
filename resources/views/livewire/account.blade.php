<div class="head_button">
    @if (Auth::check())
        <a class="login_head_btn" href="/logout">로그아웃</a>
    @else
        <button class="login_head_btn" wire:click="$toggle('showlogin')">로그인</button>
    @endif
    <button class="register_head_btn" wire:click="$toggle('showregister')">회원가입</button>
    @if ($showlogin)
        <div class="register_popup" wire:click="$toggle('showlogin')">

        </div>
        <div class="front_register">
            <form class="front_register_form" enctype="application/x-www-form-urlencoded" method="POST" action="/login">
                @csrf
                <label for="fri_2" class="front_register_label">
                    <p>이메일</p>
                    <input type="text" class="front_register_input" id="fri_2" name="email">
                </label>
                <label for="fri_3" class="front_register_label">
                    <p>비밀번호</p>
                    <input type="password" class="front_register_input" id="fri_3" name="password">
                </label>
                <input type="submit" value="회원가입" class="submit_registration">
                {{ $errors->first("message") }}
            </form>
        </div>
    @else

    @endif
    @if ($showregister)
        <div class="register_popup" wire:click="$toggle('showregister')">

        </div>
        <div class="front_register">
            <form class="front_register_form" enctype="application/x-www-form-urlencoded" wire:submit.prevent="regist">
                <label for="fri_1" class="front_register_label">
                    <p>이름</p>
                    <input type="text" class="front_register_input" id="fri_1" wire:model="name">
                    @error('name')
                        <span>{{$message}}</span>
                    @enderror
                </label>
                <label for="fri_2" class="front_register_label">
                    <p>email</p>
                    <input type="text" class="front_register_input" id="fri_2" wire:model="email">
                    @error('email')
                        <span>{{$message}}</span>
                    @enderror
                </label>
                <label for="fri_3" class="front_register_label">
                    <p>비밀번호</p>
                    <input type="password" class="front_register_input" id="fri_3" wire:model="password">
                    @error('password')
                        <span>{{$message}}</span>
                    @enderror
                </label>
                <input type="submit" value="회원가입" class="submit_registration">
            </form>
        </div>
    @else

    @endif
</div>
