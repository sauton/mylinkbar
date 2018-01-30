<pre>
    <?php //print_r($de);
    ?>
</pre>

<table class="table-hack"">
<tr>
    <?php
    echo $context->getRow();
    $arr_key = array();
    foreach ($de[0] as $row => $value) {
        ?>
        <th><?php
            $arr_key[] = $row;
            echo $row; ?></th> <?php
    }

    ?> </tr> <?php
foreach ($de as $row):
    ?>
    <tr> <?php
    foreach ($arr_key as $key):
        ?>

        <td>
            <?php
            if (is_array($row->$key)) {
                foreach ($row->$key as $value) {
                    echo $value;
                    echo '<br>';
                }
            } else {
                echo $row->$key;
            } ?>
        </td>
    <?php
    endforeach;
    ?>             </tr><?php
endforeach;
?>
</table>
