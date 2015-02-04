$(function ($) {
    setInterval('fly()',50);
    $('.carousel').carousel();
    $('#inhoud').tabs();
	$('#krediet').hide();
    
  
  var $tabs = $('.tabbable li');
	$("button[id^='prevtab']").click(function() {
            $tabs.filter('.active').prev('li').find('a[data-toggle="tab"]').tab('show');
            var nId = parseInt(this.id.match(/\d+/)[0]);
            if(nId == 2) {
                getData();
            }
	}); 
 	$("button[id^='nexttab']").click(function() {
            $tabs.filter('.active').next('li').find('a[data-toggle="tab"]').tab('show');
            var nId = parseInt(this.id.match(/\d+/)[0]);
            if(nId == 2) {
                getData();
            }
	}); 
    
    $('#klantgegevens').click(function() {
        $('#scrum_swiftairbundle_bestellingen_passagiers_0_naam').val($('#scrum_swiftairbundle_bestellingen_klanten_0_naam').val());
        $('#scrum_swiftairbundle_bestellingen_passagiers_0_voornaam').val($('#scrum_swiftairbundle_bestellingen_klanten_0_voornaam').val());
        $('#scrum_swiftairbundle_bestellingen_passagiers_0_adres').val($('#scrum_swiftairbundle_bestellingen_klanten_0_adres').val());
    });
    
    $('#confirm').click(function() {
        getData();
    });
    
    function getData(){
        var klantNaam = $('#scrum_swiftairbundle_bestellingen_klanten_0_naam').val();
        var klantVoornaam = $('#scrum_swiftairbundle_bestellingen_klanten_0_voornaam').val();
        var klantAdres = $('#scrum_swiftairbundle_bestellingen_klanten_0_adres').val();
        var klantTelefoon = $('#scrum_swiftairbundle_bestellingen_klanten_0_telefoon').val();
        var klantEmail = $('#scrum_swiftairbundle_bestellingen_klanten_0_email').val();
        
//        console.log(klantNaam);
//        console.log(klantVoornaam);
//        console.log(klantAdres);
//        console.log(klantTelefoon);
//        console.log(klantEmail);
        
        var passagierNaam = $('#scrum_swiftairbundle_bestellingen_passagiers_0_naam').val();
        var passagierVoornaam = $('#scrum_swiftairbundle_bestellingen_passagiers_0_voornaam').val();
        var passagierAdres = $('#scrum_swiftairbundle_bestellingen_passagiers_0_adres').val();
        var passagierRijksregister = $('#scrum_swiftairbundle_bestellingen_passagiers_0_rijksregister').val();
        var passagierDatum = $('#scrum_swiftairbundle_bestellingen_passagiers_0_geboortedatum').val();
        var passagierBagage = $('#scrum_swiftairbundle_bestellingen_passagiers_0_bagage').prop('checked');
        var passagierVerzekering = $('#scrum_swiftairbundle_bestellingen_passagiers_0_verzekering').prop('checked');
        
//        console.log(passagierNaam);
//        console.log(passagierVoornaam);
//        console.log(passagierAdres);
//        console.log(passagierRijksregister);
//        console.log(passagierDatum);
//        console.log(passagierBagage);
//        console.log(passagierVerzekering);
        
        $("div[id^='passagier']").each(function() {
            var nId = parseInt(this.id.match(/\d+/)[0]);
            console.log(nId);
        })
    }
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
if($('#scrum_swiftairbundle_bestellingen_klanten_0_kredietkaart').is(":checked"))   
        $("#krediet").show();
    else
        $("#krediet").hide();

