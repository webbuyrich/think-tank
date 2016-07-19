$(document).ready(function() {
	$('input[type=text]').val('');
	$('input[type=email]').val('');

	$('#submitBtn').click(function(e){
		e.preventDefault();		
		/*var proposal = $('#inputProposal').val();
		var employee = $('#inputEmployeeName').val();
		var department = $('#inputDepartment').val();
		var jobTitle = $('#inputjobTitle').val();
		var email = $('#inputEmail').val();
		var reasons = $('#inputReasons').val();
		var information = $('#inputInformation').val();
		var costs = $('#inputCosts').val();
		var diff = $('#inputDiff').val();
		var resource = $('#inputResource').val();*/
		$('#success-modal').modal('show');
		$.post("test-file.php",$('#thinkTank').serializeArray(),function(data){
			var success = '1 row inserted';
			console.log(data);
			if(data === success){
				$('#loading-modal-body').hide('slow');
				$('#success-modal-header, #success-modal-body, #success-modal-footer').show('slow');
				setTimeout(function(){
				  $('#thinkTank')[0].reset();
				}, 2000);
			} 
		});

		
		
	});
	
	
});