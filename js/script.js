$(document).ready(function() {
	$('input[type=text]').val('');
	$('input[type=email]').val('');

	/*VALIDATE INPUTS*/
	$('#thinkTank').validate({
		rules: {
		    proposal: {		      
		      maxlength: 50
		    },
		     employee: {		      
		      maxlength: 30
		    },
		     department: {		      
		      maxlength: 20
		    },
		     jobTitle: {		      
		      maxlength: 50
		    },
		     reason: {		      
		      maxlength: 350
		    },
		     information: {		      
		      maxlength: 350
		    },
		     cost: {		      
		      maxlength: 350
		    },
		     difference: {		      
		      maxlength: 350
		    },
		     resource: {		      
		      maxlength: 350
		    }
		  }
	});

	/*COUNT CHARACTERS FOR TEXTAREAS*/
	$('textarea[id="inputReasons"]').on('input keyup keydown focus',function(){

	    if(this.value.length > 350){
	        return false;
	    }
	    $("#countReasons").html("Remaining characters : " +(350 - this.value.length));
	});
	$('textarea[id="inputInformation"]').on('input keyup keydown focus',function(){

	    if(this.value.length > 350){
	        return false;
	    }
	    $("#countInformation").html("Remaining characters : " +(350 - this.value.length));
	});
	$('textarea[id="inputCosts"]').on('input keyup keydown focus',function(){

	    if(this.value.length > 350){
	        return false;
	    }
	    $("#countCosts").html("Remaining characters : " +(350 - this.value.length));
	});
	$('textarea[id="inputDiff"]').on('input keyup keydown focus',function(){

	    if(this.value.length > 350){
	        return false;
	    }
	    $("#countDiff").html("Remaining characters : " +(350 - this.value.length));
	});
	$('textarea[id="inputResource"]').on('input keyup keydown focus',function(){

	    if(this.value.length > 350){
	        return false;
	    }
	    $("#countResource").html("Remaining characters : " +(350 - this.value.length));
	});

	//Validate Upload Extension
	$('input[type=file]').change(function(e){
	  var ext = $('input[type=file]').val().split('.').pop().toLowerCase();
	  if($.inArray(ext, ['pptx', 'ppt']) == -1) {
	    	$('#error-upload-modal').modal('show');
	    	setTimeout(function(){
	    	  $('input[type=file]').val('');
	    	}, 500);
	  } else{
	  	$('.fileButton').css('display', 'inline');
	  }	  
	});
	
	//Remove selected file
	$('.fileButton').click(function(){
		$('input[type=file]').val('');
		$('.fileButton').css('display', 'none');
	});
	


	/*SUBMIT FORM*/
	$('#submitBtn').click(function(e){
		e.preventDefault();
		if( $('#thinkTank').valid() ){

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
				if(data.indexOf(success) != -1){
					$('#loading-modal-body').hide('slow');
					$('#success-modal-header, #success-modal-body, #success-modal-footer').show('slow');
					$('#count[*]').hide();
					setTimeout(function(){
					  $('#thinkTank')[0].reset();
					}, 2500);
				} 
			});
		} else{
			$('html, body').animate({
			         scrollTop: ($('.error').offset().top - 300)
			    }, 2000);
		}		
	});
	
	
});