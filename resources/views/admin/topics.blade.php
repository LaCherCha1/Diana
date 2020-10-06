@extends('layouts.admin.main')

@section('name',ucfirst($admin->user))
@section('meta')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('body')

<div class="container-fluid container-md mt-5">
<button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#crearModal">Agregar tema al {{$module->title}}</button>
<a href="{{route('admin-modules')}}" class="btn btn-secondary mb-3">Modulos</a>
    <table class="table table-hover table-responsive-xs  table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Titulo</th>               
                <th scope="col">PDF</th>
                <th scope="col">Video</th>
            </tr>
        </thead>
        <tbody id="sortable">
            @foreach ($topics as $topic)
           
                <tr data-toggle='modal' data-target="#editarModal" id="{{$topic->id}}"  class="link">
                    <th scope="row">{{$topic->id}}</th>
                    <td>{{$topic->topic}}</td>                   
                    <td>@if($topic->pdf) Si @else No @endif</td>
                    <td>@if($topic->video) Si @else No @endif</td>
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
        <h5 class="modal-title" id="editarModalTitle">Editar tema</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="text-white" aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('admin-topics-update')}}" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
          @method('PUT')
          @csrf
          <input class="id" type="hidden" name="id">
          <input class="module_id" type="hidden" name="module_id">
          <div class="form-group">
            <label for="title">Titulo</label>
            <input type="text" class="form-control title" name="title" placeholder="Titulo del topic">            
          </div>
          
          <div class="form-group">
            <label for="description">Descripción</label>
            <textarea class="form-control description" name='description' rows="5"></textarea>
          </div>

         
          <div class="form-group">
            <label for="pdf">PDF del tema</label>
            <span class='pdf_show badge badge-pill badge-light'></span>         
            <input type="file" class="form-control-file pdf" name="pdf">
          </div>


          <label for="image">Imagen del modulo</label>
          <img class="img-fluid mb-2 image_show">
          <div class="form-group">
            <input type="file" class="form-control-file image" name="image">
          </div>


        </div>
        <div class="modal-footer">
          <a href='#' class="btn btn-danger delete">Borrar</a>
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
        <h5 class="modal-title" id="crearModalTitle">Agregar Tema</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="text-white" aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('admin-topics-insert')}}" method="POST" enctype="multipart/form-data">
      <input class="module_id" type="hidden" name="module_id" id="module_id" value='{{$module->id}}'>
      <div class="modal-body">         
          @csrf
          <input class="id" type="hidden" name="id">
          <div class="form-group">
            <label for="title">Titulo</label>
            <input type="text" class="form-control title" name="title"  placeholder="Titulo del topic">            
          </div>
          
          <div class="form-group">
            <label for="description">Descripción</label>
            <textarea class="form-control description"  name='description' rows="5"></textarea>
          </div>

         
          <div class="form-group">
            <label for="pdf">PDF del tema</label>                    
            <input type="file" class="form-control-file pdf" name="pdf">
          </div>


          <label for="image">Imagen del modulo</label>
          <img class="img-fluid mb-2 image_show">
          <div class="form-group">
            <input type="file" class="form-control-file image" name="image">
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
.delete{
  float: left !important;
    position: absolute;
    left: 20px;
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
     url: "{{url('/admin/temas/save')}}",
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
     type: "POST",
     url: "{{url('/admin/temas/get')}}",
     data: {'id':id,"_token": $("meta[name='csrf-token']").attr("content")},     
     success: function (response) {
      // console.log(response)
      modal.find('.id').val(response.id)
      modal.find('.module_id').val(response.module_id)
      modal.find('.title').val(response.topic)
      modal.find('.description').val(response.description)
      modal.find('.delete').attr('href','/admin/temas/delete/' + response.id)
      
      if(response.pdf == 'si'){
        modal.find('.pdf_show').text('Tiene PDF')
      }else{
        modal.find('.pdf_show').text('No tiene PDF')
      }
      
      $.get('/storage/images/topics/'+response.id+'.jpg')
      .done(function() {   
          modal.find('.image_show').show().attr('src','/storage/images/topics/'+response.id+'.jpg')
          }).fail(function() { 
            modal.find('.image_show').hide();              
        })//.end get
      
            
          }
        })
    

  })

  $('#btnCreartopic').click(function(params) {
    const modal=$('#CrearModal')
    modal.show()
    
       
  })
  

});
</script>
@endsection