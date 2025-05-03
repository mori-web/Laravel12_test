{{-- 例 @include('components.form.datetime', ['name' => 'ネーム属性', 'required' => true, 'class' => '追加したいクラス名']) --}}
<input type="datetime-local"
    name="{{ $name }}"
    id="{{ $name }}"
    class="form-control datetimepickr
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
    @isset ($readonly)
        readonly
    @endisset
    @isset ($min)
        min="{{ $min }}"
    @endif
    @isset ($max)
        max="{{ $max }}"
    @endif
    @isset ($step)
        step="{{ $step }}"
    @endif
>
