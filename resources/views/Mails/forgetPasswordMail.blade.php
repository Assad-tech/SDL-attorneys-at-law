{{--
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Password Reset Link</title>
</head>

<body>
    <h1>Password Reset Link</h1>
    <h3>Dear {{ $data['fullname'] }},</h3>
    You can reset password from bellow link:
    <a href="{{ route('reset.password', $data['token']) }}">Reset Password</a>

</body>

</html> --}}


<html>

<body style="font-family: sans-serif;">
    <center style="width: 100%">
        <table align="center" cellspacing="0" cellpadding="0">
            <tbody style="font-size: 18px;">
                <tr>
                    <h1>Hi {{ $data['fullname'] }},</h1>
                </tr>
                <tr>
                    <p>We received a request to reset the password on your account.</p>
                </tr>
                <tr>
                    <p>Click the button below so it will redirects to the password reset page.</p>
                </tr>
                <tr style="height: 50px;"></tr>
                <tr>
                    <td>
                        <table cellspacing="0" cellpadding="0" align="center">
                            <tr>
                                <td style="text-align: center; border-radius: 8px; padding: 8px; width: 150px; height: 30px;"
                                    bgColor="#abde6d">
                                    <a style="color: white; text-decoration: none;" class="link"
                                        href="{{ route('reset.password', $data['token']) }}" target="_blank">
                                        Reset password
                                    </a>
                            </tr>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </center>
</body>

</html>