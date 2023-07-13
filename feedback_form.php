<!DOCTYPE html>
<html lang="en">
   <head>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
 
   <title> Store Data</title>
      <script> 
      $(document).ready(function(){
      $("#flip").click(function(){
      $("#panel").slideDown("slow");
  });
});
</script>
   <style>
      body {
         background-color: gainsboro;
      border:6px solid gray ; 
      width:50%;
      margin-left:330px;
      margin-top: 50px;
      box-shadow: 0px 0px 30px ;border: 0px solid ;
      }

      #panel, #flip {
  padding: 5px;
  text-align: center;
  background-color: #e5eecc;
  border: solid 1px #c3c3c3;
}

#panel {
  padding: 30px;
  display: none;
}

   </style>
   </head>
   <body align="center"> 
         <form action="store.php" method="post" style="background-color: dodgerblue;height: 500px;">
         <h1 style="margin-top:0px;text-decoration:underline">Feedback Form</h1>
         <div id="flip">Click to see Instructions!</div>
         <div id="panel">The feedback section should be compulsarily filled! </div>
         <div>
            <table>
               <tr>
                  <td><label for="firstName"><b>First Name:</b><span>(required, at least 10 characters)</span></label><br>
                  <label for="lastName"><b>Last Name:</b><span>(required, at least 10 characters)</label> <br>
                  <label for="Gender"><b>Gender:</b><span>(required)</span></label><br>
                  <label for="Address"><b>Address:</b><span>(required, at least 50 characters)</span</label><br>
                  <label for="emailAddress"><b>Email Address:</b><span>(required, at least 10 characters)</span</label> <br>
                  </td>
                  <td>
                  <input type="text" name="first_name" id="firstName" minlength="10" required> <br>
                  <input type="text" name="last_name" id="lastName" minlength="10" required> <br>
                  <input type="text" name="gender" id="Gender" required><br>
                  <input type="text" name="address" id="Address" minlength="50" required> <br>
                  <input type="text" name="email" id="emailAddress" minlength="10" required> <br>
                  </td>
               </tr>
            </table>
         </div>

         <p>
         <label for="sugg">Your Feedback:</label> <br>
         <textarea sugg="Your Feedback:" id="sugg" name="feedback" cols="20" rows="4"></textarea><br>

         </p>

                     <!-- javascript Code  -->
            <button onclick="submission()" style="background-color:green">Submit</button>
            <script>
               function submission() {
                  alert ("Your Feedback is Submitted");
               }
            </script>
            
            <!-- <input type="submit" value="Submit"> -->

         </form>
   </body>
</html>