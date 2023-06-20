<!DOCTYPE html>
<html><head>
    <title>Contact information</title>
    <script>

       function validate(){
            const Firstname=document.getElementById("Firstname").value;
            if(Firstname==""||irstname=="null"){
                alert("please fill your Firstname")
            }
            const lastname=document.getElementById("lastname").value;
            if(lastname==""||lastname=="null"){
                alert("please fill your lastname")
            }
            const email=document.getElementById("email").value;
            if(email==""||email=="null"){
                alert("please fill your email")
            }
        }

    </script>
    <style type="text/css">
        body{
            margin: 0;
            padding: 10px;
            background: slateblue;
            height: 100;
            text-align: center;
        }
     a {text-decoration: none;}
    a:active{color:red;}
    a {
        float: left;
            padding: 5px 10px;
            background-color: greenyellow;
            color: white;
            border-left: 2px solid black ;
            align-content: center;


    }
        
    </style>
</head>
<body >
    <a href="index.php">Home</a>
    <h1><strong> Welcome to my contact information</strong> </h1>
    <p>+265 883 810 330 call/whatssApp</p>
    <p>Email: mastermathyola3810@gmail.com</p>
    <p>Facebook acount: Victor Mathyola</p>
    <p> You can also find me by Filling in your details in the form below</p>
    <form method="post" action="servername.php" onsubmit="validate()">
        <div>
            <br>
            <label>First name</label>
            <br>
        <input type="text" name="Firstname" id="Firstname" placeholder="Enter your firstname" required>
       
      
    </div>
    <br>
    <div> 
        <label>lastname</label>
        <br>
        <input type="text" name="lastname" id="lastname" placeholder="Enter your lastname" required>
        
    
    </div>
    <br>
        <div> 
            <label>email address</label>
            <br>
            <input type="email" name="email" id="email" placeholder="Enter your email address">
        </div>
        
        <div>
        <label> message </label>
        <br>
        <textarea name="message" id="message" cols="60" rows="5" required>
</textarea>
</div>

 <br>
<button onclick="validate()">submit</button>
</form>
</body>
</html>