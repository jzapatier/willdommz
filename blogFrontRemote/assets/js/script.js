$(document).ready(function(){
	var data = { "model" :  'vehicle', "value" :  $('#personId').val(), "idVehicle" :  $('#hiddenVehicle').val()}; 
	updateListVehiculeTax(data);
	$(document).on('change', '#personId', function(){
		var data = { "model" :  'vehicle', "value" :  $('#personId').val() };
		updateListVehiculeTax(data);
	});
})

function updateListVehiculeTax(data){
	if(data.value && data.value != undefined) {
		$.ajax({
			type:"POST",
			url:"controller/dependentCombo.php",
			data: data,
			success:function(response){
				$('#conVehicleId').html(response);
			}
		});
	}
}

