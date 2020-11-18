<div class="modal fade" id="ajaxModel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modelHeading"></h4>
            </div>
            <div class="modal-body">
                <form id="userForm" name="userForm" class="form-horizontal" method="post">
                    <input type="hidden" name="id" id="form_user_id">
                    <div class="form-group">
                        <label  class="col-sm-3 control-label">First Name</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="form_firstname" name="firstname" placeholder="Enter first name" autofocus
                                   maxlength="50" required>
                        </div>
                        <span class="error_message col-sm-12" id="error_firstname"></span>
                    </div>
                    <div class="form-group">
                        <label for="lastname" class="col-sm-3 control-label">Last Name</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="form_lastname" name="lastname" placeholder="Enter last name"
                                   value="" maxlength="50" required>
                        </div>
                        <span class="error_message col-sm-12" id="error_lastname"></span>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-12">
                            <input id="form_email" name="email" placeholder="Enter email" class="form-control" type="email"
                                   required>
                        </div>
                        <span class="error_message col-sm-12" id="error_email"></span>
                    </div>
                    <div class="form-group input-password">
                        <label class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-12">
                            <input id="form_password" name="password" placeholder="Enter password" class="form-control"
                                   type="password" required>
                            <span toggle="#password-field" id="password-field" class=" hide-password toggle-password"></span>
                        </div>
                        <span class="error_message col-sm-12" id="error_password"></span>
                    </div>
                    <div class="form-group">
                        <label for="role_user" class="col-sm-2 control-label">Role</label>
                        <div class="col-sm-12">
                            <select class="form-control form-control-sm" id="role_user" name="role">
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-offset-2 col-sm-10 mt-2">
                        <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Create
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
