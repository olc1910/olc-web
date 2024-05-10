<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Kontaktformular</title>
    <style>
      body {
        background-color: #eef2f5;
        font-family: Arial, sans-serif;
      }
      
      h1 {
        color: #0066cc;
      }
      
      form {
        background-color: #ffffff;
        padding: 20px;
        border-radius: 5px;
        max-width: 400px;
        margin: 0 auto;
      }
      
      input[type="text"],
      input[type="email"],
      select,
      textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
        box-sizing: border-box;
      }
      
      textarea {
        height: 100px;
      }
      
      button[type="submit"] {
        background-color: #0066cc;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <?php
    if(isset($_POST["submit"])){
      mail("kontakt@olcrossley.de", "Kontaktformular", 'Name: '.$_POST["name"].' Email: '.$_POST["email"].' Priorität: '.$_POST["priorität"].' Nachricht: '.$_POST["message"]);
      ?>
      <h1>Das Kontaktformular wurde abgesendet!</h1>
      <?php
    }
     ?>
    <form action="index.php" method="post">
      <input type="text" name="name" placeholder="Name" required><br>
      <input type="email" name="email" placeholder="Email" required><br>
      <p>Priorität:</p>
      <select name="priorität">
        <option value="hoch">Hoch</option>
        <option value="mittel">Mittel</option>
        <option value="gering">Gering</option>
      </select><br>
      <textarea name="message" rows="8" cols="80" required></textarea><br>
      <button type="submit" name="submit">Absenden</button>
    </form>
  </body>
</html>
