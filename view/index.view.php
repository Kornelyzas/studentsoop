<?php
use KlaseApp\Mokiniai;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Masyvas_uzduotis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<?php
$mokinys = new Mokiniai('Daniel', 'Simpson', 'daniel@mail.com');
$mokinys2 = new Mokiniai('Jonas', 'Jonauskas', 'jonas@mail.com');
$mokinys3 = new Mokiniai('Petras', 'Petrauskas', 'petras@mail.com');
$mokinys4 = new Mokiniai('Juozas', 'Juozaitis', 'juozas@mail.com');
$mokinys5 = new Mokiniai('Tomas', 'Tomauskas', 'tomas@mail.com');
$mokinys6 = new Mokiniai('Gandras', 'Gandrauskas', 'gandras@mail.com');
$mokinys7 = new Mokiniai('Ieva', 'Ievaite', 'ieva@mail.com');
$mokinys8 = new Mokiniai('Elena', 'Elenyte', 'elena@mail.com');
$mokinys9 = new Mokiniai('Laura', 'Lauraite', 'laura@mail.com');
$mokinys10 = new Mokiniai('Agne', 'Agnaite', 'agne@mail.com');
?>
<div class="my-table d-flex">
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Grupe</th>
            <th scope="col">Numeris</th>
            <th scope="col">Vardas</th>
            <th scope="col">Pavarde</th>
            <th scope="col">Ivertinimai</th>
            <th scope="col">El. Pastas</th>
            <th scope="col">Data</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row"><?php echo $mokinys -> setGrupe(); ?></th>
            <td><?php echo $mokinys -> randomNumb(); ?></td>
            <td><?php echo $mokinys -> vardas; ?></td>
            <td><?php echo $mokinys -> pavarde; ?></td>
            <td><?php echo $mokinys -> showIvertinimai(); ?></td>
            <td><?php echo $mokinys -> email; ?></td>
            <td><?php echo $mokinys -> showData(); ?></td>
        </tr>
        <tr>
            <th scope="row"><?php echo $mokinys2 -> setGrupe(); ?></th>
            <td><?php echo $mokinys2 -> randomNumb(); ?></td>
            <td><?php echo $mokinys2 -> vardas; ?></td>
            <td><?php echo $mokinys2 -> pavarde; ?></td>
            <td><?php echo $mokinys2 -> showIvertinimai(); ?></td>
            <td><?php echo $mokinys2 -> email; ?></td>
            <td><?php echo $mokinys2 -> showData(); ?></td>

        </tr>
        <tr>
            <th scope="row"><?php echo $mokinys3 -> setGrupe(); ?></th>
            <td><?php echo $mokinys3 -> randomNumb(); ?></td>
            <td><?php echo $mokinys3 -> vardas; ?></td>
            <td><?php echo $mokinys3 -> pavarde; ?></td>
            <td><?php echo $mokinys3 -> showIvertinimai(); ?></td>
            <td><?php echo $mokinys3 -> email; ?></td>
            <td><?php echo $mokinys3 -> showData(); ?></td>

        </tr>
        <tr>
            <th scope="row"><?php echo $mokinys4 -> setGrupe(); ?></th>
            <td><?php echo $mokinys4 -> randomNumb(); ?></td>
            <td><?php echo $mokinys4 -> vardas; ?></td>
            <td><?php echo $mokinys4 -> pavarde; ?></td>
            <td><?php echo $mokinys4 -> showIvertinimai(); ?></td>
            <td><?php echo $mokinys4 -> email; ?></td>
            <td><?php echo $mokinys4 -> showData(); ?></td>

        </tr>
        <tr>
            <th scope="row"><?php echo $mokinys5 -> setGrupe(); ?></th>
            <td><?php echo $mokinys5 -> randomNumb(); ?></td>
            <td><?php echo $mokinys5 -> vardas; ?></td>
            <td><?php echo $mokinys5 -> pavarde; ?></td>
            <td><?php echo $mokinys5 -> showIvertinimai(); ?></td>
            <td><?php echo $mokinys5 -> email; ?></td>
            <td><?php echo $mokinys5 -> showData(); ?></td>

        </tr>
        <tr>
            <th scope="row"><?php echo $mokinys6 -> setGrupe(); ?></th>
            <td><?php echo $mokinys6 -> randomNumb(); ?></td>
            <td><?php echo $mokinys6 -> vardas; ?></td>
            <td><?php echo $mokinys6 -> pavarde; ?></td>
            <td><?php echo $mokinys6 -> showIvertinimai(); ?></td>
            <td><?php echo $mokinys6 -> email; ?></td>
            <td><?php echo $mokinys6 -> showData(); ?></td>

        </tr>
        <tr>
            <th scope="row"><?php echo $mokinys7 -> setGrupe(); ?></th>
            <td><?php echo $mokinys7 -> randomNumb(); ?></td>
            <td><?php echo $mokinys7 -> vardas; ?></td>
            <td><?php echo $mokinys7 -> pavarde; ?></td>
            <td><?php echo $mokinys7 -> showIvertinimai(); ?></td>
            <td><?php echo $mokinys7 -> email; ?></td>
            <td><?php echo $mokinys7 -> showData(); ?></td>

        </tr>
        <tr>
            <th scope="row"><?php echo $mokinys8 -> setGrupe(); ?></th>
            <td><?php echo $mokinys8 -> randomNumb(); ?></td>
            <td><?php echo $mokinys8 -> vardas; ?></td>
            <td><?php echo $mokinys8 -> pavarde; ?></td>
            <td><?php echo $mokinys8 -> showIvertinimai(); ?></td>
            <td><?php echo $mokinys8 -> email; ?></td>
            <td><?php echo $mokinys8 -> showData(); ?></td>

        </tr>
        <tr>
            <th scope="row"><?php echo $mokinys9 -> setGrupe(); ?></th>
            <td><?php echo $mokinys9 -> randomNumb(); ?></td>
            <td><?php echo $mokinys9 -> vardas; ?></td>
            <td><?php echo $mokinys9 -> pavarde; ?></td>
            <td><?php echo $mokinys9 -> showIvertinimai(); ?></td>
            <td><?php echo $mokinys9 -> email; ?></td>
            <td><?php echo $mokinys9 -> showData(); ?></td>

        </tr>
        <tr>
            <th scope="row"><?php echo $mokinys10 -> setGrupe(); ?></th>
            <td><?php echo $mokinys10 -> randomNumb(); ?></td>
            <td><?php echo $mokinys10 -> vardas; ?></td>
            <td><?php echo $mokinys10 -> pavarde; ?></td>
            <td><?php echo $mokinys10 -> showIvertinimai(); ?></td>
            <td><?php echo $mokinys10 -> email; ?></td>
            <td><?php echo $mokinys10 -> showData(); ?></td>

        </tr>
        </tbody>
    </table>
</div>
</body>
</html>
