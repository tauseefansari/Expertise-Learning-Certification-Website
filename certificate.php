<?php  
    
    require 'config.php';

    $id=$_GET['id'];
    $course=$_GET['course'];
    $query=mysqli_query($con,"SELECT * FROM tblstudent WHERE id='$id'");
    $res=mysqli_fetch_array($query);
    $name=$res['Name'];

?>

<!DOCTYPE html> 
<html> 
<head>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"> </script> 
    <script src= "https://files.codepedia.info/files/uploads/iScripts/html2canvas.js"> </script>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> 
</head> 
  
<body> 
    <center>   
      <input id="btn-Preview-Image" class="btn btn-danger" type="button" value="Preview Certificate">
    <div id="html-content-holder" style="visibility: hidden;">
      <br>
  <table bordercolor="black" border="3">  
        <tr>
          <td width="100%" bgcolor="#ffffff">
            <table width="800">
              <center>
                <strong>
                  <img src="images/logo.jpg" hspace="50" vspace="3" align="center">
                <h1> <font size="7">Certificate of Completion</font>
                </h1> </strong> 
              </center>
              <br>
              <center>
              <h3> <strong> <font size="6"> <?php echo $name; ?> </font> </strong> </h3> </center>
              <center>
              <center>
              <h3> <strong> <font size="4">has satisfactorily 
              completed</font> </strong> </h3>                  
              <h1> <b> <?php echo $course; ?> </b> </h1> </center>
              <center>
              <h3> <strong> <font size="4"> awarded by the </font> </strong> </h3> </center>
              <h3> <strong> <font size="5"> Expertise Learning
               </font> </strong> </h3> </center>
              <center>
              <h3> <strong> <font size="4"> The Best Learning Platform
               </font> </strong> </h3> </center>
              <center>
              <h3> <strong> <font size="4"> <var> Approved by <strong>Zakiya Khan</strong> </var> </font> </strong> </h3> <br>
              </center>
            <tr>
                <td>
                  <h2>
                  <center> <strong> <font size="3"> <var>
                  <ul> <?php echo date(" jS F , Y"); ?>  </ul> </var> </font> </strong> </center> </h2>
                  <h2>
                  <center> <strong> <font size="3"> <var>
                  <ul> <b> _________________________ </b> </ul> </var> </font> </strong> </center> </h2> 
                </td>
                <td>
                  <h2>
                  <center> <strong> <font size="3"> <var>
                  <ul> <img src="images/sign.png" style="width: 100px;position: absolute;margin-left: -50px;margin-top: -75px;"></ul> </var> </font> </strong> </center> </h2> 
                  <h2>
                  <center> <strong> <font size="3"> <var>
                  <ul> _________________________________ </ul> </var> </font> </strong> </center> </h2> 
                </td>
            </tr>
            <tr>
                <td>
                  <h2>
                  <center> <strong> <font size="3"> <var>
                  <ul>Date of Completion </ul> </var> </font> </strong> </center> </h2> 
                </td>
                <td>
                  <h2>
                  <center> <strong> <font size="3"> <var>
                  <ul> <strong>Zakiya Khan</strong>, Expertise Learning </ul> </var> </font> </strong> </center> </h2> 
                </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
                 
    </div> 
  
      
    <br>      
    <a href="#" id="btn-Convert-Html2Image" style="visibility: hidden;"> <input type="button" class="btn btn-success" href="#" value="Download Certificate">  </a>
  
    <br> 
      
     
      
    <script> 
        $(document).ready(function() {  

            var getCanvas;  
  
            $("#btn-Preview-Image").on('click', function() {
              document.getElementById("html-content-holder").style.visibility = "visible";
              document.getElementById("btn-Convert-Html2Image").style.visibility = "visible";
            var element = $("#html-content-holder");
                html2canvas(element, { 
                    onrendered: function(canvas) { 
                        $("#previewImage").append(canvas); 
                        getCanvas = canvas; 
                    } 
                }); 
            }); 
  
            $("#btn-Convert-Html2Image").on('click', function() { 
                var imgageData = getCanvas.toDataURL("image/png"); 
                var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream"); 
                $("#btn-Convert-Html2Image").attr("download", "Certificate.png").attr("href", newData); 
            }); 
        }); 
    </script> 
    </center> 
</body> 
  
</html>  