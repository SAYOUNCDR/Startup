<?php
include_once '../config/db.php';
$sql = "SELECT * FROM events";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StartupConnect - Events</title>
    <link rel="stylesheet" href="../output.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body class="bg-black min-h-screen text-gray-200">
    <header class="border-b border-gray-800">
        <div class="container mx-auto px-4 py-6">
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-2">
                    <span class="text-2xl font-bold text-white">ElevateX</span>
                </div>
                <nav class="hidden md:flex space-x-8">
                    <a href="#" class="text-gray-400 hover:text-cyan-400 transition">Home</a>
                    <a href="#" class="text-gray-400 hover:text-cyan-400 transition">Startups</a>
                    <a href="#" class="text-gray-400 hover:text-cyan-400 transition">Investors</a>
                    <a href="#" class="text-white font-medium hover:text-cyan-400 transition">Events</a>
                    <a href="#" class="text-gray-400 hover:text-cyan-400 transition">About Us</a>
                </nav>
                <div class="flex items-center space-x-4">
                    <button class="bg-gradient-to-r from-cyan-500 to-blue-500 hover:from-cyan-600 hover:to-blue-600 text-white px-5 py-2 rounded-full shadow-lg shadow-cyan-500/20 transition">Sign In</button>
                    <button class="md:hidden">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <main class="container mx-auto px-4 py-12">
        <div class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Startup <span class="bg-clip-text text-transparent bg-gradient-to-r from-[#E94560] to-purple-600">Events</span></h1>
            <p class="text-gray-400 max-w-2xl mx-auto">Connect with founders, investors, and collaborators at these upcoming events. Expand your network and find opportunities to grow your startup.</p>
        </div>

        <!-- Event Filters -->
        <div class="bg-gradient-to-br from-gray-900 to-black backdrop-blur-sm p-6 rounded-xl mb-12 border border-gray-700/50">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div>
                    <label class="block text-sm font-medium text-gray-400 mb-2">Event Type</label>
                    <select class="w-full bg-gray-900 border border-gray-700 rounded-lg px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                        <option>All Types</option>
                        <option>Pitch Competitions</option>
                        <option>Networking</option>
                        <option>Workshops</option>
                        <option>Conferences</option>
                        <option>Hackathons</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-400 mb-2">Location</label>
                    <select class="w-full bg-gray-900 border border-gray-700 rounded-lg px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                        <option>All Locations</option>
                        <option>Virtual</option>
                        <option>San Francisco</option>
                        <option>New York</option>
                        <option>London</option>
                        <option>Berlin</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-400 mb-2">Date</label>
                    <select class="w-full bg-gray-900 border border-gray-700 rounded-lg px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                        <option>Any Time</option>
                        <option>Today</option>
                        <option>This Week</option>
                        <option>This Month</option>
                        <option>Next Month</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-400 mb-2">Industry</label>
                    <select class="w-full bg-gray-900 border border-gray-700 rounded-lg px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                        <option>All Industries</option>
                        <option>Fintech</option>
                        <option>Healthtech</option>
                        <option>AI & Machine Learning</option>
                        <option>SaaS</option>
                        <option>E-commerce</option>
                    </select>
                </div>
            </div>
            <div class="flex justify-end mt-6">
                <button class="bg-gradient-to-r from-[#E94560] to-purple-600 hover:from-[#E94560] hover:to-purple-700 text-white px-6 py-2 rounded-lg shadow-lg shadow-purple-500/20 transition">Apply Filters</button>
            </div>
        </div>

        <!-- Featured Event -->
        <div class="bg-gradient-to-br from-gray-900 to-black p-6 md:p-8 rounded-2xl mb-12 border border-gray-800 relative overflow-hidden group">
            <div class="absolute inset-0 bg-gradient-to-r from-cyan-500/10 to-purple-600/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
            <div class="absolute top-0 right-0 bg-gradient-to-l from-[#E94560] to-purple-600 text-white px-6 py-2 rounded-bl-xl font-semibold">Featured</div>
            <div class="md:flex space-y-6 md:space-y-0 md:space-x-8 relative z-10">
                <div class="md:w-1/3">
                    <div class="rounded-xl overflow-hidden h-64 bg-gray-800">
                        <img src="../Images/featured-event.jpg" alt="TechCrunch Disrupt 2025" class="w-full h-full object-cover" />
                    </div>
                </div>
                <div class="md:w-2/3">
                    <div class="flex items-center mb-4 text-sm">
                        <span class="bg-cyan-500/20 text-cyan-400 px-3 py-1 rounded-full">Conference</span>
                        <span class="mx-3 text-gray-500">•</span>
                        <span class="text-gray-400"><i class="far fa-calendar-alt mr-2"></i>April 28-30, 2025</span>
                        <span class="mx-3 text-gray-500">•</span>
                        <span class="text-gray-400"><i class="fas fa-map-marker-alt mr-2"></i>San Francisco</span>
                    </div>
                    <h2 class="text-2xl md:text-3xl font-bold mb-3">TechCrunch Disrupt 2025</h2>
                    <p class="text-gray-400 mb-6">Join the tech industry's most important event where startups, investors, and innovators gather to showcase revolutionary technologies and discuss the future of startups.</p>
                    <div class="flex flex-wrap items-center gap-4">
                        <button class="bg-gradient-to-r from-cyan-500 to-blue-500 hover:from-cyan-600 hover:to-blue-600 text-white px-6 py-3 rounded-lg shadow-lg shadow-cyan-500/20 transition flex items-center cursor-pointer">
                            <i class="fas fa-ticket-alt mr-2"></i> Register Now
                        </button>
                        <button class="bg-gray-800 hover:bg-gray-700 text-white px-6 py-3 rounded-lg transition flex items-center cursor-pointer">
                            <i class="far fa-calendar-plus mr-2"></i> Add to Calendar
                        </button>
                        <div class="flex items-center text-gray-400">
                            <img src="../Images/user-01.jpg" alt="avatar" class="w-10 h-10 rounded-full border-2 border-gray-800" />
                            <img src="../Images/user-01.jpg" alt="avatar" class="w-10 h-10 rounded-full border-2 border-gray-800 -ml-2" />
                            <img src="../Images/user-01.jpg" alt="avatar" class="w-10 h-10 rounded-full border-2 border-gray-800 -ml-2" />
                            <span class="ml-2">+245 attending</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Upcoming Events -->
        <h2 class="text-2xl font-bold mb-6">Upcoming Events</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
            <!-- Event Card 1 -->

            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $eventName = $row['eventName'];
                    $eventType = $row['eventType'];
                    $startDate = $row['startDate'];
                    $endDate = $row['endDate'];
                    $locationType = $row['locationType'];
                    $location = $row['location'];
                    $description = $row['description'];
                    $price = $row['price'];
                    $email = $row['email'];
                    echo '
                    <div class="bg-gradient-to-tr from-gray-900 to-black rounded-xl overflow-hidden border border-gray-700/50 hover:border-gray-700 transition group">
                        <div class="h-48 overflow-hidden relative">
                            <img src="../Images/events-01.jpg" alt="Startup Weekend" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" />
                            <div class="absolute top-0 right-0 bg-cyan-500 text-white px-3 py-1 text-sm rounded-bl-lg font-medium">'. $eventType .'</div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center justify-between text-sm text-gray-400 mb-3">
                                <span><i class="far fa-calendar-alt mr-1"></i>'. $startDate .'</span>
                                <span><i class="far fa-calendar-alt mr-1"></i>'. $endDate .'</span>
                                <span><i class="fas fa-map-marker-alt mr-1"></i>' . $location . '</span>
                            </div>
                            <h3 class="text-xl font-bold mb-2 group-hover:text-cyan-400 transition">'. $eventName .'</h3>
                            <p class="text-gray-400 text-sm mb-4">'. $description .'</p>
                            <div class="flex justify-between items-center">
                                <span class="text-cyan-400 font-medium">$'. $price .'</span>
                                <a href="#" class="text-blue-400 hover:text-blue-300 transition">Learn more →</a>
                            </div>
                        </div>
                    </div>
                    ';
                }
            } else {
                echo "<script>alert('No events found');</script>";
            }
            ?>
        </div>

        <!-- Load More -->
        <div class="text-center">
            <button class="border border-purple-500 text-purple-400 hover:bg-purple-500 hover:text-white px-8 py-3 rounded-lg transition duration-300">Load More Events</button>
        </div>

        <!-- Host Your Own Event -->
        <div class="mt-20 bg-gradient-to-br from-gray-900 to-black rounded-2xl p-8 lg:p-12 border border-gray-700/50 relative overflow-hidden">
            <div class="absolute top-0 right-0 w-64 h-64 bg-gradient-to-br from-[#E94560]/20 to-purple-600/20 rounded-full blur-3xl -mr-20 -mt-20"></div>
            <div class="absolute bottom-0 left-0 w-64 h-64 bg-gradient-to-tr from-cyan-500/20 to-blue-600/20 rounded-full blur-3xl -ml-20 -mb-20"></div>
            <div class="relative z-10 lg:flex items-center justify-between">
                <div class="lg:w-3/5 mb-8 lg:mb-0">
                    <h2 class="text-3xl font-bold mb-4">Host Your Own <span class="bg-clip-text text-transparent bg-gradient-to-r from-[#E94560] to-purple-600">Startup Event</span></h2>
                    <p class="text-gray-400 mb-6">Have an idea for a startup event? Use our platform to organize and promote your workshop, networking meetup, or conference to our community of founders and investors.</p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center">
                            <div class="h-6 w-6 rounded-full bg-gradient-to-r from-cyan-500 to-blue-500 flex items-center justify-center mr-3">
                                <i class="fas fa-check text-xs text-white"></i>
                            </div>
                            <span>Reach thousands of startup founders and investors</span>
                        </li>
                        <li class="flex items-center">
                            <div class="h-6 w-6 rounded-full bg-gradient-to-r from-cyan-500 to-blue-500 flex items-center justify-center mr-3">
                                <i class="fas fa-check text-xs text-white"></i>
                            </div>
                            <span>Manage registrations and ticketing</span>
                        </li>
                        <li class="flex items-center">
                            <div class="h-6 w-6 rounded-full bg-gradient-to-r from-cyan-500 to-blue-500 flex items-center justify-center mr-3">
                                <i class="fas fa-check text-xs text-white"></i>
                            </div>
                            <span>Access promotional tools and analytics</span>
                        </li>
                    </ul>
                    <a href="./addEventForm.php">
                        <button class="bg-gradient-to-r from-[#E94560] to-purple-600 hover:from-[#E94560] hover:to-purple-700 text-white px-8 py-3 rounded-lg shadow-lg shadow-purple-500/20 transition cursor-pointer"
                            id="submit-btn">
                            Submit Your Event
                        </button>
                    </a>
                </div>
                <div class="lg:w-2/5">
                    <img src="../Images/host-event.jpg" alt="Host an event" class="rounded-xl shadow-2xl" />
                </div>
            </div>
        </div>
    </main>


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



</body>

</html>