<!DOCTYPE html>
<html>
<head>
  <title>Form Handler</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 30px;
      background-color: #f0f8ff;
    }
 
    h2 {
      text-align: center;
      color: #003366;
    }
    form {
      background-color: #ffffff;
      padding: 20px;
      border-radius: 10px;
      width: 300px;
      margin: 0 auto;
      box-shadow: 0 0 10px rgba(155, 95, 95, 0.45);
    }
 
    input, select, button {
      width: 100%;
      padding: 8px;
      margin-top: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }
    button {
      background-color: #033660(239, 63%, 21%, 1.00);
      color: white;
      cursor: pointer;
    }
 
    button:hover {
      background-color: #144e85ff;
    }
 
    #output {
      margin-top: 20px;
      text-align: center;
      font-size: 16px;
      color: #003566ff;
    }
    #error {
      margin-top: 10px;
      color: red;
      text-align: center;
    }
  </style>
</head>
<body>
 
  <h2>Student Registration </h2>
  <form onsubmit="return handleSubmit()">
    <label>Full Name:</label>
    <input type="text" id="name" />
 
    <label>Email:</label>
    <input type="text" id="Email" />

    
    <label>Password:</label>
    <input type="text" id="password" />

    <label>Confirm Password:</label>
    <input type="text" id="password" />

    <button type="register">Register</button>

    <h2>Course Registration</h2>

    <label>Course Name:</label>
    <input type="text" id="name" />
    <button type="Add course">Add course</button>

    <label>Course:</label>
    <select id="Course">
      <option value="">-- Select Course --</option>
      <option value="Webtech">Webtech</option>
      <option value="Java">Java</option>
      <option value="Ip">Ip</option>
    </select>


  </form>
 

  <div id="error"></div>
  <div id="output"></div>
 
  <script>
    function handleSubmit() {
     
      var name = document.getElementById("name").value.trim();
      var email = document.getElementById("email").value.trim();
      var password = document.getElementById("password").value.trim();
      var confirm password = document.getElementById("confirm password").value;
 
      var errorDiv = document.getElementById("error");
      var outputDiv = document.getElementById("output");
 
    
      errorDiv.innerHTML = "";
      outputDiv.innerHTML = "";
 
    
      if (name === "" || email === "" || password === "" || confirm  password === "") {
        errorDiv.innerHTML = "Please fill in all fields.";
        return false;
      }
 
      if (isNaN(password)) {
        errorDiv.innerHTML = "password must be  charecter";
        return false;
      }
 
      if (password > 8) {
        errorDiv.innerHTML = " password cannot be more than 8 .";
        return false;
      }
 
 
      outputDiv.innerHTML = `
        <strong>Registration Successful!</strong><br><br>
        Name: ${name}<br>
        Email: ${email}<br>
        Password: ${password}<br>
        Confirm Password: ${Confirm Password}
      ;
     
 
      return false;
    }
  </script>
 
</body>
</html>
 
 
   

    

 
 