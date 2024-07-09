
<?php 
include "includes/userprofile.inc.php";
?>

<section class="profile-sec container-fluid d-flex justify-content-center mt-10">
    <div class="profile-inner container-fluid h-full bg-black">
        <div class="p-2 mt-3 mb-3">
            <div class="d-flex flex-row justify-content-around">
                <div class="d-flex justify-content-start bg-primary container">
                    <h1><?php echo htmlspecialchars($user['fname']) ?></h1>
                </div>
                <div class="d-flex justify-content-start bg-primary container">
                    <h1><?php echo htmlspecialchars($user['lname']) ?></h1>
                </div>
            </div>
            <div class="p-2 mt-3 mb-3">
                <h1><?php echo htmlspecialchars($user['username']) ?></h1>
            </div>
            <div class="p-2 mt-3 mb-3">
                <h1><?php echo htmlspecialchars($user['gmail']) ?></h1>
            </div>
        </div>
    </div>
</section>
