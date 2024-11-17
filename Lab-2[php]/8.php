<html>
<head>
    <title> 2D ARRAY & NESTED LOOP </title>
</head>
<body>
    <table border="1">
        <tr>
            <td> <?php print("The array to declare") ?></td>
            <td> <?php print("Shapes to print") ?></td>
        </tr>
        <tr>
            <td>
                 <?php

                $array = [[1,2,3,'A'],
                            [1,2,'B','C'],
                            [1,'D','E','F']];

                foreach($array as $row)
                {
                    foreach($row as $ele)
                    {
                        print($ele." ");
                    }
                    print("<br>");
                }
                
                ?>

            </td>
            <td>
            <table>
                        <tr>
                            <td> 
                                <?php
                                    print("<br>");

                                    for($i=3; $i>0; $i--)
                                    {
                                        for($j=1; $j<=$i; $j++)
                                        {
                                            print($j." ");
                                        }
                                        print("<br>");
                                    }
                                ?>
                             </td>
                             <td>&nbsp; </td>

                            <td> 
                                <?php
                                    print("<br>");
                                    $letter="A";
                    
                                    for($i=1; $i<=3; $i++)
                                    {
                                        for($j=1; $j<=$i; $j++)
                                        {
                                            print($letter." ");
                                            $letter++;
                                        }
                                        print("<br>");
                                    }
                                ?>
                            </td>
                        </tr>
                
                </table>
            </td>

        </tr>

    </table>
    


</body>
</html>

