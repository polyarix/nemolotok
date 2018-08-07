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
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <tr>
                                        <th style="width: 50px;">id</th>
                                        <td>{{$attribute->id}}</td>
                                    </tr>
                                    <tr>
                                        <th>Category name</th>
                                        <td>{{$attribute->name or ''}}</td>
                                    </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{asset('js/admin/actions.js')}}"></script>
@endsection