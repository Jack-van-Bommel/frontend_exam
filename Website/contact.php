<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./stylesheet.css">
    <title>Contact</title>
</head>
<body>
    <?php include "./general_site_files/navbar.html" ?>

    <header>
        <h1>Contact</h1>
    </header>
    <main class="contact_main">
        <section class="contact_side">        
            <h2>Contact gegevens</h2>
            <p>Telefoon: 06 15177984</p>
            <p>Email: jackvbommel@gmail.com</p>
            
            <br>

            <a href="https://www.linkedin.com/in/jack-van-bommel-84a1a924b/">LinkedIn</a>
            <br>
            <a href="https://github.com/Jack-van-Bommel">Github</a>
        </section>

        <section class="contact_side">
            <h2>Contact Formulier</h2>
            <form>
                <label for="contact_name">Naam:</label>
                <br>
                <input type="text" name="contact_name"></input>

                <br>
                <br>

                <label for="contact_email">Email:</label>
                <br>
                <input type="text" name="contact_email">

                <br>
                <br>

                <label for="contact_text">Bericht:</label>
                <br>
                <input type="textbox" name="contact_text">

                <br>


                <input type="submit" value="submit">
            </form>
        </section>
    </main>

    <?php  include "./general_site_files/footer.html" ?>
</body>
</html>