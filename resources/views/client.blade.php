<!DOCTYPE html>
<html lang="en">
 <head>
 	<meta  charset="UTF-8">
</head>
 <body>
 	<form action="{{url('/oauth/clients')}}" method="POST">
 		<p>
 			<input type=" type
 			text" name="name"/>

 		</p>
 		<p>
 			<input type="text" name="redirect">
 		</p>
 		<input type="submit" name="send" value="Enviar">
 		
 		  {{ csrf_field() }}
 	</form>
    <table border="1">
     <tbody>
     	<tr>

     		
     		<td>Id</td>
     		<td>Nome</td>
     		<td>Redirect</td>
     		<td>Secret</td>
     	</tr>
     	@foreach($clients as $client)
         <tr>
         	<td>{{ $client->id }}</td>
         	<td>{{ $client->name }}</td>
         	<td>{{ $client->redirect }}</td>
         	<td>{{ $client->secret }}</td>
         </tr>
     	@endforeach
     </tbody>
    </table>
 </body>