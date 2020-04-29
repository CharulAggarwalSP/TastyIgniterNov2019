subject = "{site_name} reservation confirmation - {reservation_number}"
==
Hi {first_name} {last_name},

Thank you for your reservation!

Your reservation {reservation_number} at {location_name} has been booked for {reservation_guest_no} person(s) on {reservation_date} at {reservation_time}.

Thanks for reserving with us online!
==
Hi <?= ucwords($first_name).' '.ucwords($last_name) ?>,

## Thank you for your reservation!

Your reservation **{reservation_number}** at {location_name} has been booked for {reservation_guest_no} person(s) on {reservation_date} at {reservation_time}.

If you have any questions please let us know by calling us on 0206164838

Thanks for reserving with us online!
