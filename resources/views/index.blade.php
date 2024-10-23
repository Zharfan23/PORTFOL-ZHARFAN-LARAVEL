<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Profile Layout</title>

</head>
<body class="bg-gray-900 text-white">
  <!-- Navbar -->
  <nav class="bg-gray-800 p-4 flex justify-between items-center">
    <div class="text-pink-400 text-2xl font-bold">panjar.</div>
    <div>
      <ul class="flex space-x-8 text-white">
        <li><a href="#" class="hover:text-pink-400">NAMA</a></li>
        <li><a href="#" class="hover:text-pink-400">HOBI</a></li>
        <li><a href="#" class="hover:text-pink-400">PENDIDIKAN</a></li>
        <li><a href="#" class="hover:text-pink-400">SOSMED</a></li>
      </ul>
    </div>
  </nav>

  <!-- Main Section -->
  <section class="flex flex-col items-center justify-center min-h-screen text-center">
    <p class="text-gray-400 text-xl mb-4">Halo Perkenalkan! Nama Saya</p>
    <h1 class="text-purple-400 text-5xl font-bold mb-6">Zharfan Zakkiyan Qinthara Fahmi</h1>
    <div class="w-40 h-40">
      <!-- Profile Image -->
      <img src="images/Telkom1.jpg" alt="Profile Image" class="rounded-lg">
    </div>
  </section>
</body>
</html>
