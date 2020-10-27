
<html>
<head>
    <title>Sign Up</title>
</head>
<body>
<h3 style="text-align: center;">Sign Up Form</h3>
<fieldset style="width:600px;margin: 10px auto">
    <form action="router.php?controller=signup" method="post" style="margin: 10px auto; width: 600px">
        <label> Enter your username : </label>
        <input name="new-username" type="text" placeholder="enter your username"/>
        <br>
        <br>
        <label> Enter your password : </label>
        <input name="new-password" type="password" placeholder="enter your password"/>
        <br>
        <br>
        <label> Enter your full name : </label>
        <input name="new-fullname" type="text" placeholder="enter your full name"/>
        <br>
        <br>
        <input type="submit" value="Create An Account" >
    </form>
</fieldset>
</body>
</html>