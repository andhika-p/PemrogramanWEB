<div class="bagian-konten">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Login
                    </div>
                    <div class="card-body">
                        <form action="<?= BASEURL; ?>/home/loginAkun" method="POST">
                            <div class="form-group">
                                <label for="">Username:</label>
                                <input type="text" name="username" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="">Password:</label>
                                <input type="password" name="password" class="form-control">
                            </div>

                            <div class="form-group">
                                <input type="submit" value="Login" class="btn btn-primary btn-block">
                            </div>

                            <div class="form-group">
                                Don't have an account? <a href="<?= BASEURL; ?>/home/register">Register</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>