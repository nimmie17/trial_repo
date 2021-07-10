<?php

session_start();
if(!$_SESSION['happycradles']){
  header(location: login1.php)
}

?>


<html>
    <head>

            <title> somethin </title>
            <link rel="stylesheet" href="bla.css">
            <script src="blu.js"> </script>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

            <!-- jQuery library -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

          <!-- Popper JS -->
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

          <!-- Latest compiled JavaScript -->
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
          <style>
            .content {
              max-width: 500px;
              margin: auto;
              text-align: left;
              padding: 20px;
            }
            </style>
    </head>
    <body>
        <button class="tablink" onclick="openPage('Home', this, 'black')">ADOPT</button>
    <button class="tablink" onclick="openPage('News', this, 'green')" id="defaultOpen">SPONSOR</button>
    <button class="tablink" onclick="openPage('Contact', this, 'blue')">DONATE</button>
    <button class="tablink" onclick="openPage('About', this, 'orange')">HANG OUT FOR A DAY</button>
    
    <div id="Home" class="tabcontent">
      
      
        
        <div class="content">
          
      <form action="#" id="f1" method="post" enctype="multipart/form-data">
            <h2>Basic Information</h2><br>
        <div>
            <label for="name">FIRST NAME: </label>
            <input type="text" name="fname" id="name" placeholder="Firstname" required>
        </div>
        <div>
            <label for="name"> LAST NAME: </label>
            <input type="text" name="lname" id="name" placeholder="Lastname" required>
        </div>
       <!-- <div>
            <label for="email"> EMAIL: </label>
             <input type="email" name="email" id="email" placeholder="e-mail" required>
        </div> -->
        <div>
            <label for="phone">PHONE:</label>
            <input type="tel" name="phone" id="phone" placeholder="Registered Phone number">
        </div>
        <div>
            <label for="age"> AGE: </label>
            <input type="number" name="age" id="age" placeholder="Age" min="1" max="200" step="2">
        </div>
        <div>
            <label for="date"> DOB: </label>
            <input type="date" name="bdate" id="date" placeholder="e-mail" min="2019-08-30">
        </div>
        <div>
             <label for="aadhar"> AADHAR </label>
            <input type="number" name="aadhar" id="aad" placeholder="Aadhar Number">
          </div>
          <div>
            <label for="aadhar"> PAN CARD </label>
            <input type="text" name="pan" id="pan" placeholder=" Pan Card">
          </div>
          <div>
            <h2>Parental Information</h2>
            GENDER:
            <div>
                <label for="male">MALE</label>
                <input type="radio" name="gender" id="gender">
                <label for="female">FEMALE</label>
                <input type="radio" name="gender" id="gender">
                <label for="others">OTHERS</label>
                <input type="radio" name="gender" id="gender">
            </div>
            <div class = "radio1"></div>
            Maritial Status?
            <div>
                <label for="married">Married</label>
                <input type="radio" name ="abc" id="married">
                <label for="unmarried">Unmarried</label>
                <input type="radio" name ="abc" id="unmarried">
                <label for="divorced">Divorced</label>
                <input type="radio" name ="abc" id="divorced">
            </div>

            </div>
            <div class="radio2">
           If Married, atleast two years of stable maritial relationship?
            <div>
                <label for="yes">Yes</label>
                <input type="radio" name ="def" id="yes">
                <label for="no">No</label>
                <input type="radio" name ="def" id="no">
            </div>
            
            </div>


            <div class="radio2">
              If couples, How many children do you have?
               <div>
                   <label for="yes">0</label>
                   <input type="radio" name ="def" id="yes">
                   <label for="no">1</label>
                   <input type="radio" name ="def" id="no">
                   <label for="yes">2</label>
                   <input type="radio" name ="def" id="yes">
                   <label for="no">3 or more</label>
                   <input type="radio" name ="def" id="no">
               </div>
               
               </div>


            <div class="radio2">
             If Unmarried / Divorced, Gender of intrest in adoption(Only for Single Female)
               <div>
                   <label for="yes">Boy</label>
                   <input type="radio" name ="def" id="yes">
                   <label for="no">Girl</label>
                   <input type="radio" name ="def" id="no">
               </div>

               
               </div>



               <div class="radio2">
                Age Group of the child for Adoption<br>
                <p id="rule">Note: The minimum age difference between the child and either of the prospective adoptive parents shall not be less than twenty-five years.</p>
                  <div>
                      <label for="yes">Below 1 year</label>
                      <input type="radio" name ="def" id="yes">
                      <label for="no">1-3 years</label>
                      <input type="radio" name ="def" id="no">
                      <label for="yes">3-5 years</label>
                      <input type="radio" name ="def" id="yes">
                      <label for="no">Above 5 years</label>
                      <input type="radio" name ="def" id="no">
                  </div>
   
                  
                  </div>

                  <h2>Background Information</h2>

                  <p>
                    Do you have any life threatening medical condition?
                  </p>
                  <div>
                    <label for="yes">Yes</label>
                    <input type="radio" name ="def" id="yes">
                    <label for="no">No</label>
                    <input type="radio" name ="def" id="no">
                    <p>If Yes, Specify</p> 
                    <textarea>  </textarea><br>
                </div>
                  <p>
                    Do you have any past criminal records.
                  </p>
                  <div>
                    <label for="yes">Yes</label>
                    <input type="radio" name ="def" id="yes">
                    
                    <label for="no">No</label>
                    <input type="radio" name ="def" id="no">
                    <p>If Yes, Specify</p> 
                    <textarea>  </textarea><br>
                </div>


            <br>
           
        <button type="submit" class="btn btn-success btn-block"> SUBMIT </button>
        </form>

        </div>
        


    </div>
    
    <div id="News" class="tabcontent">

      <p style="text-align: center; font-size: 50px;">
        <b>
          How would you like to Sponsor?
        </b>
      </p>
      
      
      <a href="#"></a><button type="button" class="btn btn-success btn-lg btn-block"> Education </button></a> <br> <br> 
      <a href="#"></a><button type="button" class="btn btn-danger btn-lg btn-block"> Health Insurance</button></a> <br> <br> </a>
      <a href="#"> <button type="button" class="btn btn-warning btn-lg btn-block"> Sponsor a Meal  </button> <br> <br> </a>

    </div>
    
    <div id="Contact" class="tabcontent">
     
      <p style="text-align: center; font-size: 50px;">
        <b>
          What would you like to Donate?
        </b>
      </p>
      
      
      <a href="#"> <button type="button" class="btn btn-warning btn-lg btn-block"> Orphanage Welfare </button> <br> <br> </a>
      <a href="#"></a><button type="button" class="btn btn-danger btn-lg btn-block">Electronic Devices</button> <br> <br> </a>
      <a href="#"></a><button type="button" class="btn btn-success btn-lg btn-block">Food and Clothings</button> <br> <br> </a>
      <a href="#"></a><button type="button" class="btn btn-info btn-lg btn-block">Others</button><br> </a>
      


    </div>
    
    <div id="About" class="tabcontent">
      
        <p style="text-align: center; font-size: 50px;">
            <b>
              What would you like to Do?
            </b>
          </p>

      <a href="C:\Users\m_sha\Downloads\Project\eight\tnc.html"> <button type="button" class="btn btn-warning btn-lg btn-block"> Take them to an Ice Cream walk </button> <br> <br> </a>
      <a href="C:\Users\m_sha\Downloads\Project\eight\tnc.html"><button type="button" class="btn btn-danger btn-lg btn-block">Hang out for a day</button> <br> <br> </a>
      <a href="C:\Users\m_sha\Downloads\Project\eight\tnc.html"><button type="button" class="btn btn-success btn-lg btn-block">Celebrate Birthday with'em</button> <br> <br> </a>
      <a href="C:\Users\m_sha\Downloads\Project\eight\tnc.html"><button type="button" class="btn btn-info btn-lg btn-block">Others</button><br> </a>

      
    </div>
    </body>
</html>



