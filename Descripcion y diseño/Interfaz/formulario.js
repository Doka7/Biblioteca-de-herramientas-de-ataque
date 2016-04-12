function checkAndSubmit()
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
}

/*
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});*/