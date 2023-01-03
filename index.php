<?php
include 'top.php';
?>
    <main>
        <ul class="ulgrid">
            <li>Fresh Water Bass</li>
            <li>Sturgeon</li>
            <li>Peacock Bass</li>
            <li>Source: <cite> James Bush</cite> and <a href="https://en.wikipedia.org/wiki/Freshwater_fish" target="_blank">Wikipedia</a>
        </ul>
        <section>
        <h2 class="bassHeader">Large and Small Mouth Bass</h2>
            <table class="tableGrid">
                <caption><strong>Differences in Bass</strong></caption>
                <tr>
                    <th>Type</th>
                    <th>Climate</th>
                    <th>Avg. Weight (lbs)</th>
                    <th>Avg. Length (in)</th>
                </tr>
            <!-- table -->
            <?php
                $sql = 'SELECT fldType, fldClimate, fldWeight, fldLength FROM tblFish';
                $statement = $pdo->prepare($sql);
                $statement->execute();
                $records =  $statement->fetchAll();
                foreach ($records as $record){
                    print '<tr>';
                    print '<td>' . $record['fldType'] . '</td>';
                    print '<td>' . $record['fldClimate'] . '</td>';
                    print '<td>' . $record['fldWeight'] . '</td>';
                    print '<td>' . $record['fldLength'] . '</td>';
                    print '</tr>';
                }
            ?>
                <tr>
                    <td colspan=4><a href="https://strikeandcatch.com/how-big-do-largemouth-bass-get/#:~:text=While%20the%20average%20size%20of,trophy%20fish%20in%20most%20states." target="_blank">Source1</a> 
                    <a href="https://strikeandcatch.com/how-big-do-smallmouth-bass-get/#:~:text=While%20the%20average%20size%20of,maximum%20weight%20of%20around%2012lb.">,Source2</a> </td>
                </tr>
            </table>

        </section>
        <section class="twocolumns">
            <div class="heads">
            <h3 class="header1">Large Mouth Bass</h3>
            <figure> <img src="images2/large-mouth.png" alt="Image of Large Mouth Bass Head On">
            <figcaption>A menacing looking Large Mouth Bass, <cite>Pittsburgh Post-Gazette</cite></figcaption></figure>
            <p class="subhead1">Large Mouth Bass is a carnivorous gamefish natively found in eastern and central United States, southeastern Canada, Northern
                Mexico. They can be identified by their olive-green tops and the dark green jagged horizontal stripe along its side.
                You can find of how Large Mouth Bass catch their prey <a href="https://youtu.be/SYnI1YmjVTY" target="_blank">here.</a>  
            </p><br>
            </div>
            <div class="heads">
            <h3 class="header2">Small Mouth Bass</h3>
            <figure> <img src="images2/smallmouth-bass.png" alt="Beautiful colors of a Small Mouth">
            <figcaption>The beautiful colors of a smallie, <cite>Wikipedia</cite></figcaption></figure>
            <p class="subhead2">Small Mouth Bass, often called "Smallies" by anglers, are found in similar areas that the Large Mouth Bass would be found but
                they prefer cooler, clear waters like streams, rivers, and the bottoms of lakes and reservoirs. Small mouth have a slender but 
                muscular body making them very strong swimmers. Their green-yellow bodies are speckled with olive green spots. 
            </p><br>
            </div>
        </section>
        <section>
            <h2>Sturgeon</h2>
            <figure class="fig1"> <img src="images2/big-sturgeon.png" alt="Fisherman holding massive sturgeon" class ="img1">
            <figcaption>600 Pound Sturgeon, <cite>Unoffical Networks</cite></figcaption></figure>
            <figure class="fig1"> <img src="images2/sturgeon.png" alt="A sturgeon in the water" class ="img1">
            <figcaption>Sturgeon swimming, <cite>Getty Images</cite></figcaption></figure>

            <p>Sturgeon is an ancient fish with fossils dating back to the Late Cretaceous, and descendants going back to the Early Jurassic period, 
                around 174 to 201 million years ago. Sturgeon is native to subtropical and sub artic rivers, lakes and coastlines if Eurasia and North America.
                Their distinctive characteristics include spindle like body that smooth skinned, scales, and armored with five lateral rows of bony plates
                 call scutes. Sturgeon can grow huge, the largest recorded being 23ft and 7 in.
            </p><br>
        </section>
        <section>
            <h2>Peacock Bass</h2>
            <figure class="fig1"> <img src="images2/peacock-bass.png" alt="Peacock Bass in the water" class="img1">
            <figcaption>Peacock Bass, <cite>Reel Game</cite></figcaption></figure>
            <p>Peacock bass are native to the Amazon and Orinoco basins but have been introduced to South America and the warmer parts of 
                North America and parts of Asia. Peacock bass are olive green on top, fading to yellow in the middle, and their bottoms are 
                orange.
            </p><br>
        </section>
    </main>
    <?php
    include 'footer.php';
    ?>