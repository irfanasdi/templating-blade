<!DOCTYPE html>
<html>
<head>
  <title>MVC Laravel</title>
</head>
<body>
  <form action="/welcome" method="POST">
     {{ csrf_field() }}
     <label>First name:</label><br>
    <input type="text" name="firstname">
  <br><br>
  <label>Last name:</label><br>
  <input type="text"  name="lastname"><br><br>
    
  <label> Gender:</label><br><br>
  <input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label><br>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label><br>
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Other</label><br><br>
</div>

<div>
<label for="Nationality"> Nationality:</label><br><br>
<select name ="Nationality">
  <option value="Indonesia">Indonesian</option>
  <option value="Australia">Australia</option>
  <option value="Zimbabwe">Zimbabwe</option>
  <option value="Madagaskar">Madagaskar</option>
</select>
</div><br>

<div>
  <label for="Lspoken">Language Spoken:</label><br><br>
  <input type="checkbox" id="Lspoken1" name="Lspoken1" value="Bahasa Indonesia">
    <label for="Lspoken1"> Bahasa Indonesia</label><br>
    <input type="checkbox" id="Lspoken2" name="Lspoken2" value="English">
    <label for="Lspoken2"> English</label><br>
    <input type="checkbox" id="Lspoken3" name="Lspoken3" value="Other">
    <label for="Lspoken3"> Other</label>
</div><br>
<div>
  <label for="Bio">Bio:</label><br>
  <textarea name="Bio" rows="10" cols="30">
  </textarea>
</div>
  <input type="submit" value="sign up"> 
  </form>

</body>
</html>