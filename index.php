<?php
	
	include 'config.php';

	if (isset($_POST['post_comment'])) {

		$name = $_POST['name'];
		$message = $_POST['message'];
		
		$sql = "INSERT INTO demo (name, message)
		VALUES ('$name', '$message')";

		if ($conn->query($sql) === TRUE) {
		  echo "";
		} else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="coment.css"> 

    <title>Document</title>
</head>
<body>
<script>
    document.addEventListener("DOMContentLoaded", function() {
      const navLinks = document.querySelectorAll(".navbar-nav .nav-link");
    
      navLinks.forEach(function(link) {
        link.addEventListener("click", function() {
        
          navLinks.forEach(function(link) {
            link.classList.remove("active");
          });
    
     
          this.classList.add("active");
        });
      });
    });
    </script>
     <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary ">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="kucing.jpeg" alt="" width="40" height="30" class="d-inline-block align-text-top">
            VGosy
          </a>
          <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header bg-dark">
              <h5 class="offcanvas-title text-white" id="offcanvasNavbarLabel">MENU</h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body bg-primary">
              <div class="navbar-nav ms-auto">
                <a class="nav-link" aria-current="page" href="index.html#Hom">BERANDA</a>
                <a class="nav-link" href="#Ten">TENTANG KAMI</a>
                <a class="nav-link" href="#Jasa">JASA DAN BARANG</a>
                <a class="nav-link" href="#Lok">LOKASI</a>
                <a class="nav-link" href="#Cont">KONTAK</a>
                <a class="nav-link active" href="index.php">KOMENTAR</a>
              </div>
            </div>
          </div>
        </div>
      </nav>


      <div class="wrapper">
		<form action="" method="post" class="form">
			<input type="text" class="name" name="name" placeholder="Name">
			<br>
			<textarea name="message" cols="30" rows="10" class="message" placeholder="Message"></textarea>
			<br>
			<button type="submit" class="btn" name="post_comment">Post Comment</button>
			<a class="btn" style="text-decoration:none" href="#isi">	 COment	
				<!-- <button type="button"  class="btn" name="post_comment">Lihat Comment</button> -->
			</a>	
		</form>
	</div>
	<div class="content">
		<h1 class="isi" id="isi">ISI KOMENTAR</h1>
		<?php

			$sql = "SELECT * FROM demo";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
		    //output
			  while($row = $result->fetch_assoc()) {
			   
		?>
		<div class="blok">
			<h4><?php echo $row['name']; ?></h4>
			<p><?php echo $row['message']; ?></p>
		</div>

		<?php } } ?>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
		integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
		crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
		integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa"
		crossorigin="anonymous">
	</script>
</body>
</html>
