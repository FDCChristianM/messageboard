<section class="vh-100 d-flex">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-8 col-lg-6 col-xl-3">
            <h1 class="mb-2">Message Board</h1>
            <p class="mb-4">Login to start your session.</p>
            <div class="error-message mb-4">
                <ul class="text-danger">
                </ul>
            </div>
                <form id="loginForm">
                    <div class="form-outline form-floating mb-4">
                        <input type="email" name="email" id="email" class="form-control form-control-lg" placeholder="Enter Email" />
                        <label class="form-label" for="email">Email</label>
                    </div>
                    <div class="form-outline form-floating mb-3">
                        <input type="password" name="password" id="password" class="form-control form-control-lg" placeholder="Enter Password" />
                        <label class="form-label" for="password">Password</label>
                    </div>
                    <div class="text-center d-flex text-lg-start mt-4 pt-2 flex-column justify-content-center align-items-center">
                        <button type="submit" name="login-btn" class="btn btn-dark btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem; min-width: 100%;">Login</button>
                        <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="<?= $baseUrl.'users/register'; ?>" class="link-danger">Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>