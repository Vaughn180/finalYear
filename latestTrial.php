<?php
include 'mainPage.php';  
?>

<!DOCTYPE html>
<html>

<head>
  <!-- Importing plotly-->
  <script src="plotly-latest.min.js"></script>
  <!-- Importing ajax-->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>



  <!-- latest date time picker -->

  <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
</head>

<title>Walking Zebra</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  html,
  body,
  h1,
  h2,
  h3,
  h4,
  h5,
  h6 {
    font-family: "Roboto", sans-serif
  }
</style>


<body class="w3-light-grey" >


      <!-- Date Selection Bit-->
      <div class="w3-twothird">

        <form id="times" action="mainPage.php"> 
          <label for="birthdaytime">To:</label>
          <input type="text" name="datetimes" id="dt" label="Pick:"  />
          
        </form>

        <!-- where the input used to be -->
       <!-- <input type="text" name="datetimes" id="dt" label="Pick:"  /> -->

        <!-- Eduction bit -->
        <div class="w3-container w3-card w3-white">
          <h2 class="w3-text-grey w3-padding-16"><i
              class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Education</h2>

          <!--Showing the graph-->
          <div id="tester" style="width:600px;height:250px;">

            <script>

              function myFunction() {

                $('input[name="datetimes"]').daterangepicker({
                  "timePicker": true,
                  "timePicker24Hour": true,
                  "timePickerIncrement": 5,
                  "alwaysShowCalendars": true,
                  //stuff that fills start and end time
                  "startDate": "01/01/2020",
                  "endDate": "03/11/2020",
                  "buttonClasses": "btn-cancel",
                  "applyButtonClasses": "btn-appltbutton"
                },
                  function (start, end, label) {

                    console.log('New date range selected: ' + start.toISOString('YYYY-MM-DD') + ' to ' + end.toISOString('YYYY-MM-DD'));

  
                  });


                //end of my function
              }

            </script>

          </div>
          <!-- End Right Column -->
        </div>
        <!-- End Grid -->
      </div>

      <!-- End Page Container -->
    </div>


    <div id="comments">
      <?php
        $sql = "Select * from countppl";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result)>0){
          while ($row = mysqli_fetch_assoc($result)){
            echo $row;
          }

        }else{
          echo "No data";
        }

      ?>
     </div>

</body>

</html>