
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2022 <div class="bullet"></div> Template By <a href="https://getstisla.com/">Stisla</a>
        </div>
        <div class="footer-right">
          2.3.0
        </div>
      </footer>
    </div>
  </div> 

      <!-- General JS Scripts -->
    <script src="<?=base_url()?>/stisla/node_modules/jquery/dist/jquery.min.js"  ></script>
    <script src="<?=base_url()?>/stisla/node_modules/popper.js/dist/umd/popper.min.js"  ></script>
    <script src="<?=base_url()?>/stisla/node_modules/bootstrap/dist/js/bootstrap.min.js"  ></script>
    <script src="<?=base_url()?>/stisla/node_modules/jquery.nicescroll/dist/jquery.nicescroll.min.js"></script>
    <script src="<?=base_url()?>/stisla/node_modules/moment/min/moment.min.js"></script>
    <script src="<?=base_url()?>/stisla/assets/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="<?=base_url()?>/stisla/assets/js/page/modules-ion-icons.js"></script> 
  	<script src="<?=base_url()?>/stisla/node_modules/owl.carousel/dist/owl.carousel.min.js"></script>


    <!-- Page Specific JS File -->
 
    <!-- Template JS File -->
    <script src="<?=base_url()?>/stisla/assets/js/scripts.js"></script>
    <script src="<?=base_url()?>/stisla/assets/js/custom.js"></script>
 

	<script>
		$( "#closeX" ).click(function() {
			$( "#show_error" ).hide();
		});

		$( "#post2" ).hide();

		$( "#btnpost1" ).click(function() {
			$( "#post2" ).hide();
			$( "#post1" ).show();
		});
		$( "#btnpost2" ).click(function() {
			$( "#post1" ).hide();
			$( "#post2" ).show();
		});

		$("#users-carousel").owlCarousel({
		items: 100,
		margin: 20,
		autoplay: true,
		autoplayTimeout: 5000,
		loop: false,
		responsive: {
			0: {
			items: 3
			},
			768: {
			items: 6
			},
			1024: {
			items: 6
			},
			1440: {
			items: 10
			}
		}
		});

	</script>


</body>
</html>
