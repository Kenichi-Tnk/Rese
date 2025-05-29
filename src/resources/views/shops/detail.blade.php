@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/detail.css') }}">
@endsection

@section('content')
<div class="shop-detail-container">
    <div class="shop-detail-left">
        <button class="shop-detail-back">&lt;</button>
        <div class="shop-detail-title">{{ $shop->name }}</div>
        <img src="{{ asset($shop->image_url) }}" alt="{{ $shop->name }}" class="shop-detail-img">
        <div class="shop-detail-tags">#{{ $shop->area->name }} #{{ $shop->genre->name }}</div>
        <div class="shop-detail-description">{{ $shop->description }}</div>
    </div>
    <div class="shop-detail-right">
        <h2>予約</h2>
        <form class="shop-reserve-form">
            <input type="date" value="2021-04-01">
            <select>
                <option>17:00</option>
                <!-- 他の時間帯 -->
            </select>
            <select>
                <option>1人</option>
                <!-- 他の人数 -->
            </select>
        </form>
        <div class="shop-reserve-summary">
            <div>Shop　　{{ $shop->name }}</div>
            <div>Date　　2021-04-01</div>
            <div>Time　　17:00</div>
            <div>Number　1人</div>
        </div>
        <button class="shop-reserve-btn">予約する</button>
    </div>
</div>
@endsection
