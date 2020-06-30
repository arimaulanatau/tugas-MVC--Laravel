<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form Pendaftaran</title>
</head>
<body>
	<h1>Buat Account Baru!</h1>

	<h3>Sign Up Form</h3>
	<form method="post" action="/welcome">
        @csrf
		<label for="fname">First name:</label><br>
  		<input type="text" id="fname" name="fname" value="{{old('fname')}}"><br>
  		<label for="lname">Last name:</label><br>
  		<input type="text" id="lname" name="lname" value="{{old('lname')}}"><br><br>
  		<label for="fname">Gender:</label><br><br>
  		<input type="radio" id="male" name="gender" value="male">
  		<label for="male">Male</label><br>
  		<input type="radio" id="female" name="gender" value="female">
  		<label for="female">Female</label><br>
  		<input type="radio" id="other" name="gender" value="other">
  		<label for="other">Other</label><br><br>
		<label for="negara">Nationality:</label><br><br>
  		<select id="negara" name="negara">
    	<option value="indonesia">Indonesia</option>
    	<option value="malaysia">Malaysia</option>
    	<option value="singapura">Singanpura</option>
    	<option value="brunei">Brunei Darusallam</option>
  		</select><br><br>
  		<label for="language">Language Spoken:</label><br><br>
  		<input type="radio" id="indonesia" name="bahasa" value="indo">
  		<label for="indonesia">Bahasa Indonesia</label><br>
  		<input type="radio" id="english" name="bahasa" value="english">
  		<label for="english">Bahasa English</label><br>
  		<input type="radio" id="other" name="bahasa" value="other">
  		<label for="other">Other</label><br><br>
  		<label for="bio">Bio:</label><br><br>
  		<textarea name="bio" id="" cols="30" rows="10"></textarea><br>
  		<input type="submit" value="Sign Up">	
	</form>
</body>
</html>