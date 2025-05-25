@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="shop-list">
    @foreach($shops as $shop)
        <div class="shop-card">
            <img src="{{ asset($shop->image_url) }}" alt="{{ $shop->name }}">
            <h2 class="shop-name">{{ $shop->name }}</h2>
            <p class="shop-tags">#{{ $shop->area->name }} #{{ $shop->genre->name }}</p>
            <div class="shop-card-actions">
                <button class="detail-btn">詳しくみる</button>
                <span class="favorite-icon">❤️</span>
            </div>
        </div>
    @endforeach
</div>
@endsection
