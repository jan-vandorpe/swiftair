$(function ($) {
    $('#inhoud').tabs();
    $('#boeking').tabs();
    
    $("button[id^='toStep']").click(function() {
        var nStep = parseInt(this.id.match(/\d+/)[0]) - 1;
        $('#boeking').tabs({active:nStep});
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