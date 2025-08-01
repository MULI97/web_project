<?php
    require 'config/dbConnect.php';
    require 'includes/header.php';
    require 'includes/nav.php';

    $user_id = $_GET['id'] ?? null;
    if (!$user_id) {
        echo "Citizen ID is required.";
        exit;
    }

    $query = "SELECT * FROM users 
              LEFT JOIN roles USING (roleId) 
              LEFT JOIN gender USING (genderId) 
              WHERE users.userId = ? 
              ORDER BY users.fullname DESC";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $edit_res = $stmt->get_result()->fetch_assoc();
?>

<div class="row">
    <div class="content">
        <h2>Edit Profile: <?php echo htmlspecialchars($edit_res['fullname']); ?></h2>

        <form action="proc/processes.php" method="post">
            <input type="text" name="fullname" placeholder="Full Name" value="<?php echo htmlspecialchars($edit_res['fullname']); ?>" required /><br>

            <input type="email" name="email" placeholder="Email Address" value="<?php echo htmlspecialchars($edit_res['email']); ?>" required /><br>
            
            <input type="tel" name="phone" placeholder="Phone Number" maxlength="13" value="<?php echo htmlspecialchars($edit_res['phone']); ?>" required /><br>

            <select name="genderId" required>
                <option value="<?php echo $edit_res['genderId']; ?>"><?php echo $edit_res['gender']; ?></option>
                <?php
                $gender_q = "SELECT * FROM gender";
                $gen_result = $conn->query($gender_q);
                while ($row = $gen_result->fetch_assoc()) {
                    echo "<option value='" . $row['genderId'] . "'>" . $row['gender'] . "</option>";
                }
                ?>
            </select>

            <select name="roleId" required>
                <option value="<?php echo $edit_res['roleId']; ?>"><?php echo $edit_res['role']; ?></option>
                <?php
                $role_q = "SELECT * FROM roles";
                $rol_result = $conn->query($role_q);
                while ($row = $rol_result->fetch_assoc()) {
                    if ($row['role'] == 'Admin') continue; // Restrict Admin assignment
                    echo "<option value='" . $row['roleId'] . "'>" . $row['role'] . "</option>";
                }
                ?>
            </select>

            <input type="text" name="username" placeholder="Username" value="<?php echo htmlspecialchars($edit_res['username']); ?>" required /><br>

            <br>
            <input type="submit" name="update_user" value="Update Profile" />
            <a href="persons.php">Cancel</a>
            <input type="hidden" name="userId" value="<?php echo $user_id; ?>" />
        </form>

        <h2>About This Platform</h2>
        <p>The_ePatriot is a civic engagement system empowering citizens to interact with elected leaders, submit petitions, and monitor political accountability. Updating your profile ensures accurate feedback, participation, and representation.</p>
    </div>

    <div class="sidebar">
        <h2>Did You Know?</h2>
        <p>Accurate profile data helps match citizens to their local officials and enables effective communication on public issues.</p>
        <p>Your voice matters — ensure your details are up to date and make your civic impact count!</p>
    </div>
</div>

<?php
    require 'includes/footer.php';
?>
