
      <!-- Main Content -->
      <div class=" col-lg-6 offset-lg-3 main-content pt-lg-5  ">
        <section class="section pt-lg-5">
			<div class="section-header py-5">
				<div class=" w-100 ">
                    <div class="col-lg-10 mx-auto">   
                        <H4 class="text-center mb-3">Buat akun untuk melihat foto dan video dari teman Anda.</H4>
					</div>
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
						<form action="<?=base_url()?>/register/v" method="post">
						<div class="form-group"> 
							<div class="input-group">
								<div class="input-group-prepend">
									<div class="input-group-text">
										<i class="ion-android-mail"></i>
									</div>
								</div>
								<input type="email" class="form-control daterange-cus" placeholder="Email" name="email">
							</div>
						</div>  
						<div class="form-group"> 
							<div class="input-group">
								<div class="input-group-prepend">
									<div class="input-group-text">
										<i class="ion-android-happy"></i>
									</div>
								</div>
								<input type="text" class="form-control daterange-cus" placeholder="Nama Lengkap" name="namal">
							</div>
						</div>  
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
                        <div class="form-group text-center ">
                            <span class="my-2">Dengan mendaftar, Anda menyetujui Ketentuan, Kebijakan Data, dan Kebijakan Cookie kami.</span>
                        </div>
						<div class="form-group"> 
							<button class="btn btn-primary btn-block">Register</button>
						</div>   
						</form>
					</div>  
				</div> 
			</div>  
			<div class="section-header py-5">
				<div class=" w-100 "> 
					<div class="col-lg-10 mx-auto">   
						<div class="w-100 mt-1 text-center">
							Punya akun? 
							<a href="<?=base_url()?>/login">Masuk</a>
						</div>
					</div> 
				</div> 
			</div>	
        </section>
      </div>