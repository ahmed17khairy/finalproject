 <!-- question 2 partition --> 
 <div class= "question2">
			<p><?php 
				echo $question2; //print the question in php
			?></p>
		</div>
		<!-- creating a form that directs to pollResult.php that shows the results-->
		<form action ="#" method = "post">
			<!-- poll radio buttons created using php to get the values -->
			<div class ="question2answers">
				<div class = "question2answers">
					<input type = "radio" name = "choice2_1" value = "1" id = "a1">
					<label for = "a1"><?php echo $choice2_1?></label>
				</div>
				<div class = "pollAnswer">
					<input type = "radio" name = "choice2_2" value = "2" id = "a2">
					<label for = "a2"><?php echo $choice2_2?></label>
				</div>
				<div class = "pollAnswer">
					<input type = "radio" name = "choice2_3" value = "3" id = "a3">
					<label for = "a3"><?php echo $choice2_3?></label>
				</div>
				</div>
				<div class = "pollAnswer">
					<input type = "radio" name = "choice2_4" value = "4" id = "a4">
					<label for = "a4"><?php echo $choice2_4?></label>
				</div>
            </div>