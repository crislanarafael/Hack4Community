<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UserPage</title>
    <link rel="stylesheet" href="dashboard.css"/>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
    
</head>
<body>
   <div class="sidebar">
       <div class="logo_content">
           <div class="logo">
               
               <div class="logo_name">ReUp</div>
           </div>
           <i class='bx bx-menu' id="btn" ></i>
       </div>
       <ul class="nav_list">
           <li>
                <i class='bx bx-search' ></i>
                <input type="text" placeholder="Search...">
               </a>
             <span class="tooltip">Search</span>   
           </li>
           <li>
            <a href="#">
             <i class='bx bx-grid-alt' ></i>
             <span class="links_name">Dashboard</span>
            </a>
          <span class="tooltip">Dashboard</span>   
        </li>
        <li>
            <a href="#">
            <i class='bx bx-user' ></i>
             <span class="links_name">User</span>
            </a>
          <span class="tooltip">Profile</span>   
        </li>
        <li>
            <a href="#">
             <i class='bx bx-chat' ></i>
             <span class="links_name">Messages</span>
            </a>
          <span class="tooltip">Messages</span>   
        </li>
        
        <li>
            <a href="#">
             <i class='bx bx-cog' ></i>
             <span class="links_name">Settings</span>
            </a>
          <span class="tooltip">Settings</span>   
        </li>
        <li>
            <a href="#">
            <i class='bx bx-help-circle' ></i>
             <span class="links_name">Help</span>
            </a>
          <span class="tooltip">Help</span>  
        </li>
       </ul>
       <div class="profile_content">
           <div class="profile">
               <div class="profile_details">
                  
                 <div class="name_status">
                     <div class="name"><?=$_SESSION['name']?> <br>Logged In</div>
                     
                 </div>
               </div>
               <a href="logout.php"><i class='bx bx-log-out' id="logOut"></i></a>
           </div>
       </div>       
   </div>
   
   <div class="profileCard">
    <div class='welcome-message'><h1>Welcome To Your Dashboard <?=$_SESSION['name']?>!</h1></div>
    <div class="dashboard-image"><img class="dashboard-img" src="community.png" /></div>
    <div class="comment-system-container">
        <h1>Your Exchange Area</h1>
        <p>Rules: 
            <br>
            1. Be Kind and Respectful<br>
            2. Don't forget to include your email so folks can reach out to you<br>
            3. Have fun!
        </p>
        <br>
        <div class="comment-form">
            <form method = "POST" id = "comment-form">
                <label for="name">Enter Your Name: </label>
                <br>
                <input type='text' name='name' id="name" placeholder='Name' required><br>
                
                <label for="message">Enter Your Message: </label><br>
                <textarea type='text' name='message' id="message" placeholder='Write your message here' required></textarea><br>
					
				
					
				<br>
                <button class="myButton" id="btn" type="submit">Add Comment</button>
            </form>
            <div class="reply-area">
                <div class="content" id="content">
            
                </div>
            </div>
        </div>
        
    </div>
   </div>
   
    <script>
       
       $(document).ready(function(){
            function loadData(){
                $.ajax({
                    url: 'select-data.php',
                    type: 'POST',
                    success: function(data){
                        $("#content").html(data);
                    }
                });
            }

            loadData();

            $("#comment-form").on("submit", function(e){
                e.preventDefault();
                var name = $("#name").val();
                var message = $("#message").val();

                $.ajax({
                    url: 'insert-data.php',
                    type: 'POST',
                    data: {name: name, message: message},
                    success: function(data){
                        if (data == 1) {
                            loadData();
                            alert('Your Comment Was Submitted Successfully!');
                            $("#comment-form").trigger("reset");
                        }else {
                            alert("Your Comment Could Not Be Submitted.");
                        }
                    }
                });
            });
        });
        /*$(document).ready(function(){
            $("#btn").on("click", function(){
                var name = $("#name").val();
                var message = $("#message").val();

                $.ajax({
                    url: 'insert-data.php',
                    type: 'POST',
                    data: {name: name, message: message},
                    success: function(data){
                        if(data == 1){
                            alert('comment submitted');
                        }else{
                            alert('could not submit comment');
                        }
                    }
                })
                
            })
        });*/
    </script>
   <script>
     let btn = document.querySelector("#btn");
     let sidebar = document.querySelector(".sidebar");
     let searchBtn = document.querySelector(".bx-search");

     btn.onclick = function(){
       sidebar.classList.toggle("active");
     }

     searchBtn.onclick = function(){
       sidebar.classList.toggle("active");
     }


   </script>
   
</body>
</html>