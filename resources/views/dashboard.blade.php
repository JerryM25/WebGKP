@extends('templates.nav-admin')
@section('title', 'Dashboard')

@section('content')

<div class="auto-container">
    <div class="inner-container">
        <div class="row clearfix">
            <br><br>
        </div>
    </div>
</div>

<section class="dashboard-title">
    <div class="auto-container">
        <img src="{{ asset('assets/images/main-slider/dashboard.png') }}" alt="">
        <h2>Hallo Selamat Datang</h2>
        <ul class="bread-crumb clearfix">
            <li>{{ Auth::user()->username }}</li>
        </ul>
    </div>
</section>

@endsection
