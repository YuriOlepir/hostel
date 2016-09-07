jQuery(function($){
$(".btn_booking_page").click(function(){
	alert("Ваше бронирование принято. С вами свяжутся в течении 1 часа.")
})

	
	var datepickers = $('.datepicker').datepicker({
		dateFormat : 'dd-mm-yy',
		minDate : 0,
		onSelect: function(date) {
			$('#date_to').datepicker('option','minDate',date)
		}
	})

	$(document).ready(function() {
		//Меню
		$(".button_menu").click(function() {
			$(".navbar .nb_menu").slideToggle();
		});


	});
	//Каруселька
	//Документация: http://owlgraphic.com/owlcarousel/
	var owl = $(".carousel");
	owl.owlCarousel({
		items : 1,
		singleItem:true,
		autoHeight : true

	});
	owl.on("mousewheel", ".owl-wrapper", function (e) {
		if (e.deltaY > 0) {
			owl.trigger("owl.prev");
		} else {
			owl.trigger("owl.next");
		}
		e.preventDefault();
	});
	$(".next_button").click(function() {
		owl.trigger("owl.next");
	});
	$(".prev_button").click(function() {
		owl.trigger("owl.prev");
	});

});