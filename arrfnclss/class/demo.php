<!-- <?php 
    for( $i = 0; $i < 10; $i++) {
        echo '<li>Vong lap thu '.$i.'</li>';
    }

    for($i = 0; $i < 10; $i++) {
        echo '<li> vong lap thu ' .$i.'</li>';
    }
?>

<?php for($i = 0; $i < 10; $i++) { ?>
<li>vong lap thu <?php echo $i; ?></li>
<?php }?>

<?php for($i = 0; $i < 10; $i++) : ?>
<li>vong lap thu <?php echo $i; ?></li>
<?php endfor ?> -->
<?php for($i  = 1; $i < 5; $i++){ ?>
<img src="img/<?php echo $i; ?>.jpg" alt="" width="60px">
<?php } ?>
<table border="1" cellspacing="0" cellpadding="10" />
<tr>
    <th>stt</th>
    <th>anh</th>
    <th>ten</th>
</tr>
<?php for($i = 1; $i < 6; $i++){ ?>
<tr>
    <td><?php echo $i;?></td>
    <td><img src="img/<?php echo $i; ?>.jpg" alt="" width="50"></td>
    <td>Hinh anh<?php echo $i;?></td>
</tr>
<?php } ?>
</table>