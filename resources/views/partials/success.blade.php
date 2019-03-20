<!-- @if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif -->

@if(session()->has('success'))
    <div class="alert alert-dismissable alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">hide</span>    
        </button>
        <strong>
            {!!session()->get('success')!!}
        </strong>
    </div>
@endif