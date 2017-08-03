<div id="titleModal">New Contact</div>
<br>
<form action="ajax.php?op=ins" method="post" class="ajax">
	Nama : 
	<br><input type="text" name="nama" maxlength='25' required><br>
	No Telp : 
	<br><input type="text" name="telp" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength='15' required><br>
	Email : 
	<br><input type="email" name="email"  maxlength='50' required><br>
	<input class="submit" style="font-weight:bold;" type="submit">
</form>