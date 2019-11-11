<!DOCTYPE HTML>
<html>
    <head>
    <title>register form</title></head>
    <body bgcolor = 'yellow'>
    <form>
        <tr>
            <td>id :</td>
            <td><input type="text" name ="username "</td>
        </tr><br />
         <tr>
            <td> username:</td>
            <td><input type="password" name ="password "</td>
        </tr><br />
         <tr>
            <td>Email :</td>
             <td><input type="text" name="email">
                 </td>
        </tr><br />
         <tr>
                 <td>Gender : </td>
            <td><input type="radio" name = "gender" value="m">male
                <input type="radio" name ="gender" value="f">female
            </td><br />
                                
        </tr>
        <tr>
            <td>Password :</td>
             <td><input type="password" name="password">
            </td><br />
        </tr>
        <tr>
            <td>phone no: </td>
            <select name="phone code">
                <option selected hidden value="">select code </option>
                <option value ="91">91</option>
                <option value ="93">93</option>
                <option value ="94">94</option>
            </select>
		<input type="phone" name ="phone">
        </tr>
        <center><input type="submit" name="submit" value="submit"> 
    </form>
	
    </body>
</html>
