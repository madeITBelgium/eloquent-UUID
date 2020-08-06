<?php

namespace MadeITBelgium\Uuid;

use Illuminate\Support\Str;

use Illuminate\Auth\Authenticatable as BaseAuthenticatable;
use Illuminate\Auth\MustVerifyEmail;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Foundation\Auth\Access\Authorizable;


class Authenticatable extends Model implements
    AuthenticatableContract,
    AuthorizableContract,
    CanResetPasswordContract
{
    use BaseAuthenticatable;
    use Authorizable;
    use CanResetPassword;
    use MustVerifyEmail;
}