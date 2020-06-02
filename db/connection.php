<?php 
$username="root";
$password="root";
$server="localhost";
$db="blue_site";

  $con=mysqli_connect('localhost','root','root','blue_site');

  if($con){
      ?> 
      <!-- <script>
      alert("connected")</script> -->
      <?php
  }else{
      ?>
      <!-- <script>alert("not connected")</script> -->
      <?php
  }
  ?>