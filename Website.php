<html>
    <head>
        <title>Blank - Login or Sign Up</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="icon" href="Website/Images/Icon.ico" type="image/x-icon">
        <link rel="stylesheet" href="Website/CSS.css" type="text/css">
        <?php
        function input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        if (isset ($_REQUEST['bt2'])){
            $a = input($_REQUEST['fname']);
            $b = input($_REQUEST['lname']);
            $c = input($_REQUEST['email']);
            $d = input($_REQUEST['password']);
            $e = input($_REQUEST['day']);
            $f = input($_REQUEST['month']);
            $g = input($_REQUEST['year']);
            $h = input($_REQUEST['gender']);
            $j = input($_REQUEST['password1']);
            if ($h == "on"){
                $h="Male";
            }
            if ($d == $j){
                $i = "$e $f $g";
                $sname = "127.0.0.1";
                $uname = "root";
                $pswrd = "admin";
                $dbase = "website";
                $conn=mysqli_connect($sname, $uname, $pswrd, $dbase);
                if(!$conn){
                    die("There was a connection error:".mysqli_connect_error());
                }
                $sql="insert into login (fname, lname, email, password, bday, gender) values('$a', '$b', '$c', '$d', '$i', '$h');";
                if (mysqli_query($conn, $sql)){
                    echo"<script language='javascript'>alert('Registered Successfully');</script>";
                }
                else {
                    echo "The was an error:".mysqli_error($conn);
                }
                mysqli_close($conn);
            }
            else {
                echo"<script language='javascript'>alert('The passwords do not match');</script>";
            }
        }
        if (isset ($_REQUEST['bt1'])){
            $aa = input($_POST['t1']);
            $bb = input($_POST['t2']);
            $ssname = "127.0.0.1";
            $uuname = "root";
            $ppswrd = "admin";
            $ddname = "website";
            $cconn=mysqli_connect($ssname, $uuname, $ppswrd, $ddname);
            if(!$cconn){
                die("There was a connection error:".mysqli_connect_error());
            }
            $cc = array();
            $dd = $cconn->query("SELECT email FROM login");
            if($dd){
                while ($arr = $dd->fetch_assoc()) {
                    $cc[] = $arr['email'];
                }
            }
            $ff = $cconn->query("SELECT password FROM login");
            $gg=array();
            if($ff){
                while($arr = $ff->fetch_assoc()){
                    $gg[] = $arr['password'];
                }
            }
            $ee=count($cc);
            for ($i=0; $i<$ee; $i++) {
                if($aa==$cc[$i] and $bb==$gg[$i]) {
                    header("location:/Website/main.html");
                    break;
                }
                if($aa==$cc[$i] and $bb!=$gg[$i]) {
                    echo "<script language='javascript'>alert('Incorrect Password');</script>";
                    break;
                }
                if($i==($ee-1)) {
                    echo"<script language='javascript'>alert('Incorrect Email');</script>";
                }
            }
        }
        ?>
    </head>
    <body class="x">
        <form method="post" name="form1">
            <div class="x1">
                <table border="0" class="x2">
                    <tr>
                        <td><img src="Website/Images/Blank%20Logo.png" class="x3" align="left"></td>
                        <td class="x6"><input type="text" class="x11" name="t1" placeholder="Email"></td>
                        <td></td><td></td>
                        <td class="x6"><input type="password" class="x11" name="t2" placeholder="Password"></td>
                        <td class="x7"><input type="submit" class="x4" value="Log In" name="bt1" formaction="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"></td>
                    </tr>
                </table>
            </div>
            <div style="width: 60%; height: 100%; float: left;"></div>
            <div style="width: 40%; height: 100%; float: right;"><br>
                <h2>Create a Free Account</h2>
                <input type="text" class="x8" placeholder="First Name" name="fname"> &nbsp; &nbsp; &nbsp; &nbsp;
                <input type="text" class="x8" placeholder="Last Name" name="lname"><br><br>
                <input type="text" class="x9" placeholder="Email Address" name="email"><br><br>
                <input type="password" class="x9" placeholder="Password" name="password"><br><br>
                <input type="password" class="x9" placeholder="Confirm Password" name="password1"><br><br>
                <h3>Birthday</h3>
                <select class="x10" name="day"><option>Day</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option></select>
                <select class="x10" name="month"><option>Month</option><option>Jan</option><option>Feb</option><option>Mar</option><option>Apr</option><option>May</option><option>Jun</option><option>Jul</option><option>Aug</option><option>Sept</option><option>Oct</option><option>Nov</option><option>Dec</option></select>
                <select class="x10" name="year"><option>Year</option><option>1991</option><option>1992</option><option>1993</option><option>1994</option><option>1995</option><option>1996</option><option>1997</option><option>1998</option><option>1999</option><option>2000</option><option>2001</option><option>2002</option><option>2003</option><option>2004</option><option>2005</option><option>2006</option><option>2007</option><option>2008</option><option>2009</option><option>2010</option><option>2011</option><option>2012</option><option>2013</option><option>2014</option><option>2015</option><option>2016</option><option>2017</option><option>2018</option><option>2019</option></select><br><br>
                <span class="x12"><input type="radio" name="gender" value="Male">Male</span> &nbsp; &nbsp; &nbsp; &nbsp;
                <span class="x12"><input type="radio" name="gender" value="Female">Female</span>
                <br><br>
                <input type="submit" name="bt2" value="Create Account" class="x4" style="width: 120px;" formaction="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            </div>
        </form>
    </body>
</html>