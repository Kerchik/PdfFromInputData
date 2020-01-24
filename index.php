<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<link rel="stylesheet" href="style.css">
<script src="main.js"></script>
</head>
<body>

<div class="container">
    <h2>Fill the info below</h2>
    <form method="post" action="makePdf.php">
        <input type="text" name="firstName" placeholder="First Name" required/>
        <br />
        <input type="text" name="surname" placeholder="Surname" required/>
        <br />
        <input type="url" name="photo" placeholder="Photo URL" />
        <br />
        <input type="date" name="date" max="2020-02-01" required/>
        <br />
        <input type="email" name="email" placeholder="E-mail" required/>
        <br />
        <input type="number" name="phone" placeholder="Phone number" />
        <br />
        <h2>Valodas:</h2>
        <div class="language">
            <h2>Angļu: </h2>
            <p class="p">Runātprasme: </p>
            <select name="englishSpeak">
                <option value="dzimta">dzimtā valoda</option>
                <option value="teicami">teicami</option>
                <option value="labi">labi</option>
                <option selected value="videji">vidēji</option>
                <option value="pamatzinasanas">pamatzināšanas</option>
                <option value="nav">nav</option>
            </select>
            <p class="p">Lasītprasme: </p>
            <select name="englishRead">
                <option value="dzimta">dzimtā valoda</option>
                <option value="teicami">teicami</option>
                <option value="labi">labi</option>
                <option selected value="videji">vidēji</option>
                <option value="pamatzinasanas">pamatzināšanas</option>
                <option value="nav">nav</option>
            </select>
            <p class="p">Rakstītprasme: </p>
            <select name="englishWrite">
                <option value="dzimta">dzimtā valoda</option>
                <option value="teicami">teicami</option>
                <option value="labi">labi</option>
                <option selected value="videji">vidēji</option>
                <option value="pamatzinasanas">pamatzināšanas</option>
                <option value="nav">nav</option>
            </select>
        </div>
        <div class="language">
            <h2>Krievu: </h2>
            <p class="p">Runātprasme: </p>
            <select name="russianSpeak">
                <option value="dzimta">dzimtā valoda</option>
                <option value="teicami">teicami</option>
                <option value="labi">labi</option>
                <option selected value="videji">vidēji</option>
                <option value="pamatzinasanas">pamatzināšanas</option>
                <option value="nav">nav</option>
            </select>
            <p class="p">Lasītprasme: </p>
            <select name="russianRead">
                <option value="dzimta">dzimtā valoda</option>
                <option value="teicami">teicami</option>
                <option value="labi">labi</option>
                <option selected value="videji">vidēji</option>
                <option value="pamatzinasanas">pamatzināšanas</option>
                <option value="nav">nav</option>
            </select>
            <p class="p">Rakstītprasme: </p>
            <select name="russianWrite">
                <option value="dzimta">dzimtā valoda</option>
                <option value="teicami">teicami</option>
                <option value="labi">labi</option>
                <option selected value="videji">vidēji</option>
                <option value="pamatzinasanas">pamatzināšanas</option>
                <option value="nav">nav</option>
            </select>
        </div>
        <div class="language">
            <h2>Latviešu: </h2>
            <p class="p">Runātprasme: </p>
            <select name="latvianSpeak">
                <option value="dzimtā">dzimtā valoda</option>
                <option value="teicami">teicami</option>
                <option value="labi">labi</option>
                <option selected value="videji">vidēji</option>
                <option value="pamatzinasanas">pamatzināšanas</option>
                <option value="nav">nav</option>
            </select>
            <p class="p">Lasītprasme: </p>
            <select name="latvianRead">
                <option value="dzimtā">dzimtā valoda</option>
                <option value="teicami">teicami</option>
                <option value="labi">labi</option>
                <option selected value="videji">vidēji</option>
                <option value="pamatzinasanas">pamatzināšanas</option>
                <option value="nav">nav</option>
            </select>
            <p class="p">Rakstītprasme: </p>
            <select name="latvianWrite">
                <option value="dzimtā">dzimtā valoda</option>
                <option value="teicami">teicami</option>
                <option value="labi">labi</option>
                <option selected value="videji">vidēji</option>
                <option value="pamatzinasanas">pamatzināšanas</option>
                <option value="nav">nav</option>
            </select>
        </div>
        <button type="button" onclick="addLanguage()">Add Language</button>
        <h2>Datorzinašanas</h2>
        <div class="computerKnowledge">
        <h2>HTML+CSS: </h2>
            <select name="htmlcss">
                <option value="teicami">teicami</option>
                <option value="labi">labi</option>
                <option selected value="videji">vidēji</option>
                <option value="pamatzinasanas">pamatzināšanas</option>
                <option value="nav">nav</option>
            </select>
        </div>
        <div class="computerKnowledge">
        <h2>PHP: </h2>
            <select name="php">
                <option value="teicami">teicami</option>
                <option value="labi">labi</option>
                <option selected value="videji">vidēji</option>
                <option value="pamatzinasanas">pamatzināšanas</option>
                <option value="nav">nav</option>
            </select>
        </div>
        <button class='addField' type="button" onclick="addComputerKnowledge()">Add Field</button>
        <h2>Darba pieredze</h2>
        <div class="work">
            <input type="text" name="companyName" placeholder="Darba vieta/Uzņēmums"/>
            <br />
            <input type="month" name="workStart" max="2020-01" placeholder="Datums no"/>
            <br />
            <input type="month" name="workEnd" max="2020-01" placeholder="Datums līdz"/>
            <br />
            <input type="text" name="position" placeholder="Ieņemamais amats"/>
            <br />
            <input type="text" name="positionCategory" placeholder="Amata kategorija"/>
            <br />
        </div>
        <button class='addField' type="button" onclick="addWork()">Add Field</button>
        <h2>Izglītība</h2>
        <div class="edu">
            <input type="text" name="eduName" placeholder="Izglītības iestādes nosaukums"/>
            <br />
            <input type="text" name="country" placeholder="Valsts"/>
            <br />
            <input type="number" name="startYear" max="2020" placeholder="Gads no"/>
            <br />
            <input type="number" name="endYear" placeholder="Gads līdz"/>
            <br />
            <input type="text" name="specialty" placeholder="Specialitāte"/>
        </div>
        <button class='addField' type="button" onclick="addEdu()">Add Field</button>
        <br />
        <button type="submit">Create PDF</button>
    </form>

</div>

</body>
<script>
    
</script>
</html>