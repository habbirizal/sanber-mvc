<!DOCTYPE html>
<html>
<head>
<title>Sanbercode</title>
</head>
<body>
<h1>Buat Account Baru!</h1>
<h3>Sign Up Form</h3>
<form action="/welcome" method="post">
    @csrf
<p>First name :</p>
<input name="firstname" type="text"/>
<p>Last name:</p>
<input name="lastname" type="text"/>
<p>Gender:</p>
<input type="radio" name="gender" value="Male"/><label>Male</label></br>
<input type="radio" name="gender" value="Female"/><label>Female</label></br>
<input type="radio" name="gender" value="Other"/><label>Other</label>
<p>Nationality:</p>
<select>
    <option>Indonesian</option>
    <option>Singaporean</option>
    <option>Malaysian</option>
    <option>Thailand</option>
</select>
<p>Language Spoken:</p>
<input type="checkbox" name="bhi" value="Bahasa Indonesia"/><label>Bahasa Indonesia</label></br>
<input type="checkbox" name="bhe" value="English"/><label>English</label></br>
<input type="checkbox" name="bho" value="Other"/><label>Other</label>
<p>Bio:</p>
<textarea></textarea></br>
<input type="submit" value="Sign Up"/>
</form>
</body>
</html>