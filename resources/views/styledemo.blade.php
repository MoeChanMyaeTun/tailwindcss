@extends('app')
@section('content')
    <div class="sec-mv lg:container px-28 bg-stone-400 pb-5 mx-auto">
        <div class="clearfix pb-5 pt-8 "> 
            <h1 class="text-2xl font-bold text-white w-1/4 float-left">
                The Modernist 
                </h1>
             <nav class="float-right text-white  w-3/4 ">
                <ul class="clearfix pt-2">
                    <li class="float-left ml-4 px-2"><a href="/"> HOME</a></li>
                    <li class="float-left ml-4 px-2"><a href="#">STYLEDEMO</a></li>
                    <li class="float-left ml-4 px-2"><a href="#">FULLWIDTH</a></li>
                    <li class="float-left ml-4 px-2"><a href="#">DROPDOWN</a></li>
                    <li class="float-left ml-4 px-2"><a href="#">PORTFOLIO</a></li>
                    <li class="float-left ml-4 px-2"><a href="#">GALLERY</a></li>
                </ul>
            </nav>
        </div>
        <!-- nav -->
       <div class="clearfix mt-24 pb-5 mb-5">
            <div class="w-1/2 float-left mt-24">
                    <div class="px-3 text-white">
                        <h2 class="text-2xl font-bold mb-8">
                        Cursus penati <br>
                        saccum nulla.
                        </h2>
                        <p>
                        Nullamlacus dui ipsum conseque loborttis non euisque <br>
                        morbi penas dapibulum orna. Urnaultrices quis <br>
                        curabitur phasellentesque congue magnis vestibulum <br>
                        quismodo nulla et feugiat adipiscinia pellentum leo.
                        </p>
                    </div>
            </div>
            <div class="w-1/2 float-right">
            
                    <img src="{{ asset('img/holder.png') }}" alt="">
            </div>
       </div> 
       <!-- sec-blk    -->
       <div class="clearfix">
            <div class="float-left w-56 bg-white py-4 mr-2 ml-2">
                <div class="w-44 mx-auto">
                <img src="{{ asset('img/snowball.png') }}" alt="" class="mx-auto">
                    <h2 class="text-2xl font-bold mb-2 text-center">
                    SNOW <br>
                    BALL
                    </h2>
                    <p class="text-xs text-center">
                    Vestassapede et donec ut est <br> libe ros sus et eget  sed eget <br> quisq ueta habitur augue
                    </p>
                </div>
            </div>
            <div class="float-left w-56 bg-red-200 py-4 mr-2">
            <div class="w-44 mx-auto">
                <img src="{{ asset('img/snowball.png') }}" alt="" class="mx-auto">
                    <h2 class="text-2xl font-bold mb-2 text-center">
                    SNOW <br>
                    BALL
                    </h2>
                    <p class="text-xs text-center">
                    Vestassapede et donec ut est <br> libe ros sus et eget  sed eget <br> quisq ueta habitur augue
                    </p>
                </div>
            </div>
            <div class="float-left w-56 bg-white py-4 mr-2">
            <div class="w-44 mx-auto">
                <img src="{{ asset('img/snowball.png') }}" alt="" class="mx-auto">
                    <h2 class="text-2xl font-bold mb-2 text-center">
                    SNOW <br>
                    BALL
                    </h2>
                    <p class="text-xs text-center">
                    Vestassapede et donec ut est <br> libe ros sus et eget  sed eget <br> quisq ueta habitur augue
                    </p>
                </div>
            </div>
            <div class="float-left w-56 bg-white  py-4 mr-2">
            <div class="w-44 mx-auto">
                <img src="{{ asset('img/snowball.png') }}" alt="" class="mx-auto">
                    <h2 class="text-2xl font-bold mb-2 text-center">
                    SNOW <br>
                    BALL
                    </h2>
                    <p class="text-xs text-center">
                    Vestassapede et donec ut est <br> libe ros sus et eget  sed eget <br> quisq ueta habitur augue
                    </p>
                </div>
            </div>
       </div>
       <!-- third-blk -->
       <div>
       <div class="clearfix mt-4 ">
            <div class="ml-4 w-60 float-left mr-20">
                <img src="{{ asset('img/snowball.png') }}" alt="">
                <p class="text-center bg-red-200  ">SNOW BALL</p>
            </div>
            <div class="w-60 float-left mr-20">
                <img src="{{ asset('img/snowball.png') }}" alt="">
                <p class="text-center bg-red-200 ">SNOW BALL</p>
            </div>
            <div class="w-60 float-left mr-20">
                <img src="{{ asset('img/snowball.png') }}" alt="">
                <p class="text-center bg-red-200 ">SNOW BALL</p>
            </div>
       </div>
       <div class="clearfix mt-4 ">
            <div class="ml-4 w-60 float-left mr-20 ">
                <img src="{{ asset('img/snowball.png') }}" alt="">
                <p class="text-center bg-red-200  ">SNOW BALL</p>
            </div>
            <div class="w-60 float-left mr-20">
                <img src="{{ asset('img/snowball.png') }}" alt="">
                <p class="text-center bg-red-200 ">SNOW BALL</p>
            </div>
            <div class="w-60 float-left mr-20">
                <img src="{{ asset('img/snowball.png') }}" alt="">
                <p class="text-center bg-red-200 ">SNOW BALL</p>
            </div>
       </div>
       </div>
       <!-- 4th blk -->
       <footer>
        
       </footer>
    </div>
@endsection