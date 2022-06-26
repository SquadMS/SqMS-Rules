@extends('sqms-foundation::templates.page')

@section('title')
    {{ __('sqms-rules::pages/rules.heading') }}
@endsection

@section('page-content')
    @foreach($rules as $rule)
        <div>
            <div>{{ $rule->order }} {{ $rule->title }}</div>
            <div>{{ $rule->content }}</div>
        </div>
    @endforeach
@endsection