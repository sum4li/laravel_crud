@if(session()->has('error-message'))
<div class="alert alert-danger border-light alert-icon alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        <span class="sr-only">Close</span>
    </button>
    <i class="fa fa-times"></i> &nbsp; {!! session()->get('error-message') !!}
</div>
@endif
