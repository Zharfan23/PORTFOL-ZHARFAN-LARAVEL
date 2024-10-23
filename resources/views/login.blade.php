<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body class="m-0 p-0 box-border font-poppins justify-center flex items-center min-h-[100vh]">
    <form id="loginform" class="outline outline-2 outline-offset-[25px] rounded-[10px]">
        <div>
            <label for="username">Username : </label><br>
            <input type="text" name="username" id="username" class="outline outline-2 rounded-[25px] ">
        </div>
        <div class="pb-[15px]">
            <label for="password">Password : </label><br>
            <input type="password" name="password" id="password"  class="outline outline-2 rounded-[25px]">
        </div>
        <button type="submit" class="text-white bg-black rounded-[25px] p-[5px]">LOGIN</button>

    </form>


    <script src="js/script.js"></script>
</body>
</html>