<?php
    if(isset($_POST['current']) && isset($_POST['new']) && isset($_POST['confirmnew']))
    {
        if($_POST['current'] == $_POST['new'])
        {
            echo "New Password should not be same as the Current Password<br>";
        }
        if($_POST['new'] != $_POST['confirmnew'])
        {
            echo "New Password must match with the Retyped Password<br>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>
            Change Password
        </legend>
        <form action='#' method='POST'>
            <table> 
                <tr>
                    <td>
                        Current Password:
                    </td>
                    <td>
                        <input type="text" name='current'>
                    </td>
                </tr>
                <tr>
                    <td>
                        New Password:
                    </td>
                    <td>
                        <input type="password" name='new'>
                    </td>
                </tr>
                <tr>
                    <td>
                        Retype Password:
                    </td>
                    <td>
                        <input type="password" name='confirmnew'>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type='submit' value='Submit'>
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>