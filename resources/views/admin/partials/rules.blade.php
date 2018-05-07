<div class="form-group">
    <label for="rules" class=" form-control-label">Rules</label>
    <select name="rules[]" id="rules" multiple="multiple" class="form-control select2">
        @foreach($rules as $rule)
            <option value="{{$rule->id}}"
                    @if(!empty($role->rules))
                    @foreach($role->rules as $item)
                    @if($item->id == $rule->id)
                    selected
                    @endif
                    @endforeach
                    @endif
            >{{$rule->name}}</option>
        @endforeach
    </select>
</div>