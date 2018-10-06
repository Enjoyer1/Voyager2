@if(!is_null($dataTypeContent->getKey()))
    <input type="number"
           class="form-control"
           name="{{ $row->field }}"
           type="number"
           @if($row->required == 1) required @endif
           @if(isset($options->disabled)) disabled @endif
           step="any"
           placeholder="{{ isset($options->placeholder)? old($row->field, $options->placeholder): $row->display_name }}"
           value="@if(isset($dataTypeContent->{$row->field})){{ old($row->field, $dataTypeContent->{$row->field}) }}@else{{old($row->field)}}@endif">
@else
    <input type="number"
           class="form-control"
           name="{{ $row->field }}"
           type="number"
           @if($row->required == 1) required @endif
           step="any"
           placeholder="{{ isset($options->placeholder)? old($row->field, $options->placeholder): $row->display_name }}"
           value="@if(isset($dataTypeContent->{$row->field})){{ old($row->field, $dataTypeContent->{$row->field}) }}@else{{old($row->field)}}@endif">
@endif