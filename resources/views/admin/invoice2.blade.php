<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Joining letter</title>
    </head>
    <body>
        <div class="invoice-box">
            <table cellpadding="0" cellspacing="0">
                <tr class="top" style="background-color: #f0f0f0;">
                    <td colspan="2">
                        <table>
                            <tr>
                                <td class="title">
                                    <img src="" style="width: 100%; max-width: 88px" />
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr class="information" style="background-color: #ccc;">
                    <td>Employee Id #:</td>
                    <td>Joining</td> 
                </tr>
                <tr class="details">
                    <td>{{ $invoiceData['employee'] }}</td>
                    <td>{{ $invoiceData['joining_date'] }}</td>
                </tr>
                <tr class="heading" style="background-color: #ccc;">
                    <td>Department</td>
                    <td>Designation</td>
                    <td>Salary</td>
                </tr>
                <tr class="details">
                    <td>{{ $invoiceData['department'] }}</td>
                    <td>{{ $invoiceData['designation'] }}</td>
                    <td>{{ $invoiceData['salary'] }}</td>
                </tr>
            </table>
        </div>
    </body>
</html>