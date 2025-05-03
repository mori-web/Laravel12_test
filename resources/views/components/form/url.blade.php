<input type="url"
    name="{{ $name }}"
    id="{{ $name }}"
    class="form-control bg-light
            @isset($errName)
                @error($errName) is-invalid @enderror
            @else
                @error($name) is-invalid @enderror
            @endisset
            @isset($class) {{ $class }} @endisset
        "
    @isset($value)
        value="{{ old($name, $value) }}"
    @else
        value="{{ old($name) }}"
    @endisset
    @isset($required)
        @if ($required === true)
            required
        @endif
    @endisset
    @isset($vModel)
        v-model="{{ $vModel }}"
    @endif
    @isset ($placeholder)
        placeholder="{{ $placeholder }}"
    @endif
    @isset($disabled)
        disabled
    @endisset
    @isset($readonly)
        readonly
    @endisset
    @isset($pattern)
        pattern="{{ $pattern }}"
    @endisset
    @isset($minlength)
        minlength="{{ $minlength }}"
    @endif
    @isset($maxlength)
        maxlength="{{ $maxlength }}"
    @endif
>
