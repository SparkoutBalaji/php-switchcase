<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SwitchCase</title>

  <style>
    *{
      margin:o;
    }
    #switchcase
    {
      border:solid purple 2px;
      margin:auto;
      padding:10px;
      width:25%;
      
    }
    #shop, #menu{
      text-align:center;
    }
    
  </style>
</head>
<body>
  <div id="switchcase">
    <h1 id="shop">Energy Fuel's</h1>
    <h2 id="menu">Menu List</h2>

    <ol>
      <li>Milk</li>
      <li>Tea</li>
      <li>Coffee</li>
      <li>Lemon Tea</li>
      <li>Green Tea</li>
    </ol>
    
    <form action="" method="post">
      <p>
        <label for="choice1">
          <select name="choice1" id="choice1">
            <option value="">Your Choice</option>
            <option value="Milk">Milk</option>
            <option value="Tea">Tea</option>
            <option value="Coffee">Coffee</option>
            <option value="Lemon Tea">Lemon Tea</option>
            <option value="Green Tea">Green Tea</option>
          </select>
        </label>
        
      </p>
      <input type="submit" value="submit"/> <br>  <br>
        
    <div>
    </form>
    
    <?php
    if(isset($_POST['choice1'])){
      $choice = $_POST["choice1"];
      switch($choice) {  //for rate
        case "Milk":
          echo "Milk Rate : 10";
          break;

        case "Tea":
          echo "Tea Rate : 12";
          break;

          case "Coffee":
            echo "Tea Rate : 20";
            break;

            case "Lemon Tea";
            echo "Lemon Tea : 25";
            break;

            case "Green Tea";
            echo "Green Tea : 30";
            break;
        default:
          echo "No Choices here...";
      }
    }


    ?>
  </div>
</body>
</html>