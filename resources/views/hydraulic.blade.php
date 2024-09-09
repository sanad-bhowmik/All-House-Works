<!
DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AllHouseWorks | Hydraulic Hinge</title>
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
        clip-path: polygon(0% 0, 100% 0, 100% 100%, 0% 100%);
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
                        <button id="about-us-btn" style="display: block; width: 100%; text-align: left; background: none; border: none; font-size: 18px; padding: 12px 0; color: black; cursor: pointer;"><span style="margin-left: 8%;">About </span><svg id="about-arrow" style="width: 1rem; height: 1rem; float: right; transition: transform 0.3s ease;" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                        <a href="/about" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">About</a>
                    </div>
                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                        <a href="/review" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Review</a>
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
                                        <a href="/toilet-bowl-option1" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Toilet Bowl</a>
                                    </div>
                                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                        <a href="/toilet-bowl-option2" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Toilet Bowl Installation</a>
                                    </div>
                                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                        <a href="/toilet-bowl-option3" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Toilet Bowl Choke</a>
                                    </div>
                                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                        <a href="/toilet-bowl-option4" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Toilet Bowl Choke Repair</a>
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
                                        <a href="/shower-service-option1" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Shower Service</a>
                                    </div>
                                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                        <a href="/shower-service-option2" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Shower Installation</a>
                                    </div>
                                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                        <a href="/shower-service-option3" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Shower Repair</a>
                                    </div>
                                </div>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/mission" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Tap & Faucet</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/mission" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Bidet Spray</a>
                            </div>
                            <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                <a href="/mission" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Commercial Plumber</a>
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
                                        <a href="/submenu-item1" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Plumbing Install</a>
                                    </div>
                                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;border-top: 1px solid #e9e8e8;">
                                        <a href="/submenu-item1" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Pipe Installation</a>
                                    </div>
                                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;border-top: 1px solid #e9e8e8;">
                                        <a href="/submenu-item1" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Bidet Spray</a>
                                    </div>
                                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                        <a href="/submenu-item2" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Bathroom Rack</a>
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
                                        <a href="/plumbing-choke-item1" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Plumbing Leak</a>
                                    </div>
                                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                        <a href="/plumbing-choke-item2" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Leaking Tap</a>
                                    </div>
                                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                        <a href="/plumbing-choke-item2" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Heater Leak</a>
                                    </div>
                                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                        <a href="/plumbing-choke-item2" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Shower Leak</a>
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
                                        <a href="/water-heater-option1" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Water Heater</a>
                                    </div>
                                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                        <a href="/water-heater-option1" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Water Heater Install</a>
                                    </div>
                                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                        <a href="/water-heater-option2" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Water Heater Leak</a>
                                    </div>
                                    <div class="newMb" style="margin-left: -15px;border-bottom: 1px solid #e9e8e8; width: 112%;">
                                        <a href="/water-heater-option3" style="display: block; text-decoration: none; color: black; padding: 12px 0; font-size: 18px;margin-left: 5%">Water Heater Repair</a>
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
    <section class="parallax" style="position: relative; background: url('https://www.modahardware-gm.com/images/thumbs/0000396_uplift.jpeg') no-repeat center center fixed; background-size: cover; height: 300px;">
        <div class="overlay" style="background: rgba(0, 0, 0, 0.5); position: absolute; top: 0; left: 0; right: 0; bottom: 0;"></div>
        <div class="content" style="position: relative; z-index: 1; display: flex; flex-direction: column; padding-left: 1rem; padding-right: 1rem; text-align: center; gap: 1rem;">
            <h1 style="font-size: 2.5rem; color: white; font-weight: 100; margin-bottom: 1.5rem;">HYDRAULIC HINGE</h1>
            <p style="font-size: 1rem; color: antiquewhite;">Home / Service / Handyman / HYDRAULIC HINGE</p>
        </div>
    </section>



    <!-- component -->
    <section class="relative pt-16 bg-blueGray-50">
        <div class="container mx-auto">
            <div class="flex flex-wrap items-center">
                <div class="w-10/12 md:w-6/12 lg:w-4/12 px-12 md:px-4 mr-auto ml-auto -mt-78">
                    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-lg bg-pink-500">
                        <img alt="..." src="https://thumbs.dreamstime.com/b/automatic-hydraulic-leaver-hinge-door-closer-holder-metallic-39990805.jpg" class="w-full align-middle rounded-t-lg">
                        <blockquote class="relative p-8 mb-4">
                            <h4 class="text-xl font-bold text-white">
                                HYDRAULIC HINGE
                            </h4>
                            <p class="text-md font-light mt-2 text-white">
                                HYDRAULIC HINGE EXPERTS services include leak repairs, fixture installations, and maintenance for efficient water systems in homes and businesses, ensuring reliable operation and minimizing disruptions.
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
                                    <TS class="text-xl mb-1 font-semibold">HYDRAULIC HINGE EXPERTS</TS>
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
                                        FULL 1-STOP HYDRAULIC HINGE SERVICES
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
                                    <h6 class="text-xl mb-1 font-semibold">RANGE OF HYDRAULIC HINGE SERVICES</h6>
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
            <span class="bg-yellow-500 yellow-diamond absolute left-0 h-20 w-20 hidden md:block transform rotate-45" style="margin-left: 47%;"></span>
            <h3 id="handyman-services" class="bg-black text-white black-polygon h-auto md:h-20 flex items-center justify-center ml-0 md:ml-24 pl-4 pr-4 md:pr-24 text-center md:text-left w-11/12 md:max-w-2/3" style="font-size: 26px;font-weight: 600;font-family: Josefin sans-serif;margin-left: 4%;">
                <span class="inner-span">All-in-One Handyman Services for Modern Living Convenience</span>
            </h3>
            <style>
                @media (max-width: 768px) {
                    .inner-span {
                        width: 93%;
                        margin: 0 auto;
                    }

                    #handyman-services {
                        margin-right: 4%;
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

    <!-- component -->

    <!-- ====== Pricing Section Start -->
    <section class="bg-white lg:pt-[120px] lg:ml-20 pb-12 lg:pb-[90px] relative z-20 overflow-hidden">
        <div class="container">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full px-4">
                    <div class="text-center mx-auto mb-[60px] lg:mb-20 max-w-[510px]">
                        <h2 class=" font-bold  text-3xl sm:text-4xl md:text-[40px] text-dark mb-4 ">
                            OUR FULL RANGE OF HYDRAULIC HINGE SERVICES INCLUDE
                        </h2>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-3 p-4 max-w-[400px] md:max-w-[600px] place-items-center">
                <img class="hover:opacity-75" src="https://rajkumarvishandas.in/uploads/products/18420210505133003.jpg">
                <img class="hover:opacity-75" src="https://www.element-designs.com/storage/app/uploads/public/5ae/b43/ca0/5aeb43ca00175759697492.jpg">
                <img class="hover:opacity-75" src="https://www.element-designs.com/storage/app/uploads/public/611/d6e/6e6/611d6e6e6bc84392928669.png">
            </div>
        </div>
    </section>
    <!-- ====== Pricing Section End -->
    <hr class="hr-1">

 <!-- Price -->
    <div class="container mx-auto px-4 py-8 mb-32">
        <div class="bg-white shadow-xl rounded-lg p-6">
            <h1 class="text-4xl font-extrabold text-center mb-8 text-indigo-600">A1 Handyman Singapore Price List</h1>

            <div class="overflow-x-auto">
                <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
                    <thead class="bg-indigo-600 text-white">
                        <tr>
                            <th class="py-4 px-6 text-left font-semibold">Handyman Service Singapore</th>
                            <th class="py-4 px-6 text-left font-semibold">Estimated Handyman Fee</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr class="hover:bg-gray-100 transition duration-150">
                            <td class="py-4 px-6">Door Repair Works</td>
                            <td class="py-4 px-6">From $60 Per Door</td>
                        </tr>
                        <tr class="hover:bg-gray-100 transition duration-150">
                            <td class="py-4 px-6">Door Knob Replacement</td>
                            <td class="py-4 px-6">From $80 Per Door</td>
                        </tr>
                        <tr class="hover:bg-gray-100 transition duration-150">
                            <td class="py-4 px-6">Gate Lock Replacement</td>
                            <td class="py-4 px-6">From $60 Per Lock</td>
                        </tr>
                        <tr class="hover:bg-gray-100 transition duration-150">
                            <td class="py-4 px-6">Curtain Rod Installation</td>
                            <td class="py-4 px-6">From $50 Per Set</td>
                        </tr>
                        <tr class="hover:bg-gray-100 transition duration-150">
                            <td class="py-4 px-6">Wall Mounting Services</td>
                            <td class="py-4 px-6">From $50 Per Item</td>
                        </tr>
                        <tr class="hover:bg-gray-100 transition duration-150">
                            <td class="py-4 px-6">Painting Services</td>
                            <td class="py-4 px-6">From $200 Per Room</td>
                        </tr>
                        <tr class="hover:bg-gray-100 transition duration-150">
                            <td class="py-4 px-6">TV Bracket Installation</td>
                            <td class="py-4 px-6">From $80 Per Bracket</td>
                        </tr>
                        <tr class="hover:bg-gray-100 transition duration-150">
                            <td class="py-4 px-6">Plumbing Services</td>
                            <td class="py-4 px-6">From $80 Per Job</td>
                        </tr>
                        <tr class="hover:bg-gray-100 transition duration-150">
                            <td class="py-4 px-6">Electrical Services</td>
                            <td class="py-4 px-6">From $60 Per Job</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="text-center mt-8 text-gray-700">
                All prices are subject to site audit, repair, or other works or replacements that will have to be negotiated on-site.
                The survey by our handyman is free and charges apply if the service is engaged.
            </p>
        </div>
    </div>
    <!-- Price -->
    <!-- PLUMBING INSTALLATION -->
    <!-- component -->
    <section class="text-gray-400 bg-gray-800 body-font mt-10">
        <div class="container px-5 py-24 mx-auto">
            <h1 class="sm:text-3xl text-2xl font-medium title-font text-center text-white mb-20">
                THE MOST TRUSTED SERVICE
                <br class="hidden sm:block">PROVIDER FOR HYDRAULIC HINGE SERVICES
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
                        <p class="leading-relaxed text-base">All House Works has helped connect thousands of happy customers to home service professionals. When troubleshooting your home repair or maintenance issues, both our customer service agents and technicians are knowledgeable in answering your queries. Feel free to message us about the products or services you are looking for, and we will respond to you promptly.</p>
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
                    <span class="flex-1 text-base-content">What to Know Before Engaging an HYDRAULIC HINGE Service Company</span>
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
                    <span class="flex-1 text-base-content">Ways to Save Money On HYDRAULIC HINGE</span>
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
                    <span class="flex-1 text-base-content">How Much Are HYDRAULIC HINGE Services</span>
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
                        CUSTOMER REVIEWS
                    </h1>
                    <p class="text-xl text-gray-100 md:text-center md:text-2xl">
                        OUR HYDRAULIC HINGE SERVICES
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
  <section class="bg-gray-100 h-auto flex flex-wrap justify-center p-4">
        <h2 class="w-full text-center mt-8 mb-8 text-lg font-bold">AllhouseWork's Group's Network of Service Brands</h2>
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

    <!-- Choice -->
    <div class="relative overflow-hidden rounded-2xl m-16" style="background-image: linear-gradient(rgb(0 0 0 / 87%), rgb(0 0 0 / 76%)), url(https://png.pngtree.com/thumb_back/fw800/background/20230929/pngtree-d-illustration-triangular-parametric-digital-texture-with-varied-volume-and-intricate-image_13522499.png);background-attachment: fixed;display:none;">
        <div class="px-16 py-8 sm:px-8 lg:px-16 lg:py-14">
            <div class="md:flex md:items-center md:space-x-12 lg:space-x-24">
                <div class="grid grid-cols-1 gap-y-3 sm:grid-cols-2 gap-x-12 xl:gap-x-24">
                    <div>
                        <ul class="space-y-3 text-base font-medium text-white font-pj">
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                    </path>
                                </svg> Toilet bowl
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                    </path>
                                </svg> Floor trap
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                    </path>
                                </svg> Pipe Replacement
                            </li>
                        </ul>
                    </div>
                    <div>
                        <ul class="space-y-3 text-base font-medium text-white font-pj">
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                    </path>
                                </svg> HDB Plumber
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                    </path>
                                </svg> Floor trap choke
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                    </path>
                                </svg> Choke
                            </li>
                        </ul>
                    </div>
                </div>

                <div>
                    <ul class="space-y-3 text-base font-medium text-white font-pj">
                        <li class="flex items-center">
                            <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg> Toilet bowl replacement
                        </li>
                        <li class="flex items-center">
                            <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg> Toilet bowl installation
                        </li>
                    </ul>
                </div>

                <div class="block md:hidden lg:block">
                    <div class="hidden lg:block">
                        <svg class="w-4 h-auto text-gray-600" viewBox="0 0 16 123" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <line y1="-0.5" x2="18.0278" y2="-0.5" transform="matrix(-0.83205 -0.5547 -0.5547 0.83205 15 11)"></line>
                            <line y1="-0.5" x2="18.0278" y2="-0.5" transform="matrix(-0.83205 -0.5547 -0.5547 0.83205 15 46)"></line>
                            <line y1="-0.5" x2="18.0278" y2="-0.5" transform="matrix(-0.83205 -0.5547 -0.5547 0.83205 15 81)"></line>
                            <line y1="-0.5" x2="18.0278" y2="-0.5" transform="matrix(-0.83205 -0.5547 -0.5547 0.83205 15 116)"></line>
                            <line y1="-0.5" x2="18.0278" y2="-0.5" transform="matrix(-0.83205 -0.5547 -0.5547 0.83205 15 18)"></line>
                            <line y1="-0.5" x2="18.0278" y2="-0.5" transform="matrix(-0.83205 -0.5547 -0.5547 0.83205 15 53)"></line>
                            <line y1="-0.5" x2="18.0278" y2="-0.5" transform="matrix(-0.83205 -0.5547 -0.5547 0.83205 15 88)"></line>
                            <line y1="-0.5" x2="18.0278" y2="-0.5" transform="matrix(-0.83205 -0.5547 -0.5547 0.83205 15 123)"></line>
                            <line y1="-0.5" x2="18.0278" y2="-0.5" transform="matrix(-0.83205 -0.5547 -0.5547 0.83205 15 25)"></line>
                            <line y1="-0.5" x2="18.0278" y2="-0.5" transform="matrix(-0.83205 -0.5547 -0.5547 0.83205 15 60)"></line>
                            <line y1="-0.5" x2="18.0278" y2="-0.5" transform="matrix(-0.83205 -0.5547 -0.5547 0.83205 15 95)"></line>
                            <line y1="-0.5" x2="18.0278" y2="-0.5" transform="matrix(-0.83205 -0.5547 -0.5547 0.83205 15 32)"></line>
                            <line y1="-0.5" x2="18.0278" y2="-0.5" transform="matrix(-0.83205 -0.5547 -0.5547 0.83205 15 67)"></line>
                            <line y1="-0.5" x2="18.0278" y2="-0.5" transform="matrix(-0.83205 -0.5547 -0.5547 0.83205 15 102)"></line>
                            <line y1="-0.5" x2="18.0278" y2="-0.5" transform="matrix(-0.83205 -0.5547 -0.5547 0.83205 15 39)"></line>
                            <line y1="-0.5" x2="18.0278" y2="-0.5" transform="matrix(-0.83205 -0.5547 -0.5547 0.83205 15 74)"></line>
                            <line y1="-0.5" x2="18.0278" y2="-0.5" transform="matrix(-0.83205 -0.5547 -0.5547 0.83205 15 109)"></line>
                        </svg>
                    </div>
                    <div class="block mt-10 md:hidden">
                        <svg class="w-auto h-4 text-gray-600" viewBox="0 0 172 16" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <line y1="-0.5" x2="18.0278" y2="-0.5" transform="matrix(-0.5547 0.83205 0.83205 0.5547 11 1)">
                            </line>
                            <line y1="-0.5" x2="18.0278" y2="-0.5" transform="matrix(-0.5547 0.83205 0.83205 0.5547 46 1)">
                            </line>
                            <line y1="-0.5" x2="18.0278" y2="-0.5" transform="matrix(-0.5547 0.83205 0.83205 0.5547 81 1)">
                            </line>
                            <line y1="-0.5" x2="18.0278" y2="-0.5" transform="matrix(-0.5547 0.83205 0.83205 0.5547 116 1)">
                            </line>
                            <line y1="-0.5" x2="18.0278" y2="-0.5" transform="matrix(-0.5547 0.83205 0.83205 0.5547 151 1)">
                            </line>
                            <line y1="-0.5" x2="18.0278" y2="-0.5" transform="matrix(-0.5547 0.83205 0.83205 0.5547 18 1)">
                            </line>
                            <line y1="-0.5" x2="18.0278" y2="-0.5" transform="matrix(-0.5547 0.83205 0.83205 0.5547 53 1)">
                            </line>
                            <line y1="-0.5" x2="18.0278" y2="-0.5" transform="matrix(-0.5547 0.83205 0.83205 0.5547 88 1)">
                            </line>
                            <line y1="-0.5" x2="18.0278" y2="-0.5" transform="matrix(-0.5547 0.83205 0.83205 0.5547 123 1)">
                            </line>
                            <line y1="-0.5" x2="18.0278" y2="-0.5" transform="matrix(-0.5547 0.83205 0.83205 0.5547 158 1)">
                            </line>
                            <line y1="-0.5" x2="18.0278" y2="-0.5" transform="matrix(-0.5547 0.83205 0.83205 0.5547 25 1)">
                            </line>
                            <line y1="-0.5" x2="18.0278" y2="-0.5" transform="matrix(-0.5547 0.83205 0.83205 0.5547 60 1)">
                            </line>
                            <line y1="-0.5" x2="18.0278" y2="-0.5" transform="matrix(-0.5547 0.83205 0.83205 0.5547 95 1)">
                            </line>
                            <line y1="-0.5" x2="18.0278" y2="-0.5" transform="matrix(-0.5547 0.83205 0.83205 0.5547 130 1)">
                            </line>
                            <line y1="-0.5" x2="18.0278" y2="-0.5" transform="matrix(-0.5547 0.83205 0.83205 0.5547 165 1)">
                            </line>
                            <line y1="-0.5" x2="18.0278" y2="-0.5" transform="matrix(-0.5547 0.83205 0.83205 0.5547 32 1)">
                            </line>
                            <line y1="-0.5" x2="18.0278" y2="-0.5" transform="matrix(-0.5547 0.83205 0.83205 0.5547 67 1)">
                            </line>
                            <line y1="-0.5" x2="18.0278" y2="-0.5" transform="matrix(-0.5547 0.83205 0.83205 0.5547 102 1)">
                            </line>
                            <line y1="-0.5" x2="18.0278" y2="-0.5" transform="matrix(-0.5547 0.83205 0.83205 0.5547 137 1)">
                            </line>
                            <line y1="-0.5" x2="18.0278" y2="-0.5" transform="matrix(-0.5547 0.83205 0.83205 0.5547 172 1)">
                            </line>
                            <line y1="-0.5" x2="18.0278" y2="-0.5" transform="matrix(-0.5547 0.83205 0.83205 0.5547 39 1)">
                            </line>
                            <line y1="-0.5" x2="18.0278" y2="-0.5" transform="matrix(-0.5547 0.83205 0.83205 0.5547 74 1)">
                            </line>
                            <line y1="-0.5" x2="18.0278" y2="-0.5" transform="matrix(-0.5547 0.83205 0.83205 0.5547 109 1)">
                            </line>
                            <line y1="-0.5" x2="18.0278" y2="-0.5" transform="matrix(-0.5547 0.83205 0.83205 0.5547 144 1)">
                            </line>
                        </svg>
                    </div>
                </div>
                <div class="mt-10 md:mt-0">
                    <a title="Get quote now" id="whatsappImage" class="inline-flex items-center justify-center px-9 py-3.5 mt-5 text-white  font-bold text-gray-900 transition-all duration-200 bg-green-400 border border-transparent focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-white font-pj hover:bg-opacity-90 rounded-xl" href="#support"> What's APP
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Choice -->

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
            background-image: linear-gradient(#000000AB, hsla(0 0% 0% / 0.81)), url(https://img.pikbest.com/origin/09/17/44/54fpIkbEsTrpq.jpg!w700wp);
            background-attachment: fixed;
        }

        .footer-text-yellow {
            color: #f8b500;
        }
    </style>
</body>

</html>
<script>
    document.getElementById('whatsappImage').addEventListener('click', function() {
        var message = "Good day, I am interested in learning more about your services. Could you please provide me with more information? Thank you.";
        var phoneNumber = "6596585757";
        var whatsappUrl = "https://wa.me/" + phoneNumber + "?text=" + encodeURIComponent(message);
        window.open(whatsappUrl, '_blank');
    });
</script>
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
