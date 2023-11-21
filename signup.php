<?php
include_once 'header.php'
?>
<style>
    .form {
        display: flex;
        flex-direction: column;
        gap: 10px;
        width: 350px;
        padding: 20px;
        border-radius: 20px;
        position: relative;
        background-color: #1a1a1a;
        color: #fff;
        border: 1px solid #333;
    }

    .title {
        font-size: 28px;
        font-weight: 600;
        letter-spacing: -1px;
        position: relative;
        display: flex;
        align-items: center;
        padding-left: 30px;
        color: #00bfff;
    }

    .title::before {
        width: 18px;
        height: 18px;
    }

    .title::after {
        width: 18px;
        height: 18px;
        animation: pulse 1s linear infinite;
    }

    .title::before,
    .title::after {
        position: absolute;
        content: "";
        height: 16px;
        width: 16px;
        border-radius: 50%;
        left: 0px;
        background-color: #00bfff;
    }

    .message,
    .signin {
        font-size: 14.5px;
        color: rgba(255, 255, 255, 0.7);
    }

    .signin {
        text-align: center;
    }

    .signin a:hover {
        text-decoration: underline royalblue;
    }

    .signin a {
        color: #00bfff;
    }

    .flex {
        display: flex;
        width: 95%;
        gap: 6px;
    }

    .form label {
        margin-right: 12px;
    }

    .form label {
        position: relative;
    }

    .form label .input {
        background-color: #333;
        color: #fff;
        width: 100%;
        padding: 20px 05px 05px 10px;
        outline: 0;
        border: 1px solid rgba(105, 105, 105, 0.397);
        border-radius: 10px;
    }

    .form label .input+span {
        color: rgba(255, 255, 255, 0.5);
        position: absolute;
        left: 10px;
        top: 0px;
        font-size: 0.9em;
        cursor: text;
        transition: 0.3s ease;
    }

    .form label .input:placeholder-shown+span {
        top: 12.5px;
        font-size: 0.9em;
    }

    .form label .input:focus+span,
    .form label .input:valid+span {
        color: #00bfff;
        top: 0px;
        font-size: 0.7em;
        font-weight: 600;
    }

    .input {
        font-size: medium;
    }

    .submit {
        border: none;
        outline: none;
        padding: 10px;
        border-radius: 10px;
        color: #fff;
        font-size: 16px;
        transform: .3s ease;
        background-color: #00bfff;
    }

    .submit:hover {
        background-color: #00bfff96;
    }

    @keyframes pulse {
        from {
            transform: scale(0.9);
            opacity: 1;
        }

        to {
            transform: scale(1.8);
            opacity: 0;
        }
    }
</style>
<div style="display: flex; width: 100%; justify-content:center ;">
    <form class="form" action="./includes/signup.inc.php" method="post">
        <p class="title">Register </p>
        <p class="message">Signup now and get full access to our app. </p>
        <div class="flex">
            <label>
                <input class="input" type="text" name="fname" placeholder="" required="">
                <span>Firstname</span>
            </label>

            <label>
                <input class="input" type="text" name="lname" placeholder="" required="">
                <span>Lastname</span>
            </label>
        </div>

        <label>
            <input class="input" type="email" name="email" placeholder="" required="">
            <span>Email</span>
        </label>

        <label>
            <input class="input" type="password" name="pwd" placeholder="" required="">
            <span>Password</span>
        </label>
        <label>
            <input class="input" type="password" name="pwdRepeat" placeholder="" required="">
            <span>Confirm password</span>
        </label>
        <button type="submit" class="submit" name="submit">Submit</button>
        <p class="signin">Already have an acount ? <a href="login.php">Signin</a> </p>
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p>Fill in all fields!</p>";
            } else if ($_GET["error"] == "emailregistered") {
                echo "<p>Log in to your account! Email Exists!</p>";
            } else if ($_GET["error"] == "invalidemail") {
                echo "<p>Choose a proper email!</p>";
            } else if ($_GET["error"] == "passwordsdontmatch") {
                echo "<p>Passwords don't match!</p>";
            } else if ($_GET["error"] == "stmtfailed") {
                echo "<p>Something went wrong! Try Again :( </p>";
            } else if ($_GET["error"] == "none") {
                echo "<p>You have signed up successfully :) Log in into your Account. </p>";
            }
        }
        ?>
    </form>
</div>


<?php
include_once 'footer.php'
?>