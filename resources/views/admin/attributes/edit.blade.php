@extends('admin.layouts.app')

@section('content')
    <form action="{{route('admin.attributes.update', ['id' => $attribute->id])}}" method="post">
        <div class="col-lg-12">
            <button type="button" class="btn btn-primary" onclick="location='{{ \URL::previous() }}'" title="back"><i
                        class="fa fa-mail-reply"></i>
            </button>
            {{csrf_field()}}
            <input type="hidden" name="_method" value="put">
            @include('admin.attributes.partials.form')
        </div>
    </form>
@endsection