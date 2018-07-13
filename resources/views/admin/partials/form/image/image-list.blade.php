<div class="content col-lg-12">
    <section id="images-info-block">
        @if($item)
            @each('admin.partials.form.image.image', $item->files, 'file')
        @endif
    </section>
    <table id="new-files" class="table table-striped table-bordered">
    </table>
</div>
<div class="col-lg-12 text-center">
    <button type="button" id="new-image" class="form-group btn btn-outline-primary btn-lg" data-list-type="{{$data_list_type}}">Добавить новое
        изображение
    </button>
</div>

@section('scripts')
    <script src="{{asset('js/admin/products/product-images.js')}}"></script>
@endsection