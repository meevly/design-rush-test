@extends('layouts.app')

@section('title', 'All Vendors')

@section('page-title', 'All Vendors')

@section('content')
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach($vendors as $vendor)
            <x-vendor-card :vendor="$vendor" :index="$loop->index" />
        @endforeach
    </div>
@endsection