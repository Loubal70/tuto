<x-app-layout>
    <h1 class="page-title">{{ __('dashboard.Getting started') }}</h1>
    <h2 class="section-title" id="Installation">{{ "exo2.Zoom images on scroll" }}</h2>
    <div class="sub">
        <h3 class="sub-title">{{ __("exo2.Links") }}</h3>
        <p class="text">   
            {{ __("exo2.This exercise is independent! The goal is to animate an image when scrolling the page (when you go down the page) by integrating a zoom effect.")}}
        </p>
        <p class="text mt-10">
            {{ __("exo2.For this exercise, you will have to develop your project on codepen!")}}
        </p>

        <a href="https://codeshare.io/MNnRwe">{{ __('exo2.Download the necessary data') }}</a>

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
