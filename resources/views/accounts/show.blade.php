@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Account Show</div>

                <div class="panel-body">
                    Here is info about account id #{{ $account->id }}:

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>username</th>
                                <th>gmlevel</th>
                                <th>email</th>
                                <th>joindate</th>
                                <th>last_ip</th>
                                <th>failed_logins</th>
                                <th>locked</th>
                                <th>last_login</th>
                                <th>active_realm_id</th>
                                <th>expansion</th>
                                <th>mutetime</th>
                                <th>locale</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $account->id }}</td>
                                <td>{{ $account->username }}</td>
                                <td>{{ $account->gmlevel }}</td>
                                <td>{{ $account->email }}</td>
                                <td>{{ $account->joindate }}</td>
                                <td>{{ $account->last_ip }}</td>
                                <td>{{ $account->failed_logins }}</td>
                                <td>{{ $account->locked }}</td>
                                <td>{{ $account->last_login }}</td>
                                <td>{{ $account->active_realm_id }}</td>
                                <td>{{ $account->expansion }}</td>
                                <td>{{ $account->mutetime }}</td>
                                <td>{{ $account->locale }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
