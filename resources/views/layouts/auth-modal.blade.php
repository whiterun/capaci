<!-- Login -->
<div class="modal fade" id="login-modal" tabindex="-1" aria-labelledby="login-modal-abel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-dark">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <input type="text" class="form-control" id="email" placeholder="Email">
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" id="password" placeholder="Password">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Sign In</button>
      </div>
    </div>
  </div>
</div>
<!-- End Login -->

<!-- Sign Up -->
<div class="modal fade" id="signup-modal" tabindex="-1" aria-labelledby="login-modal-abel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <form action="{{url('sign-up')}}" clas="needs-validation" id="sign-up-form" method="POST">
      <div class="modal-header">
        <h5 class="modal-title text-dark">Sign Up</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <div class="error-message mb-3 text-danger visually-hidden">
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" id="se-name" placeholder="Name" name="name" required>
          </div>
          <div class="mb-3">
            <input type="email" class="form-control" id="se-email" placeholder="Email" name="email" required>
          </div>
          <div class="mb-3">
            <input type="password" class="form-control" id="se-password" placeholder="Password" name="password" required>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="sign-up-button">Sign Up</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- End Sign Up -->