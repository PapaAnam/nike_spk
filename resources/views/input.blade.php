<div class="form-group">
	<label for="{{ $id }}">{{ $label }}</label>
	<input type="text" id="{{ $id }}" name="{{ $id }}" class="form-control{{ $errors->has($id) ? ' is-invalid' : '' }}" @isset($value) value="{{ old($id) ? old($id) : $value }}" @else value="{{ old($id) }}" @endisset>
	@if ($errors->has($id))
	<span class="invalid-feedback" role="alert">
		<strong>{{ $errors->first($id) }}</strong>
	</span>
	@endif
</div>