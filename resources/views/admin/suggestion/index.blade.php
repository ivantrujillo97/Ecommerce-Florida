@extends('dsadmin.layout')

@section('title','Sugerencia')

@section('scripts')

  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="{{asset('dsadmin/pages/scripts/suggestion/index.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>

@endsection

@section('styles')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet" type="text/css"/>
  <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" rel="stylesheet">
@endsection


@section('content')

<section class="content">

  <!-- Default box -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title"><strong>Lista de sugerencias</strong></h3>              
    </div>
    <div class="card-body">
      @include('includes.messages')
      <div class="row">
          <div class="col-12">
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <br>
                <table class="table table-striped table-borderedr" id="table-suggestions">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Mensaje</th>
                      <th>Cliente</th>
                      <th>Correo</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($suggestions as $suggestion)
                    <tr>
                      <td>{{$count++}}</td>
                      <td>{{$suggestion->message}}</td>
                      <td>{{$suggestion->customer->customer_name}}</td>
                      <td>{{$suggestion->customer->customer_email}}</td>
{{--                       <td class="text-right py-0 align-middle">
                        <div class="btn-group btn-group-sm">
                          <a href="{{route('suggestion-edit', ['suggestion_id' => $suggestion->suggestion_id])}}" class="btn btn-success"><i class="fas fa-edit"></i></a>
                          <a href="{{route('suggestion-destroy', ['suggestion_id' => $suggestion->suggestion_id])}}" class="btn btn-danger suggestion-destroy"><i class="fas fa-trash"></i></a>
                        </div>
                      </td> --}}
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
          </div>
        </div>
    </div>
    <div class="modal fade" id="modal-suggestion-show">
      <!-- /.modal-dialog -->
    </div>  
    <div class="card-footer">
      {{-- Footer --}}
    </div>
    <!-- /.card-footer-->
  </div>
  <!-- /.card -->

</section>

@endsection