<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="creator-style.css">
    <title>Story</title>
  </head>
  <body>
    <p>
      As

      <?php
        if (isset($_POST['submit'])){
          echo $_POST['character'];
        }
      ?>

      your story starts out like this.... Beginning at 1pm.. Beep Beep Beep Beep Beep. Your alarm is going off.
      With a lazy arm you plop it on the stop button. After a few minutes of contemplating whether to get up or
      not you shimmy your way out of the covers. Smacking your dry lips together you decide to go get yourself some

      <?php
        if (isset($_POST['submit'])){
          echo $_POST['beverages'];
        }
      ?>

      . "Ahh, thats nice...", you think to yourself. With a quick glance over to the stovetop you see the clock
      reads 2:15pm, which is strange because your alarm is set to 1pm, then you remember you changed the clocks
      yesterday and forgot to set the one in your room! Without a second thought you pour the rest of your drink
      in the sink, get ready, and head out. As you pull out of the driveway with your

      <?php
        if (isset($_POST['submit'])){
          echo $_POST['transportation'];
        }
      ?>

      your not sure if your going to make it! 30 minutes later you arrive just on time. Entering the

      <?php
        if (isset($_POST['submit'])){
          echo $_POST['destination'];
        }
      ?>

      you see all your buddies. " Welp... Just another day at the

      <?php
        if (isset($_POST['submit'])){
          echo $_POST['destination'];
        }
      ?>

      ", you think to yourself.

      </p>
  </body>
</html>
