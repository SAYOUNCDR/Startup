<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - ElevateX</title>
    <link rel="stylesheet" href="../output.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.10.3/cdn.min.js" defer></script>
</head>

<body class="bg-black text-white font-sans">


    <!-- Hero Section -->
    <section class="py-16 px-8 md:px-16 relative overflow-hidden">
        <div class="absolute -top-20 -left-20 w-64 h-64 bg-purple-900 rounded-full filter blur-3xl opacity-20"></div>
        <div class="absolute -top-30 -right-10 w-80 h-80 bg-[#E94560] rounded-full filter blur-3xl opacity-10"></div>

        <div class="relative z-10 max-w-4xl mx-auto text-center">
            <h1 class="text-5xl font-bold mb-6">About <span class="bg-gradient-to-r from-[#E94560] to-purple-600 bg-clip-text text-transparent">ElevateX</span></h1>
            <p class="text-xl text-gray-300 mb-10">Connecting visionaries, building the future of entrepreneurship</p>
            <div class="flex flex-col md:flex-row gap-4 justify-center">
                <a href="./main.php#joinButton" class="bg-gradient-to-r from-[#E94560] to-purple-600 px-8 py-3 rounded-lg font-medium transition-colors">Join Our Ecosystem</a>
                <a href="#faq" class="border border-gray-700 hover:border-purple-500 px-8 py-3 rounded-lg font-medium transition-all">Learn More</a>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="px-8 md:px-16 py-12">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-gradient-to-br from-gray-900 to-black bg-opacity-60 backdrop-blur-sm p-8 rounded-lg border border-gray-800">
                <p class="text-[#E94560] text-4xl font-bold mb-2">500+</p>
                <p class="text-gray-300">Startups Funded</p>
            </div>
            <div class="bg-gradient-to-br from-gray-900 to-black bg-opacity-60 backdrop-blur-sm p-8 rounded-lg border border-gray-800">
                <p class="text-purple-500 text-4xl font-bold mb-2">250</p>
                <p class="text-gray-300">Active Investors</p>
            </div>
            <div class="bg-gradient-to-br from-gray-900 to-black  bg-opacity-60 backdrop-blur-sm p-8 rounded-lg border border-gray-800">
                <p class="text-[#E94560] text-4xl font-bold mb-2">45+</p>
                <p class="text-gray-300">Countries Reached</p>
            </div>
        </div>
    </section>

    <!-- Accordion Section -->
    <section id="faq" class="px-8 md:px-16 py-12" x-data="{
        activeAccordion: 'mission',
        toggleAccordion(id) {
            this.activeAccordion = this.activeAccordion === id ? null : id
        }
        }">
        <div class="max-w-4xl mx-auto mb-12 text-center">
            <h2 class="text-3xl font-bold mb-4">Our Story</h2>
            <p class="text-gray-300">Learn more about who we are and what drives us</p>
        </div>

        <div class="max-w-3xl mx-auto space-y-4">
            <!-- Mission Accordion -->
            <div class="border border-gray-800 rounded-lg overflow-hidden"
                :class="{ 'border-[#E94560]': activeAccordion === 'mission' }">
                <button
                    class="w-full cursor-pointer flex justify-between items-center p-6 bg-gradient-to-bl from-gray-900 to-black bg-opacity-60 text-left"
                    @click="toggleAccordion('mission')">
                    <h3 class="text-xl font-semibold">Our Mission</h3>
                    <svg
                        :class="{ 'rotate-180': activeAccordion === 'mission' }"
                        class="w-5 h-5 transition-transform duration-300"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div
                    x-show="activeAccordion === 'mission'"
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 transform -translate-y-4"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    class="p-6 bg-gradient-to-tl from-gray-900 to-black bg-opacity-30">
                    <p class="text-gray-300">At ElevateX, we're on a mission to democratize access to resources for startups worldwide. We believe that great ideas deserve the chance to thrive, regardless of where they originate. By connecting founders with investors, mentors, and collaborators, we're creating a global ecosystem where innovation can flourish and revolutionary ideas can come to life.</p>
                </div>
            </div>

            <!-- Values Accordion -->
            <div class="border border-gray-800 rounded-lg overflow-hidden"
                :class="{ 'border-[#E94560]': activeAccordion === 'values' }">
                <button
                    class="w-full cursor-pointer flex justify-between items-center p-6 bg-gradient-to-bl from-gray-900 to-black bg-opacity-60 text-left"
                    @click="toggleAccordion('values')">
                    <h3 class="text-xl font-semibold">Our Values</h3>
                    <svg
                        :class="{ 'rotate-180': activeAccordion === 'values' }"
                        class="w-5 h-5 transition-transform duration-300"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div
                    x-show="activeAccordion === 'values'"
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 transform -translate-y-4"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    class="p-6 bg-gradient-to-tl from-gray-900 to-black bg-opacity-30">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <h4 class="text-[#E94560] font-semibold mb-2">Innovation</h4>
                            <p class="text-gray-300">We embrace new ideas and approaches, pushing the boundaries of what's possible.</p>
                        </div>
                        <div>
                            <h4 class="text-purple-500 font-semibold mb-2">Inclusivity</h4>
                            <p class="text-gray-300">We welcome entrepreneurs from all backgrounds, believing diversity drives stronger outcomes.</p>
                        </div>
                        <div>
                            <h4 class="text-[#E94560] font-semibold mb-2">Integrity</h4>
                            <p class="text-gray-300">We operate with transparency and honesty in all our dealings and relationships.</p>
                        </div>
                        <div>
                            <h4 class="text-purple-500 font-semibold mb-2">Impact</h4>
                            <p class="text-gray-300">We measure success by the positive change we create in the entrepreneurial ecosystem.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Story Accordion -->
            <div class="border border-gray-800 rounded-lg overflow-hidden"
                :class="{ 'border-[#E94560]': activeAccordion === 'story' }">
                <button
                    class=" cursor-pointer w-full flex justify-between items-center p-6 bg-gradient-to-bl from-gray-900 to-black bg-opacity-60 text-left"
                    @click="toggleAccordion('story')">
                    <h3 class="text-xl font-semibold">Our Journey</h3>
                    <svg
                        :class="{ 'rotate-180': activeAccordion === 'story' }"
                        class="w-5 h-5 transition-transform duration-300"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div
                    x-show="activeAccordion === 'story'"
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 transform -translate-y-4"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    class="p-6 bg-gradient-to-tl from-gray-900 to-black bg-opacity-30">
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="min-w-[80px] text-center">
                                <span class="text-[#E94560] font-bold">2023</span>
                            </div>
                            <div class="ml-4">
                                <h4 class="font-semibold mb-1">The Beginning</h4>
                                <p class="text-gray-300">Founded by a team of entrepreneurs who experienced firsthand the challenges of building startups without the right connections.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="min-w-[80px] text-center">
                                <span class="text-purple-500 font-bold">2024</span>
                            </div>
                            <div class="ml-4">
                                <h4 class="font-semibold mb-1">Rapid Growth</h4>
                                <p class="text-gray-300">Expanded to 20 countries and facilitated over $50M in startup funding through our platform.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="min-w-[80px] text-center">
                                <span class="text-[#E94560] font-bold">2025</span>
                            </div>
                            <div class="ml-4">
                                <h4 class="font-semibold mb-1">Today</h4>
                                <p class="text-gray-300">Now a global ecosystem with thousands of active users, continuing our mission to democratize access to startup resources.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- How It Works Accordion -->
            <div class="border border-gray-800 rounded-lg overflow-hidden"
                :class="{ 'border-[#E94560]': activeAccordion === 'how' }">
                <button
                    class="w-full flex justify-between items-center cursor-pointer p-6 bg-gradient-to-bl from-gray-900 to-black bg-opacity-60 text-left"
                    @click="toggleAccordion('how')">
                    <h3 class="text-xl font-semibold">How It Works</h3>
                    <svg
                        :class="{ 'rotate-180': activeAccordion === 'how' }"
                        class="w-5 h-5 transition-transform duration-300"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div
                    x-show="activeAccordion === 'how'"
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 transform -translate-y-4"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                    class="p-6 bg-gradient-to-tl from-gray-900 to-black bg-opacity-30">
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="bg-gradient-to-r from-[#E94560] to-purple-600 rounded-lg w-10 h-10 flex items-center justify-center">1</div>
                            </div>
                            <div class="ml-4">
                                <h4 class="font-semibold mb-1">Register Your Startup</h4>
                                <p class="text-gray-300">Create a detailed profile highlighting your vision, team, and current stage.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="bg-gradient-to-r from-[#E94560] to-purple-600 rounded-lg w-10 h-10 flex items-center justify-center">2</div>
                            </div>
                            <div class="ml-4">
                                <h4 class="font-semibold mb-1">Connect With Resources</h4>
                                <p class="text-gray-300">Our platform intelligently matches you with investors, mentors, and collaborators.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="bg-gradient-to-r from-[#E94560] to-purple-600 rounded-lg w-10 h-10 flex items-center justify-center">3</div>
                            </div>
                            <div class="ml-4">
                                <h4 class="font-semibold mb-1">Secure Funding</h4>
                                <p class="text-gray-300">Present your pitch on our platform and connect directly with interested investors.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="bg-gradient-to-r from-[#E94560] to-purple-600 rounded-lg w-10 h-10 flex items-center justify-center">4</div>
                            </div>
                            <div class="ml-4">
                                <h4 class="font-semibold mb-1">Scale Your Business</h4>
                                <p class="text-gray-300">Leverage our community and resources to grow your startup to new heights.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="px-8 md:px-16 py-12">
        <div class="max-w-4xl mx-auto mb-12 text-center">
            <h2 class="text-3xl font-bold mb-4">Meet Our Team</h2>
            <p class="text-gray-300">The passionate individuals behind ElevateX</p>
        </div>

        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-6">
            <div class="bg-gradient-to-tl from-gray-900 to-black bg-opacity-40 flex flex-col justify-center items-center  p-6 rounded-lg border border-gray-800 hover:border-gray-600 cursor-pointer transition-all duration-800">

                <img src="../Images/nav-img-2.jpg" alt="" class="h-30 w-50 mb-2 rounded-lg">

                <h3 class="text-center font-semibold">Alex Morgan</h3>
                <p class="text-center text-gray-400 text-sm">CEO & Co-Founder</p>
            </div>
            <div class="bg-gradient-to-br from-gray-900 to-black bg-opacity-40 flex flex-col justify-center items-center  p-6 rounded-lg border border-gray-800 hover:border-gray-600 cursor-pointer transition-all duration-800">

                <img src="../Images/nav-img-2.jpg" alt="" class="h-30 w-50 mb-2 rounded-lg">

                <h3 class="text-center font-semibold">Jordan Lee</h3>
                <p class="text-center text-gray-400 text-sm">CTO & Co-Founder</p>
            </div>
            <div class="bg-gradient-to-bl from-gray-900 to-black bg-opacity-40 flex flex-col justify-center items-center  p-6 rounded-lg border border-gray-800 hover:border-gray-600 cursor-pointer transition-all duration-800">

                <img src="../Images/nav-img-2.jpg" alt="" class="h-30 w-50 mb-2 rounded-lg">

                <h3 class="text-center font-semibold">Taylor Chen</h3>
                <p class="text-center text-gray-400 text-sm">Head of Partnerships</p>
            </div>
            <div class="bg-gradient-to-tr from-gray-900 to-black bg-opacity-40 flex flex-col justify-center items-center  p-6 rounded-lg border border-gray-800 hover:border-gray-600 cursor-pointer transition-all duration-800">

                <img src="../Images/nav-img-2.jpg" alt="" class="h-30 w-50 mb-2 rounded-lg">

                <h3 class="text-center font-semibold">Casey Rivera</h3>
                <p class="text-center text-gray-400 text-sm">Head of Community</p>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-16 px-8 md:px-16 relative">
        <div class="max-w-4xl mx-auto text-center relative z-10 bg-gradient-to-br from-gray-900 to-black p-30 rounded-lg border border-gray-700">
            <h2 class="text-3xl font-bold mb-6">Join the ElevateX Community</h2>
            <p class="text-xl text-gray-300 mb-8">Whether you're a founder, investor, mentor, or collaborator, there's a place for you in our ecosystem.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#" class="bg-gradient-to-r from-[#E94560] to-purple-600 px-8 py-3 rounded-lg font-medium transition-colors">Join Now</a>
                <a href="./main.php#contact" class="bg-transparent border border-gray-700 hover:border-purple-500 px-8 py-3 rounded-lg font-medium transition-all">Contact Us</a>
            </div>
        </div>
    </section>

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