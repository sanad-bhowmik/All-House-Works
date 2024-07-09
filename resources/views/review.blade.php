<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service - All House Work's</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="icon" href="https://i.ibb.co/37LJZ19/Blue-Modern-Luxury-Real-Estate-Logo-removebg-preview.png" type="image/x-icon">

    <script defer src="https://unpkg.com/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/alpinejs" defer></script>
</head>
<style>
    #nav1 {
        background-color: #fbde6e;
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

    .sticky-nav {
        position: fixed;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 100%;
        z-index: 10;
        transition: all 0.5s ease-in-out;
    }

    .parallax {
        background-image: url('https://media.istockphoto.com/id/1471444483/photo/customer-satisfaction-survey-concept-users-rate-service-experiences-on-online-application.jpg?s=612x612&w=0&k=20&c=HFh1o4JU68KWv7PXgbLdIZT0_qepmgePEkvbsLJr5p0=');
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

    .show {
        display: block;
    }

    .group:hover .group-hover\:block {
        display: block;
    }

    .hidden-submenu {
        display: none;
    }
</style>

<body class="bg-white relative">

    <header>
        <nav id="nav1" x-data="{ open: false }" class="flex h-auto w-auto bg-white rounded-lg justify-between md:h-16" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
            <div class="flex w-full justify-between">
                <div :class="open ? 'hidden':'flex'" class="flex px-6 w-1/2 items-center font-semibold md:w-1/5 md:px-1 md:flex md:items-center md:justify-center" x-transition:enter="transition ease-out duration-300">
                    <a href="/" class="flex">
                        <img class="h-14 mr-4" src="https://www.shutterstock.com/image-vector/builder-crossed-hammers-new-construction-600nw-2246936013.jpg" alt="">
                        <span class="mt-2">All House Works</span>
                    </a>
                </div>
                <!-- mobile Screnn -->
                <div x-data="{ open: false }" style="margin-right: 2%;">
                    <!-- Sidebar -->
                    <div x-show="open" x-transition:enter="transition ease-in-out duration-300" class="fixed top-0 left-0 h-full bg-white shadow-lg z-50 w-64 md:hidden overflow-y-auto" style="border: 1px solid black;">
                        <div class="p-4">
                            <div class="flex justify-between items-center mb-6">
                                <span class="text-xl font-bold">All House Works</span>
                                <button @click="open = false" class="text-gray-600 focus:outline-none">
                                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </button>
                            </div>
                            <nav>
                                <ul class="space-y-2">
                                    <li><a href="/" class="block px-4 py-2 rounded hover:bg-gray-300">Home</a></li>
                                    <li><a href="/about" class="block px-4 py-2 rounded hover:bg-gray-300">About</a></li>


                                    <li x-data="{ openService: false }">
                                        <a href="#" @click="openService = !openService" class="block px-4 py-2 rounded hover:bg-gray-300">Service <svg class="w-10 h-10 ml-auto cursor-pointer toggle-submenu-icon" viewBox="-1024 -1024 3072.00 3072.00" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000" style="margin-top: -28px;margin-left: 62px;">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path d="M903.232 256l56.768 50.432L512 768 64 306.432 120.768 256 512 659.072z" fill="#000000"></path>
                                                </g>
                                            </svg></a>
                                        <ul x-show="openService" class="ml-4 space-y-2 bg-gray-100">
                                            <!-- Plumber -->
                                            <!-- Your main content -->
                                            <ul class="space-y-2">
                                                <!-- Plumber -->
                                                <li>
                                                    <a href="/plumbing" class="block px-4 py-2 rounded hover:bg-gray-300 flex items-center">
                                                        <span class="ml-1">Plumber</span>

                                                        <svg class="w-10 h-10 ml-auto cursor-pointer toggle-submenu-icon" onclick="toggleSubmenu(event)" viewBox="-1024 -1024 3072.00 3072.00" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                            <g id="SVGRepo_iconCarrier">
                                                                <path d="M903.232 256l56.768 50.432L512 768 64 306.432 120.768 256 512 659.072z" fill="#000000"></path>
                                                            </g>
                                                        </svg>
                                                    </a>
                                                    <ul id="plumber-submenu" class="ml-4 space-y-2 hidden">
                                                        <li>
                                                            <a href="/plumbingInstall" class="block px-4 py-2 rounded hover:bg-gray-300"><span class="ml-1">Plumber Install</span>
                                                                <svg class="w-10 h-10 ml-auto cursor-pointer toggle-submenu-icon" onclick="toggleSubmenu12(event)" viewBox="-1024 -1024 3072.00 3072.00" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000" style="margin-top: -30px;">
                                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                                    <g id="SVGRepo_iconCarrier">
                                                                        <path d="M903.232 256l56.768 50.432L512 768 64 306.432 120.768 256 512 659.072z" fill="#000000"></path>
                                                                    </g>
                                                                </svg>
                                                            </a>
                                                            <ul id="plumberInstall-submenu" class="ml-4 space-y-2 hidden" style="background-color: #b9cbda;">
                                                                <li><a href="/pipeInstall" class="block px-4 py-2 hover:bg-gray-200 border-b">Pipe Installation</a></li>
                                                                <li> <a href="/bidetSpray" class="block px-4 py-2 hover:bg-gray-200 border-b">Bidet Spray</a></li>
                                                                <li> <a href="/bathroomRack" class="block px-4 py-2 hover:bg-gray-200 border-b">Bathroom Rack</a></li>
                                                            </ul>
                                                        </li>



                                                        <li><a href="/plumbingChoke" class="block px-4 py-2 rounded hover:bg-gray-300">Plumbing Choke</a></li>

                                                        <li>
                                                            <a href="/plumbingLeak" class="block px-4 py-2 rounded hover:bg-gray-300"><span class="ml-1">Plumbing Leak</span>
                                                                <svg class="w-10 h-10 ml-auto cursor-pointer toggle-submenu-icon" onclick="toggleSubmenu22(event)" viewBox="-1024 -1024 3072.00 3072.00" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000" style="margin-top: -30px;">
                                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                                    <g id="SVGRepo_iconCarrier">
                                                                        <path d="M903.232 256l56.768 50.432L512 768 64 306.432 120.768 256 512 659.072z" fill="#000000"></path>
                                                                    </g>
                                                                </svg>
                                                            </a>
                                                            <ul id="plumberLeak-submenu" class="ml-4 space-y-2 hidden" style="background-color: #b9cbda;">
                                                                <li> <a href="/tapLeak" class="block px-4 py-2 hover:bg-gray-200 border-b">Leaking Tap</a></li>
                                                                <li> <a href="/heaterLeak" class="block px-4 py-2 hover:bg-gray-200 border-b">Heater Leak</a></li>
                                                                <li> <a href="/showerService" class="block px-4 py-2 hover:bg-gray-200 border-b">Shower Leak</a></li>
                                                            </ul>
                                                        </li>

                                                        <li>
                                                            <a href="/waterHeater" class="block px-4 py-2 rounded hover:bg-gray-300"><span class="ml-1">Water Heater</span>
                                                                <svg class="w-10 h-10 ml-auto cursor-pointer toggle-submenu-icon" onclick="toggleSubmenu32(event)" viewBox="-1024 -1024 3072.00 3072.00" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000" style="margin-top: -30px;">
                                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                                    <g id="SVGRepo_iconCarrier">
                                                                        <path d="M903.232 256l56.768 50.432L512 768 64 306.432 120.768 256 512 659.072z" fill="#000000"></path>
                                                                    </g>
                                                                </svg>
                                                            </a>
                                                            <ul id="waterHeater-submenu" class="ml-4 space-y-2 hidden" style="background-color: #b9cbda;">
                                                                <li> <a href="/heaterinstall" class="block px-4 py-2 hover:bg-gray-200 border-b">Water Heater Installation</a></li>
                                                                <li> <a href="/waterheaterLeak" class="block px-4 py-2 hover:bg-gray-200 border-b">Water Heater Leak</a></li>
                                                                <li> <a href="/heaterRepair" class="block px-4 py-2 hover:bg-gray-200 border-b">Water Heater Repair</a></li>
                                                            </ul>
                                                        </li>


                                                        <li>
                                                            <a href="/toiletBowl" class="block px-4 py-2 rounded hover:bg-gray-300"><span class="ml-1">Toilet Bowl</span>
                                                                <svg class="w-10 h-10 ml-auto cursor-pointer toggle-submenu-icon" onclick="toggleSubmenu42(event)" viewBox="-1024 -1024 3072.00 3072.00" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000" style="margin-top: -30px;">
                                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                                    <g id="SVGRepo_iconCarrier">
                                                                        <path d="M903.232 256l56.768 50.432L512 768 64 306.432 120.768 256 512 659.072z" fill="#000000"></path>
                                                                    </g>
                                                                </svg>
                                                            </a>
                                                            <ul id="toiletBowl-submenu" class="ml-4 space-y-2 hidden" style="background-color: #b9cbda;">
                                                                <li> <a href="/toiletBowl" class="block px-4 py-2 hover:bg-gray-200 border-b">Toilet Bowl Installation</a>
                                                                </li>
                                                                <li> <a href="/plumbingChoke" class="block px-4 py-2 hover:bg-gray-200 border-b">Toilet Bowl Choke</a></li>
                                                                <li> <a href="/toiletRepair" class="block px-4 py-2 hover:bg-gray-200 border-b">Toilet Bowl Choke Repair</a></li>
                                                            </ul>
                                                        </li>


                                                        <li>
                                                            <a href="/showerService" class="block px-4 py-2 rounded hover:bg-gray-300"><span class="ml-1">Shower Service</span>
                                                                <svg class="w-10 h-10 ml-auto cursor-pointer toggle-submenu-icon" onclick="toggleSubmenu52(event)" viewBox="-1024 -1024 3072.00 3072.00" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000" style="margin-top: -30px;">
                                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                                    <g id="SVGRepo_iconCarrier">
                                                                        <path d="M903.232 256l56.768 50.432L512 768 64 306.432 120.768 256 512 659.072z" fill="#000000"></path>
                                                                    </g>
                                                                </svg>
                                                            </a>
                                                            <ul id="shower-submenu" class="ml-4 space-y-2 hidden" style="background-color: #b9cbda;">
                                                                <li> <a href="/showerInstall" class="block px-4 py-2 hover:bg-gray-200 border-b">Shower Installation</a>
                                                                </li>
                                                                <li> <a href="/showerRepair" class="block px-4 py-2 hover:bg-gray-200 border-b">Shower Repair</a></li>
                                                            </ul>
                                                        </li>

                                                        <li><a href="/tapFaucet" class="block px-4 py-2 rounded hover:bg-gray-300">Tap & Faucet</a></li>
                                                        <li><a href="/bidetSpray" class="block px-4 py-2 rounded hover:bg-gray-300">Bidet Spray</a></li>
                                                        <li><a href="/coomercialPlumber" class="block px-4 py-2 rounded hover:bg-gray-300">Commercial Plumber</a></li>
                                                    </ul>
                                                </li>
                                                <!-- Plumber -->
                                            </ul>
                                            <!-- Plumber -->

                                            <!-- Electrician -->
                                            <li>
                                                <a href="/electric" class="block px-4 py-2 rounded hover:bg-gray-300 flex items-center">
                                                    <span class="ml-1">Electrician</span>
                                                    <svg class="w-10 h-10 ml-auto cursor-pointer toggle-submenu-icon" onclick="toggleSubmenu2(event)" viewBox="-1024 -1024 3072.00 3072.00" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M903.232 256l56.768 50.432L512 768 64 306.432 120.768 256 512 659.072z" fill="#000000"></path>
                                                        </g>
                                                    </svg>
                                                </a>
                                                <ul id="electrician-submenu" class="ml-4 space-y-2 hidden">
                                                    <li><a href="/electricalInstall" class="block px-4 py-2 rounded hover:bg-gray-300">Electrical Installation</a></li>
                                                    <li><a href="/electricRepair" class="block px-4 py-2 rounded hover:bg-gray-300">Electrical Repair</a></li>

                                                    <li>
                                                        <a href="/lightService" class="block px-4 py-2 rounded hover:bg-gray-300"><span class="ml-1">Light Service</span>
                                                            <svg class="w-10 h-10 ml-auto cursor-pointer toggle-submenu-icon" onclick="toggleSubmenu62(event)" viewBox="-1024 -1024 3072.00 3072.00" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000" style="margin-top: -30px;">
                                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                                <g id="SVGRepo_iconCarrier">
                                                                    <path d="M903.232 256l56.768 50.432L512 768 64 306.432 120.768 256 512 659.072z" fill="#000000"></path>
                                                                </g>
                                                            </svg>
                                                        </a>
                                                        <ul id="lightService-submenu" class="ml-4 space-y-2 hidden" style="background-color: #b9cbda;">
                                                            <li> <a href="/lightInstall" class="border-b block px-4 py-2 hover:bg-gray-200 border-b">Light Installation</a>
                                                            </li>
                                                            <li> <a href="/lightReplace" class="border-b block px-4 py-2 hover:bg-gray-200 border-b">Light Repair</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="/switchService" class="block px-4 py-2 rounded hover:bg-gray-300">Electric Switch Service</a></li>
                                                    <li><a href="/powerSocket" class="block px-4 py-2 rounded hover:bg-gray-300">Power Sockets</a></li>
                                                    <li><a href="/hdrElectric" class="block px-4 py-2 rounded hover:bg-gray-300">HDR Electrician</a></li>
                                                    <li><a href="/smartSwitch" class="block px-4 py-2 rounded hover:bg-gray-300">Smart Switch</a></li>
                                                </ul>
                                            </li>
                                            <!-- Electrician -->

                                            <!-- Handyman -->
                                            <li>
                                                <a href="/handyman" class="block px-4 py-2 rounded hover:bg-gray-300 flex items-center">
                                                    <span class="ml-1">Handyman</span>

                                                    <svg class="w-10 h-10 ml-auto cursor-pointer toggle-submenu-icon" onclick="toggleSubmenu3(event)" viewBox="-1024 -1024 3072.00 3072.00" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M903.232 256l56.768 50.432L512 768 64 306.432 120.768 256 512 659.072z" fill="#000000"></path>
                                                        </g>
                                                    </svg>
                                                </a>
                                                <ul id="handyman-submenu" class="ml-4 space-y-2 hidden">
                                                    <li><a href="/rubbishChute" class="block px-4 py-2 hover:bg-gray-200 border-b" onclick="handleLinkClick(event)">Rubbish Chute</a></li>
                                                    <li><a href="/cupboard" class="block px-4 py-2 hover:bg-gray-200 border-b" onclick="handleLinkClick(event)">Cupboard Hinge</a></li>
                                                    <li><a href="/cabinetHinge" class="block px-4 py-2 hover:bg-gray-200 border-b" onclick="handleLinkClick(event)">Cabinet Hinge</a></li>
                                                    <li><a href="/hydraulic" class="block px-4 py-2 hover:bg-gray-200 border-b" onclick="handleLinkClick(event)">Hydraulic Hinge</a></li>
                                                    <li><a href="/drilling" class="block px-4 py-2 hover:bg-gray-200 border-b" onclick="handleLinkClick(event)">Handyman Drilling</a></li>
                                                    <li><a href="/tvBucket" class="block px-4 py-2 hover:bg-gray-200 border-b" onclick="handleLinkClick(event)">TV Bracket Installation</a></li>
                                                    <li><a href="/wallMounting" class="block px-4 py-2 hover:bg-gray-200 border-b" onclick="handleLinkClick(event)">Wall Mounting Installation</a></li>
                                                    <li><a href="/pullUp" class="block px-4 py-2 hover:bg-gray-200 border-b" onclick="handleLinkClick(event)">PullUp Bar Installation</a></li>
                                                </ul>
                                            </li>
                                            <!-- Handyman -->

                                            <!-- Deep Cleaning -->
                                            <li>
                                                <a href="/deepclean" class="block px-4 py-2 rounded hover:bg-gray-300 flex items-center">
                                                    <span class="ml-1">Deep Cleaning</span>
                                                    <svg class="w-10 h-10 ml-auto cursor-pointer toggle-submenu-icon" onclick="toggleSubmenu4(event)" viewBox="-1024 -1024 3072.00 3072.00" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M903.232 256l56.768 50.432L512 768 64 306.432 120.768 256 512 659.072z" fill="#000000"></path>
                                                        </g>
                                                    </svg>

                                                </a>
                                                <ul id="deepclean-submenu" class="ml-4 space-y-2 hidden">
                                                    <li><a href="/matressClean" class="block px-4 py-2 hover:bg-gray-200 border-b" onclick="handleLinkClick(event)">Mattress Cleaning</a></li>
                                                    <li><a href="/matressDeepClean" class="block px-4 py-2 hover:bg-gray-200 border-b" onclick="handleLinkClick(event)">Mattress Deep Cleaning</a></li>
                                                    <li><a href="/matressstemClean" class="block px-4 py-2 hover:bg-gray-200 border-b" onclick="handleLinkClick(event)">Mattress Steam Cleaning</a></li>
                                                    <li><a href="/matrissStainClean" class="block px-4 py-2 hover:bg-gray-200 border-b" onclick="handleLinkClick(event)">Mattress Stain Removal</a></li>
                                                    <li><a href="/sofaClean" class="block px-4 py-2 hover:bg-gray-200 border-b" onclick="handleLinkClick(event)">Sofa Cleaning</a></li>
                                                    <li><a href="/sofaDeepClean" class="block px-4 py-2 hover:bg-gray-200 border-b" onclick="handleLinkClick(event)">Sofa Deep Cleaning</a></li>
                                                    <li><a href="/sofaStain" class="block px-4 py-2 hover:bg-gray-200 border-b" onclick="handleLinkClick(event)">Sofa Stain Removal</a></li>
                                                    <li><a href="/fabricSofaClean" class="block px-4 py-2 hover:bg-gray-200 border-b" onclick="handleLinkClick(event)">Fabric Sofa Cleaning</a></li>
                                                    <li><a href="/unholsteryClean" class="block px-4 py-2 hover:bg-gray-200 border-b" onclick="handleLinkClick(event)">Upholstery Cleaning</a></li>
                                                </ul>
                                            </li>
                                            <!-- Deep Cleaning -->

                                            <!-- Floor Polishing -->
                                            <li>
                                                <a href="/floorpolish" class="block px-4 py-2 rounded hover:bg-gray-300 flex items-center">
                                                    <span class="ml-1">Floor Polishing</span>
                                                    <svg class="w-10 h-10 ml-auto cursor-pointer toggle-submenu-icon" onclick="toggleSubmenu5(event)" viewBox="-1024 -1024 3072.00 3072.00" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M903.232 256l56.768 50.432L512 768 64 306.432 120.768 256 512 659.072z" fill="#000000"></path>
                                                        </g>
                                                    </svg>
                                                </a>
                                                <ul id="floorpolish-submenu" class="ml-4 space-y-2 hidden">
                                                    <li><a href="/marbleFloorPolish" class="block px-4 py-2 hover:bg-gray-200 border-b">Marble Floor Polish</a></li>
                                                    <li><a href="/marblePolish" class="block px-4 py-2 hover:bg-gray-200 border-b">Marble Polishing</a></li>
                                                    <li><a href="/parquetPolish" class="block px-4 py-2 hover:bg-gray-200 border-b">Parquet Polishing</a></li>
                                                    <li><a href="/parquetVarnish" class="block px-4 py-2 hover:bg-gray-200 border-b">Parquet Floor Polishing</a></li>
                                                    <li><a href="/woodPolish" class="block px-4 py-2 hover:bg-gray-200 border-b">Wood Polishing</a></li>
                                                    <li><a href="/wood" class="block px-4 py-2 hover:bg-gray-200 border-b">Wood Floor Polishing</a></li>
                                                    <li><a href="/vinylFloorPolish" class="block px-4 py-2 hover:bg-gray-200 border-b">Vinyl Floor Polishing</a></li>
                                                    <li><a href="/tileFloorPolish" class="block px-4 py-2 hover:bg-gray-200 border-b">Tile Floor Polishing</a></li>
                                                </ul>
                                            </li>
                                            <!-- Floor Polishing -->

                                            <!-- Floor Cleaning -->
                                            <li>
                                                <a href="/floorclean" class="block px-4 py-2 rounded hover:bg-gray-300 flex items-center">
                                                    <span class="ml-1">Floor Cleaning</span>
                                                    <svg class="w-10 h-10 ml-auto cursor-pointer toggle-submenu-icon" onclick="toggleSubmenu6(event)" viewBox="-1024 -1024 3072.00 3072.00" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M903.232 256l56.768 50.432L512 768 64 306.432 120.768 256 512 659.072z" fill="#000000"></path>
                                                        </g>
                                                    </svg>
                                                </a>
                                                <ul id="floorclean-submenu" class="ml-4 space-y-2 hidden">
                                                    <li><a href="/floorclean" class="border-b block px-4 py-2 hover:bg-gray-200">Floor Deep Cleaning</a></li>
                                                    <li> <a href="/vinylClean" class="border-b block px-4 py-2 hover:bg-gray-200">Vinyl Cleaning</a></li>
                                                    <li> <a href="/vinylFloorClean" class="border-b block px-4 py-2 hover:bg-gray-200">Vinyl Floor Cleaning</a></li>
                                                    <li> <a href="/terrazzoClean" class="border-b block px-4 py-2 hover:bg-gray-200">Terrazzo Cleaning</a></li>
                                                </ul>
                                            </li>
                                            <!-- Floor Cleaning -->

                                            <!-- Wood Varnishing -->
                                            <li>
                                                <a href="/wood" class="block px-4 py-2 rounded hover:bg-gray-300 flex items-center">
                                                    <span class="ml-1">Wood Varnishing</span>
                                                    <svg class="w-10 h-10 ml-auto cursor-pointer toggle-submenu-icon" onclick="toggleSubmenu66(event)" viewBox="-1024 -1024 3072.00 3072.00" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M903.232 256l56.768 50.432L512 768 64 306.432 120.768 256 512 659.072z" fill="#000000"></path>
                                                        </g>
                                                    </svg>
                                                </a>
                                                <ul id="varnish-submenu" class="ml-4 space-y-2 hidden">
                                                    <li><a href="/parquetVarnish" class="border-b block px-4 py-2 hover:bg-gray-200">Parquet Varnish</a></li>
                                                </ul>
                                            </li>
                                            <!-- Wood Varnishing -->
                                            <!-- Decking -->
                                            <li>
                                                <a href="/decking" class="block px-4 py-2 rounded hover:bg-gray-300 flex items-center">
                                                    <span class="ml-1">Decking</span>
                                                    <svg class="w-10 h-10 ml-auto cursor-pointer toggle-submenu-icon" onclick="toggleSubmenu7(event)" viewBox="-1024 -1024 3072.00 3072.00" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                        <g id="SVGRepo_iconCarrier">
                                                            <path d="M903.232 256l56.768 50.432L512 768 64 306.432 120.768 256 512 659.072z" fill="#000000"></path>
                                                        </g>
                                                    </svg>
                                                </a>
                                                <ul id="decking-submenu" class="ml-4 space-y-2 hidden">
                                                    <li><a href="/balconyDeck" class="border-b block px-4 py-2 hover:bg-gray-200">Balcony Decking</a></li>
                                                    <li> <a href="/timberDeck" class="border-b block px-4 py-2 hover:bg-gray-200">Timber Decking</a></li>
                                                </ul>
                                            </li>
                                            <!-- Decking -->
                                        </ul>
                                    </li>
                                    <li><a href="/price" class="block px-4 py-2 rounded hover:bg-gray-300">Price</a></li>
                                    <li><a href="/works" class="block px-4 py-2 rounded hover:bg-gray-300">Works</a></li>
                                    <li><a href="/contact" class="block px-4 py-2 rounded hover:bg-gray-300">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <script>
                        function toggleSubmenu(event) {
                            event.preventDefault();
                            const submenu = document.getElementById('plumber-submenu');
                            submenu.classList.toggle('hidden');
                        }

                        function toggleSubmenu2(event) {
                            event.preventDefault();
                            const submenu = document.getElementById('electrician-submenu');
                            submenu.classList.toggle('hidden');
                        }

                        function toggleSubmenu3(event) {
                            event.preventDefault();
                            const submenu = document.getElementById('handyman-submenu');
                            submenu.classList.toggle('hidden');
                        }

                        function toggleSubmenu4(event) {
                            event.preventDefault();
                            const submenu = document.getElementById('deepclean-submenu');
                            submenu.classList.toggle('hidden');
                        }

                        function toggleSubmenu5(event) {
                            event.preventDefault();
                            const submenu = document.getElementById('floorpolish-submenu');
                            submenu.classList.toggle('hidden');
                        }

                        function toggleSubmenu6(event) {
                            event.preventDefault();
                            const submenu = document.getElementById('floorclean-submenu');
                            submenu.classList.toggle('hidden');
                        }

                        function toggleSubmenu7(event) {
                            event.preventDefault();
                            const submenu = document.getElementById('decking-submenu');
                            submenu.classList.toggle('hidden');
                        }

                        function toggleSubmenu66(event) {
                            event.preventDefault();
                            const submenu = document.getElementById('varnish-submenu');
                            submenu.classList.toggle('hidden');
                        }

                        function toggleSubmenu55(event) {
                            event.preventDefault();
                            const submenu = document.getElementById('about-submenu');
                            submenu.classList.toggle('hidden');
                        }

                        function toggleSubmenu12(event) {
                            event.preventDefault();
                            const submenu = document.getElementById('plumberInstall-submenu');
                            submenu.classList.toggle('hidden');
                        }

                        function toggleSubmenu22(event) {
                            event.preventDefault();
                            const submenu = document.getElementById('plumberLeak-submenu');
                            submenu.classList.toggle('hidden');
                        }

                        function toggleSubmenu32(event) {
                            event.preventDefault();
                            const submenu = document.getElementById('waterHeater-submenu');
                            submenu.classList.toggle('hidden');
                        }

                        function toggleSubmenu42(event) {
                            event.preventDefault();
                            const submenu = document.getElementById('toiletBowl-submenu');
                            submenu.classList.toggle('hidden');
                        }

                        function toggleSubmenu52(event) {
                            event.preventDefault();
                            const submenu = document.getElementById('shower-submenu');
                            submenu.classList.toggle('hidden');
                        }

                        function toggleSubmenu62(event) {
                            event.preventDefault();
                            const submenu = document.getElementById('lightService-submenu');
                            submenu.classList.toggle('hidden');
                        }
                    </script>



                    <!-- Pc Screnn -->
                    <div class="mt-4 hidden items-center justify-evenly font-semibold md:flex" style="margin-right: 72%;gap: 53px;">
                        <a href="/">Home</a>
                        <div class="relative group">
                            <a href="/about">About</a>
                            <div class="absolute left-0 mt-1 bg-white shadow-lg rounded-lg p-2 hidden group-hover:block">
                                <a href="/review" class="border-b block px-4 py-2 hover:bg-gray-200">Review</a>
                                <a href="/mission" class="block px-4 py-2 hover:bg-gray-200">Mission</a>
                            </div>
                        </div>
                        <div class="relative group">
                            <a href="/service">Service</a>

                            <div class="absolute left-0 mt-1 bg-white shadow-lg rounded-lg p-2 hidden group-hover:block z-20" style="width: 340%;">
                                <div class="relative group" onmouseover="showSubmenu7()" onmouseout="hideSubmenu7()">
                                    <a href="/plumbing" class="border-b flex items-center px-4 py-2 hover:bg-gray-200">
                                        <span class="ml-1">Plumber</span>
                                    </a>
                                    <div id="service-submenu" class="absolute right-full top-0 mt-0 bg-white shadow-lg rounded-lg p-2 hidden-submenu z-20" style="width: 200px;">
                                        <div class="relative group" onmouseover="showPlumbingInstallSubmenu()" onmouseout="hidePlumbingInstallSubmenu()">
                                            <a href="/plumbingInstall" class="block px-4 py-2 hover:bg-gray-200 border-b">Plumbing Install</a>
                                            <div id="plumbing-install-submenu" class="absolute right-full top-0 mt-0 bg-white shadow-lg rounded-lg p-2 hidden-submenu z-20" style="width: 200px; left: -200px;">
                                                <a href="/pipeInstall" class="block px-4 py-2 hover:bg-gray-200 border-b">Pipe Installation</a>
                                                <a href="/bidetSpray" class="block px-4 py-2 hover:bg-gray-200 border-b">Bidet Spray</a>
                                                <a href="/bathroomRack" class="block px-4 py-2 hover:bg-gray-200 border-b">Bathroom Rack</a>
                                            </div>
                                        </div>
                                        <a href="/plumbingChoke" class="border-b block px-4 py-2 hover:bg-gray-200">Plumbing Choke</a>
                                        <div class="relative group" onmouseover="showPlumbingLeakSubmenu()" onmouseout="hidePlumbingLeakSubmenu()">
                                            <a href="/plumbingLeak" class="block px-4 py-2 hover:bg-gray-200 border-b">Plumbing Leak</a>
                                            <div id="plumbing-leak-submenu" class="absolute right-full top-0 mt-0 bg-white shadow-lg rounded-lg p-2 hidden-submenu z-20" style="width: 200px; left: -200px;">
                                                <a href="/tapLeak" class="block px-4 py-2 hover:bg-gray-200 border-b">Leaking Tap</a>
                                                <a href="/heaterLeak" class="block px-4 py-2 hover:bg-gray-200 border-b">Heater Leak</a>
                                                <a href="/showerService" class="block px-4 py-2 hover:bg-gray-200 border-b">Shower Leak</a>
                                            </div>
                                        </div>
                                        <div class="relative group" onmouseover="showWaterHeaterSubmenu()" onmouseout="hideWaterHeaterSubmenu()">
                                            <a href="/waterHeater" class="block px-4 py-2 hover:bg-gray-200 border-b">Water Heater</a>
                                            <div id="water-heater-submenu" class="absolute right-full top-0 mt-0 bg-white shadow-lg rounded-lg p-2 hidden-submenu z-20" style="width: 200px; left: -200px;">
                                                <a href="/heaterinstall" class="block px-4 py-2 hover:bg-gray-200 border-b">Water Heater Installation</a>
                                                <a href="/waterheaterLeak" class="block px-4 py-2 hover:bg-gray-200 border-b">Water Heater Leak</a>
                                                <a href="/heaterRepair" class="block px-4 py-2 hover:bg-gray-200 border-b">Water Heater Repair</a>
                                            </div>
                                        </div>
                                        <div class="relative group" onmouseover="showToiletBowlSubmenu()" onmouseout="hideToiletBowlSubmenu()">
                                            <a href="/toiletBowl" class="block px-4 py-2 hover:bg-gray-200 border-b">Toilet Bowl</a>
                                            <div id="toilet-bowl-submenu" class="absolute right-full top-0 mt-0 bg-white shadow-lg rounded-lg p-2 hidden-submenu z-20" style="width: 200px; left: -200px;">
                                                <a href="/toiletBowl" class="block px-4 py-2 hover:bg-gray-200 border-b">Toilet Bowl Installation</a>
                                                <a href="/plumbingChoke" class="block px-4 py-2 hover:bg-gray-200 border-b">Toilet Bowl Choke</a>
                                                <a href="/toiletRepair" class="block px-4 py-2 hover:bg-gray-200 border-b">Toilet Bowl Choke Repair</a>
                                            </div>
                                        </div>
                                        <div class="relative group" onmouseover="showShowerServiceSubmenu()" onmouseout="hideShowerServiceSubmenu()">
                                            <a href="/showerService" class="block px-4 py-2 hover:bg-gray-200 border-b">Shower Service</a>
                                            <div id="shower-service-submenu" class="absolute right-full top-0 mt-0 bg-white shadow-lg rounded-lg p-2 hidden-submenu z-20" style="width: 200px; left: -200px;">
                                                <a href="/showerInstall" class="block px-4 py-2 hover:bg-gray-200 border-b">Shower Installation</a>
                                                <a href="/showerRepair" class="block px-4 py-2 hover:bg-gray-200 border-b">Shower Repair</a>
                                            </div>
                                        </div>
                                        <a href="/tapFaucet" class="border-b block px-4 py-2 hover:bg-gray-200">Tap & Faucet</a>
                                        <a href="/bidetSpray" class="border-b block px-4 py-2 hover:bg-gray-200">Bidet Spray</a>
                                        <a href="/coomercialPlumber" class="border-b block px-4 py-2 hover:bg-gray-200">Comercial Plumber</a>
                                    </div>
                                </div>


                                <div class="relative group" onmouseover="showSubmenu6()" onmouseout="hideSubmenu6()">
                                    <div class="relative group" onmouseover="showSubmenu6()" onmouseout="hideSubmenu6()">
                                        <a href="/electric" class="border-b flex items-center px-4 py-2 hover:bg-gray-200">
                                            <span class="ml-1">Electrician</span>
                                        </a>
                                        <div id="electric-submenu" class="absolute right-full top-0 mt-0 bg-white shadow-lg rounded-lg p-2 hidden-submenu z-20" style="width: 200px;">
                                            <a href="/electricalInstall" class="block px-4 py-2 hover:bg-gray-200 border-b">Electrical Installation</a>
                                            <a href="/electricRepair" class="block px-4 py-2 hover:bg-gray-200 border-b">Electrical Repair</a>
                                            <div class="relative group" onmouseover="showLightServiceSubmenu()" onmouseout="hideLightServiceSubmenu()">
                                                <a href="/lightService" class="block px-4 py-2 hover:bg-gray-200 border-b">Light Service</a>
                                                <div id="light-service-submenu" class="absolute right-full top-0 mt-0 bg-white shadow-lg rounded-lg p-2 hidden-submenu z-20" style="width: 200px; left: -200px;">
                                                    <a href="/lightInstall" class="border-b block px-4 py-2 hover:bg-gray-200 border-b">Light Installation</a>
                                                    <a href="/lightReplace" class="border-b block px-4 py-2 hover:bg-gray-200 border-b">Light Repair</a>
                                                </div>
                                            </div>
                                            <a href="/switchService" class="block px-4 py-2 hover:bg-gray-200 border-b">Electric Switch Service</a>
                                            <a href="/powerSocket" class="block px-4 py-2 hover:bg-gray-200 border-b">Power Sockets</a>
                                            <a href="/hdrElectric" class="block px-4 py-2 hover:bg-gray-200 border-b">HDR Electrician</a>
                                            <a href="/smartSwitch" class="block px-4 py-2 hover:bg-gray-200 border-b">Smart Switch</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="relative group" onmouseover="showSubmenu5()" onmouseout="hideSubmenu5()">
                                    <a href="/handyman" class="border-b flex items-center px-4 py-2 hover:bg-gray-200">
                                        <span class="ml-1">Handyman</span>
                                    </a>
                                    <div id="handy-submenu" class="absolute right-full top-0 mt-0 bg-white shadow-lg rounded-lg p-2 hidden-submenu z-20" style="width: 200px;">
                                        <a href="/rubbishChute" class="block px-4 py-2 hover:bg-gray-200 border-b">Rubbish Chute</a>
                                        <a href="/cupboard" class="block px-4 py-2 hover:bg-gray-200 border-b">Cupboard Hinge</a>
                                        <a href="/cabinetHinge" class="block px-4 py-2 hover:bg-gray-200 border-b">Cabinet Hinge</a>
                                        <a href="/hydraulic" class="block px-4 py-2 hover:bg-gray-200 border-b">Hydraulic Hinge</a>
                                        <a href="/drilling" class="block px-4 py-2 hover:bg-gray-200 border-b">Handyman Drilling</a>
                                        <a href="/tvBucket" class="block px-4 py-2 hover:bg-gray-200 border-b">TV Bracket Installation</a>
                                        <a href="/wallMounting" class="block px-4 py-2 hover:bg-gray-200 border-b">Wall Mounting Installation</a>
                                        <a href="/pullUp" class="block px-4 py-2 hover:bg-gray-200 border-b">PullUp Bar Installation</a>
                                    </div>
                                </div>

                                <div class="relative group" onmouseover="showSubmenu4()" onmouseout="hideSubmenu4()">
                                    <a href="/deepclean" class="border-b flex items-center px-4 py-2 hover:bg-gray-200">
                                        <span class="ml-1">Deep Cleaning</span>
                                    </a>
                                    <div id="dClean-submenu" class="absolute right-full top-0 mt-0 bg-white shadow-lg rounded-lg p-2 hidden-submenu z-20" style="width: 200px;">
                                        <a href="/matressClean" class="border-b block px-4 py-2 hover:bg-gray-200">Mattress Cleaning</a>
                                        <a href="/matressDeepClean" class="border-b block px-4 py-2 hover:bg-gray-200">Mattress Deep Cleaning</a>
                                        <a href="/matressstemClean" class="border-b block px-4 py-2 hover:bg-gray-200">Mattress Steam Cleaning</a>
                                        <a href="/matrissStainClean" class="border-b block px-4 py-2 hover:bg-gray-200">Mattress Stain Removal</a>
                                        <a href="/sofaClean" class="border-b block px-4 py-2 hover:bg-gray-200">Sofa Cleaning</a>
                                        <a href="/sofaDeepClean" class="border-b block px-4 py-2 hover:bg-gray-200">Sofa Deep Cleaning</a>
                                        <a href="/sofaStain" class="border-b block px-4 py-2 hover:bg-gray-200">Sofa Stain Removal</a>
                                        <a href="/fabricSofaClean" class="border-b block px-4 py-2 hover:bg-gray-200">Fabric Sofa Cleaning</a>
                                        <a href="/unholsteryClean" class="border-b block px-4 py-2 hover:bg-gray-200">Upholstery Cleaning</a>
                                    </div>
                                </div>

                                <div class="relative group" onmouseover="showSubmenu3()" onmouseout="hideSubmenu3()">
                                    <a href="/floorpolish" class="border-b flex items-center px-4 py-2 hover:bg-gray-200">
                                        <span class="ml-1">Floor Polishing</span>
                                    </a>
                                    <div id="fpolish-submenu" class="absolute right-full top-0 mt-0 bg-white shadow-lg rounded-lg p-2 hidden-submenu z-20" style="width: 200px;">
                                        <a href="/marbleFloorPolish" class="border-b block px-4 py-2 hover:bg-gray-200">Marble Floor Polish</a>
                                        <a href="/marblePolish" class="border-b block px-4 py-2 hover:bg-gray-200">Marble Polishing</a>
                                        <a href="/parquetPolish" class="border-b block px-4 py-2 hover:bg-gray-200">Parquet Polishing</a>
                                        <a href="/parquetVarnish" class="border-b block px-4 py-2 hover:bg-gray-200">Parquet Floor Polishing</a>
                                        <a href="/woodPolish" class="border-b block px-4 py-2 hover:bg-gray-200">Wood Polishing</a>
                                        <a href="/wood" class="border-b block px-4 py-2 hover:bg-gray-200">Wood Floor Polishing</a>
                                        <a href="/vinylFloorPolish" class="border-b block px-4 py-2 hover:bg-gray-200">Vinyl Floor Polishing</a>
                                        <a href="/tileFloorPolish" class="border-b block px-4 py-2 hover:bg-gray-200">Tile Floor Polishing</a>
                                    </div>
                                </div>

                                <div class="relative group" onmouseover="showSubmenu2()" onmouseout="hideSubmenu2()">
                                    <a href="/floorclean" class="border-b flex items-center px-4 py-2 hover:bg-gray-200">
                                        <span class="ml-1">Floor Cleaning</span>
                                    </a>
                                    <div id="fClean-submenu" class="absolute right-full top-0 mt-0 bg-white shadow-lg rounded-lg p-2 hidden-submenu z-20" style="width: 200px;">
                                        <a href="/floorclean" class="border-b block px-4 py-2 hover:bg-gray-200">Floor Deep Cleaning</a>
                                        <a href="/vinylClean" class="border-b block px-4 py-2 hover:bg-gray-200">Vinyl Cleaning</a>
                                        <a href="/vinylFloorClean" class="border-b block px-4 py-2 hover:bg-gray-200">Vinyl Floor Cleaning</a>
                                        <a href="/vinylDeepFloorClean" class="border-b block px-4 py-2 hover:bg-gray-200">Vinyl Floor Deep Cleaning</a>
                                        <a href="/terrazzoClean" class="border-b block px-4 py-2 hover:bg-gray-200">Terrazzo Cleaning</a>
                                    </div>
                                </div>

                                <div class="relative group" onmouseover="showSubmenu1()" onmouseout="hideSubmenu1()">
                                    <a href="/wood" class="border-b flex items-center px-4 py-2 hover:bg-gray-200">
                                        <span class="ml-1">Wood Varnishing</span>
                                    </a>
                                    <div id="varnish-submenu" class="absolute right-full top-0 mt-0 bg-white shadow-lg rounded-lg p-2 hidden-submenu z-20" style="width: 200px;">
                                        <a href="/parquetVarnish" class="block px-4 py-2 hover:bg-gray-200">Parquet Varnish</a>
                                    </div>
                                </div>

                                <div class="relative group" onmouseover="showSubmenu()" onmouseout="hideSubmenu()">
                                    <a href="/decking" class="border-b flex items-center px-4 py-2 hover:bg-gray-200">
                                        <span class="ml-1">Decking</span>
                                    </a>
                                    <div id="decking-submenu" class="absolute right-full top-0 mt-0 bg-white shadow-lg rounded-lg p-2 hidden-submenu z-20" style="width: 200px;">
                                        <a href="/balconyDeck" class="border-b block px-4 py-2 hover:bg-gray-200">Balcony Decking</a>
                                        <a href="/timberDeck" class="border-b block px-4 py-2 hover:bg-gray-200">Timber Decking</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="/price">Price</a>
                        <a href="/works">Works</a>
                        <a href="/contact">Contact</a>
                    </div>

                    <button class="text-gray-500 w-10 h-10 relative focus:outline-none md:hidden mt-2" @click="open = !open">
                        <span class="sr-only">Open main menu</span>
                        <div class="block w-5 absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2">
                            <span aria-hidden="true" class="block absolute h-0.5 w-5 bg-current transform transition duration-500 ease-in-out" :class="{'rotate-45': open,' -translate-y-1.5': !open }"></span>
                            <span aria-hidden="true" class="block absolute h-0.5 w-5 bg-current transform transition duration-500 ease-in-out" :class="{'opacity-0': open }"></span>
                            <span aria-hidden="true" class="block absolute h-0.5 w-5 bg-current transform transition duration-500 ease-in-out" :class="{'-rotate-45': open, ' translate-y-1.5': !open}"></span>
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
                <form onsubmit="checkAndRedirect(event)">
                    <div class="flex items-center w-full md:w-auto">
                        <input id="search-input" type="text" placeholder="ENTER KEYWORD" class="h-12 text-blackhover:text-white border border-black px-2 py-1 pl-8 w-full md:w-auto">
                        <button type="submit">
                            <svg fill="#000000" height="64px" width="64px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-459.1 -459.1 1406.60 1406.60" xml:space="preserve">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <g>
                                        <g>
                                            <path d="M0,203.25c0,112.1,91.2,203.2,203.2,203.2c51.6,0,98.8-19.4,134.7-51.2l129.5,129.5c2.4,2.4,5.5,3.6,8.7,3.6 s6.3-1.2,8.7-3.6c4.8-4.8,4.8-12.5,0-17.3l-129.6-129.5c31.8-35.9,51.2-83,51.2-134.7c0-112.1-91.2-203.2-203.2-203.2 S0,91.15,0,203.25z M381.9,203.25c0,98.5-80.2,178.7-178.7,178.7s-178.7-80.2-178.7-178.7s80.2-178.7,178.7-178.7 S381.9,104.65,381.9,203.25z"></path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </nav>


    <section class="parallax mt-16">
        <div class="overlay"></div>
        <div class="content flex pl-56" style="gap: 63%;">
            <h1 style="font-size: 319%;color: white;font-weight: 100;" class="mb-6">Review</h1>
            <p style="font-size: 20px;color: antiquewhite;">Home / Review</p>
        </div>
    </section>



    <div class="min-w-screen min-h-screen bg-gray-50 flex items-center justify-center py-5">
        <div class="w-full bg-white border-t border-b border-gray-200 px-5 py-16 md:py-24 text-gray-800">
            <div class="w-full max-w-6xl mx-auto">
                <div class="text-center max-w-xl mx-auto">
                    <h1 class="text-6xl md:text-7xl font-bold mb-5 text-gray-600">What people <br>are saying.</h1>
                    <h3 class="text-xl mb-5 font-light">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
                    <div class="text-center mb-10">
                        <span class="inline-block w-1 h-1 rounded-full bg-indigo-500 ml-1"></span>
                        <span class="inline-block w-3 h-1 rounded-full bg-indigo-500 ml-1"></span>
                        <span class="inline-block w-40 h-1 rounded-full bg-indigo-500"></span>
                        <span class="inline-block w-3 h-1 rounded-full bg-indigo-500 ml-1"></span>
                        <span class="inline-block w-1 h-1 rounded-full bg-indigo-500 ml-1"></span>
                    </div>
                </div>
                <div class="-mx-3 md:flex items-start">
                    <div class="px-3 md:w-1/3">
                        <div class="w-full mx-auto rounded-lg bg-white border border-gray-200 p-5 text-gray-800 font-light mb-6">
                            <div class="w-full flex mb-4 items-center">
                                <div class="overflow-hidden rounded-full w-10 h-10 bg-gray-50 border border-gray-200">
                                    <img src="https://i.pravatar.cc/100?img=1" alt="">
                                </div>
                                <div class="flex-grow pl-3">
                                    <h6 class="font-bold text-sm uppercase text-gray-600">Kenzie Edgar.</h6>
                                    <div class="flex">
                                        <img src="{{ url('img/star.png') }}" alt="">
                                        <img src="{{ url('img/star.png') }}" alt="">
                                        <img src="{{ url('img/star.png') }}" alt="">
                                        <img src="{{ url('img/star.png') }}" alt="">
                                        <img src="{{ url('img/halfstar.png') }}" alt="">
                                    </div>
                                </div>
                                <div>
                                    <img src="{{ url('img/google.png') }}" alt="">
                                </div>
                            </div>
                            <div class="w-full">
                                <p class="text-sm leading-tight"><span class="text-lg leading-none italic font-bold text-gray-400 mr-1">"</span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos sunt ratione dolor exercitationem minima quas itaque saepe quasi architecto vel! Accusantium, vero sint recusandae cum tempora nemo commodi soluta deleniti.<span class="text-lg leading-none italic font-bold text-gray-400 ml-1">"</span></p>
                            </div>
                        </div>
                        <div class="w-full mx-auto rounded-lg bg-white border border-gray-200 p-5 text-gray-800 font-light mb-6">
                            <div class="w-full flex mb-4 items-center">
                                <div class="overflow-hidden rounded-full w-10 h-10 bg-gray-50 border border-gray-200">
                                    <img src="https://i.pravatar.cc/100?img=2" alt="">
                                </div>
                                <div class="flex-grow pl-3">
                                    <h6 class="font-bold text-sm uppercase text-gray-600">Stevie Tifft.</h6>
                                    <div class="flex">
                                        <img src="{{ url('img/star.png') }}" alt="">
                                        <img src="{{ url('img/star.png') }}" alt="">
                                        <img src="{{ url('img/star.png') }}" alt="">
                                        <img src="{{ url('img/star.png') }}" alt="">
                                        <img src="{{ url('img/star.png') }}" alt="">
                                    </div>
                                </div>
                                <div>
                                    <img src="{{ url('img/google.png') }}" alt="">
                                </div>
                            </div>
                            <div class="w-full">
                                <p class="text-sm leading-tight"><span class="text-lg leading-none italic font-bold text-gray-400 mr-1">"</span>Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Dolore quod necessitatibus, labore sapiente, est, dignissimos ullam error ipsam sint quam tempora vel.<span class="text-lg leading-none italic font-bold text-gray-400 ml-1">"</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="px-3 md:w-1/3">
                        <div class="w-full mx-auto rounded-lg bg-white border border-gray-200 p-5 text-gray-800 font-light mb-6">
                            <div class="w-full flex mb-4 items-center">
                                <div class="overflow-hidden rounded-full w-10 h-10 bg-gray-50 border border-gray-200">
                                    <img src="https://i.pravatar.cc/100?img=3" alt="">
                                </div>
                                <div class="flex-grow pl-3">
                                    <h6 class="font-bold text-sm uppercase text-gray-600">Tommie Ewart.</h6>
                                    <div class="flex">
                                        <img src="{{ url('img/star.png') }}" alt="">
                                        <img src="{{ url('img/star.png') }}" alt="">
                                        <img src="{{ url('img/star.png') }}" alt="">
                                        <img src="{{ url('img/star.png') }}" alt="">
                                        <img src="{{ url('img/halfstar.png') }}" alt="">
                                    </div>
                                </div>
                                <div>
                                    <img src="{{ url('img/twitter.png') }}" alt="">
                                </div>
                            </div>
                            <div class="w-full">
                                <p class="text-sm leading-tight"><span class="text-lg leading-none italic font-bold text-gray-400 mr-1">"</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, obcaecati ullam excepturi dicta error deleniti sequi.<span class="text-lg leading-none italic font-bold text-gray-400 ml-1">"</span></p>
                            </div>
                        </div>
                        <div class="w-full mx-auto rounded-lg bg-white border border-gray-200 p-5 text-gray-800 font-light mb-6">
                            <div class="w-full flex mb-4 items-center">
                                <div class="overflow-hidden rounded-full w-10 h-10 bg-gray-50 border border-gray-200">
                                    <img src="https://i.pravatar.cc/100?img=4" alt="">
                                </div>
                                <div class="flex-grow pl-3">
                                    <h6 class="font-bold text-sm uppercase text-gray-600">Charlie Howse.</h6>
                                    <div class="flex">
                                        <img src="{{ url('img/star.png') }}" alt="">
                                        <img src="{{ url('img/star.png') }}" alt="">
                                        <img src="{{ url('img/star.png') }}" alt="">
                                        <img src="{{ url('img/star.png') }}" alt="">
                                        <img src="{{ url('img/nulstar.png') }}" alt="">
                                    </div>
                                </div>
                                <div>
                                    <img src="{{ url('img/instagram.png') }}" alt="">
                                </div>
                            </div>
                            <div class="w-full">
                                <p class="text-sm leading-tight"><span class="text-lg leading-none italic font-bold text-gray-400 mr-1">"</span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto inventore voluptatum nostrum atque, corrupti, vitae esse id accusamus dignissimos neque reprehenderit natus, hic sequi itaque dicta nisi voluptatem! Culpa, iusto.<span class="text-lg leading-none italic font-bold text-gray-400 ml-1">"</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="px-3 md:w-1/3">
                        <div class="w-full mx-auto rounded-lg bg-white border border-gray-200 p-5 text-gray-800 font-light mb-6">
                            <div class="w-full flex mb-4 items-center">
                                <div class="overflow-hidden rounded-full w-10 h-10 bg-gray-50 border border-gray-200">
                                    <img src="https://i.pravatar.cc/100?img=5" alt="">
                                </div>
                                <div class="flex-grow pl-3">
                                    <h6 class="font-bold text-sm uppercase text-gray-600">Nevada Herbertson.</h6>
                                    <div class="flex">
                                        <img src="{{ url('img/star.png') }}" alt="">
                                        <img src="{{ url('img/star.png') }}" alt="">
                                        <img src="{{ url('img/star.png') }}" alt="">
                                        <img src="{{ url('img/star.png') }}" alt="">
                                        <img src="{{ url('img/star.png') }}" alt="">
                                    </div>
                                </div>
                                <div>
                                    <img src="{{ url('img/facebook.png') }}" alt="">
                                </div>
                            </div>
                            <div class="w-full">
                                <p class="text-sm leading-tight"><span class="text-lg leading-none italic font-bold text-gray-400 mr-1">"</span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, voluptatem porro obcaecati dicta, quibusdam sunt ipsum, laboriosam nostrum facere exercitationem pariatur deserunt tempora molestiae assumenda nesciunt alias eius? Illo, autem!<span class="text-lg leading-none italic font-bold text-gray-400 ml-1">"</span></p>
                            </div>
                        </div>
                        <div class="w-full mx-auto rounded-lg bg-white border border-gray-200 p-5 text-gray-800 font-light mb-6">
                            <div class="w-full flex mb-4 items-center">
                                <div class="overflow-hidden rounded-full w-10 h-10 bg-gray-50 border border-gray-200">
                                    <img src="https://i.pravatar.cc/100?img=6" alt="">
                                </div>
                                <div class="flex-grow pl-3">
                                    <h6 class="font-bold text-sm uppercase text-gray-600">Kris Stanton.</h6>
                                    <div class="flex">
                                        <img src="{{ url('img/star.png') }}" alt="">
                                        <img src="{{ url('img/star.png') }}" alt="">
                                        <img src="{{ url('img/star.png') }}" alt="">
                                        <img src="{{ url('img/star.png') }}" alt="">
                                        <img src="{{ url('img/nulstar.png') }}" alt="">
                                    </div>
                                </div>
                                <div>
                                    <img src="{{ url('img/google.png') }}" alt="">
                                </div>
                            </div>
                            <div class="w-full">
                                <p class="text-sm leading-tight"><span class="text-lg leading-none italic font-bold text-gray-400 mr-1">"</span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem iusto, explicabo, cupiditate quas totam!<span class="text-lg leading-none italic font-bold text-gray-400 ml-1">"</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

    function checkAndRedirect(event) {
        event.preventDefault();
        const input = document.getElementById('search-input').value.toLowerCase().replace(/\s+/g, '');
        const routes = {
            'plumber': '/searchPlumber',
            'electrician': '/searchElectric',
            'handyman': '/searchHandyMan',
            'deepclean': '/searchDeepclean',
            'floorpolish': '/searchFloorPolish',
            'floorclean': '/searchFloorClean',
            'wood': '/searchWood',
            'decking': '/searchDecking'
        };

        let foundRoute = false;

        for (const keyword in routes) {
            if (keyword.includes(input)) {
                window.location.href = routes[keyword];
                foundRoute = true;
                break;
            }
        }

        if (!foundRoute) {
            window.location.href = '/noSearch';
        }
    }
</script>
<script>
    // decking-submenu
    function showSubmenu() {
        document.getElementById('decking-submenu').classList.remove('hidden-submenu');
    }

    function hideSubmenu() {
        document.getElementById('decking-submenu').classList.add('hidden-submenu');
    }
    // decking-submenu
    function showSubmenu1() {
        document.getElementById('varnish-submenu').classList.remove('hidden-submenu');
    }

    function hideSubmenu1() {
        document.getElementById('varnish-submenu').classList.add('hidden-submenu');
    }
    // Vanish-submenu
    function showSubmenu2() {
        document.getElementById('fClean-submenu').classList.remove('hidden-submenu');
    }

    function hideSubmenu2() {
        document.getElementById('fClean-submenu').classList.add('hidden-submenu');
    }
    // fpolish-submenu
    function showSubmenu3() {
        document.getElementById('fpolish-submenu').classList.remove('hidden-submenu');
    }

    function hideSubmenu3() {
        document.getElementById('fpolish-submenu').classList.add('hidden-submenu');
    }
    // dClean-submenu
    function showSubmenu4() {
        document.getElementById('dClean-submenu').classList.remove('hidden-submenu');
    }

    function hideSubmenu4() {
        document.getElementById('dClean-submenu').classList.add('hidden-submenu');
    }
    // handy-submenu
    function showSubmenu5() {
        document.getElementById('handy-submenu').classList.remove('hidden-submenu');
    }

    function hideSubmenu5() {
        document.getElementById('handy-submenu').classList.add('hidden-submenu');
    }
    // handy-submenu
    function showSubmenu6() {
        document.getElementById('electric-submenu').classList.remove('hidden-submenu');
    }

    function hideSubmenu6() {
        document.getElementById('electric-submenu').classList.add('hidden-submenu');
    }
    // handy-submenu
    function showSubmenu7() {
        document.getElementById('service-submenu').classList.remove('hidden-submenu');
    }

    function hideSubmenu7() {
        document.getElementById('service-submenu').classList.add('hidden-submenu');
    }

    function showLightServiceSubmenu() {
        document.getElementById('light-service-submenu').classList.remove('hidden-submenu');
    }

    function hideLightServiceSubmenu() {
        document.getElementById('light-service-submenu').classList.add('hidden-submenu');
    }

    function showPlumbingInstallSubmenu() {
        document.getElementById('plumbing-install-submenu').classList.remove('hidden-submenu');
    }

    function hidePlumbingInstallSubmenu() {
        document.getElementById('plumbing-install-submenu').classList.add('hidden-submenu');
    }

    function showPlumbingLeakSubmenu() {
        document.getElementById('plumbing-leak-submenu').classList.remove('hidden-submenu');
    }

    function hidePlumbingLeakSubmenu() {
        document.getElementById('plumbing-leak-submenu').classList.add('hidden-submenu');
    }

    function showWaterHeaterSubmenu() {
        document.getElementById('water-heater-submenu').classList.remove('hidden-submenu');
    }

    function hideWaterHeaterSubmenu() {
        document.getElementById('water-heater-submenu').classList.add('hidden-submenu');
    }

    function showToiletBowlSubmenu() {
        document.getElementById('toilet-bowl-submenu').classList.remove('hidden-submenu');
    }

    function hideToiletBowlSubmenu() {
        document.getElementById('toilet-bowl-submenu').classList.add('hidden-submenu');
    }

    function showShowerServiceSubmenu() {
        document.getElementById('shower-service-submenu').classList.remove('hidden-submenu');
    }

    function hideShowerServiceSubmenu() {
        document.getElementById('shower-service-submenu').classList.add('hidden-submenu');
    }
</script>
