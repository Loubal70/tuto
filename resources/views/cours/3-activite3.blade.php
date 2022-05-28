<x-app-layout>
    <h1 class="page-title">{{ __("exo3.Let's create animated particles together!") }}</h1>
    <div class="sub">
        <h3 class="sub-title">{{ __("exo2.Links") }}</h3>
        <p class="text">   
            {{ __("exo3.In this tutorial, we will see how to animate our page with particles (falling snow).")}}
        </p>
        <p class="text mt-10">
            {{ __("exo2.For this exercise, you will have to develop your project on codepen!")}}
        </p>

        <div class="aspect-w-16 aspect-h-9">
            <iframe src="https://www.youtube.com/embed/GN_92fWPJh4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="width: 100%; height: 450px; margin-bottom: 3rem"></iframe>
        </div>
        
        
        <x-torchlight-code language='html' contents="/views/cours/highlighting/exo3/corpsHTML.php" />

    </div>


    <div class="page-footer">
        <a href="{{ route('getting_started') }}" class="prev">
            <img src="img/arrow.svg" alt="">
            <div class="prev__meta"><span>{{ __('dashboard.Previous') }}</span>
                <p>{{ __('dashboard.Getting started') }}</p>
            </div>
        </a>
    </div>

</x-app-layout>
