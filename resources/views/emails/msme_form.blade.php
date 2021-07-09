<!DOCTYPE html>
<html lang=&quot;en-US&quot;>

<head>
    <meta charset=&quot;utf-8&quot;>
</head>

<body style="font-family:{{ EMAIL_FONT }} !important">
    <div
        style="background:#f9f9f9;color:#373737;font-size:17px;line-height:24px;max-width:100%;width:100%!important;margin:0 auto;padding:0">
        <table
            style="border-collapse:collapse;line-height:24px;margin:0;padding:0;width:100%;font-size:17px;color:#373737;background:#f9f9f9"
            width="100%" cellspacing="0" cellpadding="0" border="0">
            <tbody>
                <tr>
                    <td style="border-collapse:collapse" valign="top">
                        <table style="border-collapse:collapse" width="100%" cellspacing="0" cellpadding="0" border="0">
                            <tbody>
                                <tr>
                                    <td style="border-collapse:collapse;padding:20px 16px 12px" valign="bottom">
                                        <div style="text-align:center">
                                            <a href="{{ SITE_URL }}"
                                                style="color:{{ SECONDARY_COLOR }};font-weight:bold;text-decoration:none;word-break:break-word"
                                                target="_blank">
                                                <img src="{{ SITE_LOGO }}"
                                                    style="outline:none;text-decoration:none;border:none" width="100">
                                                <br><label
                                                    style="font-family:{{ EMAIL_FONT }} !important">{{SITE_NAME}}</label>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="border-collapse:collapse" valign="top">
                        <table
                            style="border-collapse:collapse;font-family:{{ EMAIL_FONT }} !important;background:white;border-radius:0.5rem;margin-bottom:1rem"
                            cellspacing="0" cellpadding="32" border="0" align="center">
                            <tbody>
                                <tr>
                                    <td style="border-collapse:collapse;padding: 0px" width="600" valign="top">
                                        <div style="max-width:600px;margin:0 auto">
                                            <h2
                                                style="font-family:{{ EMAIL_FONT }} !important;color:#3a3b3c;line-height:30px;margin-bottom:12px;margin:0 auto 0.75rem;font-size:1.8rem;text-align:center">
                                            </h2>
                                            <p
                                                style="font-family:{{ EMAIL_FONT }} !important;font-size:17px;line-height:24px;margin:0 0 16px;padding: 0 20px">
                                                <b>Hi {{ CONTACT_NAME }},</b><br><br>
                                            </p>
                                            <p
                                                style="font-family:{{ EMAIL_FONT }} !important;font-size:15px;line-height:24px;margin:0 0 5px;padding: 0 20px;color:#214489">
                                                Name
                                            </p>
                                            <p
                                                style="font-family:{{ EMAIL_FONT }} !important;font-size:17px;line-height:24px;margin:0 0 5px;padding: 0 20px">
                                                {{ $contact_name }}
                                            </p>
                                            <hr style="border:1px dashed #ccc">

                                            <p
                                                style="font-family:{{ EMAIL_FONT }} !important;font-size:15px;line-height:24px;margin:0 0 5px;padding: 0 20px;color:#214489">
                                                Email
                                            </p>
                                            <p
                                                style="font-family:{{ EMAIL_FONT }} !important;font-size:17px;line-height:24px;margin:0 0 5px;padding: 0 20px">
                                                {{ $contact_email }}
                                            </p>

                                            <p
                                                style="font-family:{{ EMAIL_FONT }} !important;font-size:15px;line-height:24px;margin:0 0 5px;padding: 0 20px;color:#214489">
                                                contact
                                            </p>
                                            <p
                                                style="font-family:{{ EMAIL_FONT }} !important;font-size:17px;line-height:24px;margin:0 0 5px;padding: 0 20px">
                                                {{ $contact_no}}
                                            </p>
                                            <hr style="border:1px dashed #ccc">
                                            @if($contact_message!="")
                                            <p
                                                style="font-family:{{ EMAIL_FONT }} !important;font-size:15px;line-height:24px;margin:0 0 5px;padding: 0 20px;color:#214489">
                                                Company
                                            </p>
                                            <p
                                                style="font-family:{{ EMAIL_FONT }} !important;font-size:17px;line-height:24px;margin:0 0 5px;padding: 0 20px">
                                                {{ $contact_message }}
                                            </p>
                                            <hr style="border:1px dashed #ccc">
                                            @endif
                                            <br><br>

                                            <p
                                                style="font-size:17px;line-height:24px;margin:0 0 16px;padding: 0 20px;font-family:{{ EMAIL_FONT }} !important">
                                                Thanks,<br>
                                                {{SITE_NAME}} Team
                                            </p>

                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="border-collapse:collapse">
                        <table style="border-collapse:collapse;margin-top:1rem;background:white;color:#989ea6"
                            width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
                            <tbody>
                                <tr>
                                </tr>
                                <tr>
                                    <td style="border-collapse:collapse;padding:16px 8px 24px" valign="top"
                                        align="center">
                                        <div style="max-width:600px;margin:0 auto">
                                            <p style="font-size:12px;line-height:20px;margin:0 0 16px;margin-top:16px">
                                                <span style="max-width:380px;display:block">
                                                    This email is sent to Team Owners and Admins of active teams.
                                                </span>
                                            </p>
                                            <p style="font-size:12px;line-height:20px;margin:0 0 16px;margin-top:16px">

                                                Made by <a href=" {{ SITE_URL }} "
                                                    style="color:#439fe0;font-weight:bold;text-decoration:none;word-break:break-word"
                                                    target="_blank">{{SITE_NAME}}</a>
                                                &nbsp;•&nbsp;
                                            </p>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="yj6qo"></div>
    <div class="adL">

    </div>
    </div>
    </div>
</body>

</html>