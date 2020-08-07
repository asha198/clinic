<?php
include '../assets/DBHelper.php';
$db=new DBHelper();
$rows=$db->getRows('items');
?>
<script>
    </script>
<div class="container-fluid">
    <div class="content">
        <div class="row">
            <div class="col-sm-12">
                <h1>List of Items</h1>
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-1 col-sm-offset-7">
                <label>Search</label>
            </div>
            <div class="col-sm-4 ">
                <input type="text" id="serach" class="form-control">
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-12">
                
                <table class="table table-responsive-sm">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Picture</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Price</th>
                        </tr>
                    </thead> 
                    <tbody>
                        <?php 
                            if(!empty($rows))
                            {
                                $count=0;
                                foreach ($rows as $row)
                                {
                                    $count++;
                        ?>
                        <tr>
                            <td><?php echo $count;?></td>
                            <td><img src="../images/<?php echo $row['photo']?>" height="100"></td>
                            <td><?php echo $row['itemName']?></td>
                            <td><?php echo $row['category']?></td>
                            <td><?php echo $row['price']?></td>
                        </tr>
                            <?php }} ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>