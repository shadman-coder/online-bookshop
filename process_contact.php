<?php					$nm=$_POST['nm'];			$email=$_POST['email'];			$qu=$_POST['query'];			$question1=$_POST['quantity'];						$link=mysqli_connect("localhost","root","","final_shop")or die("Can't Connect...");												$query="insert into contact(con_nm,con_writer,edition,quantity)			values('$nm','$email','$qu','$question1')";						mysqli_query($link,$query) or die("Can't Execute Query...");						header("location:index.php");			?>