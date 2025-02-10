<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Front Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <div class="header">
        <div class="logo">
            <a href="https://www.catcollege.edu.ph/">
                <img src="https://enroll.catcollege.edu.ph/catc-logo.jpg" alt="CAT College Logo">
            </a>
        </div>
        <div class="school">
            <b class="school-name">CAT COLLEGE, INC.</b>
            <b class="school-branches">LEGAZPI • LIGAO • POLANGUI</b>
        </div>
    </div>
    <nav class="navigation">
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="services.php">Services</a>
        <a href="contact.php">Contact</a>
        <button class="btnlogin-popup">Login</button>
    </nav>
</header>
    <!-- Place H1 and H3 OUTSIDE the navbar -->
<section class="contact">
    <div class="contact-content">
        <h1>Welcome to CAT College Contact</h1>
        <h3>Your Future Starts Here</h3>
        <p>the services</p>
    </div>

</section>
    <!-- Login/Register Popup -->
    <div id="loginPopup" class="modal">
        <div class="modal-content">
            <!-- Sign Up Form -->
            <div class="container" id="signup" style="display:none;">
                <!-- Close button inside the Sign Up form -->
                <span class="close">&times;</span>
                <h1 class="form-title">Register</h1>
                <form method="post" action="register.php">
                    <div class="input-group">
                        <i class="fas fa-user"></i>
                        <input type="text" name="fName" id="fName" placeholder="First Name" required>
                        <label for="fName">First Name</label>
                    </div>
                    <div class="input-group">
                        <i class="fas fa-user"></i>
                        <input type="text" name="lName" id="lName" placeholder="Last Name" required>
                        <label for="lName">Last Name</label>
                    </div>
                    <div class="input-group">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" id="email" placeholder="Email" required>
                        <label for="email">Email</label>
                    </div>
                    <div class="input-group">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" id="password" placeholder="Password" required>
                        <label for="password">Password</label>
                    </div>
                    <input type="submit" class="btn" value="Sign Up" name="signUp">
                </form>
                <p class="or">----------or--------</p>
                <div class="icons">
                    <i class="fab fa-google"></i>
                    <i class="fab fa-facebook"></i>
                </div>
                <div class="links">
                    <p>Already Have Account?</p>
                    <button id="signInButton">Sign In</button>
                </div>
            </div>

            <!-- Sign In Form -->
            <div class="container" id="signIn">
                <!-- Close button inside the Sign In form -->
                <span class="close">&times;</span>
                <h1 class="form-title">Sign In</h1>
                <form method="post" action="register.php">
                    <div class="input-group">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" id="email" placeholder="Email" required>
                        <label for="email">Email</label>
                    </div>
                    <div class="input-group">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" id="password" placeholder="Password" required>
                        <label for="password">Password</label>
                    </div>
                    <p class="recover"><a href="#">Recover Password</a></p>
                    <input type="submit" class="btn" value="Sign In" name="signIn">
                </form>
                <p class="or">----------or--------</p>
                <div class="icons">
                    <i class="fab fa-google"></i>
                    <button id="google">Google</button>
                    <i class="fab fa-facebook"></i>
                </div>
                <div class="links">
                    <p>Don't have an account yet?</p>
                    <button id="signUpButton">Sign Up</button>
                  
                </div>
            </div>
        </div>
    </div>
    
    
    <script src="script.js"></script>
</body>
</html>
