@extends('layouts.app')

@section('title', 'Server error')

@section('content')
<section class="empty-state">
    <span class="empty-icon" aria-hidden="true">500</span>
    <h2>Internal Server Error</h2>
    <p>We couldn't complete your request. Please try again later.</p>
    <a href="{{ route('movies.index') }}" class="primary-action">Back to the collection</a>
</section>
@endsection
