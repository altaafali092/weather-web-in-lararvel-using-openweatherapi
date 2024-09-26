<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="mx-24">
  <h1 class="font-bold text-red-500 underline">
    Hello world!
  </h1>
  <div class="mt-8">
    <a class="px-4 py-3 mt-8 text-white bg-black rounded-full shadow-md transition-all duration-300 hover:text-green-400 hover:shadow-blue-500/50" href="{{route('weather')}}">go to weather page click here</a>
  </div>

</body>
</html>
