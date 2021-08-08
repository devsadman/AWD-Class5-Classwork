<?php
    $info=[
       
        [
            'name'      =>  'Uzma Surwat',
            'skill'     =>  'MERN Devs',
            'age'       =>    '29',
            'gender'    =>    'Female',
            'location'  =>    'Kolkata',
            'desc'      =>  'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe, quae.',
            'img'       =>   'uzma.jpg'
        ],
        [
            'name'      =>  'Nayan Islam',
            'skill'     =>  'Python Devs',
            'age'       =>    '25',
            'gender'    =>    'Male',
            'location'  =>    'Rajshahi',
            'desc'      =>  'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe, quae.',
            'img'       =>   'nayan.jpg'
        ],
        [
            'name'      =>  'Tazmim Hossain Bondhon',
            'skill'     =>  'IOS Devs',
            'age'       =>    '24',
            'gender'    =>    'Male',
            'location'  =>    'Rangpur City',
            'desc'      =>  'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe, quae.',
            'img'       =>   'tazmim.jpg'
        ],
        [
            'name'      =>  'Tasmin Ahmed',
            'skill'     =>  'Javascript Devs',
            'gender'    =>    'Female',
            'age'       =>    '26',
            'location'  =>    'Cumilla',
            'desc'      =>  'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe, quae.',
            'img'       =>   'tasmin.jpg'
        ],
        [
            'name'      =>  'Sazia Zaman',
            'skill'     =>  'DIVI Expert',
            'age'       =>    '27',
            'gender'    =>    'Female',
            'location'  =>    'Dhaka',
            'desc'      =>  'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe, quae.',
            'img'       =>   'noData.png'
        ],
        [
            'name'      =>  'Md. Sadman Ahsan',
            'skill'     =>  'Wordpress Expert',
            'age'       =>    '25',
            'gender'    =>    'Male',
            'location'  =>    'Dhaka',
            'desc'      =>  'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe, quae.',
            'img'       =>   'sadman.jpg'
        ],
        [
            'name'      =>  'Arafat Rahman Talukder',
            'skill'     =>  'JSON Expert',
            'age'       =>    '25',
            'gender'    =>    'Male',
            'location'  =>    'Manikgonj',
            'desc'      =>  'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe, quae.',
            'img'       =>   'arafat.jpg'
        ]
        ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
    <div class="container">
    <h1 class="text-center mt-3 font-weight-bold text-danger">Team Mates</h1>
        <div class="row">
        <?php foreach ($info as $key => $value):
                 
            //if($value['gender'] == 'Male'):
            ?>
            <div class="col-md-4 mt-4">
                <div class="card shadow">
                    <img class="card-img" src="assets/img/<?php echo $value['img'] ?>" style="height: 250px;" alt="">
                    <div class="card-body">
                        <h4 class="font-weight-bold"><?php echo $value['name'] ?></h4>
                        <h6><span class="text-danger">Skill:</span> <?php echo $value['skill'] ?></h6>
                        <h6><span class="text-success">Age:</span> <?php echo $value['age'] ?></h6>
                        <h6><span class="text-info">Location:</span> <?php echo $value['location'] ?></h6>
                        <h6><span class="text-danger">Gender:</span> <?php echo $value['gender'] ?></h6>
                        <p><?php echo $value['desc'] ?></p>
                    </div>
                </div>
            </div>
            <?php  endforeach; ?>
        </div>
    </div>

    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets//js/popper.min.js"></script>
    <script src="assets//js/bootstrap.min.js"></script>
    <script>

    </script>
</body>
</html>