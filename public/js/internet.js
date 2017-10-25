$(function(){

	$( ".btn-terminar" ).attr('disabled', true);
	$(".btn-Extra").attr('disabled',true);

	$( ".btn-iniciar" ).click(function() {

		var str = $(this).attr('id');
		var nid = str.charAt(str.length-1);
		var txtInicio = moment().format('LT');
		
		$("#txt-inicio"+nid).val(txtInicio);

		var minutos = 0;
		var horas = 0;

		$("#txt-tiempo"+nid).val("00:00");

		window['interval' + nid] = setInterval(function(){

			minutos = ++minutos;

			if(minutos>=60){
				var horas= Math.floor(minutos/60);
				var min = minutos-(horas*60);
				if (min>=10) {
					$("#txt-tiempo"+nid).val(horas+":"+min);
				}else{
					$("#txt-tiempo"+nid).val(horas+":0"+min);
				}
			}else{

				if (minutos>=10) {
					$("#txt-tiempo"+nid).val("00:"+minutos);
				}else{
					$("#txt-tiempo"+nid).val("00:0"+minutos);
				}
			}

			$("#txt-mintotal"+nid).val(minutos);

		}, 60000);

		$("#btn-terminar"+nid).removeClass('btn-outline-danger');
		$("#btn-terminar"+nid).addClass('btn-danger');
		$("#btn-terminar"+nid).attr('disabled', false);
		$("#btn-Extra"+nid).attr('disabled',false);
		$("#btn-iniciar"+nid).attr('disabled',true);

	});

	$( ".btn-terminar" ).click(function() {

		var MontoInternet = 0;
		var MontoTiempoExtra = 0;
		var MontoExtras = 0;
		var MontoImpre = 0;
		var MontoTotal = 0;

		var str = $(this).attr('id');
		var nid = str.charAt(str.length-1);

		MontoTiempoExtra = $('#txt-Extra'+nid).val();
		MontoTiempoExtra = parseInt(MontoTiempoExtra);

		MontoInternet = $("#txt-mintotal"+nid).val();
		MontoInternet = parseInt(MontoInternet);

		MontoInternet = MontoInternet + MontoTiempoExtra;

		if(MontoInternet<=16){
			MontoInternet = 2;
		}else{
			MontoInternet = Math.round(MontoInternet * .15);
			MontoInternet = parseFloat(MontoInternet);
		}
		
		if($("#txt-extras"+nid).val() != ""){
			MontoExtras = parseFloat($("#txt-extras"+nid).val());
		}

		if($("#txt-impresiones"+nid).val() != ""){
			MontoImpre = $("#txt-impresiones"+nid).val(); 
			MontoImpre = parseFloat(MontoImpre);
		}

		MontoTotal = MontoInternet+MontoExtras+MontoImpre;

		$('#ModalTotal .modal-header').html("<h3 class='modal-title' id='Modaltitulo'>Total Equipo "+nid+"</h3><button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>");
		
		$('#ModalTotal .modal-body').html("<div class='row'><div class='col-md-6 text-right'><h4>Internet:</h4></div><div class='col-md-6'><h4>$"+MontoInternet+"</h4></div></div>"+
			"<div class='row'><div class='col-md-6 text-right'><h4>Impresiones:</h4></div><div class='col-md-6'><h4>$"+MontoImpre+"</h4></div></div>"+
			"<div class='row'><div class='col-md-6 text-right'><h4>Extras:</h4></div><div class='col-md-6'><h4>$"+MontoExtras+"</h4></div></div>"+
			"<div class='row'><div class='col-md-6 text-right'><h2>Total:</h2></div><div class='col-md-6'><h2>$"+MontoTotal+"</h2></div></div>"+
			"<input type='text' id='ModalId' value='"+nid+"' style='display: none;'/>");
		
		$('#ModalTotal').modal('show');

	});

	$( ".btn-Extra" ).click(function() {
		
		$('#ModalExtra #tiempoExtra').val('');
		$('#ModalExtra #txtId').val($(this).data('id'));
		$('#ModalExtra').modal('show');

	});

	$( "#ModalExtra #closeModalTiempo" ).click(function() {

		idExtra = $('#txtId').val();
		tiempo = $('#ModalExtra #tiempoExtra').val();

		$('#txt-Extra'+idExtra).val(tiempo);

		$('#lblTime'+idExtra).text("+"+tiempo+" min");
		
		$('#ModalExtra').modal('hide');

	});


	$( "#ModalTotal #finalizarModel" ).click(function() {
		var txtID = $( '#ModalId' ).val();
		clearInterval(window['interval' + txtID]);
		$( "#form"+txtID )[0].reset();
		$('#ModalTotal').modal('hide');

		$("#btn-terminar"+txtID).removeClass('btn-danger');
		$("#btn-terminar"+txtID).addClass('btn-outline-danger');
		$("#btn-terminar"+txtID).attr('disabled',true);
		$("#btn-Extra"+txtID).attr('disabled',true);
		$("#btn-iniciar"+txtID).attr('disabled',false);
		$("#lblTime"+txtID).html('&nbsp;');

	});

});