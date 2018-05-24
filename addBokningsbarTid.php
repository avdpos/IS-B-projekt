<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/_header.css">
    <title>Massagetid</title>
</head>

<body>
    <div>
        <?php include 'include/views/_header.php' ?>
        <?php include 'include/moduls/datepicker.php' ?>
        </div>
            <form method="post" action="validateBooking.php">
                <table class="form">
                    <tr>
                        <th><label for="Date">Date</label></th>
                        <td>
                            <p>Date: <input type="text" id="datepicker"></p>                          
                        </td>
                    </tr>
                        
                    <tr>
                        <th><label for="Time">Tid</label></th>
                        <td> 
                            <?php include 'include/moduls/timepicker.php' ?>
                        </td>
                    </tr>
                    <tr>
                        <th><label for="Email">Email</label></th>
                        <td>
                            <input type="text" name="Email" id="Email"  required>
                            
                        </td>
                    </tr>
                    <tr>
                        <th><label for="Password">Password</label></th>
                        <td>
                            <input type="password" name="regPassword" id="regPassword" required>
                        </td>
                    <tr >
                        <th><label for="Password_Confirmation">Confirm Password</label></th>
                        <td>
                            <input type="password" name="regPassword2" id="regPassword2" required><br>
                           
                        </td>
                    </tr>
                </table>
                <input type="submit" class="button" name="Submit" value="registrate user">
            </form>
        <div>
        <?php include 'include/views/_footer.php'?> 
    </div>
         
</body>

</html>