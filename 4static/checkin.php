<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>
<?php
class man{
    
    public      $name;
    private     $salary;
    protected     $wife;
    public function __construct ($ts_name,$ts_salary,$ts_wife){
        $this->name = $ts_name;
        $this->salary = $ts_salary;
        $this->wife = $ts_wife;

    }
    public function getsalary(){
        return $this->salary;
    }
    public function getwife(){
        return $this->wife;
    }


}
$phi = new man('phi',200000,'có');
 echo $phi->name;
 echo ' ';
 echo $phi->getsalary();
 echo ' ';

 echo $phi->getwife();



?>

</html>