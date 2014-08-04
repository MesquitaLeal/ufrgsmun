<div id="mun">
    <div class="subpage-title">
        <h6>Home <i class="fa fa-angle-double-right"></i> Apply <i class="fa fa-angle-double-right"></i> Country Matrix</h6>
    </div>
    <div class="row blue content">
        <div class="col-sm-12">
            <section class="subsection-text">
                <h5>Country Matrix</h5>
                <p style="text-align:center">
                    You can check which countries are going to be simulated in which committee in our
                    country/committee matrix.
                </p>
            </section>
        </div>
    </div>

    <div class="row blue content">
        <div class="col-sm-12 table-responsive">
            <table class="table table-striped table-bordered">
                <tr>
                    <th>Country</th>
                    <th>ADB</th>
                    <th>UNSC</th>
                    <th>WSIS</th>
                    <th>DISEC</th>
                    <th>WEC</th>
                    <th>ZOPACAS</th>
                    <th>CIJ</th>
                    <th>IPC</th>
                    <th>Total</th>
                </tr>

                <?php
                    include 'apply/matrix.php';
                ?>

                <?php foreach ($countries as $key => $value) {
                    echo "<tr>";
                    foreach ($value as $a => $b) {
                        echo "<td>" . $b . "</td>";
                    }
                    echo "</tr>";

                } ?>
            </table>
        </div>
    </div>

</div>
