<h2>Kapcsolat</h2>

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

		<span title="Szükséges mező">Név: *</span><br>
		<input type="text" maxlength="255" name="s_nev" id="nev" size="60" placeholder="Neve" />
		<br><br>
		<span title"Szükséges mező">E-mail cím: *</span><br>
		<input type="text" maxlength="255" name="s_email" id="email" size="60" placeholder="E-mail címe" />
		<br><br>
		<span title="Szükséges mező">Tárgy: *</span><br>
		<input type="text" maxlength="255" name="s_targy" id="targy"  size="60" placeholder="Tárgy" />
		<br><br>
		<span title="Szükséges mező">Üzenet: *</span><br>
		<textarea name="s_uzenet" id="uzenet" placeholder="Írjon üzenetet!" /></textarea>
		<br><br>
		<input type="submit" name="kuld" id="kuld" value="E-mail elküldése" />
	
</form>