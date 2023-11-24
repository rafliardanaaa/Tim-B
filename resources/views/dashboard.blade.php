@extends('sidebar')

@section('content')

<title>Klinik-B | Dashboard</title>

<div class="bg justify-content-center flex align-items-center text-center" style="margin: 100px; margin-top: 150px; margin-left: 360px;">
    <h1 class="text-dark text-center mb-4">Hello, !</h1>
    <p>Welcome to the Klinik-B dashboard! This is the place where you can manage your website and keep track of your progress. A dashboard is a set of pages that represent all the information a site owner needs to know in real time so they can make informed decisions about their website and business.</p>
    <form action="{{ route('user.logout') }}" method="get">
        @csrf
        <button type="submit" class="btn btn-primary w-100">Logout</button>
    </form>
</div>

