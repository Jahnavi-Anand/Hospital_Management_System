<?php

include("../include/connection.php");


$query ="SELECT * FROM doctors ORDER BY data_reg ASC";

// Vid 10 PHP 13:47


// Goes in $output
//#1
//<table class="table table-bordered">
//     <tr>
//         <th>ID</th>
//         <th>Firstname</th>
//         <th>Surname</th>
//         <th>Username</th>
//         <th>Email</th>
//         <th>Gender</th>
//         <th>Phone</th>
//         <th>Country</th>
//         <th>Registration Date</th>
//         <th>Action</th>
//     </tr>
// </table>

//#2
// <tr>

// <td colspan='15' class="text-center">NO JOB REQUEST YET</td>

// </tr>


//#3
// <tr>
//     <td>".$row['id']."</td>    
//     <td>".$row['firstname']."</td>
//     <td>".$row['surname']."</td>
//     <td>".$row['username']."</td>
//     <td>".$row['email']."</td>
//     <td>".$row['gender']."</td>
//     <td>".$row['phone']."</td>
//     <td>".$row['country']."</td>
//     <td>".$row['data_reg']."</td>
//     <td>
//         <div class="col-md-12">
//             <div class="row">
//                 <div class="col-md-6">
//                     <button id="$row['id']." class="btn btn-success approve">Approve<button>
//                 </div>
//                 <div class="col-md-6">
//                     <button id="$row['id']." class="btn btn-danger reject">Reject<button>
//                 </div>
//             </div>

//         </div>
//     </td>
    
// </tr>



$output.="
    </tr>
    </table>
";

?>



