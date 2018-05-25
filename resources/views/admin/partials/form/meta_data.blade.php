<div class="form-group">
    <label for="company" class=" form-control-label">Meta-title</label>
    <textarea name="meta_title" class="form-control">{{$item->description->meta_title or ''}}</textarea>
</div>
<div class="form-group">
    <label for="company" class=" form-control-label">Meta-description</label>
    <textarea name="meta_description" class="form-control">{{$item->description->meta_description or ''}}</textarea>
</div>
<div class="form-group">
    <label for="meta_keyword" class=" form-control-label">Meta-keyword</label>
    <textarea name="meta_keyword" id="meta_keyword" class="form-control">{{$item->description->meta_keyword or ''}}</textarea>
</div>