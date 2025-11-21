<h2>New Contact Message Received</h2>

<p><strong>Name:</strong> {{ $formData['name'] }}</p>
<p><strong>Email:</strong> {{ $formData['email'] }}</p>
<p><strong>Company:</strong> {{ $formData['company'] ?? 'N/A' }}</p>
<p><strong>Service:</strong> {{ $formData['service'] ?? 'N/A' }}</p>
<p><strong>Budget:</strong> {{ $formData['budget'] ?? 'N/A' }}</p>
<p><strong>Message:</strong></p>
<p>{{ $formData['message'] }}</p>

<hr>
<p>📨 Sent from NRB Software Contact Form</p>
