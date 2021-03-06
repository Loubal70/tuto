<?php
return [
    // The Torchlight client caches highlighted code blocks. Here
    // you can define which cache driver you'd like to use.
    'cache' => env('TORCHLIGHT_CACHE_DRIVER'),
 
    // Which theme you want to use. You can find all of the themes at
    // https://torchlight.dev/themes. 
    'theme' => env('TORCHLIGHT_THEME', 'atom-one-dark'),
 
    // Your API token from torchlight.dev.
    'token' => env('TORCHLIGHT_TOKEN'),
 
    // If you want to register the blade directives, set this to true.
    'blade_components' => true,

    'snippet_directories' => [
        resource_path()
    ],
 
    // The Host of the API.
    'host' => env('TORCHLIGHT_HOST', 'https://api.torchlight.dev'),
 
    // Global options to control blocks-level settings.
    // @see https://torchlight.dev/docs/options 
    'options' => [
        // Turn line numbers on or off globally
        'lineNumbers' => true,
 
        // Control the `style` attribute applied to line numbers.
        // 'lineNumbersStyle' => '',
 
        // Turn on +/- diff indicators.
        // 'diffIndicators' => true,
 
        // If there are any diff indicators for a line, put them
        // in place of the line number to save horizontal space.
        // 'diffIndicatorsInPlaceOfLineNumbers' => true,
 
        // When lines are collapsed, this is the text that will
        // be shown to indicate that they can be expanded.
        // 'summaryCollapsedIndicator' => '...',
    ]
];