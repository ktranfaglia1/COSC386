<?php
include("connection.php");

// Create OWNER table
$ownerTable = "CREATE TABLE OWNER (
    OWNER_ID int(6) NOT NULL AUTO_INCREMENT,
    OWNER_FNAME varchar(50),
    OWNER_LNAME varchar(50),
    OWNER_EMAIL varchar(100),
    OWNER_PHONE varchar(20),
    OWNER_STREET varchar(100),
    OWNER_CITY varchar(50),
    OWNER_STATE varchar(2),
    OWNER_POSTAL varchar(10),
    PRIMARY KEY(OWNER_ID)
)";
$resultOwnerTable = mysqli_query($con, $ownerTable);

// Create VEHICLE table
$vehicleTable = "CREATE TABLE VEHICLE (
    VEH_ID int(6) NOT NULL AUTO_INCREMENT,
    VEH_MAKE varchar(50),
    VEH_MODEL varchar(50),
    VEH_YEAR int(4),
    VEH_MILEAGE int(11),
    OWNER_ID int(6),
    PRIMARY KEY(VEH_ID),
    FOREIGN KEY (OWNER_ID) REFERENCES OWNER(OWNER_ID)
)";
$resultVehicleTable = mysqli_query($con, $vehicleTable);

// Create REGISTRATION table
$registrationTable = "CREATE TABLE REGISTRATION (
    REG_NUM int(6) NOT NULL,
    REG_SALEDATE DATE,
    REG_SALEPRICE DECIMAL(10,2),
    OWNER_ID int(6),
    VEH_ID int(6),
    PRIMARY KEY(REG_NUM),
    FOREIGN KEY (OWNER_ID) REFERENCES OWNER(OWNER_ID),
    FOREIGN KEY (VEH_ID) REFERENCES VEHICLE(VEH_ID)
)";
$resultRegistrationTable = mysqli_query($con, $registrationTable);

// Check if tables are created successfully
if ($resultOwnerTable && $resultVehicleTable && $resultRegistrationTable) {
    echo "Tables have been created successfully<br/>";
} else {
    echo "Error creating tables: " . mysqli_error($con);
}

mysqli_close($con);
?>