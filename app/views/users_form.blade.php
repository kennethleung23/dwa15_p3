{{ Form::open(array('url' => 'users', 'method' => 'POST')); }} 
	{{ Form::label('num_users', 'Number of users:'); }} 
	{{ Form::text('num_users',
	              isset($num_users)? $num_users:'10',
	              array('id' => 'num_users',
	                    'pattern' => '[0-9]{1,2}',
	                    'size' => '5')); }} 

	<i>(1 to 99)</i><br>
	
	{{ Form::checkbox('include_email', true, Input::get('include_email') || Input::get('include_email')==null) }} 
	Include email<br>
	{{ Form::checkbox('include_pass', true, Input::get('include_pass')) }} 
	Include password<br>
	{{ Form::checkbox('include_loc', true, Input::get('include_loc')) }} 
	Include location<br>
	{{ Form::checkbox('include_dob', true, Input::get('include_dob')) }} 
	Include date of birth

	<br><br>
	{{ Form::submit('Generate') }} 
{{ Form::close(); }}