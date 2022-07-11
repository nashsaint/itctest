@extends('layouts.app')

@section('content')
    <div class="container-xl d-flex flex-column justify-content-center">
        <div class="empty">
            <div class="empty-img"></div>
            <p class="empty-title">Welcome</p>
            <p class="empty-subtitle text-muted">
                You are using ITCompliance API.
            </p>

            <a href="{{ route('products.index') }}" class="btn btn-outline-primary w-10">Show Product List</a>
        </div>
    </div>
@endsection
