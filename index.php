<?php  session_start();  ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>contac us</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/872001797a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">


</head>
<body>
    <div class="content">
        <h1 class="logo">Contact <span>Us</span> </h1>
        <div class="contact-wrap animated fadeInRight">
            <div class="contact-form">
             <?php if($_SESSION['message']) {

               echo  $_SESSION['message'];
             }  
                
                ?>
            <form >
                <p class="blocke">
                    <label for="name">Name</label>
                    <input type="text" name="name">
                </p>
            
                <p class="blocke">
                    <label for="email">Email</label>
                    <input type="email" name="email">
            
                </p>


                <p class="blocke" >
                        <label for="">telefono</label>
                        <input type="tel" name="tel">
                    </p>
            
                <p class="blocke">
                    <label for="">Asunto</label>
                    <input type="text" name="asunto">
                </p>
            
                <p class="blocke">
                    <label for="">mensaje</label>
                    <textarea name="mensaje" id="" rows="3"></textarea>
                </p>
                 
                <button class="block" type="submit">send</button>
            </form>
            </div>

            <div class="contact-info">
               <h4>more info</h4>
               <ul>
                   <li><i class="fas fa-map-marker-alt"></i> address Street</li>
                   <li><i class="fas fa-phone"></i> (+57)300-615-2538</li>
                   <li><i class="fas fa-envelope"></i> contact@bylekong.com</li>
               </ul>
               <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                   Eius sapiente, totam obcaecati quod ad aperiam quae delectus 
                   vitae optio sed excepturi magnam fugit tempore est id assumenda
                    molestias error praesentium.</p>


                    <p>following us </p>
            </div>
        </div>
    </div>


    <script>
    
          let form = document.querySelector('form');


          form.addEventListener('submit', (e)=>{
                
                e.preventDefault();

                console.log('diste clcik ')


                let datos = new FormData(form);

                 
               fetch('contact.php',{

                   method:'post',
                   body: datos
               }).then((data)=>data.text())
                  

                  document.querySelector('form').reset();

          })
    
    </script>
</body>
</html>