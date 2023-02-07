const express = require("express");
const MongoClient = require("mongodb").MongoClient;
const app = express();
const cookieParser = require("cookie-parser");
const session = require("express-session");

const uri = "mongodb+srv://<username>:<password>@cluster.mongodb.net/test?retryWrites=true&w=majority";

app.use(cookieParser());
app.use(express.json());
app.use(session({ secret: "secret", resave: false, saveUninitialized: true }));

app.post("/login.php", (req, res) => {
  const username = req.body.username;
  const password = req.body.password;
  MongoClient.connect(uri, function (err, client) {
    const db = client.db("user_authentication");
    const collection = db.collection("login_credentials");
    collection.findOne({ username: username, password: password }, function (err, user) {
      if (err) {
        console.log(err);
        res.status(500).send();
      } else if (!user) {
        res.status(401).send("Incorrect username or password");
      } else {
        req.session.user = user;
        res.cookie("user_session", req.session.id);
        res.redirect("/index.php");
      }
    });
  });
});

const port = process.env.PORT || 3000;
app.listen(port, () => {
  console.log(`Server is running on port ${port}`);
});

//script
//const form = document.querySelector("#login-form");
//const usernameInput = document.querySelector("#username");
//const passwordInput = document.querySelector("#password");
//
//form.addEventListener("submit", async (event) => {
//  event.preventDefault();
//
//  const username = usernameInput.value;
//  const password = passwordInput.value;
//
//  const response = await fetch("/login", {
//    method: "POST",
//    credentials: "include",
//    headers: {
//      "Content-Type": "application/json"
//    },
//    body: JSON.stringify({ username, password })
//  });
//
//  if (response.redirected) {
//    window.location.href = response.url;
//  } else {
//    const result = await response.text();
//    console.log(result);
//  }
//});
//const form = document.getElementById("login-form");
//const usernameInput = document.getElementById("username");
//const passwordInput = document.getElementById("password");
//
//form.addEventListener("submit", (event) => {
//  event.preventDefault();
//
//  const username = usernameInput.value;
//  const password = passwordInput.value;
//
//  // Validate the user's credentials here
//  // ...
//
//  // Log the user in
//  // ...
//
//  // Store the session information in a cookie
//  const sessionId = generateSessionId();
//  const expires = new Date(Date.now() + 7 * 24 * 60 * 60 * 1000).toUTCString();
//  document.cookie = `session_id=${sessionId}; expires=${expires}; path=/`;
//
//  // Redirect to index.php
//  window.location.href = "index.php";
//});
//
//function generateSessionId() {
//  // Generate a unique session ID
//  // ...
//  return "abcdefghijklmnopqrstuvwxyz";
//}
//script
//script
//const express = require("express");
//const MongoClient = require("mongodb").MongoClient;
//const app = express();
//const cookieParser = require("cookie-parser");
//const session = require("express-session");
//
//const uri = "mongodb+srv://<all4all4ever>:<Tnm5M8sPVu!DzFa>@cluster.mongodb.net/test?retryWrites=true&w=majority";
//
//app.use(cookieParser());
//app.use(express.json());
//app.use(session({ secret: "secret", resave: false, saveUninitialized: true }));
//
//app.post("/login", (req, res) => {
//  const username = req.body.username;
//  const password = req.body.password;
//  MongoClient.connect(uri, function (err, client) {
//    const db = client.db("user_authentication");
//    const collection = db.collection("login_credentials");
//    collection.findOne({ username: username, password: password }, function (err, user) {
//      if (err) {
//        console.log(err);
//        res.status(500).send();
//      } else if (!user) {
//        res.status(401).send("Incorrect username or password");
//      } else {
//        req.session.user = user;
//        res.cookie("user_session", req.session.id);
//        res.redirect("/index.php");
//      }
//    });
//  });
//});
//
//const port = process.env.PORT || 3000;
//app.listen(port, () => {
//  console.log(`Server is running on port ${port}`);
//});
//scrip