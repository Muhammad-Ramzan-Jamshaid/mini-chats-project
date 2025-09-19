<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send WhatsApp Message</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f8f9fa;
        }
        .whatsapp-form-container {
            max-width: 500px;
            margin: 80px auto;
            padding: 30px;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(0,0,0,0.1);
        }
        .whatsapp-form-container h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #25D366; /* WhatsApp green */
        }
        .form-control:focus {
            box-shadow: none;
            border-color: #25D366;
        }
        .btn-whatsapp {
            background-color: #25D366;
            color: #fff;
            font-weight: bold;
            transition: 0.3s;
        }
        .btn-whatsapp:hover {
            background-color: #1ebe57;
            color: #fff;
        }
    </style>
</head>
<body>

<div class="whatsapp-form-container">
    <h2>Send WhatsApp Message</h2>
    <form action="{{ route('whatsapp.send') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="phone" class="form-label">Recipient Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone number" required>
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" name="message" rows="4" placeholder="Type your message" required></textarea>
        </div>
        <div class="d-grid">
            <button type="submit" class="btn btn-whatsapp btn-lg">Send WhatsApp</button>
        </div>
    </form>
</div>

<!-- Bootstrap JS (optional, for interactions) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
