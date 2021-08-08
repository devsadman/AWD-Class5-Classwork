<?php
        $info =[

            [
                'name'      =>      'Sadman Ahsan',
                'skill'     =>      'Laravel Developer',
                'age'       =>       25,
                'location'  =>       'Dhaka',
                'desc'      =>      'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, doloribus?',
                'img'       =>      'sadman.jpg'
            ],
            [
                'name'      =>      'Adnan Ahsan',
                'skill'     =>      'Wordpress Developer',
                'age'       =>       21,
                'location'  =>       'Chottogram',
                'desc'      =>      'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, doloribus?',
                'img'       =>      'sadman.jpg'
            ],
            [
                'name'      =>      'Hannan Sarker',
                'skill'     =>      'DIVI Developer',
                'age'       =>       24,
                'location'  =>       'Dhaka',
                'desc'      =>      'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, doloribus?',
                'img'       =>      'sadman.jpg'
            ],
            [
                'name'      =>      'Rajin Saleh',
                'skill'     =>      'PHP Developer',
                'age'       =>       29,
                'location'  =>       'Sylhet',
                'desc'      =>      'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, doloribus?',
                'img'       =>      'sadman.jpg'
            ],
            [
                'name'      =>      'Javed Omer Belim',
                'skill'     =>      'MERN Developer',
                'age'       =>       27,
                'location'  =>       'Khulna',
                'desc'      =>      'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, doloribus?',
                'img'       =>      'sadman.jpg'
            ],
            [
                'name'      =>      'Mehrab Hossain Opi',
                'skill'     =>      'Dev Ops Developer',
                'age'       =>       24,
                'location'  =>       'Barishal',
                'desc'      =>      'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, doloribus?',
                'img'       =>      'sadman.jpg'
            ],
            ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>

        <div class="container">
            <div class="row">
                <?php foreach($info as $value): ?>
                <div class="col-md-4 mt-3">
                    <div class="card shadow">
                        <img style="height: 250px;" class="img-fluid img-card" src="assets/img/<?php echo $value['img']; ?>"  alt="">
                        <div class="card-body">
                            <h4><?php echo $value['name'] ?></h4>
                            <h6><?php echo $value['skill'] ?></h6>
                            <h6>Age: <?php echo $value['age'] ?></h6>
                            <h6>Location: <?php echo $value['location'] ?></h6>
                            <p><?php echo $value['desc'] ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets//js/popper.min.js"></script>
    <script src="assets//js/bootstrap.min.js"></script>
    <script>

    </script>
</body>
</html>