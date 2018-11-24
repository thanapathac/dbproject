<?php include('donateServer.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Insert</title>
  <link rel="stylesheet" type="text/css" href="001.css">
</head>
<body>
  <div class="header">
    <h2>Donate</h2>
  </div>
  
  <form method="post" action="insert.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
      <label>Company's Name</label>
      <input type="text" name="ComName" value="<?php echo $ComName; ?>">
    </div>
    <div class="input-group">
      <label>Amount</label>
      <input type="text" name="Amount" value="<?php echo $Amount; ?>"><label>Bath</label>
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="donate_btn">Submit</button>
    </div>
    <p>
    </p>
  </form>
</body>
</html>