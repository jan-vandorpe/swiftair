jQuery(document).ready(function ($) {
    $.datepicker.setDefaults($.datepicker.regional['nl-BE']);
//////////////////////////////////////////////////////////////////////////////// Zet inhoud om in tabs
    $('#inhoud').tabs({ active: 0});
//////////////////////////////////////////////////////////////////////////////// form reset
    $('#retour').attr('checked', false);
    $('#ticketgoedkoop').attr('checked', false);
    $('#ticketflexibel').attr('checked', false);
    $('#terugdatum').val("");
    $('#vertrekdatum').val("");
    $('#volwassenen').val(0);
//////////////////////////////////////////////////////////////////////////////// forceer hercontrole volw/kind/babies
    $('#volwassenen').change(function() {
        $("#kinderen").valid();
        $("#babies").valid();
    });
    $('#kinderen').change(function() {
        $("#volwassenen").valid();
        $("#babies").valid();
    });
    $('#babies').change(function() {
        $("#volwassenen").valid();
        $("#kinderen").valid();
    });
//////////////////////////////////////////////////////////////////////////////// maak slideshow voor banner
/*    $.ajax({
        url: "images/banner/",
        success: function(data){
            $(data).find("a:contains(.jpg)").each(function(){
            // will loop through 
                var images = $(this).attr("href");
                $('#prent').append("<img src='images/banner/" + images + "'></img>");

            });
        } 
    });*/
    
 
//////////////////////////////////////////////////////////////////////////////// vul landen dropdown in
    $('#countries').append("<option value=''>--- Kies land ---</option>");//default optie
    $.getJSON("php/ajax_json_countriesviaarray.php", function(data) {
        $.each(data, function() {
            $('#countries').append("<option value='" + this.country_code + "'>" + this.country_name + "</option>");
        });
    });
    
//////////////////////////////////////////////////////////////////////////////// vul luchthavens dropdown in
    $('#airports').append("<option value=''>--- Kies luchthaven ---</option>");//default optie luchthavens
    $('#countries').change(function() {
        var waarde = $(this).val();
        $('#airports').empty().append("<option value=''>--- Kies luchthaven ---</option>");// leeg luchthavensdropdown en voeg default optie terug toe
        if (waarde) {
            $.getJSON("php/ajax_json_airports.php?country_code=" + waarde, function(data) {
                $.each(data, function() {
                    $('#airports').append("<option value='" + this.airport_code + "'>" + this.airport_name + "</option>");
                });
            });
        }
    });
    
//////////////////////////////////////////////////////////////////////////////// datepicker voor vertrekdatum
    $('#vertrekdatum').datepicker({
        dateFormat: "yy-mm-dd",
        minDate: 0,
        maxDate: "+1y",
        changeMonth: true,
        changeYear:true
    });
    
//////////////////////////////////////////////////////////////////////////////// datepicker voor terugdatum
    $('#vertrekdatum').change(function() {
        $('#terugdatum').val("").datepicker("destroy");// reset terugdatum als vertrekdatum verandert
        $('#terugdatum').datepicker({
            dateFormat: "yy-mm-dd",
            minDate: $('#vertrekdatum').datepicker("getDate"),// initialiseer op vertrekdatum
            maxDate: "+1y",
            changeMonth: true,
            changeYear:true
        });
    });
    
//////////////////////////////////////////////////////////////////////////////// validatieregel voor boekingreferentie
    $.validator.addMethod("referentieCheck", function (value, element) {
        return value.match(/^([a-zA-Z0-9]+)$/);
    });
//////////////////////////////////////////////////////////////////////////////// validatieregel voor aantal passagiers
    $.validator.addMethod("passagiers", function (value, element) {
        if (parseInt($("#kinderen").val()) + parseInt($("#volwassenen").val()) < 1) {
            return false;
        }
        else if (parseInt($("#babies").val()) > 0 && parseInt($("#volwassenen").val()) < 1) {
            return false;
        }
        else {
            return true;
        }
    });
//////////////////////////////////////////////////////////////////////////////// toggle terugdatum veld
    $('#terugdatumlabel').hide();
    $('#terugdatum').hide();
    
    if($('#retour').checked) {
        $('#terugdatumlabel').show();
        $('#terugdatum').show();
    }
    
    $('#retour').click(function() {
        $('#terugdatumlabel').toggle(this.checked);
        $('#terugdatum').toggle(this.checked);
        if (!this.checked) {
            $('#terugdatum').val("");
        }
    });
//////////////////////////////////////////////////////////////////////////////// validatie vlucht boeken form
    var $vluchtFoutBox = $('div#vluchtFouten');
    $('#frmVlucht').validate({
        debug:true,
        groups: {
            passagiers: "volwassenen kinderen babies"
        },
        rules: {
            vertrekdatum: {
                required: true,
                dateISO: true
            },
            terugdatum: {
                required: "#retour:checked",
                dateISO: true
            },
            tickettype: {
                required: true
            },
            volwassenen: {
                passagiers: true
            },
            kinderen: {
                passagiers: true
            },
            babies: {
                passagiers: true
            }
        },
        messages:{
            vertrekdatum: {
                required: "geef de vertrekdatum in aub",
                dateISO: "de datum moet van het formaat JJJJ-MM-DD zijn"
            },
            terugdatum: {
                required: "geef de terugdatum in aub",
                dateISO: "de datum moet van het formaat JJJJ-MM-DD zijn"
            },
            tickettype: {
                required: "geef ticket type in aub"
            },
            volwassenen: {
                passagiers: "babies moeten vergezeld worden door minstens 1 volwassene, en er moet minstens 1 persoon boeken"
            },
            kinderen: {
                passagiers: "babies moeten vergezeld worden door minstens 1 volwassene, en er moet minstens 1 persoon boeken"
            },
            babies: {
                passagiers: "babies moeten vergezeld worden door minstens 1 volwassene, en er moet minstens 1 persoon boeken"
            }
        },
        errorContainer: $vluchtFoutBox,
        errorLabelContainer: $("ul", $vluchtFoutBox),
        errorPlacement: {
            
        },
        wrapper: "li",
        submitHandler:function(form) {
            form.submit();
        }
    });

//////////////////////////////////////////////////////////////////////////////// validatie check-in form
    var $checkinFoutBox = $('div#checkinFouten');
    $('#frmCheckin').validate({
        debug:true,
        rules: {
            boekingreferentie: {
                required: true,
                minlength: 6,
                maxlength: 6,
                referentieCheck: true
            },
            kredietkaartnummer: {
                required: true,
                creditcard: true
            },
            familienaam: {
                required: true
            }
        },
        messages:{
            boekingreferentie: {
                required: "geef boekingreferentie in aub",
                minlength: "referentie moet exact 6 karakters lang zijn",
                maxlength: "referentie moet exact 6 karakters lang zijn",
                referentieCheck: "referentie mag enkel uit cijfers en/of letters bestaan, niet hoofdlettergevoelig"
            },
            kredietkaartnummer: {
                required: "geef kredietkaartnummer in aub",
                creditcard: "gelieve een geldig kredietkaartnummer in the geven"
            },
            familienaam: {
                required: "geef familienaam in aub",
            }
        },
        errorContainer: $checkinFoutBox,
        errorLabelContainer: $("ul", $checkinFoutBox),
        wrapper: "li",
        submitHandler:function(form) {
            form.submit();
        }
    });

//////////////////////////////////////////////////////////////////////////////// modal voor zoeken boekingreferentie
    $( "#dialog" ).dialog({ autoOpen: false, width: 500 });
    $( "#opener" ).click(function() {
        $( "#dialog" ).dialog( "open");
    });
});