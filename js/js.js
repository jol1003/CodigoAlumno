function keyRestrictN(e) { 
	//alert(e);
    validchars='abcdefghijklmnopqrstuvwxyz0123456789/ '+String.fromCharCode(241,252);
    var key='', keychar='';
    key = getKeyCode(e);
	//alert(key)
    if (key == null) return true;
    keychar = String.fromCharCode(key);
    keychar = keychar.toLowerCase();
    validchars = validchars.toLowerCase();
    if (validchars.indexOf(keychar) != -1)
        return true;
    if ( key==null || key==0 || key==8 || key==9 || key==13 || key==27 )
		//alert(key)
        return true;
    return false;
}



function getKeyCode(e)
{
    if (window.event)
        return window.event.keyCode;
    else if (e)
        return e.which;
    else
        return null;
}





function compruebaEspacio(valor){
    valor.value = spTrim(valor.value);
}
function spTrim(JSvalue) {
    //La típica función de quitar espacios en blanco de la mayoría de los lenguajes de programación
    var JStemp = JSvalue;
    var JSobj = /^(\s*)([\W\w]*)(\b\s*$)/;
    //Elimina los espacios de delante y detrás
    if (JSobj.test(JStemp)) {
        JStemp = JStemp.replace(JSobj, '$2');
    }
    //Elimina los espacios duplicados
    var JSobj = / +/g;
    JStemp = JStemp.replace(JSobj, " ");
    if (JStemp == " ") {
        JStemp = "";
    }
    return JStemp;
}

function valida_numero(e) { //SÓLO PERMITE EL INGRESO DE NÚMEROS.
    tecla = (document.all) ? e.keyCode : e.which;
    if (tecla==8 || tecla==0) return true; //Tecla de retroceso (para poder borrar)
    patron = /^[0-9]*\.?[0-9]*$/;
    te = String.fromCharCode(tecla);
    return patron.test(te);
}

function buscar(){
		if(document.f1.txtruc.value!=''){
			$("#resultado").load(base_url+'tributo/listar',{
				ruc  	: document.f1.txtruc.value,
			} , function(){
					
			});
			
		}else{
			alert("ERROR : Ingrese el RUC a consultar");	
			document.f1.txtruc.focus();
			return false;
		}
}




