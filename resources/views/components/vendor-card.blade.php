<div class="bg-white rounded-lg shadow overflow-hidden hover:shadow-lg transition-shadow">
    <a href="{{ route('vendors.show', $vendor->slug) }}">
        <div class="h-48 bg-gray-50 p-4 flex items-center justify-center">
           <img 
                src="{{ $vendor->logo }}" 
                alt="{{ $vendor->name }} logo" 
                class="max-h-full max-w-full object-contain"
                @if($index > 11) loading="lazy" @endif
            >
        </div>
        
        <div class="p-4">
            <div class="mb-2">
                <span class="inline-block bg-indigo-100 text-indigo-800 text-xs px-2 py-1 rounded-full">
                    {{ $vendor->category->name }}
                </span>
            </div>

            <h3 class="text-lg font-medium text-gray-900 mb-1">{{ $vendor->name }}</h3>
            
            <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                {{ Str::limit($vendor->description, 120) }}
            </p>
            
            <span class="inline-block w-full text-center bg-indigo-500 text-white py-2 px-4 rounded-md text-sm font-medium transition-colors">
                View Details
            </span>
        </div>
    </a>
</div>