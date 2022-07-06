
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

		if($_SERVER['REQUEST_METHOD'] === "POST" and count($_REQUEST)>0)
		{
			$bool=false;
			$index="";
			$username=$_POST['username'];
			
			for($k = 0;$k< count($arr); $k++)
			{
				if(($_POST['username'] === $arr[$k]-> username) and ($_POST['password'] === $arr[$k]-> password) )
				{
					$bool=true;
					$index=$k;
					
				}

             
			}
			

			if ($bool)
			{
				session_start();
                 $_SESSION['username']=$username;
                 $_SESSION['fname']=$arr[$index]->fname;
                 $_SESSION['lname']=$arr[$index]->lname;
                 $_SESSION['gender']= $arr[$index]->gender;
                 $_SESSION['nid']= $arr[$index]->nid;
                 $_SESSION['email']=$arr[$index]->email;
                 $_SESSION['mobileno']=$arr[$index]->mobileno;
                 $_SESSION['address']=$arr[$index]->address;
                 $_SESSION['age']=$arr[$index]->age;
                 $_SESSION['dob']=$arr[$index]->dob;
				header("Location: home.php");
			}

			else {
				echo "Login Failed.";
				echo"<br>";
				echo"<br>";
				echo "Please fill up the form properly";
			}

		}

	?>
