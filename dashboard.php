<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATI Batticaloa - Lecturer Dashboard</title>
    <style>
        body {
            font-family: 'Times New Roman', Bold Italic;
            background-color: #c0c0c0;
            color: #808000;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        #dashboard-header {
            background-color: #008000;
            padding: 20px;
            width: 100%;
            text-align: center;
        }

        #dashboard-content {
            background-color: #808080;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 400px;
            margin-top: 20px;
            padding: 20px;
            text-align: center;
        }

        #logout-btn {
            background-color: #ff0000;
            color: #808000;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            margin-top: 20px;
        }

        #logout-btn:hover {
            background-color: #800000;
        }
    </style>
</head>
<body>
    <div id="dashboard-header">
        <h2>Welcome to ATI Batticaloa Dashboard</h2>
        <!-- Display the lecturer's email from the session -->
        <p>Email: <!-- PHP code to display lecturer's email --></p>
    </div>
    <div id="dashboard-content">
        <!-- Dashboard content goes here -->
        <p>This is your dashboard. Add your content here.</p>
        <form action="logout.php" method="post">
            <input type="submit" id="logout-btn" value="Logout">
        </form>
    </div>
</body>
</html>
