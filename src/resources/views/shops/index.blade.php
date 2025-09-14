@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('header-search')
    <form class="header-search" method="GET" action="#">
        <select name="area">
            <option value="">All area</option>
            <!-- エリア選択肢をここに追加 -->
        </select>
        <select name="genre">
            <option value="">All genre</option>
            <!-- ジャンル選択肢をここに追加 -->
        </select>
        <input type="text" name="search" placeholder="Search ...">
        <button type="submit"><i class="fa fa-search"></i></button>
    </form>
@endsection

@section('content')
<div class="shop-list">
    @foreach($shops as $shop)
        <div class="shop-card">
            <img src="{{ asset($shop->image_url) }}" alt="{{ $shop->name }}">
            <h2 class="shop-name">{{ $shop->name }}</h2>
            <p class="shop-tags">#{{ $shop->area->name }} #{{ $shop->genre->name }}</p>
            <div class="shop-card-actions">
                <a href="{{ route('shops.detail', $shop->id) }}" class="detail-btn">詳しく見る</a>
                <span class="favorite-icon">❤️</span>
            </div>
        </div>
    @endforeach
</div>
@endsection
