
  @include('includes.header')
  <div class = "mt-12">
  <div class="min-h-screen flex items-center justify-center px-4">
    <div class="w-full max-w-6xl bg-white shadow-2xl rounded-2xl overflow-hidden grid grid-cols-1 md:grid-cols-2">

      <!-- Left: Signup Form -->
      <div class="p-10 bg-white flex items-center justify-center">
        <div class="w-full max-w-xs">
          <div class="flex justify-between items-center mb-6">
            
          </div>

          <h1 class="text-2xl font-bold text-blue-700 mb-1">Create Account</h1>
          <p class="text-sm text-gray-600 mb-6">Join Ulixai today.</p>
                         <!-- Social Login Buttons -->
<div class="space-y-3 mb-6">
   <!-- Facebook -->
  <button class="w-full flex items-center justify-center gap-2 border border-gray-300 rounded-md py-2 text-sm font-medium text-gray-700 hover:bg-gray-100 transition">
    <img src="https://upload.wikimedia.org/wikipedia/commons/1/1b/Facebook_icon.svg" class="w-5 h-5" alt="Facebook logo">
    Continue with Facebook
  </button>
  
  <button class="w-full flex items-center justify-center gap-2 border border-gray-300 rounded-md py-2 text-sm font-medium text-gray-700 hover:bg-gray-50 transition">
    <img src="https://www.svgrepo.com/show/475656/google-color.svg" class="w-5 h-5" alt="Google">
    Continue with Google
  </button>
</div>

          <form class="space-y-4">
            <div>
              <label class="block text-sm text-gray-700">Full Name</label>
              <input type="text" class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-600 focus:outline-none" placeholder="John Doe" />
            </div>

            <div>
              <label class="block text-sm text-gray-700">Email</label>
              <input type="email" class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-600 focus:outline-none" placeholder="you@example.com" />
            </div>

            <div>
              <label class="block text-sm text-gray-700">Password</label>
              <input type="password" class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-600 focus:outline-none" placeholder="••••••••" />
            </div>
               
            <!-- Gender Toggle -->
<div class="flex justify-center mb-4">
  <div class="flex bg-white border border-blue-500 rounded-full overflow-hidden">
    <input type="radio" name="gender" id="male" value="Male" class="sr-only" checked>
    <label for="male"
      class="cursor-pointer px-6 py-2 text-blue-500 font-semibold transition-all duration-300"
      onclick="toggleGender('male')">
      Male
    </label>

    <input type="radio" name="gender" id="female" value="Female" class="sr-only">
    <label for="female"
      class="cursor-pointer px-6 py-2 text-white bg-blue-600 font-semibold transition-all duration-300"
      onclick="toggleGender('female')">
      Female
    </label>
  </div>
</div>

         
            <button type="submit" class="w-full bg-blue-700 hover:bg-blue-800 text-white font-semibold py-2 rounded-md">Sign Up</button>
          </form>
          <p class="text-xs text-center text-gray-600 mt-3">
  Creating an account implies that you have read and accepted the terms
  <a href="#" class="text-blue-500 hover:underline">et conditions of use</a>.
</p>


          <p class="mt-6 text-xs text-center text-gray-600">
            Already registered? <a href="/login" class="text-blue-600 font-medium hover:underline">Log in here</a>
          </p>
        </div>

      </div>



      <!-- Right: Features -->
      <div class="bg-blue-700 text-white px-10 py-16 flex flex-col justify-center">
        <div class="max-w-md space-y-10">
          <div>
            <h2 class="text-lg font-bold flex items-center gap-3"><i class="fas fa-globe"></i> Global Help</h2>
            <p class="text-sm text-blue-100 mt-2">Support across borders for expats and travelers.</p>
          </div>

          <div>
            <h2 class="text-lg font-bold flex items-center gap-3"><i class="fas fa-lightbulb"></i> Smart Matching</h2>
            <p class="text-sm text-blue-100 mt-2">Get matched with the right help instantly.</p>
          </div>

          <div>
            <h2 class="text-lg font-bold flex items-center gap-3"><i class="fas fa-chart-line"></i> Dashboard</h2>
            <p class="text-sm text-blue-100 mt-2">Manage requests, see progress and connect easily.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
  <div class = "mt-12">
   @include('includes.footer')

  <script>
  function toggleGender(selected) {
    const maleLabel = document.querySelector("label[for='male']");
    const femaleLabel = document.querySelector("label[for='female']");

    if (selected === 'male') {
      maleLabel.classList.add("bg-blue-600", "text-white");
      maleLabel.classList.remove("text-blue-500");
      femaleLabel.classList.remove("bg-blue-600", "text-white");
      femaleLabel.classList.add("text-blue-500");
    } else {
      femaleLabel.classList.add("bg-blue-600", "text-white");
      femaleLabel.classList.remove("text-blue-500");
      maleLabel.classList.remove("bg-blue-600", "text-white");
      maleLabel.classList.add("text-blue-500");
    }
  }
</script>


