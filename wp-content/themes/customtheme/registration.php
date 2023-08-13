<?php
/*
Template Name: Custom Registration
*/
global $wpdb;

if ($_POST) {

    $username = $wpdb->escape($_POST['Username']);
    $email = $wpdb->escape($_POST['Email']);
    $password = $wpdb->escape($_POST['Password']);
    $ConfPassword = $wpdb->escape($_POST['ConfirmPassword']);

    $error = array();
    if (strpos($username, ' ') !== FALSE) {
        $error['username_space'] = "Username has Space";
    }

    if (empty($username)) {
        $error['username_empty'] = "Needed Username must";
    }

    if (username_exists($username)) {
        $error['username_exists'] = "Username already exists";
    }

    if (!is_email($email)) {
        $error['email_valid'] = "Email has no valid value";
    }

    if (email_exists($email)) {
        $error['email_existence'] = "Email already exists";
    }

    if (strcmp($password, $ConfPassword) !== 0) {
        $error['password'] = "Password didn't match";
    }

    if (count($error) == 0) {

        wp_create_user($username, $password, $email);
        echo "User Created Successfully";
        exit();
    }else{
        
        print_r($error);
        
    }
}

?>

<form method="post">
<section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

              <form>

                <div class="form-outline mb-4">
                  <input type="text" name="Username" id="Username" class="form-control form-control-lg" />
                  <label class="form-label" for="Username">Username</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="email" name="Email" id="Email" class="form-control form-control-lg" />
                  <label class="form-label" for="Email">Email</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" name="Password" id="Password" class="form-control form-control-lg" />
                  <label class="form-label" for="Password">Password</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" name="ConfirmPassword" id="ConfirmPassword" class="form-control form-control-lg" />
                  <label class="form-label" for="ConfirmPassword">Repeat your password</label>
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="#!"
                    class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</form>


