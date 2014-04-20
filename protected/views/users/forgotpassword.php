<?php
/**
 * Created by PhpStorm.
 * User: Aleksey
 * Date: 08.04.14
 * Time: 4:31
 */ ?>
    <form action="/users/forgotpassword" method="post">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Forgot Password ?</h4>
                </div>
                <div class="modal-body">
                    <p>Enter your e-mail address below to reset your password.</p>
                    <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix" value="<?=$_REQUEST['email']?>">
                    <br />
                    <p class="errorMessage"><?=$data['mess']?></p>
                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                    <button class="btn btn-success ajax-submit" type="submit">Submit</button>
                </div>
            </div>
        </div>
    </form>