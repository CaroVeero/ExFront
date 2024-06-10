<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'component/header.php'; ?>
</head>
<body>
    <head>
        <?php include 'component/nav.php'; ?>
    </head>
    <div id="inicio">
        <?php include 'component/hero.php'; ?>
    </div>
    <main>
        <section id="equipo">
            <?php include 'component/equipo.php'; ?>
        </section>    
        <section id="historia">
            <?php include 'component/historia.php'; ?>
        </section>
        <section id="entrenamiento">
            <?php include 'component/entrenamiento.php'; ?>
        </section>
        <section id="testimonios">
            <?php include 'component/testimonios.php'; ?>
        </section>
        <section id="contacto">
            <?php include 'component/contacto.php'; ?>
        </section>
    </main>

    <!-- footer -->
    <?php include 'component/footer.php'; ?>

    <!-- js -->
    <?php include 'component/Js.php'; ?>
    
    <!-- script -->
    <?php include 'src/js/script.js'; ?>
</body>
</html>