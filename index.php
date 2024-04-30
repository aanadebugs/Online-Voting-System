<html>
    <head>
        <title>Online voting system - Home</title>
        <link rel="stylesheet" href="css/stylesheet.css">
    </head>
    <body>
         <center>
            <div id="headerSection">
            <h1>Online Voting System</h1>  
            </div>
            <div id="loginSection">
                <font color="black">
                <h2>Login</h2>
                </font> 
                <form action="api/login.php" method="POST">
                    <input type="tel" pattern="[0-9]{10}" style="width:30%" name="mob" placeholder="Enter mobile" required><br><br>
                    <input type="password" name="pass" placeholder="Enter password" required><br><br>
                    <select name="role" style="width: 15%; border: 2px solid black">
    
                        <option value="1">Voter</option>
                        <option value="2">Candidate</option>
                    </select><br><br>                  
                    <button id="loginbtn" type="submit" name="loginbtn"><font color="black">Login</button>
                    <h4>New user?</h4> <a href="routes/register.php">Register here</a><br><br>
                    Admin login<a href="routes/admin.php">Click here<br>
                </form>
                
            </div>
            </center>
    </body>
</html>