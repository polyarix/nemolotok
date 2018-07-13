@extends('admin.layouts.app')

@section('content')
    <form action="{{route('admin.product-categories.store')}}" method="post" enctype="multipart/form-data">
        <div class="col-lg-12">
            <button type="button" class="btn btn-primary" onclick="location='{{ \URL::previous() }}'" title="back"><i
                        class="fa fa-mail-reply"></i>
            </button>
            {{csrf_field()}}
            @include('admin.product_category.partials.form')
        </div>
    </form>
@endsection

@section('scripts')
    <script src="{{asset('js/admin/actions.js')}}"></script>
@endsection