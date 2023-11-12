<?php
    echo '<div class="container d-flex flex-column justify-content-center align-items-center gap-2 h-75">
        <h1>Login In!</h1>
        <form>
            <div class="row gap-2 justify-content-center">
                <div class="col-8 col-md-6">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">@</span>
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                    </div>
                </div>
                <div class="col-8 col-md-6">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">@</span>
                        <input type="text" class="form-control" placeholder="Email" aria-label="Email">
                    </div>
                </div>
                <div class="col-8 col-md-6">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">@</span>
                        <input type="password" class="form-control" placeholder="Password" aria-label="Password">
                    </div>
                </div> 
                <div class="col-8 col-md-6 d-flex justify-content-center">
                    <input type="submit" class="login col-8 col-md-6 btn btn-primary mb-3" onclick="home.html">
                </div>
                </div> 
            </form>
    </div>'
?>