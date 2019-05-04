<?php
/**
 * Created by: james.lykie
 * Date: /03/2019
 * Time: 6:55
 */
$conn = new mysqli("localhost", "root", "", "emergency_response");
if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'pending':
            $sql = "SELECT id,uname,email,provider_type FROM fire_engine_information WHERE status_approval='pending' \n"
                . "UNION ALL\n"
                . "SELECT id,uname,email,provider_type FROM paramedics_information WHERE status_approval='pending'\n"
                . "UNION ALL\n"
                . "SELECT id,uname,email,provider_type FROM rescue_team_information WHERE status_approval='pending'\n";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                echo '<div class="card"><div class="table-responsive">
                                    <table class="table card-table table-hover table-vcenter text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>Username</th>
                                        <th>Email</th>
                                       <th>Type</th>
                                       <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>';


                while ($row = $result->fetch_assoc()) {
                    $id = $row['id'];
                    $username = $row['uname'] != '' ? $row['uname'] : 'n/a';
                    $email = $row['email'] != '' ? $row['email'] : 'n/a';
                    $type = $row['provider_type'] != '' ? $row['provider_type'] : 'n/a';

                    echo "<tr><td>" . $row['uname'] . "</td><td>" . $row['email'] . "</td><td>" . $row['provider_type'] . "</td><td><button onclick='approve(\"$type\",$id)' class=\"btn btn-secondary btn-sm\">Approve</button></td></tr>";
                }
                echo '</tbody></table></div></div>';
            } else {
                echo '<div class="alert alert-warning">No data available</div>';
            }
            break;
        case 'approved':
            $sql = "SELECT id,uname,email,provider_type FROM fire_engine_information WHERE status_approval='approved'\n"
                . "UNION ALL\n"
                . "SELECT id,uname,email,provider_type FROM paramedics_information WHERE status_approval='approved'\n"
                . "UNION ALL\n"
                . "SELECT id,uname,email,provider_type FROM rescue_team_information WHERE status_approval='approved'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                echo '<div class="card"><div class="table-responsive">
                                    <table class="table card-table table-hover table-vcenter text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>Username</th>
                                        <th>Email </th>
                                        <th>Type</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>';


                while ($row = $result->fetch_assoc()) {
                    $id = $row['id'];
                    $username = $row['uname'] != '' ? $row['uname'] : 'n/a';
                    $email = $row['email'] != '' ? $row['email'] : 'n/a';
                    $type = $row['provider_type'] != '' ? $row['provider_type'] : 'n/a';
                    echo "<tr><td>" . $row['uname'] . "</td><td>" . $row['email'] . "</td><td>" . $row['provider_type'] . "</td><td><button onclick='reject(\"$type\",$id)' class=\"btn btn-secondary btn-sm\">Reject</button></td></tr>";
                }
                echo '</tbody></table></div></div>';
            } else {
                echo '<div class="alert alert-warning">No data available</div>';
            }
            break;
        case 'rejected':
            $sql = "SELECT id,uname,email,provider_type
            FROM fire_engine_information WHERE status_approval='rejected' \n"
                . "UNION ALL\n"
                . "SELECT id,uname,email,provider_type FROM paramedics_information WHERE status_approval='rejected'\n"
                . "UNION ALL\n"
                . "SELECT id,uname,email,provider_type FROM rescue_team_information WHERE status_approval='rejected'\n";


            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                echo '<div class="card"><div class="table-responsive">
                                    <table class="table card-table table-hover table-vcenter text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Type</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>';


                while ($row = $result->fetch_assoc()) {
                    $id = $row['id'];
                    $username = $row['uname'] != '' ? $row['uname'] : 'n/a';
                    $email = $row['email'] != '' ? $row['email'] : 'n/a';
                    $type = $row['provider_type'] != '' ? $row['provider_type'] : 'n/a';
                    echo "<tr><td>" . $row['uname'] . "</td><td>" . $row['email'] . "</td><td>" . $row['provider_type'] . "</td><td><button onclick='approv(\"$type\",$id)' class=\"btn btn-secondary btn-sm\">Approve</button></td></tr>";
                }
                echo '</tbody></table></div></div>';
            } else {
                echo '<div class="alert alert-warning">No data available</div>';

            }
            break;
        default:
            ;
    }
}