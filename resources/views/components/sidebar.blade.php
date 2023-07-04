@php
if (Auth::user()->is_admin) {
    $links = [
        [
            'href' => 'dashboard',
            'text' => 'Dashboard',
            'is_multi' => false,
        ],
        [
            'href' => [
                [
                    'section_text' => 'Penyimpanan',
                    'section_list' => [['href' => 'dashboard', 'text' => 'Daftar File'], ['href' => 'dashboard', 'text' => 'Upload File Arsip']],
                    'section_icon' => 'fa fa-file-archive-o',
                ],
            ],
            'text' => 'Penyimpanan Arsip',
            'is_multi' => true,
        ],
        [
        'href' => [
            [
                'section_text' => 'User',
                'section_list' => [['href' => 'user', 'text' => 'Data User'], ['href' => 'user.new', 'text' => 'Buat User']],
                'section_icon' => 'fas fa-chart-bar',
            ]
        ],
        'text' => 'User',
        'is_multi' => true,
    ],
];
} else {
    $links = [
        [
            'href' => 'dashboard',
            'text' => 'Dashboard',
            'is_multi' => false,
        ],
    ];
}
$navigation_links = array_to_object($links);
@endphp

<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('dashboard') }}">Dashboard</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('dashboard') }}">
                <img class="d-inline-block" width="32px" height="30.61px" src="{{ asset('storage/img/logo_bappeda.png') }}" alt="">
            </a>
        </div>
        @foreach ($navigation_links as $link)
            <ul class="sidebar-menu">
                <li class="menu-header">{{ $link->text }}</li>
                @if (!$link->is_multi)
                    <li class="{{ Request::routeIs($link->href) ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route($link->href) }}"><i
                                class="fas fa-fire"></i><span>Dashboard</span></a>
                    </li>
                @else
                    @foreach ($link->href as $section)
                        @php
                            $routes = collect($section->section_list)
                                ->map(function ($child) {
                                    return Request::routeIs($child->href);
                                })
                                ->toArray();
                            
                            $is_active = in_array(true, $routes);
                        @endphp

                        <li class="dropdown {{ $is_active ? 'active' : '' }}">
                            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                                    class="{{ $section->section_icon }}"></i> <span>{{ $section->section_text }}</span></a>
                            <ul class="dropdown-menu">
                                @foreach ($section->section_list as $child)
                                    <li class="{{ Request::routeIs($child->href) ? 'active' : '' }}"><a
                                            class="nav-link" href="{{ route($child->href) }}">{{ $child->text }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endforeach
                @endif
            </ul>
        @endforeach
    </aside>
</div>
{{-- @php
$links = [
    [
        "href" => "dashboard",
        "text" => "Dashboard",
        "is_multi" => false,
    ],
    [
        "href" => [
            [
                "section_text" => "User",
                "section_list" => [
                    ["href" => "user", "text" => "Data User"],
                    ["href" => "user.new", "text" => "Buat User"]
                ]
            ]
        ],
        "text" => "User",
        "is_multi" => true,
    ],
];
$navigation_links = array_to_object($links);
@endphp --}}

{{-- <div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <img class="d-inline-block" width="32px" height="30.61px" src="{{ asset('/assets/img/LOGO_KEJAKSAAN.png') }}" alt="">
            <a href="{{ route('dashboard') }}">andien</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('dashboard') }}">
                <img class="d-inline-block" width="32px" height="30.61px" src="{{ asset('/assets/img/LOGO_KEJAKSAAN.png') }}" alt="">
            </a>
        </div>
       
        <ul class="sidebar-menu">

            <li class="menu-header">{{ ('Menu') }}</li>

            <li class="{{ Request::routeIs('dashboard') || Request::routeIs('upload.form') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('dashboard') }}"><i class="fas fa-fire"></i><span>{{ ('Dashboard')  }}</span></a>
            </li> --}}

            {{-- <li class="dropdown {{ Request::routeIs('car.index') || Request::routeIs('car.create') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-clipboard"></i> <span>{{__('Information Management')}}</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::routeIs('car.index') ? 'active' : '' }}"><a class="nav-link" href="{{ route('car.index') }}">{{__('Car Management')}}</a></li>
                    <li class="{{ Request::routeIs('division.index') ? 'active' : '' }}"><a class="nav-link" href="{{ route('division.index') }}">{{__('Division Management')}}</a></li>
                </ul>
            </li> --}}

                    {{-- <li class="dropdown {{ Request::routeIs('user') ? 'active' : '' }}">
                        <a href="{{ route('user') }}" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-chart-bar"></i> <span>{{ ('Manage User') }}</span></a>
                        <ul class="dropdown-menu">
                            <li class="{{ Request::routeIs('user') ? 'active' : '' }}"><a class="nav-link" href="{{ route('user') }}">{{ ('Buat User') }}</a></li>
                            <li class="{{ Request::routeIs('user.new') ? 'active' : '' }}"><a class="nav-link" href="{{ route('user.new') }}">{{ ('Ubah Data User') }}</a></li>
                        </ul>
                    </li>
        </ul>
    </aside>
</div> --}}
