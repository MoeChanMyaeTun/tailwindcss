<!doctype html>
<html  class="dark">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
    <!-- dark-mode -->
    <script>
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark')
    }
</script>
 <!-- dark-mode -->
</head>
<body class="dark:bg-slate-800 dark:text-white">
        <div class="pb-[156px] pt-8 bg-background4 bg-cover"> 
            <nav class="relative w-4/4 ">
                    <!-- <img src="{{ asset('img/logo.png') }}" alt="" class="w-60 float-left absolute top-min left-[170px]"> -->
                    <ul class="clearfix py-8 pl-[752px] dark:text-black">
                        <li class="float-left ml-4 px-2"><a href="{{ url('/')}}" class="visited:text-purple-500 visited:underline hover:underline hover:bg-slate-50"> HOME</a></li>
                        <li class="float-left ml-4 px-2"><a href="{{ url('styledemo') }}" class="hover:underline hover:bg-slate-50">STYLEDEMO</a></li>
                        <li class="float-left ml-4 px-2"><a href="#" class="hover:underline hover:bg-slate-50">FULLWIDTH</a></li>
                        <li class="float-left ml-4 px-2"><a href="#" class="hover:underline hover:bg-slate-50">DROPDOWN</a></li>
                        <li class="float-left ml-4 px-2"><a href="#" class="hover:underline hover:bg-slate-50">PORTFOLIO</a></li>
                        <li class="float-left ml-4 px-2"><a href="#" class="hover:underline hover:bg-slate-50">GALLERY</a></li>
                    </ul>
                </nav>
                <div class="container pb-5 mx-auto clearfix">
                <div class="mt-40 ml-20 border border-solid border-slate-300 w-2/4 px-10 py-4 dark:text-black">
                        <p class="text-2xl tracking-wide">
                        Tasteiest And <br>
                        Mouth Watering <br>
                        Menus In Myanmar
                        </p>
                        <p class="mt-4 text-slate-400">
                        Lorem ipsum dolor sit amet, consectetur adipi scing elit, Lorem <br> ipsum dolor sit amet, consectetur do eiusmod tempor incididunt <br> ut labore et dolore...
                        </p>
                </div>
            </div>
        </div>
        <!-- nav -->
        <div class="container pb-[85px] mx-auto clearfix mt-24">
            <div class="float-left">
                <img src="{{ asset('img/about.png') }}" alt="" class="w-[749px]" >
            </div>
            <div class="float-right">
                         <p class="text-2xl tracking-wide ">
                         BonAppetit Serves <br> Contemporary <br> European Cuisine.
                        </p>
                        <p class="mt-10 ">
                        Lorem ipsum dolor sit amet, consectetur adipi scing elit,<br>
                         sed do eiusmod tempor incididunt ut labore et dolore <br>
                          morbi Lorem ipsum dolor sit amet adipiscing. <br> <br>

                        Lorem  consectetur adipiscing eliturna. dolor sit amet, <br> 
                        adipiscing eliturna. consectetur ipsum dolor sit amet, <br>
                        consectetur adipi scing elit, sed do eiusmorbi Lorem ipsum dolor sit...
                        </p>
                        <input type="submit" value="BOOK A TABLE" class="bg-black text-white px-8 rounded py-1 mt-4 ml-2 border border-solid border-black hover:bg-neutral-50 hover:text-black">
            </div>
        </div>
        <!-- sec-blk -->
        <div class="container mx-auto">
            <img src="{{asset('img/shape.png')}}" alt="" class="mx-auto">
            <p class="text-2xl tracking-wide text-center mt-8">
                OUR SPECIALITY MENU
            </p>
            <div class="clearfix mt-12">
                <div class="float-left w-[600px] mb-8 mr-20">
                    <div class="clearfix">
                        <img src="{{asset('img/pasta.png')}}" alt="" class="float-left w-[200px]">
                        <div class="float-right w-[400px] px-3">
                            <p class="text-2xl tracking-[0.2em] mb-4">
                            PASTA WITH FISH
                            </p>
                            <p class="leading-relaxed">
                                Lorem ipsum dolor sit amet, consectetur adipi scing elit, sed do eiusmod tempor incididunt ut labore et dolore morbi Lorem ipsum...
                            </p>
                        </div>
                    </div>
                </div>
                <div class="float-left w-[600px] mb-8">
                    <div class="clearfix">
                        <img src="{{asset('img/pasta.png')}}" alt="" class="float-left w-[200px]">
                        <div class="float-right w-[400px] px-3">
                            <p class="text-2xl tracking-[0.2em] mb-4">
                            PASTA WITH FISH
                            </p>
                            <p class="leading-relaxed">
                                Lorem ipsum dolor sit amet, consectetur adipi scing elit, sed do eiusmod tempor incididunt ut labore et dolore morbi Lorem ipsum...
                            </p>
                        </div>
                    </div>
                </div>
                <div class="float-left w-[600px] mb-8 mr-20">
                    <div class="clearfix">
                        <img src="{{asset('img/pasta.png')}}" alt="" class="float-left w-[200px]">
                        <div class="float-right w-[400px] px-3">
                            <p class="text-2xl tracking-[0.2em] mb-4">
                            PASTA WITH FISH
                            </p>
                            <p class="leading-relaxed">
                                Lorem ipsum dolor sit amet, consectetur adipi scing elit, sed do eiusmod tempor incididunt ut labore et dolore morbi Lorem ipsum...
                            </p>
                        </div>
                    </div>
                </div>
                <div class="float-left w-[600px] mb-8">
                    <div class="clearfix">
                        <img src="{{asset('img/pasta.png')}}" alt="" class="float-left w-[200px]">
                        <div class="float-right w-[400px] px-3">
                            <p class="text-2xl tracking-[0.2em] mb-4">
                            PASTA WITH FISH
                            </p>
                            <p class="leading-relaxed">
                                Lorem ipsum dolor sit amet, consectetur adipi scing elit, sed do eiusmod tempor incididunt ut labore et dolore morbi Lorem ipsum...
                            </p>
                        </div>
                    </div>
                </div>
                <div class="float-left w-[600px] mb-8 mr-20">
                    <div class="clearfix">
                        <img src="{{asset('img/pasta.png')}}" alt="" class="float-left w-[200px]">
                        <div class="float-right w-[400px] px-3">
                            <p class="text-2xl tracking-[0.2em] mb-4">
                            PASTA WITH FISH
                            </p>
                            <p class="leading-relaxed">
                                Lorem ipsum dolor sit amet, consectetur adipi scing elit, sed do eiusmod tempor incididunt ut labore et dolore morbi Lorem ipsum...
                            </p>
                        </div>
                    </div>
                </div>
                <div class="float-left w-[600px] mb-8 ">
                    <div class="clearfix">
                        <img src="{{asset('img/pasta.png')}}" alt="" class="float-left w-[200px]">
                        <div class="float-right w-[400px] px-3">
                            <p class="text-2xl tracking-[0.2em] mb-4">
                            PASTA WITH FISH
                            </p>
                            <p class="leading-relaxed">
                                Lorem ipsum dolor sit amet, consectetur adipi scing elit, sed do eiusmod tempor incididunt ut labore et dolore morbi Lorem ipsum...
                            </p>
                        </div>
                    </div>
                </div>
            </div>
                <input type="submit" value="VIEW FULL MENU" class="bg-black text-white px-8 rounded border border-solid border-black hover:bg-neutral-50 hover:text-black py-1 ml-[565px] mt-8 mb-20 hover:boder-black">
        </div>
        <!-- third-blk -->
        <div class="pb-[176px] pt-8 bg-background2 bg-cover"> 
            <div class="container mx-auto">
                <p class="text-2xl tracking-wide text-center mt-8">
                    MEET OUR EXPERIENCED CHEFS
                </p>
                <ul class="clearfix mt-20">
                    <li class="w-[367px] float-left mr-[87px]">
                    <img src="{{asset('img/snowball.png')}}" alt="" class="h-64 mx-auto">
                    <p class="text-2xl mb-4 text-center">
                            SNOW BALL <br>
                           <span class="text-sm">( Master Chef )</span> 
                    </p>
                    <p class="leading-relaxed">
                        Lorem ipsum dolor sit amet, consectetur adipi scing elit, sed do eiusmod tempor incididunt ut labore et dolore morbi Lorem ipsum...
                    </p>
                    </li>
                    <li class="w-[367px] float-left mr-[87px]">
                    <img src="{{asset('img/snowball.png')}}" alt="" class="h-64 mx-auto">
                    <p class="text-2xl mb-4 text-center">
                            SNOW BALL <br>
                           <span class="text-sm">( Master Chef )</span> 
                    </p>
                    <p class="leading-relaxed">
                        Lorem ipsum dolor sit amet, consectetur adipi scing elit, sed do eiusmod tempor incididunt ut labore et dolore morbi Lorem ipsum...
                    </p>
                    </li>
                    <li class="w-[367px] float-left">
                    <img src="{{asset('img/snowball.png')}}" alt="" class="h-64 mx-auto">
                    <p class="text-2xl mb-4 text-center">
                            SNOW BALL <br>
                           <span class="text-sm">( Master Chef )</span> 
                    </p>
                    <p class="leading-relaxed">
                        Lorem ipsum dolor sit amet, consectetur adipi scing elit, sed do eiusmod tempor incididunt ut labore et dolore morbi Lorem ipsum...
                    </p>
                    </li>
                </ul>
            </div>
        </div>
        <!-- 4th-blk -->
        <div class="pb-[176px] bg-background3 bg-cover"> 
            <div class="container mx-auto">
                <p class="text-2xl tracking-wide text-center pt-[176px]">
                    MEET OUR EXPERIENCED CHEFS
                </p>
                <ul class="clearfix mt-20">
                    <li class="w-[367px] float-left mr-[87px] relative">
                    <img src="{{asset('img/snowball.png')}}" alt="" class="h-64  mx-auto">
                    <p class="bg-neutral-200 opacity-50 text-black text-center mx-auto w-52 top-28 absolute left-20">Snow Ball</p>
                    </li>
                    <li class="w-[367px] float-left mr-[87px] relative">
                    <img src="{{asset('img/snowball.png')}}" alt="" class="h-64  mx-auto">
                    <p class="bg-neutral-200 opacity-50 text-black text-center mx-auto w-52 top-28 absolute left-20">Snow Ball</p>
                    </li>
                    <li class="w-[367px] float-left relative">
                    <img src="{{asset('img/snowball.png')}}" alt="" class="h-64 mx-auto">
                    <p class="bg-neutral-200 opacity-50 text-black text-center mx-auto w-52 top-28 absolute left-20">Snow Ball</p>
                    </li>
                </ul>
            </div>
        </div>
        <!-- 5th-blk -->
        <div class="bg-slate-400 py-5">
                <div class="container mx-auto">
                    <p class="text-2xl tracking-wide text-center pt-20 text-white">
                    <span class="text-red-700">BON</span> APPETIT
                    </p>
                    <div class="w-[367px] mx-auto mt-20">
                        <p class="text-center text-white">
                        Lorem ipsum dolor sit amet, consectetur adipi scing elit, sed do eiusmod tempor incididunt adipiscing. do Lorem ipsum dolor sit...
                        </p>
                    </div>
                </div>
        </div>
        <!-- 6th-blk -->
        <footer class="bg-black py-1">
                <p class="text-white text-center">Copyright © 2022 Company Name Co.,Ltd. All Rights Reserved</p>
        </footer>
    </div>
</body>
</html>