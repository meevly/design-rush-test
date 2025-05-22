<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Vendor Directory')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <header class="bg-white shadow-sm">
        <div class="container mx-auto px-4 py-4">
            <div class="flex items-center justify-between">
                <div>
                    <a href="{{ route('vendors.index') }}" class="text-2xl font-bold text-indigo-600">
                        Vendor Directory
                    </a>
                </div>
            </div>
        </div>
    </header>
    <div class="bg-indigo-500 text-white">
        <div class="container mx-auto px-4 py-3">
            <div class="flex overflow-x-auto space-x-6 py-2">
                @foreach($categories as $category)
                    <a href="{{ route('categories.show', $category->slug) }}" 
                       class="whitespace-nowrap hover:text-indigo-200 {{ request()->route('category') == $category->slug ? 'font-bold underline' : '' }}">
                        {{ $category->name }}
                    </a>
                @endforeach
            </div>
        </div>
    </div>

    <div class="bg-white border-b">
        <div class="container mx-auto px-4 py-6">
            <h1 class="text-3xl font-bold text-gray-800">@yield('page-title')</h1>
            @hasSection('page-subtitle')
                <p class="text-gray-600 mt-2">@yield('page-subtitle')</p>
            @endif
        </div>
    </div>

    <main class="container mx-auto px-4 py-8">
        @yield('content')
    </main>

    <footer class="bg-white border-t mt-12">
        <div class="container mx-auto px-4 py-4">
            <div class="text-center text-sm text-gray-500">
                © {{ date('Y') }} Vendor Directory
            </div>
        </div>
    </footer>
    @vite('resources/js/app.js')
</body>
</html>