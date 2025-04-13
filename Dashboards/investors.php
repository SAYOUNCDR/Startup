<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Investor Profile | StartupConnect</title>
    <link rel="stylesheet" href="../output.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .hover-scale:hover {
            transform: scale(1.03);
            transition: all 0.3s ease;
        }
    </style>
</head>

<body class="bg-black text-gray-100 min-h-screen">
    <!-- Navbar -->
    <nav class="bg-black shadow-md border-b border-gray-800">
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
                                <span class="text-sm font-medium">
                                    <?php echo $_SESSION['investor_name'] ?>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    
    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        <!-- Welcome Banner -->
        <div class="bg-gradient-to-br from-gray-900 to-black rounded-xl p-8 mb-8 border border-gray-800 shadow-lg">
            <h2 class="text-3xl font-bold mb-2">Welcome to StartupConnect, John!</h2>
            <p class="text-gray-300 mb-4">Your investor profile is now set up. Complete your profile to start connecting
                with promising startups.</p>
            <div class="flex flex-wrap gap-4">
                <div class="bg-[#0A0A0A] bg-opacity-30 px-4 py-2 rounded-lg border border-gray-700">
                    <span class="block text-sm text-gray-400">Profile Completion</span>
                    <div class="flex items-center mt-1">
                        <div class="w-48 h-2 bg-gray-700 rounded-full">
                            <div class="w-16 h-2 bg-indigo-500 rounded-full"></div>
                        </div>
                        <span class="ml-2 text-indigo-400">30%</span>
                    </div>
                </div>
                <div class="bg-[#0A0A0A] bg-opacity-30 px-4 py-2 rounded-lg border border-gray-700">
                    <span class="block text-sm text-gray-400">Verification Status</span>
                    <div class="flex items-center mt-1">
                        <span class="px-2 py-1 text-xs bg-yellow-600 text-white rounded">Pending</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Profile Overview -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-8">
            <!-- Left Column - Personal Info -->
            <div class="lg:col-span-1">
                <div class="bg-gradient-to-br from-gray-900 to-black border border-gray-800 rounded-xl p-6 shadow-lg">
                    <div class="flex flex-col items-center mb-6">
                        <img src="/api/placeholder/120/120" alt="Profile"
                            class="w-24 h-24 rounded-full border-2 border-indigo-500 mb-4">
                        <h3 class="text-2xl font-bold">John Anderson</h3>
                        <p class="text-indigo-400">Angel Investor</p>
                        <div class="flex space-x-2 mt-4">
                            <button
                                class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg text-sm">Edit
                                Profile</button>
                            <button
                                class="bg-gray-800 hover:bg-gray-700 text-white px-4 py-2 rounded-lg text-sm">Share</button>
                        </div>
                    </div>
                    <div class="border-t border-gray-800 pt-4">
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-gray-400">Location</span>
                            <span>San Francisco, CA</span>
                        </div>
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-gray-400">Investor Since</span>
                            <span>2018</span>
                        </div>
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-gray-400">Portfolio Size</span>
                            <span>12 Companies</span>
                        </div>
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-gray-400">Investment Range</span>
                            <span>$50K - $250K</span>
                        </div>
                        <div class="border-t border-gray-800 pt-4 mt-4">
                            <h4 class="text-lg font-semibold mb-3">Investment Focus</h4>
                            <div class="flex flex-wrap gap-2">
                                <span
                                    class="bg-indigo-900 bg-opacity-50 text-indigo-300 px-3 py-1 rounded-full text-xs">SaaS</span>
                                <span
                                    class="bg-indigo-900 bg-opacity-50 text-indigo-300 px-3 py-1 rounded-full text-xs">FinTech</span>
                                <span
                                    class="bg-indigo-900 bg-opacity-50 text-indigo-300 px-3 py-1 rounded-full text-xs">AI</span>
                                <span
                                    class="bg-indigo-900 bg-opacity-50 text-indigo-300 px-3 py-1 rounded-full text-xs">Enterprise</span>
                                <button class="bg-gray-800 text-gray-400 px-3 py-1 rounded-full text-xs">+ Add</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Social Connections -->
                <div class="bg-gradient-to-br from-gray-900 to-black border border-gray-800 rounded-xl p-6 shadow-lg mt-6">
                    <h3 class="text-xl font-semibold mb-4">Connect & Share</h3>
                    <div class="grid grid-cols-3 gap-2">
                        <button class="bg-blue-900 hover:bg-blue-800 p-3 rounded-lg text-center">
                            <i class="fab fa-linkedin text-xl"></i>
                        </button>
                        <button class="bg-gray-800 hover:bg-gray-700 p-3 rounded-lg text-center">
                            <i class="fab fa-twitter text-xl"></i>
                        </button>
                        <button class="bg-gray-800 hover:bg-gray-700 p-3 rounded-lg text-center">
                            <i class="fas fa-globe text-xl"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Middle & Right Columns -->
            <div class="lg:col-span-2">
                <!-- Profile Completion Tasks -->
                <div class="bg-gradient-to-br from-gray-900 to-black border border-gray-800 rounded-xl p-6 shadow-lg mb-6">
                    <h3 class="text-xl font-semibold mb-4">Complete Your Profile</h3>
                    <div class="space-y-4">
                        <div class="flex items-center justify-between p-3 bg-[#0A0A0A] bg-opacity-40 rounded-lg border border-gray-800">
                            <div class="flex items-center">
                                <div class="bg-indigo-600 p-2 rounded-lg mr-4">
                                    <i class="fas fa-id-card"></i>
                                </div>
                                <div>
                                    <h4 class="font-medium">Verify Identity</h4>
                                    <p class="text-sm text-gray-400">Submit ID documents to get verified</p>
                                </div>
                            </div>
                            <button
                                class="px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-lg text-sm">Complete</button>
                        </div>

                        <div class="flex items-center justify-between p-3 bg-[#0A0A0A] bg-opacity-40 rounded-lg border border-gray-800">
                            <div class="flex items-center">
                                <div class="bg-indigo-600 p-2 rounded-lg mr-4">
                                    <i class="fas fa-briefcase"></i>
                                </div>
                                <div>
                                    <h4 class="font-medium">Add Investment History</h4>
                                    <p class="text-sm text-gray-400">Share your past investments and exits</p>
                                </div>
                            </div>
                            <button
                                class="px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-lg text-sm">Add
                                Now</button>
                        </div>

                        <div class="flex items-center justify-between p-3 bg-[#0A0A0A] bg-opacity-40 rounded-lg border border-gray-800">
                            <div class="flex items-center">
                                <div class="bg-indigo-600 p-2 rounded-lg mr-4">
                                    <i class="fas fa-sliders-h"></i>
                                </div>
                                <div>
                                    <h4 class="font-medium">Set Investment Preferences</h4>
                                    <p class="text-sm text-gray-400">Define your investment criteria</p>
                                </div>
                            </div>
                            <button
                                class="px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-lg text-sm">Configure</button>
                        </div>
                    </div>
                </div>

                <!-- Recommended Startups -->
                <div class="bg-gradient-to-br from-gray-900 to-black border border-gray-800 rounded-xl p-6 shadow-lg">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-xl font-semibold">Recommended For You</h3>
                        <a href="#" class="text-indigo-400 text-sm hover:underline">View All</a>
                    </div>

                    <div class="space-y-4">
                        <!-- Startup 1 -->
                        <div class="border border-gray-800 rounded-lg p-4 hover-scale transition duration-300 bg-[#0A0A0A] bg-opacity-30">
                            <div class="flex items-start">
                                <img src="/api/placeholder/64/64" alt="Startup Logo" class="w-12 h-12 rounded-lg mr-4">
                                <div class="flex-1">
                                    <div class="flex justify-between">
                                        <h4 class="font-bold">NeuralFinance</h4>
                                        <span
                                            class="bg-green-900 bg-opacity-40 text-green-400 px-2 py-1 rounded text-xs">Pre-seed</span>
                                    </div>
                                    <p class="text-sm text-gray-400 mt-1">AI-powered financial analysis for retail
                                        investors</p>
                                    <div class="flex items-center mt-3">
                                        <div class="flex items-center mr-4">
                                            <i class="fas fa-map-marker-alt text-gray-500 mr-1"></i>
                                            <span class="text-xs text-gray-400">Remote</span>
                                        </div>
                                        <div class="flex items-center mr-4">
                                            <i class="fas fa-users text-gray-500 mr-1"></i>
                                            <span class="text-xs text-gray-400">5 employees</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-chart-line text-gray-500 mr-1"></i>
                                            <span class="text-xs text-gray-400">$100K ARR</span>
                                        </div>
                                    </div>
                                    <div class="flex mt-4">
                                        <button
                                            class="bg-indigo-600 hover:bg-indigo-700 text-white px-3 py-1 rounded text-sm mr-2">Connect</button>
                                        <button
                                            class="bg-gray-800 hover:bg-gray-700 text-white px-3 py-1 rounded text-sm">View
                                            Details</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Startup 2 -->
                        <div class="border border-gray-800 rounded-lg p-4 hover-scale transition duration-300 bg-[#0A0A0A] bg-opacity-30">
                            <div class="flex items-start">
                                <img src="/api/placeholder/64/64" alt="Startup Logo" class="w-12 h-12 rounded-lg mr-4">
                                <div class="flex-1">
                                    <div class="flex justify-between">
                                        <h4 class="font-bold">Ecoverse</h4>
                                        <span
                                            class="bg-indigo-900 bg-opacity-40 text-indigo-400 px-2 py-1 rounded text-xs">Seed</span>
                                    </div>
                                    <p class="text-sm text-gray-400 mt-1">Sustainable supply chain management platform
                                    </p>
                                    <div class="flex items-center mt-3">
                                        <div class="flex items-center mr-4">
                                            <i class="fas fa-map-marker-alt text-gray-500 mr-1"></i>
                                            <span class="text-xs text-gray-400">Berlin</span>
                                        </div>
                                        <div class="flex items-center mr-4">
                                            <i class="fas fa-users text-gray-500 mr-1"></i>
                                            <span class="text-xs text-gray-400">12 employees</span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-chart-line text-gray-500 mr-1"></i>
                                            <span class="text-xs text-gray-400">$450K ARR</span>
                                        </div>
                                    </div>
                                    <div class="flex mt-4">
                                        <button
                                            class="bg-indigo-600 hover:bg-indigo-700 text-white px-3 py-1 rounded text-sm mr-2">Connect</button>
                                        <button
                                            class="bg-gray-800 hover:bg-gray-700 text-white px-3 py-1 rounded text-sm">View
                                            Details</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Activity & Calendar -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                    <!-- Recent Activity -->
                    <div class="bg-gradient-to-br from-gray-900 to-black border border-gray-800 rounded-xl p-6 shadow-lg">
                        <h3 class="text-xl font-semibold mb-4">Recent Activity</h3>
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <div class="bg-gray-800 p-2 rounded-full mr-3">
                                    <i class="fas fa-user-plus text-indigo-400"></i>
                                </div>
                                <div>
                                    <p class="text-sm">You connected with <span class="text-indigo-400">TechFund
                                            VC</span></p>
                                    <span class="text-xs text-gray-500">2 hours ago</span>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="bg-gray-800 p-2 rounded-full mr-3">
                                    <i class="fas fa-eye text-indigo-400"></i>
                                </div>
                                <div>
                                    <p class="text-sm">You viewed <span class="text-indigo-400">CloudServe</span>'s
                                        profile</p>
                                    <span class="text-xs text-gray-500">Yesterday</span>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="bg-gray-800 p-2 rounded-full mr-3">
                                    <i class="fas fa-comment text-indigo-400"></i>
                                </div>
                                <div>
                                    <p class="text-sm">New message from <span class="text-indigo-400">Sarah Chen</span>
                                    </p>
                                    <span class="text-xs text-gray-500">2 days ago</span>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="block text-center text-indigo-400 text-sm mt-4 hover:underline">View All
                            Activity</a>
                    </div>

                    <!-- Upcoming Events -->
                    <div class="bg-gradient-to-br from-gray-900 to-black border border-gray-800 rounded-xl p-6 shadow-lg">
                        <h3 class="text-xl font-semibold mb-4">Upcoming Events</h3>
                        <div class="space-y-4">
                            <div class="border border-gray-800 rounded-lg p-3 bg-[#0A0A0A] bg-opacity-30">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <h4 class="font-medium">Pitch Session: AI Startups</h4>
                                        <p class="text-xs text-gray-400 mt-1">Virtual Event</p>
                                    </div>
                                    <span
                                        class="bg-indigo-900 bg-opacity-40 text-indigo-400 px-2 py-1 rounded text-xs">Apr
                                        15</span>
                                </div>
                                <button
                                    class="mt-2 w-full bg-gray-800 hover:bg-gray-700 text-white px-3 py-1 rounded text-sm">RSVP</button>
                            </div>

                            <div class="border border-gray-800 rounded-lg p-3 bg-[#0A0A0A] bg-opacity-30">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <h4 class="font-medium">1:1 with Quantum Tech</h4>
                                        <p class="text-xs text-gray-400 mt-1">Video Call</p>
                                    </div>
                                    <span
                                        class="bg-indigo-900 bg-opacity-40 text-indigo-400 px-2 py-1 rounded text-xs">Apr
                                        18</span>
                                </div>
                                <button
                                    class="mt-2 w-full bg-gray-800 hover:bg-gray-700 text-white px-3 py-1 rounded text-sm">Join
                                    Call</button>
                            </div>
                        </div>
                        <a href="#" class="block text-center text-indigo-400 text-sm mt-4 hover:underline">
                            View Calendar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
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