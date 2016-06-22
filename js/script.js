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
		
		$.post("test-file.php",$('#thinkTank').serializeArray(),function(data){
			var success = '1 row inserted';
			console.log(data);
			if(data === success){
				$('#success-modal').modal('show');
				$('#success-modal-body').delay(500).show('slow');
				setTimeout(function(){
				  $('#thinkTank')[0].reset();
				}, 2000);
				
				$('#success-close').click(function(){
					$('#success-modal-body').hide('slow');
				});
			}
		});

		
		
	});
	
	
});