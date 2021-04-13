$( document ).ready(function() {

    $( ".cross" ).hide();
    $( ".menu" ).hide();
    $( ".hamburger" ).click(function() {
    $( ".menu" ).slideToggle( "slow", function() {
    $( ".hamburger" ).hide();
    $( ".cross" ).show();
    });
    });
    
    $( ".cross" ).click(function() {
    $( ".menu" ).slideToggle( "slow", function() {
    $( ".cross" ).hide();
    $( ".hamburger" ).show();
    });
    });
    
});

$( document ).ready(function() {

    $( ".cross2" ).hide();
    $( ".menu2" ).hide();
    $( ".hamburger2" ).click(function() {
    $( ".menu2" ).slideToggle( "slow", function() {
    $( ".hamburger2" ).hide();
    $( ".cross2" ).show();
    });
    });
    
    $( ".cross2" ).click(function() {
    $( ".menu2" ).slideToggle( "slow", function() {
    $( ".cross2" ).hide();
    $( ".hamburger2" ).show();
    });
    });
    
});