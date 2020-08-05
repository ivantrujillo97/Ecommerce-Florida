
<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<h4 class="modal-title"><strong> {{$base->base_name}} </strong>({{$base->base_measure}})</h4>

            <div class="form-group">
            </div>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="modal-body" >
			<div class="row">
				<div class="row col-md-12 justify-content-center">
	            	@foreach($base->baseImages as $base_image)
		            	<div class="product-image-thumb col-md-2">
		                	<img src="{{$base_image->base_image_name}}" class="product-image" alt="Product Image">
		            	</div>
	                @endforeach
	            </div>
	            <div class="col-md-12">
	            	<h4>{{$base->base_description}}</h4>
	            	<h3><strong>Precio: </strong>$ {{$base->base_price}}</h3>
	            </div>
{{-- 			<div class="row justify-content-center">
				@foreach($base->baseImages as $base_image)
	              <div class="col-md-2">
	                <a href="https://via.placeholder.com/1200/FFFFFF.png?text=1" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery">
	                  <img src="{{Storage::url("images/bases/".$base_image->base_image_name)}}" class="img-fluid mb-2" alt="white sample"/>
	                </a>
	              </div>
	            @endforeach
            </div> --}} 
          </div>
		</div>
	{{--           <div class="modal-footer justify-content-between">
	<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
	</div> --}}
	</div>
<!-- /.modal-content -->
</div>