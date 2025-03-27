<html>
<body>
        <h1><?php echo $heading;?></h1>

        <h3>My Todo List: Original echo Syntax</h3>

        <ul>
        <?php foreach ($todo_list as $item):?>

                <li><?php echo $item;?></li>
        <?php endforeach;?>
        </ul>
        
        <h3>My Todo List: Alternate Syntax AKA shorter</h3>

        <ul>
        <?php foreach ($todo_list as $item):?>
            <li><?=$item?></li>
        <?php endforeach;?>
        </ul>
       
</body>
</html>