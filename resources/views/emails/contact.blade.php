<x-mail::message>
# Hello, you have received an enquiry!

<h3>Name: {{ $data['name'] }}</h3>
<h3>Email: {{ $data['email'] }}</h3>
<h3>Subject: {{ $data['subject'] }}</h3>
<h3>Message: {{ $data['query'] }}</h3>


Thanks,
{{ config('app.name') }}
</x-mail::message>
