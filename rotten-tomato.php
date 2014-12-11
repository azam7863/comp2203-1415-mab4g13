<!-- rotten tomatoes critics and audience ratings -->
		
		<span class='label label-danger' style='font-size:12px;'>Critics
		
	Rating&nbsp;:&nbsp;Rotten</span>	
		<br>
		<br>
		<div class="progress">
			<div class = "progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
				<p><span class='detail'> Critics Score: </span><?=$rotten_tomato->ratings->critics_score?>&nbsp;%</p>
			</div>
		</div>
			
		
		<span class='label label-danger' style='font-size:12px;'>Audience Rating&nbsp;:&nbsp;Spilled</span>
		<br></br>
		
		<div class="progress">
			<div class = "progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"	aria-valuemax="100" style="width: 50%;">
				<p><span class='detail'>Audience Score: </span><?=$rotten_tomato->ratings->audience_score?>&nbsp;%</p>
			</div>
		</div>
      
	</div>
</div>