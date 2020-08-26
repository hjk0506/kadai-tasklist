@if (count($errors) > 0)
    <ul class="alert alert-danger" role="alert">
        @foreach ($errors->all() as $error)
            <li class="ml-4">{{ $error }}</li>
        @endforeach
    </ul>
@endif

@if (session('message'))
    <ul class="alert alert-danger" role="alert">
    <li class="ml-4">{{ session('message') }}</li>
	</ul>
@endif