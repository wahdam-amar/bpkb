<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="./assets/img/favicon.ico" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css" />

    <style>
        #live-chat {
            bottom: 0;
            font-size: 12px;
            right: 24px;
            position: fixed;
            width: 300px;
        }

        #live-chat header {
            background: #293239;
            border-radius: 5px 5px 0 0;
            color: #fff;
            cursor: pointer;
            padding: 16px 24px;
        }

        #live-chat h4:before {
            background: #1a8a34;
            border-radius: 50%;
            content: "";
            display: inline-block;
            height: 8px;
            margin: 0 8px 0 0;
            width: 8px;
        }

        #live-chat h4 {
            font-size: 12px;
        }

        #live-chat h5 {
            font-size: 10px;
        }

        #live-chat form {
            padding: 24px;
        }

        .chat-message-counter {
            background: #e62727;
            border: 1px solid #fff;
            border-radius: 50%;
            display: none;
            font-size: 12px;
            font-weight: bold;
            height: 28px;
            left: 0;
            line-height: 28px;
            margin: -15px 0 0 -15px;
            position: absolute;
            text-align: center;
            top: 0;
            width: 28px;
        }

        .chat-close {
            background: #1b2126;
            border-radius: 50%;
            color: #fff;
            display: block;
            float: right;
            font-size: 10px;
            height: 16px;
            line-height: 16px;
            margin: 2px 0 0 0;
            text-align: center;
            width: 16px;
        }

        .chat {
            background: #fff;
        }

        .chat-history {
            height: 252px;
            padding: 8px 24px;
            /* overflow-y: scroll; */
        }

        .chat-message {
            margin: 16px 0;
        }

        .chat-message img {
            border-radius: 50%;
            float: left;
        }

        .chat-message-content {
            margin-left: 56px;
        }

        .chat-time {
            float: right;
            font-size: 10px;
        }

        .chat-feedback {
            font-style: italic;
            margin: 0 0 0 80px;
        }


        [x-cloak] {
            display: none !important;
        }

    </style>
    <title>Welcome</title>
</head>

<body class="text-gray-800 antialiased">
    <nav class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 ">
        <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
            <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start">
                <a class="text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase text-white"
                    href="/">Welcome</a>
                <button
                    class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none"
                    type="button" onclick="toggleNavbar('example-collapse-navbar')">
                    <i class="text-white fas fa-bars"></i>
                </button>
            </div>
            <div class="lg:flex flex-grow items-center bg-white lg:bg-transparent lg:shadow-none hidden"
                id="example-collapse-navbar">
                <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
                    <li class="flex items-center sm:bg-gray-100">
                        <a href="{{ route('login') }}"
                            class="bg-white text-gray-800 active:bg-gray-100 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3"
                            style="transition: all 0.15s ease 0s;">
                            Login
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <div class="relative pt-16 pb-32 flex content-center items-center justify-center" style="min-height: 75vh;">
            <div class="absolute top-0 w-full h-full bg-center bg-cover"
                style='background-image: url("{{ asset('
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                images/home.svg') }}");'>
                <span id="blackOverlay" class="w-full h-full absolute opacity-75 bg-black"></span>
            </div>
            <div class="container relative mx-auto">
                <div class="items-center flex flex-wrap">
                    <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
                        <div class="pr-12">
                            <h1 class="text-white font-semibold text-5xl">
                                Your story starts with us.
                            </h1>
                            <p class="mt-4 text-lg text-gray-300">
                                This is a simple example of a Landing Page you can build using
                                Tailwind Starter Kit. It features multiple CSS components
                                based on the Tailwindcss design system.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
                style="height: 70px;">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon class="text-gray-300 fill-current" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </div>
        <section class="pb-20 bg-gray-300 -mt-24">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap">
                    <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
                        <div
                            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                            <div class="px-4 py-5 flex-auto">
                                <div
                                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-red-400">
                                    <i class="fas fa-award"></i>
                                </div>
                                <h6 class="text-xl font-semibold">Awarded Agency</h6>
                                <p class="mt-2 mb-4 text-gray-600">
                                    Divide details about your product or agency work into parts.
                                    A paragraph describing a feature will be enough.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-4/12 px-4 text-center">
                        <div
                            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                            <div class="px-4 py-5 flex-auto">
                                <div
                                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-blue-400">
                                    <i class="fas fa-retweet"></i>
                                </div>
                                <h6 class="text-xl font-semibold">Free Revisions</h6>
                                <p class="mt-2 mb-4 text-gray-600">
                                    Keep you user engaged by providing meaningful information.
                                    Remember that by this time, the user is curious.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="pt-6 w-full md:w-4/12 px-4 text-center">
                        <div
                            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                            <div class="px-4 py-5 flex-auto">
                                <div
                                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-green-400">
                                    <i class="fas fa-fingerprint"></i>
                                </div>
                                <h6 class="text-xl font-semibold">Verified Company</h6>
                                <p class="mt-2 mb-4 text-gray-600">
                                    Write a few lines about each one. A paragraph describing a
                                    feature will be enough. Keep you user engaged!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    {{-- Chat:: start --}}

    <div id="live-chat" x-data="{ open: false }">

        <header @click="open = ! open" class="clearfix">
            <h4>Feedback</h4>
        </header>

        <div x-show="open" x-transition class="chat transition" x-cloak>

            <form action="{{ route('feedback.store') }}" method="post" class="py-1 px-1">
                @csrf
                @method('POST')

                <div class="flex flex-wrap mt-0 mb-2 -mx-3">
                    <div class="w-full">
                        <input type="text" id="name" name="name" placeholder="Name" required
                            class="w-full bg-gray-100 rounded-none border-none ring-0 outline-none mb-4">

                        <textarea
                            class="w-full bg-gray-100 rounded-none border-none ring-0 outline-none apearance-none resize-none "
                            id="description" type="text" name="content" placeholder="Message..." required></textarea>
                    </div>
                    <button
                        class="px-3 py-1 bg-gray-100 hover:bg-indigo-400 text-sm font-semibold text-slate-800 focus:outline-none focus:ring-3 ring-indigo-400"
                        type="submit">Submit</button>
                </div>

            </form>


        </div> <!-- end live-chat -->

        <script src="{{ asset('js/app.js') }}" defer></script>

        <script>
            function toggleNavbar(collapseID) {
                document.getElementById(collapseID).classList.toggle("hidden");
                document.getElementById(collapseID).classList.toggle("block");
            }
        </script>

</body>

</html>
