<!DOCTYPE html>
<html>

<head>
    <title>Live Search using AJAX</title>
    <!-- Including jQuery is required. -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <!-- Including our scripting file. -->
    <script type="text/javascript" src="scripts.js"></script>

    <style>
    a:hover {
        cursor: pointer;
        background-color: yellow;
    }
    </style>
</head>

<body>
    <!-- Search box. -->
    <input type="text" id="search" placeholder="Search" />
    <br>
    <br />
    <!-- Suggestions will be displayed in below div. -->
    <div id="display"></div>
</body>

</html>