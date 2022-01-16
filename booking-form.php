<?php

$trip = NULL;
foreach($_REQUEST['trip'] as $selected_trip){
$trip .= $selected_trip . " - ";
}
$trip = rtrim($trip, ' - ');


$to = "reservations@swissinnhotelcairo.com";
$cc = "";
$bcc = "";
$subject = "Booking Request";
$msg = "

<table style='border-collapse:collapse;width:100%;border:none;font-family:Arial,sans-serif;'>
<tbody>

<tr>
<td style='line-height:60px;text-align:center;' colspan='3'><strong>Booking Request</strong></td>
</tr>

<tr style='line-height:40px;vertical-align:top;border-top:1px solid #000;'>
<td style='width:160px;'><strong>Accommodation Type</strong></td>
<td style='width:20px;'><strong>:</strong></td>
<td style='width:calc(100% - 180px);'>".$_REQUEST['formbookingtypeaccomm']."</td>
</tr>

<tr style='line-height:40px;vertical-align:top;border-top:1px solid #000;'>
<td style='width:160px;'><strong>Check in & out</strong></td>
<td style='width:20px;'><strong>:</strong></td>
<td style='width:calc(100% - 180px);'>".$_REQUEST['formbookingduration']."</td>
</tr>

<tr style='line-height:40px;vertical-align:top;border-top:1px solid #000;'>
<td style='width:160px;'><strong>Adults</strong></td>
<td style='width:20px;'><strong>:</strong></td>
<td style='width:calc(100% - 180px);'>".$_REQUEST['formbookingadults']."</td>
</tr>

<tr style='line-height:40px;vertical-align:top;border-top:1px solid #000;'>
<td style='width:160px;'><strong>Children</strong></td>
<td style='width:20px;'><strong>:</strong></td>
<td style='width:calc(100% - 180px);'>".$_REQUEST['formbookingchildren']."</td>
</tr>

<tr style='line-height:40px;vertical-align:top;border-top:1px solid #000;'>
<td style='width:160px;'><strong>Airport Transfers</strong></td>
<td style='width:20px;'><strong>:</strong></td>
<td style='width:calc(100% - 180px);'>".$_REQUEST['formbookingtransfer']."</td>
</tr>

<tr style='line-height:40px;vertical-align:top;border-top:1px solid #000;'>
<td style='width:160px;'><strong>Daily Trips</strong></td>
<td style='width:20px;'><strong>:</strong></td>
<td style='width:calc(100% - 180px);'>".$trip."</td>
</tr>

<tr style='line-height:40px;vertical-align:top;border-top:1px solid #000;'>
<td style='width:160px;'><strong>First Name</strong></td>
<td style='width:20px;'><strong>:</strong></td>
<td style='width:calc(100% - 180px);'>".$_REQUEST['formbookingtype'].". ".$_REQUEST['formbookingfirstname']."</td>
</tr>

<tr style='line-height:40px;vertical-align:top;border-top:1px solid #000;'>
<td style='width:160px;'><strong>Last Name</strong></td>
<td style='width:20px;'><strong>:</strong></td>
<td style='width:calc(100% - 180px);'>".$_REQUEST['formbookinglastname']."</td>
</tr>

<tr style='line-height:40px;vertical-align:top;border-top:1px solid #000;'>
<td style='width:160px;'><strong>Email</strong></td>
<td style='width:20px;'><strong>:</strong></td>
<td style='width:calc(100% - 180px);'>".$_REQUEST['formbookingemail']."</td>
</tr>

<tr style='line-height:40px;vertical-align:top;border-top:1px solid #000;'>
<td style='width:160px;'><strong>Phone</strong></td>
<td style='width:20px;'><strong>:</strong></td>
<td style='width:calc(100% - 180px);'>".$_REQUEST['formbookingphone']."</td>
</tr>

<tr style='line-height:40px;vertical-align:top;border-top:1px solid #000;'>
<td style='width:160px;'><strong>Country</strong></td>
<td style='width:20px;'><strong>:</strong></td>
<td style='width:calc(100% - 180px);'>".$_REQUEST['formbookingcountry']."</td>
</tr>

<tr style='line-height:40px;vertical-align:top;border-top:1px solid #000;'>
<td style='width:160px;'><strong>Message</strong></td>
<td style='width:20px;'><strong>:</strong></td>
<td style='width:calc(100% - 180px);'>".$_REQUEST['formbookingmassage']."</td>
</tr>

</tbody>
</table>

";

$from = "From: ".$_REQUEST['formbookingfirstname']." ".$_REQUEST['formbookinglastname']." <".$_REQUEST['formbookingemail'].">";
$html = "Content-Type: text/html; charset=UTF-8";
$headers = $html."\r\n".$from."\r\n".$cc."\r\n".$bcc."\r\n";

mail($to, $subject, $msg, $headers);

?>