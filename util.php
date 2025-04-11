<?php

// Enable error reporting for debugging
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Placeholder for database connection
// $db = new PDO('mysql:host=localhost;dbname=your_dbname', 'username', 'password');

// Show login form
function genLoginForm() {
    echo '
    <form method="POST" action="dashboard.php?menu=login">
        <input type="text" name="uname" placeholder="Username" required class="form-control mb-2">
        <input type="password" name="pw" placeholder="Password" required class="form-control mb-2">
        <button type="submit" class="btn btn-primary btn-sm">Login</button>
    </form>
    ';
}

// Show logout form
function genLogoutForm() {
    echo '
    <form method="POST" action="dashboard.php?menu=logout">
        <button type="submit" class="btn btn-danger btn-sm">Logout</button>
    </form>
    ';
}

// Show inbox placeholder
function genInbox($db, $uid) {
    echo "<h4>Inbox</h4>";
    echo "<p>This is where user $uid's messages would appear.</p>";
    // Example: $messages = getMessages($db, $uid);
}

// Show compose message form
function genComposeForm($db, $uid) {
    echo '
    <h4>Compose Message</h4>
    <form method="POST" action="dashboard.php?menu=send">
        <input type="text" name="to" placeholder="Recipient" class="form-control mb-2" required>
        <textarea name="message" placeholder="Your message..." class="form-control mb-2" required></textarea>
        <button type="submit" class="btn btn-success">Send</button>
    </form>
    ';
}

// Dummy message sending
function sendMessage($db, $uid, $postData) {
    echo "<p>Sending message from user $uid to {$postData['to']}...</p>";
    // Example: insert into DB
    // $stmt = $db->prepare("INSERT INTO messages (sender_id, recipient, content) VALUES (?, ?, ?)");
    // $stmt->execute([$uid, $postData['to'], $postData['message']]);
}

// Dummy login processing
function processLogin($db, $postData) {
    if ($postData['uname'] === 'John' && $postData['pw'] === 'doe') {
        $_SESSION['uid'] = 1;
        $_SESSION['uname'] = 'John';
        echo "<p>Login successful!</p>";
    } else {
        echo "<p>Login failed. Try username: John, password: doe</p>";
    }
}

// Logout handler
function processLogout() {
    session_destroy();
    header("Location: dashboard.php");
    exit;
}
