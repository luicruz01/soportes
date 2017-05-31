$(function() {
	var chosen_container = document.getElementsByClassName("chosen-container");
	for (var i = chosen_container.length - 1; i >= 0; i--) {
		chosen_container[i].classList.add("chosen-container-"+i);
	}

	$(".chosen-container-3").css({
		"margin-top": "-112px",
		"margin-left": "70%"
	});
});