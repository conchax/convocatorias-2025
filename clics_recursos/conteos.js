function conteo_recurso(idRecurso){
  var dataSend = { idR : idRecurso}; 
  $.ajax({
    type: 'POST',
    url: 'clics_recursos/guarda_conteo_recurso.php',
    data: dataSend,
    dataType:"html",
    success: function(data){
      // Aqui se enviaria un mensaje, pero al ser un conteo interno NO se muestra al usuario
    },
    error: function(data){
    }
  });
}//end function