<form action="{{ url('/register') }}" method="POST">
	@csrf

	<input type="email" name="email">
	<input type="text" name="password">

	<button type="submit">REGISTER</button>

</form>