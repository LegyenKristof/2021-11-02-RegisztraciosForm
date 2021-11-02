document.addEventListener("DOMContentLoaded", init)
let nev, nevSzamlalo, jelszo, jelszoSzamlalo, jelszoIsmet, jelszoIsmetHelyes, regisztralGomb;

function init(){
    nev = document.getElementById("nev");
    nevSzamlalo = document.getElementById("nevSzamlalo");
    jelszo = document.getElementById("jelszo");
    jelszoSzamlalo = document.getElementById("jelszoSzamlalo");
    jelszoIsmet = document.getElementById("jelszoIsmet");
    jelszoIsmetHelyes = document.getElementById("jelszoIsmetHelyes");
    regisztralGomb = document.getElementById("regisztralGomb");

    nev.addEventListener("input", nevValtas);
    jelszo.addEventListener("input", jelszoValtas);
    jelszoIsmet.addEventListener("change", jelszoMegegyezes);
    regisztralGomb.addEventListener("click", regisztral);
}

function nevValtas(){
    let hossz = nev.value.length;
    nevSzamlalo.innerHTML = hossz + " / 20";
    if (hossz > 20) nevSzamlalo.style.color = "red";
    else nevSzamlalo.style.color = "green";
}

function jelszoValtas(){
    let hossz = jelszo.value.length;
    jelszoSzamlalo.innerHTML = hossz + " / 8";
    if (hossz < 8) jelszoSzamlalo.style.color = "red";
    else jelszoSzamlalo.style.color = "green";
}

function jelszoMegegyezes(){
    if (jelszo.value != jelszoIsmet.value) jelszoIsmetHelyes.innerHTML = "A jelszavak nem egyeznek meg";
    else jelszoIsmetHelyes.innerHTML = "";
}

function regisztral(e){
    if (
        nev.value.length > 20 || 
        jelszo.value.length < 8 || 
        jelszo.value != jelszoIsmet.value || 
        nev.value.trim() == "" || 
        jelszo.value.trim() == ""
        ){
        e.preventDefault();
    }
}