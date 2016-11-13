@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($accounts as $account)
    <div class="row">
        <div class="col-xs-12 col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $account->username }}</div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>GUID</th>
                                <th>Account</th>
                                <th>Name</th>
                                <th>Race</th>
                                <th>Class</th>
                                <th>Gender</th>
                                <th>Level</th>
                                <th>XP</th>
                                <th>Money</th>
                                <th>Position X</th>
                                <th>Position Y</th>
                                <th>Position Z</th>
                                <th>Map</th>
                                <th>Online</th>
                                <th>totaltime</th>
                                <th>logout_time</th>
                                <th>zone</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($account->characters as $character)
                            <tr>
                                <td>{{ $character->guid }}</td>
                                <td>{{ $character->account }}</td>
                                <td>{{ $character->name }}</td>
                                <td><img width="24" src="{{ race_image($character->gender, $character->race) }}"></td>
                                <td><img width="24" src="{{ class_image($character->class) }}"></td>
                                <td>{{ $character->gender }}</td>
                                <td>{{ $character->level }}</td>
                                <td>{{ $character->xp }}</td>
                                <td>{{ $character->money }}</td>
                                <td>{{ $character->position_x }}</td>
                                <td>{{ $character->position_y }}</td>
                                <td>{{ $character->position_z }}</td>
                                <td>{{ $character->map }}</td>
                                <td>{{ $character->online }}</td>
                                <td>{{ $character->totaltime }}</td>
                                <td>{{ $character->logout_time }}</td>
                                <td>{{ $character->zone }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
