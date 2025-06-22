@extends('layouts.main')

@section('title', 'MLS Search Results')

@section('content')

@include('includes.navbar2')

<div class="container my-5" id="listing-results">
    <h2 class="fw-bold text-center mb-4">Property Search Results</h2>

    <!-- Buying Buddy Search Results Widget -->
    <div id="MBBv3_ListingResults"></div>
</div>

@include('includes.footer')

@endsection
