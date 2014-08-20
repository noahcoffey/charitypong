<?php include_once("inc/header.php"); ?>

	<div class="row page">
		<div class="ninecol">

			<div id="slideshow">
			    <img src="images/slideshow1.jpg" alt="Slideshow Image 1" class="active" />
			    <img src="images/slideshow2.jpg" alt="Slideshow Image 2" />
			    <img src="images/slideshow3.jpg" alt="Slideshow Image 3" />
			    <img src="images/slideshow4.jpg" alt="Slideshow Image 4" />
			    <img src="images/slideshow5.jpg" alt="Slideshow Image 5" />
			    <img src="images/slideshow6.jpg" alt="Slideshow Image 6" />
			</div>

			<div class="info">
			    <h2>How the tourney works:</h2>

          <h3>Corporate Challenge</h3>
          <div class="register"><a href="<?=$register_url?>">Register</a></div>
          <ul>
            <li>Company buy-in is $500 per team.</li>
            <li>Entry includes 5 t-shirts.</li>
            <li>5 people per company team.</li>
            <li>"Pro" and "Amateur" will be matched up accordingly.</li>
            <li>Each team consists of <strong>2 doubles</strong> and <strong>1 single</strong> within the team.</li>
            <li>Each round is 3 games played to 11 points.</li>
            <li>Winners: overall corporate winner, corporate doubles winner, corporate singles winner.</li>
            <li>To win corporate overall, we'll tally the company wins for every match  played in the corporate challenge.</li>
          </ul>

          <h3>Singles Challenge</h3>
          <div class="register"><a href="<?=$register_url?>">Register</a></div>
          <ul>
            <li>$25 entry fee.</li>
            <li>Separate bracket from the Corporate Challenge.</li>
            <li>Each round is 3 games played to 11 points.</li>
            <li>"Pro" and "Amateur" will be matched up accordingly.</li>
            <li>Winners: overall singles winner.</li>
          </ul>

			    <p>Even if you don't play ping pong, there are still <a href="theevent.php"><strong>great reasons to attend</strong></a>.</p>
			</div>

			<h1>What is CharityPong?</h1>
						
	        <p>CharityPong is a charity ping pong tournament to raise funds for the Indianapolis Walk to Defeat ALS. This event is open to <strong>anyone</strong> who would like to support the cause--<em>no mad ping pong skills required</em>. The event will include a fun ping pong tournament, snacks, drinks, and networking. 100% of funds raised goes to support the Walk to Defeat ALS.</p>
	
	        <p>This event was started by employees from <a href="http://www.formstack.com/">Formstack</a> and <a href="http://oneclickventures.com">One Click Ventures</a> who are affected by ALS in different ways. <a href="aboutALS.php">Read more about their stories and what this event means to them</a>.</p>
	
		</div>
		<div class="threecol last sidebar">
			<?php include_once("inc/sidebar.php"); ?>
		</div>
	</div>

</div>


<?php include_once("inc/footer.php"); ?>