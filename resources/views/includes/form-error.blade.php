@if($errors->any())
	<div id="toast-container" class="toast-top-right">	
		@foreach($errors -> all() as $error)
			<div class="toast toast-error toast-time-hide" aria-live="assertive" style="">
				<div class="toast-message">
					{{$error}}
				</div>
			</div>
		@endforeach
	</div>		
@endif

