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
    
    var $addPassagierLink = $('<a href="" class="add_passagier">Voeg passagier toe</a>');
    var $newLinkLi = $('<li></li>').append($addPassagierLink);
    
    var $collectionHolder = $('ul.passagiers');
    $collectionHolder.append($newLinkLi);
    $collectionHolder.data('index', $collectionHolder.find(':input').length);
    
    $addPassagierLink.on('click', function(e) {
        e.preventDefault();
        addPassagierForm($collectionHolder, $newLinkLi);
    });
    
    $('#klantgegevens').click(function() {
        $('#scrum_swiftairbundle_bestellingen_passagiers_0_naam').val($('#scrum_swiftairbundle_bestellingen_klanten_0_naam').val());
        $('#scrum_swiftairbundle_bestellingen_passagiers_0_voornaam').val($('#scrum_swiftairbundle_bestellingen_klanten_0_voornaam').val());
        $('#scrum_swiftairbundle_bestellingen_passagiers_0_adres').val($('#scrum_swiftairbundle_bestellingen_klanten_0_adres').val());
    });
});

function addPassagierForm($collectionHolder, $newLinkLi) {
    var prototype = $collectionHolder.data('prototype');

    var index = $collectionHolder.data('index');
    var newForm = prototype.replace(/__name__/g, index);
    
    $collectionHolder.data('index', index + 1);
    
    var $newFormLi = $('<li></li>').append(newForm);
    $newFormLi.append('<a href="" class="remove-passagier">x</a>');
    $newLinkLi.before($newFormLi);

    $('.remove-passagier').click(function(e) {
        e.preventDefault();
        $(this).parent().remove();
        return false;
    });
}

function fly() {
    if(document.getElementById) {
        var planeStyle = document.getElementById("plane").style
        window.defaultStatus = "("+planeStyle.left+","+planeStyle.top+")"
        if(parseInt(planeStyle.top) < 10) {
            planeStyle.left = 0
            planeStyle.top = 55
        }
        else{
            planeStyle.left = parseInt(planeStyle.left) + 14
            planeStyle.top = 55
        }
    }
    else if(document.all) {
        var planeStyle=window.document.all.plane.style
        window.defaultStatus = "("+planeStyle.posLeft+","+planeStyle.posTop+")"
        if(planeStyle.posTop < 10) {
            planeStyle.posLeft = 0
            planeStyle.posTop = 55
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