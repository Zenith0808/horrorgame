<body>
<style>
    .usercontroller{
        background-color:black !important;
        color:white;
        padding:0.7em 1em 0.6em 1em;
    }
    .hola .col-sm-6{
        border-left: 2px solid white;
        border-right: 2px solid white;
        color:red;
    }
    .login{
        text-align:right;
    }
</style>
<div class ="container-fluid usercontroller">
    <div class="row hola">
        <div class="col-sm-3">MAHASONA Gaming Experience</div>
        <div class="col-sm-6"><marquee>Grab the best gaming experience while sharing your thoughts and engaging with us frequently. 
        <?php
            echo "Your IP address is: " . $_SERVER['REMOTE_ADDR'];
            ?>     
        </marquee></div>
        <div class="col-sm-3 login">
            
            <?php
                session_start(); // Start the session
                $_SESSION['timeout'] = 900; //session timeout 15 minutes

                // Check if the user is logged in
                if (isset($_SESSION['username'])) {
                    $username = $_SESSION['username'];
                    $type = $_SESSION['user_type'];
                    echo "Hello, $type $username! &nbsp";
                    echo '<a href="logout.php">Signout</a>'; 
                } else {
                    echo '<a href="login.php">Login</a> |  
                    <a href="signup.php">Signup</a>';
                }

                $_SESSION['last_activity'] = time();

                ?>
             
        </div>
    </div>
	
</div>
</body>
<script>
    var sessionTimeout = <?php echo $_SESSION['timeout']; ?> * 1000; // convert to milliseconds
    var timeoutWarning = sessionTimeout - 10000; // show warning 10 seconds before timeout
    var timeoutHandle;

    function startSessionTimer() {
        timeoutHandle = setTimeout(function() {
            alert('Your session will expire in 10 seconds due to inactivity');
        }, timeoutWarning);
    }

    function resetSessionTimer() {
        clearTimeout(timeoutHandle);
        startSessionTimer();
    }

    function logout() {
        window.location.href = 'logout.php';
    }

    startSessionTimer();

    // Bind events to reset timer on user activity
    document.onmousemove = resetSessionTimer;
    document.onkeypress = resetSessionTimer;
    document.onclick = resetSessionTimer;

    // Set timeout to logout after session timeout
    setTimeout(logout, sessionTimeout);

</script>