<section class="main-login">
    <article class="right-align">
        <div class="event-login">
            <div class="event-header">
                <h3>Jump in.</h3>
                <p>Enter the event using the code given to you.</p>
                <?php echo validation_errors(); ?>
            </div>
            <div class="event-body my-6">
                <form method="post" class="event-form">
                    <div class="input-hashtag" aria-disabled="true">#</div>
                    <input type="text" name="event_code" value="<?php echo set_value('event_code'); ?>" size="20" class="input-submit" placeholder="Enter Event Code" />
                    <button type="submit"> <i class="fas fa-arrow-right"></i> </button>
                </form>
            </div>
            <div class="event-footer">
                <a href="" class="need-help" data-toggle="modal" data-target="#needHelpModal">Need Help?</a>
                <span class="divider" style="user-select: none;">&nbsp;|&nbsp;</span>
                <a href="register.php" class="register">Register</a>
            </div>
        </div>
    </article>
</section>