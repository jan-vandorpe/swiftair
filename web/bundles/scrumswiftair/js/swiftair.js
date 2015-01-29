$(function ($) {
    setInterval('fly()',50);
    $('.carousel').carousel();
    $('#inhoud').tabs();
    
  
  var $tabs = $('.tabbable li');
	$("button[id^='prevtab']").click(function() {
		$tabs.filter('.active').prev('li').find('a[data-toggle="tab"]').tab('show');
	}); 
 	$("button[id^='nexttab']").click(function() {
		$tabs.filter('.active').next('li').find('a[data-toggle="tab"]').tab('show');
	}); 
    
    $('#klantgegevens').click(function() {
        $('#scrum_swiftairbundle_bestellingen_passagiers_0_naam').val($('#scrum_swiftairbundle_bestellingen_klanten_0_naam').val());
        $('#scrum_swiftairbundle_bestellingen_passagiers_0_voornaam').val($('#scrum_swiftairbundle_bestellingen_klanten_0_voornaam').val());
        $('#scrum_swiftairbundle_bestellingen_passagiers_0_adres').val($('#scrum_swiftairbundle_bestellingen_klanten_0_adres').val());
    });
});

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

function fly() {
    if(document.getElementById) {
        var planeStyle = document.getElementById("plane").style
        window.defaultStatus = "("+planeStyle.left+","+planeStyle.top+")"
        if(parseInt(planeStyle.top) < 10) {
            planeStyle.left = 0
            planeStyle.top = 50
        }
        else{
            planeStyle.left = parseInt(planeStyle.left) + 14
            planeStyle.top = 50
        }
    }
    else if(document.all) {
        var planeStyle=window.document.all.plane.style
        window.defaultStatus = "("+planeStyle.posLeft+","+planeStyle.posTop+")"
        if(planeStyle.posTop < 10) {
            planeStyle.posLeft = 0
            planeStyle.posTop = 50
        }
        else{
            planeStyle.posLeft += 8
            planeStyle.posTop -= 5
        }
    }
}
window.setTimeout("closeHelpDiv();", 5000);
function closeHelpDiv(){
    document.getElementById("plane").style.display = "none";
}
function toggle(checkbox){
	var $input = $(this);
	if($(this).prop('checked'))
		$(checkbox).show();
	else
		$(checkbox).hide();
	}
