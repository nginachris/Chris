<?php
class forms {

    private function submit_button($text){
        print "<input type='submit' value='$text'>";
    }

public function signup() {
    ?>
    <h2>Sign Up Form</h2>
    <form action='signup.php' method='post'>
        Name: <input type='text' name='name' required><br><br>
        Email: <input type='email' name='email' required><br><br>
        Password: <input type='password' name='password'><br><br>
        <?php $this->submit_button('Sign Up'); ?> 
        <span>Already a member? <a href='signin.php'>Login here</a></span>
    </form>
    <?php
}

public function login() {
    ?>
    <h2>Login Form</h2>
    <form action='signin.php' method='post'>
        Email: <input type='email' name='email' required><br><br>
        Password: <input type='password' name='password'><br><br>
        <?php $this->submit_button('Login'); ?> 
        <span>Not a member? <a href='signup.php'>Sign up here</a></span>
    </form>
    <?php
}
}