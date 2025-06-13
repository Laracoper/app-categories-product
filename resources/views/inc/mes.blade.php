@if ($errors->any())
<div class="alert alert-danger">
    <ol>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ol>
</div>
@endif
@if (session('success'))
<div class="alert alert-success">
    <p>{{ session('success') }}</p>
</div>
@endif