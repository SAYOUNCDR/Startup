<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Development Companies - ElevateX</title>
    <link rel="stylesheet" href="../output.css"> 
    <style>
        body {
            background-color: #000;
            color: #fff;
        }

        .company-card {
            transition: transform 0.3s ease-in-out, border-color 0.3s ease;
        }

        .company-card:hover {
            transform: translateY(-5px);
            border-color: #E94560;
        }
    </style>
</head>

<body class="bg-black text-white min-h-screen flex flex-col">

    <!-- Header -->
    <header class="bg-black px-6 py-4 m-3 flex items-center justify-between border-b border-gray-700">
        <h1 class="text-white text-3xl font-bold">Web Development Companies</h1> 

        <!-- Back Button -->
        <a href="../Home/main.html"
            class="bg-[#E94560] hover:bg-[#e73351] text-white font-medium py-2 px-4 rounded-lg transition-colors flex items-center cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
            Back to Home
        </a>
    </header>

    <!-- Main Content Area -->
    <main class="container mx-auto px-4 py-8 max-w-6xl flex-grow">
        <!-- Search Section -->
        <div class="mb-10">
            <div class="max-w-3xl mx-auto">
                <h2 class="text-2xl font-bold mb-6 text-center">Find Web Development Partners</h2>
                <div
                    class="flex items-center bg-[#0b0b0d] border border-gray-700 rounded-lg focus-within:ring-2 focus-within:ring-[#E94560]">
                    <input type="text" id="company-search"
                        placeholder="Search by company name, tech stack, or specialization..."
                        class="w-full py-3 px-4 bg-transparent border-0 focus:outline-none text-white">
                    <div class="px-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Company Cards Grid -->
        <div id="company-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Company cards will be inserted here by JavaScript -->
        </div>

        <!-- No Results Message (hidden by default) -->
        <div id="no-results" class="hidden text-center py-10">
            <h3 class="text-xl font-medium text-gray-300">No companies match your search</h3>
            <p class="text-gray-400 mt-2">Try adjusting your search terms or clear the search to see all companies.</p>
        </div>
    </main>


    <!-- footer -->
    <footer class="py-6 px-6 mt-12 text-center border-t border-gray-700">
        <p class="text-gray-400 text-sm">&copy; 2025 ElevateX. All rights reserved.</p>
    </footer>

    <script src="web.js"></script>
</body>

</html>