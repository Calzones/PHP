function date(){

	if(document.cookie.indexOf('usuario') == -1){
		document.form.submit();
	}
	
	var fecha = new Date();
	var mes = (fecha.getMonth()+ 1) + "";
	var anio = fecha.getFullYear();
	var dia = fecha.getDate();
	
	if(mes.length == 1 ){
		mes = "0" + mes;
	}
	
	fechaMin = anio + "-" + mes +"-" + dia ;
	fechaMax = anio + "-" + mes + "-" + (dia + 7);
	
	var cadena = "<input type='date' name='select' min='" + fechaMin + "' max='" + fechaMax + "' onchange='formuliar();'>";
	document.getElementById("div").innerHTML = cadena;
	
	document.cookie = "usuario=paco";	
}

function formuliar(){
	document.form.submit();
}

function borrarCookies(){
	
	document.cookie = "usuario=; expires=Thu, 01 Jan 1970 00:00:00 UTC";
	if (document.cookie != "") {
		la_cookie = document.cookie.split("; ");
        fecha_fin = new Date;
        fecha_fin.setDate(fecha_fin.getDate()-1);
        for (i=0; i<la_cookie.length; i++) {	
        	mi_cookie = la_cookie[i].split("=")[0];
            document.cookie = mi_cookie + "=;expires=" + fecha_fin.toGMTString();
        }
    }
}