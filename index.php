<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style>
        h2 {
            text-align: center;
            margin-bottom: 50px;
        }

        h3 {
            text-align: center;
        }

        form {
            width: 300px;
            margin: 0 auto;
        }

        input {
            display: block;
            margin: 0 auto;
            width: 80%;
            font-size: 14px;
        }

        label {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            margin-bottom: 30px;
            position: relative;
        }

        label span {
            position: absolute;
            top: 0;
            left: 0px;
            color: red;
        }

        label .error {
            margin: 0 auto;
            margin-top: 5px;
            width: 80%;
            font-size: 12px;
            color: red;
        }
    </style>
</head>

<body>
    <h2>რეგისტრაცია</h2>
    <?php if (!isset($submissionSuccess)) { ?>
        <form action="add-user.php" class="form" method="post">
            <label>
                <input type="text" name="FirstName" placeholder="სახელი" value = "<?php echo (isset($FirstName)) ? $FirstName : ''; ?>">
                <span class="error">*</span>
                <?php if (isset($FirstNameError)) { ?>
                    <div class="error"><?php echo $FirstNameError ?></div>
                <?php } ?>
            </label>
            <label>
                <input type="text" name="LastName" placeholder="გვარი" value = "<?php echo (isset($LastName)) ? $LastName : ''; ?>">
                <span>*</span>
                <?php if (isset($LastNameError)) { ?>
                    <div class="error"><?php echo $LastNameError ?></div>
                <?php } ?>
            </label>
            <label>
                <input type="text" name="PersonalNumber" placeholder="პირადი ნომერი" value = "<?php echo (isset($PersonalNumber)) ? $PersonalNumber : ''; ?>">
                <span>*</span>
                <?php if (isset($PersonalNumberError)) { ?>
                    <div class="error"><?php echo $PersonalNumberError ?></div>
                <?php } ?>
            </label>
            <label>
                <input type="text" name="Email" placeholder="მეილი" value = "<?php echo (isset($Email)) ? $Email : ''; ?>">
                <span>*</span>
                <?php if (isset($EmailError)) { ?>
                    <div class="error"><?php echo $EmailError ?></div>
                <?php } ?>
            </label>
            <label>
                <input type="password" name="Password" placeholder="პაროლი">
                <span>*</span>
                <?php if (isset($PasswordError)) { ?>
                    <div class="error"><?php echo $PasswordError ?></div>
                <?php } ?>
            </label>
            <label>
                <input type="text" name="StatusId" placeholder="სტატუს აიდი" value = "<?php echo (isset($StatusId)) ? $StatusId : ''; ?>">
                <span>*</span>
                <?php if (isset($StatusIdError)) { ?>
                    <div class="error"><?php echo $StatusIdError ?></div>
                <?php } ?>
            </label>
            <input type="submit" value="submit">
        </form>
    <?php } else { ?>
        <h3>იუზერი დარეგისტრირებულია</h3>
    <?php } ?>
</body>


</html>
