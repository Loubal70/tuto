<x-app-layout>
    <h1 class="page-title">{{ __('dashboard.Getting started') }}</h1>
    <h2 class="section-title">Installation</h2>
    <div class="sub">
        <h3 class="sub-title">CDN</h3>
        <p class="text">   
            {{ __('dashboard.')}}
        </p>
<pre class="code-snippet">{{ '<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"
></script>' }}   
</pre>  

<x-torchlight-code language='php'>
    echo "Hello World!";
</x-torchlight-code>
    </div>
    <div class="sub">
        <h3 class="sub-title">NPM</h3>
        <p class="text"> You can also install with Node Package Manager (NPM). This is not the way we are going to use
            neither, but it allows you to configure your scaffolding exactly the way you want and be aware of the
            installed packages in your app as you will have to manually install them. </p>
        <pre class="code-snippet"><code class="hljs bash">npm install vue</code></pre>
    </div>
    <div class="sub">
        <h3 class="sub-title">Vite</h3>
        <p class="text"> Vite is a "no-bundler" tool created by Evan You, the same person who worked on Vue.js. Vite is
            an alternative for Webpack or Parcel, but its compiling logic is completely different : while regular
            bundlers gather your code, images and assets and then compile them to serve the app on your local server ;
            with Vite, your local server is always available and the tool compiles only the files that are needed to
            render the page you want to display. It means the scripts and compiling time are litteraly 10-100x faster
            than the concurrency. </p>
        <p class="text"> You can start to work with a framework really quickly with Vite, as you can run the tool and
            select a framework-oriented configuration (including basic scaffolding with the minimum required). With Vue,
            it just imports the core packages and you have to manually install the router, the transpiler, etc. </p>
        <pre class="code-snippet"><code class="hljs bash">npm init @vitejs/app
    
    yarn create @vitejs/app</code></pre>
    </div>
    <div class="sub">
        <h3 class="sub-title">Vue-CLI</h3>
        <p class="text"> Last but not least, Vue provides a way to generate a basic and quick scaffolding for you to
            start coding your app! It's named Vue-CLI and requires you to install Vue core packages on your machine.
            With Vue-CLI, you'll access to new commands and scripts that don't exist normally when you use NPM. This is
            the tool we are going to use throughout this crash course, so please consider verifying if you have
            everything you need before jumping in. </p>
        <div class="info-box"><img src="img/warning.svg" alt="">
            <p class="info-box-text"> You'll need to have Vue installed globally on your computer for the following
                part. To install it, please run the command down below in your CLI : </p>
        </div>
        <pre class="code-snippet"><code class="hljs bash">npm install -g @vue/cli
    
    yarn global add @vue/cli</code></pre>
        <p class="text"> Once you have Vue installed gobally, you will be able to run this command : </p>
        <pre class="code-snippet"><code class="hljs bash">vue create vue-tuto</code></pre>
        <p class="text"> You'll be asked to select many features and choose a linter, a router, and some other stuff.
            For the sake of this tutorial, select ESLint and Prettier ([Vue 2] babel, eslint). </p>
        <div class="info-box"><img src="img/warning.svg" alt="">
            <p class="info-box-text"> We decided to use Vue 2x for this tutorial as it's a pretty stable version in
                comparison to Vue 3 which has left beta-state pretty recently, so you could experience some problems
                with unsupported or non-updated packages. </p>
        </div>
    </div>
    <div class="page-footer">
        <a href="introduction" class="prev">
            <img src="img/arrow.svg" alt="">
            <div class="prev__meta"><span>Previous</span>
                <p>Introduction</p>
            </div>
        </a>
        <a href="understand-basics" class="next">
            <img src="img/arrow.svg" alt="">
            <div class="prev__meta"><span>Next</span>
                <p>Understand basics</p>
            </div>
        </a>
    </div>
</x-app-layout>
