<!DOCTYPE html>
<html lang="ja" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description', '金型の発注・受注がWebでできるビジネスマッチングサービス。設備、材料、DXのマッチングにも対応。プレスや樹脂成形、ダイカストなど専門分野に特化した検索機能が充実。無料会員登録で利用でき、チャット機能で円滑な取引を実現します。')">
    <title>@yield('title', config('app.name') . ' | 金型・部品加工など製造業に特化したマッチングプラットフォーム')</title>
    <meta property="og:title" content="相型マッチング | 金型・部品加工など製造業に特化したマッチングプラットフォーム">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    {{--  favicon  --}}
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/images/favicon/favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('/images/favicon/apple-touch-icon.png') }}" sizes="180x180">
    <link rel="android-touch-icon" href="{{ asset('/images/favicon/android-touch-icon.png') }}" sizes="192x192">
    {{-- Vue読込み --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/vue@3.2.31/dist/vue.global.prod.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/vue@3.2.31/dist/vue.global.js"></script>
    @yield('style')
    <style>
        .main-menu {
            background: linear-gradient(to top, #005aaa, #1f84de, #339fff, #77bfff);
        }
        .main-menu .nav-link {
            color:rgb(255, 255, 255);
            font-weight: bold;
            font-size: 1.2rem;
        }

        .main-menu .nav-link:hover {
            color: #333;
        }

        .main-menu .nav-link.active {
            background-color: #0d6efd;
            color: white;
        }

        .banner-area .card {
            border: 1px solid #ddd;
        }

        .banner-area .card-body {
            text-align: center;
            padding: 2rem;
            background-color: #f8f9fa;
        }
    </style>
</head>
<body class="d-flex flex-column h-100">
    <header class="custom-header py-2">
        <nav class="navbar navbar-expand-md navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('images/logo.jpg') }}" alt="相型マッチング" class="img-fluid" style="max-height: 40px; mix-blend-mode: multiply">
                </a>
                <button class="navbar-toggler d-md-none" type="button" data-bs-toggle="modal" data-bs-target="#navbarModal" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse d-none d-md-block">
                    <ul class="navbar-nav ms-auto align-items-center">
                        @auth
                            <li class="nav-item me-3 d-flex align-items-center">
                                <span class="me-2">{{ \App\Services\PlanService::getCurrentPlanName(auth()->user()->account) }}</span>
                            </li>
                            <a href="{{ route('user.notifications.index') }}" class="nav-link text-dark position-relative">
                                <i class="fas fa-bell"></i>
                                @if(auth()->user()->account->unreadNotifications->count() > 0)
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                        {{ auth()->user()->account->unreadNotifications->count() }}
                                    </span>
                                @endif
                            </a>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-user-circle me-1"></i>
                                    {{ auth()->user()->getFullName() }}
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="{{ route('user.accounts.edit') }}"><i class="fas fa-user me-2"></i>アカウント編集</a></li>
                                    @if (auth()->user()->account->account_type->isContractor())
                                        <li><a class="dropdown-item" href="{{ route('user.stripe_creditcards.index') }}"><i class="fas fa-credit-card me-2"></i>支払い方法</a></li>
                                        <li><a class="dropdown-item" href="{{ route('user.plans.index') }}"><i class="fas fa-crown me-2"></i>プラン</a></li>
                                        <li><a class="dropdown-item" href="{{ route('user.plans.customer_portal') }}"><i class="fas fa-history me-2"></i>お支払い履歴</a></li>
                                        {{-- <li><hr class="dropdown-divider"></li> --}}
                                    @endif
                                    <li><a class="dropdown-item" href="{{ route('user.email.edit') }}"><i class="fas fa-envelope me-2"></i>メールアドレス変更</a></li>
                                    <li><a class="dropdown-item" href="{{ route('user.password.edit') }}"><i class="fas fa-key me-2"></i>パスワード変更</a></li>
                                    <li><a class="dropdown-item" href=""><i class="fas fa-sign-out-alt me-2"></i>退会</a></li>
                                </ul>
                            </li>
                            <li>
                                <div class="dropdown-item">
                                    <form action="{{ route('user.logout') }}" method="POST" class="d-inline">
                                        @csrf
                                        <button type="submit" class="dropdown-item">
                                            <i class="fas fa-sign-out-alt me-2"></i>ログアウト
                                        </button>
                                    </form>
                                </div>
                            </li>
                        @endauth
                        @guest
                            <li class="nav-item">
                                <a href="{{ route('user.login') }}" class="btn btn-primary">ログイン</a>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    {{-- フラッシュメッセージ --}}
    @include('components.parts.flash_message')

    {{-- メインメニュー --}}
    <div class="bg-info">
        <div class="container-fluid" style="background: linear-gradient(to top, #005aaa, #1f84de, #339fff, #77bfff);">
            <nav class="main-menu">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.chat_rooms.index') }}">
                            チャット
                            @if(isset($unreadChatRoomCount) && $unreadChatRoomCount > 0)
                                <span class="badge bg-danger">{{ $unreadChatRoomCount }}</span>
                            @endif
                        </a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.contracts.index') }}">契約一覧</a>
                    </li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">発注</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('user.projects.create') }}">新規発注</a></li>
                            <li><a class="dropdown-item" href="{{ route('user.contractor_infos.index') }}">企業検索</a></li>
                            <li><a class="dropdown-item" href="{{ route('user.account_favorites.index') }}">お気に入り企業</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">進捗管理</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('user.projects.index_my_project') }}">見積依頼案件</a></li>
                            <li><a class="dropdown-item" href="{{ route('user.contracts.index') }}">契約案件</a></li>
                            @if (auth()->user()->account->account_type->isContractor())
                                <li><a class="dropdown-item" href="{{ route('user.project_offers.to_my_index') }}">受注見込案件</a></li>
                            @endif
                        </ul>
                    </li>
                    <!-- @if (auth()->user()->account->account_type->isContractor())
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">受注メニュー</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('user.project_offers.to_my_index') }}">オファー一覧</a></li>
                        </ul>
                    </li>
                    @endif -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">サポート</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/wp/coming_soon">ご利用ガイド</a></li>
                            <li><a class="dropdown-item" href="/#price">ご利用料金</a></li>
                            <li><a class="dropdown-item" href="/wp/qa">よくある質問(Q&A)</a></li>
                            <li><a class="dropdown-item" href="{{ route('contacts.create') }}">お問合せ</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <main class="py-3 @yield('main_class')">
        <div id="content">
            <div class="container-fluid">
                {{-- パンクズリスト --}}
                @yield('breadcrumbs')
                <div class="my-4">
                    <div class="row">
                        {{-- メインコンテンツエリア --}}
                        <div class="col-md-10 ps-5">
                            @yield('content')
                        </div>
                        {{-- バナー広告エリア --}}
                        <div class="col-md-2">
                            <div class="banner-area">
                                {{-- 会員バナーの表示 --}}
                                @foreach($memberBanners as $banner)
                                    @if($banner->banner && $banner->banner->file_path)
                                    <div class="card-body p-2">
                                        <a href="{{ $banner->banner->contractor_url }}" target="_blank" rel="noopener noreferrer">
                                            <img src="{{ Storage::url($banner->banner->resized_file_path) }}" 
                                                alt="バナー広告" 
                                                class="img-fluid">
                                        </a>
                                    </div>
                                    @endif
                                @endforeach

                                {{-- 募集用バナーの表示 --}}
                                @if($recruitmentBanner)
                                    <div class="card-body p-2">
                                        <img src="{{ Storage::url($recruitmentBanner->file_path) }}" 
                                            alt="募集用バナー" 
                                            class="img-fluid">
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="custom-footer text-white py-2 mt-auto">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <nav class="d-flex flex-column flex-md-row justify-content-center align-items-center">
                    <a href="/" class="text-white text-decoration-none mx-md-3 my-2 my-md-0 small">サイトTOP</a>
                    <a href="{{ route('contacts.create') }}" class="text-white text-decoration-none mx-md-3 my-2 my-md-0 small">お問い合わせ</a>
                    <a href="/wp/info/" class="text-white text-decoration-none mx-md-3 my-2 my-md-0 small">会社概要</a>
                    <a href="/wp/terms/" class="text-white text-decoration-none mx-md-3 my-2 my-md-0 small">利用規約</a>
                    <a href="/wp/privacy_policy/" class="text-white text-decoration-none mx-md-3 my-2 my-md-0 small">プライバシーポリシー</a>
                    <a href="/wp/site_policy/" class="text-white text-decoration-none mx-md-3 my-2 my-md-0 small">サイトポリシー</a>
                    <a href="/wp/legal_guidance/" class="text-white text-decoration-none mx-md-3 my-2 my-md-0 small">特定商取引法に基づく表記</a>
                </nav>
                <p class="text-white small mt-3 mb-0">2024 aikata-matching</p>
            </div>
        </div>
    </div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    @yield('flash_message_script')
    @stack('scripts')
</body>
</html>
