 <script>

  // Locate infomrmation on AJAX to always be looking for updated table
//onclick event, sends server which cell was clicked
//returns data for updated grid
//send clicked ID to php, php would then change characterSet
//update php page (page 1)
//get php (page 2)

//

var xhttp = new XMLHttpRequest(); //request is how to pass data tos server

//sending Server information
function getCell{
	xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("ClickedCell").innerHTML = this.responseText;
    }
  };
};

//listen for javascript fillingrid function
//tells php what was clicked, php then updates the table. php does the actual updates.

xhttp.open("GET", "sendData.php", true); //get updates from onclick event to send to php,
//pass to php the updated string.
xhttp.send();//send updates to php


//handling server response
	if(xhttp.onreadystatechange === XMLHttpRequest.DONE){
		//everything's ok
		document.write("Everything's ok");
	} else{
		document.write("not ready yet");
	}
	if(xhttp.status === 200){
		document.write("It worked");
	}
	else{
		document.write("xhttp.status");
	}


//second AJAX to keep pinging server to see what table looks like and then that's what's displayed
 //pass string to javascript to then fill the grid back in 
  
  
  </script>
  
  