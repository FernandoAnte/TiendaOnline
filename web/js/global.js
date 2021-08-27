$(document).ready(function () {

  $(document).on("click", "#cambioImagen", function () {
    var ruta = $("#imagen").attr("src");

    $("#cambiarImagen").html("<input type='file' name='ciu_imagen' >");
    $("#cambiarImagen").append("<input type='hidden' name='img_vieja' value='" + ruta + "'>");

  });

  $(document).on("keyup", "#filtro", function () {
    var buscar = $(this).val();
    var url = $(this).attr("data-url");

    $.ajax({
      // url:"../../controller/ciudad/filtro.php",
      url: url,
      data: "buscar=" + buscar,
      type: "POST",
      success: function (datos) {
        $("tbody").html(datos);
      }
    });
  });

  $(document).on("click", "#modal", function () {
    var url = $(this).attr("data-url");

    $.ajax({
      url: url,
      success: function (datos) {
        $("#contenedor").html(datos);
        $("#exampleModal").modal("show");
      }
    });

  });

  $(document).on("click", "#editarModal", function () {
    var url = $(this).attr("data-url");
    var id = $(this).attr("data-id");

    $.ajax({
      url: url,
      data: "id" + id,
      type: "POST",

      success: function (datos) {
        $("#contenedor").html(datos);
        $("#exampleModal").modal("show");
      }
    });
  });
  $(document).on("click", "#eliminarModal", function () {
    var url = $(this).attr("data-url");
    var id = $(this).attr("data-id");

    $.ajax({
      url: url,
      data: "id" + id,
      type: "POST",
      success: function (datos) {
        $("#contenedor").html(datos);
        $("#exampleModal").modal("show");
      }
    });
  });

  $("#alerta").delay(4000).fadeOut();

  $(document).on("click", "#agregar", function () {
    var select = $("#copy").html();
    // alert("holaaaa");
    $("#contenido").append(
      "<div class='row col-md-4 form-group'>"
      + "<label class='mx-3'>Categoria</label>"
      + "<div class='col-md-10'>"
      + "<select class='form-control' name='idCateg[]'>" + select + "</select>"
      + "</div>"
      + "<div>"
      + "<button type='button' class='btn btn-danger' id='quitar'>-</button>"
      + "</div>"
      + "<div>"
    );
  });

  /* var option=$("select[name='cat_id']option:selected").text();
  var id=$("#idCateg").val();
  if (id!=""){

 
  var categoria=$("#categoria").val();
  var vector = categoria.split("");
  var cont=0;
  if (vector.length>0){
      for(let i = 0; i < vector.length; i++){
          if(option==vector[i]){
             cont++;
          }
      }
      if (cont==0){
          $("#categoria").append(option+" ");
          $("#contenido").appdend("<input type='hidden' name='categoria[]' value=>");

      }

   }
 } */

  $(document).on("click", "#quitar", function () {
    var option = $("select[name='idCateg']option:selected").text();
    var id = $("#idCateg").val();

    if (id != "") {
      $("#categoria-" + id).remove();
      var categoria = $("#categoria").val();
      var vector = categoria.split(" ");
      var respuesta = "";
    }
    $(this).parent().parent().remove();

  });
  // DataTables
  $("#tabla").DataTable({
    responsive: true,
    languaje: {
      "decimal": "",
      "emptyTable": "No hay datos",
      "info": "Consultando_START_a_AND_de_TOTAL_registros",
      "infoEmpty": "Mostrando 0 a 0 de 0 registros",
      "infoFiltered": "filtro_MAX_registros en total",
      "thousands": ".",
      "lengthMenu": "Buscar_MENU_Registros",
      "loadingRecords": "Cargando...",
      "processing": "Procesando...",
      "search": "Buscar",
      "zeroRecords": "No se encontraron resultados",
      "paginate": {
        "next": "Siguiente",
        "previous": "Anterior",

      }
    },
  });



});


function addCart(id) {
  const datos = new FormData();
  datos.append('id', id);
  datos.append('cantidad','1');
  
  var url = `ajax.php?modulo=Carrito&controlador=Carrito&funcion=addCart`;
  console.log(url);

  fetch(url, {
    method: "POST",
    body: datos,
  })
    .then(function (response) {
      return response.json();
    })
    .then(function (data) {
     console.log(data.info.c);
     c=document.getElementById("cantprocar");
     c.innerHTML=data.info.cont;
    })
    .catch(function (error) {
      console.log(error);
    });
}

