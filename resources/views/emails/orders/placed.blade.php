@component('mail::message')
# Order Received

Thank you for your order.

**Order ID:** {{ $order->id }}

**Order Email:** {{ $order->billing_email }}

**Order Name:** {{ $order->billing_name }}

**Order Total:** {{ number_format($order->billing_total / 100, 0, ',', ' ') }}tg

**Items Ordered**

@foreach ($order->products as $product)
Name: {{ $product->name }} <br>
Price: {{ number_format($product->price / 100, 0, ',', ' ')}}tg<br>
Quantity: {{ $product->pivot->quantity }} <br>
@endforeach

You can get further details about your order by logging into our website.

@component('mail::button', ['url' => config('app.url'), 'color' => 'green'])
Go to Website
@endcomponent

Thank you again for choosing us.

Regards,<br>
SDU SHOP
@endcomponent
