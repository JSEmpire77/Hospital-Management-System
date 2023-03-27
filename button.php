<html lang="en">
<head>

  <title>Appointment</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="appoinment.css" />
</head>

<body>
  <div id="container">
  
    <div id="body_header">
    
      <h1>Appointment Request Form</h1>

    </div>
    <form action="appoinment.php" method="post">

      <fieldset>
        <legend><span class="number">2</span>Appointment Details</legend>
        <label for="appointment_for">Appointment for*:</label>
        <select id="appointment_for" name="appointment_for" required>
          <option value="Common Illnesses">Common Illnesses</option>
          <option value="Colds and Flu">Colds and Flu</option>
          <option value="Stomach Aches">Stomach Aches</option>
          <option value="Headaches">Headaches</option>
          <option value="Allergies">Allergies</option>
          <option value="Diabetes">Diabetes</option>
          <option value="Cardiac Surgery">Cardiac Surgery</option>
          <option value="Plastic Surgery">Plastic Surgery </option>
          <option value="Orthopaedic Surgery">Orthopaedic Surgery</option>
        </select>
        <label for="date">Date*:</label>
        <input type="date" name="date" value="date" required></input>
        <br>
       
      </fieldset>
      <input class="btn btn-primary" type="submit" value="Update">
    </form>
  </div>
</body>

</html>