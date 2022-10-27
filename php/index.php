<?php

session_start();
print_r($_SESSION) . '<br>';

require __DIR__ . '/arrays.php';
require __DIR__ . '/functions.php'; ?>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pitch Practicer</title>
    <link rel="stylesheet" href="/styles/style.css" />
</head>

<body>
    <div class="grid">
        <header>
            <h1>Pitch Practicer</h1>
            <p>Pitch dont kill my vibe</p>
        </header>
        <main>
            <section>
                <div class="sounds">
                    <ul>
                        <li>

                            <audio controls muted>
                                <source src="/audio/$intervals[0]" type="audio/mp3" />
                            </audio>

                            <form method="post">
                                <input type="submit" name="randSound" class="button" value="Randomize" />
                            </form>

                        </li>

                        <li>
                            <?php

                            if (array_key_exists('randSound', $_POST)) {
                                $_SESSION[] = ['randomizedSound' => $intervals[0]['name']];
                            }

                            if (array_key_exists('prim', $_POST)) {

                                if ($_SE) {
                                    # code...
                                }
                            }

                            print_r($_POST) . '<br>';
                            print_r($_SESSION) . '<br>';

                            ?>

                        </li>
                        <li>

                            <form method="post">
                                <input type="submit" name="guess" class="button" value="prim" />
                            </form>

                        </li>


                    </ul>
                </div>
            </section>
        </main>
        <footer></footer>
    </div>
</body>

</html>
<?php print_r($_SESSION) . '<br>';
