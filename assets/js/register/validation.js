$(document).ready(function() {

	$(window).load(function() {
		$('#group').hide();
		$('#alert_general').hide();
		$('#alert_member').hide();
		$('#division').hide();
		$('#state').hide();
		$('#city').hide();
		$('#institute').hide();
	});

	function basic_info() {
		$('#group').show();
		$('#state').show();
		$('#city').show();
		$('#institute').show();
		$('#alert_general').hide();
	}
	
	function projectmania() {
		$('#division').show();
	}
	
	function cranebot() {
		$('#division').hide();
	}
	
	function overdrive() {
		$('#division').hide();
	}
	
	function clueminati() {
		$('#division').hide();
	}
	
	function hackathon() {
		$('#division').hide();
	}
	
	function horizon() {
		$('#division').hide();
	}
	
	function ethanos_mun() {
		$('#division').hide();
	}
	
	function gatewalk() {
		$('#division').hide();
	}


	$('#event_name').change(function() {
		var event = $('#event_name').val();

		if (event == '') {
			$('#group').hide();
			$('#division').hide();
			$('#state').hide();
			$('#city').hide();
			$('#institute').hide();
			$('#alert_general').text('Please select Event').show();

		} else if (event == 'Projectmania') {
			basic_info();
			projectmania();

		} else if (event == 'Cranebot') {
			basic_info();
			cranebot();

		} else if (event == 'Overdrive') {
			basic_info();
			overdrive();

		} else if (event == 'Clueminati') {
			basic_info();
			clueminati();

		} else if (event == 'Hackathon') {
			basic_info();
			hackathon();
			
		} else if (event == 'Horizon') {
			basic_info();
			horizon();

		} else if (event == 'Ethanos MUN') {
			basic_info();
			ethanos_mun();
	
		} else if (event == 'Gatewalk') {
			basic_info();
			gatewalk();

		} else {
			return true;
		}
	});

});