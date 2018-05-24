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
                        <th><label for="Date">Datum</label></th>
                        <td>
                            <p>Date: <input type="text" id="datepicker"></p>                          
                        </td>
                    </tr>
                        
                    <tr>
                        <th><label for="Tid">Tid</label></th>
                        <td> 
                            <?php include 'include/moduls/timepicker.php' ?>
                        </td>
                    </tr>
                    <tr>
                        <th><label for="Behandling">Möjliga behandlingar</label></th>
                        <td>
                            <?php include 'include/moduls/behandlingscheckbox.php' ?>   
                        </td>
                    </tr>                   
                </table>
                <input type="submit" class="button" name="Submit" value="registrera tid">
            </form>
        <div>
        <?php include 'include/views/_footer.php'?> 
    </div>
         
</body>

</html>