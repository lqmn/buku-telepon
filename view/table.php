<table>
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>No Telp</th>
		<th>Email</th>
		<td></td>
		<td></td>
	</tr>
	<?php 
	$count = 0;
	foreach ($data as $key => $value): 
	$count++;
	?>
	<tr>
		<td><?php echo $count;?></td>
		<td><?php echo $value->Nama;?></td>
		<td><?php echo $value->NoTel;?></td>
		<td><?php echo $value->Email;?></td>
		<td class="op">
			<div data=<?php echo '"'.$value->ID.'"';?> class="editform">Edit</div>
		</td>
		<td class="op">
			<div data=<?php echo '"'.$value->ID.'"';?> class="delform">Delete</div>
		</td>
	</tr>
	<?php endforeach ?>
</table>