{{--@include('components.form.error', ['name' => ''])--}}

@error($name)
    <span class="invalid-feedback" role="alert" style="color: #ff0000;">
        <strong>{{ $message }}</strong>
    </span>
@enderror