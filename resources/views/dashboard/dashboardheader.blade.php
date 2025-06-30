<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zelpy Dashboard Header</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        html {
  scroll-behavior: smooth;
  overflow-x: hidden;
}


* {
  box-sizing: border-box;
}


     

        html, body {
  overflow-x: hidden;
  max-width: 100%;
}

        /* Custom styles for the minion character */
        .minion-body {
            background: linear-gradient(45deg, #FFD700, #FFA500);
        }
        .minion-eye {
            background: radial-gradient(circle, #fff 30%, #ddd 70%);
        }
        .minion-goggle {
            background: linear-gradient(45deg, #333, #666);
        }
    </style>
</head>
<body class="bg-gray-50 overflow-x-hidden">
  <header class="bg-white shadow-sm border-b border-gray-200">
    <div class="w-full max-w-6xl mx-auto px-4 overflow-hidden">
      <div class="flex flex-wrap items-center justify-between h-16">
        <!-- Logo Section -->
        <div class="flex items-center space-x-3 overflow-hidden">
          <!-- Minion Character -->
         <div class="relative overflow-visible">
            <div class="w-12 h-12 minion-body rounded-full border-2 border-yellow-400 relative overflow-hidden">
              <!-- Minion Goggle -->
              <div class="absolute top-1 left-[50%] -translate-x-1/2 w-8 h-6 minion-goggle rounded-full border border-gray-700">
                <!-- Eye -->
                <div class="absolute top-0.5 left-[50%] -translate-x-1/2 w-6 h-5 minion-eye rounded-full border border-gray-300">
                  <!-- Pupil -->
                  <div class="absolute top-1 left-1/2 -translate-x-1/2 w-2 h-2 bg-black rounded-full"></div>
                </div>
              </div>
              <!-- Mouth -->
              <div class="absolute bottom-2 left-1/2 -translate-x-1/2 w-4 h-2 bg-black rounded-full opacity-70"></div>
            </div>
            <!-- Water drops -->
            <div class="absolute -bottom-1 -left-1 w-3 h-3 bg-blue-400 rounded-full opacity-80"></div>
            <div class="absolute -bottom-2 left-2 w-2 h-2 bg-blue-400 rounded-full opacity-60"></div>
            <div class="absolute -bottom-1 right-0 w-2 h-2 bg-blue-400 rounded-full opacity-70"></div>
          </div>

          <!-- Zelpy Text -->
          <div class="text-2xl font-bold text-gray-800">
            Zelpy
          </div>
        </div>

        <!-- Center Buttons -->
        <div class="flex items-center space-x-4">
          <button class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-full text-sm font-medium transition-colors duration-200">
            I NEED A SERVICE
          </button>
          <button class="border-2 border-blue-500 text-blue-500 hover:bg-blue-50 px-6 py-2 rounded-full text-sm font-medium transition-colors duration-200">
            I OFFER MY SERVICES
          </button>
        </div>

        <!-- Profile Section -->
        <div class="flex items-center">
          <!-- Menu Icon -->
          <button class="p-2 rounded-lg hover:bg-gray-100 transition-colors duration-200">
            <div class="flex flex-col space-y-1">
              <div class="w-5 h-0.5 bg-gray-600"></div>
              <div class="w-5 h-0.5 bg-gray-600"></div>
              <div class="w-5 h-0.5 bg-gray-600"></div>
            </div>
          </button>

          <!-- Profile Avatar -->
          <div class="ml-3 w-10 h-10 bg-yellow-400 rounded-full border-2 border-yellow-500 flex items-center justify-center">
            <div class="w-6 h-6 bg-yellow-600 rounded-full relative">
              <!-- Simple avatar face -->
              <div class="absolute top-1.5 left-1 w-1 h-1 bg-white rounded-full"></div>
              <div class="absolute top-1.5 right-1 w-1 h-1 bg-white rounded-full"></div>
              <div class="absolute bottom-1 left-1/2 -translate-x-1/2 w-2 h-1 bg-white rounded-full"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
</body>

</html>