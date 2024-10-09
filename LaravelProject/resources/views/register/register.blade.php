<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Pendafataran</title>
  </head>
  <body>
    <h1>Buat Account Baru</h1>
    <form action="/send" method="POST">
      @csrf
      <h2>Sign Up Form</h2>
      <label>Fist Name</label> <br>
      <input type="text" name="fullName"/> <br> <br>
      
      <label>Last Name</label> <br>
      <input type="text" name="fullName"/> <br> <br>
      
      <label>Gender</label> <br> <br>
      <input type="radio" name="Gender" /> Male <br>
      <input type="radio" name="Gender" /> Female <br>
      <input type="radio" name="Gender" /> Other <br> <br>
     

      <label>Nationality : </label> <br> <br>
      <select name="Indonesia">
        <option value="Indonesia">Indonesia</option>
        <option value="Singapore">Singapore</option>
        <option value="Malaysia">Malaysia</option>
        <option value="Thailand">Thailand</option>
        <option value="Vietnam">Vietnam</option>
      </select>
      <br>
      <br>
      <label>Laguage Spoken :</label> <br> <br>
      
      <input type="checkbox" name="Bahasa Indonesia" /> Bahasa Indonesia <br>
      <input type="checkbox" name="English" /> English <br>
      <input type="checkbox" name="Other" /> Other <br> <br>
      
      <label>Bio</label> <br> <br>
     
      <textarea cols="30" rows="10"></textarea> <br> <br>
      
      <input type="submit" value="Sign Up" />
    </form>
  </body>
</html>
