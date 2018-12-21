function sendContact(){
	var name      = $('#name').val();
	var company   = $('#company').val();
	var position  = $('#position').val();
	var website   = $('#website').val();
	var category  = $('#category').val();
	var address   = $('#address').val();
	var zipcode   = $('#zipcode').val();
	var telephone = $('#telephone').val();
	var email     = $('#email').val();
	var type      = $('#typeinterest').val();
	var interest  = $('#interest').val();
	if(name == null || name == '') {
		msj('error', 'Name must be completed');
		return;
	}
	if(company == null || company == '') {
		msj('error', 'Company must be completed');
		return;
	}
	if(category == null || category == '') {
		msj('error', 'Business Category must be completed');
		return;
	}
	if(email == null || email == '') {
		msj('error', 'Email address must be completed');
		return;
	}
	$.ajax({
		data : {Name	   : name,
				Company	   : company,
				Position   : position,
				Website	   : website,
				Category   : category,
				Address    : address,
				Zipcode	   : zipcode,
				Telephone  : telephone,
				Email 	   : email,
				Type 	   : type,
				Interest   : interest },
		url  : 'contact/sendInformation',
		type : 'POST'
	}).done(function(data){
		try {
			data = JSON.parse(data);
			if(data.error == 0){
				$('.jm-input').find('input').val('');
				$('.jm-select').find('select').val('0');
				$('.jm-select').find('select').selectpicker('refresh');
				msj('success', 'Register Completed');
        	}else{
        		return;
        	}
		} catch (err) {
			msj('error', err.message);
		}
	});
}