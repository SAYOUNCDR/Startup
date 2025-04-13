<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Founder Profile | ElevateX</title>
    <link rel="stylesheet" href="../output.css">
    <style>
        body {
            background-color: #000000;
            color: #ffffff;
        }
    </style>
</head>

<body class="min-h-screen bg-black text-white">
    <!-- Navbar -->
    <nav class="bg-[#0A0A0A] shadow-md border-b border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <div class="text-xl font-bold">ElevateX</div>
                </div>
                <div class="flex items-center space-x-4">
                    <button class="p-1 rounded text-gray-400 hover:text-white focus:outline-none">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                        </svg>
                    </button>
                    <div class="relative">
                        <button class="p-1 rounded text-gray-400 hover:text-white focus:outline-none">
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                        </button>
                        <span class="absolute top-0 right-0 block h-2 w-2 rounded-full bg-red-500"></span>
                    </div>
                    <div class="ml-3 relative">
                        <div>
                            <button class="flex items-center space-x-2 focus:outline-none">
                                <img class="h-8 w-8 rounded-full border border-gray-700" src="/api/placeholder/32/32"
                                    alt="User avatar">
                                <span class="text-sm font-medium"><?php echo $_SESSION['founder_name'] ?></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Profile Header -->
        <div class="mb-8 relative">
            <!-- Cover Image -->
            <div class="h-48 w-full rounded-xl overflow-hidden bg-gradient-to-br from-gray-900 to-black border border-gray-700 shadow-lg">
                <img class="w-full h-full object-cover opacity-40" src="/api/placeholder/1200/300" alt="Cover">
            </div>

            <div class="absolute bottom-0 left-0 transform translate-y-1/2 ml-6 sm:ml-10 flex items-end mb-5">
                <img class="h-24 w-24 sm:h-32 sm:w-32 rounded-lg border-4 border-white shadow-xl"
                    src="../Images/nav-img-1.png" alt="Profile picture">
                <div class="ml-4 pb-2">
                    <h1 class="text-2xl sm:text-3xl font-bold text-white shadow-text"><?php echo $_SESSION['founder_name'] ?></h1>
                    <p class="text-blue-300 font-medium">
                        <?php
                        echo $_SESSION['founder_startup'] . "<br>";
                        ?>
                    </p>
                </div>
            </div>

            <!-- <div class="flex justify-end mt-4 space-x-3">
                <button
                    class="bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded-lg text-white shadow-lg transition duration-200">
                    Connect
                </button>
                <button
                    class="bg-transparent border border-gray-600 hover:border-gray-500 px-4 py-2 rounded-lg text-white shadow-lg transition duration-200">
                    Message
                </button>
            </div> -->
        </div>

        <div class="mt-16 grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Left Column - Personal Info & Stats -->
            <div class="space-y-8">
                <!-- Personal Info -->
                <div class="bg-[#0A0A0A] rounded-xl shadow-lg border border-gray-800 overflow-hidden">
                    <div class="border-b border-gray-800 px-6 py-4">
                        <h3 class="text-lg font-medium">About</h3>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-300 mb-4">
                            Serial entrepreneur with 10+ years experience in tech. Passionate about AI, fintech, and
                            sustainability. Building solutions that matter.
                        </p>

                        <div class="space-y-3 text-sm text-gray-400">
                            <div class="flex items-center">
                                <svg class="h-5 w-5 mr-2 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span>San Francisco, CA</span>
                            </div>
                            <div class="flex items-center">
                                <svg class="h-5 w-5 mr-2 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <span>Previously: Google, Stripe</span>
                            </div>
                            <div class="flex items-center">
                                <svg class="h-5 w-5 mr-2 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                                <span>MBA, Stanford University</span>
                            </div>
                            <div class="flex items-center">
                                <svg class="h-5 w-5 mr-2 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <span><?php echo $_SESSION['founder_email']; ?></span>
                            </div>
                        </div>

                        <div class="mt-6">
                            <h4 class="text-sm font-medium text-gray-300 mb-3">Skills & Expertise</h4>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-gray-800 text-blue-300 px-3 py-1 rounded-full text-xs">Product
                                    Strategy</span>
                                <span class="bg-gray-800 text-green-300 px-3 py-1 rounded-full text-xs">Growth
                                    Hacking</span>
                                <span
                                    class="bg-gray-800 text-purple-300 px-3 py-1 rounded-full text-xs">Fundraising</span>
                                <span class="bg-gray-800 text-yellow-300 px-3 py-1 rounded-full text-xs">Team
                                    Building</span>
                                <span class="bg-gray-800 text-red-300 px-3 py-1 rounded-full text-xs">AI/ML</span>
                                <span class="bg-gray-800 text-indigo-300 px-3 py-1 rounded-full text-xs">Fintech</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Founder Stats -->
                <div class="bg-[#0A0A0A] rounded-xl shadow-lg border border-gray-800 overflow-hidden">
                    <div class="border-b border-gray-800 px-6 py-4">
                        <h3 class="text-lg font-medium">Founder Stats</h3>
                    </div>
                    <div class="p-6">
                        <div class="grid grid-cols-2 gap-4">
                            <div class="bg-black rounded-lg p-4 border border-gray-800 shadow-inner">
                                <p class="text-gray-400 text-sm">Startups Founded</p>
                                <p class="text-2xl font-bold mt-1">3</p>
                            </div>
                            <div class="bg-black rounded-lg p-4 border border-gray-800 shadow-inner">
                                <p class="text-gray-400 text-sm">Successful Exits</p>
                                <p class="text-2xl font-bold mt-1">1</p>
                            </div>
                            <div class="bg-black rounded-lg p-4 border border-gray-800 shadow-inner">
                                <p class="text-gray-400 text-sm">Total Fundraised</p>
                                <p class="text-2xl font-bold mt-1">$<?php echo $_SESSION['funding_raised'] ?>M</p>
                            </div>
                            <div class="bg-black rounded-lg p-4 border border-gray-800 shadow-inner">
                                <p class="text-gray-400 text-sm">Team Members</p>
                                <p class="text-2xl font-bold mt-1"><?php echo $_SESSION['company_size'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Investors -->
                <div class="bg-[#0A0A0A] rounded-xl shadow-lg border border-gray-800 overflow-hidden">
                    <div class="border-b border-gray-800 px-6 py-4">
                        <h3 class="text-lg font-medium">Investors & Partners</h3>
                    </div>
                    <div class="p-6">
                        <div class="grid grid-cols-3 gap-4">
                            <div
                                class="bg-black rounded-lg p-3 border border-gray-800 flex items-center justify-center">
                                <img class="h-10" src="/api/placeholder/80/30" alt="Investor logo">
                            </div>
                            <div
                                class="bg-black rounded-lg p-3 border border-gray-800 flex items-center justify-center">
                                <img class="h-10" src="/api/placeholder/80/30" alt="Investor logo">
                            </div>
                            <div
                                class="bg-black rounded-lg p-3 border border-gray-800 flex items-center justify-center">
                                <img class="h-10" src="/api/placeholder/80/30" alt="Investor logo">
                            </div>
                            <div
                                class="bg-black rounded-lg p-3 border border-gray-800 flex items-center justify-center">
                                <img class="h-10" src="/api/placeholder/80/30" alt="Investor logo">
                            </div>
                            <div
                                class="bg-black rounded-lg p-3 border border-gray-800 flex items-center justify-center">
                                <img class="h-10" src="/api/placeholder/80/30" alt="Investor logo">
                            </div>
                            <div
                                class="bg-black rounded-lg p-3 border border-gray-800 flex items-center justify-center">
                                <img class="h-10" src="/api/placeholder/80/30" alt="Investor logo">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Middle Column - Current Startups -->
            <div class="space-y-8 lg:col-span-2">
                <!-- Current Startups -->
                <div class="bg-[#0A0A0A] rounded-xl shadow-lg border border-gray-800 overflow-hidden">
                    <div class="border-b border-gray-800 px-6 py-4 flex justify-between items-center">
                        <h3 class="text-lg font-medium">Current Startups</h3>
                        <!-- Add new startup button -->
                        <!-- <button class="text-sm bg-blue-600 hover:bg-blue-700 px-3 py-1 rounded text-white">
                            + New Startup
                        </button> -->
                    </div>
                    <div class="p-6">
                        <!-- TechInnovate AI -->
                        <div class="mb-8 bg-black rounded-xl border border-gray-800 overflow-hidden shadow-lg">
                            <div class="px-6 py-4 flex flex-col sm:flex-row sm:items-center">
                                <img class="h-16 w-16 rounded-lg border border-gray-700 mb-4 sm:mb-0 sm:mr-6"
                                    src="/api/placeholder/64/64" alt="Company logo">
                                <div class="flex-1">
                                    <div class="flex flex-wrap justify-between mb-2">
                                        <h4 class="text-lg font-bold">
                                            <?php echo $_SESSION['founder_startup'] ?>
                                        </h4>
                                        <span
                                            class="bg-green-900 text-green-300 px-2 py-1 rounded text-xs">Active</span>
                                    </div>
                                    <p class="text-gray-400 text-sm mb-3"><?php echo $_SESSION['description'] ?></p>
                                    <div class="flex flex-wrap gap-2">
                                        <span class="bg-gray-800 text-xs px-2 py-1 rounded">Founded <?php echo $_SESSION['founding_date'] ?></span>
                                        <span class="bg-gray-800 text-xs px-2 py-1 rounded"><?php echo $_SESSION['funding_stage'] ?></span>
                                        <span class="bg-gray-800 text-xs px-2 py-1 rounded">$<?php echo $_SESSION['funding_raised'] ?>M Raised</span>
                                    </div>
                                </div>
                            </div>

                            <div class="border-t border-gray-800 px-6 py-4">
                                <h5 class="text-sm font-medium mb-3">Tech Stack</h5>
                                <div class="flex flex-wrap gap-2">
                                    <span
                                        class="bg-blue-900 bg-opacity-30 text-blue-300 px-2 py-1 rounded text-xs">Python</span>
                                    <span
                                        class="bg-yellow-900 bg-opacity-30 text-yellow-300 px-2 py-1 rounded text-xs">TensorFlow</span>
                                    <span
                                        class="bg-green-900 bg-opacity-30 text-green-300 px-2 py-1 rounded text-xs">React</span>
                                    <span
                                        class="bg-red-900 bg-opacity-30 text-red-300 px-2 py-1 rounded text-xs">Node.js</span>
                                    <span
                                        class="bg-purple-900 bg-opacity-30 text-purple-300 px-2 py-1 rounded text-xs">AWS</span>
                                    <span
                                        class="bg-indigo-900 bg-opacity-30 text-indigo-300 px-2 py-1 rounded text-xs">GraphQL</span>
                                </div>
                            </div>

                            <div class="border-t border-gray-800 px-6 py-4">
                                <h5 class="text-sm font-medium mb-3">Team</h5>
                                <div class="flex -space-x-2 mb-2">
                                    <img class="h-8 w-8 rounded-full border border-black" src="/api/placeholder/32/32"
                                        alt="Team member">
                                    <img class="h-8 w-8 rounded-full border border-black" src="/api/placeholder/32/32"
                                        alt="Team member">
                                    <img class="h-8 w-8 rounded-full border border-black" src="/api/placeholder/32/32"
                                        alt="Team member">
                                    <img class="h-8 w-8 rounded-full border border-black" src="/api/placeholder/32/32"
                                        alt="Team member">
                                    <img class="h-8 w-8 rounded-full border border-black" src="/api/placeholder/32/32"
                                        alt="Team member">
                                    <div
                                        class="h-8 w-8 rounded-full border border-black bg-gray-800 flex items-center justify-center text-xs text-gray-300">
                                        +12</div>
                                </div>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-gray-800 text-xs px-2 py-1 rounded">4 Engineers</span>
                                    <span class="bg-gray-800 text-xs px-2 py-1 rounded">2 Data Scientists</span>
                                    <span class="bg-gray-800 text-xs px-2 py-1 rounded">3 Product</span>
                                    <span class="bg-gray-800 text-xs px-2 py-1 rounded">2 Marketing</span>
                                    <span class="bg-gray-800 text-xs px-2 py-1 rounded">1 Sales</span>
                                </div>
                            </div>

                            <div class="px-6 py-3 bg-[#0A0A0A]">
                                <div class="flex justify-between">
                                    <a href="#" class="text-blue-400 text-sm font-medium hover:text-blue-300">View
                                        Details</a>
                                    <a href="#" class="text-blue-400 text-sm font-medium hover:text-blue-300">Manage
                                        Team</a>
                                </div>
                            </div>
                        </div>

                        <!-- GreenSustain [More starups can be added here]-->
                        <!-- <div class="mb-8 bg-black rounded-xl border border-gray-800 overflow-hidden shadow-lg">
                            <div class="px-6 py-4 flex flex-col sm:flex-row sm:items-center">
                                <img class="h-16 w-16 rounded-lg border border-gray-700 mb-4 sm:mb-0 sm:mr-6"
                                    src="/api/placeholder/64/64" alt="Company logo">
                                <div class="flex-1">
                                    <div class="flex flex-wrap justify-between mb-2">
                                        <h4 class="text-lg font-bold">GreenSustain</h4>
                                        <span
                                            class="bg-blue-900 text-blue-300 px-2 py-1 rounded text-xs">Pre-Launch</span>
                                    </div>
                                    <p class="text-gray-400 text-sm mb-3">Sustainable supply chain management platform
                                        for eco-friendly businesses</p>
                                    <div class="flex flex-wrap gap-2">
                                        <span class="bg-gray-800 text-xs px-2 py-1 rounded">Founded 2024</span>
                                        <span class="bg-gray-800 text-xs px-2 py-1 rounded">Seed</span>
                                        <span class="bg-gray-800 text-xs px-2 py-1 rounded">$2.1M Raised</span>
                                    </div>
                                </div>
                            </div>

                            <div class="border-t border-gray-800 px-6 py-4">
                                <h5 class="text-sm font-medium mb-3">Tech Stack</h5>
                                <div class="flex flex-wrap gap-2">
                                    <span
                                        class="bg-blue-900 bg-opacity-30 text-blue-300 px-2 py-1 rounded text-xs">Next.js</span>
                                    <span
                                        class="bg-yellow-900 bg-opacity-30 text-yellow-300 px-2 py-1 rounded text-xs">Golang</span>
                                    <span
                                        class="bg-green-900 bg-opacity-30 text-green-300 px-2 py-1 rounded text-xs">PostgreSQL</span>
                                    <span
                                        class="bg-red-900 bg-opacity-30 text-red-300 px-2 py-1 rounded text-xs">Docker</span>
                                    <span
                                        class="bg-purple-900 bg-opacity-30 text-purple-300 px-2 py-1 rounded text-xs">Kubernetes</span>
                                </div>
                            </div>

                            <div class="border-t border-gray-800 px-6 py-4">
                                <h5 class="text-sm font-medium mb-3">Team</h5>
                                <div class="flex -space-x-2 mb-2">
                                    <img class="h-8 w-8 rounded-full border border-black" src="/api/placeholder/32/32"
                                        alt="Team member">
                                    <img class="h-8 w-8 rounded-full border border-black" src="/api/placeholder/32/32"
                                        alt="Team member">
                                    <img class="h-8 w-8 rounded-full border border-black" src="/api/placeholder/32/32"
                                        alt="Team member">
                                    <img class="h-8 w-8 rounded-full border border-black" src="/api/placeholder/32/32"
                                        alt="Team member">
                                    <div
                                        class="h-8 w-8 rounded-full border border-black bg-gray-800 flex items-center justify-center text-xs text-gray-300">
                                        +3</div>
                                </div>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-gray-800 text-xs px-2 py-1 rounded">2 Engineers</span>
                                    <span class="bg-gray-800 text-xs px-2 py-1 rounded">1 Designer</span>
                                    <span class="bg-gray-800 text-xs px-2 py-1 rounded">1 Product</span>
                                    <span class="bg-gray-800 text-xs px-2 py-1 rounded">1 Operations</span>
                                </div>
                            </div>

                            <div class="px-6 py-3 bg-[#0A0A0A]">
                                <div class="flex justify-between">
                                    <a href="#" class="text-blue-400 text-sm font-medium hover:text-blue-300">View
                                        Details</a>
                                    <a href="#" class="text-blue-400 text-sm font-medium hover:text-blue-300">Manage
                                        Team</a>
                                </div>
                            </div>
                        </div> -->

                        <!-- Previous Success -->
                        <div
                            class="bg-black rounded-xl border border-gray-800 overflow-hidden shadow-lg opacity-70 hover:opacity-100 transition duration-300">
                            <div class="px-6 py-4 flex flex-col sm:flex-row sm:items-center">
                                <img class="h-16 w-16 rounded-lg border border-gray-700 mb-4 sm:mb-0 sm:mr-6"
                                    src="/api/placeholder/64/64" alt="Company logo">
                                <div class="flex-1">
                                    <div class="flex flex-wrap justify-between mb-2">
                                        <h4 class="text-lg font-bold">PaymentFlow</h4>
                                        <span
                                            class="bg-purple-900 text-purple-300 px-2 py-1 rounded text-xs">Acquired</span>
                                    </div>
                                    <p class="text-gray-400 text-sm mb-3">B2B payment processing platform (Acquired by
                                        FinTech Global in 2022)</p>
                                    <div class="flex flex-wrap gap-2">
                                        <span class="bg-gray-800 text-xs px-2 py-1 rounded">Founded 2019</span>
                                        <span class="bg-gray-800 text-xs px-2 py-1 rounded">Exit Value: $28M</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Funding Needs & Opportunities -->
                <div class="bg-[#0A0A0A] rounded-xl shadow-lg border border-gray-800 overflow-hidden">
                    <div class="border-b border-gray-800 px-6 py-4">
                        <h3 class="text-lg font-medium">Funding & Collaborations</h3>
                    </div>
                    <div class="p-6">
                        <!-- Current Funding Rounds -->
                        <div class="mb-6">
                            <h4 class="font-medium mb-4">Open Funding Rounds</h4>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="bg-black rounded-lg p-4 border border-blue-900">
                                    <div class="flex justify-between items-start mb-2">
                                        <h5 class="font-medium">GreenSustain Seed+ Round</h5>
                                        <span
                                            class="bg-blue-900 text-blue-300 px-2 py-1 rounded-full text-xs">Active</span>
                                    </div>
                                    <p class="text-sm text-gray-400 mb-3">Raising $1.5M to expand operations and launch
                                        beta product</p>
                                    <div class="bg-gray-900 rounded-full h-2 mb-2">
                                        <div class="bg-blue-500 h-2 rounded-full" style="width: 65%"></div>
                                    </div>
                                    <div class="flex justify-between text-xs text-gray-400">
                                        <span>$975K committed</span>
                                        <span>$1.5M goal</span>
                                    </div>
                                </div>

                                <div class="bg-black rounded-lg p-4 border border-gray-800">
                                    <div class="flex justify-between items-start">
                                        <h5 class="font-medium">TechInnovate AI Series A Extension</h5>
                                        <span
                                            class="bg-yellow-900 text-yellow-300 px-2 py-1 rounded-full text-xs">Planned</span>
                                    </div>
                                    <p class="text-sm text-gray-400">Targeting Q3 2025 for international expansion
                                        funding</p>
                                    <button
                                        class="mt-4 w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-lg text-sm">Set
                                        Up Round</button>
                                </div>
                            </div>
                        </div>

                        <!-- Collaboration Needs -->
                        <div>
                            <h4 class="font-medium mb-4">Collaboration Needs</h4>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="bg-black rounded-lg p-4 border border-gray-800">
                                    <div class="flex justify-between items-start mb-2">
                                        <h5 class="font-medium">Senior AI Engineer</h5>
                                        <h5 class="font-medium">Senior AI Engineer</h5>
                                        <span
                                            class="bg-red-900 text-red-300 px-2 py-1 rounded-full text-xs">Urgent</span>
                                    </div>
                                    <p class="text-sm text-gray-400 mb-3">Looking for experienced ML/AI engineer with
                                        financial data expertise for
                                        TechInnovate AI</p>
                                    <button
                                        class="w-full bg-gray-800 hover:bg-gray-700 text-white py-2 rounded-lg text-sm">View
                                        Details</button>
                                </div>

                                <div class="bg-black rounded-lg p-4 border border-gray-800">
                                    <div class="flex justify-between items-start mb-2">
                                        <h5 class="font-medium">Sustainability Advisor</h5>
                                        <span
                                            class="bg-green-900 text-green-300 px-2 py-1 rounded-full text-xs">New</span>
                                    </div>
                                    <p class="text-sm text-gray-400 mb-3">Seeking advisor with experience in sustainable
                                        supply chains for GreenSustain
                                    </p>
                                    <button
                                        class="w-full bg-gray-800 hover:bg-gray-700 text-white py-2 rounded-lg text-sm">View
                                        Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Activity Feed -->
                <div class="bg-[#0A0A0A] rounded-xl shadow-lg border border-gray-800 overflow-hidden">
                    <div class="border-b border-gray-800 px-6 py-4">
                        <h3 class="text-lg font-medium">Recent Activity</h3>
                    </div>
                    <div class="p-6">
                        <div class="space-y-4">
                            <!-- Activity Item 1 -->
                            <div class="flex">
                                <div class="flex-shrink-0 mr-4">
                                    <img class="h-10 w-10 rounded-full border border-gray-700"
                                        src="/api/placeholder/40/40" alt="User avatar">
                                </div>
                                <div class="flex-1 bg-black rounded-lg border border-gray-800 p-4">
                                    <div class="flex justify-between mb-2">
                                        <div>
                                            <span class="font-medium"><?php echo $_SESSION['founder_name']  ?></span>
                                            <span class="text-gray-500"> closed Series A funding for </span>
                                            <span class="font-medium text-blue-400">TechInnovate AI</span>
                                        </div>
                                        <span class="text-xs text-gray-500">2 days ago</span>
                                    </div>
                                    <p class="text-sm text-gray-400">Successfully closed our Series A round at $7.5M.
                                        Thanks to all our
                                        investors for their support and confidence in our vision!</p>
                                    <div class="mt-3 flex space-x-2">
                                        <button class="text-xs text-blue-400 hover:text-blue-300">Like</button>
                                        <button class="text-xs text-blue-400 hover:text-blue-300">Comment</button>
                                        <button class="text-xs text-blue-400 hover:text-blue-300">Share</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Activity Item 2 -->
                            <div class="flex">
                                <div class="flex-shrink-0 mr-4">
                                    <img class="h-10 w-10 rounded-full border border-gray-700"
                                        src="/api/placeholder/40/40" alt="User avatar">
                                </div>
                                <div class="flex-1 bg-black rounded-lg border border-gray-800 p-4">
                                    <div class="flex justify-between mb-2">
                                        <div>
                                            <span class="font-medium">Sarah Johnson</span>
                                            <span class="text-gray-500"> added a new milestone for </span>
                                            <span class="font-medium text-blue-400">GreenSustain</span>
                                        </div>
                                        <span class="text-xs text-gray-500">5 days ago</span>
                                    </div>
                                    <p class="text-sm text-gray-400">MVP development is on track for June 2025 launch.
                                        Excited to share
                                        our progress with beta testers next month!</p>
                                    <div class="mt-3 flex space-x-2">
                                        <button class="text-xs text-blue-400 hover:text-blue-300">Like</button>
                                        <button class="text-xs text-blue-400 hover:text-blue-300">Comment</button>
                                        <button class="text-xs text-blue-400 hover:text-blue-300">Share</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Activity Item 3 -->
                            <div class="flex">
                                <div class="flex-shrink-0 mr-4">
                                    <img class="h-10 w-10 rounded-full border border-gray-700"
                                        src="/api/placeholder/40/40" alt="User avatar">
                                </div>
                                <div class="flex-1 bg-black rounded-lg border border-gray-800 p-4">
                                    <div class="flex justify-between mb-2">
                                        <div>
                                            <span class="font-medium">Sarah Johnson</span>
                                            <span class="text-gray-500"> shared an article </span>
                                        </div>
                                        <span class="text-xs text-gray-500">1 week ago</span>
                                    </div>
                                    <p class="text-sm text-gray-400 mb-3">Check out my latest thoughts on sustainable
                                        tech and the
                                        future of AI in business:</p>
                                    <div class="bg-gray-900 rounded-lg border border-gray-800 p-3 flex">
                                        <img class="h-16 w-24 rounded-md mr-3 object-cover" src="/api/placeholder/96/64"
                                            alt="Article thumbnail">
                                        <div>
                                            <h5 class="font-medium text-sm">The Convergence of AI and Sustainability in
                                                Modern Business
                                            </h5>
                                            <p class="text-xs text-gray-500 mt-1">techcrunch.com</p>
                                        </div>
                                    </div>
                                    <div class="mt-3 flex space-x-2">
                                        <button class="text-xs text-blue-400 hover:text-blue-300">Like</button>
                                        <button class="text-xs text-blue-400 hover:text-blue-300">Comment</button>
                                        <button class="text-xs text-blue-400 hover:text-blue-300">Share</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-[#0A0A0A] border-t border-gray-800 mt-12 py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between">
                <div class="mb-6 md:mb-0">
                    <div class="text-xl font-bold mb-2">ElevateX</div>
                    <p class="text-gray-400 text-sm max-w-md">Connecting founders, investors, and talent to build the
                        next
                        generation of innovative companies.</p>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                    <div>
                        <h5 class="text-sm font-medium mb-3">Platform</h5>
                        <ul class="space-y-2 text-sm text-gray-400">
                            <li><a href="#" class="hover:text-white">Discover</a></li>
                            <li><a href="#" class="hover:text-white">Startups</a></li>
                            <li><a href="#" class="hover:text-white">Investors</a></li>
                            <li><a href="#" class="hover:text-white">Talent</a></li>
                        </ul>
                    </div>
                    <div>
                        <h5 class="text-sm font-medium mb-3">Resources</h5>
                        <ul class="space-y-2 text-sm text-gray-400">
                            <li><a href="#" class="hover:text-white">Blog</a></li>
                            <li><a href="#" class="hover:text-white">Guides</a></li>
                            <li><a href="#" class="hover:text-white">Events</a></li>
                            <li><a href="#" class="hover:text-white">Podcast</a></li>
                        </ul>
                    </div>
                    <div>
                        <h5 class="text-sm font-medium mb-3">Company</h5>
                        <ul class="space-y-2 text-sm text-gray-400">
                            <li><a href="#" class="hover:text-white">About</a></li>
                            <li><a href="#" class="hover:text-white">Careers</a></li>
                            <li><a href="#" class="hover:text-white">Contact</a></li>
                            <li><a href="#" class="hover:text-white">Press</a></li>
                        </ul>
                    </div>
                    <div>
                        <h5 class="text-sm font-medium mb-3">Legal</h5>
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
</body>

</html>