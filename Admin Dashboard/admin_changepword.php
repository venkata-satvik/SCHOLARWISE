<?php
session_start();
  
  include 'config.php';

  if(!isset($_SESSION['name'])) {
    echo "You are logged out!";
    header('location:admin_login_page.php');
  
  }

    	if($_SERVER['REQUEST_METHOD'] == "POST") {
        $current_pwd = $_POST['cpswd'];
        $new_password = $_POST['pswd'];
        $conf_new_password = $_POST['pswd1'];

        if($new_password !== $conf_new_password) {
            ?>
              <script>alert("The Confirmed passwords doesnot match!")</script>
            <?php
        }
        else {
            
            $email = $_SESSION['email'];
            // echo $email;
            // echo $current_pwd;
            // echo $new_password;

            $email_id = " select * from admin where email = '$email' ";
            $query = mysqli_query($con, $email_id);
            $email_count = mysqli_num_rows($query);

            if($email_count) {
					      $user_data = mysqli_fetch_assoc($query);;
                $db_password = $user_data['password'];

                if($db_password === $current_pwd) {
            
                    $sql = "update admin set password = '$new_password' where email = '$email' ";
                    mysqli_query($con,$sql);
                    ?>
                        <script>alert("Your password has been changed successfully!")</script>
                    <?php
                }

                else {
                  ?>
                      <script>alert("Incorrect password. Please try again!")</script>
                  <?php
                }
                
        	    
            }

        }
      }   

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CHANGE PASSWORSD</title>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <link
      rel="icon"
      type="image/x-icon"
      href="http://localhost/UP-2%20Source%20Code/Admin%20Dashboard/icons/user.png"
    />
    <link
      rel="stylesheet"
      href="http://localhost/UP-2%20Source%20Code/Admin%20Dashboard/admin_dboard.css"
      type="text/css"
    />
    <link
      href="http://localhost/UP-2%20Source%20Code/Admin%20Dashboard/pe-icon-7-stroke.css"
      rel="stylesheet"
    />
    <link
      href="http://localhost/UP-2%20Source%20Code/Admin%20Dashboard/ct-navbar.css"
      rel="stylesheet"
    />
    <link
      href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="http://localhost/UP-2%20Source%20Code/Admin%20Dashboard/Register%20Users/register_student.css" />

    <script src="http://localhost/UP-2%20Source%20Code/Admin%20Dashboard/admin_dboard.js"></script>

  </head>

  <body
    class="pt-0"
    style="
      font-family: 'Montserrat', sans-serif, Helvetica, 'Franklin Gothic Medium',
        'Arial Narrow', Arial;
    "
  >
    
    <?php include 'Register Users/admin_navbar.php' ?>

    <div
      class="container d-flex justify-content-center align-items-center mt-4"
    >
      <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
        <div class="card h-100">
          <div class="card-body">
            <h6 class="mt-3 mb-2 text-primary" style="font-size: 1.3rem">
              CHANGE PASSWORD
            </h6>
            <form actiion="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
              <br />

              <div class="form-group">
                <label for="cpwd">Current Password</label>
                <input
                  type="password"
                  class="form-control"
                  id="pw"
                  placeholder="Enter Current Password"
                  name="cpswd"
                  required
                />
                <div class="valid-feedback"></div>
              </div>

              <div class="mt-4">
                <label for="pwd">New Password</label>
                <input
                  type="password"
                  class="form-control"
                  id="pwd"
                  placeholder="Enter New Password"
                  name="pswd"
                  required
                />
                <div class="valid-feedback"></div>
              </div>

              <div class="mt-4">
                <label for="pwd">Re Type New Password</label>
                <input
                  type="password"
                  class="form-control"
                  id="pwd1"
                  placeholder="Re Type New Password"
                  name="pswd1"
                  required
                />
                <div class="valid-feedback"></div>
              </div>
              <br />
              <br />
              <button type="button" class="btn btn-secondary">Cancel</button>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
