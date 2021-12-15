@extends('templates/master')

@section('title')
    Round History
@endSection

@section('content')
    <a href='/'> Home </a>

    <h2>Game History</h2>
    <ul>
        <li>Game played: {{ $count }} times </li>
        <li>Player winning Percent: {{ $percentFormated }} </li>
        <li>Player has won: {{ $winCount }}</li>
        <li>Tie game: {{ $tieCount }}</li>
        <li>Player has lost: {{ $lostCount }} </li>
    </ul>

    <ul>
        @foreach ($rounds as $round)
            <li><a test='round-link' href='/round?id={{ $round['id'] }}'>{{ $round['timestamp'] }}</a></li>
        @endforeach
    </ul>

@endSection
