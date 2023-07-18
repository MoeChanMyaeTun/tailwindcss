<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
    <div class="sec-mv lg:container pb-5 mx-auto">
        <div class="clearfix pb-[176px] pt-8 bg-background"> 
        <nav class="relative w-4/4">
        <img src="{{ asset('img/logo.png') }}" alt="" class="w-60 float-left absolute top-min">
                <ul class="clearfix pt-2 bg-white pl-96">
                    <li class="float-left ml-4 px-2"><a href="#"> HOME</a></li>
                    <li class="float-left ml-4 px-2"><a href="{{ url('styledemo') }}">STYLEDEMO</a></li>
                    <li class="float-left ml-4 px-2"><a href="#">FULLWIDTH</a></li>
                    <li class="float-left ml-4 px-2"><a href="#">DROPDOWN</a></li>
                    <li class="float-left ml-4 px-2"><a href="#">PORTFOLIO</a></li>
                    <li class="float-left ml-4 px-2"><a href="#">GALLERY</a></li>
                </ul>
            </nav>
            <div class="mt-40 ml-20 border border-solid border-slate-300 w-2/4 px-10 py-4">
                    <p class="text-2xl tracking-[0.6em]">
                    Tasteiest And <br>
                     Mouth Watering <br>
                     Menus In Myanmar
                    </p>
                    <p class="mt-4 text-slate-400">
                    Lorem ipsum dolor sit amet, consectetur adipi scing elit, Lorem <br> ipsum dolor sit amet, consectetur do eiusmod tempor incididunt <br> ut labore et dolore...
                    </p>
            </div>
        </div>
        <!-- nav -->
       
       <footer>
        
       </footer>
    </div>
</body>
</html>