<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Provider Detail</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .star-filled { color: #3B82F6; }
        .star-yellow { color: #FCD34D; }
    </style>
</head>
<body class="min-h-screen">
   @include('includes.header')
     @include('pages.popup')


    <div class="max-w-6xl mx-auto space-y-6 mt-8">
        <!-- Social Media Share Card (replace old icons with new card) -->
        <div class="flex justify-end mb-2">
            <div class="flex items-center bg-gradient-to-r from-blue-500 to-blue-700 rounded-2xl px-6 py-3 shadow-lg space-x-4">
                <span class="text-white font-semibold flex items-center text-base">
                  <span class="mr-2">🚀</span>Share this sheet to help your friends
                </span>
                <a href="#" class="w-8 h-8 flex items-center justify-center rounded-full bg-blue-400 hover:bg-white transition">
                  <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/facebook.svg" alt="Facebook" class="w-5 h-5" />
                </a>
                <a href="#" class="w-8 h-8 flex items-center justify-center rounded-full bg-pink-400 hover:bg-white transition">
                  <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/instagram.svg" alt="Instagram" class="w-5 h-5" />
                </a>
                <a href="#" class="w-8 h-8 flex items-center justify-center rounded-full bg-white hover:bg-white transition">
                  <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/tiktok.svg" alt="TikTok" class="w-5 h-5" />
                </a>
                <a href="#" class="w-8 h-8 flex items-center justify-center rounded-full bg-red-600 hover:bg-white transition">
                  <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/youtube.svg" alt="YouTube" class="w-5 h-5" />
                </a>
                <a href="#" class="w-8 h-8 flex items-center justify-center rounded-full bg-blue-300 hover:bg-white transition">
                  <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/twitter.svg" alt="Twitter" class="w-5 h-5" />
                </a>
            </div>
        </div>
        <!-- Main Content Layout -->
        <div class="flex flex-col lg:flex-row gap-6">

            <!-- Profile Card -->
            <div class="lg:w-1/3 w-full">
                <div class="bg-blue-100 rounded-2xl p-6">
                    <div class="text-center mb-4">
                        <button id="profileImgBtn" class="focus:outline-none">
                            <img src="https://i.pravatar.cc/150?img=3" alt="Profile" class="w-20 h-20 rounded-full mx-auto mb-4 object-cover hover:scale-110 transition-transform">
                        </button>
                        <div class="space-y-2 text-sm">
                            <div class="flex justify-center gap-1 text-blue-500"><i class="fas fa-check"></i><span>Profile verified</span></div>
                            <div class="flex justify-center gap-1"><i class="fas fa-star star-filled"></i><span>4.85 / 5</span></div>
                        </div>
                    </div>
                    <div class="text-center text-xs text-gray-500 uppercase mb-4">ULYSSE SINCE 3 MONTHS </div>
                    <div class="space-y-3 text-sm mb-6">
                        <div class="flex items-center gap-2"><i class="fas fa-seedling text-blue-500"></i>Gardener</div>
                        <div class="flex items-center gap-2"><i class="fas fa-tools text-blue-500"></i>Handyman</div>
                        <div class="flex items-center gap-2"><i class="fas fa-calculator text-blue-500"></i>Accounting</div>
                    </div>
                                     <Button> <a  id="suggestMissionBtn" class="inline-block mt-6 bg-red-600 hover:bg-white hover:text-black text-white py-3 px-6 rounded-lg text-sm font-medium">Suggest A Mission</a></Button>
                </div>
            </div>
            <!-- Detail Section -->
            <div class="lg:w-2/3 w-full">
                <div class="flex justify-between items-start flex-wrap gap-4 mb-6">
                    <div>
                        <h2 class="text-xl font-bold">NAME</h2>
                        <p class="text-sm text-gray-600">NUMBER OF SERVICES PROVIDED: 16</p>
                    </div>
                </div>

                <div class="bg-white rounded-lg p-4 mb-4 border">
                    <p class="text-sm text-gray-700">A few words presentation of the Ulysse...</p>
                </div>

                <div class="bg-white rounded-lg p-4 mb-6 border">
                    <p class="text-sm font-medium mb-4">Special Status</p>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-x-6 gap-y-3">
                        <div class="flex items-center gap-2 text-sm"><i class="fas fa-seedling text-blue-500"></i><span>gardener</span></div>
                        <div class="flex items-center gap-2 text-sm"><i class="fas fa-tools text-blue-500"></i><span>handyman</span></div>
                        <div class="flex items-center gap-2 text-sm"><i class="fas fa-calculator text-blue-500"></i><span>accounting</span></div>
                    </div>
                </div>

                <!-- Reviews -->
                <div>
                    <h3 class="text-lg font-bold mb-3">REVIEWS AND COMMENTS</h3>
                    <div class="flex items-center gap-2 mb-2"><i class="fas fa-star star-yellow"></i><span class="text-lg font-bold">4.88</span></div>
                    <p class="text-sm text-gray-600 mb-4">Out of 5 for 13 reviews</p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <button class="bg-yellow-300 text-black py-2 px-3 rounded text-sm font-medium">Home help (4)</button>
                        <button class="border border-gray-300 bg-white py-2 px-3 rounded text-sm flex items-center gap-1"><i class="fas fa-star text-gray-400"></i>5 (10)</button>
                        <button class="border border-gray-300 bg-white py-2 px-3 rounded text-sm flex items-center gap-1"><i class="fas fa-star text-gray-400"></i>4 (3)</button>
                    </div>

                    <div class="space-y-4">
                        <div class="flex gap-3">
                            <div class="w-12 h-12 bg-gray-300 rounded-full"></div>
                            <div class="flex-1">
                                <span class="text-sm font-medium">HOME DELIVERY</span>
                                <div class="flex gap-1 my-1">
                                    <i class="fas fa-star star-yellow text-xs"></i>
                                    <i class="fas fa-star star-yellow text-xs"></i>
                                    <i class="fas fa-star star-yellow text-xs"></i>
                                    <i class="fas fa-star star-yellow text-xs"></i>
                                    <i class="fas fa-star star-yellow text-xs"></i>
                                </div>
                                <p class="text-sm font-medium">Perfect</p>
                                <div class="flex flex-wrap gap-2 text-xs text-gray-500 items-center">
                                    <span class="font-medium">SARA</span>
                                    <span>4 months ago</span>
                                    <span class="bg-blue-500 text-white px-2 py-1 rounded-full"><i class="fas fa-check mr-1"></i>Very effective</span>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <div class ="pb-12"></div>

    <!-- Modal for enlarged profile image -->
    <div id="profileImgModal" class="fixed inset-0 bg-black bg-opacity-60 flex items-center justify-center z-50 hidden">
        <div class="relative">
            <button id="closeProfileImgModal" class="absolute top-2 right-2 bg-white rounded-full p-1 shadow hover:bg-gray-200">
                <i class="fas fa-times text-xl text-gray-700"></i>
            </button>
            <img src="https://i.pravatar.cc/150?img=3" alt="Profile Large" class="w-72 h-72 rounded-full object-cover border-4 border-white shadow-xl">
        </div>
    </div>

    <!-- Suggest a Mission Modal (Step 1, 2 & 3) -->
    <div id="suggestMissionModal" class="fixed inset-0 bg-black bg-opacity-60 flex items-center justify-center z-50 hidden">
        <div class="bg-white rounded-xl shadow-lg p-8 w-full max-w-md relative">
            <button id="closeSuggestMissionModal" class="absolute top-2 right-2 bg-gray-200 rounded-full p-1 hover:bg-gray-300">
                <i class="fas fa-times text-xl text-gray-700"></i>
            </button>
            <!-- Step 1 -->
            <div id="suggestStep1">
                <h2 class="text-2xl font-bold text-center mb-6 text-blue-900">Select your category</h2>
                <form>
                    <div class="mb-4">
                        <label class="block font-semibold mb-1" for="category">Category:</label>
                        <select id="category" class="w-full border rounded px-3 py-2">
                            <option value="">-- Select Category --</option>
                            <!-- Populate dynamically as needed -->
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="block font-semibold mb-1" for="subcategory">Subcategory:</label>
                        <select id="subcategory" class="w-full border rounded px-3 py-2">
                            <option value="">-- Select Subcategory --</option>
                            <!-- Populate dynamically as needed -->
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="block font-semibold mb-1" for="subsubcategory">Sub-subcategory:</label>
                        <select id="subsubcategory" class="w-full border rounded px-3 py-2">
                            <option value="">-- Select Sub-subcategory --</option>
                            <!-- Populate dynamically as needed -->
                        </select>
                    </div>
                    <div class="flex justify-end">
                        <button type="button" id="toStep2Btn" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">Next</button>
                    </div>
                </form>
                <div class="mt-6">
                    <div class="w-full h-2 bg-gray-200 rounded">
                        <div class="h-2 bg-blue-500 rounded" style="width: 25%"></div>
                    </div>
                </div>
            </div>
            <!-- Step 2 -->
            <div id="suggestStep2" class="hidden">
                <h2 class="text-2xl font-bold text-center mb-6 text-blue-900">In which country is your need?</h2>
                <form>
                    <input type="text" id="countryInput" class="w-full border  bg-gray-100 rounded px-3 py-3 mb-8 text-lg placeholder-gray-400" placeholder="ex: USA" required />
                    <div class="flex justify-between items-center">
                        <button type="button" id="backToStep1Btn" class="text-blue-600 font-semibold">Back</button>
                        <button type="button" id="toStep3Btn" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">Next</button>
                    </div>
                    <div class="mt-6">
                        <div class="w-full h-2 bg-gray-200 rounded">
                            <div class="h-2 bg-blue-500 rounded" style="width: 40%"></div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Step 3 -->
            <div id="suggestStep3" class="hidden">
                <h2 class="text-2xl font-bold text-center mb-6 text-blue-700">What is your country of origin?</h2>
                <form>
                    <input type="text" id="originCountryInput" class="w-full border border-blue-200 bg-gray-100 rounded px-3 py-3 mb-4 text-lg placeholder-gray-400" placeholder="ex: Bangkok, New York..." required />
                    <!-- <div class="bg-yellow-100 border-l-4 border-yellow-400 text-yellow-800 px-4 py-3 mb-8 rounded flex items-center justify-center">
                        <span class="font-semibold mx-auto text-center">It is important to know the local legislation</span>
                    </div> -->
                    <div class="flex justify-between items-center">
                        <button type="button" id="backToStep2Btn" class="text-blue-600 font-semibold">Back</button>
                        <button type="button" id="toStep4Btn" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">Next</button>
                    </div>
                    <div class="mt-6">
                        <div class="w-full h-2 bg-gray-200 rounded">
                            <div class="h-2 bg-blue-600 rounded" style="width: 60%"></div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Step 4 -->
            <div id="suggestStep4" class="hidden">
                <h2 class="text-2xl font-bold text-center mb-6" style="color:#2563eb;">What city are you currently in?</h2>
                <form>
                    <input type="text" id="currentCityInput" class="w-full border border-blue-200 bg-gray-200 rounded px-3 py-3 mb-8 text-lg placeholder-gray-400" placeholder="ex: Bangkok, New York..." required />
                    <div class="flex justify-between items-center mb-2">
                        <button type="button" id="backToStep3Btn" class="text-blue-600 font-semibold">Back</button>
                        <button type="button" id="toStep5Btn" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded">Next</button>
                    </div>
                    <div class="mt-6">
                        <div class="w-full h-2 bg-gray-200 rounded">
                            <div class="h-2 rounded" style="width: 80%; background:#2563eb;"></div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Step 5 -->
            <div id="suggestStep5" class="hidden">
                <h2 class="text-2xl font-bold text-center mb-8" style="color:#2563eb;">How long have you been here?</h2>
                <form>
                    <div class="grid grid-cols-2 gap-4 max-w-lg mx-auto mb-8">
                        <button type="button" class="duration-btn border border-blue-500 rounded-full py-3 text-center text-blue-700 font-semibold transition">Not yet arrived</button>
                        <button type="button" class="duration-btn border border-blue-500 rounded-full py-3 text-center text-blue-700 font-semibold transition">1 - 7 days</button>
                        <button type="button" class="duration-btn border border-blue-500 rounded-full py-3 text-center text-blue-700 font-semibold transition">1 - 4 weeks</button>
                        <button type="button" class="duration-btn border border-blue-500 rounded-full py-3 text-center text-blue-700 font-semibold transition">1 - 12 months</button>
                        <button type="button" class="duration-btn border border-blue-500 rounded-full py-3 text-center text-blue-700 font-semibold transition">1 - 2 years</button>
                        <button type="button" class="duration-btn border border-blue-500 rounded-full py-3 text-center text-blue-700 font-semibold transition">2 - 5 years</button>
                        <button type="button" class="duration-btn col-span-2 border border-blue-500 rounded-full py-3 text-center text-blue-700 font-semibold transition">More than 5 years</button>
                    </div>
                    <input type="hidden" id="durationHere" name="durationHere" />
                    <div class="flex justify-between items-center">
                        <button type="button" id="backToStep4Btn" class="text-blue-600 font-semibold">Back</button>
                        <button type="button" id="toStep6Btn" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded">Next</button>
                    </div>
                    <div class="mt-6">
                        <div class="w-full h-2 bg-gray-200 rounded">
                            <div class="h-2 rounded" style="width: 95%; background:#2563eb;"></div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Step 6 -->
            <div id="suggestStep6" class="hidden">
                <h2 class="text-2xl font-bold text-center mb-8" style="color:#2563eb;">What title do you want for your request for help?</h2>
                <form>
                    <input type="text" id="requestTitle" class="w-full border border-blue-300 bg-gray-100 rounded px-3 py-3 mb-6 text-lg placeholder-gray-400" placeholder="I need someone to warm her meal," required />
                    <label for="moreDetails" class="block font-semibold mb-2 text-blue-800">CAN YOU GIVE US MORE DETAILS?</label>
                    <textarea id="moreDetails" rows="5" maxlength="1500" placeholder="Describe the circumstances, dates, places, people involved..." class="w-full border border-blue-300 bg-gray-100 rounded px-3 py-3 mb-2 resize-none"></textarea>
                    <div class="text-right text-sm text-gray-500 mb-4" id="charCount">0 / 1500</div>
                    <div class="flex justify-between items-center">
                        <button type="button" id="backToStep5Btn" class="text-blue-600 font-semibold">Back</button>
                        <button type="button" id="toStep7Btn" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded">Next</button>
                    </div>
                    <div class="mt-6">
                        <div class="w-full h-2 bg-gray-200 rounded">
                            <div class="h-2 rounded" style="width: 100%; background:#2563eb;"></div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Step 7 -->
            <div id="suggestStep7" class="hidden">
                <h2 class="text-2xl font-bold text-center mb-8" style="color:#2563eb;">Add photos if you wish</h2>
                <form>
                    <div class="flex justify-center mb-8">
                        <div class="flex border-2 border-blue-300 rounded-2xl p-6 gap-6 bg-white" style="box-shadow:0 0 0 2px #2563eb22;">
                            <!-- 3 photo upload slots -->
                            <?php for ($i = 0; $i < 3; $i++): ?>
                            <div class="flex flex-col items-center px-2 py-1">
                                <button type="button" class="photo-menu-btn flex flex-col items-center group focus:outline-none" data-index="<?= $i ?>">
                                    <div class="w-16 h-16 rounded-full bg-blue-50 flex items-center justify-center border-2 border-blue-200 group-hover:border-blue-500 transition">
                                        <img src="https://cdn-icons-png.flaticon.com/512/545/545682.png" alt="Upload" class="w-10 h-10 photo-preview" id="photoPreview<?= $i ?>" />
                                    </div>
                                    <span class="text-blue-700 font-medium text-xs mt-2">Upload photo</span>
                                </button>
                                <input type="file" accept="image/*" class="hidden photo-input" id="photoInput<?= $i ?>" />
                            </div>
                            <?php endfor; ?>
                        </div>
                    </div>
                    <div class="flex justify-between items-center">
                        <button type="button" id="backToStep6Btn" class="text-blue-600 font-semibold">Back</button>
                        <button type="submit" id="finishMissionBtn" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-2 rounded text-lg font-semibold">Next</button>
                    </div>
                    <div class="mt-8">
                        <div class="w-full h-2 bg-blue-100 rounded">
                            <div class="h-2 bg-blue-600 rounded" style="width: 100%"></div>
                        </div>
                    </div>
                </form>
                <!-- Photo Menu Modal -->
                <div id="photoMenuModal" class="fixed inset-0 bg-black bg-opacity-60 flex items-center justify-center z-50 hidden">
                  <div class="bg-white rounded-xl shadow-lg p-6 w-80 flex flex-col gap-2">
                    <button type="button" class="photo-menu-option flex items-center gap-3 px-4 py-3 rounded hover:bg-blue-50" data-action="library">
                      <i class="fa fa-image text-blue-600"></i>
                      <span>Photo Library</span>
                    </button>
                    <button type="button" class="photo-menu-option flex items-center gap-3 px-4 py-3 rounded hover:bg-blue-50" data-action="camera">
                      <i class="fa fa-camera text-blue-600"></i>
                      <span>Take a Photo</span>
                    </button>
                    <button type="button" class="photo-menu-option flex items-center gap-3 px-4 py-3 rounded hover:bg-blue-50" data-action="file">
                      <i class="fa fa-folder text-blue-600"></i>
                      <span>Choose File</span>
                    </button>
                    <button type="button" id="closePhotoMenuModal" class="mt-2 text-gray-500 hover:text-blue-700 text-center">Cancel</button>
                  </div>
                </div>
                <!-- Camera Modal -->
                <div id="cameraModal" class="fixed inset-0 bg-black bg-opacity-70 flex items-center justify-center z-50 hidden">
                  <div class="bg-white rounded-xl p-6 flex flex-col items-center relative">
                    <button id="closeCameraModal" class="absolute top-2 right-2 text-gray-600 hover:text-black text-xl">&times;</button>
                    <video id="cameraVideo" width="320" height="240" autoplay class="rounded mb-4"></video>
                    <button id="capturePhotoBtn" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">Capture Photo</button>
                  </div>
                </div>
            </div>
            <!-- Step 8 -->
            <div id="suggestStep8" class="hidden">
                <h2 class="text-2xl font-bold text-center mb-8" style="color:#2563eb;">What type of help do you need?</h2>
                <div class="text-center mb-6">
                    <span class="font-semibold text-lg text-blue-800">How can you provide support?</span>
                </div>
                <form>
                    <div class="space-y-5 max-w-xl mx-auto mb-8">
                        <div class="flex items-center justify-between border border-blue-300 rounded-full px-6 py-3">
                            <span class="text-base font-medium">Online</span>
                            <div class="flex gap-2">
                                <button type="button" class="toggle-btn border border-blue-500 rounded-full px-5 py-1 text-blue-700 font-semibold bg-white transition" data-group="online" data-value="yes">Yes</button>
                                <button type="button" class="toggle-btn border border-blue-500 rounded-full px-5 py-1 text-blue-700 font-semibold bg-white transition" data-group="online" data-value="no">No</button>
                            </div>
                        </div>
                        <div class="flex items-center justify-between border border-blue-300 rounded-full px-6 py-3">
                            <span class="text-base font-medium">In person</span>
                            <div class="flex gap-2">
                                <button type="button" class="toggle-btn border border-blue-500 rounded-full px-5 py-1 text-blue-700 font-semibold bg-white transition" data-group="inperson" data-value="yes">Yes</button>
                                <button type="button" class="toggle-btn border border-blue-500 rounded-full px-5 py-1 text-blue-700 font-semibold bg-white transition" data-group="inperson" data-value="no">No</button>
                            </div>
                        </div>
                        <div class="flex items-center justify-between border border-blue-300 rounded-full px-6 py-3">
                            <span class="text-base font-medium">I don't know</span>
                            <div class="flex gap-2">
                                <button type="button" class="toggle-btn border border-blue-500 rounded-full px-5 py-1 text-blue-700 font-semibold bg-white transition" data-group="unknown" data-value="yes">Yes</button>
                                <button type="button" class="toggle-btn border border-blue-500 rounded-full px-5 py-1 text-blue-700 font-semibold bg-white transition" data-group="unknown" data-value="no">No</button>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" id="helpOnline" name="helpOnline" />
                    <input type="hidden" id="helpInPerson" name="helpInPerson" />
                    <input type="hidden" id="helpUnknown" name="helpUnknown" />
                    <div class="flex justify-between items-center">
                        <button type="button" id="backToStep7Btn" class="text-blue-600 font-semibold">Back</button>
                        <button type="submit" id="toStep9Btn" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-2 rounded text-lg font-semibold">Next</button>
                    </div>
                    <div class="mt-8">
                        <div class="w-full h-2 bg-blue-100 rounded">
                            <div class="h-2 bg-blue-600 rounded" style="width: 100%"></div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Step 9 -->
            <div id="suggestStep9" class="hidden">
                <h2 class="text-2xl font-bold text-center mb-8" style="color:#2563eb;">How soon do you need this service?</h2>
                <div class="text-center mb-6">
                    <span class="text-blue-600 font-medium">Please select an option below</span>
                </div>
                <form>
                    <div class="space-y-4 max-w-xl mx-auto mb-8">
                        <button type="button" class="urgency-btn w-full flex items-center justify-between border border-blue-300 rounded-xl px-6 py-4 text-lg font-medium text-blue-700 bg-white transition">
                            It's urgent
                            <span class="ml-4 w-6 h-6 flex items-center justify-center rounded-full border-2 border-blue-300">
                                <span class="urgency-radio bg-white w-3 h-3 rounded-full block"></span>
                            </span>
                        </button>
                        <button type="button" class="urgency-btn w-full flex items-center justify-between border border-blue-300 rounded-xl px-6 py-4 text-lg font-medium text-blue-700 bg-white transition">
                            Within a week
                            <span class="ml-4 w-6 h-6 flex items-center justify-center rounded-full border-2 border-blue-300">
                                <span class="urgency-radio bg-white w-3 h-3 rounded-full block"></span>
                            </span>
                        </button>
                        <button type="button" class="urgency-btn w-full flex items-center justify-between border border-blue-300 rounded-xl px-6 py-4 text-lg font-medium text-blue-700 bg-white transition">
                            Between 1 and 2 weeks
                            <span class="ml-4 w-6 h-6 flex items-center justify-center rounded-full border-2 border-blue-300">
                                <span class="urgency-radio bg-white w-3 h-3 rounded-full block"></span>
                            </span>
                        </button>
                        <button type="button" class="urgency-btn w-full flex items-center justify-between border border-blue-300 rounded-xl px-6 py-4 text-lg font-medium text-blue-700 bg-white transition">
                            Between 2 weeks and 1 month
                            <span class="ml-4 w-6 h-6 flex items-center justify-center rounded-full border-2 border-blue-300">
                                <span class="urgency-radio bg-white w-3 h-3 rounded-full block"></span>
                            </span>
                        </button>
                        <button type="button" class="urgency-btn w-full flex items-center justify-between border border-blue-300 rounded-xl px-6 py-4 text-lg font-medium text-blue-700 bg-white transition">
                            More than a month
                            <span class="ml-4 w-6 h-6 flex items-center justify-center rounded-full border-2 border-blue-300">
                                <span class="urgency-radio bg-white w-3 h-3 rounded-full block"></span>
                            </span>
                        </button>
                    </div>
                    <input type="hidden" id="urgencyValue" name="urgencyValue" />
                    <div class="flex justify-between items-center">
                        <button type="button" id="backToStep8Btn" class="text-blue-600 font-semibold">Back</button>
                        <button type="submit" id="finishAllBtn" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-2 rounded text-lg font-semibold">Next</button>
                    </div>
                    <div class="mt-8">
                        <div class="w-full h-2 bg-blue-100 rounded">
                            <div class="h-2 bg-blue-600 rounded" style="width: 100%"></div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Step 10 -->
            <div id="suggestStep10" class="hidden">
                <h2 class="text-2xl font-bold text-center mb-8" style="color:#2563eb;">Which language do you speak?</h2>
                <form>
                    <div class="grid grid-cols-2 md:grid-cols-2 gap-4 max-w-2xl mx-auto mb-8">
                        <button type="button" class="lang-btn flex items-center gap-3 px-6 py-3 rounded-xl bg-blue-500 text-white font-medium text-lg transition border-2 border-blue-500">
                            <img src="https://flagcdn.com/us.svg" alt="English" class="w-7 h-5 rounded shadow" /> English
                        </button>
                        <button type="button" class="lang-btn flex items-center gap-3 px-6 py-3 rounded-xl bg-blue-500 text-white font-medium text-lg transition border-2 border-blue-500">
                            <img src="https://flagcdn.com/fr.svg" alt="French" class="w-7 h-5 rounded shadow" /> French
                        </button>
                        <button type="button" class="lang-btn flex items-center gap-3 px-6 py-3 rounded-xl bg-blue-500 text-white font-medium text-lg transition border-2 border-blue-500">
                            <img src="https://flagcdn.com/es.svg" alt="Spanish" class="w-7 h-5 rounded shadow" /> Spanish
                        </button>
                        <button type="button" class="lang-btn flex items-center gap-3 px-6 py-3 rounded-xl bg-blue-500 text-white font-medium text-lg transition border-2 border-blue-500">
                            <img src="https://flagcdn.com/pt.svg" alt="Portuguese" class="w-7 h-5 rounded shadow" /> Portuguese
                        </button>
                        <button type="button" class="lang-btn flex items-center gap-3 px-6 py-3 rounded-xl bg-blue-500 text-white font-medium text-lg transition border-2 border-blue-500">
                            <img src="https://flagcdn.com/de.svg" alt="German" class="w-7 h-5 rounded shadow" /> German
                        </button>
                        <button type="button" class="lang-btn flex items-center gap-3 px-6 py-3 rounded-xl bg-blue-500 text-white font-medium text-lg transition border-2 border-blue-500">
                            <img src="https://flagcdn.com/it.svg" alt="Italian" class="w-7 h-5 rounded shadow" /> Italian
                        </button>
                        <button type="button" class="lang-btn flex items-center gap-3 px-6 py-3 rounded-xl bg-blue-500 text-white font-medium text-lg transition border-2 border-blue-500">
                            <img src="https://flagcdn.com/sa.svg" alt="Arabic" class="w-7 h-5 rounded shadow" /> Arabic
                        </button>
                        <button type="button" class="lang-btn flex items-center gap-3 px-6 py-3 rounded-xl bg-blue-500 text-white font-medium text-lg transition border-2 border-blue-500">
                            <img src="https://flagcdn.com/jp.svg" alt="Japanese" class="w-7 h-5 rounded shadow" /> Japanese
                        </button>
                        <button type="button" class="lang-btn flex items-center gap-3 px-6 py-3 rounded-xl bg-blue-500 text-white font-medium text-lg transition border-2 border-blue-500">
                            <img src="https://flagcdn.com/kr.svg" alt="Korean" class="w-7 h-5 rounded shadow" /> Korean
                        </button>
                        <button type="button" class="lang-btn flex items-center gap-3 px-6 py-3 rounded-xl bg-blue-500 text-white font-medium text-lg transition border-2 border-blue-500">
                            <img src="https://flagcdn.com/in.svg" alt="Hindi" class="w-7 h-5 rounded shadow" /> Hindi
                        </button>
                        <button type="button" class="lang-btn flex items-center gap-3 px-6 py-3 rounded-xl bg-blue-500 text-white font-medium text-lg transition border-2 border-blue-500">
                            <img src="https://flagcdn.com/tr.svg" alt="Turkish" class="w-7 h-5 rounded shadow" /> Turkish
                        </button>
                    </div>
                    <input type="hidden" id="selectedLanguage" name="selectedLanguage" />
                    <div class="flex justify-between items-center">
                        <button type="button" id="backToStep9Btn" class="text-blue-600 font-semibold">Back</button>
                        <button type="submit" id="finishLangBtn" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-2 rounded text-lg font-semibold">Next</button>
                    </div>
                    <div class="mt-8">
                        <div class="w-full h-2 bg-blue-100 rounded">
                            <div class="h-2 bg-blue-600 rounded" style="width: 100%"></div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Step 11 -->
            <div id="suggestStep11" class="hidden">
                <h2 class="text-2xl font-bold text-center mb-8" style="color:#2563eb;">What's your first name & surname?</h2>
                <form>
                    <div class="max-w-lg mx-auto mb-8">
                        <input type="text" id="firstName" class="w-full border border-blue-200 bg-gray-200 rounded-lg px-4 py-4 mb-6 text-lg placeholder-blue-400 focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Your first name" autocomplete="off" />
                        <input type="text" id="surname" class="w-full border border-blue-200 bg-gray-200 rounded-lg px-4 py-4 mb-6 text-lg placeholder-blue-400 focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Your surname" autocomplete="off" />
                    </div>
                    <div class="flex justify-between items-center">
                        <button type="button" id="backToStep10Btn" class="text-blue-600 font-semibold">Back</button>
                        <button type="submit" id="finishNameBtn" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-2 rounded-lg text-lg font-semibold">Next</button>
                    </div>
                    <div class="mt-8">
                        <div class="w-full h-2 bg-blue-100 rounded">
                            <div class="h-2 bg-blue-600 rounded" style="width: 80%"></div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Step 12 -->
            <div id="suggestStep12" class="hidden">
                <h2 class="text-3xl font-bold text-center mb-8" style="color:#2563eb;">What's your e-mail?</h2>
                <form>
                    <div class="max-w-2xl mx-auto mb-8">
                        <input type="email" id="emailInput" class="w-full border border-blue-200 bg-gray-200 rounded-lg px-4 py-4 mb-6 text-lg placeholder-blue-400 focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Enter your address" autocomplete="off" />
                    </div>
                    <div class="flex justify-between items-center">
                        <button type="button" id="backToStep11Btn" class="text-blue-600 font-semibold">Back</button>
                        <button type="submit" id="finishEmailBtn" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-2 rounded-lg text-lg font-semibold">Next</button>
                    </div>
                    <div class="mt-8">
                        <div class="w-full h-2 bg-blue-100 rounded">
                            <div class="h-2 bg-blue-600 rounded" style="width: 90%"></div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Step 13 -->
            <div id="suggestStep13" class="hidden">
                <h2 class="text-3xl font-bold text-center mb-8" style="color:#2563eb;">What's your password?</h2>
                <form>
                    <div class="max-w-2xl mx-auto mb-8">
                        <input type="password" id="passwordInput" class="w-full border border-blue-200 bg-gray-200 rounded-lg px-4 py-4 mb-6 text-lg placeholder-blue-400 focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Password" autocomplete="off" />
                    </div>
                    <div class="flex justify-between items-center">
                        <button type="button" id="backToStep12Btn" class="text-blue-600 font-semibold">Back</button>
                        <button type="submit" id="finishPasswordBtn" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-2 rounded-lg text-lg font-semibold">Next</button>
                    </div>
                    <div class="mt-8">
                        <div class="w-full h-2 bg-blue-100 rounded">
                            <div class="h-2 bg-blue-600 rounded" style="width: 100%"></div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Step 14 -->
            <div id="suggestStep14" class="hidden">
                <h2 class="text-3xl font-bold text-center mb-8" style="color:#2563eb;">How long should your request be visible?</h2>
                <div class="text-center mb-6 text-lg text-gray-700">Choose the desired duration</div>
                <form>
                    <div class="flex justify-center gap-6 mb-8">
                        <button type="button" class="duration-visible-btn bg-blue-600 text-white px-8 py-3 rounded-lg text-lg font-semibold focus:outline-none">1 week</button>
                        <button type="button" class="duration-visible-btn bg-blue-600 text-white px-8 py-3 rounded-lg text-lg font-semibold focus:outline-none">2 weeks</button>
                        <button type="button" class="duration-visible-btn bg-blue-600 text-white px-8 py-3 rounded-lg text-lg font-semibold focus:outline-none">1 month</button>
                    </div>
                    <input type="hidden" id="visibleDuration" name="visibleDuration" />
                    <div class="bg-yellow-100 border-l-4 border-yellow-400 text-yellow-900 px-6 py-4 mb-8 rounded">
                        <span class="font-bold">Note:</span> Your Service request will be automatically deleted after the selected duration. After you have chosen <a href="#" class="underline text-blue-700">The service provider</a> you will need to submit a new request if you will need help. When you choose a service provider your ad will be archived.
                    </div>
                    <div class="flex justify-between items-center">
                        <button type="button" id="backToStep13Btn" class="text-blue-600 font-semibold">Back</button>
                        <button type="submit" id="finishVisibleBtn" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-2 rounded-lg text-lg font-semibold">Send Request</button>
                    </div>
                    <div class="mt-8">
                        <div class="w-full h-2 bg-blue-100 rounded">
                            <div class="h-2 bg-blue-600 rounded" style="width: 100%"></div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Step 15 -->
            <div id="suggestStep15" class="hidden">
                <div class="flex flex-col items-center justify-center py-16">
                    <div class="mb-4">
                        <span style="font-size:3rem;display:inline-block;transform:rotate(-15deg);">📣</span>
                    </div>
                    <div class="bg-white rounded-xl shadow p-8 text-center max-w-lg border border-blue-100">
                        <h2 class="text-2xl font-bold mb-3 text-blue-900">Your service provider has been notified!</h2>
                        <p class="text-gray-700 text-lg">Your service request is now published and visible on the platform.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<style>
  .loader {
    border-top-color: transparent;
    animation: spin 1s linear infinite;
  }

  @keyframes spin {
    0% { transform: rotate(0deg);}
    100% { transform: rotate(360deg);}
  }

    .social-btn {
        width: 38px;
        height: 38px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        color: #fff;
        font-size: 1.25rem;
        transition: transform 0.2s, box-shadow 0.2s;
        box-shadow: 0 2px 8px 0 rgba(59,130,246,0.07);
        border: none;
        outline: none;
    }
    .social-btn:hover {
        transform: scale(1.13) rotate(-6deg);
        box-shadow: 0 4px 16px 0 rgba(59,130,246,0.18);
        filter: brightness(1.08);
    }

    .photo-upload-box {
    min-width: 140px;
    min-height: 140px;
}
    /* Add a little hover effect for the upload circles */
    .group:hover .border-blue-200 {
        border-color: #2563eb !important;
    }
    .urgency-btn.selected {
    background: #2563eb;
    color: #fff;
    border-color: #2563eb;
}
.urgency-btn.selected .urgency-radio {
    background: #fff;
    border: 2px solid #fff;
    box-shadow: 0 0 0 4px #2563eb;
}
.urgency-btn .urgency-radio {
    border: 2px solid #2563eb;
}
.lang-btn.selected, .lang-btn:active {
    background: #1e40af !important;
    color: #fff !important;
    border-color: #1e40af !important;
}
</style>

<!-- TOASTR CDN (place in <head>) -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


<script>
document.addEventListener('DOMContentLoaded', function () {
    var btn = document.getElementById('profileImgBtn');
    var modal = document.getElementById('profileImgModal');
    var closeBtn = document.getElementById('closeProfileImgModal');
    if (btn && modal && closeBtn) {
        btn.addEventListener('click', function (e) {
            e.preventDefault();
            modal.classList.remove('hidden');
        });
        closeBtn.addEventListener('click', function () {
            modal.classList.add('hidden');
        });
        modal.addEventListener('click', function (e) {
            if (e.target === modal) modal.classList.add('hidden');
        });
    }

    // Suggest a Mission Modal logic
    function openSuggestMissionModal() {
        document.getElementById('suggestMissionModal').classList.remove('hidden');
        document.getElementById('suggestStep1').classList.remove('hidden');
        document.getElementById('suggestStep2').classList.add('hidden');
    }
    function closeSuggestMissionModal() {
        document.getElementById('suggestMissionModal').classList.add('hidden');
    }
    // Attach to both buttons
    var suggestMissionBtn1 = document.getElementById('suggestMissionBtn');
    var suggestMissionBtn2 = document.querySelector('button[onclick*="window.history.back"]');
    if (suggestMissionBtn1) suggestMissionBtn1.addEventListener('click', function(e){ e.preventDefault(); openSuggestMissionModal(); });
    if (suggestMissionBtn2) suggestMissionBtn2.addEventListener('click', function(e){ e.preventDefault(); openSuggestMissionModal(); });
    var closeSuggestMissionModalBtn = document.getElementById('closeSuggestMissionModal');
    if (closeSuggestMissionModalBtn) closeSuggestMissionModalBtn.addEventListener('click', closeSuggestMissionModal);
    var suggestMissionModal = document.getElementById('suggestMissionModal');
    if (suggestMissionModal) suggestMissionModal.addEventListener('click', function(e){
        if (e.target === suggestMissionModal) closeSuggestMissionModal();
    });

    // Step navigation with validation
    var toStep2Btn = document.getElementById('toStep2Btn');
    var backToStep1Btn = document.getElementById('backToStep1Btn');
    var toStep3Btn = document.getElementById('toStep3Btn');
    var toStep4Btn = document.getElementById('toStep4Btn');
    var backToStep2Btn, backToStep3Btn, toStep5Btn, backToStep4Btn, finishMissionBtn;

    if (toStep2Btn) toStep2Btn.addEventListener('click', function(e){
        e.preventDefault();
        // No validation for Step 1
        document.getElementById('suggestStep1').classList.add('hidden');
        document.getElementById('suggestStep2').classList.remove('hidden');
    });
    if (backToStep1Btn) backToStep1Btn.addEventListener('click', function(e){
        e.preventDefault();
        document.getElementById('suggestStep2').classList.add('hidden');
        document.getElementById('suggestStep1').classList.remove('hidden');
    });
    if (toStep3Btn) toStep3Btn.addEventListener('click', function(e){
        e.preventDefault();
        // Validate Step 2
        var country = document.getElementById('countryInput').value.trim();
        if (!country) {
            toastr.error('Please enter the country.');
            return;
        }
        document.getElementById('suggestStep2').classList.add('hidden');
        document.getElementById('suggestStep3').classList.remove('hidden');
        // Attach back/next for step 3
        backToStep2Btn = document.getElementById('backToStep2Btn');
        toStep4Btn = document.getElementById('toStep4Btn');
        if (backToStep2Btn) backToStep2Btn.onclick = function(e){
            e.preventDefault();
            document.getElementById('suggestStep3').classList.add('hidden');
            document.getElementById('suggestStep2').classList.remove('hidden');
        };
        if (toStep4Btn) toStep4Btn.onclick = function(e){
            e.preventDefault();
            // Validate Step 3
            var origin = document.getElementById('originCountryInput').value.trim();
            if (!origin) {
                toastr.error('Please enter your country of origin.');
                return false;
            }
            document.getElementById('suggestStep3').classList.add('hidden');
            document.getElementById('suggestStep4').classList.remove('hidden');
            // Attach back for step 4
            backToStep3Btn = document.getElementById('backToStep3Btn');
            toStep5Btn = document.getElementById('toStep5Btn');
            if (backToStep3Btn) backToStep3Btn.onclick = function(e){
                e.preventDefault();
                document.getElementById('suggestStep4').classList.add('hidden');
                document.getElementById('suggestStep3').classList.remove('hidden');
            };
            if (toStep5Btn) toStep5Btn.onclick = function(e){
                e.preventDefault();
                // Validate Step 4
                var city = document.getElementById('currentCityInput').value.trim();
                if (!city) {
                    toastr.error('Please enter your current city.');
                    return false;
                }
                document.getElementById('suggestStep4').classList.add('hidden');
                document.getElementById('suggestStep5').classList.remove('hidden');
                // Attach back/finish for step 5
                backToStep4Btn = document.getElementById('backToStep4Btn');
                finishMissionBtn = document.getElementById('finishMissionBtn');
                if (backToStep4Btn) backToStep4Btn.onclick = function(e){
                    e.preventDefault();
                    document.getElementById('suggestStep5').classList.add('hidden');
                    document.getElementById('suggestStep4').classList.remove('hidden');
                };

                // Step 5: duration selection logic
                var durationBtns = document.querySelectorAll('.duration-btn');
                var durationInput = document.getElementById('durationHere');
                durationBtns.forEach(function(btn){
                    btn.onclick = function(ev){
                        ev.preventDefault();
                        durationBtns.forEach(function(b){ 
                            b.classList.remove('bg-blue-600', 'text-white', 'border-blue-800');
                            b.classList.add('text-blue-700', 'border-blue-500');
                        });
                        btn.classList.add('bg-blue-600', 'text-white', 'border-blue-800');
                        btn.classList.remove('text-blue-700', 'border-blue-500');
                        durationInput.value = btn.textContent.trim();
                    };
                });

                if (finishMissionBtn) finishMissionBtn.onclick = function(e){
                    // Validate Step 5
                    var duration = document.getElementById('durationHere').value.trim();
                    if (!duration) {
                        e.preventDefault();
                        toastr.error('Please select how long you have been here.');
                        return false;
                    }
                    e.preventDefault();
                    toastr.success('All steps completed!');
                    closeSuggestMissionModal();
                };
            };
        };
    });
    // Step 5 -> Step 6
    var toStep6Btn, backToStep5Btn;
    toStep6Btn = document.getElementById('toStep6Btn');
    if (toStep6Btn) toStep6Btn.onclick = function(e){
        e.preventDefault();
        // Validate Step 5
        var duration = document.getElementById('durationHere').value.trim();
        if (!duration) {
            toastr.error('Please select how long you have been here.');
            return false;
        }
        document.getElementById('suggestStep5').classList.add('hidden');
        document.getElementById('suggestStep6').classList.remove('hidden');
        // Attach back/finish for step 6
        backToStep5Btn = document.getElementById('backToStep5Btn');
        finishMissionBtn = document.getElementById('finishMissionBtn');
        if (backToStep5Btn) backToStep5Btn.onclick = function(e){
            e.preventDefault();
            document.getElementById('suggestStep6').classList.add('hidden');
            document.getElementById('suggestStep5').classList.remove('hidden');
        };

        // Character count for textarea
        var moreDetails = document.getElementById('moreDetails');
        var charCount = document.getElementById('charCount');
        if (moreDetails && charCount) {
            moreDetails.addEventListener('input', function() {
                charCount.textContent = moreDetails.value.length + " / 1500";
            });
        }

        if (finishMissionBtn) finishMissionBtn.onclick = function(e){
            // Validate Step 6
            var title = document.getElementById('requestTitle').value.trim();
            if (!title) {
                e.preventDefault();
                toastr.error('Please enter a title for your request.');
                return false;
            }
            // Optionally validate moreDetails if required
            // var details = document.getElementById('moreDetails').value.trim();
            // if (!details) {
            //     e.preventDefault();
            //     toastr.error('Please provide more details.');
            //     return false;
            // }
            e.preventDefault();
            toastr.success('All steps completed!');
            closeSuggestMissionModal();
        };
    };
    // Step 6 -> Step 7
    var toStep7Btn = document.getElementById('toStep7Btn');
    var backToStep6Btn, finishMissionBtn;
    if (toStep7Btn) toStep7Btn.onclick = function(e){
        e.preventDefault();
        // Validate Step 6
        var title = document.getElementById('requestTitle').value.trim();
        if (!title) {
            toastr.error('Please enter a title for your request.');
            return false;
        }
        document.getElementById('suggestStep6').classList.add('hidden');
        document.getElementById('suggestStep7').classList.remove('hidden');
        // Attach back/next for step 7
        backToStep6Btn = document.getElementById('backToStep6Btn');
        finishMissionBtn = document.getElementById('finishMissionBtn');
        if (backToStep6Btn) backToStep6Btn.onclick = function(e){
            e.preventDefault();
            document.getElementById('suggestStep7').classList.add('hidden');
            document.getElementById('suggestStep6').classList.remove('hidden');
        };

        // Photo upload logic for 3 slots
        var photoInputs = [
            document.getElementById('photoInput0'),
            document.getElementById('photoInput1'),
            document.getElementById('photoInput2')
        ];
        var photoPreviews = [
            document.getElementById('photoPreview0'),
            document.getElementById('photoPreview1'),
            document.getElementById('photoPreview2')
        ];
        photoInputs.forEach(function(input, idx){
            input.onchange = function(){
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e){
                        photoPreviews[idx].src = e.target.result;
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            };
        });

        // Photo menu modal logic
        var photoMenuModal = document.getElementById('photoMenuModal');
        var photoMenuOptions = document.querySelectorAll('.photo-menu-option');
        var closePhotoMenuModal = document.getElementById('closePhotoMenuModal');
        var cameraModal = document.getElementById('cameraModal');
        var cameraVideo = document.getElementById('cameraVideo');
        var capturePhotoBtn = document.getElementById('capturePhotoBtn');
        var closeCameraModal = document.getElementById('closeCameraModal');
        var activePhotoInput = null;
        var activePhotoPreview = null;
        var cameraStream = null;

        document.querySelectorAll('.photo-menu-btn').forEach(function(btn, idx){
            btn.addEventListener('click', function(e){
                e.preventDefault();
                activePhotoInput = document.getElementById('photoInput' + idx);
                activePhotoPreview = document.getElementById('photoPreview' + idx);
                photoMenuModal.classList.remove('hidden');
            });
        });

        photoMenuOptions.forEach(function(option){
            option.addEventListener('click', function(){
                var action = option.getAttribute('data-action');
                photoMenuModal.classList.add('hidden');
                if (!activePhotoInput) return;
                if (action === 'library' || action === 'file') {
                    activePhotoInput.click();
                } else if (action === 'camera') {
                    cameraModal.classList.remove('hidden');
                    if (navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
                        navigator.mediaDevices.getUserMedia({ video: true }).then(function(stream){
                            cameraStream = stream;
                            cameraVideo.srcObject = stream;
                            cameraVideo.play();
                        });
                    }
                }
            });
        });

        if (closePhotoMenuModal) closePhotoMenuModal.onclick = function() {
            photoMenuModal.classList.add('hidden');
        };

        if (closeCameraModal) closeCameraModal.onclick = function(){
            cameraModal.classList.add('hidden');
            if (cameraVideo.srcObject) {
                cameraVideo.srcObject.getTracks().forEach(track => track.stop());
                cameraVideo.srcObject = null;
            }
            cameraStream = null;
        };

        if (capturePhotoBtn) capturePhotoBtn.onclick = function(){
            if (!cameraVideo.srcObject) return;
            var canvas = document.createElement('canvas');
            canvas.width = cameraVideo.videoWidth;
            canvas.height = cameraVideo.videoHeight;
            var ctx = canvas.getContext('2d');
            ctx.drawImage(cameraVideo, 0, 0, canvas.width, canvas.height);
            var dataURL = canvas.toDataURL('image/png');
            if (activePhotoPreview) {
                activePhotoPreview.src = dataURL;
            }
            cameraModal.classList.add('hidden');
            if (cameraVideo.srcObject) {
                cameraVideo.srcObject.getTracks().forEach(track => track.stop());
                cameraVideo.srcObject = null;
            }
            cameraStream = null;
        };

        // Attach next for step 7
        if (finishMissionBtn) finishMissionBtn.onclick = function(e){
            e.preventDefault();
            document.getElementById('suggestStep7').classList.add('hidden');
            document.getElementById('suggestStep8').classList.remove('hidden');

            // Step 8 logic: toggle yes/no and next
            var helpOnline = document.getElementById('helpOnline');
            var helpInPerson = document.getElementById('helpInPerson');
            var helpUnknown = document.getElementById('helpUnknown');
            var toggleBtns = document.querySelectorAll('.toggle-btn');
            toggleBtns.forEach(function(btn){
                btn.onclick = function(ev){
                    ev.preventDefault();
                    var group = btn.getAttribute('data-group');
                    var value = btn.getAttribute('data-value');
                    // Remove active from both in group
                    toggleBtns.forEach(function(b){
                        if (b.getAttribute('data-group') === group) {
                            b.classList.remove('bg-blue-600', 'text-white');
                            b.classList.add('bg-white', 'text-blue-700');
                        }
                    });
                    btn.classList.add('bg-blue-600', 'text-white');
                    btn.classList.remove('bg-white', 'text-blue-700');
                    // Set hidden input
                    if (group === 'online') helpOnline.value = value;
                    if (group === 'inperson') helpInPerson.value = value;
                    if (group === 'unknown') helpUnknown.value = value;
                };
            });

            var backToStep7Btn = document.getElementById('backToStep7Btn');
            if (backToStep7Btn) backToStep7Btn.onclick = function(e){
                e.preventDefault();
                document.getElementById('suggestStep8').classList.add('hidden');
                document.getElementById('suggestStep7').classList.remove('hidden');
            };

            var toStep9Btn = document.getElementById('toStep9Btn');
            if (toStep9Btn) toStep9Btn.onclick = function(e){
                e.preventDefault();
                // Validation: all 3 must be answered
                if (!helpOnline.value || !helpInPerson.value || !helpUnknown.value) {
                    toastr.error('Please answer all support options.');
                    return false;
                }
                document.getElementById('suggestStep8').classList.add('hidden');
                document.getElementById('suggestStep9').classList.remove('hidden');

                // Step 9 logic: urgency selection and next
                var urgencyBtns = document.querySelectorAll('.urgency-btn');
                var urgencyInput = document.getElementById('urgencyValue');
                urgencyBtns.forEach(function(btn){
                    btn.onclick = function(ev){
                        ev.preventDefault();
                        urgencyBtns.forEach(function(b){
                            b.classList.remove('selected');
                        });
                        btn.classList.add('selected');
                        urgencyInput.value = btn.childNodes[0].textContent.trim();
                    };
                });

                var backToStep8Btn = document.getElementById('backToStep8Btn');
                if (backToStep8Btn) backToStep8Btn.onclick = function(e){
                    e.preventDefault();
                    document.getElementById('suggestStep9').classList.add('hidden');
                    document.getElementById('suggestStep8').classList.remove('hidden');
                };

                var finishAllBtn = document.getElementById('finishAllBtn');
                if (finishAllBtn) finishAllBtn.onclick = function(e){
                    e.preventDefault();
                    if (!urgencyInput.value) {
                        toastr.error('Please select how soon you need this service.');
                        return false;
                    }
                    document.getElementById('suggestStep9').classList.add('hidden');
                    document.getElementById('suggestStep10').classList.remove('hidden');
                    // ...continue with step 10 logic as before...
                };
            };
        };
    };
    // Step 8 -->
    var toStep8Btn = document.getElementById('finishMissionBtn');
    if (toStep8Btn) {
        toStep8Btn.onclick = function(e){
            e.preventDefault();
            document.getElementById('suggestStep7').classList.add('hidden');
            document.getElementById('suggestStep8').classList.remove('hidden');
            // Attach back/next for step 8
            var backToStep7Btn = document.getElementById('backToStep7Btn');
            var toStep9Btn = document.getElementById('toStep9Btn');
            if (backToStep7Btn) backToStep7Btn.onclick = function(e){
                e.preventDefault();
                document.getElementById('suggestStep8').classList.add('hidden');
                document.getElementById('suggestStep7').classList.remove('hidden');
            };

            // Toggle logic for Yes/No buttons
            var helpOnline = document.getElementById('helpOnline');
            var helpInPerson = document.getElementById('helpInPerson');
            var helpUnknown = document.getElementById('helpUnknown');
            var toggleBtns = document.querySelectorAll('.toggle-btn');
            toggleBtns.forEach(function(btn){
                btn.onclick = function(ev){
                    ev.preventDefault();
                    var group = btn.getAttribute('data-group');
                    var value = btn.getAttribute('data-value');
                    // Remove active from both in group
                    toggleBtns.forEach(function(b){
                        if (b.getAttribute('data-group') === group) {
                            b.classList.remove('bg-blue-600', 'text-white');
                            b.classList.add('bg-white', 'text-blue-700');
                        }
                    });
                    btn.classList.add('bg-blue-600', 'text-white');
                    btn.classList.remove('bg-white', 'text-blue-700');
                    // Set hidden input
                    if (group === 'online') helpOnline.value = value;
                    if (group === 'inperson') helpInPerson.value = value;
                    if (group === 'unknown') helpUnknown.value = value;
                };
            });

            if (toStep9Btn) toStep9Btn.onclick = function(e){
                e.preventDefault();
                // Validation: all 3 must be answered
                if (!helpOnline.value || !helpInPerson.value || !helpUnknown.value) {
                    toastr.error('Please answer all support options.');
                    return false;
                }
                toastr.success('Step 8 complete!');
                // document.getElementById('suggestStep8').classList.add('hidden');
                // document.getElementById('suggestStep9').classList.remove('hidden');
            };
        };
    }
    // Step 8 -> Step 9
    var toStep9Btn = document.getElementById('toStep9Btn');
    if (toStep9Btn) {
        toStep9Btn.addEventListener('click', function(e){
            e.preventDefault();
            // Validation for step 8
            var helpOnline = document.getElementById('helpOnline');
            var helpInPerson = document.getElementById('helpInPerson');
            var helpUnknown = document.getElementById('helpUnknown');
            if (!helpOnline.value || !helpInPerson.value || !helpUnknown.value) {
                toastr.error('Please answer all support options.');
                return false;
            }
            document.getElementById('suggestStep8').classList.add('hidden');
            document.getElementById('suggestStep9').classList.remove('hidden');
            // Attach back/finish for step 9
            var backToStep8Btn = document.getElementById('backToStep8Btn');
            var finishAllBtn = document.getElementById('finishAllBtn');
            if (backToStep8Btn) backToStep8Btn.onclick = function(e){
                e.preventDefault();
                document.getElementById('suggestStep9').classList.add('hidden');
                document.getElementById('suggestStep8').classList.remove('hidden');
            };

            // Urgency selection logic
            var urgencyBtns = document.querySelectorAll('.urgency-btn');
            var urgencyInput = document.getElementById('urgencyValue');
            urgencyBtns.forEach(function(btn){
                btn.onclick = function(ev){
                    ev.preventDefault();
                    urgencyBtns.forEach(function(b){
                        b.classList.remove('selected');
                    });
                    btn.classList.add('selected');
                    urgencyInput.value = btn.childNodes[0].textContent.trim();
                };
            });

            if (finishAllBtn) finishAllBtn.onclick = function(e){
                e.preventDefault();
                // Validation: must select one urgency
                if (!urgencyInput.value) {
                    toastr.error('Please select how soon you need this service.');
                    return false;
                }
                toastr.success('All steps completed!');
                closeSuggestMissionModal();
            };
        });
    }
    // Step 9 -> Step 10 (fix: use event listener, not submit)
    var finishAllBtn = document.getElementById('finishAllBtn');
    if (finishAllBtn) {
        finishAllBtn.addEventListener('click', function(e){
            e.preventDefault();
            var urgencyInput = document.getElementById('urgencyValue');
            if (!urgencyInput.value) {
                toastr.error('Please select how soon you need this service.');
                return false;
            }
            document.getElementById('suggestStep9').classList.add('hidden');
            document.getElementById('suggestStep10').classList.remove('hidden');
            // Attach back/finish for step 10
            var backToStep9Btn = document.getElementById('backToStep9Btn');
            var finishLangBtn = document.getElementById('finishLangBtn');
            if (backToStep9Btn) backToStep9Btn.onclick = function(e){
                e.preventDefault();
                document.getElementById('suggestStep10').classList.add('hidden');
                document.getElementById('suggestStep9').classList.remove('hidden');
            };

            // Language selection logic
            var langBtns = document.querySelectorAll('.lang-btn');
            var langInput = document.getElementById('selectedLanguage');
            langBtns.forEach(function(btn){
                btn.onclick = function(ev){
                    ev.preventDefault();
                    langBtns.forEach(function(b){
                        b.classList.remove('selected');
                    });
                    btn.classList.add('selected');
                    langInput.value = btn.textContent.trim();
                };
            });

            if (finishLangBtn) finishLangBtn.onclick = function(e){
                e.preventDefault();
                if (!langInput.value) {
                    toastr.error('Please select a language.');
                    return false;
                }
                toastr.success('All steps completed!');
                closeSuggestMissionModal();
            };
        });
    }
    // Step 10 -> Step 11
    var finishLangBtn = document.getElementById('finishLangBtn');
    if (finishLangBtn) {
        finishLangBtn.addEventListener('click', function(e){
            e.preventDefault();
            var langInput = document.getElementById('selectedLanguage');
            if (!langInput.value) {
                toastr.error('Please select a language.');
                return false;
            }
            document.getElementById('suggestStep10').classList.add('hidden');
            document.getElementById('suggestStep11').classList.remove('hidden');
            // Attach back/finish for step 11
            var backToStep10Btn = document.getElementById('backToStep10Btn');
            var finishNameBtn = document.getElementById('finishNameBtn');
            if (backToStep10Btn) backToStep10Btn.onclick = function(e){
                e.preventDefault();
                document.getElementById('suggestStep11').classList.add('hidden');
                document.getElementById('suggestStep10').classList.remove('hidden');
            };
            if (finishNameBtn) finishNameBtn.onclick = function(e){
                e.preventDefault();
                var firstName = document.getElementById('firstName').value.trim();
                var surname = document.getElementById('surname').value.trim();
                if (!firstName || !surname) {
                    toastr.error('Please enter your first name and surname.');
                    return false;
                }
                toastr.success('All steps completed!');
                closeSuggestMissionModal();
            };
        });
    }
    // Step 11 -> Step 12
    var finishNameBtn = document.getElementById('finishNameBtn');
    if (finishNameBtn) {
        finishNameBtn.addEventListener('click', function(e){
            e.preventDefault();
            var firstName = document.getElementById('firstName').value.trim();
            var surname = document.getElementById('surname').value.trim();
            if (!firstName || !surname) {
                toastr.error('Please enter your first name and surname.');
                return false;
            }
            document.getElementById('suggestStep11').classList.add('hidden');
            document.getElementById('suggestStep12').classList.remove('hidden');
            // Attach back/finish for step 12
            var backToStep11Btn = document.getElementById('backToStep11Btn');
            var finishEmailBtn = document.getElementById('finishEmailBtn');
            if (backToStep11Btn) backToStep11Btn.onclick = function(e){
                e.preventDefault();
                document.getElementById('suggestStep12').classList.add('hidden');
                document.getElementById('suggestStep11').classList.remove('hidden');
            };
            if (finishEmailBtn) finishEmailBtn.onclick = function(e){
                e.preventDefault();
                var email = document.getElementById('emailInput').value.trim();
                // Simple email validation
                var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!email || !emailPattern.test(email)) {
                    toastr.error('Please enter a valid e-mail address.');
                    return false;
                }
                toastr.success('All steps completed!');
                closeSuggestMissionModal();
            };
        });
    }
    // Step 12 -> Step 13 (ensure only one handler and use addEventListener)
    var finishEmailBtn = document.getElementById('finishEmailBtn');
    if (finishEmailBtn) {
        finishEmailBtn.addEventListener('click', function(e){
            e.preventDefault();
            var email = document.getElementById('emailInput').value.trim();
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!email || !emailPattern.test(email)) {
                toastr.error('Please enter a valid e-mail address.');
                return false;
            }
            document.getElementById('suggestStep12').classList.add('hidden');
            document.getElementById('suggestStep13').classList.remove('hidden');
            // Attach back/finish for step 13
            var backToStep12Btn = document.getElementById('backToStep12Btn');
            var finishPasswordBtn = document.getElementById('finishPasswordBtn');
            if (backToStep12Btn) backToStep12Btn.onclick = function(e){
                e.preventDefault();
                document.getElementById('suggestStep13').classList.add('hidden');
                document.getElementById('suggestStep12').classList.remove('hidden');
            };
            if (finishPasswordBtn) finishPasswordBtn.onclick = function(e){
                e.preventDefault();
                var password = document.getElementById('passwordInput').value;
                if (!password || password.length < 6) {
                    toastr.error('Please enter a password (at least 6 characters).');
                    return false;
                }
                toastr.success('All steps completed!');
                closeSuggestMissionModal();
            };
        });
    }
    // Step 13 -> Step 14
    var finishPasswordBtn = document.getElementById('finishPasswordBtn');
    if (finishPasswordBtn) {
        finishPasswordBtn.addEventListener('click', function(e){
            e.preventDefault();
            var password = document.getElementById('passwordInput').value;
            if (!password || password.length < 6) {
                toastr.error('Please enter a password (at least 6 characters).');
                return false;
            }
            document.getElementById('suggestStep13').classList.add('hidden');
            document.getElementById('suggestStep14').classList.remove('hidden');
            // Duration selection logic
            var durationBtns = document.querySelectorAll('.duration-visible-btn');
            var durationInput = document.getElementById('visibleDuration');
            durationBtns.forEach(function(btn){
                btn.onclick = function(ev){
                    ev.preventDefault();
                    durationBtns.forEach(function(b){
                        b.classList.remove('bg-blue-700');
                        b.classList.add('bg-blue-600');
                    });
                    btn.classList.remove('bg-blue-600');
                    btn.classList.add('bg-blue-700');
                    durationInput.value = btn.textContent.trim();
                };
            });
            // Back/finish handlers
            var backToStep13Btn = document.getElementById('backToStep13Btn');
            var finishVisibleBtn = document.getElementById('finishVisibleBtn');
            if (backToStep13Btn) backToStep13Btn.onclick = function(e){
                e.preventDefault();
                document.getElementById('suggestStep14').classList.add('hidden');
                document.getElementById('suggestStep13').classList.remove('hidden');
            };
            if (finishVisibleBtn) finishVisibleBtn.onclick = function(e){
                e.preventDefault();
                if (!durationInput.value) {
                    toastr.error('Please select how long your request should be visible.');
                    return false;
                }
                toastr.success('Your request has been sent to the selected service provider!');
                closeSuggestMissionModal();
            };
        });
    }
    // Step 14 -> Step 15
    var finishVisibleBtn = document.getElementById('finishVisibleBtn');
    if (finishVisibleBtn) {
        // Remove any previous event listeners to avoid double binding
        finishVisibleBtn.addEventListener('click', function(e){
            e.preventDefault();
            var durationInput = document.getElementById('visibleDuration');
            if (!durationInput.value) {
                toastr.error('Please select how long your request should be visible.');
                return false;
            }
            document.getElementById('suggestStep14').classList.add('hidden');
            document.getElementById('suggestStep15').classList.remove('hidden');
        });
    }

    // ...existing code...
});
</script>
<!-- ...existing code... -->
</script>
<!-- ...existing code... -->