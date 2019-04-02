
<!DOCTYPE html>
<html> 
<head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Slider Cluster Demo - Jssor Slider, Carousel, Slideshow with Javascript Source Code</title>
    <!-- Caption Style -->
    <style> 
        .captionOrange, .captionBlue, .captionBlack, .captionSymbol
        {
            display: block;
            color: #fff;
            font-size: 20px;
            line-height: 30px;
            text-align: center;
            border-radius: 4px;
        }
        .captionOrange
        {
            background: #EB5100;
            background-color: rgba(235, 81, 0, 0.6);
        }
        .captionBlue
        {
            background: #746FBD;
            background-color: rgba(21, 21, 120, 0.6);
        }
        .captionBlack
        {
            background: #000;
            background-color: rgba(0, 0, 0, 0.4);
        }
        .captionSymbol
        {
        	border-radius: 100px !important;
        	font-weight: 400 !important;
        	font-size: 26px !important;
            background: #000;
            background-color: rgba(0, 0, 0, 0.4);
        }
        .captionTextBlack
        {
        	display: block;
        	color: #000;
        	font-size: 20px;
        	line-height: 30px;
        }
        .captionTextWhite
        {
        	display: block;
        	color: #fff;
        	font-size: 20px;
        	line-height: 30px;
        }
        a.captionOrange, a.captionOrange:active, a.captionOrange:visited,a.captionTextWhite, a.captionTextWhite:active, a.captionTextWhite:visited
        {
        	color: #fff;
        	text-decoration: none;
        }
        a.captionOrange:hover
        {
            color: #eb5100;
            text-decoration: underline;
            background-color: #eeeeee;
            background-color: rgba(238, 238, 238, 0.7);
        }
        a.captionTextBlack, a.captionTextBlack:active, a.captionTextBlack:visited
        {
        	color: #000;
        	text-decoration: none;
        }
        a.captionTextWhite:hover
        {
            color: #eb5100;
            text-decoration: underline;
        }
        a.captionTextBlack:hover
        {
            color: #eb5100;
            text-decoration: underline;
        }
        .bricon
        {
            background: url(../img/browser-icons.png);
        }
    </style>
    
    <style>
        /* jssor slider bullet navigator skin 01 css */
        /*
        .jssorb01 div           (normal)
        .jssorb01 div:hover     (normal mouseover)
        .jssorb01 .av           (active)
        .jssorb01 .av:hover     (active mouseover)
        .jssorb01 .dn           (mousedown)
        */
        .jssorb01 {
            position: absolute;
        }
        .jssorb01 div, .jssorb01 div:hover, .jssorb01 .av {
            position: absolute;
            /* size of bullet elment */
            width: 12px;
            height: 12px;
            filter: alpha(opacity=70);
            opacity: .7;
            overflow: hidden;
            cursor: pointer;
            border: #000 1px solid;
        }
        .jssorb01 div { background-color: gray; }
        .jssorb01 div:hover, .jssorb01 .av:hover { background-color: #d3d3d3; }
        .jssorb01 .av { background-color: #fff; }
        .jssorb01 .dn, .jssorb01 .dn:hover { background-color: #555555; }
    </style>
    
    <style>
        /* jssor slider arrow navigator skin 05 css */
        /*
        .jssora05l                  (normal)
        .jssora05r                  (normal)
        .jssora05l:hover            (normal mouseover)
        .jssora05r:hover            (normal mouseover)
        .jssora05l.jssora05ldn      (mousedown)
        .jssora05r.jssora05rdn      (mousedown)
        */
        .jssora05l, .jssora05r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 40px;
            cursor: pointer;
            background: url(../img/a17.png) no-repeat;
            overflow: hidden;
        }
        .jssora05l { background-position: -10px -40px; }
        .jssora05r { background-position: -70px -40px; }
        .jssora05l:hover { background-position: -130px -40px; }
        .jssora05r:hover { background-position: -190px -40px; }
        .jssora05l.jssora05ldn { background-position: -250px -40px; }
        .jssora05r.jssora05rdn { background-position: -310px -40px; }
    </style>
</head> 
<body style="margin:0;padding:0; background:#fff; font-family: Arial, Verdana, Sans-Serif;"> 
    <!-- it works the same with all jquery version from 1.x to 2.x -->
    <script type="text/javascript" src="../js/jquery-1.9.1.min.js"></script>
    <!-- use jssor.slider.mini.js (40KB) instead for release -->
    <!-- jssor.slider.mini.js = (jssor.js + jssor.slider.js) -->
    <script type="text/javascript" src="../js/jssor.js"></script>
    <script type="text/javascript" src="../js/jssor.slider.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            //Reference http://www.jssor.com/development/slider-with-slideshow-jquery.html
            //Reference http://www.jssor.com/development/tool-slideshow-transition-viewer.html

            var _SlideshowTransitions = [
                //Rotate Overlap
                { $Duration: 1200, $Zoom: 11, $Rotate: -1, $Easing: { $Zoom: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Round: { $Rotate: 0.5 }, $Brother: { $Duration: 1200, $Zoom: 1, $Rotate: 1, $Easing: $JssorEasing$.$EaseSwing, $Opacity: 2, $Round: { $Rotate: 0.5 }, $Shift: 90 } },
                //Switch
                { $Duration: 1400, x: 0.25, $Zoom: 1.5, $Easing: { $Left: $JssorEasing$.$EaseInWave, $Zoom: $JssorEasing$.$EaseInSine }, $Opacity: 2, $ZIndex: -10, $Brother: { $Duration: 1400, x: -0.25, $Zoom: 1.5, $Easing: { $Left: $JssorEasing$.$EaseInWave, $Zoom: $JssorEasing$.$EaseInSine }, $Opacity: 2, $ZIndex: -10 } },
                //Rotate Relay
                { $Duration: 1200, $Zoom: 11, $Rotate: 1, $Easing: { $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Round: { $Rotate: 1 }, $ZIndex: -10, $Brother: { $Duration: 1200, $Zoom: 11, $Rotate: -1, $Easing: { $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Round: { $Rotate: 1 }, $ZIndex: -10, $Shift: 600 } },
                //Doors
                { $Duration: 1500, x: 0.5, $Cols: 2, $ChessMode: { $Column: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInOutCubic }, $Opacity: 2, $Brother: { $Duration: 1500, $Opacity: 2 } },
                //Rotate in+ out-
                { $Duration: 1500, x: -0.3, y: 0.5, $Zoom: 1, $Rotate: 0.1, $During: { $Left: [0.6, 0.4], $Top: [0.6, 0.4], $Rotate: [0.6, 0.4], $Zoom: [0.6, 0.4] }, $Easing: { $Left: $JssorEasing$.$EaseInQuad, $Top: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Brother: { $Duration: 1000, $Zoom: 11, $Rotate: -0.5, $Easing: { $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Shift: 200 } },
                //Fly Twins
                { $Duration: 1500, x: 0.3, $During: { $Left: [0.6, 0.4] }, $Easing: { $Left: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true, $Brother: { $Duration: 1000, x: -0.3, $Easing: { $Left: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 } },
                //Rotate in- out+
                { $Duration: 1500, $Zoom: 11, $Rotate: 0.5, $During: { $Left: [0.4, 0.6], $Top: [0.4, 0.6], $Rotate: [0.4, 0.6], $Zoom: [0.4, 0.6] }, $Easing: { $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Brother: { $Duration: 1000, $Zoom: 1, $Rotate: -0.5, $Easing: { $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Shift: 200 } },
                //Rotate Axis up overlap
                { $Duration: 1200, x: 0.25, y: 0.5, $Rotate: -0.1, $Easing: { $Left: $JssorEasing$.$EaseInQuad, $Top: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Brother: { $Duration: 1200, x: -0.1, y: -0.7, $Rotate: 0.1, $Easing: { $Left: $JssorEasing$.$EaseInQuad, $Top: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2 } },
                //Chess Replace TB
                { $Duration: 1600, x: 1, $Rows: 2, $ChessMode: { $Row: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Brother: { $Duration: 1600, x: -1, $Rows: 2, $ChessMode: { $Row: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 } },
                //Chess Replace LR
                { $Duration: 1600, y: -1, $Cols: 2, $ChessMode: { $Column: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Brother: { $Duration: 1600, y: 1, $Cols: 2, $ChessMode: { $Column: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 } },
                //Shift TB
                { $Duration: 1200, y: 1, $Easing: { $Top: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Brother: { $Duration: 1200, y: -1, $Easing: { $Top: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 } },
                //Shift LR
                { $Duration: 1200, x: 1, $Easing: { $Left: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Brother: { $Duration: 1200, x: -1, $Easing: { $Left: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 } },
                //Return TB
                { $Duration: 1200, y: -1, $Easing: { $Top: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $ZIndex: -10, $Brother: { $Duration: 1200, y: -1, $Easing: { $Top: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $ZIndex: -10, $Shift: -100 } },
                //Return LR
                { $Duration: 1200, x: 1, $Delay: 40, $Cols: 6, $Formation: $JssorSlideshowFormations$.$FormationStraight, $Easing: { $Left: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $ZIndex: -10, $Brother: { $Duration: 1200, x: 1, $Delay: 40, $Cols: 6, $Formation: $JssorSlideshowFormations$.$FormationStraight, $Easing: { $Top: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $ZIndex: -10, $Shift: -100 } },
                //Rotate Axis down
                { $Duration: 1500, x: -0.1, y: -0.7, $Rotate: 0.1, $During: { $Left: [0.6, 0.4], $Top: [0.6, 0.4], $Rotate: [0.6, 0.4] }, $Easing: { $Left: $JssorEasing$.$EaseInQuad, $Top: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Brother: { $Duration: 1000, x: 0.2, y: 0.5, $Rotate: -0.1, $Easing: { $Left: $JssorEasing$.$EaseInQuad, $Top: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2 } },
                //Extrude Replace
                { $Duration: 1600, x: -0.2, $Delay: 40, $Cols: 12, $During: { $Left: [0.4, 0.6] }, $SlideOut: true, $Formation: $JssorSlideshowFormations$.$FormationStraight, $Assembly: 260, $Easing: { $Left: $JssorEasing$.$EaseInOutExpo, $Opacity: $JssorEasing$.$EaseInOutQuad }, $Opacity: 2, $Outside: true, $Round: { $Top: 0.5 }, $Brother: { $Duration: 1000, x: 0.2, $Delay: 40, $Cols: 12, $Formation: $JssorSlideshowFormations$.$FormationStraight, $Assembly: 1028, $Easing: { $Left: $JssorEasing$.$EaseInOutExpo, $Opacity: $JssorEasing$.$EaseInOutQuad }, $Opacity: 2, $Round: { $Top: 0.5 } } }
            ];

            //Reference http://www.jssor.com/development/slider-with-caption-jquery.html
            //Reference http://www.jssor.com/development/reference-ui-definition.html#captiondefinition
            //Reference http://www.jssor.com/development/tool-caption-transition-viewer.html

            var captionTransitions = [];

            var t_tr = { $Duration: 700, x: -0.6, y: 0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutSine, $Top: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
            var t_tr_ib = { $Duration: 900, x: -0.6, y: 0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutBack, $Top: $JssorEasing$.$EaseInOutBack }, $Opacity: 2 };
            var t_rtt_tr = { $Duration: 700, x: -0.6, y: 0.6, $Zoom: 11, $Rotate: 1, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $Round: { $Rotate: 0.8} };

            var t_rtt_360 = { $Duration: 800, $Rotate: 1, $Easing: { $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2 };
            var t_clip_lr = { $Duration: 900, $Clip: 3, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic }, $Opacity: 2 };
            var t_zm = { $Duration: 700, $Zoom: 1, $Easing: $JssorEasing$.$EaseInCubic, $Opacity: 2 };
            var t_b_ = { $Duration: 700, y: -0.6, $Rotate: 0.05, $Easing: { $Top: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };

            captionTransitions["TEAM_1"] = [[t_rtt_360, t_zm], [t_zm, t_rtt_tr]];
            captionTransitions["TEAM_2"] = [t_rtt_360, t_clip_lr, t_zm, t_b_];

            captionTransitions["L|IB"] = { $Duration: 900, x: 0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutBack }, $Opacity: 2 };
            captionTransitions["L|EP"] = { $Duration: 900, x: 0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutExpo }, $Opacity: 2 };
            captionTransitions["L*IB"] = { $Duration: 900, x: 0.6, $Zoom: 3, $Rotate: -0.3, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Rotate: $JssorEasing$.$EaseInBack }, $Opacity: 2 };
            captionTransitions["B*IB"] = { $Duration: 900, y: -0.6, $Zoom: 3, $Rotate: -0.3, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Rotate: $JssorEasing$.$EaseInBack }, $Opacity: 2 };
            captionTransitions["T|IE*IE"] = { $Duration: 1800, y: 0.8, $Zoom: 11, $Rotate: -1.5, $Easing: { $Top: $JssorEasing$.$EaseInOutElastic, $Zoom: $JssorEasing$.$EaseInElastic, $Rotate: $JssorEasing$.$EaseInOutElastic }, $Opacity: 2, $During: { $Zoom: [0, 0.8], $Opacity: [0, 0.7] }, $Round: { $Rotate: 0.5} };
            captionTransitions["CLIP|L"] = { $Duration: 800, $Clip: 1, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic }, $Opacity: 2 };
            captionTransitions["CLIP|LR"] = t_clip_lr;
            captionTransitions["RTT|360"] = t_rtt_360;
            captionTransitions["RTT*JUP|BR"] = { $Duration: 1000, x: -0.5, y: -0.8, $Zoom: 11, $Rotate: 0.2, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseLinear, $Zoom: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $During: { $Left: [0, 0.5]} };
            captionTransitions["RTT*JDN|L"] = { $Duration: 1200, x: 0.3, $Zoom: 11, $Rotate: 0.2, $Easing: { $Left: $JssorEasing$.$EaseOutCubic, $Zoom: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $During: { $Left: [0, 0.5]} };
            captionTransitions["SPACESHIP|LB"] = { $Duration: 1000, x: 1, y: -0.1, $Zoom: 3, $Rotate: -0.1, $Easing: { $Left: $JssorEasing$.$EaseInQuint, $Top: $JssorEasing$.$EaseInWave, $Opacity: $JssorEasing$.$EaseInQuint }, $Opacity: 2 };
            captionTransitions["SPACESHIP|RB"] = { $Duration: 1000, x: -1, y: -0.1, $Zoom: 3, $Rotate: 0.1, $Easing: { $Left: $JssorEasing$.$EaseInQuint, $Top: $JssorEasing$.$EaseInWave, $Opacity: $JssorEasing$.$EaseInQuint }, $Opacity: 2 };
            captionTransitions["ZM"] = { $Duration: 600, $Zoom: 1, $Easing: $JssorEasing$.$EaseInCubic, $Opacity: 2 };

            var captionTransitions_childSliders = [
            //R|IB
            {$Duration: 900, x: -0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutBack }, $Opacity: 2 }
            //B|IB
            , { $Duration: 900, y: -0.6, $Easing: { $Top: $JssorEasing$.$EaseInOutBack }, $Opacity: 2 }
            //R*|IB
            , { $Duration: 900, x: -0.6, $Zoom: 3, $Rotate: -0.3, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Rotate: $JssorEasing$.$EaseInBack }, $Opacity: 2 }
            //B*|IB
            , { $Duration: 900, y: -0.6, $Zoom: 3, $Rotate: -0.3, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Rotate: $JssorEasing$.$EaseInBack }, $Opacity: 2 }
            //R-*|IB
            , { $Duration: 900, x: -0.7, $Rotate: 0.5, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseInQuad, $Rotate: $JssorEasing$.$EaseInBack }, $Opacity: 2, $During: { $Left: [0.2, 0.8]} }
            //B-*|IB
            , { $Duration: 900, y: -0.7, $Rotate: 0.5, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseInQuad, $Rotate: $JssorEasing$.$EaseInBack }, $Opacity: 2, $During: { $Top: [0.2, 0.8]} }
            //CLIP|LR
            , { $Duration: 900, $Clip: 3, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic }, $Opacity: 2 }
            //CLIP|TB
            , { $Duration: 900, $Clip: 12, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic }, $Opacity: 2 }
            //CLIP|L
            , { $Duration: 800, $Clip: 1, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic }, $Opacity: 2 }
            //ZM*JDN|RB
            , { $Duration: 1200, x: -0.8, y: -0.5, $Zoom: 11, $Easing: { $Left: $JssorEasing$.$EaseLinear, $Top: $JssorEasing$.$EaseOutCubic, $Zoom: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $During: { $Top: [0, 0.5]} }
            //RTT*JUP|RB
            , { $Duration: 1200, x: -0.8, y: -0.5, $Zoom: 11, $Rotate: 0.2, $Easing: { $Left: $JssorEasing$.$EaseLinear, $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $During: { $Top: [0, 0.5]} }
            //TORTUOUS|VB
            , { $Duration: 1800, y: -0.2, $Zoom: 1, $Easing: { $Top: $JssorEasing$.$EaseOutWave, $Zoom: $JssorEasing$.$EaseOutCubic }, $Opacity: 2, $During: { $Top: [0, 0.7] }, $Round: { $Top: 1.3} }
            ];

            var slider1Options = {
                $AutoPlayInterval: 3000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $DragOrientation: 0,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $CaptionSliderOptions: {                            //[Optional] Options which specifies how to animate caption
                    $Class: $JssorCaptionSlider$,                   //[Required] Class to create instance to animate caption
                    $CaptionTransitions: captionTransitions_childSliders,       //[Required] An array of caption transitions to play caption, see caption transition section at jssor slideshow transition builder
                    $PlayInMode: 1,                                 //[Optional] 0 None (no play), 1 Chain (goes after main slide), 3 Chain Flatten (goes after main slide and flatten all caption animations), default value is 1
                    $PlayOutMode: 3                                 //[Optional] 0 None (no play), 1 Chain (goes before main slide), 3 Chain Flatten (goes before main slide and flatten all caption animations), default value is 1
                },

                $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $SpacingX: 10,                                  //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 10                                   //[Optional] Vertical space between each item in pixel, default value is 0
                },

                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 2                                //[Required] 0 Never, 1 Mouse Over, 2 Always
                }
            };

            var jssorSlider1 = new $JssorSlider$("slider1_container", slider1Options);

            var slider2Options = {
                $AutoPlayInterval: 3000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $DragOrientation: 0,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $SlideshowOptions: {                                //[Optional] Options to specify and enable slideshow or not
                    $Class: $JssorSlideshowRunner$,                 //[Required] Class to create instance of slideshow
                    $Transitions: _SlideshowTransitions,             //[Required] An array of slideshow transitions to play slideshow
                    $TransitionsOrder: 1,                           //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
                    $ShowLink: true                                    //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
                },

                $CaptionSliderOptions: {                            //[Optional] Options which specifies how to animate caption
                    $Class: $JssorCaptionSlider$,                   //[Required] Class to create instance to animate caption
                    $CaptionTransitions: captionTransitions_childSliders,       //[Required] An array of caption transitions to play caption, see caption transition section at jssor slideshow transition builder
                    $PlayInMode: 1,                                 //[Optional] 0 None (no play), 1 Chain (goes after main slide), 3 Chain Flatten (goes after main slide and flatten all caption animations), default value is 1
                    $PlayOutMode: 3                                 //[Optional] 0 None (no play), 1 Chain (goes before main slide), 3 Chain Flatten (goes before main slide and flatten all caption animations), default value is 1
                },

                $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $SpacingX: 10,                                  //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 10                                   //[Optional] Vertical space between each item in pixel, default value is 0
                },

                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 2                                //[Required] 0 Never, 1 Mouse Over, 2 Always
                }
            };

            var jssorSlider2 = new $JssorSlider$("slider2_container", slider2Options);

            var bannerSlider_slideshowTransitions = [
            //Fade in R
            {$Duration: 1200, x: -0.3, $During: { $Left: [0.3, 0.7] }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade out L
            , { $Duration: 1200, x: 0.3, $SlideOut: true, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            ];

            var slider3Options = {
                $AutoPlayInterval: 3000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $DragOrientation: 0,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $SlideshowOptions: {                                //[Optional] Options to specify and enable slideshow or not
                    $Class: $JssorSlideshowRunner$,                 //[Required] Class to create instance of slideshow
                    $Transitions: bannerSlider_slideshowTransitions,            //[Required] An array of slideshow transitions to play slideshow
                    $TransitionsOrder: 1,                           //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
                    $ShowLink: true                                    //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
                },

                $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $SpacingX: 10,                                  //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 10                                   //[Optional] Vertical space between each item in pixel, default value is 0
                },

                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 2                                //[Required] 0 Never, 1 Mouse Over, 2 Always
                },

                $ThumbnailNavigatorOptions: {
                    $Class: $JssorThumbnailNavigator$,              //[Required] Class to create thumbnail navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $ActionMode: 0,                                 //[Optional] 0 None, 1 act by click, 2 act by mouse hover, 3 both, default value is 1
                    $DisableDrag: true                              //[Optional] Disable drag or not, default value is false
                }
            };

            var jssorSlider3 = new $JssorSlider$("slider3_container", slider3Options);

            function IsBrowserIe8Earlier() {
                var isBrowserIe8Earlier;

                var app = navigator.appName;
                var ua = navigator.userAgent;

                if (app == "Microsoft Internet Explorer" &&
                !!window.attachEvent && !!window.ActiveXObject) {

                    var ieOffset = ua.indexOf("MSIE");

                    browserRuntimeVersion = document.documentMode || parseFloat(ua.substring(ieOffset + 5, ua.indexOf(";", ieOffset)));

                    isBrowserIe8Earlier = browserRuntimeVersion < 8;
                }
            }

            var sliderClusterSlideshowOptions = IsBrowserIe8Earlier() ? null : {                                //[Optional] Options to specify and enable slideshow or not
                $Class: $JssorSlideshowRunner$,                 //[Required] Class to create instance of slideshow
                $Transitions: _SlideshowTransitions,            //[Required] An array of slideshow transitions to play slideshow
                $TransitionsOrder: 1,                           //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
                $ShowLink: true                                    //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
            };

            var slidercOptions = {
                $AutoPlay: false,                                   //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlayInterval: 3000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,   			            //Allows arrow key to navigate or not
                $SlideDuration: 800,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $UISearchMode: 0,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $SlideshowOptions: sliderClusterSlideshowOptions,

                $CaptionSliderOptions: {                            //[Optional] Options which specifies how to animate caption
                    $Class: $JssorCaptionSlider$,                   //[Required] Class to create instance to animate caption
                    $CaptionTransitions: captionTransitions,        //[Required] An array of caption transitions to play caption, see caption transition section at jssor slideshow transition builder
                    $PlayInMode: 1,                                 //[Optional] 0 None (no play), 1 Chain (goes after main slide), 3 Chain Flatten (goes after main slide and flatten all caption animations), default value is 1
                    $PlayOutMode: 3                                 //[Optional] 0 None (no play), 1 Chain (goes before main slide), 3 Chain Flatten (goes before main slide and flatten all caption animations), default value is 1
                },

                $ArrowNavigatorOptions: {                       //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2                                  //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                },

                $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $SpacingX: 4,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 4                                    //[Optional] Vertical space between each item in pixel, default value is 0
                }
            };

            var jssorSliderc = new $JssorSlider$("sliderc_container", slidercOptions);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var parentWidth = jssorSliderc.$Elmt.parentNode.clientWidth;
                if (parentWidth)
                    jssorSliderc.$ScaleWidth(Math.max(Math.min(parentWidth, 960), 300));
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end

            //slider cluster controller code begin
            function SliderCluster(mainSlider, autoPlayInterval) {
                var _Self = this;
                var _NestedSliders = [];
                var _NestedSliderCurrent;

                var _CaptionInCounter = 0;

                function OnChildSliderStateChange(currentIndex, progress, progressBegin, idleBegin, idleEnd, progressEnd) {
                    if (progress == idleBegin) {
                        if (!(++_CaptionInCounter % 4)) {

                            _NestedSliderCurrent && _NestedSliderCurrent.$Pause();

                            mainSlider.$Play(true);
                        }
                    }
                }

                function OnMainSliderStateChange(currentIndex, progress, progressBegin, idleBegin, idleEnd, progressEnd) {

                    _NestedSliderCurrent = _NestedSliders[currentIndex];

                    if (_NestedSliderCurrent) {
                        if (progress == idleBegin) {

                            mainSlider.$Pause();
                            _NestedSliderCurrent.$Play(true);
                        }
                        else if (progress == progressBegin) {
                            _CaptionInCounter = 0;
                            mainSlider.$Play(true);
                        }
                    }
                }

                function OnMainSliderSwipeStart(position, virtualPosition) {
                    _NestedSliderCurrent && _NestedSliderCurrent.$Pause();
                    mainSlider.$Pause();
                }

                function OnMainSliderPark(slideIndex, fromIndex) {
                    _CaptionInCounter = 0;
                    mainSlider.$Play();
                }

                _Self.$AddChildSlider = function (childSlider, slideIndex) {
                    _NestedSliders[slideIndex] = childSlider;
                    childSlider.$On($JssorSlider$.$EVT_STATE_CHANGE, OnChildSliderStateChange);
                };

                _Self.$Start = function () {
                    mainSlider.$On($JssorSlider$.$EVT_PARK, OnMainSliderPark);
                    mainSlider.$On($JssorSlider$.$EVT_STATE_CHANGE, OnMainSliderStateChange);
                    mainSlider.$On($JssorSlider$.$EVT_SWIPE_START, OnMainSliderSwipeStart);

                    mainSlider.$Play(true);
                }
            }

            var sliderCluster = new SliderCluster(jssorSliderc);
            sliderCluster.$AddChildSlider(jssorSlider1, 0);
            sliderCluster.$AddChildSlider(jssorSlider2, 1);
            sliderCluster.$AddChildSlider(jssorSlider3, 2);
            sliderCluster.$Start();

            //slider cluster controller code end
        });
    </script>
    <div style="position: relative; margin-top: 10px; top: 0px; left: 0px; width:100%; text-align: center; background-image: url(../img/home/back-dice-02.jpg); border-top: 1px solid gray; border-bottom: 1px solid gray; overflow: hidden;">
        <!-- Jssor Slider Begin -->
        <!-- To move inline styles to css file/block, please specify a class name for each element. -->  
        <div id="sliderc_container" style="position: relative; margin: 0 auto; width: 960px;
            height: 450px; text-align: left; overflow: hidden;">
 
            <!-- Slides Container --> 
            <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 960px; height: 450px;
                overflow: hidden;">
                <div>
                    <!-- Jssor Slider Begin -->
                    <!-- To move inline styles to css file/block, please specify a class name for each element. --> 
                    <div id="slider1_container" style="position: relative; top: 90px; left: 0px; width: 600px;
                        height: 300px; overflow: hidden; border-radius: 8px;">

                        <!-- Loading Screen -->
                        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                                background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                            <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
                                top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                        </div>

                        <!-- Slides Container -->
                        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 600px; height: 300px; overflow: hidden;">
                            <div>
                                <a u="image" href="http://www.jssor.com/demos/image-slider.html"><img src="../img/photography/002.jpg" alt="image slider" /></a>
                                <div u=caption t="*" class="captionOrange"  style="position:absolute; left:20px; top: 30px; width:300px; height:30px;"> 
                                mobile ready, touch swipe
                                </div>
                            </div>
                            <div>
                                <a u="image" href="http://www.jssor.com/demos/image-slider.html"><img src="../img/photography/003.jpg" alt="jqeury image slider" /></a>
                                <div u=caption t="*" class="captionOrange"  style="position:absolute; left:20px; top: 30px; width:300px; height:30px;"> 
                                finger catchable right to left
                                </div>
                            </div>
                            <div>
                                <a u="image" href="http://www.jssor.com/demos/image-slider.html"><img src="../img/photography/004.jpg" alt="responsive image slider" /></a>
                                <div u=caption t="*" class="captionOrange"  style="position:absolute; left:20px; top: 30px; width:300px; height:30px;"> 
                                responsive, scale smoothly
                                </div>
                            </div>
                            <div>
                                <a u="image" href="http://www.jssor.com/demos/image-slider.html"><img src="../img/photography/005.jpg" alt="touch swipe image slider" /></a>
                                <div u=caption t="*" class="captionOrange"  style="position:absolute; left:20px; top: 30px; width:300px; height:30px;"> 
                                random caption transition
                                </div>
                            </div>
                        </div>
        
                        <!--#region Bullet Navigator Skin Begin -->
                        <!-- Help: http://www.jssor.com/development/slider-with-bullet-navigator-jquery.html -->
                        <!-- bullet navigator container -->
                        <div u="navigator" class="jssorb01" style="bottom: 16px; right: 10px;">
                            <!-- bullet navigator item prototype -->
                            <div u="prototype"></div>
                        </div>
                        <!--#endregion Bullet Navigator Skin End -->
        
                        <!--#region Arrow Navigator Skin Begin -->
                        <!-- Help: http://www.jssor.com/development/slider-with-arrow-navigator-jquery.html -->
                        <style>
                            /* jssor slider arrow navigator skin 02 css */
                            /*
                            .jssora02l                  (normal)
                            .jssora02r                  (normal)
                            .jssora02l:hover            (normal mouseover)
                            .jssora02r:hover            (normal mouseover)
                            .jssora02l.jssora02ldn      (mousedown)
                            .jssora02r.jssora02rdn      (mousedown)
                            */
                            .jssora02l, .jssora02r {
                                display: block;
                                position: absolute;
                                /* size of arrow element */
                                width: 55px;
                                height: 55px;
                                cursor: pointer;
                                background: url(../img/a02.png) no-repeat;
                                overflow: hidden;
                            }
                            .jssora02l { background-position: -3px -33px; }
                            .jssora02r { background-position: -63px -33px; }
                            .jssora02l:hover { background-position: -123px -33px; }
                            .jssora02r:hover { background-position: -183px -33px; }
                            .jssora02l.jssora02ldn { background-position: -3px -33px; }
                            .jssora02r.jssora02rdn { background-position: -63px -33px; }
                        </style>
                        <!-- Arrow Left -->
                        <span u="arrowleft" class="jssora02l" style="top: 123px; left: 8px;">
                        </span>
                        <!-- Arrow Right -->
                        <span u="arrowright" class="jssora02r" style="top: 123px; right: 8px;">
                        </span>
                        <!--#endregion Arrow Navigator Skin End -->
        
                        <a style="display: none" href="http://www.jssor.com">Bootstrap Slider</a>
                    </div>
                    <!-- Jssor Slider End -->
                    <div u="caption" t="RTT*JUP|BR" t2="SPACESHIP|RB" style="position: absolute; left: 0px;top:30px;width:600px;height:30px;font-size:28px;color:#fff;line-height:30px; text-align: center;">
                    widely used image slider example
                    </div>
                    <div style="position: absolute; top: 110px; left: 640px; width: 320px; height: 250px;">
                        <div u="caption" t="TEAM_1" d="-200" du="50%" class="captionSymbol" style="position: absolute; top: 10px; left: 0px; width: 30px; height: 30px;">+</div>
                        <div u="caption" t="TEAM_1" d="-200" y="100%" class="captionOrange" style="position: absolute; top: 10px; left: 40px; width: 280px; height: 30px;">
                        mobile ready, drag move
                        </div>
                        <div u="caption" t="TEAM_1" d="-200" du="50%" class="captionSymbol" style="position: absolute; top: 60px; left: 0px; width: 30px; height: 30px;" debug-id="team-caption">+</div>
                        <div u="caption" t="TEAM_1" d="-200" y="50%" class="captionOrange" style="position: absolute; top: 60px; left: 40px; width: 280px; height: 30px;">
                        touch swipe, touch freeze
                        </div>
                        <div u="caption" t="TEAM_1" d="-200" du="50%" class="captionSymbol" style="position: absolute; top: 110px; left: 0px; width: 30px; height: 30px;">+</div>
                        <div u="caption" t="TEAM_1" d="-200" y="0" class="captionOrange" style="position: absolute; top: 110px; left: 40px; width: 280px; height: 30px;">
                        responsive, scale smoothly
                        </div>
                        <div u="caption" t="TEAM_1" d="-200" du="50%" class="captionSymbol" style="position: absolute; top: 160px; left: 0px; width: 30px; height: 30px;">+</div>
                        <div u="caption" t="TEAM_1" d="-200" y="-50%" class="captionOrange" style="position: absolute; top: 160px; left: 40px; width: 280px; height: 30px;">
                        random caption transition
                        </div>
                        <div u="caption" t="TEAM_1" d="-200" du="50%" class="captionSymbol" style="position: absolute; top: 210px; left: 0px; width: 30px; height: 30px;">+</div>
                        <div u="caption" t="TEAM_1" d="-200" y="-100%" class="captionOrange" style="position: absolute; top: 210px; left: 40px; width: 280px; height: 30px;">
                        arrow key navigation
                        </div>
                    </div>
                </div>
                <div>
                    <!-- Jssor Slider Begin -->
                    <!-- To move inline styles to css file/block, please specify a class name for each element. --> 
                    <div id="slider2_container" style="position: relative; top: 30px; left: 360px; width: 600px;
                        height: 300px; overflow: hidden; border-radius: 8px; zoom: 1; filter: matrix">

                        <!-- Loading Screen -->
                        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                                background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                            <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
                                top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                        </div>

                        <!-- Slides Container -->
                        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 600px; height: 300px;
                            overflow: hidden;">
                            <div>
                                <a u=image href="http://www.jssor.com/demos/banner-rotator.html"><img src="5.jpg" alt="banner rotator" /></a>
                                <div u=caption t="*" class="captionOrange"  style="position:absolute; left:20px; top: 30px; width:300px; height:30px;"> 
                                slideshow transition twins
                                </div>
                            </div>
                            <div>
                                <a u=image href="http://www.jssor.com/demos/banner-rotator.html"><img src="6.jpg" alt="jquery banner rotator" /></a>
                                <div u=caption t="*" class="captionOrange"  style="position:absolute; left:20px; top: 30px; width:300px; height:30px;"> 
                                random caption transition
                                </div>
                            </div>
                            <div>
                                <a u=image href="http://www.jssor.com/demos/banner-rotator.html"><img src="7.jpg" alt="responsive banner rotator" /></a>
                                <div u=caption t="*" class="captionOrange"  style="position:absolute; left:20px; top: 30px; width:300px; height:30px;"> 
                                mobile ready, touch swipe
                                </div>
                            </div>
                            <div>
                                <a u=image href="http://www.jssor.com/demos/banner-rotator.html"><img src="8.jpg" alt="touch swipe banner rotator" /></a>
                                <div u=caption t="*" class="captionOrange"  style="position:absolute; left:20px; top: 30px; width:300px; height:30px;"> 
                                responsive, scale smoothly
                                </div>
                            </div>
                        </div>
        
                        <!--#region Bullet Navigator Skin Begin -->
                        <!-- Help: http://www.jssor.com/development/slider-with-bullet-navigator-jquery.html -->
                        <!-- bullet navigator container -->
                        <div u="navigator" class="jssorb01" style="bottom: 16px; right: 10px;">
                            <!-- bullet navigator item prototype -->
                            <div u="prototype"></div>
                        </div>
                        <!--#endregion Bullet Navigator Skin End -->
        
                        <!--#region Arrow Navigator Skin Begin -->
                        <!-- Arrow Left -->
                        <span u="arrowleft" class="jssora05l" style="top: 123px; left: 8px;">
                        </span>
                        <!-- Arrow Right -->
                        <span u="arrowright" class="jssora05r" style="top: 123px; right: 8px;">
                        </span>
                        <!--#endregion Arrow Navigator Skin End -->
                        <a style="display: none" href="http://www.jssor.com">Bootstrap Slider</a>
                    </div>
                    <!-- Jssor Slider End -->
                    <div u="caption" t="T|IE*IE" t2="B*IB" style="position: absolute; left: 360px;top:360px;width:600px;height:30px;font-size:28px;color:#fff;line-height:30px; text-align: center;">
                    worldwide popular banner rotator example
                    </div>
                    <a class="captionTextBlack" u="caption" t="CLIP|L" d="-200" href="http://www.jssor.com/development/tool-caption-transition-viewer.html"
                        style="position: absolute; top: 30px; left: 0px; width: 320px; height: 30px; font-size: 26px; background-color:transparent;">390+
                        caption transitions</a>

                    <div u="caption" t="ZM" t2="NO" style="position: absolute; top: 80px; left: 0px; width: 320px; height: 80px;">
                        <div u="caption" t2="TEAM_2" class="captionOrange" style="position: absolute; top: 0px; left: 0px; width: 200px; height: 30px;">
                            caption can be
                        </div>            
                        <div u="caption" t2="TEAM_2" class="captionBlack" style="position: absolute; top: 40px; left: 0px; width: 100px; height: 30px;">
                            in team
                        </div>
                        <div u="caption" t2="TEAM_2" class="captionBlack" style="position: absolute; top: 40px; left: 130px; width: 100px; height: 30px;">
                            nested
                        </div>
                    </div>

                    <a class="captionTextBlack" u="caption" t="L|EP" href="http://www.jssor.com/development/tool-slideshow-transition-viewer.html"
                        style="position: absolute; top: 210px; left: 0px; width: 320px; height: 30px; font-size: 26px; background-color:transparent;">360+
                        slideshow transitions</a>

                    <div u="caption" t="B*IB" t2="NO" style="position: absolute; top: 260px; left: 0px; width: 320px; height: 80px;">
                        <div u="caption" t2="TEAM_2" class="captionOrange" style="position: absolute; top: 0px; left: 0px; width: 200px; height: 30px;">
                            slideshow can play
                        </div>
                        <div u="caption" t2="TEAM_2" class="captionBlack" style="position: absolute; top: 40px; left: 0px; width: 100px; height: 30px;">
                            inside
                        </div>
                        <div u="caption" t2="TEAM_2" class="captionBlack" style="position: absolute; top: 40px; left: 130px; width: 100px; height: 30px;">
                            outside
                        </div>
                    </div>
                </div>
                <div>
                    <!-- Jssor Slider Begin -->
                    <!-- To move inline styles to css file/block, please specify a class name for each element. --> 
                    <div id="slider3_container" style="position: relative; top: 90px; left: 360px; width: 600px;
                        height: 300px; overflow: hidden; border-radius: 8px;">

                        <!-- Loading Screen -->
                        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                                background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                            <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
                                top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                        </div>

                        <!-- Slides Container -->
                        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 600px; height: 300px;
                            overflow: hidden;">
                            <div>
                                <a u=image href="http://www.jssor.com/demos/banner-slider.html"><img src="5.jpg" alt="banner slider" /></a>
                                <div u="thumb">Do you notice it is draggable by mouse/finger?</div>
                            </div>
                            <div>
                                <a u=image href="http://www.jssor.com/demos/banner-slider.html"><img src="6.jpg" alt="jquery banner slider" /></a>
                                <div u="thumb">Did you drag by either horizontal or vertical?</div>
                            </div>
                            <div>
                                <a u=image href="http://www.jssor.com/demos/banner-slider.html"><img src="7.jpg" alt="responsive banner slider" /></a>
                                <div u="thumb">Do you notice navigator responses when drag?</div>
                            </div>
                            <div>
                                <a u=image href="http://www.jssor.com/demos/banner-slider.html"><img src="8.jpg" alt="touch swipe banner slider" /></a>
                                <div u="thumb">Do you notice arrow responses when click?</div>
                            </div>
                        </div>

                        <!--#region Thumbnail Navigator Skin Begin -->
                        <!-- Help: http://www.jssor.com/development/slider-with-thumbnail-navigator-jquery.html -->
                        <!-- thumbnail navigator container -->
                        <div u="thumbnavigator" class="slider3-T" style="position: absolute; bottom: 0px; left: 0px; height:45px; width:600px;">
                            <div style="filter: alpha(opacity=40); opacity:0.4; position: absolute; display: block;
                                background-color: #000; top: 0px; left: 0px; width: 100%; height: 100%;">
                            </div>
                            <!-- Thumbnail Item Skin Begin -->
                            <div u="slides">
                                <div u="prototype" style="POSITION: absolute; WIDTH: 600px; HEIGHT: 45px; TOP: 0; LEFT: 0;">
                                    <div u="thumbnailtemplate" style="font-family: verdana; font-weight: normal; POSITION: absolute; WIDTH: 100%; HEIGHT: 100%; TOP: 0; LEFT: 0; color:#fff; line-height: 45px; font-size:20px; padding-left:10px;"></div>
                                </div>
                            </div>
                            <!-- Thumbnail Item Skin End -->
                        </div>
                        <!--#endregion ThumbnailNavigator Skin End -->
        
                        <!--#region Bullet Navigator Skin Begin -->
                        <!-- Help: http://www.jssor.com/development/slider-with-bullet-navigator-jquery.html -->
                        <!-- bullet navigator container -->
                        <div u="navigator" class="jssorb01" style="bottom: 16px; right: 10px;">
                            <!-- bullet navigator item prototype -->
                            <div u="prototype"></div>
                        </div>
                        <!--#endregion Bullet Navigator Skin End -->
                        
                        <!--#region Arrow Navigator Skin Begin -->
                        <!-- Arrow Left -->
                        <span u="arrowleft" class="jssora05l" style="top: 123px; left: 8px;">
                        </span>
                        <!-- Arrow Right -->
                        <span u="arrowright" class="jssora05r" style="top: 123px; right: 8px;">
                        </span>
                        <!--#endregion Arrow Navigator Skin End -->
                        <a style="display: none" href="http://www.jssor.com">Bootstrap Slider</a>
                    </div>
                    <!-- Jssor Slider End -->
                    <div u="caption" t="L*IB" t2="SPACESHIP|LB" style="position: absolute; left: 360px;top:30px;width:600px;height:30px;font-size:28px;color:#fff;line-height:30px; text-align: center;">
                    supper scalable banner slider example
                    </div>
                    <div class="captionTextBlack" u="caption" t="CLIP|LR" d="-200"
                        style="position: absolute; top: 60px; left: 0px; width: 320px; height: 30px; font-size: 26px; background-color:transparent;">deep ui comstomization</div>

                    <div u="caption" t2="ZM" style="position: absolute; top: 120px; left: 0px; width: 320px; height: 120px;">
                        <div u="caption" class="captionOrange" t="TEAM_2" t2="NO" d=-300 style="position: absolute; top: 0px; left: 0px; width: 200px; height: 30px;">
                            image thumbnail
                        </div>            
                        <div u="caption" class="captionBlack" t="TEAM_2" t2="NO" d=-300 style="position: absolute; top: 40px; left: 0px; width: 200px; height: 30px;">
                            text thumbnail
                        </div>
                        <div u="caption" class="captionBlack" t="TEAM_2" t2="NO" d=-300 style="position: absolute; top: 80px; left: 00px; width: 200px; height: 30px;">
                            mixed thumbnail
                        </div>
                    </div>

                    <div u="caption" t="RTT|360" t2="NO" style="position: absolute; top: 290px; left: 0px; width: 320px; height: 80px;">
                        <div u="caption" class="captionOrange" t2="TEAM_2" style="position: absolute; top: 0px; left: 0px; width: 120px; height: 30px;">
                            bullets
                        </div>            
                        <div u="caption" class="captionOrange" t2="TEAM_2" style="position: absolute; top: 40px; left: 0px; width: 120px; height: 30px;">
                            thumbnails
                        </div>            
                        <div u="caption" class="captionBlack" t2="TEAM_2" style="position: absolute; top: 20px; left: 130px; width: 30px; height: 30px;">
                            in
                        </div>
                        <div u="caption" class="captionBlack" t2="TEAM_2" style="position: absolute; top: 0px; left: 170px; width: 120px; height: 30px;">
                            horizontal
                        </div>            
                        <div u="caption" class="captionBlack" t2="TEAM_2" style="position: absolute; top: 40px; left: 170px; width: 120px; height: 30px;">
                            vertical
                        </div> 
                    </div>
                </div>
            </div> 
 
            <!--#region Bullet Navigator Skin Begin -->
            <!-- Help: http://www.jssor.com/development/slider-with-bullet-navigator-jquery.html -->
            <style>
                /* jssor slider bullet navigator skin 03 css */
                /*
                .jssorb03 div           (normal)
                .jssorb03 div:hover     (normal mouseover)
                .jssorb03 .av           (active)
                .jssorb03 .av:hover     (active mouseover)
                .jssorb03 .dn           (mousedown)
                */
                .jssorb03 {
                    position: absolute;
                }
                .jssorb03 div, .jssorb03 div:hover, .jssorb03 .av {
                    position: absolute;
                    /* size of bullet elment */
                    width: 21px;
                    height: 21px;
                    text-align: center;
                    line-height: 21px;
                    color: white;
                    font-size: 12px;
                    background: url(../img/b03.png) no-repeat;
                    overflow: hidden;
                    cursor: pointer;
                }
                .jssorb03 div { background-position: -5px -4px; }
                .jssorb03 div:hover, .jssorb03 .av:hover { background-position: -35px -4px; }
                .jssorb03 .av { background-position: -65px -4px; }
                .jssorb03 .dn, .jssorb03 .dn:hover { background-position: -95px -4px; }
            </style>
            <!-- bullet navigator container -->
            <div u="navigator" class="jssorb03" style="bottom: 16px; right: 6px;">
                <!-- bullet navigator item prototype -->
                <div u="prototype"><div u="numbertemplate"></div></div>
            </div>
            <!--#endregion Bullet Navigator Skin End -->
        
            <!--#region Arrow Navigator Skin Begin -->
            <!-- Help: http://www.jssor.com/development/slider-with-arrow-navigator-jquery.html -->
            <style>
                /* jssor slider arrow navigator skin 20 css */
                /*
                .jssora20l                  (normal)
                .jssora20r                  (normal)
                .jssora20l:hover            (normal mouseover)
                .jssora20r:hover            (normal mouseover)
                .jssora20l.jssora20ldn      (mousedown)
                .jssora20r.jssora20rdn      (mousedown)
                */
                .jssora20l, .jssora20r {
                    display: block;
                    position: absolute;
                    /* size of arrow element */
                    width: 55px;
                    height: 55px;
                    cursor: pointer;
                    background: url(../img/a20.png) no-repeat;
                    overflow: hidden;
                }
                .jssora20l { background-position: -3px -33px; }
                .jssora20r { background-position: -63px -33px; }
                .jssora20l:hover { background-position: -123px -33px; }
                .jssora20r:hover { background-position: -183px -33px; }
                .jssora20l.jssora20ldn { background-position: -243px -33px; }
                .jssora20r.jssora20rdn { background-position: -303px -33px; }
            </style>
            <!-- Arrow Left -->
            <span u="arrowleft" class="jssora20l" style="top: 123px; left: 8px;">
            </span>
            <!-- Arrow Right -->
            <span u="arrowright" class="jssora20r" style="top: 123px; right: 8px;">
            </span>
            <!--#endregion Arrow Navigator Skin End -->
            <a style="display: none" href="http://www.jssor.com">Bootstrap Slider</a>
        </div> 
        <!-- Jssor Slider End -->
    </div>
</body> 
</html>