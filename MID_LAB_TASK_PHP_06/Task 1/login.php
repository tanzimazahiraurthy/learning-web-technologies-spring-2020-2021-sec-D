<?php
    if(isset($_POST['username'])&&isset($_POST['password']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        for($i=0;$i<strlen($username);$i++)
        {
            if(!((ord($username[$i]) >= 97 && ord($username[$i]) <= 122)) 
            && !((ord($username[$i]) >= 65 && ord($username[$i]) <= 90))  
            && !((ord($username[$i]) >= 48 && ord($username[$i]) <= 57)) 
            && !($username[$i] == '.') && !($username[$i] == '-') && !($username[$i] == '_'))
            {
                echo 'Username can be only alphanumeric';break;
            }
        }

        if(strlen($username) < 2)
        {
            echo 'Username must be atleast 2 characters';
        }
        if(strlen($password) < 8)
        {
            echo 'Password must be atleast 8 characters';
        }

        $passflag=false;

        for($i=0;$i<strlen($password);$i++)
        {
            if(($password[$i] == '@' || 
            $password[$i] == '$' ||
            $password[$i] == '#' ||
            $password[$i] == '%')) 
            {
                $passflag=true;
            }
        }

        if($passflag == false)
        {
            echo 'Password must contain a @, $, % or #!';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <fieldset>
        <legend>
            LogIn
        </legend>
        <form action='#' method='POST'>
            <table> 
                <tr>
                    <td>
                        User Name:
                    </td>
                    <td>
                        <input type="text" name='username'>
                    </td>
                </tr>
                <tr>
                    <td>
                        Password:
                    </td>
                    <td>
                        <input type="password" name='password'>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type='checkbox'>Remember Me
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type='submit' value='Submit'>
                        <a href='#'>Forgot Password?</a>
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>