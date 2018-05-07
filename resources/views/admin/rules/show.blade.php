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
                                    <td>{{ $rule->id }}</td>
                                </tr>
                                <tr>
                                    <th>Title</th>
                                    <td>{{ $rule->name or '' }}</td>
                                </tr>
                                <tr>
                                    <th>Content</th>
                                    <td>{!! $rule->description or '' !!}</td>
                                </tr>
                                <tr>
                                    <th>Permissions</th>
                                    <td>
                                        @foreach($rule->permissions as $permission)
                                            <span class="badge-dark">{{$permission->action_name}}</span>
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