<?php
require 'config/dbConnect.php';
require 'includes/header.php';
require 'includes/nav.php';
require 'includes/fnc.php';

checkUserLoggedIn();
?>
<div class="row">
    <div class="content">
        <h2>Welcome to Users Page</h2>

        <table>
            <caption>All Registered Users</caption>
            <thead>
                <tr>
                    <th>SN</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Gender</th>
                    <th>Role</th>
                    <th>Last Updated</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $query = "SELECT users.*, roles.role, gender.gender 
                      FROM users 
                      LEFT JOIN roles USING (roleId) 
                      LEFT JOIN gender USING (genderId) 
                      WHERE users.status = 0 
                      ORDER BY users.fullname ASC";

            $result = $conn->query($query);
            $sn = 1;

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>{$sn}</td>
                        <td>{$row['fullname']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['phone']}</td>
                        <td>{$row['gender']}</td>
                        <td>{$row['role']}</td>
                        <td>{$row['userUpdated']}</td>
                        <td>
                            [ <a href='edit_user.php?id={$row['userId']}'>Edit</a> ] |
                            [ <a href='proc/processes.php?delete_user={$row['userId']}' onclick=\"return confirm('Are you sure you want to delete {$row['fullname']}?');\">Delete</a> ]
                        </td>
                    </tr>";
                    $sn++;
                }
            } else {
                echo "<tr><td colspan='8'>No users found.</td></tr>";
            }
            ?>
            </tbody>
        </table>

        <h2>Learn More About Our Team and Mission</h2>
        <p>
            Sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
            Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid 
            ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam 
            nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
        </p>
    </div>

    <div class="sidebar">
        <h2>Side Bar</h2>
        <p>We are a team of dedicated professionals committed to delivering high-quality services and products.</p>
        <p>
            This page displays all users currently registered in the system. You can manage them using the 
            edit and delete actions. More administrative tools will be added soon to improve data handling 
            and system transparency.
        </p>
    </div>
</div>

<?php require 'includes/footer.php'; ?>
