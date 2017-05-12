<!-- Login Modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="loginModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <img src="media/jcc_logo_small.png" class="img-responsive smallLogo" alt="Small JCC Logo">
                <h4 class="modal-title">Faculty Login</h4>
            </div>
            <div class="modal-body">
                <form action="login" method="post">
                    <div class="form-group">
                        <label for="uName">User Name:</label>
                        <input type="text" class="form-control" id="uName" name="uName">
                    </div>
                    <div class="form-group">
                        <label for="passwd">Password:</label>
                        <input type="password" class="form-control" id="passwd" name="passwd">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" name="login" class="btn">Login</button>
                <button type="button" id="createUser" class="btn" data-toggle="modal" data-target="#userModal">Create User</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Create User Modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="userModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <img src="media/jcc_logo_small.png" class="img-responsive smallLogo" alt="Small JCC Logo">
                <h4 class="modal-title">Create New Account</h4>
            </div>
            <div class="modal-body">
                <form action="login" method="post">
                    <div class="form-group">
                        <label for="uName">User Name:</label>
                        <input type="text" class="form-control" id="uName" name="uName">
                    </div>
                    <div class="form-group">
                        <label for="passwd">Password:</label>
                        <input type="password" class="form-control" id="passwd" name="passwd">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" name="addUser" class="btn">Create User</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->