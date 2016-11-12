@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Realms</div>

                <div class="panel-body">
                    Hi {{ $name }}, here is a list of realms:
                    <div class="container">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Realm Name</th>
                                    <th>Address</th>
                                    <th>Port</th>
                                    <th>Icon</th>
                                    <th>Realm Flags</th>
                                    <th>Timezone</th>
                                    <th>Allowed Security Level</th>
                                    <th>Population</th>
                                    <th>Realm Build</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($realms as $realm)
                                <tr>
                                    <td>{{ $realm->id }}</td>
                                    <td>{{ $realm->name }}</td>
                                    <td>{{ $realm->address }}</td>
                                    <td>{{ $realm->port }}</td>
                                    <td>{{ $realm->icon }}</td>
                                    <td>{{ $realm->realmflags }}</td>
                                    <td>{{ $realm->timezone }}</td>
                                    <td>{{ $realm->allowedSecurityLevel }}</td>
                                    <td>{{ $realm->population }}</td>
                                    <td>{{ $realm->realmbuilds }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    {{ $realms->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
