@extends('layouts.app')

@section('title', 'Page not found')

@section('content')
<section class="empty-state">
    <span class="empty-icon" aria-hidden="true">404</span>
    <h2>Page not found</h2>
    <p>We couldn't find the page you were looking for.</p>
    <a href="{{ route('movies.index') }}" class="primary-action">Back to the collection</a>
</section>
@endsection
