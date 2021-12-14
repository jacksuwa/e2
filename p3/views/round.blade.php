@extends('templates/master')

@section('title')
    Round Details

@endSection

@section('content')
    <h2>Round Details</h2>
    <ul>
        <li>Round id: {{ $round['id'] }}</li>
        <li>Palyer's choice: {{ $round['choice'] }}</li>
        <li>Computer's choice: {{ $round['computer'] }}</li>
        <li>Player {{ $round['result'] }}</li>
        <li>Timestamp: {{ $round['timestamp'] }}</li>

    </ul>

    <a href='/history'>Back to round history </a>

@endSection
