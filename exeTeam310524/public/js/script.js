
window.addEventListener('resize', displayScreenWidth); 
function displayScreenWidth() { 
    if (document.getElementById("screenwidth")) {
    const screenwidth = document.getElementById("screenwidth");
    let theWidth = window.innerWidth;                                             
    screenwidth.innerHTML = 'The screen width is: ' + theWidth;
}
}
displayScreenWidth();


// Ceci s'occupe de l'entierté du texte sur le site
$(document).ready(function() {
    fetch("?json")
    .then(function(response){
        response.json().then(function(data){
        //    console.log(data);
            makeGlobalText(data);
    
            });
    
            })
            .catch(function(error){
                console.log(error.message);
        });

            function makeGlobalText(datas) {
                let element = '';
                for (let data in datas) {
                    let elem     = datas[data].elem;
                    let theText  = datas[data].theText;
                    let theType  = datas[data].theType;
                  //  console.log(elem);
                    theType === "id" ? 
                    element = $(`#${elem}`) :
                    element =  $(`.${elem}`);
                   // console.log(element);
                   
                    element.html(theText);        
                    
                    if (element.next().attr('placeholder') !== undefined) {
                        console.log(`#${elem} has a placeholder`);
                        element.next().attr('placeholder', theText);
                    }
                }
                }
            


                
}); // end ready