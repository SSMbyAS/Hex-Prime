<?php
session_start();

if(!isset($_SESSION['user'])){
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard</title>

<style>
body {
    font-family: Arial;
    background: #f3f4f8;
    margin: 0;
}

/* Header */
.header {
    background: #fff;
    padding: 15px;
    font-size: 20px;
    font-weight: bold;
    color: #6c63ff;
    text-align: center;
}

/* Cards */
.card {
    background: #fff;
    margin: 10px;
    padding: 15px;
    border-radius: 12px;
    box-shadow: 0 0 5px rgba(0,0,0,0.1);
}

/* Icons */
.icons {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    padding: 10px;
}

.icon {
    background: #fff;
    padding: 10px;
    border-radius: 10px;
    width: 50px;
    text-align: center;
    box-shadow: 0 0 3px rgba(0,0,0,0.1);
}

/* Form */
input, select {
    width: 100%;
    padding: 10px;
    margin-top: 10px;
    border-radius: 8px;
    border: 1px solid #ddd;
}

button {
    width: 100%;
    padding: 12px;
    background: #6c63ff;
    color: #fff;
    border: none;
    border-radius: 8px;
    margin-top: 10px;
}
</style>

</head>

<body>

<div class="header">
ssmbyas Panel
</div>

<!-- Stats -->
<div class="card">
<h3>10973190</h3>
<p>Panel Orders</p>
</div>

<div class="card">
<h3>₹0.61</h3>
<p>Account Balance</p>
</div>

<div class="card">
<h3>₹4.08</h3>
<p>Spent Balance</p>
</div>

<!-- Icons -->
<div class="icons">
<div class="icon">📋</div>
<div class="icon">🎵</div>
<div class="icon">📸</div>
<div class="icon">▶️</div>
<div class="icon">📘</div>
<div class="icon">✈️</div>
<div class="icon">❌</div>
<div class="icon">💬</div>
</div>

<!-- Order Form -->
<div class="card">

<h3>New Order</h3>

<label>Category</label>
<select>
<option>TikTok Followers</option>
</select>

<label>Service</label>
<select>
<option>3344 - TikTok Followers</option>
</select>

<label>Description</label>
<p style="background:#f1f1f1;padding:10px;border-radius:8px;">
⚠️ Please Read the Description<br>
- Link: TikTok Username<br>
- Speed: Fast<br>
- Start: 0-10 Minutes<br>
</p>

<label>Link</label>
<input type="text" placeholder="Enter Link">

<label>Quantity</label>
<input type="number" placeholder="Enter Quantity">

<button>Submit Order</button>

</div>

</body>
</html>
