<?php include "admin/actions/connect.php"; ?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/navigation.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div id="calendar" class="mx-auto"></div>
        </div>
        <div class="col-md-8 pt-4">
            <div id="activity-details"></div>
        </div>
    </div>
</div>

<script>

    <?php

    $qry = "SELECT * FROM tbl_activities ORDER BY date ASC, time ASC";
    $result = $conn->query($qry);

    $activities = array();

    while ($row = $result->fetch_assoc()) {
        array_push($activities, $row);
    }

    $result->data_seek(0);

    ?>

    const activities = <?php echo json_encode($activities); ?>;

    document.addEventListener('DOMContentLoaded', function() {

        const elem = document.getElementById("activity-details");
        const today = new Date();

        const activity = activities.filter(a => a.date === today.toISOString().slice(0,10));

        if(activity.length === 0) {
            elem.innerHTML = "" +
                "<div class='day-activity'>" +
                    "<p class='mx-0 my-0'>" + today.toLocaleDateString("nl-BE") +
                    "<h1 class='highest_text'>Op deze dag is er geen activiteit gepland.</h1>" +
                "</div>";
            return;
        }

        activity.map(function(a) {
            const date = new Date(a.date);
            elem.innerHTML += "" +
                "<div class='day-activity mb-4'>" +
                    "<p class='mx-0 my-0'>" + date.toLocaleDateString("nl-BE") + " - " + (a.time === "" ? "Hele dag" : a.time) + "</p>" +
                    "<h1 class='highest_text mt-0'>" + a.name + "</h1>" +
                    "<p class='m-0'>" + a.description + "</p>" +
                "</div>";
        })
    });

    const options = {
        actions: {
            clickDay(event, self) {
                const elem = document.getElementById("activity-details");
                const activity = activities.filter(a => a.date === self.selectedDates[0])

                const clicked_date = new Date(self.selectedDates[0]);

                if(activity.length === 0) {
                    elem.innerHTML = "" +
                        "<div class='day-activity'>" +
                            "<p class='mx-0 my-0'>" + clicked_date.toLocaleDateString("nl-BE") +
                            "<h1 class='highest_text'>Op deze dag is er geen activiteit gepland.</h1>" +
                        "</div>";
                    return;
                }

                elem.innerHTML = "";

                activity.map(function(a) {
                    const date = new Date(a.date);
                    elem.innerHTML += "" +
                        "<div class='day-activity mb-4'>" +
                            "<p class='mx-0 my-0'>" + date.toLocaleDateString("nl-BE") + " - " + (a.time === "" ? "Hele dag" : a.time) + "</p>" +
                            "<h1 class='highest_text mt-0'>" + a.name + "</h1>" +
                            "<p class='m-0'>" + a.description + "</p>" +
                        "</div>";
                })
            },
        },
        settings: {
            lang: 'nl-BE',
            selected: {
                month: <?php echo date("n") - 1 ?>,
                year: <?php echo date("Y") ?>
            },
        },
        popups: {
            <?php

            while ($row = $result->fetch_assoc()) {
                echo "'".$row["date"]."': {
                    modifier: 'bg-activity'
                },";
            }

            ?>
        }
    }

    const calendar = new VanillaCalendar("#calendar", options);
    calendar.init();
</script>

<?php include "includes/footer.php" ?>
