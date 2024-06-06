<!-- edit_announcement.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Announcement</title>
</head>
<body>
    <h1>Edit Announcement</h1>
    <form action="send_announcement.php" method="post">
    <h2>Send Email</h2>
        <label for="user_id">User ID:</label><br>
        <input type="text" id="user_id" name="user_id" required><br><br>
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title" required><br><br>
        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="4" required></textarea><br><br>
        <button type="submit" name="submit">Send Announcement</button>
    </form>
</body>
</html>
