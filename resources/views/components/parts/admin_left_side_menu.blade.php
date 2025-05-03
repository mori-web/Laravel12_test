<div class="" id="base-small">
    <div class="list-group shadow-sm">
        <a href=""
            class="list-group-item list-group-item-action">
            <i class="fas fa-users fa-xs"></i><span class="mx-1">HOME</span>
        </a>
{{-- 
        <div id="submenu1"
            class="collapse list-group-item p-0
                {{ request()->routeIs('user.measures.*') || request()->routeIs('user.customers.*') ? 'show' : '' }}">
            <ul class="list-group list-group-flush mx-0 border-user-color">
                <a href=""
                    class="list-group-item list-group-item-action {{ request()->routeIs('user.measures.*') ? 'bg-user-color bg-hover text-white' : '' }}">
                    <i class="fas fa-cogs fa-xs"></i><span class="mx-1">施策管理</span>
                </a>
                <a href=""
                    class="list-group-item list-group-item-action {{ request()->routeIs('user.customers.*') ? 'bg-user-color bg-hover text-white' : '' }}">
                    <i class="fas fa-user fa-xs"></i><span class="mx-1">顧客情報</span>
                    <span class="badge bg-danger mx-1 rounded-pill">4</span>
                </a>
            </ul>
        </div>

        <button class="list-group-item list-group-item-action d-flex align-items-center" type="button" data-bs-toggle="collapse"
            aria-expanded="{{
                Str::startsWith(request()->route()->getName(), 'user.questions.') ||
                Str::startsWith(request()->route()->getName(), 'user.faqs.') ||
                Str::startsWith(request()->route()->getName(), 'user.faq_genres.') ||
                Str::startsWith(request()->route()->getName(), 'user.whitepapers.') ||
                Str::startsWith(request()->route()->getName(), 'user.sales_trees.') ? 'true' : 'false'
            }}"
            data-bs-target="#submenu2">
            <i class="fas fa-sitemap fa-xs"></i><span class="mx-1">商談ツリー管理</span>
            <div class="ms-auto">
                <i class="fas fa-angle-down"></i>
            </div>
        </button>
        <div id="submenu2"
            class="collapse list-group-item p-0 {{
                Str::startsWith(request()->route()->getName(), 'user.questions.') ||
                Str::startsWith(request()->route()->getName(), 'user.faqs.') ||
                Str::startsWith(request()->route()->getName(), 'user.faq_genres.') ||
                Str::startsWith(request()->route()->getName(), 'user.whitepapers.') ||
                Str::startsWith(request()->route()->getName(), 'user.sales_trees.') ? 'show' : '' }}">
            <ul class="list-group list-group-flush mx-0 border-user-color ">
                <a href=""
                    class="list-group-item list-group-item-action {{ request()->routeIs('user.questions.*') ? 'bg-user-color bg-hover text-white': '' }}">
                    <i class="fas fa-question fa-xs"></i><span class="mx-1">質問・回答設計</span>
                </a>
                <a href=""
                    class="list-group-item list-group-item-action {{ request()->routeIs('user.faqs.*') || request()->routeIs('user.faq_genres.*') ? 'bg-user-color bg-hover text-white': '' }}">
                    <i class="fas fa-comments fa-xs"></i><span class="mx-1">FAQ設計</span>
                </a>
                <a href=""
                    class="list-group-item list-group-item-action {{ request()->routeIs('user.whitepapers.*') ? 'bg-user-color bg-hover text-white': '' }}">
                    <i class="fas fa-file-alt fa-xs"></i><span
                        class="mx-1">終了時表示画面設計</span>
                </a>
                <a href=""
                    class="list-group-item list-group-item-action {{ request()->routeIs('user.sales_trees.*') ? 'bg-user-color bg-hover text-white': '' }}">
                    <i class="fas fa-project-diagram fa-xs"></i><span
                        class="mx-1">商談ツリー設計</span>
                </a>
            </ul>
        </div>

        <button class="list-group-item list-group-item-action d-flex align-items-center" type="button"
            data-bs-toggle="collapse" data-bs-target="#submenu3">
            <i class="fas fa-chart-bar fa-xs"></i><span class="mx-1">データ分析</span>
            <div class="ms-auto">
                <i class="fas fa-angle-down"></i>
            </div>
        </button>
        <div id="submenu3"
            class="collapse list-group-item p-0 {{ request()->routeIs('user.analytics.*') || request()->routeIs('user.measures.analytics.*') ? 'show': '' }}">
            <ul class="list-group list-group-flush mx-0 border-user-color ">
                <a href=""
                    class="list-group-item list-group-item-action {{ request()->routeIs('user.measures.analytics.*') ? 'bg-user-color bg-hover text-white': '' }}">
                    <i class="fas fa-chart-line fa-xs"></i><span class="mx-1">施策別分析</span>
                </a>
                <a href=""
                    class="list-group-item list-group-item-action {{ request()->routeIs('user.measures.analytics.*') ? 'bg-user-color bg-hover text-white': '' }}">
                    <i class="fas fa-scroll fa-xs"></i><span class="mx-1">商談ツリー別分析</span>
                </a>
            </ul>
        </div>

        <button class="list-group-item list-group-item-action d-flex align-items-center" type="button"
            data-bs-toggle="collapse" data-bs-target="#submenu4">
            <i class="fas fa-tasks fa-xs"></i><span class="mx-1">カンバンステータス</span>
            <div class="ms-auto">
                <i class="fas fa-angle-down"></i>
            </div>
        </button>

        <div id="submenu4"
            class="collapse list-group-item p-0 {{ request()->routeIs('user.measures.kanban_statuses.*') ? 'show': '' }}">
            <ul class="list-group list-group-flush mx-0 border-user-color ">
                <a href=""
                    class="list-group-item list-group-item-action {{ request()->routeIs('user.measures.kanban_statuses.*') ? 'bg-user-color bg-hover text-white': '' }}">
                    <i class="fas fa-edit fa-xs"></i><span class="mx-1">ステータス作成・編集</span>
                </a>
            </ul>
        </div>

        <button class="list-group-item list-group-item-action d-flex align-items-center" type="button"
            data-bs-toggle="collapse" data-bs-target="#submenu5">
            <i class="fas fa-tv fa-xs"></i><span class="mx-1">サンプル画面</span>
            <div class="ms-auto">
                <i class="fas fa-angle-down"></i>
            </div>
        </button>

        <div id="submenu5"
            class="collapse list-group-item p-0 {{ request()->routeIs('user.measures.index_test_url.*') ? 'show': '' }}">
            <ul class="list-group list-group-flush mx-0 border-user-color">
                <a href="/sample/side_menu/index"
                    class="list-group-item list-group-item-action {{ request()->routeIs('user.measures.index_test_url.*') ? 'bg-user-color bg-hover text-white': '' }}">
                    <i class="fas fa-play fa-xs"></i><span class="mx-1">一覧</span>
                </a>
                <a href="/sample/side_menu/create"
                    class="list-group-item list-group-item-action {{ request()->routeIs('user.measures.index_test_url.*') ? 'bg-user-color bg-hover text-white': '' }}">
                    <i class="fas fa-play fa-xs"></i><span class="mx-1">登録</span>
                </a>
                <a href="/sample/side_menu/show"
                    class="list-group-item list-group-item-action {{ request()->routeIs('user.measures.index_test_url.*') ? 'bg-user-color bg-hover text-white': '' }}">
                    <i class="fas fa-play fa-xs"></i><span class="mx-1">詳細</span>
                </a>
                <a href="/sample/side_menu/withdraw"
                    class="list-group-item list-group-item-action {{ request()->routeIs('user.measures.index_test_url.*') ? 'bg-user-color bg-hover text-white': '' }}">
                    <i class="fas fa-play fa-xs"></i><span class="mx-1">退会フォーム</span>
                </a>
                <a href="/sample/side_menu/bank_account"
                    class="list-group-item list-group-item-action {{ request()->routeIs('user.measures.index_test_url.*') ? 'bg-user-color bg-hover text-white': '' }}">
                    <i class="fas fa-play fa-xs"></i><span class="mx-1">振込先口座登録フォーム</span>
                </a>
            </ul>
        </div> --}}
    </div>
</div>
