{{--<div class="card-body card-block">--}}
    <div class="form-group">
        <label for="permissions" class=" form-control-label">Rules</label>
        <select name="permissions[]" id="permissions" multiple="multiple" class="form-control select2">
            @foreach($permissions as $permission)
                <option value="{{$permission->id}}"
                        @if(!empty($rule->permissions))
                        @foreach($rule->permissions as $item)
                        @if($item->id == $permission->id)
                        selected
                        @endif
                        @endforeach
                        @endif
                >{{$permission->route_name}}</option>
            @endforeach
        </select>
    </div>
{{--</div>--}}