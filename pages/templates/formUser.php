<form action="/DB/writeUser.php" method="post">
    <div class="mb-3">
        <label>
            Name:
            <input type="text" name="user_name" class="form-control">
            <div class="form-text  mb-3">Enter your name.</div>
        </label>
    </div>

    <div class="mb-3">
        <label>
            Email:
            <input type="email" name="user_email" class="form-control">
            <div class="form-text  mb-3">Enter your email.</div>
        </label>
    </div>

    <div class="mb-3">
        <label>
            Password:
            <input type="password" name="password" class="form-control">
            <div class="form-text  mb-3">Create password</div>
        </label>
    </div>

    <button class="btn btn-outline-primary mb-3">Submit</button>
</form>

<?php

?>