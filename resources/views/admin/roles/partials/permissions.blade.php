<div class="card-body card-block">
    <div class="form-group">
        <label for="multiple-select" class=" form-control-label">Categories</label>
        <select name="categories[]" id="multiple-select" multiple="multiple" class="form-control">
            @foreach($permissions as $permission)
                <option value="{{$permission->id}}"
                        @if(!empty($article->article_categories))
                        @foreach($article->article_categories as $article_category)
                        @if($article_category->category_id == $permission->id)
                        selected
                        @endif
                        @endforeach
                        @endif
                >{{$permission->route_name}}</option>
            @endforeach
        </select>
    </div>
</div>