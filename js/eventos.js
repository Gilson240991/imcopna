$(document).ready(mainEventos);
function mainEventos(){
    mostrarDatosEventos(" ",1);
    $("input[name=txtBuscarEventos]").keyup(function(){
      textobuscar =$(this).val();
      mostrarDatosEventos(textobuscar,1);
    });
    $("body").on("click",".paginacion li a",function(e){
      e.preventDefault();
      valorhref=$(this).attr("href");
      valorBuscar=$("input[name=txtBuscarEventos]").val();
      mostrarDatosEventos(valorBuscar,valorhref);
    });

}
function mostrarDatosEventos(valorBuscar,pagina){
  $.ajax({
    url:base_url('eventos/mostrar'),
    type:"POST",
    dataType:"json",
    data:{buscar:valorBuscar,nropagina:pagina},
    success: function(response){
    //  console.log(response);
      filas ="";
      $.each(response.eventos,function(key,item){
        filas+="<tr style='background-color:#fff'><td class='text-center'>"+item.IDent_Evento+"</td><td>"+item.Titulo+"</td><td class='text-center'><i style='color:#77E46D;font-weight:bold' class='fa fa-check-circle' aria-hidden='true'></i></td><td class='text-center'><i style='color:#ccc;font-weight:bold' class='fa fa-star' aria-hidden='true'></i></td><td class='text-center'>"+item.IDent_004_Categoria+"</td><td class='text-center'>"+item.Usuario_creacion+"</td><td class='text-center'>"+item.Fecha_creacion+"</td><td class='text-center'>"+item.Vistos+"</td>"+
        "<td class='text-center'><a href='#' data-toggle='modal' data-target='#modalEditar' onclick='detallePersona("+item.IDent_Persona+")'><i style='color:#222D32;font-weight:bold;' class='fa fa-pencil-square-o' aria-hidden='true'></i></a></td><td class='text-center'><a onclick='deletes("+item.IDent_Persona+")'><i style='color:red;font-weight:bold;' class='fa fa-trash-o' aria-hidden='true'></i></a></td>"+
        "</tr>";
      });
      $('#tbeventos').html(filas);
      linkseleccionado= Number(pagina);
      //total de registros
      totalregistros =response.totalregistros;

      //cantidad deregistros por paginaci
      cantidadregistros = response.cantidad;

      numerolinks= Math.ceil(totalregistros/cantidadregistros);
      paginador="<ul class='pagination'>";

        if(linkseleccionado>1){
          paginador+="<li><a href='1'>&laquo;</a></li>";
          paginador+="<li><a href='"+(linkseleccionado-1)+"'>&lsaquo;</a></li>";
        }else{
          paginador+="<li class='disabled'><a href='#'>&laquo;</a></li>";
          paginador+="<li class='disabled'><a href='#'>&lsaquo;</a></li>";
        }

        //muestro de los enlaces
        //cantidad de link hacia atras y adelante
        cant=2;
        //inicio de donde se va mostrar los linkseleccionado
        pagInicio  =(linkseleccionado>cant)?(linkseleccionado-cant):1;
        //condicion en la cual establecemnos el fin de los link
        if(numerolinks>cant)
{
        pagRestantes =numerolinks  - linkseleccionado;
        pagFin =(pagRestantes>cant)?(linkseleccionado+cant):numerolinks;
}else{
  pagFin =numerolinks;
}

    for (var i = pagInicio; i <=pagFin; i++){
        if(i==linkseleccionado)
            paginador+="<li class='active'><a href='javascript:void(0)'>"+i+"</a></li>";
          else
            paginador+="<li><a href='"+i+"'>"+i+"</a></li>";
      }
      if(linkseleccionado<numerolinks){
        paginador+="<li><a href='"+(linkseleccionado+1)+"'>&rsaquo;</a></li>";
        paginador+="<li><a href='"+numerolinks+"'>&raquo;</a></li>";
      }else{
        paginador+="<li class='disabled'><a href='#'>&rsaquo;</a></li>";
        paginador+="<li class='disabled'><a href='#'>&raquo;</a></li>";
      }
        paginador+="</ul>";
        $(".paginacion").html(paginador);
    }
  });
}

function grabarevento(){
  var titulo = $('#titulo').val();
  var descripcion =$('#descripcion').val();

   $.ajax({
    url:base_url('eventos/grabar'),
    type:"POST",
    dataType:"json",
    data:{titulo:titulo,descripcion:descripcion},
    success:function(data){
      
    }
}
