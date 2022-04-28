<!DOCTYPE html>
<html>
    <title>Profile</title>
    <head>
        <style>
            body {
                background-color: #181E42;
            }

            #box {
                width: 100%;
                position: absolute;
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
                display: flex;
                justify-content: space-around;
            }

            .wrapper {
                margin: 3em;
                padding: 3em;
                background-color: #1E264A;
                color: #DEE0EB;
                font-family: Roboto, Helvetica, sans-serif;
                line-height: 1.5em;
                border-radius: 2%;
            }

            * {
                box-sizing: border-box;
            }

            .row {
                width: 100%;
            }

            .row:after {
                content: "";
                display: table;
                clear: both;
            }

            .column {
                float: left;
                width: 50%;
                padding: 10px;
            }

            .column2 {
                float: left;
                width: 100%;
                padding: 10px;
                margin: 0px 10px 0 10px;
            }

            a.button {
                -webkit-appearance: button;
                -moz-appearance: button;
                appearance: button;
                background-color: #3C5EA8;
                border: none;
                color: white;
                padding: 0.8em 1em;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                border-radius: 4%;
                transition-duration: 0.1s;
            }

            a.button:hover {
                background-color: #4D79D9;
                color: white;
            }
        </style>
    </head>
    <body>
        <div id='box'>
            <div class='wrapper'>
                <table>
                    <?php
                    for ($i = 0; $i <= 100; $i++) {
                        echo "<tr>";
                        for ($j = 0; $j <= 100; $j++) {
                            echo "<td>";
                            if ($i == 0) {
                                if ($j != 0) {
                                    echo "$j";
                                }
                            } elseif ($j == 0) {
                                echo "$i";
                            } else {
                                $x = $i * $j;
                                echo "$x";
                            }
                            echo "</td>";
                        }
                        echo "</tr>";
                    }
                    ?>
                </table>
            </div>
        </div>
    </body>
</html>
