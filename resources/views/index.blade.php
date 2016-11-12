<div class= "row">
	<form action="{{ action('LinkController@store') }}" method="post">
		 {{ csrf_field() }}
		<div>
			<label for="">ingrese un link largo</label>
			<input type="text" name="link_large" required>
			<button type="submit">Achicar link</button>
		</div>

	</form>

	
</div>
<br><br>
<div class= "row">
	<table >
	    <thead>
	     	<tr>
	            <th >Id</th>
	            <th >Url largo</th>
	            <th >Url corto</th>
	            <th >N° visitas</th>
	        </tr>
	    </thead>

	    <tbody>

	    	@foreach ($links as $link)
	        <tr>
	            <td>{{ $link->id_link}}</td>
	            <td>{{ $link->url_large}}</td>
	            <td>{{ $link->url_short}}</td>
	            <td>{{ count($link->ips) }}</td>	            

	        </tr>   

	        @endforeach

	    </tbody>
	</table>

</div>