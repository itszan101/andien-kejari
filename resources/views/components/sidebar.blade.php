@php
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
@endphp

<div class="main-sidebar">
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
            </li>

            {{-- <li class="dropdown {{ Request::routeIs('car.index') || Request::routeIs('car.create') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-clipboard"></i> <span>{{__('Information Management')}}</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::routeIs('car.index') ? 'active' : '' }}"><a class="nav-link" href="{{ route('car.index') }}">{{__('Car Management')}}</a></li>
                    <li class="{{ Request::routeIs('division.index') ? 'active' : '' }}"><a class="nav-link" href="{{ route('division.index') }}">{{__('Division Management')}}</a></li>
                </ul>
            </li> --}}

                    <li class="dropdown {{ Request::routeIs('user') ? 'active' : '' }}">
                        <a href="{{ route('user') }}" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-chart-bar"></i> <span>{{ ('Manage User') }}</span></a>
                        <ul class="dropdown-menu">
                            <li class="{{ Request::routeIs('user') ? 'active' : '' }}"><a class="nav-link" href="{{ route('user') }}">{{ ('Buat User') }}</a></li>
                            <li class="{{ Request::routeIs('user.new') ? 'active' : '' }}"><a class="nav-link" href="{{ route('user.new') }}">{{ ('Ubah Data User') }}</a></li>
                        </ul>
                    </li>
        </ul>
    </aside>
</div>
