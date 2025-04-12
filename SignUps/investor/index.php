<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ElevateX - Investor Registration</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            dark: {
              900: '#0a0b13',
              800: '#131726',
              700: '#1c2037'
            }
          }
        }
      }
    }
  </script>
</head>

<body class="bg-black text-white min-h-screen flex flex-col relative">
  <!-- Geometric Background Elements -->
  <div class="absolute inset-0 overflow-hidden z-0">
    <div class="absolute -left-20 top-0 h-full w-64 bg-purple-900/20 skew-x-12 transform"></div>
    <div class="absolute -right-20 top-0 h-full w-64 bg-pink-900/20 -skew-x-12 transform"></div>
    <svg class="absolute inset-0 w-full h-full opacity-10" xmlns="http://www.w3.org/2000/svg">
      <defs>
        <pattern id="hexagrid" width="60" height="60" patternUnits="userSpaceOnUse" patternTransform="rotate(30)">
          <path d="M0,30 L30,0 L60,30 L30,60 Z" fill="none" stroke="url(#gradient)" stroke-width="1" />
        </pattern>
        <linearGradient id="gradient" x1="0%" y1="0%" x2="100%" y2="100%">
          <stop offset="0%" stop-color="#ff4b93" />
          <stop offset="100%" stop-color="#9254e2" />
        </linearGradient>
      </defs>
      <rect width="100%" height="100%" fill="url(#hexagrid)" />
    </svg>
  </div>

  <!-- Header -->
  <header class="py-6 px-8 flex justify-between items-center relative z-10">
    <a href="../Home/main.html" class="text-2xl font-bold text-white">ElevateX</a>
    <a href="../SignUps/login/index.php" class="text-sm flex items-center">
      <span class="mr-2">Already have an account?</span>
      <span class="text-pink-500 flex items-center">Log In
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24"
          stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
        </svg>
      </span>
    </a>
  </header>

  <!-- Main Content -->
  <div class="flex-1 flex items-center justify-center px-4 relative z-10 py-8">
    <!-- Signup Card -->
    <div class="w-full max-w-2xl">
      <div class="bg-gray-900/90 backdrop-blur-sm rounded-xl p-8 shadow-lg border border-gray-800">
        <div class="text-center mb-8">
          <h1 class="text-2xl font-bold mb-2">Investor Registration</h1>
          <p class="text-gray-400">Join ElevateX to discover and invest in promising startups</p>
        </div>

        <?php
        if(isset($_SESSION['error'])) {
            echo '<div class="bg-red-500/10 text-red-500 p-3 rounded-lg mb-4">' . $_SESSION['error'] . '</div>';
            unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])) {
            echo '<div class="bg-green-500/10 text-green-500 p-3 rounded-lg mb-4">' . $_SESSION['success'] . '</div>';
            unset($_SESSION['success']);
        }
        ?>

<form action="../../config/addInvestor.php" method="POST" class="space-y-6">
<!-- Personal Information -->
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
              <label for="fullName" class="block mb-2 font-medium">Full Name</label>
              <input type="text" name="fullName" id="fullName"
                class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500"
                placeholder="John Smith" required />
            </div>

            <div>
              <label for="email" class="block mb-2 font-medium">Email Address</label>
              <input type="email" name="email" id="email"
                class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500"
                placeholder="investor@example.com" required />
            </div>

            <div>
              <label for="password" class="block mb-2 font-medium">Password</label>
              <input type="password" name="password" id="password"
                class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500"
                placeholder="••••••••" required />
            </div>

            <div>
              <label for="confirmPassword" class="block mb-2 font-medium">Confirm Password</label>
              <input type="password" name="confirmPassword" id="confirmPassword"
                class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500"
                placeholder="••••••••" required />
            </div>
          </div>

          <!-- Professional Information -->
          <div class="pt-4 border-t border-gray-800">
            <h2 class="text-xl font-medium mb-4">Professional Information</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <div>
                <label for="organization" class="block mb-2 font-medium">Organization/Firm</label>
                <input type="text" name="organization" id="organization"
                  class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500"
                  placeholder="Venture Capital Firm Name" />
              </div>

              <div>
                <label for="position" class="block mb-2 font-medium">Position/Title</label>
                <input type="text" name="position" id="position"
                  class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500"
                  placeholder="Managing Partner" required />
              </div>

              <div>
                <label for="investorType" class="block mb-2 font-medium">Investor Type</label>
                <select name="investorType" id="investorType"
                  class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500"
                  required>
                  <option value="" disabled selected>Select investor type</option>
                  <option value="angel">Angel Investor</option>
                  <option value="vc">Venture Capitalist</option>
                  <option value="pe">Private Equity</option>
                  <option value="corporate">Corporate Investor</option>
                  <option value="family-office">Family Office</option>
                  <option value="accelerator">Accelerator/Incubator</option>
                  <option value="other">Other</option>
                </select>
              </div>

              <div>
                <label for="linkedIn" class="block mb-2 font-medium">LinkedIn Profile</label>
                <input type="url" name="linkedIn" id="linkedIn"
                  class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500"
                  placeholder="https://linkedin.com/in/yourprofile" required />
              </div>
            </div>
          </div>

          <!-- Investment Preferences -->
          <div class="pt-4 border-t border-gray-800">
            <h2 class="text-xl font-medium mb-4">Investment Preferences</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <div>
                <label for="investmentStage" class="block mb-2 font-medium">Preferred Investment Stage</label>
                <select name="investmentStage" id="investmentStage"
                  class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500"
                  required>
                  <option value="pre-seed">Pre-Seed</option>
                  <option value="seed">Seed</option>
                  <option value="series-a">Series A</option>
                  <option value="series-b">Series B</option>
                  <option value="series-c">Series C or later</option>
                  <option value="growth">Growth Stage</option>
                </select>
              </div>

              <div>
                <label for="investmentRange" class="block mb-2 font-medium">Typical Investment Range</label>
                <select name="investmentRange" id="investmentRange"
                  class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500"
                  required>
                  <option value="" disabled selected>Select range</option>
                  <option value="0-50k">$0 - $50K</option>
                  <option value="50k-250k">$50K - $250K</option>
                  <option value="250k-1m">$250K - $1M</option>
                  <option value="1m-5m">$1M - $5M</option>
                  <option value="5m+">$5M+</option>
                </select>
              </div>

              <div class="md:col-span-2">
                <label for="sectors" class="block mb-2 font-medium">Preferred Sectors</label>
                <select name="sectors" id="sectors"
                  class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500"
                  required>
                  <option value="fintech">FinTech</option>
                  <option value="healthtech">HealthTech</option>
                  <option value="edtech">EdTech</option>
                  <option value="ecommerce">E-Commerce</option>
                  <option value="saas">SaaS</option>
                  <option value="ai-ml">AI/ML</option>
                  <option value="cleantech">CleanTech</option>
                  <option value="biotech">BioTech</option>
                  <option value="blockchain">Blockchain</option>
                  <option value="consumer">Consumer</option>
                  <option value="enterprise">Enterprise</option>
                </select>
              </div>

              <div class="md:col-span-2">
                <label for="investmentThesis" class="block mb-2 font-medium">Investment Thesis</label>
                <textarea name="investmentThesis" id="investmentThesis" rows="3"
                  class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500"
                  placeholder="Briefly describe your investment strategy and what you look for in startups..."
                  required></textarea>
              </div>
            </div>
          </div>

          <!-- Accreditation -->
          <div class="pt-4 border-t border-gray-800">
            <h2 class="text-xl font-medium mb-4">Accreditation</h2>
            <div class="space-y-4">
              <div class="flex items-start">
                <input type="checkbox" name="accredited" id="accredited"
                  class="mt-1 w-4 h-4 bg-gray-800 border-gray-700 rounded focus:ring-pink-500" required />
                <label for="accredited" class="ml-2 text-sm text-gray-300">
                  I confirm that I am an accredited investor as defined by SEC regulations
                </label>
              </div>
            </div>
          </div>

          <!-- Terms and Conditions -->
          <div class="flex items-start pt-4">
            <input type="checkbox" name="terms" id="terms"
              class="mt-1 w-4 h-4 bg-gray-800 border-gray-700 rounded focus:ring-pink-500" required />
            <label for="terms" class="ml-2 text-sm text-gray-300">
              I agree to the <a href="#" class="text-pink-400 hover:underline">Terms of Service</a> and <a href="#"
                class="text-pink-400 hover:underline">Privacy Policy</a>
            </label>
          </div>

          <button type="submit"
            class="w-full py-3 px-4 bg-gradient-to-r from-pink-500 to-purple-600 text-white font-medium rounded-lg flex items-center justify-center">
            Create Investor Account
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd"
                d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                clip-rule="evenodd" />
            </svg>
          </button>
        </form>

        <div class="mt-8 pt-6 border-t border-gray-800">
          <div class="text-center mb-4 text-sm text-gray-400">Or register with</div>
          <div class="grid grid-cols-2 gap-4">
            <button
              class="py-3 px-4 bg-gray-800 hover:bg-gray-700 text-white font-medium rounded-lg flex items-center justify-center">
              <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="currentColor">
                <path
                  d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.911 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" />
              </svg>
              GitHub
            </button>
            <button
              class="py-3 px-4 bg-gray-800 hover:bg-gray-700 text-white font-medium rounded-lg flex items-center justify-center">
              <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="currentColor">
                <path
                  d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"
                  fill="#4285F4" />
                <path
                  d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"
                  fill="#34A853" />
                <path
                  d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"
                  fill="#FBBC05" />
                <path
                  d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"
                  fill="#EA4335" />
                <path d="M1 1h22v22H1z" fill="none" />
              </svg>
              Google
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Corner geometric elements -->
  <div class="fixed top-0 right-0">
    <svg width="250" height="250" viewBox="0 0 250 250" fill="none" xmlns="http://www.w3.org/2000/svg"
      class="opacity-20">
      <path d="M0 0L250 0L250 250C111.929 250 0 138.071 0 0Z" fill="url(#corner-gradient)" />
      <defs>
        <linearGradient id="corner-gradient" x1="0" y1="0" x2="250" y2="250" gradientUnits="userSpaceOnUse">
          <stop offset="0" stop-color="#9254e2" />
          <stop offset="1" stop-color="#ff4b93" />
        </linearGradient>
      </defs>
    </svg>
  </div>

  <div class="fixed bottom-0 left-0">
    <svg width="250" height="250" viewBox="0 0 250 250" fill="none" xmlns="http://www.w3.org/2000/svg"
      class="opacity-20">
      <path d="M250 250L0 250L0 0C138.071 0 250 111.929 250 250Z" fill="url(#corner-gradient-2)" />
      <defs>
        <linearGradient id="corner-gradient-2" x1="250" y1="250" x2="0" y2="0" gradientUnits="userSpaceOnUse">
          <stop offset="0" stop-color="#9254e2" />
          <stop offset="1" stop-color="#ff4b93" />
        </linearGradient>
      </defs>
    </svg>
  </div>

  <script>
    // Client-side validation
    document.querySelector('form').addEventListener('submit', function(e) {
        // Prevent form from submitting initially
        e.preventDefault();

        // Get password fields
        const password = document.getElementById('password').value;
        const confirmPassword = document.getElementById('confirmPassword').value;

        // Basic validation
        if (password !== confirmPassword) {
            alert("Passwords don't match!");
            return;
        }

        // Password strength validation
        if (password.length < 8) {
            alert("Password must be at least 8 characters long!");
            return;
        }

        // Email validation
        const email = document.getElementById('email').value;
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            alert("Please enter a valid email address!");
            return;
        }

        // LinkedIn URL validation
        const linkedin = document.getElementById('linkedIn').value;
        if (!linkedin.includes('linkedin.com')) {
            alert("Please enter a valid LinkedIn URL!");
            return;
        }

        // Check if terms are accepted
        if (!document.getElementById('terms').checked) {
            alert("Please accept the Terms and Conditions!");
            return;
        }

        // Check if accreditation is confirmed
        if (!document.getElementById('accredited').checked) {
            alert("Please confirm your accreditation status!");
            return;
        }

        // If all validations pass, submit the form
        this.submit();
    });

    // Real-time password match checking
    document.getElementById('confirmPassword').addEventListener('input', function() {
        const password = document.getElementById('password').value;
        const confirmPassword = this.value;
        
        if (password !== confirmPassword) {
            this.setCustomValidity("Passwords don't match!");
        } else {
            this.setCustomValidity('');
        }
    });

    // Prevent form submission on Enter key
    document.addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            e.preventDefault();
        }
    });
  </script>
</body>
</html>