
      <!-- Main Content -->
      <div class=" col-lg-6 offset-lg-3 main-content pt-lg-5  ">
        <section class="section pt-lg-5">
			<div class="section-header py-5">
				<div class=" w-100 ">

					<div class="col-lg-10 mx-auto">  

					
					<?php if (!empty(session()->getFlashdata('error'))) : ?>  
						<div class="alert alert-warning" id="show_error">
							<a href="#" id="closeX" class="ion-close-circled float-right" style="font-size:20px"> 
							</a>
							<span > 
								<?php echo session()->getFlashdata('error'); ?>
							</span> 
						</div>
					<?php endif; ?>   

					</div>
					<div class="col-lg-10 mx-auto">  
						<form action="<?=base_url()?>/login/vv" method="post">
						<div class="form-group"> 
							<div class="input-group">
								<div class="input-group-prepend">
									<div class="input-group-text">
										<i class="ion ion-person"></i>
									</div>
								</div>
								<input type="text" class="form-control daterange-cus" placeholder="Username" name="u_name">
							</div>
						</div>  
						<div class="form-group"> 
							<div class="input-group">
								<div class="input-group-prepend">
									<div class="input-group-text">
										<i class="ion ion-locked"></i>
									</div>
								</div>
								<input type="text" class="form-control daterange-cus" placeholder="Password" name="p_name">
							</div>
						</div>   
						<div class="form-group"> 
							<button class="btn btn-primary btn-block">Login</button>
						</div>   
						</form>
					</div> 
					<div class="col-lg-10 mx-auto">  
						<div class="w-100  text-center px-2">
							<span class=" px-3 bg-white">OR</span>
							<hr class="border-top" style="margin:-11px">
						</div>
						
						<div class="w-100 mt-5 text-center px-1">
							<?=$google_button?>
						</div>

						<div class="w-100 mt-3 text-center">
							<a href="">Lupa Password?</a>
						</div>
					</div> 
				</div> 
			</div> 
			<div class="section-header py-5">
				<div class=" w-100 "> 
					<div class="col-lg-10 mx-auto">   
						<div class="w-100 mt-1 text-center">
							Tidak punya Account? 
							<a href="<?=base_url()?>/register">Buat</a>
						</div>
					</div> 
				</div> 
			</div>	
        </section>
      </div>