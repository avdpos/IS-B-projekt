
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
                                    <option value="070000">07:00</option>
                                    <option value="080000">08:00</option>
                                    <option value="090000">09:00</option>
                                    <option value="100000">10:00</option>
                                    <option value="110000">11:00</option>
                                    <option value="120000">12:00</option>
                                    <option value="130000">13:00</option>
                                    <option value="140000">14:00</option>
                                    <option value="150000">15:00</option>
                                    <option value="160000">16:00</option>
                                    <option value="170000">17:00</option>
                                    <option value="180000">18:00</option>
                                    <option value="190000">19:00</option>
                                    <option value="200000">20:00</option>
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
