<x-mail::message>
# Hello, you have received an enquiry!

<h3>Name: {{ $data['name'] }}</h3>
<h3>Email: {{ $data['email'] }}</h3>
<h3>Subject: {{ $data['subject'] }}</h3>
<h3>Message: {{ $data['query'] }}</h3>


<x-mail::button :url="''">
    Dont Reply
</x-mail::button>

Thanks,
{{ config('app.name') }}
</x-mail::message>
