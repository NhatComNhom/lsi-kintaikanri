<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LSI勤怠管理</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script type="module">
    // Import the functions you need from the SDKs you need
    import { initializeApp } from "https://www.gstatic.com/firebasejs/9.20.0/firebase-app.js";
    import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.20.0/firebase-analytics.js";
    // TODO: Add SDKs for Firebase products that you want to use
    // https://firebase.google.com/docs/web/setup#available-libraries

    // Your web app's Firebase configuration
    // For Firebase JS SDK v7.20.0 and later, measurementId is optional
    const firebaseConfig = {
        apiKey: "AIzaSyCCwr5-bVn4hyLTbTpwerId5_dMqQZ5LXU",
        authDomain: "lsi-kintai.firebaseapp.com",
        projectId: "lsi-kintai",
        storageBucket: "lsi-kintai.appspot.com",
        messagingSenderId: "955886450164",
        appId: "1:955886450164:web:92110039468509765fb5a1",
        measurementId: "G-G48XX7RP8P"
    };

    // Initialize Firebase
    const app = initializeApp(firebaseConfig);
    const analytics = getAnalytics(app);
    </script>
</head>
<body>
    <?php 
        include_once('./view/header.php'); 
    ?>
    <main>
        <!-- <h2>
            Main Content for the page
        </h2>
        <?php
            if (isset($_SESSION["username"])){
                echo "<p class='text-success'>login ok</p>";
            } else  {
                echo "<p class='text-dark'>not login yet</p>";
            }
        ?> -->
    </main>
    <?php 
        include_once('./view/footer.php'); 
    ?>
</body>
</html>