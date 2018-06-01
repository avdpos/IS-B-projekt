
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
    </div>
        <h1>Boka massage</h1>
        <br>
        <br>
        <br>
        <br>
        
            <form method="post" action="visaBokningsbaraTider.php">
                <table class="form">
                    <tr>
                        <th><label for="Date">Date</label></th>
                        <td>
                            <p>Date: <input type="text" name="date" id="datepicker"></p>
                        </td>
                    </tr>



                    <tr>
                        <th><label for="Time">Tid</label></th>
                        <td>
                            <p>
                                <select id="timepicker" name="timepicker">
                                    <option value="07:00:00">07:00</option>
                                    <option value="08:00:00">08:00</option>
                                    <option value="09:00:00">09:00</option>
                                    <option value="10:00:00">10:00</option>
                                    <option value="11:00:00">11:00</option>
                                    <option value="12:00:00">12:00</option>
                                    <option value="13:00:00">13:00</option>
                                    <option value="14:00:00">14:00</option>
                                    <option value="15:00:00">15:00</option>
                                    <option value="16:00:00">16:00</option>
                                    <option value="17:00:00">17:00</option>
                                    <option value="18:00:00">18:00</option>
                                    <option value="19:00:00">19:00</option>
                                    <option value="20:00:00">20:00</option>
                                </select>
                            </p>
                        </td>
                    </tr>


                    <tr>
                        <th>
                        <td>
                    </td>
                </tr>

                </table>
                <input type="submit" class="button" name="Submit" value="Sök massagetid">
            </form>
        <div>
    </div>
</body>
</html>
