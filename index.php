			 <!--check if a given number or odd-->
			<?php 
				// $i=30;
				// if ($i%2==0)
				//  {
				// 	echo "even";
				// }
				// else
				// {
				// 	echo"odd";
				// }



			 ?>

			 <!-- determine if a user password is valid (assume a valid password is a least 8) -->
			 	<?php 

			 		// $password=12345;

			 		// if($password>=8){
			 		//	echo"password valid";

			 		// }
			 		// else{
			 	//	 	echo "not valid";
			 	//	}
			 	




			 	 ?>

			 	 <!-- determine the type of tringle based on the length of sides -->
			 	 <?php 

			 	 // $a=10;
			 	 // $b=10;
			 	 // $c=10;

			 	 // if($a==$b && $b==$c && $a==$c){
			 	 // 	echo "triangle is equlater";
			 	 // }
			 	 // else if($a==$b || $b==$c || $a==$c){
			 	 // 	echo "triangle is iso";
			 	 // }
			 	 // else
			 	 // {
			 	 // 	echo" scalen";
			 	 // }
			 	  ?>

			 	  <!-- check if given year a leap year -->
			 	  <?php 
			 	  // $a=2024;

			 	  // if($a%4==0){
			 	  // 	echo "leap year";
			 	  // }
			 	  // else{
			 	  // 	echo" not a leap year";
			 	  // }
			 	   ?>

			 	   <!-- verify if a user entered the correct username and password -->
			 	   <?php 
			 	//    $username="rohit";
			 	//    $password=456;

			 	//    if($username=="rohit" &&$password==456){
			 	//    	echo "pass valid";
			 	//    }
			 	//    else{
			 	//    echo "pass not valid";
			 	// }
			 	    ?>

			 	    <!-- determine if a student has passed or failed an exam based on their score -->
			 	    <?php 
			 	   /*- $mark=33;

			 	    if($mark<=33){
			 	    	echo "pass";
			 	    }
			 	    else{
			 	    	echo "fail";
			 	    }
				*/
			 	     ?>

			 	     <!-- check if a given string contain the word "php" -->
			 	     <?php 
			 	    /* $a="php";

			 	     if($a=== "php"){
			 	     	echo "contain";
			 	     }else{
			 	     echo "not contain";
			 	 }
			 	 */
			 	      ?>

			 	   <!--   determine if a person is a teenager adult or senior based on their age -->
			 	    <?php 
			 	      /*  $a=11;
			 	      if($a>=18 &&$a<=30){
			 	      	echo "adult";
			 	      }
			 	      else if ($a<=30) {
			 	      	echo "teenager";
			 	      }
			 	      else
			 	      {
			 	      	echo "senior";
			 	      }
			 	      */
			 	      
			 	       ?>

			 	       <!-- verify if a numbner is positive negative or zero -->
			 	       <?php 
			 	      /* $i=10;
			 	       if($i>0){
			 	       	echo "positive";
			 	       }
			 	       else{
			 	       	echo "negative";
			 	       }
			 	       */
			 	        ?>

			 	        <!-- determine eligibility for a discount based on parchase amount -->
			 	        <?php 
			 	        /* $a=2000;

			 	        if($a<=2000){
			 	        	echo "discount";
			 	        }
			 	        else{
			 	        	echo "not discount";
			 	        }
							*/
			 	         ?>


			 	         <!-- <h1>ARRAY</h1> -->
			 	         <!-- sum all the element in a array of numbers -->

			 	         <?php 	
			 	        /* $num=[10,20,30,40,50];

			 	         $s=0;
			 	         for($i=0;$i<4;$i++){

			 	         	$s=$s+$num[$i];

			 	         }
			 	         echo "total sum".$s;
			 	         */

			 	          ?>

			 	          <!-- find the largest number in a array -->
			 	          <?php 
			 	         /* $num=[10,200,30,50,40];
			 	          $large=0;

			 	          for($i=0;$i<4;$i++){
			 	          	if($large<$num[$i]){
			 	          	
			 	          		$large=$num[$i];

			 	          	}
			 	          }
						 echo "largest=".$large;
						 */
			 	           ?><
			 	           <!-- check if a spesific element exits in a array -->
			 	           <?php 
			 	       /*    $num=[1,2,3,4,5];
				           $check=1;
				           $flag=0;
				           for($i=0;$i<4;$i++){
				           	 if($num[$i]==$check){
				           	$flag="true";
				           
				           }
				          }

				          if($flag=="true"){
				          	echo "yes its exit array";
				          }
				          else{
				          	echo "not exit array";
				          }

						*/
				      
			 	            ?>
			 	           <!-- count the number of even number in array -->

			 	           <?php
			 	          /* $num=[1,2,3,4,5,6,7,8,9,10]; 
			 	           	$count=0;
			 	           	for($i=0;$i<10;$i++){
			 	           		if($num[$i]%2==0){
			 	           		$count=$count+1;
			 	           		}
			 	           	}
			 	           		echo $count;
							*/	
			 	            ?>
			 	            <!-- reverse the order the element in a array -->
			 	            <?php 
			 	            /*	$num=[1,2,3,4,5,6,7,8,9,10];
			 	            	for($i=9;$i>=0;$i--){

			 	            		echo $num[$i]."<br>";
			 	            	}

			 	            	*/

			 	             ?>

			 	             <!-- creat a new array by sqyaring each element of exiting in array -->
			 	             <?php 
			 	            /* $num=[1,2,3,4,5,6,7,8,9,10];
			 	             $a=1;
			 	             for($i=0;$i<10;$i++){
			 	             	$a=$num[$i];

			 	             	echo $a*$num[$i]."<br>";
								
			 	               }
			 	               */

			 	              ?>

			 	              <!-- check if all element in a array are positive -->
			 	              <?php 
			 	             /* 	$num=[1,2,3,5,6,14,5];
			 	              	$a=0;
			 	              	for($i=0;$i<=6;$i++){
			 	              		if($num[$i]>0){
			 	              			$a++;
			 	              		}
			 	              	}
			 	              	echo $a;
			 	              	*/
			 	               ?>

			 	               <!-- find the avarege number in a array -->

			 	               <?php 
			 	              /* $num=[1,2,3,4,5,7,8,9,10];
			 	               $count=0;
			 	               $sum=0;
			 	               for($i=0;$i<9;$i++){
			 	               	$sum=$sum+$num[$i];
			 	               	$count++;

			 	               }
			 	               echo "total is averege".$sum/$count;
			 	               */

			 	                ?>
			 	                <!-- <h1>for loops</h1> -->
			 	                <!-- print number 1 to 10 -->

			 	                <?php 
			 	              
			 	              /*  for($i=1;$i<=10;$i++){
			 	                
			 	                echo $i."<br>";
			 	                
			 	                }
			 	                */
			 	                 ?>
								<!-- print the multiple number 3 from 3 to 30 -->
								<?php 

							/*	for($i=1;$i<=30;$i++){

									echo "<br>". $i*3;
								}
								*/	
								 ?>
									<!-- skip -->
								 <!-- print the fibonacci sequence up to 8 term -->
								 <?php 


								  ?>
								  <!-- print the square number of 1 to 5 -->
								  <?php 
								  /*	for($i=1;$i<=5;$i++){
								  		echo  $i*$i."<br>";
								  	}
								  	*/
								   ?>
								   <!-- print the even number 10 to 20 -->
								   <?php 
								  /* for($i=10;$i<=20;$i++){
								   	if($i%2==0){
								   		echo $i."<br>";
								   	}
								   }
								   */
								    ?>
								    <!-- print the product of number 1 to 5 -->
								    <?php 
								   /* $a=1;
								    for($i=1;$i<=5;$i++){
								    	$a=$i*$a;
								    	
								    }
								    echo $a;
								    */
								    ?>
								    <!-- print the power of 2 from 2^ 1 to 2^5 -->
								    <?php 
								 /*  $a=1;
								    for($i=1;$i<=5;$i++){
								    	$a=2**$i;
								    }
								    echo $a;
								    */
								     ?>

								     <!-- print the reverse number from 1 to 5 -->
								     <?php 
								  /*   for($i=5;$i>=1;$i--){
								     	echo $i;
								     }
								     */
								      ?>
								      <!-- print the sum of the first 10 natural number -->
								      <?php 
								     /* $sum=0;
								      	for($i=1;$i<=10;$i++){
								      		$sum=$sum+$i;
								      	}
								      		echo $sum."<br>";

								      */
								       ?> 
								       <!-- <h1>while loop</h1> -->
								       <!-- print number from 1 to 5 using a while loop -->
								       <?php 
								     /*  $i=1;
								       while($i<=5) {
								       	echo $i."<br>";
								       	$i++;
								       }
								       */
								        ?>

								        <!-- clculate the product of number 1 to 5 using a while loop -->
								        <?php 
								        /*	$i=1;
								        	$a=1;
								        	while ($i<=5) {
								        		$a=$a*$i;
								        		$i++;

								        	}
								        	echo $a;
											*/
								         ?>
								         <!-- print the even number 2 to 20 using while loop -->
								         <?php 
								         	$i=2;
								         /*	while ($i<=20) {
								         		if($i%2==0){
								         			echo ($i)."<br>";
								         		}
								         		$i++;
								         	}
											*/
								          ?>
								          <!-- calculate the factorial of 3 usin a while loop -->
								          <?php 
								         /*	$n=5;
								         	$fac=1;
								         	$i=1;
								          	
								          	while ($i<=$n) {
								          		$fac=$fac*$i;
								          		$i++;

								          	}
								          	echo $fac;
											*/
								           ?>
								           <!-- print the power of (3^1 to 3^5)using a while loop -->
								           <?php 
								           /*	$i=1;
								           	while ($i<=5) {
								           		echo "<br>". $i**3;
								           		$i++;
								           	}
								           	*/
								            ?>

								            <!-- print number in reverse order from 10 to 1 using a while loop -->
								            <?php 
								          /*  $i=10;
								            while($i>=1){
								            	echo $i."<br>";
								            	$i--;
								            }
								            */
								             ?>

								             <!-- calculate the sum of digit number using a while loop -->
								             <?php 

								              ?>
								    		<!-- print the cube of number from 1 to 4 using a while loop -->
								    		<?php 
								    	/*	$i=1;
								    		$a=3;
								    		while ($i<=4) {
								    			echo $i**$a."<br>";
								    			$i++;
								    		}*/

								    		 ?>
								    		 <!-- calculate the averege of number enterred -->

								    		 <?php 

								    		  ?>
								    		  <!-- print the number from 5 to 15 skipping every second -->
								    		  <?php 
								    		  /*	$i=1;
								    		  	while ($i<=15) {
								    		  		echo $i."<br>";
								    		  		$i=$i+2;
								    		  	}
								    		  	*/
								    		   ?>

								    		   <!-- <h1>do while loop</h1> -->
								    		   <!-- print the from 1 to 5 using a do while loop -->
								    		   <?php 
								    		 /*  $i=1;
								    		   do{
								    		   	echo $i;
								    		   	$i++;

								    		   }while ($i<=5)
								    		   */
								    		   ?>
											<!-- calculate the sum of number 1 to 10 using ado while loop -->
											<?php 
										/*	$i=1;
											$s=0;
											do{
												$s=$s+$i;
												echo $s,"<br>";
												$i++;
											}while($i<=10)
												*/
											 ?>	

											 <!-- print the number square 1 to 4 using ado while loop -->
											 <?php 
											 /*	$i=1;
											 	$a=1;
											 	do{
											 		echo $i*$i;
											 		$i++;
											 	}while($i<=4)
											 	*/
											  ?>			
											  <!-- calculate the product of digit of a number using a do while loop -->
											  <?php 

											   ?>
											   <!-- calculate the factorial of 4 using a do while loop -->
											   <?php 
											  /* 	$fac=1;
											   	$n=4;
											   	$i=1;
											   	do{
											   		$fac=$fac*$i;
											   		
											   		$i++;
											   	}while($i<=$n);
											   	echo $fac;
											   	*/
											    ?>



											    <!-- print the reverse number order from 10 to 1 using a do while loop -->
											    <?php 
											   /* $i=10;
											    do{
											    	echo $i."<br>";
											    	$i--;
											    }while($i>=1)
											    */
											     ?>

											     <!-- calculate the sum of even number from 2 to 10 using a do while loop -->
											     <?php 

											     /*	$i=2;
											     	$s=0;
											     	do{
											     		if ($i%2==0) {
											     		$s=$s+$i;
											     	}
											     		$i++;
											     		
											     	}while($i<=10);
											     	echo $s;

											     	*/
											     
											      ?>	

											  <!-- print number from 10 to 20 skipping every 3 number using a dowhile loop -->
											      <?php 
											  /*   $i=10;
											      do{
											      	if ($i%3 !=0) {
											      	echo $i."<br>";
											      	}

											      	$i++;
											      }
											      	while($i<=20)
											      
													*/
											       ?>							    
