@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($accounts as $account)
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $account->username }}</div>
                <div class="panel-body">
                    <div class="row">
                        @foreach ($account->characters as $character)
                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        {{ $character->name }}
                                        <span class="pull-right">
                                            <strong>Level {{ $character->level }}</strong>
                                            <img width="24" src="{{ race_image($character->gender, $character->race) }}">
                                            <img width="24" src="{{ class_image($character->class) }}">
                                        </span>
                                    </div>
                                    <div class="panel-body">
                                        <dl class="dl-horizontal">
                                            <dt>Gold</dt>
                                            <dd>{{ money($character->money) }}</dd>
                                            <dt>Position</dt>
                                            <dd>
                                                {{ mapX($character->map, $character->zone, $character->x, $character->y) }} X
                                                {{ mapY($character->map, $character->zone, $character->x, $character->y) }} Y
                                            </dd>
                                            <dt>Zone</dt>
                                            <dd>{{ zoneName($character->map, $character->zone) }}</dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
