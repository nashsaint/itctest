@extends('layouts.app')

@section('content')
<div class="container-xl d-flex flex-column justify-content-center">
    @if (empty($list['products']))
    <div class="empty">
        <div class="empty-img"></div>
        <p class="empty-title">There was a problem fetching products</p>
        <p class="empty-subtitle text-muted">
            <a class="btn btn-outline-primary w-10" href="{{ route('products.index') }}">Try again</a>
        </p>

    </div>
    @else
        <div class="page-body">
            <div class="row row-cards">
                <div class="col-12">
                    <div class="card">
                        <div class="table-responsive">
                            <table class="table table-vcenter card-table">
                                <thead>
                                    <tr>
                                        <th>Product Name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list['products'] as $slug => $product)
                                        <tr>
                                            <td><a href="{{ route('products.show', $slug) }}">{{ $product }}</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
@endsection
