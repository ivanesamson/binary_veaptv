<section class="main-login mt-4">
    <article class="event-login">
        <div class="event-header">
            <h3 class="text-danger">
                Register
            </h3>
        </div>
        <div class="event-body">
            <form action="#" class="register-form">
                <div class="input-container">
                    <input type="text" class="form-control" id="inputUs" placeholder="Name">
                </div>
                <div class="input-container">
                    <input type="password" class="form-control" id="inputPw" placeholder="Password">
                </div>
                <div class="input-container">
                    <input type="text" class="form-control" id="inputContact" placeholder="Contact No. eg: 0912-345-6789">
                </div>
                <div class="input-container">
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                </div>
                <div class="input-container my-4">
                    <button type="submit" class="btn btn-danger btn-block text-white">Register</button>
                </div>
            </form>
        </div>
        <div class="event-footer">
            <a type="button" class="need-help" data-toggle="modal" data-target="#needHelpModal">Need Help?</a>
            <span class="divider" style="user-select: none;">&nbsp;|&nbsp;</span>
            <a href="<?=base_url('users/request-password')?>" class="register">Forgot Password</a>
        </div>
    </article>
</section>
<!-- Modal -->
<div class="modal fade" id="needHelpModal" tabindex="-1" role="dialog" aria-labelledby="needHelpModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Need Help?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <p>If you do not receive the event code after being registered by your company/institution, please check your Spam folder just in case the code got delivered there instead of your inbox. Please contact us if you need additional assistance.</p>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>