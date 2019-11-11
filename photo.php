<?php
    $conn=mysqli_connect("localhost","root","","","login1");
    if(isset($_POST["insert"]))
{
    $file=addslashes(file_get_contents($_FILE["image"]["tmp_name"]));
    $query = "insert into photo(id,image) values('11','$file')";
    if(mysqli_query($conn,$query))
{
echo'<script>alter("image inserted into data base")</script>";
}
}
?>
<html>
<title>photo upload</title>
    <body>
    <form method="post" enctype="multipart/form-data">
      <input type="pic20.jpg "  name="image" id="image"/>
        <br/>
        <input type ="submit" name="insert" id="insert" value="Insert" >
        
        </form>
        <?php
            $query="select * from photo order by id desc";
            $result=mysqli_query($connect,$query);
            while($row=mysqli_fetch_array($result))
            {
                    <tr>
                                        <td>
                        <img src="data:image/jpg;base64,'.base64_encode($row['name']).'"/>
</td>
</tr>
            }
        ?>
    </body>
</html>
<script>
$(document).ready(function()
{
                  $("#insert").click(function)(){
                   if(image_name =='')
                       {
                           alter("please select image");
                           return false;
                       }
                        else
                            {
                                var extention= $("#image").val().split('.').pop().toLowerCase();
                                if(jQuery.inArray(extention,['gif','png','jpg','jpeg']== -1))
                                    {
                                        alter('invalid image file');
                                        $("#image").val('');
                                        return false;
                                    }
                                
                            }
                  });
                  });
</script>
