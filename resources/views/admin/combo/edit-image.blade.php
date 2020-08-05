@extends('dsadmin.layout')

@section('title','producto')

@section('scripts')

  <script src="{{asset('dsadmin/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
  <script src="{{asset('dsadmin/plugins/jquery-validation/additional-methods.min.js')}}"></script>
  <script src="{{asset('dsadmin/plugins/jquery-validation/localization/messages_es.min.js')}}"></script>
  <script src="{{asset('dsadmin/pages/scripts/product/create.js')}}"></script>
  <script src="{{asset('dsadmin/custom/validation-general.js')}}"></script>
  <script src="{{asset('dsadmin/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>



{{--   <script src="{{asset('dsadmin/plugins/bootstrap-fileinput/js/fileinput.min.js')}}"></script>
  <script src="{{asset('dsadmin/plugins/bootstrap-fileinput/js/locales/es.js')}}"></script>
  <script src="{{asset('dsadmin/plugins/bootstrap-fileinput/themes/fa/theme.min.js')}}"></script> --}}

@endsection

@section('styles')
  <link rel="stylesheet" href="{{asset("dsadmin//plugins/toastr/toastr.min.css")}}">
  <link href="{{asset("dsadmin/plugins/bootstrap-fileinput/css/fileinput.min.css")}}" rel="stylesheet" type="text/css"/>

@endsection

@section('content')

<section class="content">

  <!-- Default box -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title"><strong>Editar esta imagen de la {{$product->product_name}}</strong></h3>
      <div class="float-sm-right">
        <a href="{{route('product-index')}}">Listado</a> / <a class="active">Editar Imagen</a>
      </div>  
    </div>
    <div class="card-body">
      @include('includes.form-error')
      <div class="row">
          <!-- left column -->
          <div class="col-md-12  ">
          <!-- /.card-header -->
              <!-- form start -->
              <form role="form" enctype="multipart/form-data" class="col-md-12" method="POST" action="{{route('product-image-update', ['product_id' => $product->product_id])}}" id="form-general">
                @csrf @method("put")
                <div class="card-body">                                                      
                    <div class="row form-group justify-content-center">
                      <div class="col-md-2">
                        <div class="product-image-thumb"><img src="{{$product->product_image_name}}" alt="Product Image"></div>
                      </div>
                      <div class="row col-md-10">
                        <label for="exampleInputFile">Selecciona otra imagen si la deseas cambiar</label>
                        <div class="input-group col-md-11">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" name="product_image" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">da click aquí para seleccionarla</label>
                          </div>
                          <div class="form-group col-md-1">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                          </div>
                        </div>
                      </div>                    
                    </div>

                  </div>  

                <!-- /.card-body -->
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
    <!-- /.card-body -->
    <div class="card-footer">
      {{-- Footer --}}
    </div>
    <!-- /.card-footer-->
  </div>
  <!-- /.card -->

</section>

@endsection