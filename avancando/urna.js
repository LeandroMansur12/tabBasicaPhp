

var titulo = document.querySelector(".titulo");

titulo.textContent="NOME DO CANDIDATO";

var votar = document.querySelector(".votando");

votar.addEventListener("click", function(event){
	event.preventDefault();


var confirmavoto= document.querySelector(".voto").value;

var totalLula=document.querySelector(".votoLula");

var totalBolsonaro = document.querySelector(".votoBolsonaro");

var nulo=document.querySelector(".votoNulo");

if(confirmavoto == 13){

	


	totalLula.textContent=1;
	
}

if(confirmavoto == 22){

	totalBolsonaro.textContent=1;


}else{

	nulo.textContent=1;
}



});