<x-mail::message>
    # New Contact Form Submission

    **Name:** {{ $data['name'] }}
    **Email:** {{ $data['email'] }}

    **Message:**
    {{ $data['message'] }}

    <x-mail::button :url="url('/')">
        Visit Site
    </x-mail::button>

    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>