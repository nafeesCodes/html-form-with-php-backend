<!DOCTYPE html>
<html lang="en">
<head>
    <title>Report Form</title>
    <style>
        table {
            border: solid 3px black;
            background: white;
        }
        td {
            border: solid 2px black;
        }
    </style>
</head>
<body bgcolor="gray">
    <h1 style="text-align: center;">Report Form</h1>
    <h1 style="text-align: center; color: aliceblue; background-color: black;">Information Table</h1>

    <form action="input.php" method="POST">
        <table align="center" cellpadding="8">
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name" placeholder="Enter your name"></td>
            </tr>

            <tr>
                <td>Email</td>
                <td><input type="email" name="email" placeholder="Enter your email"></td>
            </tr>

            <tr>
                <td>Password</td>
                <td><input type="password" name="password" placeholder="Enter your password"></td>
            </tr>

            <tr>
                <td>Address</td>
                <td><input type="text" name="address" placeholder="Enter your address"></td>
            </tr>

            <tr>
                <td>Country</td>
                <td>
                    <select name="country">
                        <option value="Afghanistan">Afghanistan</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="China">China</option>
                        <option value="India">India</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Pakistan" selected>Pakistan</option>
                        <option value="Sri Lanka">Sri Lanka</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Gender</td>
                <td>
                    <input type="radio" name="gender" value="male"> Male
                    <input type="radio" name="gender" value="female"> Female
                </td>
            </tr>

            <tr>
                <td>Hobbies</td>
                <td>
                    <input type="checkbox" name="hobbies[]" value="reading"> Reading <br>
                    <input type="checkbox" name="hobbies[]" value="listening music"> Listening Music <br>
                    <input type="checkbox" name="hobbies[]" value="gardening"> Gardening <br>
                    <input type="checkbox" name="hobbies[]" value="swimming"> Swimming <br>
                    <input type="checkbox" name="hobbies[]" value="athletics"> Athletics <br>
                    <input type="checkbox" name="hobbies[]" value="check all that apply"> Check all that apply <br>
                </td>
            </tr>

            <tr>
                <td>Your Website</td>
                <td><input type="url" name="website" placeholder="https://www.example.com"></td>
            </tr>

            <tr>
                <td>Other Information About You</td>
                <td><textarea name="other_info" cols="35" rows="10" placeholder="Enter any other information about yourself..."></textarea></td>
            </tr>

            <tr>
                <td><input type="submit" value="Send Report"></td>
                <td><input type="reset" value="Erase Report Form"></td>
            </tr>
        </table>
    </form>
</body>
</html>