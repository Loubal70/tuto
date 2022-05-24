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

        <x-torchlight-code language='html' contents="/views/cours/highlighting/exo1/corpsHTML.php" />
    </div>

    <div class="sub">
        <p class="text">   
            {{ __("exo1.We will start by creating our curve which will be an svg. In your HTML, insert these lines inside your body tag:")}}
        </p>

        <x-torchlight-code language='html'>
            <div class="svgbox">
                <svg id="svg" viewBox="0 0 811 521">
                    <path class="curve2" fill="none" stroke="#CECECE" stroke-width="5" d="M3 466C531 456 645 369 808.078 3"/>
                    <path class="curve1" fill="none" stroke="#635283" stroke-width="5" d="M3 466C531 456 645 369 808.078 3"/>
                </svg>
            </div> 
        </x-torchlight-code>
    </div>

    <div class="page-footer">
        <a href="introduction" class="prev">
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
