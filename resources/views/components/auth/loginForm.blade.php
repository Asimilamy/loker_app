<div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-modalLabel" aria-hidden="true" class="modal fade">
    <div role="document" class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h4 id="login-modalLabel" class="modal-title">{{ ucwords($uri) }} Login</h4>
        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
        </div>
        <div class="modal-body">
            <div class="err-msg"></div>
            <form action="" method="POST" id="loginForm">
                @csrf
                <input type="hidden" name="type" value="{{ $uri }}">
                <div class="form-group">
                    <input id="email_login" type="text" name="login_id" placeholder="Email or Username" class="form-control" required autofocus>
                </div>
                <div class="form-group">
                    <input id="password_login" type="password" name="password" placeholder="Password" class="form-control" required>
                </div>
                <p class="text-center">
                <button class="btn btn-template-outlined"><i class="fa fa-sign-in"></i> Log in</button>
                </p>
            </form>
        </div>
    </div>
    </div>
</div>