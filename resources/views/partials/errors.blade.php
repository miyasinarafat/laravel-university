@if($errors->any())
    <div class="alert alert-danger mtb-10">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <ul>
            @foreach($errors->all() as $error)
                <li class="text-capitalize">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif