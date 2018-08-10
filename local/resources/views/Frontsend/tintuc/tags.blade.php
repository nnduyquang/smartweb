<style>
    #tags{
        padding:0px 10px;
        /*margin: auto;*/
    }

    #tags a {
        display: inline-block;
        height: 22px;
        margin: 0 6px 0 0;
        padding: 0 7px 0 14px;
        white-space: nowrap;
        position: relative;

        background: -moz-linear-gradient(top, #06b4d4 0%, #025379 100%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#06b4d4), color-stop(100%,#025379));
        background: -webkit-linear-gradient(top, #06b4d4 0%,#025379 100%);
        background: -o-linear-gradient(top, #06b4d4 0%,#025379 100%);
        background: linear-gradient(to bottom, #06b4d4 0%,#025379 100%);
        background-color: #06b4d4;

        color: #f0f0f0;
        font: bold 11px/21px Arial, Tahoma, sans-serif;
        text-decoration: none;
        text-shadow: 0 1px rgba(255,255,255,0.4);

        border-top: 1px solid #06b4d4;
        border-bottom: 1px solid #025379;
        border-right: 1px solid #025379;
        border-radius: 1px 3px 3px 1px;
        box-shadow: inset 0 1px #06b4d4, 0 1px 2px rgba(0,0,0,0.21);

    }

    #tags a:before {
        content: '';
        position: absolute;
        top: 5px;
        left: -6px;
        width: 10px;
        height: 10px;

        background: -moz-linear-gradient(45deg, #06b4d4 0%, #025379 100%);
        background: -webkit-gradient(linear, left bottom, right top, color-stop(0%,#06b4d4), color-stop(100%,#025379));
        background: -webkit-linear-gradient(-45deg, #06b4d4 0%,#025379 100%);
        background: -o-linear-gradient(45deg, #06b4d4 0%,#025379 100%);
        background: linear-gradient(135deg, #06b4d4 0%,#025379 100%);
        background-color: #06b4d4;

        border-left: 1px solid #06b4d4;
        border-bottom: 1px solid #025379;
        border-radius: 0 0 0 2px;
        box-shadow: inset 1px 0 #06b4d4, 0 2px 2px -2px rgba(0,0,0,0.33);

        -webkit-transform: scale(1, 1.5) rotate(45deg);
        -moz-transform: scale(1, 1.5) rotate(45deg);
        -ms-transform: scale(1, 1.5) rotate(45deg);
        transform: scale(1, 1.5) rotate(45deg);
    }

    #tags a:after {
        content: '';
        position: absolute;
        top: 7px;
        left: 1px;
        width: 5px;
        height: 5px;
        background: #FFF;
        border-radius: 4px;
        border: 1px solid #06b4d4;
        box-shadow: 0 1px 0 rgba(255,255,255,0.2), inset 0 1px 1px rgba(0,0,0,0.21);
    }

    #tags a:hover {
        color: #FFF;
        text-shadow: -1px -1px 0 rgba(153,102,51,0.3);
    }
</style>

<h4 class="mt-3">TAGS <span>LIÊN QUAN</span></h4>

<div class="" id="tags">
    <a href="#">laravel</a>
    <a href="#">bootstrap 4.0</a>
    <a href="#">jquery</a>
    <a href="#">HTML5</a>
    <a href="#">Smartwebvn.net</a>
    <a href="#">CSS3</a>
    <a href="#">Tin tức công nghệ</a>
    <a href="#">Web chuẩn SEO</a>
    <a href="#">Web chuẩn Google</a>
</div>