
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Admin
                <small>Subheading</small>
            </h1>

            <?php
//            $user = new User();
//            $user->username = "student";
//            $user->password = "Emmmaisamazing";
//            $user->first_name = "Randy";
//            $user->last_name = "Listenbee";
//            $user->create();


//            $user = User::find_by_id(5);
//            $user->username = "bubblewubble";
//            $user->password= "boobles";
//            $user->first_name = "power";
//            $user->last_name = "puff";
//            $user->update();

//            $user = User::find_by_id(21);
//            $user->username = "WHATEVER";
//            $user->delete();
//
//            $user = User::find_by_id(21);
//            $user->password = "justpass";
//            $user->save();
//
//            $user = new User();
//            $user->username = "WHATEVER_20";
//            $user->save();

//              $users = User::find_all();
//              foreach ($users as $user){
//              echo $user->username . "<br>";
//              }
//            $photos = Photo::find_all();
//            foreach ($photos as $photo) {
//                echo $photo->photo_id . "<br>";
//            }
//                $photo = new Photo();
//                $photo->title = "Test_2";
//                $photo->description = "Test_2";
//                $photo->filename = "Test+2";
//                $photo->type = "jpg";
//                $photo->size = 50;
//                $photo->create();

            $photo = Photo::find_by_id(2);
            $photo->delete();
?>



            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-file"></i> Blank Page
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container-fluid -->