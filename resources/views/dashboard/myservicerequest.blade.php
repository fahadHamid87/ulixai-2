<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Responsive Service Cards</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-br from-white to-blue-50 min-h-screen font-sans">

 @include('includes.header')
     @include('pages.popup')

  <div class="flex flex-col lg:flex-row min-h-screen">
    
    <!-- Sidebar -->
    <div class="lg:block">
       @include('dashboard.sidebardash')
    </div>

    <!-- Main Content -->
    <div class="flex-1 p-4 sm:p-6 flex flex-col min-h-screen">

      <!-- See Service Provider Button (top right) -->
      <div class="flex justify-end mb-2">
        <a href="/serviceproviders" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold px-6 py-2 rounded-lg shadow transition-all duration-150 text-sm md:text-base">
          See service provider
        </a>
      </div>

      <!-- Tabs + Title -->
      <div class="flex flex-col gap-4 mb-6">
        <!-- Buttons -->
        <!-- <div class="flex justify-center gap-3">
          <button class="bg-blue-500 text-white px-6 py-2 rounded-full font-semibold">UPCOMING</button>
          <button class="text-blue-500 underline font-medium">ARCHIVED</button>
        </div> -->
        <!-- Centered Title -->
        <h3 class="text-blue-700 text-xl md:text-2xl font-medium text-center mb-6">My Current Service Request</h3>
      </div>

      <!-- Cards Grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php for ($i = 0; $i < 3; $i++): ?>
        <div class="bg-white rounded-2xl shadow-md p-6 relative">
          <!-- Right-side circular icon -->
          <div class="absolute right-4 top-4 sm:top-1/3 transform sm:-translate-y-1/2 w-16 h-16 bg-<?= ['yellow','red','blue'][$i] ?>-400 rounded-full flex items-center justify-center">
            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
              <path d="<?= [
                'M12 2C13.1 2 14 2.9 14 4C14 5.1 13.1 6 12 6C10.9 6 10 5.1 10 4C10 2.9 10.9 2 12 2ZM21 9V7L15 5.5V10.5C15 11.9 14.1 13.1 12.8 13.6L12 14L11.2 13.6C9.9 13.1 9 11.9 9 10.5V5.5L3 7V9H1V7C1 6.4 1.4 5.9 2 5.8L8 4.3V2H9V4.3L15 5.8C15.6 6 16 6.4 16 7V9H21Z',
                'M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z',
                'M10,20V14H14V20H19V12H22L12,3L2,12H5V20H10Z'
              ][$i] ?>"/>
            </svg>
          </div>
          <div class="pr-0 sm:pr-20">
            <h3 class="text-blue-900 font-bold mb-1 text-sm">NIGHT BABYSTILLING MOM</h3>
            <p class="text-gray-700 text-sm">Duration : 23 jun 2024  1 hour</p>
            <p class="text-gray-700 text-sm mb-1">France</p>
            <!-- <p class="text-gray-700 text-sm mb-1">Lyon</p> -->
            <p class="text-gray-700 text-sm mb-1">French</p>
            <p class="text-gray-700 text-sm mb-2">Mission Ends In : 59:30</p>
            <div class="space-y-2">
              <a href="/jobpage" class="block border border-blue-400 text-blue-500 rounded-full px-4 py-2 text-sm font-medium text-center hover:bg-blue-50 transition">See my request</a>
            </div>
            <div class="flex justify-between items-center mt-6">
              <span></span>
              <a href="/serviceproviders" class="bg-green-500 text-white px-4 py-2 text-sm rounded-full hover:bg-green-600 transition">See the Ulysses</a>
            </div>
          </div>
        </div>
        <?php endfor; ?>
      </div>
      <!-- New Section: Published - Not yet provider -->
      <div class="mt-10">
        <h3 class="text-center text-blue-700 text-2xl font-semibold mb-6">Published - Not yet provider</h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
          <?php for ($i = 0; $i < 3; $i++): ?>
          <div class="bg-blue-100 rounded-2xl shadow-md p-6 relative">
            <div class="absolute right-4 top-4 sm:top-1/3 transform sm:-translate-y-1/2 w-16 h-16 bg-blue-400 rounded-full flex items-center justify-center">
              <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2C13.1 2 14 2.9 14 4C14 5.1 13.1 6 12 6C10.9 6 10 5.1 10 4C10 2.9 10.9 2 12 2ZM21 9V7L15 5.5V10.5C15 11.9 14.1 13.1 12.8 13.6L12 14L11.2 13.6C9.9 13.1 9 11.9 9 10.5V5.5L3 7V9H1V7C1 6.4 1.4 5.9 2 5.8L8 4.3V2H9V4.3L15 5.8C15.6 6 16 6.4 16 7V9H21Z"/>
              </svg>
            </div>
            <div class="pr-0 sm:pr-20">
              <h3 class="text-blue-900 font-bold mb-1 text-sm">WAITING FOR PROVIDER</h3>
              <p class="text-gray-700 text-sm">Duration : 24 jun 2024  2 hours</p>
              <p class="text-gray-700 text-sm mb-1">France</p>
              <p class="text-gray-700 text-sm mb-1">English</p>
              <p class="text-gray-700 text-sm mb-2">Mission Ends In : 12:00</p>
              <div class="space-y-2">
                <a href="/editcomplete" class="block border border-blue-400 text-blue-500 rounded-full px-4 py-2 text-sm font-medium text-center hover:bg-blue-200 transition">See my request</a>
                <?php
                  // Example: $proposals = 0; // Always 0 for these cards
                  $proposals = 0;
                  if ($proposals > 0) {
                    echo '<div class="text-green-600 text-center font-semibold text-sm">', $proposals, ' proposals received</div>';
                  } else {
                    echo '<div class="text-red-600 text-center font-semibold text-sm">0 proposals received</div>';
                  }
                ?>
              </div>
              <div class="flex justify-end items-center mt-6 gap-2 flex-wrap">
                <span class="bg-gray-300 text-gray-700 px-3 py-1 text-xs rounded-full">No provider yet</span>
                <button 
                  class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 text-xs rounded-full font-semibold transition-all whitespace-nowrap"
                  onclick="openCancelRequestPopup(event)">
                  Cancel my help request
                </button>
              </div>
            </div>
          </div>
          <?php endfor; ?>
        </div>
      </div>
      <!-- End New Section -->

      <!-- Tabs at bottom center (not sticky, just after all content) -->
      <div class="flex justify-center gap-3  mb-4 pb-8 mt-6">
        <button class="bg-blue-500 text-white px-6 py-2 rounded-full font-semibold">UPCOMING</button>
        <button class="text-blue-500 underline font-medium">ARCHIVED</button>
      </div>
    </div>
  </div>

  @include('dashboard.bottomnavbar')

  <!-- Cancel Request Popup Modal -->
  <div id="cancelRequestPopup" class="fixed inset-0 bg-black/40 z-50 flex items-center justify-center px-2 hidden">
    <div class="bg-white rounded-2xl shadow-xl max-w-md w-full p-6 text-center relative">
      <button onclick="closeCancelRequestPopup()" class="absolute top-2 right-3 text-gray-400 hover:text-gray-700 text-2xl">&times;</button>
      <h2 class="text-xl font-bold text-blue-800 mb-3">Why do you want to cancel this ad?</h2>
      <form id="cancelRequestForm" class="space-y-4 text-left">
        <div>
          <label class="block text-sm font-semibold mb-2">Select a reason</label>
          <select id="cancelReasonSelect" class="w-full border rounded-lg px-3 py-2 mb-2" required>
            <option value="">-- Please choose --</option>
            <option>I made a mistake in the information provided.</option>
            <option>My situation has changed, I no longer need the service.</option>
            <option>I found a solution elsewhere.</option>
            <option>The timing is too short to organize this mission.</option>
            <option>My budget is not sufficient for the type of service I need.</option>
            <option>I didn’t receive any relevant proposals.</option>
            <option>The available providers do not match my criteria.</option>
            <option>I’ve decided to postpone this request.</option>
            <option>I submitted this request just to test the platform.</option>
            <option value="other">Other reason (please specify below)</option>
          </select>
        </div>
        <div>
          <label class="block text-sm font-semibold mb-1">Other reason (please specify):</label>
          <textarea id="cancelOtherReason" class="w-full border rounded-lg px-3 py-2" maxlength="300" placeholder="Free text field" style="display:block"></textarea>
        </div>
        <!-- <div class="text-xs text-blue-700 mb-2">
          By providing this service, you increase the number of points in your account and you will be more visible.
        </div> -->
        <div class="flex justify-between items-center mt-4">
          <button type="button" onclick="closeCancelRequestPopup()" class="text-blue-700 underline font-semibold text-xs">I keep my add online</button>
          <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-full px-4 py-2 text-xs transition">
            I CANCEL
          </button>
        </div>
      </form>
    </div>
  </div>

  <!-- Cancel Success Popup Modal -->
  <div id="cancelSuccessPopup" class="fixed inset-0 bg-black/40 z-50 flex items-center justify-center px-2 hidden">
    <div class="bg-white rounded-2xl shadow-xl max-w-xs w-full p-8 text-center relative">
      <div class="flex flex-col items-center">
        <div class="w-16 h-16 bg-green-400 rounded-full flex items-center justify-center mb-4">
          <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
          </svg>
        </div>
        <h3 class="text-lg font-bold text-blue-800 mb-2">Thank you!</h3>
        <div class="text-blue-800 font-semibold">Your ad has been successfully deleted.</div>
      </div>
    </div>
  </div>

  <script>
    function openCancelRequestPopup(e) {
      e.preventDefault();
      document.getElementById('cancelRequestPopup').classList.remove('hidden');
    }
    function closeCancelRequestPopup() {
      document.getElementById('cancelRequestPopup').classList.add('hidden');
    }
    function openCancelSuccessPopup() {
      document.getElementById('cancelSuccessPopup').classList.remove('hidden');
    }
    function closeCancelSuccessPopup() {
      document.getElementById('cancelSuccessPopup').classList.add('hidden');
    }
    document.getElementById('cancelRequestForm').addEventListener('submit', function(e) {
      e.preventDefault();
      closeCancelRequestPopup();
      openCancelSuccessPopup();
    });
    // Optional: close success popup on click outside or after a timeout
    document.getElementById('cancelSuccessPopup').addEventListener('click', function(e) {
      if (e.target === this) closeCancelSuccessPopup();
    });
    // Optionally, show/hide the textarea only if "Other reason" is selected
    document.getElementById('cancelReasonSelect').addEventListener('change', function() {
      var otherField = document.getElementById('cancelOtherReason');
      if (this.value === 'other') {
        otherField.style.display = 'block';
        otherField.required = true;
      } else {
        otherField.style.display = 'none';
        otherField.required = false;
        otherField.value = '';
      }
    });
  </script>
</body>
</html>
</body>
</html>