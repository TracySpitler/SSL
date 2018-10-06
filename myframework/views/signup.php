<!-- signup.php -->

<div class="container signup-form">
    <form class="form" method="post" action="/welcome/contactRecv">
        <h2>Sign Up</h2>
        <div class="row">
            <div class="col-md-10">

                <!-- name -->
                <div class="form-group">
                    <input type="text" name="Name" class="form-control" pattern="[a-zA-Z0-9]+" placeholder="Your Name *" value="" required/>
                    <i class="errorSpan"></i>
                </div>
                <p class="msg"></p>

                <!-- email -->
                <div class="form-group">
                    <input type="email" name="Email" class="form-control" placeholder="Your Email *" value="" required/>
                    <i class="errorSpan"></i>
                </div>

                <!-- password -->
                <div class="form-group">
                    <input type="password" name="Password" class="form-control" placeholder="Password *" minlength="4" value="" required/>
                    <i class="errorSpan"></i>
                </div>
                
                <!-- confirm password -->
                <div class="form-group">
                    <input type="password" name="Confirm Password" class="form-control" placeholder="Confirm password *" minlength="4" value="" required/>
                    <i class="errorSpan"></i>
                </div>

                <!-- phone number -->
                <div class="form-group">
                    <input type="tel" name="Phone" class="form-control" pattern="\d{3}[\-]\d{3}[\-]\d{4}" placeholder="Phone Number (e.g. 813-516-1604)" value="" />
                    <i class="errorSpan"></i>
                </div>

                <div class="form-row">
                    <!-- city -->
                    <div class="form-group col-md-4">
                        <input type="text" class="form-control" placeholder="City *" id="inputCity" required>
                        <i class="errorSpan"></i>
                    </div>

                    <!-- state -->
                    <div class="form-group col-md-4">
                        <select id="inputState" class="form-control" placeholder="State *" required>
                            <option selected>Choose...</option>
                            <option>...</option>
                        </select>
                    </div>

                    <!-- zip code -->
                    <div class="form-group col-md-2">
                        <input type="text" class="form-control" pattern="(\d{5}([\-]\d{4})?)" placeholder="Zip *" id="inputZip" required>
                        <i class="errorSpan"></i>
                    </div>
                </div>


                <div class="form-group">
                    <a href="" class="nav-link">Register</a>
                    <a href="" class="nav-link">Forgot Password?</a>
                </div>
                <div class="form-group">
                    <input type="submit" name="btnSubmit" class="btnContact" value="Log In" />
                </div>
            </div>

        </div>
    </form>
</div>

<?



?>
