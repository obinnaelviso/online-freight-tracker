@if(session()->has('success'))
<div class="alert alert-success" role="alert">
    <strong>{{ session('success') }}</strong>
</div>
@elseif(session()->has('danger'))
<div class="alert alert-danger" role="alert">
    <strong>{{ session('danger') }}</strong>
</div>
@elseif(session()->has('info'))
<div class="alert alert-danger" role="alert">
    <strong>{{ session('danger') }}</strong>
</div>
@endif
