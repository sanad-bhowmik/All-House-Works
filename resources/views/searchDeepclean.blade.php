<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All House Works</title>
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
        height: .0625rem;
        background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
    }

    #nav1 {
        background-color: #fbde6e;
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
        padding: .5rem 0;
        border-radius: .25rem;
        box-shadow: 0 .25rem .375rem rgba(0, 0, 0, 0.1);
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
        min-height: 16px;
        overflow-x: hidden;
        font-family: "Merriweather", serif;
        font-size: 1.125rem;
        color: black;
    }

    #timebor {
        border: .0625rem solid #8590f8;
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
        gap: 1.25rem;
        justify-content: space-around;
        min-width: 100%;
        animation: marquee 12s linear infinite;

    }

    .main-container__marquee-item {
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 1.125rem;
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
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.dev/svgjs' width='1440' height='560' preserveAspectRatio='none' viewBox='0 0 1440 560'%3e%3cg mask='url(%26quot%3b%23SvgjsMask1000%26quot%3b)' fill='none'%3e%3cpath d='M810.1347036630418 421.6504848910055L888.2684192138595 340.7406539090441 807.3585882318982 262.6069383582264 729.2248726810805 343.51676934018775z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M644.3072411395592 141.28127900947237L757.7756805729197 182.5804134918529 799.0748150553002 69.11197405849242 685.6063756219397 27.812839576111884z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M416.372%2c499.692C434.769%2c499.785%2c452.997%2c492.812%2c462.679%2c477.169C472.858%2c460.723%2c474.63%2c439.076%2c463.81%2c423.045C453.896%2c408.358%2c434.03%2c407.08%2c416.372%2c408.563C401.642%2c409.8%2c389.191%2c417.708%2c380.982%2c430.001C371.501%2c444.199%2c363.141%2c461.481%2c370.871%2c476.703C379.117%2c492.942%2c398.159%2c499.6%2c416.372%2c499.692' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M293.2988487532544 406.02504290171237L378.67749769551637 537.7713416937648 443.10590335357733 416.5991340525801z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M263.1277886119991 548.6007948076293L354.32636880281814 530.8735865972169 245.40058040158664 457.4022146168103z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M991.4238191431543-3.327366227237686L874.8946885315877-17.6353443617761 860.5867103970493 98.89378624979051 977.1158410086159 113.20176438432892z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M1267.4646466613688 551.7852615289253L1326.5088723523097 646.2757746426306 1438.7225291773973 510.46417954936646z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M1314.6190180147405 351.488657935923L1219.2549705158951 300.78269443937376 1190.878049020494 469.1817474359163z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M1331.1073826180477 373.31065597632755L1397.420211078349 262.9475761532185 1287.05713125524 196.63474769291713 1220.7443027949387 306.9978275160262z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M363.0307307763521 173.12558445680196L272.7681890990368 288.65636937716073 388.29897401939553 378.918911054476 478.56151569671084 263.3881261341172z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M1187.844818718184 426.82393790112536L1136.5421189381648 508.9254197921167 1218.6436008291562 560.2281195721359 1269.9463006091753 478.12663768114453z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float3'%3e%3c/path%3e%3cpath d='M932.233%2c175.671C952.825%2c176.139%2c972.302%2c166.494%2c983.425%2c149.159C995.548%2c130.266%2c1001.432%2c105.547%2c989.381%2c86.608C977.895%2c68.558%2c953.628%2c68.702%2c932.233%2c68.708C910.853%2c68.714%2c886.205%2c68.346%2c875.138%2c86.639C863.845%2c105.307%2c873.14%2c128.554%2c884.918%2c146.92C895.596%2c163.57%2c912.458%2c175.222%2c932.233%2c175.671' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M436.8912101982195 350.77272598110756L528.8928544474314 337.84273810433086 515.9628665706548 245.84109385511897 423.9612223214428 258.7710817318956z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M1354.0098044337633-69.5110982927585L1292.9820051231359 45.265498992583105 1468.786401719105-8.483298982131096z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M605.799%2c316.795C644.145%2c319.53%2c683.479%2c305.636%2c704.198%2c273.254C726.467%2c238.451%2c729.1%2c192.953%2c707.623%2c157.655C686.864%2c123.538%2c645.642%2c108.808%2c605.799%2c111.534C570.386%2c113.957%2c541.788%2c138.547%2c525.551%2c170.112C510.726%2c198.933%2c513.483%2c232.328%2c529.038%2c260.761C545.334%2c290.548%2c571.932%2c314.379%2c605.799%2c316.795' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M553.069%2c250.317C583.338%2c251.188%2c610.375%2c232.423%2c625.402%2c206.132C640.311%2c180.047%2c640.833%2c148.384%2c626.388%2c122.04C611.352%2c94.618%2c584.307%2c72.724%2c553.069%2c74.218C523.631%2c75.626%2c504.39%2c102.279%2c490.966%2c128.516C478.969%2c151.965%2c475.642%2c178.7%2c487.607%2c202.166C500.795%2c228.031%2c524.048%2c249.482%2c553.069%2c250.317' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M363.8%2c686.915C418.255%2c689.311%2c472.198%2c661.037%2c496.988%2c612.492C520.082%2c567.267%2c500.323%2c515.374%2c473.38%2c472.331C448.462%2c432.524%2c410.751%2c400.769%2c363.8%2c399.722C315.12%2c398.636%2c269.408%2c424.876%2c245.414%2c467.246C221.749%2c509.034%2c226.691%2c559.328%2c249.474%2c601.603C273.652%2c646.466%2c312.886%2c684.675%2c363.8%2c686.915' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M195.4141197981914 28.732110290471002L152.12575875765845 130.71309806044331 297.39510756816367 72.02047133100393z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float2'%3e%3c/path%3e%3cpath d='M590.3078504730368 302.48332001087346L613.2623869345789 401.9103408994191 689.7348713615823 279.5287835493313z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3cpath d='M37.111678448741515 383.81688902847173L-49.089559404007304 446.44575429519927 87.9543574224584 544.4331784409587z' fill='rgba(220%2c 232%2c 246%2c 0.4)' class='triangle-float1'%3e%3c/path%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask1000'%3e%3crect width='1440' height='560' fill='white'%3e%3c/rect%3e%3c/mask%3e%3cstyle%3e %40keyframes float1 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(-0.625rem%2c 0)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float1 %7b animation: float1 5s infinite%3b %7d %40keyframes float2 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(-0.3125rem%2c -0.3125rem)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float2 %7b animation: float2 4s infinite%3b %7d %40keyframes float3 %7b 0%25%7btransform: translate(0%2c 0)%7d 50%25%7btransform: translate(0%2c -0.625rem)%7d 100%25%7btransform: translate(0%2c 0)%7d %7d .triangle-float3 %7b animation: float3 6s infinite%3b %7d %3c/style%3e%3c/defs%3e%3c/svg%3e");
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
        padding-top: 6.25rem;
    }

    .mt-14 {
        margin-top: .875rem;
    }

    .text-container {
        margin-top: 3.125rem;
    }

    .card-container {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        margin-top: 3.125rem;
    }

    .line {
        background-color: #810CA8;
        height: .125rem;
        margin: 0 auto;
        width: 3.125rem;
    }

    .footer {
        background: linear-gradient(rgb(62 71 247 / 9%), rgb(39 255 111 / 10%)), url(https://agrosoftware.in/img/product-bg.png) left bottom no-repeat;
        background-size: auto;

    }

    .shortcode_wa_button,
    .shortcode_wa_button_nt {
        background: #25d366 !important;
        border-radius: .3125rem !important;
        color: #ffffff !important;
        font-size: 1rem !important;
        font-weight: bold !important;
        position: relative !important;
        display: inline-flex !important;
        width: auto !important;
        transition: all .3s !important;
        align-items: center !important;
        box-shadow: 0 .125rem .125rem 0rem rgba(45, 62, 79, .3) !important;
        text-transform: none !important;
        cursor: pointer;
        margin-top: .625rem;
        margin-bottom: .625rem;
        -webkit-box-shadow: 0 .25rem .4375rem 0 rgba(0, 0, 0, .25);
        -moz-box-shadow: 0 .25rem .4375rem 0 rgba(0, 0, 0, .25);
        box-shadow: 0 .25rem .4375rem 0 rgba(0, 0, 0, .25);
        transition: top .1s ease;
        -webkit-transition: top .1s ease;
        margin-left: 5%;
        margin-top: 4%;
        padding: .625rem;
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
        font-size: 2.75rem;
        font-weight: 900;
        line-height: normal;
        margin-bottom: 4.1875rem;
        text-shadow: .1875rem .1875rem 0 rgba(0, 0, 0, .25);
        color: black;
    }

    .key_card {
        width: 13.5rem;
        height: 15.375rem;
        border-top: .0625rem solid rgba(0, 0, 0, 0.15);
        border-bottom: .0625rem solid rgba(0, 0, 0, 0.15);
        border-left: .0625rem solid rgba(0, 0, 0, 0.15);
        position: relative;
        background-image: url('data:image/svg+xml;charset=utf8,%3Csvg fill="%23ededed" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" transform="matrix(-1, 0, 0, 1, 0, 0)rotate(180)" stroke="%23ededed"%3E%3Cg id="SVGRepo_bgCarrier" stroke-width="0"%3E%3C/g%3E%3Cg id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"%3E%3C/g%3E%3Cg id="SVGRepo_iconCarrier"%3E %3Ctitle%3Ekey%3C/title%3E %3Cpath d="M27.339 8.365l0.63-1.011 1.513 0.942 1.065-1.555-2.683-1.838c-1.513 2.208-3.368 1.191-5.172-0.028l1.654-2.413-2.101-1.44-11.242 16.406-1.431-0.999c-1.527-1.065-3.411 1.592-1.864 2.671l1.454 1.015-0.21 0.307c-2.85-1.433-5.949-1.161-7.289 0.796h0c-1.518 2.215-0.209 5.752 2.903 7.885s6.858 2.059 8.376-0.156c1.345-1.962 0.49-4.949-1.886-7.088l0.196-0.286 1.238 0.864c1.42 0.991 3.319-1.656 1.864-2.671l-1.261-0.88 6.545-9.552c1.731 1.195 3.456 2.533 2.091 4.525l2.683 1.838 1.802-2.63-1.678-1.045 0.689-1.106 1.727 1.075 1.121-1.635-2.353-1.465 0.689-1.106 0.933 0.581zM6.183 28.027c-1.135 0-2.055-0.92-2.055-2.055s0.92-2.055 2.055-2.055 2.055 0.92 2.055 2.055c-0 1.135-0.92 2.055-2.055 2.055z"%3E%3C/path%3E %3C/g%3E%3C/svg%3E');
        background-size: 56% auto;
        background-position: right bottom;
        background-repeat: no-repeat;
        padding: 2.5rem;
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


    <header>
        <nav id="nav1" x-data="{ open: false }" class="flex h-auto w-auto bg-white rounded-lg justify-between md:h-16" style="box-shadow: rgba(0, 0, 0, 0.35) 0rem .3125rem .9375rem;">
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

                <button class="text-gray-500 w-10 h-10 relative focus:outline-none md:hidden mt-2" @click="open = !open">
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
                    <input type="text" placeholder="ENTER KEYWORD" class="h-12 text-blackhover:text-white border border-black px-2 py-1 pl-8 w-full md:w-auto">
                    <button>
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
            </div>
        </div>
    </nav>

    <section class="parallax mt-16" style="position: relative; background: url('https://t4.ftcdn.net/jpg/02/91/14/23/360_F_291142315_1HDHshpssor08inb91jnXZxB02M3rIgi.jpg') no-repeat center center fixed; background-size: cover; height: 18.75rem;">
        <div class="overlay" style="background: rgba(0, 0, 0, 0.5); position: absolute; top: 0; left: 0; right: 0; bottom: 0;"></div>
        <div class="content" style="position: relative; z-index: 1; display: flex; flex-direction: column; padding-left: 16px; padding-right: 16px; text-align: center; gap: 16px;">
            <h1 style="font-size: 40px; color: white; font-weight: 100; margin-bottom: 24px;">SEARCH RESULT FOR DEEPCLEAN</h1>
            <p style="font-size: 16px; color: antiquewhite;">Home / Search</p>
        </div>
    </section>


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
