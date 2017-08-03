$(document).ready(function(){

	function updateTable(){
		$.get(
			'ajax.php',{op:"table"},function(data){
				$('#table').html(data);
			}
		);
	}

	$('#add').on('click', function(){
		// alert('wow');
		$.get(
			'ajax.php',{op:"form"},function(data){
				$('#modalContent').html(data);
			}
		);
		$('#overlay').fadeIn();
	});

	$('#overlay').on('click', function(event){
		// alert(event.target.id);
		if (event.target.id=='overlay') {
			updateTable();
			$('#overlay').fadeOut();
		};
	});

	$('#close').click(function(){
		updateTable();
		$('#overlay').fadeOut();

	});

	$('#modalContent').on('submit','form.ajax', function(){
		var url = $(this).attr('action');
		var type = $(this).attr('method');
		var data = {};

		// get data
		$(this).find('[name]').each(function(index, value){
			var name = $(this).attr('name');
			var value = $(this).val();

			data[name] = value;
		});

		$.ajax({
			url:url,
			type:type,
			data:data,
			success: function(data){
				$('#modalContent').html(data);
			}
		});

		// handle redirect maybe?
		return false;
	});

	$(document).on('click','.delform', function(event){
		$id = event.target.getAttribute('data');
		$.get(
			'ajax.php',{op:"cdel", id:$id },function(data){
				$('#modalContent').html(data);
			}
		);
		$('#overlay').fadeIn();
	});

	$(document).on('click','.del', function(event){
		$id = event.target.getAttribute('data');
		// alert($id);
		$.post(
			'ajax.php?op=del',{id:$id},function(data){
				$('#modalContent').html(data);
			}
		);
		$('#overlay').fadeIn();
	});


	$(document).on('click','.editform', function(event){
		$id = event.target.getAttribute('data');
		$.get(
			'ajax.php',{op:"editform", id:$id },function(data){
				$('#modalContent').html(data);
			}
		);
		$('#overlay').fadeIn();
	});

	$(document).on('submit','.edit', function(event){
		var url = $(this).attr('action');
		var type = $(this).attr('method');
		var data = {};

		// get data
		$(this).find('[name]').each(function(index, value){
			var name = $(this).attr('name');
			var value = $(this).val();

			data[name] = value;
		});
		$.ajax({
			url:url,
			type:type,
			data:data,
			success: function(data){
				$('#modalContent').html(data);
			}
		});

		// handle redirect maybe?
		return false;
	});	
});