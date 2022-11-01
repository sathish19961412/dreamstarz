<?php
include 'DBController.php';
$db_handle = new DBController();
$countryResult = $db_handle->runQuery("SELECT DISTINCT specialization FROM registeration ORDER BY specialization ASC");
?>
<html>
<head>
<link href="style.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<title>Multiselect Dropdown Filter</title>
</head>
<body class="text-center">
    <h2 class="text-center text-primary">Multiselect Dropdown Filter</h2>
    <form method="POST" name="search" action="artist1.php">
        <div id="demo-grid">
            <div class="search-box">
                <select id="Place" name="specialization[]" multiple="multiple" class="bg-primary text-white">
                    <option value="1" selected="selected" class="bg-primary text-white">Select Country</option>
                        <?php
                        if (! empty($countryResult)) {
                            foreach ($countryResult as $key => $value) {
                              
                                echo '<option value="' . $countryResult[$key]['specialization'] . '">' 
                                . $countryResult[$key]['specialization'] . 
                                '</option>';
                            }
                        }
                        ?>
                </select><br><br>
                <button id="Filter">Search</button>
            </div>
            
                <?php
                if (! empty($_POST['specialization'])) {
                    ?>
                    <table cellpadding="10" cellspacing="1" class="table table-borderd border-primary">

                <thead class="bg-danger text-white">
                    <tr>
                        <th><strong>Artistname</strong></th>
                        <th><strong>Age</strong></th>
                        <th><strong>Specialization</strong></th>
                        <th><strong>Experiance</strong></th>
                        <th><strong>Place</strong></th>
                        <th><strong>Mobile</strong></strong></th>
                        <th><strong>Photo</strong></th>
                    </tr>
                </thead>
                <tbody class="bg-primary text-white">
                <?php
                    $query = "SELECT * from registeration";
                    $i = 0;
                    $selectedOptionCount = count($_POST['specialization']);
                    $selectedOption = "";
                    while ($i < $selectedOptionCount) {
                        $selectedOption = $selectedOption . "'" . $_POST['specialization'][$i] . "'";
                        if ($i < $selectedOptionCount - 1) {
                            $selectedOption = $selectedOption . ", ";
                        }
                        
                        $i ++;
                    }
                    $query = $query . " WHERE specialization in (" . $selectedOption . ")";
                    
                    $result = $db_handle->runQuery($query);
                }
                if (! empty($result)) {
                    foreach ($result as $key => $value) {
                        ?>
                <tr>
                        <td><div class="col" id="user_data_1"><?php echo $result[$key]['artistname']; ?></div></td>
                        <td><div class="col" id="user_data_2"><?php echo $result[$key]['age']; ?> </div></td>
                        <td><div class="col" id="user_data_3"><?php echo $result[$key]['specialization']; ?> </div></td>
                        <td><div class="col" id="user_data_1"><?php echo $result[$key]['experiance']; ?></div></td>
                        <td><div class="col" id="user_data_2"><?php echo $result[$key]['place']; ?> </div></td>
                        <td><div class="col" id="user_data_3"><?php echo $result[$key]['mobile']; ?> </div></td>
                        <td><div class="col" id="user_data_1"><?php echo $result[$key]['photo']; ?></div></td>
                    </tr>
                <?php
                    }
                    ?>
                </tbody>
            </table>
            <?php
                }
                ?>  
        </div>
    </form>
</body>
</html>