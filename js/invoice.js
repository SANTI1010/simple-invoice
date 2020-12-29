/*document.addEventListener('DOMContentLoaded',iniciar);

async function iniciar() {
	"use strict"

	let $comment = document.getElementById("nombre_cliente");
//El evento lo puedes reemplazar con keyup, keypress y el tiempo a tu necesidad
$comment.addEventListener('keydown', () => {
  console.log($comment.value);
})


}

*/
$(document).ready(function(){
			inicio();
			
		});

function inicio() {
	$('[data-toggle="tooltip"]').tooltip({html:true}); 

		$("#nombre_cliente").autocomplete({ 
			source: function(request, response){
				$.ajax({
					url:"./Model/ModelClientes.php",
					dataType:"json",
					data:{q:request.term},
					success: function(data){
						response(data);

					}
				});
			},
			minLength:1,
			select: function(event, ui) {
				alert("Selecciono: "+ ui.item.label);
			}

		});


}

