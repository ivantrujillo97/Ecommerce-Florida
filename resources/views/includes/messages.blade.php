@if(session('message'))
	<div id="toast-container" class="toast-top-right">
		<div class="toast toast-success toast-time-hide" aria-live="assertive" style="">
			<div class="toast-message">
				{{session('message')}}
			</div>
		</div>		
	</div>	
@endif