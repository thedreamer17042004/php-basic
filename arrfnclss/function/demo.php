<?php 
    function _cuu_chuong($number){
        $table = '<table border="1" cellspacing="0" cellpadding="10">';
        for ($i=1; $i <= 10; $i++) { 
        $table .= '<tr>';
            for ($j=1; $j <= $number; $j++) { 
                $table .= '<td>'.$j.' x '.$i.' = '.($i*$j).'</td>';
            } 
        $table .= '</tr>';
        }
        $table .= '</table>';
        echo $table;
    }
?>
_<?php _cuu_chuong(5);?>

<?php 
    function _print($strig, $in_hoa = false){
        if($in_hoa == true){
            echo strtoupper($strig); //gọi một hàm khác trong hàm
        }else{
            echo strtolower($strig); //gọi một hàm khác trong hàm
        }
        
    }
?>
<?php _print('Hoang Văn Bảo');?>
<br>
<?php _print('Hoang Văn Bảo',true);?>