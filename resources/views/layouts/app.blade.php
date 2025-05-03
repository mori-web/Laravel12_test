<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>システム</title>
    {{-- todo:システム名に変更 --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    {{-- bootstrap5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- font awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.13.0/js/all.js"
        integrity="sha384-ujbKXb9V3HdK7jcWL6kHL1c+2Lj4MR4Gkjl7UtwpSHg/ClpViddK9TI7yU53frPN" crossorigin="anonymous">
    </script>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    {{-- Vue読込み --}}
    <script src="https://cdn.jsdelivr.net/npm/vue@3.2.31/dist/vue.global.prod.js"></script>

    <!-- jQueryライブラリ読み込み -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <!-- select2読み込み -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

    {{-- ドラッグアンドドロップ --}}
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.10.2/Sortable.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vuedraggable@4.0.2/dist/vuedraggable.umd.min.js"></script>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md shadow-sm py-0 bg-primary text-white">
            <div class="">
                <a href="">
                    <h3 class="text-light mt-2">システム名</h3>
                    {{-- todo:画像の場合は下記を使用 --}}
                    {{-- <img src="" alt="title-logo" style="width: auto; height: 60px;" class="d-block"> --}}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            ユーザー
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="">
                                {{ __('Password Change') }}
                            </a>
                            <a class="dropdown-item" href=""
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        {{-- フラッシュメッセージ --}}
        {{-- todo:位置確認 --}}
        @include('components.parts.flash_message')

        <main class="container-fluid">
            <div id="content">
                <div class="my-4">
                    <div class="row justify-content-center">
                        {{-- @if (auth('admin')->check()) --}}
                            <div class="col-md-2">
                                @include('components.parts.admin_left_side_menu')
                            </div>
                        {{-- @endif --}}
                        <div class="col-md-10">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    {{-- モーダルはここに配置 --}}
    @yield('modal_area')

    <script src="https://cdn.jsdelivr.net/npm/vue@3"></script>

    @yield('flash_message_script')
    @yield('header_script')
    @yield('nav_script')
    @yield('script')

</body>
</html>