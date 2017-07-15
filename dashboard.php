<?php
	include 'includes/functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dashboard</title>

	<!-- Font awesome css -->
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- custom style.css -->
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body id="body-rp">
	<?php include 'includes/header.php'; ?>
		<div class='container'>
			<div id="lsidebar">
				<div class="container">
					<aside>
						<div class="card">
							<div id="user-info">
								<img src="assets/images/default.jpg" alt=""><br>
								<div id="text">
									<h4><?php echo "".$_SESSION['first']." ".$_SESSION['last']; ?></h4>
								<a href="">Edit Profile</a>
								</div>
							</div>
						</div>
						<div class="card">
							<div id="sidenav">
								<nav>
									<ul>
										<li><a href="">News Feed <i id="cdown" class="fa fa-caret-down"></i></a></li>
										<li><a href="">Messages</a></li>
										<li><a href="">Events</a></li>
										<li><a href="">Photos</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</aside>
				</div>
			</div>
			<div id="main-wall">
				<div class="container">
					<section id="post-section">
						<div class="card">
							<?php echo "<form action='".post_content($conn)."' method='POST'>
								<textarea name='caption' id='' cols='30' rows='10' placeholder='What&#39;s on your mind?'></textarea><br>
								<button class='btn-1' type='submit' name='post' value='post'>post</button>
							</form><br>";
							?>
						</div>
						<?php
							show_content($conn);
						?>
					</section>
				</div>
			</div>
			<div id="rsidebar">
				<div class="container">
					<aside>
						<div class="card">
							<div id="user-info">
								<img src="assets/images/default.jpg" alt=""><br>
								<div id="text">
									<h4><?php echo "".$_SESSION['first']." ".$_SESSION['last']; ?></h4>
								<a href="">Edit Profile</a>
								</div>
							</div>
						</div>
						<div class="card">
							<div id="sidenav">
								<nav>
									<ul>
										<li><a href="">News Feed</a></li>
										<li><a href="">Messages</a></li>
										<li><a href="">Events</a></li>
										<li><a href="">Photos</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</aside>
				</div>
			</div>
		</div>
	
	
</body>
</html>


