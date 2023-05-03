<?php
    if(isset($_POST['submit'])){
        $rents=$rent+$_POST['rent'];
        $groceriess=$groceries+$_POST['groceries'];
        $educations=$education+$_POST['education'];
        $electricitys=$electricity+$_POST['electricity'];
        $clothess=$clothes+$_POST['clothes'];
        $personals=$personal+$_POST['personal'];
        $gass=$gas+$_POST['gas'];
        $medicals=$medical+$_POST['medical'];
        $insurances=$insurance+$_POST['insurance'];
        $transports=$transport+$_POST['transport'];
        $incomes=$_POST['income'];
        $conn=mysqli_connect("localhost","root","","expense");
        $querys="UPDATE expenses SET rent='$rents',groceries='$groceriess',education='$educations',electricity='$electricitys',clothes='$clothess',personal='$personals',gas='$gass',medical='$medicals',insurance='$insurances',transport='$transports',income='$income+$incomes' WHERE id='$id'";
        $runs=mysqli_query($conn,$querys);
    
        if($runs){
            echo "<script>window.location.href=window.location.href</script>";
        }
    
    }
?>