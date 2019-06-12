<div id="register-modal" tabindex="-1" role="dialog" aria-labelledby="register-modalLabel" aria-hidden="true" class="modal fade">
    <div role="document" class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h4 id="register-modalLabel" class="modal-title">Member Register</h4>
        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
        </div>
        <div class="modal-body">
            <form action="{{ url('login') }}" method="POST">
                <div class="form-group">
                    <input id="email_register" type="text" name="email" placeholder="email" class="form-control" required autofocus>
                </div>
                <div class="form-group">
                    <input id="password_register" type="password" name="password" placeholder="password" class="form-control" required>
                </div>
                <div class="form-group">
                    <input id="password_confirm" type="password" name="password_confirm" placeholder="confirm password" class="form-control" required>
                </div>
                <p class="text-center">
                <button class="btn btn-template-outlined"><i class="fa fa-address-book"></i> Register</button>
                </p>
            </form>
        </div>
    </div>
    </div>
</div>