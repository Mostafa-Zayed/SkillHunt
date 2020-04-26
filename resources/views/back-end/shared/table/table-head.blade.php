<thead>
	<tr>
    	@foreach($fields as $field)
        	<td {{$center}}>{{strtoupper($field)}}</td>
		@endforeach
	</tr>
</thead>