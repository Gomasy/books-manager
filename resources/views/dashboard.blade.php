@extends('layouts.app')

@section('title', 'ダッシュボード')

@section('script')
<script defer src="@asset('assets/dashboard.*.js')"></script>
@endsection

@section('navbar')
<div id="register"></div>
@endsection

@section('content')
<main class="dashboard" id="content"></main>
@endsection
