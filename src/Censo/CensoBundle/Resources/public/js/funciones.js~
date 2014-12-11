//Funcion Javascript para Validar solo Números en un campo Input...
 function solonumeros(evt)
      {
		var keyPressed = (evt.which) ? evt.which : event.keyCode
        return !(keyPressed > 31 && (keyPressed < 48 || keyPressed > 57));
      }
// Funcion Javascript para Validar solo Letras en un Campo Input
function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
       especiales = [8,37,39,46];

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }

    }

// validacion onSubmit del Formulario Habitantes

 function formHabitantes(){

 var status = false;
 var fecha = new Date();
             var d= fecha.getDate();
             var m = fecha.getMonth();
             var y= fecha.getFullYear();             
             var fecha1 = d + m + y;
            
            
            var d2 = parseInt(document.getElementById('censo_censobundle_habitantes_fechaNacimiento_day').value);
            
            var m2 = parseInt(document.getElementById('censo_censobundle_habitantes_fechaNacimiento_month').value);
            
            var y2 = parseInt(document.getElementById('censo_censobundle_habitantes_fechaNacimiento_year').value);
            
            var fecha2 = d2 + m2 + y2;
           
 if (fecha2 > fecha1){
			status = false;
			alert('la fecha debe ser menor a la fecha actual');
		}else {
			status = true;
		}
                return status;
}
