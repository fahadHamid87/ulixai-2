<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ulysse Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .shrek-face {
            background: linear-gradient(135deg, #86efac 0%, #4ade80 100%);
        }
        
        .promo-gradient-1 {
            background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%);
        }
        
        .promo-gradient-2 {
            background: linear-gradient(135deg, #ec4899 0%, #f97316 100%);
        }
        
        .referral-gradient {
            background: linear-gradient(135deg, #8b5cf6 0%, #3b82f6 100%);
        }
        
        .calendar-day {
            padding: 8px;
            text-align: center;
            font-size: 14px;
            cursor: pointer;
            border-radius: 4px;
        }
        
        .calendar-day:hover {
            background-color: #f3f4f6;
        }
        
        .calendar-day.today {
            background-color: #3b82f6;
            color: white;
        }
        
        .calendar-day.selected {
            background-color: #dbeafe;
            color: #1d4ed8;
        }
        
        .progress-circle {
            stroke-dasharray: 201;
            stroke-dashoffset: 50;
            transition: stroke-dashoffset 0.5s ease-in-out;
        }
        
        /* Remove scrollbars */
        html, body {
            overflow-x: hidden;
        }
        
        .sidebar {
            overflow-y: auto;
            scrollbar-width: none; /* Firefox */
            -ms-overflow-style: none; /* IE and Edge */
        }
        
        .sidebar::-webkit-scrollbar {
            display: none; /* Chrome, Safari, Opera */
        }
        
        .main-content {
            overflow-y: auto;
            scrollbar-width: none; /* Firefox */
            -ms-overflow-style: none; /* IE and Edge */
        }
        
        .main-content::-webkit-scrollbar {
            display: none; /* Chrome, Safari, Opera */
        }
        
        /* Add this to your <style> section or at the end of the file */
.category-card .w-14.h-14,
.category-card .w-14.h-14.bg-blue-500,
.category-card .w-14.h-14.bg-orange-400,
.category-card .w-14.h-14.bg-green-500,
.category-card .w-14.h-14.bg-gray-500,
.category-card .w-14.h-14.bg-red-500,
.category-card .w-14.h-14.bg-purple-500 {
  width: 56px !important;
  height: 56px !important;
  min-width: 56px !important;
  min-height: 56px !important;
  border-radius: 9999px !important;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 0 !important;
}

/* Fix for the selected (active) category button (e.g. Vacanciers) */
.category-card .bg-blue-500,
.category-card .bg-blue-600 {
  border-radius: 9999px !important;
  min-width: 56px !important;
  min-height: 56px !important;
  width: 56px !important;
  height: 56px !important;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 0 !important;
}

/* Remove any extra width from the parent if present */
.category-card {
  min-width: 0 !important;
}
    </style>
</head>
 
<!-- Just body section is shown for brevity -->
<body class="">
   @include('includes.header')
     @include('pages.popup')


 

  <div class="flex flex-col lg:flex-row min-h-screen mt-6">
    
    <!-- Sidebar -->
    <div class="w-full lg:w-1/5">
     @include('dashboard.sidebardash')
    </div>

    <!-- Main Content -->
    <div class="flex-1 main-content">
      <div class="p-4 sm:p-6 md:p-8">

        <!-- Top Stats -->
     <div class="flex flex-wrap gap-4 items-start justify-start mb-6">
  <div class="w-full max-w-xs border-2 border-blue-400 rounded-2xl p-4 bg-white text-center">
    <h2 class="text-base font-medium text-blue-500 mb-1">My total balance</h2>
    <div class="text-3xl font-bold text-blue-600 mb-1">292,00 €</div>
  </div>
</div>


        <!-- Referral Banner -->
        <div class="bg-blue-800 p-6 rounded-2xl text-white mb-6 relative overflow-hidden">
          <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between gap-6">
            <div class="flex-1">
              <p class="text-sm mb-2">You can make life easier for your friends abroad</p>
              <h3 class="text-xl sm:text-2xl font-bold mb-4">Share your affiliate link and earn passive income</h3>
              <div class="flex flex-col sm:flex-row gap-2 mb-4">
                <input type="text" placeholder="https://example.com" class="bg-white bg-opacity-20 text-white placeholder-gray-200 px-4 py-2 rounded-lg w-full" />
                <input type="text" placeholder="https://www.from.com" class="bg-white bg-opacity-20 text-white placeholder-gray-200 px-4 py-2 rounded-lg w-full" />
                <button class="bg-white text-purple-600 px-4 py-2 rounded-lg font-medium w-full sm:w-auto">DUPLICATE</button>
              </div>
            </div>
            <div class="w-full sm:w-auto">
              <div class="bg-white bg-opacity-20 p-4 rounded-xl">
                <p class="text-sm mb-2">You earn for 75% for life</p>
                <p class="text-xs">On the services fees spent by your friends</p>
                <div class="mt-3 flex justify-center">
                  <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Referrals Section -->
        <div class="flex flex-col sm:flex-row flex-wrap gap-4 mb-6 items-center justify-center">
          <button class="bg-blue-400 text-white px-4 py-2 rounded-full text-sm">3 referrals</button>
          <button class="bg-blue-400 text-white px-6 py-2 rounded-full text-sm">My earnings thanks to my referrals 938$</button>
        </div>

        <!-- Progress Bar (Zelper style) -->
        <div class="relative bg-blue-100 rounded-2xl px-2 py-6 mb-6 overflow-visible">
          <div class="relative h-10 flex items-center">
            <!-- Blue progress bar with rounded ends -->
            <div class="absolute left-0 right-0 top-1/2 -translate-y-1/2 h-6 bg-blue-400 rounded-full w-full"></div>
            <!-- Milestone dots and lines -->
            <div class="relative flex justify-between items-center w-full z-10 px-2">
              <!-- 4 milestones (no dot at the end) -->
              <div class="flex flex-col items-center w-1/4">
                <div class="w-5 h-5 bg-white border-2 border-blue-500 rounded-full z-10"></div>
              </div>
              <div class="flex flex-col items-center w-1/4">
                <div class="w-5 h-5 bg-white border-2 border-blue-500 rounded-full z-10"></div>
              </div>
              <div class="flex flex-col items-center w-1/4">
                <div class="w-5 h-5 bg-white border-2 border-blue-500 rounded-full z-10"></div>
              </div>
              <div class="flex flex-col items-center w-1/4">
                <div class="w-5 h-5 bg-white border-2 border-blue-500 rounded-full z-10"></div>
              </div>
            </div>
          </div>
          <!-- Labels above -->
          <div class="grid grid-cols-4 text-center mt-2 mb-1 text-sm font-semibold text-blue-900">
            <span>Ulysse</span>
            <span>Ulysse ++</span>
            <span>Top Ulysse</span>
            <span>Ulysse diamond</span>
          </div>
          <!-- Points below -->
          <div class="grid grid-cols-4 text-center text-xs text-gray-700">
            <span>0 pts</span>
            <span>100 pts</span>
            <span>200 pts</span>
            <span>300 pts</span>
          </div>
        </div>
        <!-- End Progress Bar (Zelper style) -->

        <!-- Bottom Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
          <!-- Activity Calendar -->
          <div class="bg-white p-6 rounded-2xl shadow-sm">
            <?php
              // Calendar logic
              $month = isset($_GET['month']) ? intval($_GET['month']) : 8;
              $year = isset($_GET['year']) ? intval($_GET['year']) : 2022;
              $selected = [4,5,6]; // Example: highlight 4,5,6
              $firstDayOfMonth = mktime(0, 0, 0, $month, 1, $year);
              $daysInMonth = date('t', $firstDayOfMonth);
              $startDay = date('w', $firstDayOfMonth); // 0 (Sun) - 6 (Sat)
              $monthName = date('F Y', $firstDayOfMonth);

              // Previous/next month logic
              $prevMonth = $month - 1;
              $prevYear = $year;
              if ($prevMonth < 1) { $prevMonth = 12; $prevYear--; }
              $nextMonth = $month + 1;
              $nextYear = $year;
              if ($nextMonth > 12) { $nextMonth = 1; $nextYear++; }
            ?>
            <div class="flex items-center justify-between mb-2">
              <a href="?month=<?php echo $prevMonth; ?>&year=<?php echo $prevYear; ?>" class="text-gray-400 hover:text-blue-600 text-xl px-2" aria-label="Prev month">
                <i class="fas fa-chevron-left"></i>
              </a>
              <h4 class="font-medium text-gray-800 text-center flex-1"><?php echo $monthName; ?></h4>
              <a href="?month=<?php echo $nextMonth; ?>&year=<?php echo $nextYear; ?>" class="text-gray-400 hover:text-blue-600 text-xl px-2" aria-label="Next month">
                <i class="fas fa-chevron-right"></i>
              </a>
            </div>
            <div class="w-full overflow-x-auto">
              <div class="min-w-[350px] grid grid-cols-7 gap-y-1 text-center text-xs text-gray-400 mb-1">
                <span>Su</span><span>Mo</span><span>Tu</span><span>We</span><span>Th</span><span>Fr</span><span>Sa</span>
              </div>
              <div class="min-w-[350px] grid grid-cols-7 gap-y-2 text-center text-base font-medium">
                <?php
                  // Fill initial empty cells
                  for ($i = 0; $i < $startDay; $i++) {
                    echo '<span class="text-gray-300"></span>';
                  }
                  // Print days of month
                  for ($day = 1; $day <= $daysInMonth; $day++) {
                    $classes = "calendar-day";
                    // Highlight selected days (for August 2022: 4,5,6)
                    if ($year == 2022 && $month == 8 && in_array($day, $selected)) {
                      if ($day == 4) {
                        $classes .= " bg-blue-100 text-blue-700 font-bold rounded-full";
                      } else {
                        $classes .= " bg-blue-500 text-white font-bold rounded-full";
                      }
                    }
                    echo "<span class=\"$classes\">$day</span>";
                  }
                  // Fill trailing empty cells
                  $totalCells = $startDay + $daysInMonth;
                  $remaining = (7 - ($totalCells % 7)) % 7;
                  for ($i = 0; $i < $remaining; $i++) {
                    echo '<span class="text-gray-300"></span>';
                  }
                ?>
              </div>
            </div>
          </div>

          <!-- Progress Circle -->
          <div class="bg-white p-6 rounded-2xl shadow-sm flex flex-col items-center">
            <h3 class="text-xl font-semibold text-gray-800 mb-4 text-center">Diamond Ulysse Progress</h3>
            <div class="relative w-24 h-24 mb-4">
              <svg class="w-24 h-24" viewBox="0 0 80 80">
                <circle cx="40" cy="40" r="32" stroke="#e5e7eb" stroke-width="6" fill="none" />
                <circle cx="40" cy="40" r="32" stroke="#3b82f6" stroke-width="6" fill="none" class="progress-circle" />
              </svg>
              <div class="absolute inset-0 flex items-center justify-center">
                <span class="text-2xl font-bold text-blue-600">75%</span>
              </div>
            </div>
          </div>

          <!-- Earnings Card -->
          <div class="bg-white p-6 rounded-2xl shadow-sm flex flex-col items-center">
            <h3 class="text-xl font-semibold text-gray-800 mb-4 text-center">Total Earned as a Ulixai provider</h3>
            <div class="text-4xl font-bold text-blue-600">$911.4</div>
          </div>
        </div>

        <!-- Action Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 mt-8">
          <div class="bg-blue-400 text-white p-6 rounded-2xl text-center">
            <div class="text-3xl font-bold mb-2">1</div>
            <div class="text-sm">Upcoming service requests</div>
          </div>
          <div class="bg-blue-400 text-white p-6 rounded-2xl text-center">
            <div class="text-3xl font-bold mb-2">2</div>
            <div class="text-sm">Job to done</div>
          </div>
          <div class="bg-blue-400 text-white p-6 rounded-2xl text-center">
            <div class="text-3xl font-bold mb-2">3</div>
            <div class="text-sm">Ulysse payments to trigger</div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <div class = "pb-12"></div>
 @include('dashboard.bottomnavbar')
</body>
</html>

<style>
/* Responsive calendar: always 7 columns, scroll if needed on mobile */
@media (max-width: 600px) {
  .calendar-day {
    min-width: 32px;
    min-height: 32px;
    font-size: 0.95rem;
  }
  .min-w-\[350px\] {
    min-width: 350px !important;
  }
}
.calendar-day {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  min-width: 36px;
  min-height: 36px;
  font-size: 1rem;
  margin: 0 auto;
  transition: background 0.2s, color 0.2s;
}
</style>