<?php
$xquery = $this->db->query("SELECT * FROM peserta WHERE nobp = '" . $this->session->userdata("userBBMK19") . "'");
$row = $xquery->row();

$zquery = $this->db->query("SELECT * FROM ukm WHERE id = '" . $row->id_ukm . "'");
$row2 = $zquery->row();


?>

<div class="container con-dash">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h3 class="text-center">Countdown BBMK 2022</h3>
            <div class="card px-3 py-3 time-countdown">
                <div class="d-flex justify-content-center">
                    <div class="card px-3 py-3 countdown text-center">
                        <span id="days">00</span>
                    </div>
                    <div class="card px-3 py-3 countdown text-center">
                        <span id="hours">00</span>
                    </div>
                    <div class="card px-3 py-3 countdown text-center">
                        <span id="minutes">00</span>
                    </div>
                    <div class="card px-3 py-3 countdown text-center">
                        <span id="seconds">00</span>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="card countdown satu text-center">
                        <span>days</span>
                    </div>
                    <div class="card countdown satu text-center">
                        <span>hours</span>
                    </div>
                    <div class="card countdown satu text-center">
                        <span>minutes</span>
                    </div>
                    <div class="card countdown satu text-center">
                        <span>seconds</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center tanggal-bbmk">
        <?php if ($row2->timeline1) { ?>
            <div class="col-md-6 my-3">
                <div class="d-flex">
                    <i class="bi bi-calendar-week-fill kalender"></i>
                    <div class="text-start ms-3 mt-3">
                        <h4>Day 1</h4>
                        <p class="tg"><?= $row2->timeline1; ?></p>
                    </div>
                </div>
            </div>
        <?php
        } ?>
        <?php if ($row2->timeline2) { ?>
            <div class="col-md-6 my-3">
                <div class="d-flex">
                    <i class="bi bi-calendar-week-fill kalender"></i>
                    <div class="text-start ms-3 mt-3">
                        <h4>Day 2</h4>
                        <p class="tg"><?= $row2->timeline2; ?></p>
                    </div>
                </div>
            </div>
        <?php
        } ?>
        <?php if ($row2->timeline3) { ?>
            <div class="col-md-6 my-3">
                <div class="d-flex">
                    <i class="bi bi-calendar-week-fill kalender"></i>
                    <div class="text-start ms-3 mt-3">
                        <h4>Day 3</h4>
                        <p class="tg"><?= $row2->timeline3; ?></p>
                    </div>
                </div>
            </div>
        <?php
        } ?>
        <?php if ($row2->timeline4) { ?>
            <div class="col-md-6 my-3">
                <div class="d-flex">
                    <i class="bi bi-calendar-week-fill kalender"></i>
                    <div class="text-start ms-3 mt-3">
                        <h4>Day 4</h4>
                        <p class="tg"><?= $row2->timeline4; ?></p>
                    </div>
                </div>
            </div>
        <?php
        } ?>

    </div>
</div>
</div>
</div>
<script>
    function getCounter() {
        var countDownDate = new Date("<?= $row2->timeline1; ?>").getTime();

        var x = setInterval(function() {
            var now = new Date().getTime();

            var distance = countDownDate - now;

            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor(
                (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
            );
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            var textDays = document.getElementById("days");
            var textHours = document.getElementById("hours");
            var textMinutes = document.getElementById("minutes");
            var textSeconds = document.getElementById("seconds");

            textDays.innerHTML = days < 10 ? "0" + days : days;
            textHours.innerHTML = hours < 10 ? "0" + hours : hours;
            textMinutes.innerHTML = minutes < 10 ? "0" + minutes : minutes;
            textSeconds.innerHTML = seconds < 10 ? "0" + seconds : seconds;

            if (distance < 0) {
                clearInterval(x);
            }
        }, 1000);
    }
    getCounter();
</script>