<?php
require('connection.php');
require('function.php');
$query="select * from categories where status=1";
$result = mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mypage</title>
    <link rel="stylesheet" href="css_folder_for_frent/homestyle.css">
    <script src="https://kit.fontawesome.com/2b3f24cffe.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
      <div class="navbar">
        <ul class="logo">
            <li>ShopEasy.in</li>
        </ul>
        <div>
            <ul class="icons">
                <li><a href="index.php">Home</a></li>
                <?php
      while($row=mysqli_fetch_assoc($result))
      {
        ?>
          <li><a href="categories.php?id=<?php echo $row['categories']?>"><?php echo $row['categories'];?></a></li>

        
        <?php
      }?>
       <li><a href="contact.php">Contact</a></li>
                <input type="text" name="" id="inbtn" placeholder="ShopEasy.in"><button class="btn">Search <i class="fa-solid fa-magnifying-glass" aria-hidden="true"></i></button>
            </ul>
        </div><div class="add_cart">
        <i class="fa fa-shopping-cart" aria-hidden="true"></i></div>
      </div>
      
    </header>
</body>
</html>