<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My Documents</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-white to-blue-50 min-h-screen font-sans">


 @include('includes.header')
     @include('pages.popup')

  <!-- Page Layout -->
  <div class="flex flex-col lg:flex-row min-h-screen">

    <!-- Sidebar -->
    <div class="w-full lg:w-64">
      @include('dashboard.sidebardash')
    </div>

    <!-- Main Content -->
    <div class="flex-1 p-4 sm:p-6 lg:p-10 flex items-start justify-center">

      <!-- Document Box -->
      <div class="bg-white rounded-3xl shadow-lg p-6 sm:p-8 max-w-3xl w-full space-y-6">
        
        <!-- Title -->
        <h2 class="text-blue-900 font-bold text-lg sm:text-xl">MY DOCUMENTS</h2>
        <p class="text-sm text-blue-600">Take a photo of yourself, preferably on a white background</p>

        <!-- Document Options -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

          <!-- Profile Picture -->
          <div class="border-2 border-blue-400 rounded-xl p-6 text-center relative">
            <span class="font-semibold text-sm text-black block">
              <a href="/uploadpicture">My Profile Picture</a>
            </span>
            <span class="absolute top-2 right-3 text-blue-600 font-bold text-lg">✔</span>
          </div>

          <!-- Identity Documents -->
          <div class="border-2 border-red-500 rounded-xl p-6 text-center">
            <span class="font-semibold text-sm text-black block">
              <a href="/uploaddocument">Identity Documents</a>
            </span>
          </div>

        </div>
      </div>
    </div>
  </div>
@include('dashboard.bottomnavbar')
</body>
</html>