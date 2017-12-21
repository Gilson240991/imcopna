$(document).ready(mainEventos);
function mainEventos(){
    mostrarDatosEventos("",1);
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
        filas+="<tr style='background-color:#fff'><td>"+item.IDent_Evento+"</td><td>"+item.Titulo+"</td><td>"+item.Descripcion+"</td><td>"+item.Fecha+"</td><td>"+item.IDent_002_Estado+"</td><td>"+item.IDent_Categoria+"</td><td><img src='"+base_img(item.Imagen)+"' class='estilo_imagen'></td>"+
        "<td><a href='#' data-toggle='modal' data-target='#modalEditar' class='btn btn-success btn-sm' onclick='detallePersona("+item.IDent_Persona+")'>Editar</button></td><td><a type='button' class='btn btn-danger btn-sm' onclick='deletes("+item.IDent_Persona+")'>Eliminar</button></td>"+
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
