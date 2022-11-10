<html lang="en">
  
  <head>
	  <meta charset="UTF-8">
	  <title>User Details</title>
	
	  <!-- INCLUDING JQUERY-->
	  <script src=
  "https://code.jquery.com/jquery-3.5.1.js">
	  </script>
	
	  <!-- CSS FOR STYLING THE PAGE -->
	  <style>
		  table {
			  margin: 0 auto;
			  font-size: large;
			  border: 1px solid black;
		  }
	
		  h1 {
			  text-align: center;
			  color: #006600;
			  font-size: xx-large;
			  font-family: 'Gill Sans', 
				  'Gill Sans MT', ' Calibri', 
				  'Trebuchet MS', 'sans-serif';
		  }
	
		  td {
			  background-color: #E4F5D4;
			  border: 1px solid black;
		  }
	
		  th,
		  td {
			  font-weight: bold;
			  border: 1px solid black;
			  padding: 10px;
			  text-align: center;
		  }
	
		  td {
			  font-weight: lighter;
		  }
	  </style>
  </head>
	
  <body>
	  <section>
		  <h1>User Details</h1>
	
		  <!-- TABLE CONSTRUCTION-->
		  <table id='table'>
			  <!-- HEADING FORMATION -->
			  <tr>
				  <th>ID</th>
				  <th>Name</th>
				  <th>Reg_No</th>
				  <th>Phone Number</th>

			  </tr>
	
			  <script>
				  $(document).ready(function () {
	
					  // FETCHING DATA FROM JSON FILE
					  $.getJSON("data.json", 
							  function (data) {
						  var student = '';
	
						  // ITERATING THROUGH OBJECTS
						  $.each(data, function (key, value) {
	
							  //CONSTRUCTION OF ROWS HAVING
							  // DATA FROM JSON OBJECT
							  student += '<tr>';
							  student += '<td>' + 
								  value.id + '</td>';
	
							  student += '<td>' + 
								  value.Name + '</td>';
	
							  student += '<td>' + 
								  value.Reg_No + '</td>';

							  student += '<td>' + 
							       value.Phone_Number + '</td>';
	
							  student += '</tr>';
						  });
							
						  //INSERTING ROWS INTO TABLE 
						  $('#table').append(student);
					  });
				  });
			  </script>
	  </section>
  </body>
	
  </html>