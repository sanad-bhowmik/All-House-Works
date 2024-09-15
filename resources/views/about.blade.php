<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AllHouseWorks | About</title>
    <!-- Link to Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="icon" href="{{ url('img/favicon.ico') }}" type="image/x-icon">
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

    /* General Styles */
    .hover-border-top:hover {
        border-top: 4px solid #B48F57;
        border-top: 4px solid #FFFFFF;
    }

    .group:hover .group-hover\:block {
        display: block;
    }

    #main-nav {
        z-index: 50;
    }

    #banner-section {
        z-index: 10;
    }

    #main-nav .group:hover svg {
        transform: rotate(180deg);
    }

    /* New Nav */
    #main-nav .relative {
        position: relative;
    }

    #main-nav .absolute.left-0 {
        left: -100%;
    }

    #main-nav .group:hover .absolute.left-0 {
        left: 100%;
    }

    #main-nav .group:hover .transform {
        display: block;
        visibility: visible;
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
        background-color: #f69918;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }


    @media (min-width: 641px) {

        /* Adjust min-width as needed */
        #kol {
            margin-left: 15%;
        }
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
        <div class="max-w-7xl mx-auto px-4">
            <div class="mt-10 flex flex-wrap justify-center md:space-x-64 space-y-4 md:space-y-0">
                <div class="flex items-center w-full md:w-auto" style="height: auto; width: auto;">
                    <div class="p-2">
                        <img src="{{ url('img/whatsapp.png') }}" alt="">
                    </div>
                    <div class="flex flex-col justify-center">
                        <p class="text-lg font-semibold" style="font-family: 'Josefin Sans';">WHATSAPP NUMBER</p>
                        <p class="text-gray-500">+65 9658 5757</p>
                    </div>
                </div>
                <div class="w-full md:w-auto flex justify-center">
                    <img src="{{ url('img/icon2.png') }}" alt="" class="h-40">
                </div>
                <form onsubmit="checkAndRedirect(event)" class="flex items-center w-full md:w-auto space-x-2">
                    <div class="relative w-full md:w-auto" style="border-bottom: 3px solid #939090;">
                        <div class="flex border border-gray-300">
                            <input id="search-input" type="text" placeholder="ENTER KEYWORD" class="h-12 pl-10 pr-4 py-2 w-full md:w-auto text-black text-base rounded-l-lg focus:outline-none focus:border-brown-500 transition-colors duration-300 ease-in-out">
                            <button type="submit" class="relative flex items-center justify-center w-12 h-12 bg-brown-500 text-white rounded-r-lg hover:bg-brown-700 focus:outline-none transition-all duration-300 ease-in-out transform hover:scale-105">
                                <svg height="64px" width="64px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-276.79 -276.79 1039.18 1039.18" xml:space="preserve" fill="#000000">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <g>
                                            <g>
                                                <path style="fill:#E64C3D;" d="M447.5,477.85l30.3-30.3c4-4,4-10.4,0-14.4l-149.2-149.2l-44.7,44.7l149.2,149.2 C437.1,481.85,443.5,481.85,447.5,477.85z"></path>
                                                <path style="fill:#2C2F33;" d="M163.4,67.05c-53.2,0-96.5,43.3-96.5,96.5c0,5,4.1,9.1,9.1,9.1s9.1-4.1,9.1-9.1 c0-43.2,35.1-78.3,78.3-78.3c5,0,9.1-4.1,9.1-9.1C172.5,71.05,168.4,67.05,163.4,67.05z"></path>
                                                <path style="fill:#2C2F33;" d="M335,277.55c-3.5-3.5-9.3-3.5-12.8,0l-15.9,15.9l-21.1-21.1c25.9-28.9,41.7-67.1,41.7-108.9 c0-90.1-73.3-163.4-163.4-163.4S0,73.35,0,163.45s73.3,163.4,163.4,163.4c41.8,0,79.9-15.8,108.9-41.7l21.1,21.1l-15.9,15.9 c-1.7,1.7-2.7,4-2.7,6.4s1,4.7,2.7,6.4l141.9,141.9c5.6,5.6,13,8.7,20.9,8.7s15.3-3.1,20.9-8.7l15.7-15.7c5.6-5.6,8.7-13,8.7-20.9 s-3.1-15.3-8.7-20.9L335,277.55z M18.2,163.45c0-80.1,65.2-145.3,145.3-145.3s145.3,65.2,145.3,145.3s-65.2,145.3-145.3,145.3 S18.2,243.55,18.2,163.45z M464.1,448.45l-15.7,15.7c-2.2,2.2-5,3.4-8.1,3.4s-5.9-1.2-8.1-3.4l-135.5-135.5l31.9-31.9l135.5,135.5 c2.2,2.2,3.4,5,3.4,8.1S466.2,446.35,464.1,448.45z"></path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </button>
                        </div>
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
    <script>
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
    </script>
    <!-- Scroll Up -->
    <!-- Header -->
    <nav id="main-nav" class="bg-white shadow-lg relative z-50 sticky scrolled">
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 border-t" style="background-color: #f69918;">
            <div class="relative flex items-center justify-between h-16" id="kol">
                <div class="inset-y-0 left-0 flex items-center sm:hidden">
                    <button id="mobile-menu-toggle" type="button" class="inline-flex ml-2 bg-white items-center justify-center p-2 rounded-md text-gray-800 hover:text-white hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                        <span class="sr-only">Open main menu</span>
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
                <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start ">
                    <div class="hidden sm:block sm:ml-6">
                        <div class="flex space-x-16">
                            <div class=" " style="border-top: 4px solid rgb(255 255 255);">
                                <a href="/" class="text-gray-900 hover:text-brown-500 px-3 rounded-md text-lg font-medium">Home</a>
                            </div>
                            <div class="relative group hover-border-top">
                                <a href="/about" class="text-gray-900 hover:text-brown-500 px-3 rounded-md text-lg font-medium flex items-center">About Us
                                    <svg class="ml-1 transform transition-transform duration-500 ease-in-out" style="width: 1rem; height: 1rem;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M10 12.59l-4.95-4.95a1.41 1.41 0 10-2 2l7.45 7.5a1.41 1.41 0 002 0l7.45-7.5a1.41 1.41 0 10-2-2L10 12.59z" />
                                    </svg>
                                </a>
                                <div class="absolute hidden group-hover:block text-white bg-gray-800 shadow-lg rounded-md w-40 z-50">
                                    <a href="/review" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Review</a>
                                    <a href="/brands" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Our Brands</a>
                                    <a href="/mission" class="block px-4 py-2 hover:bg-gray-200 hover:text-black">Mission</a>
                                </div>
                            </div>
                            <div class="relative group  hover-border-top">
                                <a href="service" class="text-gray-900 hover:text-brown-500 px-3 rounded-md text-lg font-medium flex items-center">Service
                                    <svg class="ml-1 transform transition-transform duration-500 ease-in-out" style="width: 1rem; height: 1rem;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M10 12.59l-4.95-4.95a1.41 1.41 0 10-2 2l7.45 7.5a1.41 1.41 0 002 0l7.45-7.5a1.41 1.41 0 10-2-2L10 12.59z" />
                                    </svg>
                                </a>
                                <div class="absolute hidden group-hover:block text-white bg-gray-800 shadow-lg rounded-md w-40 z-50">
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

                                            <!-- Parquet Polishing -->
                                            <a href="/parquetPolish" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Parquet Polishing</a>
                                            <!-- Parquet Polishing -->

                                            <!-- Parquet Floor Polishing -->
                                            <a href="/parquetVarnish" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Parquet Floor Polishing</a>
                                            <!-- Parquet Floor Polishing -->

                                            <!-- Wood Polishing -->
                                            <a href="/woodPolish" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Wood Polishing</a>
                                            <!-- Wood Polishing -->

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
                            <div class="hover-border-top ">
                                <a href="/price" class="text-gray-900 hover:text-brown-500 px-3 rounded-md text-lg font-medium" style="margin-top: 2px;">Price</a>
                            </div>
                            <div class="hover-border-top ">
                                <a href="/works" class="text-gray-900 hover:text-brown-500 px-3 rounded-md text-lg font-medium" style="margin-top: 2px;">Works</a>
                            </div>
                            <div class="hover-border-top">
                                <a href="/contact" class="text-gray-900 hover:text-brown-500 px-3 rounded-md text-lg font-medium" style="margin-top: 2px;">Contact
                                    Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile -->
            <div id="menu-overlay" style="position: fixed; top: 0; left: 0; height: 100%; width: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 999; display: none;"></div>

            <!-- Main Side Navigation -->
            <div id="mobile-menu" style="position: fixed; top: 0; left: -100%; height: 100%; width: 300px; background-color: white; z-index: 1000; transition: left 0.3s ease-in-out;">
                <div style="padding: 16px;">
                    <button id="close-menu" style="font-size: 33px;margin-left: 94%;margin-top: -13px;margin-bottom: 5%;">&times;</button>
                    <a href="/">
                        <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;border-top: 1px solid #e9e8e8;"><a href="/" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%;">Home</a>
                        </div>
                    </a>

                    <div class="newMb" style="margin-left: -23px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                        <button id="about-us-btn" style="display: block; width: 100%; text-align: left; background: none; border: none; font-size: 18px; padding: 12px 0; color: black; cursor: pointer;"><span style="margin-left: 8%;">About Us</span><svg id="about-arrow" style="width: 1rem; height: 1rem; float: right; transition: transform 0.3s ease;" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>

                        </button>
                    </div>

                    <div class="newMb" style="margin-left: -23px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                        <button id="service-btn" style="display: block; width: 100%; text-align: left; background: none; border: none; font-size: 18px; padding: 12px 0; color: black; cursor: pointer;"><span style="margin-left: 8%;">Service </span><svg id="about-arrow" style="width: 1rem; height: 1rem; float: right; transition: transform 0.3s ease;" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>

                        </button>
                    </div>

                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                        <a href="/price" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%;">Price</a>
                    </div>

                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                        <a href="/works" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%;">Works</a>
                    </div>

                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                        <a href="/contact" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%;">Contact Us</a>
                    </div>
                </div>
            </div>

            <!-- Secondary Side Navigation (About Us Submenu) -->
            <div id="secondary-menu" style="position: fixed; top: 0; left: -100%; height: 100%; width: 300px; background-color: white; z-index: 1001; transition: left 0.3s ease-in-out;">
                <div style="padding: 16px;">
                    <div style="margin-bottom: 6%;">
                        <div>
                            <button id="return-main-menu" style="font-size: 18px; padding: 8px;"><svg id="left-arrow" style="width: 1.4rem; height: 1.4rem; float: left; transition: transform 0.3s ease;" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;border-top: 1px solid #e9e8e8;">
                        <a href="/about" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">About Us</a>
                    </div>
                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                        <a href="/review" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Review</a>
                    </div>
                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                        <a href="/brands" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Our Brands</a>
                    </div>
                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                        <a href="/mission" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Mission</a>
                    </div>
                </div>
            </div>

            <!-- Service Submenu -->
            <div id="secondary-service-menu" style="position: fixed; top: 0; left: -100%; height: 100%; width: 300px; background-color: white; z-index: 1001; transition: left 0.3s ease-in-out;">
                <div style="padding: 16px;">
                    <div style="margin-bottom: 6%;">
                        <div>
                            <button id="return-service-main-menu" style="font-size: 18px; padding: 8px;"><svg id="left-arrow" style="width: 1.4rem; height: 1.4rem; float: left; transition: transform 0.3s ease;" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;border-top: 1px solid #e9e8e8;">
                        <a href="/service" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Service</a>
                    </div>
                    <div class="newMb" style="margin-left: -23px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                        <button id="plumber-btn" style="display: block; width: 100%; text-align: left; background: none; border: none; font-size: 18px; padding: 12px 0; color: black; cursor: pointer;"><span style="margin-left: 8%;">Plumber </span><svg id="about-arrow" style="width: 1rem; height: 1rem; float: right; transition: transform 0.3s ease;" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </button>
                    </div>
                    <!-- Plumber Submenu -->
                    <div id="plumber-menu" style="position: fixed; top: 0; left: -100%; height: 100%; width: 300px; background-color: white; z-index: 1001; transition: left 0.3s ease-in-out; overflow-y: auto; overflow-x: hidden;">
                        <div style="padding: 16px;">
                            <div style="margin-bottom: 6%;">
                                <div>
                                    <button id="return-plumber-menu" style="font-size: 18px; padding: 8px;">
                                        <svg id="left-arrow" style="width: 1.4rem; height: 1.4rem; float: left; transition: transform 0.3s ease;" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;border-top: 1px solid #e9e8e8;background: #f3f0f0;">
                                <a href="/plumbing" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Plumber</a>
                            </div>

                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;border-top: 1px solid #e9e8e8;">
                                <a href="/about" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Plumbing Install <svg id="about-arrow" style="width: 1rem; height: 1rem; float: right; transition: transform 0.3s ease;" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>

                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/review" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Plumbing Choke</a>
                            </div>
                            <div class="newMb" style="margin-left: -23px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <button id="plumbing-choke-btn" style="display: block; width: 100%; text-align: left; background: none; border: none; font-size: 18px; padding: 12px 0; color: black; cursor: pointer;">
                                    <span style="margin-left: 8%;">Plumbing Leak</span>
                                    <svg id="about-arrow" style="width: 1rem; height: 1rem; float: right; transition: transform 0.3s ease;" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </button>
                            </div>

                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <button id="water-heater-btn" style="display: block; width: 100%; text-align: left; background: none; border: none; font-size: 18px; padding: 12px 0; color: black; cursor: pointer;">
                                    <span style="margin-left: 5%;">Water Heater</span>
                                    <svg id="about-arrow" style="width: 1rem; height: 1rem; float: right; transition: transform 0.3s ease;" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <button id="toilet-bowl-btn" style="display: block; width: 100%; text-align: left; background: none; border: none; font-size: 18px; padding: 12px 0; color: black; cursor: pointer;">
                                    <span style="margin-left: 5%;">Toilet Bowl</span>
                                    <svg id="about-arrow" style="width: 1rem; height: 1rem; float: right; transition: transform 0.3s ease;" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </button>
                            </div>

                            <!-- Toilet Bowl Submenu -->
                            <div id="submenu-toilet-bowl" style="position: fixed; top: 0; left: -100%; height: 100%; width: 300px; background-color: white; z-index: 1002; transition: left 0.3s ease-in-out; overflow-y: auto; overflow-x: hidden;">
                                <div style="padding: 16px;">
                                    <div style="margin-bottom: 6%;">
                                        <div>
                                            <button id="return-toilet-bowl-menu" style="font-size: 18px; padding: 8px;">
                                                <svg id="left-arrow" style="width: 1.4rem; height: 1.4rem; float: left; transition: transform 0.3s ease;" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;background: #f3f0f0;">
                                        <a href="/toiletBowl" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Toilet Bowl</a>
                                    </div>
                                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                        <a href="/toiletBowl" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Toilet Bowl Installation</a>
                                    </div>
                                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                        <a href="/plumbingChoke" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Toilet Bowl Choke</a>
                                    </div>
                                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                        <a href="/toiletRepair" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Toilet Bowl Choke Repair</a>
                                    </div>
                                </div>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <button id="shower-service-btn" style="display: block; width: 100%; text-align: left; background: none; border: none; font-size: 18px; padding: 12px 0; color: black; cursor: pointer;">
                                    <span style="margin-left: 5%;">Shower Service</span>
                                    <svg id="about-arrow" style="width: 1rem; height: 1rem; float: right; transition: transform 0.3s ease;" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </button>
                            </div>

                            <!-- Shower Service Submenu -->
                            <div id="submenu-shower-service" style="position: fixed; top: 0; left: -100%; height: 100%; width: 300px; background-color: white; z-index: 1002; transition: left 0.3s ease-in-out; overflow-y: auto; overflow-x: hidden;">
                                <div style="padding: 16px;">
                                    <div style="margin-bottom: 6%;">
                                        <div>
                                            <button id="return-shower-service-menu" style="font-size: 18px; padding: 8px;">
                                                <svg id="left-arrow" style="width: 1.4rem; height: 1.4rem; float: left; transition: transform 0.3s ease;" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;background: #f3f0f0;">
                                        <a href="/showerService" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Shower Service</a>
                                    </div>
                                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                        <a href="/showerInstall" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Shower Installation</a>
                                    </div>
                                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                        <a href="/showerRepair" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Shower Repair</a>
                                    </div>
                                </div>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/tapFaucet" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Tap & Faucet</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/bidetSpray" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Bidet Spray</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/commercialPlumber" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Commercial Plumber</a>
                            </div>



                            <!-- Submenu for 222 -->
                            <div id="submenu-222" style="position: fixed; top: 0; left: -100%; height: 100%; width: 300px; background-color: white; z-index: 1002; transition: left 0.3s ease-in-out; overflow-y: auto; overflow-x: hidden;">
                                <div style="padding: 16px;">
                                    <div style="margin-bottom: 6%;">
                                        <div>
                                            <button id="return-submenu-222" style="font-size: 18px; padding: 8px;">
                                                <svg id="left-arrow" style="width: 1.4rem; height: 1.4rem; float: left; transition: transform 0.3s ease;" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;border-top: 1px solid #e9e8e8;background: #f3f0f0;">
                                        <a href="/plumbingInstall" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Plumbing Install</a>
                                    </div>
                                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;border-top: 1px solid #e9e8e8;">
                                        <a href="/pipeInstall" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Pipe Installation</a>
                                    </div>
                                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;border-top: 1px solid #e9e8e8;">
                                        <a href="/bidetSpray" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Bidet Spray</a>
                                    </div>
                                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                        <a href="/bathroomRack" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Bathroom Rack</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Submenu for Plumbing leak -->
                            <div id="submenu-plumbing-choke" style="position: fixed; top: 0; left: -100%; height: 100%; width: 300px; background-color: white; z-index: 1002; transition: left 0.3s ease-in-out; overflow-y: auto; overflow-x: hidden;">
                                <div style="padding: 16px;">
                                    <div style="margin-bottom: 6%;">
                                        <div>
                                            <button id="return-plumbing-choke-menu" style="font-size: 18px; padding: 8px;">
                                                <svg id="left-arrow" style="width: 1.4rem; height: 1.4rem; float: left; transition: transform 0.3s ease;" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;border-top: 1px solid #e9e8e8;background: #f3f0f0;">
                                        <a href="/plumbingLeak" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Plumbing Leak</a>
                                    </div>
                                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                        <a href="/tapLeak" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Leaking Tap</a>
                                    </div>
                                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                        <a href="/heaterLeak" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Heater Leak</a>
                                    </div>
                                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                        <a href="/showerService" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Shower Leak</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Water Heater Submenu -->
                            <div id="submenu-water-heater" style="position: fixed; top: 0; left: -100%; height: 100%; width: 300px; background-color: white; z-index: 1002; transition: left 0.3s ease-in-out; overflow-y: auto; overflow-x: hidden;">
                                <div style="padding: 16px;">
                                    <div style="margin-bottom: 6%;">
                                        <div>
                                            <button id="return-water-heater-menu" style="font-size: 18px; padding: 8px;">
                                                <svg id="left-arrow" style="width: 1.4rem; height: 1.4rem; float: left; transition: transform 0.3s ease;" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;background: #f3f0f0;">
                                        <a href="/waterHeater" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Water Heater</a>
                                    </div>
                                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                        <a href="/heaterinstall" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Water Heater Install</a>
                                    </div>
                                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                        <a href="/waterheaterLeak" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Water Heater Leak</a>
                                    </div>
                                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                        <a href="/heaterRepair" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Water Heater Repair</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Electrician Button in Main Menu -->
                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                        <button id="electrician-btn" style="display: block; width: 100%; text-align: left; background: none; border: none; font-size: 18px; padding: 12px 0; color: black; cursor: pointer;">
                            <span style="margin-left: 5%;">Electrician</span>
                            <svg id="electrician-arrow" style="width: 1rem;height: 1rem;float: right;transition: transform 0.3s ease;margin-right: 3%;" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </button>
                    </div>
                    <!-- Electrician Submenu -->
                    <div id="electrician-menu" style="position: fixed; top: 0; left: -100%; height: 100%; width: 300px; background-color: white; z-index: 1001; transition: left 0.3s ease-in-out; overflow-y: auto; overflow-x: hidden;">
                        <div style="padding: 16px;">
                            <div style="margin-bottom: 6%;">
                                <div>
                                    <button id="return-electrician-menu" style="font-size: 18px; padding: 8px;">
                                        <svg id="left-arrow" style="width: 1.4rem; height: 1.4rem; float: left; transition: transform 0.3s ease;" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;border-top: 1px solid #e9e8e8;background: #f3f0f0;">
                                <a href="/electric" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Electrician</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;border-top: 1px solid #e9e8e8;">
                                <a href="/electricalInstall" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Electrical Install</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/electricRepair" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Electrical Repair</a>
                            </div>
                            <!-- Light Service Button in Main Menu -->
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <button id="light-service-btn" style="display: block; width: 100%; text-align: left; background: none; border: none; font-size: 18px; padding: 12px 0; color: black; cursor: pointer;">
                                    <span style="margin-left: 5%;">Light Service</span>
                                    <svg id="light-service-arrow" style="width: 1rem; height: 1rem; float: right; transition: transform 0.3s ease;" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </button>
                            </div>

                            <!-- Light Service Submenu -->
                            <div id="light-service-menu" style="position: fixed; top: 0; left: -100%; height: 100%; width: 300px; background-color: white; z-index: 1001; transition: left 0.3s ease-in-out;">
                                <div style="padding: 16px;">
                                    <div style="margin-bottom: 6%;">
                                        <div>
                                            <button id="return-light-service-menu" style="font-size: 18px; padding: 8px;">
                                                <svg id="left-arrow" style="width: 1.4rem; height: 1.4rem; float: left; transition: transform 0.3s ease;" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>

                                    <!-- Light Service Submenu Items -->
                                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;border-top: 1px solid #e9e8e8;">
                                        <a href="/lightReplace" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Light Bulb Replacement</a>
                                    </div>
                                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                        <a href="/lightInstall" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Light Fixture Installation</a>
                                    </div>
                                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                        <a href="/lightService" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">LED Upgrade</a>
                                    </div>
                                </div>
                            </div>

                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/switchService" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Electrical Switch Service</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/powerSocket" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Power Socket</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/hdrElectric" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">HDR Electrician</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/smartSwitch" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Smart Switch</a>
                            </div>
                        </div>
                    </div>


                    <!-- Handyman Button in Main Menu -->
                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                        <button id="handyman-btn" style="display: block; width: 100%; text-align: left; background: none; border: none; font-size: 18px; padding: 12px 0; color: black; cursor: pointer;">
                            <span style="margin-left: 5%;">Handyman</span>
                            <svg id="handyman-arrow" style="width: 1rem;height: 1rem;float: right;transition: transform 0.3s ease;margin-right: 3%;" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </button>
                    </div>

                    <!-- Handyman Submenu -->
                    <div id="handyman-menu" style="position: fixed; top: 0; left: -100%; height: 100%; width: 300px; background-color: white; z-index: 1001; transition: left 0.3s ease-in-out;">
                        <div style="padding: 16px;">
                            <div style="margin-bottom: 6%;">
                                <div>
                                    <button id="return-handyman-menu" style="font-size: 18px; padding: 8px;">
                                        <svg id="left-arrow" style="width: 1.4rem; height: 1.4rem; float: left; transition: transform 0.3s ease;" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <!-- Handyman Submenu Items -->
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;border-top: 1px solid #e9e8e8;background: #f3f0f0;">
                                <a href="/handyman" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">HandyMan</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/rubbishChute" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Rubbish Chute</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/cupboard" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Cupboard Hinge</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/cabinetHinge" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Cabinet Hinge</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/hydraulic" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Hydraulic Hinge</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/drilling" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Handyman Drilling</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/tvBucket" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">TV Bracket Installation</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/wallMounting" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Wall Mounting Install</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/pullUp" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Pullup Bar Install</a>
                            </div>
                        </div>
                    </div>

                    <!-- Deep Cleaning Button in Main Menu -->
                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                        <button id="deepclean-btn" style="display: block; width: 100%; text-align: left; background: none; border: none; font-size: 18px; padding: 12px 0; color: black; cursor: pointer;">
                            <span style="margin-left: 5%;">Deep Cleaning</span>
                            <svg id="deepclean-arrow" style="width: 1rem;height: 1rem;float: right;transition: transform 0.3s ease;margin-right: 3%;" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </button>
                    </div>

                    <!-- Deep Cleaning Submenu -->
                    <div id="deepclean-menu" style="position: fixed; top: 0; left: -100%; height: 100%; width: 300px; background-color: white; z-index: 1001; transition: left 0.3s ease-in-out;">
                        <div style="padding: 16px;">
                            <div style="margin-bottom: 6%;">
                                <div>
                                    <button id="return-deepclean-menu" style="font-size: 18px; padding: 8px;">
                                        <svg id="left-arrow" style="width: 1.4rem; height: 1.4rem; float: left; transition: transform 0.3s ease;" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <!-- Deep Cleaning Submenu Items -->
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;border-top: 1px solid #e9e8e8;background: #f3f0f0;">
                                <a href="/deepclean" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Deep Cleaning</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/matressClean" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Mattress Cleaning</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/matressDeepClean" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Mattress Deep Cleaning</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/cabinetHinge" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Cabinet Hinge</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/matressstemClean" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Mattress Steam Cleaning</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/matrissStainClean" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Mattress Stain Cleaning</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/sofaClean" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Sofa Cleaning</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/sofaDeepClean" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Sofa Deep Cleaning</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="fabricSofaClean" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Fabric Sofa Cleaning</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/unholsteryClean" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Upholstery Cleaning</a>
                            </div>
                        </div>
                    </div>

                    <!-- Floor Polishing Button in Main Menu -->
                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                        <button id="floor-polishing-btn" style="display: block; width: 100%; text-align: left; background: none; border: none; font-size: 18px; padding: 12px 0; color: black; cursor: pointer;">
                            <span style="margin-left: 5%;">Floor Polishing</span>
                            <svg id="floor-polishing-arrow" style="width: 1rem;height: 1rem;float: right;transition: transform 0.3s ease;margin-right: 3%;" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </button>
                    </div>

                    <!-- Floor Polishing Submenu -->
                    <div id="floor-polishing-menu" style="position: fixed; top: 0; left: -100%; height: 100%; width: 300px; background-color: white; z-index: 1001; transition: left 0.3s ease-in-out;">
                        <div style="padding: 16px;">
                            <div style="margin-bottom: 6%;">
                                <div>
                                    <button id="return-floor-polishing-menu" style="font-size: 18px; padding: 8px;">
                                        <svg id="left-arrow" style="width: 1.4rem; height: 1.4rem; float: left; transition: transform 0.3s ease;" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <!-- Floor Polishing Submenu Items -->
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;border-top: 1px solid #e9e8e8;background: #f3f0f0;">
                                <a href="/floorpolish" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Floor Polishing</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/marbleFloorPolish" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Marble Floor Polish</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/marblePolish" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Marble Polishing</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/parquetPolish" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Parquet Polishing</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/parquetVarnish" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Parquet Floor Polishing</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/woodPolish" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Wood Polishing</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/wood" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Wood Floor Polishing</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/vinylFloorPolish" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Vinyl Floor Polishing</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/tileFloorPolish" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Tile Floor Polishing</a>
                            </div>
                        </div>
                    </div>

                    <!-- Floor Cleaning Button in Main Menu -->
                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                        <button id="floor-cleaning-btn" style="display: block; width: 100%; text-align: left; background: none; border: none; font-size: 18px; padding: 12px 0; color: black; cursor: pointer;">
                            <span style="margin-left: 5%;">Floor Cleaning</span>
                            <svg id="floor-cleaning-arrow" style="width: 1rem;height: 1rem;float: right;transition: transform 0.3s ease;margin-right: 3%;" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </button>
                    </div>

                    <!-- Floor Cleaning Submenu -->
                    <div id="floor-cleaning-menu" style="position: fixed; top: 0; left: -100%; height: 100%; width: 300px; background-color: white; z-index: 1001; transition: left 0.3s ease-in-out;">
                        <div style="padding: 16px;">
                            <div style="margin-bottom: 6%;">
                                <div>
                                    <button id="return-floor-cleaning-menu" style="font-size: 18px; padding: 8px;">
                                        <svg id="left-arrow" style="width: 1.4rem; height: 1.4rem; float: left; transition: transform 0.3s ease;" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <!-- Floor Cleaning Submenu Items -->
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;border-top: 1px solid #e9e8e8;background: #f3f0f0;">
                                <a href="/floorclean" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Floor Cleaning</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/vinylClean" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Vinyl Cleaning</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/vinylFloorClean" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Vinyl Floor Cleaning</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/vinylDeepFloorClean" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Vinyl Floor Deep Cleaning</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/terrazzoClean" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Terrazzo Cleaning</a>
                            </div>
                        </div>
                    </div>

                    <!-- Wood Varnishing Button in Main Menu -->
                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                        <button id="wood-varnishing-btn" style="display: block; width: 100%; text-align: left; background: none; border: none; font-size: 18px; padding: 12px 0; color: black; cursor: pointer;">
                            <span style="margin-left: 5%;">Wood Varnishing</span>
                            <svg id="wood-varnishing-arrow" style="width: 1rem;height: 1rem;float: right;transition: transform 0.3s ease;margin-right: 3%;" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </button>
                    </div>

                    <!-- Wood Varnishing Submenu -->
                    <div id="wood-varnishing-menu" style="position: fixed; top: 0; left: -100%; height: 100%; width: 300px; background-color: white; z-index: 1001; transition: left 0.3s ease-in-out;">
                        <div style="padding: 16px;">
                            <div style="margin-bottom: 6%;">
                                <div>
                                    <button id="return-wood-varnishing-menu" style="font-size: 18px; padding: 8px;">
                                        <svg id="left-arrow" style="width: 1.4rem; height: 1.4rem; float: left; transition: transform 0.3s ease;" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <!-- Wood Varnishing Submenu Items -->
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;border-top: 1px solid #e9e8e8;">
                                <a href="/wood" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Wood Varnishing</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/parquetVarnish" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Parque Varnish</a>
                            </div>
                        </div>
                    </div>

                    <!-- Decking Button in Main Menu -->
                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                        <button id="decking-btn" style="display: block; width: 100%; text-align: left; background: none; border: none; font-size: 18px; padding: 12px 0; color: black; cursor: pointer;">
                            <span style="margin-left: 5%;">Decking</span>
                            <svg id="decking-arrow" style="width: 1rem;height: 1rem;float: right;transition: transform 0.3s ease;margin-right: 3%;" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </button>
                    </div>

                    <!-- Decking Submenu -->
                    <div id="decking-menu" style="position: fixed; top: 0; left: -100%; height: 100%; width: 300px; background-color: white; z-index: 1001; transition: left 0.3s ease-in-out;">
                        <div style="padding: 16px;">
                            <div style="margin-bottom: 6%;">
                                <div>
                                    <button id="return-decking-menu" style="font-size: 18px; padding: 8px;">
                                        <svg id="left-arrow" style="width: 1.4rem; height: 1.4rem; float: left; transition: transform 0.3s ease;" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <!-- Decking Submenu Items -->
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;border-top: 1px solid #e9e8e8;">
                                <a href="/decking" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Decking</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/balconyDeck" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Balcony Decking</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/timberDeck" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Timber Decking</a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </nav>

    <style>
        .newMb:hover {
            background-color: #f69918
        }
    </style>
    <!-- Header -->


    <!-- Banner Section -->
    <section class="parallax" style="position: relative; background: url('https://img.freepik.com/premium-photo/professional-happy-marketing-team-working-discussing-about-project-aig53f_31965-552623.jpg') no-repeat center center fixed; background-size: cover; height: 300px;">
        <div class="overlay" style="background: rgba(0, 0, 0, 0.5); position: absolute; top: 0; left: 0; right: 0; bottom: 0;"></div>
        <div class="content" style="position: relative; z-index: 1; display: flex; flex-direction: column; padding-left: 1rem; padding-right: 1rem; text-align: center; gap: 1rem;">
            <h1 style="font-size: 2.5rem; color: white; font-weight: 100; margin-bottom: 1.5rem;">About</h1>
            <p style="font-size: 1rem; color: antiquewhite;">Home / About</p>
        </div>
    </section>

    <section class="px-4 lg:px-0">
        <div class="flex flex-col lg:flex-row items-center justify-center lg:justify-start" style="margin-left: 17%;margin-top: 36px;">
            <div class="flex justify-center items-center lg:w-auto">
                <img style="height: auto; max-width: 100%;" src="{{ url('img/icon2.png') }}" alt="Everyworks Singapore Logo">
            </div>
            <div class="lg:w-1/2 lg:ml-12 mt-8 lg:mt-0">
                <p style="max-width: 100%; text-align: justify; font-size: 17px; color: #777;"> All House Work Singapore offers a comprehensive solution for all your home maintenance and handyman needs, including electrical, plumbing, and air conditioning services. Simply message us on WhatsApp to address all your requirements in one place. Book appointments for various handyman services at competitive prices, with guaranteed quality and exceptional customer support. Our goal is to be the leading provider of home maintenance services, delivering top-notch solutions for all your needs.</p>
            </div>
        </div>
    </section>

    <div class="flex items-end justify-end fixed bottom-0 right-0 mb-4 mr-4 z-10">
        <div>
            <a title="Let's Start Chat" href="https://web.whatsapp.com/" target="_blank" class="block w-16 h-16 rounded-full transition-all shadow hover:shadow-lg transform hover:scale-110 hover:rotate-12">
                <img class="object-cover object-center w-full h-full rounded-full" src="{{ url('img/social.png') }}" />
            </a>
        </div>
    </div>

    <section style="border-top: 1px solid;width: 100%;margin-top: 60px;text-align: center;">
        <div>
            <p style="font-size: 24px;color: #000;margin-top: 8px;font-family: fantasy;letter-spacing: 2px;text-shadow: 2px 2px 0 rgba(0,0,0,.25);">WHAT YOU CAN EXPECT</p>
        </div>

        <div style="display: flex; flex-wrap: wrap; justify-content: center; align-items: center;">
            <div class="border-r-2 border-b-2 p-4" style="margin: 10px;">
                <svg width="64px" height="64px" viewBox="-11.52 -11.52 71.04 71.04" id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" fill="#f7a90c" stroke="#f7a90c" stroke-width="1.8240000000000003">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <defs>
                            <style>
                                .cls-1 {
                                    fill: none;
                                    stroke: #f7a90c;
                                    stroke-linecap: round;
                                    stroke-linejoin: round;
                                }
                            </style>
                        </defs>
                        <path class="cls-1" d="M40.83,8.48c1.14,0,2,1,1.54,2.86l-5.58,26.3c-.39,1.87-1.52,2.32-3.08,1.45L20.4,29.26a.4.4,0,0,1,0-.65L35.77,14.73c.7-.62-.15-.92-1.07-.36L15.41,26.54a.46.46,0,0,1-.4.05L6.82,24C5,23.47,5,22.22,7.23,21.33L40,8.69a2.16,2.16,0,0,1,.83-.21Z"></path>
                    </g>
                </svg>
                <p style="font-size: 16px;font-weight: 600;width: 294px;font-family: system-ui;margin-top: 7px;margin-left: 7px;">Swift Solutions & Understanding Your Needs</p>

            </div>

            <div style="margin: 10px;" class="border-r-2 border-b-2 p-4">
                <svg width="64px" height="64px" viewBox="-4.56 -4.56 33.12 33.12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z" stroke="#000000" stroke-width="0.624" stroke-linecap="round" stroke-linejoin="round"></path>
                    </g>
                </svg>
                <p style="font-size: 16px;font-weight: 600;width: 238px;font-family: system-ui;margin-top: 14px;margin-left: 7px;">Exceptional Customer Support</p>

            </div>

            <div style="margin: 10px;" class="border-r-2 border-b-2 p-4">
                <svg width="64px" height="64px" viewBox="-9.12 -9.12 42.24 42.24" xmlns="http://www.w3.org/2000/svg" fill="#f7a90c" stroke="#f7a90c" stroke-width="0.00024000000000000003">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <g>
                            <path fill="none" d="M0 0h24v24H0z"></path>
                            <path d="M3.161 4.469a6.5 6.5 0 0 1 8.84-.328 6.5 6.5 0 0 1 9.178 9.154l-7.765 7.79a2 2 0 0 1-2.719.102l-.11-.101-7.764-7.791a6.5 6.5 0 0 1 .34-8.826zm1.414 1.414a4.5 4.5 0 0 0-.146 6.21l.146.154L12 19.672l5.303-5.304-3.535-3.535-1.06 1.06a3 3 0 1 1-4.244-4.242l2.102-2.103a4.501 4.501 0 0 0-5.837.189l-.154.146zm8.486 2.828a1 1 0 0 1 1.414 0l4.242 4.242.708-.706a4.5 4.5 0 0 0-6.211-6.51l-.153.146-3.182 3.182a1 1 0 0 0-.078 1.327l.078.087a1 1 0 0 0 1.327.078l.087-.078 1.768-1.768z"></path>
                        </g>
                    </g>
                </svg>
                <p style="font-size: 16px;font-weight: 600;width: 294px;font-family: system-ui;margin-top: 7px;margin-left: 7px;">Turnkey Supply & Installation Solutions</p>
            </div>
        </div>

        <div style="display: flex; flex-wrap: wrap; justify-content: center; align-items: center;">
            <div style="margin: 10px;" class="border-r-2 border-b-2 p-4">
                <svg width="64px" height="64px" viewBox="-245.76 -245.76 1515.52 1515.52" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000" stroke="#000000" stroke-width="0.01024">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path d="M864 512a32 32 0 0 0-32 32v96a32 32 0 0 0 64 0v-96a32 32 0 0 0-32-32zM881.92 389.44a23.68 23.68 0 0 0-5.76-2.88 19.84 19.84 0 0 0-6.08-1.92 32 32 0 0 0-28.8 8.64A32 32 0 0 0 832 416a32 32 0 1 0 64 0 33.6 33.6 0 0 0-9.28-22.72z" fill="#f7a90c"></path>
                        <path d="M800 128h-32a96 96 0 0 0-96-96H352a96 96 0 0 0-96 96H224a96 96 0 0 0-96 93.44v677.12A96 96 0 0 0 224 992h576a96 96 0 0 0 96-93.44V736a32 32 0 0 0-64 0v162.56a32 32 0 0 1-32 29.44H224a32 32 0 0 1-32-29.44V221.44A32 32 0 0 1 224 192h32a96 96 0 0 0 96 96h320a96 96 0 0 0 96-96h32a32 32 0 0 1 32 29.44V288a32 32 0 0 0 64 0V221.44A96 96 0 0 0 800 128z m-96 64a32 32 0 0 1-32 32H352a32 32 0 0 1-32-32V128a32 32 0 0 1 32-32h320a32 32 0 0 1 32 32z" fill="#f7a90c"></path>
                        <path d="M712.32 426.56L448 721.6l-137.28-136.32A32 32 0 0 0 265.6 630.4l160 160a32 32 0 0 0 22.4 9.6 32 32 0 0 0 23.04-10.56l288-320a32 32 0 0 0-47.68-42.88z" fill="#f7a90c"></path>
                    </g>
                </svg>
                <p style="font-size: 16px;font-weight: 600;width: 294px;font-family: system-ui;margin-top: 7px;margin-left: 7px;">Honest Pricing & In-Depth Quotes</p>
            </div>
            <div style="margin: 10px;" class="border-r-2 border-b-2 p-4">
                <svg width="64px" height="64px" viewBox="-4.32 -4.32 32.64 32.64" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#e5e1e1" stroke-width="0.00024000000000000003">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <rect width="24" height="24" fill="white"></rect>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5 9.5C5 7.01472 7.01472 5 9.5 5C11.9853 5 14 7.01472 14 9.5C14 11.9853 11.9853 14 9.5 14C7.01472 14 5 11.9853 5 9.5Z" fill="#323232"></path>
                        <path d="M14.3675 12.0632C14.322 12.1494 14.3413 12.2569 14.4196 12.3149C15.0012 12.7454 15.7209 13 16.5 13C18.433 13 20 11.433 20 9.5C20 7.567 18.433 6 16.5 6C15.7209 6 15.0012 6.2546 14.4196 6.68513C14.3413 6.74313 14.322 6.85058 14.3675 6.93679C14.7714 7.70219 15 8.5744 15 9.5C15 10.4256 14.7714 11.2978 14.3675 12.0632Z" fill="#323232"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.64115 15.6993C5.87351 15.1644 7.49045 15 9.49995 15C11.5112 15 13.1293 15.1647 14.3621 15.7008C15.705 16.2847 16.5212 17.2793 16.949 18.6836C17.1495 19.3418 16.6551 20 15.9738 20H3.02801C2.34589 20 1.85045 19.3408 2.05157 18.6814C2.47994 17.2769 3.29738 16.2826 4.64115 15.6993Z" fill="#323232"></path>
                        <path d="M14.8185 14.0364C14.4045 14.0621 14.3802 14.6183 14.7606 14.7837V14.7837C15.803 15.237 16.5879 15.9043 17.1508 16.756C17.6127 17.4549 18.33 18 19.1677 18H20.9483C21.6555 18 22.1715 17.2973 21.9227 16.6108C21.9084 16.5713 21.8935 16.5321 21.8781 16.4932C21.5357 15.6286 20.9488 14.9921 20.0798 14.5864C19.2639 14.2055 18.2425 14.0483 17.0392 14.0008L17.0194 14H16.9997C16.2909 14 15.5506 13.9909 14.8185 14.0364Z" fill="#323232"></path>
                    </g>
                </svg>
                <p style="font-size: 16px;font-weight: 600;width: 238px;font-family: system-ui;margin-top: 14px;margin-left: 7px;">Trained and Licensed Specialists</p>
            </div>
            <div style="margin: 10px;" class="border-r-2 border-b-2 p-4">
                <svg width="64px" height="64px" viewBox="-6.24 -6.24 36.48 36.48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path d="M8.5 12.5L10.5 14.5L15.5 9.5" stroke="#f7a90c" stroke-width="1.176" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M7 3.33782C8.47087 2.48697 10.1786 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 10.1786 2.48697 8.47087 3.33782 7" stroke="#f7a90c" stroke-width="1.176" stroke-linecap="round"></path>
                    </g>
                </svg>
                <p style="font-size: 16px;font-weight: 600;width: 294px;font-family: system-ui;margin-top: 7px;margin-left: 7px;">A Comprehensive Solution Tailored for You</p>
            </div>
            <!-- Repeat the above structure for other items -->
        </div>

        <div>
            <p style="width: 90%;text-align: justify;font-size: 16px;color: #353232;margin-top: 20px;margin-left: auto;margin-right: auto;text-align: center;">
                All House Work offers a comprehensive range of home maintenance services, including <span style="color: #f3b04f;">handyman</span>, <span style="color: #f3b04f;">electrical</span>, <span style="color: #f3b04f;">plumbing</span>, and air conditioning solutions. Our services are designed to save you time and effort by eliminating the need to engage multiple providers. With a foundation of transparency and trust, we deliver all the necessary information to ensure we meet your expectations. Our seamless, hassle-free approach simplifies the process of hiring professional services. Rely on All House Work Singapore for efficient, reliable results, allowing you more time to focus on what matters most. For additional repair and maintenance information, please visit our <span style="color: #f3b04f;">resources page</span>.
            </p>

        </div>
    </section>

    <section style="border-top: 1px solid; max-width: 100%; margin-top: 60px; text-align: center;">
        <div>
            <p style="font-size: 24px; color: #000; margin-top: 8px; font-family: fantasy; letter-spacing: 3px; text-shadow: 2px 2px 0 rgba(0,0,0,.25);">WHY CHOOSE All HOUSE Work's</p>
        </div>

        <div class="relative mx-auto mt-10" style="max-width: 100%; width: 90%; height: 308px; overflow: hidden; border-radius: 8px;">
            <div class="parallax-bg absolute inset-0"
                style="background-image: url('https://images.unsplash.com/photo-1553877522-43269d4ea984?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTR8fHdvcmt8ZW58MHx8MHx8fDA%3D');
                background-size: cover;
                background-position: center;
                background-attachment: fixed;
                height: 308px;">
            </div>
            <div class="text-black relative z-10 lg:w-1/2 bg-yellow-500 bg-opacity-95 p-5 opacity-90 backdrop-blur-lg lg:p-12"
                style="border-radius: 8px;">
                <h2 class="font-serif text-2xl md:text-4xl font-bold">BOOK HOME MAINTENANCE SERVICES</h2>
                <p class="mb-4 font-serif font-light text-sm md:text-base">
                    Our diverse handyman services, encompassing air conditioning, plumbing, and electrical solutions, offer a streamlined approach to addressing all your home repair and maintenance needs. Avoid the hassle of scheduling multiple service providers with varying appointment times. We handle everything in one convenient arrangement.
                </p>
                <a href="#" class="mt-2 inline-block rounded-xl border-2 px-6 md:px-10 py-3 font-semibold border-black hover:bg-blue hover:text-blue-600">
                    See Services
                </a>
            </div>
        </div>


        <div class="container mx-auto p-6 mt-16">
            <div class="bg-white rounded-lg shadow-lg flex flex-col md:flex-row">
                <div class="w-full md:w-1/2 mb-4 md:mb-0">
                    <img src="https://www.betterup.com/hs-fs/hubfs/Blog%20Images/how%20to%20carry%20a%20conversation/coworkers-chatting-in-office-how-to-carry-a-conversation.jpg?width=867&name=coworkers-chatting-in-office-how-to-carry-a-conversation.jpg" alt="Calendar" class="rounded-lg shadow-lg w-full">
                </div>

                <div class="w-full md:w-1/2 p-2">
                    <h1 class="text-xl md:text-2xl font-bold mb-4">JUST WHATSAPP TO GET ADVICE AND A DIRECT QUOTE</h1>
                    <p class="mb-4 text-sm md:text-base">
                        To inquire about All House Work's services, simply message us on WhatsApp. You can either send a photo of the issue you're encountering or describe your needs, and our customer service team will promptly assist you in finding a solution.
                    </p>
                    <a style="margin-left: 13%;" id="sendbtn" class="shortcode_wa_button mt-6 inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-green-500 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500" href="https://api.whatsapp.com/send?phone=65 6575 1226&amp;text=Hello, I would like to know more about the following home service" target="_blank" data-wpel-link="external" rel="nofollow external noopener noreferrer">
                        <img src="img/whatsapp.png" alt="" class="mr-2"><span>WhatsApp to Start Now!</span>
                    </a>
                </div>
            </div>
        </div>



        <div class="grid mb-8 border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 md:mb-12 md:grid-cols-2 bg-white dark:bg-gray-800">
            <figure class="flex flex-col items-center justify-center p-8 text-center bg-white border-b border-gray-200 rounded-t-lg md:rounded-t-none md:rounded-ss-lg md:border-e dark:bg-gray-800 dark:border-gray-700">
                <figcaption class="flex items-center justify-center ">
                    <svg width="64px" height="64px" viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path d="M142.9 736c-11.5 0-22.7-6.3-28.4-17.2C81.5 655.4 64 583.9 64 512c0-60.5 11.8-119.1 35.2-174.4 22.6-53.4 54.9-101.3 96-142.4s89-73.4 142.4-96C392.9 75.8 451.5 64 512 64c47.3 0 93.9 7.3 138.4 21.8 16.8 5.5 26 23.5 20.6 40.3-5.5 16.8-23.5 26-40.3 20.6C592.5 134.3 552.6 128 512 128c-211.7 0-384 172.3-384 384 0 62.5 14.5 122.2 43.2 177.2 8.2 15.7 2.1 35-13.6 43.2-4.7 2.4-9.7 3.6-14.7 3.6zM704.2 913.1c-11.5 0-22.7-6.3-28.4-17.2-8.2-15.7-2.1-35 13.6-43.2C816.8 786.2 896 655.7 896 512c0-19.8-1.5-39.7-4.5-59.1-2.7-17.5 9.3-33.8 26.7-36.5 17.5-2.7 33.8 9.3 36.5 26.7 3.5 22.6 5.3 45.8 5.3 68.9 0 83.5-23.1 164.9-66.8 235.5-42.5 68.6-102.7 124.6-174.2 161.9-4.8 2.5-9.9 3.7-14.8 3.7z" fill="#FFEA00"></path>
                            <path d="M259.9 530.5a117.2 146.5 0 1 0 234.4 0 117.2 146.5 0 1 0-234.4 0Z" fill="#3D5AFE"></path>
                            <path d="M506.1 960c140.7 0 160.9-65.1 43.7-143-49.5-32.9-108.9-52-172.7-52s-123.3 19.2-172.7 52c-117.2 77.9-97 143 43.7 143h258z" fill="#3D5AFE"></path>
                            <path d="M733.2 193.1a52.1 65.1 0 1 0 104.2 0 52.1 65.1 0 1 0-104.2 0Z" fill="#8C9EFF"></path>
                            <path d="M842.7 384c62.5 0 71.5-28.9 19.4-63.5-22-14.6-48.4-23.1-76.8-23.1s-54.8 8.5-76.8 23.1c-52.1 34.6-43.1 63.5 19.4 63.5h114.8z" fill="#8C9EFF"></path>
                        </g>
                    </svg>
                </figcaption>
                <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">CUSTOMER SATISFACTION GUARANTEED</h3>
                    <p class="my-4">
                        Our company is dedicated to upholding honesty and transparency in our pricing. We strive to deliver effective and efficient home service solutions, backed by workmanship warranties to ensure the highest quality results. As trusted service providers, we guarantee satisfaction with our affordable and reliable home services.
                    </p>

                </blockquote>
            </figure>

            <figure class="flex flex-col items-center justify-center p-8 text-center bg-white border-b border-gray-200 md:rounded-se-lg dark:bg-gray-800 dark:border-gray-700">
                <figcaption class="flex items-center justify-center ">
                    <img class="rounded-full w-9 h-9" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/roberta-casas.png" alt="profile picture">
                </figcaption>
                <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">SHOP WITH US FOR ONE-STOP CONVENIENCE</h3>
                    <p class="my-4">
                        For new installations or replacements of home or office fixtures and appliances, customers can explore our product offerings. Our customer service team is available via WhatsApp to provide personalized recommendations and advice on the products we offer. As trusted service providers, we ensure satisfaction with our affordable and reliable solutions.
                    </p>

                </blockquote>
            </figure>
        </div>

    </section>


     <section class="bg-gray-100 h-auto flex flex-wrap justify-center p-4">
        <h2 class="w-full text-center mt-8 mb-8 text-lg font-bold">AllHouseWork's Group's Network of Service Brands</h2>
        <div class="w-11/12 mt-2 mb-8 flex flex-wrap justify-around">
            <div class="w-1/4 p-2 flex justify-center items-center responsive-image">
                <a href="/plumbing">
                    <img src="{{ url('img/plumber.png') }}" alt="Image 1" class="w-48 h-16 hover:zoom-in">
                </a>
            </div>
            <div class="w-1/4 p-2 flex justify-center items-center responsive-image">
                <a href="/matressClean">
                    <img src="{{ url('img/matress.png') }}" alt="Image 2" class="w-52 h-20 hover:zoom-in">
                </a>
            </div>
            <div class="w-1/4 p-2 flex justify-center items-center responsive-image">
                <a href="/electric">
                    <img src="{{ url('img/daylight.png') }}" alt="Image 3" class="w-48 h-16 hover:zoom-in">
                </a>
            </div>
            <div class="w-1/4 p-2 flex justify-center items-center responsive-image">
                <a href="/handyman">
                    <img src="{{ url('img/handy.png') }}" alt="Image 4" class="w-54 h-16 hover:zoom-in">
                </a>
            </div>
            <div class="w-1/4 p-2 flex justify-center items-center responsive-image">
                <a href="/waterHeater">
                    <img src="{{ url('img/water.png') }}" alt="Image 5" class="w-48 h-16 hover:zoom-in">
                </a>
            </div>
            <div class="w-1/4 p-2 flex justify-center items-center responsive-image">
                <a href="/sofaClean">
                    <img src="{{ url('img/sofa.png') }}" alt="Image 6" class="w-52 h-24 hover:zoom-in">
                </a>
            </div>
            <div class="w-1/4 p-2 flex justify-center items-center responsive-image">
                <a href="/floorclean">
                    <img src="{{ url('img/floor.png') }}" alt="Image 7" class="w-80 h-20 hover:zoom-in">
                </a>
            </div>
            <div class="w-1/4 p-2 flex justify-center items-center responsive-image">
                <a href="/rubbishChute">
                    <img src="{{ url('img/rubbish.png') }}" alt="Image 8" class="w-56 h-16 hover:zoom-in">
                </a>
            </div>
        </div>
    </section>
    <style>
        .hover\:zoom-in {
            transition: transform 0.3s ease;
        }

        .hover\:zoom-in:hover {
            transform: scale(1.1);
        }

        @media (max-width: 768px) {
            .responsive-image {
                flex-basis: 100% !important;
                max-width: 100% !important;
            }
        }
    </style>

    <!-- Popular Home Maintenance Services -->


    <div class="parallax py-24 sm:py-32 mt-16 mb-16" style="display: none;">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto grid max-w-2xl grid-cols-1 items-start gap-x-8 gap-y-16 sm:gap-y-24 lg:mx-0 lg:max-w-none lg:grid-cols-2">
                <div class="lg:pr-4">
                    <div class="relative overflow-hidden rounded-3xl bg-gray-900 px-6 pb-9 pt-64 shadow-2xl sm:px-12 lg:max-w-lg lg:px-8 lg:pb-8 xl:px-10 xl:pb-10">
                        <img class="absolute inset-0 h-full w-full object-cover brightness-125 saturate-0" src="https://media.istockphoto.com/id/1458711335/photo/male-wood-furniture-joiner-work-in-diy-wooden-workshop-real-authentic-people-worker.webp?b=1&s=170667a&w=0&k=20&c=MYhOSwYt7QwT4c8gBp3lCZZMje4r3QydPKFx4zBN2mI=" alt="">
                        <div class="absolute inset-0 bg-gray-900 mix-blend-multiply"></div>
                        <div class="absolute left-1/2 top-1/2 -ml-16 -translate-x-1/2 -translate-y-1/2 transform-gpu blur-3xl" aria-hidden="true">
                            <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-40" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                        </div>
                        <figure class="relative isolate">
                            <svg viewBox="0 0 162 128" fill="none" aria-hidden="true" class="absolute -left-2 -top-4 -z-10 h-32 stroke-white/20">
                                <path id="0ef284b8-28c2-426e-9442-8655d393522e" d="M65.5697 118.507L65.8918 118.89C68.9503 116.314 71.367 113.253 73.1386 109.71C74.9162 106.155 75.8027 102.28 75.8027 98.0919C75.8027 94.237 75.16 90.6155 73.8708 87.2314C72.5851 83.8565 70.8137 80.9533 68.553 78.5292C66.4529 76.1079 63.9476 74.2482 61.0407 72.9536C58.2795 71.4949 55.276 70.767 52.0386 70.767C48.9935 70.767 46.4686 71.1668 44.4872 71.9924L44.4799 71.9955L44.4726 71.9988C42.7101 72.7999 41.1035 73.6831 39.6544 74.6492C38.2407 75.5916 36.8279 76.455 35.4159 77.2394L35.4047 77.2457L35.3938 77.2525C34.2318 77.9787 32.6713 78.3634 30.6736 78.3634C29.0405 78.3634 27.5131 77.2868 26.1274 74.8257C24.7483 72.2185 24.0519 69.2166 24.0519 65.8071C24.0519 60.0311 25.3782 54.4081 28.0373 48.9335C30.703 43.4454 34.3114 38.345 38.8667 33.6325C43.5812 28.761 49.0045 24.5159 55.1389 20.8979C60.1667 18.0071 65.4966 15.6179 71.1291 13.7305C73.8626 12.8145 75.8027 10.2968 75.8027 7.38572C75.8027 3.6497 72.6341 0.62247 68.8814 1.1527C61.1635 2.2432 53.7398 4.41426 46.6119 7.66522C37.5369 11.6459 29.5729 17.0612 22.7236 23.9105C16.0322 30.6019 10.618 38.4859 6.47981 47.558L6.47976 47.558L6.47682 47.5647C2.4901 56.6544 0.5 66.6148 0.5 77.4391C0.5 84.2996 1.61702 90.7679 3.85425 96.8404L3.8558 96.8445C6.08991 102.749 9.12394 108.02 12.959 112.654L12.959 112.654L12.9646 112.661C16.8027 117.138 21.2829 120.739 26.4034 123.459L26.4033 123.459L26.4144 123.465C31.5505 126.033 37.0873 127.316 43.0178 127.316C47.5035 127.316 51.6783 126.595 55.5376 125.148L55.5376 125.148L55.5477 125.144C59.5516 123.542 63.0052 121.456 65.9019 118.881L65.5697 118.507Z" />
                                <use href="#0ef284b8-28c2-426e-9442-8655d393522e" x="86" />
                            </svg>
                            <blockquote class="mt-6 text-xl font-semibold leading-8 text-white">
                                <p>"What happens is not as important as how you react to what happens." "The journey of a thousand miles begins with one step." "The only true wisdom is in knowing you know nothing." "Just as treasures are uncovered from the earth, so virtue appears from good deeds, and wisdom appears from a pure and peaceful mind..”</p>
                            </blockquote>
                            <!--<figcaption class="mt-6 text-sm leading-6 text-gray-300"><strong class="font-semibold text-white">Shehab Najib,</strong> ceo of ISREN</figcaption>-->
                        </figure>
                    </div>
                </div>
                <div>
                    <div class="text-base leading-7 text-gray-700 lg:max-w-lg">
                        <p class="text-base font-semibold leading-7 text-yellow-400">MORE ABOUT US</p>
                        <h1 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Oue Testimonial</h1>
                        <div class="max-w-xl">
                            <p class="mt-6">I recently used their handyman, plumbing, and electrical services and was thoroughly impressed. Marc and Rhae coordinated a responsive and professional handyman team, ensuring timely and efficient service. </p>
                            <p class="mt-8">The plumber quickly fixed a water leakage issue, and the electrician was prompt, clear about charges, and effective. Overall, the services were excellent, affordable, and highly recommended.</p>
                            <p class="mt-8">Zero Degree AC Limited also offers tailored Air Conditioning installation packages. Their systems are inverter-driven, energy-efficient, stylish, silent, and provide both cooling and heating. </p>
                        </div>
                    </div>
                    <dl class="mt-10 grid grid-cols-2 gap-8 border-t border-gray-900/10 pt-10 sm:grid-cols-4">
                        <div style="cursor:pointer;">
                            <img src="{{ url('img/technician.png') }}" alt="Technician" id="whatsappImage">
                        </div>
                        <a href="mailto:info@allhouseworks.com">
                            <div style="cursor:pointer;">
                                <img src="{{ url('img/gmail.png') }}" alt="Technician" id="whatsappImage">
                            </div>
                        </a>

                    </dl>
                    <div class="mt-10 flex">
                        <a href="/about" class="text-base font-semibold leading-7 text-yellow-500">Learn more about our company <span aria-hidden="true">&rarr;</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer-bg text-white py-10">
        <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-4 gap-8">
            <div>
                <h2 class="text-xl font-bold mb-4 footer-text-yellow border-b-2 border-yellow-500">About Allhouseworks Services</h2>
                <p style="font-family: system-ui;font-size: inherit;line-height: 20px;">Allhouseworks stands as Singapore’s top choice for Home Maintenance, providing top-quality services such as Handyman, Electrical, Plumbing, and Aircon Servicing. With our easy online booking, you can connect with us via WhatsApp and let our dedicated 4-star customer service team handle everything for you. Thousands of satisfied customers rely on us for fast, transparent quotes and reliable service. Reach out on WhatsApp at +65 9658 5757 now for all your home and office maintenance needs!</p>
            </div>
            <div style="margin-left: 58px;">
                <h2 class="text-xl font-bold mb-4 footer-text-yellow ">Useful Links</h2>
                <ul class="space-y-2" style="line-height: 25px;font-size: medium;">
                    <li><a href="/" class="hover:underline">Home</a></li>
                    <li><a href="/about" class="hover:underline">About Us</a></li>
                    <li><a href="/review" class="hover:underline">Review</a></li>
                    <li><a href="/mission" class="hover:underline">Mission</a></li>
                    <li><a href="/service" class="hover:underline">Services</a></li>
                    <li><a href="/works" class="hover:underline">Works</a></li>
                    <li><a href="/contact" class="hover:underline">Contact</a></li>
                    <li><a href="/price" class="hover:underline">Price</a></li>
                </ul>
            </div>
            <div>
                <h2 class="text-xl font-bold mb-4 footer-text-yellow">Opening Hours</h2>
                <ul class="space-y-2 " style="font-size: medium;line-height: 34px;">
                    <li>Monday - 8:00AM to 8:00PM</li>
                    <li>Tuesday - 8:00AM to 8:00PM</li>
                    <li>Wednesday - 8:00AM to 8:00PM</li>
                    <li>Thursday - 8:00AM to 8:00PM</li>
                    <li>Friday - 8:00AM to 6:00PM</li>
                    <li>Saturday - 9:00AM to 6:00PM</li>
                    <li>Sunday - 8:00AM to 8:00PM</li>
                </ul>
            </div>
            <div>
                <h2 class="text-xl font-bold mb-4 footer-text-yellow">Contact Here</h2>
                <ul class="space-y-2" style="font-size: medium;line-height: 28px;">
                    <li><a href="https://www.google.com/maps/search/?api=1&query=1090+Lower+Delta+Road+%2303-07,+Singapore+169201" target="_blank">1090 Lower Delta Road #03-07, Singapore 169201</a></li>
                    <li>WhatsApp (Message Only): <a href="https://wa.me/6596585757" style="color: #F69919;font-weight: 700;">+65 9658 5757</a></li>
                    <li>Email: <a href="mailto:info@allhouseworks.com" style="color: #F69919;font-weight: 700;">info@allhouseworks.com</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <style>
        .footer-bg {
            background-image: linear-gradient(rgb(0 0 0 / 67%), rgb(0 0 0 / 81%)), url(https://img.pikbest.com/origin/09/17/44/54fpIkbEsTrpq.jpg!w700wp);
            background-attachment: fixed;
        }

        .footer-text-yellow {
            color: #f8b500;
        }
    </style>


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

    // Main menu opening
    document.getElementById('mobile-menu-toggle').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const overlay = document.getElementById('menu-overlay');
        menu.style.left = '0';
        overlay.style.display = 'block';
    });

    // Close main menu
    document.getElementById('close-menu').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const overlay = document.getElementById('menu-overlay');
        menu.style.left = '-100%';
        overlay.style.display = 'none';
    });

    // Click outside to close menu
    document.getElementById('menu-overlay').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const secondaryMenu = document.getElementById('secondary-menu');
        const secondaryServiceMenu = document.getElementById('secondary-service-menu');
        const plumberMenu = document.getElementById('plumber-menu');
        const overlay = document.getElementById('menu-overlay');
        menu.style.left = '-100%';
        secondaryMenu.style.left = '-100%';
        secondaryServiceMenu.style.left = '-100%';
        plumberMenu.style.left = '-100%';
        overlay.style.display = 'none';
    });

    // Open secondary menu when clicking "About Us"
    document.getElementById('about-us-btn').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const secondaryMenu = document.getElementById('secondary-menu');
        menu.style.left = '-100%';
        secondaryMenu.style.left = '0';
    });

    // Return to main menu from secondary menu
    document.getElementById('return-main-menu').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const secondaryMenu = document.getElementById('secondary-menu');
        secondaryMenu.style.left = '-100%';
        menu.style.left = '0';
    });

    // Open service submenu when clicking "Service"
    document.getElementById('service-btn').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const secondaryServiceMenu = document.getElementById('secondary-service-menu');
        menu.style.left = '-100%';
        secondaryServiceMenu.style.left = '0';
    });

    // Return to main menu from service submenu
    document.getElementById('return-service-main-menu').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const secondaryServiceMenu = document.getElementById('secondary-service-menu');
        secondaryServiceMenu.style.left = '-100%';
        menu.style.left = '0';
    });

    // Open plumber menu when clicking "Plumber"
    document.getElementById('plumber-btn').addEventListener('click', function() {
        const secondaryServiceMenu = document.getElementById('secondary-service-menu');
        const plumberMenu = document.getElementById('plumber-menu');
        secondaryServiceMenu.style.left = '-100%';
        plumberMenu.style.left = '0';
    });

    // Return to service submenu from plumber menu
    document.getElementById('return-plumber-menu').addEventListener('click', function() {
        const secondaryServiceMenu = document.getElementById('secondary-service-menu');
        const plumberMenu = document.getElementById('plumber-menu');
        plumberMenu.style.left = '-100%';
        secondaryServiceMenu.style.left = '0';
    });
    // Open submenu 222 when clicking "222"
    document.querySelector('#plumber-menu .newMb a[href="/about"]').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the default link behavior
        const plumberMenu = document.getElementById('plumber-menu');
        const submenu222 = document.getElementById('submenu-222');
        plumberMenu.style.left = '-100%';
        submenu222.style.left = '0';
    });

    // Return to plumber menu from submenu 222
    document.getElementById('return-submenu-222').addEventListener('click', function() {
        const plumberMenu = document.getElementById('plumber-menu');
        const submenu222 = document.getElementById('submenu-222');
        submenu222.style.left = '-100%';
        plumberMenu.style.left = '0';
    });
    // Open submenu Plumbing Choke when clicking "Plumbing Choke"
    document.getElementById('plumbing-choke-btn').addEventListener('click', function() {
        const plumberMenu = document.getElementById('plumber-menu');
        const submenuPlumbingChoke = document.getElementById('submenu-plumbing-choke');
        plumberMenu.style.left = '-100%';
        submenuPlumbingChoke.style.left = '0';
    });

    // Return to plumber menu from submenu Plumbing Choke
    document.getElementById('return-plumbing-choke-menu').addEventListener('click', function() {
        const plumberMenu = document.getElementById('plumber-menu');
        const submenuPlumbingChoke = document.getElementById('submenu-plumbing-choke');
        submenuPlumbingChoke.style.left = '-100%';
        plumberMenu.style.left = '0';
    });




    // WhatsApp
    document.getElementById('whatsappImage').addEventListener('click', function() {
        var message = "Good day, I am interested in learning more about your services. Could you please provide me with more information? Thank you.";
        var phoneNumber = "6596585757";
        var whatsappUrl = "https://wa.me/" + phoneNumber + "?text=" + encodeURIComponent(message);
        window.open(whatsappUrl, '_blank');
    });
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
    // Open Water Heater submenu
    document.getElementById('water-heater-btn').addEventListener('click', function() {
        const plumberMenu = document.getElementById('plumber-menu');
        const submenuWaterHeater = document.getElementById('submenu-water-heater');
        plumberMenu.style.left = '-100%';
        submenuWaterHeater.style.left = '0';
    });

    // Return to Plumber menu from Water Heater submenu
    document.getElementById('return-water-heater-menu').addEventListener('click', function() {
        const plumberMenu = document.getElementById('plumber-menu');
        const submenuWaterHeater = document.getElementById('submenu-water-heater');
        submenuWaterHeater.style.left = '-100%';
        plumberMenu.style.left = '0';
    });
    // Open Toilet Bowl submenu
    document.getElementById('toilet-bowl-btn').addEventListener('click', function() {
        const plumberMenu = document.getElementById('plumber-menu');
        const submenuToiletBowl = document.getElementById('submenu-toilet-bowl');
        plumberMenu.style.left = '-100%';
        submenuToiletBowl.style.left = '0';
    });

    // Return to Plumber menu from Toilet Bowl submenu
    document.getElementById('return-toilet-bowl-menu').addEventListener('click', function() {
        const plumberMenu = document.getElementById('plumber-menu');
        const submenuToiletBowl = document.getElementById('submenu-toilet-bowl');
        submenuToiletBowl.style.left = '-100%';
        plumberMenu.style.left = '0';
    });
    // Open Shower Service submenu
    document.getElementById('shower-service-btn').addEventListener('click', function() {
        const plumberMenu = document.getElementById('plumber-menu');
        const submenuShowerService = document.getElementById('submenu-shower-service');
        plumberMenu.style.left = '-100%';
        submenuShowerService.style.left = '0';
    });

    // Return to Plumber menu from Shower Service submenu
    document.getElementById('return-shower-service-menu').addEventListener('click', function() {
        const plumberMenu = document.getElementById('plumber-menu');
        const submenuShowerService = document.getElementById('submenu-shower-service');
        submenuShowerService.style.left = '-100%';
        plumberMenu.style.left = '0';
    });
    // Open Electrician submenu when clicking "Electrician"
    document.getElementById('electrician-btn').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const electricianMenu = document.getElementById('electrician-menu');
        menu.style.left = '-100%';
        electricianMenu.style.left = '0';
    });

    // Return to main menu from Electrician submenu
    document.getElementById('return-electrician-menu').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const electricianMenu = document.getElementById('electrician-menu');
        electricianMenu.style.left = '-100%';
        menu.style.left = '0';
    });

    // Click outside to close Electrician submenu
    document.getElementById('menu-overlay').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const electricianMenu = document.getElementById('electrician-menu');
        const overlay = document.getElementById('menu-overlay');
        menu.style.left = '-100%';
        electricianMenu.style.left = '-100%';
        overlay.style.display = 'none';
    });
    // Open Light Service submenu when clicking "Light Service"
    document.getElementById('light-service-btn').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const lightServiceMenu = document.getElementById('light-service-menu');
        menu.style.left = '-100%';
        lightServiceMenu.style.left = '0';
    });

    // Return to main menu from Light Service submenu
    document.getElementById('return-light-service-menu').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const lightServiceMenu = document.getElementById('light-service-menu');
        lightServiceMenu.style.left = '-100%';
        menu.style.left = '0';
    });

    // Click outside to close Light Service submenu
    document.getElementById('menu-overlay').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const lightServiceMenu = document.getElementById('light-service-menu');
        const overlay = document.getElementById('menu-overlay');
        menu.style.left = '-100%';
        lightServiceMenu.style.left = '-100%';
        overlay.style.display = 'none';
    });
    // Open Handyman submenu when clicking "Handyman"
    document.getElementById('handyman-btn').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const handymanMenu = document.getElementById('handyman-menu');
        menu.style.left = '-100%';
        handymanMenu.style.left = '0';
    });

    // Return to main menu from Handyman submenu
    document.getElementById('return-handyman-menu').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const handymanMenu = document.getElementById('handyman-menu');
        handymanMenu.style.left = '-100%';
        menu.style.left = '0';
    });

    // Click outside to close Handyman submenu
    document.getElementById('menu-overlay').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const handymanMenu = document.getElementById('handyman-menu');
        const overlay = document.getElementById('menu-overlay');
        menu.style.left = '-100%';
        handymanMenu.style.left = '-100%';
        overlay.style.display = 'none';
    });
    // Open Deep Cleaning submenu when clicking "Deep Cleaning"
    document.getElementById('deepclean-btn').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const deepcleanMenu = document.getElementById('deepclean-menu');
        menu.style.left = '-100%';
        deepcleanMenu.style.left = '0';
    });

    // Return to main menu from Deep Cleaning submenu
    document.getElementById('return-deepclean-menu').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const deepcleanMenu = document.getElementById('deepclean-menu');
        deepcleanMenu.style.left = '-100%';
        menu.style.left = '0';
    });

    // Click outside to close Deep Cleaning submenu
    document.getElementById('menu-overlay').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const deepcleanMenu = document.getElementById('deepclean-menu');
        const overlay = document.getElementById('menu-overlay');
        menu.style.left = '-100%';
        deepcleanMenu.style.left = '-100%';
        overlay.style.display = 'none';
    });
    // Open Floor Polishing submenu when clicking "Floor Polishing"
    document.getElementById('floor-polishing-btn').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const floorPolishingMenu = document.getElementById('floor-polishing-menu');
        menu.style.left = '-100%';
        floorPolishingMenu.style.left = '0';
    });

    // Return to main menu from Floor Polishing submenu
    document.getElementById('return-floor-polishing-menu').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const floorPolishingMenu = document.getElementById('floor-polishing-menu');
        floorPolishingMenu.style.left = '-100%';
        menu.style.left = '0';
    });

    // Click outside to close Floor Polishing submenu
    document.getElementById('menu-overlay').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const floorPolishingMenu = document.getElementById('floor-polishing-menu');
        const overlay = document.getElementById('menu-overlay');
        menu.style.left = '-100%';
        floorPolishingMenu.style.left = '-100%';
        overlay.style.display = 'none';
    });
    // Open Floor Cleaning submenu when clicking "Floor Cleaning"
    document.getElementById('floor-cleaning-btn').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const floorCleaningMenu = document.getElementById('floor-cleaning-menu');
        menu.style.left = '-100%';
        floorCleaningMenu.style.left = '0';
    });

    // Return to main menu from Floor Cleaning submenu
    document.getElementById('return-floor-cleaning-menu').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const floorCleaningMenu = document.getElementById('floor-cleaning-menu');
        floorCleaningMenu.style.left = '-100%';
        menu.style.left = '0';
    });

    // Click outside to close Floor Cleaning submenu
    document.getElementById('menu-overlay').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const floorCleaningMenu = document.getElementById('floor-cleaning-menu');
        const overlay = document.getElementById('menu-overlay');
        menu.style.left = '-100%';
        floorCleaningMenu.style.left = '-100%';
        overlay.style.display = 'none';
    });
    // Open Wood Varnishing submenu when clicking "Wood Varnishing"
    document.getElementById('wood-varnishing-btn').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const woodVarnishingMenu = document.getElementById('wood-varnishing-menu');
        menu.style.left = '-100%';
        woodVarnishingMenu.style.left = '0';
    });

    // Return to main menu from Wood Varnishing submenu
    document.getElementById('return-wood-varnishing-menu').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const woodVarnishingMenu = document.getElementById('wood-varnishing-menu');
        woodVarnishingMenu.style.left = '-100%';
        menu.style.left = '0';
    });

    // Click outside to close Wood Varnishing submenu
    document.getElementById('menu-overlay').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const woodVarnishingMenu = document.getElementById('wood-varnishing-menu');
        const overlay = document.getElementById('menu-overlay');
        menu.style.left = '-100%';
        woodVarnishingMenu.style.left = '-100%';
        overlay.style.display = 'none';
    });
    // Open Decking submenu when clicking "Decking"
    document.getElementById('decking-btn').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const deckingMenu = document.getElementById('decking-menu');
        menu.style.left = '-100%';
        deckingMenu.style.left = '0';
    });

    // Return to main menu from Decking submenu
    document.getElementById('return-decking-menu').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const deckingMenu = document.getElementById('decking-menu');
        deckingMenu.style.left = '-100%';
        menu.style.left = '0';
    });

    // Click outside to close Decking submenu
    document.getElementById('menu-overlay').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        const deckingMenu = document.getElementById('decking-menu');
        const overlay = document.getElementById('menu-overlay');
        menu.style.left = '-100%';
        deckingMenu.style.left = '-100%';
        overlay.style.display = 'none';
    });
</script>
