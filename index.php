<?php

// header file is included here
  include 'inc/header.php';
  // user file is included here
  include 'lib/user.php';

  $user = new user;  // for the new user
  session::userSession();

  ?>

  <!-- body area started from here -->
  <div class="container mt-5">
    <!--semantic html used that's for  table tag-->  
  <table class="table table-hover">
    <thead class="thead-dark">
      <tr>
        <th scope="col">User Id</th>
        <th scope="col">Name</th>
        <th scope="col">Username</th>
        <th scope="col">Email</th>
        <th scope="col">Action</th>
      </tr>

    </thead>
    <tbody>
    <?php
      $userlist = new user;
    //  $result = $userlist ->userList();





?>
















    </tbody>






  </table>



  </div>