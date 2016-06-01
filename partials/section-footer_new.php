
	<footer>

		<section class="footer-top animation-element" data-anim="slide_top">

			<div class="container">

				<div class="row-tight">

					<div class="span8">

						<ul>

							<?php wp_list_pages( array( 'title_li' => '', 'child_of' => 20, 'date_format' => $date_format ) ); ?>

						</ul>

					</div>
					<!-- END span8 -->

					<div class="span4">

						<div class="module-newsletter">

							<h3>Newsletter</h3>

							<p>

								<?php $newsletter_content = get_field('newsletter_content', 'option'); ?>

								<?php if( !empty($newsletter_content) ): ?>

									<?php echo $newsletter_content; ?>

								<?php endif; ?>

							</p>

							<?php
								//database connection
								$servername = "localhost";
								$username = "18342515_drozd";
								$password = "H62xfWatoMbbzKJR9";
								$dbname = "18342515_drozd";

								// Create connection
								$conn = new mysqli($servername, $username, $password, $dbname);
								// Check connection
								if ($conn->connect_error) {
								   die("Connection failed: " . $conn->connect_error);
								}

							?>

							<form method="post">

								<div class="email-wrap">

									<input type="email" name="email" id="email" placeholder="Wpisz e-mail">

								</div>

								<div class="submit-wrap">

									<input type="submit" value="Zapisz się">

								</div>

							</form>

							<?php

							    if(isset($_POST['email']) && !empty($_POST['email'])){

							 	$email = $_POST['email'];

							 	//php email validation
							 	if (empty($email)) {
							 	  $emailErr = "<p class=\"confirmation\">Proszę wpisać adres email.</p>";
							 	  echo $emailErr;
							 	} else {
							 	  // check if e-mail address is well-formed
							 	  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
							 		$emailErr = "<p class=\"confirmation\">Proszę wpisać właściwy adres email.</p>";
							 		echo $emailErr;
							 	  }
							 	}


							 	//adds record to data base - table name: newsletter, row: email
							 	$sql = "INSERT INTO newsletter (email)
							 	VALUES ('$email')";

								 	if ($conn->query($sql) === TRUE) {
								 	   echo "<p class=\"confirmation\">Dziękujemy za zapisanie się do newslettera.</p>";
								 	} else {
								 	   echo "Error: " . $sql . "<br>" . $conn->error;
								 	}

							 	}

						    ?>

						 <?php

							 //finish database connection
							 $conn->close();

						 ?>

						</div>

					</div>
					<!-- END span4 -->

				</div>

			</div>

		</section>
		<!-- END footer-content -->

		<section class="footer-navigation">

			<div class="container">

				<div class="row-tight">

					<div class="span6">

						<nav>

							<?php dynamic_sidebar('footer_menu'); ?>

						</nav>

					</div>

					<div class="span6">

						<p>2016 &copy; <a href="http://studionext.pl/">StudioNext.pl</a></p>

					</div>

				</div>

			</div>

		</section>
		<!-- END footer-navigation -->

	</footer>
