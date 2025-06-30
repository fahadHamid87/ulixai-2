<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Forgot Password</title>
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Font Awesome Free -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-vp7msxH2C4vHvT6dnOdzvVRDsKphXg3P0uWIkjkNn4z4lD7K8eUmf0nF7HlEkgLGFbCGLI01HzDEApRt9Zm5ZA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-white font-sans">
  <!-- Header -->
  @include('includes.header')

  <!-- Main Wrapper with vertical spacing -->
  <main class="min-h-[calc(100vh-200px)] flex items-center justify-center px-4 py-16">
    <div class="w-full max-w-md bg-white p-8 space-y-6 border border-gray-200 rounded-xl shadow-lg">
      
      <!-- Fingerprint Icon -->
      <div class="flex justify-center">
        <div class="w-12 h-12 rounded-full bg-gray-100 flex items-center justify-center">
          <i class="fas fa-fingerprint text-2xl text-gray-500"></i>
        </div>
      </div>

      <!-- Heading -->
      <h2 class="text-center text-2xl font-semibold text-gray-900">Forgot password?</h2>
      <p class="text-center text-gray-600">No worries, we’ll send you reset instructions.</p>

      <!-- Email Form -->
      <form action="#" method="POST" class="space-y-4">
        <div>
          <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
          <input type="email" id="email" name="email" required placeholder="Enter your email"
                 class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
        </div>

        <button type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 rounded-md transition">
          Reset password
        </button>
      </form>

      <!-- Back Link -->
      <div class="text-center">
        <a href="/login" class="text-sm text-gray-600 hover:text-blue-600 flex items-center justify-center">
          <i class="fas fa-arrow-left mr-1"></i>
          Back to log in
        </a>
      </div>
    </div>
  </main>

  <!-- Footer -->
   @include('includes.footer')
</body>

</html>