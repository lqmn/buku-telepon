<div id="titleModal">Edit</div>
<br>
<form action="ajax.php?op=edit" method="post" class="edit">
	Nama : 
	<br><input type="text" name="nama" maxlength='25' value=<?php echo '"'.$data->Nama.'"' ?> required><br>
	No Telp : 
	<br><input type="text" name="telp" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength='15' 
		value=<?php echo '"'.$data->NoTel.'"' ?> required><br>
	Email : 
	<br><input type="email" name="email"  maxlength='50' value=<?php echo '"'.$data->Email.'"' ?> required><br>
	<input style="font-weight:bold;" type="submit">
	<input type="hidden" name="id" value=<?php echo $data->ID ?>>
</form>