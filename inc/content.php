<body>
    <!--Enemy info-->
    <?php include "enemy.php";?>

    <!--Game board-->
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-10 d-flex p-0 justify-content-md-center" style="background: #483e3e">
                <div class="col-5">
                    <div class="row justify-content-md-center">
                        <div class="col-10 m-3 text-center">
                            Your name
                        </div>
                    </div>
                    <div class="row justify-content-md-center">
                        <div class="col-11 mb-4">
                            <table class="table m-0 table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">A</th>
                                    <th scope="col">B</th>
                                    <th scope="col">C</th>
                                    <th scope="col">D</th>
                                    <th scope="col">E</th>
                                    <th scope="col">F</th>
                                    <th scope="col">H</th>
                                    <th scope="col">I</th>
                                    <th scope="col">J</th>
                                    <th scope="col">K</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    for ($j = 1; $j <= 10; $j++) {

                                        echo '<tr>
                                                <th scope="row">'.$j.'</th>';

                                        for ($i = 1; $i <= 10; $i++) {
                                            echo '<td style=""><a class="btn-ship" href="#"></a></td>';
                                        }

                                        echo '</tr>';
                                    }
                                ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-1">
                    <a href="#" id="done" class="d-block btn btn-success">
                        <img src="../img/done.png" alt="done">
                    </a>
                </div>
                <div class="col-5">
                    <div class="row justify-content-md-center">
                        <div class="col-10 m-3 text-center">
                            Enemy name
                        </div>
                    </div>
                    <div class="row justify-content-md-center">
                        <div class="col-11 mb-4">
                            <table class="table m-0 table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">A</th>
                                    <th scope="col">B</th>
                                    <th scope="col">C</th>
                                    <th scope="col">D</th>
                                    <th scope="col">E</th>
                                    <th scope="col">F</th>
                                    <th scope="col">H</th>
                                    <th scope="col">I</th>
                                    <th scope="col">J</th>
                                    <th scope="col">K</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                for ($j = 1; $j <= 10; $j++) {

                                    echo '<tr>
                                                <th scope="row">'.$j.'</th>';

                                    for ($i = 1; $i <= 10; $i++) {
                                        echo '<td><a class="btn-ship" href="#"></a></td>';
                                    }

                                    echo '</tr>';
                                }
                                ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Desire-->
    <?php include 'desire.php'?>
</body>