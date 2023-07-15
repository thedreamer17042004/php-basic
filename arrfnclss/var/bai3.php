<?php 
    $name = "Nguyen huy hoang";
    $age = 25;
    $email = "ndmdm@gmail.com";
    $phone = '3909033';
    $gender = 0;
    $address = 'kdkldsklsd';
    $avatar = "https://i.pravatar.cc/150?img=3"
?>

<table border="1" cellpadding="10">
    <tr>
        <td>
            Name
        </td>
        <td>
            <input type="text" value="<?php echo $name; ?>">
        </td>
    </tr>
    <tr>
        <td>
            age
        </td>
        <td>
            <input type="text" value="<?php echo $age; ?>">
        </td>
    </tr>
    <tr>
        <td>
            phone
        </td>
        <td>
            <input type="text" value="<?php echo $phone; ?>">
        </td>
    </tr>
    <tr>
        <td>
            Email
        </td>
        <td>
            <input type="text" value="<?php echo $email; ?>">
        </td>
    </tr>
    <tr>
        <td>
            Address
        </td>
        <td>
            <input type="text" value="<?php echo $address; ?>">
        </td>
    </tr>
    <tr>
        <td>
            Gender
        </td>
        <td>
            <input type="radio" name="" id="" value="<?php echo $gender; ?>">Nam
            <input type="radio" name="" id="" value="<?php echo $gender; ?>">Nu
        </td>
    </tr>
    <tr>
        <td>
            Avatar
        </td>
        <td>
            <img src="<?php echo $avatar;?>" alt="">
            <input type="file">
        </td>
        <td rowspan="2" style="text-align: center;"> <button>update</button></td>

    </tr>

    <tr>

    </tr>

</table>