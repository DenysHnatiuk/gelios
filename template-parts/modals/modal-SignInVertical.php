<?php
/**
* template for modal SignIn Vertical
*/
?>
<!-- Signup: Vertical  -->
<div class="modal fade" id="modalSigninVertical" tabindex="-1" role="dialog" aria-labelledby="modalSigninVerticalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="card">

        <!-- Close -->
        <button type="button" class="modal-close close text" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>

        <!-- Image -->
        <img src="<?php echo get_template_directory_uri() ?>/assets/photo-21.jpg" alt="..." class="card-img-top">

        <!-- Shape -->
        <div class="position-relative">
          <div class="shape shape-bottom shape-fluid-x svg-shim text">
            <svg viewBox="0 0 2880 480" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M2160 0C1440 240 720 240 720 240H0v240h2880V0h-720z" fill="currentColor"></path></svg>
          </div>
        </div>

        <!-- Body -->
        <div class="card-body">

          <!-- Heading -->
          <h2 class="mb-0 font-weight-bold text-center" id="modalSigninVerticalTitle">
            Sign In
          </h2>

          <!-- Text -->
          <p class="mb-6 text-center text-muted">
            Simplify your workflow in minutes.
          </p>

          <!-- Form -->
          <form class="mb-6">

            <!-- Email -->
            <div class="form-group">
              <label class="sr-only" for="modalSigninVerticalEmail">
                Your email
              </label>
              <input type="email" class="form-control" id="modalSigninVerticalEmail" placeholder="Your email">
            </div>

            <!-- Password -->
            <div class="form-group mb-5">
              <label class="sr-only" for="modalSigninVerticalPassword">
                Enter your password
              </label>
              <input type="password" class="form-control" id="modalSigninVerticalPassword" placeholder="Enter your password">
            </div>

            <!-- Submit -->
            <button class="btn btn-block btn-primary" type="submit">
              Sign in
            </button>

          </form>

          <!-- Text -->
          <p class="mb-0 font-size-sm text-center text-muted">
            Don't have an account yet? <a href="https://landkit.goodthemes.co/signin-illustration.html">Sign up</a>.
          </p>

        </div>

      </div>
    </div>
  </div>
</div>
