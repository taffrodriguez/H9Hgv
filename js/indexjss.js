// JavaScript Document

function fn_cerrar(div){
			$(div).html("<P><center><img src='images/loader.gif'/></center></p>");
};

function fn_limpia(div){
			$(div).html("");
			document.getElementById("dato1").readOnly=false
			document.getElementById("dato1").value=""
			document.getElementById("dato1").style.background="#FFFFFF"
};

function fn_deshabilita(){
			document.getElementById("dato1").readOnly=true
			document.getElementById("dato1").style.background="#EFEFFB"
};


function fn_deshabilita2(edit,actdes){
  	 if (actdes == 1) {
	$(edit).css('background-color', '#92cae4');
  }
  else
  {
	$(edit).css('background-color', '#FFFFFF');  
  }
};




function fn_limpia_1(div,edit){
			$(div).html("");
			//$(edit).val("");
			//$("#cuenta").val("11");
			//document.getElementById("dato1").readOnly=false
			//document.getElementById("cuenta").value="33"
			//document.getElementById("dato1").style.background="#FFFFFF"
};

function fn_llamada_borra(pagina,div){
	var seleccion = confirm("¿Realmente desea eliminar el registro?");
		if (seleccion){
			fn_llamada_link(pagina,div);
		}
};

function fn_llamada(formulario,pagina,div){
		
		//alert("ok")
		var str = $(formulario).serialize();
		//alert(formulario)
		//alert(pagina)
		//alert(div)
		
		fn_cerrar(div);
		$.ajax({
			url: pagina,
			data: str,
			type: 'post',
			success: function(data){
				//if(data = "")
					//alert("no hay datos");
					//alert("okisss")
				$(div).html(data);
				//fn_cerrar();
				
			}
		});
	};
	
	function fn_llamada_option(formulario,div){
		
		if (document.getElementById("opcion1").checked){
			pagina="PADRON_modifica_cuenta.aspx"
		}
		if (document.getElementById("opcion2").checked){
			pagina="PADRON_modifica_usuario.aspx"
		}
		if (document.getElementById("opcion3").checked){
			pagina="PADRON_modifica_fac.aspx"
		}
		if (document.getElementById("opcion4").checked){
			
			pagina="PADRON_modifica_toma.aspx"
		}
		if (document.getElementById("opcion5").checked){
			pagina="PADRON_modifica_med.aspx"
		}
		
		//alert("ok")
		var str = $(formulario).serialize();
		//alert(str)
		
		fn_cerrar(div);
		$.ajax({
			url: pagina,
			data: str,
			type: 'post',
			success: function(data){
				//if(data = "")
					//alert("no hay datos");
					//alert("okisss")
				$(div).html(data);
				//fn_cerrar();
				
			}
		});
	};

function fn_llamada_link(pagina,div){
		//var str = $(formulario).serialize();
		//alert(str);
		fn_cerrar(div);
		$.ajax({
			url: pagina,
			data: '',//str,
			type: 'get',
			success: function(data){
				//if(data = "")
					//alert("no hay datos");
				$(div).html(data);
				//fn_cerrar();
				
			}
		});
	};

function fn_llamada_padron_baja(formulario,pagina,div){
		
		combo2= document.getElementById("combo2").selectedIndex;
		combo3= document.getElementById("combo3").selectedIndex;
		combo4= document.getElementById("combo4").selectedIndex;
		obs= document.getElementById("obs").value;
		
		
		
		var str = $(formulario).serialize();
		
		if (combo2==0){
			alert ('Por favor ingresa el Motivo de Baja')
		}
		else if (combo3==0){
			alert ('Por favor ingresa el Lugar de Baja')
		}
		else if (combo4==0){
			alert ('Por favor ingresa el Status de Baja')
		}
		else  if ( obs == null || obs.length == 0 || /^\s+$/.test(obs) ){
			alert ('Por favor ingresa la Observacion')
		}
		else
		{
			fn_cerrar(div);
			$.ajax({
				url: pagina,
				data: str,
				type: 'post',
				success: function(data){
					//if(data = "")
						//alert("no hay datos");
						//alert("okisss")
					$(div).html(data);
					//fn_cerrar();
					
				}
			});
		}
	};
	
function fn_llamada_validapad(formulario,pagina,div){
	combo5 = document.getElementById("combo5").value;	
	combo1 = document.getElementById("combo1").value;	
	combo6 = document.getElementById("combo6").value;
	combo8 = document.getElementById("combo8").value;
	combo4 = document.getElementById("combo4").value;
	combo7 = document.getElementById("combo7").value;
	combo3 = document.getElementById("combo3").value;
	
/*if( combo5 == null || combo5 == 0 || /^\s+$/.test(combo5) ) {
		alert ('Por favor selecciona el Estado de la Cuenta')
	}*/
	if( combo1 == null || combo1 == 0 || /^\s+$/.test(combo1) ) {
		alert ('Por favor selecciona una Colonia')
	}
	/*else if( combo6 == null || combo6 == -1 || /^\s+$/.test(combo6) ) {
		alert ('Por favor selecciona el Tipo de Cuenta')
	}*/
	/*else if( combo8 == null || combo8 == 0 || /^\s+$/.test(combo8) ) {
		alert ('Por favor selecciona un Tipo de Toma')
	}*/
	/*else if( combo4 == null || combo4 == 0 || /^\s+$/.test(combo4) ) {
		alert ('Por favor selecciona un Tipo de Usuario')
	}
	else if( combo7 == null || combo7 == 0 || /^\s+$/.test(combo7) ) {
		alert ('Por favor selecciona una Tarifa')
	}
	else if( combo3 == null || combo3 == 0 || /^\s+$/.test(combo3) ) {
		alert ('Por favor selecciona una Ruta')
	}*/
	else{
		fn_llamada(formulario,pagina,div);
 	}
};

function fn_llamada_verifica_cuenta(url, contenedor){
var pagina_requerida = false
if (window.XMLHttpRequest) {
// comprueba si el navegador es opera, safari, mozilla, etc.
	pagina_requerida = new XMLHttpRequest()
}
else if (window.ActiveXObject){ 
// comprueba si el navegador es internet explorer
	try {
		 pagina_requerida = new ActiveXObject("Msxml2.XMLHTTP")
	} 
	catch (e){ 
// caso de versión antigua de internet explorer
		try{
			pagina_requerida = new ActiveXObject("Microsoft.XMLHTTP")
		}
		catch (e){
		}
	}
}
else {
	return false
}

pagina_requerida.onreadystatechange=function(){ 
// llamada a la función que carga la página
		pintapagina(pagina_requerida, contenedor)
}
// métodos open y send 
	pagina_requerida.open('POST', url, true) 
	pagina_requerida.setRequestHeader("Content-Type", "application/x-www-form-urlencoded")
	valor = document.getElementById("dato0").value;
	
	
	if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
		alert ('Por favor ingresa el Número de Cuenta')
	}
	else {
		pagina_requerida.send("&cuenta=" + document.getElementById("dato0").value)
	}
}

// función que presenta la información 
function pintapagina(pagina_requerida,contenedor){
	if (pagina_requerida.readyState == 4 && (pagina_requerida.status==200 || window.location.href.indexOf("http")==-1))
		document.getElementById(contenedor).innerHTML=pagina_requerida.responseText
		//alert(pagina_requerida.responseText)
	}
	
	
function fn_llamada_validapruebamed(formulario,pagina,div){
	tecnico = document.getElementById("mme_tec_id").value;
	capacidad = document.getElementById("capacidadc").value;
	alta = document.getElementById("resultado_prueba_alta").value;	
	media = document.getElementById("resultado_prueba_media").value;
	baja = document.getElementById("resultado_prueba_baja").value;
	litros_alta = document.getElementById("prueba_rango_alta").value;
	presion_alta = document.getElementById("presion_alta").value;
	litros_media = document.getElementById("prueba_rango_media").value;
	presion_media = document.getElementById("presion_media").value;
	litros_baja = document.getElementById("prueba_rango_baja").value;
	presion_baja = document.getElementById("presion_baja").value;
	
	if( tecnico == null || tecnico == 0 || /^\s+$/.test(tecnico) ) 
	{
		alert ('Por favor seleccione el técnico que realiza las pruebas')
	} 
	else if($("#alta").is(':checked')) 
	{  
		if( capacidad == null || capacidad == 0 || /^\s+$/.test(capacidad) ) 
		{
		alert ('Por favor Ingrese la capacidad de la cubeta')
		} 
    	else if( alta == null || alta == 0 || /^\s+$/.test(alta) ) 
		{
		alert ('Por favor Ingrese el resultado del tipo de prueba alta')
		} 
		else if( litros_alta == null || litros_alta == 0 || /^\s+$/.test(litros_alta) ) 
		{
		alert ('Por favor seleccione los litros por hora para el tipo de prueba(alta)')
		}
		else if( presion_alta == null || presion_alta == 0 || /^\s+$/.test(presion_alta) ) 
		{
		alert ('Por favor seleccione los kg de presion aplicada para el tipo de prueba (alta)')
		}
		else if($("#media").is(':checked')) 
			{  
    			if( media == null || media == 0 || /^\s+$/.test(media) ) 
				{
					alert ('Por favor Ingrese el resultado del tipo de prueba media')
				} 
				else if( litros_media == null || litros_media == 0 || /^\s+$/.test(litros_media) ) 
				{
					alert ('Por favor selecione los litros por hora para el tipo de prueba (media)')
				}
				else if( presion_media == null || presion_media == 0 || /^\s+$/.test(presion_media) ) 
				{
					alert ('Por favor seleccione los kg de presion aplicada para el tipo de prueba (media)')
				}
				else if($("#baja").is(':checked')) 
					{  
    					if( baja == null || baja == 0 || /^\s+$/.test(baja) ) 
						{
							alert ('Por favor Ingrese el resultado del tipo de prueba baja')
						}  
						else if( litros_baja == null || litros_baja == 0 || /^\s+$/.test(litros_baja) ) 
						{
							alert ('Por favor seleccione los litros por hora para el tipo de prueba(baja)')
						}
						else if( presion_baja == null || presion_baja == 0 || /^\s+$/.test(presion_baja) ) 
						{
							alert ('Por favor seleccione los kg de presion para el tipo de prueba (baja)')
						}
						else
						{
		  					fn_llamada(formulario,pagina,div);				
						}
     				}
				
				else
				{
		  			fn_llamada(formulario,pagina,div);						
				}
			}
		else
		{
			fn_llamada(formulario,pagina,div);		
		}
     }
	else if($("#media").is(':checked')) {  
		if( capacidad == null || capacidad == 0 || /^\s+$/.test(capacidad) ) 
		{
		alert ('Por favor Ingrese la capacidad de la cubeta')
		} 
    	else if( media == null || media == 0 || /^\s+$/.test(media) ) 
		{
		alert ('Por favor Ingrese el resultado del tipo de prueba media')
		} 
		else if( litros_media == null || litros_media == 0 || /^\s+$/.test(litros_media) ) 
		{
		alert ('Por favor selecione los litros por hora para el tipo de prueba (media)')
		}
		else if( presion_media == null || presion_media == 0 || /^\s+$/.test(presion_media) ) 
		{
		alert ('Por favor seleccione los kg de presion aplicada para el tipo de prueba (media)')
		}
		else if($("#baja").is(':checked')) 
			{  
    			if( baja == null || baja == 0 || /^\s+$/.test(baja) ) 
				{
					alert ('Por favor Ingrese el resultado del tipo de prueba baja')
				}  
				else if( litros_baja == null || litros_baja == 0 || /^\s+$/.test(litros_baja) ) 
				{
					alert ('Por favor seleccione los litros por hora para el tipo de prueba(baja)')
				}
				else if( presion_baja == null || presion_baja == 0 || /^\s+$/.test(presion_baja) ) 
				{
					alert ('Por favor seleccione los kg de presion para el tipo de prueba (baja)')
				}
				else
				{
		  			fn_llamada(formulario,pagina,div);				
				}
     		}
		else
		{
		  fn_llamada(formulario,pagina,div);				
		} 
     }
	 else if($("#baja").is(':checked')) { 
	 	if( capacidad == null || capacidad == 0 || /^\s+$/.test(capacidad) ) 
		{
		alert ('Por favor Ingrese la capacidad de la cubeta')
		}  
    	else if( baja == null || baja == 0 || /^\s+$/.test(baja) ) 
		{
		alert ('Por favor Ingrese el resultado del tipo de prueba baja')
		}  
		else if( litros_baja == null || litros_baja == 0 || /^\s+$/.test(litros_baja) ) 
		{
		alert ('Por favor seleccione los litros por hora para el tipo de prueba(baja)')
		}
		else if( presion_baja == null || presion_baja == 0 || /^\s+$/.test(presion_baja) ) 
		{
		alert ('Por favor seleccione los kg de presion para el tipo de prueba (baja)')
		}
		else
		{
		  fn_llamada(formulario,pagina,div);				
		}
     }
	else{
		alert ('Por favor seleccione el tipo de prueba (alta,media, y baja)') 
 	}
};

function fn_llamada_saldo(formulario,pagina,div){		
		motivo= document.getElementById("abono").value;		
		if (motivo==0){
			alert ('Por favor seleccione el motivo de bonificación')
		}
		else{
			fn_llamada(formulario,pagina,div);
		}
};