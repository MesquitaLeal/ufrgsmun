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
            <table class="table">
                <tr>
                    <th>Country*</th>
                    <th>ADB</th>
                    <th>UNSC</th>
                    <th>WSIS</th>
                    <th>DISEC</th>
                    <th>WEC</th>
                    <th>ZOPACAS</th>
                    <th>CIJ**</th>
                    <th>IPC**</th>
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
            <p class="references">* If there are more registrations than the vacancies on this list, the Secretariat holds the 
                right to include countries which were not listed as stated on our General Policies, so as 
                to guarantee the participation of all duly registered delegates. &nbsp | ** Be aware that although ICJ and IPC members are on the list, they do not represent any country.
            <br/></p>
        </div>
    </div>

</div>
