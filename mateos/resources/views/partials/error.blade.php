@if(!empty($in_error))
  @if ($errors->has($in_error))
      <span class="text-danger small">
          <strong>{{ $errors->first($in_error) }}</strong>
      </span>
  @endif
@endif
