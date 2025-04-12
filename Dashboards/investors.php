<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Investor Profile | StartupConnect</title>
    <link rel="stylesheet" href="../output.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background-color: #0A0A0A;
            color: #f3f4f6;
        }

        .card-gradient {
            background: linear-gradient(145deg, #111111, #0A0A0A);
        }

        .hover-scale:hover {
            transform: scale(1.03);
            transition: all 0.3s ease;
        }
    </style>
</head>

<body class="bg-black text-gray-100 min-h-screen">
    

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        <!-- Welcome Banner -->
        <div class="bg-gradient-to-r from-indigo-900 to-purple-900 rounded-xl p-8 mb-8">
            <h2 class="text-3xl font-bold mb-2">Welcome to StartupConnect, John!</h2>
            <p class="text-gray-300 mb-4">Your investor profile is now set up. Complete your profile to start connecting
                with promising startups.</p>
            <div class="flex flex-wrap gap-4">
                <div class="bg-black bg-opacity-30 px-4 py-2 rounded-lg">
                    <span class="block text-sm text-gray-400">Profile Completion</span>
                    <div class="flex items-center mt-1">
                        <div class="w-48 h-2 bg-gray-700 rounded-full">
                            <div class="w-16 h-2 bg-indigo-500 rounded-full"></div>
                        </div>
                        <span class="ml-2 text-indigo-400">30%</span>
                    </div>
                </div>
                <div class="bg-black bg-opacity-30 px-4 py-2 rounded-lg">
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
                <div class="bg-[#0A0A0A] border border-gray-800 rounded-xl p-6 shadow-lg card-gradient">
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
                <div class="bg-[#0A0A0A] border border-gray-800 rounded-xl p-6 shadow-lg mt-6 card-gradient">
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
                <div class="bg-[#0A0A0A] border border-gray-800 rounded-xl p-6 shadow-lg mb-6 card-gradient">
                    <h3 class="text-xl font-semibold mb-4">Complete Your Profile</h3>
                    <div class="space-y-4">
                        <div class="flex items-center justify-between p-3 bg-gray-900 rounded-lg">
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

                        <div class="flex items-center justify-between p-3 bg-gray-900 rounded-lg">
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

                        <div class="flex items-center justify-between p-3 bg-gray-900 rounded-lg">
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
                <div class="bg-[#0A0A0A] border border-gray-800 rounded-xl p-6 shadow-lg card-gradient">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-xl font-semibold">Recommended For You</h3>
                        <a href="#" class="text-indigo-400 text-sm hover:underline">View All</a>
                    </div>

                    <div class="space-y-4">
                        <!-- Startup 1 -->
                        <div class="border border-gray-800 rounded-lg p-4 hover-scale transition duration-300">
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
                        <div class="border border-gray-800 rounded-lg p-4 hover-scale transition duration-300">
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
                    <div class="bg-[#0A0A0A] border border-gray-800 rounded-xl p-6 shadow-lg card-gradient">
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
                    <div class="bg-[#0A0A0A] border border-gray-800 rounded-xl p-6 shadow-lg card-gradient">
                        <h3 class="text-xl font-semibold mb-4">Upcoming Events</h3>
                        <div class="space-y-4">
                            <div class="border border-gray-800 rounded-lg p-3">
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

                            <div class="border border-gray-800 rounded-lg p-3">
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
                        <a href="#" class="block text-center text-indigo-400 text-sm mt-4 hover:underline">View
                            Calendar</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-[#0A0A0A] border-t border-gray-800 mt-12 py-8">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-6 md:mb-0">
                    <h2 class="text-xl font-bold text-indigo-500">StartupConnect</h2>
                    <p class="text-gray-500 text-sm mt-1">Connecting investors and startups</p>
                </div>
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-400 hover:text-white">Help Center</a>
                    <a href="#" class="text-gray-400 hover:text-white">Terms</a>
                    <a href="#" class="text-gray-400 hover:text-white">Privacy</a>
                    <a href="#" class="text-gray-400 hover:text-white">Contact</a>
                </div>
            </div>
            <div class="mt-8 border-t border-gray-800 pt-6 text-center text-gray-500 text-sm">
                &copy; 2025 StartupConnect. All rights reserved.
            </div>
        </div>
    </footer>
</body>

</html>