<section class="vh-100 d-flex">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-8 col-lg-6 col-xl-3">
            <h1 class="mb-2">Message Board</h1>
            <p class="mb-4">Create a new account.</p>
            <div class="error-message mb-4">
                <ul class="text-danger">
                </ul>
            </div>
                <form id="registerForm">
                    <div class="form-outline form-floating mb-4">
                        <input type="text" name="name" id="name" class="form-control form-control-lg" placeholder="Enter Name" />
                        <label class="form-label" for="name">Name</label>
                    </div>
                    <div class="form-outline form-floating mb-4">
                        <input type="email" name="email" id="email" class="form-control form-control-lg" placeholder="Enter Email" />
                        <label class="form-label" for="email">Email</label>
                    </div>
                    <div class="form-outline form-floating mb-4">
                        <input type="password" name="password" id="password" class="form-control form-control-lg" placeholder="Enter Password" />
                        <label class="form-label" for="password">Password</label>
                    </div>
                    <div class="form-outline form-floating mb-4">
                        <input type="password" name="cpwd" id="cpwd" class="form-control form-control-lg" placeholder="Confirm Password" />
                        <label class="form-label" for="cpwd">Confirm Password</label>
                    </div>
                    <div class="text-center d-flex text-lg-start mt-4 pt-2 flex-column justify-content-center align-items-center">
                        <button type="submit" name="register-btn" class="btn btn-dark btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem; min-width: 100%;">Register</button>
                        <p class="small fw-bold mt-2 pt-1 mb-0">Want to go back? <a href="<?= $baseUrl; ?>" class="link-danger">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>