/*!
  Funções de Acessibilidade do site
  */
 /*!
  Funções de Aumento da fonte
  */
 function fonte(e){
         var elemento = $(".acessibilidade");
         var fonte = elemento.css('font-size');
         if (e == 'a') {
                 elemento.css("fontSize", parseInt(fonte) + 1);
         } else if('d'){
                 elemento.css("fontSize", parseInt(fonte) - 1);
         }
 }
/*!
Funções de Contrate
*/
function toggleDarkLight() {
    var body = document.getElementById("body");
    var currentClass = body.className;
    body.className = currentClass == "dark-mode" ? "light-mode" : "dark-mode";
}
function hide() {
    if (document.getElementById('esconde').style.display == 'block') {
        document.getElementById('esconde').style.display = "none";
        // document.getElementById('text').style.lineHeight="1.8em";
        //document.getElementById('text').style.letterSpacing="1.5px";
        document.getElementById("article").style.fontsize = "90px";
    }
    else { document.getElementById('esconde').style.display = "block"; }
}
