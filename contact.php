<?php
require_once __DIR__ . '/layout/header.php';?>

    <title>Contact</title>
</head>
<body>
    <h1>Contact</h1>
    <section>
        <form method="post" action="contact_process.php">
            <div>
                <label for="name">Nom :</label>
                <input type="text" name="name" id="name" required />
            </div>
            <div>
                <label for="firstname">Prénom :</label>
                <input type="text" name="firstname" id="firstname" required />
            </div>
            <div>
                <label for="email">Email :</label>
                <input type="email" name="email" id="email" required />
            </div>
            <div>
                <label for="object">Objet de la demande :</label>
                <select name="object" id="object">
                    <option value="1">Demande d'informations</option>
                    <option value="2">Suggestions de manga</option>
                    <option value="3">Bug de site</option>
                </select>
            </div>
            <div>
                <label for="message">Message :</label>
                <textarea name="message" id="message" cols="30" rows="10" required></textarea>
            </div>
            <div><button><input type="submit" value="Envoyer" /></div>
        </form>
    </section>
</body>
</html>
<?php require_once 'layout/footer.php';