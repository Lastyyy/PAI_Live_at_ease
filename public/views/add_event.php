<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" type = "text/css" href = "public/css/normal_ui.css">
    <link rel = "stylesheet" type = "text/css" href = "public/css/add_event.css">
    <script type="text/javascript" src="./public/js/add_event.js" defer></script>
    <script src="https://kit.fontawesome.com/c65726fa38.js" crossorigin="anonymous"></script>
    <title>Dashboard</title>
</head>
<body>

<div class="page-container">

    <nav>
        <a href="dashboard">
            <button class="logo-button"><img alt="logo" src="public/img/logo.svg"></button>
        </a>
        <a href="dashboard">
            <button class="white-button">
                <i class="fas fa-home fa-4x"></i>
            </button>
        </a>
        <a href="info">
            <button class="white-button">
                <i class="fas fa-info-circle fa-4x"></i>
            </button>
        </a>
        <a href="receipts_group">
            <button class="white-button">
                <i class="fas fa-money-bill fa-4x"></i>
            </button>
        </a>
        <a href="events">
            <button class="orange-button">
                <i class="fas fa-calendar-day fa-4x"></i>
            </button>
        </a>
        <a href="profile">
            <button class="white-button">
                <i class="fas fa-address-card fa-4x"></i>
            </button>
        </a>
        <form action="logout" method="POST">
            <button id="logout-button" type="submit">
                <i class="fas fa-sign-out-alt fa-4x"></i>
            </button>
        </form>

    </nav>

    <?php require_once 'left_menu.php'?>

    <div class="middle">
        <form class="add-event" action="addEvent" method="POST">
            <p>DODAWANIE NOWEGO WYDARZENIA</p>
            <?php if(isset($messages)):
                foreach($messages as $message): ?>
                    <p><?= $message;?></p>
                <?php endforeach; ?>
            <?php endif; ?>
            <div class="timestamp">
                <input type="date" name="date"
                       value="<?=date("Y-m-d", strtotime('+1 day'))?>"
                       min="<?=date("Y-m-d");?>" required>
                <input type="time" name="time"
                       value="12:00" required>
            </div>
            <textarea name="info_text" rows="7" maxlength="254"
                      placeholder="Wpisz opis wydarzenia!" required></textarea>
            <button type="submit">Dodaj wydarzenie</button>
        </form>
    </div>


    <?php require_once 'group.php';?>

</div>

</body>
</html>