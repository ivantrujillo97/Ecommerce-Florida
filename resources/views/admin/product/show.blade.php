
<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<h4 class="modal-title"><strong> {{ucwords($product->product_name)}} </strong><small>({{$product->product_flavor_color}})({{$product->product_net_content}})</small></h4>
            <div class="form-group">
            </div>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="modal-body justify-content-center">
			<img height="auto" width="70%" class="mx-auto d-block" src="{{$product->product_image_name}}">
		</div>
	{{--           <div class="modal-footer justify-content-between">
	<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
	</div> --}}
	</div>
<!-- /.modal-content -->
</div>