

<div class="cats">

    <h4 style="color:grey;"> Categories </h4>

    <?php
        
            include('db.php');

            $getcats = "SELECT * FROM categories";

            $runcats = mysqli_query($con,$getcats);

            while($rowcats = mysqli_fetch_array($runcats)){

                $catname = $rowcats['cat_name'];

                $catid = $rowcats['cat_id'];

                echo "
                
                <ul class='list-group'> <!---->
                    <li class='list-group-item list-group-item-action list-group-item-light'><a href='index.php?$catid'>$catname</a></li>
                </ul> <!---->
                
                ";

            }

        ?>
    
   

</div>

<div class="tags">
    
    <h4>Tags</h4>

    <ul style="color: grey;">
        <li> <a class="btn btn-outline-dark my-2 my-sm-0">#shoes</a></li>
        <li> <a class="btn btn-outline-dark my-2 my-sm-0">#clothes</a></li>
        <li> <a class="btn btn-outline-dark my-2 my-sm-0">#dressup</a></li>
        <li> <a class="btn btn-outline-dark my-2 my-sm-0">#lgfg</a></li>
    </ul>

</div>

<div class="col-auto news">
    <label class="sr-only" for="newsletter">News Letter</label>
    <div class="input-group mb-2">
        <div class="input-group-prepend">
        <div class="input-group-text"><i class="fa fa-envelope"></i></div>
        </div>
        <input type="text" class="form-control" id="newsletter" placeholder="Subscribe">
    </div>
</div>


