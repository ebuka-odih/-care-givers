<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>New Donation Received</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f7f7f7; margin: 0; padding: 20px;">
  <table width="100%" cellpadding="0" cellspacing="0" style="max-width: 600px; margin: auto; background-color: #ffffff; border-radius: 8px; overflow: hidden;">
    <tr>
      <td style="background-color: #ffc107; padding: 20px; text-align: center;">
        <h2 style="margin: 0; color: #333;">🎉 New Donation Received</h2>
      </td>
    </tr>

    <tr>
      <td style="padding: 20px;">
        <p>Dear Admin,</p>
        <p>You have received a new donation via the RoyalCareHome website. Below are the details:</p>

        <table cellpadding="5" cellspacing="0" width="100%" style="border-collapse: collapse; margin-top: 15px;">
          <tr>
            <td style="background-color: #f1f1f1; width: 30%;"><strong>Name:</strong></td>
            <td>{{ $data->name }}</td>
          </tr>
          <tr>
            <td style="background-color: #f1f1f1;"><strong>Email:</strong></td>
            <td>{{ $data->email }}</td>
          </tr>
          <tr>
            <td style="background-color: #f1f1f1;"><strong>Cause:</strong></td>
            <td>{{ ucfirst($data->cause) }}</td>
          </tr>
          <tr>
            <td style="background-color: #f1f1f1;"><strong>Amount:</strong></td>
            <td><strong>$ {{ number_format($data->amount, 2) }}</strong></td>
          </tr>
        </table>

        <p style="margin-top: 20px;">Thank you for being part of this impact.</p>
        <p style="color: #888; font-size: 14px;">— RoyalCareHome Notification System</p>
      </td>
    </tr>
  </table>
</body>
</html>
