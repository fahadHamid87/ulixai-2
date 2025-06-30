<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Thank You</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-white to-blue-50 min-h-screen font-sans">

  <!-- Header -->
 @include('includes.header')
     @include('pages.popup')

  <!-- Breadcrumbs -->


  <!-- Layout Wrapper -->
  <div class="flex flex-col lg:flex-row min-h-screen">

    <!-- Sidebar -->
    <aside class=" lg:block lg:w-64 bg-white shadow">

  @include('dashboard.sidebardash')
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-4 sm:p-6 lg:p-10 flex items-center justify-center">
      <div class="bg-white rounded-2xl shadow-xl px-6 py-12 w-full max-w-xl text-center space-y-4">
        <h1 class="text-xl sm:text-2xl md:text-3xl font-extrabold text-blue-900 tracking-wide">
          THANK YOU FOR YOUR INFORMATION
        </h1>
        <p class="text-gray-600 text-sm sm:text-base">
          We have received your input and will process it shortly.
        </p>
      </div>
    </main>

  </div>
@include('dashboard.bottomnavbar')
</body>
</html>