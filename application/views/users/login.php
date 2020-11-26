<section class="main-login">
    <article class="event-login">
        <div class="event-header login-header">
            <h3 class="text-accent">VEAPtv</h3>
            <p>Login using your given credentials</p>
        </div>
        <div class="event-body">
            <form action="event.html" class="loginForm">
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <input type="text" class="form-control" id="inputUs" placeholder="Email">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <input type="password" class="form-control" id="inputPw" placeholder="Password">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-accent btn-block btn-login">Enter Event</button>
                <a href="<?=base_url('users/register');?>" class="btn btn-default btn-block text-primary text-accent">Register</a>
            </form>
        </div>
    </article>
</section>