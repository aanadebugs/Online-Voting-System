<html>
    <head>
        <title>Online voting system - Registratrion</title>
        <link rel="stylesheet" href="../css/stylesheet.css">
    </head>
    <body>
        <center>
            <div id="headerSection">
            <h1>Online Voting System</h1>  
            </div>

            <h2>Registration</h2>
                <form action="../api/register.php" method="POST" enctype="multipart/form-data">
                    <input type="text" pattern="[a-zA-Z\s]+" name="name"  placeholder="Name" required>
                    <input type="tel" pattern="[0-9]{10}" name="mob"style="width:15%" placeholder="Mobile" required><br><br>
                    <input type="password" name="pass" placeholder="Password" required>
                    <input type="password" name="cpass" placeholder="Confirm Password" required><br><br>
                    <input style="width: 31%" type="text" name="add" placeholder="Address" required><br><br>
                    <div id="upload" style="width: 30%">
                        <h4>Upload image:</h4> <input type="file" id="profile" name="image" required>
                    </div><br>
                    <div id="upload" style="width: 30%">
                        Select your role:
                        <select name="role">
                            <option value="1">Voter</option>
                            <option value="2">Candidate</option>
                        </select><br>                   
                    </div><br>
                    <button id="loginbtn" type="submit" name="registerbtn"><font color="black">Register</button><br><br>
                    Already user? <a href="../">Login here</a>
                </form>
            </center>
    </body>
</html>