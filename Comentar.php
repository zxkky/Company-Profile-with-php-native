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
    
  <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-primary bg-gradient"">
        <div class=" container-fluid">
    <a class="navbar-brand" href="#">VGosy</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" aria-current="page" href="Company.html#Hom">Home</a>
        <a class="nav-link " href="Company.html#Ten">Tentang kami</a>
        <a class="nav-link" href="Company.html#Jasa">Jasa/Barang</a>
        <a class="nav-link" href="Company.html#Lok">Lokasi</a>
        <a class="nav-link" href="Company.html#Cont">Kontak</a>
        <a class="nav-link" href="comentar.php">Komentar</a>
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
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
