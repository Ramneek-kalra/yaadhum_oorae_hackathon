<?php
$count_my_page = ("hitcounter.txt");
$hits = file($count_my_page);
$hits[0] ++;
$fp = fopen($count_my_page , "w");
fputs($fp , "$hits[0]");
fclose($fp); ?>
<script type="text/javascript">
    document.getElementById("count").innerHTML = "<?php echo $hits[0]; ?>";
</script>
<?php ?>