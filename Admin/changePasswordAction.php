
<?php

		$handle = fopen("../Admin/Data/data.json", "r");
		$data = fread($handle, filesize("../Admin/Data/data.json"));
	?>



<?php
        
		$explode = explode("\n", $data);


	
	?>


	<?php

		$arr= array();
		for ($i = 0; $i < count($explode)-1; $i++)
		{
			$json=json_decode(($explode[$i]));
			array_push($arr, $json);
		}
	?>


  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST"and count($_REQUEST)>0) {


			$index="";
			for($k = 0;$k< count($arr); $k++)
			{
				
				if(($_SESSION['username'] === $arr[$k]-> username))
				{
					$index=$k;
					
				}

             
			}

  
      if (empty($_POST['previousPassword'])||empty($_POST['newPassword'])) 
      {
        $isValid = false;
        echo "<br>";
        echo "<br>";
        echo"<center>";
        echo"<h2>";
        echo "Please fill up the form properly";
        echo"</center>";
        echo"</h2>";
        echo"<br><br>";
        
      }
      else {
        $isValid = true;
        echo "<br>";
        echo "<br>";
        echo"<center>";
        echo"<h2>";
        echo "Submitted Successfully";
        echo"</center>";
        echo"</h2>";
        echo"<br><br>";
        
      }

      if($isValid){

          if(($_POST['previousPassword'])===($arr[$index]-> password)){

          	$arr[$index]-> password=$_POST['newPassword'];


        	$handle= fopen("../Admin/Data/data.json", "w");



            for ($i=0; $i<count($explode)-1;$i++)
           {
              $encode = json_encode($arr[$i]);
              $res = fwrite($handle, $encode . "\n");
           }
           
        }
    
    }  

  }

  ?>
