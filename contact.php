<?php
include_once 'layouts/header.php';
include_once 'layouts/navbar.php';

// print_r($_POST);
if (isset($_POST['submit'])) {
    $to = "jato829@vidalibarraquer.net"; // mi email
    $from = $_POST['email']; // el remitente
    $nombre = $_POST['name'];
    $telefono = $_POST['phone'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $nombre . " " . " ha escrit:" . "\n\n" . $_POST['message'];
    $message2 = "Aquesta és una copia del teu missatge, " . $nombre . "\n\n" . $_POST['message'];

    $headers = "De:" . $from . $telefono;
    $headers2 = "De:" . $to;
    mail($to, $subject, $message, $headers);
    mail($from, $subject2, $message2, $headers2); // envía una copia al remitente
    echo "Enviat. Graciès " . $nombre . ", et contactarem el més aviat possible.";
}

?>

<div class="parallax3">
    <div class="center">
        <img src="media/logoOchoyMedio.png" alt="logo pizzeria cafeteria ocho y medio" class="image_full" />
        <img src="media/isologo.png"  class="image_mobile">
    </div>
</div>
<div class="panel2">
    <br />

    <div class="container-sm p-3 my-3 bg-light text-black">
        <h3>Contacta'ns</h3>
        <p>
        Pot contactar amb nosaltres a través d'aquest formulari les 24 hores del dia. 
        Indiqui el seu nom, telèfon, correu electrònic i un breu comentari sobre la seva petició. 
        Ens posarem en contacte amb vostè en un breu període de temps.
        </p>
        <br />
        <br />
        <form action="" method="POST">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Nom</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Nom">
                </div>
                <div class="form-group col-md-6">
                    <label for="telefono">Telèfon</label>
                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Telèfon">
                </div>
            </div>
            <div class="form-group">
                <label for="email">Correu electrònic</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="message">Missatge</label>
                <textarea class="form-control" name="message" id="message" rows="3"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary" name="submit">Enviar</button>
            </div>

        </form>
    </div>

</div>
<div class="parallax4">
</div>

<?php
include_once 'layouts/footer.php';
