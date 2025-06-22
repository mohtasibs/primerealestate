@extends('layouts.main')

@section('title', 'Property Details')

@section('content')

@include('includes.navbar2')

<div class="container my-5">
    <h2 class="fw-bold text-center mb-4">Property Details</h2>

    <!-- Buying Buddy Property Details Widget -->
    <div id="MBBv3_SearchDetails"></div>
</div>

@include('includes.footer')

@endsection
