@component('mail::message')
# Your Package with Tracking Number {{ $invoice->invoice_no }} has been delivered.
<br>
Here is a short description of your delivery:
------------------------------------------------------
<table>
    <tbody>
        <tr>
            <td width="250px">Tracking/Batch Number</td>
            <td><strong>#{{ $invoice->invoice_no }}</strong></td>
        </tr>
        <tr>
            <td width="250px">Sender's Details</td>
            <td><strong>{!! nl2br(e($invoice->sender_details)) !!}</strong></td>
        </tr>
        <tr>
            <td>Receiver's Details</td>
            <td><strong>{!! nl2br(e($invoice->receiver_details)) !!}</strong></td>
        </tr>
        <tr>
            <td>Origin</td>
            <td><strong>{{ $invoice->origin }}</strong></td>
        </tr>
        <tr>
            <td>Destination</td>
            <td><strong>{{ $invoice->destination }}</strong></td>
        </tr>
    </tbody>
</table>
<br>
Please contact {{ config('app.name') }} ({{ config('app.short_name') }}) support, for more information on how you can
receive it.

<br>
Thanks,<br>
{{ config('app.short_name') }}
@endcomponent
