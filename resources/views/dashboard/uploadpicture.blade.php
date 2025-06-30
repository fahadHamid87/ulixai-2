<?php
$uploadSuccess = false;
$uploadError = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['profile_picture'])) {
    $targetDir = "uploads/";
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0755, true);
    }

    $fileName = basename($_FILES["profile_picture"]["name"]);
    $targetFile = $targetDir . $fileName;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    $check = getimagesize($_FILES["profile_picture"]["tmp_name"]);
    if ($check !== false) {
        if (move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $targetFile)) {
            $uploadSuccess = true;
        } else {
            $uploadError = "Upload failed. Please try again.";
        }
    } else {
        $uploadError = "Invalid image file.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Upload Profile Picture</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-white to-blue-50 min-h-screen font-sans">

 @include('includes.header')
     @include('pages.popup')
  

  <div class="flex flex-col lg:flex-row min-h-screen">

    <!-- Sidebar -->
    <div class="w-full lg:w-64">
        @include('dashboard.sidebardash')
    </div>

    <!-- Main Content -->
    <div class="flex-1 p-4 sm:p-6 lg:p-10 flex justify-center items-start">
      <div class="bg-white rounded-3xl shadow-lg p-6 sm:p-8 max-w-xl w-full text-center space-y-6">

        <h2 class="text-blue-900 font-bold text-lg sm:text-xl">MY PROFILE PICTURE</h2>
        <p class="text-sm text-blue-600">Take a photo of yourself, preferably on a white background</p>

        <!-- Upload Form -->
        <form method="POST" enctype="multipart/form-data" class="space-y-4" id="photoForm">
          <div class="border-2 border-blue-400 rounded-xl p-4 sm:p-6 flex flex-col items-center gap-2">

            <?php if ($uploadSuccess): ?>
              <img src="<?= $targetFile ?>" alt="Uploaded" class="w-28 h-28 sm:w-32 sm:h-32 object-cover rounded-full border mb-2">
            <?php else: ?>
              <video id="camera" class="hidden w-28 h-28 sm:w-32 sm:h-32 object-cover rounded-full mb-2" autoplay></video>
              <canvas id="canvas" class="hidden"></canvas>
              <img id="preview" class="w-20 h-20 object-contain mb-2 opacity-60" src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="preview" />
            <?php endif; ?>

            <label for="profile_picture" class="cursor-pointer border border-blue-400 text-blue-500 px-4 py-1 rounded-full text-sm hover:bg-blue-50 transition">
              Upload photo
            </label>
            <input type="file" name="profile_picture" id="profile_picture" accept="image/*" class="hidden" onchange="previewImage(event)">

            <button type="button" onclick="startCamera()" class="mt-2 border border-blue-400 text-blue-500 px-4 py-1 rounded-full text-sm hover:bg-blue-50 transition">
              📸 Take a Live Photo
            </button>
          </div>

          <input type="file" name="profile_picture" id="captured_file" class="hidden">

          <?php if ($uploadError): ?>
            <p class="text-red-500 text-sm"><?= $uploadError ?></p>
          <?php endif; ?>

          <button type="submit" class="text-blue-600 underline font-semibold text-sm hover:text-blue-800">
            I validate
          </button>
        </form>
      </div>
    </div>
  </div>

<script>
function previewImage(event) {
  const reader = new FileReader();
  reader.onload = function () {
    const output = document.getElementById('preview');
    output.src = reader.result;
    output.classList.remove('opacity-60');
  };
  reader.readAsDataURL(event.target.files[0]);
}

function startCamera() {
  const video = document.getElementById('camera');
  const canvas = document.getElementById('canvas');
  const preview = document.getElementById('preview');

  navigator.mediaDevices.getUserMedia({ video: true })
    .then(stream => {
      video.srcObject = stream;
      video.classList.remove('hidden');
      preview.classList.add('hidden');

      setTimeout(() => {
        const context = canvas.getContext('2d');
        canvas.width = video.videoWidth;
        canvas.height = video.videoHeight;
        context.drawImage(video, 0, 0, canvas.width, canvas.height);

        stream.getTracks().forEach(track => track.stop());

        canvas.toBlob(blob => {
          const file = new File([blob], 'webcam_photo.jpg', { type: 'image/jpeg' });
          const dataTransfer = new DataTransfer();
          dataTransfer.items.add(file);
          const fileInput = document.getElementById('captured_file');
          fileInput.files = dataTransfer.files;
          document.getElementById('photoForm').submit();
        }, 'image/jpeg');
      }, 3000);
    })
    .catch(err => {
      alert('Could not access camera: ' + err.message);
    });
}
</script>
@include('dashboard.bottomnavbar')
</body>
</html>