$(document).ready(function(){
	$(".menu-icon").click(function(){
		$(".menu-icon").toggleClass("active")
	})

	$(".menu-icon").click(function(){
		$(".sidebar").toggleClass("active")
	})

    lightbox.option({
      'resizeDuration': 200,
      'wrapAround': true
    })
});