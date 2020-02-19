
$(document).ready( function () {
		$('#mc-form').submit( function () {
			var formdata = $(this).serialize();
			$.ajax({
			    type: "POST",
			    url: "index.php",
			    data: formdata,
			   success: function (data) {
                 $("#sthank").html('<div class="alert" role="alert" style="text-align:center; color:#fff; font-size:30px"><strong>Thank You</strong></div>');
                     }
			 });
			 return false;
		});

	});