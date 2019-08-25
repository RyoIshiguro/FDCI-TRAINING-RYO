<!DOCTYPE html>
  <html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>
      homework_POST
    </title>
  </head>


  </style>

  <body>
    <form action="" method="post">

      <h1>Personal Information</h1><br>

      <div>
        <?php
      
          if(isset($_POST['Username']) && ($_POST['password']) && ($_POST['Firstname']) && ($_POST['Lastname']) && ($_POST['Email']) && ($_POST['Birthday']) && ($_POST['PresentAdress']) && ($_POST['Gender'])){
              echo "Username:".$_POST['Username'];echo"<br>\n";echo "<br>\n";//これを作るといい。
              echo "password:".$_POST['password'];echo"<br>\n";echo "<br>\n";
              echo "Firstname:".$_POST['Firstname'];echo"<br>\n";echo "<br>\n";
              echo "Lastname:".$_POST['Lastname'];echo"<br>\n";echo "<br>\n";
              echo "Email:".$_POST['Email'];echo"<br>\n";echo "<br>\n";
              echo "Birthday:".$_POST['Birthday'];echo"<br>\n";echo "<br>\n";
              echo "PresentAdress:".$_POST['PresentAdress'];echo"<br>\n";echo "<br>\n";
              echo "Gender:".$_POST['Gender'];echo"<br>\n";echo "<br>\n";
          }else{
              echo "No Username specified";echo"<br>\n";echo "<br>\n";
              echo "No password specified";echo"<br>\n";echo "<br>\n";
              echo "No Firstname specified";echo"<br>\n";echo "<br>\n";
              echo "No Lastname specified";echo"<br>\n";echo "<br>\n";
              echo "No Email specified";echo"<br>\n";echo "<br>\n";
              echo "No Birthday specified";echo"<br>\n";echo "<br>\n";
              echo "No PresentAdress specified";echo"<br>\n";echo "<br>\n";
              echo "No Gender specified";echo"<br>\n";echo "<br>\n";

          }

          if(isset($_POST['private']) == "yes"){
              echo 'Note:User wants information to be private';echo"<br>\n";echo "<br>\n";
          } else{
              echo 'Note:User information can be public';echo"<br>\n";echo "<br>\n";
          }


         ?>



      </div>

      Username:<input type="text" name="Username" value="" placeholder="Username"><br><br>
      password:<input type="password" name="password" value="" placeholder="password"><br><br>
      Firstname:<input type="text" name="Firstname" value="" placeholder="Firstname"><br><br>
      Lastname:<input type="text" name="Lastname" value="" placeholder="Lastname"><br><br>
      Email Adress:<input type="text" name="Email" value="" placeholder="Emailadress"><br><br>
      Birthday:<input type="text" name="Birthday" value="" placeholder="yyyy-dd-mm"><br><br>
      Present Adress:<input type="text" name="PresentAdress" value="" placeholder="PresentAdress"><br><br>

      Gender<br><br>
      Female:<input type="radio" name="Gender" value="Female">
      male:<input type="radio" name="Gender" value="Male"><br><br>
      <input type="checkbox" name="private" value="">
      Please make my informatio private<br><br>
      <button type="submit" name="submit" value="submit" style="width:100px;background-color:#D7DBDD">SUBMIT</button><br><br>

  </body>
</form>
</html>
