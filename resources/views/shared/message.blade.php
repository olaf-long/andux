@foreach(['success','danger','warning','info'] as $v)
    @if(session()->has($v))
        <div class="alert alert-{{ $v }}" role="alert">
            <i class="dripicons-checkmark mr-2"></i>
            {{ session()->get($v) }}
        </div>
    @endif
@endforeach
