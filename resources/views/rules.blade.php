@extends('sqms-foundation::templates.page')

@section('title')
    {{ __('sqms-rules::pages/rules.heading') }}
@endsection

@section('page-content')
    @if(count($rules))
        <div class="sqmsr-space-y-2">
            @foreach($rules as $rule)
                <div class="sqmsr-bg-gray-300 sqmsr-border sqmsr-border-gray-100">
                    <h2 class="sqmsr-bg-gray-500 sqmsr-p-2 sqmsr-text-white">
                        <span class="sqmsr-mr-2 sqmsr-text-amber-400">§{{ $rule->order }}</span> 
                        {{ $rule->title }}
                    </h2>
                    <div class="sqmsr-prose sqmsr-p-2">@markdown($rule->content)</div>
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