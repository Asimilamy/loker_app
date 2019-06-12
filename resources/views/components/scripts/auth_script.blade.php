<script>
    $(document).off('submit', '#loginForm').on('submit', '#loginForm', function(e) {
        e.preventDefault();
        doLogin(this);
    });

    function doLogin(form) {
        $('.err-msg').slideUp(function() {
            $(this).html('');
        });
        $.ajax({
            contentType: "application/json",
            url: '{{ url('login') }}',
            processData: false,
            contentType: false,
            cache: false,
            method: 'POST',
            data: new FormData(form),
            success: function(data) {
                if (data.status == 'error') {
                    $('.err-msg').html(data.msg).slideDown();
                } else if(data.status == 'success') {
                    window.location.href = '{{ url('home') }}';
                }
            }
        });
    }
</script>
