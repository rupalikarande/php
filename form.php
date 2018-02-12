
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
  
    <title>form submission</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"  href="main.css" />
  
</head>
<body>
        
        <div>
                
                <form action="server.php" method="post">
                  <label for="name">Name</label>
                  <input type="text" id="name" name="name" placeholder="Your name.."><br>

                  <label for="commitee_name">Commitee</label>
                 <select id="commitee_name" name="commitee_name">
        
      <option value="Scientific Committee">Scientific Committee</option>
      <option value="DCC Managing Committee">DCC Managing Committee</option>
      <option value="Travel Committee">Travel Committee</option>
      <option value="Hall Committee">Hall Committee</option>
      <option value="Registration">Registration</option>
      <option value="Accomodation">Accomodation</option>
      <option value="Audio Visual">Audio Visual</option>
      <option value="Stall and Food">Stall and Food</option>
      <option value="Patrons">Patrons</option>
      <option value="Faculty">Faculty</option>
    </select>
    
  
    <input type="submit" value="submit">
  </form>
</div>

</body>
</html>