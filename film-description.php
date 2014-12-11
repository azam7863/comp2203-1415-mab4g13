<!-- film descriptions -->
<div class='row'>
    <h2><b><?=$filmOb->name?></b></h2>
		<!--medium image-->
        <img class='col-md-5' src='http://comp2203.ecs.soton.ac.uk/coursework/1415/assets/posters/<?=$filmOb->id?>_medium.jpg' width='180px'/>
		<!--Displays Film details-->
		    <div class='col-md-7'>
		        <p><b><l1><span class='glyphicon glyphicon-time'></span></l1> Runtime:</b> <?=$filmOb->runtime?> <!--Film runtime (in minutes)-->
	            <p><b><l1><span class='glyphicon glyphicon-user'></span></l1> Director:</b> <?=$filmOb->director?> <!--Director-->
                <p><b><l1><span class='glyphicon glyphicon-calendar'></span></l1> Theatrical release:</b> <?=$filmOb->theatricalRelease?> <!--Theatrical Release date-->
		        <p><b><l1><span class='glyphicon glyphicon-calendar'></span></l1> DVD release:</b> <?=$filmOb->dvdRelease?> <!--DVD Release date-->
				<br><br><b><l1></l1>Classification:</b> <?=$filmOb->classification?> <!--Classification-->
				<p><br><b>Plot Summary:</b></br></p><?=$filmOb->description?>  <!-- Description-->
		