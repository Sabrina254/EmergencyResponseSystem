<?php
$conn=new mysqli("localhost","root","","emergency_response");
$sql = "SELECT id_user_information, user_information_name, user_information_phone_number FROM user_information WHERE user_state is NULL";
$result = $conn->query($sql);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        $name=$row['user_information_name'];
        $id = $row['id_user_information'];
        $namep = explode(" ",$name);
        $acronym ="";
        foreach($namep as $w){
            $acronym .=$w[0];
        }
        $name= $acronym;
        echo "<li class=\"list-separated-item\">
    <div class=\"row align-items-center\">
        <div class=\"col-auto\">
            <span class=\"avatar avatar-md d-block\">".$name."</span>
        </div>
        <div class=\"col\">
            <div>
                <a href=\"javascript:void(0)\" class=\"text-inherit\">".$row['user_information_name']."</a>
            </div>
            <small class=\"d-block item-except text-sm text-muted h-1x\">".$row['user_information_phone_number']."</small>
        </div>
        <div class=\"col-auto\">
            <div class=\"item-action dropdown\">
                <a href=\"javascript:void(0)\" data-toggle=\"dropdown\" class=\"icon\"><i class=\"fe fe-more-vertical\"></i></a>
                <div class=\"dropdown-menu dropdown-menu-right\">
                    <button onclick='block(\"".$id."\")' class=\"dropdown-item\"><i class=\"dropdown-icon fe fe-slash\"></i>Block </button>
                    <button onclick='deleted(\"".$id."\")' class=\"dropdown-item\"><i class=\"dropdown-icon fe fe-trash-2\"></i> Delete </button>
                </div>
            </div>
        </div>
    </div>
</li>";
    }
}
else{
    echo "<div class='alert alert-warning'>No record of users found!</div>";
}
?>