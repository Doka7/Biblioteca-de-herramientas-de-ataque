function checkAndSubmit()
{
  if (document.getElementById('Enum_reco').selectedIndex >= 0
     || document.getElementById('Enum_vulnera').selectedIndex >= 0
     || document.getElementById('Enum_info').selectedIndex >= 0)
  {
      document.getElementById('consulta').submit();
      //alert('La consulta se ha actualizado');
  }
}