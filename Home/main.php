<?php
// Start session at the beginning of your file
session_start();

// Check if user is logged in
$isLoggedIn = isset($_SESSION['founder_id']) && !empty($_SESSION['founder_id']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ElevateX</title>
    <link rel="stylesheet" href="../output.css">
    <style>
        .slider {
            cursor: pointer;
            width: 100%;
            height: var(--height);
            overflow: hidden;
            margin-bottom: 50px;
            mask-image: linear-gradient(to right,
                    transparent,
                    #000 10% 90%,
                    transparent);
        }

        .slider .list {
            display: flex;
            width: 100%;
            min-width: calc(var(--width) * var(--quantity));
            position: relative;
        }

        .slider .list .item {
            width: var(--width);
            height: var(--height);
            position: absolute;
            left: 100%;
            animation: autoRun 10s linear infinite;
            transition: filter 0.5s;
            animation-delay: calc((10s / var(--quantity)) * (var(--position) - 1) - 10s) !important;
        }

        .slider .list .item img {
            width: 100%;
        }

        @keyframes autoRun {
            from {
                left: 100%;
            }

            to {
                left: calc(var(--width) * -1);
            }
        }

        .slider:hover .item {
            animation-play-state: paused !important;
            filter: grayscale(1);
        }

        .slider .item:hover {
            filter: grayscale(0);
        }

        .slider[reverse="true"] .item {
            animation: reversePlay 10s linear infinite;
        }

        @keyframes reversePlay {
            from {
                left: calc(var(--width) * -1);
            }

            to {
                left: 100%;
            }
        }

        /* Footer gradient */
        @keyframes gradientShift {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .animate-gradient {
            background-size: 200% 200%;
            animation: gradientShift 10s ease infinite;
        }

        .animate-gradient {
            background-size: 200% 200%;
            animation: gradientShift 4s ease infinite;
        }


        /* Right svg hide on small screen */
        #my-element {
            display: none;
        }

        @media (min-width: 1024px) {
            #my-element {
                display: block;
            }
        }
    </style>
</head>

<body class="bg-black">
    <!-- Left SVG Hexagon -->
    <div class="absolute right-150 bottom-40 w-[70%] h-full opacity-60 transform -translate-x-2/5 z-10">
        <div class="gradient-hexagon lower" data-animation-type="lottie">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1080 1080"
                width="1080" height="1080" preserveAspectRatio="xMidYMid meet"
                style="width: 100%; height: 100%; transform: translate3d(0px, 0px, 0px);">
                <defs>
                    <clipPath id="__lottie_element_411">
                        <rect width="1080" height="1080" x="0" y="0"></rect>
                    </clipPath>
                    <linearGradient id="gradient" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                        x1="-72.39942932128906" y1="-478.5393981933594" x2="72.39683532714844" y2="478.5390625">
                        <stop offset="0%" stop-color="rgb(231,51,89)" class="gradient-stop-1">
                            <animate attributeName="stop-color"
                                values="rgb(231,51,89); rgb(59,85,229); rgb(145,68,159); rgb(231,51,89)" dur="6s"
                                repeatCount="indefinite" />
                        </stop>
                        <stop offset="50%" stop-color="rgb(145,68,159)" class="gradient-stop-2">
                            <animate attributeName="stop-color"
                                values="rgb(145,68,159); rgb(231,51,89); rgb(59,85,229); rgb(145,68,159)" dur="6s"
                                repeatCount="indefinite" />
                        </stop>
                        <stop offset="100%" stop-color="rgb(59,85,229)" class="gradient-stop-3">
                            <animate attributeName="stop-color"
                                values="rgb(59,85,229); rgb(145,68,159); rgb(231,51,89); rgb(59,85,229)" dur="6s"
                                repeatCount="indefinite" />
                        </stop>
                    </linearGradient>
                </defs>
                <g clip-path="url(#__lottie_element_411)">
                    <g transform="matrix(1,0,0,1,540,560)" opacity="1" style="display: block;">
                        <g opacity="1" transform="matrix(1,0,0,1,-0.6169999837875366,-17.62700080871582)">
                            <path stroke="url(#gradient)" stroke-linecap="butt" stroke-linejoin="miter" fill-opacity="0"
                                stroke-miterlimit="4" stroke-opacity="1" stroke-width="10"
                                d=" M500,0 C500,52.35987854003906 295.344970703125,406.832763671875 250,433.0126953125 C204.65501403808594,459.192626953125 -204.65501403808594,459.192626953125 -250,433.0126953125 C-295.344970703125,406.832763671875 -500,52.35987854003906 -500,6.123233701766512e-14 C-500,-52.35987854003906 -295.344970703125,-406.832763671875 -250,-433.0126953125 C-204.65501403808594,-459.192626953125 204.65501403808594,-459.192626953125 250,-433.0126953125 C295.344970703125,-406.832763671875 500,-52.35987854003906 500,0z">
                            </path>
                        </g>
                    </g>
                </g>
            </svg>
        </div>
    </div>


    <!-- Nav bar -->
    <nav class="bg-black px-6 py-4 m-3 flex items-center justify-between">
        <!-- Logo -->
        <div class="flex items-center">
            <a href="./main.php" class="flex items-center">
                <!-- Logo -->
                <span class="text-white text-lg sm:text-xl md:text-2xl lg:text-3xl font-bold ml-2">ElevateX</span>
            </a>
        </div>

        <!-- Navigation Links -->
        <div class="hidden md:flex items-center space-x-8">
            <!-- Dropdown menu freelance Zone -->
            <!-- flex items-center px-3 py-2 text-gray-300 hover:text-white -->
            <div class="relative group">
                <button class="flex items-center px-3 py-2 text-white cursor-pointer">
                    <a href="../WebDev/web.php">Freelance Zone</a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="ml-1 transition-transform duration-300 hover:rotate-180">
                        <path d="M6 9l6 6 6-6"></path>
                    </svg>
                </button>

                <!-- Products Mega Dropdown -->
                <div
                    class="absolute top-full left-0 w-full md:w-[960px] bg-black border border-gray-700 rounded-lg shadow-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300 invisible group-hover:visible z-50">
                    <div class="grid grid-cols-3 gap-6 p-6">
                        <!-- Tech & Software Section -->
                        <div class="space-y-1 ">
                            <h3 class="text-lg font-medium mb-4 text-white">Tech & Software</h3>

                            <div class="flex items-start space-x-3 mb-4 cursor-pointer" id="main-div">
                                <div class="p-2 bg-black rounded-md border border-gray-700" id="svg-div">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                        fill="none" stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" id="para-svg">
                                        <path d="M16 18l6-6-6-6M8 6l-6 6 6 6" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-medium text-white">Web Development</h4>
                                    <p class="text-sm text-gray-300 hover:text-white" id="para">Modern frameworks and
                                        tools</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3 mb-4 cursor-pointer" id="main-div">
                                <div class="p-2 bg-black rounded-md border border-gray-700" id="svg-div">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                        fill="none" stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" id="para-svg">
                                        <path d="M12 2a8 8 0 100 16 8 8 0 000-16z" />
                                        <path d="M9 9a3 3 0 014 0" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-medium text-white">AI & ML</h4>
                                    <p class="text-sm text-gray-300 hover:text-white" id="para">Powering breakthroughs
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3 mb-4 cursor-pointer" id="main-div">
                                <div class="p-2 bg-black rounded-md border border-gray-700" id="svg-div">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                        fill="none" stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" id="para-svg">
                                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2" />
                                        <path d="M7 11V7a5 5 0 0110 0v4" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-medium text-white">Cybersecurity</h4>
                                    <p class="text-sm text-gray-300 hover:text-white" id="para">Scale without
                                        compromising</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3 mb-4 cursor-pointer" id="main-div">
                                <div class="p-2 bg-black rounded-md border border-gray-700" id="svg-div">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                        fill="none" stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" id="para-svg">
                                        <path
                                            d="M18 3a3 3 0 00-3 3v12a3 3 0 003 3 3 3 0 003-3 3 3 0 00-3-3H6a3 3 0 00-3 3 3 3 0 003 3 3 3 0 003-3V6a3 3 0 00-3-3 3 3 0 00-3 3 3 3 0 003 3h12a3 3 0 003-3 3 3 0 00-3-3z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-medium text-white">SaaS</h4>
                                    <p class="text-sm text-gray-300 hover:text-white" id="para">Software as a Service
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3 cursor-pointer" id="main-div">
                                <div class="p-2 bg-black rounded-md border border-gray-700" id="svg-div">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                        fill="none" stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" id="para-svg">
                                        <rect x="2" y="7" width="20" height="14" rx="2" ry="2" />
                                        <path d="M16 21V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v16" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-medium text-white">Blockchain</h4>
                                    <p class="text-sm text-gray-300 hover:text-white" id="para">Decentralized solutions
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- FinTech Section -->
                        <div class="space-y-1">
                            <h3 class="text-lg font-medium mb-4 text-white">FinTech</h3>

                            <div class="flex items-start space-x-3 mb-4 cursor-pointer" id="main-div">
                                <div class="p-2 bg-black rounded-md border border-gray-700" id="svg-div">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                        fill="none" stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" id="para-svg">
                                        <rect x="2" y="5" width="20" height="14" rx="2" />
                                        <path d="M12 12h.01M17 12h.01M7 12h.01" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-medium text-white">Digital Payments</h4>
                                    <p class="text-sm text-gray-300 hover:text-white" id="para"> Fast, scalable, and
                                        reliable</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3 mb-4 cursor-pointer" id="main-div">
                                <div class="p-2 bg-black rounded-md border border-gray-700" id="svg-div">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                        fill="none" stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" id="para-svg">
                                        <circle cx="12" cy="12" r="10" />
                                        <path d="M9.09 9a3 3 0 015.83 1c0 2-3 3-3 3" />
                                        <line x1="12" y1="17" x2="12.01" y2="17" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-medium text-white">Crypto</h4>
                                    <p class="text-sm text-gray-300 hover:text-white" id="para">Cryptocurrency solutions
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3 mb-4 cursor-pointer" id="main-div">
                                <div class="p-2 bg-black rounded-md border border-gray-700" id="svg-div">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                        fill="none" stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" id="para-svg">
                                        <path
                                            d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                                        <polyline points="22,6 12,13 2,6" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-medium text-white">Investment Platforms</h4>
                                    <p class="text-sm text-gray-300 hover:text-white" id="para">Helping teams ship 6x
                                        faster</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3 cursor-pointer" id="main-div">
                                <div class="p-2 bg-black rounded-md border border-gray-700" id="svg-div">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                        fill="none" stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" id="para-svg">
                                        <path d="M22 12h-4l-3 9L9 3l-3 9H2" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-medium text-white">InsurTech</h4>
                                    <p class="text-sm text-gray-300 hover:text-white" id="para">Insurance technology</p>
                                </div>
                            </div>
                        </div>

                        <!-- Media & Entertainment Section -->
                        <div class="space-y-1">
                            <h3 class="text-lg font-medium mb-4 text-white">Media & Entertainment</h3>

                            <div class="flex items-start space-x-3 mb-4 cursor-pointer" id="main-div">
                                <div class="p-2 bg-black rounded-md border border-gray-700" id="svg-div">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                        fill="none" stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" id="para-svg">
                                        <polygon points="23 7 16 12 23 17 23 7" />
                                        <rect x="1" y="5" width="15" height="14" rx="2" ry="2" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-medium text-white">Streaming</h4>
                                    <p class="text-sm text-gray-300 hover:text-white" id="para">Servers, in serverless
                                        form</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3 mb-4 cursor-pointer" id="main-div">
                                <div class="p-2 bg-black rounded-md border border-gray-700" id="svg-div">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                        fill="none" stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" id="para-svg">
                                        <rect x="2" y="3" width="20" height="14" rx="2" ry="2" />
                                        <line x1="8" y1="21" x2="16" y2="21" />
                                        <line x1="12" y1="17" x2="12" y2="21" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-medium text-white">Gaming</h4>
                                    <p class="text-sm text-gray-300 hover:text-white" id="para">Speed with Enterprise
                                        scale</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3 mb-4 cursor-pointer" id="main-div">
                                <div class="p-2 bg-black rounded-md border border-gray-700" id="svg-div">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                        fill="none" stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" id="para-svg">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" />
                                        <circle cx="12" cy="12" r="3" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-medium text-white">AR/VR</h4>
                                    <p class="text-sm text-gray-300 hover:text-white" id="para">Augmented & Virtual
                                        Reality</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-3 cursor-pointer" id="main-div">
                                <div class="p-2 bg-black rounded-md border border-gray-700" id="svg-div">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                        fill="none" stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" id="para-svg">
                                        <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z" />
                                        <polyline points="14 2 14 8 20 8" />
                                        <line x1="16" y1="13" x2="8" y2="13" />
                                        <line x1="16" y1="17" x2="8" y2="17" />
                                        <polyline points="10 9 9 9 8 9" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-medium text-white">Digital Content Creation</h4>
                                    <p class="text-sm text-gray-300 hover:text-white" id="para">Trace every step</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- exprtimental area -->


            <a href="./aboutus.php" class="text-white hover:text-gray-300 transition-colors z-10">About Us</a>
            <a href="../Listingpage/Startup/startups.php"
                class="text-white hover:text-gray-300 transition-colors">Startups
            </a>

            <a href="../Pitch/pitch.php" class="text-white hover:text-gray-300 transition-colors">Pitch</a>
            <a href="../Eventpage/events.php" class="text-white hover:text-gray-300 transition-colors">Events</a>

            <!-- Dropdown Menus -->
            <div class="relative group">
                <button class="flex items-center px-3 py-2 text-white cursor-pointer">
                    Community
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="ml-1 transform transition-transform duration-300 group-hover:rotate-180">
                        <path d="M6 9l6 6 6-6"></path>
                    </svg>
                </button>
                <div
                    class="absolute left-0 w-120 bg-black border border-gray-700 rounded-lg shadow-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300 invisible group-hover:visible z-50">
                    <div class="p-6 flex">
                        <!-- Left large area (40%) -->
                        <div class="w-2/5  border border-gray-700 rounded-lg mr-5">
                            <!-- For image area is left mfs -->
                            <img src="../Images/events-01.jpg" alt="" class="w-full h-full object-cover rounded-lg mb-4" id="nav-img">
                        </div>

                        <!-- Right side with three lists (60%) -->
                        <div class="w-3/5">
                            <ul class="space-y-6">
                                <li id="founder-img">
                                    <h3 class="text-sm font-medium text-white">Founders</h3>
                                    <a href="../Listingpage/Founder/Founders.php">
                                        <p class="text-xs text-gray-400 hover:text-white cursor-pointer">Helping
                                            founders connect, collaborate, and
                                            scale their visionary startups.</p>
                                    </a>
                                </li>
                                <li id="investor-img">
                                    <h3 class="text-sm font-medium text-white">Investors</h3>
                                    <a href="../Listingpage/Investor/investor.php">
                                        <p class="text-xs text-gray-400 hover:text-white cursor-pointer">Empowering
                                            investors to fund startups with
                                            seamless and strategic connections
                                        </p>
                                    </a>
                                </li>
                                <li id="contributor-img">
                                    <h3 class="text-sm font-medium text-white">Contibuters</h3>
                                    <a href="#">
                                        <p class="text-xs text-gray-400 hover:text-white cursor-pointer">Join as a
                                            contributor to support startups
                                            with skills, ideas, and expertise.
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Auth Buttons -->
        <div class="flex items-center space-x-6">
            <?php if ($isLoggedIn): ?>
                <!-- User is logged in - show Logout and Profile buttons -->
                <button class="text-white hover:text-gray-300 flex items-center transition-colors cursor-pointer">
                    <span class="ml-2"><a href="./logout.php">Log out</a></span>
                </button>

                <button class="bg-gradient-to-r from-[#E94560] to-purple-600 text-white font-medium py-2 px-4 rounded-lg transition-colors flex items-center cursor-pointer">
                    <svg class="h-5 w-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                    </svg>
                    <a href="../Dashboards/Founder-startup.php">
                        <?php echo isset($_SESSION['founder_name']) ? $_SESSION['founder_name'] : 'Profile'; ?>
                    </a>
                </button>
            <?php else: ?>
                <!-- User is not logged in - show Log in and Join Now buttons -->
                <button class="text-white hover:text-gray-300 flex items-center transition-colors cursor-pointer">
                    <span class="ml-2"><a href="../SignUps/login/index.php">Log in</a></span>
                </button>

                <!-- Join Now Button -->
                <button onclick="toggleModal()" id="joinButton"
                    class="bg-gradient-to-r from-[#E94560] to-purple-600 text-white font-medium py-2 px-4 rounded-lg transition-colors flex items-center cursor-pointer">
                    Join Now
                </button>

                <!-- Modal (only shown when not logged in) -->
                <div id="joinModal"
                    class="fixed inset-0 bg-gradient-to-br from-gray-900 to-black bg-opacity-10 flex items-center justify-center z-50 hidden">
                    <div class="bg-gradient-to-tl from-gray-900 to-black border border-gray-700 text-white p-6 rounded-xl w-80 shadow-lg">
                        <h2 class="text-xl font-semibold mb-4 text-center">Join As</h2>
                        <div class="flex flex-col gap-3">
                            <button
                                class="bg-gradient-to-r from-[#E94560] to-purple-600 py-2 px-4 rounded-md transition duration-200 cursor-pointer"><a href="../SignUps/startup/index.php">Startup</a></button>
                            <button
                                class="bg-gradient-to-r from-[#E94560] to-purple-600 py-2 px-4 rounded-md transition duration-200 cursor-pointer"><a href="../SignUps/collaborators/index.php">Collaborator</a></button>
                            <button
                                class="bg-gradient-to-r from-[#E94560] to-purple-600 py-2 px-4 rounded-md transition duration-200 cursor-pointer"><a href="../SignUps/investor/index.php">Investor</a></button>
                        </div>
                        <button onclick="toggleModal()"
                            class="mt-6 text-sm text-gray-400 hover:text-white transition text-center block mx-auto cursor-pointer">Cancel</button>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </nav>


    <!-- Hero Section -->
    <section class="bg-black relative py-16 overflow-hidden">

        <!-- Hero Content -->
        <div class="container mx-auto px-4 max-w-6xl relative z-10">
            <!-- Uppercase text -->
            <div class="text-center mb-6">
                <p class="uppercase tracking-wider text-gray-400 text-sm">FROM CONNECTIONS TO GROWTH</p>
            </div>

            <!-- Main heading -->
            <div class="text-center mb-8">
                <h1 class="text-white text-5xl md:text-6xl font-bold leading-tight">
                    The Future of Powerful<br>
                    <span
                        class="text-6xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-orange-500 via-purple-500 to-cyan-500">
                        STARTUP
                    </span>
                    ecosystem
                </h1>
            </div>

            <!-- Subheading with changing text -->
            <div class="text-center mb-12">
                <p class="text-white text-xl">
                    Designed to build connections between
                    <span id="changing-word" class="typing"
                        style=" white-space: nowrap;overflow: hidden; color: #E94560; font-weight: 700; border-right: 1px solid white; padding-left: 4px;"></span>
                </p>
            </div>
        </div>




        <!-- How It Works Section - Elegant Version -->
        <section class="bg-black text-white py-24 relative overflow-hidden ">
            <!-- Gradient Background Elements -->
            <div
                class="absolute top-0 left-1/4 w-96 h-96 bg-gradient-to-r from-purple-600 to-[#E94560] rounded-full filter blur-3xl opacity-20 -z-10">
            </div>
            <div
                class="absolute bottom-0 right-1/4 w-96 h-96 bg-gradient-to-l from-blue-500 to-purple-600 rounded-full filter blur-3xl opacity-10 -z-10">
            </div>

            <div class="container mx-auto px-4 relative z-10">
                <!-- User Type Navigation - Elegant Pill Design -->
                <div class="flex flex-wrap justify-center mb-20">
                    <div class="bg-gray-900/40 backdrop-blur-lg p-2 rounded-lg flex flex-wrap justify-center shadow-2xl shadow-[#E94560]/10 border border-gray-800">
                        <button
                            class="user-tab-btn  cursor-pointer px-8 py-3 m-1 rounded-lg font-medium transition-all duration-300 active bg-gradient-to-r from-[#E94560] to-purple-600 text-white"
                            data-target="startups">Startups
                        </button>
                        <button
                            class="user-tab-btn  cursor-pointer px-8 py-3 m-1 rounded-lg font-medium transition-all duration-300 bg-transparent hover:bg-gray-800/50"
                            data-target="investors">Investors
                        </button>
                        <button
                            class="user-tab-btn  cursor-pointer px-8 py-3 m-1 rounded-lg font-medium transition-all duration-300 bg-transparent hover:bg-gray-800/50"
                            data-target="mentors">Mentors
                        </button>
                        <button
                            class="user-tab-btn  cursor-pointer px-8 py-3 m-1 rounded-lg font-medium transition-all duration-300 bg-transparent hover:bg-gray-800/50"
                            data-target="collaborators">Collaborators
                        </button>
                    </div>
                </div>

                <!-- Content Tabs -->
                <div class="user-tab-content" id="startups-content">
                    <div class="grid md:grid-cols-3 gap-8">
                        <!-- Step 1 -->
                        <div class="relative bg-gradient-to-br from-gray-900 to-black rounded-lg p-8 border border-gray-800 transform transition-all duration-500 hover:scale-105 group">
                            <!-- Glass Effect Overlay -->
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-[#E94560]/10 to-purple-500/5 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            </div>

                            <!-- Step Number -->
                            <div class="relative flex justify-between items-start mb-8">
                                <div
                                    class="bg-gradient-to-r from-[#E94560] to-purple-600 w-16 h-16 rounded-full flex items-center justify-center shadow-lg shadow-[#E94560]/20">
                                    <span class="font-bold text-2xl text-white">01</span>
                                </div>
                                <div
                                    class="w-12 h-12 rounded-full flex items-center justify-center bg-gray-800 group-hover:bg-gray-700 transition-all duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#E94560]" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                                    </svg>
                                </div>
                            </div>

                            <!-- Content -->
                            <h3
                                class="text-2xl font-bold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-white to-gray-400">
                                Create Your Profile</h3>
                            <p class="text-gray-400 mb-6">Build a compelling startup profile highlighting your vision,
                                traction,
                                team, and funding needs. Showcase what makes your venture unique.</p>
                            <div
                                class="w-16 h-1 bg-gradient-to-r from-[#E94560] to-purple-600 rounded-full group-hover:w-full transition-all duration-500">
                            </div>
                        </div>

                        <!-- Step 2 -->
                        <div class="relative bg-gradient-to-br from-gray-900 to-black rounded-lg p-8 border border-gray-800 transform transition-all duration-500 hover:scale-105 group">
                            <!-- Glass Effect Overlay -->
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-[#E94560]/10 to-purple-500/5 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            </div>

                            <!-- Step Number -->
                            <div class="relative flex justify-between items-start mb-8">
                                <div
                                    class="bg-gradient-to-r from-[#E94560] to-purple-600 w-16 h-16 rounded-full flex items-center justify-center shadow-lg shadow-[#E94560]/20">
                                    <span class="font-bold text-2xl text-white">02</span>
                                </div>
                                <div
                                    class="w-12 h-12 rounded-full flex items-center justify-center bg-gray-800 group-hover:bg-gray-700 transition-all duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#E94560]" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                                    </svg>
                                </div>
                            </div>

                            <!-- Content -->
                            <h3
                                class="text-2xl font-bold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-white to-gray-400">
                                Connect & Pitch</h3>
                            <p class="text-gray-400 mb-6">Get matched with relevant investors based on your industry, stage,
                                and
                                funding requirements. Present your vision to those who can help it become reality.</p>
                            <div
                                class="w-16 h-1 bg-gradient-to-r from-[#E94560] to-purple-600 rounded-full group-hover:w-full transition-all duration-500">
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div class="relative bg-gradient-to-br from-gray-900 to-black rounded-lg p-8 border border-gray-800 transform transition-all duration-500 hover:scale-105 group">
                            <!-- Glass Effect Overlay -->
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-[#E94560]/10 to-purple-500/5 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            </div>

                            <!-- Step Number -->
                            <div class="relative flex justify-between items-start mb-8">
                                <div
                                    class="bg-gradient-to-r from-[#E94560] to-purple-600 w-16 h-16 rounded-full flex items-center justify-center shadow-lg shadow-[#E94560]/20">
                                    <span class="font-bold text-2xl text-white">03</span>
                                </div>
                                <div
                                    class="w-12 h-12 rounded-full flex items-center justify-center bg-gray-800 group-hover:bg-gray-700 transition-all duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#E94560]" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                    </svg>
                                </div>
                            </div>

                            <!-- Content -->
                            <h3
                                class="text-2xl font-bold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-white to-gray-400">
                                Grow & Succeed</h3>
                            <p class="text-gray-400 mb-6">Secure funding, gather resources, and leverage our network to
                                scale
                                your startup to new heights. Transform your idea into a thriving business.</p>
                            <div
                                class="w-16 h-1 bg-gradient-to-r from-[#E94560] to-purple-600 rounded-full group-hover:w-full transition-all duration-500">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="user-tab-content hidden" id="investors-content">
                    <div class="grid md:grid-cols-3 gap-8">
                        <!-- Step 1 -->
                        <div
                            class="relative bg-gradient-to-br from-gray-900 to-black rounded-lg p-8 border border-gray-800 transform transition-all duration-500 hover:scale-105 group">
                            <!-- Glass Effect Overlay -->
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-[#E94560]/10 to-purple-500/5 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            </div>

                            <!-- Step Number -->
                            <div class="relative flex justify-between items-start mb-8">
                                <div
                                    class="bg-gradient-to-r from-[#E94560] to-purple-600 w-16 h-16 rounded-full flex items-center justify-center shadow-lg shadow-[#E94560]/20">
                                    <span class="font-bold text-2xl text-white">01</span>
                                </div>
                                <div
                                    class="w-12 h-12 rounded-full flex items-center justify-center bg-gray-800 group-hover:bg-gray-700 transition-all duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#E94560]" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                            </div>

                            <!-- Content -->
                            <h3
                                class="text-2xl font-bold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-white to-gray-400">
                                Set Your Criteria</h3>
                            <p class="text-gray-400 mb-6">Define your investment preferences including sectors, stages, and
                                ticket sizes to receive tailored startup matches that align with your portfolio strategy.
                            </p>
                            <div
                                class="w-16 h-1 bg-gradient-to-r from-[#E94560] to-purple-600 rounded-full group-hover:w-full transition-all duration-500">
                            </div>
                        </div>

                        <!-- Step 2 -->
                        <div
                            class="relative bg-gradient-to-br from-gray-900 to-black rounded-lg p-8 border border-gray-800 transform transition-all duration-500 hover:scale-105 group">
                            <!-- Glass Effect Overlay -->
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-[#E94560]/10 to-purple-500/5 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            </div>

                            <!-- Step Number -->
                            <div class="relative flex justify-between items-start mb-8">
                                <div
                                    class="bg-gradient-to-r from-[#E94560] to-purple-600 w-16 h-16 rounded-full flex items-center justify-center shadow-lg shadow-[#E94560]/20">
                                    <span class="font-bold text-2xl text-white">02</span>
                                </div>
                                <div
                                    class="w-12 h-12 rounded-full flex items-center justify-center bg-gray-800 group-hover:bg-gray-700 transition-all duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#E94560]" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </div>
                            </div>

                            <!-- Content -->
                            <h3
                                class="text-2xl font-bold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-white to-gray-400">
                                Review Opportunities</h3>
                            <p class="text-gray-400 mb-6">Browse curated startups that match your investment thesis and
                                connect
                                with the most promising founders before anyone else in the market.</p>
                            <div
                                class="w-16 h-1 bg-gradient-to-r from-[#E94560] to-purple-600 rounded-full group-hover:w-full transition-all duration-500">
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div
                            class="relative bg-gradient-to-br from-gray-900 to-black rounded-2xl p-8 border border-gray-800 transform transition-all duration-500 hover:scale-105 group">
                            <!-- Glass Effect Overlay -->
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-[#E94560]/10 to-purple-500/5 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            </div>

                            <!-- Step Number -->
                            <div class="relative flex justify-between items-start mb-8">
                                <div
                                    class="bg-gradient-to-r from-[#E94560] to-purple-600 w-16 h-16 rounded-full flex items-center justify-center shadow-lg shadow-[#E94560]/20">
                                    <span class="font-bold text-2xl text-white">03</span>
                                </div>
                                <div
                                    class="w-12 h-12 rounded-full flex items-center justify-center bg-gray-800 group-hover:bg-gray-700 transition-all duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#E94560]" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                            </div>

                            <!-- Content -->
                            <h3
                                class="text-2xl font-bold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-white to-gray-400">
                                Invest & Mentor</h3>
                            <p class="text-gray-400 mb-6">Fund promising ventures and leverage our platform tools to track
                                and
                                support your portfolio companies as they grow and expand.</p>
                            <div
                                class="w-16 h-1 bg-gradient-to-r from-[#E94560] to-purple-600 rounded-full group-hover:w-full transition-all duration-500">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="user-tab-content hidden" id="mentors-content">
                    <div class="grid md:grid-cols-3 gap-8">
                        <!-- Step 1 -->
                        <div
                            class="relative bg-gradient-to-br from-gray-900 to-black rounded-2xl p-8 border border-gray-800 transform transition-all duration-500 hover:scale-105 group">
                            <!-- Glass Effect Overlay -->
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-[#E94560]/10 to-purple-500/5 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            </div>

                            <!-- Step Number -->
                            <div class="relative flex justify-between items-start mb-8">
                                <div
                                    class="bg-gradient-to-r from-[#E94560] to-purple-600 w-16 h-16 rounded-full flex items-center justify-center shadow-lg shadow-[#E94560]/20">
                                    <span class="font-bold text-2xl text-white">01</span>
                                </div>
                                <div
                                    class="w-12 h-12 rounded-full flex items-center justify-center bg-gray-800 group-hover:bg-gray-700 transition-all duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#E94560]" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                    </svg>
                                </div>
                            </div>

                            <!-- Content -->
                            <h3
                                class="text-2xl font-bold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-white to-gray-400">
                                Share Your Expertise</h3>
                            <p class="text-gray-400 mb-6">Create a mentor profile highlighting your experience, skills, and
                                the
                                areas where you can provide valuable guidance to ambitious founders.</p>
                            <div
                                class="w-16 h-1 bg-gradient-to-r from-[#E94560] to-purple-600 rounded-full group-hover:w-full transition-all duration-500">
                            </div>
                        </div>

                        <!-- Step 2 -->
                        <div
                            class="relative bg-gradient-to-br from-gray-900 to-black rounded-2xl p-8 border border-gray-800 transform transition-all duration-500 hover:scale-105 group">
                            <!-- Glass Effect Overlay -->
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-[#E94560]/10 to-purple-500/5 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            </div>

                            <!-- Step Number -->
                            <div class="relative flex justify-between items-start mb-8">
                                <div
                                    class="bg-gradient-to-r from-[#E94560] to-purple-600 w-16 h-16 rounded-full flex items-center justify-center shadow-lg shadow-[#E94560]/20">
                                    <span class="font-bold text-2xl text-white">02</span>
                                </div>
                                <div
                                    class="w-12 h-12 rounded-full flex items-center justify-center bg-gray-800 group-hover:bg-gray-700 transition-all duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#E94560]" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                    </svg>
                                </div>
                            </div>

                            <!-- Content -->
                            <h3
                                class="text-2xl font-bold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-white to-gray-400">
                                Connect With Startups</h3>
                            <p class="text-gray-400 mb-6">Get matched with startups that can benefit from your specific
                                knowledge and experience. Build meaningful relationships that extend beyond business.</p>
                            <div
                                class="w-16 h-1 bg-gradient-to-r from-[#E94560] to-purple-600 rounded-full group-hover:w-full transition-all duration-500">
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div
                            class="relative bg-gradient-to-br from-gray-900 to-black rounded-2xl p-8 border border-gray-800 transform transition-all duration-500 hover:scale-105 group">
                            <!-- Glass Effect Overlay -->
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-[#E94560]/10 to-purple-500/5 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            </div>

                            <!-- Step Number -->
                            <div class="relative flex justify-between items-start mb-8">
                                <div
                                    class="bg-gradient-to-r from-[#E94560] to-purple-600 w-16 h-16 rounded-full flex items-center justify-center shadow-lg shadow-[#E94560]/20">
                                    <span class="font-bold text-2xl text-white">03</span>
                                </div>
                                <div
                                    class="w-12 h-12 rounded-full flex items-center justify-center bg-gray-800 group-hover:bg-gray-700 transition-all duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#E94560]" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.783-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                    </svg>
                                </div>
                            </div>

                            <!-- Content -->
                            <h3
                                class="text-2xl font-bold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-white to-gray-400">
                                Make An Impact</h3>
                            <p class="text-gray-400 mb-6">Guide founders through challenges, build your reputation, and help
                                shape the next generation of innovators who will transform industries.</p>
                            <div
                                class="w-16 h-1 bg-gradient-to-r from-[#E94560] to-purple-600 rounded-full group-hover:w-full transition-all duration-500">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="user-tab-content hidden" id="collaborators-content">
                    <div class="grid md:grid-cols-3 gap-8">
                        <!-- Step 1 -->
                        <div
                            class="relative bg-gradient-to-br from-gray-900 to-black rounded-2xl p-8 border border-gray-800 transform transition-all duration-500 hover:scale-105 group">
                            <!-- Glass Effect Overlay -->
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-[#E94560]/10 to-purple-500/5 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            </div>

                            <!-- Step Number -->
                            <div class="relative flex justify-between items-start mb-8">
                                <div
                                    class="bg-gradient-to-r from-[#E94560] to-purple-600 w-16 h-16 rounded-full flex items-center justify-center shadow-lg shadow-[#E94560]/20">
                                    <span class="font-bold text-2xl text-white">01</span>
                                </div>
                                <div
                                    class="w-12 h-12 rounded-full flex items-center justify-center bg-gray-800 group-hover:bg-gray-700 transition-all duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#E94560]" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                    </svg>
                                </div>
                            </div>

                            <!-- Content -->
                            <h3
                                class="text-2xl font-bold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-white to-gray-400">
                                Showcase Your Skills</h3>
                            <p class="text-gray-400 mb-6">Build a collaborator profile highlighting your technical skills,
                                past
                                projects, and the challenging problems you're passionate about solving.</p>
                            <div
                                class="w-16 h-1 bg-gradient-to-r from-[#E94560] to-purple-600 rounded-full group-hover:w-full transition-all duration-500">
                            </div>
                        </div>

                        <!-- Continuing the Collaborators tab content from where it left off -->

                        <!-- Step 2 -->
                        <div
                            class="relative bg-gradient-to-br from-gray-900 to-black rounded-2xl p-8 border border-gray-800 transform transition-all duration-500 hover:scale-105 group">
                            <!-- Glass Effect Overlay -->
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-[#E94560]/10 to-purple-500/5 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            </div>

                            <!-- Step Number -->
                            <div class="relative flex justify-between items-start mb-8">
                                <div
                                    class="bg-gradient-to-r from-[#E94560] to-purple-600 w-16 h-16 rounded-full flex items-center justify-center shadow-lg shadow-[#E94560]/20">
                                    <span class="font-bold text-2xl text-white">02</span>
                                </div>
                                <div
                                    class="w-12 h-12 rounded-full flex items-center justify-center bg-gray-800 group-hover:bg-gray-700 transition-all duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#E94560]" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                    </svg>
                                </div>
                            </div>

                            <!-- Content -->
                            <h3
                                class="text-2xl font-bold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-white to-gray-400">
                                Find
                                Exciting Projects</h3>
                            <p class="text-gray-400 mb-6">Browse startup challenges that match your expertise and connect
                                with founders who need
                                your specific skill set to solve critical problems.</p>
                            <div
                                class="w-16 h-1 bg-gradient-to-r from-[#E94560] to-purple-600 rounded-full group-hover:w-full transition-all duration-500">
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div
                            class="relative bg-gradient-to-br from-gray-900 to-black rounded-2xl p-8 border border-gray-800 transform transition-all duration-500 hover:scale-105 group">
                            <!-- Glass Effect Overlay -->
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-[#E94560]/10 to-purple-500/5 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            </div>

                            <!-- Step Number -->
                            <div class="relative flex justify-between items-start mb-8">
                                <div
                                    class="bg-gradient-to-r from-[#E94560] to-purple-600 w-16 h-16 rounded-full flex items-center justify-center shadow-lg shadow-[#E94560]/20">
                                    <span class="font-bold text-2xl text-white">03</span>
                                </div>
                                <div
                                    class="w-12 h-12 rounded-full flex items-center justify-center bg-gray-800 group-hover:bg-gray-700 transition-all duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#E94560]" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                </div>
                            </div>

                            <!-- Content -->
                            <h3
                                class="text-2xl font-bold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-white to-gray-400">
                                Collaborate & Build</h3>
                            <p class="text-gray-400 mb-6">Work on innovative solutions, build your portfolio, and create
                                valuable connections in
                                the startup ecosystem that can lead to future opportunities.</p>
                            <div
                                class="w-16 h-1 bg-gradient-to-r from-[#E94560] to-purple-600 rounded-full group-hover:w-full transition-all duration-500">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bottom Decoration -->
                <div class="mt-20 text-center">
                    <div class="w-24 h-1 bg-gradient-to-r from-[#E94560] to-purple-500 mx-auto mb-6"></div>
                    <p class="text-gray-400 max-w-xl mx-auto">Join our platform today and become part of a community
                        dedicated to
                        innovation, growth, and transformative collaboration.</p>
                    <button
                        class="mt-8 px-10 py-4 cursor-pointer bg-gradient-to-r from-[#E94560] to-purple-600 rounded-lg font-bold text-white transform transition-all duration-300 hover:scale-105 hover:shadow-xl hover:shadow-[#E94560]/20 flex items-center mx-auto">
                        Get Started Now
                        <!-- <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg> -->
                    </button>
                </div>
            </div>
        </section>


        <!-- Right SVG Hexagon -->
        <div class="absolute right-0 top-0 w-[80%] h-full opacity-60 transform translate-x-2/4" id="my-element">
            <div class="gradient-hexagon lower" data-animation-type="lottie">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 0 1080 1080" width="1080" height="1080" preserveAspectRatio="xMidYMid meet"
                    style="width: 100%; height: 100%; transform: translate3d(0px, 0px, 0px);"
                    class="sm:hidden md:none lg:block">
                    <defs>
                        <clipPath id="__lottie_element_412">
                            <rect width="1080" height="1080" x="0" y="0"></rect>
                        </clipPath>
                        <linearGradient id="gradient2" spreadMethod="pad" gradientUnits="userSpaceOnUse"
                            x1="-72.39942932128906" y1="-478.5393981933594" x2="72.39683532714844" y2="478.5390625">
                            <stop offset="0%" stop-color="rgb(231,51,89)" class="gradient-stop-1">
                                <animate attributeName="stop-color"
                                    values="rgb(231,51,89); rgb(59,85,229); rgb(145,68,159); rgb(231,51,89)" dur="6s"
                                    repeatCount="indefinite" />
                            </stop>
                            <stop offset="50%" stop-color="rgb(145,68,159)" class="gradient-stop-2">
                                <animate attributeName="stop-color"
                                    values="rgb(145,68,159); rgb(231,51,89); rgb(59,85,229); rgb(145,68,159)" dur="6s"
                                    repeatCount="indefinite" />
                            </stop>
                            <stop offset="100%" stop-color="rgb(59,85,229)" class="gradient-stop-3">
                                <animate attributeName="stop-color"
                                    values="rgb(59,85,229); rgb(145,68,159); rgb(231,51,89); rgb(59,85,229)" dur="6s"
                                    repeatCount="indefinite" />
                            </stop>
                        </linearGradient>
                    </defs>
                    <g clip-path="url(#__lottie_element_412)">
                        <g transform="matrix(1,0,0,1,540,560)" opacity="1" style="display: block;">
                            <g opacity="1" transform="matrix(1,0,0,1,-0.6169999837875366,-17.62700080871582)">
                                <path stroke="url(#gradient2)" stroke-linecap="butt" stroke-linejoin="miter"
                                    fill-opacity="0" stroke-miterlimit="4" stroke-opacity="1" stroke-width="10"
                                    d=" M500,0 C500,52.35987854003906 295.344970703125,406.832763671875 250,433.0126953125 C204.65501403808594,459.192626953125 -204.65501403808594,459.192626953125 -250,433.0126953125 C-295.344970703125,406.832763671875 -500,52.35987854003906 -500,6.123233701766512e-14 C-500,-52.35987854003906 -295.344970703125,-406.832763671875 -250,-433.0126953125 C-204.65501403808594,-459.192626953125 204.65501403808594,-459.192626953125 250,-433.0126953125 C295.344970703125,-406.832763671875 500,-52.35987854003906 500,0z">
                                </path>
                            </g>
                        </g>
                    </g>
                </svg>
            </div>
        </div>


    </section>



    <!-- Carosal big -->

    <div class="slider" reverse="true" style="
                        --width: 200px;
                        --height: 200px;
                        --quantity: 9;
                    ">
        <div class="list">
            <div class="item" style="--position: 1"><img src="../Images/gitlab-logo-400.png" alt=""></div>
            <div class="item" style="--position: 2"><img src="../Images/gitlab-logo-400.png" alt=""></div>
            <div class="item" style="--position: 3"><img src="../Images/gitlab-logo-400.png" alt=""></div>
            <div class="item" style="--position: 4"><img src="../Images/gitlab-logo-400.png" alt=""></div>
            <div class="item" style="--position: 5"><img src="../Images/gitlab-logo-400.png" alt=""></div>
            <div class="item" style="--position: 6"><img src="../Images/gitlab-logo-400.png" alt=""></div>
            <div class="item" style="--position: 7"><img src="../Images/gitlab-logo-400.png" alt=""></div>
            <div class="item" style="--position: 8"><img src="../Images/gitlab-logo-400.png" alt=""></div>
            <div class="item" style="--position: 9"><img src="../Images/Logo.png" alt=""></div>
        </div>
    </div>

    <!-- Carosal -->
    <div class="slider" style="
                    --width: 100px;
                    --height: 50px;
                    --quantity: 10;
                ">
        <div class="list">
            <div class="item" style="--position: 1"><img src="..//Images/gitlab-logo-400.png" alt=""></div>
            <div class="item" style="--position: 2"><img src="../Images/gitlab-logo-400.png" alt=""></div>
            <div class="item" style="--position: 3"><img src="../Images/gitlab-logo-400.png" alt=""></div>
            <div class="item" style="--position: 4"><img src="../Images/gitlab-logo-400.png" alt=""></div>
            <div class="item" style="--position: 5"><img src="../Images/gitlab-logo-400.png" alt=""></div>
            <div class="item" style="--position: 6"><img src="../Images/gitlab-logo-400.png" alt=""></div>
            <div class="item" style="--position: 7"><img src="../Images/gitlab-logo-400.png" alt=""></div>
            <div class="item" style="--position: 8"><img src="../Images/gitlab-logo-400.png" alt=""></div>
            <div class="item" style="--position: 9"><img src="../Images/gitlab-logo-400.png" alt=""></div>
            <div class="item" style="--position: 10"><img src="../Images/gitlab-logo-400.png" alt=""></div>
        </div>
    </div>




    <!-- User category section -->
    <section class="bg-[#000000] py-16 px-4">
        <div class="container mx-auto max-w-6xl">
            <!-- Section Header -->
            <div class="text-center mb-14">
                <h2 class="text-3xl font-bold mb-2 text-white">Who We Connect</h2>
                <div class="w-16 h-1 bg-[#E94560] mx-auto mb-4"></div>
                <p class="text-gray-400 max-w-2xl mx-auto">Our platform brings together the entire startup ecosystem,
                    creating valuable connections that drive innovation and growth.</p>
            </div>
            <div class="relative">
                <div id="startups" class="tab-content">
                    <div class="grid md:grid-cols-3 gap-8 items-center">
                        <!-- Startup -->
                        <div class="md:col-span-1">
                            <div class="bg-gradient-to-br from-[#E94560] to-purple-500 p-1 rounded-2xl">
                                <div class="bg-[#0b0b0d] rounded-2xl p-6 h-full">
                                    <div class="mb-6">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 text-[#E94560]"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                                        </svg>
                                    </div>
                                    <h3 class="text-2xl font-bold text-white mb-3">For Startups</h3>
                                    <p class="text-gray-400 mb-6">Accelerate your growth by connecting with the
                                        resources
                                        you need most.</p>
                                    <ul class="space-y-3 text-gray-300 mb-8">
                                        <li class="flex items-center">
                                            <svg class="w-5 h-5 mr-2 text-[#E94560]" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            Access to capital
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="w-5 h-5 mr-2 text-[#E94560]" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            Expert mentorship
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="w-5 h-5 mr-2 text-[#E94560]" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            Skilled collaborators
                                        </li>
                                    </ul>
                                    <a href="../SignUps/startup/index.php"
                                        class="inline-flex items-center text-[#E94560] hover:text-white hover:bg-[#E94560] border border-[#E94560] px-4 py-2 rounded-lg transition-colors duration-300 text-sm font-medium">
                                        Create Startup Profile
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- investor -->
                        <div class="md:col-span-1">
                            <div class="bg-gradient-to-br from-cyan-500 to-blue-600 p-1 rounded-2xl">
                                <div class="bg-[#0b0b0d] rounded-2xl p-6 h-full">
                                    <div class="mb-6">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 text-cyan-500"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                        </svg>
                                    </div>
                                    <h3 class="text-2xl font-bold text-white mb-3">For Investors</h3>
                                    <p class="text-gray-400 mb-6">Discover promising opportunities and build a
                                        diversified
                                        investment portfolio.</p>
                                    <ul class="space-y-3 text-gray-300 mb-8">
                                        <li class="flex items-center">
                                            <svg class="w-5 h-5 mr-2 text-cyan-500" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            Curated deal flow
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="w-5 h-5 mr-2 text-cyan-500" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            Advanced filtering
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="w-5 h-5 mr-2 text-cyan-500" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            Due diligence tools
                                        </li>
                                    </ul>
                                    <a href="../SignUps/investor/index.php"
                                        class="inline-flex items-center text-cyan-500 hover:text-white hover:bg-cyan-500 border border-cyan-500 px-4 py-2 rounded-lg transition-colors duration-300 text-sm font-medium">
                                        Join as Investor
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- collaborator -->
                        <div class="md:col-span-1">
                            <div class="bg-gradient-to-br from-purple-500 to-[#E94560] p-1 rounded-2xl">
                                <div class="bg-[#0b0b0d] rounded-2xl p-6 h-full">
                                    <div class="mb-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 text-purple-500"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                        </svg>
                                    </div>
                                    <h3 class="text-2xl font-bold text-white mb-3">For Collaborators</h3>
                                    <p class="text-gray-400 mb-6">Find exciting projects to contribute your skills and
                                        expand your
                                        professional network.</p>
                                    <ul class="space-y-3 text-gray-300 mb-8">
                                        <li class="flex items-center">
                                            <svg class="w-5 h-5 mr-2 text-purple-500" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            Showcase your skills
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="w-5 h-5 mr-2 text-purple-500" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            Find exciting projects
                                        </li>
                                        <li class="flex items-center">
                                            <svg class="w-5 h-5 mr-2 text-purple-500" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            Build your portfolio
                                        </li>
                                    </ul>
                                    <a href="../SignUps/collaborators/index.php"
                                        class="inline-flex items-center text-purple-500 hover:text-white  border border-purple-500 hover:bg-purple-500 px-4 py-2 rounded-lg transition-colors duration-300 text-sm font-medium">
                                        Create Collaborator Profile
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <!-- Featured Startup section-->
    <section class="bg-[#000000] py-16 px-4">
        <div class="container mx-auto max-w-6xl">
            <!-- Section Header -->
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-2 text-white">Featured Startups</h2>
                <div class="w-16 h-1 bg-[#E94560] mx-auto mb-4"></div>
                <p class="text-gray-400 max-w-2xl mx-auto">Discover promising ventures actively seeking investors,
                    mentors,
                    and collaborators on our platform.</p>
            </div>

            <!-- Startup Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Startup Card 1 -->
                <div class="bg-[#0b0b0d] border border-gray-600 rounded-xl overflow-hidden transition-transform duration-300 hover:transform hover:scale-[1.02] hover:shadow-xl">
                    <div class="relative">
                        <div class="h-48 bg-gray-800 flex items-center justify-center">
                            <img src="../Images/nav-img-2.jpg" alt="EcoTech Solutions" class="object-cover h-full w-full">
                        </div>
                        <div
                            class="absolute top-4 right-4 bg-[#E94560] text-white text-xs font-semibold px-3 py-1 rounded-full">
                            Seeking Funding
                        </div>
                    </div>
                    <div class="p-6 bg-gradient-to-br from-gray-900 to-black">
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="font-bold text-xl text-white">EcoTech Solutions</h3>
                            <span class="bg-gray-800 text-gray-300 text-xs px-2 py-1 rounded">CleanTech</span>
                        </div>
                        <p class="text-gray-400 text-sm mb-4">Developing sustainable waste management solutions using
                            AI-powered sorting technology to revolutionize recycling efficiency.</p>
                        <div class="flex items-center justify-between text-sm text-gray-400 mb-5">
                            <span>Seed Stage</span>
                            <span>London, UK</span>
                        </div>
                        <div class="flex space-x-3 mb-4">
                            <span class="bg-gray-800 text-xs text-gray-300 px-3 py-1 rounded-full">$500K-$1M</span>
                            <span class="bg-gray-800 text-xs text-gray-300 px-3 py-1 rounded-full">10% Equity</span>
                        </div>
                        <div class="flex space-x-2 pt-4 border-t border-gray-700">
                            <button
                                class="cursor-pointer bg-gradient-to-r from-[#E94560] to-purple-600 hover:bg-opacity-90 text-white text-sm font-medium py-2 px-4 rounded-md transition duration-300 flex-1"><a href="../Listingpage/Startup/startup_info.php">Connect</a></button>
                            <button
                                class="cursor-pointer bg-transparent border border-gray-600 hover:border-gray-500 text-gray-300 text-sm font-medium py-2 px-4 rounded-md transition duration-300">Profile</button>
                        </div>
                    </div>
                </div>

                <!-- Startup Card 2 -->
                <div
                    class="bg-[#0b0b0d] border border-gray-600 rounded-xl overflow-hidden transition-transform duration-300 hover:transform hover:scale-[1.02] hover:shadow-xl">
                    <div class="relative">
                        <div class="h-48 bg-gray-800 flex items-center justify-center">
                            <img src="../Images/nav-img-2.jpg" alt="MediSync" class="object-cover h-full w-full">
                        </div>
                        <div
                            class="absolute top-4 right-4 bg-purple-500 text-white text-xs font-semibold px-3 py-1 rounded-full">
                            Seeking Mentorship
                        </div>
                    </div>
                    <div class="p-6 bg-gradient-to-br from-gray-900 to-black">
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="font-bold text-xl text-white">MediSync</h3>
                            <span class="bg-gray-800 text-gray-300 text-xs px-2 py-1 rounded">HealthTech</span>
                        </div>
                        <p class="text-gray-400 text-sm mb-4">Healthcare platform streamlining patient data management
                            with
                            blockchain technology for secure, interoperable medical records.</p>
                        <div class="flex items-center justify-between text-sm text-gray-400 mb-5">
                            <span>Series A</span>
                            <span>Berlin, Germany</span>
                        </div>
                        <div class="flex space-x-3 mb-4">
                            <span class="bg-gray-800 text-xs text-gray-300 px-3 py-1 rounded-full">$2M-$5M</span>
                            <span class="bg-gray-800 text-xs text-gray-300 px-3 py-1 rounded-full">FDA Approved</span>
                        </div>
                        <div class="flex space-x-2 pt-4 border-t border-gray-700">
                            <button
                                class="cursor-pointer bg-gradient-to-r from-[#E94560] to-purple-600 hover:bg-opacity-90 text-white text-sm font-medium py-2 px-4 rounded-md transition duration-300 flex-1"><a href="../Listingpage/Startup/startup_info.php">Connect</a></button>
                            <button
                                class="cursor-pointer bg-transparent border border-gray-600 hover:border-gray-500 text-gray-300 text-sm font-medium py-2 px-4 rounded-md transition duration-300">Profile</button>
                        </div>
                    </div>
                </div>

                <!-- Startup Card 3 -->
                <div
                    class="bg-[#0b0b0d] border border-gray-600 rounded-xl overflow-hidden transition-transform duration-300 hover:transform hover:scale-[1.02] hover:shadow-xl">
                    <div class="relative">
                        <div class="h-48 bg-gray-800 flex items-center justify-center">
                            <img src="../Images/nav-img-2.jpg" alt="FinLeap" class="object-cover h-full w-full">
                        </div>
                        <div
                            class="absolute top-4 right-4 bg-cyan-500 text-white text-xs font-semibold px-3 py-1 rounded-full">
                            Seeking Collaboration
                        </div>
                    </div>
                    <div class="p-6 bg-gradient-to-br from-gray-900 to-black">
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="font-bold text-xl text-white">FinLeap</h3>
                            <span class="bg-gray-800 text-gray-300 text-xs px-2 py-1 rounded">FinTech</span>
                        </div>
                        <p class="text-gray-400 text-sm mb-4">Next-gen financial planning platform offering automated
                            investment strategies and personalized financial advice for millennials.</p>
                        <div class="flex items-center justify-between text-sm text-gray-400 mb-5">
                            <span>Pre-seed</span>
                            <span>Singapore</span>
                        </div>
                        <div class="flex space-x-3 mb-4">
                            <span class="bg-gray-800 text-xs text-gray-300 px-3 py-1 rounded-full">Technical
                                Co-founder</span>
                            <span class="bg-gray-800 text-xs text-gray-300 px-3 py-1 rounded-full">5K+ Users</span>
                        </div>
                        <div class="flex space-x-2 pt-4 border-t border-gray-700">
                            <button
                                class="cursor-pointer bg-gradient-to-r from-[#E94560] to-purple-600 hover:bg-opacity-90 text-white text-sm font-medium py-2 px-4 rounded-md transition duration-300 flex-1"><a href="../Listingpage/Startup/startup_info.php">Connect</a></button>
                            <button
                                class="cursor-pointer bg-transparent border border-gray-600 hover:border-gray-500 text-gray-300 text-sm font-medium py-2 px-4 rounded-md transition duration-300">Profile</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- View All Button -->
            <div class="mt-12 text-center">
                <a href="../Listingpage/Startup/startups.php"
                    class="inline-flex items-center justify-center px-6 py-3 mx-auto text-white font-medium border border-gray-600 rounded-lg bg-gradient-to-r from-[#E94560] to-purple-600 transition-all duration-300 transform hover:scale-105 hover:shadow-xl hover:shadow-[#E94560]/20">
                    Explore All Startups
                </a>
            </div>
        </div>
    </section>




    <!-- contact us section -->
    <div class="bg-black text-white py-16" id="contact">
        <div class="container mx-auto px-4 max-w-5xl">
            <!-- Section Header -->
            <div class="text-center mb-12">
                <h2
                    class="text-4xl font-bold mb-3 bg-clip-text text-transparent bg-gradient-to-r from-pink-500 via-purple-500 to-indigo-500">
                    Contact Us</h2>
                <div class="w-24 h-1 bg-gradient-to-r from-pink-500 to-purple-600 mx-auto mb-6 rounded-full"></div>
                <p class="text-gray-300 max-w-lg mx-auto text-sm">Ready to launch your startup? Get in touch with our
                    team
                    and let's create something amazing together.</p>
            </div>

            <!-- Contact Form and Info Container -->
            <div class="flex flex-col md:flex-row gap-8 mx-auto">
                <!-- Contact Information -->
                <div class="w-full md:w-2/5 bg-gradient-to-br from-gray-900 to-black p-8 rounded-2xl backdrop-blur-sm border border-gray-700/50 shadow-xl">
                    <h3 class="text-xl font-semibold mb-6 pb-3 border-b border-purple-500/30 text-gray-100">
                        Get In Touch
                    </h3>
                    <div class="space-y-6">
                        <div class="flex items-center group">
                            <div class="bg-gradient-to-br from-pink-500 to-purple-600 p-3 rounded-lg mr-4 shadow-lg group-hover:shadow-pink-500/20 transition duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-gray-200">Our Location</p>
                                <p class="text-sm text-gray-400">123 Innovation Street, Tech Hub City</p>
                            </div>
                        </div>

                        <div class="flex items-center group">
                            <div
                                class="bg-gradient-to-br from-pink-500 to-purple-600 p-3 rounded-lg mr-4 shadow-lg group-hover:shadow-pink-500/20 transition duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-gray-200">Email Us</p>
                                <p class="text-sm text-gray-400">contact@ElevateX.com</p>
                            </div>
                        </div>

                        <div class="flex items-center group">
                            <div
                                class="bg-gradient-to-br from-pink-500 to-purple-600 p-3 rounded-lg mr-4 shadow-lg group-hover:shadow-pink-500/20 transition duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-gray-200">Call Us</p>
                                <p class="text-sm text-gray-400">+1 (555) 123-4567</p>
                            </div>
                        </div>
                    </div>

                    <!-- Social Media Links -->
                    <div class="mt-8 pt-6 border-t border-gray-700/30">
                        <p class="text-sm text-gray-400 mb-4 text-center">Connect with us</p>
                        <div class="flex space-x-4 justify-center">
                            <a href="#"
                                class="bg-gradient-to-br from-gray-800 to-gray-900 hover:from-pink-500 hover:to-purple-600 p-3 rounded-full transition-all duration-300 shadow-lg hover:shadow-pink-500/20 group">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 text-gray-400 group-hover:text-white" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                                </svg>
                            </a>
                            <a href="#"
                                class="bg-gradient-to-br from-gray-800 to-gray-900 hover:from-pink-500 hover:to-purple-600 p-3 rounded-full transition-all duration-300 shadow-lg hover:shadow-pink-500/20 group">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 text-gray-400 group-hover:text-white" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                                </svg>
                            </a>
                            <a href="#"
                                class="bg-gradient-to-br from-gray-800 to-gray-900 hover:from-pink-500 hover:to-purple-600 p-3 rounded-full transition-all duration-300 shadow-lg hover:shadow-pink-500/20 group">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 text-gray-400 group-hover:text-white" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                                </svg>
                            </a>
                            <a href="#"
                                class="bg-gradient-to-br from-gray-800 to-gray-900 hover:from-pink-500 hover:to-purple-600 p-3 rounded-full transition-all duration-300 shadow-lg hover:shadow-pink-500/20 group">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 text-gray-400 group-hover:text-white" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="w-full md:w-3/5">
                    <form action="./email.php" method="POST"
                        class="bg-gradient-to-br from-gray-900 to-black p-8 rounded-2xl backdrop-blur-sm border border-gray-700/50 shadow-xl">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div class="space-y-2">
                                <label class="text-sm font-medium text-gray-300 pl-1">Full Name</label>
                                <input type="text" placeholder="John Doe" name="fullName"
                                    class="w-full px-4 py-3 bg-gradient-to-br from-gray-900 to-black rounded-lg border border-gray-700 focus:outline-none focus:ring-2 focus:ring-pink-500/50 focus:border-transparent text-gray-200 text-sm transition duration-200"
                                    required>
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-medium text-gray-300 pl-1">Email Address</label>
                                <input type="email" placeholder="john@example.com" name="email"
                                    class="w-full px-4 py-3 bg-gradient-to-br from-gray-900 to-black rounded-lg border border-gray-700 focus:outline-none focus:ring-2 focus:ring-pink-500/50 focus:border-transparent text-gray-200 text-sm transition duration-200"
                                    required>
                            </div>
                        </div>

                        <div class="mb-6 space-y-2">
                            <label class="text-sm font-medium text-gray-300 pl-1">Subject</label>
                            <input type="text" placeholder="How can we help you?" name="subject"
                                class="w-full px-4 py-3 bg-gradient-to-br from-gray-900 to-black rounded-lg border border-gray-700 focus:outline-none focus:ring-2 focus:ring-pink-500/50 focus:border-transparent text-gray-200 text-sm transition duration-200"
                                required>
                        </div>

                        <div class="mb-6 space-y-2">
                            <label class="text-sm font-medium text-gray-300 pl-1">Your Message</label>
                            <textarea rows="5" placeholder="Tell us about your project..." name="message"
                                class="w-full px-4 py-3 bg-gradient-to-br from-gray-900 to-black rounded-lg border border-gray-700 focus:outline-none focus:ring-2 focus:ring-pink-500/50 focus:border-transparent text-gray-200 text-sm transition duration-200 resize-none"></textarea>
                        </div>

                        <div class="flex items-center mb-6">
                            <input type="checkbox" id="newsletter"
                                class="w-4 h-4 text-pink-500 bg-gray-800 border-gray-700 rounded focus:ring-0 focus:ring-offset-0 cursor-pointer">
                            <label for="newsletter" class="ml-3 text-gray-300 text-sm">Keep me updated with latest news and exclusive offers</label>
                        </div>

                        <button type="submit" name="send" value="submit"
                            class="w-full cursor-pointer bg-gradient-to-r from-pink-500 to-purple-600 hover:from-pink-600 hover:to-purple-700 text-white font-medium py-3 px-6 rounded-lg transition-all duration-300 text-sm flex items-center justify-center shadow-lg hover:shadow-pink-500/25 transform hover:-translate-y-1">
                            Send Message
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>




    <!-- Accoordian FAQ -->
    <section class="bg-[#000000] py-12 px-4" id="faq">
        <div class="container mx-auto max-w-4xl">
            <!-- Section Header -->
            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold mb-2 text-white">Frequently Asked Questions</h2>
                <div class="w-16 h-1 bg-[#E94560] mx-auto mb-4"></div>
                <p class="text-gray-400 max-w-lg mx-auto">Find answers to the most common questions about our platform
                    and
                    services.</p>
            </div>

            <!-- FAQ Accordion -->
            <div class="space-y-4">


                <!-- FAQ Item 3 -->
                <div class="border border-gray-600 rounded-lg bg-gradient-to-br from-gray-900 to-black overflow-hidden ">
                    <button class="flex items-center justify-between w-full p-5 text-left cursor-pointer"
                        onclick="toggleAccordion('faq-3')">
                        <span class="text-white font-medium">How can collaborators help startups on your
                            platform?</span>
                        <svg id="faq-3-icon" class="w-5 h-5 text-[#E94560] transform transition-transform duration-300"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="faq-3" class="hidden px-5 pb-5">
                        <p class="text-gray-400">Collaborators on our platform include skilled professionals and service
                            providers who can assist startups with specific challenges. This includes developers,
                            designers,
                            marketers, legal experts, and more. Startups can post specific project needs or browse
                            collaborator profiles to find the right match for their requirements.</p>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="border border-gray-600 rounded-lg bg-gradient-to-br from-gray-900 to-black overflow-hidden">
                    <button class="flex items-center justify-between w-full p-5 text-left cursor-pointer"
                        onclick="toggleAccordion('faq-4')">
                        <span class="text-white font-medium">Is there a cost to join the platform?</span>
                        <svg id="faq-4-icon" class="w-5 h-5 text-[#E94560] transform transition-transform duration-300"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="faq-4" class="hidden px-5 pb-5">
                        <p class="text-gray-400">We offer a freemium model with basic functionality available at no
                            cost.
                            Premium plans are available for startups seeking advanced features like investor analytics,
                            enhanced visibility, and priority matching. Investors and mentors can join for free, while
                            collaborators may have different subscription options based on their service offerings.</p>
                    </div>
                </div>

                <!-- FAQ Item 5 -->
                <div class="border border-gray-600 rounded-lg bg-gradient-to-br from-gray-900 to-black overflow-hidden">
                    <button class="flex items-center justify-between w-full p-5 text-left cursor-pointer"
                        onclick="toggleAccordion('faq-5')">
                        <span class="text-white font-medium">How do you verify startups and investors on the
                            platform?</span>
                        <svg id="faq-5-icon" class="w-5 h-5 text-[#E94560] transform transition-transform duration-300"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="faq-5" class="hidden px-5 pb-5">
                        <p class="text-gray-400">We implement a thorough verification process for all users. Startups
                            undergo business validation checks, while investors are verified through professional
                            network
                            references and financial capability assessments. Our verification badge indicates users who
                            have
                            completed this process, creating a trusted ecosystem for meaningful connections.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- Footer -->
    <footer class="bg-[#0A0A0A] border-t border-gray-800 mt-12 py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between">
                <div class="mb-6 md:mb-0">
                    <div class="text-xl font-bold mb-2 text-white">ElevateX</div>
                    <p class="text-gray-400 text-sm max-w-md">Connecting founders, investors, and talent to build the
                        next
                        generation of innovative companies.</p>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                    <div>
                        <h5 class="text-sm font-medium mb-3 text-white">Platform</h5>
                        <ul class="space-y-2 text-sm text-gray-400">
                            <li><a href="#" class="hover:text-white">Discover</a></li>
                            <li><a href="../Listingpage/Startup/startups.php" class="hover:text-white">Startups</a></li>
                            <li><a href="#" class="hover:text-white">Investors</a></li>
                            <!-- <li><a href="#" class="hover:text-white">Talent</a></li> -->
                        </ul>
                    </div>
                    <div>
                        <h5 class="text-sm font-medium mb-3 text-white">Resources</h5>
                        <ul class="space-y-2 text-sm text-gray-400">
                            <li><a href="#" class="hover:text-white">Blog</a></li>
                            <li><a href="#" class="hover:text-white">Guides</a></li>
                            <li><a href="../Eventpage/events.php" class="hover:text-white">Events</a></li>
                            <!-- <li><a href="#" class="hover:text-white">Podcast</a></li> -->
                        </ul>
                    </div>
                    <div>
                        <h5 class="text-sm font-medium mb-3 text-white">Company</h5>
                        <ul class="space-y-2 text-sm text-gray-400">
                            <li><a href="./aboutus.php" class="hover:text-white">About</a></li>
                            <li><a href="#" class="hover:text-white">Freelance Zone</a></li>
                            <li><a href="#contact" class="hover:text-white">Contact</a></li>
                            <!-- <li><a href="#" class="hover:text-white">Press</a></li> -->
                        </ul>
                    </div>
                    <div>
                        <h5 class="text-sm font-medium mb-3 text-white">Legal</h5>
                        <ul class="space-y-2 text-sm text-gray-400">
                            <li><a href="#" class="hover:text-white">Privacy</a></li>
                            <li><a href="#" class="hover:text-white">Terms</a></li>
                            <li><a href="#" class="hover:text-white">Security</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mt-8 pt-6 border-t border-gray-800 flex flex-col md:flex-row justify-between items-center">
                <p class="text-sm text-gray-500">© 2025 ElevateX. All rights reserved.</p>
                <div class="mt-4 md:mt-0 flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-white">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84">
                            </path>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <script src="./index.js"></script>
</body>

</html>