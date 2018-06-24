<!DOCTTPE html>
<html>
	<head>

		<meta charset="utf-8">
		<meta name= "viewport" content="width=device-width">
		<meta name= "author" content="Rizkhita"> 
		<title>Welcome to My Website | Home </title>
		<link rel="stylesheet"type="text/css" href="badanwebindex.css">
		<script type="text/javascript" src="js/jquery-2.1.4.slim.min.js"></script> 
 		<script type="text/javascript" src="js/jquery.cycle2.min.js"></script>

	</head>

<body>
	<header>
		<div class="container">
			<div id="branding">
			<h1><img src="programmer.png">
			</div>
			<nav>
				<ul>
					<li class= "current"><a href="index.php">Home</a></li>
					<li><a href="aboutme.php">About Author</a></li>
					<li><a href="task.php">Tutorial</a></li>
					<li><a href="task.php">*My Excercise</a></li>
				</ul>
			</nav>
		</div>
	</header>


<!-- BAGIAN SLIDESHOW -->
<div class="cycle-slideshow">
    <span class="cycle-prev">&#9001;</span> <!-- Untuk membuat tanda panah di kiri slider -->
    <span class="cycle-next">&#9002;</span> <!-- Untuk membuat tanda panah di kanan slider -->
    <span class="cycle-pager"></span>  <!-- Untuk membuat tanda bulat atau link pada slider -->
    <img src="bg copy.jpg" alt="Gambar Pertama">
    <img src="bg2.jpg" alt="Gambar Kedua">
</div>

	<style type="text/css">
    * { margin: 0; padding: 0; }
    img { max-width: 100%; }
    .cycle-slideshow {
       
        
        max-height: 500px;

        display: block;
        position: relative;
        margin-left: 0px;
        margin-right:0px;
        overflow: hidden;
        border-bottom:orange 3px solid;
    }
    .cycle-prev, .cycle-next {
        font-size: 200%;
        color: #fff;
        display: block;
        position: absolute;
        top: 50%;
        z-index: 9999;
        cursor: pointer;
        margin-top: -16px;
    }
    .cycle-prev { left: 42px; }
    .cycle-next { right: 62px; }
    .cycle-pager {
        position: absolute;
        width: 100%;
        height: 10px;
        bottom: 10px;
        z-index: 9999;
        text-align: center;
    }
    .cycle-pager span {
        text-indent: 100%;
        top: 100px;
        width: 10px;
        height: 10px;
        display: inline-block;
        border: 1px solid #fff;
        border-radius: 50%;
        margin: 0 10px;
        white-space: nowrap;
        cursor: pointer;
    }
    .cycle-pager-active { background-color: #fff; }
	</style> 
<!-- END BAGIAN SLIDESHOW -->



	<section id="boxes">
		<div class="container">

			<div class="box">
				<img src="s3.png">
				<br></br>
				<h1>مَنْ يَجْتَهِدْ يَنْجَحْ</h1>
				<p>"Siapa yang berusaha (Insha Allah) akan memperoleh kejayaan"</p>
			</div>

			<div class="box">
				<img src="s2.png">
				<br></br>
				<h1>مَنْ زَرَعَ حَصَدَ</h1>
				<p>"Siapa yang bercucuk tanam (Insha Allah) akan menuai hasilnya"</p>
			</div>

			<div class="box">
				<img src="s4.png">
				<br></br>
				<h1>مَنْ جَدَّ وَجَدَ</h1>
				<p>"Siapa yang berusaha (Insha Allah) akan mendapat apa yang diusahakannya"</p>
			</div>

		</div>	
	</section>
	

	<footer>
		<p>Web by Rizkhita, Copyright &copy;2017</p>
	</footer>


	</body>
</html>