<?php
if (isset($_POST['updateTotalViews'])) {

  $host="localhost";
  $username="root";
  $password="";
  $databasename="blogging_count";
  $connect = mysqli_connect($host,$username,$password, $databasename);
  $sql = "UPDATE updateTotal SET pageViews = pageViews+1";
  $update = mysqli_query($connect,$sql);
  $sql1="SELECT * FROM updateTotal";
  $select = mysqli_query($connect,$sql1);
  while($row = mysqli_fetch_array($select))
  {
    $pageViews = $row['pageViews'];
    // $likes = $row['likes'];
    // $dislike = $row['dislike'];

    echo "<p id='display_div_pageViews'>".$pageViews."</p>";
    // echo "<p id='total_like'><img src='images/like.png'>".$likes."</p><div id='like_bar'></div>";
    // echo "<p id='total_dislike'><img src='images/dislike.png'>".$dislike."</p><div id='dislike_bar'></div>";
    exit();
  }
}


// if (isset($_POST['post_dislike'])) {
//   $host="localhost";
//   $username="root";
//   $password="";
//   $databasename="blog_ratings_p1";
//   $connect = mysqli_connect($host,$username,$password, $databasename);
//   $sql = "UPDATE ratings SET total_votes = total_votes+1, dislike = dislike+1";
//   $update = mysqli_query($connect,$sql);
//   $sql1="SELECT * FROM ratings";
//   $select = mysqli_query($connect,$sql1);
//   while($row = mysqli_fetch_array($select))
//   {
//     $total_votes = $row['total_votes'];
//     $likes = $row['likes'];
//     $dislike = $row['dislike'];

//     echo "<p id='total_rating'>Total Ratings (".$total_votes.") </p>";
//     echo "<p id='total_like'><img src='images/like.png'>".$likes."</p><div id='like_bar'></div>";
//     echo "<p id='total_dislike'><img src='images/dislike.png'>".$dislike."</p><div id='dislike_bar'></div>";
//     exit();
//   }
// }

if (isset($_POST['updateTotalUsers'])) {

  $host="localhost";
  $username="root";
  $password="";
  $databasename="blogging_count";
  $connect = mysqli_connect($host,$username,$password, $databasename);
  $sql = "UPDATE updateTotal SET usersCount = usersCount+1";
  $update = mysqli_query($connect,$sql);
  $sql1="SELECT * FROM updateTotal";
  $select = mysqli_query($connect,$sql1);
  while($row = mysqli_fetch_array($select))
  {
    $usersCount = $row['usersCount'];
    // $likes = $row['likes'];
    // $dislike = $row['dislike'];

    echo "<p id='display_div_usersCount'>".$usersCount."</p>";
    // echo "<p id='total_like'><img src='images/like.png'>".$likes."</p><div id='like_bar'></div>";
    // echo "<p id='total_dislike'><img src='images/dislike.png'>".$dislike."</p><div id='dislike_bar'></div>";
    exit();
  }
}



if (isset($_POST['readTotalUsers'])) {

  $host="localhost";
  $username="root";
  $password="";
  $databasename="blogging_count";
  $connect = mysqli_connect($host,$username,$password, $databasename);
  // $sql = "UPDATE updateTotal SET usersCount = usersCount+1";
  // $update = mysqli_query($connect,$sql);
  $sql1="SELECT * FROM updateTotal";
  $select = mysqli_query($connect,$sql1);
  while($row = mysqli_fetch_array($select))
  {
    $usersCount = $row['usersCount'];
    // $likes = $row['likes'];
    // $dislike = $row['dislike'];

    echo $usersCount;
    // echo "<p id='total_like'><img src='images/like.png'>".$likes."</p><div id='like_bar'></div>";
    // echo "<p id='total_dislike'><img src='images/dislike.png'>".$dislike."</p><div id='dislike_bar'></div>";
    exit();
  }
}


if (isset($_POST['post_like'])) {

  $host="localhost";
  $username="root";
  $password="";
  $databasename="blogging_count";
  $connect = mysqli_connect($host,$username,$password, $databasename);
  $sql = "UPDATE updateTotal SET total_votes = total_votes+1, likes = likes+1";
  $update = mysqli_query($connect,$sql);
  $sql1="SELECT * FROM updateTotal";
  $select = mysqli_query($connect,$sql1);
  while($row = mysqli_fetch_array($select))
  {
    $total_votes = $row['total_votes'];
    $likes = $row['likes'];
    $dislike = $row['dislike'];

    echo "<p id='total_rating'>Total Ratings (".$total_votes.") </p>";
    echo "<p id='total_like'>".$likes."</p>";
    echo "<p id='total_dislike'>".$dislike."</p>";
    exit();
  }
}


if (isset($_POST['post_dislike'])) {
  $host="localhost";
  $username="root";
  $password="";
  $databasename="blogging_count";
  $connect = mysqli_connect($host,$username,$password, $databasename);
  $sql = "UPDATE updateTotal SET total_votes = total_votes+1, dislike = dislike+1";
  $update = mysqli_query($connect,$sql);
  $sql1="SELECT * FROM updateTotal";
  $select = mysqli_query($connect,$sql1);
  while($row = mysqli_fetch_array($select))
  {
    $total_votes = $row['total_votes'];
    $likes = $row['likes'];
    $dislike = $row['dislike'];

    echo "<p id='total_rating'>Total Ratings (".$total_votes.") </p>";
    echo "<p id='total_like'>".$likes."</p>";
    echo "<p id='total_dislike'>".$dislike."</p>";
    exit();
  }
}


?>
