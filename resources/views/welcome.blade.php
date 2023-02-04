<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>uas</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">

        <!-- Styles -->
    
    </head>
    <body class="bg-[#100E0B] text-white text-[14px] font-poppins">
        <section class="container mx-auto w-[1440px] h-[902px] ">
            <img src="assets/Ellipse 67.png" alt="" class="absolute left-0 top-0">
            <section id="top bar" class="container flex mx-auto w-[1440px] justify-between px-32 py-15">
            <div id="left-side" class="flex gap-5 items-center"  >
                <img src="assets/ic_round-table-restaurant.png" alt="" class="-top-5">
                <p class="font-bold">MaemMamam</p>
                <nav>
                    <ul class="flex gap-10 " >
                        <li><a href="#" class="active ">Home</a></li>
                        <li><a href="#">Menu</a></li>
                        <li><a href="#">Comunity</a></li>
                    </ul>
                </nav>
            </div>
            <div id="right-side" class="flex gap-10 items-center py-10">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm underline">Log in</a>
                        <img src="assets/logib.png" alt="" class="py-2">

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm underline">Register</a>
                        @endif
                    @endauth
            @endif
            </div>
        </section>
        <div class=" container mx-auto items-center flex justify-center rounded-full w-[190px] h-[37px] bg-[#151515] px-10 py-2">
            <a  href="#get-started" class="">Restaurant 🍕</a>
        </div>
        <div class="relative py-10 text-center text-[64px] font-bold">
            <h1> Makes You Satisfied With <br> What You <span class="text-[#FF9900]"> Ordered</span></h1>
        </div>
        <section class="relative w-[1440px] container px-32 mx-auto">
            <div class="py-15 container mx-auto">
                <h1 class="text-[#FF9900] py-3"> Best Product</h1>
                <h1 class="text-[40px] py-3"><span class="font-bold">Hamburger </span><br> Best in The Universe</h1>
                <p class="py-3 text-[#DDDDDD]">Lörem ipsum ir dons det pren bokstav. Presav velavis dirar. <br> Semidonde pregon. Terasåse seligt samt intrant. </p>
            <div class="flex gap-10 py-5">
                <a href="#get-started" class="button-primary ">Order Now</a>
                <a href="#get-started" class="rounded-full border-2 py-[12px] px-[30px]">View Menu →</a>
            </div>
            <div>
                <ul class="flex gap-5 py-10">
                    <li><img src="assets/Ellipse 69.png" alt=""></li>
                    <li><img src="assets/Ellipse 70.png" alt=""></li>
                    <li><img src="assets/Ellipse 70.png" alt=""></li>
                </ul>
            </div>
            </div>
            
            <div class="absolute left-1/3 -top-24  w-[699px] h-[540px]">
                <img src="assets/Group 2071.png" alt="" class="absolute">
        </div>
        </section>
    </section>
        <section class="relative container mx-auto font-inter pt-28 right-1">
            <p class="text-center text-[#FFFFFF]">Trusted Companies Woldwide</p>
            <div class="flex gap-8 py-10 justify-center">
                <img class="w-[165px]"src="assets/grab.png" alt="">
                <img class="w-[165px]"src="assets/gojek.png" alt="">
                <img class="w-[165px]"src="assets/shopee.png" alt="">
                <img class="w-[165px]"src="assets/buka lapak.png" alt="">
                <img class="w-[165px]"src="assets/gojek.png" alt="">
                <img class="w-[165px]"src="assets/shopee.png" alt="">
            </div>
            <div class="container mx-auto">
                <img src="assets/Ellipse 68.png" alt="" class="absolute -right-60 -top-[640px]">
            </div>
        </section>
        <section class="container mx-auto flex gap-8 px-32 py-10">
            <div class="py-2 px-20">
                <h1 class="text-[#FF9900]">About Us</h1>
                <h1 class="py-3 text-[40px] font-bold">MaemMamam</h1>
                <p class="py-5 pb-10 text-[14px] text-[#DDDDDD]">We were founded in 1948 after the war and the world began to be safe we decided <br> to open a small restaurant on the side of the road for the youth and the surrounding <br> community, until finally we had the capital to create the only largest restaurant and <br> so far we have opened 10 branches in Indonesia.</p>
                <a href="#get-started" class="py-[12px] rounded-full border-2 px-5 ">Read More →</a>
            </div>
            <div>
                <img src="assets/ger.png" alt="" class="w-[492px] h-[491px]">
            </div>
        </section>
        <section class="relative static container mx-auto flex gap-5 py-10 w-[1220px] h-[491px]">
            <img src="assets/Ellipse 78.png" alt="" class="absolute -left-96 -top-80">
            <div>
                <img src="assets/Group 2107.png" alt="" class="w-[569px] h-[491px]">
            </div>
            <div class="py-20">
                <h1 class="py-3 text-[#FF9900]">MaemMamam Restaurant</h1>
                <h1 class="py-3 font-bold text-[40px]">Fast food and fill your stomach</h1>
                <p class="py-3">we are a fast food company and we make everyone enjoy any food we serve them <br> because we serve the best for them all.</p>
                    <div class="flex gap-10 py-10">
                        <a href="#get-started" class="button-primary">Shop Now</a>
                        <a href="#get-started" class="rounded-full border-2 py-[12px] px-[30px]">About Us</a>
                    </div>
            </div>
        </section>
        <section class="relative container mx-auto px-40 pt-40 gap-5 py-20">
            <div class="relative">
                <img src="assets/Ellipse 79.png" alt="" class="absolute -right-96 -top-96">
                <h1 class="text-[#FF9900]">Popular menu</h1>
                <h1 class="font-bold text-[40px] py-5">Best Popular Menu</h1>
                <div class="flex justify-between py-5">
                    <p>Find the food you want to buy and get the prize, made from the best ingredients we <br> choose</p>
                    <a href="#get-started" class="rounded-full border-2 py-3 px-5 font-inter ">view More</a>
                </div>
                <div class="grid grid-cols-4 gap-5 rounded-full">
                    <div class="bg-[#16130D] drop-shadow-[0px_4px_15px_0px_(#00000014)] px-5 rounded-lg py-5 w-[267px] h-[322px]">
                        <img src="assets/Frame 2079.png" alt="">
                        <img src="assets/image 9.png" alt="">
                        <p class="text-[18px] font-bold"> Best Spagheti</p>
                        <div class="flex justify-between">
                            <p> withe sauce hot</p>
                            <p class="font-bold">20$</p>
                        </div>
                    </div>
                    <div class="bg-[#16130D] drop-shadow-[0px_4px_15px_0px_(#00000014)] px-5 rounded-lg py-5 w-[267px] h-[322px]">
                        <img src="assets/Frame 2079.png" alt="">
                        <img src="assets/image 10.png" alt="">
                        <p class="text-[18px] font-bold">STik belf Special</p>
                        <div class="flex justify-between">
                            <p> withe hot chilli</p>
                            <p class="font-bold">40$</p>
                        </div>
                    </div>
                    <div class="bg-[#16130D] drop-shadow-[0px_4px_15px_0px_(#00000014)] px-5 rounded-lg py-5 w-[267px] h-[322px]">
                        <img src="assets/Frame 2079.png" alt="">
                        <img src="assets/image 11.png" alt="">
                        <p class="text-[18px] font-bold"> Burger campur Special</p>
                        <div class="flex justify-between">
                            <p> withe spich</p>
                            <p class="font-bold">20$</p>
                        </div>
                    </div>
                    <div class="bg-[#16130D] drop-shadow-[0px_4px_15px_0px_(#00000014)] px-5 rounded-lg py-5 w-[267px] h-[322px]">
                        <img src="assets/Frame 2079.png" alt="">
                        <img src="assets/image 12.png" alt="">
                        <p class="text-[18px] font-bold">Potato satu satu</p>
                        <div class="flex justify-between">
                            <p> withe sausage</p>
                            <p class="font-bold">20$</p>
                        </div>
                    </div>
                    <div class="bg-[#16130D] drop-shadow-[0px_4px_15px_0px_(#00000014)] px-5 rounded-lg py-5 w-[267px] h-[322px]">
                        <img src="assets/Frame 2079.png" alt="">
                        <img src="assets/image 9.png" alt="">
                        <p class="text-[18px] font-bold"> Best Spagheti</p>
                        <div class="flex justify-between">
                            <p> withe sauce hot</p>
                            <p class="font-bold">20$</p>
                        </div>
                    </div>
                    <div class="bg-[#16130D] drop-shadow-[0px_4px_15px_0px_(#00000014)] px-5 rounded-lg py-5 w-[267px] h-[322px]">
                        <img src="assets/Frame 2079.png" alt="">
                        <img src="assets/image 10.png" alt="">
                        <p class="text-[18px] font-bold">STik belf Special</p>
                        <div class="flex justify-between">
                            <p> withe hot chilli</p>
                            <p class="font-bold">40$</p>
                        </div>
                    </div>
                    <div class="bg-[#16130D] drop-shadow-[0px_4px_15px_0px_(#00000014)] px-5 rounded-lg py-5 w-[267px] h-[322px]">
                        <img src="assets/Frame 2079.png" alt="">
                        <img src="assets/image 11.png" alt="">
                        <p class="text-[18px] font-bold"> Burger campur Special</p>
                        <div class="flex justify-between">
                            <p> withe spich</p>
                            <p class="font-bold">20$</p>
                        </div>
                    </div>
                    <div class="bg-[#16130D] drop-shadow-[0px_4px_15px_0px_(#00000014)] px-5 rounded-lg py-5 w-[267px] h-[322px]">
                        <img src="assets/Frame 2079.png" alt="">
                        <img src="assets/image 12.png" alt="">
                        <p class="text-[18px] font-bold">Potato satu satu</p>
                        <div class="flex justify-between">
                            <p> withe sausage</p>
                            <p class="font-bold">20$</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container mx-auto rounded-lg text-center border border-1 w-[1125px] h-[414px] px-40 pt-20 py-5">
            <h1 class="text-[#FF9900]">Order Now</h1>
            <h1 class="font-bold text-[40px] py-5 pt-10">Order Now and Take GiveAway</h1>
            <p class="pb-10">Order and get the prize, we will give a gift to those of you who are lucky to get something <br> interesting from us</p>
            <a href="#get-started" class="button-primary">Order Now</a>
        </section>
        <section class="container mx-auto px-28 pt-20 w-[1440px] h-[457px]">
            <div class="flex pb-8">
            <img src="assets/ic_round-table-restaurant.png" alt="">
            <p class="font-bold">MaemMamam</p>
        </div>
            <div class="flex gap-5 justify-between">
                <div>
                <p> were founded in 1948 after the war and the <br> world began to be safe we decided to open a <br> small restaurant on the side of the road for the <br> youth and the surrounding community.</p>
                     <div class="flex gap-5 py-10">
                        <img src="assets/Group 85.png" alt="">
                        <img src="assets/Group 86.png" alt="">
                        <img src="assets/Group 87.png" alt="">
                        <img src="assets/Group 88.png" alt="">
                     </div>
                </div>
                <div>
                    <p class="text-16 font-bold">Navigation</p>
                    <ul class="py-2">
                        <li class="py-2">Home</li>
                        <li class="py-2">Info</li>
                        <li class="py-2">News</li>
                        <li class="py-2">About us</li>
                        <li class="py-2">Contact</li>
                    </ul>
                </div>
                <div>
                    <p class="text-16 font-bold pb-5">Address</p>
                    <p>Jl. Al-Muwahhiddin, Karangtengah, <br> Cibadak, Kab. Sukabumi.
                        <br> Sukabumi 43351</p>
                </div>
                <div>
                    <p class="text-16 font-bold">Contact</p>
                    <div class="flex py-5">
                        <img src="assets/ant-design_phone-filled.png" alt="">
                        <p>(0266) 532510
                            </p>
                    </div>
                    <div class="flex">
                        <img src="assets/clarity_email-solid.png" alt="">
                        <p>smkn1_cibadak@yahoo.co.id</p>
                    </div>
                </div>  
            </div>
        </section>
    </body>
    </html>