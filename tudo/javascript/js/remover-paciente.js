var pacientes = document.querySelectorAll(".paciente");

var tabela = document.querySelector("table");

tabela.addEventListener("dblclick", function() {
    var alvoEvento = event.target;
    var paiDoEvento = alvoEvento.parentNode;//TR = paciente = remover

    event.target.parentNode.classList.add("faceOut");


	setTimeout(function() {
      
   		paiDoEvento.remove();
    }, 500);
});

//pacientes.forEach(function(paciente){
//	paciente.addEventListener("dblclick", function(){
//		console.log("fui clicado, ai pai para, kkkk ");
//		this.remove();
//	});
//});
