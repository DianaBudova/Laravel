<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: #6b7280;
                color: rgba(107, 114, 128, var(--tw-text-opacity))
            }
        }
    </style>

    <style>
        p,
        label,
        input,
        button {
            font-size: large;
            border-radius: 5px;
        }

        body {
            font-family: 'Nunito', sans-serif;
        }

        .header {
            display: block;
            margin-bottom: 3vh;
        }

        .header-container {
            margin: 10px;
            text-align: center;
        }

        .header-container-item {}

        .header-container>div {
            display: inline-block;
            color: #e1e1e3;
            margin: 0 2vh;
        }

        .header-container>div>label {
            margin-right: 1vh;
            color: #e1e1e3;
        }

        .header-container>input {
            background-color: #D13F31;
            color: #e1e1e3;
        }

        .tours {
            display: flex;
            flex-wrap: wrap;
            margin: 0 3vh;
        }

        .tours>div>label {
            color: #e1e1e3;
        }

        .tour {
            margin: 2vh;
            border-radius: 5px;
            padding: 10px;
            background-color: rgba(26, 32, 44, 1);
        }

        .tour>p {
            color: #e1e1e3;
            text-align: center;
        }

        .tour>img {
            object-fit: cover;
            height: 20vh;
            width: 30vh;
            border-radius: 5px;
        }

        .tour>button {
            background-color: #1F7872;
            color: #e1e1e3;
        }

        .tour>a {
            background-color: #1F7872;
            color: #e1e1e3;
            border-radius: 5px;
            padding: 0.3vh;
        }
    </style>
</head>

<body class="antialiased" style="background-color: rgba(26, 32, 44, 0.92);">
    <div class="relative flex items-top justify-center bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0"> <!-- min-h-screen -->
        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
            <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
            @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
            @endif
            @endauth
        </div>
        @endif
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            <a href="{{ route('welcome.showCategory') }}" style="background-color: #1F7872; color: #e1e1e3; border-radius: 5px; margin: 0 0.2vh; padding: 0.2vh;">Categories</a>
            <a href="{{ route('welcome.showPost') }}" style="background-color: #1F7872; color: #e1e1e3; border-radius: 5px; margin: 0 0.2vh; padding: 0.2vh;">Posts</a>
            <a href="login" style="background-color: #D13F31; color: #e1e1e3; border-radius: 5px; margin: 0 0.2vh; padding: 0.2vh;">Login</a>
        </div>
        <h1 style="color: #e1e1e3;">Tour agency</h1>
    </div>

    <div class="header">
        <form action="{{ route('welcome.store') }}" method="post"> <!-- action то куда данные отправятся при сабмите формы -->
            @csrf <!-- токен, для защиты от sql иньекций в запросах -->
            @isset($isMessageError)
            @if ($isMessageError)
                <h2 style="text-align: center; color: red;">{{$message}}</h1>
            @else
                <h2 style="text-align: center; color: green;">{{$message}}</h1>
            @endif
            @endisset
            <div class="header-container">
                <div class="header-container-item">
                    <label>Telephone:</label>
                    <input type="tel" name="telephone">
                </div>
                <div class="header-container-item">
                    <label>Pip:</label>
                    <input type="text" name="pip">
                </div>
                <div class="header-container-item">
                    <label>Email:</label>
                    <input type="email" name="email">
                </div>
                <div class="header-container-item">
                    <label>Tour id:</label>
                    <input type="number" name="tour_id">
                </div>
                <div class="header-container-item">
                    <label>Count day:</label>
                    <input type="number" name="count_day">
                </div>
                <div class="header-container-item">
                    <label>Price:</label>
                    <input type="text" name="price">
                </div>
                <input type="submit" name="tourbtn" value="Submit"> <!-- при нажатии кнопки input submit оно перейдет в action -->
            </div>
        </form>
    </div>

    <div class="tours">
        @foreach ($tours as $tour)
        <div class="tour">
            <p>{{$tour->name}}</p>
            <img src='{{$tour->img}}'>
            <p>{{$tour->short_description}}</p>
            <p>{{$tour->price}} per night</p>
            <a href="{{ route('tour.show', $tour->id) }}">Details</a>
        </div>
        @endforeach
    </div>
</body>

</html>