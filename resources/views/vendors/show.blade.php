@extends('layouts.app')

@section('title', $vendor->name)

@section('page-title', $vendor->name)
@section('page-subtitle', 'Category: ' . $vendor->category->name)

@section('content')
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <div class="flex flex-col md:flex-row">
            <div class="w-full md:w-1/3 p-8 bg-gray-50 flex items-center justify-center">
                <img 
                    src="{{ $vendor->logo }}" 
                    alt="{{ $vendor->name }} logo" 
                    class="max-w-full max-h-64 object-contain"
                >
            </div>
            
            <div class="w-full md:w-2/3 p-8">
                <div class="flex items-center mb-4">
                    <span class="inline-block bg-indigo-100 text-indigo-800 text-sm px-3 py-1 rounded-full">
                        {{ $vendor->category->name }}
                    </span>
                </div>
                
                <h1 class="text-3xl font-bold text-gray-900 mb-4">{{ $vendor->name }}</h1>
                
                <div class="prose max-w-none">
                    @foreach(explode("\n\n", $vendor->description) as $paragraph)
                        <p class="mb-4 text-gray-700">{{ $paragraph }}</p>
                    @endforeach
                </div>
            </div>
        </div>
        
        <div class="border-t border-gray-200 p-4 bg-gray-50">
            <a 
                href="{{ route('vendors.index') }}" 
                class="inline-flex items-center text-indigo-600 hover:text-indigo-800"
            >
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                </svg>
                Back to All Vendors
            </a>
        </div>
    </div>
@endsection