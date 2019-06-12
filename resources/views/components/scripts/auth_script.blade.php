<script>
    $(document).off('submit', '#loginForm').on('submit', '#loginForm', function(e) {
        e.preventDefault();
        submit_form('{{ url('login') }}', this);
    });

    $(document).off('submit', '#registerForm').on('submit', '#registerForm', function(e) {
        e.preventDefault();
        submit_form('{{ url('register') }}', this);
    });

    $(document).off('click', '.login-modal').on('click', '.login-modal', function() {
        hide_error();
    });

    $(document).off('click', '.signup-modal').on('click', '.signup-modal', function() {
        hide_error();
    });

    function hide_error() {
        $('.err-msg').slideUp(function() {
            $(this).html('');
        });
    }

    function submit_form(url, form) {
        hide_error();
        $.ajax({
            contentType: "application/json",
            url: url,
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
