@extends('dsadmin.layout')

@section('title','clientes')

@section('scripts')

  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="{{asset('dsadmin/pages/scripts/customer/index.js')}}"></script>
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
        <h3 class="card-title"><strong>Listado de clientes</strong></h3>
{{--         <div class="card-tools">
          <a href="" class="btn btn-block btn-outline-info">
            <i class="fas fa-plus"></i> Agregar
          </a>
        </div> --}}
      </div>
      <div class="card-body">
      @include('includes.messages')
        <div class="row">
          <div class="col-12">
            <div class="card">        
              <div class="card-body table-responsive p-0">
                <br>
                <table class="table table-striped table-borderedr" id="table-customers">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nombre</th>
                      <th>Email</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($customers as $customer)
                      <tr>
                        <td>{{$count++}}</td>
                        <td class="align-middle">{{$customer->customer_name}}</td>
                        <td class="align-middle">{{$customer->customer_email}}</td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="modal-customer-show">
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