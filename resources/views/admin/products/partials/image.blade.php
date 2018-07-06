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
            </table>
        </div>
        <div class="text-right col-lg-1">
            <button class="btn btn-outline-danger btn-lg image-item-delete" data-file-id="{{$file->id}}"><i class="fa fa-trash-o"></i></button>
        </div>
    </div>
</section>