@extends('sqms-foundation::templates.page')

@section('title')
    {{ __('sqms-rules::pages/rules.heading') }}
@endsection

@section('page-content')
    @forelse($rules as $rule)
        <div>
            <div>{{ $rule->order }} {{ $rule->title }}</div>
            <div>{{ $rule->content }}</div>
        </div>
    @empty
        <p>@lang('sqms-riles::pages/rules.empty')</p>
    @endforelse
@endsection