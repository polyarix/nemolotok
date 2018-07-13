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
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <tr>
                                    <th>ID</th>
                                    <td>{{ $product->id }}</td>
                                </tr>
                                <tr>
                                    <th>Наименование товара</th>
                                    <td>{{ $product->description->name or '' }}</td>
                                </tr>
                                <tr>
                                    <th>Описание</th>
                                    <td>{!! $product->description->description or '' !!}</td>
                                </tr>
                                <tr>
                                    <th>Categories</th>
                                    <td>
                                        @foreach($product->categories as $category)
                                            <span class="badge-dark">{{$category->name}}</span>
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <th>Created at</th>
                                    <td>{{$article->created_at or ''}}</td>
                                </tr>
                                <tr>
                                    <th>Updated at</th>
                                    <td>{{$article->updated_at or ''}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection