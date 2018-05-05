<div class="card">
    <div class="card-header"><strong>Category</strong>
        <small> Form</small>
    </div>
    <div class="card-body card-block">
        <div class="form-group">
            <label for="company" class=" form-control-label">Title</label>
            <input type="text"  name="title" placeholder="Enter article title" value="{{$article->title or ''}}" class="form-control">
        </div>
    </div>
    <div class="card-body card-block">
        <div class="form-group">
            <label for="textarea-input" class="form-control-label">Content</label>
            <textarea name="content" id="textarea-input" rows="9" placeholder="Content..." class="form-control">{{$article->content or ''}}</textarea>
        </div>
    </div>

    <div class="card-body card-block">
        <div class="form-group">
            <label for="multiple-select" class=" form-control-label">Categories</label>
                <select name="categories[]" id="multiple-select" multiple="multiple" class="form-control">
                    @foreach($categories as $category)
                        <option value="{{$category->id}}"
                                @if(!empty($article->categories))
                                    @foreach($article->categories as $article_category)
                                        @if($article_category->id == $category->id)
                                            selected
                                        @endif
                                    @endforeach
                                @endif
                            >{{$category->name}}</option>
                    @endforeach
                </select>
        </div>
    </div>
</div>
<div class="card-footer">
    <button type="submit" class="btn btn-primary btn-sm">
        <i class="fa fa-dot-circle-o"></i> Submit
    </button>
</div>