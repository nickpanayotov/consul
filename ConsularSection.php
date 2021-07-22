<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- custom added -->
    <meta name="description" content="Consular information">
    <meta name="keywords" content="HTML, CSS, JavaScript, PHP, MySQL">
    <meta name="author" content="Nicolay Panayotov">
    <title>Основания за откази за издаване на визи</title>
    <!-- Font Awesome -->
	<script src="https://kit.fontawesome.com/1d377c64f0.js" crossorigin="anonymous"></script>
    <!-- CSS -->
	<style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap');

		*{
			box-sizing: border-box;
            font-family: 'Roboto Condensed', sans-serif;
		}
		body{
			background-color: #001a33;
			font-size: 12px;
			text-align: justify;
			overflow-y: scroll;
		}
		.container{
			width: 1245px;
			margin: 0 auto;
			padding: 5px;
			background-color: #fff;
		}
		/*Stripe*/
		.stripe{
			height: 25px;
    		background-color: #004080;
    		color: white;
    		padding: 6px 6px 0 6px;
		}

		/*BG Flag*/
		#white{
			background-color: white;
			padding: 2px;
		}
		#green{
			background-color: #00b300;
			padding: 2px;
		}
		#red{
			background-color: #b30000;
			padding: 2px;
		}

		/* Style the header */
		header {
		padding: 10px;
		text-align: center;
		text-transform: uppercase;
		font-weight: bold;
		font-size: 22px;
		}

		/* Container for flexboxes */
		.row {
		display: flex;
		}

		/* Create three unequal columns that sits next to each other */
		.column {
		padding: 0px;
		}

		/* Left column */
		.column.left {
		flex: 1;
		background-color: #f1f1f1;
		}

		/* Middle column */
		.column.middle {
		flex: 3;
        padding: 0px 5px;
        margin-top: -10px;
		}

		/* Right column */
		.column.right {
		flex: 1;
		background-color: #f1f1f1;
        padding: 0px 5px;
        margin-top: -10px;
		}

		/* Style the footer */
		footer {
		height: 25px;
		background-color: #004080;
		margin-top: 10px;
		color: white;
		text-align: center;
		padding: 6px 6px 0 6px;
		}

		/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
		@media (max-width: 600px) {
		.row {
		flex-direction: column;
		}
		}

		/* Navigation */
		nav a {
		background-color: #004080;
		color: white;
		padding: 7px;
		margin-top: 0.05rem;
		display:block;
		width:100%;
		text-align: justify;
		text-decoration: none;
		}

		nav a:hover,nav a:active{  
		background-color:#b30000;
		color: white;
		}   

		.active{
		background-color:#B80C09;
		color: white;
		}
    </style>
</head>
<body>
<div class="container">
		<!-- Stripe -->
		<div class="stripe">
            <!-- Current date in NYT format -->
            <?php 
            date_default_timezone_set("Europe/Moscow");
            echo date("l, ").date("F j, ").date("Y");
            ?>
		</div>

		<!-- BG Flag -->
		<div id="white"></div>
		<div id="green"></div>
		<div id="red"></div>

		<!-- Header -->
		<header>Consular Section</header>

		<div class="row">
			<!-- Left -->
			<div class="column left">
				<nav>
				<a class="active" href="index.html"><i class="fas fa-home"></i> Home</a>
				<a href="visac.php"><i class="fas fa-plane-departure"></i> Nonimmigrant Visas (type "C")</a>
				<a href="visad.php"><i class="fas fa-business-time"></i> Immigrant Visas (type "D")</a>
				<a href="bg.html"><i class="fas fa-flag"></i> Citizenship Services</a>
				<a href="bg.php"><i class="far fa-lightbulb"></i> Criminal record certificate</a>
				<a href="bld.html"><i class="fas fa-passport"></i> Passport Services</a>
				<a href="gs.php"><i class="fas fa-heartbeat"></i> Civil Status</a>
				<a href="notary.php"><i class="fas fa-user-edit"></i> Notary Services</a>
				<a href="legalisation.html"><i class="fas fa-stamp"></i> Legalisation</a>
				<a href="contacts.html"><i class="fas fa-envelope"></i> Contact Us</a>
				</nav>
			</div>
			<!-- Middle -->
			<div class="column middle">
				<h2>Welcome to our website!</h2>
				<p>
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, sint consequuntur, nostrum molestias iste cum, voluptate, ex quam tenetur ab quos perspiciatis ipsam perferendis id repudiandae explicabo earum ad ratione.
					Non, itaque! Itaque, minus adipisci ipsam, dolores animi cumque, consequuntur ab impedit et numquam nihil eos tempora fugiat aliquid accusamus quisquam nemo nisi neque. Veritatis repudiandae tenetur rem, enim architecto?
					Reiciendis asperiores exercitationem ab voluptatum quis, tempora dolorum nostrum corrupti, perspiciatis qui eveniet animi magni explicabo assumenda fugiat iusto ipsam adipisci neque accusamus vel sed debitis consequatur recusandae hic officia.
					Debitis magni, officiis officia exercitationem praesentium laborum. Autem repellendus voluptatem possimus officiis repellat alias animi culpa saepe. Ipsum, nostrum. Explicabo eligendi optio autem asperiores dignissimos laboriosam nesciunt magni voluptate dolores.
					Ducimus quis tempore doloremque veritatis vitae tenetur aliquam, nam. Inventore unde, nihil ipsam laudantium exercitationem modi voluptas molestias soluta vero fugiat incidunt beatae ullam optio porro vel, ipsum, quos fuga.
					Quo nihil harum vel eum ab ipsam eius tempora dicta voluptate! Molestiae impedit voluptate, autem eligendi numquam explicabo unde, asperiores quibusdam quisquam id harum laborum doloremque tempora iusto architecto, animi.
					Fuga sapiente facere porro unde ut fugiat et, ipsam aliquam cupiditate, quisquam, molestiae? Hic repellat vel ullam, velit repudiandae doloremque cum distinctio vero nesciunt aliquid eligendi! Hic accusamus quas neque.
					Aspernatur quibusdam suscipit perspiciatis ullam iusto nostrum et iste praesentium ratione aliquam ex fugiat ipsa quae fugit omnis, quidem. Non neque, sequi. Laborum nobis ipsa explicabo, possimus doloribus modi sed.
				</p>
			</div>
			<!-- Right -->
			<div class="column right">
				<h2>COVID-19 Travel Restrictions and Exceptions</h2>
				Last updated: June 24, 2021 <br>
				To protect the public health, there are...<br>
			</div>
		</div>

		<!-- Footer -->
		<footer>Copyright © 2021 Nicolay Panayotov. All rights reserved.</footer>
	</div>
</body>
</html>