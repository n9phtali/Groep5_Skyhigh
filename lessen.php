<!DOCTYPE html>
<html>
<head>
    <title>Lessen</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        form {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<h1>Lessen</h1>

<table id="class-schedule">
    <tr>
        <th>Dag</th>
        <th>Tijd</th>
        <th>Instructeur</th>
        <th>Locatie</th>
        <th>E-mail</th>
        <th>Telefoonnummer</th>
    </tr>
    <tr>
        <td>Mandag</td>
        <td>10:00 - 12:00</td>
        <td>Yhaezly Geyteman</td>
        <td>Luchtveld A</td>
        <td>yahezlygeyteman@gmail.com</td>
        <td>0696969699696</td>
    </tr>
    <tr>
        <td>Woensdag</td>
        <td>14:00 - 16:00</td>
        <td>Jane Smith</td>
        <td>Luchtveld B</td>
        <td>janesmith123@gmail.com</td>
        <td>0653678183764</td>
    </tr>
    <tr>
        <td>Vrijdag</td>
        <td>9:00 - 11:00</td>
        <td>Michael Johnson</td>
        <td>Luchtveld C</td>
        <td>mjbutnotthepedo@gmail.com</td>
        <td>06193578695</td>
    </tr>
</table>

<h2>Plannen</h2>
<form id="class-form">
    <label for="day">Dag:</label>
    <input type="text" id="day" required><br>
    <label for="time">Tijd:</label>
    <input type="text" id="time" required><br>
    <label for="instructor">Instructeur:</label>
    <input type="text" id="instructor" required><br>
    <label for="location">Locatie:</label>
    <input type="text" id="location" required><br>
    <input type="submit" value="Plannen">
</form>

<script>

    function addClass() {
        event.preventDefault();


        const day = document.getElementById('day').value;
        const time = document.getElementById('time').value;
        const instructor = document.getElementById('instructor').value;
        const location = document.getElementById('location').value;


        const newRow = document.createElement('tr');
        newRow.innerHTML = `
                <td>${day}</td>
                <td>${time}</td>
                <td>${instructor}</td>
                <td>${location}</td>
            `;


        const table = document.getElementById('class-schedule');
        table.appendChild(newRow);


        document.getElementById('class-form').reset();
    }


    document.getElementById('class-form').addEventListener('submit', addClass);
</script>
</body>
</html>
