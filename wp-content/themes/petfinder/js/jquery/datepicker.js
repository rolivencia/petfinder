$(function() {
        
        $( ".datepicker" ).datepicker({
            inline: true
        });

        // Hover states on the static widgets
        $( "#dialog-link, #icons li" ).hover(
            function() {
                $( this ).addClass( "ui-state-hover" );
            },
            function() {
                $( this ).removeClass( "ui-state-hover" );
            }
        );
});

$(document).ready(function() {
    $(".picker").datepicker({
        showOn: "both",
        dateFormat: "yy-mm-dd",
        buttonImageOnly: true
    });    
});