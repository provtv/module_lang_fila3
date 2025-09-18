<<<<<<< HEAD
nds('lang::layouts.master')
=======
@extends('lang::layouts.master')
>>>>>>> dc312f89 (.)

@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('lang.name') !!}
    </p>
@endsection
