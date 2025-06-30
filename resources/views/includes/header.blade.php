<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
  <!-- CDN (Free version) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <script src="https://cdn.tailwindcss.com"></script>
  <title>ULIXAI - Modern Navbar</title>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          animation: {
            'fade-in': 'fadeIn 0.3s ease-out',
            'slide-down': 'slideDown 0.3s ease-out',
            'bounce-subtle': 'bounceSubtle 0.6s ease-out',
            'glow': 'glow 2s ease-in-out infinite alternate',
          },
          keyframes: {
            fadeIn: {
              '0%': { opacity: '0', transform: 'translateY(-10px)' },
              '100%': { opacity: '1', transform: 'translateY(0)' }
            },
            slideDown: {
              '0%': { opacity: '0', transform: 'translateY(-20px)' },
              '100%': { opacity: '1', transform: 'translateY(0)' }
            },
            bounceSubtle: {
              '0%, 100%': { transform: 'translateY(0)' },
              '50%': { transform: 'translateY(-5px)' }
            },
            glow: {
              '0%': { boxShadow: '0 0 20px rgba(59, 130, 246, 0.5)' },
              '100%': { boxShadow: '0 0 30px rgba(59, 130, 246, 0.8)' }
            }
          }
        }
      }
    }
  </script>
  <style>
     html, body {
  height: 100%;
  width: 100%;
  margin: 0;
  padding: 0;
}

@font-face {
  font-family: 'Inter';
  src: url('font/Inter-Regular.woff2') format('woff2');
  font-weight: 400;
  font-style: normal;
}


body {
  font-family: 'Inter', sans-serif;
}


    .glass-effect {
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(20px);
      -webkit-backdrop-filter: blur(20px);
      border: 1px solid rgba(255, 255, 255, 0.2);
    }
    
    .gradient-text {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }
    
    .hover-glow:hover {
      box-shadow: 0 10px 25px rgba(59, 130, 246, 0.3);
    }
    
    .nav-button {
      position: relative;
      overflow: hidden;
    }
    
    .nav-button::before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
      transition: left 0.5s;
    }
    
    .nav-button:hover::before {
      left: 100%;
    }

    .glass-effect {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
    }
    
    .nav-button {
        position: relative;
        overflow: hidden;
    }
    
    .hover-glow:hover {
        box-shadow: 0 0 20px rgba(59, 130, 246, 0.5);
    }
    
    .animate-glow {
        animation: glow 2s ease-in-out infinite alternate;
    }
    
    @keyframes glow {
        from { box-shadow: 0 0 10px rgba(239, 68, 68, 0.5); }
        to { box-shadow: 0 0 20px rgba(239, 68, 68, 0.8); }
    }
    
    .animate-slide-down {
        animation: slideDown 0.3s ease-out;
    }
    
    @keyframes slideDown {
        from { opacity: 0; transform: translateY(-10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
   
    .mobile-menu-enter {
        transform: translateX(100%);
        opacity: 0;
    }
    
    .mobile-menu-enter-active {
        transform: translateX(0);
        opacity: 1;
        transition: all 0.3s ease-in-out;
    }
    
    .mobile-menu-exit {
        transform: translateX(0);
        opacity: 1;
    }
    
    .mobile-menu-exit-active {
        transform: translateX(100%);
        opacity: 0;
        transition: all 0.3s ease-in-out;
    }
 
    .hamburger-line {
        transition: all 0.3s ease;
    }
    
    .hamburger-active .line1 {
        transform: rotate(45deg) translate(6px, 6px);
    }
    
    .hamburger-active .line2 {
        opacity: 0;
    }
    
    .hamburger-active .line3 {
        transform: rotate(-45deg) translate(6px, -6px);
    }
  </style>
  <!-- <style>
  #searchPopup {
    display: flex !important;
    justify-content: center;
    align-items: center;
  }

  @media (max-width: 768px) {
    #searchPopup {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      z-index: 9999;
      background-color: rgba(0, 0, 0, 0.6);
    }
  }
</style> -->

</head>
<body class="min-h-screen bg-white">

<!-- Navbar -->
<nav class="top-0 z-50 border-b border-white/20 shadow-xl">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between h-20 items-center">

      <!-- Logo -->
   <div class="hidden lg:flex items-center space-x-3 group">
  <div class="relative">
    <div class="rounded-xl blur opacity-30 group-hover:opacity-50 transition duration-300"></div>
  </div>
  <div class="flex items-center h-full">
  <a href="/index.php">
    <img src="/images/headerlogo.png" alt="Logo" class="w-20 h-auto max-h-12 object-contain" />
  </a>
</div>

</div>

      <!-- Desktop Buttons -->
     
<div class="hidden lg:flex items-center space-x-3 group">
  <button onclick="openSearchPopup()" class="nav-button bg-gradient-to-r from-blue-600 to-blue-700 text-white px-6 py-3 rounded-full text-sm font-semibold hover:from-blue-700 hover:to-blue-800 transition-all duration-300 hover-glow transform hover:scale-105 shadow-lg">
  <span class="flex items-center space-x-2">
    <i class="fas fa-lock text-white-600 text-xl"></i>
    <span>Request Help</span>
  </span>
</button>








<div id="travailleursProtectionSocialeSubSubcategoriesPopup" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4">
  <div class="bg-white rounded-2xl shadow-2xl w-full max-w-4xl max-h-[90vh] overflow-y-auto">

    <div class="sticky top-0 bg-white rounded-t-2xl border-b border-gray-100 p-6 flex items-center justify-between">
      <div class="flex items-center">
        <button onclick="goBackToTravailleursProtectionSocialeSubcategories()" class="mr-4 text-gray-400 hover:text-gray-600 transition-colors" aria-label="Back">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <polyline points="15,18 9,12 15,6"></polyline>
          </svg>
        </button>
        <h2 class="text-xl font-semibold text-gray-800">Travailleurs & Freelances - Protection sociale</h2>
      </div>
      <button onclick="closeAllPopups()" class="text-gray-400 hover:text-gray-600 transition-colors" aria-label="Close">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <line x1="18" y1="6" x2="6" y2="18"></line>
          <line x1="6" y1="6" x2="18" y2="18"></line>
        </svg>
      </button>
    </div>

    <!-- Sub-Subcategories Grid -->
    <div class="p-6 pt-2">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

        <div class="category-card bg-white rounded-xl p-6 border border-gray-100 shadow-sm hover:shadow-md cursor-pointer flex items-center group">
          <div class="w-14 h-14 bg-yellow-100 rounded-full flex items-center justify-center mr-4 group-hover:scale-110 transition-transform"></div>
          <div class="flex-grow font-semibold text-gray-800">
           <a href="requestForHelp.php"> Autres protections sociales </a></div>
          <div class="text-gray-400 group-hover:text-gray-600 transition-colors">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <polyline points="9,18 15,12 9,6"></polyline>
            </svg>
          </div>
        </div>

        <div class="category-card bg-white rounded-xl p-6 border border-gray-100 shadow-sm hover:shadow-md cursor-pointer flex items-center group">
          <div class="w-14 h-14 bg-yellow-200 rounded-full flex items-center justify-center mr-4 group-hover:scale-110 transition-transform"></div>
          <div class="flex-grow font-semibold text-gray-800">
           <a href="requestForHelp.php"> Je cherche une assurance invalidité freelance </a></div>
          <div class="text-gray-400 group-hover:text-gray-600 transition-colors">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <polyline points="9,18 15,12 9,6"></polyline>
            </svg>
          </div>
        </div>

       
        <div class="category-card bg-white rounded-xl p-6 border border-gray-100 shadow-sm hover:shadow-md cursor-pointer flex items-center group">
          <div class="w-14 h-14 bg-peach-200 rounded-full flex items-center justify-center mr-4 group-hover:scale-110 transition-transform"></div>
          <div class="flex-grow font-semibold text-gray-800">
           <a href="requestForHelp.php"> Je veux une assurance retraite internationale </a></div>
          <div class="text-gray-400 group-hover:text-gray-600 transition-colors">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <polyline points="9,18 15,12 9,6"></polyline>
            </svg>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>


<!-- Travailleurs Trouver un emploi ou une mission Sub-Subcategories Popup -->
<div id="travailleursTrouverEmploiSubSubcategoriesPopup" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4">
  <div class="bg-white rounded-2xl shadow-2xl w-full max-w-4xl max-h-[90vh] overflow-y-auto">
    <!-- Header -->
    <div class="sticky top-0 bg-white rounded-t-2xl border-b border-gray-100 p-6 flex items-center justify-between">
      <div class="flex items-center">
        <button onclick="goBackToTravailleursTrouverEmploiSubcategories()" class="mr-4 text-gray-400 hover:text-gray-600 transition-colors" aria-label="Back">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <polyline points="15,18 9,12 15,6"></polyline>
          </svg>
        </button>
        <h2 class="text-xl font-semibold text-gray-800">Travailleurs & Freelances - Trouver un emploi ou une mission</h2>
      </div>
      <button onclick="closeAllPopups()" class="text-gray-400 hover:text-gray-600 transition-colors" aria-label="Close">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <line x1="18" y1="6" x2="6" y2="18"></line>
          <line x1="6" y1="6" x2="18" y2="18"></line>
        </svg>
      </button>
    </div>

    <!-- Sub-Subcategories Grid -->
    <div class="p-6 pt-2">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

        <div class="category-card bg-white rounded-xl p-6 border border-gray-100 shadow-sm hover:shadow-md cursor-pointer flex items-center group">
          <div class="w-14 h-14 bg-green-200 rounded-full flex items-center justify-center mr-4 group-hover:scale-110 transition-transform"></div>
          <div class="flex-grow font-semibold text-gray-800">
           <a href="requestForHelp.php"> Autres recherches d’emploi ou missions </a></div>
          <div class="text-gray-400 group-hover:text-gray-600 transition-colors">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <polyline points="9,18 15,12 9,6"></polyline>
            </svg>
          </div>
        </div>

        <div class="category-card bg-white rounded-xl p-6 border border-gray-100 shadow-sm hover:shadow-md cursor-pointer flex items-center group">
          <div class="w-14 h-14 bg-yellow-100 rounded-full flex items-center justify-center mr-4 group-hover:scale-110 transition-transform"></div>
          <div class="flex-grow font-semibold text-gray-800">
           <a href="requestForHelp.php"> Je cherche des agences de recrutement </a></div>
          <div class="text-gray-400 group-hover:text-gray-600 transition-colors">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <polyline points="9,18 15,12 9,6"></polyline>
            </svg>
          </div>
        </div>

    

        <div class="category-card bg-white rounded-xl p-6 border border-gray-100 shadow-sm hover:shadow-md cursor-pointer flex items-center group">
          <div class="w-14 h-14 bg-purple-200 rounded-full flex items-center justify-center mr-4 group-hover:scale-110 transition-transform"></div>
          <div class="flex-grow font-semibold text-gray-800">
           <a href="requestForHelp.php"> Je veux trouver des missions freelance en ligne </a></div>
          <div class="text-gray-400 group-hover:text-gray-600 transition-colors">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <polyline points="9,18 15,12 9,6"></polyline>
            </svg>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

<!-- Travailleurs Visa et autorisations de travail Sub-Subcategories Popup -->
<div id="travailleursVisaAutorisationsSubSubcategoriesPopup" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4">
  <div class="bg-white rounded-2xl shadow-2xl w-full max-w-4xl max-h-[90vh] overflow-y-auto">
    <!-- Header -->
    <div class="sticky top-0 bg-white rounded-t-2xl border-b border-gray-100 p-6 flex items-center justify-between">
      <div class="flex items-center">
        <button onclick="goBackToTravailleursVisaAutorisationsSubcategories()" class="mr-4 text-gray-400 hover:text-gray-600 transition-colors" aria-label="Back">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <polyline points="15,18 9,12 15,6"></polyline>
          </svg>
        </button>
        <h2 class="text-xl font-semibold text-gray-800">Travailleurs & Freelances - Visa et autorisations de travail</h2>
      </div>
      <button onclick="closeAllPopups()" class="text-gray-400 hover:text-gray-600 transition-colors" aria-label="Close">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <line x1="18" y1="6" x2="6" y2="18"></line>
          <line x1="6" y1="6" x2="18" y2="18"></line>
        </svg>
      </button>
    </div>

    <!-- Sub-Subcategories Grid -->
    <div class="p-6 pt-2">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

        <div class="category-card bg-white rounded-xl p-6 border border-gray-100 shadow-sm hover:shadow-md cursor-pointer flex items-center group">
          <div class="w-14 h-14 bg-purple-300 rounded-full flex items-center justify-center mr-4 group-hover:scale-110 transition-transform"></div>
          <div class="flex-grow font-semibold text-gray-800">
           <a href="requestForHelp.php"> Autres démarches de visas et permis </a></div>
          <div class="text-gray-400 group-hover:text-gray-600 transition-colors">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <polyline points="9,18 15,12 9,6"></polyline>
            </svg>
          </div>
        </div>


        <div class="category-card bg-white rounded-xl p-6 border border-gray-100 shadow-sm hover:shadow-md cursor-pointer flex items-center group">
          <div class="w-14 h-14 bg-cyan-200 rounded-full flex items-center justify-center mr-4 group-hover:scale-110 transition-transform"></div>
          <div class="flex-grow font-semibold text-gray-800">
           <a href="requestForHelp.php"> Je veux obtenir une carte professionnelle locale</a></div>
          <div class="text-gray-400 group-hover:text-gray-600 transition-colors">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <polyline points="9,18 15,12 9,6"></polyline>
            </svg>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>






        
<!-- SOS Button -->
<a href="/sos" 
   
   class="nav-button bg-gradient-to-r from-red-500 to-red-600 text-white px-6 py-3 rounded-full text-sm font-semibold hover:from-red-600 hover:to-red-700 transition-all duration-300 animate-glow transform hover:scale-105 shadow-lg">
  <span class="flex items-center space-x-2">
    	<i class="fas fa-phone-alt text-white-600 text-xl"></i>
    <span>S.O.S</span>
  </span>
</a>

<!-- Popup Modal -->
<div id="sos-popup" class="fixed inset-0 bg-black/50 z-50 flex items-center justify-center min-h-screen px-4 hidden">
  <div class="bg-white rounded-xl p-6 shadow-2xl max-w-md w-full text-center">
    <h2 class="text-xl font-bold text-gray-800 mb-3">Coming Soon</h2>
    <p class="text-gray-600 italic mb-4 leading-relaxed">
      Service available in the coming weeks.<br>
    </p>
    <button onclick="closeComingSoonPopup()" 
            class="px-4 py-2 bg-red-500 hover:bg-red-600 text-white font-semibold rounded-md transition-all duration-200">
      Close
    </button>
  </div>
</div>

        <a href="/serviceProvider" class="nav-button border-2 border-gradient-to-r from-purple-500 to-blue-500 bg-gradient-to-r from-purple-50 to-blue-50 text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-blue-600 px-6 py-3 rounded-full text-sm font-semibold hover:bg-gradient-to-r hover:from-purple-100 hover:to-blue-100 transition-all duration-300 transform hover:scale-105 shadow-lg border-blue-300">
          <span class="flex items-center space-x-2 text-blue-600">
            <!-- Simple Icon -->
<i class="fas fa-file-signature text-blue-600 text-2xl"></i>
            <span>Become a Provider</span>
          </span>
        </a>
      </div>

      <!-- Desktop Right Side -->
      <div class="hidden lg:flex items-center space-x-6">
        <!-- Language Dropdown -->
        <div class="relative group">
          <button id="desktopLangBtn" type="button" class="flex items-center space-x-2 px-3 py-2 rounded-lg hover:bg-white/50 transition-all duration-300 focus:outline-none">
            <div class="w-6 h-6 rounded-full overflow-hidden border-2 border-white shadow-sm">
              <img src="https://flagcdn.com/24x18/fr.png" alt="FR" class="w-full h-full object-cover" />
            </div>
            <svg class="w-4 h-4 text-gray-600 group-hover:text-blue-600 transition-colors" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
          </button>
          <ul id="desktopLangMenu" class="absolute right-0 hidden bg-white/95 backdrop-blur-lg shadow-2xl border border-white/20 rounded-xl mt-2 w-40 z-20 animate-slide-down overflow-hidden">
            <li class="hover:bg-blue-50/80 px-4 py-3 cursor-pointer flex items-center space-x-3 transition-colors border-b border-gray-100/50">
              <img src="https://flagcdn.com/20x15/fr.png" alt="FR" class="w-5 h-4 rounded-sm" />
              <span class="text-sm font-medium text-gray-700">Français</span>
            </li>
            <li class="hover:bg-blue-50/80 px-4 py-3 cursor-pointer flex items-center space-x-3 transition-colors border-b border-gray-100/50">
              <img src="https://flagcdn.com/20x15/us.png" alt="EN" class="w-5 h-4 rounded-sm" />
              <span class="text-sm font-medium text-gray-700">English</span>
            </li>
            <li class="hover:bg-blue-50/80 px-4 py-3 cursor-pointer flex items-center space-x-3 transition-colors">
              <img src="https://flagcdn.com/20x15/de.png" alt="DE" class="w-5 h-4 rounded-sm" />
              <span class="text-sm font-medium text-gray-700">Deutsch</span>
            </li>
          </ul>
        </div>

 <!-- Auth Buttons -->
<div class="flex items-center space-x-3">
  <a href="/login" class="flex items-center space-x-2 px-4 py-2 text-gray-600 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-all duration-300 group">
   <i class="fas fa-user mr-2 text-lg text-blue-600"></i>
    <span class="font-medium text-blue-600"> Log in</span>
  </a>

  <button id="signupBtn" class="bg-blue-600 text-white px-5 py-2 rounded-lg font-semibold hover:from-emerald-600 hover:to-teal-700 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105 flex items-center space-x-2">
    <i class="fas fa-user-plus mr-2 text-lg "></i>
    <span>Sign Up</span>
  </button>
</div>

<!-- Popup Overlay -->
<div id="signupPopup" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 p-6 hidden z-50 min-h-screen">
  <div class="bg-white rounded-2xl p-8 max-w-3xl w-full relative shadow-lg max-h-[90vh] overflow-auto">
    <button id="closePopup" class="absolute top-4 right-4 text-gray-500 hover:text-gray-800 text-2xl font-bold">&times;</button>

   <!-- Step 1 -->
<div id="step1" class="space-y-6">
  <!-- Blue Card -->
  <a href="/signup" class="block bg-blue-700 text-white rounded-lg p-6 text-center shadow-lg hover:bg-blue-800 transition-colors">
    <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto mb-3 w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
      <!-- <path d="M12 2v8m0  18h8"></path> -->
    </svg>
    <h3 class="font-bold text-lg mb-1">I Need Help</h3>
    <p class="text-sm font-semibold">Need urgent help in another country?</p>
  </a>

  <!-- White Card triggers step 2 -->
  <button id="whiteCardBtn" class="block border border-blue-700 rounded-lg p-6 text-center text-blue-700 hover:bg-blue-50 transition-colors shadow-sm w-full">
    <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto mb-3 w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
      <circle cx="12" cy="12" r="10" />
      <path d="M8 12l2 2 4-4" />
    </svg>
    <h3 class="font-bold text-lg mb-1">Help Expats & Travelers</h3>
    <p class="text-sm font-semibold">Earn income by helping foreigners where you are</p>
  </button>
</div>

    <!-- Step 2 -->
    <div id="step2" class="hidden">
       <h2 class="font-bold mb-6 text-xl flex items-center space-x-2">
    <span>🌍</span>
    <span>What is your native language?</span>
  </h2>

  <div class="grid grid-cols-2 gap-4 mb-6">
    <button class="lang-btn bg-white text-blue-700 border border-blue-700 rounded-lg py-3 flex items-center justify-center space-x-2 hover:bg-blue-50 transition">
      <span>🇬🇧</span><span>Anglais</span>
    </button>
    <button class="lang-btn bg-white text-blue-700 border border-blue-700 rounded-lg py-3 flex items-center justify-center space-x-2 hover:bg-blue-50 transition">
      <span>🇫🇷</span><span>Français</span>
    </button>
    <button class="lang-btn bg-white text-blue-700 border border-blue-700 rounded-lg py-3 flex items-center justify-center space-x-2 hover:bg-blue-50 transition">
      <span>🇪🇸</span><span>Espagnol</span>
    </button>
    <button class="lang-btn bg-white text-blue-700 border border-blue-700 rounded-lg py-3 flex items-center justify-center space-x-2 hover:bg-blue-50 transition">
      <span>🇵🇹</span><span>Portugais</span>
    </button>
    <button class="lang-btn bg-white text-blue-700 border border-blue-700 rounded-lg py-3 flex items-center justify-center space-x-2 hover:bg-blue-50 transition">
      <span>🇩🇪</span><span>Allemand</span>
    </button>
    <button class="lang-btn bg-white text-blue-700 border border-blue-700 rounded-lg py-3 flex items-center justify-center space-x-2 hover:bg-blue-50 transition">
      <span>🇮🇹</span><span>Italien</span>
    </button>
    <button class="lang-btn bg-white text-blue-700 border border-blue-700 rounded-lg py-3 flex items-center justify-center space-x-2 hover:bg-blue-50 transition">
      <span>🇸🇦</span><span>Arabe</span>
    </button>
    <button class="lang-btn bg-white text-blue-700 border border-blue-700 rounded-lg py-3 flex items-center justify-center space-x-2 hover:bg-blue-50 transition">
      <span>🇨🇳</span><span>Chinois</span>
    </button>
    <button class="lang-btn bg-white text-blue-700 border border-blue-700 rounded-lg py-3 flex items-center justify-center space-x-2 hover:bg-blue-50 transition">
      <span>🇯🇵</span><span>Japonais</span>
    </button>
    <button class="lang-btn bg-white text-blue-700 border border-blue-700 rounded-lg py-3 flex items-center justify-center space-x-2 hover:bg-blue-50 transition">
      <span>🇰🇷</span><span>Coréen</span>
    </button>
    <button class="lang-btn bg-white text-blue-700 border border-blue-700 rounded-lg py-3 flex items-center justify-center space-x-2 hover:bg-blue-50 transition">
      <span>🇮🇳</span><span>Hindi</span>
    </button>
    <button class="lang-btn bg-white text-blue-700 border border-blue-700 rounded-lg py-3 flex items-center justify-center space-x-2 hover:bg-blue-50 transition">
      <span>🇹🇷</span><span>Turc</span>
    </button>
  </div>

      <div class="flex justify-between items-center">
        <button id="backToStep1" class="text-blue-700 hover:underline">Back</button>
        <button id="nextStep2" class="bg-blue-700 text-white px-4 py-2 rounded-lg">Next</button>
      </div>
    </div>

    <!-- Step 3 -->
    <div id="step3" class="hidden">
      <label class="block text-2xl font-semibold text-blue-800 mb-4 text-center">What Language do you Speak ?</label>
      <div class="grid grid-cols-2 gap-3 max-w-lg mx-auto">
        <button type="button" class="lang-btn bg-blue-600 text-white  rounded-lg py-2 px-4 flex items-center space-x-2">
          <img src="https://flagcdn.com/us.svg" alt="English" class="w-5 h-3" />
          <span>English</span>
        </button>
        <button type="button" class="lang-btn bg-blue-600 text-white rounded-lg py-2 px-4 flex items-center space-x-2">
          <img src="https://flagcdn.com/fr.svg" alt="French" class="w-5 h-3" />
          <span>French</span>
        </button>
        <button type="button" class="lang-btn bg-blue-600 text-white rounded-lg py-2 px-4 flex items-center space-x-2">
          <img src="https://flagcdn.com/es.svg" alt="Spanish" class="w-5 h-3" />
          <span>Spanish</span>
        </button>
        <button type="button" class="lang-btn bg-blue-600 text-white rounded-lg py-2 px-4 flex items-center space-x-2">
          <img src="https://flagcdn.com/pt.svg" alt="Portuguese" class="w-5 h-3" />
          <span>Portuguese</span>
        </button>
        <button type="button" class="lang-btn bg-blue-600 text-white rounded-lg py-2 px-4 flex items-center space-x-2">
          <img src="https://flagcdn.com/de.svg" alt="German" class="w-5 h-3" />
          <span>German</span>
        </button>
        <button type="button" class="lang-btn bg-blue-600 text-white rounded-lg py-2 px-4 flex items-center space-x-2">
          <img src="https://flagcdn.com/it.svg" alt="Italian" class="w-5 h-3" />
          <span>Italian</span>
        </button>
        <button type="button" class="lang-btn bg-blue-600 text-white rounded-lg py-2 px-4 flex items-center space-x-2">
          <img src="https://flagcdn.com/sa.svg" alt="Arabic" class="w-5 h-3" />
          <span>Arabic</span>
        </button>
        <button type="button" class="lang-btn bg-blue-600 text-white rounded-lg py-2 px-4 flex items-center space-x-2">
          <img src="https://flagcdn.com/jp.svg" alt="Japanese" class="w-5 h-3" />
          <span>Japanese</span>
        </button>
        <button type="button" class="lang-btn bg-blue-600 text-white rounded-lg py-2 px-4 flex items-center space-x-2">
          <img src="https://flagcdn.com/kr.svg" alt="Korean" class="w-5 h-3" />
          <span>Korean</span>
        </button>
        <button type="button" class="lang-btn bg-blue-600 text-white rounded-lg py-2 px-4 flex items-center space-x-2">
          <img src="https://flagcdn.com/in.svg" alt="Hindi" class="w-5 h-3" />
          <span>Hindi</span>
        </button>
        <button type="button" class="lang-btn bg-blue-600 text-white rounded-lg py-2 px-4 flex items-center space-x-2">
          <img src="https://flagcdn.com/tr.svg" alt="Turkish" class="w-5 h-3" />
          <span>Turkish</span>
        </button>
      </div>
       <div class="flex justify-between items-center">
        <button id="backToStep2" class="text-blue-700 hover:underline">Back</button>
        <button id="nextStep3" class="bg-blue-600 text-white px-4 py-2 rounded-lg">Next</button>
      </div>
    </div>

    <!-- Step 4 -->
    <div id="step4" class="hidden">
      <h2 class="font-bold mb-6 text-xl text-blue-900 text-center">What kind of help do you provide?</h2>
      <div class="space-y-4 mb-6">
        <!-- Row 1 -->
        <div class="flex justify-center gap-6">
          <button class="help-icon bg-orange-500 rounded-full w-16 h-16 flex items-center justify-center text-white text-2xl hover:scale-105 transition">👨‍👩‍👧‍👦</button>
          <button class="help-icon bg-blue-500 rounded-full w-16 h-16 flex items-center justify-center text-white text-2xl hover:scale-105 transition">🌍</button>
          <button class="help-icon bg-green-500 rounded-full w-16 h-16 flex items-center justify-center text-white text-2xl hover:scale-105 transition">🧑‍⚕️</button>
        </div>

        <!-- Row 2 -->
        <div class="flex justify-center gap-6">
          <button class="help-icon bg-gray-400 rounded-full w-16 h-16 flex items-center justify-center text-white text-2xl hover:scale-105 transition">💼</button>
          <button class="help-icon bg-red-500 rounded-full w-16 h-16 flex items-center justify-center text-white text-2xl hover:scale-105 transition">🚲</button>
          <button class="help-icon bg-purple-500 rounded-full w-16 h-16 flex items-center justify-center text-white text-2xl hover:scale-105 transition">💻</button>
        </div>

        <!-- Row 3 -->
        <div class="flex justify-center gap-6">
          <button class="help-icon bg-yellow-500 rounded-full w-16 h-16 flex items-center justify-center text-white text-2xl hover:scale-105 transition">👷</button>
          <button class="help-icon bg-sky-500 rounded-full w-16 h-16 flex items-center justify-center text-white text-2xl hover:scale-105 transition">🚴</button>
          <button class="help-icon bg-teal-500 rounded-full w-16 h-16 flex items-center justify-center text-white text-2xl hover:scale-105 transition">💡</button>
        </div>
      </div>
      
      <div class="flex justify-between items-center">
        <button id="backToStep3" class="text-blue-700 hover:underline">Back</button>
        <button id="nextStep4" class="bg-blue-600 text-white px-4 py-2 rounded-lg">Next</button>
      </div>
    </div>

    <!-- Step 5 -->
    <div id="step5" class="hidden">
      <h2 class="font-bold mb-6 text-xl text-blue-900">I LEAVE</h2>
      <input type="text" placeholder="Your address (geolocation)"
             class="w-full border border-blue-400 rounded-full px-5 py-3 text-blue-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-600 mb-6" />
      <div class="flex justify-between items-center">
        <button id="backToStep4" class="text-blue-700 hover:underline">Back</button>
        <button id="nextStep5" class="bg-blue-600 text-white px-4 py-2 rounded-lg">Next</button>
      </div>
    </div>

 <!-- Step 6 -->
<div id="step6" class="hidden">
  <h2 class="font-bold mb-6 text-xl text-blue-900">WHICH COUNTRIES DO YOU OPERATE IN?</h2>

  <textarea
    id="countriesInput"
    name="countries"
    rows="4"
    placeholder="Type all countries you operate in (e.g. United States, United Kingdom, France...)"
    class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none mb-2"
  ></textarea>

  <p id="countryError" class="text-red-600 text-sm mb-4 hidden">Please enter at least 3 countries.</p>

  <div class="flex justify-between items-center">
    <button id="backToStep5" class="text-blue-700 hover:underline">Back</button>
    <button id="nextStep6" class="bg-blue-600 text-white px-4 py-2 rounded-lg">Next</button>
  </div>
</div>
 
    <!-- Step 7: Special Status -->
    <div id="step7" class="hidden">
      <h2 class="font-bold mb-4 text-xl text-blue-700">DO YOU HAVE A SPECIAL STATUS?</h2>
   <!-- Note: Not obligatory but better for you -->
      <div class="w-full mb-4 rounded-lg bg-yellow-100 border-l-4 border-yellow-400 py-2 px-4 text-center">
        <span class="text-brown-700" style="color:#8B5C00;font-weight:500;">Not obligatory but better for you</span>
      </div>
     <div class="space-y-3 mb-6 max-h-56 overflow-auto">
        <div class="special-status-item flex items-center justify-between border border-blue-400 rounded-full px-4 py-2">
          <div class="flex items-center space-x-3">
            <div class="w-5 h-5 rounded-full bg-pink-400"></div>
            <span>Expatriates for 2 to 5 years</span>
          </div>
          <div class="flex space-x-2">
            <button class="toggle-btn bg-white text-blue-600 border border-blue-600 rounded-full px-4 py-1 text-sm hover:bg-blue-50">Yes</button>
            <button class="toggle-btn bg-white text-blue-600 border border-blue-600 rounded-full px-4 py-1 text-sm hover:bg-blue-50">No</button>
          </div>
        </div>

        <div class="special-status-item flex items-center justify-between border border-blue-400 rounded-full px-4 py-2">
          <div class="flex items-center space-x-3">
            <div class="w-5 h-5 rounded-full bg-blue-600"></div>
            <span>Expatriates for 6 to 10 years</span>
          </div>
          <div class="flex space-x-2">
            <button class="toggle-btn bg-white text-blue-600 border border-blue-600 rounded-full px-4 py-1 text-sm hover:bg-blue-50">Yes</button>
            <button class="toggle-btn bg-white text-blue-600 border border-blue-600 rounded-full px-4 py-1 text-sm hover:bg-blue-50">No</button>
          </div>
        </div>

        <div class="special-status-item flex items-center justify-between border border-blue-400 rounded-full px-4 py-2">
          <div class="flex items-center space-x-3">
            <div class="w-5 h-5 rounded-full bg-green-400"></div>
            <span>Expatriates for more than 10 years</span>
          </div>
          <div class="flex space-x-2">
            <button class="toggle-btn bg-white text-blue-600 border border-blue-600 rounded-full px-4 py-1 text-sm hover:bg-blue-50">Yes</button>
            <button class="toggle-btn bg-white text-blue-600 border border-blue-600 rounded-full px-4 py-1 text-sm hover:bg-blue-50">No</button>
          </div>
        </div>

        <div class="special-status-item flex items-center justify-between border border-blue-400 rounded-full px-4 py-2">
          <div class="flex items-center space-x-3">
            <div class="w-5 h-5 rounded-full bg-pink-400"></div>
            <span>Lawyer</span>
          </div>
          <div class="flex space-x-2">
            <button class="toggle-btn bg-white text-blue-600 border border-blue-600 rounded-full px-4 py-1 text-sm hover:bg-blue-50">Yes</button>
            <button class="toggle-btn bg-white text-blue-600 border border-blue-600 rounded-full px-4 py-1 text-sm hover:bg-blue-50">No</button>
          </div>
        </div>

        <div class="special-status-item flex items-center justify-between border border-blue-400 rounded-full px-4 py-2">
          <div class="flex items-center space-x-3">
            <div class="w-5 h-5 rounded-full bg-pink-400"></div>
            <span>Legal advice</span>
          </div>
          <div class="flex space-x-2">
            <button class="toggle-btn bg-white text-blue-600 border border-blue-600 rounded-full px-4 py-1 text-sm hover:bg-blue-50">Yes</button>
            <button class="toggle-btn bg-white text-blue-600 border border-blue-600 rounded-full px-4 py-1 text-sm hover:bg-blue-50">No</button>
          </div>
        </div>

        <div class="special-status-item flex items-center justify-between border border-blue-400 rounded-full px-4 py-2">
          <div class="flex items-center space-x-3">
            <div class="w-5 h-5 rounded-full bg-blue-600"></div>
            <span>Insurer</span>
          </div>
          <div class="flex space-x-2">
            <button class="toggle-btn bg-white text-blue-600 border border-blue-600 rounded-full px-4 py-1 text-sm hover:bg-blue-50">Yes</button>
            <button class="toggle-btn bg-white text-blue-600 border border-blue-600 rounded-full px-4 py-1 text-sm hover:bg-blue-50">No</button>
          </div>
        </div>

        <div class="special-status-item flex items-center justify-between border border-blue-400 rounded-full px-4 py-2">
          <div class="flex items-center space-x-3">
            <div class="w-5 h-5 rounded-full bg-blue-600"></div>
            <span>Real estate agent</span>
          </div>
          <div class="flex space-x-2">
            <button class="toggle-btn bg-white text-blue-600 border border-blue-600 rounded-full px-4 py-1 text-sm hover:bg-blue-50">Yes</button>
            <button class="toggle-btn bg-white text-blue-600 border border-blue-600 rounded-full px-4 py-1 text-sm hover:bg-blue-50">No</button>
          </div>
        </div>

        <div class="special-status-item flex items-center justify-between border border-blue-400 rounded-full px-4 py-2">
          <div class="flex items-center space-x-3">
            <div class="w-5 h-5 rounded-full bg-pink-400"></div>
            <span>Translator</span>
          </div>
          <div class="flex space-x-2">
            <button class="toggle-btn bg-white text-blue-600 border border-blue-600 rounded-full px-4 py-1 text-sm hover:bg-blue-50">Yes</button>
            <button class="toggle-btn bg-white text-blue-600 border border-blue-600 rounded-full px-4 py-1 text-sm hover:bg-blue-50">No</button>
          </div>
        </div>

        <div class="special-status-item flex items-center justify-between border border-blue-400 rounded-full px-4 py-2">
          <div class="flex items-center space-x-3">
            <div class="w-5 h-5 rounded-full bg-pink-400"></div>
            <span>Guide</span>
          </div>
          <div class="flex space-x-2">
            <button class="toggle-btn bg-white text-blue-600 border border-blue-600 rounded-full px-4 py-1 text-sm hover:bg-blue-50">Yes</button>
            <button class="toggle-btn bg-white text-blue-600 border border-blue-600 rounded-full px-4 py-1 text-sm hover:bg-blue-50">No</button>
          </div>
        </div>

        <div class="special-status-item flex items-center justify-between border border-blue-400 rounded-full px-4 py-2">
          <div class="flex items-center space-x-3">
            <div class="w-5 h-5 rounded-full bg-pink-400"></div>
            <span>Language teacher</span>
          </div>
          <div class="flex space-x-2">
            <button class="toggle-btn bg-white text-blue-600 border border-blue-600 rounded-full px-4 py-1 text-sm hover:bg-blue-50">Yes</button>
            <button class="toggle-btn bg-white text-blue-600 border border-blue-600 rounded-full px-4 py-1 text-sm hover:bg-blue-50">No</button>
          </div>
        </div>
      </div>
      
      <div class="flex justify-between items-center">
        <button id="backToStep6" class="text-blue-700 hover:underline">Back</button>
        <button id="nextStep7" class="bg-blue-600 text-white px-4 py-2 rounded-lg">Next</button>
      </div>
    </div>
   
    <!-- Step 8: Speak Online or In Person -->
    <div id="step8" class="hidden">
      <h2 class="font-bold mb-6 text-xl text-blue-900">WOULD YOU LIKE TO SPEAK ONLINE OR IN PERSON?</h2>
<!-- Note: Not obligatory but better for you -->
      <div class="w-full mb-4 rounded-lg bg-yellow-100 border-l-4 border-yellow-400 py-2 px-4 text-center">
        <span class="text-brown-700" style="color:#8B5C00;font-weight:500;">You can Choose both</span>
      </div>
      <div class="space-y-4 mb-6">
        <!-- Online Row -->
        <div class="flex items-center justify-between border border-blue-400 rounded-full px-4 py-2">
          <span class="text-blue-900 font-medium">Online</span>
          <div class="flex space-x-1 speak-toggle">
            <button class="speak-btn rounded-full px-4 py-1 text-sm border border-green-500 text-green-600 bg-white hover:bg-green-50">Yes</button>
            <button class="speak-btn rounded-full px-4 py-1 text-sm border border-green-500 text-green-600 bg-white hover:bg-green-50">No</button>
          </div>
        </div>

        <!-- In Person Row -->
        <div class="flex items-center justify-between border border-blue-400 rounded-full px-4 py-2">
          <span class="text-blue-900 font-medium">In person</span>
          <div class="flex space-x-1 speak-toggle">
            <button class="speak-btn rounded-full px-4 py-1 text-sm border border-green-500 text-green-600 bg-white hover:bg-green-50">Yes</button>
            <button class="speak-btn rounded-full px-4 py-1 text-sm border border-green-500 text-green-600 bg-white hover:bg-green-50">No</button>
          </div>
        </div>
      </div>

      <!-- Navigation -->
      <div class="flex justify-between items-center">
        <button id="backToStep7" class="text-blue-700 hover:underline">Back</button>
        <button id="nextStep8" class="bg-blue-600 text-white px-4 py-2 rounded-lg">Next</button>
      </div>
    </div>

    <!-- Step 9: Profile Description -->
    <div id="step9" class="hidden">
      <h2 class="font-bold mb-6 text-xl text-blue-900 text-center">Tell us about yourself</h2>
      <!-- Note: Not obligatory but better for you -->
      <div class="w-full mb-4 rounded-lg bg-yellow-100 border-l-4 border-yellow-400 py-2 px-4 text-center">
        <span class="text-brown-700" style="color:#8B5C00;font-weight:500;">what you fill out here will be on your profile sheet and important to get more missions </span>
      </div>
      <div class="mb-6">
        <label class="block text-blue-900 font-medium mb-2">Profile Description</label>
        <textarea id="profileDescription" 
                  placeholder="Write a brief description about yourself, your experience, and how you can help others..."
                  class="w-full border border-blue-400 rounded-lg px-4 py-3 text-blue-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-600 resize-none"
                  rows="6"
                  maxlength="500"></textarea>
        <div class="flex justify-between items-center mt-2">
          <span class="text-sm text-gray-500">Maximum 500 characters</span>
          <span class="text-sm text-gray-500"><span id="charCount">0</span>/500</span>
        </div>
      </div>

      <!-- Navigation -->
      <div class="flex justify-between items-center">
        <button id="backToStep8" class="text-blue-700 hover:underline">Back</button>
        <button id="nextStep9" class="bg-blue-600 text-white px-4 py-2 rounded-lg">Next</button>
      </div>
    </div>

   <!-- Step 10: Profile Picture -->
<div id="step10" class="hidden">
  <h2 class="font-bold mb-6 text-xl text-blue-900 text-center">Add your profile picture</h2>

  <div class="flex flex-col items-center mb-6">
    <!-- Profile Picture Preview -->
    <div class="w-32 h-32 rounded-full border-4 border-blue-400 flex items-center justify-center mb-4 overflow-hidden bg-gray-100 relative">
      <img id="profilePreview" src="" alt="Profile Preview" class="w-full h-full object-cover hidden">
      <canvas id="photoCanvas" class="hidden absolute w-full h-full object-cover"></canvas>
      <div id="profilePlaceholder" class="text-blue-400 text-center">
        <i class="fas fa-user text-4xl mb-2"></i>
        <p class="text-sm">No image</p>
      </div>
    </div>

    <!-- Upload & Camera Buttons -->
    <div class="flex gap-4">
      <label for="profileUpload" class="bg-blue-600 text-white px-6 py-2 rounded-lg cursor-pointer hover:bg-blue-700 transition-colors">
        <i class="fas fa-camera mr-2"></i>Choose Photo
      </label>
      <button onclick="openCamera()" class="bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700 transition-colors">
        <i class="fas fa-video mr-2"></i>Take Photo
      </button>
    </div>
    <input type="file" id="profileUpload" accept="image/*" class="hidden">

    <!-- Camera Stream -->
    <div id="cameraSection" class="hidden mt-4 text-center">
      <video id="videoStream" autoplay class="w-32 h-32 rounded-full border-4 border-green-400 mx-auto mb-2"></video>
      <button onclick="capturePhoto()" class="bg-red-600 text-white px-4 py-1 rounded hover:bg-red-700">Capture</button>
    </div>

    <!-- Note: Not obligatory but better for you -->
      <div class="w-full mb-4 rounded-lg bg-yellow-100 border-l-4 border-yellow-400 py-2 px-4 text-center">
        <span class="text-brown-700" style="color:#8B5C00;font-weight:500;"><strong>Verified photos</strong>  These photos are very important because they are visible to members <br>
         <strong>Conditions to follow : </strong> <br>
         Alone in the photo <br>
         No filter <br>
         face uncovered <br>
         face photo only 
      </span>
      </div>
  </div>

  <!-- Navigation -->
  <div class="flex justify-between items-center">
    <button id="backToStep9" class="text-blue-700 hover:underline">Back</button>
    <button id="nextStep10" class="bg-blue-500 hover:bg-blue-600 text-white font-medium px-6 py-2 rounded-full">Next</button>
  </div>
</div>

<script>
  const profileUpload = document.getElementById('profileUpload');
  const profilePreview = document.getElementById('profilePreview');
  const profilePlaceholder = document.getElementById('profilePlaceholder');
  const photoCanvas = document.getElementById('photoCanvas');
  const videoStream = document.getElementById('videoStream');
  const cameraSection = document.getElementById('cameraSection');

  profileUpload.addEventListener('change', (e) => {
    const file = e.target.files[0];
    if (!file) return;

    const reader = new FileReader();
    reader.onload = function (event) {
      profilePreview.src = event.target.result;
      profilePreview.classList.remove('hidden');
      photoCanvas.classList.add('hidden');
      profilePlaceholder.classList.add('hidden');
    };
    reader.readAsDataURL(file);
  });

  function openCamera() {
    cameraSection.classList.remove('hidden');
    navigator.mediaDevices.getUserMedia({ video: true })
      .then((stream) => {
        videoStream.srcObject = stream;
      })
      .catch((err) => {
        alert('Unable to access camera');
        console.error(err);
      });
  }

  function capturePhoto() {
    const context = photoCanvas.getContext('2d');
    const video = videoStream;
    photoCanvas.width = video.videoWidth;
    photoCanvas.height = video.videoHeight;
    context.drawImage(video, 0, 0, video.videoWidth, video.videoHeight);

    photoCanvas.classList.remove('hidden');
    profilePreview.classList.add('hidden');
    profilePlaceholder.classList.add('hidden');

    // Stop the video stream
    const stream = video.srcObject;
    const tracks = stream.getTracks();
    tracks.forEach(track => track.stop());
    video.srcObject = null;
    cameraSection.classList.add('hidden');
  }
</script>


    <!-- Progress Bar -->
    <!-- <div class="mt-6 bg-gray-200 rounded-full h-2">
      <div id="progressBar" class="bg-blue-600 h-2 rounded-full transition-all duration-300" style="width: 10%"></div>
    </div> -->
<!-- Step 11: My Identity Documents -->
<div id="step11" class="hidden space-y-6">
  <h2 class="text-blue-900 font-bold text-xl mb-2">MY IDENTITY DOCUMENTS</h2>
  <p class="text-sm text-blue-600 mb-6">Click on the document you are going to send us</p>

  <div class="space-y-4">
    <button onclick="openModal()" class="bg-blue-500 hover:bg-blue-600 text-white text-sm font-medium w-full py-3 rounded-xl transition">
      European identity card
    </button>
    <button onclick="openPassportModal()" class="bg-blue-500 hover:bg-blue-600 text-white text-sm font-medium w-full py-3 rounded-xl transition">
      Passport
    </button>
    <button onclick="openLicenseModal()" class="bg-blue-500 hover:bg-blue-600 text-white text-sm font-medium w-full py-3 rounded-xl transition">
      Driver’s license
    </button>
  </div>

  <div class="flex justify-between items-center mt-6">
    <button id="backToStep10" class="text-blue-600 font-medium"> Back</button>
    <button id="nextStep11" class="bg-blue-500 hover:bg-blue-600 text-white font-medium px-6 py-2 rounded-full">Next</button>
  </div>
  <div class="mt-6">
    <div class="w-full h-2 rounded-full overflow-hidden">
      <!-- <div id="progressBar" class="h-full bg-blue-500 rounded-full" style="width: 84%;"></div> -->
    </div>
    <!-- <p id="progressText" class="text-sm text-gray-500 text-center mt-1">Step 11 of 16</p> -->
  </div>
</div>

<!-- Step 12: First and Last Name -->
<div id="step12" class="hidden space-y-6">
  <h2 class="text-blue-900 font-bold text-xl">WHAT’S YOUR FIRST NAME AND SURNAME?</h2>
  <p class="text-sm text-blue-600">Describe your project in a few words</p>
  <div class="flex gap-4">
    <input type="text" placeholder="Your first name" class="w-full border border-gray-300 rounded-full px-4 py-2" />
    <input type="text" placeholder="Your surname" class="w-full border border-gray-300 rounded-full px-4 py-2" />
  </div>
  <div class="flex justify-between items-center">
    <button id="backToStep11" class="text-blue-600 font-medium"> Back</button>
    <button id="nextStep12" class="bg-blue-500 hover:bg-blue-600 text-white font-medium px-6 py-2 rounded-full">Next</button>
  </div>
  <div class="w-full h-2 rounded-full overflow-hidden">
    <!-- <div id="progressBar" class="h-full bg-blue-500 rounded-full" style="width: 92%;"></div> -->
  </div>
  <!-- <p id="progressText" class="text-sm text-gray-500 text-center">Step 12 of 16</p> -->
</div>

<!-- Step 13: Email -->
<div id="step13" class="hidden space-y-6">
  <h2 class="text-blue-900 font-bold text-xl">WHAT’S YOUR E-MAIL?</h2>
  <input type="email" placeholder="E-mail" class="w-full border border-gray-300 rounded-full px-4 py-2" />
  <div class="flex justify-between items-center">
    <button id="backToStep12" class="text-blue-600 font-medium"> Back</button>
    <button id="nextStep13" class="bg-blue-500 hover:bg-blue-600 text-white font-medium px-6 py-2 rounded-full">Next</button>
  </div>
  <div class="w-full h-2  rounded-full overflow-hidden">
    <!-- <div id="progressBar" class="h-full bg-blue-500 rounded-full" style="width: 100%;"></div> -->
  </div>
  <!-- <p id="progressText" class="text-sm text-gray-500 text-center">Step 13 of 16</p> -->
</div>

<!-- Step 14: Email Code Verification -->
<div id="step14" class="hidden space-y-6">
  <h2 class="text-blue-900 font-bold text-xl">YOU SHOULD HAVE RECEIVED A CODE BY MAIL...</h2>
  <p class="text-sm text-blue-500">Remember to check your spams or junk folders</p>
  <input type="text" placeholder="Enter the code received by email HERE" class="w-full border border-blue-300 rounded-full px-4 py-2" />
  <div class="flex justify-between items-center">
    <button id="backToStep13" class="text-blue-600 font-medium"> Back</button>
    <button id="nextStep14" class="bg-blue-500 hover:bg-blue-600 text-white font-medium px-6 py-2 rounded-full">Next</button>
  </div>
  <div class="w-full h-2  rounded-full overflow-hidden">
    <!-- <div id="progressBar" class="h-full bg-blue-500 rounded-full" style="width: 92%;"></div> -->
  </div>
  <!-- <p id="progressText" class="text-sm text-gray-500 text-center">Step 14 of 16</p> -->
</div>

<!-- Step 15: WhatsApp Number -->
<div id="step15" class="hidden space-y-6">
  <h2 class="text-blue-900 font-bold text-xl">WHAT'S YOUR NUMBER ?</h2>
  <p class="text-sm text-blue-500">Your number will allow to communicate with the service requester who approves you</p>
  <input type="text" placeholder="Number phone" class="w-full border border-blue-300 rounded-full px-4 py-2" />
  <div class="flex justify-between items-center">
    <button id="backToStep14" class="text-blue-600 font-medium"> Back</button>
    <button id="nextStep15" class="bg-blue-500 hover:bg-blue-600 text-white font-medium px-6 py-2 rounded-full">Next</button>
  </div>
  <div class="w-full h-2  rounded-full overflow-hidden">
    <!-- <div id="progressBar" class="h-full bg-blue-500 rounded-full" style="width: 96%;"></div> -->
  </div>
  <!-- <p id="progressText" class="text-sm text-gray-500 text-center">Step 15 of 16</p> -->
</div>

<!-- Step 16: Success Confirmation -->
<div id="step16" class="hidden space-y-6 text-center">
  <h2 class="text-blue-900 font-extrabold text-2xl">YOUR ACCOUNT PRESTATAIRE IS CREATE</h2>
  <p class="text-blue-800 font-semibold text-md">YOU ARE OFFICIALLY A ULYSSE</p>
  <p class="text-gray-600">Go check out the service requests in your area now</p>

  <button class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-full">
   <a href="/ongoingservices"> CURRENT SERVICE REQUESTS </a></button>

  <p class="text-gray-600 text-sm mt-2">You can boost your profile to have more jobs to do</p>

  <button class="border-2 border-blue-600 text-blue-600 hover:bg-blue-50 font-bold px-6 py-2 rounded-full">
    I BOOTS MY PROFILE TO BE AMONG THE FIRST SERVICE PROVIDERS
  </button>
</div>

</div>




      <!-- Mobile Controls -->
      <div class="lg:hidden flex items-center space-x-2">
        <div class="w-8 h-8 rounded-full overflow-hidden border-2 border-white shadow-sm">
          <img src="https://flagcdn.com/24x18/fr.png" alt="FR" class="w-full h-full object-cover" />
        </div>
       <button id="menu-toggle" class="p-2 rounded-lg bg-sky-300 hover:bg-sky-400 transition-colors shadow">

          <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>
    </div>
  </div>

<!-- Mobile Header -->
<div class="lg:hidden fixed top-0 left-0 w-full bg-white z-50 flex items-center justify-between  py-2 shadow-md">
  <!-- Logo -->
<a href="/index.php">
  <img src="/images/headerlogo.png" alt="ULIXAI Logo" class="w-10 h-10 object-contain" />
</a>


  <!-- Request Help Button -->
   <button id="mobileSearchButton" onclick="openSearchPopup()" class="nav-button bg-gradient-to-r from-blue-600 to-blue-700 text-white px-6 py-3 rounded-full text-sm font-semibold hover:from-blue-700 hover:to-blue-800 transition-all duration-300 hover-glow transform hover:scale-105 shadow-lg">
  <span class="flex items-center space-x-2">
    <i class="fas fa-lock text-white-600 text-xl"></i>
    <span>Request Help</span>
  </span>
</button>

  <!-- Hamburger -->
<button id="menu-toggle-top" class="p-2 rounded-lg hover:bg-white/50 transition-colors">
  <!-- Hamburger Icon -->
  <svg class="icon-hamburger w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
  </svg>
  <!-- X Icon -->
  <svg class="icon-close w-6 h-6 hidden" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
  </svg>
</button>

</div>

<!-- Mobile Dropdown Menu -->
<div id="mobile-menu" class="lg:hidden fixed top-[64px] left-0 w-full bg-sky-100 z-40 shadow-md hidden px-6 py-4 space-y-4 animate-slide-down">

  <!-- Close (X) Button for mobile menu -->
  <div class="flex justify-end mb-2">
    <button id="mobileMenuCloseBtn" class="p-2 rounded-full hover:bg-blue-200 focus:outline-none" aria-label="Close menu">
      <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
      </svg>
    </button>
  </div>

  <a href="/serviceProvider" class="block text-gray-800 text-base font-semibold hover:text-blue-600">Become a provider</a>
  <a href="/login" class="block text-gray-800 text-base font-semibold hover:text-blue-600">Log in</a>
  <a href="/signup"class="block text-gray-800 text-base font-semibold hover:text-blue-600">Sign up</a>
  <a href="/affiliate" class="block text-gray-800 text-base font-semibold hover:text-blue-600">Affiliate Program</a> <!-- New link added here -->


  <!-- Language Dropdown -->
  <div class="relative">
    <button id="languageToggle" class="w-full flex justify-between items-center border border-gray-300 rounded-lg px-4 py-2 text-gray-800">
      <span>Language</span>
      <img src="https://flagcdn.com/24x18/fr.png" class="ml-2 w-5 h-4 object-cover" alt="Lang" />
    </button>
    <ul id="languageMenu" class="absolute mt-2 w-full bg-white border border-gray-300 rounded-lg shadow-md hidden">
      <li class="px-4 py-2 hover:bg-blue-50 cursor-pointer flex items-center gap-2">
        <img src="https://flagcdn.com/24x18/fr.png" class="w-5 h-4" />
        Français
      </li>
      <li class="px-4 py-2 hover:bg-blue-50 cursor-pointer flex items-center gap-2">
        <img src="https://flagcdn.com/24x18/us.png" class="w-5 h-4" />
        English
      </li>
      <li class="px-4 py-2 hover:bg-blue-50 cursor-pointer flex items-center gap-2">
        <img src="https://flagcdn.com/24x18/de.png" class="w-5 h-4" />
        Deutsch
      </li>
    </ul>
  </div>

  <!-- SOS Button -->
  <a href="/sos"  class="block w-full text-center bg-red-600 text-white font-semibold py-2 rounded-full shadow hover:bg-red-700 transition">
    <i class="fas fa-phone-alt mr-1"></i> S.O.S
  </a>
</div>

</nav>
<script>
function showComingSoonPopup(e) {
  e.preventDefault();
  document.getElementById('sos-popup').classList.remove('hidden');
}
function closeComingSoonPopup() {
  document.getElementById('sos-popup').classList.add('hidden');
}

document.addEventListener('DOMContentLoaded', function () {
  const popup = document.getElementById('signupPopup');
  const closePopup = document.getElementById('closePopup');
  const signupBtn = document.getElementById('signupBtn');
  const progressBar = document.getElementById('progressBar');
  const progressText = document.getElementById('progressText');

  const steps = Array.from({ length: 16 }, (_, i) => document.getElementById('step' + (i + 1)));
  let currentStep = 0;

  function showStep(stepIndex) {
    steps.forEach((step, i) => step?.classList.toggle('hidden', i !== stepIndex));
    currentStep = stepIndex;
    const progress = ((stepIndex + 1) / steps.length) * 100;
    progressBar.style.width = progress + '%';
    progressText.textContent = `Step ${stepIndex + 1} of ${steps.length}`;
  }

  function validateStep(index) {
    switch(index) {
      case 1: // Step 2 - language selected
        return !!document.querySelector('#step2 .lang-btn.bg-blue-900');
      case 2: // Step 3 - multiple selected
        return document.querySelectorAll('#step3 .lang-btn.bg-blue-900').length > 0;
      case 3: // Step 4 - help icon selected
        return document.querySelectorAll('#step4 .help-icon.ring-4').length > 0;
      case 6: // Step 7 - one toggle selected in each group
        return Array.from(document.querySelectorAll('#step7 .special-status-item')).every(group =>
          group.querySelector('.toggle-btn.bg-blue-600')
        );
      case 7: // Step 8 - yes/no selected in each group
        return Array.from(document.querySelectorAll('#step8 .speak-toggle')).every(group =>
          group.querySelector('.bg-green-500')
        );
      case 8: // Step 9 - text filled
        return document.getElementById('profileDescription').value.trim().length > 0;
      case 9: // Step 10 - image uploaded
        return document.getElementById('profileUpload').files.length > 0;
      default:
        return true;
    }
  }

 

  signupBtn?.addEventListener('click', () => {
    popup.classList.remove('hidden');
    showStep(0);
  });

  closePopup?.addEventListener('click', () => {
    popup.classList.add('hidden');
  });

  popup.addEventListener('click', (e) => {
    if (e.target === popup) popup.classList.add('hidden');
  });

  const stepNavigation = [
    ['whiteCardBtn', 1], ['backToStep1', 0], ['nextStep2', 2], ['backToStep2', 1],
    ['nextStep3', 3], ['backToStep3', 2], ['nextStep4', 4], ['backToStep4', 3],
    ['nextStep5', 5], ['backToStep5', 4], ['nextStep6', 6], ['backToStep6', 5],
    ['nextStep7', 7], ['backToStep7', 6], ['nextStep8', 8], ['backToStep8', 7],
    ['nextStep9', 9], ['backToStep9', 8], ['nextStep10', 10], ['backToStep10', 9],
    ['nextStep11', 11], ['backToStep11', 10], ['nextStep12', 12], ['backToStep12', 11],
    ['nextStep13', 13], ['backToStep13', 12], ['nextStep14', 14], ['backToStep14', 13],
    ['nextStep15', 15], ['backToStep15', 14]
  ];

  stepNavigation.forEach(([btnId, stepIndex]) => {
    document.getElementById(btnId)?.addEventListener('click', () => {
      if (stepIndex > currentStep && !validateStep(currentStep)) {
        alert("Please complete this step before continuing.");
        return;
      }
      showStep(stepIndex);
    });
  });

  document.getElementById('completeSignup')?.addEventListener('click', () => {
    if (!validateStep(currentStep)) {
      alert("Please complete this step before finishing.");
      return;
    }
    showStep(15); // Final step
  });

  // Step 2: Language selection
  document.querySelectorAll('#step2 .lang-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      document.querySelectorAll('#step2 .lang-btn').forEach(b => {
        b.classList.remove('bg-blue-900', 'text-white');
        b.classList.add('bg-white', 'text-blue-700');
      });
      btn.classList.remove('bg-white', 'text-blue-700');
      btn.classList.add('bg-blue-900', 'text-white');
    });
  });

  // Step 3: Multiple selection
  document.querySelectorAll('#step3 .lang-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      btn.classList.toggle('bg-blue-900');
      btn.classList.toggle('text-white');
      btn.classList.toggle('bg-blue-600');
    });
  });

  // Step 4: Help icon toggle
  document.querySelectorAll('#step4 .help-icon').forEach(btn => {
    btn.addEventListener('click', () => {
      btn.classList.toggle('ring-4');
      btn.classList.toggle('ring-white');
      btn.classList.toggle('ring-offset-2');
    });
  });

  // Step 7: Toggle logic
  document.querySelectorAll('#step7 .special-status-item').forEach(group => {
    const buttons = group.querySelectorAll('.toggle-btn');
    buttons.forEach(button => {
      button.addEventListener('click', () => {
        buttons.forEach(btn => {
          btn.classList.remove('bg-blue-600', 'text-white');
          btn.classList.add('bg-white', 'text-blue-600');
        });
        button.classList.remove('bg-white', 'text-blue-600');
        button.classList.add('bg-blue-600', 'text-white');
      });
    });
  });

  // Step 8: Speak toggle
  document.querySelectorAll('#step8 .speak-toggle').forEach(group => {
    const yesBtn = group.children[0];
    const noBtn = group.children[1];
    [yesBtn, noBtn].forEach(btn => {
      btn.addEventListener('click', () => {
        yesBtn.classList.remove('bg-green-500', 'text-white');
        yesBtn.classList.add('bg-white', 'text-green-600');
        noBtn.classList.remove('bg-green-500', 'text-white');
        noBtn.classList.add('bg-white', 'text-green-600');
        btn.classList.remove('bg-white', 'text-green-600');
        btn.classList.add('bg-green-500', 'text-white');
      });
    });
  });

  // Step 9: Character counter
  const textarea = document.getElementById('profileDescription');
  const charCount = document.getElementById('charCount');
  if (textarea && charCount) {
    textarea.addEventListener('input', () => {
      charCount.textContent = textarea.value.length;
    });
  }

  // Step 10: Profile image preview
  const profileUpload = document.getElementById('profileUpload');
  const profilePreview = document.getElementById('profilePreview');
  const profilePlaceholder = document.getElementById('profilePlaceholder');

  if (profileUpload) {
    profileUpload.addEventListener('change', (e) => {
      const file = e.target.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = (e) => {
          profilePreview.src = e.target.result;
          profilePreview.classList.remove('hidden');
          profilePlaceholder.classList.add('hidden');
        };
        reader.readAsDataURL(file);
      }
    });
  }

  // Mobile nav toggles
  const toggleButtons = [
    document.getElementById("menu-toggle-top"),
    document.getElementById("menu-toggle")
  ];
  const mobileMenu = document.getElementById("mobile-menu");
  const langToggle = document.getElementById("languageToggle");
  const langMenu = document.getElementById("languageMenu");

  // Add close button logic for mobile menu
  const mobileMenuCloseBtn = document.getElementById("mobileMenuCloseBtn");
  if (mobileMenuCloseBtn) {
    mobileMenuCloseBtn.addEventListener("click", () => {
      mobileMenu.classList.add("hidden");
    });
  }

  toggleButtons.forEach(btn => {
    if (btn) btn.addEventListener("click", () => {
      mobileMenu.classList.toggle("hidden");
    });
  });

  if (langToggle) {
    langToggle.addEventListener("click", (e) => {
      e.stopPropagation();
      langMenu.classList.toggle("hidden");
    });
  }

  document.addEventListener("click", (e) => {
    if (langToggle && langMenu && !langToggle.contains(e.target) && !langMenu.contains(e.target)) {
      langMenu.classList.add('hidden');
    }
  });

  // Desktop language dropdown open/close on click
  const desktopLangBtn = document.getElementById('desktopLangBtn');
  const desktopLangMenu = document.getElementById('desktopLangMenu');
  if (desktopLangBtn && desktopLangMenu) {
    desktopLangBtn.addEventListener('click', function (e) {
      e.stopPropagation();
      desktopLangMenu.classList.toggle('hidden');
    });
    // Close dropdown when clicking outside
    document.addEventListener('click', function (e) {
      if (!desktopLangBtn.contains(e.target) && !desktopLangMenu.contains(e.target)) {
        desktopLangMenu.classList.add('hidden');
      }
    });
  }
});

// Modal functions
function openModal() {
  document.getElementById('modal')?.classList.remove('hidden');
}
function closeModal() {
  document.getElementById('modal')?.classList.add('hidden');
}
function nextStep(stepNumber) {
  document.querySelectorAll('.step-content').forEach(step => step.classList.add('hidden'));
  document.getElementById('step' + stepNumber)?.classList.remove('hidden');
}
function openPassportModal() {
  document.getElementById('passportModal')?.classList.remove('hidden');
}
function closePassportModal() {
  document.getElementById('passportModal')?.classList.add('hidden');
}
function openLicenseModal() {
  document.getElementById('licenseModal')?.classList.remove('hidden');
}
function closeLicenseModal() {
  document.getElementById('licenseModal')?.classList.add('hidden');
}
</script>

<script>
  // function openSearchPopup() {
  //   document.getElementById('searchPopup').classList.remove('hidden');
  // }

  // function closeSearchPopup() {
  //   document.getElementById('searchPopup').classList.add('hidden');
  // }

  // Optional: close on ESC key
  document.addEventListener('keydown', function (e) {
    if (e.key === "Escape") closeSearchPopup();
  });

  // Optional: attach close button
  document.addEventListener('DOMContentLoaded', () => {
    const closeBtn = document.getElementById('closeSearchPopupBtn');
    if (closeBtn) {
      closeBtn.addEventListener('click', closeSearchPopup);
    }
  });
</script>



<script>
  document.querySelectorAll(".faq-toggle").forEach((btn) => {
  btn.addEventListener("click", () => {
    const content = btn.nextElementSibling;
    const icon = btn.querySelector(".faq-icon");

    // Close all other FAQ items
    document.querySelectorAll(".faq-content").forEach((item) => {
      if (item !== content) {
        item.classList.add("hidden");
      }
    });

    document.querySelectorAll(".faq-icon").forEach((item) => {
      if (item !== icon) {
        item.textContent = "+";
      }
    });

    // Toggle current item
    content.classList.toggle("hidden");
    icon.textContent = content.classList.contains("hidden") ? "+" : "–";
  });
});

</script>

  <script>
  


        // FAQ Toggle Functionality
        const faqToggles = document.querySelectorAll('.faq-toggle');

        faqToggles.forEach((toggle, index) => {
            toggle.addEventListener('click', () => {
                const content = toggle.nextElementSibling;
                const isActive = toggle.classList.contains('active');

                // Close all other FAQ items
                faqToggles.forEach((otherToggle, otherIndex) => {
                    if (otherIndex !== index) {
                        const otherContent = otherToggle.nextElementSibling;
                        otherToggle.classList.remove('active');
                        otherContent.classList.remove('active');
                    }
                });

                // Toggle current FAQ item
                if (isActive) {
                    toggle.classList.remove('active');
                    content.classList.remove('active');
                } else {
                    toggle.classList.add('active');
                    content.classList.add('active');
                }
            });
        });

    //     // Add some interactive particles effect
    //     function createParticle() {
    //         const particle = document.createElement('div');
    //         particle.className = 'fixed w-2 h-2 bg-white/20 rounded-full pointer-events-none';
    //         particle.style.left = Math.random() * window.innerWidth + 'px';
    //         particle.style.top = window.innerHeight + 'px';
    //         document.body.appendChild(particle);

    //         const animation = particle.animate([
    //             { transform: 'translateY(0px) rotate(0deg)', opacity: 1 },
    //             { transform: `translateY(-${window.innerHeight + 100}px) rotate(360deg)`, opacity: 0 }
    //         ], {
    //             duration: Math.random() * 3000 + 2000,
    //             easing: 'linear'
    //         });

    //         animation.onfinish = () => particle.remove();
    //     }

    //     // Create particles periodically
    //     setInterval(createParticle, 300);
    // </script>

     <script>
        tailwind.config = {
            theme: {
                extend: {
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'glow': 'glow 2s ease-in-out infinite alternate',
                        'slideDown': 'slideDown 0.3s ease-out',
                        'slideUp': 'slideUp 0.3s ease-out',
                        'pulse-slow': 'pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-10px)' }
                        },
                        glow: {
                            '0%': { boxShadow: '0 0 20px rgba(59, 130, 246, 0.5)' },
                            '100%': { boxShadow: '0 0 40px rgba(59, 130, 246, 0.8)' }
                        },
                        slideDown: {
                            '0%': { opacity: '0', maxHeight: '0', transform: 'translateY(-10px)' },
                            '100%': { opacity: '1', maxHeight: '200px', transform: 'translateY(0)' }
                        },
                        slideUp: {
                            '0%': { opacity: '1', maxHeight: '200px', transform: 'translateY(0)' },
                            '100%': { opacity: '0', maxHeight: '0', transform: 'translateY(-10px)' }
                        }
                    }
                }
            }
        }
    </script>
<script>
  function toggleExpatPopup() {
    const popup = document.getElementById("expat-popup");
    popup.classList.toggle("hidden");
  }
</script>
<!-- JavaScript to toggle popup -->
<script>
  function toggleCategoryPopup() {
    const popup = document.getElementById("search-category-popup");
    popup.classList.toggle("hidden");
  }
</script>




 <script>
    // Open main popup
    function openSearchPopup() {
      document.getElementById('searchPopup').classList.remove('hidden');
      document.getElementById('expatriesPopup').classList.add('hidden');
      document.getElementById('vacanciersPopup').classList.add('hidden');
    }
   
    // Show Expatriés subcategories popup
    function showExpatriesSubcategories() {
      document.getElementById('searchPopup').classList.add('hidden');
      document.getElementById('expatriesPopup').classList.remove('hidden');
      document.getElementById('vacanciersPopup').classList.add('hidden');
    }
    // Show Vacanciers subcategories popup
    function showVacanciersSubcategories() {
      document.getElementById('searchPopup').classList.add('hidden');
      document.getElementById('vacanciersPopup').classList.remove('hidden');
      document.getElementById('expatriesPopup').classList.add('hidden');
    }
    // Back to main categories
    function goBackToMainCategories() {
      closeAllPopups();
      openSearchPopup();
    }

    function showExpatriesUrgenceSubcategories() {
  document.getElementById('searchPopup').classList.add('hidden');
  document.getElementById('expatriesPopup').classList.add('hidden');
  document.getElementById('vacanciersPopup').classList.add('hidden');
  document.getElementById('expatriesUrgencePopup').classList.remove('hidden');
}

function goBackToExpatriesSubcategories() {
  document.getElementById('expatriesUrgencePopup').classList.add('hidden');
  document.getElementById('expatriesPopup').classList.remove('hidden');
}

function showInvestisseursSubcategories() {
  closeAllPopups();
  document.getElementById('investisseursPopup').classList.remove('hidden');
}
function goBackToInvestisseursSubcategories() {
  closeAllPopups();
  document.getElementById('investisseursPopup').classList.remove('hidden');
}


function goBackToMainCategories() {
  closeAllPopups();
  document.getElementById('searchPopup').classList.remove('hidden');
}



function showExpatriesPreparationSubcategories() {
  document.getElementById('searchPopup').classList.add('hidden');
  document.getElementById('expatriesPopup').classList.add('hidden');
  document.getElementById('vacanciersPopup').classList.add('hidden');
  document.getElementById('expatriesUrgencePopup').classList.add('hidden');
  document.getElementById('expatriesPreparationPopup').classList.remove('hidden');
}

function goBackToExpatriesSubcategories() {
  // Hide all sub-sub popups too
  document.getElementById('expatriesUrgencePopup').classList.add('hidden');
  document.getElementById('expatriesPreparationPopup').classList.add('hidden');
  document.getElementById('expatriesPopup').classList.remove('hidden');
}

function showExpatriesAssuranceSubcategories() {
  document.getElementById('searchPopup').classList.add('hidden');
  document.getElementById('expatriesPopup').classList.add('hidden');
  document.getElementById('vacanciersPopup').classList.add('hidden');
  document.getElementById('expatriesUrgencePopup').classList.add('hidden');
  document.getElementById('expatriesPreparationPopup').classList.add('hidden');
  document.getElementById('expatriesAssurancePopup').classList.remove('hidden');
}

function goBackToExpatriesSubcategories() {
  // Hide all sub-sub popups
  document.getElementById('expatriesUrgencePopup').classList.add('hidden');
  document.getElementById('expatriesPreparationPopup').classList.add('hidden');
  document.getElementById('expatriesAssurancePopup').classList.add('hidden');
  document.getElementById('expatriesPopup').classList.remove('hidden');
}

function showExpatriesBesoinsSubcategories() {
  document.getElementById('searchPopup').classList.add('hidden');
  document.getElementById('expatriesPopup').classList.add('hidden');
  document.getElementById('vacanciersPopup').classList.add('hidden');
  document.getElementById('expatriesUrgencePopup').classList.add('hidden');
  document.getElementById('expatriesPreparationPopup').classList.add('hidden');
  document.getElementById('expatriesAssurancePopup').classList.add('hidden');
  document.getElementById('expatriesBesoinsPopup').classList.remove('hidden');
}

function goBackToExpatriesSubcategories() {
  // Hide all sub-sub popups
  document.getElementById('expatriesUrgencePopup').classList.add('hidden');
  document.getElementById('expatriesPreparationPopup').classList.add('hidden');
  document.getElementById('expatriesAssurancePopup').classList.add('hidden');
  document.getElementById('expatriesBesoinsPopup').classList.add('hidden');
  document.getElementById('expatriesPopup').classList.remove('hidden');
}

function showVacanciersProblemesVoyagesSubcategories() {
  closeAllPopups();
  document.getElementById('vacanciersProblemesVoyagesPopup').classList.remove('hidden');
}

function goBackToVacanciersCategories() {
  closeAllPopups();
  document.getElementById('vacanciersPopup').classList.remove('hidden');
}

function showVacanciersAutresBesoinsSubcategories() {
  closeAllPopups();
  document.getElementById('vacanciersAutresBesoinsPopup').classList.remove('hidden');
}

function goBackToVacanciersSubcategories() {
  closeAllPopups();
  document.getElementById('vacanciersPopup').classList.remove('hidden');
}






function showExpatriesSanteSubcategories() {
  document.getElementById('searchPopup').classList.add('hidden');
  document.getElementById('expatriesPopup').classList.add('hidden');
  document.getElementById('vacanciersPopup').classList.add('hidden');
  document.getElementById('expatriesUrgencePopup').classList.add('hidden');
  document.getElementById('expatriesPreparationPopup').classList.add('hidden');
  document.getElementById('expatriesAssurancePopup').classList.add('hidden');
  document.getElementById('expatriesBesoinsPopup').classList.add('hidden');
  document.getElementById('expatriesSantePopup').classList.remove('hidden');
}

function showVacanciersPreparationSubcategories() {
  document.getElementById('searchPopup').classList.add('hidden');
  document.getElementById('expatriesPopup').classList.add('hidden');
  document.getElementById('vacanciersPopup').classList.add('hidden');
  document.getElementById('vacanciersPreparationPopup').classList.remove('hidden');
}

function closeAllPopups() {
  document.getElementById('searchPopup').classList.add('hidden');
  document.getElementById('expatriesPopup').classList.add('hidden');
  document.getElementById('vacanciersPopup').classList.add('hidden');
  document.getElementById('vacanciersPreparationPopup').classList.add('hidden');
  // Add other popups here as well if needed
}

function showVacanciersUrgenceSubcategories() {
  closeAllPopups();
  document.getElementById('vacanciersUrgencePopup').classList.remove('hidden');
}

function goBackToVacanciersCategories() {
  closeAllPopups();
  document.getElementById('vacanciersPopup').classList.remove('hidden');
}

function showInvestisseurBienImmobilierPopup() {
  closeAllPopups();
  document.getElementById('investisseurBienImmobilierPopup').classList.remove('hidden');
}

function Acheterunbienimmobilier() {
  closeAllPopups(); // Hide all open popups first
  document.getElementById('Acheter un bien immobilier').classList.remove('hidden');
}

function showInvestirMarchesFinanciersPopup() {
  closeAllPopups(); // Hide all popups first
  document.getElementById('investirMarchesFinanciersPopup').classList.remove('hidden');
}

function showInvestisseurSecuriserInvestissementsPopup() {
  closeAllPopups(); // Hide all popups first
  document.getElementById('investisseurSecuriserInvestissementsPopup').classList.remove('hidden');
}

function showInvestisseurOptimisationFiscalePopup() {
  closeAllPopups(); // Hide all other popups
  document.getElementById('investisseurOptimisationFiscalePopup').classList.remove('hidden');
}

function showInvestisseurObligationsLegalesPopup() {
  closeAllPopups(); // Hide other popups first
  document.getElementById('investisseurObligationsLegalesPopup').classList.remove('hidden');
}
function showTravailleursFreelancesSubcategories() {
  closeAllPopups(); // Hide other popups first
  document.getElementById('travailleursFreelancesPopup').classList.remove('hidden');
}












function showTravailleursCreerEntrepriseSubSubcategoriesPopup() {
  closeAllPopups();
  document.getElementById('travailleursCreerEntrepriseSubSubcategoriesPopup').classList.remove('hidden');
}

function goBackToTravailleursCreerEntrepriseSubcategories() {
  closeAllPopups();
  document.getElementById('travailleursCreerEntreprisePopup').classList.remove('hidden');
}

function showTravailleursDevelopperReseauSubSubcategoriesPopup() {
  closeAllPopups();
  document.getElementById('travailleursDevelopperReseauSubSubcategoriesPopup').classList.remove('hidden');
}

function goBackToTravailleursDevelopperReseauSubcategories() {
  closeAllPopups();
  document.getElementById('travailleursDevelopperReseauPopup').classList.remove('hidden');
}

function showTravailleursGestionFinanciereSubSubcategoriesPopup() {
  closeAllPopups();
  document.getElementById('travailleursGestionFinanciereSubSubcategoriesPopup').classList.remove('hidden');
}

function goBackToTravailleursGestionFinanciereSubcategories() {
  closeAllPopups();
  document.getElementById('travailleursGestionFinancierePopup').classList.remove('hidden');
}


function showTravailleursProtectionSocialeSubSubcategoriesPopup() {
  closeAllPopups();
  document.getElementById('travailleursProtectionSocialeSubSubcategoriesPopup').classList.remove('hidden');
}

function goBackToTravailleursProtectionSocialeSubcategories() {
  closeAllPopups();
  document.getElementById('travailleursProtectionSocialePopup').classList.remove('hidden');
}


function showTravailleursTrouverEmploiSubSubcategoriesPopup() {
  closeAllPopups();
  document.getElementById('travailleursTrouverEmploiSubSubcategoriesPopup').classList.remove('hidden');
}

function goBackToTravailleursTrouverEmploiSubcategories() {
  closeAllPopups();
  document.getElementById('travailleursTrouverEmploiPopup').classList.remove('hidden');
}

function showTravailleursVisaAutorisationsSubSubcategoriesPopup() {
  closeAllPopups();
  document.getElementById('travailleursVisaAutorisationsSubSubcategoriesPopup').classList.remove('hidden');
}

function goBackToTravailleursVisaAutorisationsSubcategories() {
  closeAllPopups();
  document.getElementById('travailleursVisaAutorisationsPopup').classList.remove('hidden');
}



function closeAllPopups() {
  const popups = [
    'searchPopup',
    'expatriesPopup',
    'vacanciersPopup',
    'vacanciersPreparationPopup',
    'vacanciersUrgencePopup',
    'vacanciersProblemesVoyagesPopup',
    'expatriesUrgencePopup',
    'expatriesPreparationPopup',
    'expatriesAssurancePopup',
    'expatriesBesoinsPopup',
    'expatriesSantePopup',
    "vacanciersAutresBesoinsPopup",
    'investisseursPopup',
    'investisseurBienImmobilierPopup',
    "Acheter un bien immobilier",
    "investirMarchesFinanciersPopup",
    "investisseurSecuriserInvestissementsPopup",
    "investisseurOptimisationFiscalePopup",
    "investisseurObligationsLegalesPopup",
    "travailleursFreelancesPopup",
    "travailleursCreerEntreprisePopup",
    "travailleursDevelopperReseauPopup",
    "travailleursGestionFinancierePopup",
    "travailleursProtectionSocialePopup",
    "travailleursTrouverEmploiPopup",
    "travailleursVisaAutorisationsPopup",
    "travailleursCreerEntrepriseSubSubcategoriesPopup",
    "travailleursDevelopperReseauSubSubcategoriesPopup",
    "travailleursGestionFinanciereSubSubcategoriesPopup",
    "travailleursProtectionSocialeSubSubcategoriesPopup",
    "travailleursTrouverEmploiSubSubcategoriesPopup",
    "travailleursVisaAutorisationsSubSubcategoriesPopup"

  
  

    // Add more popup IDs here if you have them
  ];
  popups.forEach(id => {
    const el = document.getElementById(id);
    if (el) el.classList.add('hidden');
  });
}





    // Open popup when clicking or focusing on search input
    document.getElementById('searchInput').addEventListener('click', openSearchPopup);
    document.getElementById('searchInput').addEventListener('focus', openSearchPopup);

    // Close popups when clicking outside
    document.addEventListener('click', function(event) {
      const popups = [
        document.getElementById('searchPopup'),
        document.getElementById('expatriesPopup'),
        document.getElementById('vacanciersPopup')
      ];
      const searchInput = document.getElementById('searchInput');
      const searchButton = document.getElementById('searchButton');

      const isAnyPopupVisible = popups.some(popup => popup && !popup.classList.contains('hidden'));
      if (isAnyPopupVisible) {
        const clickedInsidePopup = popups.some(popup => popup && popup.contains(event.target));
        if (!clickedInsidePopup && !searchInput.contains(event.target) && !searchButton.contains(event.target)) {
          closeAllPopups();
        }
      }
    });





  </script>



<script>
  function openSearchPopup() {
    document.getElementById('searchPopup')?.classList.remove('hidden');
  }

  function closeSearchPopup() {
    document.getElementById('searchPopup')?.classList.add('hidden');
  }
</script>

</body>
</html>