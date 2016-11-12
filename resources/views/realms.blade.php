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
                        @foreach ($realms as $realm)
                            {{ $realm->id }} {{ $realm->name }} {{ $realm->address }} {{ $realm->port }} {{ $realm->icon }} {{ $realm->realmflags }} {{ $realm->timezone }} {{ $realm->allowedSecurityLevel }} {{ $realm->population }} {{ $realm->realmbuilds }}
                        @endforeach
                    </div>

                    {{ $realms->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
