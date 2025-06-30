<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Responsive Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .promo-gradient-1 {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .promo-gradient-2 {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        }
        .shrek-face {
            background: linear-gradient(135deg, #8fbc8f 0%, #6b8e23 100%);
        }
        
        /* Mobile overlay */
        .sidebar-overlay {
            background-color: rgba(0, 0, 0, 0.5);
        }
        
        /* Smooth transitions */
        .sidebar-transition {
            transition: transform 0.3s ease-in-out;
        }
        
        /* Hamburger animation */
        .hamburger-line {
            transition: all 0.3s ease;
        }
        
        .hamburger-active .line1 {
            transform: rotate(45deg) translate(5px, 5px);
        }
        
        .hamburger-active .line2 {
            opacity: 0;
        }
        
        .hamburger-active .line3 {
            transform: rotate(-45deg) translate(7px, -6px);
        }
    </style>
</head>
<body class="bg-gray-50">

<!-- Mobile Header with Hamburger (Sticky) -->
<div class="lg:hidden sticky top-0 z-0 bg-white shadow-sm border-b border-gray-200 px-4 py-3 flex items-center justify-between">

   
    <div class="flex items-center space-x-3">
        @include('dashboard.breadcrumbs')
        <!-- Mobile Shrek Avatar -->
        <div class="w-8 h-8 shrek-face rounded-full border-2 border-green-300 flex items-center justify-center relative">
            <div class="absolute -top-0.5 -left-0.5 w-2 h-2 bg-green-400 rounded-full transform rotate-45"></div>
            <div class="absolute -top-0.5 -right-0.5 w-2 h-2 bg-green-400 rounded-full transform -rotate-45"></div>
            <div class="absolute top-1 left-1 w-1 h-1 bg-white rounded-full">
                <div class="w-0.5 h-0.5 bg-black rounded-full mt-0.25 ml-0.25"></div>
            </div>
            <div class="absolute top-1 right-1 w-1 h-1 bg-white rounded-full">
                <div class="w-0.5 h-0.5 bg-black rounded-full mt-0.25 ml-0.25"></div>
            </div>
            <div class="absolute bottom-1 left-1/2 transform -translate-x-1/2 w-2 h-0.5 bg-green-700 rounded-full"></div>
        </div>
        <h1 class="text-lg font-semibold text-gray-800">Dashboard</h1>
    </div>
    
    <!-- Hamburger Button -->
    <button id="hamburger-btn" class="hamburger p-2 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500">
        <div class="w-6 h-6 flex flex-col justify-center space-y-1">
            <div class="hamburger-line line1 w-6 h-0.5 bg-gray-600 rounded"></div>
            <div class="hamburger-line line2 w-6 h-0.5 bg-gray-600 rounded"></div>
            <div class="hamburger-line line3 w-6 h-0.5 bg-gray-600 rounded"></div>
        </div>
    </button>
</div>

<!-- Mobile Overlay -->
<div id="sidebar-overlay" class="fixed inset-0 bg-black bg-opacity-50 z-40 lg:hidden hidden"></div>

<!-- Sidebar -->
<div id="sidebar" class="fixed top-0 left-0 h-full w-72 bg-white shadow-lg sidebar-transition transform -translate-x-full lg:translate-x-0 lg:static lg:h-auto z-50">
    <div class="p-6 h-full overflow-y-auto">
        <!-- Mobile Close Button -->
        <div class="lg:hidden flex justify-end mb-4">
            <button id="close-sidebar" class="p-2 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        <!-- Greeting Section -->
        <div class="flex items-center space-x-3 mb-8">
            <!-- Shrek Avatar -->
            <div class="w-12 h-12 shrek-face rounded-full border-2 border-green-300 flex items-center justify-center relative">
                <div class="absolute -top-1 -left-1 w-3 h-4 bg-green-400 rounded-full transform rotate-45"></div>
                <div class="absolute -top-1 -right-1 w-3 h-4 bg-green-400 rounded-full transform -rotate-45"></div>
                <div class="absolute top-2 left-2 w-2 h-2 bg-white rounded-full">
                    <div class="w-1 h-1 bg-black rounded-full mt-0.5 ml-0.5"></div>
                </div>
                <div class="absolute top-2 right-2 w-2 h-2 bg-white rounded-full">
                    <div class="w-1 h-1 bg-black rounded-full mt-0.5 ml-0.5"></div>
                </div>
                <div class="absolute top-4 left-1/2 transform -translate-x-1/2 w-1 h-1 bg-green-600 rounded-full"></div>
                <div class="absolute bottom-2 left-1/2 transform -translate-x-1/2 w-3 h-1 bg-green-700 rounded-full"></div>
            </div>
            <div>
                <h2 class="text-xl font-bold text-gray-800">Hello shrek!</h2>
            </div>
        </div>

        <!-- Navigation Menu -->
        <nav class="space-y-2 mb-8">
            <?php
            function isActive($filename) {
                return basename($_SERVER['PHP_SELF']) === $filename
                    ? 'text-blue-600 bg-blue-50'
                    : 'text-gray-600 hover:bg-gray-50';
            }
            ?>
            
            <a href="/dashboardindex" class="flex items-center space-x-3 px-4 py-3 rounded-lg <?= isActive('dashboardindex') ?> nav-link">
                <i class="fa-solid fa-gauge-high w-5 h-5"></i>
                <span class="font-medium">Dashboard</span>
            </a>

            <a href="/myservicerequest" class="flex items-center space-x-3 px-4 py-3 rounded-lg <?= isActive('myservicerequest') ?> nav-link">
                <i class="fa-solid fa-list-check w-5 h-5"></i>
                <span>My services request</span>
            </a>

            <a href="/joblist" class="flex items-center space-x-3 px-4 py-3 rounded-lg <?= isActive('joblist') ?> nav-link">
                <i class="fa-solid fa-briefcase w-5 h-5"></i>
                <span>My job list</span>
            </a>

            <a href="/myearnings" class="flex items-center space-x-3 px-4 py-3 rounded-lg <?= isActive('myearnings') ?> nav-link">
                <i class="fa-solid fa-euro-sign w-5 h-5"></i>
                <span>My earnings</span>
            </a>

            <a href="/privatemsg" class="flex items-center justify-between px-4 py-3 rounded-lg <?= isActive('privatemsg') ?> nav-link">
                <div class="flex items-center space-x-3">
                    <i class="fa-solid fa-envelope w-5 h-5"></i>
                    <span>Private messaging</span>
                </div>
                <span class="bg-red-500 text-white text-xs px-2 py-1 rounded-full">3</span>
            </a>

            <a href="/myaccount" class="flex items-center space-x-3 px-4 py-3 rounded-lg <?= isActive('myaccount') ?> nav-link">
                <i class="fa-solid fa-user w-5 h-5"></i>
                <span>My account</span>
            </a>

            <a href="/paymentsvalidate" class="flex items-center space-x-3 px-4 py-3 rounded-lg <?= isActive('paymentsvalidate') ?> nav-link">
                <i class="fa-solid fa-credit-card w-5 h-5"></i>
                <span>Payments to be validated</span>
            </a>
        </nav>

        <!-- Promotional Cards -->
        <div class="space-y-4 mb-8">
            <!-- <div class="promo-gradient-1 p-4 rounded-xl text-white">
                <div class="flex items-start space-x-3">
                    <div class="bg-white bg-opacity-20 p-2 rounded-lg">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <p class="text-sm font-medium leading-tight">
                        I boost my profile to be among the first Service providers
                    </p>
                </div>
            </div> -->
            <a href="/myaffiliateaccount" class="block promo-gradient-2 p-3 rounded-lg text-white shadow-lg hover:scale-105 transition-transform duration-200">
                <div class="flex flex-col items-center justify-center">
                    <div class="bg-white bg-opacity-20 p-2 rounded-full mb-2">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <span class="text-base font-bold leading-tight">My Affiliation Account</span>
                </div>
            </a>
        </div>

        <!-- Logout -->
        <div class="pt-4 border-t border-gray-200">
             <button class="w-full text-sm font-semibold text-red-500 border border-red-200 hover:text-white hover:bg-red-500 hover:border-red-500 transition-all duration-200 px-4 py-2 rounded-lg">
    Log Out
  </button>
        </div>
    </div>
</div>

<!-- Main Content Area (Demo) -->
<!-- <div class="lg:ml-72 min-h-screen">
    <div class="p-6">
        <div class="bg-white rounded-lg shadow p-6">
            <h1 class="text-2xl font-bold text-gray-800 mb-4">Main Content Area</h1>
            <p class="text-gray-600">This is where your main dashboard content would go. The sidebar is now responsive and will show/hide based on screen size.</p>
            
            <div class="mt-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="bg-blue-50 p-4 rounded-lg">
                    <h3 class="font-semibold text-blue-800">Card 1</h3>
                    <p class="text-blue-600 text-sm">Sample content</p>
                </div>
                <div class="bg-green-50 p-4 rounded-lg">
                    <h3 class="font-semibold text-green-800">Card 2</h3>
                    <p class="text-green-600 text-sm">Sample content</p>
                </div>
                <div class="bg-purple-50 p-4 rounded-lg">
                    <h3 class="font-semibold text-purple-800">Card 3</h3>
                    <p class="text-purple-600 text-sm">Sample content</p>
                </div>
            </div>
        </div>
    </div>
</div> -->

<script>
document.addEventListener('DOMContentLoaded', function() {
    const hamburgerBtn = document.getElementById('hamburger-btn');
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('sidebar-overlay');
    const closeSidebar = document.getElementById('close-sidebar');
    const navLinks = document.querySelectorAll('.nav-link');

    // Toggle sidebar
    function toggleSidebar() {
        const isOpen = !sidebar.classList.contains('-translate-x-full');
        
        if (isOpen) {
            closeSidebarFunc();
        } else {
            openSidebarFunc();
        }
    }

    // Open sidebar
    function openSidebarFunc() {
        sidebar.classList.remove('-translate-x-full');
        overlay.classList.remove('hidden');
        hamburgerBtn.classList.add('hamburger-active');
        document.body.style.overflow = 'hidden'; // Prevent scrolling
    }

    // Close sidebar
    function closeSidebarFunc() {
        sidebar.classList.add('-translate-x-full');
        overlay.classList.add('hidden');
        hamburgerBtn.classList.remove('hamburger-active');
        document.body.style.overflow = ''; // Restore scrolling
    }

    // Event listeners
    hamburgerBtn.addEventListener('click', toggleSidebar);
    closeSidebar.addEventListener('click', closeSidebarFunc);
    overlay.addEventListener('click', closeSidebarFunc);

    // Close sidebar when clicking nav links on mobile
    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (window.innerWidth < 1024) { // lg breakpoint
                closeSidebarFunc();
            }
        });
    });

    // Handle escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeSidebarFunc();
        }
    });

    // Handle window resize
    window.addEventListener('resize', function() {
        if (window.innerWidth >= 1024) { // lg breakpoint
            closeSidebarFunc();
        }
    });
});
</script>

</body>
</html>