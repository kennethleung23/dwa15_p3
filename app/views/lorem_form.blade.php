{{ Form::open(array('url' => 'lorem', 
					'method' => 'POST')); }} 

	{{ Form::label('num_paragraphs', 'Number of paragraphs:'); }} 

	{{ Form::text('num_paragraphs',
	              isset($num_paragraphs)? $num_paragraphs:'10',
	              array('id' => 'num_paragraphs',
	                    'pattern' => '[0-9]{1,2}',
	                    'size' => '5')); }} 

	<i>(1 to 99)<i><br><br>

	{{ Form::submit('Generate') }} 
{{ Form::close(); }}