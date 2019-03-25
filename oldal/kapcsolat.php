<h2>Írj nekünk!</h2>

<?php
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		include("./config.php");
		
		$nev=$_REQUEST['s_nev'];
		$email=$_REQUEST['s_email'];
		$targy=$_REQUEST['s_targy'];
		$uzenet=$_REQUEST['s_uzenet'];
		$sql = "INSERT INTO emails (nev, email, targy, uzenet) VALUES ('$nev','$email','$targy','$uzenet')";
		if ($connect->query($sql) === TRUE) {
				
					echo "<p class=\"entry\">Név: $nev<br>
					E-mail: $email<br>
					Tárgy: $targy<br>
					Üzenet:<br>
					$uzenet</p>";
			
		} else {
			echo "Hiba: " . $sql . "<br>" . $conn->error;
		}
		$connect->close();
	
	}
?>

<form id="email_form" action="" onsubmit="return validateEmailForm()" method="post" enctype="multipart/form-data">
	<div class="line">
		<label for="nev">Név: <span title="Szükséges mező">*</span></label>
		<input type="text" maxlength="255" name="s_nev" id="nev" size="60" />
	</div>
	
	<div class="line">
		<label for="e-mail">E-mail cím: <span title="Szükséges mező">*</span></label>
		<input type="text" maxlength="255" name="s_email" id="email" size="60" />
	</div>
              
	<div class="line">
		<label for="targy">Tárgy: <span title="Szükséges mező">*</span></label>
		<input type="text" maxlength="255" name="s_targy" id="targy"  size="60" />
	</div>
              
	<div>
		<label for="uzenet">Üzenet: <span title="Szükséges mező">*</span></label>
		<textarea cols="60" rows="5" name="s_uzenet" id="uzenet"></textarea>
	</div>
             
	<div class="line">
		<input type="submit" name="kuld" id="kuld" value="E-mail elküldése" />
	</div>
<p class="entry"><p>
</form>