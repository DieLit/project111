<div class="mt-5">
    @if(session('success'))

        <div class="alert alert-success text-center position-fixed top-10 start-50 translate-middle">
            {{session('success')}}
        </div>

    @endif
</div>
