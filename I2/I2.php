<!--Potential Improvement of using cards to show the users more information about cars to the Bristol street motors page-->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Bristol Street Motors</title>
    <link rel="stylesheet" href="CSS/i2.css">
  </head>
  <body>


      <div class="navSearch">
        <a id="active" href="#home"><img id="logo" src="https://www.bristolstreet.co.uk/images/blueLogo.svg"></a>
        <a class="middle" href="#cars">Cars</a>
        <a class="middle" href="#about">About</a>
        <a class="middle" href="#more">More</a>

        <div class="searchBar">
          <form autocomplete="off" action="/search.php?" method="post">
              <input type="text" name="search" id="carSearch" placeholder="Search...">
            <button type="submit">&#x1F50E;</button>
          </form>
        </div>
      </div>


      <div class="banner">
        <img id="bannerImg" src="https://electrek.co/wp-content/uploads/sites/3/2020/01/self-charging-toyota.jpg?quality=82&strip=all&w=1600"/>
      </div>

      <div class="newCarSection">
        <h2 style="margin-left: 10px;">New Cars</h2>
        <?php
        /*Connecting to the database*/
        include 'PHP/db_Connect.php';

        /*Queering the database pulling back all of the results that are in the cars table*/
        $sql = "SELECT nCar_Name, nCar_Year, nCar_Price, nCar_Miles, nCar_Img_Link FROM newCarsTable";
        $qCarResult = $db_Connect->query($sql);

        if($qCarResult === false)
        {
          echo "<p> Query Failed: " . $db_Connect->error . "</p>";
          exit;
        }
        else
        {
          while($rowObj = $qCarResult->fetch_object())
          {
            /*Store all of the results, pulled back*/
            echo "<div class='card'><div class='container'><img src={$rowObj->nCar_Img_Link} width='100%;'><h><b>{$rowObj->nCar_Name}</></h3><h4>{$rowObj->nCar_Miles}miles</h4><h4>{$rowObj->nCar_Year}</h4><h4>£{$rowObj->nCar_Price}</h4></div></div>";
          }
        }
        $qCarResult->close();
        $db_Connect->close();
        ?>

      </div>
      <!--
      <div class="newCarSection">
        This is just demonstraiting the card section. If implemented, this would use PHP to connect to a database to get a list of cars, query it using sql
      then add them to the site dynamically rather than using hard coded values
        <h2 style="margin-left: 10px;">New Cars</h2>
        <div class="card">
          <div class="container">
            <img src="https://m.atcdn.co.uk/a/media/w800h600/7e207b7a4f454f378e03e8a60906b498.jpg" width="100%;">
            <h><b>BMW 3 Series 2.0 SE 5dr</></h3>
            <h4>185,000 miles</h4>
            <h4>2011</h4>
            <h4>£1,995</h4>
          </div>
        </div>
        <div class="card">
          <div class="container">
            <img src="https://m.atcdn.co.uk/a/media/w800h600/d8074a4608af433b8ced0d745229e26d.jpg" width="100%">
            <h><b>Volvo S40 1.6TD S 4dr</></h3>
            <h4>141,000 miles</h4>
            <h4>2006</h4>
            <h4>£400</h4>
          </div>
        </div>
        <div class="card">
          <div class="container">
            <img src="https://m.atcdn.co.uk/a/media/w800h600/674e304a7dcf41348431c5f97baa9473.jpg" width="100%">
            <h><b>Ford S-Max 20 TDCI 5dr</></h3>
            <h4>156,000 miles</h4>
            <h4>2008</h4>
            <h4>£1500</h4>
          </div>
        </div>
        <div class="card">
          <div class="container">
            <img src="https://m.atcdn.co.uk/a/media/w800h600/e240827438f942d49544b5953efaf87f.jpg" width="100%">
            <h><b>Ford Focus 1.0 EB 5dr</></h3>
            <h4>6,484 miles</h4>
            <h4>2019</h4>
            <h4>£15,000</h4>
          </div>
        </div>
      </div>

      <div class="usedCarsSection">
        <h2 style="margin-left: 10px;">Used Cars</h2>
        <div class="card">
          <div class="container">
            <img src="https://m.atcdn.co.uk/a/media/w800h600/a15d5de0ba9346ffbc4848272339aaef.jpg" width="100%">
            <h><b>Renault Laguna 1.9dCi</></h3>
            <h4>155,000</h4>
            <h4>2006</h4>
            <h4>£995</h4>
          </div>
        </div>
        <div class="card">
          <div class="container">
            <img src="https://m.atcdn.co.uk/a/media/w800h600/248233f53b1f4d98ad8aefffe04e8e6c.jpg" width="100%">
            <h><b>VW Golf 2.0 GT TDI</></h3>
            <h4>202,000</h4>
            <h4>2006</h4>
            <h4>£990</h4>
          </div>
        </div>
        <div class="card">
          <div class="container">
            <img src="https://m.atcdn.co.uk/a/media/w800h600/c7f96b0be01e44ab8f604746d066b445.jpg" width="100%">
            <h><b>Ford Fiesta 1.25 Zetec</b></h3>
            <h4>96,000</h4>
            <h4>2010</h4>
            <h4>£1000</h4>
          </div>
        </div>
        <div class="card">
          <div class="container">
            <img src="https://m.atcdn.co.uk/a/media/w800h600/0414e70a9ad24921a5d6ef0ce00afaa6.jpg" width="100%">
            <h><b>Renault Clio 1.5 dCi</></h3>
            <h4>104,000</h4>
            <h4>2014</h4>
            <h4>£3999</h4>
          </div>
        </div>
      </div>
    -->
  </body>
</html>
