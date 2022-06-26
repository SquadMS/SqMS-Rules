@extends('sqms-foundation::templates.page')

@section('title')
    {{ __('sqms-rules::pages/rules.heading') }}
@endsection

@section('page-content')
    @forelse($rules as $rule)
        <div>
            <h2>
                <span class="mr-2">§{{ $rule->order }}<span> 
                {{ $rule->title }}
            </h2>
            <div class="prose">@markdown($rule->content)</div>
        </div>
    @empty
        <p>@lang('sqms-rules::pages/rules.empty')</p>
    @endforelse
@endsection