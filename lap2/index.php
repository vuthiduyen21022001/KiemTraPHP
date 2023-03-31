<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="utf-8">
        <meta charset="utf-8">
        <meta name="author" content="nguyentrongphuc" />
        <link href="/LAP2/site.css" rel="styesheet"/>
        <title>OOP PHP</title>
    </head>
    <body>
        <div id="wrapper">
        <?php
            require_once("userclass.php");

            $nguyenphuc = new User('nguyen phuc','phuc@gmail.com');
            echo "<h2>---User info--</h2>";
            echo "UserID:" .$nguyenphuc->GetUserID()."<br/>";
            echo "UserName:" .$nguyenphuc->GetUserName()."<br/>";

            $toloi = new User('to loi','loi@gmail.com');
            echo "<h2>---User info--</h2>";
            echo "UserID:" .$toloi->GetUserID()."<br/>";
            echo "UserName:" .$toloi->GetUserName()."<br/>";

            include("employeeclass.php");
            $person_a = new Person("Nguyen van a", 1234);
            echo "<h2>---Person--</h2>";
            echo "Person Name: ".$person_a->GetName()."<br/>";
            echo "Person ID: ".$person_a->GetNationalID()."<br/>";

            echo "<h2>---Employee info--</h2>";
            $employee_a = new Emloyee("Nguyen van b", 5678, "Security");
            echo "Employee ID:" .$employee_a->GetEmployeeID()."<br/>";
            echo "Employee Name:" .$employee_a->GetName()."<br/>";
            echo "Employee Department:" .$employee_a->GetDepartment()."<br/>";

            echo "<h2>---Employee info--</h2>";
            $employee_b = new Emloyee("Nguyen van c", 1325646, "Offical");
            echo "Employee ID:" .$employee_b->GetEmployeeID()."<br/>";
            echo "Employee Name:" .$employee_b->GetName()."<br/>";
            echo "Employee Department:" .$employee_b->GetDepartment()."<br/>";

        ?>
        </div>
    </body>


</html>