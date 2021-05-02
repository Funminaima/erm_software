<div>
	<!-- getting the flash session -->
    @if(session()->has('success'))
    <div class="alert alert-success">{{session()->get('success')}}</div>
    @elseif(session()->has('error'))
    <div class="alert alert-danger">{{session()->get('error')}}</div>
    @endif

    <!-- getting the validation error -->
   <!--  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="list-unstyled">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif -->
</div>
