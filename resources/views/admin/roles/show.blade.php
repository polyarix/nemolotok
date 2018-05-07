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
                                    <td>{{ $role->id }}</td>
                                </tr>
                                <tr>
                                    <th>Title</th>
                                    <td>{{ $role->name or '' }}</td>
                                </tr>
                                <tr>
                                    <th>Rules</th>
                                    <td>
                                        @foreach($role->rules as $rule)
                                            <span class="badge-dark">{{$rule->name}}</span>
                                        @endforeach
                                    </td>
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

@section('scripts')
    <script src="{{asset('js/admin/actions.js')}}"></script>
@endsection