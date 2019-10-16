<?php
$Tickets = $Persistencia->TicketsALLTID($_REQUEST['tid']);
?>
<?php include('open-ticket-admin.php'); ?>

<?php while($RegistTicketsALL = mysqli_fetch_array($Tickets)){?>

<?php }?>