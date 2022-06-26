@extends('sqms-foundation::templates.page')

@section('title')
    {{ __('sqms-rules::pages/rules.heading') }}
@endsection

@section('page-content')
    @if(count($rules))
        <div class="space-y-2">
            @foreach($rules as $rule)
                <div class="bg-slate-700 p-2">
                    <h2>
                        <span class="mr-2">§{{ $rule->order }}<span> 
                        {{ $rule->title }}
                    </h2>
                    <div class="prose">@markdown($rule->content)</div>
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