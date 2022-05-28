<x-app-layout>
    <h1 class="page-title" data-hint="Enter username here!">Introduction</h1>
    <h2 class="section-title">{{ __("dashboard.What is GSAP?") }}</h2>
    <div class="sub">
        <p class="text"> 
            {!! __('dashboard.GSAP are the initials for GreenSock Animation Platform. It is a library of plugins in Javascript where the goal is to animate elements without difficulties, it can be elements of your code like divs, simple images (png, jpeg, webp type) or more advanced (SVG). <br /><br /> In this course, we will use the DrawSVG plugin, which as its name suggests, will <b><u>draw</u></b> SVGs. This is the primary function of this plugin. We will also use the ScrollTrigger plugin, which will allow us to interact with the scroll of our site. Once these two plugins are combined, your site will be transformed, it will no longer be static, but dynamic!') !!}
        </p>
    </div>
    <div class="separator"></div>
    <h2 class="section-title">{{ __("dashboard.GSAP manipulates CSS properties") }}</h2>
    <div class="sub">
        <p class="text"> 
            {{ __('dashboard.The animation boils down to changing the value of the property multiple times per second, giving something the appearance of a movement, a fade, a rotation... GSAP captures the start and end values ​​and calculates the median value 60 times per second. It is what is called interpolation.') }}
        </p>
        <p class="text">
            {{ __('dashboard.For example, to hide an element on the page, GSAP gradually changes the opacity of the element from 1 to 0. The job of animating a web page is to break down a property and change it by its speed or rhythm.')}}
        </p>
        <p class="text">
            {{ __("dashboard.Now that we know why, you need to use GSAP, let's move on to the next part!") }}
        </p>
    </div>
    <div class="page-footer">
        <a href="{{ route('activite2')}}" class="next"> {{ /* Activité 2 is activite 1 */ }}
            <img src="img/arrow.svg" alt="">
            <div class="prev__meta"><span>{{ __('dashboard.Next') }}</span>
                <p>{{ __('exo2.Activity 1') }}</p>
            </div>
        </a>
    </div>
</x-app-layout>
