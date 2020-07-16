<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Customers</title>
	<link rel="stylesheet" href="">
	<style>
		table {
		  font-family: arial, sans-serif;
		  border-collapse: collapse;
		  width: 100%;
		}

		td, th {
		  border: 1px solid #dddddd;
		  text-align: left;
		  padding: 8px;
		}

		tr:nth-child(even) {
		  background-color: #dddddd;
		}
	</style>
</head>
<body>
<div class="row mb-2">
	<table>
			<tr>
				<th> <h1>customerName</h1> </th>
				<th> <h1>phone       </h1> </th>
				<th> <h1>city        </h1> </th>
				<th> <h1>country     </h1> </th>
			</tr>
			@foreach ($Customers as $Customer)
			<tr>
				<th> {{ $Customer->customerName }} </th>
				<th> {{ $Customer->phone }} </th>
				<th> {{ $Customer->city }} </th>
				<th> {{ $Customer->country }} </th>
			</tr>
			@endforeach
	</table>
	{{ $Customers->links() }}
</div>
</body>
</html>
