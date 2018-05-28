
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
                <br>
                <br>
                <br>
                <br>
                    <form method="post" action="tillagdtid.php">
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
                                    <p>Tid: <input type="text" id="timeepicker"></p>
                                </td>
                            </tr>


                            <tr>
                              <th>
                              <td>
                          </td>
                        </tr>

                        </table>
                        <input type="submit" class="button" name="Submit" value="Lägg till">
                    </form>
                <div>
            </div>
        </body>
        </html>
