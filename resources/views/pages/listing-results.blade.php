@extends('layouts.main')

@section('title', 'MLS Search Results')

@section('content')

@include('includes.navbar2')

<div class="container my-5">
    <h2 class="fw-bold text-center mb-4">Property Search Results</h2>

    <!-- Buying Buddy Search Results Widget -->
    <div id="MBBv3_ListingResults"></div>
</div>

@include('includes.footer')

<!-- Buying Buddy Script -->
<script async src="https://cdn.buyingbuddy.com/widgets/bb.js?key=AIzaSyCFeHHlboPct7Yj6LmMVDcao4R_qlQNTlc"></script>

@endsection
