<div class="content col-lg-12">
    <section id="images-info-block">
        @if($item)
            @foreach($item->files as $file)
                <section class="image-section">
                    <div class="form-group col-lg-12">
                        <div class="text-left col-lg-3">
                            <img class="thumbnail"
                                 src="{{asset('storage/'.$file->url)}}">
                        </div>
                        <div class="col-lg-8">
                            <table class="table table-striped table-bordered">
                                <h5>Доступные размеры</h5>
                                @foreach($file->images as $image)
                                    <tr>
                                        <th>{{$image->size_description}}</th>
                                        <td>{{$image->url}}</td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <th>Обложка</th>
                                    <td><input type="radio" name="cover_image"
                                               @if($file->id === $item->cover_image) checked
                                               @endif value="{{$file->id}}"></td>
                                </tr>
                            </table>
                        </div>
                        <div class="text-right col-lg-1">
                            <button class="btn btn-outline-danger btn-lg image-item-delete"
                                    data-file-id="{{$file->id}}"><i class="fa fa-trash-o"></i></button>
                        </div>
                    </div>
                </section>
            @endforeach
        @endif
    </section>
    <table id="new-files" class="table table-striped table-bordered">
    </table>
</div>
<div class="col-lg-12 text-center">
    <button type="button" id="new-image" class="form-group btn btn-outline-primary btn-lg"
            data-list-type="{{$data_list_type}}">Добавить новое
        изображение
    </button>
</div>

@section('scripts')
    @parent
    <script type="module" src="{{asset('js/admin/products/product-images.js')}}"></script>
@stop