function calcular(){
    
    //obtenemos el valor de sueldo y lo convertimos a numero
    let sueldo = parseInt($('#sueldo').val());
    if (sueldo < 1) {
        swal("El sueldo debe ser mayor a cero");
        return false;
    }
    //obtenemos el valor de edad y lo convertimos a numero
    let edad = parseInt($('#edad').val());
    if (edad < 1) {
        swal("La edad debe ser mayor a cero");
        return false;
    }
    //obtenemos el valor del tipo sexo
    let tipoSexo = $('#sexo').val();
    if (tipoSexo == "") {
       
        return false;
    }
    //obtenemos el valor del tipo de nacionalidad
    let tipoNacionalidad = $('#nacionalidad').val();
    if (tipoNacionalidad == "") {
        swal("Debes seleccionar una nacionalidad");
        return false;
    }
    //obtenemos el valor del checkbox de curso
    let suma_actual=0;
    let curso =parseInt($('input:checkbox[name=curso]:checked').val());

    if (curso == true) {

        suma_actual = suma_actual + curso;
      } else {
        suma_actual = suma_actual - curso ;
      }

    if (curso== undefined) {
        swal("Debes seleccionar un curso");
        return false;
    }

    //obtenemos el valor del radio de antiguedad
    let Antigüedad = $('input:radio[name=Antigüedad]:checked').val();
    if (Antigüedad == undefined) {
        swal("Debes seleccionar una antigüedad!");
        return false;
    }

    //calculamos el resultado
    obtenerResultado = calcularBono(sueldo,tipoSexo,edad,tipoNacionalidad,Antigüedad,curso);
    //obtenerResultado1= sumar(sumar);
    $('#cantidadPagar').val("La cantidad abonada es $" + obtenerResultado + " pesos");
    //obtenerResultado2 = actualizarValor(estaChequeado,valor);
    return false;
}


function calcularBono(sueldo,tipoSexo,edad,tipoNacionalidad,Antigüedad,curso){
let aumento=0;

    if (tipoSexo="femenino") {
        if (edad > 45 ) {
            if (tipoNacionalidad="extranjero") {
                switch (Antigüedad) {

                    case "1a5años":
                    aumento= sueldo * 0.20;
                    aumento = aumento + curso;
    
                    break;
                    case "6a10años":
                        aumento= sueldo * 0.25;
                        aumento = aumento + curso;
                        
                        
                    break;
                    case "mas10":
                        aumento= sueldo * 0.30;
                        aumento = aumento + curso;
                        
                    break;
                
                    default:
                    break;
                }
                
            }else{
                if (tipoNacionalida="nacional") {
                    if (edad > 45 ) {
                        switch (Antigüedad) {

                            case "1a5años":
                                aumento= sueldo * 0.22;
                                aumento = aumento + curso;
                                
                                
                            break;
                            case "6a10años":
                                aumento= sueldo * 0.27;
                                aumento = aumento + curso;
                               
                                
                            break;
                            case "mas10":
                                aumento= sueldo * 0.32;
                                aumento = aumento + curso;

                                
                                
                            break;
                        
                            default:
                                break;
                        }

                        
                    }
                }
            }
        }else{
            if (edad < 45) {
                if (tipo="masculino") {
                    if (tipoNacionalidad="nacional") {
                        switch (Antigüedad) {

                            case "1a5años":
                                aumento= sueldo * 0.20;
                                aumento = aumento + curso;
                                
                                
                            break;
                            case "6a10años":
                                aumento= sueldo * 0.25;
                                aumento = aumento + curso;
                               
                                
                            break;
                            case "mas10":
                                aumento= sueldo * 0.30;
                                aumento = aumento + curso;
                                
                                
                            break;
                        
                            default:
                                break;
                        }
                        
                    }else{
                        if (tipoNacionalidad="extranjero") {
                            switch (Antigüedad) {

                                case "1a5años":
                                aumento= sueldo * 0.15;
                                aumento = aumento + curso;
                               
                                    
                                break;
                                case "6a10años":
                                    aumento= sueldo * 0.25;
                                    aumento = aumento + curso;
                                    
                                    
                                break;
                                case "mas10":
                                    aumento= sueldo * 0.35;
                                    aumento = aumento + curso;
                                    
                                    
                                break;
                            
                                default:
                                    break;
                            }
                        
                            
                        }
                    }
                    
                }else{
                    if (tipoSexo="femenino") {
                        if (tipoNacionalidad="extranjero") {
                            switch (Antigüedad) {

                                case "1a5años":
                                    aumento= sueldo * 0.18;
                                    aumento = aumento + curso;
                                    
                                    
                                break;
                                case "6a10años":
                                    aumento= sueldo * 0.23;
                                    aumento = aumento + curso;
                                    
                                break;
                                case "mas10":
                                    aumento= sueldo * 0.28;
                                    aumento = aumento + curso;
                                    
                                    
                                break;
                            
                                default:
                                    break;
                            }
                            
                        }else{
                            if (tipoNacionalidad="nacional") {
                                switch (Antigüedad) {

                                    case "1a5años":
                                        aumento= sueldo *0.20;
                                        aumento = aumento + curso;
                                        
                                    break;
                                    case "6a10años":
                                        aumento= sueldo * 0.25;
                                        aumento = aumento + curso;
                                        
                                        
                                    break;
                                    case "mas10":
                                        aumento= sueldo * 0.25;
                                        aumento = aumento + curso;
                                        
                                        
                                    break;
                                
                                    default:
                                    break;
                                }
                                
                            }
                        }
                        
                    }
                    
                }
                
            }
        }

    }
    return aumento;
}



function limpiarFormulario(){
    $('#bono')[0].reset();
}
function salir(){

}