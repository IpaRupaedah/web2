@extends('templates.index')
@section('content')
<article>
<form method="post">
<table width="60%" align="center">
<tr>
<th align ="center" colspan="2">LOGIN<a href="daftar.php">-daftar</a></th>
</tr>
<tr>
<td>Username</td>
<td><input type="text" name="username" size="80"></td>
</tr>
<tr>
	<td>Password</td>
<td><input type="password" name="password" size="80"></td>
</tr>	
<tr>
<td colspan="2" align="right"><a href="/home" type="button">Login</a> <input type="submit" value="batal" name="batal"></td>
</tr></table>
</form>  
	</article>
</div>
@stop