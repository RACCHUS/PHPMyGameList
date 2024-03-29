<ul class="login-menu">
    <li><a href="index.php"><img src="favicon.ico" class="favicon" alt="Home"></a></li>
    <li class="login"><button id="toggle-dark-mode">Toggle Dark Mode</button>
    <li class="login">Hide Ads</li>
    <li class="login">Sign Up</li>
    <li class="login"><a id="login-link" href="login.php">Login</a></li>
</ul>

<style>
      .dark-mode {
        background-color: black;
        color: white;
      }
      .navbar {
        color: black
      }
      .nav {
        color: black
      }
      h2 {
        color: black
      }
      footer {
        color: black
      }
</style>

<script>
const loginLink = document.getElementById("login-link");

// Check if the user is logged in
const sessionId = getCookie("session_id");
if (sessionId) {
  // Get the username associated with the session ID
  // ...

  // Update the login link to show the username
  loginLink.textContent = username;
  loginLink.removeAttribute("href");
}

function getCookie(name) {
  const value = `; ${document.cookie}`;
  const parts = value.split(`; ${name}=`);
  if (parts.length === 2) {
    return parts.pop().split(";").shift();
  }
}
</script>

<script>
      const toggleButton = document.querySelector("#toggle-dark-mode");
      const body = document.querySelector("body");

      toggleButton.addEventListener("click", () => {
        body.classList.toggle("dark-mode");
      });
</script>