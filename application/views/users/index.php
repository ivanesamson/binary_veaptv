<section class="main-login">
    <article class="event-login">
        <div class="event-header">
            <h3>Jump in.</h3>
            <p>Enter the event using the code given to you.</p>
        </div>
        <div class="event-body my-6">
            <form id="eventLoginCodeForm" class="event-form">
                <div class="input-hashtag" aria-disabled="true">#</div>
                <input type="text" name="eventCode" class="input-submit" placeholder="Enter Event Code" />
                <button type="submit" id="btnSubmit"> <i class="fas fa-arrow-right"></i> </button>
            </form>
            <div class="error-container"></div>
        </div>
        <div class="event-footer mt-auto">
            <a type="button" class="need-help" data-toggle="modal" data-target="#needHelpModal">Need Help?</a>
            <span class="divider" style="user-select: none;">&nbsp;|&nbsp;</span>
            <a href="<?=base_url('users/register');?>" class="register">Register</a>
        </div>
    </article>
</section>
<!-- Modal -->
<div class="modal fade" id="needHelpModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Need Help?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                If you do not receive the event code after being registered by your company/institution, please check your Spam folder just in case the code got delivered there instead of your inbox. Please contact us if you need additional assistance.
            </div>
        </div>
    </div>
</div>