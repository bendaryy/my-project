<html>
    <head></head>
    <body>
        <form action="index.php" method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <th>First Name</th>
                    <td>
                        <input type="text" name="first_name" />
                    </td>
                </tr>
                <tr>
                    <th>Last Name</th>
                    <td>
                        <input type="text" name="last_name" />
                    </td>
                </tr>
                <tr>
                    <th>Gender</th>
                    <td>
                        <input type="radio" name="gender" value="male"/> Male
                        <input type="radio" name="gender" value="female"/> Female
                    </td>
                </tr>
                <tr>
                    <th>Date of Birth</th>
                    <td>
                        <select name="year_of_birth">
                            <option disabled="disabled" selected="selected" value="0">--YYYY--</option>
                            <?php for ($i = 2017; $i >= 1950; $i--) : ?>
                                <option value="<?= $i ?>"><?= $i ?></option>
                            <?php endfor; ?>
                        </select>
                        <select name="month_of_birth">
                            <option disabled="disabled" selected="selected" value="0">--MM--</option>
                            <?php foreach ($months as $num => $name) : ?>
                                <option value="<?= $num ?>"><?= $name ?></option>
                            <?php endforeach; ?>
                        </select>
                        <select name="day_of_birth">
                            <option disabled="disabled" selected="selected" value="0">--DD--</option>
                            <?php for ($i = 1; $i <= 31; $i++) : ?>
                                <option value="<?= $i ?>"><?= $i ?></option>
                            <?php endfor; ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Interests</th>
                    <td>
                        <input type="checkbox" name="interests[]" value="TV"/> TV
                        <input type="checkbox" name="interests[]" value="Reading"/> Reading
                        <input type="checkbox" name="interests[]" value="Music"/> Music
                    </td>
                </tr>
                <tr>
                    <th>Color 1</th>
                    <td>
                        <select name="color1">
                            <option value="0" disabled="disabled" selected="selected">--COLOR--</option>
                            <option value="red">RED</option>
                            <option value="green">GREEN</option>
                            <option value="blue">BLUE</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Color 2</th>
                    <td>
                        <select name="color2">
                            <option value="0" disabled="disabled" selected="selected">--COLOR--</option>
                            <option value="red">RED</option>
                            <option value="green">GREEN</option>
                            <option value="blue">BLUE</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Lucky Number</th>
                    <td>
                        <input type="number" name="lucky_number" />
                    </td>
                </tr>
                <tr>
                    <th>Profile Picture</th>
                    <td>
                        <input type="file" name="profile_picture" />
                    </td>
                </tr>
                <tr>
                    <th colspan="2">
                        <input type="submit" value="GO" />
                    </th>
                </tr>
            </table>
        </form>
    </body>
</html>