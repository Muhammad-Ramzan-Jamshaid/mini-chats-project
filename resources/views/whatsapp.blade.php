<form action="{{ route('whatsapp.send') }}" method="POST">
    @csrf
    <input type="text" name="phone" placeholder="Recipient phone ">
    <input type="text" name="message" placeholder="Your message">
    <button type="submit">Send WhatsApp</button>
</form>
