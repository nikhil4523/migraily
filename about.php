

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
      
       
         
      </div>
   </section>

  
</body>
</html>
