
<?php require"header.php";
if(!isset($_SESSION['id'])){
    header('location:login.php');
}
?>
<?php require"nav.php"?>


	<!-- Content -->
	<section class="bg0 p-t-60">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-8 p-b-80">
					<div class="p-r-10 p-r-0-sr991">
						<form>
							<input class="bo-1-rad-3 bocl13 size-a-19 f1-s-13 cl5 plh6 p-rl-18 m-b-20" type="text" name="name" placeholder="Name*">

							<input class="bo-1-rad-3 bocl13 size-a-19 f1-s-13 cl5 plh6 p-rl-18 m-b-20" type="text" name="email" placeholder="Email*">

							<input class="bo-1-rad-3 bocl13 size-a-19 f1-s-13 cl5 plh6 p-rl-18 m-b-20" type="text" name="website" placeholder="Website">

							<textarea class="bo-1-rad-3 bocl13 size-a-15 f1-s-13 cl5 plh6 p-rl-18 p-tb-14 m-b-20" name="msg" placeholder="Your Message"></textarea>

							<button class="size-a-20 bg2 borad-3 f1-s-12 cl0 hov-btn1 trans-03 p-rl-15 m-t-20">
								Send
							</button>
						</form>
					</div>
				</div>
				
				<!-- Sidebar -->
				</div>
		</div>
	</section>
    <?php require"footer.php"?>
