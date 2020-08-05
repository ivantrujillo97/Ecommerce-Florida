@extends('dsadmin.layout')

@section('title','Combo')

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
  <script src="{{asset('dsadmin/pages/scripts/combo-image/create.js')}}"></script>
  <script src="{{asset('dsadmin/custom/validation-general.js')}}"></script>
  <script src="{{asset('dsadmin/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>



{{--   <script src="{{asset('dsadmin/plugins/bootstrap-fileinput/js/fileinput.min.js')}}"></script>
  <script src="{{asset('dsadmin/plugins/bootstrap-fileinput/js/locales/es.js')}}"></script>
  <script src="{{asset('dsadmin/plugins/bootstrap-fileinput/themes/fa/theme.min.js')}}"></script> --}}

@endsection

@section('styles')
  <link rel="stylesheet" href="{{asset("dsadmin//plugins/toastr/toastr.min.css")}}">
  <link href="{{asset("dsadmin/plugins/bootstrap-fileinput/css/fileinput.min.css")}}" rel="stylesheet" type="text/css"/>
  <link href="{{asset("dsadmin/pages/css/combo-image/create.css")}}" rel="stylesheet" type="text/css"/>

@endsection

@section('content')

<section class="content">
@php
  $count_img = count($combo->comboImages);
  $add_img = 4 - $count_img;
 @endphp
  <!-- Default box -->
  <div class="card card-primary">
    <div class="card-header">
    @if($add_img == 1)  
        <h3 class="card-title"><strong>Agregar la imagen que hace falta de la {{$combo->combo_name}}</strong></h3>
    @else
      <h3 class="card-title"><small>Agrega las {{$add_img}} imagenes de la <strong>{{$combo->combo_name}}</strong> que hacen falta o tambien puedes agregar solo una</small></h3>
    @endif  
      <div class="float-sm-right">
        <a href="{{route('combo-index')}}">Listado</a> / <a class="active">Agregar Imagen</a>
      </div>  
    </div>
    <div class="card-body">
      @include('includes.form-error')
      <div class="row">
          <!-- left column -->
          <div class="col-md-12  ">
          <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="form-general" enctype="multipart/form-data" class="col-md-12" method="POST" action="{{route('combo-image-store')}}" >
                @csrf
                <div class="card-body">                                                      
                  <div class="row form-group justify-content-center">
                      <div class="col-md-12">
                        <input type="hidden" name="combo_id" value="{{$combo->combo_id}}">
                        <input type="hidden" id="max_image_count" value="{{$add_img}}">
                        <input id="input-24" name="combo_image[]" type="file" multiple required>
                      </div>
                  </div>
                 <div class="form-group col-md-12">
                    <button type="submit" id="save_image" class="btn btn-primary col-md-12">Guardar</button>
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