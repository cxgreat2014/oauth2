﻿<?php
//setcookie('AD_Token',"8LJPHMGR3IU9FWBQKAT5CD6ZNSY1EX70O42V", time() + 2 * 7 * 24 * 3600);
require_once 'common.php';
Redict('/');
if (empty($_COOKIE['AD_Token']) || $_COOKIE['AD_Token'] != "8LJPHMGR3IU9FWBQKAT5CD6ZNSY1EX70O42V") {
    Redict('/');
    return;
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Welcome!</title>
    <style type="text/css">* {
            margin: 0;
            padding: 0;
        }

        .slideshow {
            position: absolute;
            width: 100vw;
            height: 100vh;
            overflow: hidden;
        }

        .slideshow-image {
            position: absolute;
            width: 100%;
            height: 100%;
            background: no-repeat 50% 50%;
            background-size: cover;
            -webkit-animation-name: kenburns;
            animation-name: kenburns;
            -webkit-animation-timing-function: linear;
            animation-timing-function: linear;
            -webkit-animation-iteration-count: infinite;
            animation-iteration-count: infinite;
            -webkit-animation-duration: 16s;
            animation-duration: 16s;
            opacity: 1;
            -webkit-transform: scale(1.2);
            transform: scale(1.2);
        }

        .slideshow-image:nth-child(1) {
            -webkit-animation-name: kenburns-1;
            animation-name: kenburns-1;
            z-index: 3;
        }

        .slideshow-image:nth-child(2) {
            -webkit-animation-name: kenburns-2;
            animation-name: kenburns-2;
            z-index: 2;
        }

        .slideshow-image:nth-child(3) {
            -webkit-animation-name: kenburns-3;
            animation-name: kenburns-3;
            z-index: 1;
        }

        .slideshow-image:nth-child(4) {
            -webkit-animation-name: kenburns-4;
            animation-name: kenburns-4;
            z-index: 0;
        }

        @-webkit-keyframes kenburns-1 {
            0% {
                opacity: 1;
                -webkit-transform: scale(1.2);
                transform: scale(1.2);
            }
            1.5625% {
                opacity: 1;
            }
            23.4375% {
                opacity: 1;
            }
            26.5625% {
                opacity: 0;
                -webkit-transform: scale(1);
                transform: scale(1);
            }
            100% {
                opacity: 0;
                -webkit-transform: scale(1.2);
                transform: scale(1.2);
            }
            98.4375% {
                opacity: 0;
                -webkit-transform: scale(1.21176);
                transform: scale(1.21176);
            }
            100% {
                opacity: 1;
            }
        }

        @keyframes kenburns-1 {
            0% {
                opacity: 1;
                -webkit-transform: scale(1.2);
                transform: scale(1.2);
            }
            1.5625% {
                opacity: 1;
            }
            23.4375% {
                opacity: 1;
            }
            26.5625% {
                opacity: 0;
                -webkit-transform: scale(1);
                transform: scale(1);
            }
            100% {
                opacity: 0;
                -webkit-transform: scale(1.2);
                transform: scale(1.2);
            }
            98.4375% {
                opacity: 0;
                -webkit-transform: scale(1.21176);
                transform: scale(1.21176);
            }
            100% {
                opacity: 1;
            }
        }

        @-webkit-keyframes kenburns-2 {
            23.4375% {
                opacity: 1;
                -webkit-transform: scale(1.2);
                transform: scale(1.2);
            }
            26.5625% {
                opacity: 1;
            }
            48.4375% {
                opacity: 1;
            }
            51.5625% {
                opacity: 0;
                -webkit-transform: scale(1);
                transform: scale(1);
            }
            100% {
                opacity: 0;
                -webkit-transform: scale(1.2);
                transform: scale(1.2);
            }
        }

        @keyframes kenburns-2 {
            23.4375% {
                opacity: 1;
                -webkit-transform: scale(1.2);
                transform: scale(1.2);
            }
            26.5625% {
                opacity: 1;
            }
            48.4375% {
                opacity: 1;
            }
            51.5625% {
                opacity: 0;
                -webkit-transform: scale(1);
                transform: scale(1);
            }
            100% {
                opacity: 0;
                -webkit-transform: scale(1.2);
                transform: scale(1.2);
            }
        }

        @-webkit-keyframes kenburns-3 {
            48.4375% {
                opacity: 1;
                -webkit-transform: scale(1.2);
                transform: scale(1.2);
            }
            51.5625% {
                opacity: 1;
            }
            73.4375% {
                opacity: 1;
            }
            76.5625% {
                opacity: 0;
                -webkit-transform: scale(1);
                transform: scale(1);
            }
            100% {
                opacity: 0;
                -webkit-transform: scale(1.2);
                transform: scale(1.2);
            }
        }

        @keyframes kenburns-3 {
            48.4375% {
                opacity: 1;
                -webkit-transform: scale(1.2);
                transform: scale(1.2);
            }
            51.5625% {
                opacity: 1;
            }
            73.4375% {
                opacity: 1;
            }
            76.5625% {
                opacity: 0;
                -webkit-transform: scale(1);
                transform: scale(1);
            }
            100% {
                opacity: 0;
                -webkit-transform: scale(1.2);
                transform: scale(1.2);
            }
        }

        @-webkit-keyframes kenburns-4 {
            73.4375% {
                opacity: 1;
                -webkit-transform: scale(1.2);
                transform: scale(1.2);
            }
            76.5625% {
                opacity: 1;
            }
            98.4375% {
                opacity: 1;
            }
            100% {
                opacity: 0;
                -webkit-transform: scale(1);
                transform: scale(1);
            }
        }

        @keyframes kenburns-4 {
            73.4375% {
                opacity: 1;
                -webkit-transform: scale(1.2);
                transform: scale(1.2);
            }
            76.5625% {
                opacity: 1;
            }
            98.4375% {
                opacity: 1;
            }
            100% {
                opacity: 0;
                -webkit-transform: scale(1);
                transform: scale(1);
            }
        }

        h1 {
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate3d(-50%, -50%, 0);
            transform: translate3d(-50%, -50%, 0);
            z-index: 99;
            text-align: center;
            font-family: Raleway, sans-serif;
            font-weight: 300;
            text-transform: uppercase;
            background-color: rgba(255, 255, 255, 0.75);
            box-shadow: 0 1em 2em -1em rgba(0, 0, 0, 0.5);
            padding: 1em 2em;
            line-height: 1.5;
        }

        h1 small {
            display: block;
            text-transform: lowercase;
            font-size: .7em;
        }

        h1 small:first-child {
            border-bottom: 1px solid rgba(0, 0, 0, 0.25);
            padding-bottom: .5em;
        }

        h1 small:last-child {
            border-top: 1px solid rgba(0, 0, 0, 0.25);
            padding-top: .5em;
        }</style>
    <style type="text/css">
        .bg1 {
            background-image: url();
        }

        .bg2 {
            background-image: url();
        }

        .bg3 {
            background-image: url();
        }

        .bg4 {
            background-image: url();
        }


    </style>
</head>
<body>

<h1>
    <small>博山小叙</small>
    欢迎您的来访
    <small></small>
</h1>

<!-- 你可以添加个多“.slideshow-image”项目, 记得修改CSS -->
<div class="slideshow">
    <div class="slideshow-image bg1"></div>
    <div class="slideshow-image bg2"></div>
    <div class="slideshow-image bg3"></div>
    <div class="slideshow-image bg4"></div>
</div>

</body>
<script type="text/javascript">
    //window.setTimeout("window.location='/index.php'", 14000);
</script>
</html>