<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>라라벨 테스트 페이지</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
        @livewireStyles

    </head>
    <body>
        <header>
            <div class="wrap">
                <div class="left_side">
                    @livewire('search')
                </div>
                <div class="right_side">
                    @livewire('account')
                </div>
            </div>
        </header>
        <section>
            <div class="wrap_2">
                <div class="left_side_1">
                    @livewire('mainside')
                </div>
                <div class="right_side_1">
                    @livewire('subside')
                </div>
            </div>
        </section>
        @livewireScripts
    </body>
</html>
