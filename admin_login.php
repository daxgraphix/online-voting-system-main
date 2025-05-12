<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700;900&display=swap"
		rel="stylesheet">
</head>
<style>
	body {
		font-family: 'Quicksand', sans-serif;
		display: flex;
		justify-content: center;
		align-items: center;
		height: 100vh;
		margin: 0;
	}

	.form-container {
		background-color: #fff;
		padding: 30px 40px;
		border-radius: 10px;
		box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
		width: 300px;
		text-align: center;
	}

	.logo {
		width: 80px;
		margin-bottom: 15px;
	}

	.input-field {
		width: 100%;
		max-width: 250px;
		padding: 10px;
		margin-bottom: 20px;
		border-radius: 5px;
		border: 1px solid #ddd;
		font-size: 16px;
		font-family: 'Quicksand', sans-serif;
		transition: all 0.3s ease;
	}

	.btnSubmit {
		width: 100%;
		padding: 10px;
		background: linear-gradient(45deg, #00c6ff, #0072ff);
		color: white;
		border: none;
		border-radius: 5px;
		cursor: pointer;
		font-size: 16px;
		font-family: 'Quicksand', sans-serif;
		transition: all 0.3s ease;
	}

	.btnSubmit:hover {
		transform: scale(1.05);
		background-color: #45a049;
	}

	@media (max-width: 600px) {
		.form-container {
			width: 90%;
			padding: 20px;
		}

		h1 {
			font-size: 20px;
		}
	}
</style>

<body>
	<section class="sec">
		<div class="card">
			<div class="form-container">
				<!-- Logo -->
				<img src="./img/1.jpg" alt="UAUT Logo" class="logo">
				<div class="row">
					<div class="col-md-12">
						<h3>Admin Login</h3>
						<?php session_start();
						if (isset($_SESSION['error'])) {
							echo $_SESSION['error'];
							unset($_SESSION['error']);
						}
						?>
						<form action="process.php" method="post">
							<div class="form-group">
								<input required type="text" class="form-control" name="username" placeholder="Your Email *" value="" />
							</div>
							<div class="form-group">
								<input required type="password" class="form-control" name="password" placeholder="Your Password *" value="" />
							</div>
							<div class="form-group">
								<input required type="submit" class="btnSubmit" value="Login" />
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<script src="js/jquery-3.2.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>

</html>