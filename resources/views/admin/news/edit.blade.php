@extends('admin.layouts.app')

@section('content')
    <form action="{{route('admin.news.update', ['article' => $article])}}" method="post">
        <div class="col-lg-12">
            <div class="text-right">
                <button type="button" class="btn btn-primary" onclick="location='{{ \URL::previous() }}'" title="back"><i
                            class="fa fa-mail-reply"></i></button>
            </div>

            {{csrf_field()}}
            <input type="hidden" name="_method" value="put">
            @include('admin.news.partials.form')
        </div>
    </form>
@endsection