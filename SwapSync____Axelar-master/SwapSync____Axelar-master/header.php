<head>
    <title> <?php echo $page_title = "Swap Sync"; ?></title>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="./swapsync/img/favicon128.png"/>
    <script src="./code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="styles.css">
    <script src="script.js"></script>
    <script src="./Front-End/index.js" type="module"></script>
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">

    <!-- FB Meta Tags-->
    <meta property="og:url" content="SwapSync">
    <meta property="og:type" content="website">
    <meta property="og:title" content="SwapSync">
    <meta property="og:description" content="">
    <meta property="og:image:url" content="">
    <!-- T Meta Tags-->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="SwapSync">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">

    <meta name="copyright" content="">
    <meta name="author" content="">
    <meta name="description" lang="en" content="">
    <meta name="keywords" lang="en" content="">
    <meta name="date" content="2023-01-07T00:00:00+01:00">
    <meta name="page-topic" content="">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Jost:wght@700&amp;family=Poppins:wght@400;500;600;700&amp;display=swap');

        :root {
            --bgColor: #000;
            --logoGradient: linear-gradient(210deg, #00eaff 0%, #0080ff 25%, #8000ff 50%, #e619e6 75%, #f00 100%);
        }

        body {
            background-color: var(--bgColor);
            color: #eee;
            font-family: "Poppins", sans-serif;
            line-height: 1.5;
            font-weight: 500;
            font-size: 16px;
            text-align: center;
            margin: 0;

            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            user-select: none;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            touch-action: manipulation;
        }

        .selectable {
            user-select: text;
            -webkit-user-select: text;
        }

        a {
            color: #0080ff;
            text-decoration: none;
            transition: all .1s;
        }

        b {
            color: #fff;
            font-weight: 600;
        }

        .title {
            font-size: 32px;
            font-weight: 600;
            width: 100%;
            position: relative;
            text-align: center;
            float: left;
            margin-bottom: 20px;
        }

        .btn {
            color: #fff !important;
            position: relative;
            display: inline-block;
            padding: 5px 12px;
            background-color: #161616;
            border-radius: 3px;
            font-weight: 600;
        }

        .btn:before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            margin: -2px;
            z-index: -1;
            border-radius: 5px;
            background: var(--logoGradient);
        }

        #networkBtn:after {
            content: '';
            position: relative;
            float: left;
            height: 1.5em;
            width: 1.5em;
            margin-right: .3em;
            background-image: url(img/logos/mm.svg);
            background-size: contain;
            background-position: center center;
        }

        .menuLink {
            position: relative;
            display: inline-block;
            margin: 0 15px;
            color: #fff7;
            font-weight: 600;
        }

        .card {
            position: relative;
            display: inline-block;
            padding: 30px 50px;
            width: 80%;
            background-color: #fff1;
            border-radius: 8px;
            box-shadow: 0 15px 30px #0003;
            margin-top: 50px;
            text-align: left;
            max-width: 500px;
            user-select: text;
            -webkit-user-select: text;
        }

        .hl {
            position: relative;
            display: inline-block;
            width: 100%;
        }

        .cmrk:after {
            background-image: url("img/cmrk.png");
            background-size: contain;
            background-repeat: no-repeat;
            display: inline-block;
            width: 18px;
            height: 20px;
            content: "";
            margin-right: 8px;
        }

        

        @media not all and (pointer: coarse) {
            a:hover {
                color: #00eaff;
            }

            .btn:hover {
                background-color: #1d1d1d;
            }

            .sLink:hover {
                opacity: .7 !important;
            }

            .menuLink:hover {
                color: #fffb;
            }

            .footerLink:hover {
                color: #fffb !important;
            }

            #pulseXlink:hover {
                text-decoration: none !important;
            }
        }

        .menuLinkActive {
            color: #fff !important;
            cursor: default;
        }


        #ECGsvgLine {
            stroke-dasharray: 1850, 50;
            stroke-linecap: round;
            stroke-dashoffset: -25;
            animation: pulsate 3s cubic-bezier(0, .2, 1, .8) infinite;
            will-change: stroke-dashoffset;
        }

        /* @keyframes pulsate {
            from {
                stroke-dashoffset: -25;
            }
            to {
                stroke-dashoffset: -1921;
            }
        } */


        @media (max-width: 1020px) {
            .menuLink {
                margin: 0 10px;
            }
        }

        @media (max-width: 960px) {
            .menuLink {
                display: none;
            }
        }

        @media (max-width: 640px) {
            .mainTitleBreak {
                display: none;
            }

            .card {
                width: calc(100% - 100px);
                max-width: 100%;
                border-radius: 0;
                margin-top: 0;
                box-shadow: none;
                background-color: #0000;
            }

            #bgImg {
                background-size: 150% auto !important;
            }
        }

        @media (max-width: 580px) {
            #timerLbl {
                letter-spacing: 0 !important;
            }
        }

        @media (max-width: 515px) {
            #timerLbl {
                font-size: 60px !important;
            }
        }

        @media (max-width: 470px) {
            #topLogo {
                display: none;
            }

            #topLogoShort {
                display: inherit !important;
            }

            #bgImg {
                background-size: auto 120% !important;
            }

            .imgCard {
                padding: 0;
                width: 100%;
            }

            #graphOverDiv {
                left: 0 !important;
                width: 100% !important;
            }

            #timerLbl {
                font-size: 45px !important;
            }
        }

        @media (max-width: 350px) {
            .sLink {
                margin-right: 18px !important;
            }
        }
    </style>
</head>