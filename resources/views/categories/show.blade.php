@extends('layouts.app')

@section('title', $category->name)

@section('page-title', $category->name)

@section('content')
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach($vendors as $vendor)
            <x-vendor-card :vendor="$vendor" :index="$loop->index" />
        @endforeach
    </div>
@endsection