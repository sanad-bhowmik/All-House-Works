<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AllHouseWorks</title>
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
        background: url("https://t4.ftcdn.net/jpg/02/91/14/23/360_F_291142315_1HDHshpssor08inb91jnXZxB02M3rIgi.jpg") no-repeat center center;
        background-size: cover;
    }

    #header_slider #slide_item:nth-child(2) {
        background: url("https://media.istockphoto.com/id/1436521782/photo/team-of-professional-cleaners-tidying-up-the-room.webp?b=1&s=170667a&w=0&k=20&c=E4Ru1OhTSNliZSNVwevKKDrH4CFjhnQfsNnPXCciBfc=") no-repeat center center;
        background-size: cover;
    }

    #header_slider #slide_item:nth-child(3) {
        background: url("https://st5.depositphotos.com/39034226/62384/i/450/depositphotos_623846382-stock-photo-female-cleaning-specialist-using-window.jpg") no-repeat center center;
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
                        <p class="text-gray-500">+65 6575 1226</p>
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
    <!-- Scroll Up -->
    <nav id="main-nav" class="bg-white shadow-lg relative z-50 sticky">
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 border-t" style="background-color: #f69918;">
            <div class="relative flex items-center justify-between h-16" id="kol">
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
                            <div class=" " style="border-top: 4px solid rgb(255 255 255);">
                                <a href="/" class="text-gray-900 hover:text-brown-500 px-3 rounded-md text-lg font-medium">Home</a>
                            </div>
                            <div class="relative group hover-border-top">
                                <a href="/about" class="text-gray-900 hover:text-brown-500 px-3 rounded-md text-lg font-medium flex items-center">About
                                    <svg class="ml-1 transform transition-transform duration-500 ease-in-out" style="width: 1rem; height: 1rem;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M10 12.59l-4.95-4.95a1.41 1.41 0 10-2 2l7.45 7.5a1.41 1.41 0 002 0l7.45-7.5a1.41 1.41 0 10-2-2L10 12.59z" />
                                    </svg>
                                </a>
                                <div class="absolute hidden group-hover:block text-white bg-gray-800 shadow-lg rounded-md w-40 z-50">
                                    <a href="/review" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Review</a>
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
            <div class="sm:hidden hidden" id="mobile-menu">
                <div class="px-2 pt-2 pb-3 space-y-1">
                    <a href="/" class="text-gray-700 hover:text-brown-500 block px-3 py-2 rounded-md text-base font-medium">Home</a>

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


    <!-- Banner Section -->
    <section class="bg-cover bg-center relative parallax" style="background-image: url('https://images.pexels.com/photos/4108712/pexels-photo-4108712.jpeg?cs=srgb&dl=pexels-cottonbro-4108712.jpg&fm=jpg'); background-size: cover; background-repeat: no-repeat; height: 100vh; background-attachment: fixed;">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="relative z-10 p-6 md:p-24 banner flex flex-col items-center justify-center text-center text-white" style="padding-top: 150px;">
            <h1 class="text-2xl md:text-4xl font-bold" style="font-size: 43px; text-align: center; font-family: math;line-height: normal;">Household Repairs & Handyman Solutions <br>
                Conveniently Delivered Right to Your Doorstep</h1>
            <p class="mt-4 md:mt-6" style="font-size: 18px; line-height: 1.2; text-align: center;">Reach out to us with your home maintenance needs, and we'll take care of the rest. <br> Get in touch with our handyman and service experts for immediate home assessments and direct quotes.</p>
            <a id="sendbtn" class="shortcode_wa_button mt-4 md:mt-6 inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500" href="https://api.whatsapp.com/send?phone=6565751226&amp;text=Hello, I would like to know more about the following home service" target="_blank" data-wpel-link="external" rel="nofollow external noopener noreferrer">
                <img src="img/whatsapp.png" alt="" class="mr-2"><span>WhatsApp to Start Now!</span>
            </a>
        </div>
    </section>

    <div class="flex items-end justify-end fixed bottom-0 right-0 mb-4 mr-4 z-10">
        <div class="relative group">
            <a title="Let's Start Chat" href="https://wa.me/6596585757" target="_blank" class="block w-16 h-16 rounded-full transition-all shadow hover:shadow-lg transform hover:scale-110 hover:rotate-12">
                <img class="object-cover object-center w-full h-full rounded-full" src="{{ url('img/social.png') }}" />
            </a>
            <div class="opacity-0 group-hover:opacity-100 transition-opacity duration-300 absolute right-full mr-2 w-32 bg-white text-black text-center text-lg rounded py-1 shadow-lg border-2 border-black" style="top: 50%; transform: translateY(-50%);">
                Let's Start Chat
                <svg class="absolute text-white h-2 w-full top-1/2 right-0" style="transform: translateY(-50%); fill: currentColor;" viewBox="0 0 255 255" xmlns="http://www.w3.org/2000/svg">
                    <polygon points="0,0 127.5,127.5 0,255" />
                </svg>
            </div>
        </div>
    </div>


    <section class="mt-10">
        <div class="relative flex flex-col md:flex-row items-center md:items-start mt-8">
            <span class="bg-yellow-500 yellow-triangle absolute left-0 h-20 hidden md:block"></span>
            <h3 class="bg-black text-white black-polygon h-auto md:h-20 flex items-center justify-center ml-0 md:ml-24 pl-4 pr-4 md:pr-24 text-center md:text-left w-full md:max-w-2/3" style="font-size: 26px;font-weight: 600;font-family: Josefin sans-serif;">
                <span class="inner-span">All-in-One Handyman Services for Modern Living Convenience</span>
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


        <p class="text-center text-lg text-gray-600 mt-6 md:mt-12">We provide efficient solutions to ensure every home task is expertly handled by qualified professionals.</p>

        <!-- component -->
        <section class=" bg-blue-500ray-50">
            <div class="py-10  sm:py-16 block lg:py-24 relative bg-opacity-50  z-40  ">

                <div class="relative mx-auto h-full px-4 pb-20   md:pb-10 sm:max-w-xl md:max-w-full md:px-24 lg:max-w-screen-xl lg:px-8">
                    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8 relative">
                        <div class="grid grid-cols-1 gap-2 sm:grid-cols-3">
                            <a href="#" class="transition-all shadow-lg duration-1000 bg-white hover:bg-blue-500  hover:shadow-xl m-2 p-4 relative z-40 group  " style="cursor:context-menu;">
                                <div class=" absolute  bg-blue-500 top-0 left-0 w-24 h-1 z-30  transition-all duration-200   group-hover:bg-white group-hover:w-1/2  ">
                                </div>
                                <div class="py-2 px-9 relative  ">

                                    <svg class="w-16 h-16 fill-gray-400 group-hover:fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" id="polo-tshirt">
                                        <path d="m16.962 5.841 3.582.717-.716-4.115zM12.172 2.443l-.716 4.115 3.582-.717z">
                                        </path>
                                        <path d="M28.488 7.301a5.354 5.354 0 0 0-2.743-3.305c-.112-.056-2.96-1.2-4.942-1.996l.87 4.987a.52.52 0 0 1-.488.746.535.535 0 0 1-.101-.01L16.5 6.806V12a.5.5 0 1 1-1 0V6.806l-4.583.917a.518.518 0 0 1-.613-.598L11.196 2c-1.982.796-4.828 1.94-4.94 1.996a5.36 5.36 0 0 0-2.75 3.328l-1.492 6.26c-.042.175.01.359.138.486l.608.608a5.487 5.487 0 0 0 3.907 1.618c.196 0 .375-.111.464-.287l1.072-2.145c.013.292.02.584.02.876V28.48c0 .231.153.435.375.499A27.03 27.03 0 0 0 16 30c2.508 0 5.015-.34 7.402-1.022a.52.52 0 0 0 .376-.5V14.74c0-.292.006-.584.019-.876l1.073 2.145a.519.519 0 0 0 .463.287 5.487 5.487 0 0 0 3.907-1.618l.608-.608a.518.518 0 0 0 .138-.487l-1.498-6.282zM17.03 11.5c-.276 0-.505-.224-.505-.5s.219-.5.495-.5h.01a.5.5 0 0 1 0 1zm0-2c-.276 0-.505-.224-.505-.5s.219-.5.495-.5h.01a.5.5 0 0 1 0 1z">
                                        </path>
                                    </svg>
                                    <h3 class="mt-8 text-2xl font-semibold text-black group-hover:text-white ">Effortless Scheduling</h3>
                                    <p class="mt-4 text-lg text-gray-600 group-hover:text-white  ">We deliver time-saving solutions, ensuring every home task is expertly completed by qualified professionals.</p>
                                </div>
                            </a>

                            <a href="#" class="transition-all shadow-lg duration-1000 bg-white hover:bg-blue-500  hover:shadow-xl m-2 p-4 relative z-40 group  " style="cursor:context-menu;">
                                <div class=" absolute  bg-blue-500 top-0 left-0 w-24 h-1 z-30  transition-all duration-200   group-hover:bg-white group-hover:w-1/2  ">
                                </div>
                                <div class="py-2 px-9 relative  ">
                                    <svg class="w-16 h-16 fill-gray-400 group-hover:fill-white" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 64 64" viewBox="0 0 64 64" id="furniture">
                                        <path d="M13.6 4.8v54.3c0 .4.3.8.8.8H31v-2.3H19c-.6 0-1-.5-1-1s.5-1 1-1h12V4.1H14.4C14 4.1 13.6 4.4 13.6 4.8zM29.1 38.2c0 .6-.5 1-1 1s-1-.5-1-1v-1.3c0-.6.5-1 1-1s1 .5 1 1V38.2zM29.1 25.8v6.5c0 .6-.5 1-1 1s-1-.5-1-1v-6.5c0-.6.5-1 1-1S29.1 25.3 29.1 25.8zM16.1 11c0-1.6 1.3-2.8 2.8-2.8h7.4c.6 0 1 .5 1 1 0 .6-.5 1-1 1H19c-.4 0-.8.3-.8.8v17.2c0 .6-.5 1-1 1-.6 0-1-.5-1-1V11zM49.6 4.1H33v51.5h12c.4 0 .8-.3.8-.8V9.2c0-.6.5-1 1-1s1 .5 1 1v45.5c0 1.6-1.3 2.8-2.8 2.8H33v2.3h16.6c.4 0 .8-.3.8-.8V4.8C50.4 4.4 50 4.1 49.6 4.1zM37 38.2c0 .6-.5 1-1 1s-1-.5-1-1v-1.3c0-.6.5-1 1-1s1 .5 1 1V38.2zM37 32.3c0 .6-.5 1-1 1s-1-.5-1-1v-6.5c0-.6.5-1 1-1s1 .5 1 1V32.3z">
                                        </path>
                                    </svg>
                                    <h3 class="mt-8 text-2xl font-semibold text-black group-hover:text-white ">Comprehensive Convenience</h3>
                                    <p class="mt-4 text-lg text-gray-600 group-hover:text-white">Our solutions are designed to provide a seamless experience. Choose the services or product installations you need, and we'll handle everything for you.</p>
                                </div>
                            </a>

                            <a href="#" class="transition-all shadow-lg duration-1000 bg-white hover:bg-blue-500  hover:shadow-xl m-2 p-4 relative z-40 group " style="cursor:context-menu;">
                                <div class=" absolute  bg-blue-500 top-0 left-0 w-24 h-1 z-30  transition-all duration-200   group-hover:bg-white group-hover:w-1/2  ">
                                </div>
                                <div class="py-2 px-9 relative  ">
                                    <svg class="w-16 h-16 fill-gray-400 group-hover:fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" id="engine">
                                        <path d="M60,34H56a1,1,0,0,0-1,1v3H52V28a1,1,0,0,0-1-1H47.51l-4.7-6.58A1,1,0,0,0,42,20H35V17h3a1,1,0,0,0,1-1V12a1,1,0,0,0-1-1H26a1,1,0,0,0-1,1v4a1,1,0,0,0,1,1h3v3H24a1,1,0,0,0-.81.42L18.49,27H13a1,1,0,0,0-1,1V38H9V35a1,1,0,0,0-1-1H4a1,1,0,0,0-1,1V47a1,1,0,0,0,1,1H8a1,1,0,0,0,1-1V44h3v5a1,1,0,0,0,1,1H24.59l2.7,2.71A1,1,0,0,0,28,53H48a1,1,0,0,0,.71-.29l3-3A1,1,0,0,0,52,49V44h3v3a1,1,0,0,0,1,1h4a1,1,0,0,0,1-1V35A1,1,0,0,0,60,34ZM35.77,37.64l-5,6A1,1,0,0,1,30,44a1,1,0,0,1-.64-.23,1,1,0,0,1-.13-1.41L32.87,38H29a1,1,0,0,1-.77-1.64l5-6a1,1,0,0,1,1.54,1.28L31.13,36H35a1,1,0,0,1,.77,1.64Z">
                                        </path>
                                    </svg>
                                    <h3 class="mt-8 text-2xl font-semibold text-black group-hover:text-white ">Exceptional Customer Support</h3>
                                    <p class="mt-4 text-lg text-gray-600 group-hover:text-white">Our dedicated team provides attentive follow-up with clear and transparent communication. We'll assess the issue and recommend the best solution tailored to your specific needs.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
        </section>
    </section>


    <div class="flex justify-center items-center dark:bg-slate-800" style="margin-top: -92px;">
        <div class="mx-auto mt-10 flex justify-center px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8">
            <div class="text-center ">
                <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 dark:text-slate-200 sm:text-5xl md:text-6xl">
                    <span class="block xl:inline"><span class="mb-1 block">We've Completed More Than</span>
                        <span class="bg-gradient-to-r from-indigo-400 to-pink-600 bg-clip-text text-transparent">

                            <span class="relative mt-3 whitespace-nowrap text-blue-600"><svg aria-hidden="true" viewBox="0 0 418 42" class="absolute top-3/4 left-0 right-0 m-auto h-[0.58em] w-fit fill-pink-400/50" preserveAspectRatio="none">
                                    <path d="M203.371.916c-26.013-2.078-76.686 1.963-124.73 9.946L67.3 12.749C35.421 18.062 18.2 21.766 6.004 25.934 1.244 27.561.828 27.778.874 28.61c.07 1.214.828 1.121 9.595-1.176 9.072-2.377 17.15-3.92 39.246-7.496C123.565 7.986 157.869 4.492 195.942 5.046c7.461.108 19.25 1.696 19.17 2.582-.107 1.183-7.874 4.31-25.75 10.366-21.992 7.45-35.43 12.534-36.701 13.884-2.173 2.308-.202 4.407 4.442 4.734 2.654.187 3.263.157 15.593-.78 35.401-2.686 57.944-3.488 88.365-3.143 46.327.526 75.721 2.23 130.788 7.584 19.787 1.924 20.814 1.98 24.557 1.332l.066-.011c1.201-.203 1.53-1.825.399-2.335-2.911-1.31-4.893-1.604-22.048-3.261-57.509-5.556-87.871-7.36-132.059-7.842-23.239-.254-33.617-.116-50.627.674-11.629.54-42.371 2.494-46.696 2.967-2.359.259 8.133-3.625 26.504-9.81 23.239-7.825 27.934-10.149 28.304-14.005.417-4.348-3.529-6-16.878-7.066Z">
                                    </path>
                                </svg>
                                <span class="relative">20,000+</span>
                            </span>
                            Works
                        </span>
                    </span>
                </h1>
                <div class="mt-5 sm:mt-8 sm:flex sm:justify-center">
                    <div class="rounded-md shadow">
                        <a href="https://api.whatsapp.com/send?phone=6596585757&text=Hello%2C%20I%20need%20assistance%20today" target="_blank" class="flex w-full items-center justify-center rounded-md border border-transparent bg-green-500 px-8 py-3 text-base font-medium text-white hover:bg-green-700 md:py-4 md:px-10 md:text-lg">
                            How Can We Help You Today?
                            <img src="http://127.0.0.1:8000/img/social.png" style="height: 25px; margin-left: 10px;" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="inline-flex items-center justify-center w-full mt-6">
        <hr class="w-64 h-1 my-8 bg-gray-200 border-0 rounded dark:bg-gray-700" style="width: 95%;">
        <div class="absolute px-4 -translate-x-1/2 bg-white left-90 dark:bg-gray-900">
            <svg class="w-4 h-4 text-gray-700 dark:text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
                <path d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z" />
            </svg>
        </div>
    </div>


    <!-- Popular Home Maintenance Services -->
    <section class="mt-14">
        <div class="max-w-sm p-6 bg-white rounded-lg dark:border-gray-700 text-center mx-auto">
            <svg class="mx-auto mb-6" fill="#000000" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="48px" height="48px" viewBox="0 0 495.398 495.398" xml:space="preserve">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <g>
                        <g>
                            <g>
                                <path d="M487.083,225.514l-75.08-75.08V63.704c0-15.682-12.708-28.391-28.413-28.391c-15.669,0-28.377,12.709-28.377,28.391v29.941L299.31,37.74c-27.639-27.624-75.694-27.575-103.27,0.05L8.312,225.514c-11.082,11.104-11.082,29.071,0,40.158c11.087,11.101,29.089,11.101,40.172,0l187.71-187.729c6.115-6.083,16.893-6.083,22.976-0.018l187.742,187.747c5.567,5.551,12.825,8.312,20.081,8.312c7.271,0,14.541-2.764,20.091-8.312C498.17,254.586,498.17,236.619,487.083,225.514z"></path>
                                <path d="M257.561,131.836c-5.454-5.451-14.285-5.451-19.723,0L72.712,296.913c-2.607,2.606-4.085,6.164-4.085,9.877v120.401c0,28.253,22.908,51.16,51.16,51.16h81.754v-126.61h92.299v126.61h81.755c28.251,0,51.159-22.907,51.159-51.159V306.79c0-3.713-1.465-7.271-4.085-9.877L257.561,131.836z"></path>
                            </g>
                        </g>
                    </g>
                </g>
            </svg>
            <a href="#">
                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Popular Home Maintenance Services</h5>
            </a>
            <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Contact us to diagnose and receive an instant quote for all your home maintenance and handyman tasks, including air conditioning, plumbing, and electrical services.</p>
        </div>

        <div class="flex flex-wrap gap-6 justify-center mt-6">
            <!-- card-1 -->
            <a href="/plumbing" target="_blank">
                <div class="max-w-xs bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <img class="rounded-t-lg" src="https://vlasconstruction.com/wp-content/uploads/2023/08/Plumbing-Services-003.jpg" alt="" style="border-top: 5px solid #f7a80c;" />
                    <div class="p-5">
                        <h5 class="mb-2 text-xl text-center font-medium tracking-tight text-gray-900 dark:text-white">PLUMBER SERVICES</h5>
                    </div>
                </div>
            </a>

            <!-- card-1 -->
            <!-- card-2 -->
            <div class="max-w-xs bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="/electric">
                    <img class="rounded-t-lg" src="https://images.squarespace-cdn.com/content/v1/60d1c27a3fe67824cc3c5f3b/d4c00972-1be7-4ffe-9dcc-ababba2b0cc3/Midatt+electrical+services.jpg" alt="" style="border-top: 5px solid #f7a80c;" />
                </a>
                <div class="p-5">
                    <a href="/electric">
                        <h5 class="mb-2 text-xl text-center font-medium tracking-tight text-gray-900 dark:text-white">ELECTRIC SERVICES</h5>
                    </a>
                </div>
            </div>

            <!-- card-2 -->
            <!-- card-3 -->
            <div class="max-w-xs bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="/handyman">
                    <img class="rounded-t-lg" src="https://codeexmaintenance.com/wp-content/uploads/2022/01/handyman-.png" alt="" style="border-top: 5px solid #f7a80c;" />
                </a>
                <div class="p-5">
                    <a href="/handyman">
                        <h5 class="mb-2 text-xl text-center font-medium tracking-tight text-gray-900 dark:text-white">HANDYMAN SERVICES</h5>
                    </a>
                </div>
            </div>

            <!-- card-3 -->
        </div>
        <div class="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-16">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-10">
                <!-- CARD 1 -->
                <div class="rounded overflow-hidden flex flex-col" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                    <a href="/wood" target="_blank"></a>
                    <div class="relative"><a href="/wood" target="_blank">
                            <img class="w-full h-48 object-cover" src="https://www.itsplaneandsimple.com/Content/BlogImages/P%26S_Blog_Images-wood2_100821142841.jpg" alt="Sunset in the mountains">
                            <div class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                            </div>
                        </a>
                    </div>
                    <div class="px-6 py-4 mb-auto" style="text-align: center;">
                        <a href="/wood" target="_blank" class="font-medium text-lg inline-block hover:text-indigo-600 transition duration-500 ease-in-out inline-block mb-2">Wood Varnishing</a>
                    </div>
                    <div class="px-6 py-1 flex flex-row items-center justify-between" style="background-color: #f7a80c;">
                    </div>
                </div>
                <!-- CARD 2 -->
                <div class="rounded overflow-hidden flex flex-col" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                    <a href="/deepclean" target="_blank"></a>
                    <div class="relative"><a href="/deepclean" target="_blank">
                            <img class="w-full h-48 object-cover" src="https://media.licdn.com/dms/image/D5612AQHkrhi78vXwrg/article-cover_image-shrink_720_1280/0/1691741644459?e=2147483647&v=beta&t=ClGXl6miAU8Al-dBeQVIYOZ9PynVy6d5JstgA3ZOROs" alt="Sunset in the mountains">
                            <div class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                            </div>
                        </a>
                    </div>
                    <div class="px-6 py-4 mb-auto" style="text-align: center;">
                        <a href="/deepclean" target="_blank" class="font-medium text-lg inline-block hover:text-indigo-600 transition duration-500 ease-in-out inline-block mb-2">Deep Cleaning</a>
                    </div>
                    <div class="px-6 py-1 flex flex-row items-center justify-between" style="background-color: #f7a80c;">
                    </div>
                </div>

                <!-- CARD 3 -->
                <div class="rounded overflow-hidden flex flex-col" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                    <a href="/floorpolish" target="_blank"></a>
                    <div class="relative"><a href="/floorpolish" target="_blank">
                            <img class="w-full h-48 object-cover" src="https://d7fcfvvxwoz9e.cloudfront.net/dom43635/wp-content/uploads/2020/08/polishing-a-concrete-floor.png" alt="Sunset in the mountains">
                            <div class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                            </div>
                        </a>
                    </div>
                    <div class="px-6 py-4 mb-auto" style="text-align: center;">
                        <a href="/floorpolish" target="_blank" class="font-medium text-lg inline-block hover:text-indigo-600 transition duration-500 ease-in-out inline-block mb-2">Floor Polishing</a>
                    </div>
                    <div class="px-6 py-1 flex flex-row items-center justify-between" style="background-color: #f7a80c;">
                    </div>
                </div>
                <!-- CARD 4 -->
                <div class="rounded overflow-hidden flex flex-col" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
                    <a href="/floorclean" target="_blank"></a>
                    <div class="relative"><a href="/floorclean" target="_blank">
                            <img class="w-full h-48 object-cover" src="https://s1.kaercher-media.com/images/pim/Weitere_Reinigungsl_sungen_620x310_Teaserbild_.jpg" alt="Sunset in the mountains">
                            <div class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                            </div>
                        </a>
                    </div>
                    <div class="px-6 py-4 mb-auto" style="text-align: center;">
                        <a href="/floorclean" target="_blank" class="font-medium text-lg inline-block hover:text-indigo-600 transition duration-500 ease-in-out inline-block mb-2">Floor Cleaning</a>
                    </div>
                    <div class="px-6 py-1 flex flex-row items-center justify-between" style="background-color: #f7a80c;">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Popular Home Maintenance Services -->


    <!-- All House Work's Happiness, Guaranteed -->
    <div class="flex" style="margin-left: 13%;width: 77%;">
        <section class="mt-32">
            <a href="#" class="flex flex-col items-center bg-white  md:flex-row hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <img class="object-cover w-425 h-350 md:h-96 md:w-425 md:rounded-none md:rounded-s-lg" src="https://storage.googleapis.com/carousell-wordpress-files/1/2022/10/sg_homeservice-autos_blogcover5.jpg" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        All House Works Happiness, Guaranteed
                        <span style="display: block;width: 114px;height: 3px;background-color: black;margin-top: 10px;"></span>
                        <span style="display: block;width: 49%;height: 2px;background-image: linear-gradient(to right, black 60%, #f7a80c 40%);">
                        </span>
                    </h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Your happiness is our goal. If you’re not happy, we’ll work to make it right. Our friendly customer service agents are available, 7 days a week. The All House Work's Happiness Guarantee only applies when you book and pay for a service directly through the All House Work's platform.</p>
                    <button style="background-color: #dd9933;width: 99px;height: 32px;font-family: math;">Learn More</button>
                </div>
            </a>
        </section>
    </div>
    <!-- All House Work's Happiness, Guaranteed -->


    <section class="mt-10 mb-10">
        <div class="p-4" id="timeline">
            <h2 class="text-3xl text-black font-bold mb-10 text-center">All House Work's For Businesses</h2>
            <p class="text-lg mb-10 text-black text-center">All House Work's provides easy access to quality home services at <br>affordable prices. This allows businesses to value-add their services for their customers.</p>
            <div class="flex flex-col grid-cols-9 p-2 mx-auto md:grid">
                <div class="flex md:contents flex-row-reverse">
                    <div class="relative p-4 my-6 text-gray-800 bg-white rounded-xl col-start-1 col-end-5 mr-auto md:mr-0 md:ml-auto" id="timebor">
                        <svg fill="#000000" class="ml-16 mb-2" height="45px" width="45px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 485.017 485.017" xml:space="preserve">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g>
                                    <path d="M361.205,68.899c-14.663,0-28.447,5.71-38.816,16.078c-21.402,21.403-21.402,56.228,0,77.631 c10.368,10.368,24.153,16.078,38.815,16.078s28.447-5.71,38.816-16.078c21.402-21.403,21.402-56.228,0-77.631 C389.652,74.609,375.867,68.899,361.205,68.899z M378.807,141.394c-4.702,4.702-10.953,7.292-17.603,7.292 s-12.901-2.59-17.603-7.291c-9.706-9.706-9.706-25.499,0-35.205c4.702-4.702,10.953-7.291,17.603-7.291s12.9,2.589,17.603,7.291 C388.513,115.896,388.513,131.688,378.807,141.394z"></path>
                                    <path d="M441.961,43.036C414.21,15.284,377.311,0,338.064,0c-39.248,0-76.146,15.284-103.897,43.036 c-42.226,42.226-54.491,105.179-32.065,159.698L0.254,404.584l-0.165,80.268l144.562,0.165v-55.722h55.705l0-55.705h55.705v-64.492 l26.212-26.212c17.615,7.203,36.698,10.976,55.799,10.976c39.244,0,76.14-15.282,103.889-43.032 C499.25,193.541,499.25,100.325,441.961,43.036z M420.748,229.617c-22.083,22.083-51.445,34.245-82.676,34.245 c-18.133,0-36.237-4.265-52.353-12.333l-9.672-4.842l-49.986,49.985v46.918h-55.705l0,55.705h-55.705v55.688l-84.5-0.096 l0.078-37.85L238.311,208.95l-4.842-9.672c-22.572-45.087-13.767-99.351,21.911-135.029C277.466,42.163,306.83,30,338.064,30 c31.234,0,60.598,12.163,82.684,34.249C466.34,109.841,466.34,184.025,420.748,229.617z"></path>
                                </g>
                            </g>
                        </svg>
                        <h3 class="text-lg font-semibold lg:text-xl">Landlords & Tenants</h3>
                    </div>
                    <div class="relative col-start-5 col-end-6 mr-7 md:mx-auto">
                        <div class="flex items-center justify-center w-6 h-full">
                            <div class="w-1 h-full bg-indigo-300 rounded-t-full bg-gradient-to-b from-indigo-400 to-indigo-300">
                            </div>
                        </div>
                        <div class="absolute w-6 h-6 -mt-3 bg-white border-4 border-indigo-400 rounded-full top-1/2"></div>
                    </div>
                </div>

                <div class="flex md:contents">
                    <div class="relative col-start-5 col-end-6 mr-7 md:mx-auto">
                        <div class="flex items-center justify-center w-6 h-full">
                            <div class="w-1 h-full bg-indigo-300"></div>
                        </div>
                        <div class="absolute w-6 h-6 -mt-3 bg-white border-4 border-indigo-400 rounded-full top-1/2"></div>
                    </div>
                    <div class="relative p-4 my-6 text-gray-800 bg-white rounded-xl col-start-6 col-end-10 mr-auto" id="timebor">
                        <svg class="ml-16 mb-2" height="45px" width="45px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M15.5777 3.38197L17.5777 4.43152C19.7294 5.56066 20.8052 6.12523 21.4026 7.13974C22 8.15425 22 9.41667 22 11.9415V12.0585C22 14.5833 22 15.8458 21.4026 16.8603C20.8052 17.8748 19.7294 18.4393 17.5777 19.5685L15.5777 20.618C13.8221 21.5393 12.9443 22 12 22C11.0557 22 10.1779 21.5393 8.42229 20.618L6.42229 19.5685C4.27063 18.4393 3.19479 17.8748 2.5974 16.8603C2 15.8458 2 14.5833 2 12.0585V11.9415C2 9.41667 2 8.15425 2.5974 7.13974C3.19479 6.12523 4.27063 5.56066 6.42229 4.43152L8.42229 3.38197C10.1779 2.46066 11.0557 2 12 2C12.9443 2 13.8221 2.46066 15.5777 3.38197Z" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path>
                                <path d="M21 7.5L17 9.5M12 12L3 7.5M12 12V21.5M12 12C12 12 14.7426 10.6287 16.5 9.75C16.6953 9.65237 17 9.5 17 9.5M17 9.5V13M17 9.5L7.5 4.5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path>
                            </g>
                        </svg>
                        <h3 class="text-lg font-semibold lg:text-xl">Interior Designers</h3>
                    </div>
                </div>

                <div class="flex md:contents flex-row-reverse">
                    <div class="relative p-4 my-6 text-gray-800 bg-white rounded-xl col-start-1 col-end-5 mr-auto md:mr-0 md:ml-auto" id="timebor">
                        <svg fill="#000000" class="ml-16 mb-2" height="45px" width="45px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <title>stack2</title>
                                <path d="M28.608 11.246l-12.608-8.632-12.608 8.632 12.608 8.631 12.608-8.631zM16 21.803l-11.129-7.338-1.479 1.535 12.608 8.631 12.608-8.631-1.499-1.568-11.109 7.371zM16 26.559l-11.129-7.338-1.479 1.535 12.608 8.631 12.608-8.631-1.499-1.568-11.109 7.371z"></path>
                            </g>
                        </svg>
                        <h3 class="text-lg font-semibold lg:text-xl">Service Partners</h3>
                    </div>
                    <div class="relative col-start-5 col-end-6 mr-7 md:mx-auto">
                        <div class="flex items-center justify-center w-6 h-full">
                            <div class="w-1 h-full bg-indigo-300 rounded-t-full bg-gradient-to-b from-indigo-400 to-indigo-300">
                            </div>
                        </div>
                        <div class="absolute w-6 h-6 -mt-3 bg-white border-4 border-indigo-400 rounded-full top-1/2"></div>
                    </div>
                </div>

                <div class="flex md:contents">
                    <div class="relative col-start-5 col-end-6 mr-7 md:mx-auto">
                        <div class="flex items-center justify-center w-6 h-full">
                            <div class="w-1 h-full bg-indigo-300"></div>
                        </div>
                        <div class="absolute w-6 h-6 -mt-3 bg-white border-4 border-indigo-400 rounded-full top-1/2"></div>
                    </div>
                    <div class="relative p-4 my-6 text-gray-800 bg-white rounded-xl col-start-6 col-end-10 mr-auto" id="timebor">
                        <svg fill="#000000" class="ml-16 mb-2" height="45px" width="45px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <title>barcode1</title>
                                <path d="M23.807 19.398h-1.758v0.586h1.758v-0.586zM17.248 21.156v0.586h1.758v0.586h0.586v-2.344h-0.586v1.172h-1.758zM17.248 23.5h1.172v-0.586h-1.172v0.586zM18.42 22.914h0.586v-0.586h-0.586v0.586zM17.248 19.984h-0.586v1.172h0.586v-1.172zM14 8h-2v10h2v-10zM16 8h-1v10h1v-10zM22.049 23.5h1.758v-0.586h-1.758v0.586zM19.006 19.398h-1.758v0.586h1.758v-0.586zM24.393 22.914v-2.93h-0.586v2.93h0.586zM25 8h-1v10h1v-10zM12.448 22.328h-0.586v0.586h0.586v-0.586zM20 8h-2v10h2v-10zM22 8h-1v10h1v-10zM21.463 22.914h0.586v-2.93h-0.586v2.93zM7.062 23.5h2.93v-0.586h-2.344v-0.586h-0.586v1.172zM7.062 20.57h0.586v-0.586h-0.586v0.586zM8.234 21.742h1.172v-0.586h-1.172v0.586zM13.034 21.156v0.586h1.172v-0.586h-1.172zM7.648 19.398v0.586h1.758v-0.586h-1.758zM8 8h-1v10h1v-10zM30 4h-28c-1.104 0-2 0.896-2 2v20c0 1.104 0.896 2 2 2h28c1.104 0 2-0.896 2-2v-20c0-1.104-0.896-2-2-2zM30 26h-28v-20h28v20zM6 8h-2v16h2v-16zM7.648 22.328h0.586v-0.586h-0.586v0.586zM14.792 19.984h-0.586v1.172h0.586v-1.172zM12.448 19.398v0.586h1.758v-0.586h-1.758zM9.992 21.156v-1.172h-0.586v1.172h0.586zM11.862 20.57h0.586v-0.586h-0.586v0.586zM11 8h-1v10h1v-10zM14.792 21.742h-0.586v1.172h0.586v-1.172zM14.206 23.5v-0.586h-1.758v0.586h1.758zM28 8h-2v16h2v-16z"></path>
                            </g>
                        </svg>
                        <h3 class="text-lg font-semibold lg:text-xl">Commercial Clients</h3>
                    </div>
                </div>

            </div>
        </div>
    </section>




    <div class="parallax py-24 sm:py-32 mt-16 mb-16">
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
                    </dl>
                    <div class="mt-10 flex">
                        <a href="/about" class="text-base font-semibold leading-7 text-yellow-500">Learn more about our company <span aria-hidden="true">&rarr;</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="bg-gray-100 h-auto flex flex-wrap justify-center p-4">
        <h2 class="w-full text-center mt-8 mb-8 text-lg font-bold">Everyworks Group's Network of Service Brands</h2>
        <div class="w-11/12 mt-2 mb-8 flex flex-wrap justify-around">
            <div class="w-1/4 p-2 flex justify-center items-center responsive-image">
                <a href="/plumbing">
                    <img src="https://www.everyworks.com/wp-content/uploads/2024/01/mr-plumber-singapore-logo.png" alt="Image 1" class="w-48 h-16">
                </a>
            </div>
            <div class="w-1/4 p-2 flex justify-center items-center responsive-image">
                <a href="/matressClean">
                    <img src="https://www.everyworks.com/wp-content/uploads/2024/01/logo-header-png-dw-mattress-cleaning-singapore.png" alt="Image 2" class="w-48 h-16">
                </a>
            </div>
            <div class="w-1/4 p-2 flex justify-center items-center responsive-image">
                <a href="/electric">
                    <img src="https://www.everyworks.com/wp-content/uploads/2024/01/Daylight-Electrician-Singapore-logo.png" alt="Image 3" class="w-48 h-16">
                </a>
            </div>
            <div class="w-1/4 p-2 flex justify-center items-center responsive-image">
                <a href="/handyman">
                    <img src="https://www.everyworks.com/wp-content/uploads/2024/01/a1-handyman-singapore-logo-300x77.png" alt="Image 4" class="w-48 h-16">
                </a>
            </div>
            <div class="w-1/4 p-2 flex justify-center items-center responsive-image">
                <a href="/waterHeater">
                    <img src="https://www.everyworks.com/wp-content/uploads/2024/01/Water-Heater-Singapore-logo-15.png" alt="Image 5" class="w-48 h-16">
                </a>
            </div>
            <div class="w-1/4 p-2 flex justify-center items-center responsive-image">
                <a href="/sofaClean">
                    <img src="https://www.everyworks.com/wp-content/uploads/2024/01/logo-header-png-dw-sofa-cleaning-singapore.png" alt="Image 6" class="w-48 h-16">
                </a>
            </div>
            <div class="w-1/4 p-2 flex justify-center items-center responsive-image">
                <a href="/floorclean">
                    <img src="https://www.everyworks.com/wp-content/uploads/2024/01/dw-floor-polishing-singapore-logo-300x123.png" alt="Image 7" class="w-80 h-20">
                </a>
            </div>
            <div class="w-1/4 p-2 flex justify-center items-center responsive-image">
                <a href="/rubbishChute">
                    <img src="https://www.everyworks.com/wp-content/uploads/2024/01/a1-rubbish-chute-singapore-logo-300x117.png" alt="Image 8" class="w-80 h-20">
                </a>
            </div>
        </div>
    </section>
    <style>
        @media (max-width: 768px) {
            .responsive-image {
                flex-basis: 100% !important;
                max-width: 100% !important;
            }
        }
    </style>

    <footer class="footer-bg text-white py-10">
        <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-4 gap-8">
            <div>
                <h2 class="text-xl font-bold mb-4 footer-text-yellow border-b-2 border-yellow-500">About Allhouseworks Services</h2>
                <p style="font-family: system-ui;font-size: inherit;line-height: 20px;">Allhouseworks is Singapore’s leading Home Maintenance Company offering quality & reliable services like Handyman, Electrical, Plumbing & Aircon Servicing and many more. Book your home maintenance services online in just a few clicks: simply message us on WhatsApp and our 4-star dedicated customer service team will fulfill the rest. Trusted by thousands of customers over the years, with a simple process to message us, we promise fast response and transparent quotes for any office or home services you need to get done. WhatsApp us at +65 8241 0032 Now!</p>
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
                    <li>1090 Lower Delta Road #03-07, Singapore 169201</li>
                    <li>Phone: +65 9658 5757</li>
                    <li>WhatsApp (Message Only): +65 9658 5757</li>
                    <li>Email: enquiry@Allhouseworks.com</li>
                </ul>

            </div>
        </div>
    </footer>
    <style>
        .footer-bg {
            background: #181818 url(https://everyworks.com/wp-content/uploads/2018/04/footerbg.png?id=45) !important;
            background-size: cover;
            background-position: center;
        }

        .footer-text-yellow {
            color: #f8b500;
            /* Adjust this color as needed */
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
<script>
    document.getElementById('whatsappImage').addEventListener('click', function() {
        var message = "Good day, I am interested in learning more about your services. Could you please provide me with more information? Thank you.";
        var phoneNumber = "6596585757";
        var whatsappUrl = "https://wa.me/" + phoneNumber + "?text=" + encodeURIComponent(message);
        window.open(whatsappUrl, '_blank');
    });
</script>
