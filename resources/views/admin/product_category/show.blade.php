@extends('admin.layouts.app')

@section('content')
    <div class="col-lg-12">
        <div class="text-right">
            <button type="button" class="btn btn-primary" onclick="location='{{ \URL::previous() }}'" title="back"><i
                        class="fa fa-mail-reply"></i></button>
        </div>
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Table</strong>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <tr>
                                        <th>ID</th>
                                        <td>{{ $category->id }}</td>
                                    </tr>
                                    <tr>
                                        <th>Title</th>
                                        <td>{{ $category->description->title or '' }}</td>
                                    </tr>
                                    <tr>
                                        <th>Description</th>
                                        <td>{!! $category->description->description or '' !!}</td>
                                    </tr>
                                    <tr>
                                        <th>Meta-title</th>
                                        <td>{!! $category->description->meta_title !!}</td>

                                    </tr>
                                    <tr>
                                        <th>Meta-description</th>
                                        <td>{!! $category->description->meta_title !!}</td>
                                    </tr>
                                    <tr>
                                        <th>Created at</th>
                                        <td>{{$category->created_at or ''}}</td>
                                    </tr>
                                    <tr>
                                        <th>Updated at</th>
                                        <td>{{$category->updated_at or ''}}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection