@extends('admin.layouts.app')

@section('content')
    <form action="{{route('admin.category.view.store')}}" method="post">
        <div class="col-lg-12">
            <button type="button" class="btn btn-primary" onclick="location='{{ \URL::previous() }}'" title="back"><i
                        class="fa fa-mail-reply"></i>
            </button>
            {{csrf_field()}}
            @include('admin.roles.partials.form')
        </div>
    </form>
@endsection