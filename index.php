<?php 
include('./partials/header.php');
include("./classes/Database.php");
include("./classes/Request.php");
include("./partials/sidenav.php");
include("./classes/Volunteer.php");

$db = new Database();
$Request = new Request($db);
$Volunteer = new Volunteer($db);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['approve'])) {
        if ($_POST['request_role'] == 2) { // if ang request is admin role
            $Request->approveAdminRole($_POST['request_id']);
        } elseif ($_POST['request_role'] == 1) { // if ang request is super admin role
            $Request->approveSuperAdminRole($_POST['request_id']);
        }
    } elseif (isset($_POST['decline'])) {
        $Request->decline($_POST['request_id']);
    }
}

$roleRequests = $Request->getallRoleRequests();
?>

<div class="container-main v2">
    <main>
        <header>
            <div class="logo"></div>
            <div class="container-details">
                <h1> philippine red amity Volunteer Services </h1>
                <p> 123 Rizal Avenue, Barangay Poblacion 5, Bacolod City, Negros Occidental, 6100 </p>
                <hr/>

                <div class="container-socials">
                    <div class="social-link">
                        <div class="icon fb" ></div>
                        <p> Red Amity Volunteer PH </p>
                    </div>
                    <div class="social-link">
                        <div class="icon ig" ></div>
                        <p> @redamityph </p>
                    </div>
                    <div class="social-link">
                        <div class="icon yt" ></div>
                        <p> Red Amity PH </p>
                    </div>
                    <div class="social-link">
                        <div class="icon email" ></div>
                        <p> redamityph@gmail.com </p>
                    </div>
                </div>
            </div>
        </header>

        <section class="container-list">
            <div class="label-container">
                <img src="img/icon-back.png" class="back-bttn" onclick="location.href='dashboard.php'">
                <p class="label"> Login / Register Account </p>
            </div>


            <div class="request-superAdminRole">
                <h1> Table 1: Role Requests </h1>
                <!-- -----[ ROLE REQUESTS TABLE ]----- -->
                <table cellpadding="5" style="margin-top: 1rem;" class="w-full">
                    <tr style="border: 2px solid #952727;">
                        <td style="border: 2px solid #952727;"><h2> Username </h2></td>
                        <td style="border: 2px solid #952727;"><h2> Role </h2></td>
                        <td class="text-center" style="border: 2px solid #952727;"><h2> Actions </h2></td>
                    </tr>
                    <?php foreach ($roleRequests as $request): ?>
                        <tr>
                            <td><?php echo $request['username']; ?></td>
                            <td><?php echo $request['type']; ?></td>
                            <td class="text-center">
                                <form method="post" class="action-form">
                                    <input type="hidden" name="request_id" value="<?php echo $request['id']; ?>">
                                    <input type="hidden" name="request_role" value="<?php echo $request['type_id']; ?>">
                                    <button name="approve" type="submit" class="bttn-primary2">Approve</button>
                                    <button name="decline" type="submit" class="bttn-primary2">Decline</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>


            <div class="container-charts">
                <div>
                    <!-- <h1> Chart 1: Number of New Volunteers </h1> -->
                    <canvas id="bar"></canvas>
                </div>
                <div>
                    <!-- <h1> Chart 2: Ratio of Admin and Volunteers </h1> -->
                    <canvas id="doughnut"></canvas>
                </div>
                <div style="grid-column: span 2; height: 30rem">
                    <!-- <h1> Chart 3: Daily Donations, Volunteers, and Works of Services </h1> -->
                    <canvas id="line"></canvas>
                </div>
            </div>
        </section>
    </main>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    const ctx = document.getElementById('bar');

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [
                <?php
                $dates = [];
                $counts = [];
                for ($i = 0; $i >= -5; $i--) {
                    $date = date('F j', strtotime("$i days"));
                    $dates[] = "'$date'";
                    $counts[] = $Volunteer->countUsersbyDate(date('Y-m-d', strtotime("$i days")));
                }
                echo implode(',', array_reverse($dates));
                ?>
            ],
            datasets: [{
                label: '# of new volunteers',
                data: [<?php echo implode(',', array_reverse($counts)); ?>],
                backgroundColor: '#952727',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            },
            plugins: {
                title: {
                    display: true,
                    text: 'Chart 1: Daily New Volunteers'
                }
            }
        }
    });

    const ctxDoughnut = document.getElementById('doughnut');

    new Chart(ctxDoughnut, {
        type: 'doughnut',
        data: {
            labels: ['Volunteers', 'Admins','Works'],
            datasets: [{
                label: 'My First Dataset',
                data: [300, 50, 100],
                backgroundColor: [
                    'rgb(149, 39, 39)',
                    'rgb(105, 45, 45)',
                    'rgb(63, 37, 37)'
                ],
                hoverOffset: 4 
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                title: {
                    display: true,
                    text: 'Chart 2: Total Number of Volunteers, Admins, and Volunteer Services'
                }
            }
        }
    });

    const ctxLine = document.getElementById('line');

    new Chart(ctxLine, {
    type: 'line',
    data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June'],
        datasets: [
            {
                label: 'Volunteers',
                data: [65, 59, 80, 81, 56, 55],
                fill: false,
                borderColor: 'rgb(149, 39, 39)',
                tension: 0.1
            },
            {
                label: 'Donations',
                data: [28, 48, 40, 19, 86, 27],
                fill: false,
                borderColor: 'rgb(105, 45, 45)',
                tension: 0.1
            },
            {
                label: 'Volunteer Services',
                data: [45, 25, 60, 75, 50, 40],
                fill: false,
                borderColor: 'rgb(63, 37, 37)',
                tension: 0.1
            }
        ]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            title: {
                display: true,
                text: 'Chart 3: Daily Donations, Volunteers, and Volunteer Services'
            }
        }
    }
});
</script>

<?php include('./partials/footer.php') ?>