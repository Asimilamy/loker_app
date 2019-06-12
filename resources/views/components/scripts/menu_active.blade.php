<script>
    var selector = '.nav-item li';

    $(selector).on('click', function(){
        $(selector).removeClass('active');
        $(this).addClass('active');
    });
</script>
