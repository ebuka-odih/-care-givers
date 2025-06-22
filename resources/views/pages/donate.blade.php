<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Donate | RoyalCareHome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .donation-box {
            max-width: 500px;
            margin: 80px auto;
            padding: 30px;
            background: #ffffff;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .donation-box h3 {
            margin-bottom: 20px;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="donation-box">
    <h3>Make a Donation</h3>
    <p class="text-muted">Please enter your donation information.</p>

    <form action="{{ route('donate.store') }}" method="POST">
        @csrf
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        <div class="mb-3">
            <label for="donationAmount" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="donationAmount" placeholder="Your Name" required
                   min="1">
        </div>
        <div class="mb-3">
            <label for="donationAmount" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="donationAmount" placeholder="Your Email" required
                   min="1">
        </div>
        <div class="mb-3">
            <label for="causeSelect" class="form-label">Select a Cause</label>
            <select name="cause" class="form-select" id="causeSelect" required>
                <option selected disabled value="">Choose...</option>
                <option value="school">Build a School for Children</option>
                <option value="water">Clean Water for Rural Areas</option>
                <option value="food">Feed the Hungry Program</option>
                <option value="healthcare">Healthcare Outreach</option>
                <option value="elderly">Support for the Elderly</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="donationAmount" class="form-label">Donation Amount ($)</label>
            <input type="number" name="amount" class="form-control" id="donationAmount" placeholder="e.g. 50" required
                   min="1">
        </div>

        <div class="d-grid">
            <button type="submit" class="btn btn-warning">Donate Now</button>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
