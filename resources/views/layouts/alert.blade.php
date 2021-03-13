<script>
    @foreach ($errors->all() as $error)
            iziToast.error({
                title: 'Error',
                message: '{{$error}}',
                position: 'topRight',
            });
         @endforeach

        @if(Session::has('success'))
            iziToast.success({
                title: 'Success',
                message: '{{ Session::get('success') }}',
                position: 'topRight',
            });
        @endif

        @if(Session::has('warning'))
            iziToast.success({
                title: 'Warning',
                message: '{{ Session::get('warning') }}',
                position: 'topRight',
            });
        @endif
</script>   