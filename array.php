<?php
include 'top.php';
//$count = 0;
$bigFishs = array(
    array('Giant Freshwater Stingray', '1,322.77 pounds', 'Thailand, Australia, Cambodia, Indonesia'),
    array('Mekong Giant Catfish', '645 pounds', 'Thailand, Vietnam, Maynmar, Cambodia'),
    array('Giant Siamese Carp', '440 pounds', 'Thailand, Cambodia, Laos, Vietnam'),
    array('Salween Rita Catfish','308.85 pounds', 'Thailand'),
    array('Discus Ray', '250 pounds', 'South America')
);
?>
    <main>
        <section>
        <h2>The Largest Freshwater Fish</h2>
        </section>
        <section>
            <h3>Background</h3>
            <p>There are many species of freshwater fish that you probably have never heard of that are unimaginably large. 
                Lots of these fish come from Asia and South America but have been introduced to other areas and can found around 
                the world. Most of these fish are very endangered and need to be protected. Due to overfishing and destruction 
                natural habitats, lots of once thriving populations of incredible fish are dwindling towards extinction.  Humans 
                must make a stronger effort to protect natural areas and to ensure the survival of some amazing fish species 
                around the world. Anglers also must follow local fishing guidelines like hook size and type and practicing leave 
                no trace. 
            </p>
        </section>
        <section>
            <h3>Species</h3>
            <p>The largest species of freshwater fish found around the world are catfish, freshwater rays, and carp. Among each
                 of these species are many different types of fish that can grow to hundreds of pounds. For example, there are 
                 4 different types of catfish that have been caught and recorded over 150+ pounds. For freshwater rays, there are 
                 only two notably large types, the Giant Freshwater Stingray, and the Discus Ray. Lots of carp to grow to admirable
                  sizes but some of the largest types of carp are the Giant Siamese Carp and the Common carp (which can be found in
                   the US!). Below are some the largest freshwater fish recorded.
            </p>
        </section>
        <section>
            <h3>Last Biggest <?php echo count($bigFishs); ?> Freshwater Fish</h3>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Weight</th>
                    <th>Location</th>
                </tr>
                <?php
                foreach($bigFishs as $fish){
                    print '<tr>';
                    print '<td>' . $fish[0] . '</td>';
                    print '<td>' . $fish[1] . '</td>';
                    print '<td>' . $fish[2] . '</td>';
                    print '</tr>';
                }
                ?>
            </table>
                <p><a href = "https://www.fieldandstream.com/story/fishing/giant-freshwater-fish-that-youve-probably-never-heard-of-before/">
                    Source</a>
                </p>
        </section>
    </main>
<?php
    include 'footer.php';
?>
