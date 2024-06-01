$(document).ready(function () {

$(".introHeadings").css("opacity" ,0); // cacher les textes header

// Et puis les faire apparaitre un après les autres
$("#introHeading1").queue(function(next){
        $('#introHeading1').fadeTo(2000,1);
    next();
});
$("#introHeading1").queue(function(next){
        $("#introHeading2").delay(1000).fadeTo(2000,1);
    next();
});
$("#introHeading2").queue(function(next){
        $("#introHeading3").delay(1500).fadeTo(1000,1);
    next();
    });
$("#introHeading3").queue(function(next){
        $("#introHeading4").delay(2000).fadeTo(2000,1);
    next();
});
$("#introHeading4").queue(function(next){
        $("#introHeading5").delay(4000).fadeTo(2000,1).animate({color : "blue"});
        $("#introHeading3").animate({color : "red"},2500);
    next();
    });

$("#introHeading5").queue(function(next){
        $("#introHeading5").animate({color : "aliceblue"},2500);
        $("#introHeading3").animate({color : "aliceblue"},2500);
    next();
    });           



// Example 0 :
$('#activateCodeButton0').click(function(){
    $textHolder = $("#codeDescSpan0").text();
    console.log($textHolder);
    $("#codeDescSpan0").text("Voilà, mon texte a changé");
});
// reset 0 :
$("#resetWindowButton0").click(function(){
    $("#codeDescSpan0").text($textHolder);
})


}); // end document ready
