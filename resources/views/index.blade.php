<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>  
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f8f9fa; 
}

.form {
    background-color: #fff; 
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
    width: 35%;
}


.form h3 {
    margin-top: 0;
    margin-bottom: 20px;
    color: #333; 
}

.form select,
.form input,
.form input[type="submit"] {
    width: calc(100% - 20px);
    margin-bottom: 10px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

.form input[type="submit"] {
    background-color: #007bff; 
    color: #fff; 
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.form input[type="submit"]:hover {
    background-color: #0056b3; 
}
.container {
    display: flex;
}
*{
    margin: 0;
    padding: 0;
}
.logo{
    height: 55px;
    width: 100%;
    background-color: #0056b3;
    text-align: center;
    color: white;
    position: fixed;
    
}
.container .form form{
    margin-top: 100px;
}

  
    </style>
    <title>Document</title>
</head>
<body>
    <div class="logo"><br>
        <h3>TIME  TABLE</h3>
    </div>
   <div class="container">
    <div class="form">
        <form action="/courses" method="get">
            @csrf
            @method('post')
               <label for="">Course Name</label>
               <input type="text" name="coursename" required>
               <label for="">Details</label>
               <input type="text" name="details" required>        
               <input type="submit" name="add" value="ADD">    
        </form>
    </div>
   </div>
    
</body>
</html>