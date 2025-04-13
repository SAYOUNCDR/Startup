<?php
session_start();
include_once '../../config/db.php';
if (isset($_POST['login'])) {
  $email = $_POST["email"];
  $password = $_POST["password"];
  $query = "SELECT * FROM founders WHERE email = '$email'";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row['password'])) {
      $_SESSION['founder_id'] = $row['id'];
      $_SESSION['founder_name'] = $row['full_name'];
      $_SESSION['founder_email'] = $row['email'];
      $_SESSION['founder_startup'] = $row['startup_name'];
      $_SESSION['category'] = $row['category'];
      $_SESSION['founding_date'] = $row['founding_date'];
      $_SESSION['company_size'] = $row['company_size'];
      $_SESSION['description'] = $row['description'];
      $_SESSION['funding_stage'] = $row['funding_stage'];
      $_SESSION['funding_raised'] = $row['funding_raised'];
      $_SESSION['currently_seeking'] = $row['currently_seeking'];

      header("Location: ../../Dashboards/Founder-startup.php");
      exit();
    } else {
      echo "<script>alert('Invalid password. Please try again.');</script>";
    }
  } else {
    // Check if the email exists in the investors table
    $query = "SELECT * FROM investors WHERE email = '$email'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
      $row = mysqli_fetch_assoc($result);
      if (password_verify($password, $row['password'])) {
        $_SESSION['investor_id'] = $row['id'];
        $_SESSION['investor_name'] = $row['full_name'];
        $_SESSION['investor_email'] = $row['email'];
        $_SESSION['organization'] = $row['organization'];
        $_SESSION['title'] = $row['title'];
        $_SESSION['investor_type'] = $row['investor_type'];
        $_SESSION['linkedin'] = $row['linkedin'];
        $_SESSION['investment_stage'] = $row['investment_stage'];
        $_SESSION['investment_range'] = $row['investment_range'];
        $_SESSION['sectors'] = $row['sectors'];
        $_SESSION['thesis'] = $row['thesis'];
        $_SESSION['is_accredited'] = $row['is_accredited'];

        header("Location: ../../Dashboards/investors.php");
        exit();
      } else {
        echo "<script>alert('Invalid password. Please try again.');</script>";
      }
    } else {
      // If the email is not found in either table, search in the collaborators table
      $query = "SELECT * FROM collaborators WHERE email = '$email'";
      $result = mysqli_query($conn, $query);

      if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
          $_SESSION['collaborator_id'] = $row['id'];
          $_SESSION['collaborator_first_name'] = $row['first_name'];
          $_SESSION['collaborator_last_name'] = $row['last_name'];
          $_SESSION['collaborator_email'] = $row['email'];
          $_SESSION['title'] = $row['title'];
          $_SESSION['company'] = $row['company'];
          $_SESSION['expertise'] = $row['expertise'];
          $_SESSION['experience'] = $row['experience'];
          $_SESSION['bio'] = $row['bio'];
          $_SESSION['linkedin'] = $row['linkedin'];
          // $_SESSION['preferences'] = $row['preferences'];
          header("Location: ../../Dashboards/contributors.php");
          exit();
        } else {
          echo "<script>alert('Invalid password. Please try again.');</script>";
        }
      } else {
        echo "<script>alert('Email not found. Please check your email or register.');</script>";
      }
    }
  }
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ElevateX - Login</title>
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

<body class="bg-black text-white min-h-screen flex flex-col relative overflow-hidden">
  <!-- Geometric Background Elements -->
  <div class="absolute inset-0 overflow-hidden z-0">
    <!-- Left side angular shape -->
    <div class="absolute -left-20 top-0 h-full w-64 bg-purple-900/20 skew-x-12 transform"></div>

    <!-- Right side angular shape -->
    <div class="absolute -right-20 top-0 h-full w-64 bg-pink-900/20 -skew-x-12 transform"></div>

    <!-- Hexagonal grid pattern (simplified with diagonal lines) -->
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
    <a href="#" class="text-2xl font-bold text-white">ElevateX</a>
    <a href="#" class="text-sm flex items-center">
      <span class="mr-2">Don't have an account?</span>
      <span class="text-pink-500 flex items-center">Join Now
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
        </svg>
      </span>
    </a>
  </header>

  <!-- Main Content -->
  <div class="flex-1 flex items-center justify-center px-4 relative z-10">
    <!-- Login Card -->
    <div class="w-full max-w-md">
      <div class="bg-gray-900/90 backdrop-blur-sm rounded-xl p-8 shadow-lg border border-gray-800">
        <div class="text-center mb-8">
          <h1 class="text-2xl font-bold mb-2">Log in to ElevateX</h1>
          <p class="text-gray-400">Access your startup ecosystem dashboard</p>
        </div>

        <form id="loginForm" action="" method="POST">
          <div class="mb-6">
            <label for="email" class="block mb-2 font-medium">Email Address</label>
            <input
              type="email"
              id="email"
              name="email"
              class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500"
              placeholder="name@company.com"
              required />
          </div>

          <div class="mb-6">
            <div class="flex justify-between mb-2">
              <label for="password" class="font-medium">Password</label>
              <a href="#" class="text-sm text-pink-400 hover:text-pink-300">Forgot password?</a>
            </div>
            <input
              type="password"
              id="password"
              name="password"
              class="w-full px-4 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500"
              placeholder="••••••••"
              required />

            <input type="checkbox" onclick="togglePassword()"> Show Password<br>
          </div>

          <div class="flex items-center mb-6">
            <input
              type="checkbox"
              id="remember"
              class="w-4 h-4 bg-gray-800 border-gray-700 rounded focus:ring-pink-500" />
            <label for="remember" class="ml-2 text-sm text-gray-300">
              Keep me signed in
            </label>
          </div>

          <button
            type="submit" name="login"
            class="w-full py-3 px-4 bg-gradient-to-r from-pink-500 to-purple-600 text-white font-medium rounded-lg flex items-center justify-center">
            Log in
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
          </button>
        </form>

        <div class="mt-8 pt-6 border-t border-gray-800">
          <div class="text-center mb-4 text-sm text-gray-400">Or continue with</div>
          <div class="grid grid-cols-2 gap-4">
            <button class="py-3 px-4 bg-gray-800 hover:bg-gray-700 text-white font-medium rounded-lg flex items-center justify-center">
              <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="currentColor">
                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
              </svg>
              GitHub
            </button>
            <button class="py-3 px-4 bg-gray-800 hover:bg-gray-700 text-white font-medium rounded-lg flex items-center justify-center">
              <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="currentColor">
                <path d="M12 2.04c-5.5 0-10 4.49-10 10.02 0 5 3.66 9.15 8.44 9.9v-7H7.9v-2.9h2.54V9.85c0-2.51 1.49-3.89 3.78-3.89 1.09 0 2.23.19 2.23.19v2.47h-1.26c-1.24 0-1.63.77-1.63 1.56v1.88h2.78l-.45 2.9h-2.33v7a10 10 0 0 0 8.44-9.9c0-5.53-4.5-10.02-10-10.02z" />
              </svg>
              Facebook
            </button>
          </div>
        </div>
      </div>

      <!-- Additional decorative element -->
      <div class="absolute -bottom-4 -right-4 w-32 h-32 bg-gradient-to-br from-pink-500 to-purple-600 rounded-full blur-xl opacity-20"></div>
    </div>
  </div>

  <!-- Corner geometric elements -->
  <div class="fixed top-0 right-0">
    <svg width="250" height="250" viewBox="0 0 250 250" fill="none" xmlns="http://www.w3.org/2000/svg" class="opacity-20">
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
    <svg width="250" height="250" viewBox="0 0 250 250" fill="none" xmlns="http://www.w3.org/2000/svg" class="opacity-20">
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
    function togglePassword() {
      var passwordField = document.getElementById("password");
      // Check the checkbox state
      if (passwordField.type === "password") {
        passwordField.type = "text"; // Show the password
      } else {
        passwordField.type = "password"; // Hide the password
      }
    }
  </script>
</body>

</html>