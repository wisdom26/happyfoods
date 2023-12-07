<?php include 'header.php';?>
<center>
<form action="db.php" method="post" class="hero__section">
    <fieldset class="fild" >
        <legend>SignUp</legend>
        <input type="text" name="name" placeholder="Enter Name"><br><br>
        <input type="text" name="username" placeholder="Enter Username"><br><br>
        <input type="text" name="mobile" placeholder="Enter Mobile Number"><br><br>
        <input type="password" name="pass" placeholder="Enter Password"><br><br>
        <input type="submit" name="sub" value="SignUp for free" class="btn__dark margin__top">

     </fieldset>
</form>
</center>
<?php include 'footer.php';?>