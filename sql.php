<?php
include 'top.php';
?>
    <main>
        <h1>SQL</h1>
        <h2>Create Table<h2>
        <pre>
        CREATE TABLE tblFish(
            pmkFishId INT AUTO_INCREMENT PRIMARY KEY,
            fldType varchar(12),
            fldClimate varchar(10),
            fldWeight varchar(4),
            fldLength varchar(7)
        ) 
        CREATE TABLE tblFishSurvey(
            pmkFavFish int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
            fldFirstName VARCHAR(30) DEFAULT NULL,
            fldLastName VARCHAR(30) DEFAULT NULL,
            fldEmail VARCHAR(50) DEFAULT NULL,
            fldRad VARCHAR(11) DEFAULT NULL,
            fldLarge TINYINT(1) DEFAULT 0,
            fldSmall TINYINT(1) DEFAULT 0,
            fldPeacock TINYINT(1) DEFAULT 0,
            fldSturgeon TINYINT(1) DEFAULT 0
            )
        </pre>
        <h2>Insert Data</h2>
        <pre>
            INSERT INTO tblFish (fldType, fldClimate, fldWeight, fldLength) VALUES 
            ('Large Mouth', 'Mild', '1-5', '13-20'),
            ('Small Mouth', 'Mild', '1-4', '11-14'),
            ('Peacock', 'Tropical', '1-2', '11-14')

            INSERT INTO tblFishSurvey
            (pmkFavFish, fldFirstName, fldLastName, fldEmail, fldRad, fldLarge, fldSmall, fldPeacock, fldSturgeon)
            VALUES
            (1, 'James', 'Bush', 'jjbush@uvm.edu', 'Lures', 1, 0, 0, 0);
        </pre>

        <h2> Select Records</h2>
        <pre>
            SELECT fldType, fldClimate, fldWeight, fldLength FROM tblFish
        </pre>
        

    </main>
    <?php
    include 'footer.php';
    ?>