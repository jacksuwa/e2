@extends('templates/master')

@section('title')
    Round History

@endSection

@section('content')
    <h2>Game History</h2>
    <ul>
        <li>Game played: {{ $count }} times </li>
        <li>Player has won: {{ $winCount }}</li>
        <li>Tie game: {{ $tieCount }}</li>
        <li>Player has lost: {{ $lostCount }} </li>
    </ul>

    <ul>
        @foreach ($rounds as $round)
            <li><a test='round-link' href='/round?id={{ $round['id'] }}'>{{ $round['timestamp'] }}</a></li>
        @endforeach
    </ul>

    <a href='/'> Home </a>

@endSection
