<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../output.css">
</head>

<body class="bg-black flex justify-center items-center h-full py-40">
    <!-- Event Submission Modal -->
    <div class="bg-black/80 flex items-center justify-center backdrop-blur-sm">
        <div class="bg-gradient-to-br from-gray-900 to-black border border-gray-700 rounded-xl p-8 max-w-2xl w-full mx-4 relative">
            <button id="closeModal" class="absolute top-4 right-4 text-gray-400 hover:text-white">
                <i class="fas fa-times text-xl"></i>
            </button>

            <form id="eventSubmissionForm" class="space-y-6">
                <div class="text-center mb-6">
                    <h2 class="text-2xl font-bold text-white">Submit Your Event</h2>
                    <p class="text-gray-400">Complete the form below to submit your event for review</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-400 mb-2">Event Name*</label>
                        <input type="text" name="eventName" required class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-400 mb-2">Event Type*</label>
                        <select name="eventType" required class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                            <option value="">Select Type</option>
                            <option value="conference">Conference</option>
                            <option value="networking">Networking</option>
                            <option value="workshop">Workshop</option>
                            <option value="hackathon">Hackathon</option>
                            <option value="pitch">Pitch Competition</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-400 mb-2">Start Date*</label>
                        <input type="date" name="startDate" required class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-400 mb-2">End Date</label>
                        <input type="date" name="endDate" class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-400 mb-2">Location Type*</label>
                        <select name="locationType" required class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                            <option value="">Select Location Type</option>
                            <option value="inPerson">In-Person</option>
                            <option value="virtual">Virtual</option>
                            <option value="hybrid">Hybrid</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-400 mb-2">City/Location</label>
                        <input type="text" name="location" class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                    </div>

                    <div class="md:col-span-2">
                        <label class="block text-sm font-medium text-gray-400 mb-2">Event Description*</label>
                        <textarea name="description" required rows="4" class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:border-transparent"></textarea>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-400 mb-2">Price Range</label>
                        <input type="text" name="price" placeholder="Free or price range" class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-400 mb-2">Organizer Email*</label>
                        <input type="email" name="email" required class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                    </div>

                    <div class="md:col-span-2">
                        <label class="block text-sm font-medium text-gray-400 mb-2">Event Image</label>
                        <div class="border border-dashed border-gray-600 rounded-lg p-4 text-center">
                            <i class="fas fa-cloud-upload-alt text-gray-400 text-2xl mb-2"></i>
                            <p class="text-sm text-gray-400">Drag and drop an image or click to upload</p>
                            <input type="file" name="eventImage" class="opacity-0 absolute inset-0 cursor-pointer">
                        </div>
                    </div>
                </div>

                <div class="flex items-center space-x-2 text-sm">
                    <input type="checkbox" name="termsAgreed" id="termsAgreed" required class="rounded bg-gray-800 border-gray-700 text-purple-600 focus:ring-purple-500">
                    <label for="termsAgreed" class="text-gray-400">I agree to the <a href="#" class="text-blue-400">terms and conditions</a></label>
                </div>

                <div class="text-center">
                    <button type="submit" class="bg-gradient-to-r from-[#E94560] to-purple-600 hover:from-[#E94560] hover:to-purple-700 text-white px-8 py-3 rounded-lg shadow-lg shadow-purple-500/20 transition">Submit Event</button>
                </div>
            </form>

            <!-- Success message (hidden by default) -->
            <div id="submissionSuccess" class="text-center py-12 hidden">
                <div class="h-16 w-16 rounded-full bg-gradient-to-r from-cyan-500 to-blue-500 flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-check text-2xl text-white"></i>
                </div>
                <h3 class="text-2xl font-bold mb-2">Event Submitted Successfully!</h3>
                <p class="text-gray-400">Your event has been submitted for review. We'll notify you once it's approved.</p>
            </div>
        </div>
    </div>
</body>

</html>