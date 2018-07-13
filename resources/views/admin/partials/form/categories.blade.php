<div class="form-group">
    <label for="multiple-select" class=" form-control-label">Categories</label>
    <select name="categories[]" id="multiple-select" @if($multiple) multiple="multiple" @endif class="form-control select2">
        @foreach($categories as $category)
            @if(!$multiple)
                <option value=""></option>
            @endif
            <option value="{{$category->id}}"
                    @if(!empty($item->categories))
                    @foreach($item->categories as $item_category)
                    @if($item_category->id == $category->id)
                    selected
                    @endif
                    @endforeach
                    @endif

                    @if(!empty($item->parent))
                    {{--@foreach($item->parent as $item_category)--}}
                    @if($item->parent['id'] == $category->id)
                    selected
                    @endif
                    {{--@endforeach--}}
                    @endif
            >{{$category->description->name}}</option>
        @endforeach
    </select>
</div>