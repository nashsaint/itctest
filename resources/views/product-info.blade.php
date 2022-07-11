@extends('layouts.app')

@section('content')
<div class="container-xl d-flex flex-column justify-content-center">
    @if (!empty($info['error']))
    <div class="empty">
        <div class="empty-img"></div>
        <p class="empty-title">There was a problem fetching products</p>
        <p class="empty-subtitle text-muted">
            <p class="empty-subtitle text-muted">
                <a class="btn btn-outline-primary w-10" href="{{ route('products.show', $slug) }}">Try again</a>
            </p>
        </p>

    </div>
    @else
        <div class="page-body">
            <div class="row row-cards">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">{{ $info[$slug]['name'] }}</h3>
                        </div>
                        <div class="card-body">
                            <dl>
                                @foreach ($info[$slug] as $item => $detail)
                                    @if (is_array($detail))
                                        <dt class="text-capitalize">{{ $item }}</dt>
                                        @foreach ($detail as $suppliers)
                                            <dd>{{ $suppliers }}</dd>
                                        @endforeach
                                    @else
                                        <dt class="text-capitalize">{{ $item }}</dt>
                                        <dd class="mb-4">{{ $detail }}</dd>
                                    @endif
                                @endforeach
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
@endsection
