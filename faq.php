<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <!-- Font Awesome CDN link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- Custom CSS file link  -->
   <link rel="stylesheet" href="css/style.css">

   <style>

.faq-question {
        align-items: center;
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 20px;
      cursor: pointer;
      text-align: left;
      color: #000000;
    }

    .faq-answer {
      display: none;
      align-items: last baseline;
      margin-bottom: 20px;
      color: #000000;
      font-size: 16px;
    }
      body {
         margin: 0;
         padding: 0;
         font-family: Arial, sans-serif;
         background-color: white; /* Changed the body background color to white */
         color: #08BD80;
      }
   
      .about {
         display: flex;
         flex-direction: column;
         align-items: center;
         justify-content: center;
         text-align: center;
         padding: 50px 0;
      }
   
      .about img {
         max-width: 100%;
         height: auto;
         margin-bottom: 20px; /* Added margin to create space between the image and boxes */
      }
   
      .about h3 {
         font-size: 24px;
         margin-top: 20px;
         background-color: #08BD80; /* Added background color #08BD80 to the headline */
         padding: 10px; /* Added padding to the headline */
      }
   
      .about .point-box {
         background-color: #08BD80; /* Added background color #08BD80 to the boxes */
         padding: 10px; /* Added padding to the boxes */
         margin-bottom: 20px; /* Added margin-bottom to create space between the boxes */
         width: calc(33.33% - 20px); /* Added width to display three boxes in one row with some margin */
         margin: 10px; /* Added margin to create space between the boxes */
      }
   
      .about pre {
         font-size: 21px;
         text-align: left;
         margin: 0; /* Removed the top and bottom margin of the <pre> element */
         padding: 0; /* Removed the padding of the <pre> element */
         overflow: hidden; /* Added overflow property to contain the boxes */
         display: flex; /* Added flex display to the <pre> element */
         flex-wrap: wrap; /* Added flex-wrap to wrap the boxes in multiple rows */
         justify-content: center; /* Added justify-content to center align the boxes */
      }
   
      .btn {
         display: inline-block;
         background-color: white;
         color: #08BD80;
         padding: 10px 20px;
         text-decoration: none;
         border-radius: 5px;
         font-size: 16px;
         margin-top: 20px;
      }
   
      .btn:hover {
         background-color: #08BD80;
         color: white;
      }
   </style>
</head>
<body>
   
   <?php include 'header.php'; ?>
   <section class="about">
   <div class="container">
   <h1 style="text-align: center; font-size:28px">MIGRAILY FAQ</h1>

        
  <div class="faq-container">
    
    <div class="faq-question" onclick="toggleAnswer(1)">
      <input type="checkbox" class="faq-checkbox" id="checkbox1">
      <label for="checkbox1"></label>
      1 What charges do the customer has to bear in exchange of our services?
    </div>
    <div class="faq-answer" id="answer1">
        Our services are absolutely free of cost. You don’t have to pay any fees to us.
    </div>

    <div class="faq-question" onclick="toggleAnswer(2)">
      <input type="checkbox" class="faq-checkbox" id="checkbox2">
      <label for="checkbox2"></label>
      2 What are the discounts available on the website?

    </div>
    <div class="faq-answer" id="answer2">
        You’ll get a certain percentage of discount on the brokerage while dealing with real estate agent & the monthly subscription of tiffin service.

    </div>

    
    <div class="faq-question" onclick="toggleAnswer(4)">
        <input type="checkbox" class="faq-checkbox" id="checkbox4">
        <label for="checkbox4"></label>
       3  How can the customers avail discount on deals with real estate agents & tiffin service centers?
      </div>
      <div class="faq-answer" id="answer4">
        This update is in process. 

      </div>
  
      <div class="faq-question" onclick="toggleAnswer(5)">
        <input type="checkbox" class="faq-checkbox" id="checkbox5">
        <label for="checkbox5"></label>
       4  How can the volunteers suggest new places to enter in your database?
      </div>
      <div class="faq-answer" id="answer5">
        The suggestions of the volunteers are always welcome to us. They can always email us on our mail id migraily4523@gmail.com
      </div>
  
      <div class="faq-question" onclick="toggleAnswer(6)">
        <input type="checkbox" class="faq-checkbox" id="checkbox6">
        <label for="checkbox6"></label>
       5  If we want to volunteer, do we have to share our personal information?

      </div>
      <div class="faq-answer" id="answer6">
        No, except your mail id which would be required for communication purpose.

      </div>

      
  
      <div class="faq-question" onclick="toggleAnswer(8)">
        <input type="checkbox" class="faq-checkbox" id="checkbox8">
        <label for="checkbox8"></label>
        6 How do I deactivate my account?
      </div>
      <div class="faq-answer" id="answer8">
        Update in process….
      </div>
      
  
      <div class="faq-question" onclick="toggleAnswer(10)">
        <input type="checkbox" class="faq-checkbox" id="checkbox10">
        <label for="checkbox10"></label>
       7  How do I restore my older account?

      </div>
      <div class="faq-answer" id="answer10">
        Update in process….

      </div>
  
      <div class="faq-question" onclick="toggleAnswer(12)">
        <input type="checkbox" class="faq-checkbox" id="checkbox12">
        <label for="checkbox12"></label>
      8 About which topics can I question here?

      </div>
      <div class="faq-answer" id="answer12">
        You can enquire about properties, cuisine, important offices, timings of the offices & transport services.

      </div>

      
  
      <div class="faq-question" onclick="toggleAnswer(14)">
        <input type="checkbox" class="faq-checkbox" id="checkbox14">
        <label for="checkbox14"></label>
       9 How to register my complaints?

      </div>
      <div class="faq-answer" id="answer14">
        You can always email your complaints to us on migraily4523@gmail.com
      </div>
    
  
      <div class="faq-question" onclick="toggleAnswer(16)">
        <input type="checkbox" class="faq-checkbox" id="checkbox16">
        <label for="checkbox16"></label>
       10  How to give suggestions?

      </div>
      <div class="faq-answer" id="answer16">
        You can give your suggestions to us in migraily4523@gmail.com

      </div>

     
  
      <div class="faq-question" onclick="toggleAnswer(18)">
        <input type="checkbox" class="faq-checkbox" id="checkbox18">
        <label for="checkbox18"></label>
       11 What type of questions am I prohibited from discussing here?

      </div>
      <div class="faq-answer" id="answer18">
        Any questions disrupting the social harmony or suggesting illegal activities are strictly prohibited. If we come across any such activities, strict actions would be taken
      </div>

      
  
      <div class="faq-question" onclick="toggleAnswer(20)">
        <input type="checkbox" class="faq-checkbox" id="checkbox20">
        <label for="checkbox20"></label>
       12 Why is the system asking me to wait a day before asking another question?
      </div>
      <div class="faq-answer" id="answer20">
        To avoid crashing of website due to overload. This is a cautionary measure against the spammers
    </div>

      <var>
        <div class="faq-question" onclick="toggleAnswer(21)">
            <input type="checkbox" class="faq-checkbox" id="checkbox21">
            <label for="checkbox21"></label>
           13 How to report a suggestion as not interested?

          </div>
          <div class="faq-answer" id="answer21">
            Update in process..
          </div>
      
          <div class="faq-question" onclick="toggleAnswer(22)">
            <input type="checkbox" class="faq-checkbox" id="checkbox22">
            <label for="checkbox22"></label>
           14  How to block a service provider?

          </div>
          <div class="faq-answer" id="answer22">
            Update in process

          </div>
          <div class="faq-question" onclick="toggleAnswer(23)">
            <input type="checkbox" class="faq-checkbox" id="checkbox23">
            <label for="checkbox23"></label>
           15  Can my account be blocked? what are the parameters for it?

          </div>
          <div class="faq-answer" id="answer23">
            Any questions disrupting the social harmony or suggesting illegal activities are strictly prohibited. If we come across any such activities, your account can get blocked, followed by necessary legal actions. The parameter for blocking would be soon updated..
          </div>
      
          <div class="faq-question" onclick="toggleAnswer(24)">
            <input type="checkbox" class="faq-checkbox" id="checkbox24">
            <label for="checkbox24"></label>
           16  How to give reviews and ratings about a service?

            
          </div>
          <div class="faq-answer" id="answer24">
            Update under process. Till then you can mail us on migraily4523@gmail.com

          </div>
          <div class="faq-question" onclick="toggleAnswer(25)">
            <input type="checkbox" class="faq-checkbox" id="checkbox25">
            <label for="checkbox25"></label>
           17  What type of information am I advised to not disclose?
          </div>
          <div class="faq-answer" id="answer25">
            Any personal information is advised not to be shared. In case of frauds due to sharing of sensitive information, migraily doesn’t take the responsibility of it.

          </div>
      
          <div class="faq-question" onclick="toggleAnswer(26)">
            <input type="checkbox" class="faq-checkbox" id="checkbox26">
            <label for="checkbox26"></label>
           18  How can I earn Brownie points?

          </div>
          <div class="faq-answer" id="answer26">
            Update under process…..

          </div>
          <div class="faq-question" onclick="toggleAnswer(27)">
            <input type="checkbox" class="faq-checkbox" id="checkbox27">
            <label for="checkbox27"></label>
           19  What are the parameters necessary to enroll myself as a customer?
          </div>
          <div class="faq-answer" id="answer27">
            The customer must be 18+ years old. Other parameters would be listed down soon……
          </div>
      
          <div class="faq-question" onclick="toggleAnswer(28)">
            <input type="checkbox" class="faq-checkbox" id="checkbox28">
            <label for="checkbox28"></label>
           20  What are the meanings of the different badges?

          </div>
          <div class="faq-answer" id="answer28">
            Update under process…..

          </div>

          <div class="faq-question" onclick="toggleAnswer(29)">
            <input type="checkbox" class="faq-checkbox" id="checkbox29">
            <label for="checkbox29"></label>
           21  Where can I use Brownie points?

          </div>
          <div class="faq-answer" id="answer29">
            Update under process……

          </div>
          <div class="faq-question" onclick="toggleAnswer(30)">
            <input type="checkbox" class="faq-checkbox" id="checkbox30">
            <label for="checkbox30"></label>
           22 How to update my account?

          </div>
          <div class="faq-answer" id="answer30">
            Update in process…

          </div>
          <div class="faq-question" onclick="toggleAnswer(31)">
            <input type="checkbox" class="faq-checkbox" id="checkbox31">
            <label for="checkbox31"></label>
           23  What is the customer care number?

          </div>
          <div class="faq-answer" id="answer31">
          7499816792
          </div>
          <div class="faq-question" onclick="toggleAnswer(32)">
            <input type="checkbox" class="faq-checkbox" id="checkbox32">
            <label for="checkbox32"></label>
           24  Will migraily be accountable for the authenticity of the information?

          </div>
          <div class="faq-answer" id="answer32">
            Our goal is to give authentic information, but to cover maximum areas we may have to open the platform to volunteers for editing. So, we advise you to use it as a guide. We don’t take responsibility for its authenticity.

          </div>
          <div class="faq-question" onclick="toggleAnswer(33)">
            <input type="checkbox" class="faq-checkbox" id="checkbox33">
            <label for="checkbox33"></label>
           25  Which locations are covered by migraily?
          </div>
          <div class="faq-answer" id="answer33">
            Thane & Pune


          </div>
          <div class="faq-question" onclick="toggleAnswer(34)">
            <input type="checkbox" class="faq-checkbox" id="checkbox34">
            <label for="checkbox34"></label>
           26  How to raise a query?

          </div>
          <div class="faq-answer" id="answer34">
            Update in process….Till then you can mail us on migraily4523@gmail.com
          </div>
          <div class="faq-question" onclick="toggleAnswer(35)">
            <input type="checkbox" class="faq-checkbox" id="checkbox35">
            <label for="checkbox35"></label>
           27  How to view my profile?

            
          </div>
          <div class="faq-answer" id="answer35">
            Update in process…….

          
          </div>
      </var>

    <!-- Add more questions and answers following the same structure -->

  </div> 

  <script>
    function toggleAnswer(questionId) {
      var answer = document.getElementById("answer" + questionId);
      var arrow = document.getElementById("arrow" + questionId);
  
      if (answer.style.display === "none") {
        answer.style.display = "block";
        arrow.innerHTML = "&#9650;"; // Upward arrow symbol
      } else {
        answer.style.display = "none";
        arrow.innerHTML = "&#9660;"; // Downward arrow symbol
      }
    }
  </script>
  

   
</body>
</html>
