<x-app-layout>
    <h1 class="page-title">{{ __("exo2.Zoom images on scroll") }}</h1>
    <div class="sub">
        <h3 class="sub-title">{{ __("exo2.Links") }}</h3>
        <p class="text">   
            {{ __("exo2.This exercise is independent! The goal is to animate an image when scrolling the page (when you go down the page) by integrating a zoom effect.")}}
        </p>
        <p class="text mt-10">
            {{ __("exo2.For this exercise, you will have to develop your project on codepen!")}}
        </p>

        <a class="btn" target="_blank" href="https://codeshare.io/MNnRwe">{{ __('exo2.Download the necessary data') }}</a>

        <p class="text mt-10">
            {!! __("exo2.In order to carry out this exercise, here are some words that can help you find how to find the solution: <br><br> gsap.registerPlugin, querySelectorAll, images.forEach((el) => {}); <br><br> In order to use the scroll as an indicator, it will be necessary to define 'scrub: true'. You will apply a zoom of <b>1.5</b> (corresponds to 1.5 times the initial size).") !!}
        </p>

        <div class="info-box"><img src="{{ asset('img/warning.svg') }}" alt="">
            <p class="info-box-text">
                {{ __("exo2.Answer to the exercise:") }} <a href="https://codepen.io/iamnito/pen/ZErXyxq" target="_blank">https://codepen.io/iamnito/pen/ZErXyxq</a>
            </p>
        </div>

    </div>


    <div class="page-footer">
        <a href="{{ route('activite2') }}" class="prev">
            <img src="{{ asset('img/arrow.svg') }}" alt="">
            <div class="prev__meta"><span>{{ __('dashboard.Previous') }}</span>
                <p>{{ __('exo2.Activity 2') }}</p>
            </div>
        </a>
    </div>

</x-app-layout>
