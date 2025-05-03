{{-- <x-form.text name="ネーム属性" required="true" class="追加したいクラス名"/> --}}

<input type="email"
    name="{{ $name }}"
    id="{{ $name }}"
    class="form-control bg-light
            @error($name) is-invalid @enderror
            @isset($class) {{ $class }} @endisset
        "
    @isset ($value)
        value="{{ old($name, $value) }}"
    @else
        value="{{ old($name) }}"
    @endisset
    @isset ($required)
        @if ($required === true)
            required
        @endif
    @endisset
    @isset($placeholder)
        placeholder="{{ $placeholder }}"
    @endif
    @isset($autofocus)
        autofocus
    @endif
    @isset($vModel)
        v-model="{{ $vModel }}"
    @endif
    @isset($minlength)
        minlength="{{ $minlength }}"
    @endisset
    @isset($maxlength)
        maxlength="{{ $maxlength }}"
    @endisset
    @isset($pattern)
        pattern="{{ $pattern }}"
    @endisset
    @isset ($disabled)
        disabled
    @endisset
    @isset ($readonly)
        readonly
    @endisset
>
