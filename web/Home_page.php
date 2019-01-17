<!DOCTYPE html>
<html>
<head>
   <title>Steven's Home</title>
   <link rel="stylesheet" type="text/css" href="./home_css.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script>
   $(document).ready(functionion() {
       $("button").click(function() {
          $("#vid").load("https://www.youtube.com/watch?v=VN1MvKjuFyg");
       });
   });
       </script>
</head>
<body>

<div class="header">
   <h1>Talents of Steven Stolp</h1>
</div>
<?php
   echo "<br>" . "The date is: " . date("Y/m/d"). "<br>";
?>
<a href="./assignments.php">My assignments</a>
<div class="content">
<p>Hello, my name is Steven Stolp,
 I'm from Utah and I'm the eighth child of nine children. I like to sing, draw, and write stories.
 Below are some of my doodles I made on my phone. I would tell you a story but I decided to give my
 crash course on creative writing.</p>
</div>
 <div class="responsive">
 <div class="gallery">
    <img src="./red.jpg" alt="red">
       <div class="desc">Black and White Cartoon
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
       </div>
</div> 
</div>
<div class="responsive">
<div class="gallery">
   <img src="./house.jpg" alt="house">
       <div class="desc">House
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
       </div>
</div>
</div>
<div class="responsive">
<div class="gallery">
    <img src="./girl_jumping.jpg" alt="jump">
       <div class="desc">Girl Jumping
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
       </div>
</div>
</div>
<div class="responsive">
<div class="gallery">
    <img src="./sunset.jpg" alt="sunset">
       <div class="desc">Sunset on an ocean
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
       </div>
</div>
</div>
<div class="responsive">
<div class="gallery">
    <img src="./dnd_Rose.jpg" alt="dnd character">
       <div class="desc">My D&D character
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
       </div>
</div>
</div>

 <div class="content">
 <h2>Creative Writing 101</h2>
 <p>There are four essential elements a plot needs to be successful. The more closely you follow this
 pattern, the more likely your plot will work. The elements are: Lead, Objective, Conflict, and Knockout, or
 LOCK. The lead means that you have either a setting, main character, or situation that is interesting and
 the reader wants to know more about her. Something out of the ordinary. There also needs to be an objective,
 what does the character want? The stakes should also be high. Conflict means that something needs to say
 no. Something or someone needs to stop the hero from reaching his goal. The story ends with a knockout.
 This is how the main character resolves the conflict and he may or may not achieve his goal.</p>
 </br>
 <p>If you click the button below, a jQuery request will be made and will retrieve my video. But you
 don't have to see if if you don't want to.</p>
 </div>
 <div id="vid"></div>
 <button>See my video.</button>
</body>
</html>