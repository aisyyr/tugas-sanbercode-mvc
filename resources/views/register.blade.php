<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Sign Up</title>
</head>
<body>
    <h1>Buat Account Baru !</h1>
    <h3>Sign Up Form</h3>

    <form action="/Welcome" method="POST">
        @csrf
        <!-- <label for="nama">Nama Lengkap : </label><br>
        <input type="text" name="nama_lengkap" id="nama"> <br>
        <label for="address">Alamat Lengkap : </label> <br>
        <textarea name="alamat" id="address" cols="30" rows="10"></textarea><br> -->
        <label for="first_name">First Name : </label> <br><br>
        <input type="text" id="first_name" name="nama_dpn">
        <br><br>
        <label for="last_name">Last Name : </label> <br><br>
        <input type="text" id="last_name" name="nama_blkg">
        <br><br>

        <label for="jk">Gender :</label>
        <br><br>
        <input type="radio" name="gender" value="Male" id="jk"> Male   <br>
        <input type="radio" name="gender" value="Female" id="jk"> Female <br>
        <input type="radio" name="gender" value="Other" id="jk"> Other  <br>
        <br>

        <label for="warga">Nationality :</label>
        <br><br>
        <select name="negara" id="warga">
            <option value="Indonesia">Indonesia</option>
            <option value="English">English</option>
            <option value="Other">Other</option>
        </select>
        <br><br>

        <label for="bahasa">Language Spoken :</label>
        <br><br>
        <input type="checkbox" name="bahasa" value="Indonesia" id="bhs">Indonesia <br>
        <input type="checkbox" name="bahasa" value="English" id="bhs">English   <br>
        <input type="checkbox" name="bahasa" value="Other" id="bhs">Other
        <br><br>

        <label for="abc">Bio :</label>
        <br><br>
        <textarea name="biodata" id="abc" cols="30" rows="10"></textarea>
        <br>

        <input type="submit" name="Sign Up" >
    </form>

</body>
</html>