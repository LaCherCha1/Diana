@extends('layouts.admin.main')

@section('name',ucfirst($admin->user))

@section('body')

<div class="container-fluid container-md mt-5">
    <table class="table table-hover table-responsive-sm">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>               
                <th scope="col">Instagram</th>
                <th scope="col">Correo</th>
                <th scope="col">Activo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($members as $member)
           
                <tr data-toggle='modal' data-active="{{$member->active}}" data-target="#memberModal" data-id="{{$member->id}}" data-name="{{$member->name}} {{$member->last_name}}" class="link @if($member->active) table-success @else table-danger @endif">
                    <th scope="row">{{$member->id}}</th>
                    <td>{{$member->name}} {{$member->last_name}}</td>                   
                    <td>{{$member->instagram}}</td>
                    <td>{{$member->email}}</td>
                    <td>@if($member->active) Si @else No @endif</td>
                </tr>
            
            @endforeach

        </tbody>
    </table>
</div>

{{-- Modal --}}
<div class="modal fade" id="memberModal" tabindex="-1"  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content bg-dark text-white">
      <div class="modal-header">
        <h5 class="modal-title" id="memberModalTitle">Member Name</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="text-white" aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('admin-members-update')}}" method="POST">
      <div class="modal-body">
          @method('PUT')
          @csrf
          <input id="id" type="hidden" name="id">
          <div class="form-group">
            <label for="active">Puede entrar al area de miembros?</label>
            <select class="form-control" name="active" id="active">
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
<script>
$(function() {  
  // $(".link").click(function() {
  //   const id = $(this).prop('id');
  //   $('#memberModal').modal('show')
  // });

  $('#memberModal').on('show.bs.modal', function (event) {
  const link = $(event.relatedTarget) // link that triggered the modal  
  const id = link.data('id') // Extract info from data-* attributes
  const name = link.data('name') // Extract info from data-* attributes
  const active = link.data('active') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  const modal = $(this)
  modal.find('.modal-title').text(name)
  modal.find('#active').val(active)
  modal.find('#id').val(id)
 
})
});
</script>
@endsection