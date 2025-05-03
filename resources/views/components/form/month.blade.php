<input type="month"
    name="{{ $name }}"
    id="{{ $name }}"
    class="form-control
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
    @isset($disabled)
        disabled
    @endisset
    @isset($readonly)
        readonly
    @endisset
    @isset ($step)
        step="{{ $step }}"
    @endif
    @isset ($min)
        min="{{ $min }}"
    @endif
    @isset ($max)
        max="{{ $max }}"
    @endif
>
