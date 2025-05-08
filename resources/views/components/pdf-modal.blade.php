@props(['record'])

@php
    // Get the URL utility function from our resource
    $url = \App\Filament\Resources\CoursResource::generatePdfUrl($record->content);
@endphp

<div class="p-4">
    <h2 class="text-xl font-bold mb-4">{{ $record->titre }}</h2>
    <p class="mb-4">{{ $record->description }}</p>
    <div class="w-full">
        @if($url)
            <iframe src="{{ $url }}" width="100%" height="500" class="border border-gray-300 rounded-md"></iframe>
            <div class="mt-4">
                <a href="{{ $url }}" target="_blank" class="text-primary-600 hover:underline flex items-center">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                    </svg>
                    Download PDF
                </a>
            </div>
        @else
            <div class="text-red-500">No PDF available</div>
        @endif
    </div>
</div>
