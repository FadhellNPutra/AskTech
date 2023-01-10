<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Sign Up</title>

</head>

<body>
    <h1>Buat Account Baru!</h1>

    <h2>Sign Up Form</h2>

    <form action="/welcome" method="post" accept-charset="utf-8">
        @csrf
        <label for="firstName">First Name</label>
        <input name="nama_depan" id="firstName" value="" />
        <br>
        <label for="lastName">Last Name</label>
        <input type="text" name="nama_belakang" id="lastName" value="" />
        <br>
        <label for="gender">Gender</label>
        <input type="radio" name="gender" id="gender" value="Male" />Male
        <input type="radio" name="gender" id="gender" value="Female" />Female
        <br>
        <label for="nasionality">nasionality</label>
        <select name="nasionality" id="nasionality">
            <option value="Indonesia">Indonesia</option>
            <option value="Malaysia">Malaysia</option>
        </select>
        <br />
        <label for="spooken">Spooken</label>
        <input type="checkbox" name="spooken" id="spooken" value="Indonesia" /> Indonesia
        <br />
        <input type="checkbox" name="spooken" id="spooken" value="English" />English

        <br>
        <label for="bio">Bio</label><br>
        <textarea name="" id="bio" cols="30" rows="10"></textarea>
        <br>
        <button type="submit">submit</button>
    </form>
</body>

</html>