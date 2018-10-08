<!-- signup.php -->

<div class="container signup-form">
    <form class="form" method="post" action="/welcome/contactRecv">
        <h2>Sign Up</h2>
        <div class="row">
            <div class="col-md-10">

                <!-- name -->
                <div class="form-group input-wrapper">
                    <input type="text" name="Name" class="form-control" pattern="[a-zA-Z0-9]+" placeholder="Your Name" value="" required/>
                    <i class="errorSpan"></i>
                </div>
                <p class="msg"></p>

                <!-- email -->
                <div class="form-group input-wrapper">
                    <input type="email" name="Email" class="form-control" placeholder="Email" value="" required/>
                    <i class="errorSpan"></i>
                </div>

                <!-- password -->
                <div class="form-group input-wrapper">
                    <input type="password" name="Password" class="form-control" placeholder="Password " minlength="4" value="" required/>
                    <i class="errorSpan"></i>
                </div>

                <!-- confirm password -->
                <div class="form-group input-wrapper">
                    <input type="password" name="Confirm Password" class="form-control" placeholder="Confirm Password" minlength="4" value="" required/>
                    <i class="errorSpan"></i>
                </div>

                <!-- phone number -->
                <div class="form-group input-wrapper">
                    <input type="text" name="Phone" class="form-control" minlength="10" maxlength="14" pattern="\d{3}[\-]\d{3}[\-]\d{4}" placeholder="Phone Number (e.g. 813-516-1604)" value="" required/>
                    <i class="errorSpan"></i>
                </div>

                <!-- city -->
                <div class="form-row input-wrapper">
                    <div class="form-group input-wrapper col-auto">
                        <input type="text" class="form-control" placeholder="City" id="inputCity" required>
                        <i class="errorSpan"></i>
                    </div>

                    <!-- state -->
                    <div class="form-group input-wrapper col">
                        <select id="State" name="State" class="form-control" placeholder="state" required>
                            <option value="" selected="selected">Select a State</option>
                            <option value="AL">Alabama</option>
                            <option value="AK">Alaska</option>
                            <option value="AZ">Arizona</option>
                            <option value="AR">Arkansas</option>
                            <option value="CA">California</option>
                            <option value="CO">Colorado</option>
                            <option value="CT">Connecticut</option>
                            <option value="DE">Delaware</option>
                            <option value="DC">District Of Columbia</option>
                            <option value="FL">Florida</option>
                            <option value="GA">Georgia</option>
                            <option value="HI">Hawaii</option>
                            <option value="ID">Idaho</option>
                            <option value="IL">Illinois</option>
                            <option value="IN">Indiana</option>
                            <option value="IA">Iowa</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                            <option value="LA">Louisiana</option>
                            <option value="ME">Maine</option>
                            <option value="MD">Maryland</option>
                            <option value="MA">Massachusetts</option>
                            <option value="MI">Michigan</option>
                            <option value="MN">Minnesota</option>
                            <option value="MS">Mississippi</option>
                            <option value="MO">Missouri</option>
                            <option value="MT">Montana</option>
                            <option value="NE">Nebraska</option>
                            <option value="NV">Nevada</option>
                            <option value="NH">New Hampshire</option>
                            <option value="NJ">New Jersey</option>
                            <option value="NM">New Mexico</option>
                            <option value="NY">New York</option>
                            <option value="NC">North Carolina</option>
                            <option value="ND">North Dakota</option>
                            <option value="OH">Ohio</option>
                            <option value="OK">Oklahoma</option>
                            <option value="OR">Oregon</option>
                            <option value="PA">Pennsylvania</option>
                            <option value="RI">Rhode Island</option>
                            <option value="SC">South Carolina</option>
                            <option value="SD">South Dakota</option>
                            <option value="TN">Tennessee</option>
                            <option value="TX">Texas</option>
                            <option value="UT">Utah</option>
                            <option value="VT">Vermont</option>
                            <option value="VA">Virginia</option>
                            <option value="WA">Washington</option>
                            <option value="WV">West Virginia</option>
                            <option value="WI">Wisconsin</option>
                            <option value="WY">Wyoming</option>
                        </select>
                    </div>

                    <!-- zip code -->
                    <div class="form-group input-wrapper col">
                        <input type="text" class="form-control" pattern="(\d{5}([\-]\d{4})?)" placeholder="Zip" id="inputZip" required>
                        <i class="errorSpan"></i>
                    </div>
                </div>


                <div class="form-group">
                    <a href="" class="">Register</a>
                    <a href="" class="">Forgot Password?</a>
                </div>
                <div class="form-group input-wrapper">
                    <button type="submit" name="signup" class="btn">Sign Up</button>
                </div>
            </div>

        </div>
    </form>
</div>

<?



?>
