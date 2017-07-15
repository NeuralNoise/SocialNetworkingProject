<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	include 'includes/functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Photobin</title>

	<!-- font awesome css -->
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- custom css -->
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body id="mainPage">
	<div class="overlay">
		<header id="header-mp">
			<div class="container">
				<div id="branding">
					<a href="./"><h1>Photobin</h1></a>
				</div>
				<div id="login">
					<?php echo "<form action='".login($conn)."' method='POST'>
						<ul>
							<li>
								<input type='email' placeholder='Email' name='email'>
							</li>
							<li>
								<input type='password' placeholder='Password' name='pwd'><br>
								<a href=''>forgot password?</a>
							</li>
							<li>
								<button type='submit' name='btn-login' value='login' class='btn-1'>Log in</button>
							</li>
						</ul>
					</form>"; ?>
				</div>
			</div>
		</header>
		<!-- End of header file -->

		<section id="showcase">
			
				<div class="container">
					<div class="col-2">
						<div class="container">
							<div id="lhs">
								<i class="fa fa-photo"></i>
								<p>Share your disappearing memory to keep it alive.</p>
							</div>
						</div>
					</div>
					<div class="col-2">
						<div class="container">
							<div id="rhs">
								<div id="signuptxt">
									<h2>Create an account</h2>
									<p>It's free and always will be.</p>
								</div>
								<div id="signup">
									<?php echo "<form action='".signup($conn)."' method='POST'>
										<div id='fullName'>
											<input type='text' name='first' placeholder='First name'>
											<input type='text' name='surname' placeholder='surname'>
										</div>
										<div id='emailBlock'>
											<input type='email' name='email' placeholder='Email address'>
										</div>
										<div id='passBlock'>
											<input type='password' name='pwd' placeholder='New password'>
											<input type='password' name='pwd2' placeholder='Retype password'>
										</div>
										<div id='selectionBlock'>
											<h3>Birthday</h3>
											<select name='birthday_day' id='day' title='Day'>
												<option value='0' selected='1'>Day</option>
												<option value='1'>1</option>
												<option value='2'>2</option>
												<option value='3'>3</option>
												<option value='4'>4</option>
												<option value='5'>5</option>
												<option value='6'>6</option>
												<option value='7'>7</option>
												<option value='8'>8</option>
												<option value='9'>9</option>
												<option value='10'>10</option>
												<option value='11'>11</option>
												<option value='12'>12</option>
												<option value='13'>13</option>
												<option value='14'>14</option>
												<option value='15'>15</option>
												<option value='16'>16</option>
												<option value='17'>17</option>
												<option value='18'>18</option>
												<option value='19'>19</option>
												<option value='20'>20</option>
												<option value='21'>21</option>
												<option value='22'>22</option>
												<option value='23'>23</option>
												<option value='24'>24</option>
												<option value='25'>25</option>
												<option value='26'>26</option>
												<option value='27'>27</option>
												<option value='28'>28</option>
												<option value='29'>29</option>
												<option value='30'>30</option>
												<option value='31'>31</option>
											</select>
											<select name='birthday_month' id='month' title='Month'>
												<option value='0' selected='1'>Month</option>
												<option value='1'>Jan</option>
												<option value='2'>Feb</option>
												<option value='3'>Mar</option>
												<option value='4'>Apr</option>
												<option value='5'>May</option>
												<option value='6'>Jun</option>
												<option value='7'>Jul</option>
												<option value='8'>Aug</option>
												<option value='9'>Sept</option>
												<option value='10'>Oct</option>
												<option value='11'>Nov</option>
												<option value='12'>Dec</option>
											</select>
											<select name='birthday_year' id='year' title='Year'>
												<option value='0' selected='1'>Year</option>
												<option value='2017'>2017</option>
												<option value='2016'>2016</option>
												<option value='2015'>2015</option>
												<option value='2014'>2014</option>
												<option value='2013'>2013</option>
												<option value='2012'>2012</option>
												<option value='2011'>2011</option>
												<option value='2010'>2010</option>
												<option value='2009'>2009</option>
												<option value='2008'>2008</option>
												<option value='2007'>2007</option>
												<option value='2006'>2006</option>
												<option value='2005'>2005</option>
												<option value='2004'>2004</option>
												<option value='2003'>2003</option>
												<option value='2002'>2002</option>
												<option value='2001'>2001</option>
												<option value='2000'>2000</option>
												<option value='1999'>1999</option>
												<option value='1998'>1998</option>
												<option value='1997'>1997</option>
												<option value='1996'>1996</option>
												<option value='1995'>1995</option>
												<option value='1994'>1994</option>
												<option value='1993'>1993</option>
												<option value='1992'>1992</option>
												<option value='1991'>1991</option>
												<option value='1990'>1990</option>
												<option value='1989'>1989</option>
												<option value='1988'>1988</option>
												<option value='1987'>1987</option>
												<option value='1986'>1986</option>
												<option value='1985'>1985</option>
												<option value='1984'>1984</option>
												<option value='1983'>1983</option>
												<option value='1982'>1982</option>
												<option value='1981'>1981</option>
												<option value='1980'>1980</option>
												<option value='1979'>1979</option>
												<option value='1978'>1978</option>
												<option value='1977'>1977</option>
												<option value='1976'>1976</option>
												<option value='1975'>1975</option>
												<option value='1974'>1974</option>
												<option value='1973'>1973</option>
												<option value='1972'>1972</option>
												<option value='1971'>1971</option>
												<option value='1970'>1970</option>
												<option value='1969'>1969</option>
												<option value='1968'>1968</option>
												<option value='1967'>1967</option>
												<option value='1966'>1966</option>
												<option value='1965'>1965</option>
												<option value='1964'>1964</option>
												<option value='1963'>1963</option>
												<option value='1962'>1962</option>
												<option value='1961'>1961</option>
												<option value='1960'>1960</option>
												<option value='1959'>1959</option>
												<option value='1958'>1958</option>
												<option value='1957'>1957</option>
												<option value='1956'>1956</option>
												<option value='1955'>1955</option>
												<option value='1954'>1954</option>
												<option value='1953'>1953</option>
												<option value='1952'>1952</option>
												<option value='1951'>1951</option>
												<option value='1950'>1950</option>
												<option value='1949'>1949</option>
												<option value='1948'>1948</option>
												<option value='1947'>1947</option>
												<option value='1946'>1946</option>
												<option value='1945'>1945</option>
												<option value='1944'>1944</option>
												<option value='1943'>1943</option>
												<option value='1942'>1942</option>
												<option value='1941'>1941</option>
												<option value='1940'>1940</option>
												<option value='1939'>1939</option>
												<option value='1938'>1938</option>
												<option value='1937'>1937</option>
												<option value='1936'>1936</option>
												<option value='1935'>1935</option>
												<option value='1934'>1934</option>
												<option value='1933'>1933</option>
												<option value='1932'>1932</option>
												<option value='1931'>1931</option>
												<option value='1930'>1930</option>
												<option value='1929'>1929</option>
												<option value='1928'>1928</option>
												<option value='1927'>1927</option>
												<option value='1926'>1926</option>
												<option value='1925'>1925</option>
												<option value='1924'>1924</option>
												<option value='1923'>1923</option>
												<option value='1922'>1922</option>
												<option value='1921'>1921</option>
												<option value='1920'>1920</option>
												<option value='1919'>1919</option>
												<option value='1918'>1918</option>
												<option value='1917'>1917</option>
												<option value='1916'>1916</option>
												<option value='1915'>1915</option>
												<option value='1914'>1914</option>
												<option value='1913'>1913</option>
												<option value='1912'>1912</option>
												<option value='1911'>1911</option>
												<option value='1910'>1910</option>
												<option value='1909'>1909</option>
												<option value='1908'>1908</option>
												<option value='1907'>1907</option>
												<option value='1906'>1906</option>
												<option value='1905'>1905</option>
											</select>

											<div id='sex-block'>
												<span id='sex'>
													<span class='gender'>
														<input name='sex' value='Female' type='radio'>
														<label >Female</label>
													</span>
													<span class='gender'>
														<input name='sex' value='Male' type='radio'>
														<label >Male</label>
													</span>
												</span>
											</div>

											<div id='policy'>
												<p>
													By clicking Create Account, you agree to our <a href='#' target='_blank'>Terms</a> and confirm that you have read our <a href='#' target='_blank'>Data Policy</a>, including our <a href='#' target='_blank'>Cookie Use Policy</a>. You may receive SMS message notifications from mark II and can opt out at any time.
												</p>
											</div>

											<div id='register'>
												<button type='submit' value='Sign Up' class='btn-1' name='btn-signup' >Create Account</button>
											</div>
										</div>
									</form>"; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
		</section>
		<!-- End of showcase section -->

		<footer>
			<p>Photobin &copy;Sameer Padaka - <?php echo date('Y'); ?></p>
		</footer>
	</div>


<!-- External javaScript files -->

</body>
</html>