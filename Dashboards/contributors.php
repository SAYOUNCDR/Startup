<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collaborator Dashboard | ElevateX</title>
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
    <nav class="bg-black shadow-md border-b border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <div class="text-xl font-bold">ElevateX</div>
                </div>
                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <button class="p-1 rounded-full text-gray-400 hover:text-white focus:outline-none">
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                        </button>
                        <!-- will show red dot when there msg in notigfication bar -->
                        <!-- <span class="absolute top-0 right-0 block h-2 w-2 rounded-full bg-red-500"></span> -->
                    </div>
                    <div class="ml-3 relative">
                        <div>
                            <button class="flex items-center space-x-2 focus:outline-none">
                                <img class="h-8 w-8 rounded-full border border-gray-700" src="/api/placeholder/32/32"
                                    alt="User avatar">
                                <span class="text-sm font-medium"><?php echo $_SESSION['collaborator_first_name']; ?></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Dashboard Header -->
        <div class="mb-8 flex justify-between items-center">
            <h1 class="text-2xl font-bold">Collaborator Dashboard</h1>
            <div class="flex space-x-3">
                <!-- Green active icon shoing wether active ot not -->
                <span class="bg-green-900 px-3 py-1 rounded-full text-green-300 text-sm flex items-center">
                    <span class="h-2 w-2 rounded-full bg-green-400 mr-2"></span>
                    Available <?php echo $_SESSION['collaborator_email'] ?>
                </span>
                <button
                    class="bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded-lg text-white shadow-lg transition duration-200 cursor-pointer">Find
                    Projects
                </button>
            </div>
        </div>

        <!-- Profile Overview Card -->
        <div class="mb-8 bg-gradient-to-br from-gray-900 to-black rounded-xl shadow-lg border border-gray-800 overflow-hidden">
            <div class="p-6">
                <div class="flex flex-col md:flex-row items-start md:items-center">
                    <img class="h-24 w-24 rounded-xl border-2 border-blue-500 shadow-md" src="../Images/user-01.jpg"
                        alt="Profile picture">
                    <div class="mt-4 md:mt-0 md:ml-6 flex-1">
                        <h2 class="text-xl font-bold"><?php echo $_SESSION['collaborator_first_name']; ?></h2>
                        <p class="text-gray-400">Full-Stack Engineer | UI/UX Specialist</p>
                        <div class="flex mt-2 space-x-2">
                            <span class="bg-gray-800 text-blue-400 px-2 py-1 rounded-lg text-xs">React</span>
                            <span class="bg-gray-800 text-purple-400 px-2 py-1 rounded-lg text-xs">Node.js</span>
                            <span class="bg-gray-800 text-green-400 px-2 py-1 rounded-lg text-xs">MongoDB</span>
                            <span class="bg-gray-800 text-yellow-400 px-2 py-1 rounded-lg text-xs">UI Design</span>
                            <span class="bg-gray-800 text-pink-400 px-2 py-1 rounded-lg text-xs">+4 more</span>
                        </div>
                    </div>
                    <div class="mt-4 md:mt-0 flex flex-col items-end">
                        <div class="flex items-center">
                            <div class="flex">
                                <svg class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="h-5 w-5 text-gray-600" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                            </div>
                            <span class="ml-2 text-gray-400 text-sm">4.8/5 (23 reviews)</span>
                        </div>
                        <button class="mt-3 text-blue-400 text-sm hover:text-blue-300 focus:outline-none">Edit
                            Profile</button>
                    </div>
                </div>
                <div class="mt-6 grid grid-cols-1 sm:grid-cols-3 gap-4 text-center">
                    <div class="bg-black rounded-lg p-4 border border-gray-800 shadow-lg">
                        <p class="text-gray-400 text-sm">Projects Completed</p>
                        <p class="text-2xl font-bold mt-2">17</p>
                    </div>
                    <div class="bg-black rounded-lg p-4 border border-gray-800 shadow-lg">
                        <p class="text-gray-400 text-sm">Current Collaborations</p>
                        <p class="text-2xl font-bold mt-2">3</p>
                    </div>
                    <div class="bg-black rounded-lg p-4 border border-gray-800 shadow-lg">
                        <p class="text-gray-400 text-sm">Earned</p>
                        <p class="text-2xl font-bold mt-2">$8,750</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Dashboard Content -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Left Column -->
            <div class="lg:col-span-2">
                <!-- Active Projects -->
                <div class="mb-8 bg-gradient-to-br from-gray-900 to-black rounded-xl shadow-lg border border-gray-800 overflow-hidden">
                    <div class="border-b border-gray-800 px-6 py-4 flex justify-between items-center">
                        <h3 class="text-lg font-medium">Active Projects</h3>
                        <button class="text-sm text-blue-400 hover:text-blue-300">View All</button>
                    </div>
                    <div class="p-6">
                        <div class="space-y-6">
                            <!-- Project 1 -->
                            <div class="flex flex-col sm:flex-row">
                                <div class="sm:mr-4 mb-4 sm:mb-0">
                                    <img class="h-16 w-16 rounded-lg border border-gray-700"
                                        src="/api/placeholder/64/64" alt="Project logo">
                                </div>
                                <div class="flex-1">
                                    <div class="flex flex-wrap justify-between mb-2">
                                        <h4 class="text-lg font-medium">HealthTech AI</h4>
                                        <span class="bg-blue-900 text-blue-300 px-2 py-1 rounded text-xs">In
                                            Progress</span>
                                    </div>
                                    <p class="text-gray-400 text-sm mb-3">Frontend development for patient dashboard and
                                        analytics visualization.</p>
                                    <div class="flex flex-wrap justify-between items-center">
                                        <div class="flex space-x-2">
                                            <span class="bg-gray-800 text-xs px-2 py-1 rounded">React</span>
                                            <span class="bg-gray-800 text-xs px-2 py-1 rounded">Chart.js</span>
                                        </div>
                                        <div class="text-gray-400 text-sm">Due: Apr 25, 2025</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Project 2 -->
                            <div class="pt-4 border-t border-gray-800 flex flex-col sm:flex-row">
                                <div class="sm:mr-4 mb-4 sm:mb-0">
                                    <img class="h-16 w-16 rounded-lg border border-gray-700"
                                        src="/api/placeholder/64/64" alt="Project logo">
                                </div>
                                <div class="flex-1">
                                    <div class="flex flex-wrap justify-between mb-2">
                                        <h4 class="text-lg font-medium">EcoTrack</h4>
                                        <span class="bg-green-900 text-green-300 px-2 py-1 rounded text-xs">Just
                                            Started</span>
                                    </div>
                                    <p class="text-gray-400 text-sm mb-3">Building API integrations for environmental
                                        data collection platform.</p>
                                    <div class="flex flex-wrap justify-between items-center">
                                        <div class="flex space-x-2">
                                            <span class="bg-gray-800 text-xs px-2 py-1 rounded">Node.js</span>
                                            <span class="bg-gray-800 text-xs px-2 py-1 rounded">Express</span>
                                        </div>
                                        <div class="text-gray-400 text-sm">Due: May 10, 2025</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Project 3 -->
                            <div class="pt-4 border-t border-gray-800 flex flex-col sm:flex-row">
                                <div class="sm:mr-4 mb-4 sm:mb-0">
                                    <img class="h-16 w-16 rounded-lg border border-gray-700"
                                        src="/api/placeholder/64/64" alt="Project logo">
                                </div>
                                <div class="flex-1">
                                    <div class="flex flex-wrap justify-between mb-2">
                                        <h4 class="text-lg font-medium">FinanceFlow</h4>
                                        <span class="bg-orange-900 text-orange-300 px-2 py-1 rounded text-xs">Almost
                                            Complete</span>
                                    </div>
                                    <p class="text-gray-400 text-sm mb-3">UI design revamp for cryptocurrency trading
                                        platform.</p>
                                    <div class="flex flex-wrap justify-between items-center">
                                        <div class="flex space-x-2">
                                            <span class="bg-gray-800 text-xs px-2 py-1 rounded">Figma</span>
                                            <span class="bg-gray-800 text-xs px-2 py-1 rounded">UI/UX</span>
                                        </div>
                                        <div class="text-gray-400 text-sm">Due: Apr 18, 2025</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Activity -->
                <div class="bg-gradient-to-br from-gray-900 to-black rounded-xl shadow-lg border border-gray-800 overflow-hidden">
                    <div class="border-b border-gray-800 px-6 py-4">
                        <h3 class="text-lg font-medium">Recent Activity</h3>
                    </div>
                    <div class="p-6">
                        <div class="space-y-6">
                            <!-- Activity 1 -->
                            <div class="flex">
                                <div class="flex-shrink-0 mr-4">
                                    <div class="bg-blue-900 h-10 w-10 rounded-full flex items-center justify-center">
                                        <svg class="h-5 w-5 text-blue-300" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                        </svg>
                                    </div>
                                </div>
                                <div>
                                    <p class="text-sm">You joined <span class="font-medium">HealthTech AI</span> as a
                                        frontend developer</p>
                                    <p class="text-xs text-gray-400 mt-1">2 days ago</p>
                                </div>
                            </div>

                            <!-- Activity 2 -->
                            <div class="flex">
                                <div class="flex-shrink-0 mr-4">
                                    <div class="bg-green-900 h-10 w-10 rounded-full flex items-center justify-center">
                                        <svg class="h-5 w-5 text-green-300" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                </div>
                                <div>
                                    <p class="text-sm">Completed milestone: <span class="font-medium">User
                                            Authentication Module</span> for RetailTech project</p>
                                    <p class="text-xs text-gray-400 mt-1">3 days ago</p>
                                </div>
                            </div>

                            <!-- Activity 3 -->
                            <div class="flex">
                                <div class="flex-shrink-0 mr-4">
                                    <div class="bg-purple-900 h-10 w-10 rounded-full flex items-center justify-center">
                                        <svg class="h-5 w-5 text-purple-300" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                                        </svg>
                                    </div>
                                </div>
                                <div>
                                    <p class="text-sm">Received payment of <span class="font-medium">$2,500</span> for
                                        EduTech Portal project</p>
                                    <p class="text-xs text-gray-400 mt-1">1 week ago</p>
                                </div>
                            </div>

                            <!-- Activity 4 -->
                            <div class="flex">
                                <div class="flex-shrink-0 mr-4">
                                    <div class="bg-yellow-900 h-10 w-10 rounded-full flex items-center justify-center">
                                        <svg class="h-5 w-5 text-yellow-300" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
                                        </svg>
                                    </div>
                                </div>
                                <div>
                                    <p class="text-sm">Received a 5-star review from <span class="font-medium">FinTech
                                            Solutions</span></p>
                                    <p class="text-xs text-gray-400 mt-1">1 week ago</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div>
                <!-- Recommended Projects -->
                <div class="mb-8 bg-gradient-to-br from-gray-900 to-black rounded-xl shadow-lg border border-gray-800 overflow-hidden">
                    <div class="border-b border-gray-800 px-6 py-4">
                        <h3 class="text-lg font-medium">Recommended Projects</h3>
                    </div>
                    <div class="p-6">
                        <div class="space-y-5">
                            <!-- Project 1 -->
                            <div class="pb-4 border-b border-gray-800">
                                <div class="flex justify-between items-start mb-2">
                                    <h4 class="font-medium">Mobile App Developer</h4>
                                    <span
                                        class="bg-green-900 text-green-300 px-2 py-1 rounded-full text-xs">$50-70/hr</span>
                                </div>
                                <p class="text-gray-400 text-sm mb-2">TravelBuddy needs a React Native developer for
                                    their travel planning app.</p>
                                <div class="flex justify-between items-center">
                                    <div class="flex space-x-1 text-xs text-gray-500">
                                        <span>Posted 2 days ago</span>
                                        <span>•</span>
                                        <span>4 Applicants</span>
                                    </div>
                                    <button class="text-blue-400 hover:text-blue-300 text-sm font-medium">Apply</button>
                                </div>
                            </div>

                            <!-- Project 2 -->
                            <div class="pb-4 border-b border-gray-800">
                                <div class="flex justify-between items-start mb-2">
                                    <h4 class="font-medium">UI/UX Designer</h4>
                                    <span
                                        class="bg-green-900 text-green-300 px-2 py-1 rounded-full text-xs">$45-60/hr</span>
                                </div>
                                <p class="text-gray-400 text-sm mb-2">HealthConnect seeking designer for medical
                                    dashboard interface.</p>
                                <div class="flex justify-between items-center">
                                    <div class="flex space-x-1 text-xs text-gray-500">
                                        <span>Posted 3 days ago</span>
                                        <span>•</span>
                                        <span>6 Applicants</span>
                                    </div>
                                    <button class="text-blue-400 hover:text-blue-300 text-sm font-medium">Apply</button>
                                </div>
                            </div>

                            <!-- Project 3 -->
                            <div>
                                <div class="flex justify-between items-start mb-2">
                                    <h4 class="font-medium">Backend Developer</h4>
                                    <span
                                        class="bg-green-900 text-green-300 px-2 py-1 rounded-full text-xs">$60-80/hr</span>
                                </div>
                                <p class="text-gray-400 text-sm mb-2">FinanceFlow needs a Node.js expert for payment
                                    integration system.</p>
                                <div class="flex justify-between items-center">
                                    <div class="flex space-x-1 text-xs text-gray-500">
                                        <span>Posted 1 day ago</span>
                                        <span>•</span>
                                        <span>3 Applicants</span>
                                    </div>
                                    <button class="text-blue-400 hover:text-blue-300 text-sm font-medium">Apply</button>
                                </div>
                            </div>
                        </div>
                        <button
                            class="w-full mt-6 bg-black border border-gray-700 text-blue-400 hover:text-blue-300 py-2 rounded-lg">View
                            More Projects</button>
                    </div>
                </div>

                <!-- Upcoming Deadlines -->
                <div class="mb-8 bg-gradient-to-br from-gray-900 to-black rounded-xl shadow-lg border border-gray-800 overflow-hidden">
                    <div class="border-b border-gray-800 px-6 py-4">
                        <h3 class="text-lg font-medium">Upcoming Deadlines</h3>
                    </div>
                    <div class="p-6">
                        <div class="space-y-4">
                            <div class="flex items-center">
                                <div
                                    class="h-10 w-10 flex-shrink-0 bg-red-900 rounded-full flex items-center justify-center mr-3">
                                    <span class="text-red-300 font-medium">18</span>
                                </div>
                                <div class="flex-1">
                                    <p class="font-medium">FinanceFlow UI Design</p>
                                    <p class="text-sm text-gray-400">Due in 6 days</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <div
                                    class="h-10 w-10 flex-shrink-0 bg-yellow-900 rounded-full flex items-center justify-center mr-3">
                                    <span class="text-yellow-300 font-medium">25</span>
                                </div>
                                <div class="flex-1">
                                    <p class="font-medium">HealthTech AI Dashboard</p>
                                    <p class="text-sm text-gray-400">Due in 13 days</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <div
                                    class="h-10 w-10 flex-shrink-0 bg-green-900 rounded-full flex items-center justify-center mr-3">
                                    <span class="text-green-300 font-medium">10</span>
                                </div>
                                <div class="flex-1">
                                    <p class="font-medium">EcoTrack API Integration</p>
                                    <p class="text-sm text-gray-400">Due in 28 days</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Messages -->
                <div class="bg-gradient-to-br from-gray-900 to-black rounded-xl shadow-lg border border-gray-800 overflow-hidden">
                    <div class="border-b border-gray-800 px-6 py-4">
                        <h3 class="text-lg font-medium">Messages</h3>
                    </div>
                    <div class="p-6">
                        <div class="space-y-4">
                            <!-- Message 1 -->
                            <div class="flex items-start">
                                <img class="h-10 w-10 rounded-full mr-3 border border-gray-700" src="/api/placeholder/40/40"
                                    alt="Sender avatar">
                                <div class="flex-1 bg-black rounded-lg p-3 border border-gray-800">
                                    <div class="flex justify-between items-center mb-1">
                                        <span class="font-medium">Sarah Miller</span>
                                        <span class="text-xs text-gray-400">10:35 AM</span>
                                    </div>
                                    <p class="text-sm text-gray-300">Hi John, can we discuss the dashboard wireframes for HealthTech AI
                                        today?</p>
                                </div>
                            </div>

                            <!-- Message 2 -->
                            <div class="flex items-start">
                                <img class="h-10 w-10 rounded-full mr-3 border border-gray-700" src="/api/placeholder/40/40"
                                    alt="Sender avatar">
                                <div class="flex-1 bg-black rounded-lg p-3 border border-gray-800">
                                    <div class="flex justify-between items-center mb-1">
                                        <span class="font-medium">Alex Chen</span>
                                        <span class="text-xs text-gray-400">Yesterday</span>
                                    </div>
                                    <p class="text-sm text-gray-300">Thanks for your help with the API integration. The team was really
                                        impressed!</p>
                                </div>
                            </div>
                        </div>
                        <button
                            class="w-full mt-6 bg-black border border-gray-700 text-blue-400 hover:text-blue-300 py-2 rounded-lg">View
                            All Messages</button>
                    </div>
                </div>

                <!-- Network -->
                <div class="mt-8 bg-gradient-to-br from-gray-900 to-black rounded-xl shadow-lg border border-gray-800 overflow-hidden">
                    <div class="border-b border-gray-800 px-6 py-4">
                        <h3 class="text-lg font-medium">Network</h3>
                    </div>
                    <div class="p-6">
                        <div class="flex flex-wrap gap-3">
                            <div class="flex flex-col items-center">
                                <img class="h-12 w-12 rounded-full border border-gray-700" src="/api/placeholder/48/48"
                                    alt="Connection avatar">
                                <span class="text-xs mt-2">Sarah M.</span>
                            </div>
                            <div class="flex flex-col items-center">
                                <img class="h-12 w-12 rounded-full border border-gray-700" src="/api/placeholder/48/48"
                                    alt="Connection avatar">
                                <span class="text-xs mt-2">Alex C.</span>
                            </div>
                            <div class="flex flex-col items-center">
                                <img class="h-12 w-12 rounded-full border border-gray-700" src="/api/placeholder/48/48"
                                    alt="Connection avatar">
                                <span class="text-xs mt-2">James L.</span>
                            </div>
                            <div class="flex flex-col items-center">
                                <img class="h-12 w-12 rounded-full border border-gray-700" src="/api/placeholder/48/48"
                                    alt="Connection avatar">
                                <span class="text-xs mt-2">Maya R.</span>
                            </div>
                            <div class="flex flex-col items-center">
                                <img class="h-12 w-12 rounded-full border border-gray-700" src="/api/placeholder/48/48"
                                    alt="Connection avatar">
                                <span class="text-xs mt-2">Daniel K.</span>
                            </div>
                            <div class="flex flex-col items-center">
                                <div
                                    class="h-12 w-12 rounded-full border border-gray-700 bg-gray-800 flex items-center justify-center text-gray-400">
                                    +12</div>
                                <span class="text-xs mt-2">More</span>
                            </div>
                        </div>
                        <button
                            class="w-full mt-6 bg-black border border-gray-700 text-blue-400 hover:text-blue-300 py-2 rounded-lg">Grow
                            Your Network</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-[#0A0A0A] border-t border-gray-800 py-6 mt-12">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-4 md:mb-0">
                    <p class="text-gray-400 text-sm">&copy; 2025 ElevateX. All rights reserved.</p>
                </div>
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-400 hover:text-white">
                        <span class="sr-only">Terms</span>
                        <span class="text-sm">Terms of Service</span>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white">
                        <span class="sr-only">Privacy</span>
                        <span class="text-sm">Privacy Policy</span>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white">
                        <span class="sr-only">Support</span>
                        <span class="text-sm">Support</span>
                    </a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>