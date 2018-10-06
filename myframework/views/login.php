<!-- login.php -->
<div class="info">
<h4>Log In Information:</h4>
<p><strong>Email:</strong> tracy@gmail.com</p>
<p><strong>Password:</strong> 1234</p>
</div>

<div class="container login-form">
            <form class="form" method="post" action="/welcome/ajaxParams">
                <h2>Log In</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="email" id="Email" name="Email" class="form-control" placeholder="Your Email *" value="" required/>
                            <i class="errorSpan"></i>
                        </div>

                        <div class="form-group">
                            <input type="password" id="Password" name="Password" class="form-control" minlength="4" placeholder="Password *" value="" required/>
                            <i class="errorSpan"></i>
                        </div>

                        <div class="form-group">
                            <a href="" class="nav-link">Register</a>
                            <a href="" class="nav-link">Forgot Password?</a>
                        </div>
                        <div class="form-group">
                            <button id="ajaxButton" type="submit" name="ajaxButton" class="btn"/>Log In</button>
                        </div>
                    </div>

                </div>
            </form>
</div>

<?



?>
