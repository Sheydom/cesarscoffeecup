<h2>New Enquiry</h2>

<p>
    <strong>Name:</strong>
    {{ $data['name'] }} {{ $data['lastName'] }}
</p>


<p>
    <strong>Phone:</strong>
    {{ $data['phone'] ?? "" }}
</p>

<p>
    <strong>Email:</strong>
    {{ $data['email'] }}
</p>

<p><strong>Type of Enquiry:</strong>
    {{ $data['typeOf'] ?? "" }}</p>

<p>
    <strong>Message:</strong>
    {{ $data['message'] }}
</p>
