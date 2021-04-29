var titulo = document.querySelector(".titulo");
titulo.textContent = "Aparecida Nutricionista";

var pacientes = document.querySelectorAll(".paciente");


for(var i = 0; i < pacientes.length ; i++){

	var paciente = pacientes[i];

	var tdPeso = paciente.querySelector(".info-peso");
	var peso = tdPeso.textContent;
	
	var tdAltura = paciente.querySelector(".info-altura");
	var altura = tdAltura.textContent;
	
	var tdImc = paciente.querySelector(".info-imc");
	var pesoEhValido = validaPeso(peso);
	var alturaEhValida = validaAltura(altura);
	
	if(!pesoEhValido){
		console.log("Peso invalido!");
		pesoEhValido = false;
		tdImc.textContent = "Peso invalido!";
		paciente.classList.add("paciente-invalido");
	}
	
	if(!alturaEhValida){
		console.log("Altura invalida!");
		alturaEhValida = false;
		tdImc.textContent = "Altura invalida!";
		paciente.style.backgroundColor = "red";
	}
	
	if(alturaEhValida && pesoEhValido){
		var imc = peso / (altura * altura);
		tdImc.textContent = imc.toFixed(2);
	}
}function validaPeso(peso){

	if(peso >= 0 && peso <= 1000){
		return true;
	}else{
		return false;
	}

}

function validaAltura(altura){
	if(altura >= 0 && altura <= 3.0){
	return true;
	}else{
		return false;
	}
}		

function calculaImc(peso,altura){
	var imc = 0;

	imc = peso / (altura * altura);

	return imc.toFixed(2);
}
	
