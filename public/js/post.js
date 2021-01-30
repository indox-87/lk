jQuery(document).ready(function () {

	$('form').submit(function(event) {		
		if ($(this).attr('id') == 'no_ajax') {
			return;
		}
		var json;
		event.preventDefault();
		$.ajax({
			type: $(this).attr('method'),
			url: $(this).attr('action'),
			data: new FormData(this),
			contentType: false,
			cache: false,
			processData: false,
			success: function(result) {
				json = jQuery.parseJSON(result);	

				if (json.url) {
					window.location.href = '/' + json.url;
				} 
				else {

					if(json.error == 1){
						info_error(json.message);						
					}						
					if(json.error == 0){
						successfully(json.message);
						$("#form")[0].reset();
					}
				}				
			},
			error: function (error)
			{
				window.location.href = '/account/login';
			}
		});
	});

	$('body').on('click', '.sort_click', function()
	{
		var id = $(this).attr('id');		
		var form_action = '/sorttasks';
		$.ajax({
				type : "POST",
				url: form_action,
				cache: false,
				data: {id: id},
				dataType: 'json',
				success: function(data)
				{
					var result = data.result;
					if(result == 0)
					{						
						location.reload();
					}
					else{
						alert(result);
					}
				}
			});
	});

	function successfully(i='',j='') {
		toastr.success(i, j, {
			positionClass: "toast-bottom-full-width",
			timeOut: 5e3,
			closeButton: !0,
			debug: !1,
			newestOnTop: !0,
			progressBar: !0,
			preventDuplicates: !0,
			onclick: null,
			showDuration: "300",
			hideDuration: "1000",
			extendedTimeOut: "1000",
			showEasing: "swing",
			hideEasing: "linear",
			showMethod: "fadeIn",
			hideMethod: "fadeOut",
			tapToDismiss: !1
		})
	}
	function info_error(i='',j='') {
		toastr.warning(i, j, {
			positionClass: "toast-bottom-full-width",
			timeOut: 5e3,
			closeButton: !0,
			debug: !1,
			newestOnTop: !0,
			progressBar: !0,
			preventDuplicates: !0,
			onclick: null,
			showDuration: "300",
			hideDuration: "1000",
			extendedTimeOut: "1000",
			showEasing: "swing",
			hideEasing: "linear",
			showMethod: "fadeIn",
			hideMethod: "fadeOut",
			tapToDismiss: !1
		})
	}


});