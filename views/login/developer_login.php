<div class="developer_login">
                    <button type="button" class="collapsible"> DEVELOPER</button>
                    <form class="content" action="public/login.php" method="POST">
                        <div class="login_data">
                            <label for="username"><b>Username :</b></label>
                            <input class="input_text" type="text" placeholder="username" name="username" required>
                        </div>
                        <div class="login_data">
                            <label for="password"><b>Password :</b></label>
                            <input class="input_text" type="text" placeholder="password" name="password" required>         
                       </div>
                       <div class="login_links">
                        <a href="forgot_password.php" class="small_text forget_password">Forgot your password? </a>
                        <a href="register.php" class="small_text registration">Register </a>
                    </div>                        <br>
                       <button type="submit" value="Log In" name="submit">Log In</button>
                       <br>
                       <input type="checkbox" class="checkbox"checked="checked" name="remember"> <label class="small_text" for="remember">Remember Me</label>
                    </form>
                </div>