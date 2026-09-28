@extends('layouts.app')

@section('title')
    {{ __('Strategy') }} - {{ __('Afar Justice Bureau') }}
@endsection

@section('content')
@include('components.page-hero')

<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold text-gray-900 mb-8">{{ __('Strategy') }}</h1>
        <div class="bg-white rounded-lg shadow-md p-8">
            <p class="text-gray-600">{{ __('Strategy content coming soon...') }}</p>
        </div>
    </div>
</section>
@endsection
