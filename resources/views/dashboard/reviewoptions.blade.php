<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Service Not Carried Out</title>
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
      <div class="bg-white rounded-2xl shadow-xl p-6 sm:p-8 w-full max-w-2xl text-center space-y-6">

        <h2 class="text-blue-900 font-bold text-lg uppercase mb-2">Select the reason</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          
          <!-- Option 1 -->
          <a href="/reviewend" class="block bg-blue-500 hover:bg-blue-600 text-white font-semibold py-5 px-4 rounded-xl shadow transition duration-300 w-full text-sm sm:text-base">
            THE SERVICE PROVIDER DID NOT SHOW UP
          </a>

          <!-- Option 2 -->
          <a href="/reviewend" class="block bg-blue-500 hover:bg-blue-600 text-white font-semibold py-5 px-4 rounded-xl shadow transition duration-300 w-full text-sm sm:text-base">
            THE SERVICE PROVIDER CAME AND LEFT WITHOUT DOING THE JOB
          </a>

        </div>
      </div>
    </main>

  </div>
@include('dashboard.bottomnavbar')
</body>
</html>