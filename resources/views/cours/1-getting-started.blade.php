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
        <h3 class="sub-title mb-16">JS</h3>

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

        <p class="text mt-10">
            {!! __("exo1.These few lines help animate our curve. We create a constant <b>main</b>, which will correspond to a gsap timeline. Timeline can be translated as 'chronology', which means that we speaks of a beginning, an end, and potentially of events occurring between this beginning and this end. To this chronology, we give it a duration of 1. This duration is indicative because this animation will be animated at the scroll, it has no real duration in itself. But this duration value will be useful for placing points on the curve next. To this timeline, we add a scrolltrigger. I mentioned it before, the Scrolltrigger allows to interact with the scroll of the page, in a direct way with the user. Here, we initializes it, and tells it that our trigger, our interactive scroll 'trigger', will be the <b>svgbox</b> div. This indicates that our animation will concern this div, and will be triggered at the this tag. What you see to the left of the ':' are the parameters, and to the right are the values of these parameters. There are a lot of possible parameters, the GSAP documentation and the forums are very well supplied for this. The <b>scrub: true</b> parameter means that the animation is coordinated with the scroll, it does is not activated only once, it follows the scroll. The <b>true</b> value for the pin parameter allows the element to be pinned fixedly in the viewport the time of the animation. The viewport is everything that is displayed on the screen at a given time of the scroll. Without this value, the animation will be triggered according to the other parameters, but the element will not remain fixed during the animation. It is noted that this parameter can be disabled depending on the screen size, for example on mobile, it is not necessary to pin the animation until it is finished, you can let it animate while you scroll.") !!}
        </p>

        <div class="separator"></div>

        <p class="text mt-10">
            {!! __('exo1.The same logic applies to the end parameters. The first parameter means that end trigger is at 80% of the viewport, so it will be stuck to the start trigger. As a result, there will be a horizontal bar placed 80% from the top of <b>svgbox</b> which will be end and start trigger. The second end parameter is a concrete horizontal bar that is placed at 20% from the at the top of the viewport (this bar is therefore static on the page). It is therefore when the specified trigger has 80% over the second bar moved to 80% down from the top of the viewport (1st and 2nd start parameter) that the animation is triggered. Conversely for the end parameters, when the two bars meet, the animation is finished, all this coordinates with the scroll. You can have fun changing these parameters and observe the consequences visual, moreover, it is possible to add <b>markers: true</b>, as a parameter in the scrolltrigger to display the markers / breakpoints on the page and better understand how they work, in a much more graphic and clear manner.') !!}
        </p>

        <iframe loading="lazy" src="https://codepen.io/iamnito/full/mdXMgqL" frameborder="0" width="100%" height="650" sandbox="allow-same-origin allow-scripts allow-top-navigation allow-popups allow-pointer-lock allow-forms">
        </iframe>

        <p class="text mt-10">
            {!! __("exo1.Following this scrolltrigger, we add the “.from” function which is therefore added in parallel with this scrolltrigger. We can thus add what we want behind it, that we want to execute at the same time as this scrolltrigger. Here, we need a drawsvg to display the <b>ON</b> curve of the scroll. We target our <b>curve1</b> element which is our purple curve, and we apply a drawSVG to it, which is at base 0%, hence the <b>0</b> parameter. The curve will then be undrawn at baseline, and will draw up to 100% when the scroll trigger comes to an end. If you've done everything right so far, your curve should be animated correctly, appear on scroll, above the gray curve. If so, congratulations! You can adjust the values of start and end, for a different rendering according to your screen, or even change the width of svgbox in css, which will change the final size of your curve.") !!}
        </p>
      
    </div>

    <h2 class="section-title" id="points_curve">{{ __('exo1.Points to the curve') }}</h2>
    <div class="sub">
        <p class="text">
            {{ __("exo1.Now we're going to make things a little more complex, a little more interesting. We will add points to the curve, which will be displayed when the curve is drawn. The points will appear at the right time on the curve.") }}
        </p>

        <h3 class="sub-title mb-16">{{ __('exo1.Start by adding this to your HTML, in your SVG tag after your two curves:') }}</h3>

        <x-torchlight-code language='html'>
            <circle class="ball ball02" cx="300" cy="445" r="20"/> 
            <circle class="ball ball04" cx="672" cy="250" r="20"/>
        </x-torchlight-code>

        <p class="text mt-10">
            {!! __("exo1.These circle tags are usually not used much, but are very useful here. The <b>ball</b> class serves for the display of our ball, or circle, and the classes ball02 and ball03 are used to identify the balls independently, to be able to display the first one, then the second one. The parameters <b>cx</b> and <b>cy</b> allow you to place the circle in the right place with pixel values, relative to the <b>svg</b> tag in which the <b>circle</b> are located. We have <b>cx</b> for the abscissa, and <b>cy</b> for the ordinate. Knowing that they are circles, the <b>r</b> parameters allow them to give a radius, here of 20 pixels. If you have another curve, or you want to customize your points, add more, feel free!") !!}
        </p>

        <h3 class="sub-title mb-16">{{ __('exo1.Add this to your CSS:') }}</h3>

        <x-torchlight-code language='css'>
            .ball { 
                stroke :#EDE8E6; 
                stroke-width: 5px; 
                z-index : 9999; 
                fill :#635283; 
                visibility : hidden; 
            }
        </x-torchlight-code>

        <h3 class="sub-title my-16">{{ __("exo1.Then this in your javascript BEFORE declaring your 'main' constant:") }}</h3>
        <x-torchlight-code language='js'>
            const pulses = gsap.timeline({ 
                defaults: { 
                  autoAlpha: 1, 
                  ease: "elastic.out(2.5, 1)" 
                }}) 
               .to(".ball02", {}, 0.15) 
               .to(".ball03", {}, 0.45)
        </x-torchlight-code>

        <div class="info-box mt-10"><img src="img/warning.svg" alt="">
            <p class="info-box-text">
                {{ __('exo1.Finally on your javascript code, return to the declaration of the main variable (const main =). Go to the last line .from(".curve1", {drawSVG: 0}) ), remove the semicolon, go to the line and add ".add(pulses, 0);"') }}
            </p>
        </div>

        <x-torchlight-code language='js'>
            const main = gsap.timeline({defaults: {duration: 1},
                    scrollTrigger: {
                        trigger: ".svgbox",
                        scrub: true,
                        pin: true,
                        start: "bottom 90%",
                        end: "bottom 20%",
                        markers : true,
                    }})
                    .from(".curve1", {drawSVG : 0})
                    .add(pulses, 0);
        </x-torchlight-code>

        <p class="text mt-10">
            {!! __('exo1.Magic! When scrolling you have small circles that appear in the right place, and at just the right time! How does this all work then? <br><br> We have defined a constant that we called pulses, like a heartbeat, because well why not. You can call him Michel if you want. Everyone has their own tastes after all... <br><br> If you have a good eye you have already noticed that in the css that you just added, the <b>.balls</b> are in <b>visibility: hidden</b>, so they are hidden, and we make them appear in javascript.') !!}
        </p>

        <div class="separator"></div>

        <p class="text mt-10">
            {!! __('exo1.In our new constant <b>pulses</b>, the value <b>autoAlpha: 1</b> indicates that the opacity will be 1, i. e. through this constant, what will be passed as a parameter will definitely be in opacity 1, therefore clearly displayed on the screen. The parameter just below concerns the animation of what will be passed as parameter. Finally, the <b>circle</b> will be passed as a parameter to this constant, they will be in opacity 1 (remember that they are in visibility : hidden) and will have a slight animation which again is not really an animation because we animate at the scroll, it is not as if the animation was displayed only once at a given time. The difference is that when scrolling you can go back or forward like a video.') !!}
        </p>

        <p class="text mt-10">
            {!! __('exo1.This said, this <b>ease</b> setting allows for no not to display the circles all at once, but to have them displayed relatively progressively. If you want to play with the possibilities of this parameter, I refer you to the doc that is very well supplied at this level: https://greensock. com/docs/v2/Easing.') !!}
        </p>

        <p class="text mt-10">
            {!! __("exo1.Then, we apply this constant with the <b>.to</b> clause to our two circles, i. e <b>.ball02</b> and <b>ball03</b> at 0.15 and 0.45 seconds respectively. Right now it doesn't mean much, but to put it another way, the <b>.ball02</b> will appear on the screen with the ease effect at 15% of curve evolution, and the <b>.ball03</b> will be displayed at 45% of the curve evolution still with the ease effect.") !!}
        </p>

        <p class="text mt-10">
            {!! __("exo1.It is important to understand that these values have been chosen and are intended, as well as that the coordinates of <b>.ball02 and .ball03</b> . These 4 parameters have been chosen to work together. If you want to add more points, it's up to you to make it match!! The last thing we need to do with regard to animation is to link our constant making the circles appear with our main constant 'main' which manages the drawing of our curve. So all we had to do was simply add the <b>.add</b> clause with <b>pulses</b> as the parameter, our constant. The 0 makes sure that no animation has started at the beginning of the scroll trigger. This value coincides with 0. 15 and 0. 45 attributed for the appearance of circles. This seems logical to initialize, but if you don't do it nothing works...") !!}
        </p>

        <h3 class="sub-title mb-16">{{ __('exo1.You should have this if you did everything right in order:') }}</h3>

        <iframe loading="lazy" src="https://codepen.io/iamnito/full/poarMwX" frameborder="0" width="100%" height="650" sandbox="allow-same-origin allow-scripts allow-top-navigation allow-popups allow-pointer-lock allow-forms"></iframe>

        <h3 class="sub-title mb-16">{{ __('exo1.4th step:') }}</h3>

        <p class="text mt-10">
            {{ __("exo1.Great! Everything works! There’s still a little bit of background here. . . Yes, yes, yes. You remember at the beginning, we had vertical lines on the back, data in abscissa, etc. . . It’s time to add all this, in svg. Yes yes, in svg. By the way, you should know that there are dozens of sites to customize your svg to your liking. We'll just add some stuff to your svg in your HTML to make it more beautiful!") }}
            
        </p>


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
