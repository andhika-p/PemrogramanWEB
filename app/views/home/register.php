<div class="bagian-konten">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Register
                    </div>
                    <div class="card-body">
                        <form action="<?= BASEURL; ?>/home/tambahAkun" method="POST">
                            <div class="form-group">
                                <label for="">Username:</label>
                                <input type="text" name="username" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="">Password:</label>
                                <input type="password" name="password" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="">Email:</label>
                                <input type="email" name="email" class="form-control">
                            </div>

                            <div class="form-group">
                                <input type="submit" value="Register" class="btn btn-primary btn-block">
                            </div>

                            <div class="form-group">
                                Have an account? <a href="<?= BASEURL; ?>/home/login">Login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>