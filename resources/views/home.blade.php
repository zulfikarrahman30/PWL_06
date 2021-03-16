@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <table class="table table-rensponsive">
                        <tr>
                            <th>
                                username
                                <th>
                                :
                                </th>
                                <td>
                                {{$data->username}}
                                </td>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                name
                                <th>
                                :
                                </th>
                                <td>
                                {{$data->name}}
                                </td>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                email
                                <th>
                                :
                                </th>
                                <td>
                                {{$data->email}}
                                </td>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                created at
                                <th>
                                :
                                </th>
                                <td>
                                {{$data->created_at}}
                                </td>
                            </th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
