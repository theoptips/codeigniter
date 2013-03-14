<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<thead>
			<tr>
				<th>USER ID</th>
				<th>EMAIL</th>
			</tr>
		</thead>
		<tbody>
<?php foreach ($users as $user) 
{ ?>
			<tr>
				<td><?php echo $user->id;?></td>
				<td><?php echo $user->email;?></td>
			</tr>
<?php } ?>
		</tbody>
	</table>
</body>
</html>