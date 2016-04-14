<!doctype html>
<!--[if lt IE 7]>   <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>     <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>     <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
<title>Global Influence</title>
<script type="text/javascript" src="content/js/jquery-1.11.3.min.js" ></script>
<link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link type="text/css" rel="stylesheet" href="content/custom.css">
<link type="text/css" rel="stylesheet" href="content/default.css">
<link type="text/css" rel="stylesheet" href="content/responsive.css">
<link rel="stylesheet" href="content/font-awesome2.min.css">
<script>
$(document).ready(function() {
    startSlider(0);
	startSlider2(0);
});

function startSlider(idx) {
    $span1 = $("#container .one").eq(idx);
	$span1.fadeIn('slow', function() {
        $span1.delay(2000).fadeIn('slow', function() {
          
               
                $span1.delay(2000).fadeOut('fast', function() {
				$span1.fadeOut('slow', function() {
                        if ($("#container .one").length - 1 == idx) {
                            startSlider(0);
                        }
                        else {
                            startSlider(idx + 1);
                        }
                    });
                });
            
        });
    });

}
function startSlider2(idx2) {
   $span2 = $("#container .two").eq(idx2);
    

	$span2.fadeIn('slow', function() {
        $span2.delay(2000).fadeIn('slow', function() {
          
               
                $span2.delay(2000).fadeOut('fast', function() {
				$span2.fadeOut('slow', function() {
                        if ($("#container .two").length - 1 == idx2) {
                            startSlider2(0);
                        }
                        else {
                            startSlider2(idx2 + 1);
                        }
                    });
                });
            
        });
    });
}
 </script>
</head>
<body>
<!--Main HTML--->
<div class="global-container relative">
	<div class="global-inner-container">
		<div class="global-logo row align-center ease">
			<a href="index.html">
				<img src="content/images/logo.png">
			</a>
		</div>
		<div class="text-area" id="container">
		<div class="row inner-text-area">
			<p class="gap-top gap-bottom">Global influence&reg; is a specialist division of Verbalisation&reg;</p>
			<p class="half-gap-top gap-bottom">We provide cutting-edge influence solutions for challenging, complex and high stakes environments.</p>
			<p class="no-gap-bottom double-gap-top upper-case under-line two">Our services include </p>
			<p class="no-gap-bottom double-gap-top upper-case under-line two">Recent clients include  </p>
			<p class="no-gap-bottom double-gap-top upper-case under-line two"></p>
			<p class="no-gap-bottom double-gap-top upper-case under-line two"></p>
			<p class="half-gap-top one">Research, strategy and behaviour change interventions – underpinned by our proprietary RAID™ insights and evaluation methodology.</p>
			<p class="half-gap-top one">Governments, NGOs, commercial organisations and high value individuals.</p>
			<p class="half-gap-top one">We solve real world problems. We deliver real world solutions. </p>
			<p class="half-gap-top one fs-50">Launching Soon..</p>
		</div>
		</div>
		
		<div class="row align-center footer absolute bottom left ">
		  <a class="j_email-icon" href="mailto:info@globalinfluence.com">
			<img src="content/images/email-icon.png">
		  </a>
		</div>
	</div>
</div>



</body>
</html>