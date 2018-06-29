<!DOCTYPE html>
<html>
<head>
	<title>Reporte de usuarios</title>
	<style>

        .col
        {
            text-align:center;
            width: 227px;
            margin-left: 5px;
            height: 735px;
            display: inline-block;
            border: solid 2px burlywood;
        }
        
        th, td {
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {background-color: #f2f2f2}
        #header{
            margin-left: 50px;
        }
        #body{
            margin-left: 50px;
        }
        #footer
        {
            margin-left:500px;
        }
        #table
        {
            margin-top:20px;
        }
    </style>
</head>
<body>
	<div class="container">
    	<div class="row">
    		<div class="col-md-12">
    			<h1>Reporte de usuarios</h1>
    			<table class="table table-striped">
    				<thead>
    					<tr>
    						<td>#ID</td>
	    					<td>NAME</td>
	    					<td>E-MAIL</td>
	    					<td>FECHA DE CREACIÓN</td>
    					</tr>
    				</thead>

    				<tbody>
    					@foreach($users as $u)
    					<tr>
    						<td>{{ $u->id }}</td>
    						<td>{{ $u->name }}</td>
    						<td>{{ $u->email }}</td>
    						<td>{{ $u->created_at }}</td>
    					</tr>
    					@endforeach
    				</tbody>
    			</table>
    		</div>
    	</div>
    </div>
</body>
</html>