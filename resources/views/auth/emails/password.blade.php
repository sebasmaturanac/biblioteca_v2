Haga click aca para resetear su contraseña: <a href="{{ $link = url('password/reset', $token).'?email='.urlencode($user->getEmailForPasswordReset()) }}"> {{ $link }} </a>
