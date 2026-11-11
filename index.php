<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Employee Registration</title>
    <style>

   * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
   
    font-family: Arial, sans-serif;
    background: #f2f5f9;
    min-height: 90vh;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 15px;
}

.container {
    margin: 50px 200px;
    width: 500px;
    background: white;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
}

.header {
    text-align: center;
    margin-bottom: 25px;
}

.header h1 {
    color: #1e3a5f;
    margin-bottom: 8px;
}

.header p {
    color: #777;
}

.form-group {
    margin-bottom: 18px;
}

.form-group label {
    display: block;
    margin-bottom: 7px;
    font-weight: bold;
    color: #333;
}

.form-group input,
.form-group select {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 7px;
    font-size: 15px;
}

.form-group input:focus,
.form-group select:focus {
    outline: none;
    border-color: #1e3a5f;
}

button {
    width: 100%;
    padding: 13px;
    background: #1e3a5f;
    color: white;
    border: none;
    border-radius: 7px;
    font-size: 16px;
    cursor: pointer;
}

button:hover {
    background: #142942;
}
</style>


</head>

<body>

    <div class="container">

        <div class="header">
            <h1>Employee Registration</h1>
            <p>Enter employee details</p>
        </div>

        <form action="save_employee.php" method="POST" onsubmit="return validateForm()">

            <div class="form-group">
                <label>Employee Name</label>
                <input type="text" id="name" name="name"
                       placeholder="Enter employee name">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" id="email" name="email"
                       placeholder="Enter email address">
            </div>

            <div class="form-group">
                <label>Phone Number</label>
                <input type="text" id="phone" name="phone"
                       placeholder="Enter phone number">
            </div>

            <div class="form-group">
                <label>Department</label>

                <select id="department" name="department">
                    <option value="">Select Department</option>
                    <option value="Computer Science">Computer Science</option>
                    <option value="Information Technology">Information Technology</option>
                    <option value="Electronics">Electronics</option>
                    <option value="Mechanical">Mechanical</option>
                    <option value="Civil">Civil</option>
                </select>
            </div>

            <button type="submit">Save Employee</button>

        </form>

    </div>

    <script src="script.js"></script>

</body>

</html>