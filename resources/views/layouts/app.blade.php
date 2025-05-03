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

    <!-- font awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.13.0/js/all.js"
        integrity="sha384-ujbKXb9V3HdK7jcWL6kHL1c+2Lj4MR4Gkjl7UtwpSHg/ClpViddK9TI7yU53frPN" crossorigin="anonymous">
    </script>

    <!-- Styles -->
    @vite('resources/css/app.css')

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

<body class="bg-gray-50">
    <div id="app">
        <nav class="bg-purple-400 shadow-md">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex">
                        <div class="flex-shrink-0 flex items-center">
                            <a href="/" class="text-white text-xl font-bold">
                                Laravel
                            </a>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <div class="ml-3 relative">
                            <div>
                                <button type="button" class="flex text-sm rounded-full text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-purple-400 focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                    <span class="sr-only">ユーザー</span>
                                    <span class="text-white">ユーザー</span>
                                </button>
                            </div>
                            <div class="hidden origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">パスワード変更</a>
                                <form method="POST" action="#" class="block">
                                    @csrf
                                    <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">
                                        ログアウト
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        {{-- フラッシュメッセージ --}}
        {{-- todo:位置確認 --}}
        @include('components.parts.flash_message')

        <main class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            <div class="px-4 py-6 sm:px-0">
                <div class="my-4">
                    <div class="row justify-content-center">
                        {{-- @if (auth('admin')->check()) --}}
                            {{-- <div class="col-md-2">
                                @include('components.parts.admin_left_side_menu')
                            </div> --}}
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