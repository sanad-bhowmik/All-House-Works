<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mission - PHH M&E SERVICES PTE LTD</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="icon" href="https://i.ibb.co/37LJZ19/Blue-Modern-Luxury-Real-Estate-Logo-removebg-preview.png" type="image/x-icon">

    <script defer src="https://unpkg.com/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/alpinejs" defer></script>
</head>
<style>
    #nav1 {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.dev/svgjs' width='1440' height='560' preserveAspectRatio='none' viewBox='0 0 1440 560'%3e%3cg mask='url(%26quot%3b%23SvgjsMask1000%26quot%3b)' fill='none'%3e%3cpath d='M419.6053010003687 163.3661663577806L460.0172446068905 230.62293494402098 540.6964256829901 136.3766352411181z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M832.647%2c268.098C850.153%2c267.956%2c865.16%2c258.158%2c875.221%2c243.831C887.506%2c226.338%2c900.103%2c204.959%2c890.341%2c185.942C880.079%2c165.952%2c855.111%2c160.385%2c832.647%2c160.899C811.214%2c161.39%2c789.297%2c169.489%2c779.353%2c188.482C769.932%2c206.476%2c777.563%2c227.653%2c788.861%2c244.532C798.743%2c259.295%2c814.883%2c268.242%2c832.647%2c268.098' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M924.2167904606458-69.39989263033448L802.0358488286402 36.81037954426655 1030.4270626352468 52.78104900167121z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M883.4503129161776 145.9319053284218L991.5423983336607 104.43924126467385 841.9576488524297 37.839819910938715z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M843.68 491.95 a161.12 161.12 0 1 0 322.24 0 a161.12 161.12 0 1 0 -322.24 0z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M762.4664758135211 349.5036480581027L651.3413188206356 468.6707893138538 770.5084600763867 579.7959463067393 881.6336170692722 460.6288050509883z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M167.625%2c166.733C197.209%2c166.479%2c220.899%2c144.616%2c235.025%2c118.621C248.452%2c93.912%2c249.417%2c64.92%2c236.533%2c39.924C222.396%2c12.497%2c198.456%2c-10.901%2c167.625%2c-12.144C134.897%2c-13.464%2c103.626%2c4.965%2c88.372%2c33.951C73.996%2c61.269%2c82.37%2c93.289%2c98.191%2c119.796C113.537%2c145.507%2c137.683%2c166.99%2c167.625%2c166.733' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M852.5273925112068 449.94057081914406L969.5194397284837 481.28849539187723 1000.8673643012169 364.2964481746003 883.87531708394 332.9485236018671z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M654.7218892975667 413.88063108446335L740.3231740574574 440.05157020784156 736.7789403625793 298.5641735063165z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M1039.4221823438097 184.18131092343668L918.302514958343 268.9902150521932 1003.1114190870995 390.10988243765996 1124.2310864725662 305.30097830890344z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M484.6223913901636 418.69155680193126L507.69913879861855 527.7701765678157 581.2549366066957 463.82909704376243z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M700.7129912812588 487.1877231557661L800.5494979470236 354.7002039762914 668.0619787675489 254.86369731052667 568.2254721017841 387.3512164900014z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M194.64034498289436 416.72315197868386L353.3951998313218 462.2453740732798 398.9174219259177 303.49051922485233 240.16256707749028 257.9682971302564z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M-41.93706318769925 78.44152557562158L51.65387791988694 217.19580186810322 190.40815421236857 123.60486076051701 96.81721310478237-15.149415531964607z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M616.8463150881507 25.144255406657948L602.3479771820636 143.22374194366773 720.4274637190733 157.72207984975492 734.9258016251605 39.64259331274513z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M547.23 61.34 a169.03 169.03 0 1 0 338.06 0 a169.03 169.03 0 1 0 -338.06 0z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M930.55 151.07 a130.08 130.08 0 1 0 260.16 0 a130.08 130.08 0 1 0 -260.16 0z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M177.51874183477418 176.92069846295792L321.06365536532667 177.0574998664828 260.2293139012762 67.30944270484724z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M178.89008021283894 65.4963141947672L231.25290241968779 26.038097445983716 145.88416619308816-32.777027489897804z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M127.202%2c745.821C184.825%2c747.403%2c227.356%2c696.273%2c252.821%2c644.558C275.183%2c599.144%2c271.525%2c547.155%2c246.771%2c502.999C221.39%2c457.725%2c179.103%2c420.948%2c127.202%2c420.482C74.615%2c420.01%2c28.308%2c454.259%2c3.858%2c500.819C-18.974%2c544.297%2c-9.092%2c594.109%2c12.99%2c637.972C38.226%2c688.099%2c71.102%2c744.28%2c127.202%2c745.821' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask1000'%3e%3crect width='1440' height='560' fill='white'%3e%3c/rect%3e%3c/mask%3e%3cstyle%3e %40keyframes float1 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(-10px%2c 0)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float1 %7b animation: float1 5s infinite%3b %7d %40keyframes float2 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(-5px%2c -5px)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float2 %7b animation: float2 4s infinite%3b %7d %40keyframes float3 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(0%2c -10px)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float3 %7b animation: float3 6s infinite%3b %7d %3c/style%3e%3c/defs%3e%3c/svg%3e");
    }

    .submenu {
        display: none;
    }

    .hoverable:hover .submenu {
        display: block;
    }

    .submenu-container {
        position: relative;
        display: flex;
    }

    .submenu {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        background-color: white;
        border: 1px solid black;
        padding: 10px;
        font-size: 15px;
        font-weight: 600;
        font-family: serif;
        width: 123%;
    }

    .submenu-container:hover .submenu {
        display: block;
    }

    .submenu a {
        display: block;
        padding: 5px 0;
        color: #000;
        text-decoration: none;
        transition: color 0.3s;
    }

    .submenu a:hover {
        color: #f7a80c;
        font-size: 15px;
        font-weight: 600;
    }

    @import url('https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css');

    fixed-image-height {
        height: 500px;
        /* Set a fixed height */
    }

    .image-container {
        position: relative;
        display: inline-block;
        overflow: hidden;
        border-radius: 8px;
    }

    .image {
        display: block;
        width: 100%;
        height: auto;
        transition: transform 0.3s ease;
        border-radius: 8px;
    }

    .image-container:hover .image {
        transform: scale(1.1);
    }

    .hover-button {
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 0;
        height: 0;
        border-left: 12px solid transparent;
        border-right: 12px solid transparent;
        border-top: 16px solid rgba(0, 0, 0, 0.7);
        cursor: pointer;
        transition: opacity 0.3s ease, transform 0.3s ease;
        opacity: 0;
    }

    .image-container:hover .hover-button {
        opacity: 1;
    }

    .relative:hover>.absolute {
        display: block;
    }

    .absolute {
        position: absolute;
        top: 100%;
        left: 0;
        background-color: white;
        padding: 8px 0;
        border-radius: 4px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .absolute {
        display: none;
    }

    .main-container__marquee {
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        width: 100vw;
        max-width: 100%;
        min-height: 1rem;
        overflow-x: hidden;
        font-family: "Merriweather", serif;
        font-size: 18px;
        color: black;
    }

    .main-container__marquee-track {
        display: flex;
        white-space: nowrap;
        position: relative;
        display: flex;
        overflow: hidden;
        user-select: none;
    }

    .main-container__marquee-items {
        flex-shrink: 0;
        display: flex;
        gap: 20px;
        justify-content: space-around;
        min-width: 100%;
        animation: marquee 12s linear infinite;

    }

    .main-container__marquee-item {
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 18px;
        width: auto;
        transition: all 0.1s ease-in-out;
    }

    @keyframes marquee {
        from {
            transform: translateX(0);
        }

        to {
            transform: translateX(-100%);
        }
    }

    .parallax {
        background-image: url('https://drvinodmune.com/wp-content/uploads/2022/09/istockphoto-1306669539-170667a.jpg');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        background-color: rgba(0, 0, 0, 0.8);
        /* Background shade */
        position: relative;
        overflow: hidden;
    }


    .overlay {
        background-color: rgba(0, 0, 0, 0.5);
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .content {
        position: relative;
        z-index: 1;
        text-align: center;
        padding-top: 100px;
    }

    .footer {
        background: linear-gradient(rgb(62 71 247 / 9%), rgb(39 255 111 / 10%)), url(https://agrosoftware.in/img/product-bg.png) left bottom no-repeat;
        background-size: auto;

    }

    .submenu-container {
        position: relative;
        display: flex;
    }

    .submenu {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        background-color: white;
        border: 1px solid #ccc;
        padding: 10px;
        font-size: 15px;
        font-weight: 600;
        font-family: serif;
        width: 123%;
    }

    .submenu-container:hover .submenu {
        display: block;
    }

    .submenu a {
        display: block;
        padding: 5px 0;
        color: #000;
        text-decoration: none;
        transition: color 0.3s;
    }

    .submenu a:hover {
        color: #f7a80c;
        font-size: 15px;
        font-weight: 600;
    }

    .main-container__marquee {
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        width: 100vw;
        max-width: 100%;
        min-height: 1rem;
        overflow-x: hidden;
        font-family: "Merriweather", serif;
        font-size: 18px;
        color: black;
    }

    .main-container__marquee-track {
        display: flex;
        white-space: nowrap;
        position: relative;
        display: flex;
        overflow: hidden;
        user-select: none;
    }

    .main-container__marquee-items {
        flex-shrink: 0;
        display: flex;
        gap: 20px;
        justify-content: space-around;
        min-width: 100%;
        animation: marquee 12s linear infinite;

    }

    .main-container__marquee-item {
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 18px;
        width: auto;
        transition: all 0.1s ease-in-out;
    }

    @keyframes marquee {
        from {
            transform: translateX(0);
        }

        to {
            transform: translateX(-100%);
        }
    }
</style>

<body>
    <article class="main-container__marquee">
        <div class="main-container__marquee-track">
            <div class="main-container__marquee-items">
                <span class="main-container__marquee-item">Launching soon</span>
                <span class="main-container__marquee-item">We Will always for your service</span>
            </div>
            <div aria-hidden="true" class="main-container__marquee-items">
                <span class="main-container__marquee-item">Launching soon</span>
                <span class="main-container__marquee-item">We Will always for your service</span>
            </div>
        </div>
    </article>

    <header>
        <nav id="nav1" x-data="{ open: false }" class="flex h-auto w-auto bg-white mt-10 rounded-lg justify-between
      md:h-16" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
            <div class="flex w-full justify-between ">
                <div :class="open ? 'hidden':'flex'" class="flex px-6 w-1/2 items-center font-semibold
          md:w-1/5 md:px-1 md:flex md:items-center md:justify-center" x-transition:enter="transition ease-out duration-300">
                    <a href="/">All House Works</a>
                </div>

                <div x-show="open" x-transition:enter="transition ease-in-out duration-300" class="flex flex-col w-full h-auto
          md:hidden">
                    <div class="flex flex-col items-center justify-center gap-2">
                        <a href="/">Home</a>
                        <a href="/about">About Us</a>
                        <a href="/service">Service</a>
                        <a href="/price">Price</a>
                        <a href="/works">Works</a>
                        <a href="/contact">Contact</a>
                    </div>
                </div>
                <div class="hidden w-2/5 items-center justify-evenly font-semibold
          md:flex">
                    <a href="/">Home</a>
                    <div class="hoverable relative">
                        <a href="/about">About Us</a>
                        <div class="submenu absolute left-0 mt-1 bg-white shadow-lg rounded-lg p-2">
                            <a href="/review" class="block px-4 py-2 hover:bg-gray-200">Review</a>
                            <a href="/mission" class="block px-4 py-2 hover:bg-gray-200">Mission</a>
                        </div>
                    </div>
                    <div class="hoverable relative">
                        <a href="/service">Service</a>
                        <div class="submenu absolute left-0 mt-1 bg-white shadow-lg rounded-lg p-2 hidden group-hover:block z-20">
                            <a href="/plumbing" class="block px-4 py-2 hover:bg-gray-200">Plumber</a>
                            <a href="/electric" class="block px-4 py-2 hover:bg-gray-200">Electrician</a>
                            <a href="/handyman" class="block px-4 py-2 hover:bg-gray-200">Handyman</a>
                            <a href="/deepclean" class="block px-4 py-2 hover:bg-gray-200">Deep Cleaning</a>
                            <a href="/floorpolish" class="block px-4 py-2 hover:bg-gray-200">Floor Polishing</a>
                            <a href="/floorclean" class="block px-4 py-2 hover:bg-gray-200">Floor Cleaning</a>
                            <a href="/wood" class="block px-4 py-2 hover:bg-gray-200">Wood Varnishing</a>
                            <a href="/decking" class="block px-4 py-2 hover:bg-gray-200">Decking</a>
                        </div>
                    </div>
                    <a href="/price">Price</a>
                    <a href="/works">Works</a>
                    <a href="/contact">Contact</a>
                </div>

                <button class="text-gray-500 w-10 h-10 relative focus:outline-none bg-white
                          md:hidden
                        " @click="open = !open">
                    <span class="sr-only">Open main menu</span>
                    <div class="block w-5 absolute left-1/2 top-1/2   transform  -translate-x-1/2 -translate-y-1/2">
                        <span aria-hidden="true" class="block absolute h-0.5 w-5 bg-current transform transition duration-500 ease-in-out" :class="{'rotate-45': open,' -translate-y-1.5': !open }"></span>
                        <span aria-hidden="true" class="block absolute  h-0.5 w-5 bg-current   transform transition duration-500 ease-in-out" :class="{'opacity-0': open } "></span>
                        <span aria-hidden="true" class="block absolute  h-0.5 w-5 bg-current transform  transition duration-500 ease-in-out" :class="{'-rotate-45': open, ' translate-y-1.5': !open}"></span>
                    </div>
                </button>
            </div>
        </nav>
    </header>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>

    <nav class="h-auto md:h-48">
        <div class="max-w-7xl mx-auto px-4 py-2">
            <div class="mt-10 flex flex-wrap justify-center md:space-x-64 space-y-4 md:space-y-0">
                <div class="flex items-center w-full md:w-auto" style="height: auto; width: auto;">
                    <div class="p-2">
                        <img src="{{ url('img/whatsapp.png') }}" alt="">
                    </div>
                    <div class="flex flex-col justify-center">
                        <p class="text-lg font-semibold" style="font-family: 'Josefin Sans';">WHATSAPP NUMBER</p>
                        <p class="text-gray-500" style="font-family: 'math';">65 6575 1226</p>
                    </div>
                </div>
                <div class="w-full md:w-auto flex justify-center">
                    <img src="https://www.shutterstock.com/image-vector/builder-crossed-hammers-new-construction-600nw-2246936013.jpg" alt="" class="h-20">
                </div>
                <div class="flex items-center w-full md:w-auto">
                    <input type="text" placeholder="ENTER KEYWORD" class="text-gray-300 hover:text-white border border-black px-2 py-1 pl-8 w-full md:w-auto">
                </div>
            </div>
        </div>
    </nav>


    <section class="parallax mt-16">
        <div class="overlay"></div>
        <div class="content flex pl-56" style="gap: 63%;">
            <h1 style="font-size: 319%;color: white;font-weight: 100;" class="mb-6">Mission</h1>
            <p style="font-size: 20px;color: antiquewhite;">Home / Mission</p>
        </div>
    </section>


    <section class="mt-6 mb-10">
        <div class="container max-w-xl p-6 mx-auto space-y-12 lg:px-8 lg:max-w-7xl">
            <div>
                <h2 class="text-3xl font-bold text-center sm:text-5xl">Our Company Vision</h2>
                <div class="text-center mb-10">
                    <span class="inline-block w-1 h-1 rounded-full bg-indigo-500 ml-1"></span>
                    <span class="inline-block w-3 h-1 rounded-full bg-indigo-500 ml-1"></span>
                    <span class="inline-block w-40 h-1 rounded-full bg-indigo-500"></span>
                    <span class="inline-block w-3 h-1 rounded-full bg-indigo-500 ml-1"></span>
                    <span class="inline-block w-1 h-1 rounded-full bg-indigo-500 ml-1"></span>
                </div>
                <p class="max-w-3xl mx-auto mt-4 text-xl text-center ">EveryWorks Services is the most trusted platform and service provider for homeowners in Singapore who are looking for a convenient, trustworthy and affordable solution to their home repair woes. Turn to Everyworks Services, and we will make it work.</p>
            </div>
            <div class="grid lg:gap-8 lg:grid-cols-2 lg:items-center">
                <div>
                    <div class="mt-4 space-y-12">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center w-12 h-12 rounded-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-rocket">
                                        <path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z">
                                        </path>
                                        <path d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z">
                                        </path>
                                        <path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0"></path>
                                        <path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg font-medium leadi ">We Put Your Convenience First :</h4>
                                <p class="mt-2 ">Our flexible range of services is sure to answer most of your house repair and house improvement needs. We meet your demands at the flexibility of your time, and exert our best efforts to resolve the problem.</p>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center w-12 h-12 rounded-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-bookmark-plus">
                                        <path d="m19 21-7-4-7 4V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16z"></path>
                                        <line x1="12" x2="12" y1="7" y2="13"></line>
                                        <line x1="15" x2="9" y1="10" y2="10"></line>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg font-medium leadi ">Openness & Transparency :</h4>
                                <p class="mt-2 ">We are open and transparent with our service rates and methods, as we believe well-informed customers are happy customers. We create open and accessible communication channels within our company and between our clients for a positive and productive working relationship.</p>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center w-12 h-12 rounded-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-question">
                                        <path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"></path>
                                        <path d="M10 10.3c.2-.4.5-.8.9-1a2.1 2.1 0 0 1 2.6.4c.3.4.5.8.5 1.3 0 1.3-2 2-2 2"></path>
                                        <path d="M12 17h.01"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg font-medium leadi ">We Take Pride In Workmanship :</h4>
                                <p class="mt-2 ">Going strong is when each job we complete with beautiful results, brings joy to both us and the clients.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div aria-hidden="true" class="mt-10 lg:mt-0">
                    <img width="600" height="600" src="https://digiworld.com.vn/assets/banner/vision-mission-bg.png" class="mx-auto rounded-lg shadow-lg dark-bg-gray-500" style="color:transparent">
                </div>
            </div>
        </div>
    </section>


    <section class="mb-10">
        <div class="max-w-screen-xl mx-auto py-8 px-4 lg:py-16 lg:px-6">
            <div class="text-center mb-10">
                <h2 class="text-4xl tracking-tight font-bold text-primary-800">BROWSE OUR SITE</h2>
            </div>
            <div class="text-center mb-10">
                <span class="inline-block w-1 h-1 rounded-full bg-indigo-500 ml-1"></span>
                <span class="inline-block w-3 h-1 rounded-full bg-indigo-500 ml-1"></span>
                <span class="inline-block w-40 h-1 rounded-full bg-indigo-500"></span>
                <span class="inline-block w-3 h-1 rounded-full bg-indigo-500 ml-1"></span>
                <span class="inline-block w-1 h-1 rounded-full bg-indigo-500 ml-1"></span>
            </div>
            <div class="flex flex-col md:flex-row">

                <!-- end can help image -->

                <div class="flex-1 flex flex-col sm:flex-row flex-wrap -mb-4 -mx-2">
                    <div class="w-full sm:w-1/2 mb-4 px-2 relative">
                        <img src="https://www.everyworks.com/wp-content/uploads/2018/09/man-with-desk-white.png" style="position: absolute; top: 0; left: 0; width: 43px; height: 43px;" class="bg-green-500 rounded-xl p-2" alt="Image">
                        <div class="h-full py-4 px-6 border border-green-500 border-t-0 border-l-0 rounded-br-xl pl-10">
                            <h3 class="text-2xl font-bold text-md mb-6 ml-4">Find A Service Provider</h3>
                            <p class="text-sm">Everyworks Services gives you the quickest solution to resolve all home maintenance issues. We make the process of find reliable home service providers simple and efficient through one convenient portal and fast responses through our live Whatsapp chat (Daily, 9AM – 9PM).</p>
                        </div>
                    </div>

                    <div class="w-full sm:w-1/2 mb-4 px-2 relative">
                        <img src="https://www.everyworks.com/wp-content/uploads/2018/04/tab-img3.png" style="position: absolute; top: 0; left: 0; width: 43px; height: 43px;" class="bg-green-500 rounded-xl p-2" alt="Image">
                        <div class="h-full py-4 px-6 border border-green-500 border-t-0 border-l-0 rounded-br-xl pl-10">
                            <h3 class="text-2xl font-bold text-md mb-6 ml-4">Built-In Reliability</h3>
                            <p class="text-sm">Everyworks Services is home to a curated list of certified and reliable professionals from reputable home repair companies in Singapore. You can read all reviews of our trusted built-in network of home repair companies in Singapore.</p>
                        </div>
                    </div>

                    <div class="w-full sm:w-1/2 mb-4 px-2 relative">
                        <img src="https://www.everyworks.com/wp-content/uploads/2018/04/estimate-icon.png" style="position: absolute; top: 0; left: 0; width: 43px; height: 43px;" class="bg-green-500 rounded-xl p-2" alt="Image">
                        <div class="h-full py-4 px-6 border border-green-500 border-t-0 border-l-0 rounded-br-xl pl-10">
                            <h3 class="text-2xl font-bold text-md mb-6 ml-4">Cost Effective</h3>
                            <p class="text-sm">Can’t figure out what home service solutions you may need? Or perhaps you want to learn more about your home maintenance issue? Browse through our articles to understand more. Otherwise, our fast response team is always ready to receive your enquiry.</p>
                        </div>
                    </div>

                    <div class="w-full sm:w-1/2 mb-4 px-2 relative">
                        <img src="https://www.everyworks.com/wp-content/uploads/2018/09/tag-white.png" style="position: absolute; top: 0; left: 0; width: 43px; height: 43px;" class="bg-green-500 rounded-xl p-2" alt="Image">
                        <div class="h-full py-4 px-6 border border-green-500 border-t-0 border-l-0 rounded-br-xl pl-10">
                            <h3 class="text-2xl font-bold text-md mb-6 ml-4">Open & Transparent Pricing</h3>
                            <p class="text-sm">We are transparent about our prices and will only carry out the works upon your approval of the final quotation. In addition, save time & effort with our end-to-end solutions of supply & installation. Our home services prices are always quoted nett, inclusive of labour and transport.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BUY ME A BEER AND HELP SUPPORT OPEN-SOURCE RESOURCES -->
    <div class="flex items-end justify-end fixed bottom-0 right-0 mb-4 mr-4 z-10">
        <div>
            <a title="Let's Start Chat" href="https://web.whatsapp.com/" target="_blank" class="block w-16 h-16 rounded-full transition-all shadow hover:shadow-lg transform hover:scale-110 hover:rotate-12">
                <img class="object-cover object-center w-full h-full rounded-full" src="{{ url('img/social.png') }}" />
            </a>
        </div>
    </div>


    <!-- component -->
    <footer class="footer bg-blue-100/80 font-sans dark:bg-gray-900">
        <div class="container px-6 py-12 mx-auto">
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 sm:gap-y-10 lg:grid-cols-4">
                <div class="sm:col-span-2">
                    <h1 class="max-w-lg text-xl font-semibold tracking-tight text-gray-800 xl:text-2xl dark:text-white">Subscribe our newsletter to get an update.</h1>

                    <div class="flex flex-col mx-auto mt-6 space-y-3 md:space-y-0 md:flex-row">
                        <input id="email" type="text" class="px-4 py-2 text-gray-700 bg-white border rounded-md dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-opacity-40 focus:ring-blue-300" placeholder="Email Address" />

                        <button class="w-full px-6 py-2.5 text-sm font-medium tracking-wider text-white transition-colors duration-300 transform md:w-auto md:mx-4 focus:outline-none bg-gray-800 rounded-lg hover:bg-gray-700 focus:ring focus:ring-gray-300 focus:ring-opacity-80">
                            Subscribe
                        </button>
                    </div>
                </div>

                <div>
                    <p class="font-semibold text-gray-800 dark:text-white">Quick Link</p>

                    <div class="flex flex-col items-start mt-5 space-y-2">
                        <p class="text-gray-600 transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:cursor-pointer hover:text-blue-500">Home</p>
                        <p class="text-gray-600 transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:cursor-pointer hover:text-blue-500">Who We Are</p>
                        <p class="text-gray-600 transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:cursor-pointer hover:text-blue-500">Our Philosophy</p>
                    </div>
                </div>

                <div>
                    <p class="font-semibold text-gray-800 dark:text-white">Industries</p>

                    <div class="flex flex-col items-start mt-5 space-y-2">
                        <p class="text-gray-600 transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:cursor-pointer hover:text-blue-500">Retail & E-Commerce</p>
                        <p class="text-gray-600 transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:cursor-pointer hover:text-blue-500">Information Technology</p>
                        <p class="text-gray-600 transition-colors duration-300 dark:text-gray-300 dark:hover:text-blue-400 hover:underline hover:cursor-pointer hover:text-blue-500">Finance & Insurance</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
<script>
    window.onscroll = function() {
        var navbar = document.getElementById("navbar");
        if (window.pageYOffset > 0) {
            navbar.classList.add("sticky-nav");
            navbar.style.width = "100%";
            navbar.style.position = "fixed";
            navbar.style.top = "0";
            navbar.style.left = "50%";
            navbar.style.transform = "translateX(-50%)";
        } else {
            navbar.classList.remove("sticky-nav");
            navbar.style.width = "80%";
            navbar.style.position = "absolute";
            navbar.style.top = "-242px";
            navbar.style.left = "50%";
            navbar.style.transform = "translateX(-50%)";
        }
    };
</script>
