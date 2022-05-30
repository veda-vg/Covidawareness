<!DOCTYPE html>
<html>
<head>
    <title>CovidSupport-Updates</title>
    <?php include 'links/links.php'; ?>
    
</head>

<body onload="fetch()">
 
<?php include 'links/navbar.php';?>

<!--Image-->

<img src="images/corona660.jpg" class="imgn border" alt="image" width="1100" height="300">

<!--Heading-->
<div class="py-3 nav d-flex justify-content-between" >
    <a class="btn btn-dark mx-5 my-5 py-2 px-2" href="#world">World updates</a>
     <h3 class="text-center font-weight-bold" style="font-family: 'Amatic SC', cursive;">Covid Updates</h3>
     <a class="btn btn-dark mx-5 my-5 py-2 px-2" href="#India">India Updates</a>
  </div>

<!--Corona World Updates-->
<section class="corona_update pb-5 mx-3" id="world">
    <div class="mb-3">
            <h3 class="text-center text-uppercase">Covid-19 world updates</h3>
            <p class="text-center text-uppercase">(Refresh page to get information updated now)</p>
    </div>

<div class=" table-responsive container-fluid">
    <table class="table table-bordered table-striped text-center" id="tbval">
        <tr>
            <th>Country</th>
            <th>TotalConfirmed</th>
            <th>TotalRecovered</th>
            <th>TotalDeaths</th>
            <th>NewConfirmed</th>
            <th>NewRecovered</th>
            <th>NewDeaths</th>
        </tr>
    </table>
</div>
</section>

<!--Corona India Updates-->
<section class="corona_update pb-5 mx-3" id="India">
    <div class="my-5">
            <h3 class="text-center text-uppercase">Covid-19 India updates</h3>
            <p class="text-center text-uppercase">(Refresh page to get information updated now)</p>
    </div>

<div class=" table-responsive container-fluid">
    <table class="table table-bordered table-striped text-center" id="tbval">
        <tr>
            <th class="text-capitalize">LastUpdatedtime</th>
            <th class="text-capitalize">state</th>
            <th class="text-capitalize">confirmed</th>
            <th class="text-capitalize">active</th>
            <th class="text-capitalize">recovered</th>
            <th class="text-capitalize">deaths</th>
        </tr>
    <?php

        $data = file_get_contents('https://api.covid19india.org/data.json');
        $coranalive = json_decode($data, true);

        $statescount = count($coranalive['statewise']);

        //<!--  If you like my videos then plz subscribe and leave a comment on the video about your experience ok   -->


        $i=1;
        while($i < $statescount){
    ?>
    <tr>
        <td><?php echo $coranalive['statewise'][$i]['lastupdatedtime'] ;?></td>
        <td><?php echo $coranalive['statewise'][$i]['state'];?></td>
        <td><?php echo $coranalive['statewise'][$i]['confirmed']  ;?></td>
        <td><?php echo $coranalive['statewise'][$i]['active']  ;?></td>
        <td><?php echo $coranalive['statewise'][$i]['recovered']  ;?></td>
        <td><?php echo $coranalive['statewise'][$i]['deaths']  ; ?></td>
    </tr>
    
    <?php
        $i++;
        }
    ?>

    </table>
</div>
</section>

<!--Footer-->

<footer >
  <div class="p-3 bg-dark text-white text-center">
  <p>COVID SUPPORT</p>
  <p>We are here to help you!!</p>
</div>
</footer>

<script>

function fetch(){

    $.get("https://api.covid19api.com/summary",

        function (data){
            //console.log(data['Countries'].length);

            var tbval = document.getElementById('tbval');

            for(var i=1; i<(data['Countries'].length);i++){
                var x= tbval.insertRow();
                
                x.insertCell(0);
                tbval.rows[i].cells[0].innerHTML= data['Countries'][i-1]['Country'];

                tbval.rows[i].cells[0].style.background = '#7a4a91';
                tbval.rows[i].cells[0].style.color ="#fff";


                x.insertCell(1);
                tbval.rows[i].cells[1].innerHTML= data['Countries'][i-1]['TotalConfirmed'];
                tbval.rows[i].cells[1].style.background = '#4bb7d8';
               

                x.insertCell(2);
                tbval.rows[i].cells[2].innerHTML= data['Countries'][i-1]['TotalRecovered'];
                tbval.rows[i].cells[2].style.background = '#4bb7d8';
                

                x.insertCell(3);
                tbval.rows[i].cells[3].innerHTML= data['Countries'][i-1]['TotalDeaths'];
                tbval.rows[i].cells[3].style.background = '#f36e23';
                

                x.insertCell(4);
                tbval.rows[i].cells[4].innerHTML= data['Countries'][i-1]['NewConfirmed'];
                tbval.rows[i].cells[4].style.background = '#4bb7d8';
               

                x.insertCell(5);
                tbval.rows[i].cells[5].innerHTML= data['Countries'][i-1]['NewRecovered'];
                tbval.rows[i].cells[5].style.background = '#9cc850';
                

                x.insertCell(6);
                tbval.rows[i].cells[6].innerHTML= data['Countries'][i-1]['NewDeaths'];
                tbval.rows[i].cells[6].style.background = '#f36e23';
                
            }
        }
    );
}
</script>
 

</body>