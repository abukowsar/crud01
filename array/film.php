<html>
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<?php

$films = array(

    array(
        'title' => "Funny Movie 3",
        'genre' => "comedy",
        'stars' => array('leading actress',
                         'leading actor',
                          'expendable dude',
                           'somebody else')

                           ));
    ?>


<table align="center" width="90%" class="table table-condensed">
    <thead>
    <th>Title</th><th>Genrel</th><th>Stars</th>
    </thead>

    <?php

    foreach ($films as $displaydata){
        ?>
        <tr>


            <td class="active"><?php echo $displaydata['title']; ?> </td>
            <td class="success"><?php echo $displaydata['genre']; ?></td>
            <td class="warning"><?php foreach ($displaydata['stars'] as $allstars){
                ?>
                <ul class="list-group">
                    <li ><?php echo $allstars;
                        } ?>
                    </li>
                </ul>
            </td>

        </tr>
    <?php
    }

    ?>


</table>
</body>

</html>

