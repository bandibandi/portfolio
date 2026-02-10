<x-mail::message>
# New Contact Form Submission

<x-mail::table>
| Field   | Details            |
|:--------|:-------------------|
| **Name**  | {{ $name }}      |
| **Email** | {{ $email }}     |
</x-mail::table>

## Message

{{ $contactMessage }}

<x-mail::button :url="'mailto:' . $email">
Reply to {{ $name }}
</x-mail::button>

Sent from [andrashorvath.dev]({{ url('/') }})
</x-mail::message>
