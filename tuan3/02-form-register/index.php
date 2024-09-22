<!DOCTYPE html>
<html lang="en">

<head>
   <?php require_once"head.php"?>
</head>

<body>
    <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Registration Info</h2>
                    <form method="POST">
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="gender">
                                    <option disabled="disabled" selected="selected">Gender</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Other</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="job">
                                    <option disabled="disabled" selected="selected">jOb</option>
                                    <option>IT</option>
                                    <option>Police</option>
                                    <option>Army</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="input-group">
                             <input class="input--style-2" type="text" placeholder="Name" name="name">
                        </div>
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="Age" name="age">
                       </div>
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="Email" name="email">
                        </div>
                        <div class="p-t-30">
                            <button class="btn btn--radius btn--green" type="submit">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

 <?php require_once"script.php"?>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
<!-- end document-->