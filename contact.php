<!DOCTYPE html>
<html lang="en">
<head>
<meta name="Description" content="Author:Daniel Goandete">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hackers-poulette</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/style.css"> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bellota:wght@300&display=swap" rel="stylesheet">
</head>
  

<body>
    <header>
        <?php  include 'nav.php'; ?>
    </header> 

  <?php require_once 'process.php'; ?>
  <div class="container-md">
     <div class="row justify-content-center">
        <form action="" method="POST">
            <div  style="width: 50%;height: 30%;position: relative;margin-left: auto;margin-right: auto;">
                <div class="form-group mb-2"> 
                    <label class="control-label" for="name">Name:</label>
                    <input type="text" id="name" required maxlength="48"  oninput="this.value = this.value.replace(/[^a-zA-Z]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" 
                     name="name" class="form-control" value="<?php echo $name;?>" placeholder="Enter your Name"> 
                </div>
                <div class="form-group mb-2">
                    <label class="control-label" for="lastname">Lastname:</label>
                    <input type="text" id="lastname" required name="lastname" oninput="this.value = this.value.replace(/[^a-zA-Z]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');"
                     maxlength="48" class="form-control" value="<?php echo $lastname;?>" placeholder="Enter your Lastname">
                </div>
                <div class="form-group mb-2">
                    <label class="control-label"  for="gender">Gender:</label>
                    <select class="form-select" name="gender" id="gender">
                        <option  value="Male">Male</option>
                        <option  value="Female">Female</option>
                    </select>
                </div>
                <div class="form-group mb-2">
                    <label class="control-label" for="email">Email:</label><h5 id='result'></h5>
                    <input type="text" name="email" id="email" onblur="validate()" required maxlength="48" class="form-control" value="<?php echo $email;?>" placeholder="Enter your email">
                </div>
                <div class="form-group mb-2">
                    <label class="control-label" for="country">Country:</label>
                    <input type="text" id="country" maxlength="48" oninput="this.value = this.value.replace(/[^a-zA-Z]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');"
                     required  name="name" class="form-control" value="<?php echo $country;?>" placeholder="Enter your Name">
                </div>
                <div class="form-group mb-2">
                    <label class="control-label" for="subject">Subject:</label>
                    <select class="form-select" name="subject" id="subject">
                        <option value="Other">Other</option>
                        <option value="Complain">Complain</option>
                        <option value="Review">Review</option>
                    </select>
                   </div>
                <div class="form-group mb-2">
                    <label class="control-label" for="message">Enter you Message:</label>
                    <textarea class="form-control" required id="message" rows="3" value="<?php echo $message;?>"></textarea>
                </div>
                <div class="form-group mb-2">    
                    <button type="submit"  class="btn btn-primary"  name="submit">Send email</button>                          
                </div>
            </div>
        </form>
      </div>
   </div> 
   <script src="assets/script.js"></script>
</body>
</html>
