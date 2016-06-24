
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

function restablecer() {

var select = $('#Enum_SO');
select.val($('option:0', select).val());

var select = $('#Enum_recopilacion');
select.val($('option:0', select).val());

var select = $('#Enum_vulnera');
select.val($('option:0', select).val());

var select = $('#Enum_contrasenas');
select.val($('option:0', select).val());

var select = $('#Enum_wireless');
select.val($('option:0', select).val());

var select = $('#Enum_exploit');
select.val($('option:0', select).val());

var select = $('#Enum_SSF');
select.val($('option:0', select).val());

var select = $('#Enum_access');
select.val($('option:0', select).val());

var select = $('#Enum_inversa');
select.val($('option:0', select).val());

var select = $('#Enum_informes');
select.val($('option:0', select).val());
  
}