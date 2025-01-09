<?php

include "../../db.php";
$no = 1 ;

if(isset($_POST['input'])){
    $input = $_POST["input"];
    $input1= array("camry", "corolla", "lexus", "pilot");
    $query= "SELECT* FROM emmako_brands WHERE product_name LIKE '{$input}%' OR product_brand LIKE '{$input}%' OR product_model LIKE '{$input}%' OR product_category LIKE '{$input}%' ";
    $list1= mysqli_query ($me, $query);

    if(mysqli_num_rows($list1) >0){ ?>
        
      <table id="searchresult" style="border: none; !important">
                    <tr>
                        <th>s/n</th>
                        <th>customer name</th>
                        <th>product name</th>
                        <th>item category</th>
                        <th>image</th>
                        <th>price</th>
                        <th>date</th>
                        <th>trans ID</th>
                        <th>trans status</th>
                        <th>action</th>
                    </tr>
                    <tr>
<?php  while ($list2 = mysqli_fetch_array($list1)){  ?>

                        <td><?php echo $no  ?></td>
                        <td>tochukwu kalu</td>
                        <td><?php echo $list2['product_name']  ?></td>
                        <td><?php echo $list2['product_category']  ?></td>
                        <td><img src="../../images/<?php echo $list2['product_image'] ?>" alt="bigdady"></td>
                        <td><?php echo $list2['product_price'] ?></td>
                        <td><?php echo $list2['time']  ?></td>
                        <td>emmako1111</td>
                        <td>complete</td>
                        <td> <div class="act"><a class="edit" href="edit-product.php?edit=<?php echo $list2['id']  ?>">Edit</a> <a class="delete" href="records.php?delete=<?php  echo $list2['id']  ?>">delete</a></div></td>
                    </tr>
<?php $no++ ;  }  ?>
                </table> 

<?php    }else {
        echo "no data found";
    }
}

?>