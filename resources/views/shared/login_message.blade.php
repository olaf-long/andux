@if(session()->has('danger'))
    <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="关">
                            <span aria-hidden="true">
                                <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">×</font></font>
                            </span>
        </button>
        {{ session()->get('danger') }}
    </div>
@endif
