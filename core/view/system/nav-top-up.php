<div class="row border-bottom">
			<nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
			<div class="navbar-header">
				<a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>

			</div>
			<ul class="nav navbar-top-links navbar-right">
					<li>
						<h3 class="m-r-sm text-muted welcome-message">e-Musrenbang Kabupaten Pidie Mewujudkan Transparansi Perencanaan Pembangunan Daerah</h3>
					</li>

			</ul>
				<ul class="nav navbar-top-links navbar-right">
						<?php 
					
						if(!isset($_SESSION['user_level'])){ ?>
							
							
							<?php } else { ?>
							<li>
								<a href="../../../core/controller/system/logout.php">
									<i class="fa fa-sign-out"></i> Log out
								</a>
							</li>
							<?php }
						?>
				</ul>

			</nav>
        </div>