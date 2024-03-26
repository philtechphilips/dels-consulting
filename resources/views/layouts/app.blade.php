<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>{{ getenv('APP_NAME') }} | Web Application - UI/UX - Career</title>
    <meta name="description"
        content="We power the world with energy and innovation by embracing a future with clean energy, efficiency, and progress to illuminate a brighter tomorrow.">
    <meta name="keywords" content="Dels, Dels Consulting, Website, Mobile App, Digital Marketing, SEO, Consultant">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('styles/global.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/Maryson Logo.png') }}" sizes="any">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        @import"https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap";

        *,
        :before,
        :after {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb
        }

        :before,
        :after {
            --tw-content: ""
        }

        html,
        :host {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            -o-tab-size: 4;
            tab-size: 4;
            font-family: ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", Segoe UI Symbol, "Noto Color Emoji";
            font-feature-settings: normal;
            font-variation-settings: normal;
            -webkit-tap-highlight-color: transparent
        }

        body {
            margin: 0;
            line-height: inherit
        }

        hr {
            height: 0;
            color: inherit;
            border-top-width: 1px
        }

        abbr:where([title]) {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: inherit;
            font-weight: inherit
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        b,
        strong {
            font-weight: bolder
        }

        code,
        kbd,
        samp,
        pre {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, Liberation Mono, Courier New, monospace;
            font-feature-settings: normal;
            font-variation-settings: normal;
            font-size: 1em
        }

        small {
            font-size: 80%
        }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        sub {
            bottom: -.25em
        }

        sup {
            top: -.5em
        }

        table {
            text-indent: 0;
            border-color: inherit;
            border-collapse: collapse
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-feature-settings: inherit;
            font-variation-settings: inherit;
            font-size: 100%;
            font-weight: inherit;
            line-height: inherit;
            color: inherit;
            margin: 0;
            padding: 0
        }

        button,
        select {
            text-transform: none
        }

        button,
        [type=button],
        [type=reset],
        [type=submit] {
            -webkit-appearance: button;
            background-color: transparent;
            background-image: none
        }

        :-moz-focusring {
            outline: auto
        }

        :-moz-ui-invalid {
            box-shadow: none
        }

        progress {
            vertical-align: baseline
        }

        ::-webkit-inner-spin-button,
        ::-webkit-outer-spin-button {
            height: auto
        }

        [type=search] {
            -webkit-appearance: textfield;
            outline-offset: -2px
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        summary {
            display: list-item
        }

        blockquote,
        dl,
        dd,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        figure,
        p,
        pre {
            margin: 0
        }

        fieldset {
            margin: 0;
            padding: 0
        }

        legend {
            padding: 0
        }

        ol,
        ul,
        menu {
            list-style: none;
            margin: 0;
            padding: 0
        }

        dialog {
            padding: 0
        }

        textarea {
            resize: vertical
        }

        input::-moz-placeholder,
        textarea::-moz-placeholder {
            opacity: 1;
            color: #9ca3af
        }

        input::placeholder,
        textarea::placeholder {
            opacity: 1;
            color: #9ca3af
        }

        button,
        [role=button] {
            cursor: pointer
        }

        :disabled {
            cursor: default
        }

        img,
        svg,
        video,
        canvas,
        audio,
        iframe,
        embed,
        object {
            display: block;
            vertical-align: middle
        }

        img,
        video {
            max-width: 100%;
            height: auto
        }

        [hidden] {
            display: none
        }

        *,
        :before,
        :after {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-gradient-from-position: ;
            --tw-gradient-via-position: ;
            --tw-gradient-to-position: ;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / .5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-gradient-from-position: ;
            --tw-gradient-via-position: ;
            --tw-gradient-to-position: ;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / .5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        .fixed {
            position: fixed
        }

        .absolute {
            position: absolute
        }

        .relative {
            position: relative
        }

        .-right-\[104px\] {
            right: -104px
        }

        .-right-\[50px\] {
            right: -50px
        }

        .bottom-40 {
            bottom: 10rem
        }

        .left-0 {
            left: 0
        }

        .right-0 {
            right: 0
        }

        .right-\[300px\] {
            right: 300px
        }

        .top-0 {
            top: 0
        }

        .top-24 {
            top: 6rem
        }

        .top-\[110px\] {
            top: 110px
        }

        .top-\[200px\] {
            top: 200px
        }

        .z-0 {
            z-index: 0
        }

        .z-10 {
            z-index: 10
        }

        .z-\[10000\] {
            z-index: 10000
        }

        .z-\[1000\] {
            z-index: 1000
        }

        .z-\[100\] {
            z-index: 100
        }

        .-ml-28 {
            margin-left: -7rem
        }

        .-mt-80 {
            margin-top: -20rem
        }

        .mb-2 {
            margin-bottom: .5rem
        }

        .mb-20 {
            margin-bottom: 5rem
        }

        .mb-4 {
            margin-bottom: 1rem
        }

        .mt-1 {
            margin-top: .25rem
        }

        .mt-10 {
            margin-top: 2.5rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .mt-\[1px\] {
            margin-top: 1px
        }

        .block {
            display: block
        }

        .flex {
            display: flex
        }

        .hidden {
            display: none
        }

        .h-10 {
            height: 2.5rem
        }

        .h-screen {
            height: 100vh
        }

        .min-h-screen {
            min-height: 100vh
        }

        .w-1\/2 {
            width: 50%
        }

        .w-10 {
            width: 2.5rem
        }

        .w-20 {
            width: 5rem
        }

        .w-\[250px\] {
            width: 250px
        }

        .w-\[350px\] {
            width: 350px
        }

        .w-\[650px\] {
            width: 650px
        }

        .w-fit {
            width: -moz-fit-content;
            width: fit-content
        }

        .w-full {
            width: 100%
        }

        .grow {
            flex-grow: 1
        }

        .translate-x-\[500px\] {
            --tw-translate-x: 500px;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
        }

        .transform {
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
        }

        .flex-col {
            flex-direction: column
        }

        .flex-col-reverse {
            flex-direction: column-reverse
        }

        .flex-wrap {
            flex-wrap: wrap
        }

        .items-end {
            align-items: flex-end
        }

        .items-center {
            align-items: center
        }

        .justify-end {
            justify-content: flex-end
        }

        .justify-center {
            justify-content: center
        }

        .justify-between {
            justify-content: space-between
        }

        .gap-1 {
            gap: .25rem
        }

        .gap-10 {
            gap: 2.5rem
        }

        .gap-2 {
            gap: .5rem
        }

        .gap-20 {
            gap: 5rem
        }

        .gap-3 {
            gap: .75rem
        }

        .gap-4 {
            gap: 1rem
        }

        .gap-5 {
            gap: 1.25rem
        }

        .gap-6 {
            gap: 1.5rem
        }

        .rounded-3xl {
            border-radius: 1.5rem
        }

        .rounded-full {
            border-radius: 9999px
        }

        .rounded-lg {
            border-radius: .5rem
        }

        .rounded-xl {
            border-radius: .75rem
        }

        .border-gray-500 {
            --tw-border-opacity: 1;
            border-color: rgb(107 114 128 / var(--tw-border-opacity))
        }

        .bg-\[\#0454CB\] {
            --tw-bg-opacity: 1;
            background-color: rgb(4 84 203 / var(--tw-bg-opacity))
        }

        .bg-\[\#CDDDF5\] {
            --tw-bg-opacity: 1;
            background-color: rgb(205 221 245 / var(--tw-bg-opacity))
        }

        .bg-\[\#F5F5F7\] {
            --tw-bg-opacity: 1;
            background-color: rgb(245 245 247 / var(--tw-bg-opacity))
        }

        .bg-\[\#FCFCFC\] {
            --tw-bg-opacity: 1;
            background-color: rgb(252 252 252 / var(--tw-bg-opacity))
        }

        .bg-\[white\] {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .bg-gray-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity))
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .p-0 {
            padding: 0
        }

        .p-10 {
            padding: 2.5rem
        }

        .p-5 {
            padding: 1.25rem
        }

        .px-12 {
            padding-left: 3rem;
            padding-right: 3rem
        }

        .px-20 {
            padding-left: 5rem;
            padding-right: 5rem
        }

        .px-3 {
            padding-left: .75rem;
            padding-right: .75rem
        }

        .px-4 {
            padding-left: 1rem;
            padding-right: 1rem
        }

        .px-5 {
            padding-left: 1.25rem;
            padding-right: 1.25rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .px-8 {
            padding-left: 2rem;
            padding-right: 2rem
        }

        .py-10 {
            padding-top: 2.5rem;
            padding-bottom: 2.5rem
        }

        .py-12 {
            padding-top: 3rem;
            padding-bottom: 3rem
        }

        .py-2 {
            padding-top: .5rem;
            padding-bottom: .5rem
        }

        .py-20 {
            padding-top: 5rem;
            padding-bottom: 5rem
        }

        .py-28 {
            padding-top: 7rem;
            padding-bottom: 7rem
        }

        .py-3 {
            padding-top: .75rem;
            padding-bottom: .75rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .py-40 {
            padding-top: 10rem;
            padding-bottom: 10rem
        }

        .py-5 {
            padding-top: 1.25rem;
            padding-bottom: 1.25rem
        }

        .pb-28 {
            padding-bottom: 7rem
        }

        .pl-0 {
            padding-left: 0
        }

        .pr-5 {
            padding-right: 1.25rem
        }

        .text-center {
            text-align: center
        }

        .text-right {
            text-align: right
        }

        .text-2xl {
            font-size: 1.5rem;
            line-height: 2rem
        }

        .text-3xl {
            font-size: 1.875rem;
            line-height: 2.25rem
        }

        .text-4xl {
            font-size: 2.25rem;
            line-height: 2.5rem
        }

        .text-base {
            font-size: 1rem;
            line-height: 1.5rem
        }

        .text-lg {
            font-size: 1.125rem;
            line-height: 1.75rem
        }

        .text-sm {
            font-size: .875rem;
            line-height: 1.25rem
        }

        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem
        }

        .text-xs {
            font-size: .75rem;
            line-height: 1rem
        }

        .font-bold {
            font-weight: 700
        }

        .font-medium {
            font-weight: 500
        }

        .uppercase {
            text-transform: uppercase
        }

        .leading-6 {
            line-height: 1.5rem
        }

        .leading-\[40px\] {
            line-height: 40px
        }

        .leading-\[50px\] {
            line-height: 50px
        }

        .text-\[\#010101\] {
            --tw-text-opacity: 1;
            color: rgb(1 1 1 / var(--tw-text-opacity))
        }

        .text-\[\#0454CB\] {
            --tw-text-opacity: 1;
            color: rgb(4 84 203 / var(--tw-text-opacity))
        }

        .text-\[\#1D1D1E\] {
            --tw-text-opacity: 1;
            color: rgb(29 29 30 / var(--tw-text-opacity))
        }

        .text-\[\#434343\] {
            --tw-text-opacity: 1;
            color: rgb(67 67 67 / var(--tw-text-opacity))
        }

        .text-\[\#474747\] {
            --tw-text-opacity: 1;
            color: rgb(71 71 71 / var(--tw-text-opacity))
        }

        .text-\[\#4D4F51\] {
            --tw-text-opacity: 1;
            color: rgb(77 79 81 / var(--tw-text-opacity))
        }

        .text-\[\#4F4F4F\] {
            --tw-text-opacity: 1;
            color: rgb(79 79 79 / var(--tw-text-opacity))
        }

        .text-\[\#6D6D6D\] {
            --tw-text-opacity: 1;
            color: rgb(109 109 109 / var(--tw-text-opacity))
        }

        .text-\[\#828282\] {
            --tw-text-opacity: 1;
            color: rgb(130 130 130 / var(--tw-text-opacity))
        }

        .text-\[\#ffffff\],
        .text-white {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .shadow {
            --tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);
            --tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .shadow-md {
            --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / .1), 0 2px 4px -2px rgb(0 0 0 / .1);
            --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .outline-none {
            outline: 2px solid transparent;
            outline-offset: 2px
        }

        .duration-\[300ms\] {
            transition-duration: .3s
        }

        .ease-in {
            transition-timing-function: cubic-bezier(.4, 0, 1, 1)
        }

        body {
            font-family: Montserrat, sans-serif;
            overflow-x: hidden !important
        }

        .hover\:font-semibold:hover {
            font-weight: 600
        }

        .hover\:text-\[\#0454CB\]:hover {
            --tw-text-opacity: 1;
            color: rgb(4 84 203 / var(--tw-text-opacity))
        }

        @media (min-width: 768px) {
            .md\:mb-8 {
                margin-bottom: 2rem
            }

            .md\:ml-36 {
                margin-left: 9rem
            }

            .md\:mt-0 {
                margin-top: 0
            }

            .md\:block {
                display: block
            }

            .md\:flex {
                display: flex
            }

            .md\:hidden {
                display: none
            }

            .md\:h-\[521px\] {
                height: 521px
            }

            .md\:w-1\/2 {
                width: 50%
            }

            .md\:w-96 {
                width: 24rem
            }

            .md\:w-\[400px\] {
                width: 400px
            }

            .md\:w-\[480px\] {
                width: 480px
            }

            .md\:w-\[650px\] {
                width: 650px
            }

            .md\:w-\[700px\] {
                width: 700px
            }

            .md\:w-\[750px\] {
                width: 750px
            }

            .md\:flex-row {
                flex-direction: row
            }

            .md\:items-start {
                align-items: flex-start
            }

            .md\:items-center {
                align-items: center
            }

            .md\:justify-start {
                justify-content: flex-start
            }

            .md\:gap-10 {
                gap: 2.5rem
            }

            .md\:gap-20 {
                gap: 5rem
            }

            .md\:rounded-l-full {
                border-top-left-radius: 9999px;
                border-bottom-left-radius: 9999px
            }

            .md\:rounded-r-full {
                border-top-right-radius: 9999px;
                border-bottom-right-radius: 9999px
            }

            .md\:px-0 {
                padding-left: 0;
                padding-right: 0
            }

            .md\:px-16 {
                padding-left: 4rem;
                padding-right: 4rem
            }

            .md\:px-20 {
                padding-left: 5rem;
                padding-right: 5rem
            }

            .md\:px-24 {
                padding-left: 6rem;
                padding-right: 6rem
            }

            .md\:px-28 {
                padding-left: 7rem;
                padding-right: 7rem
            }

            .md\:py-10 {
                padding-top: 2.5rem;
                padding-bottom: 2.5rem
            }

            .md\:py-14 {
                padding-top: 3.5rem;
                padding-bottom: 3.5rem
            }

            .md\:py-40 {
                padding-top: 10rem;
                padding-bottom: 10rem
            }

            .md\:pl-16 {
                padding-left: 4rem
            }

            .md\:pl-24 {
                padding-left: 6rem
            }

            .md\:pr-20 {
                padding-right: 5rem
            }

            .md\:pr-24 {
                padding-right: 6rem
            }

            .md\:pr-28 {
                padding-right: 7rem
            }

            .md\:pr-5 {
                padding-right: 1.25rem
            }

            .md\:text-left {
                text-align: left
            }

            .md\:text-4xl {
                font-size: 2.25rem;
                line-height: 2.5rem
            }

            .md\:text-5xl {
                font-size: 3rem;
                line-height: 1
            }

            .md\:text-\[42px\] {
                font-size: 42px
            }

            .md\:text-\[48px\] {
                font-size: 48px
            }

            .md\:text-lg {
                font-size: 1.125rem;
                line-height: 1.75rem
            }

            .md\:text-xl {
                font-size: 1.25rem;
                line-height: 1.75rem
            }

            .md\:leading-\[70px\] {
                line-height: 70px
            }
        }
    </style>
    @vite('resources/css/app.css')
    <!-- Styles -->
</head>

<body>
    <div id="app">
        <main class="bg-[#F5F5F7]">
            @include('includes.navbar')
            @yield('content')
            @include('includes.footer')
        </main>
    </div>

    {{-- Swiper JS --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    {{-- Swiper JS --}}

    {{-- Toggle Mobile Navigation  --}}
    <script>
        const toggleButton = document.querySelectorAll('.menuButton');
        const menu = document.getElementById('menu');

        toggleButton.forEach(function(button) {
            button.addEventListener('click', function() {
                menu.classList.toggle('translate-x-[500px]');
            })
        });
    </script>
    {{-- Toggle Mobile Navigation --}}


    {{-- Active Page --}}
    <script>
        var currentPage = window.location.pathname;

        document.querySelectorAll('.list li').forEach(function(li) {

            var link = li.querySelector('a');
            console.log(link)
            if (link.getAttribute('href') === currentPage) {
                li.querySelector('a').style.color = '#0454CB';
            } else {
                li.querySelector('a').style.color = '#828282';
            }
        });
    </script>
    {{-- Active Page --}}

    {{-- Service Dropdown --}}
    <script>
        const toggleDropdown = () => {
            const dropdown = document.getElementById("service_dropdown");
            dropdown.classList.toggle("service-hidden");
        }
    </script>
    {{-- Service Dropdown --}}

    @yield('script')
</body>

</html>
