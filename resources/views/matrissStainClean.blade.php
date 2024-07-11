<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All House Works</title>
    <!-- Link to Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="icon" href="https://i.ibb.co/37LJZ19/Blue-Modern-Luxury-Real-Estate-Logo-removebg-preview.png" type="image/x-icon">
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
        background: linear-gradient(rgba(118 122 199 / 0.09), rgba(103 165 124 / 0.1)), url(https://www.nicepng.com/png/full/365-3651833_top-shadow-toronto.png) left bottom / cover no-repeat;
        width: 100%;
        background-attachment: fixed;
        background-position: left top 120px;
        opacity: 0.9;
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

    .group:hover .group-hover\:block {
        display: block;
    }

    .hidden-submenu {
        display: none;
    }
 /* Adjustments for submenu visibility */
    .plumber-group:hover .plumber-group-hover\:block {
        display: block;
    }

    .electric-group:hover .electric-group-hover\:block {
        display: block;
    }

    .handyman-group:hover .handyman-group-hover\:block {
        display: block;
    }

    .deepclean-group:hover .deepclean-group-hover\:block {
        display: block;
    }

    .floorpolish-group:hover .floorpolish-group-hover\:block {
        display: block;
    }

    .floorclean-group:hover .floorclean-group-hover\:block {
        display: block;
    }

    .woodvanish-group:hover .woodvanish-group-hover\:block {
        display: block;
    }

    .decking-group:hover .decking-group-hover\:block {
        display: block;
    }

    @media (min-width: 1024px) {
        #main-nav {
            position: sticky;
            top: -50px;
            z-index: 50;
            transition: top 0.3s ease, background-color 0.3s ease, box-shadow 0.3s ease;
        }
    }

    #main-nav.scrolled {
        top: 0;
        background-color: #f8f8f8;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
</style>

<body class="bg-white relative">

      <div class="bg-black text-white text-center py-4" style="font-size: 12px;text-transform: uppercase;">
        <a href="https://wa.me/6596585757" target="_blank" rel="noopener noreferrer">
            <p style="font-family: sans-serif;font-weight: 500;letter-spacing: 3px;">WHATSAPP NOW FOR SERVICE HELP</p>
        </a>
    </div>

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
                        <p class="text-gray-500">+65 6575 1226</p>
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

    <!-- Navigation Menu -->
    <!-- Scroll Up -->
    <div class="flex items-end justify-start fixed bottom-0 left-0 mb-4 ml-4 z-10">
        <div>
            <button onclick="scrollToTop()" title="Scroll to Top" class="block w-11 h-11 rounded-full transition-all shadow hover:shadow-lg transform hover:scale-110 hover:-rotate-12">
                <img class="object-cover object-center w-11 h-11 rounded-full" src="{{ url('img/up-arrow.png') }}" />
            </button>
        </div>
    </div>
    <!-- Scroll Up -->
    <nav id="main-nav" class="bg-white shadow-lg relative z-50 sticky">
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 border-t">
            <div class="relative flex items-center justify-between h-16" style="margin-left: 15%;">
                <div class="inset-y-0 left-0 flex items-center sm:hidden">
                    <button id="mobile-menu-toggle" type="button" class="inline-flex bg-gray-700 items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start ">
                    <div class="hidden sm:block sm:ml-6">
                        <div class="flex space-x-16">
                            <div class="border-r-2 border-l-2" style="border-top: 4px solid #B48F57;">
                                <a href="#" class="text-gray-700 hover:text-brown-500 px-3 py-2 rounded-md text-lg font-medium">Home</a>
                            </div>
                            <div class="relative group border-r border-l hover-border-top">
                                <a href="/about" class="text-gray-700 hover:text-brown-500 px-3 py-2 rounded-md text-lg font-medium flex items-center">About
                                    <svg class="ml-1 transform transition-transform duration-500 ease-in-out" style="width: 1rem; height: 1rem;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M10 12.59l-4.95-4.95a1.41 1.41 0 10-2 2l7.45 7.5a1.41 1.41 0 002 0l7.45-7.5a1.41 1.41 0 10-2-2L10 12.59z" />
                                    </svg>
                                </a>
                                <div class="absolute hidden group-hover:block text-white bg-gray-800 shadow-lg rounded-md mt-2 w-40 z-50">
                                    <a href="/review" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Review</a>
                                    <a href="/mission" class="block px-4 py-2 hover:bg-gray-200 hover:text-black">Mission</a>
                                </div>
                            </div>
                            <div class="relative group border-r border-l hover-border-top">
                                <a href="#" class="text-gray-700 hover:text-brown-500 px-3 py-2 rounded-md text-lg font-medium flex items-center">Service
                                    <svg class="ml-1 transform transition-transform duration-500 ease-in-out" style="width: 1rem; height: 1rem;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M10 12.59l-4.95-4.95a1.41 1.41 0 10-2 2l7.45 7.5a1.41 1.41 0 002 0l7.45-7.5a1.41 1.41 0 10-2-2L10 12.59z" />
                                    </svg>
                                </a>
                                <div class="absolute hidden group-hover:block text-white bg-gray-800 shadow-lg rounded-md mt-2 w-40 z-50">
                                    <!-- Plumber -->
                                    <div class="relative plumber-group">
                                        <a href="/plumbing" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Plumber</a>
                                        <div class="absolute hidden plumber-group-hover:block text-white bg-gray-800 shadow-lg rounded-md mt-2 w-40 left-full top-0 z-50">

                                            <!-- Plumbing Install -->
                                            <div class="relative plumber-group">
                                                <a href="/plumbingInstall" onmouseenter="toggleSubMenu('pipe-installation')" onmouseleave="toggleSubMenu('pipe-installation')" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Plumbing
                                                    Install</a>
                                                <div id="pipe-installation" class="absolute hidden text-white bg-gray-800 shadow-lg rounded-md mt-2 w-40 left-full top-0 z-50" onmouseenter="toggleSubMenu('pipe-installation')" onmouseleave="toggleSubMenu('pipe-installation')">
                                                    <a href="/pipeInstall" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b plumbing-install">Pipe Installation</a>
                                                    <a href="/bidetSpray" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Bidet Spray</a>
                                                    <a href="/bathroomRack" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Bathroom Rack</a>
                                                </div>
                                            </div>
                                            <!-- Plumbing Install -->

                                            <!-- Plumbing Choke -->
                                            <a href="/plumbingChoke" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Plumbing
                                                Choke</a>
                                            <!-- Plumbing Choke -->

                                            <!-- Plumbing Leak-->
                                            <div class="relative plumber-group">
                                                <a href="/plumbingLeak" onmouseenter="toggleSubMenu('plumbing-leak')" onmouseleave="toggleSubMenu('plumbing-leak')" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Plumbing
                                                    Leak</a>
                                                <div id="plumbing-leak" class="absolute hidden text-white bg-gray-800 shadow-lg rounded-md mt-2 w-40 left-full top-0 z-50" onmouseenter="toggleSubMenu('plumbing-leak')" onmouseleave="toggleSubMenu('plumbing-leak')">
                                                    <a href="/tapLeak" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b plumbing-install">Leaking Tap</a>
                                                    <a href="/heaterLeak" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Heater Leak</a>
                                                    <a href="/showerService" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Shower Leak</a>
                                                </div>
                                            </div>
                                            <!--Plumbing Leak -->


                                            <!-- Water Heater-->
                                            <div class="relative plumber-group">
                                                <a href="/waterHeater" onmouseenter="toggleSubMenu('water-leak')" onmouseleave="toggleSubMenu('water-leak')" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Water Heater</a>
                                                <div id="water-leak" class="absolute hidden text-white bg-gray-800 shadow-lg rounded-md mt-2 w-40 left-full top-0 z-50" onmouseenter="toggleSubMenu('water-leak')" onmouseleave="toggleSubMenu('water-leak')">
                                                    <a href="/heaterinstall" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b plumbing-install">Water Heater Installation</a>
                                                    <a href="/waterheaterLeak" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Water Heater Leak</a>
                                                    <a href="/heaterRepair" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Water Heater Repair</a>
                                                </div>
                                            </div>
                                            <!--Water Heater -->


                                            <!-- Toilet Bowl-->
                                            <div class="relative plumber-group">
                                                <a href="/toiletBowl" onmouseenter="toggleSubMenu('toilet-bowl')" onmouseleave="toggleSubMenu('toilet-bowl')" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Toilet Bowl</a>
                                                <div id="toilet-bowl" class="absolute hidden text-white bg-gray-800 shadow-lg rounded-md mt-2 w-40 left-full top-0 z-50" onmouseenter="toggleSubMenu('toilet-bowl')" onmouseleave="toggleSubMenu('toilet-bowl')">
                                                    <a href="/toiletBowl" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b plumbing-install">Toilet Bowl Installation</a>
                                                    <a href="/plumbingChoke" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Toilet Bowl Choke</a>
                                                    <a href="/toiletRepair" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Toilet Bowl Choke Repair</a>
                                                </div>
                                            </div>
                                            <!--Toilet Bowl-->


                                            <!-- Shower
                                                Service-->
                                            <div class="relative plumber-group">
                                                <a href="/showerService" onmouseenter="toggleSubMenu('shower-service')" onmouseleave="toggleSubMenu('shower-service')" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Shower Service</a>
                                                <div id="shower-service" class="absolute hidden text-white bg-gray-800 shadow-lg rounded-md mt-2 w-40 left-full top-0 z-50" onmouseenter="toggleSubMenu('shower-service')" onmouseleave="toggleSubMenu('shower-service')">
                                                    <a href="/showerInstall" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b plumbing-install">Shower Installation</a>
                                                    <a href="/showerRepair" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Shower Repair</a>
                                                </div>
                                            </div>
                                            <!--Shower
                                                Service-->

                                            <a href="/tapFaucet" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Tap
                                                & Faucet</a>
                                            <a href="/bidetSpray" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Bidet
                                                Spray</a>
                                            <a href="/commercialPlumber" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Commercial
                                                Plumber</a>

                                        </div>
                                    </div>
                                    <!-- Plumber -->

                                    <!-- Electrician -->
                                    <div class="relative electric-group">
                                        <a href="/electric" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Electrician</a>
                                        <div class="absolute hidden electric-group-hover:block text-white bg-gray-800 shadow-lg rounded-md mt-2 w-40 left-full top-0 z-50">

                                            <!-- Electric Install -->
                                            <a href="/electricalInstall" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Electrical Installation</a>
                                            <!-- Electric Install -->

                                            <!-- Electric Repair -->
                                            <a href="/electricRepair" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Electrical Repair</a>
                                            <!-- Electric Repair -->


                                            <!-- Light Service -->
                                            <div class="relative electric-group">
                                                <a href="/lightService" onmouseenter="toggleSubMenu('light-service')" onmouseleave="toggleSubMenu('light-service')" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Light Service</a>
                                                <div id="light-service" class="absolute hidden text-white bg-gray-800 shadow-lg rounded-md mt-2 w-40 left-full top-0 z-50" onmouseenter="toggleSubMenu('light-service')" onmouseleave="toggleSubMenu('light-service')">
                                                    <a href="/lightInstall" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b plumbing-install">Light Installation</a>
                                                    <a href="/lightReplace" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Light Repair</a>
                                                </div>
                                            </div>
                                            <!--Light Service -->

                                            <a href="/switchService" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Electric Switch Service</a>
                                            <a href="/powerSocket" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Power Sockets</a>
                                            <a href="/hdrElectric" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">HDR Electrician</a>
                                            <a href="/smartSwitch" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">SmartSwitch</a>
                                        </div>
                                    </div>
                                    <!-- Electrician -->

                                    <!-- HandyMan -->
                                    <div class="relative handyman-group">
                                        <a href="/handyman" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">HandyMan</a>
                                        <div class="absolute hidden handyman-group-hover:block text-white bg-gray-800 shadow-lg rounded-md mt-2 w-40 left-full top-0 z-50">

                                            <!-- Rubbish Chute -->
                                            <a href="/rubbishChute" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Rubbish Chute</a>
                                            <!-- Rubbish Chute -->

                                            <!-- Cabinet Hinge -->
                                            <a href="/cabinetHinge" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Cabinet Hinge</a>
                                            <!-- Cabinet Hinge -->

                                            <!-- Hydraulic Hinge -->
                                            <a href="/hydraulic" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Hydraulic Hinge</a>
                                            <!-- Hydraulic Hinge -->

                                            <!-- Cupboard Hinge -->
                                            <a href="/cupboard" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Cupboard Hinge</a>
                                            <!-- Cupboard Hinge -->

                                            <!-- Handyman Drilling -->
                                            <a href="/drilling" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Handyman Drilling</a>
                                            <!-- Handyman Drilling -->

                                            <!-- TV Bracket Installation -->
                                            <a href="/tvBucket" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">TV Bracket Installation</a>
                                            <!-- TV Bracket Installation -->

                                            <!-- Wall Mounting Installation -->
                                            <a href="/wallMounting" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Wall Mounting Installation</a>
                                            <!-- Wall Mounting Installation -->

                                            <!-- PullUp Bar Installation -->
                                            <a href="/pullUp" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">PullUp Bar Installation</a>
                                            <!-- PullUp Bar Installation -->
                                        </div>
                                    </div>
                                    <!-- HandyMan -->

                                    <!-- Deep Cleaning -->
                                    <div class="relative deepclean-group">
                                        <a href="/deepclean" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Deep Cleaning</a>
                                        <div class="absolute hidden deepclean-group-hover:block text-white bg-gray-800 shadow-lg rounded-md mt-2 w-40 left-full top-0 z-50">

                                            <!-- Mattress Cleaning -->
                                            <a href="/matressClean" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Mattress Cleaning</a>
                                            <!-- Mattress Cleaning -->

                                            <!-- Mattress Deep Cleaning -->
                                            <a href="/matressDeepClean" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Mattress Deep Cleaning</a>
                                            <!-- Mattress Deep Cleaning -->

                                            <!-- Mattress Steam Cleaning -->
                                            <a href="/matressstemClean" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Mattress Steam Cleaning</a>
                                            <!-- Mattress Steam Cleaning -->

                                            <!-- Mattress Stain Removal -->
                                            <a href="/matrissStainClean" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Mattress Stain Removal</a>
                                            <!-- Mattress Stain Removal -->

                                            <!-- Sofa Cleaning -->
                                            <a href="/sofaClean" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Sofa Cleaning</a>
                                            <!-- Sofa Cleaning -->

                                            <!-- Sofa Deep Cleaning -->
                                            <a href="/sofaDeepClean" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Sofa Deep Cleaning</a>
                                            <!-- Sofa Deep Cleaning -->

                                            <!-- Sofa Stain Removal -->
                                            <a href="/sofaStain" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Sofa Stain Removal</a>
                                            <!-- Sofa Stain Removal -->

                                            <!-- Fabric Sofa Cleaning -->
                                            <a href="/fabricSofaClean" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Fabric Sofa Cleaning</a>
                                            <!-- Fabric Sofa Cleaning -->
                                        </div>
                                    </div>
                                    <!-- Deep Cleaning -->


                                    <!-- Floor Polishing -->
                                    <div class="relative floorpolish-group">
                                        <a href="/floorpolish" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Floor Polishing</a>
                                        <div class="absolute hidden floorpolish-group-hover:block text-white bg-gray-800 shadow-lg rounded-md mt-2 w-40 left-full top-0 z-50">

                                            <!-- Marble Floor Polish -->
                                            <a href="/marbleFloorPolish" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Marble Floor Polish</a>
                                            <!-- Marble Floor Polish -->

                                            <!-- Marble Polishing -->
                                            <a href="/marblePolish" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Marble Polishing</a>
                                            <!-- Marble Polishing -->

                                            <!-- Mattress Steam Cleaning -->
                                            <a href="/matressstemClean" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Mattress Steam Cleaning</a>
                                            <!-- Mattress Steam Cleaning -->

                                            <!-- Parquet Polishing -->
                                            <a href="/parquetPolish" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Parquet Polishing</a>
                                            <!-- Parquet Polishing -->

                                            <!-- Parquet Floor Polishing -->
                                            <a href="/parquetVarnish" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Parquet Floor Polishing</a>
                                            <!-- Parquet Floor Polishing -->

                                            <!-- Wood Polishing -->
                                            <a href="/woodPolish" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Wood Polishing</a>
                                            <!-- Wood Polishing -->

                                            <!-- Sofa Stain Removal -->
                                            <a href="/sofaStain" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Sofa Stain Removal</a>
                                            <!-- Sofa Stain Removal -->

                                            <!-- Wood Floor Polishing -->
                                            <a href="/wood" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Wood Floor Polishing</a>
                                            <!-- Wood Floor Polishing -->

                                            <!-- Vinyl Floor Polishing -->
                                            <a href="/vinylFloorPolish" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Vinyl Floor Polishing</a>
                                            <!-- Vinyl Floor Polishing -->
                                            <!-- Tile Floor Polishing -->
                                            <a href="/tileFloorPolish" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Tile Floor Polishing</a>
                                            <!-- Tile Floor Polishing -->
                                        </div>
                                    </div>
                                    <!-- Floor Polishing -->


                                    <!-- Floor Cleaning -->
                                    <div class="relative floorclean-group">
                                        <a href="/floorclean" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Floor Cleaning</a>
                                        <div class="absolute hidden floorclean-group-hover:block text-white bg-gray-800 shadow-lg rounded-md mt-2 w-40 left-full top-0 z-50">

                                            <!-- Floor Deep Cleaning -->
                                            <a href="/floorclean" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Floor Deep Cleaning</a>
                                            <!-- Floor Deep Cleaning -->

                                            <!-- Vinyl Cleaning -->
                                            <a href="/vinylClean" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Vinyl Cleaning</a>
                                            <!-- Vinyl Cleaning -->

                                            <!-- vinylFloorClean -->
                                            <a href="/vinylFloorClean" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">vinylFloorClean</a>
                                            <!-- vinylFloorClean -->

                                            <!-- Vinyl Floor Deep Cleaning -->
                                            <a href="/vinylDeepFloorClean" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Vinyl Floor Deep Cleaning</a>
                                            <!-- Vinyl Floor Deep Cleaning -->

                                            <!-- Terrazzo Cleaning -->
                                            <a href="/terrazzoClean" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Terrazzo Cleaning</a>
                                            <!-- Terrazzo Cleaning -->
                                        </div>
                                    </div>
                                    <!--Floor Cleaning -->

                                    <!-- Wood Varnishing -->
                                    <div class="relative woodvanish-group">
                                        <a href="/wood" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Wood Varnishing</a>
                                        <div class="absolute hidden woodvanish-group-hover:block text-white bg-gray-800 shadow-lg rounded-md mt-2 w-40 left-full top-0 z-50">

                                            <!-- Parquet Varnish -->
                                            <a href="/parquetVarnish" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Parquet Varnish</a>
                                            <!-- Parquet Varnish -->
                                        </div>
                                    </div>
                                    <!--Wood Varnishing -->


                                    <!-- Decking -->
                                    <div class="relative decking-group">
                                        <a href="/decking" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Decking</a>
                                        <div class="absolute hidden decking-group-hover:block text-white bg-gray-800 shadow-lg rounded-md mt-2 w-40 left-full top-0 z-50">

                                            <!-- Balcony Decking -->
                                            <a href="/balconyDeck" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Balcony Decking</a>
                                            <!-- Balcony Decking -->

                                            <!-- Timber Decking -->
                                            <a href="/timberDeck" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Timber Decking</a>
                                            <!-- Timber Decking -->
                                        </div>
                                    </div>
                                    <!--Decking -->
                                </div>
                            </div>
                            <div class="hover-border-top border-r border-l">
                                <a href="#" class="text-gray-700 hover:text-brown-500 px-3 py-2 rounded-md text-lg font-medium">Price</a>
                            </div>
                            <div class="hover-border-top border-r border-l">
                                <a href="#" class="text-gray-700 hover:text-brown-500 px-3 py-2 rounded-md text-lg font-medium">Works</a>
                            </div>
                            <div class="hover-border-top border-r border-l">
                                <a href="#" class="text-gray-700 hover:text-brown-500 px-3 py-2 rounded-md text-lg font-medium">Contact
                                    Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile -->
            <div class="sm:hidden hidden" id="mobile-menu">
                <div class="px-2 pt-2 pb-3 space-y-1">
                    <a href="#" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">Home</a>

                    <div class="relative">
                        <button class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium flex items-center justify-between" onclick="toggleSubMenu('about-submenu', 'about-arrow')">
                            About Us
                            <svg id="about-arrow" class="w-4 h-4 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div id="about-submenu" class="hidden pl-4 max-h-40 overflow-y-auto">
                            <a href="/about" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">About</a>
                            <a href="/review" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">Reviews</a>
                            <a href="/mission" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">Mission</a>
                        </div>
                    </div>

                    <div class="relative">
                        <button class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium flex items-center justify-between" onclick="toggleSubMenu('services-submenu', 'services-arrow')">
                            Services
                            <svg id="services-arrow" class="w-4 h-4 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div id="services-submenu" class="hidden pl-4 max-h-40 overflow-y-auto">
                            <a href="/service" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">Service</a>

                            <div class="relative">
                                <button class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium flex items-center justify-between" onclick="toggleSubMenu('aircon-submenu', 'aircon-arrow')">
                                    Plumber
                                    <svg id="aircon-arrow" class="w-4 h-4 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </button>
                                <div id="aircon-submenu" class="hidden pl-4 bg-gray-100">

                                    <div class="relative flex items-center justify-between">
                                        <a href="/plumbingInstall" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">
                                            Plumbing Install
                                        </a>
                                        <svg id="aircon-option1-arrow" onclick="toggleSubMenu('aircon-option1-submenu', 'aircon-option1-arrow')" class="w-4 h-4 transform transition-transform duration-200 cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </div>
                                    <div id="aircon-option1-submenu" class="hidden pl-4 bg-gray-200">
                                        <a href="/pipeInstall" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">Pipe Installation</a>
                                        <a href="/bidetSpray" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">Bidet Spray</a>
                                        <a href="/bathroomRack" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">Bathroom Rack</a>
                                    </div>


                                    <a href="/plumbingChoke" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">Plumbing Choke</a>

                                    <div class="relative flex items-center justify-between">
                                        <a href="/plumbingLeak" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">
                                            Plumbing Leak
                                        </a>
                                        <svg id="aircon-option2-arrow" onclick="toggleSubMenu('aircon-option2-submenu', 'aircon-option2-arrow')" class="w-4 h-4 transform transition-transform duration-200 cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </div>
                                    <div id="aircon-option2-submenu" class="hidden pl-4 bg-gray-200">
                                        <a href="/tapLeak" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">Leaking Tap</a>
                                        <a href="/heaterLeak" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">Heater Leak</a>
                                        <a href="/showerService" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">Shower Leak</a>
                                    </div>


                                    <div class="relative flex items-center justify-between">
                                        <a href="/waterHeater" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">
                                            Water Heater
                                        </a>
                                        <svg id="aircon-option3-arrow" onclick="toggleSubMenu('aircon-option3-submenu', 'aircon-option3-arrow')" class="w-4 h-4 transform transition-transform duration-200 cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </div>
                                    <div id="aircon-option3-submenu" class="hidden pl-4 bg-gray-200">
                                        <a href="/heaterinstall" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">Water Heater Installation</a>
                                        <a href="/waterheaterLeak" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">Water Heater Leak</a>
                                        <a href="/heaterRepair" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">Water Heater Repair</a>
                                    </div>


                                    <div class="relative flex items-center justify-between">
                                        <a href="/toiletBowl" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">
                                            Toilet Bowl
                                        </a>
                                        <svg id="aircon-option4-arrow" onclick="toggleSubMenu('aircon-option4-submenu', 'aircon-option4-arrow')" class="w-4 h-4 transform transition-transform duration-200 cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </div>
                                    <div id="aircon-option4-submenu" class="hidden pl-4 bg-gray-200">
                                        <a href="/toiletBowl" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">Toilet Bowl Installation</a>
                                        <a href="/plumbingChoke" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">Toilet Bowl Choke</a>
                                        <a href="/toiletRepair" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">Toilet Bowl Choke Repair</a>
                                    </div>


                                    <div class="relative flex items-center justify-between">
                                        <a href="/showerService" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">
                                            Shower Service
                                        </a>
                                        <svg id="aircon-option5-arrow" onclick="toggleSubMenu('aircon-option5-submenu', 'aircon-option5-arrow')" class="w-4 h-4 transform transition-transform duration-200 cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </div>
                                    <div id="aircon-option5-submenu" class="hidden pl-4 bg-gray-200">
                                        <a href="/showerInstall" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">Shower Installation</a>
                                        <a href="/showerRepair" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">Shower Repair</a>
                                    </div>

                                    <a href="/tapFaucet" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">Tap & Faucet</a>
                                    <a href="/bidetSpray" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">Bidet Spray</a>
                                    <a href="/commercialPlumber" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">Commercial Plumber</a>
                                </div>
                            </div>


                            <div class="relative">
                                <button class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium flex items-center justify-between" onclick="toggleSubMenu('electrician-submenu', 'aircon-arrow')">
                                    Electrician
                                    <svg id="aircon-arrow" class="w-4 h-4 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </button>
                                <div id="electrician-submenu" class="hidden pl-4 bg-gray-100">
                                    <a href="/electricalInstall" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">Electrical Installation</a>
                                    <a href="/electricRepair" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">Electrical Repair</a>


                                    <div class="relative flex items-center justify-between">
                                        <a href="/plumbingInstall" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">
                                            Plumbing Install
                                        </a>
                                        <svg id="aircon-option11-arrow" onclick="toggleSubMenu('aircon-option11-submenu', 'aircon-option11-arrow')" class="w-4 h-4 transform transition-transform duration-200 cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </div>
                                    <div id="aircon-option11-submenu" class="hidden pl-4 bg-gray-200">
                                        <a href="/lightInstall" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">Light Installation</a>
                                        <a href="/lightReplace" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">Light Repair</a>
                                    </div>


                                    <a href="/switchService" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">Electric Switch Service</a>

                                    <a href="/powerSocket" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">Power Sockets</a>
                                    <a href="/hdrElectric" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">HDR Electrician</a>
                                    <a href="/smartSwitch" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">SmartSwitch</a>
                                </div>
                            </div>


                            <div class="relative">
                                <button class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium flex items-center justify-between" onclick="toggleSubMenu('handyman-submenu', 'aircon-arrow')">
                                    HandyMan
                                    <svg id="aircon-arrow" class="w-4 h-4 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </button>

                                <div id="handyman-submenu" class="hidden pl-4 bg-gray-100">
                                    <a href="/rubbishChute" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">Rubbish Chute</a>
                                    <a href="/cupboard" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">Cupboard Hinge</a>

                                    <a href="/cabinetHinge" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">Cabinet Hinge</a>

                                    <a href="/hydraulic" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">Hydraulic Hinge</a>
                                    <a href="/drilling" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">Handyman Drilling</a>
                                    <a href="/tvBucket" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">TV Bracket Installation</a>
                                    <a href="/wallMounting" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">Wall Mounting Installation</a>
                                    <a href="/pullUp" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">PullUp Bar Installation</a>
                                </div>
                            </div>

                            <div class="relative">
                                <button class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium flex items-center justify-between" onclick="toggleSubMenu('deepclean-submenu', 'aircon-arrow')">
                                    Deep Cleaning
                                    <svg id="aircon-arrow" class="w-4 h-4 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </button>

                                <div id="deepclean-submenu" class="hidden pl-4 bg-gray-100">
                                    <a href="/matressClean" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">Mattress Cleaning</a>
                                    <a href="/matressDeepClean" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">Mattress Deep Cleaning</a>

                                    <a href="/cabinetHinge" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">Cabinet Hinge</a>

                                    <a href="/matressstemClean" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">Mattress Steam Cleaning</a>
                                    <a href="/matrissStainClean" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">Mattress Stain Removal</a>
                                    <a href="/sofaClean" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">Sofa Cleaning</a>
                                    <a href="/sofaDeepClean" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">Sofa Deep Cleaning</a>
                                    <a href="/sofaStain" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">Sofa Stain Removal</a>
                                    <a href="/fabricSofaClean" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">Fabric Sofa Cleaning</a>
                                    <a href="/unholsteryClean" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">Upholstery Cleaning</a>
                                </div>
                            </div>

                            <div class="relative">
                                <button class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium flex items-center justify-between" onclick="toggleSubMenu('floorPolish-submenu', 'aircon-arrow')">
                                    Floor Polishing
                                    <svg id="aircon-arrow" class="w-4 h-4 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </button>

                                <div id="floorPolish-submenu" class="hidden pl-4 bg-gray-100">
                                    <a href="/marbleFloorPolish" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">Marble Floor Polish</a>
                                    <a href="/marblePolish" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">Marble Polishing</a>
                                    <a href="/matressstemClean" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">Mattress Steam Cleaning</a>
                                    <a href="/parquetPolish" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">Parquet Polishing</a>
                                    <a href="/parquetVarnish" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">Parquet Floor Polishing</a>
                                    <a href="/woodPolish" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">Wood Polishing</a>
                                    <a href="/sofaStain" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">Sofa Deep Cleaning</a>
                                    <a href="/sofaStain" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">Sofa Stain Removal</a>
                                    <a href="/wood" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">Wood Floor Polishing</a>
                                    <a href="/vinylFloorPolish" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">Vinyl Floor Polishing</a>
                                    <a href="/tileFloorPolish" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">Tile Floor Polishing</a>
                                </div>
                            </div>

                            <div class="relative">
                                <button class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium flex items-center justify-between" onclick="toggleSubMenu('floorClean-submenu', 'aircon-arrow')">
                                    Floor Cleaning
                                    <svg id="aircon-arrow" class="w-4 h-4 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </button>

                                <div id="floorClean-submenu" class="hidden pl-4 bg-gray-100">
                                    <a href="/vinylClean" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">Vinyl Cleaning</a>
                                    <a href="/vinylFloorClean" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">Vinyl Floor Clean</a>
                                    <a href="/vinylDeepFloorClean" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">Vinyl Floor Deep Cleaning</a>
                                    <a href="/terrazzoClean" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">Terrazzo Cleaning</a>
                                </div>
                            </div>


                            <div class="relative">
                                <button class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium flex items-center justify-between" onclick="toggleSubMenu('wood-submenu', 'aircon-arrow')">
                                    Wood Varnishing
                                    <svg id="aircon-arrow" class="w-4 h-4 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </button>

                                <div id="wood-submenu" class="hidden pl-4 bg-gray-100">
                                    <a href="/parquetVarnish" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">Parque Varnish</a>
                                </div>
                            </div>

                            <div class="relative">
                                <button class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium flex items-center justify-between" onclick="toggleSubMenu('decking-submenu', 'aircon-arrow')">
                                    Decking
                                    <svg id="aircon-arrow" class="w-4 h-4 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </button>

                                <div id="decking-submenu" class="hidden pl-4 bg-gray-100">
                                    <a href="/balconyDeck" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">Balcony Decking</a>
                                    <a href="/timberDeck" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">Timber Decking</a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <a href="/price" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">Price</a>
                    <a href="/works" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">Works</a>
                    <a href="/contact" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">Contact Us</a>
                </div>
            </div>

        </div>
    </nav>
    <!-- Navigation Menu -->
    <section class="parallax mt-16" style="position: relative; background: url('https://www.thespruce.com/thmb/gmnm9E-qduP7oydJ73HkXMz9BZo=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/clean-your-mattress-the-natural-way-350742-14-5a99efe91be349449c3178993b367746.jpg') no-repeat center center fixed; background-size: cover; height: 300px;">
        <div class="overlay" style="background: rgba(0, 0, 0, 0.5); position: absolute; top: 0; left: 0; right: 0; bottom: 0;"></div>
        <div class="content" style="position: relative; z-index: 1; display: flex; flex-direction: column; padding-left: 1rem; padding-right: 1rem; text-align: center; gap: 1rem;">
            <h1 style="font-size: 2.5rem; color: white; font-weight: 100; margin-bottom: 1.5rem;">Matress Stain Cleaning</h1>
            <p style="font-size: 1rem; color: antiquewhite;">Home / Service / Deep Clean / Matress Stain Cleaning</p>
        </div>
    </section>



    <!-- component -->
    <section class="relative pt-16 bg-blueGray-50">
        <div class="container mx-auto">
            <div class="flex flex-wrap items-center">
                <div class="w-10/12 md:w-6/12 lg:w-4/12 px-12 md:px-4 mr-auto ml-auto -mt-78">
                    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-lg bg-pink-500">
                        <img alt="..." src="https://www.housedigest.com/img/gallery/think-twice-before-trying-this-popular-trick-to-get-rid-of-bed-bugs/l-intro-1694804574.jpg" class="w-full align-middle rounded-t-lg">
                        <blockquote class="relative p-8 mb-4">
                            <h4 class="text-xl font-bold text-white">
                                MATTRESS STAIN CLEANING EXPERTS
                            </h4>
                            <p class="text-md font-light mt-2 text-white">
                                MATTRESS STAIN CLEANING EXPERTS services include leak repairs, fixture installations, and maintenance for efficient water systems in homes and businesses, ensuring reliable operation and minimizing disruptions.
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
                                    <TS class="text-xl mb-1 font-semibold">MATTRESS STAIN CLEANING EXPERTS</TS>
                                    <p class="mb-4 text-blueGray-500">
                                        Our professionals have over 35 years of experience in the industry, serving 1000s of residential & commercial estates.
                                    </p>
                                </div>
                            </div>
                            <div class="relative flex flex-col min-w-0">
                                <div class="px-4 py-5 flex-auto">
                                    <div class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-white" style="border: 1px solid #0097a7;">
                                        <img src={{ url('img/under-construction.gif') }} alt="">
                                    </div>
                                    <h6 class="text-xl mb-1 font-semibold">
                                        FULL 1-STOP MATTRESS STAIN CLEANING SERVICES
                                    </h6>
                                    <p class="mb-4 text-blueGray-500">
                                        Our top-to-bottom floor cleaning service is designed to be fuss-free for you. Besides having your floor cleaned, we also ensure that you have a clear understanding of our floor cleaning process, enabling you to apply the knowledge to maintain the cleanliness of your floors.
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
                                    <h6 class="text-xl mb-1 font-semibold">RANGE OF MATTRESS STAIN CLEANING SERVICES</h6>
                                    <p class="mb-4 text-blueGray-500">
                                        Our floor cleaning servicing technicians carry out a comprehensive list of floor cleaning works including floor deep cleaning, vinyl floor cleaning.
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
    <section class="bg-white lg:pt-[120px] lg:ml-20 pb-12 lg:pb-[90px] relative z-20 overflow-hidden">
        <div class="container">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full px-4">
                    <div class="text-center mx-auto mb-[60px] lg:mb-20 max-w-[510px]">
                        <h2 class=" font-bold  text-3xl sm:text-4xl md:text-[40px] text-dark mb-4 ">
                            OUR FULL RANGE OF MATTRESS CLEANING SERVICES INCLUDE
                        </h2>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-3 p-4 max-w-[400px] md:max-w-[600px] place-items-center">
                <img class="hover:opacity-75" src="https://www.drewandjonathan.com/wp-content/uploads/2024/02/shutterstock_2377741303-scaled.jpg">
                <img class="hover:opacity-75" src="https://www.makeitclean.com.au/wp-content/uploads/2022/06/how-to-clean-a-mattress-featured.jpg">
                <img class="hover:opacity-75" src="https://i.ytimg.com/vi/s5SzwRNWlKk/maxresdefault.jpg">
                <img class="hover:opacity-75" src="https://sirv.mattressnextday.co.uk/assets/articles/wordpress_uploads/vinegar-for-cleaning-mattress-scaled.jpeg">
                <img class="hover:opacity-75" src="https://www.certifiedcleancare.com/wp-content/themes/yootheme/cache/9a/mattress-cleaning-service-in-georgia-9a80a7fc.jpeg">
                <img class="hover:opacity-75" src="https://www.cnet.com/a/img/resize/047417800e4f1aa7f2e635262c9d825c22dbdace/hub/2021/08/02/5f66ff9f-04db-47a8-b004-a31fbb02f870/gettyimages-1151589153.jpg?auto=webp&fit=crop&height=675&width=1200">
            </div>
        </div>
    </section>
    <!-- ====== Pricing Section End -->
    <hr class="hr-1">


    <!-- PLUMBING WORKS -->
    <section class="bg-white mt-4">
        <div class="md:flex shadow-lg  mx-6 md:mx-auto my-40 max-w-lg md:max-w-2xl h-64">
            <img class="h-full w-full md:w-1/3  object-cover rounded-lg rounded-r-none pb-5/6" src="https://www.everyworks.com/wp-content/uploads/2024/01/bona-vinyl-floor-cleaning-machine-everyworks-singapore.jpg" alt="bag">
            <div class="w-full md:w-2/3 px-4 py-4 bg-white rounded-lg">
                <p class="text-sm text-gray-700 mt-4">
                    At Everyworks Singapore, we use a combination of deep cleaning methods and a special scrubber machine to give your floor a thorough and gentle treatment.
                    Here are some of the features of the equipment we use:
                    Pressure adjustment up to 40 kgs for effective deep cleaning.
                    Low-foaming machine to deliver delicate care to sensitive floors.
                    Two counter-rotating brushes that scrub the floor from different angles.
                    Powerful suction that collects dirty water from the floor using rubber squeegees.
                    Specially designed to reach closer to the walls and corners of the room.
                </p>
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
    <footer class="footer">
        <section class="pt-16 pb-7 px-2">
            <div class="mx-auto max-w-7xl px-4 lg:px-12 p-12 rounded-2xl bg-neutral-100">
                <div class="flex flex-col min-[830px]:flex-row items-center justify-between gap-6 pb-10 border-b-2 border-gray-300">
                    <a href="https://pagedone.io/" class="py-1.5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="166" height="33" viewBox="0 0 166 33" fill="none">
                            <path d="M47.7101 24.7231V7H55.0833C55.2568 7 55.4799 7.00821 55.7525 7.02462C56.0251 7.03282 56.2771 7.05744 56.5084 7.09846C57.541 7.25436 58.392 7.59487 59.0611 8.12C59.7386 8.64513 60.2384 9.30974 60.5606 10.1138C60.891 10.9097 61.0562 11.7959 61.0562 12.7723C61.0562 13.7405 60.891 14.6267 60.5606 15.4308C60.2301 16.2267 59.7262 16.8872 59.0487 17.4123C58.3796 17.9374 57.5328 18.2779 56.5084 18.4338C56.2771 18.4667 56.021 18.4913 55.7401 18.5077C55.4675 18.5241 55.2485 18.5323 55.0833 18.5323H50.6965V24.7231H47.7101ZM50.6965 15.7631H54.9594C55.1246 15.7631 55.3105 15.7549 55.517 15.7385C55.7236 15.7221 55.9136 15.6892 56.0871 15.64C56.5827 15.5169 56.971 15.2995 57.2519 14.9877C57.541 14.6759 57.7435 14.3231 57.8591 13.9292C57.983 13.5354 58.045 13.1497 58.045 12.7723C58.045 12.3949 57.983 12.0092 57.8591 11.6154C57.7435 11.2133 57.541 10.8564 57.2519 10.5446C56.971 10.2328 56.5827 10.0154 56.0871 9.89231C55.9136 9.84308 55.7236 9.81436 55.517 9.80615C55.3105 9.78974 55.1246 9.78154 54.9594 9.78154H50.6965V15.7631Z" fill="#111827" />
                            <path d="M66.6946 25.0923C65.728 25.0923 64.9101 24.9118 64.241 24.5508C63.5718 24.1815 63.0637 23.6933 62.7168 23.0862C62.378 22.479 62.2087 21.8103 62.2087 21.08C62.2087 20.44 62.3161 19.8656 62.5309 19.3569C62.7457 18.84 63.0761 18.3969 63.5222 18.0277C63.9684 17.6503 64.5466 17.3426 65.2571 17.1046C65.7941 16.9323 66.422 16.7764 67.1407 16.6369C67.8677 16.4974 68.6525 16.3703 69.4952 16.2554C70.3461 16.1323 71.2342 16.001 72.1594 15.8615L71.0937 16.4646C71.102 15.5456 70.8955 14.8687 70.4741 14.4338C70.0528 13.999 69.3423 13.7815 68.3427 13.7815C67.7396 13.7815 67.1572 13.921 66.5955 14.2C66.0337 14.479 65.6413 14.959 65.4182 15.64L62.692 14.7908C63.0224 13.6667 63.6503 12.7641 64.5756 12.0831C65.5091 11.4021 66.7648 11.0615 68.3427 11.0615C69.5323 11.0615 70.5774 11.2544 71.4779 11.64C72.3866 12.0256 73.0599 12.6574 73.4978 13.5354C73.7374 14.0031 73.8819 14.4831 73.9315 14.9754C73.9811 15.4595 74.0059 15.9887 74.0059 16.5631V24.7231H71.3911V21.8431L71.8249 22.3108C71.2218 23.2708 70.5154 23.9764 69.7058 24.4277C68.9045 24.8708 67.9007 25.0923 66.6946 25.0923ZM67.2894 22.7292C67.9668 22.7292 68.5451 22.6103 69.0243 22.3723C69.5034 22.1344 69.8835 21.8431 70.1643 21.4985C70.4535 21.1538 70.6476 20.8297 70.7468 20.5262C70.9037 20.1487 70.9905 19.7179 71.007 19.2338C71.0318 18.7415 71.0442 18.3436 71.0442 18.04L71.9612 18.3108C71.0607 18.4503 70.2883 18.5733 69.6439 18.68C68.9995 18.7867 68.446 18.8892 67.9834 18.9877C67.5207 19.0779 67.1118 19.1805 66.7565 19.2954C66.4096 19.4185 66.1163 19.5621 65.8767 19.7262C65.6371 19.8903 65.4513 20.079 65.3191 20.2923C65.1952 20.5056 65.1332 20.7559 65.1332 21.0431C65.1332 21.3713 65.2158 21.6626 65.381 21.9169C65.5463 22.1631 65.7858 22.36 66.0998 22.5077C66.422 22.6554 66.8185 22.7292 67.2894 22.7292Z" fill="#111827" />
                            <path d="M82.6101 31C81.8666 31 81.152 30.8851 80.4663 30.6554C79.7889 30.4256 79.1776 30.0933 78.6323 29.6585C78.0871 29.2318 77.641 28.7149 77.294 28.1077L80.045 26.7538C80.3011 27.2379 80.6605 27.5949 81.1231 27.8246C81.594 28.0626 82.0938 28.1815 82.6225 28.1815C83.2421 28.1815 83.7956 28.0708 84.2831 27.8492C84.7705 27.6359 85.1464 27.3159 85.4107 26.8892C85.6833 26.4708 85.8114 25.9456 85.7949 25.3138V21.5354H86.1666V11.4308H88.7813V25.3631C88.7813 25.6995 88.7648 26.0195 88.7318 26.3231C88.707 26.6349 88.6616 26.9385 88.5955 27.2338C88.3972 28.0954 88.0172 28.801 87.4554 29.3508C86.8936 29.9087 86.1956 30.3231 85.3612 30.5938C84.535 30.8646 83.618 31 82.6101 31ZM82.3499 25.0923C81.119 25.0923 80.045 24.7846 79.128 24.1692C78.211 23.5538 77.5005 22.7169 76.9966 21.6585C76.4926 20.6 76.2407 19.4062 76.2407 18.0769C76.2407 16.7313 76.4926 15.5333 76.9966 14.4831C77.5088 13.4246 78.2316 12.5918 79.1652 11.9846C80.0987 11.3692 81.1975 11.0615 82.4614 11.0615C83.7337 11.0615 84.7994 11.3692 85.6586 11.9846C86.526 12.5918 87.1828 13.4246 87.6289 14.4831C88.075 15.5415 88.2981 16.7395 88.2981 18.0769C88.2981 19.3979 88.075 20.5918 87.6289 21.6585C87.1828 22.7169 86.5177 23.5538 85.6338 24.1692C84.7498 24.7846 83.6552 25.0923 82.3499 25.0923ZM82.8084 22.4338C83.6098 22.4338 84.2541 22.2533 84.7416 21.8923C85.2372 21.5231 85.5966 21.0103 85.8197 20.3538C86.051 19.6974 86.1666 18.9385 86.1666 18.0769C86.1666 17.2072 86.051 16.4482 85.8197 15.8C85.5966 15.1436 85.2455 14.6349 84.7663 14.2738C84.2872 13.9046 83.6676 13.72 82.9075 13.72C82.1062 13.72 81.4453 13.9169 80.9248 14.3108C80.4044 14.6964 80.0202 15.2215 79.7724 15.8862C79.5245 16.5426 79.4006 17.2728 79.4006 18.0769C79.4006 18.8892 79.5204 19.6277 79.76 20.2923C80.0078 20.9487 80.3837 21.4697 80.8877 21.8554C81.3916 22.241 82.0318 22.4338 82.8084 22.4338Z" fill="#111827" />
                            <path d="M98.0929 25.0923C96.7381 25.0923 95.5485 24.801 94.5241 24.2185C93.4997 23.6359 92.6983 22.8277 92.12 21.7938C91.55 20.76 91.265 19.5703 91.265 18.2246C91.265 16.7723 91.5458 15.5128 92.1076 14.4462C92.6694 13.3713 93.4501 12.5385 94.4497 11.9477C95.4493 11.3569 96.6059 11.0615 97.9195 11.0615C99.3074 11.0615 100.485 11.3856 101.451 12.0338C102.426 12.6738 103.149 13.5805 103.62 14.7538C104.091 15.9272 104.268 17.3097 104.153 18.9015H101.191V17.8185C101.183 16.3744 100.927 15.32 100.423 14.6554C99.9187 13.9908 99.1256 13.6585 98.0434 13.6585C96.8207 13.6585 95.912 14.0359 95.3171 14.7908C94.7223 15.5374 94.4249 16.6328 94.4249 18.0769C94.4249 19.4226 94.7223 20.4646 95.3171 21.2031C95.912 21.9415 96.7794 22.3108 97.9195 22.3108C98.6547 22.3108 99.2867 22.1508 99.8154 21.8308C100.352 21.5026 100.765 21.0308 101.055 20.4154L104.004 21.3015C103.492 22.4995 102.699 23.4308 101.625 24.0954C100.559 24.76 99.3817 25.0923 98.0929 25.0923ZM93.4831 18.9015V16.6615H102.69V18.9015H93.4831Z" fill="#111827" />
                            <path d="M112.035 25.0923C110.805 25.0923 109.731 24.7846 108.814 24.1692C107.897 23.5538 107.186 22.7169 106.682 21.6585C106.178 20.6 105.926 19.4062 105.926 18.0769C105.926 16.7313 106.178 15.5333 106.682 14.4831C107.194 13.4246 107.917 12.5918 108.851 11.9846C109.784 11.3692 110.883 11.0615 112.147 11.0615C113.419 11.0615 114.485 11.3692 115.344 11.9846C116.212 12.5918 116.868 13.4246 117.314 14.4831C117.761 15.5415 117.984 16.7395 117.984 18.0769C117.984 19.3979 117.761 20.5918 117.314 21.6585C116.868 22.7169 116.203 23.5538 115.319 24.1692C114.435 24.7846 113.341 25.0923 112.035 25.0923ZM112.494 22.4338C113.295 22.4338 113.94 22.2533 114.427 21.8923C114.923 21.5231 115.282 21.0103 115.505 20.3538C115.737 19.6974 115.852 18.9385 115.852 18.0769C115.852 17.2072 115.737 16.4482 115.505 15.8C115.282 15.1436 114.931 14.6349 114.452 14.2738C113.973 13.9046 113.353 13.72 112.593 13.72C111.792 13.72 111.131 13.9169 110.61 14.3108C110.09 14.6964 109.706 15.2215 109.458 15.8862C109.21 16.5426 109.086 17.2728 109.086 18.0769C109.086 18.8892 109.206 19.6277 109.446 20.2923C109.693 20.9487 110.069 21.4697 110.573 21.8554C111.077 22.241 111.717 22.4338 112.494 22.4338ZM115.852 24.7231V15.3938H115.48V7H118.492V24.7231H115.852Z" fill="#111827" />
                            <path d="M127.629 25.0923C126.291 25.0923 125.122 24.7928 124.122 24.1938C123.123 23.5949 122.346 22.7703 121.793 21.72C121.247 20.6615 120.975 19.4472 120.975 18.0769C120.975 16.6821 121.256 15.4595 121.817 14.4092C122.379 13.359 123.16 12.5385 124.159 11.9477C125.159 11.3569 126.316 11.0615 127.629 11.0615C128.976 11.0615 130.149 11.361 131.149 11.96C132.148 12.559 132.925 13.3877 133.478 14.4462C134.032 15.4964 134.308 16.7067 134.308 18.0769C134.308 19.4554 134.028 20.6738 133.466 21.7323C132.912 22.7826 132.136 23.6072 131.136 24.2062C130.137 24.7969 128.968 25.0923 127.629 25.0923ZM127.629 22.3108C128.819 22.3108 129.703 21.9169 130.281 21.1292C130.859 20.3415 131.149 19.3241 131.149 18.0769C131.149 16.7887 130.855 15.7631 130.269 15C129.682 14.2287 128.802 13.8431 127.629 13.8431C126.828 13.8431 126.167 14.0236 125.646 14.3846C125.134 14.7374 124.754 15.2338 124.506 15.8738C124.259 16.5056 124.135 17.24 124.135 18.0769C124.135 19.3651 124.428 20.3949 125.014 21.1662C125.609 21.9292 126.481 22.3108 127.629 22.3108Z" fill="#111827" />
                            <path d="M146.048 24.7231V18.3231C146.048 17.9046 146.019 17.441 145.961 16.9323C145.903 16.4236 145.767 15.9354 145.552 15.4677C145.346 14.9918 145.032 14.6021 144.61 14.2985C144.197 13.9949 143.635 13.8431 142.925 13.8431C142.545 13.8431 142.169 13.9046 141.797 14.0277C141.426 14.1508 141.087 14.3641 140.781 14.6677C140.484 14.9631 140.244 15.3733 140.062 15.8985C139.881 16.4154 139.79 17.08 139.79 17.8923L138.018 17.1415C138.018 16.0092 138.237 14.9836 138.675 14.0646C139.121 13.1456 139.773 12.4154 140.632 11.8738C141.492 11.3241 142.549 11.0492 143.805 11.0492C144.796 11.0492 145.614 11.2133 146.258 11.5415C146.903 11.8697 147.415 12.2882 147.795 12.7969C148.175 13.3056 148.456 13.8472 148.638 14.4215C148.819 14.9959 148.935 15.5415 148.985 16.0585C149.042 16.5672 149.071 16.9815 149.071 17.3015V24.7231H146.048ZM136.766 24.7231V11.4308H139.43V15.5538H139.79V24.7231H136.766Z" fill="#111827" />
                            <path d="M157.924 25.0923C156.569 25.0923 155.379 24.801 154.355 24.2185C153.331 23.6359 152.529 22.8277 151.951 21.7938C151.381 20.76 151.096 19.5703 151.096 18.2246C151.096 16.7723 151.377 15.5128 151.939 14.4462C152.5 13.3713 153.281 12.5385 154.281 11.9477C155.28 11.3569 156.437 11.0615 157.75 11.0615C159.138 11.0615 160.316 11.3856 161.282 12.0338C162.257 12.6738 162.98 13.5805 163.451 14.7538C163.922 15.9272 164.099 17.3097 163.984 18.9015H161.022V17.8185C161.014 16.3744 160.758 15.32 160.254 14.6554C159.75 13.9908 158.957 13.6585 157.874 13.6585C156.652 13.6585 155.743 14.0359 155.148 14.7908C154.553 15.5374 154.256 16.6328 154.256 18.0769C154.256 19.4226 154.553 20.4646 155.148 21.2031C155.743 21.9415 156.61 22.3108 157.75 22.3108C158.486 22.3108 159.118 22.1508 159.646 21.8308C160.183 21.5026 160.596 21.0308 160.886 20.4154L163.835 21.3015C163.323 22.4995 162.53 23.4308 161.456 24.0954C160.39 24.76 159.213 25.0923 157.924 25.0923ZM153.314 18.9015V16.6615H162.521V18.9015H153.314Z" fill="#111827" />
                            <path d="M25.3902 11.8941C26.0296 12.5063 26.0458 13.5149 25.4264 14.1468L19.6357 20.054C19.0162 20.686 17.9956 20.702 17.3562 20.0898C16.7167 19.4776 16.7005 18.469 17.32 17.8371L23.1106 11.9299C23.7301 11.2979 24.7507 11.2819 25.3902 11.8941Z" fill="url(#paint0_linear_551_319)" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.988159 4.54673C0.988159 2.03564 3.04801 0 5.58896 0H22.4006V0.00124069C29.8074 0.0998525 35.7811 6.06429 35.7811 13.4075C35.7811 20.8123 29.7069 26.8151 22.2141 26.8151C19.5425 26.8151 17.0512 26.0519 14.9514 24.7342L7.53733 31.9057C5.09801 34.2652 0.988159 32.5573 0.988159 29.1841V4.54673ZM12.4394 22.7055C10.0911 20.295 8.64709 17.0179 8.64709 13.4075C8.64709 12.5277 9.36884 11.8144 10.2592 11.8144C11.1495 11.8144 11.8712 12.5277 11.8712 13.4075C11.8712 19.0526 16.5019 23.6288 22.2141 23.6288C27.9263 23.6288 32.5569 19.0526 32.5569 13.4075C32.5569 7.76248 27.9263 3.18626 22.2141 3.18626H5.58896C4.82866 3.18626 4.21231 3.79536 4.21231 4.54673V29.1841C4.21231 29.7351 4.88363 30.014 5.28209 29.6286L12.4394 22.7055Z" fill="url(#paint1_linear_551_319)" />
                            <defs>
                                <linearGradient id="paint0_linear_551_319" x1="35.7811" y1="1.89063" x2="1.90742" y2="33.2568" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#7C3AED" />
                                    <stop offset="0.993738" stop-color="#4F46E5" />
                                </linearGradient>
                                <linearGradient id="paint1_linear_551_319" x1="35.7811" y1="1.89063" x2="1.90742" y2="33.2568" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#7C3AED" />
                                    <stop offset="0.993738" stop-color="#4F46E5" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </a>
                    <ul class="flex flex-col sm:flex-row items-center gap-5 sm:gap-12">
                        <li><a href="/" class="text-xl font-serif font-bold text-gray-800 transition-all duration-300 hover:text-indigo-600 border-solid border-b-4 border-indigo-500 focus-within:text-indigo-600 focus-within:outline-0">Home</a>
                        </li>
                        <li><a href="/about" class="text-xl font-serif font-bold text-gray-800 transition-all duration-300 hover:text-indigo-600 focus-within:text-indigo-600 border-solid border-b-4 border-indigo-500  focus-within:outline-0">About</a>
                        </li>
                        <li><a href="/service" class="text-xl font-serif font-bold text-gray-800 transition-all duration-300 hover:text-indigo-600 focus-within:text-indigo-600 border-solid border-b-4 border-indigo-500  focus-within:outline-0">Service</a>
                        </li>
                        <li><a href="/price" class="text-xl font-serif font-bold text-gray-800 transition-all duration-300 hover:text-indigo-600 focus-within:text-indigo-600 border-solid border-b-4 border-indigo-500  focus-within:outline-0">Price</a>
                        </li>
                        <li><a href="/works" class="text-xl font-serif font-bold text-gray-800 transition-all duration-300 hover:text-indigo-600 focus-within:text-indigo-600 border-solid border-b-4 border-indigo-500  focus-within:outline-0">Works</a>
                        </li>
                    </ul>
                </div>
                <div class="pt-7 flex flex-col min-[520px]:flex-row items-center justify-between gap-6">
                    <div class="flex items-center gap-4">
                        <a href="https://x.com/?lang=en" target="_blank" class="border border-gray-500 p-2 rounded-full aspect-square text-gray-700 transition-all duration-500 hover:text-black-600 hover:border-black-600 focus-within:outline-0 focus-within:text-indigo-600 focus-within:border-indigo-600">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M11.3214 8.93666L16.4919 3.05566H15.2667L10.7772 8.16205L7.1914 3.05566H3.05566L8.47803 10.7774L3.05566 16.9446H4.28097L9.022 11.552L12.8088 16.9446H16.9446L11.3211 8.93666H11.3214ZM9.64322 10.8455L9.09382 10.0765L4.72246 3.95821H6.60445L10.1322 8.8959L10.6816 9.66481L15.2672 16.083H13.3852L9.64322 10.8458V10.8455Z" fill="currentColor" />
                            </svg>
                        </a>
                        <a href="https://www.instagram.com/" target="_blank" class="border border-gray-500 p-2 rounded-full aspect-square text-gray-700 transition-all duration-500 hover:text-pink-700 hover:border-pink-700 focus-within:outline-0 focus-within:text-indigo-600 focus-within:border-indigo-600">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M7.7117 9.93956C7.7117 8.66117 8.76298 7.62456 10.0601 7.62456C11.3573 7.62456 12.4092 8.66117 12.4092 9.93956C12.4092 11.218 11.3573 12.2546 10.0601 12.2546C8.76298 12.2546 7.7117 11.218 7.7117 9.93956ZM6.44187 9.93956C6.44187 11.909 8.06177 13.5055 10.0601 13.5055C12.0585 13.5055 13.6784 11.909 13.6784 9.93956C13.6784 7.97012 12.0585 6.37367 10.0601 6.37367C8.06177 6.37367 6.44187 7.97012 6.44187 9.93956ZM12.9761 6.23228C12.976 6.3971 13.0256 6.55824 13.1184 6.69532C13.2113 6.83239 13.3433 6.93926 13.4978 7.00239C13.6523 7.06552 13.8223 7.08209 13.9863 7.05C14.1503 7.01791 14.301 6.93861 14.4193 6.82211C14.5377 6.70561 14.6182 6.55716 14.6509 6.39552C14.6836 6.23388 14.667 6.06632 14.603 5.91402C14.5391 5.76173 14.4307 5.63153 14.2917 5.53991C14.1527 5.44829 13.9893 5.39935 13.822 5.39928H13.8217C13.5975 5.39939 13.3825 5.48717 13.224 5.64336C13.0654 5.79954 12.9763 6.01136 12.9761 6.23228ZM7.21337 15.5922C6.52637 15.5613 6.15296 15.4486 5.90481 15.3533C5.57583 15.2271 5.3411 15.0767 5.0943 14.8338C4.8475 14.591 4.69474 14.3598 4.56722 14.0356C4.47049 13.7912 4.35605 13.4231 4.32482 12.746C4.29066 12.014 4.28384 11.7941 4.28384 9.93962C4.28384 8.08512 4.29123 7.86584 4.32482 7.13323C4.35611 6.45617 4.47139 6.08878 4.56722 5.84362C4.6953 5.51939 4.84784 5.28806 5.0943 5.04484C5.34076 4.80162 5.57526 4.65106 5.90481 4.5254C6.15285 4.43006 6.52637 4.31728 7.21337 4.28651C7.95613 4.25284 8.17925 4.24612 10.0601 4.24612C11.9411 4.24612 12.1644 4.25339 12.9078 4.28651C13.5948 4.31734 13.9676 4.43095 14.2163 4.5254C14.5453 4.65106 14.7801 4.80195 15.0268 5.04484C15.2736 5.28773 15.4258 5.51939 15.5539 5.84362C15.6507 6.08806 15.7651 6.45617 15.7963 7.13323C15.8305 7.86584 15.8373 8.08512 15.8373 9.93962C15.8373 11.7941 15.8305 12.0134 15.7963 12.746C15.765 13.4231 15.65 13.7911 15.5539 14.0356C15.4258 14.3598 15.2733 14.5912 15.0268 14.8338C14.7804 15.0765 14.5453 15.2271 14.2163 15.3533C13.9683 15.4486 13.5948 15.5614 12.9078 15.5922C12.165 15.6258 11.9419 15.6326 10.0601 15.6326C8.1784 15.6326 7.9559 15.6258 7.21337 15.5922ZM7.15503 3.03717C6.40489 3.07084 5.8923 3.18806 5.44465 3.35973C4.98105 3.53701 4.58859 3.77484 4.19641 4.16073C3.80423 4.54662 3.56352 4.93401 3.38364 5.39089C3.20945 5.83234 3.09051 6.33723 3.05635 7.07651C3.02162 7.81695 3.01367 8.05367 3.01367 9.93956C3.01367 11.8255 3.02162 12.0622 3.05635 12.8026C3.09051 13.542 3.20945 14.0468 3.38364 14.4882C3.56352 14.9448 3.80429 15.3327 4.19641 15.7184C4.58853 16.1041 4.98105 16.3416 5.44465 16.5194C5.89314 16.6911 6.40489 16.8083 7.15503 16.842C7.90675 16.8756 8.14655 16.884 10.0601 16.884C11.9737 16.884 12.2139 16.8762 12.9653 16.842C13.7155 16.8083 14.2277 16.6911 14.6756 16.5194C15.139 16.3416 15.5317 16.1043 15.9239 15.7184C16.3161 15.3325 16.5563 14.9448 16.7367 14.4882C16.9108 14.0468 17.0304 13.5419 17.064 12.8026C17.0981 12.0616 17.1061 11.8255 17.1061 9.93956C17.1061 8.05367 17.0981 7.81695 17.064 7.07651C17.0298 6.33717 16.9108 5.83206 16.7367 5.39089C16.5563 4.93428 16.3154 4.54723 15.9239 4.16073C15.5323 3.77423 15.139 3.53701 14.6762 3.35973C14.2277 3.18806 13.7154 3.07028 12.9658 3.03717C12.2145 3.00351 11.9743 2.99512 10.0607 2.99512C8.14712 2.99512 7.90675 3.00295 7.15503 3.03717Z" fill="currentColor" />
                            </svg>
                        </a>
                        <a href="https://www.linkedin.com/feed/" target="_blank" class="border border-gray-500 p-2 rounded-full aspect-square text-gray-700 transition-all duration-500 hover:text-blue-600 hover:border-blue-600 focus-within:outline-0 focus-within:text-indigo-600 focus-within:border-indigo-600">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M6.87818 15.5556V7.87128H4.31767V15.5556H6.87845H6.87818ZM5.59846 6.82229C6.49118 6.82229 7.04695 6.23223 7.04695 5.49481C7.03024 4.74059 6.49118 4.16699 5.61544 4.16699C4.7391 4.16699 4.16675 4.74059 4.16675 5.49474C4.16675 6.23216 4.72232 6.82223 5.58168 6.82223H5.59826L5.59846 6.82229ZM8.29546 15.5556H10.8558V11.2648C10.8558 11.0354 10.8725 10.8055 10.9401 10.6417C11.1251 10.1826 11.5464 9.70742 12.2539 9.70742C13.1802 9.70742 13.551 10.412 13.551 11.4451V15.5556H16.1112V11.1497C16.1112 8.78945 14.8482 7.69112 13.1636 7.69112C11.7825 7.69112 11.1759 8.46114 10.8389 8.9856H10.856V7.87154H8.29559C8.32901 8.59243 8.29539 15.5559 8.29539 15.5559L8.29546 15.5556Z" fill="currentColor" />
                            </svg>
                        </a>
                        <a href="https://www.youtube.com/" target="_blank" class="border border-gray-500 p-2 rounded-full aspect-square text-gray-700 transition-all duration-500 hover:text-red-600 hover:border-red-600 focus-within:outline-0 focus-within:text-indigo-600 focus-within:border-indigo-600">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.9329 5.13919C16.5667 5.31036 17.0648 5.80978 17.2332 6.44286C17.5396 7.59178 17.5396 9.99044 17.5396 9.99044C17.5396 9.99044 17.5396 12.3891 17.2332 13.538C17.0625 14.1734 16.5643 14.6729 15.9329 14.8417C14.7869 15.1489 10.1889 15.1489 10.1889 15.1489C10.1889 15.1489 5.5932 15.1489 4.44487 14.8417C3.81106 14.6705 3.3129 14.1711 3.14451 13.538C2.83813 12.3891 2.83813 9.99044 2.83813 9.99044C2.83813 9.99044 2.83813 7.59178 3.14451 6.44286C3.31524 5.80744 3.8134 5.30801 4.44487 5.13919C5.5932 4.83203 10.1889 4.83203 10.1889 4.83203C10.1889 4.83203 14.7869 4.83203 15.9329 5.13919ZM12.5393 9.99044L8.72007 12.2015V7.77936L12.5393 9.99044Z" fill="currentColor" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>
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

    function showSubmenu() {
        document.getElementById('decking-submenu').classList.remove('hidden-submenu');
    }

    function hideSubmenu() {
        document.getElementById('decking-submenu').classList.add('hidden-submenu');
    }
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

    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }

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
    const mobileMenuButton = document.querySelector('button[aria-controls="mobile-menu"]');
    const mobileMenu = document.getElementById('mobile-menu');

    mobileMenuButton.addEventListener('click', () => {
        const expanded = mobileMenuButton.getAttribute('aria-expanded') === 'true' || false;
        mobileMenuButton.setAttribute('aria-expanded', !expanded);
        mobileMenu.classList.toggle('hidden');
    });

    function showSubMenu(event, submenuId) {
        const submenu = document.getElementById(submenuId);
        if (submenu) {
            submenu.classList.remove('hidden');
        }
    }

    // Function to hide submenu on mouse leave
    function toggleSubMenu(submenuId) {
        const submenu = document.getElementById(submenuId);
        if (submenu) {
            submenu.classList.toggle('hidden');
        }
    }
    window.addEventListener('scroll', function() {
        var mainNav = document.getElementById('main-nav');
        if (window.scrollY > 0) {
            mainNav.classList.add('scrolled');
        } else {
            mainNav.classList.remove('scrolled');
        }
    });

    function toggleSubMenu(submenuId, arrowId) {
        var submenu = document.getElementById(submenuId);
        var arrow = document.getElementById(arrowId);
        if (submenu.classList.contains('hidden')) {
            submenu.classList.remove('hidden');
            arrow.classList.add('rotate-180');
        } else {
            submenu.classList.add('hidden');
            arrow.classList.remove('rotate-180');
        }
    }
</script>
