<h1>Create password for register account EC</h1>
<form action="{{ action('HomeController@confirmregister') }}" method="POST">
    {{ csrf_field()}}
    <div class="form-group">
        <label for="">Password</label>
        <input type="password" class="form-control" id="password" name="password"  placeholder="Create new password">
        <input type="hidden" name="id" value="{{ $id }}">
        <input type="hidden" name="token" value="{{ $token }}">
    </div>
    <div class="form-group">
        <label for="">Confirm Password</label>
        <input type="password" class="form-control" id="confirm" name="password_confirmation" placeholder="Confirm password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@if(count($errors) > 0)
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            {{ $error }}
        @endforeach
    </div>
@endif