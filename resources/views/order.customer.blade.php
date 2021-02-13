<!doctype html>
<html lang="en">
  <head>
	<title>Order</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #8CEFFF;">
  			<b><a class="navbar-brand" href="dashboard.customer.blade.php">Yuk Cuci</a></b>
  			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  		</button>
  	  	<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    		<ul class="navbar-nav mr-auto mt-2 mt-lg-0">

      			<li class="nav-item active">
        		<a class="nav-link" href="dashboard.customer.blade.php">Dashboard <span class="sr-only">(current)</span></a>
      			</li>

      			<li class="nav-item active">
        		<a class="nav-link" href="paket.customer.blade.php">Daftar Paket</a>
      			</li>

	  			<li class="nav-item active">
        		<b><a class="nav-link" href="order.customer.blade.php">Order Paket</a></b>
      			</li>

    		</ul>
    			<form class="form-inline my-2 my-lg-0">
      			<button type="button" class="btn btn-dark right">Logout</button>
    			</form>
  	  	</div>
	</nav>

  <h1 class="order">Order</h1>
  <form class="form">
  		<div class="form-group">
    	<label for="exampleFormControlInput1">Nama</label>
    	<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Atas Nama">
  		</div>
  		<div class="form-group">
    		<label for="exampleFormControlSelect1">Daftar Paket</label>
    		<select class="form-control" id="exampleFormControlSelect1">
      			<option>Paket Biasa (15000/Kg)</option>
      			<option>Paket Jas (30000/Kg)</option>
      			<option>Paket Gorden (20000/Kg)</option>
    		</select>
  		</div>
  		<div class="form-group">
    	<label for="exampleFormControlTextarea1">Alamat</label>
    		<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  		</div>
  		<div class="form-group">
    	<label for="exampleFormControlInput1">No Telepon</label>
    	<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="08xxxx">
  		</div>
  		<div class="form-group">
    	<label for="exampleFormControlTextarea1">Deskripsi Tambahan</label>
    		<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  		</div>
  		<a class="btn btn-primary btn-lg" href="order.customer.blade.php" role="button">Order</a>
</form>









	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>