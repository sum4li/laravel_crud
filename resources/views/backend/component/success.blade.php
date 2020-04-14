@if(session()->has('success-message'))
<div class="alert alert-success bg-teal border-light alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        <span class="sr-only">Close</span>
    </button>
    <i class="fa fa-check"></i> &nbsp; {!! session()->get('success-message') !!}
</div>
@endif
