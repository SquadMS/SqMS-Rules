@extends('sqms-foundation::templates.page')

@section('title')
    {{ __('sqms-rules::pages/rules.heading') }}
@endsection

@section('page-content')
    @if(count($rules))
        <div class="space-y-2">
            @foreach($rules as $rule)
                <div class="bg-gray-300 border border-gray-100">
                    <h2 class="bg-gray-500 p-2 text-white">
                        <span class="mr-2 text-amber-400">§{{ $rule->order }}</span> 
                        {{ $rule->title }}
                    </h2>
                    <div class="prose p-2">@markdown($rule->content)</div>
                </div>
            @endforeach
        </div>
    @else
        <p>@lang('sqms-rules::pages/rules.empty')</p>
    @endif
@endsection

@push('styles')
<link href="{{ mix('css/sqms-rules.css', 'vendor/sqms-rules') }}" rel="stylesheet">
@endpush