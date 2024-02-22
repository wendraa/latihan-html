<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $title;?></title>
	<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  border: 1px solid #ddd;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}
</style>
</head>
<body>
<h1>This Is The Contents</h1>
<h2><?php echo $content;?></h2>
<div style="overflow-x: auto;">
  <table>
    <tr>
   		<th>No.</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Handle</th>
    </tr>
    <tr>
      <td>1.</td>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <td>2.</td>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <td>3.</td>
      <td>Lary</td>
      <td>The Bird</td>
      <td>@twitter</td>
    </tr>
  </table>
</div>

</body>
</html>