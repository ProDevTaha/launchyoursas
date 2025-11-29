@component('mail::message')
# New Form Submission Received

Dear Team,

You have received a new submission through the contact form. Below are the details:

@component('mail::table')
| Field      | Information           |
|------------|-----------------------|
| **Full Name** | {{ $data['fullname'] ?? 'N/A' }} |
| **Email**     | {{ $data['email'] ?? 'N/A' }}    |
| **Phone**     | {{ $data['phone'] ?? 'N/A' }}    |
@endcomponent

Please follow up accordingly.

---

**Contact Us:**  
If you have any questions or need assistance, please contact us at:  
[microdigitalesav@gmail.com](mailto:microdigitalesav@gmail.com)

Thanks,<br>
{{ config('app.name') }} Team
@endcomponent