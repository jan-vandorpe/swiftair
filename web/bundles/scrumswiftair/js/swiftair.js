$(function ($) {
    setInterval('fly()',50);
    $('.carousel').carousel();
    $('#inhoud').tabs();
	$('#krediet').hide();
    
  
  var $tabs = $('.tabbable li');
	$("button[id^='prevtab']").click(function() {
            $tabs.filter('.active').prev('li').find('a[data-toggle="tab"]').tab('show');
            var nId = parseInt(this.id.match(/\d+/)[0]);
            if(nId == 4) {
                getData();
            }
            if (nId == 3) {
                getKlantData();
            }
	}); 
 	$("button[id^='nexttab']").click(function() {
            $tabs.filter('.active').next('li').find('a[data-toggle="tab"]').tab('show');
            var nId = parseInt(this.id.match(/\d+/)[0]);
            if(nId == 4) {
                getData();
            }
            if (nId == 3) {
                getKlantData();
            }
	}); 
    

    $('#passagiersinfo').click(function() {
        getKlantData();
    });

    
    $('#confirm').click(function() {
        getData();
    });
    
    function getKlantData() {
        $('#scrum_swiftairbundle_bestellingen_passagiers_0_naam').val($('#scrum_swiftairbundle_bestellingen_klanten_0_naam').val());
        $('#scrum_swiftairbundle_bestellingen_passagiers_0_voornaam').val($('#scrum_swiftairbundle_bestellingen_klanten_0_voornaam').val());
        $('#scrum_swiftairbundle_bestellingen_passagiers_0_adres').val($('#scrum_swiftairbundle_bestellingen_klanten_0_adres').val());
    }
    
    function getData(){
        var eBevestig1 = $('#bevestig1');
        var eBevestig2 = $('#bevestig2');
        var eBevestig3 = $('#bevestig3');
//        eBevestig1.empty();
        eBevestig2.empty();
        eBevestig3.empty();
        
        var klantNaam = $('#scrum_swiftairbundle_bestellingen_klanten_0_naam').val();
        var klantVoornaam = $('#scrum_swiftairbundle_bestellingen_klanten_0_voornaam').val();
        var klantAdres = $('#scrum_swiftairbundle_bestellingen_klanten_0_adres').val();
        var klantTelefoon = $('#scrum_swiftairbundle_bestellingen_klanten_0_telefoon').val();
        var klantEmail = $('#scrum_swiftairbundle_bestellingen_klanten_0_email').val();

        var liNaam = $('<li> Naam <em> ' + klantNaam + ' </em></li>');
        var liVoornaam = $('<li> Voornaam <em> ' + klantVoornaam + ' </em></li>');
        var liAdres = $('<li> Adres <em> ' + klantAdres + ' </em> </li>');
        var liTel = $('<li> Telefoon <em> ' + klantTelefoon + ' </em></li>');
        var liEmail = $('<li> Email <em> ' + klantEmail + ' </em> </li>');
        
        eBevestig3.append(liNaam)
            .append(liVoornaam)
            .append(liAdres)
            .append(liTel)
            .append(liEmail);

        
        var nAantalPassagiers = $("div[id^='passagier']").length;
        var liAantalPassagiers = $('<li> Aantal passagiers <em> ' + nAantalPassagiers + ' </em> </li>');
        eBevestig2.append(liAantalPassagiers);
        
        $("div[id^='passagier']").each(function() {
            var nId = parseInt(this.id.match(/\d+/)[0]);
            var passagierNaam = $('#scrum_swiftairbundle_bestellingen_passagiers_' + parseInt(nId - 1) + '_naam').val();
            var passagierVoornaam = $('#scrum_swiftairbundle_bestellingen_passagiers_' + parseInt(nId - 1) + '_voornaam').val();
            var passagierAdres = $('#scrum_swiftairbundle_bestellingen_passagiers_' + parseInt(nId - 1) + '_adres').val();
            var passagierRijksregister = $('#scrum_swiftairbundle_bestellingen_passagiers_' + parseInt(nId - 1) + '_rijksregister').val();
            var passagierDatum = $('#scrum_swiftairbundle_bestellingen_passagiers_' + parseInt(nId - 1) + '_geboortedatum').val();
            var passagierBagage = 'Nee';
            var passagierVerzekering = 'Nee';
            
            if ($('#scrum_swiftairbundle_bestellingen_passagiers_' + parseInt(nId - 1) + '_bagage').prop('checked')) { passagierBagage = 'Ja'; }
            if ($('#scrum_swiftairbundle_bestellingen_passagiers_' + parseInt(nId - 1) + '_verzekering').prop('checked')) { passagierVerzekering = 'Ja'; }
            
            
            var liPassagier = $('<li> <h5> Passagier ' + nId + ' </h5> </li>');
            var liPNaam = $('<li> Naam <em> ' + passagierNaam + ' </em></li>');
            var liPVoornaam = $('<li> Voornaam <em> ' + passagierVoornaam + ' </em></li>');
            var liPAdres = $('<li> Adres <em> ' + passagierAdres + ' </em> </li>');
            var liPRr = $('<li> Rijksregisternummer <em> ' + passagierRijksregister + ' </em> </li>');
            var liPDatum = $('<li> Geboortedatum <em> ' + passagierDatum + ' </em> </li>');
            var liPBagage = $('<li> Extra bagage  <em> ' + passagierBagage + '</em> </li>');
            var liPVerzekering = $('<li> Reisverzekering <em> ' + passagierVerzekering + ' </em> </li>');         
            
            eBevestig2.append(liPassagier)
                .append(liPNaam)
                .append(liPVoornaam)
                .append(liPAdres)
                .append(liPRr)
                .append(liPDatum)
                .append(liPBagage)
                .append(liPVerzekering);
        });
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

