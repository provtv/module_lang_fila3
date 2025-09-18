<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
nds('lang::layouts.master')
=======
@extends('lang::layouts.master')
>>>>>>> dc312f89 (.)
=======
@extends('lang::layouts.master')
>>>>>>> c010b2b8 (.)
=======
@extends('lang::layouts.master')
>>>>>>> 499a5da9 (.)
=======
@extends('xot::layouts.app')
>>>>>>> 80d56bca (Squashed 'laravel/Modules/Xot/' content from commit 88673e4f7)
=======
@extends('job::layouts.master')
>>>>>>> 4930fb00 (Squashed 'laravel/Modules/Job/' content from commit 5c1a4b65)
=======
@extends('user::layouts.master')
>>>>>>> 0bcedf94 (Squashed 'laravel/Modules/User/' content from commit 947e4724)

@section('content')
    <h1>Hello World</h1>

    <p>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        This view is loaded from module: {!! config('lang.name') !!}
    </p>
@endsection
=======
        This view is loaded from module: {!! config('xot.name') !!}
    </p>
@stop
>>>>>>> 80d56bca (Squashed 'laravel/Modules/Xot/' content from commit 88673e4f7)
=======
        This view is loaded from module: {!! config('job.name') !!}
    </p>
@endsection
>>>>>>> 4930fb00 (Squashed 'laravel/Modules/Job/' content from commit 5c1a4b65)
=======
        This view is loaded from module: {!! config('user.name') !!}
    </p>
@endsection
>>>>>>> 0bcedf94 (Squashed 'laravel/Modules/User/' content from commit 947e4724)
