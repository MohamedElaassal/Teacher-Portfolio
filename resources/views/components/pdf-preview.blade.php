@php
    $record = $getRecord();
    $state = $record ? $record->content : null;
    // First try the URL from config; fallback to endpoint if not provided
    $baseUrl = config('filesystems.disks.do.url') ?: config('filesystems.disks.do.endpoint');
    $url = $baseUrl && $state ? rtrim($baseUrl, '/') . '/' . ltrim($state, '/') : '';
    // Check if the current route is an edit page
    $isEdit = request()->route() && str_contains(request()->route()->getName(), 'edit');
@endphp

@if(!$isEdit && $url)
    <div class="flex flex-col space-y-2">
        <iframe src="{{ $url }}" class="w-full h-64 border border-gray-300 rounded-md"></iframe>
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
