<?php 
    $name = "Nguyen Huy Hoang";
    $age = 25;
    $email = "namdeptria@gmail.com";
    $phone = 12344455;
    $address = "ha tay ha noi";
?>

<table border="1" cellpadding="2">
    <tr>
        <td>
            Name
        </td>
        <td>
            <?php echo $name; ?>
        </td>
    </tr>
    <tr>
        <td>
            Age
        </td>
        <td>
            <?php echo $age; ?>
        </td>
    </tr>
    <tr>
        <td>
            Phone
        </td>
        <td>
            <?php echo $phone; ?>
        </td>
    </tr>
    <tr>
        <td>
            Email
        </td>
        <td>
            <?php echo $email; ?>
        </td>
    </tr>
    <tr>
        <td>
            Address
        </td>
        <td>
            <?php echo $address; ?>
        </td>
    </tr>
</table>