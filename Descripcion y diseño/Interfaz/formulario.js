
/*function checkAndSubmit()
{
  if (document.getElementById('Enum_recopilacion').selectedIndex >= 0
     || document.getElementById('Enum_vulnera').selectedIndex >= 0
     || document.getElementById('Enum_contrasenas').selectedIndex >= 0
	   || document.getElementById('Enum_wireless').selectedIndex >= 0
	   || document.getElementById('Enum_exploit').selectedIndex >= 0
     || document.getElementById('Enum_SSF').selectedIndex >= 0
     || document.getElementById('Enum_access').selectedIndex >= 0
     || document.getElementById('Enum_inversa').selectedIndex >= 0)

  {
      document.getElementById('consulta').submit();
      //alert('La consulta se ha actualizado');
  }
}*/

/*var options = document.querySelectorAll('#my_select option');
for (var i = 0, l = options.length; i < l; i++) {
    options[i].selected = options[i].defaultSelected;
}*/

function restablecer() {

  document.getElementById('Enum_SO').selectedIndex = 0;
  document.getElementById('Enum_recopilacion').selectedIndex = 0;
  document.getElementById('Enum_vulnera').selectedIndex = 0;
  document.getElementById('Enum_contrasenas').selectedIndex = 0;
  document.getElementById('Enum_wireless').selectedIndex = 0;
  document.getElementById('Enum_exploit').selectedIndex = 0;
  document.getElementById('Enum_SSF').selectedIndex = 0;
  document.getElementById('Enum_access').selectedIndex = 0;
  document.getElementById('Enum_inversa').selectedIndex = 0;
  document.getElementById('Enum_informes').selectedIndex = 0;

  alert('Valores restablecidos');
}



//Esto es para mostrar información cuando pones el ratón encima de algo.
/*
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});*/
