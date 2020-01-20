/*crée une fonction qui prend l'id du bouton */
/*des que le bouton est activé 
cela active une fonction
qui génére des id
ces id sont attribuer au élément img de la galerie
les id sont égale a des image dans le fichier json 
et son envoyer dans la galerie
a partir d'une requette 
*/
//recuperation de l'emplacement de l'image
var linkImg =document.getElementById("linkimg");
//recuperation du fichier JSON
var requestUrl = "scripts/json/bdd.json";
//récupération l'emplacement de l'auteur dans l'html
var emplacementAuteur = document.getElementById("auteurArt");
var requestXML = new XMLHttpRequest();

requestXML.open("GET",requestUrl);

requestXML.responseType = "json";

requestXML.send();

requestXML.onload = function(){
    var url = requestXML.response;
    populateImg(url);
    populateAuteur(url);
}

function populateImg(jsonObj){
    var myImg = document.createElement("IMG");
    myImg.setAttribute("src",jsonObj.image1.liens_oeuvre);
    myImg.setAttribute("class","img-fluid" );
    myImg.setAttribute("data-toggle","modal");
    myImg.setAttribute("data-target","#modalAlpha");
    linkImg.appendChild(myImg)
}   

function populateAuteur(jsonObj){
    var myAuteur = document.createElement("h1");
    myAuteur.textContent = jsonObj.image1.nom_artiste;
    emplacementAuteur.appendChild(myAuteur);
}
//modal beta
/*crée une fonction qui prend l'id du bouton */
/*des que le bouton est activé 
cela active une fonction
qui génére des id
ces id sont attribuer au élément img de la galerie
les id sont égale a des image dans le fichier json 
et son envoyer dans la galerie
a partir d'une requette 
*/
//recuperation de l'emplacement de l'image
var linkImgdeux = document.getElementById("linkimgdeux");
//recuperation du fichier JSON
var requestUrldeux = "scripts/json/bdd.json";
//récupération l'emplacement de l'auteur dans l'html
var emplacementAuteurdeux = document.getElementById("auteurArtDeux");
var requestXMLdeux = new XMLHttpRequest();

requestXMLdeux.open("GET",requestUrldeux);

requestXMLdeux.responseType = "json";

requestXMLdeux.send();

requestXMLdeux.onload = function(){
    var url = requestXMLdeux.response;
    populateImgDeux(url);
    populateAuteurDeux(url);
}

function populateImgDeux(jsonObj){
    var myImg = document.createElement("img");
    myImg.setAttribute("src",jsonObj.image2.liens_oeuvre);
    myImg.setAttribute("class","img-fluid" );
    myImg.setAttribute("data-toggle","modal");
    myImg.setAttribute("data-target","#modalBeta");
    linkImgdeux.appendChild(myImg)
}   

function populateAuteurDeux(jsonObj){
    var myAuteurdeux = document.createElement("h1");
    myAuteurdeux.textContent = jsonObj.image2.nom_artiste;
    emplacementAuteurdeux.appendChild(myAuteurdeux);
}
//projet freez

//création du générateur de mondal en js : 

//<div class="modal fade" id="modalAlpha" tabindex="-1" role="dialog" aria-labelledby="AlphaModalLabel" aria-hidden="true">
//<div class="modal-dialog modal-xl" role="document">
//<div>
//</div>

//selection de la div mere des modal et de la galerie aléatoire
let MotherOfDiv = document.getElementById("motherOfDiv");
//générateur de nom de modal  : 
function genrateurNomModal(min,max){
    let nombreRandomDeux = Math.random(min,max);
    let nombreRandomUn = Math.random(min,max);
    return nombreRandomDeux + nombreRandomUn + "";
}
let nomModal = genrateurNomModal(0,99999);
function generateurModal(){

    //1ere div et ces composants
    var my1div = document.createElement("div");
    my1div.setAttribute("class","modal");
    my1div.setAttribute("id", nomModal);
    my1div.setAttribute("tabindex","-1");
    my1div.setAttribute("role","dialog");
    my1div.setAttribute("aria-labelledby","AlphaModalLabel");//source de probleme probable car le c'est moi qui l'est définit donc à voire
    my1div.setAttribute("aria-hidden","true");

    let motherOfDiv2 = getElementById(nomModal);
    //2eme div et ces composants
    var my2div = document.createElement("div");
    my2div.setAttribute("class","modal-dialog modal-xl");
    my2div.setAttribute("role","document");


    my1div.appendChild("MotherOfDiv");
}
