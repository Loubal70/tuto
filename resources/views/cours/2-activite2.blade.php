<x-app-layout>
    <h1 class="page-title">{{ __('dashboard.Getting started') }}</h1>
    <h2 class="section-title" id="Installation">Installation</h2>
    <div class="sub">
        <h3 class="sub-title">HTML / CDN</h3>
        <p class="text">   
            {{ __("exo1.First, create a folder for this exercise. From your text editor, click at the top left on 'File' then 'Open a folder' indicating the folder you have previously created. Create an HTML file, add the basic HTML body. You can now import GSAP as well as the two plugins.")}}
        </p>

        <div class="info-box"><img src="img/warning.svg" alt="">
            <p class="info-box-text">
                {{ __('exo1.Note that the DrawSVG plugin is part of the GSAP paid plugins, the link provided here will only work locally, or on a codepen for example.') }}
            </p>
        </div>

    </div>


    <div class="page-footer">
        <a href="{{ route('getting_started')}}" class="prev">
            <img src="img/arrow.svg" alt="">
            <div class="prev__meta"><span>{{ __('dashboard.Previous') }}</span>
                <p>Introduction</p>
            </div>
        </a>
        <a href="understand-basics" class="next">
            <img src="img/arrow.svg" alt="">
            <div class="prev__meta"><span>{{ __('dashboard.Next') }}</span>
                <p>Understand basics</p>
            </div>
        </a>
    </div>

</x-app-layout>
