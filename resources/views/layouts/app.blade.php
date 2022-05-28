<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ mix('css/style.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            
            <!-- Page Heading -->
            @if (isset($header))
                @livewire('navigation-menu')
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>

                @else
                <div id="app">
                    <div id="particles"></div>
                    <div id="barre"></div>
                    <aside class="menu">
                        <a href="{{ route('home') }}" class="menu__logo">
                            ScrumBox<span class="color"> Courses</span>
                        </a>
                        <x-jet-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <span class="inline-flex rounded-md w-full">
                                    <button type="button" class="btn-languages">
                                        <span class="flag-icon flag-icon-{{Config::get('languages')[App::getLocale()]['flag-icon']}}"></span> {{ Config::get('languages')[App::getLocale()]['display'] }}
    
                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                                
                            </x-slot>
    
                            <x-slot name="content" class="w-full">
                                @foreach (Config::get('languages') as $lang => $language)
                                    @if ($lang != App::getLocale())
                                        <div class="block px-4 py-2 text-gray-600">
                                            <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"><span class="flag-icon flag-icon-{{$language['flag-icon']}}"></span> {{$language['display']}}</a>
                                        </div>
                                    @endif
                                @endforeach
                            </x-slot>
                        </x-jet-dropdown>

                        <nav class="menu__nav">
                            <ul class="menu__menu">
                                <a href="{{ route('home') }}" class="menu__item {{ (request()->routeIs('home')) ? 'active' : "" }}">Introduction</a>
                                @if ($exercices[0]->allow == 1)
                                <a href="{{ route('activite2') }}" class="menu__item {{ (request()->routeIs('activite2')) ? 'active' : "" }}">{{ __('exo2.Activity 1') }}</a>
                                @endif


                                
                                @if ($exercices[2]->allow == 1)
                                <div class="menu__submenu">
                                    <a href="{{ route('getting_started') }}" class="menu__item {{ (request()->routeIs('getting_started')) ? 'active' : "" }}">{{ __('dashboard.Getting started') }}</a>
                                    <ul>
                                        <li>                        
                                            <a href="{{ route('getting_started') }}#Installation" class="menu__item">Installation</a>
                                        </li>
                                        <li>                        
                                            <a href="{{ route('getting_started') }}#CSS" class="menu__item">CSS / JS</a>
                                        </li>
                                        <li>                        
                                            <a href="{{ route('getting_started') }}#points_curve" class="menu__item">{{ __("dashboard.Points to the curve") }}</a>
                                        </li>
                                    </ul>
                                </div>
                                @endif
                                

            
                            </ul>
                        </nav>
                    </aside>
                    <div class="site-content" style="--delay: .2s">
                        
                        <div class="wrapper" id="wrapper">
            @endif

            

                <!-- Page Content -->
                <main>
                    {{ $slot }}
                </main>
            @if (!isset($header))
                </div>
                </div>
                </div>
            @endif
        </div>

        @stack('modals')

        @livewireScripts
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
        <script src="/js/script.js"></script>
    </body>
</html>
