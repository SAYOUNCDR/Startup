<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FundMyStartup - Submit Your Pitch</title>
    <link rel="stylesheet" href="../output.css">
</head>

<body class="bg-black text-gray-100">
    <!-- Main Content Area -->
    <main class="flex justify-center items-center py-12 px-4 mt-20">
        <!-- Pitch Submission Modal -->
        <div class="bg-black/80 flex items-center justify-center backdrop-blur-sm">
            <div class="bg-gradient-to-br from-gray-900 to-black border border-gray-700 rounded-xl p-8 max-w-3xl w-full mx-4 relative shadow-2xl">
                <button id="closeModal" class="absolute top-4 right-4 text-gray-400 hover:text-white">
                    <i class="fas fa-times text-xl"></i>
                </button>

                <form id="pitchSubmissionForm" class="space-y-6" action="../config/addPitch.php" method="POST">
                    <div class="text-center mb-8">
                        <h2 class="text-2xl font-bold text-white">Submit Your Startup Pitch</h2>
                        <p class="text-gray-400">Complete the form below to present your startup to potential investors</p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-400 mb-2">Startup Name*</label>
                            <input type="text" name="startupName" required class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-400 mb-2">Industry*</label>
                            <select name="industry" required class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                                <option value="">Select Industry</option>
                                <option value="fintech">FinTech</option>
                                <option value="healthtech">HealthTech</option>
                                <option value="edtech">EdTech</option>
                                <option value="ecommerce">E-Commerce</option>
                                <option value="saas">SaaS</option>
                                <option value="ai">AI/Machine Learning</option>
                                <option value="blockchain">Blockchain</option>
                                <option value="cleantech">CleanTech</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-400 mb-2">Founded Year*</label>
                            <input type="number" name="foundedYear" min="1900" max="2025" required class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-400 mb-2">Funding Stage*</label>
                            <select name="fundingStage" required class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                                <option value="">Select Stage</option>
                                <option value="ideation">Ideation</option>
                                <option value="pre-seed">Pre-Seed</option>
                                <option value="seed">Seed</option>
                                <option value="seriesA">Series A</option>
                                <option value="seriesB">Series B</option>
                                <option value="seriesC">Series C+</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-400 mb-2">Location*</label>
                            <input type="text" name="location" required placeholder="City, Country" class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-400 mb-2">Team Size*</label>
                            <input type="number" name="teamSize" min="1" required class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                        </div>

                        <div class="md:col-span-2">
                            <label class="block text-sm font-medium text-gray-400 mb-2">Elevator Pitch* <span class="text-xs">(Max 150 words)</span></label>
                            <textarea name="elevatorPitch" required rows="3" maxlength="1000" class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:border-transparent"></textarea>
                        </div>

                        <div class="md:col-span-2">
                            <label class="block text-sm font-medium text-gray-400 mb-2">Problem Statement*</label>
                            <textarea name="problemStatement" required rows="3" class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:border-transparent"></textarea>
                        </div>

                        <div class="md:col-span-2">
                            <label class="block text-sm font-medium text-gray-400 mb-2">Solution Overview*</label>
                            <textarea name="solutionOverview" required rows="3" class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:border-transparent"></textarea>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-400 mb-2">Current Traction</label>
                            <input type="text" name="traction" placeholder="Users, Revenue, Partnerships, etc." class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-400 mb-2">Seeking Investment*</label>
                            <input type="text" name="investmentAmount" required placeholder="e.g. $500K - $1M" class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-400 mb-2">Website URL</label>
                            <input type="url" name="websiteUrl" placeholder="https://yourstartup.com" class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-400 mb-2">Founder Email*</label>
                            <input type="email" name="founderEmail" required class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                        </div>

                        <div class="md:col-span-2">
                            <label class="block text-sm font-medium text-gray-400 mb-2">Pitch Deck URL</label>
                            <input type="url" name="pitchDeckUrl" placeholder="Link to your pitch deck (Google Drive, Dropbox, etc.)" class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                        </div>

                        <div class="md:col-span-2">
                            <label class="block text-sm font-medium text-gray-400 mb-2">Why Now? (Market Timing)*</label>
                            <textarea name="marketTiming" required rows="2" class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:border-transparent"></textarea>
                        </div>

                        <div class="md:col-span-2">
                            <label class="block text-sm font-medium text-gray-400 mb-2">Competitive Advantage*</label>
                            <textarea name="competitiveAdvantage" required rows="2" class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:border-transparent"></textarea>
                        </div>
                    </div>

                    <div class="flex items-center space-x-2 text-sm mt-6">
                        <input type="checkbox" name="termsAgreed" id="termsAgreed" required class="rounded bg-gray-800 border-gray-700 text-purple-600 focus:ring-purple-500">
                        <label for="termsAgreed" class="text-gray-400">I agree to the <a href="#" class="text-indigo-400 hover:text-indigo-300">terms and conditions</a> and understand that my information will be shared with potential investors</label>
                    </div>

                    <div class="text-center mt-8">
                        <button type="submit" class="bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 text-white px-10 py-3 rounded-full shadow-lg shadow-purple-500/20 transform transition duration-300 hover:scale-105">
                            Submit Pitch
                            <i class="fas fa-paper-plane ml-2"></i>
                        </button>
                    </div>
                </form>

                <!-- Success message (hidden by default) -->
                <div id="submissionSuccess" class="text-center py-12 hidden">
                    <div class="h-16 w-16 rounded-full bg-gradient-to-r from-indigo-500 to-purple-500 flex items-center justify-center mx-auto mb-6 shadow-lg">
                        <i class="fas fa-check text-2xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-2 text-white">Pitch Submitted Successfully!</h3>
                    <p class="text-gray-400">Your startup pitch has been submitted for review. Our team will review your information and connect you with potential investors if there's a match.</p>
                    <div class="mt-6">
                        <button id="closeSuccessModal" class="text-indigo-400 hover:text-indigo-300 underline">Return to homepage</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        // JavaScript to handle form submission and success message
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('pitchSubmissionForm');
            const successMessage = document.getElementById('submissionSuccess');
            const closeModalBtn = document.getElementById('closeModal');
            const closeSuccessBtn = document.getElementById('closeSuccessModal');

            form.addEventListener('submit', function(e) {
                e.preventDefault(); // In a real implementation, remove this line

                // Hide the form and show success message
                form.classList.add('hidden');
                successMessage.classList.remove('hidden');
            });

            closeModalBtn.addEventListener('click', function() {
                // Close the modal - in production this would redirect or close the modal
                alert('Modal would close here');
            });

            closeSuccessBtn.addEventListener('click', function() {
                // Return to homepage - in production this would redirect
                alert('Would redirect to homepage');
            });
        });
    </script>
</body>

</html>