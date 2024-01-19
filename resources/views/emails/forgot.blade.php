{{-- <x-mail::message>
# Order Shipped

Your order has been shipped!

<x-mail::button :url="$url">
View Order
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message> --}}

@component('mail::message')
    Hello {{$user->name}},

    We understand it happends


    @component('mail::button', ['url' => url('reset/'.$user->remember_token)])
        Reset Your Password
    @endcomponent

   In case you have any issues recovering your password, please contact us.</p> <br/>
   Thanks
    {{config('app.name')}}
@endcomponent
