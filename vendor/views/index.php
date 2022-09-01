<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <title>TRINITY-TV - телевидение, фильмы онлайн</title>
    <link rel="shortcut icon" href="https://trinity-tv.net/images/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://sweet.tv/css/bootstrap.slim.css">
    <link rel="stylesheet" href="https://sweet.tv/css/owl.carousel.css">
    <link rel="stylesheet" href="https://sweet.tv/fonts/v2/fonts.css">
    <script src="https://sweet.tv/js/jquery-3.3.1.min.js"></script>
    <style>
        .modal-content.flex {
            align-items: center;
            justify-content: center;
        }

        body {
            position: relative;
            color: #fff;
            font-family: Lato, sans-serif;
            background: #182936;
        }

        .body-trinity {
            background: #323232;
        }

        .widget-nav {
            background: rgba(21, 57, 76, 0.87);
            position: sticky;
            top: 0;
            left: 0;
            width: 100%;
            height: 60px;
            z-index: 1000;
        }

        .widget-nav-trinity {
            background: rgba(0, 0, 0, 0.87);
        }

        .widget-nav-link img {
            padding: 14px 0;
        }

        .header {
            height: 565px;
            background-image: url(https://sweet.tv/images/v2/widget/header-banner.jpg);
            background-repeat: no-repeat;
            overflow: hidden;
            background-size: cover;
            background-position: center;
            position: absolute;
            top: 0;
            width: 100%;
            z-index: -1;
        }

        .header-logo {
            width: 475px;
        }

        .header-text {
            text-transform: uppercase;
            font-family: Lato, sans-serif;
            font-style: normal;
            font-weight: 300;
            line-height: 40px;
            text-align: center;
            margin-top: 25px;
        }

        .header-wrap {
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            width: 475px;
        }

        .header-title1 {
            font-size: 56px;
        }

        .header-title2 {
            font-size: 46px;
        }

        .sweet-widget-info {
            position: absolute;
            bottom: 53px;
            left: 50%;
            transform: translate(-50%, 0);
            width: 100%;
        }

        .main {
            margin-top: 500px;
            background: #182936;
        }

        .main.main-trinity {
            margin-top: 0;
            background: #323232;
        }

        .main-trinity .owl-tariffs .owl-nav button.owl-next,
        .main-trinity .owl-tariffs .owl-nav button.owl-prev {
            background: #177D2A;
        }

        .main-trinity .owl-tariff {
            background: url(https://sweet.tv/images/v2/widget/tariff-bgc.png);
        }

        .main-trinity .owl-tariff.active {
            background: url(https://sweet.tv/images/v2/widget/tariff-bg-best.png);
        }

        .main-trinity .owl-tariffs .owl-prev:hover,
            /*.main-trinity .owl-tariffs .owl-prev:focus,*/
        .main-trinity .owl-tariffs .owl-prev:active,
        .main-trinity .owl-tariffs .owl-next:hover,
            /*.main-trinity .owl-tariffs .owl-next:focus,*/
        .main-trinity .owl-tariffs .owl-next:active {
            outline: none;
            background: #0e501a !important;
        }

        .main-trinity .owl-tariffs .owl-prev:focus,
        .main-trinity .owl-tariffs .owl-next:focus {
            outline: none;
        }

        .main-trinity .btn {
            background: #fff;
            color: #000;
        }

        .main-tariffs {
            padding-top: 125px;
            overflow: hidden;
        }

        .main-tariffs h1 {
            margin-bottom: 20px;
            font-weight: 800;
            font-size: 34px;
            line-height: 1;
        }

        .owl-tariff {
            padding: 0;
            height: 411px;
            background: linear-gradient(180deg, #263C4C 0%, #2A8593 100%);
            border-radius: 10px;
            display: inline-block;
            width: 97%;
            color: #fff;
            position: relative;
        }

        .owl-tariff:hover,
        .owl-tariff:focus,
        .owl-tariff:active {
            color: #fff;
            text-decoration: none;
            outline: 0;
        }

        .owl-tariff:hover .btn,
        .owl-tariff:focus .btn,
        .owl-tariff:active .btn {
            background: #108a90;
            color: #fff;
        }

        .owl-tariff h3 {
            padding: 35px 0 20px 10px;
            margin-bottom: 7px;
            font-family: Roboto, Arial, Helvetica, sans-serif;
            font-style: normal;
            font-weight: bold;
            font-size: 30px;
            text-shadow: 0px 0px 30px rgba(45, 184, 196, 0.25), 0px 0px 10px #2DB8C4;
            text-align: center;
            letter-spacing: 0.15px;
        }

        .main-trinity .owl-tariff h3 {
            text-shadow: none;
        }

        .tariff-cost {
            letter-spacing: 0.15px;
            font-family: Roboto, Arial, Helvetica, sans-serif;
            font-weight: bold;
            font-size: 18px;
            text-align: center;
            line-height: 0.8;
        }

        .owl-carousel .owl-item img.owl-tariff-big-donut,
        .owl-tariff-big-donut {
            width: 18px;
            height: 18px;
            margin-right: 8px;
        }

        .owl-tariff-list {
            padding: 0 0 20px 10px;
            min-height: 221px;
            height: 225px;
            list-style-type: none;
            margin-top: 40px;
            margin-bottom: 0;
        }

        .owl-tariff-list span {
            font-family: Roboto, Arial, Helvetica, sans-serif;
            font-weight: bold;
            font-size: 14px;
            line-height: 1;
            letter-spacing: 0.25px;
            display: inline-block;
        }

        .owl-tariff-list li {
            display: flex;
        }

        .owl-tariff-cinema {
            background-image: url(https://sweet.tv/images/v2/widget/kino-bg.png), linear-gradient(180deg, #263C4C 0%, #2A8593 100%);
            background-repeat: no-repeat;
            background-position: bottom;
        }

        .btn {
            height: 40px;
            background: #20BEC6;
            border-radius: 50px;
            font-family: Roboto, Arial, Helvetica, sans-serif;
            font-weight: bold;
            font-size: 14px;
            line-height: 1.1;
            letter-spacing: 0.0125em;
            text-transform: uppercase;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .body-trinity .devices .btn,
        .main-trinity .choose-tariff-btn {
            background: linear-gradient(89.87deg, #6CB121 0.1%, #3F7307 113.08%);
            border: none;
            box-shadow: 0px 9.84127px 19.6825px rgba(108, 177, 33, 0.25);
            color: #fff;
        }

        .owl-tariff-btn {
            width: 100%;
        }

        .btn:hover,
        .btn:focus,
        .btn:active {
            color: #fff;
            background: #0F7078;
            text-decoration: none;
            box-shadow: none;
        }

        .main-trinity .btn:hover, .main-trinity .btn:focus, .main-trinity .btn:active {
            background: #177D2A;
        }

        .main-trinity .owl-tariff:hover .btn, .main-trinity .owl-tariff:focus .btn, .main-trinity .owl-tariff:active .btn {
            background: #177D2A;
        }

        .main-trinity .owl-tariff.active:hover .btn, .main-trinity .owl-tariff.active:focus .btn, .main-trinity .owl-tariff.active:active .btn,
        .main-trinity .owl-tariff.active .btn:hover, .main-trinity .owl-tariff.active .btn:focus, .main-trinity .owl-tariff.active .btn:active {
            background: #FFA400;
        }

        .body-trinity .devices .btn:hover, .body-trinity .devices .btn:focus, .body-trinity .devices .btn:active,
        .main-trinity .choose-tariff-btn:hover, .main-trinity .choose-tariff-btn:focus, .main-trinity .choose-tariff-btn:active {
            background: linear-gradient(89.87deg, #3F7307 0.1%, #6CB121 113.08%);
            box-shadow: 0px 9.84127px 19.6825px rgba(108, 177, 33, 0.25);
            color: #fff;
        }

        .owl-tariff-wrap {
            margin-top: 50px;
            text-align: center;
            display: flex;
            justify-content: center;
            width: 100%;
        }

        .owl-tariff-bold {
            margin-bottom: 10px;
        }

        .owl-tariff-list ul {
            min-height: 115px;
            list-style-type: none;
            padding: 0px 0 15px 14px;
        }

        .owl-tariff-list ul li {
            margin-bottom: 10px;
        }

        .owl-tariff-list ul span {
            font-weight: 400;
        }

        .owl-carousel .owl-item .owl-tariff-list ul img {
            width: 12px;
            height: 12px;
            margin-right: 6px;
        }

        .owl-tariff-line {
            position: relative;
        }

        .owl-tariff-line::before {
            position: absolute;
            content: '';
            height: 2px;
            background-color: #20bcc6;
            width: 88%;
            margin-left: 7px;
            top: -13px;
            left: 9px;
        }

        .main-trinity .owl-tariff-line::before {
            background-color: #1D7B00;
        }

        .main-trinity .owl-tariff.active .owl-tariff-line::before {
            background-color: #FFA400;
        }

        .owl-tariff span.owl-tariff-semiopacity,
        .owl-tariff-semiopacity {
            color: rgba(255, 255, 255, 0.5);
            line-height: 1.2;
        }

        .owl-tariff span.owl-tariff-semiopacity.active,
        owl-tariff-semiopacity.active {
            color: rgba(255, 255, 255, 1);
        }

        .owl-tariffs .owl-nav.disabled {
            display: flex;
        }

        .owl-tariffs .owl-nav {
            position: absolute;
            top: -60px;
            right: 10px;
        }

        .owl-tariffs .owl-prev span,
        .owl-tariffs .owl-next span {
            display: none;

        }

        .owl-tariffs .owl-prev {
            margin-right: 25px;
        }

        .owl-tariffs .owl-prev:before {
            content: "";
            display: block;
            width: 12px;
            height: 12px;
            margin-left: 17px;
            border-top: 1px solid #fff !important;
            border-left: 1px solid #fff !important;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
        }

        .owl-tariffs .owl-next:after {
            content: "";
            display: block;
            width: 12px;
            height: 12px;
            border-top: 1px solid #fff !important;
            border-left: 1px solid #fff !important;
            -webkit-transform: rotate(135deg);
            transform: rotate(135deg);
            margin-left: 13px;
        }

        .owl-tariffs .owl-nav button.owl-next,
        .owl-tariffs .owl-nav button.owl-prev {
            background: #20BCC6;
            border-radius: 50%;
            height: 42px;
            width: 42px;
        }

        .owl-tariffs .owl-nav button.owl-next.disabled,
        .owl-tariffs .owl-nav button.owl-prev.disabled {
            opacity: 0.5;
        }

        .owl-tariffs .owl-prev:hover,
            /*.owl-tariffs .owl-prev:focus,*/
        .owl-tariffs .owl-prev:active,
        .owl-tariffs .owl-next:hover,
            /*.owl-tariffs .owl-next:focus,*/
        .owl-tariffs .owl-next:active {
            outline: none;
            background: #0F7078 !important;
        }

        .owl-tariffs .owl-prev:focus,
        .owl-tariffs .owl-next:focus {
            outline: none;
        }

        .owl-tariff h3.owl-tariff-long-name {
            /*padding-top: 20px;*/
            padding-top: 13px;
            white-space: initial;
        }

        .owl-tariff h3.owl-tariff-long-name ~ ul.owl-tariff-list {
            margin-top: 25px;
        }

        .owl-tariffs .owl-item {
            height: 480px;
        }

        .choose-tariff {
            text-align: center;
            margin-top: 70px;
        }

        .choose-tariff h3,
        .main-compare h2,
        .devices h2 {
            font-weight: 800;
            font-size: 34px;
        }

        .choose-tariff p {
            margin: 20px 0;
            font-family: 'Lato', sans-serif;
            font-weight: 400;
            font-size: 16px;
        }

        .choose-tariff-btn {
            width: 186px;
            border: 2px solid #20BEC6;
            background-color: transparent;
        }

        /*.main-trinity .choose-tariff-btn {*/
        /*border: 2px solid #177D2A;*/
        /*}*/
        .main-compare h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .main-compare {
            margin-top: 70px;
        }

        .table {
            width: 90%;
            margin-bottom: 1rem;
            color: #212529;
        }

        .tv-content .channals-table .sticky.fixed {
            position: fixed;
            z-index: 2
        }

        .tv-content .channals-table .channel-container, .tv-content .channals-table .sticky {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            display: -ms-grid;
            display: grid;
            -ms-grid-columns: .2fr .5fr .4fr .4fr .4fr .4fr .4fr;
            grid-template-columns: .2fr .5fr .4fr .4fr .4fr .4fr .4fr;
            -ms-grid-rows: 1fr 0;
            grid-template-rows: 1fr 0;
            grid-gap: 0
        }

        /*.main-trinity .tv-content .channals-table .channel-container,
        .main-trinity .tv-content .channals-table .sticky {
            -ms-grid-columns: .2fr .5fr .4fr .4fr .4fr .4fr;
            grid-template-columns: .2fr .5fr .4fr .4fr .4fr .4fr;
        }*/

        .main-trinity .tv-content .channals-table.channals-table-max .channel-container,
        .main-trinity .tv-content .channals-table.channals-table-max .sticky {
            -ms-grid-columns: .2fr .5fr .4fr .4fr .4fr .4fr .4fr;
            grid-template-columns: .2fr .5fr .4fr .4fr .4fr .4fr .4fr;
        }

        .main-trinity .tv-content .sticky > a.ch-col-3,
        .main-trinity .tv-content .sticky > a.ch-col-4,
        .main-trinity .tv-content .sticky > a.ch-col-5 {
            background: #177D2A;
        }

        .main-trinity .tv-content .sticky > a.ch-col-3.active {
            background: #FFA400;
        }

        .main-trinity .tv-content .sticky > a.ch-col-3.active .btn:hover,
        .main-trinity .tv-content .sticky > a.ch-col-3.active .btn:focus,
        .main-trinity .tv-content .sticky > a.ch-col-3.active .btn:active,
        .main-trinity .tv-content .sticky > a.ch-col-3.active:hover .main-compare-btn,
        .main-trinity .tv-content .sticky > a.ch-col-4.active:hover .main-compare-btn,
        .main-trinity .tv-content .sticky > a.ch-col-5.active:hover .main-compare-btn {
            background: #9e6f1b;
            color: #fff;
        }

        .tv-content .channals-table a.channel-container {
            max-height: 74px
        }

        .tv-content .channals-table .sticky .ch-col-1 {
            -ms-grid-column: 1;
            flex-grow: 2
        }

        .tv-content .channals-table .sticky .ch-col-2 {
            -ms-grid-column: 2;
            flex-grow: 10
        }

        .tv-content .channals-table .sticky .ch-col-3 {
            /*min-height: 165px;*/
            min-height: 155px;
            -ms-grid-column: 3;
            flex-grow: 2.5;
            position: relative;
        }

        .main-trinity .tv-content .channals-table .sticky .ch-col-3 {
            min-height: 145px;
        }

        .main-trinity .tv-content .channals-table.channals-table-max .sticky .ch-col-3 {
            min-height: 155px;
        }

        .tv-content .channals-table .sticky .ch-col-4 {
            -ms-grid-column: 4;
            flex-grow: 2.5
        }

        .tv-content .channals-table .sticky .ch-col-5 {
            -ms-grid-column: 5;
            flex-grow: 2.5
        }


        .tv-content .channals-table .sticky .ch-col-6 {
            background: #11ac17;
            -ms-grid-column: 6;
            flex-grow: 2.5
        }

        .tv-content .channals-table .channel-container .ch-col-1 {
            -ms-grid-column: 1;
            flex-grow: 2
        }

        .tv-content .channals-table .channel-container .ch-col-2 {
            -ms-grid-column: 2;
            flex-grow: 10
        }

        .tv-content .channals-table .channel-container .ch-col-3 {
            -ms-grid-column: 3;
            flex-grow: 5
        }

        .tv-content .channals-table .channel-container .ch-col-4 {
            -ms-grid-column: 4;
            flex-grow: 5
        }

        .tv-content .channals-table .channel-container .ch-col-5 {
            -ms-grid-column: 5;
            flex-grow: 5
        }

        .tv-content .channals-table .channel-container .ch-col-6 {
            -ms-grid-column: 6;
            flex-grow: 6
        }

        .channel-container:active, .channel-container:focus, .channel-container:hover {
            border: 2px solid #20bcc6;
            z-index: 1;
            -webkit-box-shadow: 0 0 20px #20bcc6;
            box-shadow: 0 0 20px #20bcc6
        }

        .channel-container {
            border-radius: 10px;
            position: relative;
            border: 2px solid transparent
        }

        .channel-container:nth-of-type(2n+1) {
            background: #103040
        }

        .channel-container:nth-of-type(2n) {
            background: #15394c
        }

        .ch-col-1, .ch-col-2 {
            background-color: transparent !important
        }

        .tv-content .channals-table .image-container img {
            width: 80%;
            padding: 5px 0;
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%)
        }

        .tv-content .sticky > a.ch-col-3, .tv-content .sticky > a.ch-col-4, .tv-content .sticky > a.ch-col-5 {
            background: linear-gradient(180deg, #263C4C 0%, #2A8593 100%);
            border-radius: 10px;
            margin: 0 0 0 10px;
            padding: 5px 0
        }

        .tv-content .sticky > a.ch-col-3:hover,
        .tv-content .sticky > a.ch-col-4:hover,
        .tv-content .sticky > a.ch-col-5:hover,
        .tv-content .sticky > a.ch-col-3:focus,
        .tv-content .sticky > a.ch-col-4:focus,
        .tv-content .sticky > a.ch-col-5:focus,
        .tv-content .sticky > a.ch-col-3:active,
        .tv-content .sticky > a.ch-col-4:active,
        .tv-content .sticky > a.ch-col-5:active {
            text-decoration: none;
        }

        .tv-content .sticky > a.ch-col-3:hover .main-compare-btn,
        .tv-content .sticky > a.ch-col-4:hover .main-compare-btn,
        .tv-content .sticky > a.ch-col-5:hover .main-compare-btn {
            background: #0F7078;
        }

        .main-trinity .tv-content .sticky > a.ch-col-3:hover .main-compare-btn,
        .main-trinity .tv-content .sticky > a.ch-col-4:hover .main-compare-btn,
        .main-trinity .tv-content .sticky > a.ch-col-5:hover .main-compare-btn {
            background: #0e501a;
            color: #fff;
        }

        .main-trinity .channel-container:nth-of-type(2n) {
            background: #414141;
        }

        .main-trinity .channel-container:nth-of-type(2n+1) {
            background: #3A3A3A;
        }

        .main-trinity div.channel-container:active,
        .main-trinity div.channel-container:focus,
        .main-trinity div.channel-container:hover {
            border: 2px solid transparent;
            -webkit-box-shadow: none;
            box-shadow: none;
            background: #5A9C13;
        }

        .tv-content .channals-table .table-active:not(:first-of-type) a {
            color: #fff;
            font-size: 18px;
            display: block;
            -o-text-overflow: ellipsis;
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
            max-width: 200px;
            min-width: 100px;
            width: 99%
        }

        .tv-content .channals-table .table-active:not(:first-of-type) {
            display: flex;
            display: -webkit-flex;
            display: -ms-flexbox;
            align-items: center;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            padding-left: 10px;
            color: #fff
        }

        .tv-content .channals-table .table-active:not(:first-of-type) span {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis
        }

        .tv-content .channals-table .sticky p {
            margin-bottom: 10px;
            font-size: 14px;
            color: #fff;
            line-height: 1;
            text-align: center;
            font-weight: 900;
        }

        .tv-content .channals-table .sticky span {
            font-weight: 400;
        }

        .tv-content .channals-table .sticky > div > p {
            color: #fff;
            padding-top: 10px
        }

        .tv-content .channals-table .sticky > a > h2 {
            font-size: 14px;
            line-height: 1.3;
            margin-bottom: 10px;
            color: #fff;
            margin-top: 10px;
        }

        .tv-content .channals-table .sticky > div > h2 > span {
            font-size: 24px;
            line-height: 1;
            color: #fff
        }

        .tv-content .channals-table .ch-col-1 {
            width: auto;
            min-width: 100px;
        }

        .tv-content .channals-table .image-container {
            height: 70px;
            margin: 0 auto;
            position: relative;
            background: 0 0;
            display: block;
            border: none;
            -webkit-box-shadow: none;
            box-shadow: none
        }

        .tv-content .channals-table .ch-col-2 {
            width: auto;
            min-width: 9vw;
        }

        .tv-content .channals-table td a {
            color: #333;
            font-size: 16px;
            display: block;
            -o-text-overflow: ellipsis;
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
            max-width: 200px;
            min-width: 100px;
            width: 99%
        }

        .tv-content .channals-table .ch-col-3, .tv-content .channals-table .ch-col-4, .tv-content .channals-table .ch-col-5, .tv-content .channals-table .ch-col-6 {
            width: auto;
            min-width: 7vw;
            text-align: center
        }

        .tv-content .channals-table a.channel-container .ch-col-3, .tv-content .channals-table a.channel-container .ch-col-4, .tv-content .channals-table a.channel-container .ch-col-5, .tv-content .channals-table a.channel-container .ch-col-6 {
            max-height: 70px;
            min-height: 70px
        }

        .tariffs__channel--green {
            display: inline-block;
            width: 100%;
            height: 100%;
            background-image: url(https://sweet.tv/images/v2/checkmark.svg);
            background-repeat: no-repeat;
            background-position: center
        }

        .tariffs__channel--yellow {
            display: inline-block;
            width: 100%;
            height: 100%;
            background-image: url(https://sweet.tv/images/v2/check-yellow.svg);
            background-repeat: no-repeat;
            background-position: center
        }

        .tariffs__channel--red {
            display: inline-block;
            width: 100%;
            height: 100%;
            background-image: url(https://sweet.tv/images/v2/close.svg);
            background-repeat: no-repeat;
            background-position: center
        }

        .tv-content .channals-table .price-table {
            color: #fff;
            font-size: 14px;
            line-height: 1
        }

        .price-table {
            font-weight: 900;
        }

        .main-compare-btn {
            /*width: 135px;*/
            height: 30px;
            width: 90%;
            min-width: 110px;
        }

        .main-compare-wrap {
            margin: 10px 0 11px;
            display: flex;
            justify-content: center;
            position: absolute;
            bottom: 2px;
            left: 50%;
            transform: translate(-50%, 0);
        }

        .info-banner {
            margin-top: 75px;
            overflow: hidden
        }

        .info-banner.active .films-info-best {
            display: block;
        }

        .films-info-best {
            text-align: center;
            margin: 90px 0 30px;
            padding: 45px 0;
            background: linear-gradient(90deg, #0f1c26 20.26%, rgba(15, 28, 38, 0) 100.89%)
        }

        .body-trinity .films-info-best {
            background: linear-gradient(90deg, #242424 20.26%, rgba(50, 50, 50, 0) 100.89%);
        }

        .films-info-best .img-content a svg {
            margin: 0 34px
        }

        .films-info-best .img-content a:hover svg path {
            fill: #20bec6
        }

        .body-trinity .films-info-best .img-content a:hover svg path {
            fill: #177D2A;
        }

        .films-info-best p {
            color: #fff;
            margin: 20px 0 35px
        }

        .films-info-best .logo-best, .films-info-best .logo-best-r {
            position: absolute;
            top: 37%;
            left: -125px;
            -moz-transform: translateY(-50%);
            -webkit-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%)
        }

        .films-info-best .logo-best {
            top: 33%;
        }

        .films-info-best .logo-best-r {
            left: auto;
            right: -220px
        }

        .devices {
            padding: 130px 0 90px;
            text-align: center;
            background: url(https://sweet.tv/images/v2/widget/devices-bgc.jpg);
        }

        .body-trinity .devices {
            background: url(https://sweet.tv/images/v2/widget/trinity-devices-bg.jpg);
        }

        .devices-img-desk {
            max-width: 915px;
        }

        .devices h2 {
            margin-top: 50px;
        }

        .devices p {
            margin: 20px 0;
        }

        .devices-btn {
            width: 200px;
        }

        .tv-content, .choose-tariff-wrap, .devices-wrap {
            display: flex;
            justify-content: center;
        }

        .footer {
            background: #0F1C26;
            height: 80px
        }

        .main-compare {
            display: none;
        }

        .body-trinity .footer {
            background: rgba(0, 0, 0, 0.87);
        }


        @media screen and (min-width: 1921px) {
            .tv-content .channals-table .sticky > a > h2 {
                font-size: 12px;
            }
        }

        @media screen and (max-width: 1920px) {
            .tv-content .channals-table .sticky > a > h2 {
                font-size: 14px;
            }
        }

        @media screen and (max-width: 1600px) {
            .films-info-best .logo-best {
                left: -130px
            }
        }

        @media screen and (max-width: 1440px) {
            .films-info-best .img-content a svg {
                margin: 0 22px
            }

            .films-info-best .logo-best-r {
                right: -170px
            }
        }

        @media screen and (max-width: 1400px) {
            .films-info-best .logo-best-r {
                right: -140px
            }
        }

        @media screen and (max-width: 1270px) {
            .films-info-best .img-content a svg {
                margin: 0 20px
            }

            .films-info-best .logo-best, .films-info-best .logo-best-r {
                display: none
            }

            .films-info-best .img-content a svg {
                height: 70px;
                margin: 0 15px
            }
        }

        @media screen and (max-width: 1200px) {
            .container {
                max-width: 1194px;
                width: 100%;
                padding-right: 15px;
                padding-left: 15px;
                margin-right: auto;
                margin-left: auto;
            }

            .owl-tariffs .owl-stage {
                padding-left: 0 !important;
                padding-right: 0 !important;
            }

            .owl-tariffs .owl-stage-outer {
                overflow: visible;
            }

            .table {
                width: 100%;
            }

            .info-banner {
                margin-top: 0;
            }
        }

        @media screen and (max-width: 1140px) {
            .owl-tariff {
                min-width: 260px;
            }
        }

        @media screen and (max-width: 991px) {
            .main-compare-btn {
                width: 83px;
                font-size: 10px;
                height: 25px;
                min-width: initial;
            }

            .tv-content .channals-table .sticky > a > h2 {
                font-size: 12px;
            }

            .tv-content .channals-table .sticky p, .tv-content .channals-table .price-table {
                font-size: 13px;
            }

            .tv-content .channals-table .sticky p,
            .tv-content .channals-table .price-table {
                font-size: 14px;
            }

            .tv-content .channals-table .sticky .ch-col-3 {
                min-height: 150px;
            }

            .choose-tariff h3, .main-compare h2,
            .main-tariffs h1 {
                font-size: 30px;
            }

            .devices-img-desk {
                max-width: 100%;
            }

            .tv-content .channals-table .sticky > a > h2 {
                font-weight: 400;
            }
        }

        @media screen and (max-width: 850px) {
            .owl-tariffs {
                width: 100%;
                white-space: nowrap;
                float: left;
                height: 480px;
            }

            .owl-scroll {
                overflow-x: scroll !important;
            }

            .owl-tariff {
                height: 385px;
                min-width: 260px;
                width: 276px;
                margin-right: 16px;
                display: inline-block;
                position: relative;
                vertical-align: top;
            }

            .owl-tariff:first-of-type,
            .main-tariffs h1 {
                margin-left: 15px;
            }

            .owl-tariffs::-webkit-scrollbar {
                width: 0;
                height: 0;
                display: none;
            }

            .owl-tariffs::-webkit-scrollbar-track {
                background: transparent;
                display: none;
            }

            .owl-tariffs::-webkit-scrollbar-thumb {
                background: transparent;
                display: none;
            }

            .owl-tariffs::-webkit-scrollbar-thumb:hover {
                background: transparent;
                display: none;
            }

            .main-tariffs .container {
                padding-right: 0;
                padding-left: 0;
            }

            .main-tariffs {
                padding-top: 85px;
            }

            .owl-tariff-bold {
                margin-bottom: 10px;
                white-space: initial;
            }

            .owl-tariff-list ul {
                padding: 0px 0 9px 14px;
            }

            .owl-tariff-list {
                margin-top: 17px;
            }

            .owl-tariff h3.owl-tariff-long-name {
                padding-top: 10px;
                padding-bottom: 0;
            }

        }

        @media screen and (max-width: 719px) {
            .owl-tariffs .owl-nav {
                position: absolute;
                top: -60px;
                right: 30px;
            }

        }

        @media screen and (max-width: 576px) {

            .main-tariffs {
                padding-left: 15px;
            }

            .owl-tariffs .owl-prev:before,
            .owl-tariffs .owl-next:after {
                width: 8px;
                height: 8px;
            }

            .owl-tariffs .owl-prev:before {
                margin-left: 14px;
            }

            .owl-tariffs .owl-next:after {
                margin-left: 11px;
            }

            .owl-tariffs .owl-nav button.owl-prev,
            .owl-tariffs .owl-nav button.owl-next {
                height: 32px;
                width: 32px;
            }

            .owl-tariffs .owl-nav {
                position: absolute;
                top: -50px;
                right: 30px;
            }

            .owl-item {
                display: flex;
                justify-content: center;
            }


        }

        .body-trinity .sweet-widget-info {
            margin-top: 10px;
        }

        @media screen and (max-width: 767px) {
            .sweet-widget-info {
                position: static;
                transform: none;
            }

            .owl-tariff-wrap {
                margin-top: 38px;
            }

            .owl-tariff-cinema .owl-tariff-list {
                min-height: 235px;
            }

            .header-logo {
                width: 375px;
            }

            .header-wrap {
                width: 380px;
            }

            .header-title1 {
                font-size: 44px;
            }

            .header-title2 {
                font-size: 36px;
            }

            .tv-content .sticky > a.ch-col-3, .tv-content .sticky > a.ch-col-4, .tv-content .sticky > a.ch-col-5 {
                margin: 0 0 0 2px;
            }

            .main-compare-btn {
                width: 85px;
                font-size: 10px;
                height: 25px;
            }

            .tv-content .channals-table .sticky > a > h2 {
                font-size: 15px;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
                padding: 0 5px;
            }

            .tv-content .channals-table .sticky p,
            .tv-content .channals-table .price-table {
                font-size: 12px;
            }

            .main-compare-wrap {
                margin: 10px 0 5px;
            }

            .devices {
                padding: 60px 0;
            }

            .footer {
                height: 124px;
            }

            .footer-wrap {
                flex-direction: column;
                justify-content: center;
            }

            .footer-logo {
                margin-top: 20px;
            }

            .footer-rights,
            .footer-logo {
                max-width: 100%;
                text-align: center;
            }

            .tv-content .channals-table .sticky .ch-col-3 {
                min-height: 98px;
            }

            .body-trinity .tv-content .channals-table .sticky .ch-col-3,
            .main-trinity .tv-content .channals-table.channals-table-max .sticky .ch-col-3 {
                min-height: 98px;
            }


            .body-trinity .tv-content .channals-table.channals-table-max .channel-container .ch-col-3 {
                display: block;
            }

            .body-trinity .tv-content .channals-table.channals-table-max .channel-container .s-col:nth-of-type(5) {
                display: none;
            }

            .tv-content .channals-table .channel-container, .tv-content .channals-table .sticky {
                -ms-grid-columns: .1fr .3fr .4fr .4fr .4fr;
                grid-template-columns: .1fr .3fr .4fr .4fr .4fr;
            }

            .body-trinity .tv-content .channals-table .channel-container,
            .body-trinity .tv-content .channals-table .sticky {
                -ms-grid-columns: .1fr .3fr .4fr .4fr .4fr;
                grid-template-columns: .1fr .3fr .4fr .4fr .4fr;
            }

            .main-trinity .tv-content .channals-table.channals-table-max .channel-container, .main-trinity .tv-content .channals-table.channals-table-max .sticky {
                -ms-grid-columns: .1fr .3fr .4fr .4fr .4fr;
                grid-template-columns: .1fr .3fr .4fr .4fr .4fr;
            }

            .tv-content .channals-table .sticky .ch-col-3:nth-of-type(3),
            .main-trinity .tv-content .channals-table.channals-table-max .sticky .ch-col-3:nth-of-type(3),
            .tv-content .channals-table .sticky .ch-col-3:nth-of-type(5),
            .main-trinity .tv-content .channals-table.channals-table-max .sticky .ch-col-3:nth-of-type(5) {
                display: none;
            }


            .body-trinity .tv-content .channals-table .sticky .ch-col-3:nth-of-type(3),
            .body-trinity .tv-content .channals-table .sticky .ch-col-3:nth-of-type(5) {
                display: none;
            }


            .tv-content .channals-table .channel-container .s-col:nth-of-type(5),
            .body-trinity .tv-content .channals-table.channals-table-max .s-col:nth-of-type(5) {
                display: none;
            }


            .body-trinity .tv-content .channals-table .sticky .ch-col-3:nth-of-type(3),
            .body-trinity .tv-content .channals-table.channals-table-max .sticky .ch-col-3:nth-of-type(3),
            .body-trinity .channals-table .sticky .ch-col-3:nth-of-type(5),
            .body-trinity .tv-content .channals-table.channals-table-max .sticky .ch-col-3:nth-of-type(5) {
                display: none !important;
            }

            .tv-content .channals-table .sticky > a > h2 {
                margin-top: 5px;
            }

            .tv-content .sticky > a.ch-col-3, .tv-content .sticky > a.ch-col-4, .tv-content .sticky > a.ch-col-5 {
                padding: 5px 5px 10px;
            }

            .tv-content .channals-table .ch-col-1 {
                min-width: 40px;
            }

            .tv-content .channals-table .image-container img {
                width: 90%;
            }

            .tv-content .channals-table .table-active:not(:first-of-type) span {
                font-size: 12px;
            }

            .tv-content .channals-table .price-table {
                display: flex;
                flex-direction: column;
            }

            .owl-tariff-list {
                height: 235px;
            }

            .main-compare-wrap {
                display: none;
            }
        }

        @media screen and (max-width: 767px) {
            .films-info-best .img-content {
                flex-wrap: wrap
            }

            .films-info-best .img-content a svg {
                height: 50px;
                margin: 0 15px 25px
            }

            .films-info-best {
                padding: 35px 0 20px;
                margin: 50px 0 0
            }
        }


        @media screen and (max-width: 576px) {
            .header {
                height: 250px;
                position: static;
            }

            .header-logo {
                width: 187px;
            }

            .header-text {
                line-height: 10px;
                text-align: left;
                margin-top: 15px;
            }

            .header-title1 {
                font-size: 23px;
            }

            .header-title2 {
                font-size: 19px;
            }

            .main {
                margin-top: 0;
            }

            .tv-content .channals-table .table-active:not(:first-of-type) span {
                font-size: 14px
            }

            .tv-content .channals-table .sticky > a > h2 {
                font-size: 14px;
                margin-bottom: 5px
            }

            .tv-content .channals-table .sticky p {
                margin-bottom: 5px
            }

            .tv-content .channals-table .sticky p span span {
                font-size: 10px
            }

            .tv-content .channals-table .price-table {
                font-size: 10px
            }

            .main-compare-btn {
                min-width: 53px;
                width: 75%;
                font-size: 7px;
                height: 16px;
            }

            .tariffs__channel--green,
            .tariffs__channel--red {
                background-size: 35%;
            }

            .choose-tariff h3,
            .main-compare h2,
            .main-tariffs h1,
            .devices h2 {
                font-size: 20px;
            }

            .films-info-best .img-content a svg {
                margin: 0 45px 25px
            }

            .films-info-best .h2__style {
                font-size: 22px
            }

            .devices h2 {
                margin-top: 20px;
            }

            .choose-tariff,
            .main-compare {
                margin-top: 50px;
            }

            .choose-tariff p {
                margin: 10px 0;
            }

            .main-tariffs {
                padding-top: 50px;
            }

            .tv-content .channals-table .sticky p {
                display: flex;
                flex-direction: column;
            }
        }

        @media screen and (max-width: 450px) {
            .films-info-best .img-content a svg {
                margin: 0 10px 25px
            }
        }

        @media screen and (max-width: 414px) {
            .main-compare-btn {
                width: 48px;
                font-size: 6.5px;
                height: 14px;
                border-radius: 6px;
            }

            .main-compare-wrap {
                margin: 10px 0 5px;
            }

            .tv-content .sticky > a.ch-col-3, .tv-content .sticky > a.ch-col-4, .tv-content .sticky > a.ch-col-5 {
                overflow: hidden;
            }

            .films-info-best .h2__style {
                font-size: 20px
            }

            .films-info-best .img-content a svg {
                height: 55px;
                max-width: 140px
            }

            .films-info-best .img-content a svg {
                margin: 0 10px 25px
            }

        }

        @media screen and (max-width: 359px) {
            .main-compare-btn {
                width: 100%;
                font-size: 7px;
                border-radius: 0;
            }

            .main-compare-wrap {
                margin: 10px 0;
            }

            .tv-content .channals-table .price-table {
                font-size: 9px;
            }
        }
    </style>
</head>
<body class="body-trinity">
<nav class="widget-nav widget-nav-trinity" id="tabs">
    <div class="container">
        <a href="" class="widget-nav-link" onclick="window.location.reload()">
            <img src="https://sweet.tv/images/v2/widget/logo-trinity.png" alt="Trinity-tv.net логотип">
        </a>
    </div>
</nav>

<header class="header header-trinity">
    <div class="container h-100" style="position: relative;z-index: 2;">
        <div class="header-wrap">
            <img class="header-logo" src="https://sweet.tv/images/v2/widget/trinity-logo.png"
                 alt="Trinity-TV.net логотип">
            <div class="header-text">
                <p class="header-title1">Кращі фільми ТА серіали</p>
            </div>
        </div>
    </div>
</header>
<style>
    .header.header-trinity {
        background-image: url(https://sweet.tv/images/v2/widget/trinity-bg.jpg);
        position: relative;
    }

    .header.header-trinity:before {
        content: '';
        display: block;
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
        background: rgba(0, 0, 0, .6);
    }

    .header-trinity .header-wrap {
        width: initial;
        align-items: center;
    }

    .header-trinity .header-title1 {
        font-size: 69px;
        line-height: 140%;
        font-weight: 600;
    }

    @media screen and (max-width: 991px) {
        .header-trinity .header-title1 {
            font-size: 55px;
            line-height: 130%;
            margin-top: 15px;
        }
    }

    @media screen and (max-width: 768px) {
        .header-trinity .header-title1 {
            font-size: 40px;
        }
    }

    @media screen and (max-width: 576px) {
        .header-trinity .header-title1 {
            font-size: 30px;
        }

        .header-trinity .header-text {
            text-align: center;
            margin-top: 0;
        }
    }

    @media screen and (max-width: 425px) {
        .header-trinity .header-title1 {
            font-size: 25px;
        }
    }

</style>
<main class="main main-trinity">
    <section class="main-tariffs">
        <div class="container">
            <h1>Тарифні плани</h1>
        </div>
        <div class="container">
            <div class="owl-carousel owl-theme owl-tariffs">
                <a onclick="location = 'http://services/vendor/route.php?action=connectService&subscrid=1448'" class="owl-tariff owl-tariff-cinema" data-toggle="modal"
                   data-target="#applyModal">
                    <h3>Кіно</h3>
                    <p class="tariff-cost">49 грн/міс </p>
                    <ul class="owl-tariff-list">
                        <li>
                            <img class="owl-tariff-big-donut" src="https://sweet.tv/images/v2/widget/trinity.svg"
                                 alt="Trinity">
                            <span class="owl-tariff-bold" style="margin-bottom: 0;">Добірні фільми та прем’єри від культових кіностудій</span>
                        </li>
                        <li>
                            <img src="https://sweet.tv/images/v2/widget/studio-logo.png" alt="Cinema Studios">
                        </li>
                    </ul>

                    <div class="owl-tariff-wrap">

                        <button class="btn owl-tariff-btn" data-connect>Підключити</button>
                    </div>
                </a>


                <a onclick="location = 'http://services/vendor/route.php?action=connectService&subscrid=1552'" class="owl-tariff" data-toggle="modal" data-target="#applyModal">
                    <h3>Мінімальний</h3>
                    <p class="tariff-cost">99 грн/міс</p>
                    <ul class="owl-tariff-list">
                        <li>
                            <img class="owl-tariff-big-donut" src="https://sweet.tv/images/v2/widget/trinity.svg"
                                 alt="Trinity">
                            <span class="owl-tariff-bold">189 каналів</span>
                        </li>
                        <ul>
                            <li>
                                <img class="owl-tariff-big-donut" src="https://sweet.tv/images/v2/widget/trinity.svg"
                                     alt="Trinity">
                                <span>Національні канали HD</span>
                            </li>
                            <li>
                                <img class="owl-tariff-big-donut" src="https://sweet.tv/images/v2/widget/trinity.svg"
                                     alt="Trinity">
                                <span>Канали із фільмами</span>
                            </li>
                            <li>
                                <img class="owl-tariff-big-donut" src="https://sweet.tv/images/v2/widget/trinity.svg"
                                     alt="Trinity">
                                <span>Дитячий контент</span>
                            </li>
                        </ul>
                        <li class="owl-tariff-line">
                            <img class="owl-tariff-big-donut" src="https://sweet.tv/images/v2/lock.svg" alt="Trinity">
                            <span class="owl-tariff-bold owl-tariff-semiopacity ">Культові фільми Disney, Universal, Paramount та Sony</span>
                        </li>
                        <li>


                        </li>
                    </ul>
                    <div class="owl-tariff-wrap">
                        <button class="btn owl-tariff-btn" data-connect>Підключити</button>
                    </div>
                </a>

                <a onclick="location = 'http://services/vendor/route.php?action=connectService&subscrid=1647'" class="owl-tariff" data-toggle="modal" data-target="#applyModal">
                    <h3>Середній</h3>
                    <p class="tariff-cost">99 грн/міс</p>
                    <ul class="owl-tariff-list">
                        <li>
                            <img class="owl-tariff-big-donut" src="https://sweet.tv/images/v2/widget/trinity.svg"
                                 alt="Trinity">
                            <span class="owl-tariff-bold">227 каналів</span>
                        </li>
                        <ul>
                            <li>
                                <img class="owl-tariff-big-donut" src="https://sweet.tv/images/v2/widget/trinity.svg"
                                     alt="Trinity">
                                <span>Національні канали HD</span>
                            </li>
                            <li>
                                <img class="owl-tariff-big-donut" src="https://sweet.tv/images/v2/widget/trinity.svg"
                                     alt="Trinity">
                                <span>Преміальні канали</span>
                            </li>
                            <li>
                                <img class="owl-tariff-big-donut" src="https://sweet.tv/images/v2/widget/trinity.svg"
                                     alt="Trinity">
                                <span>Канали із фільмами</span>
                            </li>
                            <li>
                                <img class="owl-tariff-big-donut" src="https://sweet.tv/images/v2/widget/trinity.svg"
                                     alt="Trinity">
                                <span>Дитячий контент</span>
                            </li>
                        </ul>
                        <li class="owl-tariff-line">
                            <img class="owl-tariff-big-donut" src="https://sweet.tv/images/v2/trinity.svg"
                                 alt="Trinity">
                            <span class="owl-tariff-bold owl-tariff-semiopacity active">Культові фільми Disney, Universal, Paramount та Sony</span>
                        </li>
                        <li>


                        </li>
                    </ul>
                    <div class="owl-tariff-wrap">
                        <button class="btn owl-tariff-btn" data-connect>Підключити</button>
                    </div>
                </a>


                <a onclick="location = 'http://services/vendor/route.php?action=connectService&subscrid=1648'" class="owl-tariff" data-toggle="modal" data-target="#applyModal">
                    <h3>Максимальний</h3>
                    <p class="tariff-cost">159 грн/міс</p>
                    <ul class="owl-tariff-list">
                        <li>
                            <img class="owl-tariff-big-donut" src="https://sweet.tv/images/v2/widget/trinity.svg"
                                 alt="Trinity">
                            <span class="owl-tariff-bold">239 каналів</span>
                        </li>
                        <ul>
                            <li>
                                <img class="owl-tariff-big-donut" src="https://sweet.tv/images/v2/widget/trinity.svg"
                                     alt="Trinity">
                                <span>Національні канали HD</span>
                            </li>
                            <li>
                                <img class="owl-tariff-big-donut" src="https://sweet.tv/images/v2/widget/trinity.svg"
                                     alt="Trinity">
                                <span>Преміальні канали HD</span>
                            </li>
                            <li>
                                <img class="owl-tariff-big-donut" src="https://sweet.tv/images/v2/widget/trinity.svg"
                                     alt="Trinity">
                                <span>Канали із фільмами HD</span>
                            </li>
                            <li>
                                <img class="owl-tariff-big-donut" src="https://sweet.tv/images/v2/widget/trinity.svg"
                                     alt="Trinity">
                                <span>Дитячий контент</span>
                            </li>
                        </ul>
                        <li class="owl-tariff-line">
                            <img class="owl-tariff-big-donut" src="https://sweet.tv/images/v2/trinity.svg"
                                 alt="Trinity">
                            <span class="owl-tariff-bold owl-tariff-semiopacity active">Культові фільми Disney, Universal, Paramount та Sony</span>
                        </li>
                        <li>


                        </li>
                    </ul>
                    <div class="owl-tariff-wrap">
                        <button class="btn owl-tariff-btn" data-connect>Підключити</button>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <section class="choose-tariff">
        <div class="container">
            <h3>Не вибрали тариф?</h3>
            <p>Порівняйте наповнення тарифів</p>
            <div class="choose-tariff-wrap">
                <div class="btn choose-tariff-btn">Порівняти тарифи</div>
            </div>
        </div>
    </section>
    <section class="main-compare">
        <div class="container">
            <h2>Порівняй і вибери для себе кращий тарифний план</h2>
        </div>
        <div class="container">
            <div class="tv-content">
                <div class="table table-hover channals-table channals-table-max" package="728"
                     style="padding-top: 0px;">
                    <div class="sticky" style="width: auto; top: 60px;">
                        <div class="ch-col-1"></div>
                        <div class="ch-col-2"></div>
                        <a href="#" class="ch-col-3 ch-col-3-0">
                            <h2>
                                Мінімальний
                            </h2>
                            <div class="sweet-widget-info">
                                <div>
                                    <p class="">
                                        189 <span>каналiв</span>
                                    </p>
                                </div>
                                <div class="price-table">
                                    99 <span>грн/міс</span>
                                </div>
                            </div>


                            <!-- <div>
                                    <p class="">
                                        189 <span>каналiв</span>
                                    </p>
                                </div>
                                <div class="price-table">
                                    99 <span>грн/міс</span>
                                </div> -->

                            <div class="main-compare-wrap">
                                <button class="btn main-compare-btn" data-connect data-toggle="modal"
                                        data-target="#applyModal">Підключити
                                </button>
                            </div>
                        </a>
                        <a href="#" class="ch-col-3 ch-col-3-0">
                            <h2>
                                Середній
                            </h2>
                            <div class="sweet-widget-info">
                                <div>
                                    <p class="">
                                        227 <span>каналiв</span>
                                    </p>
                                </div>
                                <div class="price-table">
                                    99 <span>грн/міс</span>
                                </div>
                            </div>


                            <!-- <div>
                                    <p class="">
                                        227 <span>каналiв</span>
                                    </p>
                                </div>
                                <div class="price-table">
                                    99 <span>грн/міс</span>
                                </div> -->

                            <div class="main-compare-wrap">
                                <button class="btn main-compare-btn" data-connect data-toggle="modal"
                                        data-target="#applyModal">Підключити
                                </button>
                            </div>
                        </a>
                        <a href="#" class="ch-col-3 ch-col-3-0">
                            <h2>
                                Максимальний
                            </h2>
                            <div class="sweet-widget-info">
                                <div>
                                    <p class="">
                                        239 <span>каналiв</span>
                                    </p>
                                </div>
                                <div class="price-table">
                                    159 <span>грн/міс</span>
                                </div>
                            </div>


                            <!-- <div>
                                    <p class="">
                                        239 <span>каналiв</span>
                                    </p>
                                </div>
                                <div class="price-table">
                                    159 <span>грн/міс</span>
                                </div> -->

                            <div class="main-compare-wrap">
                                <button class="btn main-compare-btn" data-connect data-toggle="modal"
                                        data-target="#applyModal">Підключити
                                </button>
                            </div>
                        </a>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/240.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>1+1 HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/15.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>СТБ HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/5.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Новый Канал HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/6.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>ICTV HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/7.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Интер HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/381.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Индиго TV HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/397.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>2+2 HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/484.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>ТЕТ HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/186.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Бигуди</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/103.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>ПЛЮСПЛЮС HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/512.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Paramount Comedy</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/553.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>SWEET.TV КИНО HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/556.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>SWEET.TV МУЛЬТФИЛЬМЫ HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/31.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>К1 HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/32.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>К2 HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/456.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>KVARTAL TV</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/166.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>НЛО TV HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/8.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>НТН HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/19.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Мега HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/45.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Zoom HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/12.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Украина HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/517.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>UA:Перший HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/336.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Discovery Channel HD</span>
                        </div>

                        <div class="ch-col-3 s-col tariffs__channel--red"></div>
                        <div class="ch-col-3 s-col tariffs__channel--red"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/386.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Discovery Channel</span>
                        </div>

                        <div class="ch-col-3 s-col tariffs__channel--red"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/143.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>National Geographic HD</span>
                        </div>

                        <div class="ch-col-3 s-col tariffs__channel--red"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/524.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Nat Geo Wild HD</span>
                        </div>

                        <div class="ch-col-3 s-col tariffs__channel--red"></div>
                        <div class="ch-col-3 s-col tariffs__channel--red"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/453.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Animal Planet HD</span>
                        </div>

                        <div class="ch-col-3 s-col tariffs__channel--red"></div>
                        <div class="ch-col-3 s-col tariffs__channel--red"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/392.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Animal Planet</span>
                        </div>

                        <div class="ch-col-3 s-col tariffs__channel--red"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/389.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Discovery Investigation ID Xtra</span>
                        </div>

                        <div class="ch-col-3 s-col tariffs__channel--red"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/141.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Setanta Sports HD</span>
                        </div>

                        <div class="ch-col-3 s-col tariffs__channel--red"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/479.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Setanta Sports+ HD</span>
                        </div>

                        <div class="ch-col-3 s-col tariffs__channel--red"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/209.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Футбол 3 HD</span>
                        </div>

                        <div class="ch-col-3 s-col tariffs__channel--red"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/349.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>SHAKHTAR TV HD</span>
                        </div>

                        <div class="ch-col-3 s-col tariffs__channel--red"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/78.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Eurosport 1 HD</span>
                        </div>

                        <div class="ch-col-3 s-col tariffs__channel--red"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/207.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Eurosport 2 HD</span>
                        </div>

                        <div class="ch-col-3 s-col tariffs__channel--red"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/123.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>TV1000 Action HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/39.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>TV1000</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/40.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>TV1000 World Kino</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/224.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>ViP Megahit HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/223.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>ViP Premiere HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/225.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>ViP Comedy HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/769.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>ТОП Сериалы</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/770.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>ТОП Шоу</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/454.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>ViP Comedy</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/525.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>FOX HD</span>
                        </div>

                        <div class="ch-col-3 s-col tariffs__channel--red"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/528.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Fox Life HD</span>
                        </div>

                        <div class="ch-col-3 s-col tariffs__channel--red"></div>
                        <div class="ch-col-3 s-col tariffs__channel--red"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/391.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>TLC</span>
                        </div>

                        <div class="ch-col-3 s-col tariffs__channel--red"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/206.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Nickelodeon HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/92.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Nickelodeon</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/58.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Nicktoons</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/394.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Food Network HD</span>
                        </div>

                        <div class="ch-col-3 s-col tariffs__channel--red"></div>
                        <div class="ch-col-3 s-col tariffs__channel--red"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/258.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Travel Channel HD</span>
                        </div>

                        <div class="ch-col-3 s-col tariffs__channel--red"></div>
                        <div class="ch-col-3 s-col tariffs__channel--red"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/200.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Travel Channel</span>
                        </div>

                        <div class="ch-col-3 s-col tariffs__channel--red"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/514.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Epic Drama HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/491.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Hollywood HD</span>
                        </div>

                        <div class="ch-col-3 s-col tariffs__channel--red"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/263.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Hollywood</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/262.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>AMC</span>
                        </div>

                        <div class="ch-col-3 s-col tariffs__channel--red"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/709.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Дорама HD</span>
                        </div>

                        <div class="ch-col-3 s-col tariffs__channel--red"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/427.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Bollywood HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/44.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Enter-фильм HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/502.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Star Cinema HD</span>
                        </div>

                        <div class="ch-col-3 s-col tariffs__channel--red"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/511.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Star Family HD</span>
                        </div>

                        <div class="ch-col-3 s-col tariffs__channel--red"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/368.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Paramount channel</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/503.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>BOLT HD</span>
                        </div>

                        <div class="ch-col-3 s-col tariffs__channel--red"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/369.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>FILMUALIVE HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/68.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>FILMUADRAMA HD</span>
                        </div>

                        <div class="ch-col-3 s-col tariffs__channel--red"></div>
                        <div class="ch-col-3 s-col tariffs__channel--red"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/548.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>FILMUADRAMA</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/36.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Viasat Explore</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/421.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Viasat Nature</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/37.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Viasat History</span>
                        </div>

                        <div class="ch-col-3 s-col tariffs__channel--red"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/384.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>TRAVEL GUIDE-TV HD</span>
                        </div>

                        <div class="ch-col-3 s-col tariffs__channel--red"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/423.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Наука</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/424.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Терра</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/439.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Фауна</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/83.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Телевсесвіт HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/450.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Дача HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/451.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Трофей HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/772.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Масон-ТВ</span>
                        </div>

                        <div class="ch-col-3 s-col tariffs__channel--red"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/383.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Navigator TV HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/774.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Utravel</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/245.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Кус-кус HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/233.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Рыбалка ТВ HD</span>
                        </div>

                        <div class="ch-col-3 s-col tariffs__channel--red"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/208.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Travel&amp;Adventure HD</span>
                        </div>

                        <div class="ch-col-3 s-col tariffs__channel--red"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/268.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>TiJi</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/378.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Gulli</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/86.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Cartoon Network</span>
                        </div>

                        <div class="ch-col-3 s-col tariffs__channel--red"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/335.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Nick Junior</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/374.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>NIKI Junior HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/366.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>NIKI Kids HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/125.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Малятко TV</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/410.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Baby TV</span>
                        </div>

                        <div class="ch-col-3 s-col tariffs__channel--red"></div>
                        <div class="ch-col-3 s-col tariffs__channel--red"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/47.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Пиксель ТВ HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/294.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Lale HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/144.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Da Vinci Learning</span>
                        </div>

                        <div class="ch-col-3 s-col tariffs__channel--red"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/42.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>English Club TV HD</span>
                        </div>

                        <div class="ch-col-3 s-col tariffs__channel--red"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/420.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Viasat Sport HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/419.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Viasat Sport</span>
                        </div>

                        <div class="ch-col-3 s-col tariffs__channel--red"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/703.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Trace Sport Stars</span>
                        </div>

                        <div class="ch-col-3 s-col tariffs__channel--red"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/504.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Xsport HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/768.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>XSport+</span>
                        </div>

                        <div class="ch-col-3 s-col tariffs__channel--red"></div>
                        <div class="ch-col-3 s-col tariffs__channel--red"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/413.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Mostvideo.TV HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/521.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Cars &amp; Stars HD</span>
                        </div>

                        <div class="ch-col-3 s-col tariffs__channel--red"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/300.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>ПЕРВЫЙ АВТОМОБИЛЬНЫЙ ТЕЛЕКАНАЛ HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/721.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Equalympic</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/17.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>M1 HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/67.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>M2 HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/557.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>InRating TV HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/87.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Сlub MTV</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/415.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>MTV Hits</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/242.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>MTV Live HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/385.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>MCM Top</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/426.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Eu.Music HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/371.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>#Наше ретро HD</span>
                        </div>

                        <div class="ch-col-3 s-col tariffs__channel--red"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/412.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>#НАШЕ music HD</span>
                        </div>

                        <div class="ch-col-3 s-col tariffs__channel--red"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/483.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>#НАШЕ music 4K</span>
                        </div>

                        <div class="ch-col-3 s-col tariffs__channel--red"></div>
                        <div class="ch-col-3 s-col tariffs__channel--red"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/355.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>4ever music HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/520.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Fireplace 4K</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/358.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Aquarium 4K</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/494.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>ID Fashion HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/516.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Fashion TV HD Ukraine</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/66.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Глас</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/176.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>CNL</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/462.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Новый Христианский</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/353.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Возрождение</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/290.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Надежда</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/23.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>EWTN</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/399.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>UɅ:Культура</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/146.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Униан ТВ HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/547.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Україна 24</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/228.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>8 Канал HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/644.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>ДОМ TV</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/382.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Миледи</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/359.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>ECO TV HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/151.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>НАТАЛИ</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/477.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Genuine TV HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/455.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Караван TV</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/376.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>ATR HD</span>
                        </div>

                        <div class="ch-col-3 s-col tariffs__channel--red"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/100.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>ОЦЕ HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/461.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Правда ТУТ HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/409.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Эпоха</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/138.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>36,6 TV HD</span>
                        </div>

                        <div class="ch-col-3 s-col tariffs__channel--red"></div>
                        <div class="ch-col-3 s-col tariffs__channel--red"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/476.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>PRM.GLOBAL HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/464.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>BamBarBia TV HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/55.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>12 Канал (Луцк) HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/595.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>UɅ: ВОЛИНЬ</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/793.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>D1</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/444.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Первый Городской Кривой Рог HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/187.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>11 канал Дніпро</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/430.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>ПТРК HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/582.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>ОТВ</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/581.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>ІРТ</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/583.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>UɅ: ДНІПРО</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/445.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>UɅ: Донбас</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/458.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>UɅ:: ЗАКАРПАТТЯ</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/573.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Ужгород 21</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/437.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>TV5 Запорожье</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/51.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>МТМ</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/162.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>ALEX.UA</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/584.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>UɅ: ЗАПОРІЖЖЯ</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/459.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>ОТБ Галичина</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/498.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>РАI Ивано-Франковск</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/204.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Коломия НТК</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/569.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Снятин</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/585.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>UɅ: КАРПАТИ</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/152.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>UɅ: Київ</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/402.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Киев ТВ</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/574.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>LIVE HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/575.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Типовой Киев</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/564.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Крокус ТВ</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/436.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>UɅ: Крим</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/571.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Правда ТУТ Львов HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/677.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>НТА</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/586.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>UɅ: ЛЬВІВ</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/441.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Plus</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/442.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Страна Советов</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/443.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>ГLAS</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/440.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Одесса Int</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/576.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Odessa.Live HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/84.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>ТК Круг</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/566.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Первый городской Одесса</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/587.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>UɅ: ОДЕСА</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/468.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>UɅ: Рівне</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/205.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Рівне 1 HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/580.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>ITV</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/578.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Сфера-ТВ</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/469.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>UɅ: Суми</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/563.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>A TV</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/264.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Тернополь 1 HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/169.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Телекомпанія TV-4</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/579.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>ІНТБ</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/588.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>UɅ: ТЕРНОПІЛЬ</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/149.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>UɅ: Херсон (Скiфiя)</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/182.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Херсон плюс</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/372.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>TIM-ТВ</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/109.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>UɅ: Чернігів</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/448.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>UɅ: БУКОВИНА</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/515.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>TBA</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/168.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Телеканал ЧЕРНІВЦІ</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/470.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Чернівецький Промінь HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/562.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Полтавське ТБ HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/561.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Центральный Полтава HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/570.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Місто Плюс HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/568.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Канал Кременчук</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/589.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>UɅ: ПОЛТАВА</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/590.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>UɅ: ХАРКІВ</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/565.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>НІС-ТВ</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/591.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>UɅ: МИКОЛАЇВ</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/572.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Март HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/592.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>UɅ: КРОПИВНИЦЬКИЙ</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/593.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>UɅ: ВІННИЦЯ</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/597.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Віта ТБ HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/567.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Перший Подільський</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/594.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>UɅ: ПОДІЛЛЯ</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/560.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>33 канал HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/577.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Sonata TV HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/500.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Настоящее время HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/489.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Playboy TV</span>
                        </div>

                        <div class="ch-col-3 s-col tariffs__channel--red"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/714.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Blue Hustler</span>
                        </div>

                        <div class="ch-col-3 s-col tariffs__channel--red"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/713.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Barely legal TV</span>
                        </div>

                        <div class="ch-col-3 s-col tariffs__channel--red"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/596.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Ісландія HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/10.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>РАДА</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/508.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>OBOZ TV HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/126.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>ЧП.info</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/296.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Телеканал 24 HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/203.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>ПРЯМИЙ HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/158.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Еспресо</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/481.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Апостроф TV HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/26.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Первый Деловой</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/9.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>5 Канал</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/269.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>BBC</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/172.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>CNNi HD</span>
                        </div>

                        <div class="ch-col-3 s-col tariffs__channel--red"></div>
                        <div class="ch-col-3 s-col tariffs__channel--red"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/529.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Euronews English HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/365.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Euronews</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/701.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>TRT World HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/434.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Deutsche Welle HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/457.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>Deutsche Welle (Deutsch)</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/380.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>France 24  English HD</span>
                        </div>

                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/712.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>France 24 French HD</span>
                        </div>

                        <div class="ch-col-3 s-col tariffs__channel--red"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                    <div class="channel-container" data-toggle="modal" data-target="#applyModal">
                        <div class="ch-col-1 table-active image-container">
                            <img class="lozad" data-src="https://static.sweet.tv/images/icons/channels/711.png"
                                 alt="1+1 HD" src="https://sweet.tv/images/v2/loader.svg">

                        </div>
                        <div class="ch-col-2 table-active">
                            <span>France 24 Arabic</span>
                        </div>

                        <div class="ch-col-3 s-col tariffs__channel--red"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                        <div class="ch-col-6 s-col tariffs__channel--green"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<section class="info-banner lozad active" data-toggle-class="active" data-loaded="true">
    <div class="films-info-best">
        <div class="container">
            <div class="row position-relative">
                <img class="logo-best lozad" data-src="https://sweet-tv-static.sweet.tv/web/img/LP/all_lp/aquaman.png"
                     src="https://sweet-tv-static.sweet.tv/web/img/LP/all_lp/aquaman.png" data-loaded="true">
                <img class="logo-best-r lozad"
                     data-src="https://sweet-tv-static.sweet.tv/web/img/LP/all_lp/30385-6-beauty-and-the-beast.png"
                     src="https://sweet-tv-static.sweet.tv/web/img/LP/all_lp/30385-6-beauty-and-the-beast.png"
                     data-loaded="true">
                <div class="col-md-12">
                    <h2 class="h2__style white">Фільми від найкращих кіностудій світу</h2>
                    <p class="dsc">Відбірні культові фільми, серіали та мультфільми в HD-якості з українською
                        доріжкою</p>
                    <div class="d-flex align-items-end justify-content-center img-content">
                        <a href="https://sweet.tv/collections/5166-vrazhayuchiy-svit-disney" rel="nofollow">
                            <svg width="185" height="66" viewBox="0 0 185 66" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.4225 0.0634408C1.09898 1.14256 -0.195959 2.86915 0.0198651 5.02739C0.235689 7.18563 6.27876 6.75398 6.27876 6.10651C6.27876 5.45904 3.90469 5.67486 3.90469 5.02739C3.90469 4.37992 5.41546 2.22168 26.3504 5.02739C47.2853 7.8331 67.5727 22.7249 67.1411 32.8687C66.9253 40.6383 55.4866 44.3073 48.1486 44.739C43.4938 44.9578 38.8333 44.4481 34.3359 43.2282L34.5517 29.4155C34.5517 29.4155 51.8176 30.7104 51.8176 32.437C51.8176 34.1636 48.5802 35.6744 48.5802 35.6744C48.5802 35.6744 56.3499 37.6168 56.5657 31.7895C56.9974 23.5882 34.9833 24.2357 34.9833 24.2357C34.9833 24.2357 34.12 13.6603 31.3143 13.6603C28.5086 13.6603 28.7244 24.4515 28.7244 24.4515C28.7244 24.4515 11.0269 25.9623 11.0269 31.7895C11.0269 37.6168 27.6453 45.6023 27.6453 45.6023C27.6453 45.6023 27.8611 50.782 31.0985 50.782C31.9535 50.8242 32.7914 50.5327 33.4356 49.969C34.0798 49.4053 34.48 48.6135 34.5517 47.7605C34.5517 47.7605 69.2993 54.4511 74.2633 33.732C77.9323 17.5452 36.9257 -1.2315 16.4225 0.0634408ZM27.8611 41.2858C27.8611 41.2858 12.106 35.8902 12.7535 32.2212C13.4009 28.5522 28.5086 29.1997 28.5086 29.1997L27.8611 41.2858Z"
                                      fill="white"></path>
                                <path d="M89.3743 19.057C99.3022 15.1721 96.4965 9.56072 96.4965 9.56072C95.2015 7.61831 91.9641 7.83413 91.9641 7.83413C91.9641 7.83413 88.7268 5.67589 87.8635 5.02842C87.0002 4.38095 83.547 5.02842 78.7989 6.32336C76.9393 7.06704 75.2627 8.2044 73.8843 9.65734C72.5059 11.1103 71.4583 12.8444 70.8134 14.7405C70.3818 16.4671 72.1084 18.4095 72.1084 18.8411C72.1084 19.2728 72.9717 22.726 74.0508 22.5102C75.0529 22.0721 75.9395 21.4071 76.6407 20.5677C76.6407 20.5677 78.7989 22.9418 89.3743 19.057ZM74.6982 15.8196C74.6311 15.0472 74.7532 14.2702 75.0541 13.5556C75.355 12.8411 75.8255 12.2107 76.4248 11.719C77.158 11.0094 78.0484 10.4831 79.0236 10.1831C79.9988 9.88303 81.031 9.81769 82.0363 9.99237C82.0363 9.99237 79.0147 11.719 77.504 12.7981C76.3088 13.5282 75.338 14.5737 74.6982 15.8196V15.8196ZM85.4894 11.9348C88.511 9.99237 91.7483 8.69743 93.4749 11.0715C94.554 12.5823 92.18 14.3088 88.0793 16.2513C85.1685 17.5487 81.971 18.0692 78.7989 17.762C80.7862 15.5572 83.0326 13.6006 85.4894 11.9348V11.9348Z"
                                      fill="white"></path>
                                <path d="M79.2263 25.0996C77.2839 25.0996 77.2839 27.2578 77.0681 30.0636C76.6364 34.5959 75.989 46.0345 78.7947 46.2503C81.6004 46.4662 82.8953 44.9554 82.4637 39.7756C82.032 34.5959 82.4637 25.0996 79.2263 25.0996Z"
                                      fill="white"></path>
                                <path d="M136.854 27.4727V27.6898C137.072 27.6898 136.854 27.6898 136.854 27.4727Z"
                                      fill="white"></path>
                                <path d="M154.327 42.5833C154.112 40.8567 150.443 41.0725 148.932 41.0725C147.421 41.0725 141.378 41.72 141.378 41.72C141.554 41.0599 141.77 40.4113 142.025 39.7776C142.38 38.9061 142.98 38.1563 143.752 37.6193H151.522C153.032 37.6193 153.68 37.1877 153.68 35.8927C153.68 34.5978 152.385 34.5978 152.385 34.5978C152.385 34.5978 148.284 34.382 146.774 34.382C145.263 34.382 144.615 33.7345 144.831 32.4396C145.047 31.1446 147.637 31.1446 147.637 31.1446C147.637 31.1446 151.738 31.1446 155.622 30.713C159.507 30.2813 157.349 28.3389 156.701 27.4756C156.054 26.6123 152.601 26.1807 148.5 26.1807C144.4 26.1807 136.846 27.4756 136.846 27.4756C137.049 28.0915 137.419 28.6392 137.914 29.0582C138.409 29.4771 139.01 29.7511 139.651 29.8497C140.731 29.8497 140.946 32.0079 140.946 32.0079L139.22 34.5978H137.062L137.277 37.1877C136.297 38.926 135.639 40.8269 135.335 42.7991C135.119 45.1732 135.551 48.1947 140.299 48.1947C145.047 48.1947 154.543 44.3099 154.327 42.5833Z"
                                      fill="white"></path>
                                <path d="M180.236 28.1202C180.236 28.1202 178.941 26.6094 175.272 28.9835C171.603 31.3575 162.323 39.5588 162.323 39.5588C162.323 39.5588 160.596 37.4006 164.049 33.5158C167.503 29.6309 168.582 28.336 168.582 27.2569C168.601 26.9718 168.552 26.6864 168.439 26.4239C168.327 26.1613 168.154 25.9291 167.934 25.7461C164.357 27.634 161.37 30.4718 159.301 33.9474C158.027 37.1771 157.801 40.7256 158.654 44.0911C156.82 47.1678 155.302 50.4216 154.122 53.8032C153.666 56.7339 153.377 59.6883 153.258 62.652C153.258 62.652 155.848 66.5368 157.791 65.4577C160.165 64.1627 159.086 54.8823 164.697 47.9759C167.47 48.2058 170.26 47.8647 172.895 46.9738C175.531 46.0829 177.956 44.6611 180.02 42.7962C189.301 33.9474 180.236 28.1202 180.236 28.1202ZM177.431 39.7746C174.944 41.7996 171.781 42.8027 168.582 42.5804V42.5804C167.287 42.5804 175.272 34.1632 177.431 33.0841C179.589 32.005 180.668 32.005 180.668 33.2999C180.276 35.7382 179.146 37.9979 177.431 39.7746V39.7746Z"
                                      fill="white"></path>
                                <path d="M125.628 22.5083C124.98 22.5083 125.628 24.2349 125.628 24.2349C126.694 26.5551 127.631 28.9329 128.434 31.3571C128.661 34.0141 128.661 36.6856 128.434 39.3426C127.299 38.3098 126.285 37.1513 125.412 35.8894C124.117 34.1628 123.038 32.0046 121.959 30.4938C118.29 25.9615 116.995 26.8248 116.995 26.8248C116.995 26.8248 116.132 28.1198 115.052 29.6305C113.973 31.1413 113.11 38.0477 112.894 38.911C112.678 39.7743 112.247 46.4648 115.052 46.4648C117.858 46.4648 117.427 40.6376 117.211 38.2635C117.328 36.6158 117.928 35.0392 118.937 33.7312C118.937 33.7312 125.412 45.3857 128.218 45.3857C131.023 45.3857 133.182 42.58 134.045 38.4793C134.908 34.3787 132.103 27.6881 130.376 24.6666C129.928 23.8382 129.222 23.1789 128.365 22.7892C127.507 22.3996 126.546 22.3009 125.628 22.5083V22.5083Z"
                                      fill="white"></path>
                                <path d="M106.212 24.8853C101.521 24.8408 96.8332 25.1293 92.1833 25.7486C90.6726 26.1803 85.277 27.691 85.0612 31.36C84.8453 35.029 89.3776 34.8132 91.5359 34.8132C93.6941 34.8132 107.291 35.4607 107.291 38.4822C107.291 41.5038 101.895 41.7196 98.2264 41.9354C94.5574 42.1512 88.5143 42.1512 88.7302 39.7772C88.946 37.4031 91.7517 38.0506 91.7517 38.0506C93.8272 39.3579 96.2075 40.1017 98.6581 40.2088C100.678 40.2693 102.681 39.8242 104.485 38.9139C101.369 36.9602 97.8002 35.845 94.1257 35.6765C87.651 35.4607 86.1403 38.0506 86.1403 40.4246C86.1403 42.7987 92.3992 46.2519 99.5213 46.2519C106.644 46.2519 110.96 43.0145 111.176 38.698C111.176 33.3025 101.032 32.2233 98.6581 32.2233C96.284 32.2233 90.4568 32.0075 90.4568 30.9284C90.4568 29.2018 101.68 29.4176 105.133 29.2018C108.586 28.986 111.607 28.3385 111.607 27.2594C111.607 26.1803 109.881 24.8853 106.212 24.8853Z"
                                      fill="white"></path>
                            </svg>
                        </a>
                        <a href="https://sweet.tv/collections/5167-naykrashche-vid-picturebox" rel="nofollow">
                            <svg class="d-flex" width="100" height="80" viewBox="0 0 131 100" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M61.0271 0H17.1226H14.0669V3.06159V35.2429H17.1226V3.06159H61.0271V0Z"
                                      fill="white"></path>
                                <path d="M109.921 0H66.0239V3.06159H109.921V35.2429H112.976V3.06159V0H109.921Z"
                                      fill="white"></path>
                                <path d="M17.1226 96.9362V64.7568H14.0669V96.9362V99.9998H17.1226H61.0271V96.9362H17.1226Z"
                                      fill="white"></path>
                                <path d="M109.921 64.7568V96.9362H66.0239V99.9998H109.921H112.976V96.9362V64.7568H109.921Z"
                                      fill="white"></path>
                                <path d="M4.50252 40.2461H0V59.7491H3.05768V52.4172H4.50252C6.04025 52.4172 7.184 52.0089 7.93376 51.1925C8.68352 50.3761 9.05906 49.1779 9.06038 47.5979V45.0614C9.06038 43.4841 8.68484 42.2865 7.93376 41.4688C7.18268 40.651 6.03894 40.2435 4.50252 40.2461ZM6.0027 47.796C6.0027 48.5035 5.87225 48.985 5.6074 49.2446C5.4586 49.3825 5.28344 49.4888 5.09251 49.5569C4.90158 49.625 4.69885 49.6536 4.49659 49.6409H3.05768V43.0322H4.50252C4.70474 43.02 4.90735 43.0488 5.09821 43.1169C5.28908 43.185 5.46428 43.291 5.61333 43.4286C5.87686 43.6928 6.00863 44.1756 6.00863 44.8771L6.0027 47.796Z"
                                      fill="white"></path>
                                <path d="M26.703 40.0284C25.2035 40.0284 24.0689 40.4505 23.2994 41.2946C22.5299 42.1388 22.1425 43.3496 22.1372 44.9269V55.0688C22.1372 56.6541 22.522 57.8662 23.2915 58.7051C24.061 59.5439 25.1955 59.966 26.6951 59.9713C28.1959 59.9713 29.3304 59.5492 30.0986 58.7051C30.8669 57.8609 31.2516 56.6488 31.2529 55.0688V52.4769H28.3712V55.263C28.3712 55.9704 28.2269 56.4619 27.9403 56.7413C27.6158 57.0101 27.208 57.1572 26.787 57.1572C26.366 57.1572 25.9582 57.0101 25.6337 56.7413C25.3451 56.4619 25.2028 55.9704 25.2028 55.263V44.7327C25.2028 44.0273 25.3451 43.5299 25.6337 43.2406C25.9542 42.9632 26.3635 42.8106 26.787 42.8106C27.2104 42.8106 27.6197 42.9632 27.9403 43.2406C28.2262 43.5299 28.3698 44.0273 28.3712 44.7327V46.8213H31.2608V44.9269C31.2608 43.3496 30.8761 42.1375 30.1066 41.2907C29.337 40.4438 28.2025 40.0231 26.703 40.0284Z"
                                      fill="white"></path>
                                <path d="M36.2632 43.0322H39.4592V59.7491H42.5169V43.0322H45.7129V40.2461H36.2632V43.0322Z"
                                      fill="white"></path>
                                <path d="M56.9399 55.2865C56.9399 55.994 56.7956 56.4854 56.509 56.7648C56.1845 57.0336 55.7767 57.1807 55.3557 57.1807C54.9347 57.1807 54.5269 57.0336 54.2024 56.7648C53.9158 56.4854 53.7715 55.994 53.7715 55.2865V40.2461H50.7158V55.0884C50.7158 56.6736 51.0999 57.8857 51.8681 58.7246C52.6363 59.5635 53.7715 59.9862 55.2737 59.9928C56.7745 59.9928 57.9091 59.5701 58.6773 58.7246C59.4455 57.8791 59.8296 56.667 59.8296 55.0884V40.2461H56.9399V55.2865Z"
                                      fill="white"></path>
                                <path d="M74.0128 57.3811V54.3711C74.0364 53.4835 73.8901 52.5996 73.582 51.7672C73.4385 51.4116 73.2223 51.0902 72.9472 50.8236C72.6721 50.557 72.3443 50.3512 71.9849 50.2196C73.3197 49.5894 73.9865 48.2684 73.9852 46.2564V44.7246C73.9852 43.2186 73.6287 42.0957 72.9159 41.3559C72.203 40.6161 71.05 40.2448 69.457 40.2422H64.8438V59.7452H67.8995V51.8088H68.9549C69.6605 51.8088 70.1685 51.9951 70.4847 52.3657C70.801 52.7362 70.9571 53.3783 70.9571 54.2958V57.3613C70.9571 57.7576 70.9571 58.0767 70.971 58.3363C70.9754 58.5506 70.9939 58.7644 71.0263 58.9763C71.0474 59.1181 71.0798 59.2579 71.1232 59.3944C71.1607 59.5054 71.1983 59.6283 71.2338 59.7571H74.3469C74.2033 59.4054 74.1101 59.0351 74.0702 58.6573C74.0292 58.2332 74.0101 57.8072 74.0128 57.3811V57.3811ZM70.9295 46.9638C70.9295 47.7426 70.7654 48.2816 70.4432 48.5788C70.067 48.8942 69.5848 49.0536 69.0952 49.0247H67.8995V43.0323H69.3759C69.9135 43.0323 70.3088 43.1902 70.5618 43.5059C70.8109 43.821 70.9374 44.3322 70.9374 45.0377L70.9295 46.9638Z"
                                      fill="white"></path>
                                <path d="M78.9561 59.7491H87.293V56.963H82.0137V51.252H86.2099V48.4658H82.0137V43.0322H87.293V40.2461H78.9561V59.7491Z"
                                      fill="white"></path>
                                <path d="M99.4666 49.3575C100.123 49.0688 100.655 48.5544 100.967 47.907C101.308 47.1267 101.469 46.2794 101.439 45.428V44.7325C101.439 43.2264 101.083 42.1035 100.37 41.3637C99.657 40.6239 98.5034 40.2514 96.909 40.2461H92.3037V59.7491H97.1126C98.6503 59.7491 99.8079 59.3528 100.585 58.5601C101.363 57.7675 101.752 56.6208 101.753 55.1201V53.5348C101.781 52.6295 101.605 51.7296 101.24 50.9012C101.06 50.5393 100.811 50.2165 100.507 49.9516C100.203 49.6866 99.8492 49.4847 99.4666 49.3575V49.3575ZM95.3535 43.0322H96.826C97.3636 43.0322 97.7589 43.1901 98.0119 43.5058C98.261 43.8209 98.3875 44.3322 98.3875 45.0376V46.1255C98.3875 46.9043 98.2234 47.4433 97.9012 47.7405C97.5248 48.0555 97.0428 48.2149 96.5532 48.1864H95.3574L95.3535 43.0322ZM98.6879 55.0408C98.6879 55.7641 98.5535 56.2674 98.2926 56.5448C98.1345 56.6929 97.9474 56.8065 97.7433 56.8785C97.5392 56.9505 97.3224 56.9792 97.1067 56.963H95.3555V50.9725H96.7173C97.4209 50.9725 97.9256 51.1397 98.2313 51.4739C98.537 51.8081 98.6899 52.4304 98.6899 53.3406L98.6879 55.0408Z"
                                      fill="white"></path>
                                <path d="M111.438 40.0284C109.939 40.0284 108.79 40.4505 107.993 41.2946C107.196 42.1388 106.801 43.3509 106.807 44.9309V55.0688C106.807 56.6541 107.203 57.8662 107.993 58.7051C108.784 59.5439 109.932 59.966 111.438 59.9713C112.938 59.9713 114.087 59.5492 114.885 58.7051C115.684 57.8609 116.079 56.6488 116.071 55.0688V44.9269C116.071 43.3496 115.676 42.1375 114.885 41.2907C114.095 40.4438 112.946 40.0231 111.438 40.0284ZM113.019 55.267C113.019 55.9744 112.875 56.4698 112.589 56.7591C112.268 57.0365 111.859 57.1891 111.435 57.1891C111.012 57.1891 110.602 57.0365 110.282 56.7591C109.993 56.4698 109.851 55.9665 109.851 55.267V44.7327C109.851 44.0273 109.993 43.5299 110.282 43.2406C110.602 42.9632 111.012 42.8106 111.435 42.8106C111.859 42.8106 112.268 42.9632 112.589 43.2406C112.876 43.5299 113.019 44.0273 113.019 44.7327V55.267Z"
                                      fill="white"></path>
                                <path d="M127.582 49.7182L130.778 40.2461H127.944L125.58 47.4354L123.276 40.2461H120.107L123.303 49.7182L119.884 59.7491H122.746L125.276 52.0307L127.776 59.7491H131L127.582 49.7182Z"
                                      fill="white"></path>
                                <path d="M17.1168 40.2461H14.0591V59.7491H17.1168V40.2461Z" fill="white"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M64.6504 68.5957C64.5813 68.5711 64.5081 68.5604 64.4349 68.564H64.4171L64.4507 68.5818C64.4171 68.5937 64.3994 68.5818 64.3697 68.5699C64.3895 68.5977 64.3875 68.5917 64.3697 68.6195V68.6314C64.4584 68.6627 64.5526 68.6755 64.6464 68.669V68.669C64.6227 68.6432 64.5654 68.6393 64.5377 68.6175H64.5258C64.5965 68.6308 64.6638 68.6585 64.7235 68.6987L64.7472 68.6829C64.7275 68.7166 64.7057 68.7225 64.7156 68.7562C64.5931 68.7364 64.5021 68.6908 64.4527 68.8275L64.4942 68.8632L64.4646 68.8731V68.9068C64.5032 68.9477 64.5505 68.9796 64.6029 68.9999C64.6029 69.0237 64.6029 69.0495 64.6128 69.0733C64.6227 69.097 64.6286 69.0733 64.6484 69.0733C64.6682 69.0733 64.6484 69.1188 64.6701 69.1367C64.6919 69.1545 64.8322 69.2417 64.8678 69.2813C64.9034 69.321 64.8678 69.319 64.8895 69.3328C64.9383 69.3577 64.9853 69.3862 65.0299 69.4181C65.0457 69.4181 65.0299 69.4181 65.0299 69.4339C65.1208 69.4775 65.2611 69.4735 65.3382 69.5191C65.354 69.533 65.3382 69.5191 65.3382 69.5469L65.5774 69.6123H65.5932C65.5966 69.6059 65.5984 69.5987 65.5984 69.5914C65.5984 69.5842 65.5966 69.577 65.5932 69.5706C65.6406 69.5429 65.6525 69.4914 65.6861 69.4557C65.6775 69.4454 65.6715 69.4332 65.6684 69.4201C65.6653 69.4071 65.6653 69.3935 65.6683 69.3804C65.7355 69.3804 65.7552 69.3368 65.8086 69.3229C65.8086 69.2912 65.8086 69.2833 65.7809 69.2694C65.7968 69.2595 65.7928 69.2694 65.8145 69.2694L65.8323 69.2536L65.7809 69.206H65.7691C65.8017 69.213 65.8353 69.213 65.8679 69.206H65.8798L65.856 69.1763C65.8988 69.2001 65.9479 69.2098 65.9964 69.204L66.0082 69.1585H66.0379L66.0082 69.204C66.1299 69.2163 66.2527 69.2014 66.368 69.1604V69.1268C66.5241 69.0812 66.7455 69.1783 66.8977 69.1664C66.5415 68.9091 66.1387 68.724 65.7118 68.6215C65.3646 68.5313 65.0014 68.5225 64.6504 68.5957V68.5957ZM65.7434 69.1902C65.7256 69.1902 65.7434 69.1902 65.7256 69.1783C65.7434 69.1862 65.7335 69.1783 65.7434 69.1902V69.1902ZM58.8157 81.4643C58.8773 81.5935 58.9514 81.7162 59.037 81.8309C59.2248 82.029 59.5351 82.1281 59.6517 82.3778L59.8237 82.5462L59.8118 82.6235C59.835 82.7121 59.8463 82.8034 59.8454 82.895C59.8351 82.9358 59.8298 82.9777 59.8296 83.0198L59.8474 83.0991C59.823 83.1831 59.8071 83.2694 59.8 83.3567C59.7763 83.3666 59.7901 83.3567 59.7585 83.3567V83.4419H59.7861L59.7664 83.5965L59.7842 83.753C59.7842 83.7748 59.7446 83.7827 59.7387 83.8125C59.7328 83.8422 59.7387 83.8521 59.7525 83.8739C59.7467 83.9626 59.726 84.0497 59.6913 84.1315C59.6596 84.1969 59.6913 84.2603 59.6359 84.298C59.6547 84.3685 59.6654 84.441 59.6676 84.514C59.6538 84.5162 59.6398 84.5162 59.6261 84.514C59.6122 84.7121 59.711 84.8152 59.6498 84.9598C59.6678 84.9836 59.6763 85.0133 59.6735 85.043C59.6156 85.1688 59.5763 85.3023 59.5569 85.4394L59.5391 85.4275V85.5048L59.4877 85.4869C59.5061 85.597 59.5422 85.7034 59.5944 85.802C59.5944 85.9268 59.5173 85.9625 59.6102 86.1032V86.127L59.5806 86.1092C59.5608 86.1646 59.5924 86.2261 59.5806 86.2915C59.6009 86.3125 59.6271 86.327 59.6557 86.3331H59.6735C59.6874 86.2712 59.6783 86.2063 59.6478 86.1508L59.6596 86.1389L59.7012 86.1567C59.7012 86.129 59.711 86.1349 59.6893 86.1329L59.6992 86.1092L59.7288 86.1448L59.711 86.1686C59.7407 86.1884 59.7545 86.2538 59.711 86.2677L59.7407 86.2915C59.7318 86.3837 59.7318 86.4766 59.7407 86.5689H59.7288C59.7288 86.5372 59.6972 86.448 59.711 86.4401C59.6915 86.4095 59.6623 86.3864 59.628 86.3747C59.6098 86.407 59.5984 86.4428 59.5944 86.4797L59.6419 86.5273V86.6105H59.6023L59.6201 86.6442L59.5727 86.6799V86.7036L59.6142 86.7274L59.6379 86.7036C59.6656 86.7274 59.717 86.7353 59.7427 86.7631H59.7189C59.7189 86.7809 59.7189 86.775 59.7367 86.7869L59.7189 86.8443C59.7032 86.8299 59.6829 86.8215 59.6616 86.8205L59.6794 86.8384L59.6498 86.8562C59.6705 86.9241 59.6962 86.9904 59.7268 87.0544L59.8079 87.094H59.7624L59.7802 87.1634L59.8079 87.1753L59.8316 87.1218L59.8494 87.1634H59.8257C59.8474 87.1916 59.858 87.2269 59.8553 87.2624L59.9245 87.2387C59.933 87.2508 59.9457 87.2592 59.9601 87.2624L59.9482 87.2862L59.8909 87.2684V87.2803C59.9123 87.3146 59.9423 87.3426 59.9779 87.3615L59.966 87.3377L60.0648 87.421L59.9719 87.3794C59.9994 87.4189 60.0413 87.446 60.0886 87.4547C60.0886 87.4705 60.0886 87.4547 60.0886 87.4725C60.1696 87.5471 60.2672 87.6014 60.3732 87.631C60.3732 87.6528 60.3732 87.631 60.3732 87.6528C60.4701 87.7182 60.5779 87.7659 60.6914 87.7935V87.7935L60.6519 87.7519C60.6855 87.7612 60.7199 87.7679 60.7546 87.7717V87.7717C60.7689 87.7742 60.7821 87.7811 60.7922 87.7915V87.7856L60.8732 87.7975V87.7856V87.7678C60.7131 87.7499 60.6617 87.6112 60.5352 87.5696L60.553 87.5478C60.5175 87.5062 60.47 87.5101 60.4364 87.4705L60.4522 87.4586L60.5392 87.4943C60.4937 87.4348 60.4186 87.3952 60.4107 87.2961V87.2842L60.4918 87.2664C60.5135 87.2486 60.5056 87.2169 60.5036 87.1733C60.5392 87.1475 60.6183 87.1317 60.6479 87.098C60.6547 87.0686 60.6547 87.0381 60.6479 87.0088C60.553 86.9474 60.4127 86.9276 60.4503 86.7869C60.4728 86.769 60.4997 86.7574 60.5281 86.7532C60.5566 86.7491 60.5856 86.7525 60.6123 86.7631H60.6361C60.6262 86.7413 60.6361 86.7512 60.6183 86.7393C60.6005 86.7274 60.6341 86.7175 60.6578 86.7096C60.659 86.6757 60.6529 86.6419 60.64 86.6105C60.6502 86.5926 60.6653 86.578 60.6835 86.5686C60.7018 86.5591 60.7223 86.555 60.7428 86.557C60.7289 86.5292 60.6953 86.5233 60.6736 86.5035H60.6617L60.7033 86.4857C60.7278 86.502 60.7476 86.5245 60.7606 86.551H60.808L60.8238 86.5332C60.8275 86.508 60.8211 86.4824 60.806 86.4619L60.7942 86.444H60.7309L60.7606 86.4678L60.7191 86.4559C60.7013 86.4421 60.7013 86.4262 60.6617 86.4163C60.6471 86.3675 60.6353 86.3178 60.6262 86.2677C60.6697 86.2142 60.7685 86.3232 60.8238 86.339H60.9622C60.9721 86.3172 60.9819 86.2954 60.9898 86.2736L60.9681 86.2855L60.9444 86.2617C60.9701 86.2221 61.0116 86.1765 60.9898 86.121L61.0116 86.1329L60.9997 86.0973C61.1803 86.153 61.3717 86.1632 61.5571 86.127C61.5789 86.1131 61.6678 86.0061 61.7014 85.9784C61.7014 85.9506 61.7014 85.9249 61.7014 85.8971C61.654 85.8793 61.6302 85.8753 61.6263 85.8139L61.6717 85.7723C61.648 85.6673 61.5433 85.6573 61.4958 85.5741L61.5196 85.5444H61.5373C61.5532 85.5702 61.569 85.5761 61.5769 85.6098L61.6876 85.6336C61.7212 85.6573 61.7607 85.7247 61.8042 85.7346C61.8477 85.7445 61.8654 85.7188 61.903 85.7346C61.9406 85.7505 61.9504 85.7822 61.9959 85.7762C62.1145 85.7624 62.1343 85.7089 62.2034 85.6593L62.326 85.6058L62.4169 85.4869L62.6481 85.3878C62.741 85.3264 62.7885 85.2174 62.8735 85.1501C62.9585 85.0827 63.1146 85.053 63.1561 84.9024H63.1324C63.1445 84.8305 63.1617 84.7597 63.1838 84.6903C63.3351 84.5572 63.5234 84.4735 63.7234 84.4505L63.7926 84.504L63.8044 84.4624H63.7807C63.8341 84.4486 63.8855 84.3693 63.9388 84.3871C63.9546 84.3693 63.9566 84.3752 63.9388 84.3574V84.3396C64.0829 84.3457 64.2247 84.3772 64.3578 84.4327C64.3697 84.4169 64.3677 84.4169 64.3875 84.4089C64.3875 84.3178 64.4942 84.3534 64.5614 84.3217C64.6286 84.29 64.6108 84.1791 64.678 84.1454C64.7868 84.0899 64.7808 84.0562 64.8579 84.0047C64.8895 83.9829 64.9231 83.9868 64.9449 83.9532C65.022 83.8263 64.9686 83.7709 65.1287 83.7114C65.1478 83.6332 65.1814 83.5593 65.2275 83.4934L65.3026 83.4062C65.3303 83.329 65.3145 83.2636 65.3422 83.1942C65.3698 83.1248 65.441 83.0694 65.4469 82.9703C65.5181 82.9326 65.5833 82.9465 65.6446 82.897L65.941 82.6374L66.0458 82.6156L66.1802 82.5125C66.3451 82.4316 66.472 82.2894 66.534 82.1162V81.9993C66.5518 81.924 66.6388 81.4444 66.6368 81.4444C62.1461 81.4108 58.8157 81.4643 58.8157 81.4643ZM60.1656 87.4507L60.1538 87.4388L60.1755 87.4507H60.1656ZM60.2111 87.5022L60.2467 87.4784H60.2625H60.2842C60.2625 87.5181 60.2467 87.5082 60.2111 87.5022ZM60.3692 87.6766V87.6647H60.3811L60.3692 87.6766ZM60.4542 87.5716L60.4028 87.5835L60.4325 87.6251C60.4072 87.6107 60.3881 87.5874 60.3791 87.5597H60.3672C60.3628 87.5739 60.3576 87.5878 60.3514 87.6013H60.3336C60.3323 87.5618 60.3263 87.5225 60.3159 87.4844C60.3574 87.4963 60.3514 87.5101 60.3554 87.5498C60.3859 87.5655 60.4199 87.573 60.4542 87.5716ZM60.4028 87.4844V87.4963L60.3791 87.5082L60.3613 87.4903H60.3495H60.3672L60.4028 87.4844ZM60.9483 86.0695C60.976 86.0814 60.9661 86.0893 60.978 86.1111C60.9503 86.1052 60.9543 86.0992 60.9483 86.0695V86.0695ZM62.5948 85.3502V85.3799C62.5579 85.408 62.5142 85.4257 62.4683 85.4314L62.4386 85.4196C62.5054 85.3878 62.5612 85.3367 62.5987 85.2729L62.6818 85.261V85.3145C62.656 85.3333 62.6262 85.3455 62.5948 85.3502ZM63.0968 84.9539V84.936V84.9539ZM63.1087 84.9241V84.9063C63.1126 84.9182 63.1205 84.9083 63.1087 84.9182V84.9241ZM64.174 84.3515V84.3277H64.1977L64.174 84.3515ZM58.9916 72.9968C59.0331 73.0325 59.1576 72.9612 59.2169 72.9592C59.2426 72.9949 59.2979 73.1336 59.3315 73.1415C59.381 73.2505 59.2466 73.308 59.2604 73.3912H59.2723C59.294 73.3694 59.292 73.3714 59.2841 73.3436H59.296C59.3078 73.3753 59.296 73.3694 59.3236 73.3733L59.2604 73.4209C59.2577 73.4654 59.261 73.5101 59.2703 73.5537L59.2999 73.5636L59.3118 73.5418V73.5517C59.29 73.5814 59.2881 73.5953 59.2703 73.623C59.2841 73.623 59.2703 73.623 59.294 73.623C59.3014 73.6316 59.3065 73.642 59.3086 73.6531C59.3107 73.6643 59.3097 73.6758 59.3058 73.6864C59.3058 73.7756 59.4007 73.7756 59.3572 73.8707C59.3889 73.9183 59.4936 73.8866 59.5193 73.8905C59.5193 73.8192 59.6102 73.7419 59.6419 73.6726C59.6617 73.5652 59.6617 73.455 59.6419 73.3476L59.6913 73.3198C59.6794 73.2386 59.6656 73.1554 59.6537 73.0721C59.6814 72.7551 59.9344 72.6758 60.1874 72.6025C60.306 72.5668 60.2625 72.4638 60.4799 72.5074C60.5333 72.4043 60.7171 72.4242 60.8258 72.3984V72.3865C60.8021 72.3707 60.808 72.3865 60.7961 72.3528C60.8439 72.3309 60.8958 72.3195 60.9483 72.3191L60.978 72.2716C60.9648 72.2569 60.9486 72.2453 60.9305 72.2374C60.9125 72.2296 60.8929 72.2257 60.8732 72.226V72.226L60.9839 72.2438V72.2894C60.9939 72.2291 61.0005 72.1682 61.0037 72.1071L60.9681 72.0952C60.9523 72.0813 60.9681 72.0952 60.9681 72.0675C60.9681 72.0397 61.0076 71.9842 61.0274 71.9585C61.0096 71.9446 61.0274 71.8495 61.0274 71.8217L61.1104 71.7464C61.0432 71.8416 61.0768 71.8416 61.0551 71.9446L61.1065 71.9624C61.0729 71.9922 61.0393 72.0041 61.0175 72.0476V72.0595C61.0294 72.0595 61.0175 72.0595 61.0472 72.0695C61.0808 71.9981 61.2171 71.9525 61.2784 71.8535C61.2409 71.8158 61.2567 71.794 61.2448 71.7405C61.2654 71.7674 61.2937 71.7874 61.3259 71.798L61.3021 71.8257C61.3911 71.8376 61.5136 71.7207 61.5551 71.6573C61.5551 71.6355 61.5551 71.6454 61.5393 71.6335V71.6216C61.6441 71.6077 61.7943 71.6394 61.9089 71.6216L61.8793 71.5859C61.7923 71.5978 61.7133 71.5622 61.6283 71.5859C61.731 71.5027 62.0473 71.6176 62.1856 71.5641C62.2015 71.6018 62.2331 71.5998 62.3023 71.6018L62.326 71.5681L62.3082 71.5384C62.2944 71.5701 62.3082 71.5721 62.2726 71.5721H62.2271C62.2173 71.5364 62.2272 71.4888 62.1679 71.4789V71.467L62.2489 71.4472C62.2409 71.4358 62.2337 71.4239 62.2271 71.4116C62.2667 71.362 62.3497 71.3363 62.3873 71.3006C62.4276 71.3122 62.4698 71.3151 62.5114 71.3093C62.5529 71.3035 62.5928 71.2891 62.6284 71.2669C62.6422 71.2847 62.6284 71.2788 62.6284 71.3006C62.7431 71.3023 62.8576 71.2924 62.9703 71.2709L62.9525 71.2352C62.9847 71.2415 63.0164 71.2501 63.0474 71.261C63.1592 71.2754 63.2728 71.2673 63.3814 71.2372L63.3933 71.2491L63.3123 71.2689L63.4052 71.2907L63.0691 71.3422V71.3541L63.1107 71.3442L63.0869 71.3541C63.0732 71.3658 63.0626 71.3809 63.0564 71.3979C63.0502 71.415 63.0484 71.4333 63.0514 71.4512H63.0869C63.1087 71.4829 63.0869 71.5027 63.1383 71.5047C63.2194 71.5047 63.2965 71.4552 63.3854 71.4492C63.3973 71.4254 63.3854 71.4215 63.415 71.4096L63.4269 71.4274L63.4506 71.4056C63.4506 71.4433 63.4763 71.4433 63.5099 71.4532C63.5593 71.4016 63.8716 71.467 63.9625 71.4413H63.9744C63.9655 71.4322 63.9546 71.4251 63.9427 71.4207C63.9307 71.4162 63.9179 71.4145 63.9052 71.4155C63.9191 71.4056 63.923 71.4155 63.9349 71.3937C64.0161 71.4105 64.0996 71.4139 64.1819 71.4036V71.3858C64.1819 71.3521 64.1325 71.3244 64.093 71.3204L64.1404 71.2649C64.1266 71.2451 64.1286 71.255 64.1286 71.2293H64.095C64.0357 71.257 63.8973 71.2887 63.8973 71.3699C63.8558 71.3699 63.836 71.3699 63.8321 71.3283C63.6977 71.3422 63.6463 71.2728 63.5336 71.261L63.5099 71.2312H63.5336L63.4289 71.1876C63.4091 71.1757 63.3913 71.1203 63.3755 71.0945L63.4052 71.0727C63.3872 71.0585 63.3647 71.0515 63.3419 71.0529V71.041C63.4032 71.041 63.4309 70.9994 63.4882 70.9776L63.5 70.9558C63.4345 70.9658 63.3679 70.9658 63.3024 70.9558C63.2925 70.9122 63.2609 70.8983 63.2154 70.8904V70.8785C63.2945 70.8785 63.3241 70.9201 63.3913 70.93L63.5732 70.9062C63.5732 70.9062 63.5732 70.8944 63.5732 70.8884C63.5732 70.8825 63.5732 70.8765 63.5732 70.8547H63.5969C63.4526 70.6566 62.9506 70.7319 62.7351 70.7715C62.6481 70.7854 62.5869 70.8686 62.4683 70.8666C62.6127 70.7852 62.765 70.7188 62.9229 70.6685C62.9229 70.6685 63.1205 70.6823 63.1205 70.6803L63.1739 70.6249C63.2709 70.5891 63.3774 70.5891 63.4743 70.6249C63.6087 70.6625 63.7352 70.6764 63.8696 70.722C64.0037 70.7812 64.1454 70.8212 64.2906 70.8409C64.3585 70.8295 64.4249 70.8102 64.4883 70.7834C64.6286 70.7259 64.9113 70.8726 65.0101 70.7655C65.0101 70.7457 65.0101 70.7655 65.0101 70.7358H65.022C65.0378 70.7061 65.022 70.613 65.0397 70.5813L64.9409 70.5436C64.9409 70.5278 64.9409 70.5436 64.9409 70.5198C64.8796 70.5198 64.8757 70.502 64.8362 70.504C64.8243 70.4346 64.763 70.4108 64.6899 70.4009L64.8421 70.4188C64.8144 70.3791 64.7512 70.3752 64.7433 70.3355C64.6958 70.3237 64.6523 70.3355 64.6148 70.3078C64.5772 70.2801 64.599 70.2919 64.597 70.2721C64.595 70.2523 64.51 70.2602 64.4863 70.2404C64.4626 70.2206 64.4567 70.1968 64.4171 70.181C64.4171 70.1572 64.4013 70.181 64.4171 70.1532C64.3731 70.1118 64.3214 70.0795 64.2649 70.0581C64.2827 70.0423 64.2748 70.0581 64.2946 70.0462C64.2961 70.0165 64.2961 69.9868 64.2946 69.9571L64.2531 69.9392C64.2531 69.9392 64.2649 69.9075 64.2649 69.8718C64.2136 69.85 64.1543 69.8283 64.1622 69.7668H64.1325C64.0989 69.7133 63.9625 69.5429 63.9665 69.4874C63.8242 69.527 63.6384 69.7569 63.4447 69.5984C63.4131 69.5984 63.3893 69.5508 63.3281 69.5409V69.4914H63.2866C63.3044 69.4438 63.3221 69.4359 63.3182 69.3745L63.3834 69.3467L63.3656 69.319L63.3123 69.3408C63.2545 69.297 63.1864 69.269 63.1146 69.2595V69.2595C63.1265 69.2496 63.1146 69.2595 63.1443 69.2476C63.0857 69.1938 63.019 69.1497 62.9466 69.1169H62.8003C62.6873 69.0667 62.5661 69.0378 62.4426 69.0316L62.407 69.0653V69.0871C62.4169 69.101 62.407 69.101 62.4347 69.1089C62.4216 69.125 62.4054 69.1381 62.387 69.1477C62.3687 69.1572 62.3486 69.1629 62.328 69.1644C62.3754 69.2179 62.3418 69.2239 62.3675 69.2575C62.3029 69.2969 62.2309 69.3225 62.156 69.3328L62.1362 69.3665C62.1754 69.3759 62.2104 69.3978 62.2361 69.4289C62.2618 69.46 62.2767 69.4986 62.2785 69.5389C62.2153 69.6737 62.0809 69.6955 61.907 69.7232H61.7251H61.7152C61.7152 69.749 61.7152 69.7827 61.7469 69.7946C61.7152 69.854 61.652 69.9273 61.6955 69.9927C61.6649 70.0219 61.6264 70.0412 61.5848 70.0482V70.0977H61.5611C61.5611 70.0759 61.5492 70.0779 61.5393 70.0522C61.5007 70.0587 61.4641 70.0743 61.4326 70.0977L61.3753 70.07C61.3464 69.9874 61.3073 69.9089 61.2587 69.8362C61.2888 69.8129 61.3148 69.7848 61.3357 69.7529C61.3366 69.7384 61.3366 69.7239 61.3357 69.7094C61.3693 69.6737 61.4049 69.6618 61.4306 69.6162C61.2422 69.5887 61.0605 69.5262 60.895 69.4319C60.8713 69.4081 60.8653 69.3566 60.8278 69.3289L60.6677 69.2556H60.47C60.509 69.2055 60.544 69.1525 60.5748 69.097C60.5366 69.0816 60.4949 69.0768 60.4542 69.0832V69.0554C60.6332 68.9044 60.8553 68.8142 61.0887 68.7978L61.0669 68.772C61.1267 68.779 61.187 68.779 61.2468 68.772C61.2685 68.7443 61.2646 68.7443 61.2468 68.7185H61.2349C61.4144 68.75 61.5989 68.7343 61.7706 68.673C61.7884 68.6591 61.7706 68.673 61.7706 68.6512L61.9524 68.6115H61.9643C61.9532 68.6021 61.9393 68.5965 61.9247 68.5957V68.5858L62.0453 68.5957C62.0453 68.6254 62.1323 68.6809 62.1698 68.6928C62.2074 68.7047 62.1698 68.6928 62.1698 68.6769C62.162 68.6752 62.1539 68.6752 62.1461 68.6769C62.1362 68.6551 62.1323 68.6532 62.1066 68.6333L62.1639 68.6611C62.1629 68.6446 62.1629 68.628 62.1639 68.6115L62.2311 68.6611V68.6452C62.3299 68.6195 62.4288 68.6234 62.4999 68.6016C62.4858 68.5842 62.4706 68.5676 62.4545 68.5521C62.0892 68.358 61.682 68.2566 61.2685 68.2568C60.8594 68.2568 59.3829 68.7721 58.2168 69.3626C57.6404 69.6544 57.0976 70.0086 56.598 70.4188C56.217 70.7266 55.9159 71.1223 55.7204 71.5721L55.6592 71.6434C55.6434 71.6731 55.5426 71.9406 55.5406 71.9525H55.592C55.5801 72.0318 55.6275 72.0318 55.6078 72.1289C55.5762 72.2696 55.4773 72.44 55.4338 72.5926C55.4132 72.6402 55.4018 72.6913 55.4002 72.7432C55.4186 72.8042 55.422 72.8688 55.4101 72.9315L55.3449 73.0464C55.3172 73.0464 55.3073 73.0464 55.2797 73.0464C55.2797 73.1256 55.2994 73.1732 55.2955 73.2445C55.3133 73.2445 55.2955 73.2445 55.3232 73.2346C55.347 73.2917 55.3534 73.3546 55.3414 73.4153C55.3295 73.476 55.2997 73.5318 55.256 73.5755C55.3067 73.6865 55.3291 73.8084 55.3212 73.9302V73.9302H55.333C55.4378 73.8212 55.4101 73.8351 55.42 73.6963C55.42 73.6845 55.42 73.6706 55.4101 73.6567C55.4002 73.6429 55.3923 73.6805 55.3825 73.6904C55.3996 73.5507 55.4314 73.4132 55.4773 73.2802C55.4892 73.2208 55.4556 73.1118 55.4773 73.0385C55.5169 72.8661 55.5366 72.4935 55.675 72.3845L55.6967 72.4222L55.7185 72.4083C55.7481 72.5094 55.6236 72.66 55.6394 72.8046C55.6122 72.8236 55.5898 72.8487 55.5742 72.8779L55.59 72.8918L55.6236 72.8581C55.6236 72.8938 55.6058 73.0028 55.6394 73.0365C55.673 73.0702 55.6394 73.0365 55.6552 73.0365H55.6671C55.6431 73.0721 55.6313 73.1145 55.6335 73.1574C55.6434 73.1692 55.6335 73.1673 55.6611 73.1712L55.6434 73.2426H55.671C55.671 73.3198 55.6414 73.3436 55.6058 73.3971C55.6058 73.4685 55.6453 73.4863 55.677 73.5378C55.6532 73.5616 55.6552 73.5755 55.6493 73.6111C55.7046 73.6864 55.7758 74.2056 55.669 74.275C55.6453 74.3107 55.6434 74.3047 55.6572 74.3404C55.6394 74.3642 55.6295 74.3622 55.6038 74.3721C55.5228 74.5702 55.6967 74.6218 55.7027 74.7803L55.7402 74.808C55.7402 74.808 56.3865 74.7843 56.77 74.7763C56.7838 74.7763 56.7423 74.7625 56.7245 74.7466C56.6795 74.5965 56.653 74.4414 56.6455 74.2849L56.685 74.2215C56.6277 74.0986 56.7146 73.9698 56.764 73.8588L56.8826 73.5695C56.9202 73.524 56.9913 73.5358 57.0131 73.4526C57.0348 73.3694 57.0032 73.3476 57.0309 73.2782C57.0585 73.2089 57.1257 73.195 57.1218 73.1138C57.1593 73.1138 57.2226 73.088 57.2305 73.0583L57.2463 73.0266C57.2463 73.0503 57.2463 73.0424 57.2463 73.0622C57.274 73.0484 57.2641 73.0444 57.2799 73.0484L57.3017 73.0167L57.2858 72.9889C57.3794 72.9943 57.4719 72.9663 57.5467 72.9097C57.5981 72.9235 57.5803 72.8839 57.5764 72.8561C57.5886 72.8419 57.6043 72.831 57.6219 72.8244V72.8244L57.5981 72.8482L57.6199 72.8581C57.6436 72.8779 57.7365 72.8284 57.7918 72.8343C57.8642 72.8497 57.9346 72.8737 58.0013 72.9057H58.0191V72.8819H57.9796V72.8661L58.0251 72.8522C58.0401 72.8801 58.0595 72.9055 58.0824 72.9275H58.0705L58.0587 72.9453L58.116 72.9869L58.195 72.9532L58.2069 72.9929C58.2464 72.983 58.2504 72.9612 58.2761 72.9374C58.2998 72.9632 58.3176 72.9988 58.3492 73.0147L58.367 73.0246L58.3907 72.9949L58.3334 72.9394L58.3077 72.9235C58.315 72.9134 58.3245 72.9051 58.3354 72.8993C58.3464 72.8935 58.3585 72.8902 58.371 72.8898C58.3808 72.87 58.371 72.87 58.371 72.8383L58.3255 72.8641L58.3136 72.8482C58.4029 72.8027 58.506 72.7928 58.6022 72.8205L58.62 72.7808L58.6358 72.769V72.8423C58.7663 72.8581 58.8611 72.8066 58.958 72.9097C58.9817 72.9354 58.9797 72.979 58.9916 72.9909V72.9968ZM61.822 71.6236H61.8338H61.8516L61.822 71.6335V71.6236ZM64.0179 71.3581H64.0396C64.0515 71.3759 64.0396 71.368 64.0218 71.3699L64.0179 71.3581ZM63.9823 71.3739H64.0119V71.3917H63.9408L63.9823 71.3739ZM63.5178 71.3343L63.4131 71.3481L63.3953 71.3363V71.3145L63.5178 71.3343ZM64.7887 70.5139H64.8124L64.7947 70.5238C64.7828 70.5159 64.7887 70.5238 64.7887 70.5079V70.5139ZM64.3677 70.4069H64.4092L64.5772 70.4287C64.5061 70.4287 64.431 70.4465 64.3499 70.4485C64.3618 70.4108 64.3618 70.4386 64.3677 70.4009V70.4069ZM62.0512 71.5661C62.0512 71.58 62.0512 71.5661 62.0512 71.582V71.5661ZM55.6374 72.2716L55.6493 72.2537C55.6453 72.2597 55.6552 72.2537 55.6374 72.2656V72.2716ZM55.6809 72.226C55.6958 72.1687 55.7142 72.1125 55.7362 72.0576C55.7718 72.1309 55.7086 72.1745 55.6809 72.2201V72.226ZM56.6534 74.2215H56.6296V74.1759C56.6455 74.1878 56.6455 74.1957 56.6534 74.2155V74.2215ZM57.7325 72.8185L57.7444 72.7947C57.7483 72.8026 57.7444 72.7987 57.7325 72.8126V72.8185ZM58.3374 72.8324C58.3051 72.8344 58.2728 72.8344 58.2405 72.8324C58.2405 72.8046 58.2662 72.8026 58.286 72.7848L58.3374 72.8284V72.8324ZM62.8082 68.8949C62.8934 68.9021 62.9771 68.9207 63.0573 68.9504C63.1364 68.9881 63.1581 69.0396 63.2549 69.0534C63.2332 69.0673 63.2233 69.0534 63.1957 69.0534C63.2041 69.0714 63.2171 69.0867 63.2335 69.0978C63.2498 69.109 63.2688 69.1156 63.2885 69.1169L63.2648 69.1268C63.2841 69.1485 63.3077 69.1661 63.334 69.1783H63.3577C63.3577 69.1545 63.3577 69.1604 63.334 69.1505C63.5004 69.2303 63.6729 69.2965 63.8499 69.3487C63.8598 69.3229 63.8499 69.3348 63.8736 69.3328C63.7951 69.2467 63.6986 69.1791 63.591 69.1347V69.1129L63.7016 69.1704V69.1486L64.0317 69.3467H64.0594H64.0712C64.0337 69.3229 64.0139 69.3269 63.9902 69.2893L64.0376 69.3071C64.0376 69.2873 64.0376 69.2833 64.0199 69.2615V69.2496C64.0337 69.2615 64.0297 69.2496 64.0376 69.2734C64.0456 69.2972 64.0633 69.2734 64.0792 69.2457C64.0808 69.2533 64.0841 69.2605 64.0889 69.2667C64.0937 69.2729 64.0998 69.2779 64.1068 69.2813V69.2813L64.0969 69.2575H64.1365V69.2457C64.1098 69.2109 64.077 69.1813 64.0396 69.1585V69.1466H64.0752C64.0436 69.1188 63.9388 69.0356 63.8657 69.0475C63.8675 69.0284 63.8631 69.0091 63.8531 68.9927C63.8431 68.9763 63.8281 68.9635 63.8103 68.9563H63.842V68.9445L63.8202 68.9227C63.8953 68.9227 63.9606 68.99 64.0278 68.992C64.004 69.0693 64.1543 69.0891 64.2057 69.1307C64.2452 69.1307 64.2432 69.1129 64.2709 69.1089L64.2531 69.097C64.2531 69.0792 64.2531 69.0851 64.2709 69.0752C64.2843 69.0823 64.2992 69.0861 64.3144 69.0861C64.3295 69.0861 64.3444 69.0823 64.3578 69.0752V69.097H64.3994L64.3816 69.0733C64.4013 69.0634 64.3816 69.0733 64.4053 69.0733H64.4231L64.3994 69.0396C64.4376 69.0495 64.4777 69.0495 64.516 69.0396C64.5021 68.99 64.4369 68.9702 64.3776 68.9742C64.3776 68.9583 64.3776 68.9742 64.3954 68.9583H64.3361C64.3163 68.9583 64.3005 68.9147 64.2393 68.9127C64.2393 68.9009 64.2393 68.9127 64.263 68.9009C64.2317 68.8746 64.193 68.8586 64.1523 68.8553L64.1404 68.8434L64.1641 68.8335C64.1029 68.8196 64.0871 68.8038 64.0475 68.8335C64.012 68.8038 64.0159 68.7879 63.9566 68.782L63.9685 68.7641L63.8281 68.7304H63.8637C63.8637 68.7086 63.8637 68.7166 63.8637 68.6968L63.9922 68.7324H64.004C63.9903 68.7187 63.974 68.7079 63.9559 68.7008C63.9379 68.6936 63.9187 68.6902 63.8993 68.6908V68.675L63.9625 68.6928V68.6769C63.9111 68.6373 63.8973 68.6353 63.8163 68.6413C63.836 68.6155 63.842 68.6234 63.8756 68.6195C63.8163 68.5759 63.7293 68.5977 63.668 68.562C63.6481 68.5385 63.627 68.516 63.6048 68.4946C63.534 68.4678 63.4604 68.4492 63.3854 68.4391L63.3973 68.4233C63.3419 68.3975 63.2866 68.3797 63.2253 68.35H63.2727C63.2451 68.3064 62.9822 68.4154 62.9328 68.4808C62.915 68.4708 63.0395 68.5779 63.0059 68.5719L62.994 68.5878H62.9822C62.998 68.6155 63.1205 68.6096 63.1502 68.6115V68.6234C63.1284 68.6234 63.1205 68.6234 63.0909 68.6234H63.079C63.0968 68.665 63.1344 68.6551 63.1719 68.6413L63.1897 68.6849C63.1654 68.6774 63.1401 68.6734 63.1146 68.673C63.1265 68.7146 63.1956 68.7225 63.247 68.7245V68.7027L63.1877 68.6908C63.1887 68.6796 63.1887 68.6683 63.1877 68.6571C63.218 68.6749 63.2506 68.6883 63.2846 68.6968C63.2846 68.7265 63.3024 68.7562 63.3123 68.7859L63.0375 68.8156V68.8275C63.0576 68.845 63.0767 68.8635 63.0948 68.883V68.883C63.0294 68.8734 62.9633 68.8688 62.8972 68.8692C62.7707 68.8474 62.6738 68.78 62.5493 68.8573V68.8731C62.6244 68.9028 62.7351 68.8771 62.8082 68.889V68.8949ZM63.5989 68.8632C63.583 68.8632 63.5989 68.8632 63.583 68.8513L63.5989 68.8632ZM63.249 68.6056L63.2648 68.6175C63.249 68.6096 63.2609 68.6175 63.249 68.6056ZM63.4071 68.8038L63.4486 68.782C63.502 68.7939 63.4901 68.8256 63.5633 68.8275C63.5633 68.8513 63.5633 68.8275 63.5514 68.8493L63.5732 68.8672C63.5183 68.8534 63.4615 68.8487 63.4052 68.8533C63.4106 68.8467 63.4139 68.8386 63.4146 68.8301C63.4153 68.8216 63.4134 68.8131 63.4091 68.8057L63.4071 68.8038ZM63.3182 68.9009C63.3557 68.9127 63.4012 68.9306 63.415 68.9643L63.4269 68.9801C63.3771 68.9661 63.3262 68.9561 63.2747 68.9504V68.9504H63.3261L63.3182 68.9009ZM63.079 68.6631L63.1146 68.6294V68.6135C63.0585 68.595 62.9998 68.5857 62.9407 68.5858L62.8656 68.6115C62.8656 68.6214 62.8656 68.6314 62.8656 68.6393C62.9323 68.6724 63.0084 68.6815 63.081 68.665L63.079 68.6631ZM62.2884 68.8355C62.2568 68.8171 62.22 68.8094 62.1837 68.8137L62.2015 68.7701C62.156 68.7403 62.0651 68.7146 62.0374 68.671C62.0097 68.6274 62.0374 68.6234 62.0038 68.6056L61.9919 68.6234C61.9424 68.6165 61.8919 68.6236 61.8462 68.6439C61.8004 68.6643 61.7612 68.697 61.733 68.7384C61.687 68.7304 61.6397 68.7381 61.5986 68.7602C61.6283 68.782 61.7093 68.774 61.7488 68.776L61.7251 68.7919L61.7073 68.8256C61.8027 68.8371 61.8993 68.8213 61.986 68.78L62.0848 68.8077L62.0552 68.8176C62.1323 68.8621 62.2227 68.8776 62.3102 68.8612L62.2884 68.8355ZM61.9663 68.671L61.9801 68.6393L61.9959 68.6551H62.0078L61.9663 68.671ZM64.0376 68.8018V68.8117H64.0495L64.0376 68.8018ZM61.8101 68.8949V68.9326C61.8925 68.9317 61.9747 68.9224 62.0552 68.9048V68.8949L61.8931 68.8672L61.8101 68.8949ZM62.6007 68.885L62.5592 68.8731V68.8909H62.6007V68.885ZM62.4545 68.9167L62.494 68.9504H62.5454C62.5444 68.9452 62.5444 68.9398 62.5454 68.9345L62.4525 68.9068L62.4545 68.9167ZM62.6323 68.9563H62.6561V68.9464C62.6513 68.9388 62.646 68.9315 62.6402 68.9246L62.5809 68.9127C62.6086 68.9405 62.6225 68.9425 62.6422 68.9603L62.6323 68.9563ZM62.2252 68.9722L62.1679 68.994L62.154 69.0158L62.1718 69.0416C62.2153 69.0416 62.237 69.0257 62.2766 69.0158L62.2944 68.994C62.2773 68.981 62.2565 68.974 62.2351 68.9742L62.2252 68.9722ZM63.1265 69.0098H63.1087V69.0217L63.1265 69.0098ZM62.9091 69.0752C62.8892 69.0591 62.8652 69.0488 62.8399 69.0455C62.8517 69.0633 62.8675 69.0653 62.8873 69.0733L62.9091 69.0752ZM62.2963 69.1466H62.2509L62.2627 69.1565L62.2963 69.1466ZM67.8425 69.5429H67.8128L67.8306 69.5607C67.7591 69.5597 67.6885 69.5442 67.6231 69.5152V69.5152L67.6349 69.5389C67.6092 69.5136 67.5771 69.4958 67.542 69.4874L67.5756 69.5251C67.546 69.5132 67.5519 69.5092 67.5302 69.5251C67.4695 69.4546 67.3876 69.4059 67.2969 69.3863L67.3266 69.4181L67.2791 69.3982L67.2337 69.4359V69.4478L67.461 69.5052C67.4234 69.531 67.3839 69.5211 67.3207 69.5052V69.5171C67.3987 69.5358 67.4734 69.5665 67.542 69.6083V69.6202L67.4827 69.6063L67.4946 69.6301C67.6527 69.6717 68.0401 69.8659 68.1725 69.7113C68.0946 69.6668 68.0228 69.6121 67.9591 69.5488C67.9116 69.5905 67.8919 69.5548 67.8523 69.537L67.8425 69.5429ZM63.2964 69.315H63.2846V69.3249L63.2964 69.315ZM63.8558 69.3646C63.8439 69.3546 63.8558 69.3646 63.8262 69.3527C63.8538 69.3566 63.842 69.3566 63.8716 69.3566L63.8558 69.3646ZM63.8716 69.3764C63.8912 69.3996 63.9174 69.4162 63.9467 69.424L63.9764 69.4022C63.9764 69.3903 63.9665 69.3784 63.9606 69.3685L63.9131 69.3566C63.923 69.3745 63.9289 69.3705 63.8874 69.3705L63.8716 69.3764ZM63.4565 69.4121L63.4447 69.428C63.4714 69.4382 63.501 69.4382 63.5277 69.428V69.4161L63.4981 69.4002H63.4684L63.4565 69.4121ZM72.5486 74.4295L72.4636 74.2492L72.4814 74.273V74.2611C72.4814 74.2334 72.4537 74.1957 72.4359 74.17H72.4478C72.4619 74.1835 72.4752 74.1981 72.4873 74.2136C72.4873 74.1898 72.4695 74.166 72.4596 74.1402L72.5229 74.2036C72.4863 74.1156 72.4269 74.039 72.3509 73.9817C72.3608 73.9579 72.3509 73.9659 72.3746 73.9718C72.3529 73.8985 72.2422 73.8311 72.2323 73.7201C72.2422 73.7796 72.2857 73.7657 72.3133 73.7895C72.2896 73.7558 72.2679 73.7221 72.2442 73.6904L72.2778 73.6627C72.3074 73.6448 72.3272 73.7063 72.3647 73.7063C72.3647 73.732 72.3647 73.734 72.3746 73.7598C72.3803 73.6981 72.3763 73.6359 72.3628 73.5755C72.3328 73.5335 72.3064 73.4891 72.2837 73.4427C72.1986 73.3051 72.1265 73.1598 72.0683 73.0087C71.7224 72.4586 71.3116 71.9523 70.8448 71.5007C70.3725 71.0789 69.8601 70.7046 69.315 70.3831C69.2989 70.4048 69.277 70.4213 69.2517 70.4307C69.2517 70.4663 69.2517 70.4683 69.2636 70.4901L69.2102 70.5159C69.2319 70.5476 69.2616 70.5674 69.2814 70.5931C69.3011 70.6189 69.2814 70.6348 69.2952 70.6546C69.3486 70.7338 69.4593 70.7755 69.5027 70.8726C69.5304 70.8726 69.5284 70.8726 69.5482 70.8567L69.5719 70.928C69.6016 70.9657 69.7538 71.0529 69.8111 71.0192C69.8234 71.0079 69.8317 70.9929 69.8346 70.9763C69.8374 70.9598 69.8347 70.9428 69.8269 70.928L69.8625 70.9122L69.8506 70.8844C70.0127 70.9617 70.0937 71.1619 70.2657 71.2332L70.2894 71.2927C70.2637 71.3026 70.2578 71.3204 70.2439 71.3402C70.2755 71.3834 70.3177 71.4175 70.3665 71.4393C70.3507 71.4631 70.3566 71.4492 70.3269 71.4393C70.338 71.4571 70.3538 71.4715 70.3724 71.4809H70.408V71.4373C70.3902 71.4195 70.3704 71.3858 70.3428 71.3739C70.3151 71.362 70.3428 71.3739 70.3546 71.3521L70.321 71.3145C70.3347 71.3245 70.3462 71.3373 70.3546 71.3521V71.3521C70.3546 71.364 70.3764 71.3719 70.3843 71.3858H70.4534V71.368C70.4376 71.3501 70.4238 71.3303 70.408 71.3105C70.3922 71.2907 70.408 71.3105 70.408 71.2847H70.4732L70.4495 71.2411C70.5313 71.3114 70.6085 71.3869 70.6807 71.467C70.6491 71.4829 70.657 71.4987 70.6649 71.5324H70.6373C70.5977 71.58 70.5859 71.5324 70.5384 71.5324C70.5206 71.5126 70.5266 71.5324 70.5384 71.5047L70.487 71.4571V71.4908H70.4515C70.4515 71.5265 70.4515 71.5126 70.4356 71.5562H70.406C70.3963 71.5392 70.3902 71.5203 70.3882 71.5007C70.3814 71.4917 70.3716 71.4853 70.3605 71.4829L70.3724 71.5047C70.325 71.5047 70.2894 71.467 70.2558 71.4393C70.2222 71.4116 70.2558 71.4393 70.2558 71.4294C70.2419 71.4144 70.2228 71.4052 70.2024 71.4036V71.4036V71.3917L70.319 71.4631C70.2953 71.4116 70.242 71.3343 70.1787 71.3541C70.1668 71.3363 70.1589 71.2946 70.1431 71.2689L70.1668 71.2828V71.255C70.1115 71.1936 70.0364 71.1599 70.0067 71.0747L69.9731 71.0886L69.985 71.1381H69.9613L69.9336 71.152C69.9534 71.255 70.1629 71.4135 70.151 71.4611H70.1925C70.2163 71.5007 70.24 71.5245 70.2676 71.5681C70.2459 71.5681 70.2538 71.5681 70.2578 71.5998C70.2302 71.5887 70.2005 71.5839 70.1708 71.5859V71.6137H70.0898C70.0874 71.6232 70.084 71.6325 70.0799 71.6414L70.1036 71.6811C70.1253 71.691 70.1214 71.691 70.1431 71.6811C70.1589 71.7128 70.1708 71.7187 70.1668 71.7464C70.1629 71.7742 70.1668 71.7583 70.1392 71.7464C70.1392 71.79 70.1392 71.796 70.1629 71.8198H70.1174C70.0957 71.7623 70.0759 71.7048 70.0562 71.6474H70.0443C70.0641 71.7246 70.1293 71.8455 70.0838 71.8911C70.0384 71.9367 69.9929 71.9248 69.9692 71.9585L70.0166 72.0675C69.9984 72.0831 69.9767 72.094 69.9534 72.0992C69.9376 72.119 69.9237 72.1368 69.9534 72.1547L69.9356 72.1705C69.8644 72.1864 69.7854 72.123 69.7379 72.1051C69.7696 72.1527 69.815 72.1824 69.8328 72.2418L69.8506 72.2597C69.8032 72.2597 69.7775 72.2438 69.7458 72.2696L69.6747 72.2181C69.6391 72.2379 69.5739 72.23 69.5423 72.2637H69.5304C69.5403 72.3112 69.5759 72.3053 69.6075 72.331H69.5719C69.6352 72.3865 69.7241 72.3726 69.8111 72.4043C69.8111 72.4043 70.0878 72.66 70.0898 72.6738L70.0601 72.6501C70.1511 72.7684 70.2017 72.9129 70.2044 73.0622C70.0469 73.0729 69.8888 73.0582 69.736 73.0186C69.7004 73.0186 69.6134 73.0523 69.5601 73.0345C69.5067 73.0167 69.5245 73.0048 69.4849 73.0127C69.4454 73.0206 69.4355 73.0424 69.4494 73.0702C69.4197 73.0702 69.3841 73.0821 69.3743 73.1039L69.3505 73.1177C69.3505 73.1772 69.3881 73.1732 69.396 73.2168C69.4118 73.2168 69.4079 73.2168 69.4256 73.2029C69.449 73.2947 69.4835 73.3832 69.5284 73.4665C69.5541 73.6027 69.5541 73.7425 69.5284 73.8787C69.552 73.8986 69.5732 73.9212 69.5917 73.946L69.6273 73.9262C69.663 74.0148 69.6792 74.1101 69.6747 74.2056C69.7281 74.1878 69.7953 74.2195 69.8249 74.2056C69.8546 74.1918 69.8565 74.1719 69.8901 74.164C69.989 74.1204 70.0384 74.3622 70.1471 74.378C70.1874 74.339 70.225 74.2973 70.2597 74.2532C70.325 74.2407 70.3921 74.2407 70.4574 74.2532L70.4693 74.2274C70.4787 74.2268 70.4883 74.2282 70.4971 74.2316C70.506 74.2351 70.514 74.2404 70.5206 74.2472C70.5404 74.2076 70.5542 74.1363 70.5701 74.1006C70.5899 74.0917 70.6117 74.0883 70.6333 74.0907C70.6229 74.043 70.6229 73.9937 70.6333 73.946C70.6432 73.9123 70.6709 73.9104 70.6807 73.8668C70.5048 73.7479 70.663 73.5973 70.6135 73.5022C70.6471 73.4586 70.6748 73.4724 70.7183 73.4407C70.7464 73.4109 70.7716 73.3784 70.7934 73.3436C70.7835 73.2822 70.6847 73.1891 70.7084 73.1197C70.7084 73.0999 70.742 73.088 70.7539 73.0642C70.8428 73.0939 70.8982 73.1316 70.9752 73.1633C71.0128 73.1276 71.0049 73.0563 71.0741 73.0484C71.0741 73.0206 71.084 72.9949 71.0899 72.9671V72.9552C71.246 72.983 71.3369 73.197 71.414 73.306C71.414 73.306 71.6334 73.516 71.6413 73.52C71.6492 73.524 71.673 73.5101 71.6927 73.52L71.7323 73.5874C71.8783 73.6963 71.9813 73.8535 72.0228 74.0312C72.005 74.0412 71.9714 74.0451 71.9536 74.0729C71.9367 74.0749 71.9195 74.0728 71.9037 74.0665C71.8878 74.0603 71.8737 74.0502 71.8627 74.0372C71.8528 74.0471 71.8627 74.0372 71.8508 74.0649C71.8427 74.0594 71.8354 74.0527 71.8291 74.0451V74.0451C71.8202 74.0708 71.8202 74.0987 71.8291 74.1244C71.9069 74.1951 71.9888 74.2613 72.0742 74.3225C72.048 74.2439 72.0294 74.163 72.0188 74.0808L72.0524 74.1065C72.0628 74.0577 72.0565 74.0068 72.0347 73.9619C72.0347 73.9322 72.0347 73.9401 72.0584 73.9282C72.0386 73.8569 72.003 73.847 71.9675 73.7974C71.9319 73.7479 71.9457 73.7102 71.9339 73.6646H71.9457C71.981 73.7132 72.0229 73.7566 72.0702 73.7935C72.0484 73.7303 72.014 73.6723 71.9692 73.623C71.9243 73.5736 71.87 73.5338 71.8093 73.5061C71.7952 73.483 71.7889 73.4558 71.7915 73.4288C71.7579 73.411 71.7303 73.4288 71.6947 73.3951C71.6233 73.314 71.5604 73.2256 71.5069 73.1316C71.4496 73.0583 71.3429 73.0305 71.3093 72.9334V72.8938C71.2974 72.8621 71.2638 72.8542 71.252 72.8126C71.2856 72.8126 71.2816 72.7987 71.2974 72.7769H71.3528C71.3838 72.8231 71.4103 72.8722 71.4318 72.9235H71.4437V72.8839C71.4536 72.9037 71.4634 72.9235 71.4714 72.9433L71.4891 72.9572L71.4654 72.9037C71.5208 72.9235 71.5405 73.0186 71.5682 73.0523C71.6135 73.0939 71.661 73.1329 71.7105 73.1692H71.6888C71.7046 73.197 71.7145 73.2029 71.7283 73.2267H71.756L71.7283 73.2009H71.7402L71.7738 73.2267V73.2386H71.7402C71.7639 73.2644 71.7599 73.2386 71.7896 73.2564C71.8679 73.3087 71.9351 73.376 71.9872 73.4546C72.0188 73.5378 72.0524 73.623 72.0841 73.7082C72.1157 73.7934 72.2106 73.8549 72.2422 73.9322C72.258 73.9322 72.2422 73.9322 72.26 73.9322C72.2778 73.9322 72.2461 73.9639 72.26 73.9896C72.2696 74.0064 72.2826 74.021 72.2983 74.0323C72.314 74.0435 72.3319 74.0513 72.3509 74.055C72.3412 74.0768 72.3371 74.1006 72.339 74.1244C72.3837 74.1809 72.4184 74.2445 72.4418 74.3126L72.4596 74.3265L72.4478 74.2849C72.4616 74.3146 72.4734 74.3443 72.4873 74.376H72.4991L72.4873 74.3285C72.516 74.3561 72.5401 74.3882 72.5584 74.4236L72.5486 74.4295ZM70.1668 71.6929V71.683H70.1787L70.1668 71.6929ZM69.6114 73.9302C69.6124 73.9203 69.6124 73.9103 69.6114 73.9005H69.6233L69.6114 73.9302ZM70.2222 71.6573V71.6474H70.234C70.234 71.6573 70.2439 71.6513 70.2261 71.6573H70.2222ZM70.6432 71.6038C70.6649 71.6038 70.6629 71.6038 70.6768 71.6176L70.6432 71.6038ZM71.4516 72.9156L71.4338 72.8918H71.4516V72.9156ZM72.4398 74.1462L72.3885 74.0966H72.4102L72.4517 74.1283L72.4398 74.1462ZM61.2725 69.8243C61.2883 69.858 61.3772 69.8857 61.4168 69.8956C61.4237 69.8785 61.4237 69.8593 61.4168 69.8421C61.381 69.8246 61.3419 69.8151 61.3021 69.8144L61.2725 69.8243ZM64.3084 70.0224V70.0125H64.2788C64.3045 70.0324 64.2906 70.0185 64.3124 70.0284L64.3084 70.0224ZM64.6168 70.2959L64.599 70.282L64.6108 70.2999L64.6168 70.2959ZM63.5613 70.7041C63.6828 70.789 63.816 70.8557 63.9566 70.9023H63.9685V70.8844C63.8594 70.7802 63.7217 70.7112 63.5732 70.6863L63.5613 70.7041ZM65.0338 70.7873V70.8032C65.0556 70.7933 65.0338 70.8032 65.0516 70.7873H65.0338ZM69.4632 72.0259C69.4909 72.0159 69.5265 72.0259 69.5561 72.0417C69.5857 72.0576 69.5561 71.9842 69.566 71.9743C69.5759 71.9644 69.7537 71.9882 69.7636 71.9922H69.7715L69.7597 71.9624C69.8274 71.9714 69.8963 71.9597 69.9573 71.9288V71.9169L69.9455 71.8832H69.8644C69.8763 71.8574 69.9059 71.8198 69.8961 71.7821C69.8862 71.7445 69.7794 71.6117 69.7162 71.685H69.6984C69.6591 71.5958 69.5953 71.5195 69.5146 71.4651L69.4098 71.4215C69.315 71.3303 69.2715 71.259 69.1272 71.259L69.1727 71.2253L69.143 71.2035C69.1667 71.1559 69.143 71.1203 69.143 71.0747C69.0916 71.0232 68.9948 71.037 68.9276 71.0509C68.9276 71.0192 68.9276 71.0311 68.9078 71.0172C68.9138 70.994 68.9287 70.974 68.9493 70.9617L68.9374 70.9241C68.8762 70.9102 68.8189 70.936 68.7615 70.9241C68.7477 70.9419 68.7497 70.9439 68.7615 70.9637C68.7734 70.9835 68.7615 70.9915 68.7734 71.0152H68.7615C68.7418 71.0152 68.7517 71.0152 68.7378 71.0271L68.7734 71.0826L68.6963 71.0271C68.6845 71.0489 68.6963 71.0271 68.6726 71.0608C68.7075 71.0916 68.7509 71.111 68.7971 71.1163L68.809 71.1381L68.7793 71.1559C68.7932 71.1856 68.803 71.1857 68.7971 71.2174H68.8564V71.1896V71.1777C68.8663 71.2411 68.8999 71.2847 68.9157 71.3521H68.9809V71.3402L68.9691 71.3125L69.0046 71.3343L68.9869 71.2788L69.0343 71.3105C69.0406 71.3238 69.0439 71.3384 69.0439 71.3531C69.0439 71.3678 69.0406 71.3824 69.0343 71.3957L69.0877 71.4393L69.0758 71.4175L69.1292 71.4393V71.4175C69.1687 71.4334 69.1825 71.4175 69.2102 71.3997C69.2517 71.4492 69.2339 71.5265 69.3288 71.5106C69.3289 71.5449 69.34 71.5782 69.3604 71.6058C69.315 71.6434 69.2675 71.6157 69.2201 71.6058C69.2201 71.6434 69.2399 71.6355 69.2616 71.6553L69.2379 71.685V71.6949L69.2853 71.6771L69.3328 71.7385C69.3283 71.7554 69.3182 71.7703 69.3042 71.7808C69.2902 71.7912 69.2731 71.7966 69.2557 71.796L69.2399 71.8138L69.2991 71.8634C69.3604 71.8317 69.4177 71.8733 69.4849 71.8951L69.5324 71.8733C69.5275 71.886 69.5275 71.9001 69.5324 71.9129H69.4158C69.4134 71.9428 69.405 71.9719 69.391 71.9985C69.3771 72.0251 69.358 72.0485 69.3347 72.0675V72.0794C69.357 72.077 69.3794 72.0826 69.398 72.0952C69.4316 72.0595 69.4217 72.0417 69.4672 72.0318L69.4632 72.0259ZM68.9612 71.2867V71.2649H68.9809L68.9928 71.2808L68.9612 71.2867ZM65.0081 70.8547V70.8369L64.9152 70.8111H64.8302C64.7894 70.8281 64.7497 70.848 64.7116 70.8706C64.6484 70.9023 64.6227 70.9815 64.5397 71.0014C64.5397 71.0232 64.5397 71.0172 64.5397 71.041C64.516 71.041 64.5219 71.041 64.51 71.0271C64.4783 71.0377 64.4516 71.0595 64.4349 71.0886L64.4685 71.1183C64.4128 71.1195 64.3575 71.1288 64.3045 71.146L64.3163 71.2035C64.4934 71.2363 64.6678 71.282 64.8381 71.3402H64.8144L64.931 71.3858C64.9409 71.3739 64.931 71.3858 64.9429 71.3561L65.02 71.3898C64.9622 71.4125 64.8999 71.4214 64.8381 71.4155V71.4373C64.9489 71.4641 65.0656 71.4493 65.1662 71.3957L65.19 71.4254C65.1893 71.4436 65.1833 71.4611 65.1727 71.4759C65.1622 71.4907 65.1476 71.5021 65.1307 71.5087C65.1307 71.5324 65.1307 71.5265 65.1544 71.5404L65.2255 71.5364C65.211 71.5564 65.2046 71.5812 65.2077 71.6058L65.2947 71.6275C65.3382 71.6058 65.3501 71.5602 65.3896 71.5324V71.4869C65.3599 71.4869 65.356 71.5047 65.3066 71.5106V71.4888C65.3222 71.4655 65.3452 71.4481 65.3718 71.4393V71.4274C65.3481 71.4271 65.3245 71.4314 65.3024 71.4403C65.2804 71.4491 65.2603 71.4623 65.2433 71.4789L65.2315 71.4552C65.2157 71.4552 65.2315 71.4552 65.2137 71.4552C65.2591 71.4282 65.3059 71.4037 65.354 71.3818L65.3659 71.3699C65.3422 71.3462 65.2809 71.3521 65.2374 71.3462C65.2512 71.3105 65.2374 71.3363 65.2374 71.2887C65.2498 71.2881 65.262 71.2849 65.2732 71.2795C65.2844 71.274 65.2944 71.2664 65.3026 71.257C65.2829 71.2368 65.2592 71.221 65.2329 71.2108C65.2067 71.2005 65.1786 71.196 65.1504 71.1975C65.1267 71.1738 65.1504 71.1599 65.1089 71.144C65.0674 71.1282 65.1089 71.1559 65.0911 71.144C65.0733 71.1321 65.0911 71.144 65.0911 71.1658H65.0556C65.022 71.1658 65.0358 71.1658 65.0397 71.1361C65.0101 71.1361 65.02 71.1361 65.016 71.152C64.999 71.139 64.9781 71.132 64.9567 71.1321L64.9686 71.1143C64.9468 71.1044 64.9686 71.1143 64.9389 71.1143L64.9271 71.1024V71.0786H64.9982C64.9627 71.0529 64.9231 71.0529 64.8876 71.0212L64.7808 71.0628C64.7986 71.0053 64.8994 70.9538 64.9587 70.938L64.9824 70.9102C64.9691 70.8989 64.9524 70.8926 64.935 70.8924V70.8805C64.9604 70.8918 64.9883 70.8965 65.016 70.8944L65.0081 70.8547ZM68.6449 71.0192L68.6845 70.9855L68.6726 70.928H68.6429L68.5975 70.9697C68.6133 70.9875 68.6232 70.9954 68.6271 71.0132L68.6449 71.0192ZM64.9666 70.9221L64.9785 70.9102H64.9666V70.9221ZM68.6449 71.0311L68.6212 71.0192L68.5975 71.0311C68.6166 71.051 68.6326 71.0737 68.6449 71.0985H68.6627L68.6449 71.0311ZM64.9785 70.9518H64.9903H64.9607H64.9785ZM70.1273 71.1401C70.1155 71.1203 70.1273 71.1401 70.1095 71.1242L70.1214 71.1401H70.1273ZM68.7833 71.1401V71.1282L68.7596 71.1163L68.7833 71.1401ZM68.6765 71.1401H68.6588V71.152L68.6765 71.1401ZM68.7714 71.1837V71.1658H68.7833L68.7714 71.1837ZM68.7536 71.1956V71.2134H68.7655C68.7556 71.1777 68.7635 71.1876 68.7517 71.1777L68.7536 71.1956ZM64.3638 71.0925H64.3519V71.1104H64.4349L64.4053 71.0806L64.3638 71.0925ZM65.1682 71.1559V71.1777H65.2157C65.1979 71.1401 65.1998 71.1401 65.1662 71.1401L65.1682 71.1559ZM68.89 71.3244C68.8988 71.3127 68.9036 71.2984 68.9036 71.2837C68.9036 71.2691 68.8988 71.2548 68.89 71.2431C68.8861 71.2534 68.8797 71.2626 68.8715 71.2698C68.8632 71.2771 68.8533 71.2822 68.8426 71.2847C68.8564 71.2986 68.8643 71.2907 68.888 71.3065L68.89 71.3244ZM68.8485 71.257H68.8604H68.8485ZM63.5119 71.1064L63.4467 71.1321V71.144C63.504 71.197 63.5712 71.238 63.6443 71.2649C63.6621 71.2768 63.6443 71.2649 63.6562 71.2828C63.668 71.3006 63.6799 71.3026 63.7036 71.3125C63.7273 71.3224 63.7491 71.2748 63.8281 71.2768C63.7886 71.259 63.5455 71.2035 63.5455 71.2035C63.5455 71.2035 63.5336 71.2035 63.5277 71.1738C63.5218 71.144 63.5139 71.1579 63.5277 71.1222L63.5119 71.1064ZM69.0145 71.5364V71.5245C69.0521 71.5146 69.0481 71.4948 69.0738 71.4829V71.4552C69.0303 71.4155 68.9948 71.4155 68.9612 71.362C68.9434 71.3518 68.9228 71.3477 68.9025 71.3502C68.8822 71.3527 68.8633 71.3617 68.8485 71.3759C68.8485 71.362 68.8485 71.3759 68.8604 71.3521L68.807 71.3303C68.7816 71.3503 68.7504 71.3614 68.7181 71.362C68.7182 71.3856 68.7106 71.4086 68.6963 71.4274C68.7071 71.4339 68.7194 71.4373 68.7319 71.4373C68.7444 71.4373 68.7567 71.4339 68.7675 71.4274C68.7556 71.4571 68.7457 71.4492 68.7437 71.475H68.5856C68.5856 71.5087 68.5955 71.4869 68.6093 71.5087H68.5916C68.6153 71.5304 68.635 71.5285 68.6686 71.5265L68.6271 71.5701C68.6746 71.6295 68.7121 71.5958 68.7813 71.6137C68.7418 71.6414 68.7556 71.6414 68.7536 71.6791C68.7517 71.7167 68.7299 71.6969 68.7536 71.7147C68.7378 71.7425 68.7418 71.7246 68.7536 71.7564H68.7062L68.6943 71.7861L68.7596 71.7742L68.7181 71.8019C68.7892 71.9724 69.0343 71.7504 69.143 71.7564C69.1396 71.7123 69.1263 71.6696 69.104 71.6315C69.0818 71.5934 69.0512 71.5609 69.0145 71.5364V71.5364ZM65.2591 71.2847L65.2473 71.2728V71.2907L65.2591 71.2847ZM70.5463 71.4116L70.5582 71.4393L70.5977 71.4532C70.5925 71.4419 70.5844 71.4322 70.5744 71.4249C70.5644 71.4177 70.5527 71.4131 70.5404 71.4116H70.5463ZM62.9545 71.3065H62.9664C62.9822 71.2927 62.9802 71.3065 62.9901 71.2788H62.9723L62.9545 71.3065ZM69.1549 71.4928V71.5106H69.1845V71.4928L69.1549 71.4651V71.4928ZM62.6066 71.3204L62.6185 71.3085L62.6027 71.2907C62.5928 71.3105 62.5908 71.3045 62.6007 71.3204H62.6066ZM62.6481 71.3204H62.6363V71.3323L62.6481 71.3204ZM64.7709 71.4076L64.7828 71.4314L64.7947 71.4195L64.7709 71.4076ZM65.1662 71.4314H65.1484L65.1247 71.4492V71.4651H65.1425L65.1722 71.4492L65.1662 71.4314ZM63.0435 71.3719C63.0533 71.3719 63.0435 71.3719 63.0553 71.3719H63.0435ZM64.767 71.4472H64.7848H64.7966L64.7729 71.4334L64.767 71.4472ZM64.7966 71.4472V71.4591L64.8085 71.4492L64.7966 71.4472ZM70.1668 71.7147V71.7346C70.1668 71.7147 70.1668 71.7346 70.1668 71.7147ZM62.2805 71.5364H62.2706V71.5483L62.2805 71.5364ZM62.158 71.6097L62.1283 71.6196V71.6315H62.1856C62.1738 71.6137 62.1817 71.6157 62.158 71.6077V71.6097ZM61.9979 71.6097H61.986C61.9979 71.6196 61.988 71.6216 61.9979 71.6157V71.6097ZM61.9287 71.6256C61.9168 71.6137 61.9287 71.6256 61.9109 71.6137L61.9287 71.6256ZM62.2568 71.6652V71.6553C62.2449 71.6454 62.2449 71.6454 62.2212 71.6414V71.6533L62.2568 71.6652ZM60.9701 72.3647H60.9582H60.9701ZM55.5188 72.8086V72.8205L55.5406 72.7373V72.7254L55.5188 72.8086ZM57.5724 72.87L57.5962 72.8561H57.5843L57.5724 72.87ZM71.7164 73.2762H71.7283C71.7283 73.2584 71.7283 73.2762 71.7164 73.2564V73.2762ZM71.3528 73.518C71.3528 73.4328 71.3093 73.2782 71.25 73.2445L71.2678 73.2862L71.2322 73.308C71.2342 73.3464 71.2444 73.384 71.2621 73.4182C71.2799 73.4524 71.3047 73.4824 71.335 73.5061L71.3528 73.518ZM71.3409 73.2743H71.331V73.2921H71.3587C71.3528 73.2782 71.3528 73.2822 71.3528 73.2703L71.3409 73.2743ZM55.248 73.6191V73.631L55.2658 73.6528C55.2678 73.6191 55.2718 73.625 55.254 73.6151L55.248 73.6191ZM71.3686 73.5418C71.3643 73.5594 71.361 73.5773 71.3587 73.5953C71.333 73.6072 71.3409 73.6092 71.3113 73.5953C71.3113 73.6607 71.3844 73.7261 71.4081 73.7816C71.4318 73.837 71.4081 73.8767 71.4239 73.9084C71.4397 73.9401 71.4536 73.9441 71.499 73.952V73.9024C71.5129 73.9024 71.5148 73.9024 71.5326 73.9183C71.5134 73.785 71.4633 73.6581 71.3864 73.5477L71.3686 73.5418ZM72.3094 73.7043L72.3252 73.7162C72.3252 73.6904 72.3252 73.6944 72.3094 73.6805V73.7043ZM72.3707 73.7499C72.3707 73.7281 72.3707 73.738 72.3529 73.7261L72.3707 73.7499ZM72.3311 73.8331L72.3489 73.8172L72.3193 73.7855L72.3311 73.8172L72.3074 73.7974L72.3311 73.8331ZM72.3825 73.8331L72.4043 73.8509V73.8291C72.3978 73.8234 72.3905 73.8187 72.3825 73.8152V73.8331ZM72.4398 73.9936V74.0114L72.4616 74.0253L72.4398 73.9936ZM72.2975 74.0768C72.2975 74.0927 72.2975 74.1085 72.2975 74.1224L72.3153 74.1422H72.3331V74.1303L72.2975 74.0768ZM72.343 74.1977L72.3647 74.2155V74.1918L72.3371 74.1739L72.343 74.1977ZM72.5525 74.4434L72.5703 74.4791V74.4692L72.5525 74.4434ZM63.9882 84.3356L63.9704 84.3475L63.9823 84.3594H64.0119L63.9882 84.3356ZM64.0337 84.3554L64.0456 84.3435H64.0396L64.0337 84.3554ZM59.46 85.6712H59.4719L59.46 85.6593V85.6712ZM59.6853 86.232H59.6616C59.6794 86.234 59.6695 86.2201 59.6913 86.228L59.6853 86.232ZM59.5292 86.345L59.5411 86.3628H59.5648C59.5549 86.343 59.5549 86.343 59.5312 86.341L59.5292 86.345ZM59.5707 86.4698V86.4857H59.5885L59.5707 86.4698ZM59.6241 86.5629H59.6359V86.551L59.6241 86.5629ZM60.7428 87.8094L60.7289 87.7955C60.725 87.8074 60.723 87.7975 60.7448 87.8054L60.7428 87.8094ZM60.9622 87.8213V87.8094L60.8871 87.7975C60.9108 87.8133 60.9385 87.8114 60.9642 87.8173L60.9622 87.8213ZM60.6795 87.8054C60.6845 87.8183 60.6932 87.8295 60.7044 87.8376C60.7156 87.8457 60.729 87.8504 60.7428 87.851C60.7275 87.829 60.7052 87.8129 60.6795 87.8054V87.8054Z"
                                      fill="white"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M63.2053 67.9277C61.1262 67.9273 59.0931 68.5404 57.3592 69.6905C55.6254 70.8407 54.2676 72.4771 53.4551 74.3957C54.9474 71.7344 58.088 68.5519 63.1974 68.5638C67.8145 68.5638 71.2655 71.352 72.9574 74.4096C72.1467 72.4882 70.7894 70.8489 69.0551 69.6961C67.3207 68.5434 65.2861 67.9283 63.2053 67.9277V67.9277Z"
                                      fill="white"></path>
                                <path d="M63.1896 88.5209C58.527 88.5209 54.5641 85.7466 53.1094 81.8626C54.5107 86.024 57.9973 89.2561 63.1896 89.2561C68.0815 89.2561 71.9417 85.9804 73.3154 81.7715C71.8784 85.6971 67.8878 88.5209 63.1896 88.5209Z"
                                      fill="white"></path>
                                <path d="M47.2052 76.1793C47.1985 76.1734 47.1906 76.1689 47.1821 76.1662C47.1736 76.1635 47.1646 76.1625 47.1558 76.1634L46.2327 76.2526C46.217 76.2541 46.2024 76.2614 46.1918 76.2731C46.1812 76.2849 46.1753 76.3002 46.1754 76.316L46.1892 79.2369C46.1892 79.9384 45.9086 80.3208 45.3453 80.3763H45.2306C44.7523 80.3763 44.5072 80.0513 44.5053 79.4073L44.4914 76.4904C44.4914 76.4816 44.4894 76.473 44.4856 76.4652C44.4819 76.4573 44.4764 76.4503 44.4697 76.4448C44.4636 76.4385 44.4562 76.4336 44.448 76.4305C44.4397 76.4275 44.431 76.4262 44.4222 76.427L43.5032 76.5181C43.4873 76.5191 43.4724 76.5263 43.4617 76.5382C43.451 76.55 43.4453 76.5656 43.4458 76.5815L43.4597 79.5381C43.4597 80.8222 44.0269 81.4999 45.0824 81.4999C45.1694 81.4999 45.2603 81.4999 45.3532 81.488C47.0036 81.3255 47.2427 79.9721 47.2388 79.1814L47.2249 76.2248C47.225 76.2163 47.2233 76.2078 47.2199 76.2C47.2165 76.1921 47.2115 76.1851 47.2052 76.1793V76.1793Z"
                                      fill="white"></path>
                                <path d="M52.2039 75.8159C52.1975 75.8102 52.19 75.8058 52.1818 75.8031C52.1736 75.8003 52.165 75.7993 52.1564 75.8L51.3658 75.8555C51.3498 75.8565 51.3347 75.8637 51.3236 75.8754C51.3126 75.8872 51.3065 75.9028 51.3065 75.9189L51.3204 78.7843L49.2411 76.0319C49.2344 76.0236 49.226 76.017 49.2164 76.0126C49.2068 76.0081 49.1963 76.0059 49.1857 76.0061L48.1975 76.0755C48.1814 76.0765 48.1663 76.0836 48.1553 76.0954C48.1443 76.1072 48.1382 76.1227 48.1382 76.1389L48.1599 81.0156C48.16 81.0246 48.1619 81.0336 48.1657 81.0418C48.1694 81.05 48.1749 81.0573 48.1817 81.0632C48.1931 81.0733 48.2079 81.079 48.2232 81.079V81.079L49.0138 81.0236C49.0299 81.0225 49.045 81.0154 49.056 81.0036C49.067 80.9919 49.0731 80.9763 49.0731 80.9601L49.0592 77.851L51.3046 80.8353C51.3111 80.8437 51.3195 80.8504 51.3292 80.8548C51.3388 80.8593 51.3493 80.8615 51.3599 80.8611L52.1762 80.8036C52.1919 80.8021 52.2065 80.7948 52.2172 80.783C52.2278 80.7713 52.2336 80.756 52.2335 80.7402L52.2118 75.8615C52.2146 75.8458 52.2118 75.8297 52.2039 75.8159V75.8159Z"
                                      fill="white"></path>
                                <path d="M53.3658 80.7269C53.3713 80.7329 53.3781 80.7376 53.3856 80.7406C53.3931 80.7437 53.4012 80.7451 53.4093 80.7447L54.4608 80.6912C54.4771 80.6902 54.4924 80.6832 54.5038 80.6714C54.5151 80.6597 54.5216 80.6441 54.5221 80.6278L54.4984 75.7649C54.4978 75.7478 54.4908 75.7315 54.4786 75.7194C54.4723 75.7134 54.4648 75.7089 54.4567 75.7062C54.4485 75.7034 54.4398 75.7025 54.4312 75.7035L53.3757 75.755C53.3593 75.7555 53.3437 75.7624 53.3323 75.7743C53.3208 75.7861 53.3144 75.802 53.3145 75.8184L53.3441 80.6813C53.344 80.69 53.3459 80.6987 53.3497 80.7066C53.3535 80.7145 53.359 80.7214 53.3658 80.7269Z"
                                      fill="white"></path>
                                <path d="M57.3035 80.58L58.1297 80.5542C58.1415 80.5537 58.1529 80.55 58.1627 80.5433C58.1725 80.5367 58.1802 80.5274 58.185 80.5166L60.3058 75.5903C60.3106 75.5811 60.3132 75.5709 60.3132 75.5605C60.3132 75.5502 60.3106 75.54 60.3058 75.5308C60.2999 75.5217 60.2916 75.5143 60.2819 75.5094C60.2722 75.5045 60.2613 75.5023 60.2505 75.5031L59.2978 75.5308C59.286 75.5313 59.2745 75.535 59.2647 75.5417C59.255 75.5484 59.2472 75.5576 59.2424 75.5685L57.8589 78.7866L56.5129 75.6537C56.5081 75.6419 56.4999 75.6318 56.4893 75.6247C56.4787 75.6176 56.4663 75.6139 56.4536 75.614L55.2459 75.6497C55.2356 75.6502 55.2255 75.6532 55.2166 75.6584C55.2077 75.6636 55.2001 75.6709 55.1945 75.6796C55.1889 75.6883 55.1854 75.6982 55.1844 75.7085C55.1834 75.7188 55.1848 75.7292 55.1886 75.7389L57.256 80.5403C57.2599 80.5504 57.2663 80.5594 57.2746 80.5663C57.2829 80.5733 57.2928 80.578 57.3035 80.58V80.58Z"
                                      fill="white"></path>
                                <path d="M61.0468 80.4867H64.9584C64.9664 80.4868 64.9744 80.4852 64.9819 80.4822C64.9894 80.4791 64.9961 80.4746 65.0019 80.4689C65.0142 80.4569 65.0213 80.4405 65.0216 80.4233V79.4702C65.0216 79.4533 65.015 79.4372 65.0031 79.4253C64.9913 79.4134 64.9752 79.4068 64.9584 79.4068H62.213V78.4952H64.0314C64.0486 78.4949 64.0649 78.4877 64.0769 78.4754C64.0829 78.47 64.0877 78.4632 64.0908 78.4557C64.0939 78.4481 64.0952 78.4399 64.0946 78.4318V77.4767C64.0946 77.4599 64.088 77.4437 64.0761 77.4318C64.0643 77.4199 64.0482 77.4133 64.0314 77.4133H62.211V76.5731H64.9208C64.9292 76.5733 64.9376 76.5719 64.9454 76.5688C64.9532 76.5657 64.9602 76.561 64.9662 76.5551C64.9721 76.5492 64.9767 76.5421 64.9798 76.5342C64.9829 76.5264 64.9844 76.518 64.9841 76.5096V75.5624C64.9836 75.546 64.9767 75.5303 64.9649 75.5189C64.9531 75.5074 64.9373 75.501 64.9208 75.501H61.033C61.0246 75.5007 61.0163 75.5022 61.0085 75.5053C61.0007 75.5084 60.9936 75.513 60.9877 75.519C60.9817 75.5249 60.9771 75.532 60.974 75.5398C60.9709 75.5476 60.9695 75.556 60.9698 75.5644L60.9994 80.4273C60.9995 80.4411 61.0042 80.4545 61.0128 80.4653C61.0214 80.476 61.0334 80.4836 61.0468 80.4867V80.4867Z"
                                      fill="white"></path>
                                <path d="M66.2295 80.5086L67.2909 80.5422C67.3078 80.5407 67.3237 80.5338 67.3363 80.5224C67.3486 80.5104 67.3557 80.4941 67.3561 80.4769V78.7073L68.0439 78.7291L69.1073 80.566C69.113 80.5752 69.1208 80.5829 69.1301 80.5884C69.1394 80.5939 69.1499 80.5971 69.1607 80.5977L70.4177 80.6354C70.4289 80.6353 70.4399 80.6323 70.4495 80.6268C70.4592 80.6212 70.4673 80.6133 70.4731 80.6037C70.4788 80.5941 70.4819 80.5831 70.4819 80.572C70.4819 80.5608 70.4788 80.5498 70.4731 80.5403L69.3484 78.6082C69.7951 78.4497 70.2912 78.0632 70.2873 77.1378C70.2873 76.1787 69.7714 75.612 68.8859 75.5862L66.2137 75.499C66.2053 75.4988 66.197 75.5003 66.1891 75.5034C66.1813 75.5064 66.1742 75.511 66.1682 75.5169C66.1559 75.5289 66.1488 75.5452 66.1484 75.5625L66.1722 80.4412C66.1713 80.4494 66.1722 80.4577 66.1747 80.4656C66.1771 80.4735 66.1812 80.4808 66.1865 80.4871C66.1919 80.4934 66.1984 80.4985 66.2058 80.5022C66.2132 80.5059 66.2212 80.5081 66.2295 80.5086ZM68.459 76.6504C68.9848 76.6642 69.0282 76.8743 69.0302 77.1061C69.0476 77.2533 69.0064 77.4014 68.9156 77.5183C68.8128 77.6213 68.627 77.6649 68.3108 77.6649H68.1902L67.3284 77.6372V76.6147L68.459 76.6504Z"
                                      fill="white"></path>
                                <path d="M73.1987 77.5683C73.0011 77.4871 72.8212 77.4098 72.6789 77.3325C72.4397 77.2037 72.3251 77.0848 72.3231 76.9659C72.3237 76.9399 72.3295 76.9143 72.34 76.8905C72.3505 76.8667 72.3656 76.8452 72.3844 76.8272C72.4465 76.779 72.5179 76.7442 72.5941 76.7251C72.6703 76.706 72.7497 76.703 72.8271 76.7163C73.5545 76.7559 74.3451 77.2414 74.5684 77.388C74.5784 77.3938 74.5896 77.3968 74.6011 77.3968C74.6125 77.3968 74.6238 77.3938 74.6337 77.388C74.6438 77.3822 74.6522 77.3738 74.6581 77.3637C74.6639 77.3537 74.6671 77.3422 74.6673 77.3305V76.2426C74.6674 76.2316 74.6647 76.2208 74.6595 76.2111C74.6544 76.2014 74.6468 76.1932 74.6376 76.1872C74.0847 75.8651 73.4707 75.6626 72.835 75.5927C72.5894 75.5669 72.3411 75.5927 72.106 75.6685C71.8708 75.7442 71.654 75.8682 71.4693 76.0326C71.3488 76.1576 71.255 76.3059 71.1935 76.4684C71.132 76.6309 71.1041 76.8042 71.1115 76.9778C71.1115 78.1291 72.1551 78.5631 72.9121 78.8683C73.092 78.9416 73.26 79.011 73.4023 79.0823C73.6415 79.2032 73.7541 79.3102 73.7561 79.4192C73.7581 79.4603 73.7516 79.5015 73.7369 79.54C73.7223 79.5786 73.6999 79.6136 73.6711 79.6431C73.5565 79.758 73.3272 79.8095 72.9773 79.7897C72.6275 79.7699 71.9614 79.4766 71.2815 79.0209C71.2719 79.0143 71.2607 79.0106 71.2491 79.01C71.2376 79.0094 71.2261 79.012 71.2159 79.0175C71.2057 79.023 71.1972 79.0312 71.1913 79.0413C71.1855 79.0513 71.1825 79.0627 71.1827 79.0744V80.1979C71.1833 80.2085 71.1863 80.2188 71.1915 80.228C71.1966 80.2373 71.2037 80.2453 71.2123 80.2514C71.4357 80.3941 72.2203 80.8657 72.9714 80.9054H73.1691C73.7877 80.9054 74.2601 80.7468 74.5704 80.4357C74.7069 80.2886 74.8122 80.1153 74.8801 79.9263C74.9481 79.7373 74.9772 79.5365 74.9657 79.3359C74.9677 78.3134 73.9458 77.8775 73.1987 77.5683Z"
                                      fill="white"></path>
                                <path d="M77.9697 76.0479L77.2384 75.9944C77.225 75.9931 77.2115 75.9963 77.2001 76.0035C77.1887 76.0106 77.1799 76.0214 77.1752 76.0341L75.2935 80.8137C75.2887 80.8221 75.2861 80.8317 75.2861 80.8414C75.2861 80.8512 75.2887 80.8608 75.2935 80.8692C75.2986 80.878 75.3058 80.8853 75.3144 80.8905C75.3231 80.8957 75.3329 80.8986 75.343 80.8989L76.2186 80.9643C76.2323 80.9658 76.2461 80.9625 76.2577 80.9549C76.2692 80.9473 76.2777 80.9359 76.2818 80.9227L76.6435 80.0012L78.3453 80.1261L78.6971 81.1169C78.7011 81.1286 78.7085 81.1389 78.7183 81.1463C78.7282 81.1537 78.7401 81.158 78.7524 81.1585L79.8 81.2358C79.8099 81.2354 79.8196 81.233 79.8285 81.2285C79.8373 81.2241 79.8451 81.2178 79.8514 81.21C79.8562 81.2009 79.8587 81.1907 79.8587 81.1803C79.8587 81.1699 79.8562 81.1597 79.8514 81.1506L78.0251 76.0935C78.0218 76.081 78.0147 76.0699 78.0047 76.0618C77.9948 76.0536 77.9826 76.0487 77.9697 76.0479V76.0479ZM77.0645 78.955L77.5112 77.8254L77.944 79.0144L77.0645 78.955Z"
                                      fill="white"></path>
                                <path d="M83.6229 80.544C83.623 80.5282 83.6172 80.5129 83.6065 80.5011C83.5959 80.4894 83.5813 80.4821 83.5656 80.4806L81.514 80.2824L81.4942 76.3727C81.4942 76.3571 81.4883 76.342 81.4777 76.3306C81.467 76.3192 81.4525 76.3123 81.4369 76.3113L80.5257 76.2261C80.517 76.2249 80.508 76.2259 80.4998 76.229C80.4915 76.2321 80.4841 76.2372 80.4783 76.2439C80.4715 76.2494 80.4661 76.2564 80.4623 76.2643C80.4586 76.2721 80.4566 76.2808 80.4565 76.2895L80.4842 81.2257C80.4846 81.2417 80.4909 81.257 80.5018 81.2687C80.5128 81.2804 80.5276 81.2876 80.5435 81.2891L83.5597 81.5665C83.5674 81.5665 83.5751 81.5649 83.5823 81.5619C83.5894 81.5588 83.5958 81.5543 83.6012 81.5487C83.608 81.5428 83.6134 81.5355 83.6172 81.5273C83.6209 81.5191 83.6229 81.5101 83.6229 81.5011V80.544Z"
                                      fill="white"></path>
                            </svg>
                        </a>
                        <a href="https://sweet.tv/collections/5168-zustrichay-paramount-pictures" rel="nofollow">
                            <svg width="107" height="81" viewBox="0 0 107 81" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M92.4361 76.4056L76.6158 55.0942C75.5479 53.665 74.0947 52.569 72.4261 51.9345C71.1518 51.4487 69.9991 50.6908 69.0484 49.7138L63.5658 44.1032C63.0272 43.5488 62.319 43.1895 61.5532 43.082C60.7989 42.9755 60.1 42.626 59.5626 42.0868L57.6683 40.1825C57.14 39.6461 56.5083 39.2222 55.8115 38.9365C55.1146 38.6508 54.3669 38.5092 53.6137 38.5203C52.8605 38.5313 52.1174 38.6948 51.4292 39.0008C50.741 39.3068 50.122 39.749 49.6098 40.3007L42.4453 47.9237C41.8807 48.5071 41.1156 48.8548 40.3044 48.8969L39.5727 48.9329C38.7268 48.977 37.9289 49.3574 37.3516 49.9942L14.441 75.088C11.4187 68.8553 9.85509 62.0176 9.86852 55.0922C9.86852 30.2687 29.5257 10.1448 53.7733 10.1448C78.021 10.1448 97.6781 30.2687 97.6781 55.0922C97.6781 62.8034 95.7798 70.064 92.4361 76.4056ZM32.4644 32.187C32.9295 32.3452 33.4346 32.4233 33.9839 32.4233C34.91 32.4233 35.7439 32.163 36.4896 31.6404C37.2354 31.1198 37.8227 30.463 38.2537 29.678C38.6867 28.8891 38.9252 28.0361 38.9733 27.111C39.0261 26.2115 38.8045 25.3171 38.3379 24.5459C37.8668 23.759 37.1091 23.1042 36.0667 22.5836C35.0223 22.059 33.6211 21.7987 31.865 21.7987C29.5188 21.7664 27.236 22.5596 25.4162 24.0393C24.5998 24.6976 23.8899 25.4777 23.3114 26.3521C22.7628 27.1689 22.3272 28.0559 22.0164 28.9892C21.7257 29.8803 21.5754 30.7613 21.5694 31.6284C21.5614 32.4954 21.7017 33.2663 21.9924 33.9411C22.283 34.6139 22.7301 35.1566 23.3354 35.567C23.9368 35.9755 24.7026 36.1818 25.6287 36.1818C26.0056 36.1818 26.3744 36.1177 26.7352 35.9875C27.0961 35.8594 27.4168 35.6832 27.6995 35.4589C27.9821 35.2326 28.2086 34.9643 28.381 34.652C28.5534 34.3376 28.6416 33.9892 28.6416 33.6027C28.6416 33.024 28.4752 32.6075 28.1465 32.3492C27.8373 32.0996 27.4494 31.9676 27.052 31.9768C26.6552 31.9835 26.2712 32.1184 25.9575 32.3612C25.7978 32.479 25.6694 32.634 25.5834 32.8127C25.4975 32.9914 25.4566 33.1883 25.4643 33.3864C25.9494 33.3864 26.3002 33.4786 26.5107 33.6628C26.7232 33.849 26.8315 34.0532 26.8415 34.2775C26.8488 34.5037 26.7684 34.7239 26.617 34.8922C26.5428 34.9816 26.4491 35.053 26.3432 35.1009C26.2373 35.1487 26.1218 35.1719 26.0056 35.1686C25.4563 35.1686 25.0133 34.8642 24.6765 34.2535C24.3377 33.6427 24.1353 32.8798 24.0631 31.9648C23.9986 30.9673 24.0742 29.9657 24.2876 28.9892C24.5081 27.9219 24.899 26.9288 25.4643 26.0137C26.036 25.0912 26.8081 24.309 27.7235 23.725C28.6657 23.1142 29.8083 22.8099 31.1594 22.8099C32.1617 22.8099 33.0056 22.9661 33.6892 23.2784C34.2445 23.5347 34.7116 23.8431 35.0964 24.2095C35.2368 24.3437 35.361 24.4899 35.4773 24.6441L35.5715 24.7662C35.6417 24.8603 35.7119 24.9564 35.772 25.0565C36.1388 25.6573 36.3634 26.32 36.4435 27.0389C36.5297 27.8198 36.4816 28.5447 36.3032 29.2195C36.1208 29.8943 35.8341 30.457 35.4412 30.9055C35.0503 31.356 34.5873 31.5803 34.0541 31.5803C33.8395 31.5791 33.626 31.5509 33.4186 31.4962C33.1818 31.4328 32.9515 31.347 32.731 31.2399C33.2422 29.5018 33.9177 27.6656 35.1085 25.9196C32.6829 27.3312 31.6084 29.7581 31.0572 31.5062C30.5059 33.2563 27.7215 40.6511 23.7524 40.6511C22.702 40.6511 21.9302 40.3908 21.3629 40.0063C21.1065 39.8279 20.8976 39.5896 20.7543 39.3122C20.6111 39.0348 20.5379 38.7266 20.541 38.4144C20.541 38.2162 20.6533 38.036 20.8317 37.9619C21.1264 37.8397 21.5393 37.5714 21.5393 37.0308C21.5393 36.1918 20.2784 35.2326 19.5628 36.4741C18.8451 37.7156 19.5628 40.2566 22.2089 40.9895C24.8549 41.7223 29.0445 39.9743 30.6983 37.3211C31.5242 35.9995 31.9232 34.1854 32.4644 32.187ZM78.8589 35.7513C78.8709 35.9955 78.911 36.2118 78.9792 36.4C79.1917 37.0067 79.6086 37.3111 80.2301 37.3111C80.6169 37.3111 80.9958 37.1349 81.3687 36.7805C81.7637 36.4005 82.1147 35.9773 82.4151 35.519C82.7378 35.0324 83.0245 34.5238 83.273 33.9932C83.5216 33.4645 83.708 33.03 83.8323 32.6916H83.5016C83.3733 32.9665 83.2382 33.2383 83.0966 33.5066C82.9052 33.8758 82.6978 34.2365 82.4752 34.5879C82.2682 34.9207 82.0335 35.2355 81.7736 35.529C81.531 35.7993 81.3065 35.9335 81.1001 35.9335C80.8796 35.9335 80.7653 35.7533 80.7593 35.3928C80.7513 35.0324 80.8655 34.4918 81.1001 33.7709L82.1144 30.3388H83.688V29.3837H82.383C82.5213 28.9332 82.6476 28.4986 82.7659 28.0821C82.8821 27.6636 82.9904 27.2932 83.0866 26.9688L83.3973 25.9076H81.5331L80.4987 29.3837H79.4643V30.3388H80.21L79.1756 33.7709C79.0293 34.2555 78.9331 34.692 78.887 35.0805C78.772 35.3211 78.5878 35.5219 78.3578 35.6571C78.1172 35.7853 77.9388 35.8474 77.8285 35.8474C77.608 35.8474 77.5258 35.6872 77.58 35.3608C77.6361 35.0364 77.7504 34.6339 77.9208 34.1534L78.4921 32.5735C78.6985 32.0028 78.8509 31.4762 78.9471 30.9956C79.0433 30.515 79.0413 30.1126 78.9371 29.7862C78.8328 29.4618 78.5602 29.2996 78.1192 29.2996C77.7522 29.303 77.3978 29.434 77.1169 29.67C76.7777 29.9475 76.4806 30.2726 76.2349 30.6352L76.6278 29.2996H74.7435L73.0396 35.1365C72.9222 35.3603 72.7497 35.5504 72.5384 35.6892C72.2979 35.8374 72.1154 35.8894 71.9911 35.8494C71.9352 35.8344 71.8827 35.8085 71.8368 35.7733C71.7867 35.7392 71.7526 35.6752 71.7326 35.5831C71.7121 35.4567 71.7155 35.3277 71.7426 35.2026C71.7844 34.9837 71.84 34.7677 71.909 34.5558L72.2918 33.2643L72.819 31.5042C73.0275 30.8274 73.248 30.0925 73.4806 29.3016H71.6183L70.0246 34.5558L69.9845 34.704C69.8778 34.9792 69.742 35.2424 69.5796 35.4889C69.4192 35.7292 69.299 35.8494 69.2188 35.8494C69.1486 35.8494 69.0985 35.7693 69.0624 35.6051C69.0283 35.4449 69.0925 35.0945 69.2589 34.5558L69.6317 33.2643C69.7981 32.6836 69.9705 32.0969 70.1489 31.5042C70.3414 30.8274 70.5558 30.0925 70.7904 29.3016H68.9261L67.3745 34.5558C67.2287 35.0049 67.1451 35.4718 67.126 35.9435C67.126 36.3039 67.1761 36.5842 67.2723 36.7805C67.3522 36.9626 67.4953 37.1098 67.6752 37.195C67.9002 37.302 68.1525 37.3381 68.3985 37.2984C68.6445 37.2587 68.8726 37.1451 69.0524 36.9727C69.301 36.7464 69.5415 36.414 69.7761 35.9755C69.7761 36.2438 69.8041 36.4641 69.8602 36.6323C69.9005 36.7752 69.9753 36.906 70.0781 37.0132C70.1808 37.1204 70.3084 37.2007 70.4496 37.247C70.5797 37.2893 70.7157 37.311 70.8525 37.3111C71.069 37.3063 71.2828 37.2629 71.484 37.183C71.7125 37.0989 71.943 36.9627 72.1776 36.7705C72.3773 36.6049 72.56 36.4197 72.7228 36.2178L72.384 37.3752H74.2684L75.5714 32.9239C75.6696 32.6836 75.7718 32.4373 75.8841 32.183C75.9943 31.9287 76.1046 31.6984 76.2148 31.4942C76.3101 31.3107 76.428 31.1399 76.5656 30.9856C76.6899 30.8514 76.8062 30.7833 76.9184 30.7833C77.0688 30.7833 77.1049 30.9455 77.0207 31.2699C76.9124 31.6787 76.7853 32.0823 76.6398 32.4794C76.4654 32.9599 76.283 33.4806 76.0906 34.0472C75.9113 34.5566 75.7798 35.0815 75.6977 35.6151C75.6275 36.0957 75.6556 36.4981 75.7778 36.8225C75.9041 37.1489 76.1988 37.3111 76.6699 37.3111C76.8503 37.3111 77.0528 37.2691 77.2813 37.183C77.5078 37.0989 77.7423 36.9627 77.9829 36.7705C78.334 36.487 78.6308 36.1424 78.8589 35.7533V35.7513ZM61.2826 35.6792C61.3026 35.8334 61.3307 35.9795 61.3728 36.1137C61.483 36.4741 61.6835 36.7565 61.9741 36.9607C62.2628 37.1669 62.6697 37.2691 63.195 37.2691C63.5658 37.2691 63.9467 37.1669 64.3336 36.9607C64.7184 36.7565 65.0873 36.4741 65.4401 36.1137C65.7929 35.7533 66.1137 35.3288 66.4023 34.8422C66.693 34.3536 66.9195 33.835 67.0859 33.2843C67.2382 32.7337 67.3405 32.213 67.3966 31.7265C67.4563 31.3015 67.4283 30.8688 67.3144 30.455C67.2165 30.1119 67.0044 29.8124 66.713 29.6059C66.4224 29.4017 66.0154 29.2996 65.4902 29.2996C65.1053 29.2996 64.7144 29.4017 64.3215 29.6059C63.9067 29.8281 63.5298 30.1147 63.205 30.455C62.8522 30.8154 62.5354 31.2379 62.2528 31.7265C61.9685 32.2154 61.7489 32.739 61.5993 33.2843C61.4425 33.8434 61.3338 34.4148 61.2745 34.9924C61.1162 35.3167 60.9338 35.539 60.7213 35.6571C60.55 35.7662 60.3545 35.8315 60.152 35.8474C59.9435 35.8474 59.8673 35.6872 59.9234 35.3608C59.9776 35.0364 60.0918 34.6339 60.2642 34.1534L60.8335 32.5735C61.04 32.0028 61.1883 31.4762 61.2785 30.9956C61.3688 30.515 61.3627 30.1126 61.2585 29.7862C61.1543 29.4618 60.8816 29.2996 60.4406 29.2996C60.0927 29.3057 59.7571 29.4292 59.4884 29.65C59.1589 29.9096 58.8662 30.2127 58.6184 30.5511C58.6465 30.0565 58.5703 29.7241 58.3919 29.5539C58.2068 29.382 57.9609 29.2906 57.7084 29.2996C57.4089 29.3025 57.1172 29.3945 56.8704 29.5639C56.5856 29.7547 56.3309 29.9869 56.1147 30.2527L56.4034 29.2996H54.519L52.8231 35.1606C52.707 35.3743 52.5397 35.5559 52.336 35.6892C52.0955 35.8374 51.899 35.8894 51.7467 35.8494C51.6364 35.8213 51.5602 35.7312 51.5181 35.5831C51.4781 35.4349 51.5382 35.0925 51.7046 34.5558L52.0774 33.2943L52.5746 31.6103C52.767 30.9455 52.9755 30.2387 53.196 29.4898C52.7191 29.2743 52.192 29.194 51.6725 29.2575C51.0846 29.3237 50.5153 29.5039 49.9967 29.7882C49.4809 30.0678 49.0094 30.422 48.5974 30.8394C48.4324 30.9049 48.259 30.9467 48.0823 30.9636C47.8773 30.989 47.6704 30.9361 47.5029 30.8154C47.318 30.6643 47.1906 30.4544 47.1421 30.2207C47.0639 29.9464 47.0679 29.5539 47.1501 29.0453L45.37 30.2527L45.6607 29.2996H43.7764L42.0704 35.1385C41.9534 35.3613 41.7816 35.5507 41.5713 35.6892C41.3308 35.8374 41.1343 35.8894 40.982 35.8494C40.8717 35.8213 40.7955 35.7312 40.7534 35.5831C40.7133 35.4349 40.7735 35.0925 40.9399 34.5558L41.3127 33.2943L41.8099 31.6103C42.0023 30.9455 42.2108 30.2387 42.4313 29.4898C41.9544 29.2743 41.4273 29.194 40.9078 29.2575C40.3199 29.3237 39.7506 29.5039 39.2319 29.7882C38.6392 30.1111 38.104 30.53 37.6483 31.0276C37.131 31.5899 36.7176 32.2394 36.4275 32.9459C36.1482 33.566 35.93 34.2119 35.776 34.8742C35.6665 35.3213 35.6279 35.7828 35.6617 36.2418C35.7018 36.6023 35.8141 36.8706 35.9925 37.0468C36.1729 37.223 36.3934 37.3111 36.654 37.3111C37.0289 37.3111 37.4077 37.201 37.7946 36.9827C38.1795 36.7625 38.5183 36.4981 38.809 36.1878C38.835 36.6403 38.9593 36.9407 39.1818 37.0888C39.3879 37.232 39.6325 37.3095 39.8834 37.3111C40.0638 37.3111 40.2683 37.2691 40.4948 37.185C40.7234 37.0989 40.9559 36.9607 41.1985 36.7705C41.3929 36.6183 41.5793 36.4301 41.7597 36.2058L41.417 37.3732H43.3013L45.1215 31.1017C45.1776 31.5543 45.3119 31.8887 45.5264 32.1069C45.6295 32.2147 45.7559 32.2976 45.8958 32.3493C46.0358 32.401 46.1857 32.4201 46.3342 32.4053C46.657 32.3833 47.0278 32.2411 47.4408 31.9808C47.6032 31.8766 47.7695 31.7525 47.9359 31.6083C47.6493 32.0068 47.4007 32.4513 47.1922 32.9459C46.9129 33.566 46.6947 34.2119 46.5407 34.8742C46.4312 35.3213 46.3926 35.7828 46.4265 36.2418C46.4665 36.6023 46.5788 36.8706 46.7572 37.0468C46.9376 37.223 47.1581 37.3111 47.4187 37.3111C47.7916 37.3111 48.1725 37.201 48.5573 36.9827C48.9442 36.7625 49.283 36.4981 49.5717 36.1878C49.5997 36.6403 49.724 36.9407 49.9445 37.0888C50.1517 37.2328 50.3978 37.3103 50.6502 37.3111C50.8286 37.3111 51.031 37.2691 51.2596 37.185C51.4881 37.0989 51.7206 36.9607 51.9632 36.7705C52.1556 36.6203 52.34 36.4341 52.5184 36.2098L52.1817 37.3752H54.0459L55.6797 31.7785C55.8108 31.5301 55.956 31.2894 56.1147 31.0577C56.251 30.8614 56.3953 30.7693 56.5497 30.7833C56.5962 30.793 56.6392 30.8152 56.674 30.8474C56.7 30.8755 56.7101 30.9315 56.704 31.0156C56.6895 31.1414 56.6654 31.2659 56.6319 31.3881C56.5918 31.5483 56.5276 31.7725 56.4455 32.0549L56.2811 32.6055C56.2109 32.8318 56.1388 33.0841 56.0626 33.3584C55.9864 33.6347 55.9042 33.9191 55.814 34.2174C55.7238 34.5138 55.6396 34.8101 55.5554 35.1065C55.3489 35.7853 55.1344 36.5202 54.9139 37.3111H56.7782L58.3298 32.0549L58.3919 31.8426C58.5443 31.5463 58.6926 31.296 58.8369 31.0917C58.9813 30.8855 59.1176 30.7833 59.2399 30.7833C59.3501 30.7833 59.3962 30.8755 59.3762 31.0597C59.3561 31.2419 59.296 31.4902 59.1998 31.8006C59.1016 32.1109 58.9813 32.4613 58.8369 32.8498C58.6926 33.2383 58.5543 33.6367 58.424 34.0472C58.2972 34.4408 58.1901 34.8404 58.1033 35.2447C58.0238 35.5884 57.9921 35.9415 58.009 36.2939C58.0291 36.6043 58.1193 36.8526 58.2777 37.0348C58.438 37.219 58.6946 37.3111 59.0534 37.3111C59.2339 37.3111 59.4363 37.2691 59.6648 37.183C59.8934 37.0989 60.1239 36.9627 60.3584 36.7705C60.7269 36.4624 61.0395 36.0933 61.2826 35.6792ZM38.8711 35.2547C38.7609 35.3408 38.6225 35.4349 38.4562 35.541C38.3228 35.6366 38.165 35.6922 38.0011 35.7012C37.8207 35.7012 37.7145 35.571 37.6804 35.3087C37.6489 34.9752 37.6692 34.6389 37.7405 34.3115C37.8187 33.9111 37.941 33.4786 38.1154 33.02C38.2878 32.5595 38.4762 32.1289 38.6847 31.7265C38.8912 31.324 39.1117 30.9916 39.3462 30.7313C39.5807 30.471 39.8073 30.3388 40.0278 30.3388C40.112 30.3388 40.1941 30.3528 40.2783 30.3789L39.0555 34.5558C38.9801 34.7856 38.9186 35.0196 38.8711 35.2567V35.2547ZM49.6358 35.2547C49.5014 35.3556 49.3629 35.4511 49.2209 35.541C49.0875 35.6366 48.9297 35.6922 48.7658 35.7012C48.5854 35.7012 48.4792 35.571 48.4451 35.3087C48.4137 34.9752 48.4339 34.6389 48.5052 34.3115C48.5814 33.9111 48.7057 33.4786 48.8801 33.02C49.0505 32.5595 49.2409 32.1289 49.4494 31.7265C49.6559 31.324 49.8764 30.9916 50.1109 30.7313C50.3455 30.471 50.572 30.3388 50.7925 30.3388C50.8767 30.3388 50.9589 30.3528 51.043 30.3789L49.8202 34.5558C49.7449 34.7856 49.6833 35.0196 49.6358 35.2567V35.2547ZM63.5257 36.378C63.3734 36.378 63.2852 36.2298 63.2571 35.9335C63.2319 35.5583 63.2488 35.1816 63.3072 34.8101C63.3694 34.3576 63.4676 33.875 63.5979 33.3584C63.7282 32.8438 63.8785 32.3572 64.0529 31.9067C64.2253 31.4541 64.4077 31.0797 64.6022 30.7833C64.7946 30.487 64.9811 30.3388 65.1595 30.3388C65.3399 30.3388 65.4421 30.487 65.4702 30.7833C65.4982 31.0797 65.4782 31.4541 65.41 31.9067C65.3327 32.3966 65.2256 32.8814 65.0893 33.3584C64.9522 33.8504 64.7896 34.335 64.6022 34.8101C64.4218 35.2627 64.2393 35.6371 64.0529 35.9315C63.8665 36.2318 63.6921 36.378 63.5257 36.378ZM48.2146 0.961914L49.2229 3.28067L51.6885 3.01636L49.8463 4.71437L50.8566 7.03313L48.7077 5.76362L46.8655 7.46364L47.3806 4.98069L45.2337 3.71118L47.6994 3.44486L48.2146 0.961914ZM38.2276 3.04239L39.6509 5.12086L42.0223 4.37998L40.5309 6.40638L41.9522 8.48686L39.6068 7.65987L38.1154 9.68828L38.1575 7.14927L35.8121 6.32228L38.1855 5.5814L38.2276 3.04239ZM28.812 7.03513L30.5961 8.79722L32.7871 7.60581L31.6986 9.88852L33.4827 11.6506L31.0271 11.2982L29.9406 13.5809L29.5096 11.0799L27.054 10.7275L29.243 9.5341L28.812 7.03513Z"
                                      fill="white"></path>
                                <path d="M20.313 12.7945L22.3938 14.1761L24.3182 12.5782L23.6767 15.0311L25.7575 16.4128L23.2818 16.5469L22.6403 18.9978L21.7503 16.629L19.2746 16.7612L21.201 15.1633L20.313 12.7945ZM13.0443 20.1072L15.3436 21.0583L16.9372 19.114L16.7649 21.645L19.0641 22.5961L16.6586 23.2108L16.4842 25.7438L15.1692 23.5913L12.7637 24.204L14.3573 22.2617L13.0443 20.1072ZM7.27106 28.7054L9.70665 29.1899L10.9094 26.9693L11.2101 29.4883L13.6437 29.9729L11.3985 31.0461L11.6992 33.5651L10.0073 31.7089L7.76218 32.7822L8.96294 30.5616L7.27106 28.7054ZM3.20773 38.2747H5.68742L6.45318 35.8599L7.22094 38.2727H9.70063L7.69403 39.7665L8.45979 42.1794L6.45518 40.6876L4.44657 42.1794L5.21433 39.7665L3.20773 38.2747ZM1.00267 48.4588L3.43625 47.9743L3.73694 45.4553L4.9397 47.6759L7.3753 47.1913L5.68341 49.0475L6.88617 51.2682L4.63901 50.1949L2.94713 52.0511L3.24782 49.5321L1.00267 48.4588ZM0.736053 58.8892L3.03333 57.9381L2.86093 55.4051L4.45459 57.3494L6.75387 56.4003L5.44085 58.5528L7.03451 60.4971L4.62899 59.8824L3.31397 62.035L3.14158 59.504L0.736053 58.8892ZM2.41591 69.1795L4.49669 67.7978L3.85521 65.3449L5.78164 66.9428L7.86241 65.5612L6.97237 67.93L8.9008 69.5279L6.42311 69.3937L5.53507 71.7645L4.8936 69.3116L2.41591 69.1795ZM5.98611 78.9511L7.7702 77.189L6.68371 74.9063L8.87273 76.0997L10.6568 74.3356L10.2258 76.8346L12.4149 78.028L9.95923 78.3804L9.52824 80.8814L8.44174 78.5987L5.98611 78.9511ZM58.5247 0.962402L57.5144 3.28116L55.0487 3.01684L56.893 4.71486L55.8827 7.03362L58.0296 5.76411L59.8738 7.46413L59.3566 4.98118L61.5056 3.71167L59.0399 3.44535L58.5247 0.962402ZM68.5097 3.04287L67.0864 5.12134L64.7169 4.38046L66.2084 6.40687L64.7851 8.48734L67.1305 7.66036L68.6239 9.68877L68.5798 7.14975L70.9252 6.32277L68.5537 5.58189L68.5097 3.04287ZM77.9253 7.03562L76.1412 8.79771L73.9521 7.6063L75.0386 9.88901L73.2545 11.6511L75.7102 11.2987L76.7987 13.5814L77.2297 11.0804L79.6833 10.728L77.4943 9.53459L77.9253 7.03562ZM86.4248 12.7945L84.344 14.1761L82.4176 12.5782L83.0591 15.0311L80.9783 16.4128L83.456 16.5469L84.0974 18.9978L84.9855 16.629L87.4632 16.7612L85.5347 15.1633L86.4248 12.7945ZM93.6935 20.1072L91.3942 21.0583L89.8005 19.114L89.9729 21.645L87.6736 22.5961L90.0792 23.2108L90.2516 25.7438L91.5666 23.5913L93.9721 24.204L92.3784 22.2617L93.6935 20.1072ZM99.4647 28.7054L97.0311 29.1899L95.8284 26.9693L95.5277 29.4883L93.0921 29.9729L95.3392 31.0461L95.0386 33.5651L96.7284 31.7089L98.9756 32.7822L97.7728 30.5616L99.4647 28.7054ZM103.528 38.2747H101.05L100.283 35.8599L99.5168 38.2727H97.0371L99.0417 39.7665L98.276 42.1794L100.283 40.6876L102.289 42.1794L101.523 39.7665L103.528 38.2747ZM105.733 48.4588L103.302 47.9743L102.999 45.4553L101.796 47.6759L99.3625 47.1913L101.054 49.0475L99.8516 51.2682L102.099 50.1949L103.791 52.0511L103.488 49.5321L105.733 48.4588ZM106.002 58.8892L103.702 57.9381L103.875 55.4051L102.281 57.3494L99.9819 56.4003L101.297 58.5528L99.7033 60.4971L102.109 59.8824L103.424 62.035L103.596 59.504L106.002 58.8892ZM104.32 69.1795L102.239 67.7978L102.881 65.3449L100.956 66.9428L98.8754 65.5612L99.7634 67.93L97.837 69.5279L100.313 69.3937L101.201 71.7645L101.842 69.3116L104.32 69.1795ZM100.752 78.9511L98.9676 77.189L100.054 74.9063L97.865 76.0997L96.0809 74.3356L96.5119 76.8346L94.3209 78.028L96.7765 78.3804L97.2075 80.8814L98.296 78.5987L100.752 78.9511Z"
                                      fill="white"></path>
                                <path d="M21.3973 74.5881C23.909 70.6434 28.678 64.4039 31.292 61.9731C31.5446 61.7388 31.9255 62.0411 31.7691 62.3535L29.564 66.7207C29.125 67.5917 28.3974 68.2745 27.5113 68.645C26.8298 68.9313 26.2364 69.4019 25.7974 70.0066L22.1129 75.0987C22.0884 75.1318 22.0594 75.1615 22.0267 75.1868C21.6378 75.4911 21.1307 75.0086 21.3973 74.5881ZM43.053 55.2631C42.4476 55.8818 41.6117 57.1593 41.0985 57.9843C40.7878 58.4829 40.3267 58.8654 39.7855 59.0716C39.1959 59.2998 38.7055 59.7279 38.4003 60.281L35.6039 65.307C35.4475 65.5874 35.646 65.9358 35.9627 65.9358C36.2795 65.9358 36.4779 66.2902 36.3155 66.5705L34.6878 69.3939C34.3391 70.0008 34.1559 70.6885 34.1566 71.3882C34.1568 71.9402 34.0429 72.4863 33.8218 72.9922L32.2883 76.4963L35.0787 73.6429C35.4036 73.3089 35.5849 72.8612 35.5839 72.3954C35.5839 72.0651 35.6741 71.7427 35.8445 71.4623L37.4882 68.7711C37.5754 68.6259 37.6988 68.5056 37.8464 68.4221C37.9939 68.3386 38.1606 68.2946 38.3302 68.2946C38.6709 68.2946 38.9877 68.1144 39.1681 67.818L41.758 63.5429C42.0948 62.9883 42.2131 62.3215 42.0868 61.6807L41.8542 60.4913C41.7741 60.0828 41.7941 59.6603 41.9084 59.2618L43.051 55.2631H43.053ZM54.9764 46.4967L56.1992 50.3212C56.3126 50.6753 56.3533 51.0487 56.3189 51.4189C56.2844 51.7891 56.1755 52.1486 55.9987 52.4758C55.6559 53.1085 55.5737 53.8574 55.7722 54.5502L57.7187 61.3563C57.9572 62.1893 58.5606 62.8581 59.3544 63.1685C60.026 63.4288 60.5692 63.9534 60.8619 64.6242L66.9759 78.5808C67.3207 79.3617 68.0825 79.8663 68.9204 79.8663C68.9444 79.8663 68.9605 79.8423 68.9505 79.8203L67.0401 75.1287C66.9609 74.935 66.9397 74.7225 66.9792 74.517C67.0187 74.3115 67.1172 74.1219 67.2626 73.9713C67.4335 73.7947 67.539 73.565 67.5616 73.3203C67.5842 73.0757 67.5226 72.8306 67.3869 72.6257L65.5226 69.8324C65.0409 69.1097 64.685 68.3109 64.4702 67.4696L63.7626 64.7123C63.7092 64.5039 63.7104 64.2852 63.7658 64.0773C63.8213 63.8694 63.9292 63.6792 64.0793 63.5249C64.2692 63.3282 64.3899 63.0751 64.4231 62.8038C64.4564 62.5325 64.4005 62.2578 64.2637 62.0211L55.227 46.3805C55.1428 46.2344 54.9263 46.3365 54.9764 46.4967ZM62.9286 50.994L69.1629 63.3387C69.5438 64.0916 70.037 64.7804 70.6223 65.3811L73.6212 68.4447C73.7466 68.5744 73.8966 68.6777 74.0626 68.7485C74.2285 68.8193 74.4069 68.8563 74.5874 68.8572C74.9943 68.8572 75.3792 69.0415 75.6398 69.3598L82.3673 77.6197L76.578 67.5277C76.5336 67.4507 76.5058 67.3654 76.4965 67.2771C76.4871 67.1888 76.4965 67.0995 76.5238 67.015C76.5627 66.8961 76.5653 66.7683 76.5314 66.6478C76.4975 66.5273 76.4286 66.4196 76.3334 66.3382L71.4061 62.1933C71.2094 62.0264 71.0515 61.8186 70.9435 61.5845C70.8355 61.3504 70.7799 61.0955 70.7807 60.8377V60.281C70.782 59.8378 70.6176 59.4101 70.3196 59.0816L62.9286 50.992V50.994ZM75.7882 60.0247L80.1181 64.3299C80.6192 64.8264 80.954 65.4692 81.0803 66.168C81.1685 66.6446 81.3549 67.0971 81.6236 67.4956L84.2937 71.4343C84.3779 71.5584 84.2135 71.6986 84.1093 71.5945L77.5342 64.8685C77.1469 64.4685 76.9311 63.9332 76.9328 63.3767V63.0483C76.9328 62.6599 76.8265 62.2774 76.6261 61.945L75.5777 60.1969C75.4935 60.0588 75.6739 59.9126 75.7882 60.0247Z"
                                      fill="white"></path>
                            </svg>
                        </a>
                        <a href="javascript:void(0);" rel="nofollow">
                            <svg width="57" height="84" viewBox="0 0 57 84" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.99844 71.3533C11.0251 70.98 11.9118 70.0653 11.9584 68.9547C11.9398 68.0773 11.4824 67.2373 10.6984 66.8173C8.6171 65.9213 6.08777 66.108 3.84777 65.5667C3.70777 65.52 3.42777 65.408 3.42777 65.0067C3.48377 64.0173 5.52777 63.896 6.80644 63.9893C8.20644 64.1387 9.8771 64.4 10.4091 65.884L11.5104 65.8653V63.168L10.3718 63.1493V63.7093L9.9611 63.5507C7.4691 62.384 3.2971 62.356 1.71044 64.0733C1.13177 64.5773 0.851771 65.4827 1.26244 66.2947C2.5131 68.5347 5.51844 68.0867 7.7771 68.488C8.43977 68.6093 9.10244 68.516 9.55044 69.0947C9.69044 69.384 9.67177 69.8133 9.3451 70.0187C7.98244 70.9053 5.91044 70.6813 4.42644 70.252C3.56777 69.9813 2.49444 69.3093 2.36377 68.348H1.26244V71.5493L2.38244 71.54L2.36377 70.812C4.51044 71.932 7.82377 72.156 9.99844 71.3533ZM45.1291 68.264V70.2893L43.7291 70.28V71.3813L49.2451 71.3907V70.28L47.7984 70.2893L47.7891 68.1333L51.2798 64.3067H52.7171V63.2147H48.2464L48.2371 64.3067H49.1051L46.8931 66.724L44.9798 64.3067H45.8664V63.2147H40.3318V64.3067H41.8811L45.1291 68.264ZM26.8264 64.3067H28.2078L28.2171 70.2987L26.8264 70.2893V71.3907L31.3531 71.3813V70.2987H29.9624V65.9773C32.1184 67.6947 34.1344 69.6267 36.2718 71.3813L37.8771 71.3907L37.8864 64.3067H39.2211V63.2147H34.7038V64.3067H36.0291V67.9653L30.6718 63.2147H26.8264V64.3067ZM25.7998 67.2467C25.7998 64.708 23.0184 62.6547 19.5838 62.6547C16.1491 62.6547 13.3678 64.708 13.3678 67.2467C13.3678 69.776 16.1491 71.8387 19.5838 71.8387C23.0184 71.8387 25.7998 69.776 25.7998 67.2467ZM23.2051 67.312C23.2051 69.1227 21.6184 70.588 19.6678 70.588C17.7171 70.588 16.1398 69.1227 16.1398 67.312C16.1398 65.5013 17.7171 64.036 19.6678 64.036C21.6184 64.036 23.2051 65.5013 23.2051 67.312ZM44.3918 76.524H44.2331L44.3918 76.5613V76.524ZM3.3251 77.196H4.6411C5.33177 77.196 5.54644 77.1773 5.91044 77.084C6.5731 76.9067 6.98377 76.4587 6.98377 75.8893C6.98377 75.4973 6.78777 75.152 6.4331 74.8907C6.0131 74.5733 5.6771 74.508 4.65044 74.508H1.09444V75.04H1.48644C1.94377 75.04 1.99977 75.096 2.01844 75.5533L2.02777 75.7773V78.204L2.01844 78.4373C1.99977 78.8853 1.94377 78.9507 1.48644 78.9507H1.09444V79.4733H4.12777V78.9507H3.86644C3.39977 78.9507 3.33444 78.8947 3.33444 78.4373L3.3251 78.204V77.196ZM3.3251 76.664V75.04H4.14644C5.13577 75.04 5.5651 75.2827 5.5651 75.8427C5.5651 76.44 5.18244 76.664 4.1091 76.664H3.3251ZM10.8478 78.9227H10.5584C10.0918 78.9227 10.0358 78.8667 10.0264 78.4187L10.0171 78.1853V75.7587L10.0264 75.5347C10.0358 75.0773 10.0918 75.0213 10.5584 75.0213H10.8478V74.4893H7.87977V75.0213H8.17844C8.6451 75.0213 8.7011 75.0773 8.71044 75.5347L8.71977 75.7587V78.1853L8.71044 78.4187C8.7011 78.876 8.6451 78.9227 8.17844 78.9227H7.92644V79.4547H10.8478V78.9227ZM17.2224 74.4893H16.4571L16.2144 75.0213C16.0838 74.9187 15.9718 74.8347 15.8598 74.76C15.4584 74.4987 15.0291 74.3773 14.4224 74.3773C12.6958 74.3773 11.4824 75.4413 11.4824 76.9533C11.4824 78.54 12.7051 79.5667 14.5718 79.5667C14.9638 79.5667 15.3184 79.5107 15.6264 79.436C16.0091 79.352 16.3451 79.1653 16.6158 78.9227C17.0358 78.5587 17.1664 78.26 17.2224 77.5507H16.4571C16.3731 77.9427 16.3358 78.0547 16.1864 78.2973C15.9158 78.7267 15.3744 78.9507 14.7024 78.9507C13.5638 78.9507 12.9851 78.316 12.9851 77.028C12.9851 75.6747 13.5544 75.0307 14.7398 75.0307C15.2438 75.0307 15.6451 75.1707 15.9718 75.4413C16.2798 75.7027 16.3918 75.9173 16.5038 76.44H17.2224V74.4893ZM18.2024 74.4893V76.524H18.8931V76.3747C18.8931 75.4787 19.4344 75.0213 20.5171 75.0213V78.4187C20.5078 78.876 20.4424 78.9227 19.9758 78.9227H19.7424V79.4547H22.6451V78.9227H22.3651C21.8891 78.9227 21.8331 78.876 21.8238 78.4187V75.0213C22.9811 75.0493 23.4664 75.488 23.4758 76.524H24.1944V74.4893H18.2024ZM24.8664 75.0213H24.9878C25.4451 75.0213 25.5104 75.0773 25.5198 75.5347L25.5291 75.7493V77.4853C25.5291 78.1107 25.5571 78.316 25.6971 78.624C25.9678 79.2307 26.8451 79.5573 28.0958 79.5573C28.8331 79.5573 29.4398 79.436 29.8878 79.184C30.1211 79.0533 30.3171 78.876 30.4291 78.6613C30.5318 78.484 30.5784 78.288 30.5878 78.064V75.5347C30.5971 75.0773 30.6531 75.0213 31.1198 75.0213H31.3251V74.4893H28.8424V75.0213H29.0664C29.5331 75.0213 29.5891 75.0773 29.6078 75.5347V77.4853C29.6078 78.204 29.5798 78.3067 29.3838 78.54C29.1784 78.764 28.7491 78.904 28.2544 78.904C27.7598 78.904 27.2838 78.7547 27.0691 78.54C26.8638 78.3253 26.8171 78.1667 26.8171 77.4853V75.7493L26.8264 75.5347C26.8451 75.0773 26.9011 75.0213 27.3771 75.0213H27.7691V74.4893H24.8664V75.0213ZM34.2091 77.1213H35.0771C35.3104 77.1213 35.6091 77.224 35.7958 77.364C36.0571 77.56 36.1038 77.7093 36.1224 78.4373C36.1504 79.212 36.5611 79.5573 37.4571 79.5573C38.3624 79.5573 38.6984 79.24 38.6984 78.3907C38.6984 78.3067 38.6984 78.2227 38.6891 78.0267H38.0544L38.0638 78.3253L38.0824 78.4C38.0824 78.7547 37.9984 78.8947 37.7744 78.8947C37.5691 78.8947 37.4758 78.792 37.4571 78.5867L37.4291 78.0827C37.4011 77.616 37.2144 77.3173 36.8504 77.14C36.6638 77.0467 36.5518 77.0187 36.1598 76.9533C36.7291 76.8693 36.9344 76.8133 37.2144 76.692C37.7278 76.496 37.9798 76.1787 37.9798 75.7307C37.9798 75.3107 37.7278 74.928 37.2704 74.704C36.9064 74.5173 36.7104 74.4893 35.9638 74.4893H32.0064V75.0213H32.3704C32.8371 75.0213 32.8931 75.0773 32.9024 75.5347L32.9118 75.7493V78.1853L32.9024 78.4187C32.8931 78.8667 32.8371 78.9227 32.3704 78.9227H32.0064V79.4547H34.9744V78.9227H34.7504C34.2838 78.9227 34.2278 78.8667 34.2184 78.4187L34.2091 78.1853V77.1213ZM34.2091 76.5893V75.0213H35.2451C36.1318 75.0213 36.5518 75.2733 36.5518 75.824C36.5518 76.3747 36.1878 76.5893 35.2544 76.5893H34.2091ZM45.3531 74.4893H39.4264V75.0213H39.6224C40.0144 75.0213 40.1171 75.0773 40.1451 75.32L40.1544 75.5813V78.4187C40.1451 78.876 40.0891 78.9227 39.6224 78.9227H39.4451V79.4547H45.3531V77.4667H44.6158C44.6158 77.5973 44.6064 77.7653 44.6064 77.8213C44.6064 78.064 44.5598 78.2693 44.3638 78.5027C44.0931 78.8387 43.8131 78.9227 43.0664 78.9227H41.4611V77.14H41.8718C42.5718 77.14 42.7864 77.392 42.7864 78.204H43.4584V75.6653H42.7864V75.7587C42.7864 76.3933 42.5624 76.6453 41.9931 76.6453C41.9651 76.6453 41.8531 76.6453 41.6571 76.636H41.4611V75.0213H43.0851C43.8038 75.0213 44.1678 75.152 44.3731 75.4973C44.5504 75.768 44.6158 76.0573 44.6251 76.5053H45.3531V74.4893ZM51.7278 74.4893H51.1584L50.8691 74.9373C50.7291 74.844 50.6078 74.7693 50.5051 74.704C50.1038 74.4893 49.6091 74.3773 48.9931 74.3773C47.5558 74.3773 46.6598 74.9653 46.6598 75.908C46.6598 76.1507 46.7438 76.3933 46.8931 76.5893C47.1544 76.9533 47.5278 77.112 48.4891 77.2613C49.4411 77.4107 50.0291 77.5227 50.4118 77.6253C50.8411 77.7373 51.0651 77.9427 51.0651 78.2227C51.0651 78.6707 50.5798 78.932 49.7491 78.932C49.1424 78.932 48.5824 78.764 48.1438 78.484C47.7238 78.176 47.5838 77.9427 47.4624 77.336H46.7811V79.4547H47.4624L47.6958 78.9227C47.8358 79.0253 47.9384 79.1187 48.0318 79.1653C48.4518 79.4267 49.0584 79.5667 49.7771 79.5667C51.2144 79.5667 52.1291 78.9693 52.1291 78.0173C52.1291 77.4667 51.8024 77.0467 51.1304 76.7573C50.6824 76.5707 50.2998 76.4773 49.2264 76.3187C48.0971 76.16 47.8264 76.0293 47.8264 75.656C47.8264 75.236 48.2744 74.984 49.0211 74.984C50.1598 74.984 50.9064 75.488 51.0838 76.384H51.7278V74.4893ZM12.0051 34.72C12.0611 34.6267 12.1358 34.2347 12.1171 33.4413L12.1078 18.5547L9.0931 19.936L9.07444 56.1587C9.13044 56.1587 12.1078 54.628 12.1078 54.628V39.1813C12.1358 38.724 12.0984 38.472 12.0051 38.3507C11.1558 37.3987 10.7918 37.212 12.0051 34.72ZM5.09844 58.0907L7.9171 56.7467V20.4773L5.10777 21.756L5.09844 58.0907ZM0.898438 60.06L3.81977 58.6133V22.428L0.898438 23.7347V60.06ZM50.2904 16.996C50.2718 15.344 50.8784 0 50.8784 0L49.0864 0.858667C49.0864 0.858667 50.1504 14.0653 50.0291 18.0133C49.8611 27.4773 49.3478 36.988 49.3478 36.988L51.1398 36.1293C51.1771 35.8773 50.3371 21.3173 50.2904 16.996ZM46.2678 18.9C46.3891 17.192 46.9678 1.86667 46.9678 1.86667L44.6344 2.996C44.6344 2.996 45.6051 15.4093 45.7918 19.6653C45.8011 21 45.2784 38.9387 45.2784 38.9387C45.2784 38.9387 46.4544 38.36 47.0238 38.108C47.0238 38.108 46.1091 21.1213 46.2678 18.9ZM41.8811 23.7347C41.7691 19.9827 42.5624 4.01333 42.5624 4.01333C41.7598 4.34933 40.9478 4.648 40.1824 5.13333C40.1824 5.13333 41.2558 18.9 41.3491 22.6707C41.3304 27.2907 40.9384 41.0013 40.9384 41.0013L42.8891 40.04C42.8891 40.04 41.9651 27.0387 41.8811 23.7347ZM37.4851 25.508C37.5598 21.7653 38.1758 6.048 38.1758 6.048L35.7398 7.21467C35.7398 7.21467 36.8598 22.456 36.8598 24.9387C36.8598 27.7293 36.3278 42.6627 36.3278 43.1947C36.3744 43.1107 38.5958 42.0653 38.5958 42.0653C38.5958 42.0653 37.4291 27.2907 37.4851 25.508ZM32.9864 27.7947C32.8371 22.2693 33.7331 8.428 33.7331 8.18533L30.9518 9.55733C30.9518 9.55733 32.4638 24.3693 32.2491 26.8333C32.3331 29.3253 31.6704 45.388 31.6704 45.388H31.7171L34.0971 44.268C34.0971 44.268 33.0238 31.0427 32.9864 27.7947ZM28.5438 27.4213C28.4971 24.108 29.4491 10.2667 29.4491 10.2667C28.3944 10.7427 27.3398 11.1907 26.3224 11.76C26.3318 12.1707 27.8064 24.808 27.7411 29.1293C27.9278 32.816 26.5744 47.8053 26.5744 47.8053L29.7664 46.284C29.7664 46.284 28.4971 34.2813 28.5438 27.4213ZM25.3238 12.18L21.8891 13.7853V21.3173C23.5504 28.728 22.7944 37.352 21.9731 43.7267C21.9638 43.9413 21.9731 50.0267 21.9731 50.0267L22.0384 49.98L25.4171 48.3747L24.9038 43.4933C23.5224 36.2507 23.6438 28.2707 24.4651 20.8693L25.3238 12.18ZM20.8904 14.3453L17.7358 15.7827V26.6C18.7438 32.1813 18.8838 35.2613 17.5864 40.712L17.5678 52.0987L20.8811 50.5493V43.68C19.0611 36.6707 19.4718 30.0907 20.8811 21.4387L20.8904 14.3453ZM16.4198 16.464H16.3638L13.1344 17.9947V33.628C13.1158 33.9267 13.2838 33.992 13.4611 34.2253C14.5344 35.5413 14.3944 36.3253 13.2184 37.94C13.1718 37.968 13.1064 38.416 13.1251 38.892L13.1344 54.2733L16.3171 52.7707V40.7493C14.7491 36.3067 15.4678 31.9947 16.4104 27.16L16.4198 16.464ZM54.6398 74.5453V76.5613H55.1158V75.5253C55.1158 75.3947 55.0971 75.1427 55.0784 74.928V74.8813H55.0971L55.1064 74.9187L55.1811 75.2267L55.2838 75.572L55.5731 76.5613H55.9651L56.2638 75.544L56.2918 75.4507C56.3011 75.404 56.3291 75.3013 56.3758 75.1427C56.4131 74.984 56.4131 74.9747 56.4411 74.8813H56.4598L56.4504 74.9187L56.4318 75.124L56.4224 75.3853V76.5613H56.8984V74.5453H56.1518L55.9464 75.2733L55.9278 75.3293C55.8998 75.4507 55.8344 75.712 55.8064 75.8987C55.7971 75.9733 55.7971 75.992 55.7878 76.048H55.7784C55.7691 75.992 55.7691 75.9827 55.7598 75.936C55.7504 75.8707 55.7411 75.7773 55.7038 75.6653C55.6758 75.4787 55.6384 75.348 55.6011 75.2453L55.5731 75.152L55.4051 74.5453H54.6398ZM52.8104 74.5453V74.872H53.3704V76.5613H53.8744V74.872H54.4438V74.5453H52.8104ZM1.04777 82.656C1.04777 83.4027 1.63577 84 2.36377 84C3.08244 84 3.6611 83.4027 3.6611 82.656C3.67044 81.9187 3.08244 81.3213 2.36377 81.3213C1.63577 81.3213 1.04777 81.9187 1.04777 82.656ZM3.0731 82.796C3.0451 83.1973 2.78377 83.4493 2.38244 83.4493C1.93444 83.4493 1.63577 83.1227 1.63577 82.6373C1.63577 82.1613 1.94377 81.8347 2.39177 81.8347C2.75577 81.8347 3.0451 82.0773 3.06377 82.3947H2.72777C2.69977 82.2173 2.57844 82.124 2.39177 82.124C2.13977 82.124 1.97177 82.32 1.97177 82.6373C1.97177 82.964 2.13044 83.16 2.38244 83.16C2.58777 83.16 2.7091 83.0293 2.7371 82.796H3.0731ZM11.5571 83.1507V83.1973C11.5571 83.748 11.7718 83.9907 12.2384 83.9907C12.7238 83.9907 12.9758 83.7293 12.9758 83.2347C12.9758 82.88 12.8451 82.684 12.5184 82.544L12.2851 82.4413C12.0331 82.3387 11.9398 82.2267 11.9398 82.0027C11.9398 81.7787 12.0518 81.648 12.2571 81.648C12.4718 81.648 12.5558 81.7693 12.5651 82.0587H12.9104V82.04C12.9104 81.5733 12.6864 81.34 12.2571 81.34C11.8278 81.34 11.5851 81.6107 11.5851 82.0587C11.5851 82.4133 11.7251 82.6187 12.0704 82.7587L12.2944 82.852C12.5278 82.9547 12.6024 83.0667 12.6024 83.2907C12.6024 83.5427 12.4811 83.692 12.2478 83.692C12.0144 83.692 11.9118 83.5333 11.9118 83.188V83.1507H11.5571ZM13.8624 83.9813C14.1331 83.9813 14.3384 83.8413 14.4224 83.5707C14.4784 83.384 14.5064 83.132 14.5064 82.7867C14.5064 82.4227 14.4784 82.208 14.4038 82.0213C14.3104 81.7787 14.1238 81.6573 13.8624 81.6573C13.6011 81.6573 13.4144 81.7693 13.3211 82.0027C13.2838 82.0867 13.2558 82.1893 13.2371 82.2827C13.2184 82.432 13.1998 82.628 13.1998 82.824C13.1998 83.6547 13.3864 83.9813 13.8624 83.9813ZM13.8531 81.928C14.1051 81.928 14.1798 82.152 14.1798 82.8427C14.1798 83.496 14.0958 83.72 13.8531 83.72C13.6104 83.72 13.5264 83.4867 13.5264 82.824C13.5264 82.152 13.6104 81.928 13.8531 81.928ZM14.7864 81.704V83.944H15.0851V82.7027C15.0851 82.46 15.0758 82.236 15.0478 82.0587H15.0664C15.0851 82.2173 15.1691 82.5067 15.2531 82.74C15.2718 82.7867 15.2718 82.8053 15.2811 82.8147L15.6638 83.944H16.0371V81.704H15.7478V82.9733C15.7478 83.1787 15.7571 83.4493 15.7664 83.58H15.7571C15.7027 83.3183 15.6342 83.0597 15.5518 82.8053L15.1691 81.704H14.7864ZM16.2051 81.704L16.7184 83.0667V83.944H17.0264V83.0667L17.5398 81.704H17.2038L16.9611 82.3947L16.9518 82.46L16.9144 82.5813C16.8958 82.6467 16.8864 82.6653 16.8771 82.74C16.8678 82.684 16.8584 82.6747 16.8398 82.5813C16.8024 82.46 16.8024 82.4413 16.7931 82.404L16.5504 81.704H16.2051ZM18.3984 81.3867V83.944H18.7624V82.8893H19.0331C19.4904 82.8893 19.7331 82.628 19.7331 82.1333C19.7331 81.8813 19.6678 81.6853 19.5371 81.5453C19.4344 81.424 19.2758 81.3867 19.0051 81.3867H18.3984ZM18.7531 81.6947H18.9304C19.2478 81.6947 19.3691 81.8067 19.3691 82.1333C19.3691 82.4507 19.2571 82.572 18.9584 82.572H18.7531V81.6947ZM19.9664 83.944H20.2744V81.704H19.9664V83.944ZM21.4784 83.1413C21.4691 83.5333 21.3758 83.72 21.1704 83.72C21.0304 83.72 20.9278 83.6173 20.8904 83.4307C20.8566 83.2397 20.841 83.0459 20.8438 82.852C20.8438 82.1613 20.9278 81.928 21.1704 81.928C21.3664 81.928 21.4598 82.0773 21.4598 82.3947H21.7678C21.7678 81.9 21.5718 81.6573 21.1704 81.6573C20.9371 81.6573 20.7598 81.76 20.6571 81.9653C20.5638 82.1333 20.5264 82.3947 20.5264 82.8333C20.5264 83.216 20.5544 83.4307 20.6198 83.608C20.7224 83.8693 20.8811 83.9907 21.1704 83.9907C21.3851 83.9907 21.5251 83.9253 21.6278 83.7853C21.7304 83.6267 21.7864 83.4213 21.7864 83.1787V83.1413H21.4784ZM21.8704 81.704V82.012H22.3464V83.944H22.6544V82.012H23.1211V81.704H21.8704ZM23.2704 81.704V83.2533C23.2704 83.5053 23.3078 83.6453 23.4011 83.776C23.5038 83.916 23.6531 83.9813 23.8678 83.9813C24.0918 83.9813 24.2504 83.916 24.3531 83.748C24.4464 83.6173 24.4744 83.4773 24.4744 83.188V81.704H24.1664V83.216C24.1664 83.5893 24.0824 83.72 23.8678 83.72C23.6624 83.72 23.5878 83.5987 23.5878 83.216V81.704H23.2704ZM24.7731 81.704V83.944H25.0811V82.964H25.2864C25.5758 82.964 25.6224 83.02 25.6318 83.4307L25.6411 83.6173C25.6411 83.7947 25.6598 83.888 25.6878 83.944H26.0518V83.9347C25.9771 83.888 25.9584 83.8227 25.9584 83.5893C25.9584 83.5427 25.9491 83.4773 25.9491 83.4027C25.9398 83.1787 25.9304 83.1133 25.8931 83.02C25.8558 82.908 25.7718 82.852 25.6411 82.8333C25.8464 82.768 25.9584 82.5813 25.9584 82.2827C25.9584 82.1053 25.9118 81.956 25.8091 81.844C25.7251 81.7413 25.6038 81.704 25.3704 81.704H24.7731ZM25.0811 81.9747H25.2958C25.5384 81.9747 25.6411 82.0773 25.6411 82.3293C25.6411 82.5813 25.5384 82.7027 25.2958 82.7027H25.0811V81.9747ZM26.2758 81.704V83.944H27.3584V83.636H26.5838V82.9173H27.2838V82.628H26.5838V82.0027H27.3211V81.704H26.2758ZM27.5264 83.244V83.2907C27.5264 83.7667 27.7038 83.9813 28.1238 83.9813C28.5438 83.9813 28.7584 83.7573 28.7584 83.3187C28.7584 83.0013 28.6464 82.8333 28.3664 82.712L28.1611 82.628C27.9371 82.5347 27.8624 82.4413 27.8624 82.2453C27.8624 82.0493 27.9558 81.928 28.1331 81.928C28.3198 81.928 28.3944 82.04 28.4038 82.3013H28.7118V82.2733C28.7118 81.872 28.5158 81.6667 28.1331 81.6667C27.7598 81.6667 27.5451 81.8907 27.5451 82.3013C27.5451 82.6093 27.6758 82.796 27.9651 82.908L28.1704 82.992C28.3664 83.076 28.4411 83.1787 28.4411 83.3653C28.4411 83.5987 28.3291 83.72 28.1331 83.72C27.9278 83.72 27.8251 83.58 27.8251 83.2813V83.244H27.5264ZM29.7571 81.3867V83.944H30.9984V83.5987H30.1118V82.7773H30.9144V82.4413H30.1118V81.7227H30.9611V81.3867H29.7571ZM31.2504 81.704V83.944H31.5491L31.5398 82.7027C31.5398 82.46 31.5304 82.236 31.5118 82.0587H31.5304C31.5491 82.2173 31.6331 82.5067 31.7171 82.74C31.7264 82.7867 31.7358 82.8053 31.7358 82.8147L32.1184 83.944H32.5011V81.704H32.2118V82.9733C32.2118 83.1787 32.2211 83.4493 32.2304 83.58H32.2211C32.1651 83.3373 32.0998 83.076 32.0064 82.8053L31.6331 81.704H31.2504ZM32.6784 81.704V82.012H33.1544V83.944H33.4624V82.012H33.9291V81.704H32.6784ZM34.1158 81.704V83.944H35.1984V83.636H34.4238V82.9173H35.1331V82.628H34.4238V82.0027H35.1704V81.704H34.1158ZM35.4318 81.704V83.944H35.7398V82.964H35.9358C36.2251 82.964 36.2718 83.02 36.2904 83.4307L36.2998 83.6173C36.3091 83.7947 36.3184 83.888 36.3464 83.944H36.7104V83.9347C36.6264 83.888 36.6171 83.8227 36.6078 83.5893C36.6078 83.5427 36.5984 83.4773 36.5984 83.4027C36.5891 83.1787 36.5891 83.1133 36.5424 83.02C36.5051 82.908 36.4304 82.852 36.2998 82.8333C36.5051 82.768 36.6171 82.5813 36.6171 82.2827C36.6171 82.1053 36.5704 81.956 36.4678 81.844C36.3744 81.7413 36.2531 81.704 36.0198 81.704H35.4318ZM35.7398 81.9747H35.9544C36.1971 81.9747 36.3091 82.0773 36.3091 82.3293C36.3091 82.5813 36.1878 82.7027 35.9544 82.7027H35.7398V81.9747ZM36.6918 81.704V82.012H37.1678V83.944H37.4851V82.012H37.9424V81.704H36.6918ZM38.2784 81.704L37.7371 83.944H38.0638L38.1944 83.384H38.7638L38.8851 83.944H39.2118L38.6891 81.704H38.2784ZM38.5211 82.18L38.5491 82.348L38.5678 82.4413L38.7078 83.104H38.2411L38.3904 82.4227C38.3904 82.404 38.3998 82.3853 38.4091 82.348C38.4278 82.2733 38.4371 82.2173 38.4464 82.1707C38.4651 82.04 38.4744 82.0213 38.4838 81.9467C38.4931 82.0307 38.4931 82.068 38.5211 82.18ZM39.3424 83.944H39.6598V81.704H39.3424V83.944ZM39.9678 81.704V83.944H40.2758L40.2664 82.7027C40.2664 82.46 40.2571 82.236 40.2478 82.0587H40.2571C40.2758 82.2173 40.3598 82.5067 40.4344 82.74C40.4531 82.7867 40.4531 82.8053 40.4624 82.8147L40.8544 83.944H41.2278V81.704H40.9291V82.9733C40.9291 83.1787 40.9384 83.4493 40.9571 83.58H40.9478C40.8918 83.3373 40.8264 83.076 40.7331 82.8053L40.3504 81.704H39.9678ZM41.5544 81.704V83.944H41.8531V82.6373C41.8531 82.4693 41.8344 82.18 41.8251 82.0213V81.9747H41.8438L41.8531 82.012L41.9091 82.3667L41.9838 82.684L41.9931 82.7587L42.2544 83.944H42.5158L42.7771 82.7587L42.8051 82.628C42.8424 82.4133 42.9171 82.0867 42.9358 81.9747H42.9451V82.012L42.9358 82.208L42.9264 82.544V83.944H43.2158V81.704H42.7398L42.5344 82.684L42.5158 82.7493C42.4878 82.88 42.4411 83.1413 42.4224 83.3373C42.4038 83.4213 42.4038 83.4493 42.3944 83.524L42.3851 83.5333C42.3851 83.4773 42.3851 83.4493 42.3758 83.3933C42.3664 83.3187 42.3478 83.216 42.3291 83.0853C42.3011 82.8893 42.2638 82.74 42.2358 82.628L42.2078 82.4787L42.0304 81.704H41.5544ZM43.5611 81.704V83.944H44.6344V83.636H43.8691V82.9173H44.5691V82.628H43.8691V82.0027H44.6064V81.704H43.5611ZM44.8864 81.704V83.944H45.1758V82.7027C45.1758 82.46 45.1664 82.236 45.1478 82.0587H45.1571C45.1851 82.2173 45.2598 82.5067 45.3438 82.74C45.3531 82.7867 45.3718 82.8053 45.3718 82.8147L45.7544 83.944H46.1278V81.704H45.8291L45.8384 82.9733C45.8384 83.1787 45.8478 83.4493 45.8664 83.58H45.8478C45.7934 83.3183 45.7248 83.0597 45.6424 82.8053L45.2598 81.704H44.8864ZM46.3144 81.704V82.012H46.7811V83.944H47.1078V82.012H47.5651V81.704H46.3144ZM48.4518 83.944H48.8064V81.3867H48.4518V83.944ZM49.1518 81.704V83.944H49.4504L49.4411 82.7027C49.4411 82.46 49.4318 82.236 49.4131 82.0587H49.4224C49.4504 82.2173 49.5251 82.5067 49.6091 82.74C49.6278 82.7867 49.6371 82.8053 49.6464 82.8147L50.0198 83.944H50.4024V81.704H50.0944L50.1038 82.9733C50.1038 83.1787 50.1131 83.4493 50.1318 83.58H50.1131C50.0587 83.3183 49.9902 83.0597 49.9078 82.8053L49.5251 81.704H49.1518ZM51.6064 83.1413C51.6064 83.5333 51.5131 83.72 51.3078 83.72C51.1678 83.72 51.0651 83.6173 51.0278 83.4307C51.0091 83.2907 50.9811 83.0947 50.9811 82.852C50.9811 82.1613 51.0651 81.928 51.3078 81.928C51.5038 81.928 51.5971 82.0773 51.5971 82.3947H51.9051C51.9051 81.9 51.7091 81.6573 51.3078 81.6573C51.0744 81.6573 50.9064 81.76 50.7944 81.9653C50.7011 82.1333 50.6638 82.3947 50.6638 82.8333C50.6638 83.216 50.6918 83.4307 50.7571 83.608C50.8598 83.8693 51.0278 83.9907 51.3078 83.9907C51.5318 83.9907 51.6624 83.9253 51.7651 83.7853C51.8678 83.6267 51.9144 83.4213 51.9144 83.1787V83.1413H51.6064ZM5.7051 83.6733H4.70644L4.88377 83.4493L5.13577 83.1133C5.21044 83.02 5.2851 82.9173 5.35977 82.8053C5.5931 82.46 5.63977 82.32 5.63977 82.04C5.63977 81.62 5.4251 81.3773 5.01444 81.3773C4.8091 81.3773 4.65977 81.424 4.54777 81.536C4.42644 81.6573 4.37977 81.8067 4.37044 82.0773H4.70644C4.7251 81.7507 4.79977 81.6387 4.99577 81.6387C5.21044 81.6387 5.32244 81.7693 5.32244 82.012C5.32244 82.2547 5.24777 82.432 5.0051 82.7773L4.6971 83.216L4.37044 83.6733V83.9533H5.7051V83.6733ZM7.26377 82.2453C7.26377 81.6013 7.08644 81.3773 6.58244 81.3773C6.33044 81.3773 6.1531 81.452 6.0411 81.6013C5.94777 81.7507 5.91977 81.8907 5.91977 82.3013V83.0667C5.91977 83.5333 5.9291 83.58 6.0411 83.748C6.14377 83.9067 6.33977 83.9813 6.6011 83.9813C6.8531 83.9813 7.03977 83.9067 7.15177 83.748C7.25444 83.5893 7.26377 83.552 7.26377 83.1133V82.2453ZM6.25577 82.2827C6.25577 81.7787 6.3211 81.6387 6.59177 81.6387C6.8531 81.6387 6.92777 81.788 6.92777 82.2453V83.0853C6.92777 83.5987 6.86244 83.72 6.58244 83.72C6.3211 83.72 6.25577 83.5987 6.25577 83.0667V82.2827ZM8.93444 82.2453C8.93444 81.6013 8.7571 81.3773 8.24377 81.3773C7.99177 81.3773 7.81444 81.452 7.71177 81.6013C7.61844 81.7507 7.59044 81.8907 7.59044 82.3013V83.0667C7.59044 83.5333 7.59977 83.58 7.70244 83.748C7.8051 83.9067 8.0011 83.9813 8.27177 83.9813C8.52377 83.9813 8.71044 83.9067 8.8131 83.748C8.9251 83.5893 8.93444 83.552 8.93444 83.1133V82.2453ZM7.9171 82.2827C7.9171 81.7787 7.99177 81.6387 8.26244 81.6387C8.51444 81.6387 8.59844 81.788 8.59844 82.2453V83.0853C8.59844 83.5987 8.52377 83.72 8.24377 83.72C7.98244 83.72 7.9171 83.5987 7.9171 83.0667V82.2827ZM10.6051 82.2453C10.6051 81.6013 10.4278 81.3773 9.91444 81.3773C9.66244 81.3773 9.4851 81.452 9.3731 81.6013C9.27977 81.7507 9.25177 81.8907 9.25177 82.3013V83.0667C9.25177 83.5333 9.27044 83.58 9.3731 83.748C9.47577 83.9067 9.67177 83.9813 9.94244 83.9813C10.1944 83.9813 10.3718 83.9067 10.4838 83.748C10.5958 83.5893 10.6051 83.552 10.6051 83.1133V82.2453ZM9.58777 82.2827C9.58777 81.7787 9.6531 81.6387 9.92377 81.6387C10.1851 81.6387 10.2598 81.788 10.2598 82.2453V83.0853C10.2598 83.5987 10.1944 83.72 9.91444 83.72C9.6531 83.72 9.58777 83.5987 9.58777 83.0667V82.2827Z"
                                      fill="white"></path>
                            </svg>
                        </a>
                        <a href="javascript:void(0);" rel="nofollow">
                            <svg width="80" height="80" viewBox="0 0 64 64" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0)">
                                    <path d="M55.6743 12.2859V8.55669L48.2506 7.07108V3.34186L31.5497 0L14.8502 3.34186V7.07108L7.42654 8.55669V12.2859L0.00439453 13.7715V15.3012C0.00439453 27.3091 3.1261 36.9079 10.1261 46.4291L10.1415 46.4489C15.8225 54.0243 23.3648 60.1748 30.8316 63.3223L31.5497 63.6397L32.2677 63.3223C39.7361 60.1748 47.2753 54.0258 52.9609 46.4458L52.9748 46.4291C59.9748 36.9079 63.0965 27.3091 63.0965 15.3012V13.7715L55.6728 12.2859H55.6743ZM49.9933 44.2068C44.8809 51.0242 38.1952 56.5838 31.5497 59.5718C24.9072 56.5854 18.2231 51.0257 13.106 44.2053C6.9119 35.7777 3.9905 27.2757 3.73473 16.8263L11.1384 15.3452V11.616L18.5605 10.1304V6.40119L31.5497 3.80213L44.5388 6.40119V10.1319L51.9625 11.6175V15.3468L59.3661 16.8278C59.1104 27.2802 56.189 35.7838 49.9933 44.2083V44.2068Z"
                                          fill="white"></path>
                                    <path d="M26.0583 9.50977V42.096C25.7471 41.458 25.4466 40.8063 25.16 40.1486C22.3665 33.5833 20.6993 25.8652 20.6993 19.4989V15.3383H17.0198V19.5004C17.0198 24.413 17.8873 29.883 19.4651 35.1798L17.724 37.6604C14.2803 32.3924 12.3881 27.2368 11.6655 21.2519V20.9359H7.98291V21.4767L7.99678 21.5876C8.87196 28.9974 11.4883 35.4836 16.234 42.0033L17.7425 44.0753L20.9335 39.5243C21.2047 40.2352 21.4882 40.9385 21.7825 41.6342L21.7887 41.6479C23.1092 44.6814 24.7008 47.5766 26.3911 50.0208L29.7393 54.8619V9.50977H26.0568H26.0583ZM48.5944 26.1188L48.807 25.932C49.9195 24.9279 50.5574 23.4286 50.5574 21.8154C50.5574 20.1612 49.8486 18.5951 48.6113 17.5211C44.9503 14.3418 40.8779 11.6318 36.8333 9.68749L36.4635 9.50977H33.3649V54.8619L36.2632 52.7444C40.1722 49.8886 43.8178 46.2399 46.8055 42.1902L46.8178 42.175C48.995 39.1551 50.6206 36.3495 51.7885 33.597C52.0786 32.9035 52.2252 32.1598 52.2199 31.4096C52.2199 28.9792 50.7069 26.9057 48.5944 26.1188V26.1188ZM46.2385 20.3815C46.6545 20.7415 46.8918 21.264 46.8918 21.8169C46.8918 22.3516 46.7069 22.8256 46.3833 23.1172C45.8132 23.6322 45.1291 24.1046 44.3386 24.653L44.3232 24.6651C42.2015 26.1006 39.7162 27.4297 37.032 28.569V13.9787C40.2031 15.6861 43.354 17.8751 46.2385 20.3815V20.3815ZM48.4249 32.1038C47.3694 34.5905 45.881 37.1531 43.8733 39.9374C41.8705 42.6507 39.5768 45.1431 37.032 47.3716V32.6066C38.9129 31.872 40.7486 31.0295 42.5297 30.0835C43.8902 29.7189 45.2986 29.5351 46.7207 29.5351C47.73 29.5351 48.5543 30.3751 48.5543 31.4096C48.5543 31.6694 48.5096 31.9033 48.4249 32.1038V32.1038Z"
                                          fill="white"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0">
                                        <rect width="63.1737" height="63.7992" fill="white"></rect>
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="devices">
    <div class="container">
        <picture class="devices-img">
            <source class="devices-img-mob lozad" src="https://sweet.tv/images/v2/loader.svg"
                    data-srcset="https://sweet.tv/images/v2/widget/trinity-devices.png" media="(max-width: 425px)">
            <img class="devices-img-desk lozad" data-src="https://sweet.tv/images/v2/widget/trinity-devices.png"
                 src="https://sweet.tv/images/v2/loader.svg" alt="Watch Trinity-TV.net on 4 devices">
        </picture>
        <h2>4 пристрої - одна ціна</h2>
        <p>Можете підключити будь-які чотири пристрої, а платити як за одного.
            <br>Мамі телевізор, татові ноутбук, дитині планшет.
        </p>
        <div class="devices-wrap">
            <a href="#" class="btn devices-btn" data-connect>Підключити тариф</a>
        </div>
    </div>
</section>
<footer class="footer">
    <div class="container h-100">
        <div class="footer-wrap row h-100 d-flex align-items-center">
            <div class="footer-logo col-4">
                <a href="https://trinity-tv.net/">
                    <img src="https://sweet.tv/images/v2/widget/logo-trinity.png" alt="Trinity-tv.net логотип">
                </a>
            </div>
            <div class="footer-rights col-4 text-center">Всі права захищені, 2020</div>
        </div>
    </div>
</footer>

<style>
    .apply-modal .modal-dialog {
        height: 100%;
        max-width: 846px;
    }

    .apply-modal .modal-content {
        padding: 50px 30px 30px;
        min-height: 526px;
        border-radius: 30px;
        top: 50%;
        transform: translate(0, -50%);
        background: url("https://sweet.tv/images/v2/widget/modal-bg1.jpg") repeat;
        text-align: center;
    }

    .apply-modal .close svg path {
        fill: #ffffff;
    }

    .apply-modal .close {
        top: 20px !important;
        right: 20px !important;
    }

    .apply-modal p {
        font-weight: 800;
        font-size: 30px;
        line-height: 120%;
    }

    .apply-modal h3 {
        font-family: 'Lato', sans-serif;
        color: #20BEC6;
        font-size: 50px;
        line-height: 1.2;
    }

    .apply-phone {
        color: #ffffff;
        text-decoration: none;
        font-size: 25px;
        line-height: 2.2;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .apply-phone svg {
        margin-right: 10px;
    }

    .apply-btn {
        margin: 40px auto 0 auto;
        background: #2DB8C4;
        border-radius: 50px;
        width: 200px;
        height: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #ffffff;
        text-decoration: none;
        font-weight: bold;
        font-size: 14px;
        text-transform: uppercase;
        font-family: Roboto, Arial, Helvetica, sans-serif;
    }

    .apply-btn:hover,
    .apply-btn:focus {
        color: #ffffff;
        text-decoration: none;
        filter: brightness(0.7);
    }

    button.close:hover,
    button.close:focus {
        filter: brightness(0.7);
    }

    @media screen and (max-height: 600px) {
        .apply-modal .modal-content {
            top: 0;
            transform: translate(0, 0);
        }

    }

    @media screen and (max-width: 900px) {
        .apply-modal .modal-dialog {
            max-width: 96%;
        }
    }

    @media screen and (max-width: 767px) {
        .apply-modal p {
            font-size: 22px;
        }

        .apply-modal h3 {
            font-size: 35px;
        }

        .apply-phone a {
            font-size: 20px;
        }
    }

    @media screen and (max-width: 576px) {
        .apply-modal p br {
            display: none;
        }

        .apply-modal .modal-content {
            border-radius: 0;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .apply-modal .modal-dialog {
            max-width: 100%;
            margin: 0;
        }

        .apply-modal .close {
            top: 45px !important;
        }
    }
</style>

<style>
    .apply-modal .modal-content {
        background: url("https://sweet.tv/images/v2/widget/trinity-bg1.jpg") repeat;
    }

    .apply-modal h3 {
        color: #6CB121;
    }

    .apply-btn {
        background: linear-gradient(89.87deg, #6CB121 0.1%, #3F7307 113.08%);
        box-shadow: 0px 9.84127px 19.6825px rgba(108, 177, 33, 0.25);
    }

    .apply-btn:hover,
    .apply-btn:focus {
        background: linear-gradient(89.87deg, #6CB121 113.08%, #3F7307 0.1%);
    }
</style>

<!--<div class="modal apply-modal" id="applyModal" role="dialog" tabindex="-1" aria-hidden="true">-->
<!--    <div class="modal-dialog" role="document">-->
<!--        <div class="modal-content">-->
<!--            <button type="button" class="close" data-dismiss="modal" aria-hidden="true" aria-label="Close"-->
<!--                    style="z-index: 99999;opacity: 1; top: 10px; outline: none; position: absolute; right: 15px">-->
<!--                <span aria-hidden="true">-->
<!--                    <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">-->
<!--                        <path d="M11.1214 9.841L17.5609 3.25897C18.1474 2.65949 18.1474 1.69051 17.5609 1.09103C16.9744 0.491548 16.0264 0.491548 15.4399 1.09103L9.00037 7.67306L2.56087 1.09103C1.97437 0.491548 1.02637 0.491548 0.439875 1.09103C-0.146625 1.69051 -0.146625 2.65949 0.439875 3.25897L6.87937 9.841L0.439875 16.423C-0.146625 17.0225 -0.146625 17.9915 0.439875 18.591C0.732375 18.8899 1.11637 19.0402 1.50037 19.0402C1.88437 19.0402 2.26838 18.8899 2.56087 18.591L9.00037 12.0089L15.4399 18.591C15.7324 18.8899 16.1164 19.0402 16.5004 19.0402C16.8844 19.0402 17.2684 18.8899 17.5609 18.591C18.1474 17.9915 18.1474 17.0225 17.5609 16.423L11.1214 9.841Z"-->
<!--                              fill="#15394C"/>-->
<!--                    </svg>-->
<!--                </span>-->
<!--            </button>-->
<!--            <div class="applay-wrap">-->
<!--                <p>Для підключення телебачення trinity-->
<!--                    <br>зверніться до вашого інтернет провайдера-->
<!--                </p>-->
<!--                <h3 id="partner_name"></h3>-->
<!--                <div id="partner_phones"></div>-->
<!--                <a class="apply-btn" href data-dismiss="modal" aria-hidden="true" aria-label="Close">Дякуємо :)</a>-->
<!--            </div>-->
<!---->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<script src="https://sweet.tv/js/lozad.min.js"></script>
<script src="https://sweet.tv/js/popper.min.js"></script>
<script src="https://sweet.tv/js/bootstrap.min.js"></script>
<script src="https://sweet.tv/js/owl.carousel.min.js"></script>

<script>
    var partner_object;

    $.ajaxSetup({
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json'
        }
    });

    // function notify_to_connect(data) {
    //     if (data && !partner_object) {
    //         partner_object = data;
    //     }
    //
    //     var object = data || partner_object;
    //
    //     if (object.partner_name) {
    //         document.querySelector('#partner_name').textContent = object.partner_name;
    //     }
    //
    //     if (object.partner_phones) {
    //         object.partner_phones.map(function (phone) {
    //             $('#partner_phones').append('<div class="apply-phone">' +
    //                 '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">' +
    //                 '<path d="M17.2492 24C16.4745 24 15.7063 23.863 14.9552 23.5901C11.646 22.388 8.57444 20.4301 6.07236 17.9281C3.57027 15.4261 1.61239 12.3544 0.410326 9.04529C0.024045 7.98183 -0.0899504 6.88406 0.0716211 5.78236C0.222974 4.7504 0.622708 3.74858 1.22765 2.88518C1.83527 2.01798 2.64533 1.2967 3.57023 0.799327C4.55653 0.268958 5.63306 0 6.77002 0C7.12363 0 7.42924 0.247068 7.50335 0.592804L8.68052 6.08628C8.73381 6.33504 8.65736 6.59387 8.47751 6.77377L6.46605 8.78519C8.36356 12.5578 11.4426 15.6368 15.2152 17.5343L17.2266 15.5229C17.4065 15.343 17.6653 15.2667 17.9141 15.3199L23.4076 16.497C23.7534 16.5711 24.0004 16.8767 24.0004 17.2304C24.0004 18.3673 23.7314 19.4439 23.201 20.4302C22.7036 21.3551 21.9823 22.1652 21.1151 22.7728C20.2518 23.3777 19.25 23.7774 18.218 23.9288C17.8946 23.9763 17.5713 24 17.2492 24ZM6.17079 1.53275C4.67109 1.69831 3.33999 2.48437 2.45605 3.74596C1.46206 5.16457 1.23028 6.90942 1.82013 8.5332C4.13116 14.8951 9.10538 19.8693 15.4673 22.1803C17.091 22.7702 18.8359 22.5385 20.2545 21.5444C21.5161 20.6605 22.3022 19.3294 22.4677 17.8297L17.9988 16.8721L15.8981 18.9727C15.6746 19.1963 15.3349 19.2556 15.0489 19.1212C10.5871 17.0251 6.97542 13.4134 4.87925 8.95154C4.74487 8.66547 4.80421 8.32583 5.02775 8.10234L7.12841 6.00168L6.17079 1.53275Z" fill="white"/>' +
    //                 '<path d="M23.25 12.7495C22.8358 12.7495 22.5 12.4137 22.5 11.9995C22.5 6.21003 17.7899 1.49994 12.0005 1.49994C11.5863 1.49994 11.2505 1.16414 11.2505 0.749969C11.2505 0.335799 11.5863 0 12.0005 0C15.2057 0 18.219 1.24814 20.4854 3.51454C22.7518 5.78095 24 8.79428 24 11.9995C24 12.4137 23.6642 12.7495 23.25 12.7495Z" fill="white"/>' +
    //                 '<path d="M20.2501 12.7495C19.8359 12.7495 19.5001 12.4137 19.5001 11.9996C19.5001 7.86424 16.1358 4.49988 12.0005 4.49988C11.5863 4.49988 11.2505 4.16408 11.2505 3.74991C11.2505 3.33574 11.5863 2.99994 12.0005 2.99994C16.9629 2.99994 21.0001 7.03717 21.0001 11.9996C21.0001 12.4137 20.6643 12.7495 20.2501 12.7495Z" fill="white"/>' +
    //                 '<path d="M17.2502 12.7495C16.8361 12.7495 16.5003 12.4137 16.5003 11.9995C16.5003 9.51829 14.4817 7.4997 12.0005 7.4997C11.5863 7.4997 11.2505 7.1639 11.2505 6.74973C11.2505 6.33556 11.5863 5.99976 12.0005 5.99976C15.3088 5.99976 18.0002 8.69121 18.0002 11.9995C18.0002 12.4137 17.6645 12.7495 17.2502 12.7495Z" fill="white"/>' +
    //                 '</svg>' +
    //                 '&nbsp;' + phone +
    //                 '</div>');
    //         })
    //
    //     }
    //     if (!object.partner_phones || !object.partner_name) {
    //         document.querySelector('.apply-modal .modal-content').classList.add('flex');
    //     } else {
    //         document.querySelector('.apply-modal .modal-content').classList.remove('flex');
    //     }
    // }

    // $('[data-connect]').on('click', function (){
    //     if (partner_object) return notify_to_connect();
    //     $.post('https://api.sweet.tv/GeoService/GetInfo.json', notify_to_connect);
    // })

    // $('#applyModal').on('show.bs.modal', function (e) {
    //     if (!document.querySelector('#partner_name').textContent.length)
    //         $.post('https://api.sweet.tv/GeoService/GetInfo.json', notify_to_connect);
    // })

    $(document).ready(function () {
        var observer = lozad(); // lazy loads elements with default selector as '.lozad'
        observer.observe();

        $('.owl-tariffs').owlCarousel({
            loop: false,
            margin: 15,
            startPosition: 2,
            nav: true,
            responsive: {
                0: {
                    items: 1,
                },
                553: {
                    items: 2
                },
                769: {
                    items: 2,
                    stagePadding: 100
                },
                840: {
                    items: 3
                },
                940: {
                    items: 3,
                    stagePadding: 50
                },
                1040: {
                    items: 3,
                    stagePadding: 100
                },
                1140: {
                    items: 4
                }
            }
        });

        if (document.querySelector('body').offsetWidth < 769) {
            $('.applyModals').trigger('destroy.owl.carousel').removeClass('owl-carousel owl-loaded');
        }

        $('.choose-tariff-btn').on('click', function (e) {
            console.log('click')

            $('.choose-tariff').slideUp(110);
            $('.main-compare').slideDown(110);

            function moveScroll() {
                try {
                    var header = $('nav'),
                        headerHeight = header.height(),
                        sticky = $('.sticky').height(),
                        stickyHeight = sticky,
                        channalsTable = $('.channals-table');
                    var scroll = $(window).scrollTop();
                    var anchor_top = $(".channals-table").offset().top - stickyHeight;
                    var anchor_bottom = $(".info-banner").offset().top - 300;
                    var widthTable = $('.channals-table').width();
                    if (scroll > anchor_top && scroll < anchor_bottom) {
                        $('.sticky').addClass('fixed');
                        $('.sticky.fixed').css({'width': widthTable + 'px', 'top': headerHeight + 'px'});
                        channalsTable.css("padding-top", stickyHeight + 'px');
                    } else {
                        $('.sticky').css('width', 'auto');
                        $('.sticky').removeClass('fixed');
                        channalsTable.css("padding-top", 0);
                    }
                } catch (e) {
                    return
                }
            }

            window.addEventListener('scroll', moveScroll);
            window.addEventListener('ready', moveScroll);
            window.addEventListener('scroll', moveScroll);
        });
    });
</script>

</body>



