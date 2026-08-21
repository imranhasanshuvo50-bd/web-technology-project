<!DOCTYPE html>
<html>
    <head><title>login page</title></head>
    <body>
        <h1 id="header">MediCare</h1>
        <label id="subheader">Login to your portal</label>
        <form action="login.php" method="post">
             <fieldset>
            <label id="Select Role">Select Role</label><br>
            <select name="role" required>
                <option value="">Select Role</option>
                <option value="patient">Patient</option>
                <option value="doctor">Doctor</option>
                <option value="admin">Admin</option>
                <option value="receptionist">Receptionist</option>
            </select><br>
            <label id="Username">Username</label><br>
            <input type="text" name="username" placeholder="Username" required><br>
            <label id="Password">Password</label><br>
            <input type="password" name="password" placeholder="Password" required>
            <button type="button" id="showPasswordBtn" onclick="togglePasswordVisibility()">👁</button>
            <br>
            <input type="submit" id="loginBtn" value="Login">
            </fieldset>
        </form>
    </body>
</html>

