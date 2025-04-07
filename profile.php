<html>
<head>
    <title>Your Profile - LoveConnect</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        
        .profile-container {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            padding: 30px;
            width: 400px;
            max-width: 90%;
        }
        
        h2 {
            color: #333;
            margin-top: 0;
            border-bottom: 1px solid #eee;
            padding-bottom: 10px;
        }
        
        .profile-field {
            margin-bottom: 15px;
        }
        
        .field-label {
            font-weight: bold;
            color: #555;
            margin-right: 8px;
        }
        
        .field-value {
            color: #333;
        }
        
        .logout-link {
            display: inline-block;
            margin-top: 20px;
            padding: 8px 16px;
            background-color: #f44336;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s;
        }
        
        .logout-link:hover {
            background-color: #d32f2f;
        }
        
        .edit-profile {
            display: inline-block;
            margin-top: 20px;
            margin-right: 10px;
            padding: 8px 16px;
            background-color: #2196F3;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s;
        }
        
        .edit-profile:hover {
            background-color: #0b7dda;
        }
        
        .action-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <h2>Welcome, John Doe!</h2>
        
        <div class="profile-field">
            <span class="field-label">Age:</span>
            <span class="field-value">32</span>
        </div>
        
        <div class="profile-field">
            <span class="field-label">Gender:</span>
            <span class="field-value">Male</span>
        </div>
        
        <div class="profile-field">
            <span class="field-label">Interests:</span>
            <span class="field-value">Hiking, photography, cooking, jazz music, classic novels</span>
        </div>
        
        <div class="action-buttons">
            <a href="#" class="edit-profile">Edit Profile</a>
            <a href="#" class="logout-link">Logout</a>
        </div>
    </div>
</body>
</html>
