<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHH M&E SERVICES PTE LTD</title>
    <!-- Link to Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="icon" href="https://i.ibb.co/37LJZ19/Blue-Modern-Luxury-Real-Estate-Logo-removebg-preview.png" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>

    <link rel="stylesheet" href="https://cdn.tailgrids.com/tailgrids-fallback.css" />
</head>
<style>
    hr.hr-1 {
        border: 0;
        height: 1px;
        background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
    }

    #nav1 {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.dev/svgjs' width='1440' height='560' preserveAspectRatio='none' viewBox='0 0 1440 560'%3e%3cg mask='url(%26quot%3b%23SvgjsMask1000%26quot%3b)' fill='none'%3e%3cpath d='M419.6053010003687 163.3661663577806L460.0172446068905 230.62293494402098 540.6964256829901 136.3766352411181z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M832.647%2c268.098C850.153%2c267.956%2c865.16%2c258.158%2c875.221%2c243.831C887.506%2c226.338%2c900.103%2c204.959%2c890.341%2c185.942C880.079%2c165.952%2c855.111%2c160.385%2c832.647%2c160.899C811.214%2c161.39%2c789.297%2c169.489%2c779.353%2c188.482C769.932%2c206.476%2c777.563%2c227.653%2c788.861%2c244.532C798.743%2c259.295%2c814.883%2c268.242%2c832.647%2c268.098' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M924.2167904606458-69.39989263033448L802.0358488286402 36.81037954426655 1030.4270626352468 52.78104900167121z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M883.4503129161776 145.9319053284218L991.5423983336607 104.43924126467385 841.9576488524297 37.839819910938715z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M843.68 491.95 a161.12 161.12 0 1 0 322.24 0 a161.12 161.12 0 1 0 -322.24 0z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M762.4664758135211 349.5036480581027L651.3413188206356 468.6707893138538 770.5084600763867 579.7959463067393 881.6336170692722 460.6288050509883z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M167.625%2c166.733C197.209%2c166.479%2c220.899%2c144.616%2c235.025%2c118.621C248.452%2c93.912%2c249.417%2c64.92%2c236.533%2c39.924C222.396%2c12.497%2c198.456%2c-10.901%2c167.625%2c-12.144C134.897%2c-13.464%2c103.626%2c4.965%2c88.372%2c33.951C73.996%2c61.269%2c82.37%2c93.289%2c98.191%2c119.796C113.537%2c145.507%2c137.683%2c166.99%2c167.625%2c166.733' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M852.5273925112068 449.94057081914406L969.5194397284837 481.28849539187723 1000.8673643012169 364.2964481746003 883.87531708394 332.9485236018671z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M654.7218892975667 413.88063108446335L740.3231740574574 440.05157020784156 736.7789403625793 298.5641735063165z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M1039.4221823438097 184.18131092343668L918.302514958343 268.9902150521932 1003.1114190870995 390.10988243765996 1124.2310864725662 305.30097830890344z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M484.6223913901636 418.69155680193126L507.69913879861855 527.7701765678157 581.2549366066957 463.82909704376243z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M700.7129912812588 487.1877231557661L800.5494979470236 354.7002039762914 668.0619787675489 254.86369731052667 568.2254721017841 387.3512164900014z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M194.64034498289436 416.72315197868386L353.3951998313218 462.2453740732798 398.9174219259177 303.49051922485233 240.16256707749028 257.9682971302564z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M-41.93706318769925 78.44152557562158L51.65387791988694 217.19580186810322 190.40815421236857 123.60486076051701 96.81721310478237-15.149415531964607z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M616.8463150881507 25.144255406657948L602.3479771820636 143.22374194366773 720.4274637190733 157.72207984975492 734.9258016251605 39.64259331274513z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M547.23 61.34 a169.03 169.03 0 1 0 338.06 0 a169.03 169.03 0 1 0 -338.06 0z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M930.55 151.07 a130.08 130.08 0 1 0 260.16 0 a130.08 130.08 0 1 0 -260.16 0z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M177.51874183477418 176.92069846295792L321.06365536532667 177.0574998664828 260.2293139012762 67.30944270484724z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M178.89008021283894 65.4963141947672L231.25290241968779 26.038097445983716 145.88416619308816-32.777027489897804z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M127.202%2c745.821C184.825%2c747.403%2c227.356%2c696.273%2c252.821%2c644.558C275.183%2c599.144%2c271.525%2c547.155%2c246.771%2c502.999C221.39%2c457.725%2c179.103%2c420.948%2c127.202%2c420.482C74.615%2c420.01%2c28.308%2c454.259%2c3.858%2c500.819C-18.974%2c544.297%2c-9.092%2c594.109%2c12.99%2c637.972C38.226%2c688.099%2c71.102%2c744.28%2c127.202%2c745.821' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask1000'%3e%3crect width='1440' height='560' fill='white'%3e%3c/rect%3e%3c/mask%3e%3cstyle%3e %40keyframes float1 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(-10px%2c 0)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float1 %7b animation: float1 5s infinite%3b %7d %40keyframes float2 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(-5px%2c -5px)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float2 %7b animation: float2 4s infinite%3b %7d %40keyframes float3 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(0%2c -10px)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float3 %7b animation: float3 6s infinite%3b %7d %3c/style%3e%3c/defs%3e%3c/svg%3e");
    }

    .submenu {
        display: none;
    }

    .hoverable:hover .submenu {
        display: block;
    }

    .relative:hover>.hhkl {
        display: block;
    }

    .hhkl {
        position: absolute;
        top: 56%;
        left: 0;
        background-color: white;
        padding: 8px 0;
        border-radius: 4px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    /* Hide submenu by default */
    .hhkl {
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

    #timebor {
        border: 1px solid #8590f8;
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
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.dev/svgjs' width='1440' height='560' preserveAspectRatio='none' viewBox='0 0 1440 560'%3e%3cg mask='url(%26quot%3b%23SvgjsMask1000%26quot%3b)' fill='none'%3e%3cpath d='M810.1347036630418 421.6504848910055L888.2684192138595 340.7406539090441 807.3585882318982 262.6069383582264 729.2248726810805 343.51676934018775z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M644.3072411395592 141.28127900947237L757.7756805729197 182.5804134918529 799.0748150553002 69.11197405849242 685.6063756219397 27.812839576111884z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M416.372%2c499.692C434.769%2c499.785%2c452.997%2c492.812%2c462.679%2c477.169C472.858%2c460.723%2c474.63%2c439.076%2c463.81%2c423.045C453.896%2c408.358%2c434.03%2c407.08%2c416.372%2c408.563C401.642%2c409.8%2c389.191%2c417.708%2c380.982%2c430.001C371.501%2c444.199%2c363.141%2c461.481%2c370.871%2c476.703C379.117%2c492.942%2c398.159%2c499.6%2c416.372%2c499.692' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M293.2988487532544 406.02504290171237L378.67749769551637 537.7713416937648 443.10590335357733 416.5991340525801z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M263.1277886119991 548.6007948076293L354.32636880281814 530.8735865972169 245.40058040158664 457.4022146168103z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M991.4238191431543-3.327366227237686L874.8946885315877-17.6353443617761 860.5867103970493 98.89378624979051 977.1158410086159 113.20176438432892z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M1267.4646466613688 551.7852615289253L1326.5088723523097 646.2757746426306 1438.7225291773973 510.46417954936646z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M1314.6190180147405 351.488657935923L1219.2549705158951 300.78269443937376 1190.878049020494 469.1817474359163z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M1331.1073826180477 373.31065597632755L1397.420211078349 262.9475761532185 1287.05713125524 196.63474769291713 1220.7443027949387 306.9978275160262z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M363.0307307763521 173.12558445680196L272.7681890990368 288.65636937716073 388.29897401939553 378.918911054476 478.56151569671084 263.3881261341172z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M1187.844818718184 426.82393790112536L1136.5421189381648 508.9254197921167 1218.6436008291562 560.2281195721359 1269.9463006091753 478.12663768114453z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M932.233%2c175.671C952.825%2c176.139%2c972.302%2c166.494%2c983.425%2c149.159C995.548%2c130.266%2c1001.432%2c105.547%2c989.381%2c86.608C977.895%2c68.558%2c953.628%2c68.702%2c932.233%2c68.708C910.853%2c68.714%2c886.205%2c68.346%2c875.138%2c86.639C863.845%2c105.307%2c873.14%2c128.554%2c884.918%2c146.92C895.596%2c163.57%2c912.458%2c175.222%2c932.233%2c175.671' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M436.8912101982195 350.77272598110756L528.8928544474314 337.84273810433086 515.9628665706548 245.84109385511897 423.9612223214428 258.7710817318956z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M1354.0098044337633-69.5110982927585L1292.9820051231359 45.265498992583105 1468.786401719105-8.483298982131096z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M605.799%2c316.795C644.145%2c319.53%2c683.479%2c305.636%2c704.198%2c273.254C726.467%2c238.451%2c729.1%2c192.953%2c707.623%2c157.655C686.864%2c123.538%2c645.642%2c108.808%2c605.799%2c111.534C570.386%2c113.957%2c541.788%2c138.547%2c525.551%2c170.112C510.726%2c198.933%2c513.483%2c232.328%2c529.038%2c260.761C545.334%2c290.548%2c571.932%2c314.379%2c605.799%2c316.795' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M553.069%2c250.317C583.338%2c251.188%2c610.375%2c232.423%2c625.402%2c206.132C640.311%2c180.047%2c640.833%2c148.384%2c626.388%2c122.04C611.352%2c94.618%2c584.307%2c72.724%2c553.069%2c74.218C523.631%2c75.626%2c504.39%2c102.279%2c490.966%2c128.516C478.969%2c151.965%2c475.642%2c178.7%2c487.607%2c202.166C500.795%2c228.031%2c524.048%2c249.482%2c553.069%2c250.317' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M363.8%2c686.915C418.255%2c689.311%2c472.198%2c661.037%2c496.988%2c612.492C520.082%2c567.267%2c500.323%2c515.374%2c473.38%2c472.331C448.462%2c432.524%2c410.751%2c400.769%2c363.8%2c399.722C315.12%2c398.636%2c269.408%2c424.876%2c245.414%2c467.246C221.749%2c509.034%2c226.691%2c559.328%2c249.474%2c601.603C273.652%2c646.466%2c312.886%2c684.675%2c363.8%2c686.915' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M195.4141197981914 28.732110290471002L152.12575875765845 130.71309806044331 297.39510756816367 72.02047133100393z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M590.3078504730368 302.48332001087346L613.2623869345789 401.9103408994191 689.7348713615823 279.5287835493313z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M37.111678448741515 383.81688902847173L-49.089559404007304 446.44575429519927 87.9543574224584 544.4331784409587z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask1000'%3e%3crect width='1440' height='560' fill='white'%3e%3c/rect%3e%3c/mask%3e%3cstyle%3e %40keyframes float1 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(-10px%2c 0)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float1 %7b animation: float1 5s infinite%3b %7d %40keyframes float2 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(-5px%2c -5px)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float2 %7b animation: float2 4s infinite%3b %7d %40keyframes float3 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(0%2c -10px)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float3 %7b animation: float3 6s infinite%3b %7d %3c/style%3e%3c/defs%3e%3c/svg%3e");
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
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

    .mt-14 {
        margin-top: 14px;
    }

    .text-container {
        margin-top: 50px;
    }

    .card-container {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        margin-top: 50px;
    }

    .line {
        background-color: #810CA8;
        height: 2px;
        margin: 0 auto;
        width: 50px;
    }

    .footer {
        background: linear-gradient(rgb(62 71 247 / 9%), rgb(39 255 111 / 10%)), url(https://agrosoftware.in/img/product-bg.png) left bottom no-repeat;
        background-size: auto;

    }

    .shortcode_wa_button,
    .shortcode_wa_button_nt {
        background: #25d366 !important;
        border-radius: 5px !important;
        color: #ffffff !important;
        font-size: 16px !important;
        font-weight: bold !important;
        position: relative !important;
        display: inline-flex !important;
        width: auto !important;
        transition: all .3s !important;
        align-items: center !important;
        box-shadow: 0 2px 2px 0px rgba(45, 62, 79, .3) !important;
        text-transform: none !important;
        cursor: pointer;
        margin-top: 10px;
        margin-bottom: 10px;
        -webkit-box-shadow: 0 4px 7px 0 rgba(0, 0, 0, .25);
        -moz-box-shadow: 0 4px 7px 0 rgba(0, 0, 0, .25);
        box-shadow: 0 4px 7px 0 rgba(0, 0, 0, .25);
        transition: top .1s ease;
        -webkit-transition: top .1s ease;
        margin-left: 5%;
        margin-top: 4%;
        padding: 10px;
    }

    .yellow-triangle {
        clip-path: polygon(0 0, 100% 0, 38% 100%, 0% 100%);
        width: 13%;
    }

    .black-polygon {
        clip-path: polygon(11% 0, 100% 0, 100% 100%, 0% 100%);
    }


    .halfway-banner {
        top: 14%;
        width: 62%;
        transform: translateY(-50%);
        margin-left: 20%;
    }

    .ww-polygon {
        clip-path: polygon(0 0, 100% 0, 92% 150%, 0% 100%);
    }

    .purple-polygon {
        clip-path: polygon(11% 0, 100% 0, 100% 100%, 0% 100%);
    }

    #timeline {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.dev/svgjs' width='1440' height='560' preserveAspectRatio='none' viewBox='0 0 1440 560'%3e%3cg mask='url(%26quot%3b%23SvgjsMask1016%26quot%3b)' fill='none'%3e%3cuse xlink:href='%23SvgjsSymbol1023' x='0' y='0'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsSymbol1023' x='720' y='0'%3e%3c/use%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask1016'%3e%3crect width='1440' height='560' fill='white'%3e%3c/rect%3e%3c/mask%3e%3cpath d='M-1 0 a1 1 0 1 0 2 0 a1 1 0 1 0 -2 0z' id='SvgjsPath1018'%3e%3c/path%3e%3cpath d='M-3 0 a3 3 0 1 0 6 0 a3 3 0 1 0 -6 0z' id='SvgjsPath1017'%3e%3c/path%3e%3cpath d='M-5 0 a5 5 0 1 0 10 0 a5 5 0 1 0 -10 0z' id='SvgjsPath1019'%3e%3c/path%3e%3cpath d='M2 -2 L-2 2z' id='SvgjsPath1022'%3e%3c/path%3e%3cpath d='M6 -6 L-6 6z' id='SvgjsPath1021'%3e%3c/path%3e%3cpath d='M30 -30 L-30 30z' id='SvgjsPath1020'%3e%3c/path%3e%3c/defs%3e%3csymbol id='SvgjsSymbol1023'%3e%3cuse xlink:href='%23SvgjsPath1017' x='30' y='30' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1018' x='30' y='90' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='30' y='150' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1020' x='30' y='210' stroke='rgba(180%2c 198%2c 219%2c 1)' stroke-width='3'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1017' x='30' y='270' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1018' x='30' y='330' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='30' y='390' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='30' y='450' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1018' x='30' y='510' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='30' y='570' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1018' x='90' y='30' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1022' x='90' y='90' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='90' y='150' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='90' y='210' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='90' y='270' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='90' y='330' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1020' x='90' y='390' stroke='rgba(180%2c 198%2c 219%2c 1)' stroke-width='3'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='90' y='450' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='90' y='510' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='90' y='570' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1018' x='150' y='30' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='150' y='90' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='150' y='150' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='150' y='210' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1017' x='150' y='270' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1018' x='150' y='330' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1017' x='150' y='390' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1022' x='150' y='450' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='150' y='510' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='150' y='570' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='210' y='30' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1017' x='210' y='90' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='210' y='150' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1018' x='210' y='210' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='210' y='270' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='210' y='330' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='210' y='390' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='210' y='450' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='210' y='510' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='210' y='570' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1020' x='270' y='30' stroke='rgba(180%2c 198%2c 219%2c 1)' stroke-width='3'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='270' y='90' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='270' y='150' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='270' y='210' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1022' x='270' y='270' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='270' y='330' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='270' y='390' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='270' y='450' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='270' y='510' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='270' y='570' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1022' x='330' y='30' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1017' x='330' y='90' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1017' x='330' y='150' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='330' y='210' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1018' x='330' y='270' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='330' y='330' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='330' y='390' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='330' y='450' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='330' y='510' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1022' x='330' y='570' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='390' y='30' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1017' x='390' y='90' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='390' y='150' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1017' x='390' y='210' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='390' y='270' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1018' x='390' y='330' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1018' x='390' y='390' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1017' x='390' y='450' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='390' y='510' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1018' x='390' y='570' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1020' x='450' y='30' stroke='rgba(180%2c 198%2c 219%2c 1)' stroke-width='3'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='450' y='90' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1022' x='450' y='150' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='450' y='210' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1018' x='450' y='270' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='450' y='330' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1018' x='450' y='390' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='450' y='450' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='450' y='510' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1018' x='450' y='570' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1017' x='510' y='30' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1017' x='510' y='90' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1022' x='510' y='150' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='510' y='210' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1018' x='510' y='270' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='510' y='330' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1017' x='510' y='390' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1018' x='510' y='450' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1022' x='510' y='510' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='510' y='570' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1018' x='570' y='30' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='570' y='90' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='570' y='150' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='570' y='210' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1018' x='570' y='270' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='570' y='330' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1022' x='570' y='390' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='570' y='450' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1020' x='570' y='510' stroke='rgba(180%2c 198%2c 219%2c 1)' stroke-width='3'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1017' x='570' y='570' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='630' y='30' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='630' y='90' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1018' x='630' y='150' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1017' x='630' y='210' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='630' y='270' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1018' x='630' y='330' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='630' y='390' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='630' y='450' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='630' y='510' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='630' y='570' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='690' y='30' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='690' y='90' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='690' y='150' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='690' y='210' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1017' x='690' y='270' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1019' x='690' y='330' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1018' x='690' y='390' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1021' x='690' y='450' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1017' x='690' y='510' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3cuse xlink:href='%23SvgjsPath1022' x='690' y='570' stroke='rgba(180%2c 198%2c 219%2c 1)'%3e%3c/use%3e%3c/symbol%3e%3c/svg%3e");
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        position: relative;
        overflow: hidden;
    }

    #help {
        float: left;
        font-size: 44px;
        font-weight: 900;
        line-height: normal;
        margin-bottom: 67px;
        text-shadow: 3px 3px 0 rgba(0, 0, 0, .25);
        color: black;
    }

    .key_card {
        width: 216px;
        height: 246px;
        border-top: 1px solid rgba(0, 0, 0, 0.15);
        border-bottom: 1px solid rgba(0, 0, 0, 0.15);
        border-left: 1px solid rgba(0, 0, 0, 0.15);
        position: relative;
        background-image: url('data:image/svg+xml;charset=utf8,%3Csvg fill="%23ededed" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" transform="matrix(-1, 0, 0, 1, 0, 0)rotate(180)" stroke="%23ededed"%3E%3Cg id="SVGRepo_bgCarrier" stroke-width="0"%3E%3C/g%3E%3Cg id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"%3E%3C/g%3E%3Cg id="SVGRepo_iconCarrier"%3E %3Ctitle%3Ekey%3C/title%3E %3Cpath d="M27.339 8.365l0.63-1.011 1.513 0.942 1.065-1.555-2.683-1.838c-1.513 2.208-3.368 1.191-5.172-0.028l1.654-2.413-2.101-1.44-11.242 16.406-1.431-0.999c-1.527-1.065-3.411 1.592-1.864 2.671l1.454 1.015-0.21 0.307c-2.85-1.433-5.949-1.161-7.289 0.796h0c-1.518 2.215-0.209 5.752 2.903 7.885s6.858 2.059 8.376-0.156c1.345-1.962 0.49-4.949-1.886-7.088l0.196-0.286 1.238 0.864c1.42 0.991 3.319-1.656 1.864-2.671l-1.261-0.88 6.545-9.552c1.731 1.195 3.456 2.533 2.091 4.525l2.683 1.838 1.802-2.63-1.678-1.045 0.689-1.106 1.727 1.075 1.121-1.635-2.353-1.465 0.689-1.106 0.933 0.581zM6.183 28.027c-1.135 0-2.055-0.92-2.055-2.055s0.92-2.055 2.055-2.055 2.055 0.92 2.055 2.055c-0 1.135-0.92 2.055-2.055 2.055z"%3E%3C/path%3E %3C/g%3E%3C/svg%3E');
        background-size: 56% auto;
        background-position: right bottom;
        background-repeat: no-repeat;
        padding: 40px;
    }

    #header_slider #slide_item:nth-child(1) {
        background: url("https://media.istockphoto.com/id/1339613829/photo/plumber-at-work-in-a-bathroom-plumbing-repair-service-assemble-and-install-concept.jpg?s=612x612&w=0&k=20&c=lQREIzjwRM3ApTkRzTnbIA_BCRCy_ER-e51tofKsaP0=") no-repeat center center;
        background-size: cover;
    }

    #header_slider #slide_item:nth-child(2) {
        background: url("https://mrelectric.com/us/en-us/_assets/images/ceiling-fan-repair.webp") no-repeat center center;
        background-size: cover;
    }

    #header_slider #slide_item:nth-child(3) {
        background: url("https://media.istockphoto.com/id/1347150429/photo/professional-mechanic-working-on-the-engine-of-the-car-in-the-garage.jpg?s=612x612&w=0&k=20&c=5zlDGgLNNaWsp_jq_L1AsGT85wrzpdl3kVH-75S-zTU=") no-repeat center center;
        background-size: cover;
    }

    .background-svg {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.dev/svgjs' width='1440' height='250' preserveAspectRatio='none' viewBox='0 0 1440 250'%3e%3cg mask='url(%26quot%3b%23SvgjsMask1006%26quot%3b)' fill='none'%3e%3cpath d='M44 250L294 0L540 0L290 250z' fill='url(%26quot%3b%23SvgjsLinearGradient1007%26quot%3b)'%3e%3c/path%3e%3cpath d='M284.6 250L534.6 0L812.1 0L562.1 250z' fill='url(%26quot%3b%23SvgjsLinearGradient1007%26quot%3b)'%3e%3c/path%3e%3cpath d='M480.20000000000005 250L730.2 0L862.2 0L612.2 250z' fill='url(%26quot%3b%23SvgjsLinearGradient1007%26quot%3b)'%3e%3c/path%3e%3cpath d='M734.8000000000001 250L984.8000000000001 0L1043.3000000000002 0L793.3000000000001 250z' fill='url(%26quot%3b%23SvgjsLinearGradient1007%26quot%3b)'%3e%3c/path%3e%3cpath d='M1400 250L1150 0L1021 0L1271 250z' fill='url(%26quot%3b%23SvgjsLinearGradient1008%26quot%3b)'%3e%3c/path%3e%3cpath d='M1160.4 250L910.4000000000001 0L553.4000000000001 0L803.4000000000001 250z' fill='url(%26quot%3b%23SvgjsLinearGradient1008%26quot%3b)'%3e%3c/path%3e%3cpath d='M934.8 250L684.8 0L360.79999999999995 0L610.8 250z' fill='url(%26quot%3b%23SvgjsLinearGradient1008%26quot%3b)'%3e%3c/path%3e%3cpath d='M694.1999999999999 250L444.19999999999993 0L307.69999999999993 0L557.6999999999999 250z' fill='url(%26quot%3b%23SvgjsLinearGradient1008%26quot%3b)'%3e%3c/path%3e%3cpath d='M1309.6589034824483 250L1440 119.65890348244838L1440 250z' fill='url(%26quot%3b%23SvgjsLinearGradient1007%26quot%3b)'%3e%3c/path%3e%3cpath d='M0 250L130.34109651755162 250L 0 119.65890348244838z' fill='url(%26quot%3b%23SvgjsLinearGradient1008%26quot%3b)'%3e%3c/path%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask1006'%3e%3crect width='1440' height='250' fill='white'%3e%3c/rect%3e%3c/mask%3e%3clinearGradient x1='0%25' y1='100%25' x2='100%25' y2='0%25' id='SvgjsLinearGradient1007'%3e%3cstop stop-color='rgba(86%2c 120%2c 194%2c 0.2)' offset='0'%3e%3c/stop%3e%3cstop stop-opacity='0' stop-color='rgba(86%2c 120%2c 194%2c 0.2)' offset='0.66'%3e%3c/stop%3e%3c/linearGradient%3e%3clinearGradient x1='100%25' y1='100%25' x2='0%25' y2='0%25' id='SvgjsLinearGradient1008'%3e%3cstop stop-color='rgba(86%2c 120%2c 194%2c 0.2)' offset='0'%3e%3c/stop%3e%3cstop stop-opacity='0' stop-color='rgba(86%2c 120%2c 194%2c 0.2)' offset='0.66'%3e%3c/stop%3e%3c/linearGradient%3e%3c/defs%3e%3c/svg%3e");
        background-size: cover;
        background-position: center bottom;
    }

    .show {
        display: block;
    }
</style>

<body class="bg-white relative">
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
        <nav id="nav1" x-data="{ open: false }" class="flex h-auto w-auto bg-white mt-10 rounded-lg justify-between md:h-16" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
            <div class="flex w-full justify-between">
                <div :class="open ? 'hidden':'flex'" class="flex px-6 w-1/2 items-center font-semibold md:w-1/5 md:px-1 md:flex md:items-center md:justify-center" x-transition:enter="transition ease-out duration-300">
                    <a href="/" class="flex"><img class="h-14 mr-4" src="https://www.shutterstock.com/image-vector/builder-crossed-hammers-new-construction-600nw-2246936013.jpg" alt=""><span class="mt-4">All House Works</span></a>
                </div>

                <div x-show="open" x-transition:enter="transition ease-in-out duration-300" class="flex flex-col w-full h-auto md:hidden">
                    <div class="flex flex-col items-center justify-center gap-2">
                        <a href="/">Home</a>
                        <a href="/about">About Us</a>
                        <a href="/service">Service</a>
                        <a href="/price">Price</a>
                        <a href="/works">Works</a>
                        <a href="/contact">Contact</a>
                    </div>
                </div>
                <div class="hidden w-2/5 items-center justify-evenly font-semibold md:flex relative z-10">
                    <a href="/">Home</a>
                    <div class="hoverable relative">
                        <a href="/about">About Us</a>
                        <div class="submenu absolute left-0 mt-1 bg-white shadow-lg rounded-lg p-2 hidden group-hover:block z-20">
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

                <button class="text-gray-500 w-10 h-10 relative focus:outline-none bg-white md:hidden" @click="open = !open">
                    <span class="sr-only">Open main menu</span>
                    <div class="block w-5 absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        <span aria-hidden="true" class="block absolute h-0.5 w-5 bg-current transform transition duration-500 ease-in-out" :class="{'rotate-45': open,' -translate-y-1.5': !open }"></span>
                        <span aria-hidden="true" class="block absolute h-0.5 w-5 bg-current transform transition duration-500 ease-in-out" :class="{'opacity-0': open } "></span>
                        <span aria-hidden="true" class="block absolute h-0.5 w-5 bg-current transform transition duration-500 ease-in-out" :class="{'-rotate-45': open, ' translate-y-1.5': !open}"></span>
                    </div>
                </button>
            </div>
        </nav>
    </header>

    <nav class="h-auto md:h-48">
        <div class="max-w-7xl mx-auto px-4 py-2">
            <div class="mt-10 flex flex-wrap justify-center md:space-x-64 space-y-4 md:space-y-0">
                <div class="flex items-center w-full md:w-auto" style="height: auto; width: auto;">
                    <div class="p-2">
                        <img src="{{ url('img/whatsapp.png') }}" alt="">
                    </div>
                    <div class="flex flex-col justify-center">
                        <p class="text-lg font-semibold" style="font-family: 'Josefin Sans';">WHATSAPP NUMBER</p>
                        <p class="text-gray-500">+65 6575 1226</p>
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

    <section class="parallax mt-16" style="position: relative; background: url('https://countrywideplumbing.com.au/wp-content/uploads/2016/08/plumber.jpg') no-repeat center center fixed; background-size: cover; height: 300px;">
        <div class="overlay" style="background: rgba(0, 0, 0, 0.5); position: absolute; top: 0; left: 0; right: 0; bottom: 0;"></div>
        <div class="content" style="position: relative; z-index: 1; display: flex; flex-direction: column; padding-left: 1rem; padding-right: 1rem; text-align: center; gap: 1rem;">
            <h1 style="font-size: 2.5rem; color: white; font-weight: 100; margin-bottom: 1.5rem;">PLUMBER</h1>
            <p style="font-size: 1rem; color: antiquewhite;">Home / Service / Plumber</p>
        </div>
    </section>



    <!-- component -->
    <section class="relative pt-16 bg-blueGray-50">
        <div class="container mx-auto">
            <div class="flex flex-wrap items-center">
                <div class="w-10/12 md:w-6/12 lg:w-4/12 px-12 md:px-4 mr-auto ml-auto -mt-78">
                    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-lg bg-pink-500">
                        <img alt="..." src="https://t3.ftcdn.net/jpg/00/97/94/72/360_F_97947268_UhGn7YgiPSKUtZwDP9zE43JFWQETsEBD.jpg" class="w-full align-middle rounded-t-lg">
                        <blockquote class="relative p-8 mb-4">
                            <h4 class="text-xl font-bold text-white">
                                PLUMBING SERVICES
                            </h4>
                            <p class="text-md font-light mt-2 text-white">
                                Plumbing services include leak repairs, fixture installations, and maintenance for efficient water systems in homes and businesses, ensuring reliable operation and minimizing disruptions.
                            </p>
                        </blockquote>
                    </div>
                </div>

                <div class="w-full md:w-6/12 px-4">
                    <div class="flex flex-wrap">
                        <div class="w-full md:w-6/12 px-4">
                            <div class="relative flex flex-col mt-4">
                                <div class="px-4 py-5 flex-auto">
                                    <div class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-white" style="border: 1px solid #0097a7;">
                                        <img src={{ url('img/service-tools.gif') }} alt="">
                                    </div>
                                    <h6 class="text-xl mb-1 font-semibold">PLUMBING EXPERTS</h6>
                                    <p class="mb-4 text-blueGray-500">
                                        Our plumbers have over 35 years of experience in the industry, serving 1000s of residential & commercial estates.
                                    </p>
                                </div>
                            </div>
                            <div class="relative flex flex-col min-w-0">
                                <div class="px-4 py-5 flex-auto">
                                    <div class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-white" style="border: 1px solid #0097a7;">
                                        <img src={{ url('img/under-construction.gif') }} alt="">
                                    </div>
                                    <h6 class="text-xl mb-1 font-semibold">
                                        FULL 1-STOP PLUMBING SERVICES
                                    </h6>
                                    <p class="mb-4 text-blueGray-500">
                                        Our top-to-bottom plumbing service is designed to be fuss-free for you. Besides having your plumbing fixtures repaired or replace.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-6/12 px-4">
                            <div class="relative flex flex-col min-w-0 mt-4">
                                <div class="px-4 py-5 flex-auto">
                                    <div class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-white" style="border: 1px solid #0097a7;">
                                        <img src={{ url('img/tools.gif') }} alt="">
                                    </div>
                                    <h6 class="text-xl mb-1 font-semibold">RANGE OF PLUMBING SERVICES</h6>
                                    <p class="mb-4 text-blueGray-500">
                                        Our plumbers carry out a comprehensive list of plumbing works including clearing chokes, fixing leaks, water heater services.
                                    </p>
                                </div>
                            </div>
                            <div class="relative flex flex-col min-w-0">
                                <div class="px-4 py-5 flex-auto">
                                    <div class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-white" style="border: 1px solid #0097a7;">
                                        <img src={{ url('img/toolbox.gif') }} alt="">
                                    </div>
                                    <h6 class="text-xl mb-1 font-semibold">Service Assistance Now!</h6>
                                    <p class="mb-4 text-blueGray-500">
                                    <ol>
                                        <li class="flex"> <img src="{{ url('img/hastag.png') }}" alt=""> Message us on Whatsapp</li>
                                        <br>
                                        <li class="flex"> <img src="{{ url('img/hastag.png') }}" alt=""> Chat with us</li>
                                        <br>
                                        <li class="flex"> <img src="{{ url('img/hastag.png') }}" alt=""> Get Job Done!</li>
                                    </ol>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-10">
        <div class="relative flex flex-col md:flex-row items-center md:items-start mt-8">
            <span class="bg-yellow-500 yellow-triangle absolute left-0 h-20 hidden md:block"></span>
            <h3 class="bg-black text-white black-polygon h-auto md:h-20 flex items-center justify-center ml-0 md:ml-24 pl-4 pr-4 md:pr-24 text-center md:text-left w-full md:max-w-2/3" style="font-size: 18px; font-family: cursive; text-shadow: 3px 3px 0 rgb(255 255 255 / 25%);">
                <span class="inner-span">One-Stop Home Solutions For Your Convenience</span>
            </h3>
            <style>
                @media (max-width: 768px) {
                    .inner-span {
                        width: 93%;
                        margin: 0 auto;
                    }
                }
            </style>
        </div>


        <p class="text-center text-lg text-gray-600 mt-6 md:mt-12">We have all the time-saving processes so you can get every home task done with qualified professionals.</p>

        <!-- component -->
        <section class=" bg-blue-500ray-50">
            <div class="py-10  sm:py-16 block lg:py-24 relative bg-opacity-50  z-40  ">

                <div class="relative mx-auto h-full px-4 pb-20   md:pb-10 sm:max-w-xl md:max-w-full md:px-24 lg:max-w-screen-xl lg:px-8">
                    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8 relative">
                        <div class="grid grid-cols-1 gap-2 sm:grid-cols-3">
                            <a href="#" class="transition-all shadow-lg duration-1000 bg-white hover:bg-blue-500  hover:shadow-xl m-2 p-4 relative z-40 group  ">
                                <div class=" absolute  bg-blue-500 top-0 left-0 w-24 h-1 z-30  transition-all duration-200   group-hover:bg-white group-hover:w-1/2  ">
                                </div>
                                <div class="py-2 px-9 relative  ">

                                    <svg class="w-16 h-16 fill-gray-400 group-hover:fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" id="polo-tshirt">
                                        <path d="m16.962 5.841 3.582.717-.716-4.115zM12.172 2.443l-.716 4.115 3.582-.717z">
                                        </path>
                                        <path d="M28.488 7.301a5.354 5.354 0 0 0-2.743-3.305c-.112-.056-2.96-1.2-4.942-1.996l.87 4.987a.52.52 0 0 1-.488.746.535.535 0 0 1-.101-.01L16.5 6.806V12a.5.5 0 1 1-1 0V6.806l-4.583.917a.518.518 0 0 1-.613-.598L11.196 2c-1.982.796-4.828 1.94-4.94 1.996a5.36 5.36 0 0 0-2.75 3.328l-1.492 6.26c-.042.175.01.359.138.486l.608.608a5.487 5.487 0 0 0 3.907 1.618c.196 0 .375-.111.464-.287l1.072-2.145c.013.292.02.584.02.876V28.48c0 .231.153.435.375.499A27.03 27.03 0 0 0 16 30c2.508 0 5.015-.34 7.402-1.022a.52.52 0 0 0 .376-.5V14.74c0-.292.006-.584.019-.876l1.073 2.145a.519.519 0 0 0 .463.287 5.487 5.487 0 0 0 3.907-1.618l.608-.608a.518.518 0 0 0 .138-.487l-1.498-6.282zM17.03 11.5c-.276 0-.505-.224-.505-.5s.219-.5.495-.5h.01a.5.5 0 0 1 0 1zm0-2c-.276 0-.505-.224-.505-.5s.219-.5.495-.5h.01a.5.5 0 0 1 0 1z">
                                        </path>
                                    </svg>
                                    <h3 class="mt-8 text-lg font-semibold text-black group-hover:text-white ">Seamless Booking</h3>
                                    <p class="mt-4 text-base text-gray-600 group-hover:text-white  ">Message us to get instant diagnosis and quote. Book one or multiple services and we will arrange everything in the most convenient schedule for you.</p>
                                </div>
                            </a>

                            <a href="#" class="transition-all shadow-lg duration-1000 bg-white hover:bg-blue-500  hover:shadow-xl m-2 p-4 relative z-40 group  ">
                                <div class=" absolute  bg-blue-500 top-0 left-0 w-24 h-1 z-30  transition-all duration-200   group-hover:bg-white group-hover:w-1/2  ">
                                </div>
                                <div class="py-2 px-9 relative  ">
                                    <svg class="w-16 h-16 fill-gray-400 group-hover:fill-white" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 64 64" viewBox="0 0 64 64" id="furniture">
                                        <path d="M13.6 4.8v54.3c0 .4.3.8.8.8H31v-2.3H19c-.6 0-1-.5-1-1s.5-1 1-1h12V4.1H14.4C14 4.1 13.6 4.4 13.6 4.8zM29.1 38.2c0 .6-.5 1-1 1s-1-.5-1-1v-1.3c0-.6.5-1 1-1s1 .5 1 1V38.2zM29.1 25.8v6.5c0 .6-.5 1-1 1s-1-.5-1-1v-6.5c0-.6.5-1 1-1S29.1 25.3 29.1 25.8zM16.1 11c0-1.6 1.3-2.8 2.8-2.8h7.4c.6 0 1 .5 1 1 0 .6-.5 1-1 1H19c-.4 0-.8.3-.8.8v17.2c0 .6-.5 1-1 1-.6 0-1-.5-1-1V11zM49.6 4.1H33v51.5h12c.4 0 .8-.3.8-.8V9.2c0-.6.5-1 1-1s1 .5 1 1v45.5c0 1.6-1.3 2.8-2.8 2.8H33v2.3h16.6c.4 0 .8-.3.8-.8V4.8C50.4 4.4 50 4.1 49.6 4.1zM37 38.2c0 .6-.5 1-1 1s-1-.5-1-1v-1.3c0-.6.5-1 1-1s1 .5 1 1V38.2zM37 32.3c0 .6-.5 1-1 1s-1-.5-1-1v-6.5c0-.6.5-1 1-1s1 .5 1 1V32.3z">
                                        </path>
                                    </svg>
                                    <h3 class="mt-8 text-lg font-semibold text-black group-hover:text-white ">One-Stop Convenience</h3>
                                    <p class="mt-4 text-base text-gray-600 group-hover:text-white">Our services are designed to be a fuss-free experience for you. Just choose the services or product installations you need, and allow us to fulfil the rest.</p>
                                </div>
                            </a>

                            <a href="#" class="transition-all shadow-lg duration-1000 bg-white hover:bg-blue-500  hover:shadow-xl m-2 p-4 relative z-40 group  ">
                                <div class=" absolute  bg-blue-500 top-0 left-0 w-24 h-1 z-30  transition-all duration-200   group-hover:bg-white group-hover:w-1/2  ">
                                </div>
                                <div class="py-2 px-9 relative  ">
                                    <svg class="w-16 h-16 fill-gray-400 group-hover:fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" id="engine">
                                        <path d="M60,34H56a1,1,0,0,0-1,1v3H52V28a1,1,0,0,0-1-1H47.51l-4.7-6.58A1,1,0,0,0,42,20H35V17h3a1,1,0,0,0,1-1V12a1,1,0,0,0-1-1H26a1,1,0,0,0-1,1v4a1,1,0,0,0,1,1h3v3H24a1,1,0,0,0-.81.42L18.49,27H13a1,1,0,0,0-1,1V38H9V35a1,1,0,0,0-1-1H4a1,1,0,0,0-1,1V47a1,1,0,0,0,1,1H8a1,1,0,0,0,1-1V44h3v5a1,1,0,0,0,1,1H24.59l2.7,2.71A1,1,0,0,0,28,53H48a1,1,0,0,0,.71-.29l3-3A1,1,0,0,0,52,49V44h3v3a1,1,0,0,0,1,1h4a1,1,0,0,0,1-1V35A1,1,0,0,0,60,34ZM35.77,37.64l-5,6A1,1,0,0,1,30,44a1,1,0,0,1-.64-.23,1,1,0,0,1-.13-1.41L32.87,38H29a1,1,0,0,1-.77-1.64l5-6a1,1,0,0,1,1.54,1.28L31.13,36H35a1,1,0,0,1,.77,1.64Z">
                                        </path>
                                    </svg>
                                    <h3 class="mt-8 text-lg font-semibold text-black group-hover:text-white ">Strong Customer Support</h3>
                                    <p class="mt-4 text-base text-gray-600 group-hover:text-white">Our dedicated team will follow-up on your needs with open and transparent communication. We will diagnose the problem before recommending the best solution for your exact needs.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
        </section>
    </section>

    <!-- component -->

    <!-- ====== Pricing Section Start -->
    <section class="bg-white lg:pt-[120px] pb-12 lg:pb-[90px] relative z-20 overflow-hidden">
        <div class="container">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full px-4">
                    <div class="text-center mx-auto mb-[60px] lg:mb-20 max-w-[510px]">
                        <h2 class=" font-bold  text-3xl sm:text-4xl md:text-[40px] text-dark mb-4 ">
                            OUR FULL RANGE OF PLUMBING SERVICES INCLUDE:
                        </h2>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap justify-center -mx-4">
                <div class="w-full md:w-1/2 lg:w-1/3 px-4">
                    <div class="bg-white rounded-xl relative z-10 overflow-hidden border border-primary border-opacity-20 shadow-pricing py-10  px-8 sm:p-12 lg:py-10 lg:px-6 xl:p-12 mb-1">
                        <span class="text-primary font-semibold text-lg block mb-4">
                            Plumbing Installations
                        </span>
                        <hr>
                        <div class="mb-7">
                            <p class="text-base text-body-color leading-loose mb-1">
                                Toilet Bowl Installation / Replacement
                            </p>
                            <p class="text-base text-body-color leading-loose mb-1">
                                Urinal Installation / Replacement
                            </p>
                            <p class="text-base text-body-color leading-loose mb-1">
                                Water Heater Installation / Replacement
                            </p>
                            <p class="text-base text-body-color leading-loose mb-1">
                                Shower Installation / Replacement
                            </p>
                            <p class="text-base text-body-color leading-loose mb-1">
                                Tap & Faucet Installation / Replacement
                            </p>
                            <p class="text-base text-body-color leading-loose mb-1">
                                New Installation / re-piping of Water Pipes
                            </p>
                            <p class="text-base text-body-color leading-loose mb-1">
                                New Installation/ re-piping of Stainless Steel Pipe
                            </p>
                            <p class="text-base text-body-color leading-loose mb-1">
                                New Installation/ re-piping of Copper Pipe
                            </p>
                        </div>
                        <div>
                            <span class="absolute right-0 top-7 z-[-1]">
                                <svg width="77" height="172" viewBox="0 0 77 172" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="86" cy="86" r="86" fill="url(#paint0_linear)" />
                                    <defs>
                                        <linearGradient id="paint0_linear" x1="86" y1="0" x2="86" y2="172" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#3056D3" stop-opacity="0.09" />
                                            <stop offset="1" stop-color="#C4C4C4" stop-opacity="0" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </span>
                            <span class="absolute right-4 top-4 z-[-1]">
                                <svg width="41" height="89" viewBox="0 0 41 89" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="38.9138" cy="87.4849" r="1.42021" transform="rotate(180 38.9138 87.4849)" fill="#3056D3" />
                                    <circle cx="38.9138" cy="74.9871" r="1.42021" transform="rotate(180 38.9138 74.9871)" fill="#3056D3" />
                                    <circle cx="38.9138" cy="62.4892" r="1.42021" transform="rotate(180 38.9138 62.4892)" fill="#3056D3" />
                                    <circle cx="38.9138" cy="38.3457" r="1.42021" transform="rotate(180 38.9138 38.3457)" fill="#3056D3" />
                                    <circle cx="38.9138" cy="13.634" r="1.42021" transform="rotate(180 38.9138 13.634)" fill="#3056D3" />
                                    <circle cx="38.9138" cy="50.2754" r="1.42021" transform="rotate(180 38.9138 50.2754)" fill="#3056D3" />
                                    <circle cx="38.9138" cy="26.1319" r="1.42021" transform="rotate(180 38.9138 26.1319)" fill="#3056D3" />
                                    <circle cx="38.9138" cy="1.42021" r="1.42021" transform="rotate(180 38.9138 1.42021)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="87.4849" r="1.42021" transform="rotate(180 26.4157 87.4849)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="74.9871" r="1.42021" transform="rotate(180 26.4157 74.9871)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="62.4892" r="1.42021" transform="rotate(180 26.4157 62.4892)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="38.3457" r="1.42021" transform="rotate(180 26.4157 38.3457)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="13.634" r="1.42021" transform="rotate(180 26.4157 13.634)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="50.2754" r="1.42021" transform="rotate(180 26.4157 50.2754)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="26.1319" r="1.42021" transform="rotate(180 26.4157 26.1319)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="1.4202" r="1.42021" transform="rotate(180 26.4157 1.4202)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="87.4849" r="1.42021" transform="rotate(180 13.9177 87.4849)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="74.9871" r="1.42021" transform="rotate(180 13.9177 74.9871)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="62.4892" r="1.42021" transform="rotate(180 13.9177 62.4892)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="38.3457" r="1.42021" transform="rotate(180 13.9177 38.3457)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="13.634" r="1.42021" transform="rotate(180 13.9177 13.634)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="50.2754" r="1.42021" transform="rotate(180 13.9177 50.2754)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="26.1319" r="1.42021" transform="rotate(180 13.9177 26.1319)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="1.42019" r="1.42021" transform="rotate(180 13.9177 1.42019)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="87.4849" r="1.42021" transform="rotate(180 1.41963 87.4849)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="74.9871" r="1.42021" transform="rotate(180 1.41963 74.9871)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="62.4892" r="1.42021" transform="rotate(180 1.41963 62.4892)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="38.3457" r="1.42021" transform="rotate(180 1.41963 38.3457)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="13.634" r="1.42021" transform="rotate(180 1.41963 13.634)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="50.2754" r="1.42021" transform="rotate(180 1.41963 50.2754)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="26.1319" r="1.42021" transform="rotate(180 1.41963 26.1319)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="1.4202" r="1.42021" transform="rotate(180 1.41963 1.4202)" fill="#3056D3" />
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/3 px-4">
                    <div class=" bg-white rounded-xl relative z-10 overflow-hidden border border-primary border-opacity-20 shadow-pricing py-10 px-8 sm:p-12 lg:py-10 lg:px-6 xl:p-12 mb-10">
                        <span class="text-primary font-semibold text-lg block mb-4">
                            Plumbing Chokes
                        </span>
                        <hr>
                        <div class="mb-7">
                            <p class="text-base text-body-color leading-loose mb-1">
                                Clear Toilet/Bathroom Choke
                            </p>
                            <p class="text-base text-body-color leading-loose mb-1">
                                Clear Toilet Bowl Choke
                            </p>
                            <p class="text-base text-body-color leading-loose mb-1">
                                Kitchen Flood Repair
                            </p>
                            <p class="text-base text-body-color leading-loose mb-1">
                                Drain Choke Repair
                            </p>
                            <p class="text-base text-body-color leading-loose mb-1">
                                Clogged Toilet Repair / Clear Urinal Bowl Choke
                            </p>
                            <p class="text-base text-body-color leading-loose mb-1">
                                Bathroom Flood Repair
                            </p>
                            <p class="text-base text-body-color leading-loose mb-1">
                                Clear Drainage Pipe Choke
                            </p>
                            <p class="text-base text-body-color leading-loose mb-1">
                                Clear Floor Trap Choke
                            </p>
                            <p class="text-base text-body-color leading-loose mb-1">
                                Clear Bathtub Choke / Clogged Sink Repair
                            </p>
                        </div>

                        <div>
                            <span class="absolute right-0 top-7 z-[-1]">
                                <svg width="77" height="172" viewBox="0 0 77 172" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="86" cy="86" r="86" fill="url(#paint0_linear)" />
                                    <defs>
                                        <linearGradient id="paint0_linear" x1="86" y1="0" x2="86" y2="172" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#3056D3" stop-opacity="0.09" />
                                            <stop offset="1" stop-color="#C4C4C4" stop-opacity="0" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </span>
                            <span class="absolute right-4 top-4 z-[-1]">
                                <svg width="41" height="89" viewBox="0 0 41 89" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="38.9138" cy="87.4849" r="1.42021" transform="rotate(180 38.9138 87.4849)" fill="#3056D3" />
                                    <circle cx="38.9138" cy="74.9871" r="1.42021" transform="rotate(180 38.9138 74.9871)" fill="#3056D3" />
                                    <circle cx="38.9138" cy="62.4892" r="1.42021" transform="rotate(180 38.9138 62.4892)" fill="#3056D3" />
                                    <circle cx="38.9138" cy="38.3457" r="1.42021" transform="rotate(180 38.9138 38.3457)" fill="#3056D3" />
                                    <circle cx="38.9138" cy="13.634" r="1.42021" transform="rotate(180 38.9138 13.634)" fill="#3056D3" />
                                    <circle cx="38.9138" cy="50.2754" r="1.42021" transform="rotate(180 38.9138 50.2754)" fill="#3056D3" />
                                    <circle cx="38.9138" cy="26.1319" r="1.42021" transform="rotate(180 38.9138 26.1319)" fill="#3056D3" />
                                    <circle cx="38.9138" cy="1.42021" r="1.42021" transform="rotate(180 38.9138 1.42021)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="87.4849" r="1.42021" transform="rotate(180 26.4157 87.4849)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="74.9871" r="1.42021" transform="rotate(180 26.4157 74.9871)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="62.4892" r="1.42021" transform="rotate(180 26.4157 62.4892)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="38.3457" r="1.42021" transform="rotate(180 26.4157 38.3457)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="13.634" r="1.42021" transform="rotate(180 26.4157 13.634)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="50.2754" r="1.42021" transform="rotate(180 26.4157 50.2754)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="26.1319" r="1.42021" transform="rotate(180 26.4157 26.1319)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="1.4202" r="1.42021" transform="rotate(180 26.4157 1.4202)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="87.4849" r="1.42021" transform="rotate(180 13.9177 87.4849)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="74.9871" r="1.42021" transform="rotate(180 13.9177 74.9871)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="62.4892" r="1.42021" transform="rotate(180 13.9177 62.4892)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="38.3457" r="1.42021" transform="rotate(180 13.9177 38.3457)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="13.634" r="1.42021" transform="rotate(180 13.9177 13.634)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="50.2754" r="1.42021" transform="rotate(180 13.9177 50.2754)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="26.1319" r="1.42021" transform="rotate(180 13.9177 26.1319)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="1.42019" r="1.42021" transform="rotate(180 13.9177 1.42019)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="87.4849" r="1.42021" transform="rotate(180 1.41963 87.4849)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="74.9871" r="1.42021" transform="rotate(180 1.41963 74.9871)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="62.4892" r="1.42021" transform="rotate(180 1.41963 62.4892)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="38.3457" r="1.42021" transform="rotate(180 1.41963 38.3457)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="13.634" r="1.42021" transform="rotate(180 1.41963 13.634)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="50.2754" r="1.42021" transform="rotate(180 1.41963 50.2754)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="26.1319" r="1.42021" transform="rotate(180 1.41963 26.1319)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="1.4202" r="1.42021" transform="rotate(180 1.41963 1.4202)" fill="#3056D3" />
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/3 px-4">
                    <div class="  bg-white rounded-xl relative z-10 overflow-hidden  border border-primary border-opacity-20 shadow-pricing py-10  px-8  sm:p-12 lg:py-10 lg:px-6  xl:p-12 mb-10  ">
                        <span class="text-primary font-semibold text-lg block mb-4">
                            Plumbing Leaks & Pipe Repair
                        </span>
                        <hr>
                        <div class="mb-7">
                            <p class="text-base text-body-color leading-loose mb-1">
                                Leaking Pipe / Burst Pipe Repair
                            </p>
                            <p class="text-base text-body-color leading-loose mb-1">
                                Sink Pipe Repair
                            </p>
                            <p class="text-base text-body-color leading-loose mb-1">
                                Exposed Copper Pipe Leak Repair
                            </p>
                            <p class="text-base text-body-color leading-loose mb-1">
                                PPR Pipe Leak Repair
                            </p>
                            <p class="text-base text-body-color leading-loose mb-1">
                                Toilet Flush System / Toilet Flush Tank Leakage Repair
                            </p>
                            <p class="text-base text-body-color leading-loose mb-1">
                                Faucet / Tap Leak repair
                            </p>
                            <p class="text-base text-body-color leading-loose mb-1">
                                UPVC Pipe Leak Repair
                            </p>
                            <p class="text-base text-body-color leading-loose mb-1">
                                Water pressure test
                            </p>
                            <p class="text-base text-body-color leading-loose mb-1">
                                Water leakage Detection (visual inspection only)
                            </p>
                        </div>
                        <div>
                            <span class="absolute right-0 top-7 z-[-1]">
                                <svg width="77" height="172" viewBox="0 0 77 172" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="86" cy="86" r="86" fill="url(#paint0_linear)" />
                                    <defs>
                                        <linearGradient id="paint0_linear" x1="86" y1="0" x2="86" y2="172" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#3056D3" stop-opacity="0.09" />
                                            <stop offset="1" stop-color="#C4C4C4" stop-opacity="0" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </span>
                            <span class="absolute right-4 top-4 z-[-1]">
                                <svg width="41" height="89" viewBox="0 0 41 89" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="38.9138" cy="87.4849" r="1.42021" transform="rotate(180 38.9138 87.4849)" fill="#3056D3" />
                                    <circle cx="38.9138" cy="74.9871" r="1.42021" transform="rotate(180 38.9138 74.9871)" fill="#3056D3" />
                                    <circle cx="38.9138" cy="62.4892" r="1.42021" transform="rotate(180 38.9138 62.4892)" fill="#3056D3" />
                                    <circle cx="38.9138" cy="38.3457" r="1.42021" transform="rotate(180 38.9138 38.3457)" fill="#3056D3" />
                                    <circle cx="38.9138" cy="13.634" r="1.42021" transform="rotate(180 38.9138 13.634)" fill="#3056D3" />
                                    <circle cx="38.9138" cy="50.2754" r="1.42021" transform="rotate(180 38.9138 50.2754)" fill="#3056D3" />
                                    <circle cx="38.9138" cy="26.1319" r="1.42021" transform="rotate(180 38.9138 26.1319)" fill="#3056D3" />
                                    <circle cx="38.9138" cy="1.42021" r="1.42021" transform="rotate(180 38.9138 1.42021)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="87.4849" r="1.42021" transform="rotate(180 26.4157 87.4849)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="74.9871" r="1.42021" transform="rotate(180 26.4157 74.9871)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="62.4892" r="1.42021" transform="rotate(180 26.4157 62.4892)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="38.3457" r="1.42021" transform="rotate(180 26.4157 38.3457)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="13.634" r="1.42021" transform="rotate(180 26.4157 13.634)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="50.2754" r="1.42021" transform="rotate(180 26.4157 50.2754)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="26.1319" r="1.42021" transform="rotate(180 26.4157 26.1319)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="1.4202" r="1.42021" transform="rotate(180 26.4157 1.4202)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="87.4849" r="1.42021" transform="rotate(180 13.9177 87.4849)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="74.9871" r="1.42021" transform="rotate(180 13.9177 74.9871)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="62.4892" r="1.42021" transform="rotate(180 13.9177 62.4892)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="38.3457" r="1.42021" transform="rotate(180 13.9177 38.3457)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="13.634" r="1.42021" transform="rotate(180 13.9177 13.634)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="50.2754" r="1.42021" transform="rotate(180 13.9177 50.2754)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="26.1319" r="1.42021" transform="rotate(180 13.9177 26.1319)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="1.42019" r="1.42021" transform="rotate(180 13.9177 1.42019)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="87.4849" r="1.42021" transform="rotate(180 1.41963 87.4849)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="74.9871" r="1.42021" transform="rotate(180 1.41963 74.9871)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="62.4892" r="1.42021" transform="rotate(180 1.41963 62.4892)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="38.3457" r="1.42021" transform="rotate(180 1.41963 38.3457)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="13.634" r="1.42021" transform="rotate(180 1.41963 13.634)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="50.2754" r="1.42021" transform="rotate(180 1.41963 50.2754)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="26.1319" r="1.42021" transform="rotate(180 1.41963 26.1319)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="1.4202" r="1.42021" transform="rotate(180 1.41963 1.4202)" fill="#3056D3" />
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap justify-center -mx-4">
                <div class="w-full md:w-1/2 lg:w-1/3 px-4">
                    <div class="bg-white rounded-xl relative z-10 overflow-hidden border border-primary border-opacity-20 shadow-pricing py-10  px-8 sm:p-12 lg:py-10 lg:px-6 xl:p-12 mb-1">
                        <span class="text-primary font-semibold text-lg block mb-4">
                            Water Heater Product & Services
                        </span>
                        <hr>
                        <div class="mb-7">
                            <p class="text-base text-body-color leading-loose mb-1">
                                Storage Water Heater
                            </p>
                            <p class="text-base text-body-color leading-loose mb-1">
                                Instant Water Heater
                            </p>
                            <p class="text-base text-body-color leading-loose mb-1">
                                Multipoint Water Heater
                            </p>
                            <p class="text-base text-body-color leading-loose mb-1">
                                707 Water Heater
                            </p>
                            <p class="text-base text-body-color leading-loose mb-1">
                                Ariston Water Heater
                            </p>
                            <p class="text-base text-body-color leading-loose mb-1">
                                Bennington Water Heater
                            </p>
                            <p class="text-base text-body-color leading-loose mb-1">
                                Bennington Water Heater
                            </p>
                            <p class="text-base text-body-color leading-loose mb-1">
                                Everhot Water Heater
                            </p>
                            <p class="text-base text-body-color leading-loose mb-1">
                                Rheem Water Heater
                            </p>
                            <p class="text-base text-body-color leading-loose mb-1">
                                Rubine Water Heater
                            </p>
                            <p class="text-base text-body-color leading-loose mb-1">
                                Joven Water Heater
                            </p>
                        </div>
                        <div>
                            <span class="absolute right-0 top-7 z-[-1]">
                                <svg width="77" height="172" viewBox="0 0 77 172" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="86" cy="86" r="86" fill="url(#paint0_linear)" />
                                    <defs>
                                        <linearGradient id="paint0_linear" x1="86" y1="0" x2="86" y2="172" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#3056D3" stop-opacity="0.09" />
                                            <stop offset="1" stop-color="#C4C4C4" stop-opacity="0" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </span>
                            <span class="absolute right-4 top-4 z-[-1]">
                                <svg width="41" height="89" viewBox="0 0 41 89" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="38.9138" cy="87.4849" r="1.42021" transform="rotate(180 38.9138 87.4849)" fill="#3056D3" />
                                    <circle cx="38.9138" cy="74.9871" r="1.42021" transform="rotate(180 38.9138 74.9871)" fill="#3056D3" />
                                    <circle cx="38.9138" cy="62.4892" r="1.42021" transform="rotate(180 38.9138 62.4892)" fill="#3056D3" />
                                    <circle cx="38.9138" cy="38.3457" r="1.42021" transform="rotate(180 38.9138 38.3457)" fill="#3056D3" />
                                    <circle cx="38.9138" cy="13.634" r="1.42021" transform="rotate(180 38.9138 13.634)" fill="#3056D3" />
                                    <circle cx="38.9138" cy="50.2754" r="1.42021" transform="rotate(180 38.9138 50.2754)" fill="#3056D3" />
                                    <circle cx="38.9138" cy="26.1319" r="1.42021" transform="rotate(180 38.9138 26.1319)" fill="#3056D3" />
                                    <circle cx="38.9138" cy="1.42021" r="1.42021" transform="rotate(180 38.9138 1.42021)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="87.4849" r="1.42021" transform="rotate(180 26.4157 87.4849)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="74.9871" r="1.42021" transform="rotate(180 26.4157 74.9871)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="62.4892" r="1.42021" transform="rotate(180 26.4157 62.4892)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="38.3457" r="1.42021" transform="rotate(180 26.4157 38.3457)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="13.634" r="1.42021" transform="rotate(180 26.4157 13.634)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="50.2754" r="1.42021" transform="rotate(180 26.4157 50.2754)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="26.1319" r="1.42021" transform="rotate(180 26.4157 26.1319)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="1.4202" r="1.42021" transform="rotate(180 26.4157 1.4202)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="87.4849" r="1.42021" transform="rotate(180 13.9177 87.4849)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="74.9871" r="1.42021" transform="rotate(180 13.9177 74.9871)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="62.4892" r="1.42021" transform="rotate(180 13.9177 62.4892)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="38.3457" r="1.42021" transform="rotate(180 13.9177 38.3457)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="13.634" r="1.42021" transform="rotate(180 13.9177 13.634)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="50.2754" r="1.42021" transform="rotate(180 13.9177 50.2754)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="26.1319" r="1.42021" transform="rotate(180 13.9177 26.1319)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="1.42019" r="1.42021" transform="rotate(180 13.9177 1.42019)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="87.4849" r="1.42021" transform="rotate(180 1.41963 87.4849)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="74.9871" r="1.42021" transform="rotate(180 1.41963 74.9871)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="62.4892" r="1.42021" transform="rotate(180 1.41963 62.4892)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="38.3457" r="1.42021" transform="rotate(180 1.41963 38.3457)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="13.634" r="1.42021" transform="rotate(180 1.41963 13.634)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="50.2754" r="1.42021" transform="rotate(180 1.41963 50.2754)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="26.1319" r="1.42021" transform="rotate(180 1.41963 26.1319)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="1.4202" r="1.42021" transform="rotate(180 1.41963 1.4202)" fill="#3056D3" />
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/3 px-4">
                    <div class=" bg-white rounded-xl relative z-10 overflow-hidden border border-primary border-opacity-20 shadow-pricing py-10 px-8 sm:p-12 lg:py-10 lg:px-6 xl:p-12 mb-10" style="height: 99%;">
                        <span class="text-primary font-semibold text-lg block mb-4">
                            Toilet Bowl Product & Services
                        </span>
                        <hr>
                        <div class="mb-7">
                            <p class="text-base text-body-color leading-loose mb-1">
                                Floor-Mounted Toilet
                            </p>
                            <p class="text-base text-body-color leading-loose mb-1">
                                Wall-Mounted Toilet
                            </p>
                            <p class="text-base text-body-color leading-loose mb-1">
                                Baron Toilet Bowl
                            </p>
                            <p class="text-base text-body-color leading-loose mb-1">
                                Magnum Toilet Bowl
                            </p>
                            <p class="text-base text-body-color leading-loose mb-1">
                                Saniton Toilet Bowl
                            </p>
                            <p class="text-base text-body-color leading-loose mb-1">
                                TOTO Toilet Bowl
                            </p>
                            <p class="text-base text-body-color leading-loose mb-1">
                                Tiara Toilet Bowl
                            </p>
                        </div>

                        <div>
                            <span class="absolute right-0 top-7 z-[-1]">
                                <svg width="77" height="172" viewBox="0 0 77 172" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="86" cy="86" r="86" fill="url(#paint0_linear)" />
                                    <defs>
                                        <linearGradient id="paint0_linear" x1="86" y1="0" x2="86" y2="172" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#3056D3" stop-opacity="0.09" />
                                            <stop offset="1" stop-color="#C4C4C4" stop-opacity="0" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </span>
                            <span class="absolute right-4 top-4 z-[-1]">
                                <svg width="41" height="89" viewBox="0 0 41 89" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="38.9138" cy="87.4849" r="1.42021" transform="rotate(180 38.9138 87.4849)" fill="#3056D3" />
                                    <circle cx="38.9138" cy="74.9871" r="1.42021" transform="rotate(180 38.9138 74.9871)" fill="#3056D3" />
                                    <circle cx="38.9138" cy="62.4892" r="1.42021" transform="rotate(180 38.9138 62.4892)" fill="#3056D3" />
                                    <circle cx="38.9138" cy="38.3457" r="1.42021" transform="rotate(180 38.9138 38.3457)" fill="#3056D3" />
                                    <circle cx="38.9138" cy="13.634" r="1.42021" transform="rotate(180 38.9138 13.634)" fill="#3056D3" />
                                    <circle cx="38.9138" cy="50.2754" r="1.42021" transform="rotate(180 38.9138 50.2754)" fill="#3056D3" />
                                    <circle cx="38.9138" cy="26.1319" r="1.42021" transform="rotate(180 38.9138 26.1319)" fill="#3056D3" />
                                    <circle cx="38.9138" cy="1.42021" r="1.42021" transform="rotate(180 38.9138 1.42021)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="87.4849" r="1.42021" transform="rotate(180 26.4157 87.4849)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="74.9871" r="1.42021" transform="rotate(180 26.4157 74.9871)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="62.4892" r="1.42021" transform="rotate(180 26.4157 62.4892)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="38.3457" r="1.42021" transform="rotate(180 26.4157 38.3457)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="13.634" r="1.42021" transform="rotate(180 26.4157 13.634)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="50.2754" r="1.42021" transform="rotate(180 26.4157 50.2754)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="26.1319" r="1.42021" transform="rotate(180 26.4157 26.1319)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="1.4202" r="1.42021" transform="rotate(180 26.4157 1.4202)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="87.4849" r="1.42021" transform="rotate(180 13.9177 87.4849)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="74.9871" r="1.42021" transform="rotate(180 13.9177 74.9871)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="62.4892" r="1.42021" transform="rotate(180 13.9177 62.4892)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="38.3457" r="1.42021" transform="rotate(180 13.9177 38.3457)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="13.634" r="1.42021" transform="rotate(180 13.9177 13.634)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="50.2754" r="1.42021" transform="rotate(180 13.9177 50.2754)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="26.1319" r="1.42021" transform="rotate(180 13.9177 26.1319)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="1.42019" r="1.42021" transform="rotate(180 13.9177 1.42019)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="87.4849" r="1.42021" transform="rotate(180 1.41963 87.4849)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="74.9871" r="1.42021" transform="rotate(180 1.41963 74.9871)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="62.4892" r="1.42021" transform="rotate(180 1.41963 62.4892)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="38.3457" r="1.42021" transform="rotate(180 1.41963 38.3457)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="13.634" r="1.42021" transform="rotate(180 1.41963 13.634)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="50.2754" r="1.42021" transform="rotate(180 1.41963 50.2754)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="26.1319" r="1.42021" transform="rotate(180 1.41963 26.1319)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="1.4202" r="1.42021" transform="rotate(180 1.41963 1.4202)" fill="#3056D3" />
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/3 px-4">
                    <div class="bg-white rounded-xl relative z-10 overflow-hidden border border-primary border-opacity-20 shadow-pricing py-10  px-8 sm:p-12 lg:py-10 lg:px-6 xl:p-12 mb-1">
                        <span class="text-primary font-semibold text-lg block mb-4">
                            Tap Product & Services
                        </span>
                        <hr>
                        <div class="mb-7">
                            <p class="text-base text-body-color leading-loose mb-1">
                                1-Way Tap
                            </p>
                            <p class="text-base text-body-color leading-loose mb-1">
                                2-Way Tap
                            </p>
                            <p class="text-base text-body-color leading-loose mb-1">
                                Basin Tap
                            </p>
                            <p class="text-base text-body-color leading-loose mb-1">
                                Bidet Tap / Bidet Spray
                            </p>
                            <p class="text-base text-body-color leading-loose mb-1">
                                Grohe Taps
                            </p>
                            <p class="text-base text-body-color leading-loose mb-1">
                                Kitchen Sink Tap
                            </p>
                            <p class="text-base text-body-color leading-loose mb-1">
                                Kohler Taps
                            </p>
                            <p class="text-base text-body-color leading-loose mb-1">
                                Wash Basin Tap
                            </p>
                            <p class="text-base text-body-color leading-loose mb-1">
                                Kitchen Sink Tap
                            </p>
                            <p class="text-base text-body-color leading-loose mb-1">
                                Mixer Tap
                            </p>
                            <p class="text-base text-body-color leading-loose mb-1">
                                Shower Tap
                            </p>
                        </div>
                        <div>
                            <span class="absolute right-0 top-7 z-[-1]">
                                <svg width="77" height="172" viewBox="0 0 77 172" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="86" cy="86" r="86" fill="url(#paint0_linear)" />
                                    <defs>
                                        <linearGradient id="paint0_linear" x1="86" y1="0" x2="86" y2="172" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#3056D3" stop-opacity="0.09" />
                                            <stop offset="1" stop-color="#C4C4C4" stop-opacity="0" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </span>
                            <span class="absolute right-4 top-4 z-[-1]">
                                <svg width="41" height="89" viewBox="0 0 41 89" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="38.9138" cy="87.4849" r="1.42021" transform="rotate(180 38.9138 87.4849)" fill="#3056D3" />
                                    <circle cx="38.9138" cy="74.9871" r="1.42021" transform="rotate(180 38.9138 74.9871)" fill="#3056D3" />
                                    <circle cx="38.9138" cy="62.4892" r="1.42021" transform="rotate(180 38.9138 62.4892)" fill="#3056D3" />
                                    <circle cx="38.9138" cy="38.3457" r="1.42021" transform="rotate(180 38.9138 38.3457)" fill="#3056D3" />
                                    <circle cx="38.9138" cy="13.634" r="1.42021" transform="rotate(180 38.9138 13.634)" fill="#3056D3" />
                                    <circle cx="38.9138" cy="50.2754" r="1.42021" transform="rotate(180 38.9138 50.2754)" fill="#3056D3" />
                                    <circle cx="38.9138" cy="26.1319" r="1.42021" transform="rotate(180 38.9138 26.1319)" fill="#3056D3" />
                                    <circle cx="38.9138" cy="1.42021" r="1.42021" transform="rotate(180 38.9138 1.42021)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="87.4849" r="1.42021" transform="rotate(180 26.4157 87.4849)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="74.9871" r="1.42021" transform="rotate(180 26.4157 74.9871)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="62.4892" r="1.42021" transform="rotate(180 26.4157 62.4892)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="38.3457" r="1.42021" transform="rotate(180 26.4157 38.3457)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="13.634" r="1.42021" transform="rotate(180 26.4157 13.634)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="50.2754" r="1.42021" transform="rotate(180 26.4157 50.2754)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="26.1319" r="1.42021" transform="rotate(180 26.4157 26.1319)" fill="#3056D3" />
                                    <circle cx="26.4157" cy="1.4202" r="1.42021" transform="rotate(180 26.4157 1.4202)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="87.4849" r="1.42021" transform="rotate(180 13.9177 87.4849)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="74.9871" r="1.42021" transform="rotate(180 13.9177 74.9871)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="62.4892" r="1.42021" transform="rotate(180 13.9177 62.4892)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="38.3457" r="1.42021" transform="rotate(180 13.9177 38.3457)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="13.634" r="1.42021" transform="rotate(180 13.9177 13.634)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="50.2754" r="1.42021" transform="rotate(180 13.9177 50.2754)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="26.1319" r="1.42021" transform="rotate(180 13.9177 26.1319)" fill="#3056D3" />
                                    <circle cx="13.9177" cy="1.42019" r="1.42021" transform="rotate(180 13.9177 1.42019)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="87.4849" r="1.42021" transform="rotate(180 1.41963 87.4849)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="74.9871" r="1.42021" transform="rotate(180 1.41963 74.9871)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="62.4892" r="1.42021" transform="rotate(180 1.41963 62.4892)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="38.3457" r="1.42021" transform="rotate(180 1.41963 38.3457)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="13.634" r="1.42021" transform="rotate(180 1.41963 13.634)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="50.2754" r="1.42021" transform="rotate(180 1.41963 50.2754)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="26.1319" r="1.42021" transform="rotate(180 1.41963 26.1319)" fill="#3056D3" />
                                    <circle cx="1.41963" cy="1.4202" r="1.42021" transform="rotate(180 1.41963 1.4202)" fill="#3056D3" />
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Pricing Section End -->
    <hr class="hr-1">


    <!-- PLUMBING WORKS -->
    <section class="bg-white mt-4">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full px-4">
                <div class="text-center mx-auto mb-[60px] lg:mb-20 max-w-[510px]">
                    <h2 class=" font-bold  text-3xl sm:text-4xl md:text-[40px] text-dark mb-4 ">
                        OUR COMPLETED PLUMBING WORKS
                    </h2>
                </div>
            </div>
        </div>
        <div class="py-4 px-2 mx-auto max-w-screen-xl sm:py-4 lg:px-6">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-5 gap-4 h-full">
                <div class="col-span-2 sm:col-span-1 md:col-span-2 bg-gray-50 h-auto md:h-full flex flex-col">
                    <a href="" class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40 flex-grow">
                        <img src="https://t4.ftcdn.net/jpg/02/20/20/41/360_F_220204174_vfgB0Vo2i4MZ8Sv5hmtsx5IwcvrDCZox.jpg" alt="" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                        <div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
                    </a>
                </div>
                <div class="col-span-2 sm:col-span-1 md:col-span-2 bg-stone-50">
                    <a href="" class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40 mb-4">
                        <img src="https://media.istockphoto.com/id/1440019701/photo/close-up-of-plumber-repairing-sink-with-tool-in-bathroom.jpg?s=612x612&w=0&k=20&c=eOBl-NjFQxFJkcBDG3YDt1NRPDXXk-miIE9kc2opJH8=" alt="" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                        <div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
                    </a>
                    <div class="grid gap-4 grid-cols-2 sm:grid-cols-2 lg:grid-cols-2">
                        <a href="" class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40">
                            <img src="https://img.freepik.com/free-photo/plumbing-repair-service_181624-27146.jpg" alt="" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                            <div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
                        </a>
                        <a href="" class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40">
                            <img src="https://media.istockphoto.com/id/921346102/photo/plumber-fixing-sink-pipe-with-adjustable-wrench.jpg?s=612x612&w=0&k=20&c=hhDwNY35TkoBM5LIQsKkuryCk-ZbcOriD-MZhWon9Gk=" alt="" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                            <div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
                        </a>
                    </div>
                </div>
                <div class="col-span-2 sm:col-span-1 md:col-span-1 bg-sky-50 h-auto md:h-full flex flex-col">
                    <a href="" class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40 flex-grow">
                        <img src="https://cdn.pixabay.com/photo/2013/12/13/21/13/plumber-228010_640.jpg" alt="" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                        <div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- PLUMBING WORKS -->


    <!-- PLUMBING INSTALLATION -->
    <!-- component -->
    <section class="text-gray-400 bg-gray-800 body-font mt-10">
        <div class="container px-5 py-24 mx-auto">
            <h1 class="sm:text-3xl text-2xl font-medium title-font text-center text-white mb-20">
                THE MOST TRUSTED SERVICE
                <br class="hidden sm:block">PROVIDER FOR PLUMBING SERVICES
            </h1>
            <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6">
                <div class="p-4 md:w-1/2 flex">
                    <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-gray-800 text-indigo-400 mb-4 flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                            <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                        </svg>
                    </div>
                    <div class="flex-grow pl-6">
                        <h2 class="text-white text-lg title-font font-medium mb-2">EXPERIENCED</h2>
                        <p class="leading-relaxed text-base">AllHouseWorks has helped connect thousands of happy customers to home service professionals. When troubleshooting your home repair or maintenance issues, both our customer service agents and technicians are knowledgeable in answering your queries. Feel free to message us about the products or services you are looking for, and we will respond to you promptly.</p>
                    </div>
                </div>
                <div class="p-4 md:w-1/2 flex">
                    <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-gray-800 text-indigo-400 mb-4 flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                            <circle cx="6" cy="6" r="3"></circle>
                            <circle cx="6" cy="18" r="3"></circle>
                            <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                        </svg>
                    </div>
                    <div class="flex-grow pl-6">
                        <h2 class="text-white text-lg title-font font-medium mb-2">HONEST & TRANSPARENT PRICES</h2>
                        <p class="leading-relaxed text-base">We are transparent about our prices and will only carry out the works upon your approval of the final quotation. Be assured that we will only recommend services or products you would need, and nothing more than that!</p>
                    </div>
                </div>
                <div class="p-4 md:w-1/2 flex">
                    <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-gray-800 text-indigo-400 mb-4 flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                            <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </div>
                    <div class="flex-grow pl-6">
                        <h2 class="text-white text-lg title-font font-medium mb-2">FLEXIBILITY</h2>
                        <p class="leading-relaxed text-base">Booking just one or multiple home services is easy on the AllHouseWorks platform. Our professional service providers will be arranged to fit a date and time that is convenient for you.</p>
                    </div>
                </div>
                <div class="p-4 md:w-1/2 flex">
                    <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-gray-800 text-indigo-400 mb-4 flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                            <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </div>
                    <div class="flex-grow pl-6">
                        <h2 class="text-white text-lg title-font font-medium mb-2">RELIABILITY</h2>
                        <p class="leading-relaxed text-base">AllHouseWorks is home to a curated list of certified and reliable professionals from reputable home repair companies in Singapore. We also co-operate with accredited and legitimate partners to value-add their services to give you a holistic solution to your home services needs.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- PLUMBING INSTALLATION -->


    <!-- FAQ -->
    <div class="py-24 px-8 max-w-5xl mx-auto flex flex-col md:flex-row gap-12 mt-10">
        <div class="flex flex-col text-left basis-1/2">
            <p class="inline-block font-semibold text-primary mb-4">Insurance FAQ</p>
            <p class="sm:text-4xl text-3xl font-extrabold text-base-content">Frequently Asked Questions</p>
        </div>
        <ul class="basis-1/2">
            <li>
                <button class="relative flex gap-2 items-center w-full py-5 text-base font-semibold text-left border-t md:text-lg border-base-content/10" aria-expanded="false" onclick="toggleFAQ(this)">
                    <span class="flex-1 text-base-content">What to Know Before Engaging an Plumbing Service Company</span>
                    <svg class="flex-shrink-0 w-4 h-4 ml-auto fill-current" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                        <rect y="7" width="16" height="2" rx="1" class="transform origin-center transition duration-200 ease-out false"></rect>
                        <rect y="7" width="16" height="2" rx="1" class="transform origin-center rotate-90 transition duration-200 ease-out false"></rect>
                    </svg>
                </button>
                <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden" style="transition: max-height 0.3s ease-in-out 0s;">
                    <div class="pb-5 leading-relaxed">
                        <div class="space-y-2 leading-relaxed">Whether it comes to broken pipes, leaky faucets, or clogged drains, it is best to call up a professional Singapore plumber who has the license, skills, tools and expertise to deal with the task. Here are some things to consider before looking to engage a plumber.
                            License / Accreditations
                            A PUB license is important for big plumbing projects, especially for HDB or commerciarenovations that require hacking into the plumbing systems. However, most plumbers should bBCA-licensed for common domestic plumbing works like solving water leaks and water pipe works.
                            Experience
                            Looking for an experienced plumber is key if you do not want the plumbing issue they are fixinto come back again. A plumber who is confident in their skills is equivalent to how many yearthey have been working in the industry.
                            Look at Their Plumbing Services Reviews
                            If the company has been in business for at least 5 years and consistently receives gooreviews, you can expect quality work.
                            Warranty
                            Look at Singapore plumber services that offers plumbing works with workmanship or servicwarranty, and check if the warranty is extended to the plumbing products as well.
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <button class="relative flex gap-2 items-center w-full py-5 text-base font-semibold text-left border-t md:text-lg border-base-content/10" aria-expanded="false" onclick="toggleFAQ(this)">
                    <span class="flex-1 text-base-content">Ways to Save Money On Plumbing</span>
                    <svg class="flex-shrink-0 w-4 h-4 ml-auto fill-current" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                        <rect y="7" width="16" height="2" rx="1" class="transform origin-center transition duration-200 ease-out false"></rect>
                        <rect y="7" width="16" height="2" rx="1" class="transform origin-center rotate-90 transition duration-200 ease-out false"></rect>
                    </svg>
                </button>
                <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden" style="transition: max-height 0.3s ease-in-out 0s;">
                    <div class="pb-5 leading-relaxed">
                        <div class="space-y-2 leading-relaxed">Plumbing emergencies do happen, and calling a plumber will be necessary. But you can certainly save money on plumbing works by preventing them from disrepair in the first place. Just follow these easy steps:

                            Prevention and maintenance
                            Prevent a small sign of plumbing issue from getting bigger, such as a leaky faucet or build-up of blockage in your drains.

                            Replace rather than Repair
                            If regular repairs become a routine in your home, consider replacing the parts that need replacement. A product replacement tends to be cheaper in the long run than constant repairs.

                            Compare prices
                            Plumbing is a competitive business, and many different companies offer different plumbing services at differing prices. Make sure you do your own research in order to compare prices and find the right plumber who can do the job well for you.</div>
                    </div>
                </div>
            </li>
            <li>
                <button class="relative flex gap-2 items-center w-full py-5 text-base font-semibold text-left border-t md:text-lg border-base-content/10" aria-expanded="false" onclick="toggleFAQ(this)">
                    <span class="flex-1 text-base-content">How Much Are Plumbing Services</span>
                    <svg class="flex-shrink-0 w-4 h-4 ml-auto fill-current" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                        <rect y="7" width="16" height="2" rx="1" class="transform origin-center transition duration-200 ease-out false"></rect>
                        <rect y="7" width="16" height="2" rx="1" class="transform origin-center rotate-90 transition duration-200 ease-out false"></rect>
                    </svg>
                </button>
                <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden" style="transition: max-height 0.3s ease-in-out 0s;">
                    <div class="pb-5 leading-relaxed">
                        <div class="space-y-2 leading-relaxed">Plumbing Services start from $90 per job. See here for full list of our plumbing services prices.

                            Our Plumbing Services include:

                            Plumbing Chokes Services
                            Plumbing Installation Services
                            Plumbing Leaks Services
                            Water Heater Services
                            Toilet Bowl Services
                            Toilet Flush System Services
                            Shower Services</div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <!-- FAQ -->

    <!-- Revew -->
    <section id="testimonies" class="py-20 bg-gray-900">
        <div class="max-w-6xl mx-8 md:mx-10 lg:mx-20 xl:mx-auto">
            <div class="transition duration-500 ease-in-out transform scale-100 translate-x-0 translate-y-0 opacity-100">
                <div class="mb-12 space-y-5 md:mb-16 md:text-center">
                    <h1 class="mb-5 text-3xl font-semibold text-white md:text-center md:text-5xl">
                        CUSTOMER REVIEWS absolute
                    </h1>
                    <p class="text-xl text-gray-100 md:text-center md:text-2xl">
                        OUR PLUMBING SERVICES
                    </p>
                </div>
            </div>


            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 lg:gap-8">


                <ul class="space-y-8">
                    <li class="text-sm leading-6">
                        <div class="relative group">
                            <div class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                            </div><a href="https://twitter.com/kanyewest" class="cursor-pointer">
                                <div class="relative p-6 space-y-6 leading-none rounded-lg bg-slate-800 ring-1 ring-gray-900/5">
                                    <div class="flex items-center space-x-4"><img src="https://pbs.twimg.com/profile_images/1276461929934942210/cqNhNk6v_400x400.jpg" class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Kanye West">
                                        <div>
                                            <h3 class="text-lg font-semibold text-white">Kanye West</h3>
                                            <p class="text-gray-500 text-md">Rapper &amp; Entrepreneur</p>
                                        </div>
                                    </div>
                                    <p class="leading-normal text-gray-300 text-md">Find God.</p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="text-sm leading-6">
                        <div class="relative group">
                            <div class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                            </div><a href="https://twitter.com/tim_cook" class="cursor-pointer">
                                <div class="relative p-6 space-y-6 leading-none rounded-lg bg-slate-800 ring-1 ring-gray-900/5">
                                    <div class="flex items-center space-x-4"><img src="https://pbs.twimg.com/profile_images/1535420431766671360/Pwq-1eJc_400x400.jpg" class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Tim Cook">
                                        <div>
                                            <h3 class="text-lg font-semibold text-white">Tim Cook</h3>
                                            <p class="text-gray-500 text-md">CEO of Apple</p>
                                        </div>
                                    </div>
                                    <p class="leading-normal text-gray-300 text-md">Diam quis enim lobortis scelerisque
                                        fermentum dui faucibus in ornare. Donec pretium vulputate sapien nec sagittis
                                        aliquam malesuada bibendum.</p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="text-sm leading-6">
                        <div class="relative group">
                            <div class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                            </div><a href="https://twitter.com/kanyewest" class="cursor-pointer">
                                <div class="relative p-6 space-y-6 leading-none rounded-lg bg-slate-800 ring-1 ring-gray-900/5">
                                    <div class="flex items-center space-x-4"><img src="https://pbs.twimg.com/profile_images/1276461929934942210/cqNhNk6v_400x400.jpg" class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Kanye West">
                                        <div>
                                            <h3 class="text-lg font-semibold text-white">Kanye West</h3>
                                            <p class="text-gray-500 text-md">Rapper &amp; Entrepreneur</p>
                                        </div>
                                    </div>
                                    <p class="leading-normal text-gray-300 text-md">Find God.</p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="text-sm leading-6">
                        <div class="relative group">
                            <div class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                            </div><a href="https://twitter.com/tim_cook" class="cursor-pointer">
                                <div class="relative p-6 space-y-6 leading-none rounded-lg bg-slate-800 ring-1 ring-gray-900/5">
                                    <div class="flex items-center space-x-4"><img src="https://pbs.twimg.com/profile_images/1535420431766671360/Pwq-1eJc_400x400.jpg" class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Tim Cook">
                                        <div>
                                            <h3 class="text-lg font-semibold text-white">Tim Cook</h3>
                                            <p class="text-gray-500 text-md">CEO of Apple</p>
                                        </div>
                                    </div>
                                    <p class="leading-normal text-gray-300 text-md">Diam quis enim lobortis scelerisque
                                        fermentum dui faucibus in ornare. Donec pretium vulputate sapien nec sagittis
                                        aliquam malesuada bibendum.</p>
                                </div>
                            </a>
                        </div>
                    </li>
                </ul>


                <ul class="hidden space-y-8 sm:block">
                    <li class="text-sm leading-6">
                        <div class="relative group">
                            <div class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                            </div><a href="https://twitter.com/paraga" class="cursor-pointer">
                                <div class="relative p-6 space-y-6 leading-none rounded-lg bg-slate-800 ring-1 ring-gray-900/5">
                                    <div class="flex items-center space-x-4"><img src="https://pbs.twimg.com/profile_images/1375285353146327052/y6jeByyD_400x400.jpg" class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Parag Agrawal">
                                        <div>
                                            <h3 class="text-lg font-semibold text-white">Parag Agrawal</h3>
                                            <p class="text-gray-500 text-md">CEO of Twitter</p>
                                        </div>
                                    </div>
                                    <p class="leading-normal text-gray-300 text-md">Enim neque volutpat ac tincidunt vitae
                                        semper. Mattis aliquam faucibus purus in massa tempor. Neque vitae tempus quam
                                        pellentesque nec. Turpis cursus in hac habitasse platea dictumst.</p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="text-sm leading-6">
                        <div class="relative group">
                            <div class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                            </div><a href="https://twitter.com/tim_cook" class="cursor-pointer">
                                <div class="relative p-6 space-y-6 leading-none rounded-lg bg-slate-800 ring-1 ring-gray-900/5">
                                    <div class="flex items-center space-x-4"><img src="https://pbs.twimg.com/profile_images/1535420431766671360/Pwq-1eJc_400x400.jpg" class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Tim Cook">
                                        <div>
                                            <h3 class="text-lg font-semibold text-white">Tim Cook</h3>
                                            <p class="text-gray-500 text-md">CEO of Apple</p>
                                        </div>
                                    </div>
                                    <p class="leading-normal text-gray-300 text-md">Diam quis enim lobortis scelerisque
                                        fermentum dui faucibus in ornare. Donec pretium vulputate sapien nec sagittis
                                        aliquam malesuada bibendum.</p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="text-sm leading-6">
                        <div class="relative group">
                            <div class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                            </div><a href="https://twitter.com/paraga" class="cursor-pointer">
                                <div class="relative p-6 space-y-6 leading-none rounded-lg bg-slate-800 ring-1 ring-gray-900/5">
                                    <div class="flex items-center space-x-4"><img src="https://pbs.twimg.com/profile_images/1375285353146327052/y6jeByyD_400x400.jpg" class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Parag Agrawal">
                                        <div>
                                            <h3 class="text-lg font-semibold text-white">Parag Agrawal</h3>
                                            <p class="text-gray-500 text-md">CEO of Twitter</p>
                                        </div>
                                    </div>
                                    <p class="leading-normal text-gray-300 text-md">Enim neque volutpat ac tincidunt vitae
                                        semper. Mattis aliquam faucibus purus in massa tempor. Neque vitae tempus quam
                                        pellentesque nec. Turpis cursus in hac habitasse platea dictumst.</p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="text-sm leading-6">
                        <div class="relative group">
                            <div class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                            </div><a href="https://twitter.com/tim_cook" class="cursor-pointer">
                                <div class="relative p-6 space-y-6 leading-none rounded-lg bg-slate-800 ring-1 ring-gray-900/5">
                                    <div class="flex items-center space-x-4"><img src="https://pbs.twimg.com/profile_images/1535420431766671360/Pwq-1eJc_400x400.jpg" class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Tim Cook">
                                        <div>
                                            <h3 class="text-lg font-semibold text-white">Tim Cook</h3>
                                            <p class="text-gray-500 text-md">CEO of Apple</p>
                                        </div>
                                    </div>
                                    <p class="leading-normal text-gray-300 text-md">Diam quis enim lobortis scelerisque
                                        fermentum dui faucibus in ornare. Donec pretium vulputate sapien nec sagittis
                                        aliquam malesuada bibendum.</p>
                                </div>
                            </a>
                        </div>
                    </li>
                </ul>


                <ul class="hidden space-y-8 lg:block">
                    <li class="text-sm leading-6">
                        <div class="relative group">
                            <div class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                            </div><a href="https://twitter.com/satyanadella" class="cursor-pointer">
                                <div class="relative p-6 space-y-6 leading-none rounded-lg bg-slate-800 ring-1 ring-gray-900/5">
                                    <div class="flex items-center space-x-4"><img src="https://pbs.twimg.com/profile_images/1221837516816306177/_Ld4un5A_400x400.jpg" class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Satya Nadella">
                                        <div>
                                            <h3 class="text-lg font-semibold text-white">Satya Nadella</h3>
                                            <p class="text-gray-500 text-md">CEO of Microsoft</p>
                                        </div>
                                    </div>
                                    <p class="leading-normal text-gray-300 text-md">Tortor dignissim convallis aenean et
                                        tortor at. At ultrices mi tempus imperdiet nulla malesuada. Id cursus metus aliquam
                                        eleifend mi. Quis ipsum suspendisse ultrices gravida dictum fusce ut.</p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="text-sm leading-6">
                        <div class="relative group">
                            <div class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                            </div><a href="https://twitter.com/dan_schulman" class="cursor-pointer">
                                <div class="relative p-6 space-y-6 leading-none rounded-lg bg-slate-800 ring-1 ring-gray-900/5">
                                    <div class="flex items-center space-x-4"><img src="https://pbs.twimg.com/profile_images/516916920482672641/3jCeLgFb_400x400.jpeg" class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Dan Schulman">
                                        <div>
                                            <h3 class="text-lg font-semibold text-white">Dan Schulman</h3>
                                            <p class="text-gray-500 text-md">CEO of PayPal</p>
                                        </div>
                                    </div>
                                    <p class="leading-normal text-gray-300 text-md">Quam pellentesque nec nam aliquam sem
                                        et tortor consequat id. Enim sit amet venenatis urna cursus.</p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="text-sm leading-6">
                        <div class="relative group">
                            <div class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                            </div><a href="https://twitter.com/satyanadella" class="cursor-pointer">
                                <div class="relative p-6 space-y-6 leading-none rounded-lg bg-slate-800 ring-1 ring-gray-900/5">
                                    <div class="flex items-center space-x-4"><img src="https://pbs.twimg.com/profile_images/1221837516816306177/_Ld4un5A_400x400.jpg" class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Satya Nadella">
                                        <div>
                                            <h3 class="text-lg font-semibold text-white">Satya Nadella</h3>
                                            <p class="text-gray-500 text-md">CEO of Microsoft</p>
                                        </div>
                                    </div>
                                    <p class="leading-normal text-gray-300 text-md">Tortor dignissim convallis aenean et
                                        tortor at. At ultrices mi tempus imperdiet nulla malesuada. Id cursus metus aliquam
                                        eleifend mi. Quis ipsum suspendisse ultrices gravida dictum fusce ut.</p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="text-sm leading-6">
                        <div class="relative group">
                            <div class="absolute transition rounded-lg opacity-25 -inset-1 bg-gradient-to-r from-purple-600 to-pink-600 blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                            </div><a href="https://twitter.com/dan_schulman" class="cursor-pointer">
                                <div class="relative p-6 space-y-6 leading-none rounded-lg bg-slate-800 ring-1 ring-gray-900/5">
                                    <div class="flex items-center space-x-4"><img src="https://pbs.twimg.com/profile_images/516916920482672641/3jCeLgFb_400x400.jpeg" class="w-12 h-12 bg-center bg-cover border rounded-full" alt="Dan Schulman">
                                        <div>
                                            <h3 class="text-lg font-semibold text-white">Dan Schulman</h3>
                                            <p class="text-gray-500 text-md">CEO of PayPal</p>
                                        </div>
                                    </div>
                                    <p class="leading-normal text-gray-300 text-md">Quam pellentesque nec nam aliquam sem
                                        et tortor consequat id. Enim sit amet venenatis urna cursus.</p>
                                </div>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Revew -->
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
    let i = 1;

    function nextSlide() {
        if (i == 3) {
            let activeSlide = document.querySelector('.slide.translate-x-0');
            activeSlide.classList.remove('translate-x-0');
            activeSlide.classList.add('translate-x-full');

            let nextSlide = activeSlide.previousElementSibling.previousElementSibling;
            nextSlide.classList.remove('translate-x-full');
            nextSlide.classList.add('translate-x-0');

            i = 1;
        } else {
            i++;

            let activeSlide = document.querySelector('.slide.translate-x-0');
            activeSlide.classList.remove('translate-x-0');
            activeSlide.classList.add('translate-x-full');

            let nextSlide = activeSlide.nextElementSibling;
            nextSlide.classList.remove('translate-x-full');
            nextSlide.classList.add('translate-x-0');
        }

    }

    function previousSlide() {
        if (i == 1) {
            let activeSlide = document.querySelector('.slide.translate-x-0');
            activeSlide.classList.remove('translate-x-0');
            activeSlide.classList.add('translate-x-full');

            let previousSlide = activeSlide.nextElementSibling.nextElementSibling;
            previousSlide.classList.remove('translate-x-full');
            previousSlide.classList.add('translate-x-0');

            i = 3;
        } else {
            i--;

            let activeSlide = document.querySelector('.slide.translate-x-0');
            activeSlide.classList.remove('translate-x-0');
            activeSlide.classList.add('translate-x-full');

            let previousSlide = activeSlide.previousElementSibling;
            previousSlide.classList.remove('translate-x-full');
            previousSlide.classList.add('translate-x-0');
        }
    }
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
            navbar.style.top = "-656px";

            navbar.style.left = "50%";
            navbar.style.transform = "translateX(-50%)";
        }
    };

    function toggleFAQ(button) {
        const content = button.nextElementSibling;
        button.setAttribute("aria-expanded", button.getAttribute("aria-expanded") === "false" ? "true" : "false");
        content.style.maxHeight = button.getAttribute("aria-expanded") === "true" ? content.scrollHeight + "px" : "0";
    }
</script>
