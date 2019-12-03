subject = "Your Reservation Update - {reservation_number}"
==
Reservation Update!

Your reservation {reservation_number} at {location_name} has been updated to the following status: {status_name}

The comments for your reservation are:
{status_comment}

To view your reservation progress, click the link below
{reservation_view_url}
==
Hi {first_name} {last_name},

Your reservation **{reservation_number}** at **{location_name}** has been updated to the following status: <br>
**{status_name}**

The comments for your reservation are: <br>
{status_comment}
<!-- BODY -->
<table class="body-wrap">
    <tr>
        <td></td>
        <td class="container" bgcolor="#FFFFFF">
            <div class="content">
                <table>
                    <tr>
                        <td>
                            <h3>Reservation Update!</h3>
                            <p>Your reservation <strong>{reservation_number}</strong> at
                                <strong>{location_name}</strong> has been updated to the following status: </strong>{status_name}</strong>
                            </p>
                            <p><strong>The comments for your reservation are:</strong><br>{status_comment}</p>
                            <p><a href="{reservation_view_url}">Click here</a> to view your reservation status.</p>
                        </td>
                    </tr>
                </table>
            </div><!-- /content -->
        </td>
        <td></td>
    </tr>
</table><!-- /BODY -->
@partial('button', ['url' => '{reservation_view_url}', 'type' => 'primary'])
View your reservation status
@endpartial
