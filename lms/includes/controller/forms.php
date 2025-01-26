<?php

use function php_sys\system\ExecuteRow;

$post = $_POST["form"];

echo "<div class='" . $post . "'>";
if ($post == "update-schedule") {
    include_once "includes/forms/schedule_update.php";
    //
} elseif ($post == "add-teacher-form") {
    include_once "includes/forms/add_new_teacher.php";
    //
} elseif ($post == "add-course-form") {
    include_once "includes/forms/add_new_course.php";
    //    
} else {
}

echo "</div>";

exit;



if ($post == "add-new-member") { ?>

    <div class="<?php echo $post; ?>">
        <div class="row mb-2">
            <div class="col-4">
                <div class="form-floating">
                    <input type="text" class="form-control" placeholder="" field="firstname" required autocomplete="off">
                    <label>Firstname</label>
                </div>
            </div>

            <div class="col-4">
                <div class="form-floating">
                    <input type="text" class="form-control" placeholder="" field="lastname" required autocomplete="off">
                    <label>Lastname</label>
                </div>
            </div>

            <div class="col-4">
                <div class="form-floating">
                    <input type="text" class="form-control" placeholder="" field="middlename" required autocomplete="off">
                    <label>Middle Name</label>
                </div>
            </div>

            <!-- <div class="col-2">
                <div class="form-floating">
                    <select class="form-select" field="position">
                        <option value="1" selected>Member</option>
                    </select>
                    <label>Position</label>
                </div>
            </div> -->
        </div>

        <div class="row mb-2">

            <div class="col-8">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="" field="address" autocomplete="off"></textarea>
                    <label>Address</label>
                </div>
            </div>

            <div class="col-4">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="" field="contact" autocomplete="off" required> </textarea>
                    <label>Contact</label>
                </div>
            </div>

        </div>

        <div class="row mb-2">
            <div class="col-6">
                <div class="form-floating">
                    <input type="email" class="form-control" placeholder="" field="email" autocomplete="off">
                    <label>E-mail</label>
                </div>
            </div>

            <div class="col-6">
                <div class="form-floating">
                    <input type="text" class="form-control" placeholder="" field="facebook" autocomplete="off">
                    <label>Facebook</label>
                </div>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-12">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="" field="farmaddress" autocomplete="off"></textarea>
                    <label>Farm Address</label>
                </div>
            </div>

        </div>

    </div>


<?php } ?>

<?php if ($post == "update-schedule") { ?>

    <div class="<?php echo $post; ?>">

        <div class="form-floating mb-1">
            <select class="form-select form-sm">
                <option value=""></option>
            </select>
            <label>Course</label>
        </div>

        <div class="form-floating mb-1">
            <select class="form-select form-sm">
                <option value=""></option>
            </select>
            <label>Lesson</label>
        </div>

        <div class="form-floating mb-1">
            <select class="form-select form-sm">
                <option value=""></option>
            </select>
            <label>Teacher</label>
        </div>

        <div class="form-floating mb-1">
            <select class="form-select form-sm">
                <option value=""></option>
            </select>
            <label>Student</label>
        </div>






    </div>

<?php } ?>

<?php
if ($post == "load-edit-details-members") {

    $query = "SELECT * FROM tbl_members WHERE MD5(id) = '" . $_POST["opt"] . "';";
    $row = ExecuteRow($query);

    if ($row) {
        $fname = $row['fld_firstname'];
        $lname = $row['fld_lastname'];
        $mname = $row['fld_middlename'];
        $address = $row['fld_address'];
        $contact = $row['fld_contact'];
        $email = $row['fld_email'];
        $facebook = $row['fld_facebook'];
        $farm = $row['fld_farm'];
        $position = $row['fld_position'];
    } else {
        echo "<div class='alert alert-danger' role='alert'>
              <b>No Record Found!</b>, Try to refresh the page. 
              </div>";
        exit;
    }

?>

    <div class="<?php echo $post; ?>">
        <input type="hidden" value="<?php echo $_POST["opt"]; ?>" field="mid">
        <div class="row mb-2">
            <div class="col-4">
                <div class="form-floating">
                    <input type="text" class="form-control" placeholder="" field="firstname" required autocomplete="off" value='<?php echo $fname; ?>'>
                    <label>Firstname</label>
                </div>
            </div>

            <div class="col-4">
                <div class="form-floating">
                    <input type="text" class="form-control" placeholder="" field="lastname" required autocomplete="off" value='<?php echo $lname; ?>'>
                    <label>Lastname</label>
                </div>
            </div>

            <div class="col-2">
                <div class="form-floating">
                    <input type="text" class="form-control" placeholder="" field="middlename" required autocomplete="off" value='<?php echo $mname; ?>'>
                    <label>Middle Name</label>
                </div>
            </div>

            <div class="col-2">
                <div class="form-floating">
                    <select class="form-select" field="position">
                        <option value="1" selected>Member</option>
                    </select>
                    <label>Position</label>
                </div>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-8">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="" field="address" autocomplete="off"><?php echo $address; ?></textarea>
                    <label>Address</label>
                </div>
            </div>
            <div class="col-4">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="" field="contact" required><?php echo $contact; ?></textarea>
                    <label>Contact</label>
                </div>
            </div>

        </div>

        <div class="row mb-2">
            <div class="col-6">
                <div class="form-floating">
                    <input type="email" class="form-control" placeholder="" field="email" autocomplete="off" value='<?php echo $email; ?>'>
                    <label>E-mail</label>
                </div>
            </div>

            <div class="col-6">
                <div class="form-floating">
                    <input type="text" class="form-control" placeholder="" field="facebook" autocomplete="off" value='<?php echo $facebook; ?>'>
                    <label>Facebook</label>
                </div>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-12">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="" field="farmaddress" autocomplete="off"><?php echo $farm; ?></textarea>
                    <label>Farm Address</label>
                </div>
            </div>

        </div>

    </div>



<?php
}
?>



<!-- load-edit-details-members -->


<?php exit; ?>