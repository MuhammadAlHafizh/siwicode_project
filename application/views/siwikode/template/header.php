
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= base_url()?>assets/siwikode/style.css">
	<link rel="stylesheet" href="<?= base_url()?>assets/siwikode/css/bootstrap-grid.css">
	<link rel="stylesheet" href="<?= base_url()?>assets/siwikode/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url()?>assets/siwikode/css/bootstrap.css">
	<title>Document</title>
</head>
<body>
	<div class="bg-primary px-1 pt-3 container-fluid">
		<h3 class="text-white text-center">Sistem Informasi Wisata Kota Depok - SIWIKODE</h3>
		<nav class="navbar navbar-expand-lg navbar-dark">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
			  <ul class="navbar-nav mr-auto">
				<li class="nav-item">
				  <a class="nav-link text-white" href="<?= base_url("index.php/Clandingpage/")?>">Home</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link text-white" href="daftar_wisata.html">Rekreasi</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link text-white" href="daftar_kuliner.html">Kuliner</a>
				</li>
				
			  </ul>
			  <ul class="navbar-nav ml-auto">
				 
				  <?php if($this->session->userdata('role') == null) { ?>

					  <li class="nav-item">
					  	<a class="nav-link text-white" href="<?= base_url("index.php/clogin/")?>">Login</a>
				  	  </li>

				  <?php }
				  else { ?>
					  
						<!-- Nav Item - User Information -->
						<li class="nav-item dropdown no-arrow">
                            <a class="nav-link text-white dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $this->session->userdata('nama');?></span>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
				  
				  <?php } ?>

			  </ul>
			</div>
		</nav>
	</div>

