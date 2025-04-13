<?php
include_once '../../config/db.php';
$sql = "SELECT * FROM founders";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StartUp Directory</title>
    <link rel="stylesheet" href="../../output.css">
</head>

<body class="bg-black">
    <!-- Body starts from here -->
    <div class="bg-black min-h-screen flex flex-col items-center justify-center text-white p-4">
        <div class="text-center max-w-4xl">
            <h1 class="text-5xl md:text-6xl font-bold mb-6">
                Fueling
                <span id="changing-word"
                    class="typing  text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-600">Startups</span>
                <em class="italic">Innovation</em> <br />and Accelerating Growth!
            </h1>

            <p class="text-gray-300 text-lg mb-8">
                Spark, scale, succeed: Join the startup ecosystem that turns impossible into inevitable!"
            </p>
            <div class="max-w-md mx-auto mb-8">
                <input type="text" placeholder="Search Startups by name"
                    class="w-full px-4 py-3 bg-[#0b0b0d] border border-gray-600 rounded-lg text-white" />
            </div>

            <div class="flex justify-center space-x-6">
                <div class="flex items-center bg-[#0b0b0d] px-4 py-2 rounded-md border border-gray-600">
                    <span class="text-white font-semibold mr-2">S</span>
                    <span class="text-gray-400">Total Startups</span>
                    <span class="bg-[#0b0b0d] text-gray-300 ml-2 px-2 rounded-full text-sm ">150+</span>
                </div>

                <div class="flex items-center bg-[#0b0b0d] px-4 py-2 rounded-md border border-gray-600">
                    <span class="text-gray-400 mr-2">Featured on</span>
                    <span class="font-bold text-white">Dev X</span>
                </div>
            </div>
        </div>
    </div>

    <!-- listings -->

    <div class="container mx-auto px-4 py-8 mb-70">
        <div class="flex flex-col md:flex-row gap-8">
            <!-- Filter -->
            <div class="md:w-1/4">
                <div class="bg-black rounded-lg sticky top-8">
                    <div class="flex justify-between items-center p-4">
                        <h2 class="text-xl font-bold text-white">Filter Templates</h2>
                    </div>

                    <!-- Search Bar -->
                    <div class="relative px-4 mb-4">
                        <div class="absolute inset-y-0 left-0 pl-6 flex items-center pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                        <input type="text"
                            class="bg-[#0A0A0A] w-full pl-10 pr-4 py-3 rounded-lg border border-gray-800 focus:outline-none focus:ring-1 focus:ring-gray-700 focus:border-gray-700 text-gray-400"
                            placeholder="Search...">
                    </div>

                    <!-- Filter Categories -->
                    <div class="border-t border-gray-800">
                        <!-- Industry -->
                        <div class="filter-category">
                            <button
                                class="w-full flex items-center justify-between text-left py-4 px-4 cursor-pointer focus:outline-none text-white border-b border-gray-800 transition-colors">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-3 text-white" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7" />
                                    </svg>
                                    <span class="font-medium">Industry</span>
                                </div>
                            </button>
                            <div class="filter-content hidden px-4 py-3 bg-black">
                                <div class="space-y-2">
                                    <label class="flex items-center p-2 rounded bg-[#0A0A0A] cursor-pointer"><input
                                            type="checkbox" class="w-5 h-5 accent-black border-gray-600"><span
                                            class="ml-2 text-gray-300">Fintech</span></label>
                                    <label class="flex items-center p-2 rounded bg-[#0A0A0A] cursor-pointer"><input
                                            type="checkbox" class="w-5 h-5 accent-black border-gray-600"><span
                                            class="ml-2 text-gray-300">Healthtech</span></label>
                                    <label class="flex items-center p-2 rounded bg-[#0A0A0A] cursor-pointer"><input
                                            type="checkbox" class="w-5 h-5 accent-black border-gray-600"><span
                                            class="ml-2 text-gray-300">Edtech</span></label>
                                    <label class="flex items-center p-2 rounded bg-[#0A0A0A] cursor-pointer"><input
                                            type="checkbox" class="w-5 h-5 accent-black border-gray-600"><span
                                            class="ml-2 text-gray-300">SaaS</span></label>
                                    <label class="flex items-center p-2 rounded bg-[#0A0A0A] cursor-pointer"><input
                                            type="checkbox" class="w-5 h-5 accent-black border-gray-600"><span
                                            class="ml-2 text-gray-300">AI/ML</span></label>
                                </div>
                            </div>
                        </div>

                        <!-- Region -->
                        <div class="filter-category">
                            <button
                                class="w-full flex items-center justify-between text-left py-4 px-4 cursor-pointer focus:outline-none text-white border-b border-gray-800 transition-colors">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-3 text-white" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7" />
                                    </svg>
                                    <span class="font-medium">Region</span>
                                </div>
                            </button>
                            <div class="filter-content hidden px-4 py-3 bg-black">
                                <div class="space-y-2">
                                    <label class="flex items-center p-2 rounded bg-[#0A0A0A] cursor-pointer"><input
                                            type="checkbox" class="w-5 h-5 accent-black border-gray-600"><span
                                            class="ml-2 text-gray-300">North
                                            America</span></label>
                                    <label class="flex items-center p-2 rounded bg-[#0A0A0A] cursor-pointer"><input
                                            type="checkbox" class="w-5 h-5 accent-black border-gray-600"><span
                                            class="ml-2 text-gray-300">Europe</span></label>
                                    <label class="flex items-center p-2 rounded bg-[#0A0A0A] cursor-pointer"><input
                                            type="checkbox" class="w-5 h-5 accent-black border-gray-600"><span
                                            class="ml-2 text-gray-300">Asia</span></label>
                                    <label class="flex items-center p-2 rounded bg-[#0A0A0A] cursor-pointer"><input
                                            type="checkbox" class="w-5 h-5 accent-black border-gray-600"><span
                                            class="ml-2 text-gray-300">South
                                            America</span></label>
                                    <label class="flex items-center p-2 rounded bg-[#0A0A0A] cursor-pointer"><input
                                            type="checkbox" class="w-5 h-5 accent-black border-gray-600"><span
                                            class="ml-2 text-gray-300">Africa</span></label>
                                </div>
                            </div>
                        </div>

                        <!-- Company Size -->
                        <div class="filter-category">
                            <button
                                class="w-full flex items-center justify-between text-left py-4 px-4 cursor-pointer focus:outline-none text-white border-b border-gray-800 transition-colors">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-3 text-white" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7" />
                                    </svg>
                                    <span class="font-medium">Company Size</span>
                                </div>
                            </button>
                            <div class="filter-content hidden px-4 py-3 bg-black">
                                <div class="space-y-2">
                                    <label class="flex items-center p-2 rounded bg-[#0A0A0A] cursor-pointer"><input
                                            type="checkbox" class="w-5 h-5 accent-black border-gray-600"><span
                                            class="ml-2 text-gray-300">1-10
                                            employees</span></label>
                                    <label class="flex items-center p-2 rounded bg-[#0A0A0A] cursor-pointer"><input
                                            type="checkbox" class="w-5 h-5 accent-black border-gray-600"><span
                                            class="ml-2 text-gray-300">11-50
                                            employees</span></label>
                                    <label class="flex items-center p-2 rounded bg-[#0A0A0A] cursor-pointer"><input
                                            type="checkbox" class="w-5 h-5 accent-black border-gray-600"><span
                                            class="ml-2 text-gray-300">51-200
                                            employees</span></label>
                                    <label class="flex items-center p-2 rounded bg-[#0A0A0A] cursor-pointer"><input
                                            type="checkbox" class="w-5 h-5 accent-black border-gray-600"><span
                                            class="ml-2 text-gray-300">201-500
                                            employees</span></label>
                                    <label class="flex items-center p-2 rounded bg-[#0A0A0A] cursor-pointer"><input
                                            type="checkbox" class="w-5 h-5 accent-black border-gray-600"><span
                                            class="ml-2 text-gray-300">500+
                                            employees</span></label>
                                </div>
                            </div>
                        </div>

                        <!-- Tech Stack -->
                        <div class="filter-category">
                            <button
                                class="w-full flex items-center justify-between text-left py-4 px-4 cursor-pointer focus:outline-none text-white border-b border-gray-800 transition-colors">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-3 text-white" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7" />
                                    </svg>
                                    <span class="font-medium">Tech Stack</span>
                                </div>
                            </button>
                            <div class="filter-content hidden px-4 py-3 bg-black">
                                <div class="space-y-2">
                                    <label class="flex items-center p-2 rounded bg-[#0A0A0A] cursor-pointer"><input
                                            type="checkbox" class="w-5 h-5 accent-black border-gray-600"><span
                                            class="ml-2 text-gray-300">React</span></label>
                                    <label class="flex items-center p-2 rounded bg-[#0A0A0A] cursor-pointer"><input
                                            type="checkbox" class="w-5 h-5 accent-black border-gray-600"><span
                                            class="ml-2 text-gray-300">Node.js</span></label>
                                    <label class="flex items-center p-2 rounded bg-[#0A0A0A] cursor-pointer"><input
                                            type="checkbox" class="w-5 h-5 accent-black border-gray-600"><span
                                            class="ml-2 text-gray-300">Django</span></label>
                                    <label class="flex items-center p-2 rounded bg-[#0A0A0A] cursor-pointer"><input
                                            type="checkbox" class="w-5 h-5 accent-black border-gray-600"><span
                                            class="ml-2 text-gray-300">Laravel</span></label>
                                    <label class="flex items-center p-2 rounded bg-[#0A0A0A] cursor-pointer"><input
                                            type="checkbox" class="w-5 h-5 accent-black border-gray-600"><span
                                            class="ml-2 text-gray-300">Spring
                                            Boot</span></label>
                                    <label class="flex items-center p-2 rounded bg-[#0A0A0A] cursor-pointer"><input
                                            type="checkbox" class="w-5 h-5 accent-black border-gray-600"><span
                                            class="ml-2 text-gray-300">Flask</span></label>
                                    <label class="flex items-center p-2 rounded bg-[#0A0A0A] cursor-pointer"><input
                                            type="checkbox" class="w-5 h-5 accent-black border-gray-600"><span
                                            class="ml-2 text-gray-300">Next.js</span></label>
                                </div>
                            </div>
                        </div>

                        <!-- Stage -->
                        <div class="filter-category">
                            <button
                                class="w-full flex items-center justify-between text-left py-4 px-4 cursor-pointer focus:outline-none text-white border-b border-gray-800 transition-colors">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-3 text-white" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7" />
                                    </svg>
                                    <span class="font-medium">Startup Stage</span>
                                </div>
                            </button>
                            <div class="filter-content hidden px-4 py-3 bg-black">
                                <div class="space-y-2">
                                    <label class="flex items-center p-2 rounded bg-[#0A0A0A] cursor-pointer"><input
                                            type="checkbox" class="w-5 h-5 accent-black border-gray-600"><span
                                            class="ml-2 text-gray-300">Idea</span></label>
                                    <label class="flex items-center p-2 rounded bg-[#0A0A0A] cursor-pointer"><input
                                            type="checkbox" class="w-5 h-5 accent-black border-gray-600"><span
                                            class="ml-2 text-gray-300">Prototype</span></label>
                                    <label class="flex items-center p-2 rounded bg-[#0A0A0A] cursor-pointer"><input
                                            type="checkbox" class="w-5 h-5 accent-black border-gray-600"><span
                                            class="ml-2 text-gray-300">MVP</span></label>
                                    <label class="flex items-center p-2 rounded bg-[#0A0A0A] cursor-pointer"><input
                                            type="checkbox" class="w-5 h-5 accent-black border-gray-600"><span
                                            class="ml-2 text-gray-300">Funded</span></label>
                                    <label class="flex items-center p-2 rounded bg-[#0A0A0A] cursor-pointer"><input
                                            type="checkbox" class="w-5 h-5 accent-black border-gray-600"><span
                                            class="ml-2 text-gray-300">Revenue
                                            Generating</span></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <!-- Founders List -->
            <div class="md:w-3/4">
                <div class="mb-6 flex justify-between items-center">
                    <div>
                        <h2 class="text-xl font-semibold text-white">Featured Startups</h2>
                        <p class="text-gray-400 text-sm">Showing 12 of 124 founders</p>
                    </div>
                </div>

                <!-- Grid of Founders -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Startup cards 1-->

                    <?php

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $full_name = $row['full_name'];
                            $email = $row['email'];
                            $startup_name = $row['startup_name'];
                            $category = $row['category'];
                            $founding_date = $row['founding_date'];
                            $company_size = $row['company_size'];
                            $description = $row['description'];
                            $funding_stage = $row['funding_stage'];
                            $funding_raised = $row['funding_raised'];
                            $currently_seeking = $row['currently_seeking'];

                            $cover_img = "../../Images/nav-img-2.jpg";
                            $avatar_img = "../../Images/nav-img-1.png";
                            echo '
                                <div class="bg-gradient-to-br from-gray-900 to-black rounded-lg overflow-hidden border border-gray-900 hover:border-gray-700 transition duration-300">
                                    <div class="relative">
                                        <img src="' . $cover_img . '" alt="Startup Banner" class="w-full h-40 object-cover">
                                        <div
                                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent p-4">
                                            <h2 class="text-white text-xl font-semibold">' . $startup_name. '</h2>
                                            <p class="text-gray-300 text-sm">' . $category . '</p>
                                        </div>
                                    </div>
                                    <div class="p-4">
                                        <div class="flex items-center mb-3">
                                            <img src="/api/placeholder/32/32" alt="Startup Logo" class="w-8 h-8 rounded">
                                            <span class="ml-2 text-white font-medium">' . $startup_name . '</span>
                                        </div>
                                        <p class="text-gray-400 text-sm mb-4">
                                            ' . $description . '
                                        </p>

                                        <div class="flex flex-wrap gap-2 mb-4">
                                            <span
                                                class="bg-teal-900 bg-opacity-50 text-teal-300 text-xs px-2 py-1 rounded">Healthcare</span>
                                            <span
                                                class="bg-yellow-900 bg-opacity-50 text-yellow-300 text-xs px-2 py-1 rounded">Blockchain</span>
                                            <span class="bg-green-900 bg-opacity-50 text-green-300 text-xs px-2 py-1 rounded">' . $funding_stage . '</span>
                                            <span
                                                class="bg-indigo-900 bg-opacity-50 text-indigo-300 text-xs px-2 py-1 rounded">10-50
                                                Employees</span>
                                        </div>
                                        <div class="text-gray-400 text-sm mb-2">
                                            <strong>Funding Raised:</strong> $ ' . $funding_raised . '
                                        </div>

                                        <div class="text-gray-400 text-sm mb-4">
                                            <strong>Currently Seeking:</strong> $ ' . $currently_seeking . '
                                        </div>
                                        <div class="flex justify-end">
                                            <button
                                                class="text-purple-400 hover:text-purple-300 text-sm font-medium cursor-pointer">
                                                View Startup
                                            </button>
                                        </div>
                                    </div>
                                </div>';
                        }
                    } else {
                        echo "<p class='text-white'>No founders found.</p>";
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>



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
                            <li><a href="#" class="hover:text-white">Startups</a></li>
                            <li><a href="#" class="hover:text-white">Investors</a></li>
                            <li><a href="#" class="hover:text-white">Talent</a></li>
                        </ul>
                    </div>
                    <div>
                        <h5 class="text-sm font-medium mb-3 text-white">Resources</h5>
                        <ul class="space-y-2 text-sm text-gray-400">
                            <li><a href="#" class="hover:text-white">Blog</a></li>
                            <li><a href="#" class="hover:text-white">Guides</a></li>
                            <li><a href="#" class="hover:text-white">Events</a></li>
                            <li><a href="#" class="hover:text-white">Podcast</a></li>
                        </ul>
                    </div>
                    <div>
                        <h5 class="text-sm font-medium mb-3 text-white">Company</h5>
                        <ul class="space-y-2 text-sm text-gray-400">
                            <li><a href="#" class="hover:text-white">About</a></li>
                            <li><a href="#" class="hover:text-white">Careers</a></li>
                            <li><a href="#" class="hover:text-white">Contact</a></li>
                            <li><a href="#" class="hover:text-white">Press</a></li>
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


    <script src="./startup.js"></script>
</body>

</html>