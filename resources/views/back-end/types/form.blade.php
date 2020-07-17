@csrf
@php $input = 'name'; @endphp
<div class="row">
	<div class="col-md-12">
		<div class="form-group">
			<label for="{{$input}}">{{ucfirst($input)}} :</label>
				<input type="text" id='{{$input}}' class="form-control" placeholder="{{$input}}" name="{{$input}}" value="{{isset($row) ? $row->{$input} : '' }}" >			
				@error($input)
					<br>
                	<span class="alert alert-danger" role="alert">
                		<strong>{{ $errors->first($input) }}</strong>
                	</span>
                @enderror
		</div>
	</div>
</div>
@php $input = 'icon'; @endphp
<div class="row">
	<div class="col-md-12">
		<div class="form-group">
			<label for="{{$input}}">{{ucfirst($input)}} :</label>
			<input type="{{$input}}" id="{{$input}}" class="form-control" placeholder="{{$input}}" name="{{$input}}" value="{{isset($row) ? $row->{$input} : '' }}">
			@error($input)
				<br>
                <span class="alert alert-danger" role="alert">
                	<strong>{{ $errors->first($input) }}</strong>
                </span>
            @enderror
		</div>
	</div>
</div>
@php $input = 'meta_keywords'; @endphp
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="{{$input}}">Meta Keywords :</label>
            <input type="{{$input}}" id="{{$input}}" class="form-control" placeholder="{{$input}}" name="{{$input}}" value="{{isset($row) ? $row->{$input} : '' }}">
            @error($input)
                <br>
                <span class="alert alert-danger" role="alert">
                    <strong>{{ $errors->first($input) }}</strong>
                </span>
            @enderror
        </div>
    </div>
</div>
@php $input = 'meta_describe'; @endphp
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="{{$input}}">Meta Describe :</label>
            <textarea name="{{$input}}" id="{{$input}}" cols="30" rows="5" class="form-control">
                {{ isset($row) ? $row->{$input} : ''}}
            </textarea>
            @error($input)
                <br>
                <span class="alert alert-danger" role="alert">
                    <strong>{{ $errors->first($input) }}</strong>
                </span>
            @enderror
        </div>
    </div>
</div>
