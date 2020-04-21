@csrf
@php $input = 'email'; @endphp
<div class="row">
	<div class="col-md-12">
		<div class="form-group">
			<label for="email">Email Address :</label>
				<input type="{{$input}}" id='{{$input}}' class="form-control" placeholder="Email" name="{{$input}}" value="{{isset($row) ? $row->{$input} : '' }}" >			
				@error($input)
					<br>
                	<span class="alert alert-danger" role="alert">
                		<strong>{{ $errors->first($input) }}</strong>
                	</span>
                @enderror
		</div>
	</div>
</div>
@php $input = 'password'; @endphp
<div class="row">
	<div class="col-md-12">
		<div class="form-group">
			<label for="{{$input}}">Password :</label>
			<input type="{{$input}}" id="{{$input}}" class="form-control" placeholder="password" name="{{$input}}">
			@error('password')
				<br>
                <span class="alert alert-danger" role="alert">
                	<strong>{{ $errors->first($input) }}</strong>
                </span>
            @enderror
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="form-group">
			<label for="re-password">Re-Password :</label>
			<input type="password" class="form-control" id="re-password" placeholder="re_password" name="password_confirmation">
		</div>
	</div>
</div>
				<!--
                <div class='row'>
                	<div class='col-md-9'>
                    @if(count($errors) > 0)
                    	<div class="col-sm-10">
                        	@foreach($errors->all() as $error)                
								<p class='alert alert-danger'>{{ucwords($error)}}</p>
                            @endforeach
                        </div>    
                    @endif
                    @if(\Session::has('success'))
                    	<div class=' col-sm-10'>
                    		<p class='alert alert-success'>{{\Session::get('success')}}</p>
                    	</div>
                    @endif
                    </div>
                </div>
				-->