{{-- 例 @include('components.form.text', ['name' => 'ネーム属性', 'required' => true, 'class' => '追加したいクラス名']) --}}

<input type="text"
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
    @isset ($placeholder)
        placeholder="{{ $placeholder }}"
    @endif
    @isset ($vModel)
        v-model="{{ $vModel }}"
    @endif
    @isset ($disabled)
        disabled
    @endisset
    @isset($pattern)
        pattern="{{ $pattern }}"
    @endisset
    @isset($minlength)
        minlength="{{ $minlength }}"
    @endisset
    @isset($maxlength)
        maxlength="{{ $maxlength }}"
    @endisset
    @isset ($readonly)
        readonly
    @endisset
>
