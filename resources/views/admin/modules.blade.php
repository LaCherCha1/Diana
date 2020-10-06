@extends('layouts.admin.main')

@section('name',ucfirst($admin->user))
@section('meta')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('body')

<div class="container-fluid container-md mt-5">
  <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#crearModal">Agregar Modulo</button>
    <table class="table table-hover table-responsive-xs">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Titulo</th>               
                <th scope="col">Activo</th>
            </tr>
        </thead>
        <tbody id="sortable">
            @foreach ($modules as $module)
           
                <tr data-toggle='modal' data-target="#editarModal" id="{{$module->id}}"  class="link @if($module->active) table-success @else table-danger @endif">
                    <th scope="row">{{$module->id}}</th>
                    <td>{{$module->title}}</td>                   
                    <td>@if($module->active) Si @else No @endif</td>
                </tr>
            
            @endforeach

        </tbody>
    </table>
</div>

{{-- Modal editar --}}
<div class="modal fade" id="editarModal" tabindex="-1"  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content bg-dark text-white">
      <div class="modal-header">
        <h5 class="modal-title" id="editarModalTitle">Module Title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="text-white" aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('admin-modules-update')}}" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
          @method('PUT')
          @csrf
          <input class="id" type="hidden" name="id">
          <div class="form-group">
            <label for="title">Titulo</label>
            <input type="text" class="form-control title" name="title" placeholder="Titulo del modulo">            
          </div>
          
          <div class="form-group">
            <label for="description">Descripción</label>
            <textarea class="form-control description" name='description' rows="5"></textarea>
          </div>

         
          <label for="image">Imagen del modulo</label>
          <img class="img-fluid mb-2 image_show" alt="Card image cap">
          <div class="form-group">
            <input type="file" class="form-control-file image" name="image">
          </div>

          
          <div class="form-group">
            <label for="active">Los miembros pueden acceder?</label>
            <select class="form-control" name="active" id="active">
              <option value="1">Si</option>
              <option value="0">No</option>              
            </select>
          </div>
          <a href='#' class="btn btn-primary temas">Temas de este modulo</a>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </form>
    </div>
  </div>
</div>

{{-- Modal crear --}}
<div class="modal fade" id="crearModal" tabindex="-1"  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content bg-dark text-white">
      <div class="modal-header">
        <h5 class="modal-title" id="crearModalTitle">Agregar Modulo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="text-white" aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('admin-modules-insert')}}" method="POST" enctype="multipart/form-data">
      <div class="modal-body">         
          @csrf
          <input class="id" type="hidden" name="id">
          <div class="form-group">
            <label for="title">Titulo</label>
            <input type="text" class="form-control title" name="title"  placeholder="Titulo del modulo">            
          </div>
          
          <div class="form-group">
            <label for="description">Descripción</label>
            <textarea class="form-control description"  name='description' rows="5"></textarea>
          </div>

         
          <label for="image">Imagen del modulo</label>         
          <div class="form-group">
            <input type="file" class="form-control-file image" name="image">
          </div>

          
          <div class="form-group">
            <label for="active">Los miembros pueden acceder?</label>
            <select class="form-control active" name="active">
              <option value="1">Si</option>
              <option value="0">No</option>              
            </select>
          </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </form>
    </div>
  </div>
</div>


@endsection



@section('styles')
<style>
.link{
  cursor: pointer;
}
#active{
  width: 5rem !important;
}
</style>
@endsection



@section('scripts')
<script src="{{asset('js\jquery-ui.min.js')}}"></script>
<script>
$(function() { 

  $("#sortable").sortable({
  update: function( event, ui ) {
   const ids = $( "#sortable" ).sortable( "toArray")

   $.ajax({
     type: "PUT",
     url: "{{url('/admin/modulos/save')}}",
     data: {'ids':ids,"_token": $("meta[name='csrf-token']").attr("content")},     
     success: function (response) {
      console.log(response);
       
     }
   });

   }
   });
  
   $('.link').click(function(params) {
    const modal=$('#editarModal')
    modal.show()   
    const link = $(this)
    const id = link.attr('id')
    $.ajax({
     type: "GET",
     url: "{{url('/admin/modulos/get')}}",
     data: {'id':id,"_token": $("meta[name='csrf-token']").attr("content")},     
     success: function (response) {
      // console.log(response)
      modal.find('.id').val(response.id)
      modal.find('.title').val(response.title)
      modal.find('.description').val(response.description)
      modal.find('.active').val(response.active)     
      modal.find('.temas').attr('href','/admin/temas/'+response.id) 
     
      
    $.get('/storage/images/modules/'+response.id+'.jpg')
      .done(function() {   
          modal.find('.image_show').show().attr('src','/storage/images/modules/'+response.id+'.jpg')
          }).fail(function() { 
            modal.find('.image_show').hide();              
        })
          
            
          }
        })
    

  })

  $('#btnCrearModulo').click(function(params) {
    const modal=$('#CrearModal')
    modal.show()
    
       
  })
  


});
</script>
@endsection