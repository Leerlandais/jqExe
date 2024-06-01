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
    $textHolder = $("#codeDescSpan0").text(); // d'abord copier le texte (puisque il vient du DB)
    $("#codeDescSpan0").text("Voilà, mon texte a changé"); // puis changer
});
// reset 0 :
$("#resetWindowButton0").click(function(){
    $("#codeDescSpan0").text($textHolder); // réinitialise texte (en Ang/Fr)
});



// Example 1 :
$('#activateCodeButton1').click(function(){ // même que précedent avec couleur change
    $textHolder = $("#codeDescSpan1").text(); 
    $("#codeDescSpan1").css('color', 'yellow'); 
    $("#codeDescSpan1").text("Voilà, ma couleur a changé"); 
});
// reset 1 :
$("#resetWindowButton1").click(function(){
    $("#codeDescSpan1").text($textHolder); 
    $("#codeDescSpan1").css('color', '#d9e2ef'); 
});


// Example 2 :
$('#activateCodeButton2').click(function(){ 
    $textHolder = $("#codeDescSpan2").text(); 
    $("#codeDescSpan2").css("color" , 'red').text("Mon texte et ma couleur ont changé"); 
});
// reset 2 :
$("#resetWindowButton2").click(function(){
    $("#codeDescSpan2").text($textHolder); 
    $("#codeDescSpan2").css('color', '#d9e2ef'); 
});


// Example 3 :
$('#activateCodeButton3').click(function(){
    // while trying to get this to work properly, a thorough search of docs shows a better way to write the queue....


    $("#codeDescSpan3").text("D'abord, mon text change").delay(1000).queue(function(next){ // change the text and wait
        $(this).text("Puis ma couleur..."); // then the colour
        next();
        // note the next step is attached
    }).animate({color: "green"}, 2000).delay(2000).queue(function(next){
        $(this).text("Et maintenant je change de couleur encore une fois");
        next();
        // as is this one
    }).animate({color: "#d9e2ef"}, 2000).queue(function(next){
        $(this).text("Et nous nous arrêterons ici");
        next();
    });
});










}); // end document ready

