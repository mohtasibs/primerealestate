<x-mail::message>
# Hello, you have received an inquiry!

<h3>Name: {{ $data['name'] }}</h3>
<h3>Email: {{ $data['email'] }}</h3>
<h3>Phone Number: {{ $data['number'] }}</h3>
<h3>Subject: {{ $data['subject'] }}</h3>
<h3>Message: {{ $data['query'] }}</h3>

</x-mail::message>
