<!DOCTYPE html>
<html>
<head>
    <style>
        div {
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            
        }

        th, td {
            border: 1px solid black;
            text-align: center;
            padding: 8px;
            
        }

        th {
          
        }
    </style>
</head>
<body>   

    <table>
        <thead>
            <tr>
                <th></th>
                <?php for ($i = 1; $i <= 10; $i++) { ?>
                    <th><?php echo $i; ?></th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php for ($i = 1; $i <= 10; $i++) { ?>
                <tr>
                    <th><?php echo $i; ?></th>
                    <?php for ($j = 1; $j <= 10; $j++) { ?>
                        <td><?php echo $i * $j; ?></td>
                    <?php } ?>
                </tr>
            <?php   } ?>
        </tbody>
    </table>   
</body>
</html>
<!-- Kaisser Aldwyn Bigornia -->