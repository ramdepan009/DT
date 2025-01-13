<!doctype html>
<html>
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" id="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="style.css">

 </head>
    <body>
  <div id="head" >
   <div>
    <div  id="speed">
     <p id="ms"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bar-chart" id="signal" viewBox="0 0 16 16">
       <path d="M4 11H2v3h2zm5-4H7v7h2zm5-5v12h-2V2zm-2-1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM6 7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1zm-5 4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1z"/>
    </svg> <span id="s-v"></span></p>
    </div>
   </div>
    <h2>DOTYPE</h2>
  </div>
  <div id="option" >
   <div id="option3" >
    <a href="#" >Home</a>
   </div>
   <div id="option1" >
    <a href="profile.html" >profile</a>
   </div>
   <div id="option2" >
    <a href="#" id="type" >type</a>
   </div>
  </div>

  <div id="fileform" >
   <form method="POST" action="index.php"> 
    <input required="" name="filename" type="text" id="filename" placeholder="filename"><br>
    <input name="id" type="number" id="id" placeholder="file serial no.">
    <div id="type-box" >
    <textarea name="text" rows="20" cols="23" id="type2" ></textarea>
    <br><br>
    </div>
    <input type="submit" value="SAVE" id="download"> 
   </form>
</div>
<br><br>
 <center>
  <div id="view"> 
  <a id="VF" href="database.php">VIEW FILES !</a>
  </div>
 </center>
 <script src="script.js"></script>
 <script src="speed.js"></script>
    </body>
</html>