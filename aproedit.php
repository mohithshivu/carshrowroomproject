<html>
    <head>
        <title>
            admin profile 
        </title>
        <link rel ="stylesheet" type="text/css" href="st.css">
    </head>
    <body>
        <h1 style="text-align: center;color:red;">Employe deatils form</h1>
        <div class="register" style="background-color: #2d85b0;
        width: 400px;
        margin: 0px 0px 0px 430px;
        color:white;
        font-size: 18;
        padding: 20px;
        border-radius: 10px;" >
            <form method ="post" id="register" action="">
                <h2>Enter details here</h2>
                <lable>First  Name:</lable><br/>
                <input type ="text" name="fname" placeholder="enter the fname " ><br/>
                
                <lable>Last  Name:</lable><br/>
                <input type ="text" name="lname" placeholder="enter the lname " ><br/>
                <lable>Emplouye id:</lable><br/>
                <input type ="text" name="id" placeholder="enter the eid " ><br/>
                <lable>DateofBirth:</lable><br/>
                <input type ="date" name="dob" placeholder="enter the dob " ><br/>
                <lable>Join date:</lable><br/>
                <input type ="date" name="date" placeholder="enter the jdate " ><br/>
                <lable>Moblile no</lable><br/>
                <input type ="number" name="pno" placeholder="enter the pno " ><br/>
                <lable>Gender</lable><br/>
                <input type ="radio" name="male" ><span id ="male">&nbsp;Male</span>
                    <input type="radio" name="female"><span id="female">&nbsp;Female</span>
                </span><br/>
                <lable>Email</lable><br/>
                <input type ="email" name="email" placeholder="enter the email" ><br/>
                <input type ="submit" name="submit" value="submit">
                

            </form>
            
        </div>
    </body>
</html>
