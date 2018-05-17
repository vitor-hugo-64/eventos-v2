((function ( w, d) {
	'use strict';

	var $form = d.querySelector("[data-js='form']");
	var $input = d.querySelectorAll("[data-js='input']");

	if ($input[0]) {
		$input[0].focus();
	}

	if ($form) {
		$form.addEventListener( 'submit', function (s) {
			var aux = '';
			for (var i = 0; i <= $input.length; i++) {
				if (!$input[i].value) {
					s.preventDefault();
					if ($input[i].placeholder == undefined) {
						w.alert("Informe " + $input[i].id);
					} else {
						w.alert("Informe " + $input[i].placeholder);
					}
					$input[i].focus();
					break;
				}
				if($input[i]['name'] === 'senha'){
					aux = $input[i].value;
				}
				if($input[i]['name'] === 'repetir_senha'){
					if ($input[i].value !== aux) {
						alert('Informe duas senhas iguais');
						s.preventDefault();
						break;						
					}
				}
			}
		}, false);
	}


	var status = (w.location.href).charAt((w.location.href).length-1);
	if (status) {
		var modal = "#modal" + status;
		$(modal).modal('show');
	}

})( window, document));