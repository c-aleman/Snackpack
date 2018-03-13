<?php include '../partials/header.php';?>
<?php include '../partials/nav.php';?>
<div class="mt-5 lg-container mx-auto">
	
	
	
	<div class="flex">
		
		<div class="hide md-block mx flex-col list-reset lg-w-1/4 h-auto border-box py">
			
			
			<?php include '../partials/sideNav.php';?>

		</div>

		<div class="w-full py mb-8">
			<div class="mx-auto px-4 lg-w-2/3 border-box">
				<h1 class="text-black text-lg tracking-clean text-regular">Cards</h1>
				<h3 class="text-grey-light text-regular tracking-clean">Simple, easy to style Cards</h3>
				<p class="text-black text-sm leading-regular tracking-clean">Cards are built with utility classes with a mobile first approach to create simple and elegant cards that respond to any screen.

				</p>

					
					

						<h3 class="mt-5 text-regular text-md">Basic Cards</h3>
						<div class="border-solid bc-grey-lightest rounded border-box">
							<div class="flex justify-center">
								<?php include '../partials/card.php';?>
							</div>
							
							<pre><code class="html text-sm x-of-none h-30v y-scroll"><?php echo htmlspecialchars(file_get_contents('../partials/card.php'), ENT_QUOTES); ?></code></pre>

						</div>

						<div class="rounded oveflow-hidden md-w-1/3 h-16 mb-8 mt-8">
							
							<img class="w-full block h-auto" src="https://images.unsplash.com/photo-1477588993959-f93989518546?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=f202072b2c89bc74aa099c64a247a72b&auto=format&fit=crop&w=934&q=80" alt="">
							<div>
								Snack
							</div>
							
						</div>
					
						
			</div>


				

		</div>

			

		
	</div>
<?php include '../partials/footer.php'; ?>