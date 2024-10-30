<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <header>
    <nav class="bg-gray-800 p-4 flex justify-between items-center">
    <div class="text-pink-400 text-2xl font-bold">panjar.</div>
    <div>
      <ul class="flex space-x-8 text-white">
        <li><a href="{{route('login')}}" class="hover:text-pink-400">Login</a></li>
        <li><a href="{{route('about')}}" class="hover:text-pink-400">About</a></li>
        <li><a href="{{route('home')}}" class="hover:text-pink-400">Home</a></li>
        <li><a href="#" class="hover:text-pink-400">Sosmed</a></li>
      </ul>
    </div>
  </nav>
    </header>

    <div class="bg-blue-400 pt-10 pb-10 outline-neutral-950 outline-1">
            <div class="text-3xl text-center font-bold">About Me!</div>
        </div>
        <a class="text-purple-400 text-5xl font-bold mb-6 items-center justify-center text-center">Aku Diamond :)</a>
</body>
</html>