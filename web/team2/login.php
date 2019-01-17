<!DOCTYPE html>
<html>
<head>
   <script>
    $(document).ready(function(){
       $("#admin").click(function() {
          $("#vid").load("./logtype.php");
       });
   });
    $(document).ready(function(){
       $("#tester").click(function() {
          $("#vid").load("./logtype.php");
       });
   });
   }
</head>
<body>
<?php 
   include './header.php';
?>
<button id="admin">Log in as an Administrator</button>
<button id="tester">Log in as a Tester</button>
</body>
</html>