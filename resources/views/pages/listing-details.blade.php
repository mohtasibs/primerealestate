@extends('layouts.main')

@section('title', 'Property Details')

@section('content')

@include('includes.navbar2')

<div class="container my-5">
    <h2 class="fw-bold text-center mb-4">Property Details</h2>

    <!-- Buying Buddy Property Details Widget -->
    <div id="bb-widget-listing-details" class="bb-widget"></div>
</div>

@include('includes.footer')

<!-- Buying Buddy Script -->
<script async src="https://cdn.buyingbuddy.com/widgets/bb.js?key=AIzaSyCFeHHlboPct7Yj6LmMVDcao4R_qlQNTlc"></script>

@endsection
