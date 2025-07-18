<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My Job List</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-white to-blue-50 min-h-screen font-sans">

  <!-- Header & Breadcrumbs -->
 
 @include('includes.header')
     @include('pages.popup')

  

  <!-- Layout -->
  <div class="flex flex-col lg:flex-row min-h-screen">

    <!-- Sidebar -->
    <div class=" lg:block w-full lg:w-64">
    @include('dashboard.sidebardash')
    </div>

    <!-- Main Content -->
    <div class="flex-1 p-4 sm:p-6 lg:pl-10 lg:pr-8">

      

      <!-- Tabs -->
      <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-6 mr-12">
        <div class="flex gap-4 flex-wrap">
          <!-- <button class="bg-blue-600 text-white px-4 py-1 rounded-full font-medium shadow hover:bg-blue-700">UPCOMING</button>
          <a href="archivejobs.php" class="text-blue-600 font-medium underline hover:text-blue-800">ARCHIVED</a> -->
        </div>
        <a href="/ongoingservices"
           class="bg-red-600 text-white px-4 py-2 rounded-full text-sm font-medium shadow flex flex-wrap items-center gap-2 hover:bg-red-700 transition cursor-pointer w-full md:w-auto justify-center md:justify-start text-center">
          77 ongoing service requests
          <span class="underline font-semibold ml-1">| DISCOVER</span>
        </a>
      </div>

      <h2 class="text-xl font-bold text-blue-900 mb-6 text-center md:text-left">
        The validated missions that I must do
        <span class="text-gray-600 font-normal ml-2 block sm:inline"></span>
      </h2>
      <!-- Title -->
      <div class="flex justify-center mb-2">
        <span class="bg-blue-400 text-white text-base font-semibold px-6 py-2 rounded-lg shadow" style="letter-spacing:0.01em;">
          Current job to do
        </span>
      </div>

      <!-- Job Cards Grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php
          $jobs = [
            ['date' => '18 March 2025', 'price' => '36', 'dispute' => 1],
            ['date' => '16 February 2025', 'price' => '42', 'dispute' => 0],
            ['date' => '20 March 2025', 'price' => '75', 'dispute' => 1],
          ];
          foreach ($jobs as $index => $job):
        ?>
        <div class="bg-white rounded-2xl shadow p-5 relative flex flex-col sm:flex-row items-center gap-4 border border-blue-100">
          <div class="flex-1 w-full">
            <h3 class="text-blue-900 font-bold text-xs mb-1 uppercase tracking-wide">NIGHT BABYSTILLING MOM</h3>
            <div class="text-xs text-gray-700 mb-2">
              Deadline : <span class="font-semibold"><?= $job['date'] ?></span>
            </div>
            <div class="flex items-center gap-2 mb-2">
              <a href="/jobpage2" class="bg-blue-600 text-white text-xs px-4 py-1.5 rounded-full font-semibold shadow hover:bg-blue-700 transition">See the job</a>
            </div>
            <!-- Ongoing dispute always shown, a bit lower -->
            <div class="mt-3">
              <button
                type="button"
                class="bg-red-50 text-red-600 border border-red-300 text-xs px-3 py-1 rounded-full font-semibold block w-max focus:outline-none"
                onclick="openDisputePopup(<?= $index ?>)"
              >
                1 Ongoing dispute
              </button>
            </div>
          </div>
          <div class="flex flex-col items-center gap-2 min-w-[120px]">
            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-1">
              <svg class="w-7 h-7 text-blue-400" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
              </svg>
            </div>
            <div class="bg-white border border-blue-300 rounded-xl px-3 py-1 text-xs text-blue-900 font-semibold text-center mb-1">
              For this job<br>
              I win <?= $job['price'] ?>€
            </div>
            <button class="bg-blue-500 hover:bg-blue-600 text-white text-xs font-semibold px-5 py-2 rounded-lg shadow transition"
              onclick="openDeliveryConfirmPopup()"
            >Job finish</button>
          </div>
        </div>
        <?php endforeach; ?>
      </div>

      <!-- My Quote Offers Section -->
      <div class="flex justify-center mt-10 mb-2">
        <span class="bg-blue-400 text-white text-base font-semibold px-6 py-2 rounded-lg shadow" style="letter-spacing:0.01em;">
          My quote offers
        </span>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php
          $offers = [
            ['date' => '10 April 2025'],
            ['date' => '22 May 2025'],
            ['date' => '5 June 2025'],
          ];
          foreach ($offers as $offer):
        ?>
        <div class="bg-blue-100 rounded-2xl shadow p-5 flex flex-row items-center gap-4 border border-blue-200">
          <div class="flex-1">
            <h3 class="text-blue-900 font-bold text-sm mb-1">NIGHT BABYSTILLING MOM</h3>
            <div class="text-sm text-gray-700 mb-2">
              Deadline : <span class="font-semibold"><?= $offer['date'] ?></span>
            </div>
            <a href="/editcomplete" class="bg-blue-600 text-white text-sm px-5 py-2 rounded-full font-semibold shadow hover:bg-blue-700 transition inline-block">See the job</a>
          </div>
          <div class="flex flex-col items-center min-w-[64px]">
            <div class="w-16 h-16 bg-blue-200 rounded-full flex items-center justify-center">
              <svg class="w-7 h-7 text-blue-400" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
              </svg>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>

      <!-- Tabs moved to bottom and centered -->
      <div class="flex justify-center mt-10 mb-12 pb-12">
        <div class="flex gap-4 flex-wrap">
          <button class="bg-blue-600 text-white px-4 py-1 rounded-full font-medium shadow hover:bg-blue-700">UPCOMING</button>
          <a href="archivejobs.php" class="text-blue-600 font-medium underline hover:text-blue-800">ARCHIVED</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Dispute Popup Modal -->
  <div id="disputePopup" class="fixed inset-0 bg-black bg-opacity-40 z-50 flex items-center justify-center hidden">
    <div class="bg-white rounded-2xl shadow-xl max-w-lg w-full p-6 sm:p-8 relative">
      <button onclick="closeDisputePopup()" class="absolute top-3 right-4 text-gray-400 hover:text-gray-700 text-2xl">&times;</button>
      <div class="flex items-center gap-2 mb-4">
        <span class="bg-red-100 text-red-600 rounded-full p-2"><svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 8v4m0 4h.01"/></svg></span>
        <span class="text-lg font-semibold text-red-700">You have received a dispute</span>
      </div>
      <div class="text-gray-700 mb-2 text-sm">The client has sent you the following message:</div>
      <div class="bg-blue-50 rounded-lg p-4 mb-4 text-sm text-gray-800 text-left">
        Hi "name service provider",<br><br>
        I hope you're doing well. I'm contacting you because I have some concerns about the current order:
        <ul class="list-disc pl-5 my-2">
          <li>No update has been shared since the project started.</li>
          <li>The expected delivery date was 3 days ago.</li>
          <li>I sent 2 messages without a reply.</li>
        </ul>
        I'd really appreciate it if you could either provide a clear update or cancel the order if you're unable to continue. Looking forward to your response. Thanks in advance!
      </div>
      <div class="flex items-center gap-2 mb-4">
        <span class="text-orange-500 text-base"><i class="fas fa-clock"></i></span>
        <span class="text-sm text-orange-600 font-medium">Time remaining to respond: <span id="disputeTimer">23:51:43</span></span>
      </div>
      <div class="flex gap-4 mt-2">
        <button onclick="openDecisionPopup()" class="bg-white border border-red-400 text-red-600 px-6 py-2 rounded-lg font-semibold hover:bg-red-50 transition w-full">Refuse Request</button>
        <button onclick="openDecisionPopup()" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg font-semibold transition w-full">Accept Request</button>
      </div>
    </div>
  </div>

  <!-- Decision Sent Popup Modal -->
  <div id="decisionPopup" class="fixed inset-0 bg-black bg-opacity-40 z-50 flex items-center justify-center hidden">
    <div class="bg-green-50 border border-green-200 rounded-2xl shadow-xl max-w-md w-full p-8 text-center relative">
      <button onclick="closeDecisionPopup()" class="absolute top-3 right-4 text-gray-400 hover:text-gray-700 text-2xl">&times;</button>
      <div class="flex flex-col items-center mb-4">
        <div class="w-14 h-14 bg-green-500 rounded-full flex items-center justify-center mb-4">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="10" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4"/>
          </svg>
        </div>
        <h2 class="text-xl font-bold text-green-700 mb-2">Your decision has been sent!</h2>
      </div>
      <p class="text-gray-700 mb-2">The service requester has just received your message.<br>
        We'll keep you in the loop for what happens next.</p>
      <p class="text-gray-600 mt-4">Thanks a bunch for your trust! 🙌</p>
    </div>
  </div>

  <!-- Delivery Confirmation Popup (Step 1) -->
  <div id="deliveryConfirmPopup" class="fixed inset-0 bg-black bg-opacity-40 z-50 flex items-center justify-center hidden">
    <div class="bg-white rounded-2xl shadow-xl max-w-md w-full p-8 text-center relative">
      <button onclick="closeDeliveryConfirmPopup()" class="absolute top-3 right-4 text-gray-400 hover:text-gray-700 text-2xl">&times;</button>
      <div class="flex flex-col items-center mb-4">
        <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center mb-2">
          <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
            <rect x="5" y="7" width="14" height="10" rx="2" fill="#fff" stroke="#3B82F6"/>
            <rect x="7" y="5" width="10" height="4" rx="2" fill="#3B82F6"/>
          </svg>
        </div>
        <h2 class="text-lg font-bold text-blue-900 mb-2 flex items-center justify-center gap-2">
          <span><img src="https://cdn.jsdelivr.net/gh/twitter/twemoji@14.0.2/assets/svg/1f4e6.svg" class="w-6 h-6 inline" alt="box" /></span>
          Do you confirm that your mission is completed and delivered?
        </h2>
        <p class="text-gray-700 mb-4">Your service requester has just received your delivery confirmation.</p>
      </div>
      <div class="flex flex-col gap-3 items-center">
        <button onclick="openDeliverySentPopup()" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-full px-8 py-2 text-base flex items-center justify-center gap-2 transition">
          <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20"><rect x="5" y="9" width="10" height="6" rx="2"/><rect x="7" y="5" width="6" height="4" rx="2"/></svg>
          YES
        </button>
        <button onclick="closeDeliveryConfirmPopup()" class="border border-blue-400 text-blue-600 rounded-full px-8 py-2 font-semibold bg-white hover:bg-blue-50 transition text-base">
          &larr; Back
        </button>
      </div>
    </div>
  </div>

  <!-- Delivery Sent Popup (Step 2) -->
  <div id="deliverySentPopup" class="fixed inset-0 bg-black bg-opacity-40 z-50 flex items-center justify-center hidden">
    <div class="bg-white rounded-2xl shadow-xl max-w-md w-full p-8 text-center relative">
      <button onclick="closeDeliverySentPopup()" class="absolute top-3 right-4 text-gray-400 hover:text-gray-700 text-2xl">&times;</button>
      <div class="flex flex-col items-center mb-4">
        <div class="w-14 h-14 bg-blue-600 rounded-full flex items-center justify-center mb-2">
          <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4"/>
            <circle cx="12" cy="12" r="10"/>
          </svg>
        </div>
        <h2 class="text-xl font-bold text-blue-900 mb-2 flex items-center justify-center gap-2">
          <span><svg class="w-6 h-6 inline" fill="none" stroke="#3B82F6" stroke-width="2.5" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4"/></svg></span>
          Your delivery confirmation has been sent! <span class="ml-1">📬</span>
        </h2>
        <p class="text-gray-700 mb-4">Your service requester has just been notified. They will now be asked to validate the delivery.</p>
      </div>
      <a href="/dashboardindex" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-full px-8 py-2 text-base flex items-center justify-center gap-2 transition">
        Go back to my dashboard
      </a>
    </div>
  </div>

  <script>
    function openDisputePopup(idx) {
      document.getElementById('disputePopup').classList.remove('hidden');
    }
    function closeDisputePopup() {
      document.getElementById('disputePopup').classList.add('hidden');
    }
    function openDecisionPopup() {
      closeDisputePopup();
      document.getElementById('decisionPopup').classList.remove('hidden');
    }
    function closeDecisionPopup() {
      document.getElementById('decisionPopup').classList.add('hidden');
    }

    // Delivery confirmation popups
    function openDeliveryConfirmPopup() {
      document.getElementById('deliveryConfirmPopup').classList.remove('hidden');
    }
    function closeDeliveryConfirmPopup() {
      document.getElementById('deliveryConfirmPopup').classList.add('hidden');
    }
    function openDeliverySentPopup() {
      closeDeliveryConfirmPopup();
      document.getElementById('deliverySentPopup').classList.remove('hidden');
    }
    function closeDeliverySentPopup() {
      document.getElementById('deliverySentPopup').classList.add('hidden');
    }
  </script>
@include('dashboard.bottomnavbar')
</body>
</html>

<style>
@media (max-width: 640px) {
  .grid-cols-1 > div.bg-blue-100,
  .grid-cols-1 > div.bg-white {
    flex-direction: row !important;
    align-items: center !important;
    padding: 1.25rem !important;
    gap: 0.5rem !important;
  }
  .grid-cols-1 > div.bg-blue-100 h3,
  .grid-cols-1 > div.bg-white h3 {
    font-size: 1rem !important;
    margin-bottom: 0.25rem !important;
    text-transform: none !important;
    letter-spacing: 0 !important;
  }
  .grid-cols-1 > div.bg-blue-100 .w-16,
  .grid-cols-1 > div.bg-white .w-16 {
    margin-bottom: 0 !important;
  }
  .grid-cols-1 > div.bg-blue-100 .flex-1,
  .grid-cols-1 > div.bg-white .flex-1 {
    min-width: 0;
  }
  .grid-cols-1 > div.bg-blue-100 a,
  .grid-cols-1 > div.bg-white a {
    font-size: 1rem !important;
    padding: 0.5rem 1.25rem !important;
    border-radius: 9999px !important;
  }
}
</style>