<div class="list-group">
                   <a href="" class="list-group-item list-group-item-action">Categories</a>
                   <?php $calling = $data->callingData('categories'); 
                   foreach($calling as $cat):?>
                   <a href="category_item.php?cat_id=<?= $cat['cat_id'];?>" class="list-group-item list-group-item-action"><?= $cat['cat_title'];?></a>
                   <?php endforeach; ?>
               </div>