<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Create-Edit</title>
        <script src="./script.js"></script>
      <link rel="stylesheet" href="layout.css" />
        <link href="normalize2.css" rel="stylesheet">
    </head>
 <body id="page-index">
        
        </p>
    </p>
<style type="text/css">
    body
    {
        font-family: arial;
    }

    th,td
    {
        margin: 0;
        text-align: center;
        border-collapse: collapse;
        outline: 1px solid #e3e3e3;
    }

    td
    {
        padding: 5px 10px;
    }

    th
    {
        background: #666;
        color: white;
        padding: 5px 10px;
    }

    td:hover
    {
        cursor: pointer;
        background: #666;
        color: white;
    }

.moviebutton {
    background-color: mediumseagreen;
    border: 1px solid black;
    color: black;
    padding: 15px 32px;
    text-align: center;
    font-size: 12px;
    display: inline-block;
    width: 170px;
}

    .button {
    background-color: grey; /* Green */
    border: 1px solid black;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: block;
    font-size: 16px;
    cursor: pointer;
    width: 170px;
    display: block;  
}

.button:hover {
    background-color: cadetblue;
}

.button:active {
  background-color: cadetblue;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}




    </style>
    <body>
        <header class="layout">
	  <button id="homeButton" type="button"><a href="homePage.html">Home</a></button>
         <div class="dropdown">
			<button class="dropbtn">Facility</button>
			<div class="dropdown-content">
				<a href="prices.html">Ticket and Concession Prices</a>
				<a href="theaterList.html">Theater List</a>
				<a href="#">Comments/Complaints</a>
				<a href="revenue.html">Revenue</a>
			</div>
		</div>
		<div class="dropdown">
			<button class="dropbtn">Movie List</button>
			<div class="dropdown-content">
				<a href="fullMovieList.html">Full Movie List</a>
				<a href="upcomingMovieList.html">Upcoming Movies</a>
				<a href="currentMovieList.html">Current Releases</a>
			</div>
		</div>
		<div class="dropdown">
			<button class="dropbtn">Schedule</button>
			<div class="dropdown-content">
				<a href="create.html">Create/Edit Schedule</a>
				
			</div>
		</div>
		<button id="logoutButton" type="button"><a href="login.html">Logout</a></button>
		<div>
			<span id="pricesSpan">Create/Edit Friday</span>
		</div>
		
      </header>
    
    <table id="table" name="table" width="80%" align="right" >
    <div id="head_nav">
    <tr>
        <th>Time</th>
        <th>Room #1</th>
        <th>Room #2</th>
        <th>Room #3</th>
        <th>Room #4</th>
        <th>Room #5</th>
        <th>Room #6</th>

    </tr>
</div>  

    <tr>
        <th>9:00 - 9:30</th>
        
            <td> <input type="text"> </td>
            <td> <input type="text"> </td>
            <td ><input type="text">  </td>
            <td> <input type="text">  </td>
            <td> <input type="text">  </td>
            <td> <input type="text">  </td>
        </div>
    </tr>

    <tr>
        <th>9:30 - 10:00</th>
        
            <td> <input type="text"> </td>
            <td> <input type="text"> </td>
            <td ><input type="text">  </td>
            <td> <input type="text">  </td>
            <td> <input type="text">  </td>
            <td> <input type="text">  </td>
            </div>
    </tr>

    <tr>
        <th>10:00 - 10:30</td>
        
           <td> <input type="text"> </td>
            <td> <input type="text"> </td>
            <td ><input type="text">  </td>
            <td> <input type="text">  </td>
            <td> <input type="text">  </td>
            <td> <input type="text">  </td>
        </div>
    </tr>

    <tr>
        <th>10:30 - 11:00</td>
        
            <td> <input type="text"> </td>
            <td> <input type="text"> </td>
            <td ><input type="text">  </td>
            <td> <input type="text">  </td>
            <td> <input type="text">  </td>
            <td> <input type="text">  </td>

        </div>
    </tr>

    <tr>
        <th>11:00 - 11:30</td>
        
            <td> <input type="text"> </td>
            <td> <input type="text"> </td>
            <td ><input type="text">  </td>
            <td> <input type="text">  </td>
            <td> <input type="text">  </td>
            <td> <input type="text">  </td>

        </div>
    </tr>

    <tr>
        <th>11:30 - 12:00</td>
        
            <td> <input type="text"> </td>
            <td> <input type="text"> </td>
            <td ><input type="text">  </td>
            <td> <input type="text">  </td>
            <td> <input type="text">  </td>
            <td> <input type="text">  </td>
        </div>
    </tr>

    <tr>
        <th>12:00 - 12:30</td>
        
            <td> <input type="text"> </td>
            <td> <input type="text"> </td>
            <td ><input type="text">  </td>
            <td> <input type="text">  </td>
            <td> <input type="text">  </td>
            <td> <input type="text">  </td>
        </div>
    </tr>

    <tr>
        <th>12:30 - 1:00pm</td>
        
            <td> <input type="text"> </td>
            <td> <input type="text"> </td>
            <td ><input type="text">  </td>
            <td> <input type="text">  </td>
            <td> <input type="text">  </td>
            <td> <input type="text">  </td>
        </div>
    </tr>

    <tr>
        <th>1:00 - 1:30</td>
        
            <td> <input type="text"> </td>
            <td> <input type="text"> </td>
            <td ><input type="text">  </td>
            <td> <input type="text">  </td>
            <td> <input type="text">  </td>
            <td> <input type="text">  </td>
        </div>
    </tr>

    <tr>
        <th>1:30 - 2:00</td>
        
            <td> <input type="text"> </td>
            <td> <input type="text"> </td>
            <td ><input type="text">  </td>
            <td> <input type="text">  </td>
            <td> <input type="text">  </td>
            <td> <input type="text">  </td>
        </div>
    </tr>

    <tr>
        <th>2:00 - 2:30</td>
        
            <td> <input type="text"> </td>
            <td> <input type="text"> </td>
            <td ><input type="text">  </td>
            <td> <input type="text">  </td>
            <td> <input type="text">  </td>
            <td> <input type="text">  </td>
        </div>
    </tr>

    <tr>
        <th>2:30 - 3:00</td>
        
            <td> <input type="text"> </td>
            <td> <input type="text"> </td>
            <td ><input type="text">  </td>
            <td> <input type="text">  </td>
            <td> <input type="text">  </td>
            <td> <input type="text">  </td>
        </div>
    </tr>

    <tr>
        <th>3:00 - 3:30</td>
        
            <td> <input type="text"> </td>
            <td> <input type="text"> </td>
            <td ><input type="text">  </td>
            <td> <input type="text">  </td>
            <td> <input type="text">  </td>
            <td> <input type="text">  </td>
        </div>
    </tr>

    <tr>
        <th>3:30 - 4:00</td>
        
            <td> <input type="text"> </td>
            <td> <input type="text"> </td>
            <td ><input type="text">  </td>
            <td> <input type="text">  </td>
            <td> <input type="text">  </td>
            <td> <input type="text">  </td>
        </div>
    </tr>

    <tr>
        <th>4:00 - 4:30</td>
        
            <td> <input type="text"> </td>
            <td> <input type="text"> </td>
            <td ><input type="text">  </td>
            <td> <input type="text">  </td>
            <td> <input type="text">  </td>
            <td> <input type="text">  </td>
        </div>
    </tr>

    <tr>
        <th>4:30 - 5:00</td>
        
            <td> <input type="text"> </td>
            <td> <input type="text"> </td>
            <td ><input type="text">  </td>
            <td> <input type="text">  </td>
            <td> <input type="text">  </td>
            <td> <input type="text">  </td>
        </div>
    </tr>

    <tr>
        <th>5:00 - 5:30</td>
        
            <td> <input type="text"> </td>
            <td> <input type="text"> </td>
            <td ><input type="text">  </td>
            <td> <input type="text">  </td>
            <td> <input type="text">  </td>
            <td> <input type="text">  </td>
        </div>
    </tr>

    <tr>
        <th>5:30 - 6:00</td>
        
            <td> <input type="text"> </td>
            <td> <input type="text"> </td>
            <td ><input type="text">  </td>
            <td> <input type="text">  </td>
            <td> <input type="text">  </td>
            <td> <input type="text">  </td>
        </div>
    </tr>

    <tr>
        <th>6:00 - 6:30</td>
        
            <td> <input type="text"> </td>
            <td> <input type="text"> </td>
            <td ><input type="text">  </td>
            <td> <input type="text">  </td>
            <td> <input type="text">  </td>
            <td> <input type="text">  </td>
        </div>
    </tr>

    <tr>
        <th>6:30 - 7:00</td>
        
            <td> <input type="text"> </td>
            <td> <input type="text"> </td>
            <td ><input type="text">  </td>
            <td> <input type="text">  </td>
            <td> <input type="text">  </td>
            <td> <input type="text">  </td>
        </div>
    </tr>

    <tr>
        <th>7:00 - 7:30</td>
        
            <td> <input type="text"> </td>
            <td> <input type="text"> </td>
            <td ><input type="text">  </td>
            <td> <input type="text">  </td>
            <td> <input type="text">  </td>
            <td> <input type="text">  </td>
        </div>
    </tr>

    <tr>
        <th>7:30 - 8:00</td>
        
            <td> <input type="text"> </td>
            <td> <input type="text"> </td>
            <td ><input type="text">  </td>
            <td> <input type="text">  </td>
            <td> <input type="text">  </td>
            <td> <input type="text">  </td>
        </div>
    </tr>

    <tr>
        <th>8:00 - 8:30</td>
        
            <td> <input type="text"> </td>
            <td> <input type="text"> </td>
            <td ><input type="text">  </td>
            <td> <input type="text">  </td>
            <td> <input type="text">  </td>
            <td> <input type="text">  </td>
        </div>
    </tr>

    <tr>
        <th>8:30 - 9:00</td>
        
            <td> <input type="text"> </td>
            <td> <input type="text"> </td>
            <td ><input type="text">  </td>
            <td> <input type="text">  </td>
            <td> <input type="text">  </td>
            <td> <input type="text">  </td>
        </div>
    </tr>

    <tr>
        <th>9:00 - 9:30</td>
        
            <td> <input type="text"> </td>
            <td> <input type="text"> </td>
            <td ><input type="text">  </td>
            <td> <input type="text">  </td>
            <td> <input type="text">  </td>
            <td> <input type="text">  </td>
        </div>
    </tr>

    <tr>
        <th>9:30 - 10:00</td>
        
            <td> <input type="text"> </td>
            <td> <input type="text"> </td>
            <td ><input type="text">  </td>
            <td> <input type="text">  </td>
            <td> <input type="text">  </td>
            <td> <input type="text">  </td>
        </div>
    </tr>

    <tr>
        <th>10:00 - 10:30</td>
        
            <td> <input type="text"> </td>
            <td> <input type="text"> </td>
            <td ><input type="text">  </td>
            <td> <input type="text">  </td>
            <td> <input type="text">  </td>
            <td> <input type="text">  </td>
        </div>
    </tr>

    <tr>
        <th>10:30 - 11:00</td>
        
            <td> <input type="text"> </td>
            <td> <input type="text"> </td>
            <td ><input type="text">  </td>
            <td> <input type="text">  </td>
            <td> <input type="text">  </td>
            <td> <input type="text">  </td>
        </div>
    </tr>

    <tr>
        <th>11:00 - 11:30</td>
        
            <td> <input type="text"> </td>
            <td> <input type="text"> </td>
            <td ><input type="text">  </td>
            <td> <input type="text">  </td>
            <td> <input type="text">  </td>
            <td> <input type="text">  </td>
        </div>
    </tr>

    <tr>
        <th>11:30 - 12:00</td>
        
            <td> <input type="text"> </td>
            <td> <input type="text"> </td>
            <td ><input type="text">  </td>
            <td> <input type="text">  </td>
            <td> <input type="text">  </td>
            <td> <input type="text">  </td>
        </div>
    </tr>

    <tr>
        <th>12:00 - 12:30</td>
        
            <td> <input type="text"> </td>
            <td> <input type="text"> </td>
            <td ><input type="text">  </td>
            <td> <input type="text">  </td>
            <td> <input type="text">  </td>
            <td> <input type="text">  </td>
        </div>
    </tr>

    
</table>


    <div id="buttons">
        <button class="moviebutton"><span><b>John Wick 3</b></span></button>

        <button class="moviebutton"><span><b>Avengers 6</b></span></button>

        <button class="moviebutton"><span><b>Batman</b></span></button>

        <button class="moviebutton"><span><b>Lego Movie</b></span></button>

        <button class="moviebutton"><span><b>Titanic</b></span></button>

        <button class="moviebutton"><span><b>Logan</b></span></button>

        <button class="moviebutton"><span><b>Indiana Jones</b></span></button>

        <button class="moviebutton"><span><b>Toy Story 6</b></span></button>

        <button class="moviebutton"><span><b>Star Wars</b></span></button>

       

        <button class="button">Save  </button>



        </div>
        
    



</body>

</html>