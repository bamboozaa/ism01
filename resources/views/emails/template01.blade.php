<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Email Template</title>
</head>

<body>
    <table width="100%" cellpadding="0" cellspacing="0" border="0">
        <tr>
            <td align="center">
                <table width="600" cellpadding="0" cellspacing="0" border="0">
                    <body style="font-family: 'Poppins', Arial, sans-serif">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td align="center" style="padding: 20px;">
                                    <table class="content" width="600" border="0" cellspacing="0" cellpadding="0" style="border-collapse: collapse; border: 1px solid #cccccc;">
                                        <!-- Header -->
                                        <tr>
                                            <td class="header" style="background-color: #345C72; padding: 40px; text-align: center; color: white; font-size: 24px;">
                                                {{ $testMailData['title'] }}
                                            </td>
                                        </tr>

                                        <!-- Body -->
                                        <tr>
                                            <td class="body" style="padding: 40px; text-align: left; font-size: 16px; line-height: 1.6;">
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <th align="right"><h3>From </h3></th>
                                                            <td>{{ $testMailData['name'] }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th align="right"><h3>Email </h3></th>
                                                            <td>{{ $testMailData['email'] }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th align="right"><h3>Direct Message</h3></th>
                                                            <td>{{ $testMailData['message'] }}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>

                                        <!-- Call to action Button -->
                                        <tr>
                                            <td style="padding: 0px 40px 0px 40px; text-align: center;">
                                                <!-- CTA Button -->
                                                <table cellspacing="0" cellpadding="0" style="margin: auto;">
                                                    <tr>
                                                        {{-- <td align="center" style="background-color: #345C72; padding: 10px 20px; border-radius: 5px;">
                                                            <a href="https://admissionism.utcc.ac.th/enquiries/{{ $testMailData['id'] }}" target="_blank" style="color: #ffffff; text-decoration: none; font-weight: bold;">Click here to the detail.</a>
                                                        </td> --}}
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="body" style="padding: 40px; text-align: left; font-size: 16px; line-height: 1.6;">
                                                <a href="https://admissionism.utcc.ac.th/enquiries">>> For all Enquiries <<</a>
                                            </td>
                                        </tr>
                                        <!-- Footer -->
                                        <tr>
                                            <td class="footer" style="background-color: #333333; padding: 40px; text-align: center; color: white; font-size: 14px;">
                                            Copyright &copy; 2024 | UTCC iSM
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </body>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>
