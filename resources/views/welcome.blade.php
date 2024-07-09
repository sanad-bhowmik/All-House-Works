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
                            <a href="/about" id="hov" style="display: inline-flex; align-items: center; text-decoration: none;">About
                                <svg style="width: 1rem; height: 1rem; margin-left: 0.25rem; transition: transform 0.5s ease;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="transform">
                                    <path d="M10 12.59l-4.95-4.95a1.41 1.41 0 10-2 2l7.45 7.5a1.41 1.41 0 002 0l7.45-7.5a1.41 1.41 0 10-2-2L10 12.59z" />
                                </svg>
                            </a>

                            <div class="absolute left-0 mt-1 bg-gray-800 text-white shadow-lg rounded-lg p-2 hidden group-hover:block">
                                <a href="/review" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Review</a>
                                <a href="/mission" class="block px-4 py-2 hover:bg-gray-200 hover:text-black">Mission</a>
                            </div>
                        </div>


                        <div class="relative group">
                            <a href="/service" id="hov" style="display: inline-flex; align-items: center; text-decoration: none;">
                                Service
                                <svg style="width: 1rem; height: 1rem; margin-left: 0.25rem; transition: transform 0.5s ease;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="transform">
                                    <path d="M10 12.59l-4.95-4.95a1.41 1.41 0 10-2 2l7.45 7.5a1.41 1.41 0 002 0l7.45-7.5a1.41 1.41 0 10-2-2L10 12.59z" />
                                </svg>
                            </a>

                            <style>
                                #hov:hover .transform {
                                    transform: rotate(180deg);
                                }
                            </style>


                            <div class="absolute left-0 mt-1 bg-gray-800 text-white shadow-lg rounded-lg p-2 hidden group-hover:block z-20" style="width: 340%;">
                                <div class="relative group" onmouseover="showSubmenu7()" onmouseout="hideSubmenu7()">
                                    <a href="/plumbing" class="border-b flex items-center px-4 py-2 hover:bg-gray-200 hover:text-black">
                                        <span class="ml-1">Plumber</span>
                                    </a>
                                    <div id="service-submenu" class="absolute right-full top-0 mt-0 bg-gray-800 shadow-lg rounded-lg p-2 hidden-submenu z-20" style="width: 200px;">
                                        <div class="relative group" onmouseover="showPlumbingInstallSubmenu()" onmouseout="hidePlumbingInstallSubmenu()">
                                            <a href="/plumbingInstall" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Plumbing Install</a>
                                            <div id="plumbing-install-submenu" class="absolute right-full top-0 mt-0 bg-gray-800 shadow-lg rounded-lg p-2 hidden-submenu z-20" style="width: 200px; left: -200px;">
                                                <a href="/pipeInstall" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Pipe Installation</a>
                                                <a href="/bidetSpray" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Bidet Spray</a>
                                                <a href="/bathroomRack" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Bathroom Rack</a>
                                            </div>
                                        </div>
                                        <a href="/plumbingChoke" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Plumbing Choke</a>
                                        <div class="relative group" onmouseover="showPlumbingLeakSubmenu()" onmouseout="hidePlumbingLeakSubmenu()">
                                            <a href="/plumbingLeak" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Plumbing Leak</a>
                                            <div id="plumbing-leak-submenu" class="absolute right-full top-0 mt-0 bg-gray-800 shadow-lg rounded-lg p-2 hidden-submenu z-20" style="width: 200px; left: -200px;">
                                                <a href="/tapLeak" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Leaking Tap</a>
                                                <a href="/heaterLeak" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Heater Leak</a>
                                                <a href="/showerService" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Shower Leak</a>
                                            </div>
                                        </div>
                                        <div class="relative group" onmouseover="showWaterHeaterSubmenu()" onmouseout="hideWaterHeaterSubmenu()">
                                            <a href="/waterHeater" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Water Heater</a>
                                            <div id="water-heater-submenu" class="absolute right-full top-0 mt-0 bg-gray-800 shadow-lg rounded-lg p-2 hidden-submenu z-20" style="width: 200px; left: -200px;">
                                                <a href="/heaterinstall" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Water Heater Installation</a>
                                                <a href="/waterheaterLeak" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Water Heater Leak</a>
                                                <a href="/heaterRepair" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Water Heater Repair</a>
                                            </div>
                                        </div>
                                        <div class="relative group" onmouseover="showToiletBowlSubmenu()" onmouseout="hideToiletBowlSubmenu()">
                                            <a href="/toiletBowl" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Toilet Bowl</a>
                                            <div id="toilet-bowl-submenu" class="absolute right-full top-0 mt-0 bg-gray-800 shadow-lg rounded-lg p-2 hidden-submenu z-20" style="width: 200px; left: -200px;">
                                                <a href="/toiletBowl" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Toilet Bowl Installation</a>
                                                <a href="/plumbingChoke" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Toilet Bowl Choke</a>
                                                <a href="/toiletRepair" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Toilet Bowl Choke Repair</a>
                                            </div>
                                        </div>
                                        <div class="relative group" onmouseover="showShowerServiceSubmenu()" onmouseout="hideShowerServiceSubmenu()">
                                            <a href="/showerService" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Shower Service</a>
                                            <div id="shower-service-submenu" class="absolute right-full top-0 mt-0 bg-gray-800 shadow-lg rounded-lg p-2 hidden-submenu z-20" style="width: 200px; left: -200px;">
                                                <a href="/showerInstall" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Shower Installation</a>
                                                <a href="/showerRepair" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Shower Repair</a>
                                            </div>
                                        </div>
                                        <a href="/tapFaucet" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Tap & Faucet</a>
                                        <a href="/bidetSpray" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Bidet Spray</a>
                                        <a href="/coomercialPlumber" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Comercial Plumber</a>
                                    </div>
                                </div>


                                <div class="relative group" onmouseover="showSubmenu6()" onmouseout="hideSubmenu6()">
                                    <div class="relative group" onmouseover="showSubmenu6()" onmouseout="hideSubmenu6()">
                                        <a href="/electric" class="border-b flex items-center px-4 py-2 hover:bg-gray-200 hover:text-black">
                                            <span class="ml-1">Electrician</span>
                                        </a>
                                        <div id="electric-submenu" class="absolute right-full top-0 mt-0 bg-gray-800 shadow-lg rounded-lg p-2 hidden-submenu z-20" style="width: 200px;">
                                            <a href="/electricalInstall" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Electrical Installation</a>
                                            <a href="/electricRepair" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Electrical Repair</a>
                                            <div class="relative group" onmouseover="showLightServiceSubmenu()" onmouseout="hideLightServiceSubmenu()">
                                                <a href="/lightService" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Light Service</a>
                                                <div id="light-service-submenu" class="absolute right-full top-0 mt-0 bg-white shadow-lg rounded-lg p-2 hidden-submenu z-20" style="width: 200px; left: -200px;">
                                                    <a href="/lightInstall" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Light Installation</a>
                                                    <a href="/lightReplace" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Light Repair</a>
                                                </div>
                                            </div>
                                            <a href="/switchService" class="block px-4 py-2 hover:bg-gray-200 border-b">Electric Switch Service</a>
                                            <a href="/powerSocket" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Power Sockets</a>
                                            <a href="/hdrElectric" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">HDR Electrician</a>
                                            <a href="/smartSwitch" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Smart Switch</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="relative group" onmouseover="showSubmenu5()" onmouseout="hideSubmenu5()">
                                    <a href="/handyman" class="border-b flex items-center px-4 py-2 hover:bg-gray-200 hover:text-black">
                                        <span class="ml-1">Handyman</span>
                                    </a>
                                    <div id="handy-submenu" class="absolute right-full top-0 mt-0 bg-gray-800 shadow-lg rounded-lg p-2 hidden-submenu z-20" style="width: 200px;">
                                        <a href="/rubbishChute" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Rubbish Chute</a>
                                        <a href="/cupboard" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Cupboard Hinge</a>
                                        <a href="/cabinetHinge" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Cabinet Hinge</a>
                                        <a href="/hydraulic" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Hydraulic Hinge</a>
                                        <a href="/drilling" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Handyman Drilling</a>
                                        <a href="/tvBucket" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">TV Bracket Installation</a>
                                        <a href="/wallMounting" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">Wall Mounting Installation</a>
                                        <a href="/pullUp" class="block px-4 py-2 hover:bg-gray-200 hover:text-black border-b">PullUp Bar Installation</a>
                                    </div>
                                </div>

                                <div class="relative group" onmouseover="showSubmenu4()" onmouseout="hideSubmenu4()">
                                    <a href="/deepclean" class="border-b flex items-center px-4 py-2 hover:bg-gray-200 hover:text-black">
                                        <span class="ml-1">Deep Cleaning</span>
                                    </a>
                                    <div id="dClean-submenu" class="absolute right-full top-0 mt-0 bg-gray-800 shadow-lg rounded-lg p-2 hidden-submenu z-20" style="width: 200px;">
                                        <a href="/matressClean" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Mattress Cleaning</a>
                                        <a href="/matressDeepClean" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Mattress Deep Cleaning</a>
                                        <a href="/matressstemClean" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Mattress Steam Cleaning</a>
                                        <a href="/matrissStainClean" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Mattress Stain Removal</a>
                                        <a href="/sofaClean" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Sofa Cleaning</a>
                                        <a href="/sofaDeepClean" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Sofa Deep Cleaning</a>
                                        <a href="/sofaStain" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Sofa Stain Removal</a>
                                        <a href="/fabricSofaClean" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Fabric Sofa Cleaning</a>
                                        <a href="/unholsteryClean" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Upholstery Cleaning</a>
                                    </div>
                                </div>

                                <div class="relative group" onmouseover="showSubmenu3()" onmouseout="hideSubmenu3()">
                                    <a href="/floorpolish" class="border-b flex items-center px-4 py-2 hover:bg-gray-200 hover:text-black">
                                        <span class="ml-1">Floor Polishing</span>
                                    </a>
                                    <div id="fpolish-submenu" class="absolute right-full top-0 mt-0 bg-gray-800 shadow-lg rounded-lg p-2 hidden-submenu z-20" style="width: 200px;">
                                        <a href="/marbleFloorPolish" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Marble Floor Polish</a>
                                        <a href="/marblePolish" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Marble Polishing</a>
                                        <a href="/parquetPolish" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Parquet Polishing</a>
                                        <a href="/parquetVarnish" class="border-b block px-4 py-2 hover:bg-gray-200">Parquet Floor Polishing</a>
                                        <a href="/woodPolish" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Wood Polishing</a>
                                        <a href="/wood" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Wood Floor Polishing</a>
                                        <a href="/vinylFloorPolish" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Vinyl Floor Polishing</a>
                                        <a href="/tileFloorPolish" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Tile Floor Polishing</a>
                                    </div>
                                </div>

                                <div class="relative group" onmouseover="showSubmenu2()" onmouseout="hideSubmenu2()">
                                    <a href="/floorclean" class="border-b flex items-center px-4 py-2 hover:bg-gray-200 hover:text-black">
                                        <span class="ml-1">Floor Cleaning</span>
                                    </a>
                                    <div id="fClean-submenu" class="absolute right-full top-0 mt-0 bg-gray-800 shadow-lg rounded-lg p-2 hidden-submenu z-20" style="width: 200px;">
                                        <a href="/floorclean" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Floor Deep Cleaning</a>
                                        <a href="/vinylClean" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Vinyl Cleaning</a>
                                        <a href="/vinylFloorClean" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Vinyl Floor Cleaning</a>
                                        <a href="/vinylDeepFloorClean" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Vinyl Floor Deep Cleaning</a>
                                        <a href="/terrazzoClean" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Terrazzo Cleaning</a>
                                    </div>
                                </div>

                                <div class="relative group" onmouseover="showSubmenu1()" onmouseout="hideSubmenu1()">
                                    <a href="/wood" class="border-b flex items-center px-4 py-2 hover:bg-gray-200 hover:text-black">
                                        <span class="ml-1">Wood Varnishing</span>
                                    </a>
                                    <div id="varnish-submenu" class="absolute right-full top-0 mt-0 bg-gray-800 shadow-lg rounded-lg p-2 hidden-submenu z-20" style="width: 200px;">
                                        <a href="/parquetVarnish" class="block px-4 py-2 hover:bg-gray-200 hover:text-black">Parquet Varnish</a>
                                    </div>
                                </div>

                                <div class="relative group" onmouseover="showSubmenu()" onmouseout="hideSubmenu()">
                                    <a href="/decking" class="border-b flex items-center px-4 py-2 hover:bg-gray-200 hover:text-black">
                                        <span class="ml-1">Decking</span>
                                    </a>
                                    <div id="decking-submenu" class="absolute right-full top-0 mt-0 bg-gray-800 shadow-lg rounded-lg p-2 hidden-submenu z-20" style="width: 200px;">
                                        <a href="/balconyDeck" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Balcony Decking</a>
                                        <a href="/timberDeck" class="border-b block px-4 py-2 hover:bg-gray-200 hover:text-black">Timber Decking</a>
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


    <!-- Banner Section -->
    <section class="bg-cover bg-center relative parallax" style="background-image: url('https://images.pexels.com/photos/4108712/pexels-photo-4108712.jpeg?cs=srgb&dl=pexels-cottonbro-4108712.jpg&fm=jpg'); background-size: cover; background-repeat: no-repeat; height: 100vh; background-attachment: fixed;">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="relative z-10 p-6 md:p-24 banner flex flex-col items-center justify-center text-center text-white" style="padding-top: 150px;">
            <h1 class="text-2xl md:text-4xl font-bold" style="font-size: 43px; text-align: center; font-family: math;">Home Maintenance & Handyman Services <br>
                Delivered To Your Doorstep</h1>
            <p class="mt-4 md:mt-6" style="font-size: 18px; line-height: 1.2; text-align: center;">Message us with your home maintenance needs, and we will fulfill the rest. <br> Get connected to our handyman & service professionals for instant home diagnosis & direct quotations.</p>
            <a id="sendbtn" class="shortcode_wa_button mt-4 md:mt-6 inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500" href="https://api.whatsapp.com/send?phone=6565751226&amp;text=Hello, I would like to know more about the following home service" target="_blank" data-wpel-link="external" rel="nofollow external noopener noreferrer">
                <img src="img/whatsapp.png" alt="" class="mr-2"><span>WhatsApp to Start Now!</span>
            </a>
        </div>
    </section>

    <div class="flex items-end justify-end fixed bottom-0 right-0 mb-4 mr-4 z-10">
        <div>
            <a title="Let's Start Chat" href="https://wa.me/6596585757" target="_blank" class="block w-16 h-16 rounded-full transition-all shadow hover:shadow-lg transform hover:scale-110 hover:rotate-12">
                <img class="object-cover object-center w-full h-full rounded-full" src="{{ url('img/social.png') }}" />
            </a>
        </div>
    </div>



    <section class="mt-10">
        <div class="relative flex flex-col md:flex-row items-center md:items-start mt-8">
            <span class="bg-yellow-500 yellow-triangle absolute left-0 h-20 hidden md:block"></span>
            <h3 class="bg-black text-white black-polygon h-auto md:h-20 flex items-center justify-center ml-0 md:ml-24 pl-4 pr-4 md:pr-24 text-center md:text-left w-full md:max-w-2/3" style="font-size: 26px;font-weight: 600;font-family: Josefin sans-serif;">
                <span class="inner-span">One-Stop Handyman Solutions For Convenience in Modern Living</span>
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
                                    <h3 class="mt-8 text-2xl font-semibold text-black group-hover:text-white ">Seamless Booking</h3>
                                    <p class="mt-4 text-lg text-gray-600 group-hover:text-white  ">Message us to get instant diagnosis and quote. Book one or multiple services and we will arrange everything in the most convenient schedule for you.</p>
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
                                    <h3 class="mt-8 text-2xl font-semibold text-black group-hover:text-white ">One-Stop Convenience</h3>
                                    <p class="mt-4 text-lg text-gray-600 group-hover:text-white">Our services are designed to be a fuss-free experience for you. Just choose the services or product installations you need, and allow us to fulfil the rest.</p>
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
                                    <h3 class="mt-8 text-2xl font-semibold text-black group-hover:text-white ">Strong Customer Support</h3>
                                    <p class="mt-4 text-lg text-gray-600 group-hover:text-white">Our dedicated team will follow-up on your needs with open and transparent communication. We will diagnose the problem before recommending the best solution for your exact needs.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
        </section>
    </section>


    <div class="flex justify-center items-center dark:bg-slate-800"style="margin-top: -92px;">
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
            <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Message us to diagnose & get an instant quote for all home maintenance & handyman tasks including aircon, plumbing, and electrical services.</p>
        </div>

        <div class="flex flex-wrap gap-6 justify-center mt-6">
            <!-- card-1 -->
            <div class="max-w-xs bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="https://images.squarespace-cdn.com/content/v1/540e2e30e4b0a9fac1c138ac/1555607622300-I0MHNBHGZ7897IS5SIC8/IMG_4781.jpeg" alt="" style="border-top: 5px solid #f7a80c;" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-xl text-center font-medium tracking-tight text-gray-900 dark:text-white">PLUMBER SERVICES</h5>
                    </a>
                </div>
            </div>
            <!-- card-1 -->
            <!-- card-2 -->
            <div class="max-w-xs bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="https://www.ambroseair.com/wp-content/uploads/2022/07/what-does-an-air-conditioning-service-consist-of-1080x675-1.jpg" alt="" style="border-top: 5px solid #f7a80c;" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-xl text-center font-medium tracking-tight text-gray-900 dark:text-white">AIRCON SERVICES</h5>
                    </a>
                </div>
            </div>
            <!-- card-2 -->
            <!-- card-3 -->
            <div class="max-w-xs bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="https://www.mrhandyman.com/us/en-us/mr-handyman/_assets/expert-tips/images/Local-blogs-images/mrh-blog-top-15-reasons-to-have-a-handyman-service-on-you2.webp" alt="" style="border-top: 5px solid #f7a80c;" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-xl text-center font-medium tracking-tight text-gray-900 dark:text-white">HANDYMAN SERVICES</h5>
                    </a>
                </div>
            </div>
            <!-- card-3 -->
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

    <section>
        <!-- <div class="mt-20 relative" style="margin-left: 36%;height: 73px;width: 438px;padding: 18px;border-right: 3px solid #810CA8;border-left: 3px solid #810CA8;">
            <h1 class="text-center" style="font-size: 36px;">OUR WORKS</h1>
            <div class="absolute top-0 left-0 right-0 " style="background-color: #810CA8;height: 2px;"></div>
            <div class="absolute bottom-12 left-1/2 transform -translate-x-1/2 px-2 " style="background-color: #fff;">
                <span>
                    <svg width="64px" height="64px" viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path d="M512 512m-10 0a10 10 0 1 0 20 0 10 10 0 1 0-20 0Z" fill="#E73B37"></path>
                            <path d="M512 306.8c27.7 0 54.6 5.4 79.8 16.1 24.4 10.3 46.4 25.1 65.2 44s33.6 40.8 44 65.2c10.7 25.3 16.1 52.1 16.1 79.8 0 27.7-5.4 54.6-16.1 79.8-10.3 24.4-25.1 46.4-44 65.2-18.8 18.8-40.8 33.6-65.2 44-25.3 10.7-52.1 16.1-79.8 16.1-27.7 0-54.6-5.4-79.8-16.1-24.4-10.3-46.4-25.1-65.2-44-18.8-18.8-33.6-40.8-44-65.2-10.7-25.3-16.1-52.1-16.1-79.8 0-27.7 5.4-54.6 16.1-79.8 10.3-24.4 25.1-46.4 44-65.2s40.8-33.6 65.2-44c25.2-10.6 52.1-16.1 79.8-16.1m0-22c-125.4 0-227.1 101.7-227.1 227.1S386.6 739.1 512 739.1c125.4 0 227.1-101.7 227.1-227.1S637.4 284.8 512 284.8z" fill="#39393A"></path>
                            <path d="M512 618.7c-58.9 0-106.8-47.9-106.8-106.8S453.1 405.1 512 405.1 618.8 453 618.8 511.9 570.9 618.7 512 618.7z m0-193.5c-47.9 0-86.8 38.9-86.8 86.8s38.9 86.8 86.8 86.8 86.8-38.9 86.8-86.8-38.9-86.8-86.8-86.8z" fill="#E73B37"></path>
                            <path d="M544.2 107.3l34.1 92.3 7.4 19.9 20.2 6.6c10.3 3.4 32.1 12.9 43.4 18.1l18.7 8.6 18.6-8.9 87.9-41.8 46.4 46.5-41.2 89.4-8.9 19.3 9.6 19c6.8 13.4 12.6 27.5 17.4 41.9l6.7 20.5 20.3 7.2 91.7 32.6v65.7l-92.3 34.1-19.9 7.4-6.6 20.2c-4.7 14.4-10.6 28.4-17.4 41.9l-9.8 19.3 9.3 19.5 41.8 87.9-46.5 46.5-89.1-41.3-19.3-8.9-19 9.6c-13.4 6.8-27.5 12.6-41.9 17.4l-20.5 6.7-7.2 20.3-32.6 91.7h-65.7l-34.1-92.3-7.4-19.9-20.2-6.6c-10.3-3.4-32.1-12.9-43.4-18.1L356 771l-18.6 8.9-87.9 41.8-46.4-46.5 41.2-89.3 8.9-19.3-9.6-19c-6.8-13.4-12.6-27.5-17.4-41.9l-6.7-20.5-20.3-7.2-91.7-32.6v-65.7l92.3-34.1 19.9-7.4 6.6-20.2c3.4-10.3 12.9-32.1 18.1-43.4l8.6-18.7-8.9-18.6-41.8-87.9 46.4-46.4 89.3 41.2 19.3 8.9 19-9.6c13.4-6.8 27.5-12.6 41.9-17.4l20.5-6.7 7.2-20.3 32.6-91.7h65.7m30.7-44.1H447.4l-43 121c-16.6 5.5-32.7 12.1-48.1 19.9l-117.2-54-90.1 90.1 55.2 116s-14.5 31.4-19.9 48.1l-121 44.7v127.4l121 43c5.5 16.6 12.1 32.6 19.9 48l-54 117.2 90.1 90.1 116-55.2s31.4 14.5 48.1 19.9l44.7 121h127.4l43-121c16.6-5.5 32.6-12.1 48-19.9l117.2 54 90.1-90.1-55.2-116c7.8-15.4 14.5-31.4 19.9-48l121-44.7V447.4l-121-43c-5.5-16.6-12.1-32.6-19.9-48l54-117.2-90.1-90.1-115.9 55.2s-31.5-14.5-48.1-19.9L574.9 63.3z" fill="#39393A"></path>
                        </g>
                    </svg>
                </span>
            </div>
            <div class="absolute bottom-0 left-0 right-0 " style="background-color: #810CA8;height: 2px;"></div>
        </div> -->

        <div style="display: flex; justify-content: center;">
            <p style="width: 510px;height: 120px;text-align: center;font-size: 17px;line-height: 24px;font-family: system-ui;font-weight: 600;margin-top: 3%;color: #777;line-height: 25px;">
                We have served thousands of clients island-wide. Here are some of our trusted commercial customers.
            </p>
        </div>
        <div id="header_slider" class="relative w-10/12 h-96 overflow-hidden mx-auto mt-10">
            <div id="slide_item" class="absolute px-10 pb-10 inset-0 bg-pink-500 flex items-end justify-center transition-all ease-in-out duration-1000 transform translate-x-0 slide">
                <p class="bg-gray-900 px-7 py-3 text-white font-bold uppercase rounded-md opacity-80">Plumbing is the system for water distribution and waste removal in buildings.</p>
            </div>
            <div id="slide_item" class="absolute px-10 pb-10 inset-0 bg-purple-500 flex items-end justify-center transition-all ease-in-out duration-1000 transform translate-x-full slide">
                <p class="bg-gray-900 px-7 py-3 text-white font-bold uppercase rounded-md opacity-80">Aircon service is the maintenance and repair of air conditioning units.</p>
            </div>
            <div id="slide_item" class="absolute px-10 pb-10 inset-0 bg-blue-500 flex items-end justify-center transition-all ease-in-out duration-1000 transform translate-x-full slide">
                <p class="bg-gray-900 px-7 py-3 text-white font-bold uppercase rounded-md opacity-80">Aircon service is the maintenance and repair of air conditioning units.</p>
            </div>
            <div class="absolute z-10 ml-16 bg-gray-200 w-16 h-16 flex items-center justify-center text-black cursor-pointer" onclick="nextSlide()">
                &#x276F;
            </div>
            <div class="absolute z-10 bg-gray-200 w-16 h-16 mr-16 border-r border-gray-400 flex items-center justify-center text-black cursor-pointer" onclick="previousSlide()">
                &#x276E;
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
                                <p>“"What happens is not as important as how you react to what happens." "The journey of a thousand miles begins with one step." "The only true wisdom is in knowing you know nothing." "Just as treasures are uncovered from the earth, so virtue appears from good deeds, and wisdom appears from a pure and peaceful mind..”</p>
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
                        <div>
                            <img src={{ url('img/electrical-energy.png') }} alt="">
                        </div>
                        <div>
                            <img src={{ url('img/technician.png') }} alt="">
                        </div>
                        <div>
                            <img src={{ url('img/24-hours.png') }} alt="">
                        </div>
                        <div>
                            <img src={{ url('img/rating.png') }} alt="">
                        </div>
                    </dl>
                    <div class="mt-10 flex">
                        <a href="#" class="text-base font-semibold leading-7 text-yellow-500">Learn more about our company <span aria-hidden="true">&rarr;</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>



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
</script>
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
</script>
<script>
    function showSubmenu() {
        document.getElementById('decking-submenu').classList.remove('hidden-submenu');
    }

    function hideSubmenu() {
        document.getElementById('decking-submenu').classList.add('hidden-submenu');
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
