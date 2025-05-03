{{--@include('components.form.time', ['name' => '', 'required' => false])--}}

<input type="time"
    name="{{ $name }}"
    id="{{ $name }}"
    class="form-control @error($name) is-invalid @enderror"
    @isset ($value)
        value="{{ old($name, $value) }}"
    @else
        value="{{ old($name) }}"
    @endisset
    @isset ($vModel)
        v-model="{{ $vModel }}"
    @endif
    @isset ($min)
        min="{{ $min }}"
    @endif
    @isset ($max)
        max="{{ $max }}"
    @endif
    @isset ($step)
        step="{{ $step }}"
    @endif
    @isset ($disabled)
        disabled
    @endisset
    @isset ($readonly)
        readonly
    @endisset
>
