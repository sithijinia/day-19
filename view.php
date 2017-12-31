<?php
//
//$result = [];
//$result['word_length']='';
//$result['string_length']='';


require_once 'vendor/autoload.php';


use App\classes\Student;
 Student::addition();

//
//if(isset($_POST['btn'])){
//
//    $demo= new App\classes\ Demo();
//    $result = $demo->wordCharacterCount($_POST);
//}
use App\classes\Demo;
if (isset($_POST['btn'])){
    $result = Demo:: wordCharacterCount($_POST);
}


?>
<form action=" " method="post">
    <table>
    <tr>
        <th>Enter Your String:</th>
        <td>
            <input type="text" name="given_string" size="50">
        </td>

    </tr>
    <tr>
        <th>Total Number of Word:</th>
        <td>
            <input type="text" value="<?php echo $result['word_length']?>">
        </td>
    </tr>
        <tr>
            <th>Total Number of Character:</th>
            <td>
                <input type="text" value="<?php echo $result['string_length']?>">
            </td>
        </tr>
        <tr>
            <th></th>
            <td>
                <input type="submit" value="Submit" name="btn">
            </td>
        </tr>
    </table>
</form>
