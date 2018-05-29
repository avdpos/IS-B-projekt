<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/_header.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Massagetid</title>
</head>

<body>
    <div class="wrapper">
        <div>
            <?php include 'include/views/_header.php' ?>
            <?php include 'include/moduls/datepicker.php' ?>
            <br><br><br><br>
        </div>
            <?php if (!empty($_SESSION["message"])){
                echo $_SESSION["message"];
            }
            ?>
        
            <form method="post" action="include/moduls/insert_massagetid.php">
                <table>
                    <tr>
                        <th><label for="Date">Datum</label></th>
                        <td>
                            <input type="text" name="date" id="datepicker">                   
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
        
    </div>
         
</body>

</html