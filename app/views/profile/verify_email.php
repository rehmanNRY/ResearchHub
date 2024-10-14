<?php
session_start();

// Check if the user is logged in and the necessary session data is available
if (!isset($_SESSION['user'])) {
    // Redirect to login if session is not set
    header('Location: ../../../index.php');
    exit();
}

$user_id = $_SESSION['user']['user_id'];
$email = $_SESSION['user']['email'];
$otp = ''; // Variable to store OTP

// Step 1: When user clicks verify button, send them an OTP via the provided endpoint
if (isset($_POST['send_otp'])) {
    // Generate a random 6-digit OTP
    $otp = rand(100000, 999999);
    $_SESSION['otp'] = $otp;
    // Redirect to your email sending endpoint, passing the email and OTP
    header("Location: /researchhub_project/app/phpmailer_smtp/test.php?email=$email&otp=$otp");
    exit();
}

// Step 2: When user submits OTP, verify it
if (isset($_POST['verify_otp'])) {
    $entered_otp = $_POST['otp'];

    // Check if the OTP entered matches the one sent (you may store the OTP in session or database)
    if ($entered_otp == $_SESSION['otp']) {
        // OTP matches, update user status to active
        $conn = new mysqli("localhost", "root", "", "researchhub");

        // Check for database connection error
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Update the user's status to active
        $stmt = $conn->prepare("UPDATE users SET status = 'active' WHERE user_id = ?");
        $stmt->bind_param("i", $user_id);

        if ($stmt->execute()) {
            echo "Your account has been successfully verified!";
            // You can also redirect them to a different page after verification
        } else {
            echo "Error updating record: " . $conn->error;
        }

        // Close the connection
        $stmt->close();
        $conn->close();
    } else {
        // OTP does not match
        echo "Invalid OTP. Please try again.";
    }
}
include '../partials/_navbar.php';

?>

<section class="min-h-screen bg-gray-900 text-gray-200 font-sans flex items-center justify-center py-12">
  <div class="container mx-auto px-6 lg:px-12">
    <div class="bg-gray-800 p-8 rounded-lg shadow-xl max-w-lg mx-auto">
      <h1 class="text-3xl font-bold text-center text-white mb-6">Verify Your Email</h1>
      <p class="text-center text-gray-400 mb-8">A verification code will be sent to your email address: <span class="text-gray-300"><?php echo htmlspecialchars($email); ?></span></p>

      <!-- Step 1: Send OTP -->
      <form method="post" class="mb-6">
        <input type="hidden" name="send_otp" value="1">
        <button type="submit" class="w-full bg-gradient-to-r from-purple-500 to-purple-700 text-white font-semibold py-3 rounded-lg hover:from-purple-600 hover:to-purple-800 transition-all duration-300">
          Send OTP
        </button>
      </form>

      <!-- Step 2: Verify OTP -->
      <form method="post">
        <label for="otp" class="block text-gray-400 mb-2">Enter OTP:</label>
        <input type="text" name="otp" id="otp" required class="w-full p-3 rounded-lg bg-gray-700 text-white border border-gray-600 focus:outline-none focus:border-purple-500 mb-6">
        <button type="submit" name="verify_otp" class="w-full bg-gradient-to-r from-green-500 to-teal-500 text-white font-semibold py-3 rounded-lg hover:from-green-600 hover:to-teal-600 transition-all duration-300">
          Verify OTP
        </button>
      </form>
    </div>
  </div>
</section>


<?php include '../partials/_footer.php'; ?>