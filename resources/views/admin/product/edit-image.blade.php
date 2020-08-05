@extends('dsadmin.layout')

@section('title','producto')

@section('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.1/js/plugins/piexif.min.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.1/js/plugins/sortable.min.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.1/js/plugins/purify.min.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.1/js/fileinput.min.js"></script>
  <script src="{{asset('dsadmin/plugins/bootstrap-fileinput/themes/fa/theme.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.1/js/locales/es.js"></script>
  <script src="{{asset('dsadmin/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
  <script src="{{asset('dsadmin/plugins/jquery-validation/additional-methods.min.js')}}"></script>
  <script src="{{asset('dsadmin/plugins/jquery-validation/localization/messages_es.min.js')}}"></script>
  <script src="{{asset('dsadmin/pages/scripts/product/edit-image.js')}}"></script>
  <script src="{{asset('dsadmin/custom/validation-general.js')}}"></script>
  <script src="{{asset('dsadmin/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
@endsection

@section('styles')

  <link rel="stylesheet" href="{{asset("dsadmin//plugins/toastr/toastr.min.css")}}">
  <link href="{{asset("dsadmin/plugins/bootstrap-fileinput/css/fileinput.min.css")}}" rel="stylesheet" type="text/css"/>
  <link href="{{asset("dsadmin/pages/css/product/create.css")}}" rel="stylesheet" type="text/css"/>

@endsection

@section('content')

<section class="content">

  <!-- Default box -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title"><strong>Editar esta imagen de la {{ucwords($product->product_name)}}</strong></h3>
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
                      @if($product->product_image_name=="")
                        <input id="product_image_name" type="hidden" value="https://www.dropbox.com/s/0zvf0jmjo2b9cz2/1f3f7.png?raw=1">
                      @else
                        <input id="product_image_name" type="hidden" value="{{$product->product_image_name}}">
                      @endif
                      
                        <div class="col-md-4 text-center">
                            <div class="kv-product">
                                <div class="file-loading">
                                    <input id="product_image" name="product_image" type="file">
                                </div>
                            </div>
                            <div class="kv-product-hint">
                                <small>Selecciona la imagen del producto</small>
                            </div>
                        </div>
                   
                    </div>

                  </div>
                  <div class="card-footer justify-content-center">
                    <button type="submit" class="btn btn-success col-md-12">Guardar</button>
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