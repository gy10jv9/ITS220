<?php 
include('./partials/header.php');
include("./classes/Database.php");
include("./classes/Request.php");
include("./partials/sidenav.php");

$db = new Database();
$Request = new Request($db);

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

            <div class="superAdmin-dashboard">
                <div class="request-superAdminRole">
                    <h1> Super Admin Role Requests </h1>
                    <!-- -----[ ROLE REQUESTS TABLE ]----- -->
                    <table cellpadding="5" style="margin-top: 1rem;" class="w-full">
                        <tr style="border: 2px solid #81171b;">
                            <td style="border: 2px solid #81171b;"><h2> Username </h2></td>
                            <td style="border: 2px solid #81171b;"><h2> Role </h2></td>
                            <td class="text-center" style="border: 2px solid #81171b;"><h2> Actions </h2></td>
                        </tr>
                        <?php foreach ($roleRequests as $request): ?>
                            <tr>
                                <td><?php echo $request['username']; ?></td>
                                <td><?php echo $request['type']; ?></td>
                                <td class="text-center">
                                    <form method="post">
                                        <input type="hidden" name="request_id" value="<?php echo $request['id']; ?>">
                                        <input type="hidden" name="request_role" value="<?php echo $request['type_id']; ?>">
                                        <button name="approve" type="submit">Approve</button>
                                        <button name="decline" type="submit">Decline</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <div class="request-others">
                    <h1> Recent Requests </h1>
                </div>
            </div>

            <div class="container-charts">
                <div><canvas id="bar"></canvas></div>
                <div><canvas id="doughnut"></canvas></div>
                <div style="grid-column: span 2; height: 30rem"><canvas id="line"></canvas></div>
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
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                borderWidth: 1
            }]
        },
        options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
        }
    });

    const ctxDoughnut = document.getElementById('doughnut');

    new Chart(ctxDoughnut, {
        type: 'doughnut',
        data: {
            labels: ['Red', 'Blue','Yellow'],
            datasets: [{
                label: 'My First Dataset',
                data: [300, 50, 100],
                backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 205, 86)'
                ],
                hoverOffset: 4
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false
        }
    });

    const ctxLine = document.getElementById('line');

    new Chart(ctxLine, {
        type: 'line',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June'],
            datasets: [{
                label: 'My First Dataset',
                data: [65, 59, 80, 81, 56, 55],
                fill: false,
                borderColor: 'rgb(75, 192, 192)',
                tension: 0.1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false
        }
    });
</script>

<?php include('./partials/footer.php') ?>