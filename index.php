<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Better ( not a clone )</title>
  <link rel="stylesheet" href="../css/style.css" />
</head>

<body>
  <div class="MainGrid">
    <div class="Title">Better ( Bereal x Twitter )</div>

    <div class="FriendBox">
      <div id="FriendBoxTitle" class="SubTitle">Discover</div>
      <div class="FriendBoxList"></div>
    </div>

    <div class="QuickAddFriendBox">
      <div id="QuickAddFriendBoxTitle" class="SubTitle">Friends</div>
      <div class="QuickAddFriendBoxList"></div>
    </div>

    <div class="BeTweetTimer">
      <div id="BeTweetTimerTitle" class="SubTitle">Time until next BeTweet</div>
      <div id="Timer"></div>
    </div>

    <div class="PostArea">
      <?php
      include_once "../php/PostArea.php";
      ?>
    </div>

    <div id="UserTweetForm">
      <div id="UserTweetFormTitle" class="SubTitle">My Tweet</div>
      <input id="UserTweetFormInput" placeholder="What's on your mind?"></input>
      <input type="button" id="UserTweetFormButton" value="Click Me!"></input>
    </div>
    <div class="AccountBox">My Account</div>
  </div>
</body>
<script src="../js/main.js"></script>

</html>