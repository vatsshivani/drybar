<div class="footer">
		<div class="top-ftr py-5">
			<div class="container">
				<div class="row">
				<div class="col-md-4 info">
					<img src="img/logo.png" />
						<p class="mt-3">Beauty makes you bold and bullish and we make you beautiful, we are 'Dry Bar Salon'. We have made a splash in the recent years and risen to fame as one of the most trusted unisex beauty salons all across the globe. </p>
						<div class="s_icons mt-4">
							<a href="#"><i class="fa fa-facebook wow zoomIn" style="background-color: #3C5A99;"></i></a>
							<a href="#"><i class="fa fa-twitter wow zoomIn" style="background-color:#1DA1F2;"></i></a>
							<a href="#"><i class="fa fa-google-plus wow zoomIn" style="background-color:#df0b15;"></i></a>
							<a href="#"><i class="fa fa-youtube wow zoomIn" style="background-color:  #ff0000;"></i></a>
							<a href="#"><i class="fa fa-linkedin wow zoomIn" style="background-color: #0077B5;"></i></a>
					
						</div>
				</div>
				<div class="col-md-4">
					<h4 class="mb-3">Contact Info</h4>
					<ul class="wow fadeIn">
						<li><i class="fa fa-phone mr-2"></i><a href="#">+91-9266624444, </a><a href="#">+91-9266 625 555, </a><a href="#">0120-6564555</a></li>
						<li><i class="fa fa-envelope mr-2"></i><a href="#">info@drybarsalon.in</a></li>
						<li><i class="fa fa-clock-o mr-2"></i><a href="#">10AM - 8PM</a></li>
						<li><i class="fa fa-map-marker mr-2"></i><a href="#">elite mart at elite homes, sector 77,Noida</a></li>
					</ul>
				</div>
				<div class="col-md-4">
					<h4 class="mb-3">Reach Us</h4>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3503.94314362306!2d77.38911631423497!3d28.57146998244189!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cef68233a014b%3A0xf91a2fdc5d4a12c8!2sDrybar+Unisex+Salon!5e0!3m2!1sen!2sin!4v1559031301515!5m2!1sen!2sin" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
			</div>
		</div>
		<div class="down-ftr">
			<p class="mb-0 text-center wow fadeIn">Copyright © 2019. All Rights Reserved. Designed By <span><a href="#">Global Ads</a></span></p>
			
		</div>
	</div>
	<div class="s-top"><i class="fa fa-angle-up"></i></div>
	<div class="modal fade" id="mymodal" data-backdrop="static">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header pb-0">
                            <button type="button" class="close" data-dismiss="modal" style="color: black;">&times;</button>
                        </div>
                        <div class="modal-body pt-0">
                            <div class="row">
                            	<div class="col-md-12">
                            	<div class="frm px-3">
						<h4 class="pb-2">Make An<span>Appointment</span></h4>
						<div class="btmimage"><img src="img/heading-art-01.svg" /></div>
						<form action="send1.php" method="post">
							<input type="text" class="form-control my-4" name="nm" placeholder="Name*" required/>
							
							
							<input type="text" class="form-control my-4" name="email" placeholder="Email*" required />
							<input type="text" class="form-control my-4" name="mob" placeholder="Mobile*" required />
							<input type="text" class="form-control my-4" name="city" placeholder="City*" required />

							
							<textarea name="rq" id="rq" rows="3" class="form-control my-4" placeholder="Message" required></textarea>
							<img src="captcha.php" alt="captcha code"/>
                                <input type="text" class="form-control my-4" placeholder="Enter the Code" name="vercode" id="vercode" required data-validation-required-message="Please enter the Code">
							<p><button type="submit" class="btn2">Submit</button>
							</p>
						</form>
					</div>
                            	</div>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
<script src="assets/slick.js"></script>
<script src="assets/wow.min.js"></script>
<script src="js/jquery.countTo.js"></script>
<script>
	$(document).ready(function(){
	$('.testimonial').slick({
	   slidesToShow:1,
	   slidesToScroll:1,
       arrows:false,
       
       dots: true,
	   autoplay:true,
	   autoplaySpeed: 4000
	   	  
	   });
	$('.l-cont').slick({
	   slidesToShow:3,
	   slidesToScroll:1,
       arrows:false,
       dots: true,
	   autoplay:true,
	   cssEase: 'ease',
    speed: 2000,
	   autoplaySpeed: 4000,
	   responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        arrows:false
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
        arrows:false,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        arrows:false,
        slidesToScroll: 1
      }
    }
    ]	   
	   	  
	   });
	var ok = 0;

$(window).scroll(function(){
		
var pos = Math.floor($('.count-sec').offset().top);

var ht = $(window).height();

if (document.documentElement.scrollTop>=pos - ht && ok == 0)
{
		$('.count').countTo();
		ok=1;
}

if (document.documentElement.scrollTop>=100)
{
	$('.s-top').stop().fadeIn(800);
}
else
{
	$('.s-top').stop().fadeOut(800);
}
		
	});
$('.s-top').click(function(){
	$("html, body").animate({
        scrollTop:'0px'
      },1500);

});
	new WOW().init();
	/*$(window).scroll(function(){
			if ($(window).width()>768)
			{
			if(document.documentElement.scrollTop>90)
			{
				$('.navbar').addClass('animated fadeInDown fixed');

			}
			else
			{
				$('.navbar').removeClass('animated fadeInDown fixed');
			}
		}
		});*/
});
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>

<script type="text/javascript">
var revapi5,
	tpj;	
(function() {			
	if (!/loaded|interactive|complete/.test(document.readyState)) document.addEventListener("DOMContentLoaded",onLoad); else onLoad();	
	function onLoad() {				
		if (tpj===undefined) { tpj = jQuery; if("off" == "on") tpj.noConflict();}
	if(tpj("#rev_slider_5_1").revolution == undefined){
		revslider_showDoubleJqueryError("#rev_slider_5_1");
	}else{
		revapi5 = tpj("#rev_slider_5_1").show().revolution({
			sliderType:"standard",
			jsFileLocation:"//localhost/slider/wp-content/plugins/revslider/public/assets/js/",
			sliderLayout:"fullscreen",
			dottedOverlay:"none",
			delay:9000,
			navigation: {
				keyboardNavigation:"on",
				keyboard_direction: "horizontal",
				mouseScrollNavigation:"off",
 							mouseScrollReverse:"reverse",
				onHoverStop:"off",
				touch:{
					touchenabled:"on",
					touchOnDesktop:"off",
					swipe_threshold: 75,
					swipe_min_touches: 1,
					swipe_direction: "horizontal",
					drag_block_vertical: false
				}
				,
				arrows: {
					style:"metis",
					enable:true,
					hide_onmobile:true,
					hide_under:780,
					hide_onleave:true,
					hide_delay:1000,
					hide_delay_mobile:1200,
					tmp:'',
					left: {
						h_align:"left",
						v_align:"center",
						h_offset:20,
						v_offset:0
					},
					right: {
						h_align:"right",
						v_align:"center",
						h_offset:20,
						v_offset:0
					}
				}
			},
			responsiveLevels:[1240,1024,778,480],
			visibilityLevels:[1240,1024,778,480],
			gridwidth:[1240,1024,778,480],
			gridheight:[868,716,544,336],
			lazyType:"none",
			shadow:0,
			spinner:"spinner0",
			stopLoop:"off",
			stopAfterLoops:-1,
			stopAtSlide:-1,
			shuffle:"off",
			autoHeight:"off",
			fullScreenAutoWidth:"off",
			fullScreenAlignForce:"off",
			fullScreenOffsetContainer: "",
			fullScreenOffset: "",
			disableProgressBar:"on",
			hideThumbsOnMobile:"on",
			hideSliderAtLimit:0,
			hideCaptionAtLimit:0,
			hideAllCaptionAtLilmit:0,
			debugMode:false,
			fallbacks: {
				simplifyAll:"off",
				nextSlideOnWindowFocus:"off",
				disableFocusListener:false,
			}
		});
	}; /* END OF revapi call */
	
 }; /* END OF ON LOAD FUNCTION */
}()); /* END OF WRAPPING FUNCTION */
</script>
</body>
</html>