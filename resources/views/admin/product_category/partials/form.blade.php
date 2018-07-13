<div class="card" @if(!empty($category))
            data-image-remove-url="{{route('admin.product-category.image-delete', ['id'=> $category->id])}}"
        @endif>
   <div class="default-tab">
       <nav>
           <div class="nav nav-tabs" id="nav-tab" role="tablist">
               <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-general" role="tab"
                  aria-controls="nav-general" aria-selected="true">Общее</a>
               {{--<a class="nav-item nav-link" id="nav-data-tab" data-toggle="tab" href="#nav-data" role="tab"--}}
                  {{--aria-controls="nav-data" aria-selected="false">Данные</a>--}}
               <a class="nav-item nav-link" id="nav-relations-tab" data-toggle="tab" href="#nav-relations"
                  aria-controls="nav-relations" aria-selected="false">Связи</a>
               <a class="nav-item nav-link" id="nav-images-tab" data-toggle="tab" href="#nav-images"
                  aria-controls="nav-images" aria-selected="false">Изображения</a>
           </div>
       </nav>
       <div class="tab-content pl-3 pt-2 card-body" id="nav-tabContent">
           <div class="tab-pane fade show active" id="nav-general" role="tabpanel" aria-labelledby="nav-general-tab">
               <div class="form-group">
                   <label for="company" class=" form-control-label">Имя категории</label>
                   <input type="text"  name="name" placeholder="Title" value="{{$category->description->name or ''}}" class="form-control">
               </div>
               @include('admin.partials.form.meta_data', ['item' => $category])
           </div>

           <div class="tab-pane fade" id="nav-relations" role="tabpanel" aria-labelledby="nav-general-tab">
               <div class="form-group">
                   <label for="multiple-select" class=" form-control-label">Родительская категория</label>
                       <div class="card-body">
                           <select name="categories[]" data-placeholder="Choose a Country..." class="form-control" tabindex="1">
                               <option value=""></option>
                               @foreach($categories as $cat)
                                   <option value="{{$cat->id}}"
                                           @if(!empty($category->parent))
                                           @foreach($category->parent as $item_category)
                                           @if($category->parent['id'] == $cat->id)
                                           selected
                                           @endif
                                           @endforeach
                                           @endif
                                   >{{$cat->description->name}}</option>
                               @endforeach
                           </select>
                       </div>
               </div>
           </div>
           <div class="tab-pane fade" id="nav-images" role="tabpanel" aria-labelledby="nav-images-tab">
                @include('admin.partials.form.image.image-list', ['item' => $category, 'data_list_type' => 'single'])
           </div>
       </div>
   </div>
</div>
<div class="card-footer">
    <button type="submit" class="btn btn-primary btn-sm">
        <i class="fa fa-dot-circle-o"></i> Submit
    </button>
</div>