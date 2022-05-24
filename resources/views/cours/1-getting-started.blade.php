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
        <h3 class="sub-title">{{ __('exo1.Import SVG') }}</h3>
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

        <p class="text mt-10">
            {!! __('exo1.You noticed that in this svg tag, there are two <b>path</b>. Indeed, one curve will be in gray, and one in purple here in the example, it adds a nicer effect to reveal the curve. It will already be present in gray, and will be highlighted in purple when scrolling. Each curve has its own class, to better target them during the animation. We could also have put IDs. The viewBox of the svg tag corresponds to the display window of the svg. You can have fun changing these values, but the values shown are the most optimized for the display of this curve. Since it is an svg, we can change its size later without losing quality. <b>Warning:</b> view box =/ width & height of svg! The curve is placed in a <b>div</b> class <b>svgbox</b>. This class will be useful later on, with regard to animation. It will also serve us in CSS.') !!}
        </p>
    </div>

    <h2 class="section-title" id="CSS">CSS / JS</h2>
    <div class="sub">
        <h3 class="sub-title mb-10">CSS</h3>
        <x-torchlight-code language='css'>
            body {
                background-color:#EDE8E6;
            }
             
            .svgbox {
                stroke-linecap: round;
                 /* {{ __('exo1.This function makes it possible to round the end of the two curves in svg') }}*/
                width : 50vw;
                 /* {{ __('exo1.We adjust the size of our div, itself containing our svg')}} */
                margin-left: auto;
                margin-right: auto;
                margin-bottom : 100px;
            }
        </x-torchlight-code>

        <div class="info-box mt-10"><img src="img/warning.svg" alt="">
            <p class="info-box-text">
                {{ __('exo1.Normally if you have followed this far, you have a nice purple curve that appears on your screen in the middle. Good job.') }}
            </p>
        </div>
    </div>

    <div class="sub">
        <h3 class="sub-title mb-10">JS</h3>

        <p class="text">
            {!! __('exo1.Several solutions: A script tag in your HTML file to place the javascript code, Create a separate file, link it to your file and write your javascript in it. I recommend the second option: it is better to have files with different functions, a matter of organization.') !!}
        </p>

        <x-torchlight-code language='js'>
            gsap.registerPlugin(DrawSVGPlugin, ScrollTrigger);
            // {{ __('This line ensures that gsap uses these two plugins. They are “registered” in a certain way. It is not mandatory, but often without this clause there can be bugs.') }}
            const main = gsap.timeline({defaults: {duration: 1},
            
                scrollTrigger: {
                    trigger: ".svgbox",
                    scrub: true,
                    pin: true,
                    start: "bottom 90%",
                    end: "bottom 20%",
                    markers : true,
                }
            }).from(".curve1", {drawSVG: 0});
        </x-torchlight-code>

       
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
