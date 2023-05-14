<!DOCTYPE html>
<html>

<head>
    <title>{{ $subject }}</title>
</head>

<body>
    <h1>{{ $fromName }}</h1>
    <p>{{ $body }}</p>
    <p>{{ $code }}</p>

    <div style="font-family: Arial, sans-serif; padding: 20px; background-color: #f5f5f5;">
        <div style="max-width: 600px; margin: 0 auto; background-color: white; border-radius: 10px; padding: 20px;">
            <h1 style="text-align: center; color: #3d3d3d; margin-bottom: 40px;">Welcome to Our App!</h1>
            {{-- <p style="font-size: 18px; color: #3d3d3d;">Dear ${nom} ${prenom},</p> --}}
            <p style="font-size: 18px; color: #3d3d3d;">Your new account has been successfully created in our App as a(n)
                {{-- <strong>${role}</strong>.</p> --}}
            <p style="font-size: 18px; color: #3d3d3d;">Please keep your password in a safe place. You can change your
                password anytime by logging into your account.</p>
            {{-- <p style="font-size: 18px; color: #3d3d3d;">Here is your password: <strong>${password}</strong></p> --}}
            <div style="text-align: center; margin-top: 40px;">
                <a href="https://www.google.com/"
                    style="display: inline-block; background-color: #0066ff; color: white; font-size: 18px; padding: 12px 30px; text-decoration: none; border-radius: 30px;">Check
                    out our App</a>
            </div>
            <p style="font-size: 16px; color: #666; margin-top: 40px;">Thank you for using our App!</p>
        </div>
    </div>
</body>

</html>
