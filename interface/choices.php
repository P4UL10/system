<?php
session_start();

?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/css.css" />
    <title>Enrollment</title>
    <style>

.insidess{
  border-radius: 5px;
  padding: 20px;
  width: 800px;
  margin-left: 210px;
  margin-top: 20px;
  height: 300px;
  border: none;
  display: flex;
  background-color: white;
}

.reminder{
  border-radius: 5px;
  padding: 0px;
  box-shadow:0 5px 10px rgb(7, 7, 7);
  width: 70%;
  margin-left: 210px;
  margin-top: 20px;
  height: 70%;
  font-size: 20px;
  border: none;
  display: flex;
  background-color: white;
}
.title{
  border: solid black 2px;
  width: 700px;
  background-color: white;
}
.button{
  border: solid black 2px;
  border-radius: 20px;
  width: 200px;
  background-color: green;
  color: white;
  text-decoration: none;
  margin-left: 120px;
  padding: 5px;
  -webkit-border-radius: 20px;
  -moz-border-radius: 20px;
  -ms-border-radius: 20px;
  -o-border-radius: 20px;
}
.continue{
  border: solid black 2px;
  border-radius: 100px;
  width: 1800px;
  background-color: green;
  color: white;
  text-decoration: none;
  margin-left: 360px;
  padding: 20px;
  -webkit-border-radius: 100px;
  -moz-border-radius: 100px;
  -ms-border-radius: 100px;
  -o-border-radius: 100px;
}
.button:hover{
  border: solid black 2px;
  width: 200px;
  background-color: white;
  color: green;
}
  .column{
    flex: 50%;
    border-right: solid black 1px;
    margin-left: 5px;
  }

  .circle{
    list-style-position: inside;
    list-style-image: url(../prototype/checks.png);

  }
  .hat{
    list-style-position:inside;
    list-style-image: url(../prototype/hat.png);
    flex: 50%;
  }
    </style>
    
  </head>
  <di>
    <div class="menu-bar">
      <img src="../prototype/logo.jpg" alt=""><span><h1 class="logo">C.L.A.S.J.</h1></span>
      <ul>
        <li><a href="main.html">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="#">Visit Us</i></a>
            <div class="dropdown-menu">
                <ul>
                  <li>
                    <a href="#">Links</a>
                    <div class="dropdown-menu-1">
                      <ul>
                        <li><a href="https://web.facebook.com/clasj112759">FacebookPage</a></li>
                        <li><a href="https://maps.app.goo.gl/SVKybEE5rD2Cp6Ay7">Location</a></li>
                      </ul>
                    </div>
                  </li>
                </ul>
              </div>
        </li>
        <li><a href="#">Contact us</a>
          <div class="dropdown-menu1">
            <ul>
              <li><a href="">(044)3079386</a></li>
              <li><a href="">clasj.edu@gmail.com</a></li>
            </ul>
          </div>
        </li>
        </li>

      </ul>
    </div>
</div>
      <div class="inside" >
          <div class="strands">
            <center><h1 class="title">Requirements For C.L.A.S.J</h1></center>
      <div class="insidess">
        <div class="column">
          <h1><li class="hat">Preschool</li></h1>
              <ul class="circle">
              <li>Baptismal Certificate(Clear photocopy)</li>
                <li>Birth Certificate(PSA/NSO)</li>
                  <li>Form 138(Report Card)</li>
                    <li>Form 137</li>
                      <li>1x1 Formal Picture (White Background)</li>
                      <br>
                      <a href="../Pre-school/dashboard_user.php" class="button">Continue</a>
                    </ul>
                    </div>
                    <div class="column">
                      <h1><li class="hat">Highschool</li></h1>
                          <ul class="circle">
                          <li>Baptismal Certificate(Clear photocopy)</li>
                            <li>Birth Certificate(PSA/NSO)</li>
                              <li>Form 138(Report Card)</li>
                                <li>Form 137</li>
                                  <li>1x1 Formal Picture (White Background)</li>
                                  
                                  <br>
                                  <a href="../highschool/dashboard_user.php" class="button">Continue</a>
                                </ul>
                                </div>
              </div>
      
              <div class="insidess">
                <div class="column">
                  <h1><li class="hat">Senior Highschool</li></h1>
                      <ul class="circle">
                      <li>Baptismal Certificate(Clear photocopy)</li>
                        <li>Birth Certificate(PSA/NSO)</li>
                          <li>Form 138(Report Card)</li>
                            <li>Form 137</li>
                              <li>1x1 Formal Picture (White Background)</li>
                              
                              <br>
                              <a href="../seniorhigh/dashboard_user.php" class="button">Continue</a>
                            </ul>
                            </div>
                            <div class="column">
                              <h1><li class="hat">Transfer</li></h1>
                                  <ul class="circle">
                                  <li>Baptismal Certificate(Clear photocopy)</li>
                                    <li>Birth Certificate(PSA/NSO)</li>
                                      <li>Form 138(Report Card)</li>
                                        <li>Form 137</li>
                                          <li>1x1 Formal Picture (White Background)</li>
                                          
                                          <br>
                                          <a href="../transferee/dashboard_user.php" class="button">Continue</a>
                                        </ul>
                                        </div>
                      </div>
      
                      
            </div>

            </div>
              </div>
              </div>
  </body>
</html>